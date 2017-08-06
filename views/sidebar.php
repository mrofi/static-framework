                    <li<?php echo $routeName == 'dashboard' ? ' class="active"' : '' ?>>
                        <a href="/dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'documentation' ? ' class="active"' : '' ?>>
                        <a href="/documentation">
                            <i class="material-icons">book</i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li<?php echo strpos($routeName, 'pages.') !== false ? ' class="active"' : '' ?>>
                        <a data-toggle="collapse" href="#multipage" <?php echo strpos($routeName, 'pages.') !== false ? 'aria-expanded="true"' : '' ?>>
                            <i class="material-icons text-gray">web</i>
                            <p>
                                Multi Page
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse <?php echo strpos($routeName, 'pages.') !== false ? 'in"' : '' ?>" id="multipage">
                            <ul class="nav">
                                <li<?php echo $routeName == 'pages.example-1' ? ' class="active"' : '' ?>>
                                    <a href="/pages/example-1">Example Page #1</a>
                                </li>
                                <li<?php echo $routeName == 'pages.example-2' ? ' class="active"' : '' ?>>
                                    <a href="/pages/example-2">Example Page #2</a>
                                </li>
                                <li<?php echo $routeName == 'pages.another-page' ? ' class="active"' : '' ?>>
                                    <a href="/pages/another-page">Another Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li<?php echo $routeName == 'user' ? ' class="active"' : '' ?>>
                        <a href="/user">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'table' ? ' class="active"' : '' ?>>
                        <a href="/table">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'typography' ? ' class="active"' : '' ?>>
                        <a href="/typography">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'icons' ? ' class="active"' : '' ?>>
                        <a href="/icons">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'maps' ? ' class="active"' : '' ?>>
                        <a href="/maps">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'notifications' ? ' class="active"' : '' ?>>
                        <a href="/notifications">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li<?php echo $routeName == 'template' ? ' class="active"' : '' ?>>
                        <a href="/template">
                            <i class="material-icons text-gray">web</i>
                            <p>Template</p>
                        </a>
                    </li>
