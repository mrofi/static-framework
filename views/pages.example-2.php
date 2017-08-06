<?php

$title = 'Example 2';

$pageTitle = 'Example 2';

$subTitle = 'Example 2 sub title';

$content = <<<HTML
        
        <h2>This is inherit from page file.</h2>
HTML;

return view('page', compact('title', 'pageTitle', 'subTitle', 'content'));

