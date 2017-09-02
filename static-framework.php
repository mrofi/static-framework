<?php

// Don't change this code unlesh you know how to
/**
 * Static Framework - It's not a PHP Framework
 * Just simple helper to create static page website
 * Require PHP 7.0 or more
 *
 * (c) 2017
 * MIT License
 * Created by Mokhamad Rofiudin
 * Visit my Github Page : https://github.com/mrofi
 * 
 */

/**
* 
*/
class StaticFramework
{
    public static $viewFolder = __DIR__.'/../views';
    public static $routes = [];
    public static $appDatas = [];
    public static $cachedTranslations = [];

    public function __construct($viewFolder, $routes, array $appDatas = [], array $translations = [])
    {
        static::$viewFolder = $viewFolder;
        static::$routes = $routes;
        static::$appDatas = $appDatas;

        foreach ($translations as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $subKey => $subValue) {
                    $search = 'trans['.$key.'.'.$subKey.']';
                    $replacement = $subValue;
                    StaticFramework::$cachedTranslations[$search] = $replacement;
                }
            } else {
                $search = 'trans['.$key.']';
                $replacement = $value;
                StaticFramework::$cachedTranslations[$search] = $replacement;
            }
        }
    }
}

function translate($buffer) {
    foreach (StaticFramework::$cachedTranslations as $search => $replacement) {
        $buffer = str_replace($search, $replacement, $buffer);
    }
    return $buffer;
}

function view($viewName, array $datas = []) {
    $appDatas = array_merge(StaticFramework::$appDatas, $datas);
    StaticFramework::$appDatas = $appDatas;

    $viewFile = StaticFramework::$viewFolder.'/'.$viewName.'.php';
    extract($appDatas);
    if (file_exists($viewFile)) {

        ob_start("translate");

        require $viewFile;

        ob_end_flush();

        return;
    }

    return require StaticFramework::$viewFolder.'/404.php';
}

return function ($viewFolder, $routes, array $appDatas = [], array $reservedUrls = [], array $translations = []) {

    $uri = explode('/',
                urldecode(
                    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                )
            );

    array_shift($uri);

    $fullUri = implode('/', $uri);

    $appDatas = array_merge($appDatas, [
                    'routeName' => '404',
                    'uri' => $uri,
                    'fullUri' => $fullUri,
                ]);
    $framework = new StaticFramework($viewFolder, $routes, $appDatas, $translations);

    if (in_array($fullUri, $reservedUrls)) {
        return view('404');
    }

    $func = $uri[0] ?: '/';

    if (function_exists($func)) {

        array_shift($uri);
        return call_user_func_array($func, $uri);
    }

    StaticFramework::$appDatas['routeName'] = rtrim(str_replace('/', '.', $fullUri), '.');

    if (array_key_exists($fullUri, $routes)) {
        $viewName = $routes[$fullUri];

        if (is_callable($viewName)) {
            extract(StaticFramework::$appDatas);
            return $viewName($uri);
        }

        return view($viewName);
    }

    if (array_key_exists($func, $routes)) {
        $viewName = $routes[$func];

        if (is_callable($viewName)) {
            extract(StaticFramework::$appDatas);
            return $viewName($uri);
        }

        return view($viewName);
    }

    return view(StaticFramework::$appDatas['routeName']);
};
