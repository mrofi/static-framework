<?php

$title = 'Another Page';

$subTitle = 'Just Another Page';

$content = <<<HTML
        
        <h2>little frogs jumping on the bed.</h2>
HTML;

return view('page', compact('title', 'subTitle', 'content'));

