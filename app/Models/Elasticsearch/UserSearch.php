<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Models\Elasticsearch;

use App\Libraries\Elasticsearch\Search;

trait UserSearch
{
    public static function search($rawParams)
    {
        $max = config('osu.search.max.user');

        $params = [];
        $params['query'] = presence($rawParams['query'] ?? null);
        $params['limit'] = clamp(get_int($rawParams['limit'] ?? null) ?? static::SEARCH_DEFAULTS['limit'], 1, 50);
        $params['page'] = max(1, get_int($rawParams['page'] ?? 1));
        $size = $params['limit'];
        $from = ($params['page'] - 1) * $size;

        $results = static::searchUsername($params['query'], $from, $size);

        $total = $results['hits']['total'];
        $data = es_records($results, get_called_class());

        return [
            'total' => min($total, 10000), // FIXME: apply the cap somewhere more sensible?
            'over_limit' => $total > $max,
            'data' => $data,
            'params' => $params,
        ];
    }

    public static function searchUsername(string $username, $from, $size)
    {
        return es_search([
            'index' => static::esIndexName(),
            'from' => $from,
            'size' => $size,
            'body' => [
                'query' => static::usernameSearchQuery($username ?? ''),
            ],
        ]);
    }

    public static function usernameSearchQuery(string $username)
    {
        static $lowercase_stick = [
            'analyzer' => 'username_lower',
            'type' => 'most_fields',
            'fields' => ['username', 'username._*'],
        ];

        static $whitespace_stick = [
            'analyzer' => 'whitespace',
            'type' => 'most_fields',
            'fields' => ['username', 'username._*'],
        ];

        return [
            'bool' => [
                'should' => [
                    ['match' => ['username.raw' => ['query' => $username, 'boost' => 5]]],
                    ['multi_match' => array_merge(['query' => $username], $lowercase_stick)],
                    ['multi_match' => array_merge(['query' => $username], $whitespace_stick)],
                    ['match_phrase' => ['username._slop' => $username]],
                ],
                'must_not' => [
                    ['term' => ['is_old' => true]],
                ],
                'filter' => [
                    ['term' => ['user_warnings' => 0]],
                    ['term' => ['user_type' => 0]],
                ],
            ],
        ];
    }
}
