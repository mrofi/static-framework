<?php

$viewFolder = __DIR__.'/../views';

$appDatas = [

    'appName' => 'My WebApp',
    'appNameFormarted' => '<strong>My</strong> WebApp',

];

$routes = [

    '/'         => function ($uri) {
                        $data = [
                            'title' => 'Home',
                            'content' => '<h3>This is Homepage</h3>',
                        ];
                        return view('layout', $data);
                   },

    /**
     * By default, you only add the view file in views folder
     * example, we have dashboard.php file in folder view
     * automatically, we can access it by url : http://mywebapp/dashboard
     * or you can define it to make it clear
     */

    // 'dashboard'     => 'dashboard',

    'pages/another-page' => 'another.page',

    /**
     * For above uri, we only need a view file, named with : pages.another-page
     * but in this case I want another name, so I defined what my desired name
     */
];


// Load Static Framework File
$bootstrap = require __DIR__.'/../static-framework.php';
return $bootstrap($viewFolder, $routes, $appDatas);
