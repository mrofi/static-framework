<?php

$title = 'Map';

$content = <<<HTML
    <div id="map"></div>
HTML;

$bottomScript = <<<HTML
    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>
HTML;

return view('layout', compact('title', 'content', 'bottomScript'));

