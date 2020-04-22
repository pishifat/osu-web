<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'defaults' => [
        'page_description' => 'osu! - ритм гра лише в *клікові* від вас. Разом з Ouendan/EBA, Taiko та оригінальними ігровими режимами, а також повноцінним редактором рівнів.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'набор карт',
            'beatmapset_covers' => 'обкладинки наборів карт',
            'contest' => 'конкурс',
            'contests' => 'конкурси',
            'root' => 'панель управління',
            'store_orders' => 'адмін магазину',
        ],

        'artists' => [
            'index' => 'список',
        ],

        'changelog' => [
            'index' => 'список',
        ],

        'help' => [
            'index' => 'зміст',
            'sitemap' => '',
        ],

        'store' => [
            'cart' => '',
            'orders' => '',
            'products' => '',
        ],

        'tournaments' => [
            'index' => '',
        ],

        'users' => [
            'modding' => '',
            'show' => '',
        ],
    ],

    'gallery' => [
        'close' => '',
        'fullscreen' => '',
        'zoom' => '',
        'previous' => '',
        'next' => '',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'біткарти',
            'artists' => 'вибрані виконавці',
            'index' => 'бібліотека',
            'packs' => 'набори',
        ],
        'community' => [
            '_' => 'спільнота',
            'chat' => 'чат',
            'contests' => 'конкурси',
            'dev' => 'розробка',
            'forum-forums-index' => 'форуми',
            'getLive' => 'наживо',
            'tournaments' => 'турніри',
        ],
        'help' => [
            '_' => 'допомога',
            'getFaq' => 'чапи',
            'getRules' => 'правила',
            'getSupport' => 'мені, насправді, потрібна допомога!',
            'getWiki' => 'wiki',
        ],
        'home' => [
            '_' => 'головна',
            'changelog-index' => 'список змін',
            'getDownload' => 'завантажити',
            'news-index' => 'новини',
            'search' => 'пошук',
            'team' => 'команда',
        ],
        'rankings' => [
            '_' => 'рейтинги',
            'charts' => 'по графіках',
            'country' => 'країна',
            'index' => 'по продуктивності',
            'kudosu' => 'кудосу',
            'score' => 'рахунок',
        ],
        'store' => [
            '_' => 'крамниця',
            'cart-show' => 'кошик',
            'getListing' => 'товари',
            'orders-index' => 'історія замовлень',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Загальні',
            'home' => 'Головна',
            'changelog-index' => 'Список змін',
            'beatmaps' => 'Бібліотека карт',
            'download' => 'Завантажити osu!',
        ],
        'help' => [
            '_' => 'Допомога і спільнота',
            'faq' => 'Найчастіші питання',
            'forum' => 'Форуми спільноти',
            'livestreams' => 'Прямі трансляції',
            'report' => 'Повідомити про проблему',
            'wiki' => '',
        ],
        'legal' => [
            '_' => 'Права і статус',
            'copyright' => 'Авторські права (DMCA)',
            'privacy' => 'Політика конфіденційності',
            'server_status' => 'Статус серверів',
            'source_code' => 'Початковий програмний код',
            'terms' => 'Умови використання',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => '',
            'description' => '',
        ],
        '404' => [
            'error' => 'Сторінка відсутня',
            'description' => "Вибачте, але запитана сторінка відсутня!",
        ],
        '403' => [
            'error' => "Ви не повинні тут бути.",
            'description' => 'Ви можете спробувати повернутися назад, напевно.',
        ],
        '401' => [
            'error' => "Ви не повинні тут бути.",
            'description' => 'Ви можете спробувати повернутися назад, напевно. Або може увійти.',
        ],
        '405' => [
            'error' => 'Сторінка відсутня',
            'description' => "Вибачте, але запитана сторінка відсутня!",
        ],
        '422' => [
            'error' => '',
            'description' => '',
        ],
        '500' => [
            'error' => 'Ох, горе! Щось зламалося! ;_;',
            'description' => "Про помилку буде сповіщено.",
        ],
        'fatal' => [
            'error' => 'Ох, горе! Щось жахливо зламалося! ;_;',
            'description' => "Про помилку буде сповіщено.",
        ],
        '503' => [
            'error' => 'Закрито на технічне обслуговування!',
            'description' => "Технічне обслуговування зазвичай займає від 5 секунд до 10 хвилин. Якщо воно затягується, перейдіть :link для отримання додаткової інформації.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "Про всяк випадок, ось код, який ви можете повідомити службі підтримки!",
    ],

    'popup_login' => [
        'login' => [
            'forgot' => "Я все забув",
            'password' => 'пароль',
            'title' => 'Увійдіть, щоб продовжити',
            'username' => '',

            'error' => [
                'email' => "Ім'я користувача або електронна адреса невірна",
                'password' => 'Хибний пароль',
            ],
        ],

        'register' => [
            'download' => '',
            'info' => 'Пане, Вам потрібний аккаунт. Чому Ви досі його не маєте?',
            'title' => "Немаєте аккаунту?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Налаштування',
            'friends' => 'Друзі',
            'logout' => 'Вийти',
            'profile' => 'Мій профайл',
        ],
    ],

    'popup_search' => [
        'initial' => 'Введіть текст для пошуку!',
        'retry' => 'Невдалий пошук. Натисніть щоб повторити.',
    ],
];
