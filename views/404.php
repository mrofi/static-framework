<?php

$title = '404 - Page Not Found';
$subTitle = 'Sorry, but we can\'t find your route.';

$content = <<<HTML
        
        <h1>Error 404</h1>
        Can not find view for <strong>{$fullUri}</strong>.
HTML;

return view('page', compact('title', 'subTitle', 'content'));

