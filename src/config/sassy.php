<?php

return [
    'admin' => 'sassy',
    'tables' => [
        //  'Model' => 'table_name'
        //  Best not to alter these unless you know what you are doing :)
        'Page' => 'pages',
        'Post' => 'posts',
        'Section' => 'sections'
    ],
    'json' => '{
        "name": "Tests",
        "links": {
            "control": "List",
            "data": [
                {
                    "label": "HOME",
                    "href": "/"
                },
                {
                    "label": "ADMIN",
                    "href": "/admin"
                }
            ]
        }
    }',
    'blocks' => []
];
