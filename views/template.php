<?php

$title = 'Template';

$pageTitle = 'Template - Your Example Page';

$subTitle = 'Just use this to start making a simple view file.';

$content = <<<HTML
        
        <h2>You can start from this page.</h2>
HTML;

return view('page', compact('title', 'pageTitle', 'subTitle', 'content'));

