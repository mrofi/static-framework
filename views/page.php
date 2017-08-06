<?php

$pageTitle = $pageTitle ?? ($title ?? '');

$subTitle = $subTitle ?? ($title ?? '');

$content = $content ?? 'Content not found';

$content = <<<HTML
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">
                                        {$pageTitle}
                                    </h4>
                                    <p class="category">
                                        {$subTitle}
                                    </p>
                                </div>
                                <div class="card-content">
                                    {$content}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

HTML;

return view('layout', compact('content'));

