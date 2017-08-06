<?php

$title = 'Example 1';

$content = <<<HTML
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">
                                        Example Page 1
                                    </h4>
                                    <p class="category">
                                        sub page title
                                    </p>
                                </div>
                                <div class="card-content">
                                    <p>
                                        This page is inherit from Layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
HTML;

return view('layout', compact('title', 'content', 'bottomScript'));

