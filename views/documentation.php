<?php

$title = 'Documentation';

$pageTitle = 'Guidelines &amp; Tutorials';

$subTitle = 'You\'ll need this (just in case).';

$content = <<<HTML
        <div class="row">
            <div class="col-md-3">
                <div class="fixed-section">
                    <ul>
                        <li><a href="#license">License</a></li>
                        <li><a href="#tutorial">Tutorial</a></li>
                        <li><a href="#pablo">&nbsp;</a></li>
                        <li><a href="#components"><b>Components</b></a></li>
                        <li><a href="#buttons-row">Buttons</a></li>
                        <li><a href="#checkbox-row">Checkbox/Radio</a></li>
                        <li><a href="#dropdown-row">Dropdown</a></li>
                        <li><a href="#inputs-row">Inputs</a></li>
                        <li><a href="#textarea-row">Textarea</a></li>
                        <li><a href="#navbar-row">Navigation</a></li>
                        <li><a href="#icons-row">Material Icons</a></li>
                        <li><a href="#notification-row">Notifications</a></li>
                        <li><a href="#cards-row">Cards</a></li>
                        <li><a href="#changing-colors">Changing Colors (SASS)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

            <!-- License Row -->
            <div class="tim-row tim-row-first" id="license">
                <h2 class="text-center">License</h2>
                <legend></legend>
                <p>
                     Currently, on <a href="www.creative-tim.com" target="_blank">Creative Tim</a> you can get the products with two types of licenses: Personal or Developer. All the freebies are licensed to Personal License as default. If you are making a paid purchase, be sure to go through the table with the rights and the guidelines, so you can know what is the best fit for you. View the rights table and the description for each license on our <a target="_blank" href="http://www.creative-tim.com/license?ref=license-page-mk-free">Official License Page</a>.
                </p>
            </div>

            <!-- Tutorial Row -->
            <div class="tim-row" id="tutorial">
                <h2 class="text-center">Short Description and Usage</h2>
                <legend></legend>
                <p>
                    <b>Material Dashboard</b> is a free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design. We are very excited to introduce our take on the material concepts through an easy to use and beautiful set of components. Material Dashboard was built over the popular Bootstrap framework and it comes with a couple of third-party plugins redesigned to fit in with the rest of the elements.
                </p>
                <p>
                    Using it is very simple and it will enable you to refresh you classic looking application. To get the desired effect you will also need to integrate JS plugins that take a little bit more effort. It the end the result will be worth it.
                </p>
            </div>

            <div class="tim-row">
                <h2 class="text-center">Getting Started</h2>
                <legend></legend>
                <p>
                    The <b>Material Dashboard</b> is built on top of Bootstrap 3, so you can safely use it on your existing or new Bootstrap project. No line of code from Bootstrap 3 was changed, so you don't have to worry about undesired effects in your work.
                </p>
                <p>
                    The easiest way to start is to use our <a href="../examples/template.html" target="_blank">start-up template</a> where all the files are already included and ready to use.
                </p>
            </div>


            <div class="tim-row">
                <h2 class="text-left">File Structure</h2>
                <legend></legend>
                <p>
                    Once you have downloaded the archive and opened it, you will find the following structure:
                </p>
                <p>
                    Let's take it one by one:
                </p>
                <p>
                material-dashboard<br>
                --assets<br>
                ---css<br>
                -----bootstrap.min.css<br>
                -----demo.css<br>
                -----material-dashboard.css<br>
                ---img<br>
                ---js<br>
                -----bootstrap-notify.js<br>
                -----bootstrap.min.js<br>
                -----chartist.min.js<br>
                -----demo.js<br>
                -----jquery-3.1.0.min.js<br>
                -----material-dashboard.js<br>
                -----material.min.js<br>
                ----sass<br>
                -----md<br>
                -----material-dashboard.scss<br>
                --documentation<br>
                ----tutorial-components.html<br>
                --examples<br>
               </p>
            </div>

            <div class="tim-row">
                <h2 class="text-left">Restyled Components</h2>
               <legend></legend>
               <p>
               Here is the list of Bootstrap 3 components that were restyled in <b>Material Dashboard</b>:
                   <ul>
                       <li> Buttons </li>
                       <li> Inputs</li>
                       <li> Textarea</li>
                       <li> Menu </li>
                       <li> Dropdown</li>
                       <li> Navigation Menu</li>
                       <li> Labels</li>
                       <li> Notifications</li>
                       <li> Typography</li>
                       <li> Tables</li>
                   </ul>
               </p>
            </div>


            <div class="tim-row">
                <h2 class="text-left">New Components</h2>
               <legend></legend>
               <p>
               Besides giving the existing Bootstrap elements a new look, we added new ones, so that the interface and consistent and homogenous.
               </p>
               <p>
               Going through them, we added:
               <ul>
                   <li> Checkboxes</li>
                   <li> Radio Buttons</li>
                   <li> Card Stats</li>
                   <li> Card Charts</li>
                   <li> Card with tabs</li>
                   <li> Material Icons</li>
               </ul>
               </p>
            </div>
            <!-- End Tutorial Row -->

            <div class="tim-row" id="components">
                <h2 class="text-center">Components</h2>
            </div>
            <!-- buttons row -->
            <div class="tim-row" id="buttons-row">

                <h2>Buttons</h2>
                <legend></legend>
                <h4>Colors</h4>
                <p>We worked over the original Bootstrap classes, choosing a different, slightly intenser colour palette.</p>
                <p>
                       <button class="btn btn-default">Default</button>
                       <button class="btn btn-primary">Primary</button>
                       <button class="btn btn-info">Info</button>
                       <button class="btn btn-success">Success</button>
                       <button class="btn btn-warning">Warning</button>
                       <button class="btn btn-danger">Danger</button>
                </p>

                <pre class="prettyprint">

&lt;button class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
                </pre>

            </div>




            <!-- checkbox row -->
            <div class="tim-row" id="checkbox-row">
                <h2> Checkboxes </h2>
                <legend></legend>
                <p>
                    To use the custom checkboxes, you don't need to import any separate Javascript file, everything is inside material.min.js
                </p>
                <p>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes">
                            Unchecked
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                            Checked
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes" disabled>
                            Disabled Unchecked
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes" disabled checked>
                            Disabled Checked
                        </label>
                    </div>
                </p>

                <pre class="prettyprint">
&lt;div class=&quot;checkbox&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;checkbox&quot; name=&quot;optionsCheckboxes&quot;&gt;
        Unchecked
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;checkbox&quot; name=&quot;optionsCheckboxes&quot; checked&gt;
        Checked
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;checkbox&quot; name=&quot;optionsCheckboxes&quot; disabled&gt;
        Disabled Unchecked
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;checkbox&quot; name=&quot;optionsCheckboxes&quot; disabled checked&gt;
        Disabled Checked
    &lt;/label&gt;
&lt;/div&gt;

                </pre>
            </div>
            <!-- end row -->

            <!-- radio row -->
            <div class="tim-row" id="radio-row">
                <h2> Radio Buttons </h2>
                <legend></legend>
                <p>
                    To use the custom radio buttons, you don't need to import any separate Javascript file, everything is inside material.min.js.
                </p>
                <p>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">
                            Radio is off
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" checked="true">
                            Radio is on
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadiosDisabled" disabled>
                            Disabled Radio is off
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadiosDisabled" checked="true" disabled>
                            Disabled Radio is on
                        </label>
                    </div>
                </p>

                <pre class="prettyprint">
&lt;div class=&quot;radio&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot;&gt;
        Radio is off
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; checked=&quot;true&quot;&gt;
        Radio is on
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; disabled&gt;
        Disabled Radio is off
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio&quot;&gt;
    &lt;label&gt;
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; checked=&quot;true&quot; disabled&gt;
        Disabled Radio is on
    &lt;/label&gt;
&lt;/div&gt;
                </pre>
            </div>
            <!-- end row -->

            <!-- dropdown row -->
            <div class="tim-row" id="dropdown-row">
                <h2> Dropdown </h2>
                <legend></legend>
                <p> We are very proud to present the dropdown which has a subtle animation. <b>IMPORTANT!</b> The focus state is <b>Purple</b> by default and, on the dropdowns from the navbars, they will take the colour of the parent navbar.</p>

                <div class="row">
                    <div class="col-md-3">
                        <div class="dropdown">
                            <a href="#pablo" class="btn dropdown-toggle" data-toggle="dropdown">
                                Regular
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#pablo">Action</a></li>
                                <li><a href="#pablo">Another action</a></li>
                                <li><a href="#pablo">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#pablo">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#pablo">One more separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <pre class="prettyprint">
&lt;div class=&quot;dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
        Regular
        &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
                </pre>
            </div>
            <!-- end row -->

            <!-- inputs row -->
            <div class="tim-row" id="inputs-row">
                <h2>Inputs </h2>
                <legend></legend>

                <p>
                We restyled the Bootstrap inputs to give them a more flat, minimal look. You can use them with regular labels, floating labels and states or input groups.
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" value="" placeholder="Regular" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">With Floating Label</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Success input</label>
                            <input type="text" value="Success" class="form-control" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Error input</label>
                            <input type="email" value="Error Input" class="form-control" />
                            <span class="material-icons form-control-feedback">clear</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">group</i>
                            </span>
                            <input type="text" class="form-control" placeholder="With Material Icons">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-group"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="With Font Awesome Icons">
                        </div>
                    </div>
                </div>


                <pre class="prettyprint">

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;input type=&quot;text&quot; value=&quot;&quot; placeholder=&quot;Regular&quot; class=&quot;form-control&quot; /&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;form-group label-floating&quot;&gt;
        &lt;label class=&quot;control-label&quot;&gt;With Floating Label&lt;/label&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;form-group label-floating has-success&quot;&gt;
        &lt;label class=&quot;control-label&quot;&gt;Success input&lt;/label&gt;
        &lt;input type=&quot;text&quot; value=&quot;Success&quot; class=&quot;form-control&quot; /&gt;
        &lt;span class=&quot;form-control-feedback&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;done&lt;/i&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;form-group label-floating has-error&quot;&gt;
        &lt;label class=&quot;control-label&quot;&gt;Error input&lt;/label&gt;
        &lt;input type=&quot;email&quot; value=&quot;Error Input&quot; class=&quot;form-control&quot; /&gt;
        &lt;span class=&quot;material-icons form-control-feedback&quot;&gt;clear&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;span class=&quot;input-group-addon&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;group&lt;/i&gt;
        &lt;/span&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;With Material Icons&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;span class=&quot;input-group-addon&quot;&gt;
            &lt;i class=&quot;fa fa-group&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;With Font Awesome Icons&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </pre>
            </div>
            <!-- end row -->


            <!-- textarea row -->
            <div class="tim-row" id="textarea-row">
                <h2>Textarea</h2>
                <legend></legend>
                <p>The textarea has a new style, so it looks similar to all other inputs.</p>

                <textarea class="form-control" placeholder="Here can be your nice text" rows="5"></textarea>

                <pre class="prettyprint">
&lt;textarea class=&quot;form-control&quot; placeholder=&quot;Here can be your nice text&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;
                </pre>
            </div>
            <!-- end row -->

            <!-- navbar row -->
            <div class="tim-row" id="navbar-row">
                <h2>Navbar </h2>
                <legend></legend>
                <p>The classic Bootstrap Navbar was restyled:</p>

                <div id="navbar">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#pablo">Brand</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#pablo">Link</a></li>
                                    <li><a href="#pablo">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#pablo">Action</a></li>
                                            <li><a href="#pablo">Another action</a></li>
                                            <li><a href="#pablo">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#pablo">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#pablo">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div><!--  end navbar -->

                <pre class="prettyprint">
&lt;nav class=&quot;navbar navbar-default&quot; role=&quot;navigation&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;div class=&quot;navbar-header&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
            &lt;/button&gt;
            &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Brand&lt;/a&gt;
        &lt;/div&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;
            &lt;ul class=&quot;nav navbar-nav&quot;&gt;
                &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
                &lt;li class=&quot;dropdown&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;Dropdown &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;&lt;/a&gt;
                    &lt;ul class=&quot;dropdown-menu&quot;&gt;
                      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;
                </pre>

                <p class="space-top">Besides the default navbar, we added 5 new colors: primary, blue, green, orange, red. If you want to use one of them, you have to replace the <code>.navbar-default</code> or <code>.navbar-primary</code> with the class for the chosen colour <code>.navbar-info</code>, <code>.navbar-success</code>, <code>.navbar-warning</code> or <code>.navbar-danger</code>.</p>

            <!-- navbar default -->
            <div id="navbar-default">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#pablo">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#pablo">Link</a></li>
                        <li><a href="#pablo">Link</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>

            </div><!--  end navbar -->

            <!-- navbar info -->
            <div id="navbar-info">
                <nav class="navbar navbar-info" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#pablo">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#pablo">Link</a></li>
                        <li><a href="#pablo">Link</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

            </div><!--  end navbar -->

            <!-- navbar success -->
            <div id="navbar-success">
                <nav class="navbar navbar-success" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#pablo">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#pablo">Link</a></li>
                        <li><a href="#pablo">Link</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

            </div><!--  end navbar -->

            <!-- navbar warning -->
            <div id="navbar-warning">
                <nav class="navbar navbar-warning" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#pablo">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#pablo">Link</a></li>
                        <li><a href="#pablo">Link</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

            </div><!--  end navbar -->

            <!-- navbar danger -->
            <div id="navbar-danger">
                <nav class="navbar navbar-danger" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#pablo">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#pablo">Link</a></li>
                        <li><a href="#pablo">Link</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

            </div><!--  end navbar -->

            <p class="space-top">
                Besides all this customisation, we have an extra navbar. <code>.navbar-transparent</code> is a special class that you can to use if you want the navbar to be transparent.
            </p>

        </div>
            <!-- end row -->

            <!-- nav pills row -->
            <div class="tim-row" id="navpills-row">
                <h2> Nav Pills</h2>
                <legend></legend>
                <p>
                    We changed the design for the Bootstrap nav pills into something a bit more fresh. We have also added more colour classes for customisation like <code>.nav-pills-primary</code>, <code>.nav-pills-info</code>, <code>.nav-pills-success</code>, <code>.nav-pills-warning</code>, <code>.nav-pills-danger</code>.
                </p>
                <h4>Simple</h4>
                <p>We added coloured shadows to the pills and created two options: horizontal and vertical (using the class <code>.nav-stacked</code>).</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-pills-info">
                          <li class="active"><a href="#pill1" data-toggle="tab">Profile</a></li>
                          <li><a href="#pill2" data-toggle="tab">Settings</a></li>
                          <li><a href="#pill3" data-toggle="tab">Options</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-pills-info nav-stacked">
                          <li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
                          <li><a href="#tab2" data-toggle="tab">Settings</a></li>
                          <li><a href="#tab3" data-toggle="tab">Options</a></li>
                        </ul>
                    </div>
                </div>


                <h4>With Icons</h4>
                <p>If you want to also add icons, you can use this version with the two options: horizontal and vertical. To use them, please add the <code>.nav-pills-icons</code> class.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-pills-icons nav-pills-primary" role="tablist">
                            <li>
                                <a href="#dashboard" role="tab" data-toggle="tab">
                                    <i class="material-icons">dashboard</i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="active">
                                <a href="#schedule" role="tab" data-toggle="tab">
                                    <i class="material-icons">schedule</i>
                                    Schedule
                                </a>
                            </li>
                            <li>
                                <a href="#tasks" role="tab" data-toggle="tab">
                                    <i class="material-icons">list</i>
                                    Tasks
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">
                            <li class="active">
                                <a href="#dashboard-2" role="tab" data-toggle="tab">
                                    <i class="material-icons">dashboard</i>
                                    Dashboard
                                </a>
                            </li>
                            <li >
                                <a href="#schedule-2" role="tab" data-toggle="tab">
                                    <i class="material-icons">schedule</i>
                                    Schedule
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <pre class="prettyprint">
&lt;!-- simple and horizontal --&gt;
&lt;ul class=&quot;nav nav-pills nav-pills-info&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#pill1&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#pill2&quot; data-toggle=&quot;tab&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#pill3&quot; data-toggle=&quot;tab&quot;&gt;Options&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- simple and vertical --&gt;
&lt;ul class=&quot;nav nav-pills nav-pills-info nav-stacked&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#tab1&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#tab2&quot; data-toggle=&quot;tab&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#tab3&quot; data-toggle=&quot;tab&quot;&gt;Options&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- with icons and horizontal --&gt;
&lt;ul class=&quot;nav nav-pills nav-pills-icons nav-pills-primary&quot; role=&quot;tablist&quot;&gt;
    &lt;li&gt;
        &lt;a href=&quot;#dashboard&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;dashboard&lt;/i&gt;
            Dashboard
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;
        &lt;a href=&quot;#schedule&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;schedule&lt;/i&gt;
            Schedule
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href=&quot;#tasks&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;list&lt;/i&gt;
            Tasks
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- with icons and vertical --&gt;
&lt;ul class=&quot;nav nav-pills nav-pills-icons nav-stacked&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;
        &lt;a href=&quot;#dashboard-2&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;dashboard&lt;/i&gt;
            Dashboard
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li &gt;
        &lt;a href=&quot;#schedule-2&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;schedule&lt;/i&gt;
            Schedule
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
                </pre>
            </div>
            <!-- end row -->

            <!-- tables row -->
            <div class="tim-row" id="tables-row">
                <h2>Tables</h2>
                <legend></legend>
                <p>All Boostrap classes for tables are supported and improved.</p>
                <h4>Simple Table inside a card</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Table Title</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-danger">
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Salary</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dakota Rice</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                            <td class="text-primary">$36,738</td>
                                        </tr>
                                        <tr>
                                            <td>Minerva Hooper</td>
                                            <td>Curaçao</td>
                                            <td>Sinaai-Waas</td>
                                            <td class="text-primary">$23,789</td>
                                        </tr>
                                        <tr>
                                            <td>Sage Rodriguez</td>
                                            <td>Netherlands</td>
                                            <td>Baileux</td>
                                            <td class="text-primary">$56,142</td>
                                        </tr>
                                        <tr>
                                            <td>Philip Chaney</td>
                                            <td>Korea, South</td>
                                            <td>Overland Park</td>
                                            <td class="text-primary">$38,735</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Greene</td>
                                            <td>Malawi</td>
                                            <td>Feldkirchen in Kärnten</td>
                                            <td class="text-primary">$63,542</td>
                                        </tr>
                                        <tr>
                                            <td>Mason Porter</td>
                                            <td>Chile</td>
                                            <td>Gloucester</td>
                                            <td class="text-primary">$78,615</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                    <pre class="prettyprint">

&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot; data-background-color=&quot;purple&quot;&gt;
        &lt;h4 class=&quot;title&quot;&gt;Table Title&lt;/h4&gt;
        &lt;p class=&quot;category&quot;&gt;Here is a subtitle for this table&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content table-responsive table-full-width&quot;&gt;
        &lt;table class=&quot;table&quot;&gt;
            &lt;thead class=&quot;text-danger&quot;&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;City&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td&gt;Dakota Rice&lt;/td&gt;
                    &lt;td&gt;Niger&lt;/td&gt;
                    &lt;td&gt;Oud-Turnhout&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$36,738&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Minerva Hooper&lt;/td&gt;
                    &lt;td&gt;Cura&#231;ao&lt;/td&gt;
                    &lt;td&gt;Sinaai-Waas&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$23,789&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Sage Rodriguez&lt;/td&gt;
                    &lt;td&gt;Netherlands&lt;/td&gt;
                    &lt;td&gt;Baileux&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$56,142&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Philip Chaney&lt;/td&gt;
                    &lt;td&gt;Korea, South&lt;/td&gt;
                    &lt;td&gt;Overland Park&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$38,735&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Doris Greene&lt;/td&gt;
                    &lt;td&gt;Malawi&lt;/td&gt;
                    &lt;td&gt;Feldkirchen in K&#228;rnten&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$63,542&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Mason Porter&lt;/td&gt;
                    &lt;td&gt;Chile&lt;/td&gt;
                    &lt;td&gt;Gloucester&lt;/td&gt;
                    &lt;td class=&quot;text-primary&quot;&gt;$78,615&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;

    &lt;/div&gt;
&lt;/div&gt;
            </pre>

            </div>
            <!-- end row -->

            <!-- icons row -->
            <div class="tim-row" id="icons-row">
                <h2>Material Icons</h2>
                <legend></legend>
                <p>
                    Through most of the examples in this dashboard, we have used the default <a href="https://design.google.com/icons/" target="_blank">Icons for the Material Design</a> provided by Google.
                </p>
                <i class="material-icons">face</i>
            <pre class="prettyprint">

&lt;i class=&quot;material-icons&quot;&gt;face&lt;/i&gt;
            </pre>
            </div>
            <!-- end row -->


            <!-- notification row -->
            <div class="tim-row" id="notification-row">
                <h2> Notifications </h2>
                <legend></legend>
                <p>The new notifications are looking fresh and clean. They go great with the navbar. For the following notification examples we used the <code>.container-fluid</code> class, so they will be fluid. Please use the class <code>.container</code> when you use them outside of the <code>.wrapper</code> so they will be aligned with the general page container.</p>

                <div class="alert alert-info">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>

                        <b>Info alert:</b> You've got some friends nearby, stop looking at your phone and find them...
                    </div>
                </div>
                <div class="alert alert-success">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>Success Alert:</b> Yuhuuu! You've got your $11.99 album from The Weeknd
                    </div>
                </div>
                <div class="alert alert-warning">
                     <div class="container-fluid">
                         <div class="alert-icon">
                            <i class="material-icons">warning</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                         <b>Warning Alert:</b> Hey, it looks like you still have the "copyright &copy;  2015" in your footer. Please update it!
                    </div>
                </div>
                <div class="alert alert-danger">
                     <div class="container-fluid">
                         <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                         <b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
                    </div>
                </div>

                <pre class="prettyprint">
&lt;div class=&quot;alert alert-info&quot;&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;alert-icon&quot;&gt;
    &lt;i class=&quot;material-icons&quot;&gt;info_outline&lt;/i&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;clear&lt;/i&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;b&gt;Info alert:&lt;/b&gt; You&#39;ve got some friends nearby, stop looking at your phone and find them...
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-success&quot;&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;alert-icon&quot;&gt;
    &lt;i class=&quot;material-icons&quot;&gt;check&lt;/i&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;clear&lt;/i&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;b&gt;Success Alert:&lt;/b&gt; Yuhuuu! You&#39;ve got your $11.99 album from The Weeknd
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-warning&quot;&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;alert-icon&quot;&gt;
    &lt;i class=&quot;material-icons&quot;&gt;warning&lt;/i&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;clear&lt;/i&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;b&gt;Warning Alert:&lt;/b&gt; Hey, it looks like you still have the &quot;copyright &amp;copy;  2015&quot; in your footer. Please update it!
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-danger&quot;&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;alert-icon&quot;&gt;
    &lt;i class=&quot;material-icons&quot;&gt;error_outline&lt;/i&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;clear&lt;/i&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;b&gt;Error Alert:&lt;/b&gt; Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
&lt;/div&gt;
&lt;/div&gt;
                </pre>
            </div>
            <!-- end row -->


            <!-- cards row -->
            <div class="tim-row" id="cards-row">
                <h2>Cards</h2>
                <legend></legend>
                <p>We think cards are one of the best ways to organise your information. We went all out with possibilities and we recommended finding the right fit for your product. The general class for a card is called <code>.card</code>. The information inside the card usually goes inside the content (class <code>.card-content</code>). The content can have three types of elements inside: <code>.title</code> and <code>.category</code>. You can optionally add a <code>.card-footer</code>, if you want to place a call-to-action. <br />
                You can change the color of the header using the <code>data-background-color</code> attribute like this: <code>data-background-color="{ purple | blue | green | orange | red }"</code>. <br>

                If you want to use the cards on white background you can remove it's shadow using the class <code>.card-plain</code>
                </p>

                <h4>Card Chart</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="orange">
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-content">
                                <h4 class="title">Daily Sales</h4>
                                <p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> increase in today sales.</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <pre class="prettyprint">
&lt;div class=&quot;col-md-6&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
        &lt;div class=&quot;card-header card-chart&quot; data-background-color=&quot;orange&quot;&gt;
            &lt;div class=&quot;ct-chart&quot; id=&quot;dailySalesChart&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-content&quot;&gt;
            &lt;h4 class=&quot;title&quot;&gt;Daily Sales&lt;/h4&gt;
            &lt;p class=&quot;category&quot;&gt;&lt;span class=&quot;text-success&quot;&gt;&lt;i class=&quot;fa fa-long-arrow-up&quot;&gt;&lt;/i&gt; 55%  &lt;/span&gt; increase in today sales.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-footer&quot;&gt;
            &lt;div class=&quot;stats&quot;&gt;
                &lt;i class=&quot;material-icons&quot;&gt;access_time&lt;/i&gt; updated 4 minutes ago
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

// INFO: #dailySalesChart is initialised inside demo.js on method initDocumentationCharts
                </pre>


                <h4>Card Stats</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Used Space</p>
                                <h3 class="title">49/50<small>GB</small></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">store</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Revenue</p>
                                <h3 class="title">$34,245</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <pre class="prettyprint">
&lt;div class=&quot;card card-stats&quot;&gt;
    &lt;div class=&quot;card-header&quot; data-background-color=&quot;orange&quot;&gt;
        &lt;i class=&quot;material-icons&quot;&gt;content_copy&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;p class=&quot;category&quot;&gt;Used Space&lt;/p&gt;
        &lt;h3 class=&quot;title&quot;&gt;49/50&lt;small&gt;GB&lt;/small&gt;&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        &lt;div class=&quot;stats&quot;&gt;
            &lt;i class=&quot;material-icons text-danger&quot;&gt;warning&lt;/i&gt; &lt;a href=&quot;#pablo&quot;&gt;Get More Space...&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </pre>


                <h4>Card Nav-Tabs</h4>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Tasks:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab">
                                                    <i class="material-icons">bug_report</i>
                                                    First
                                                <div class="ripple-container"></div></a>
                                            </li>
                                            <li class="">
                                                <a href="#messages" data-toggle="tab">
                                                    <i class="material-icons">code</i>
                                                    Second
                                                <div class="ripple-container"></div></a>
                                            </li>
                                            <li class="">
                                                <a href="#settings" data-toggle="tab">
                                                    <i class="material-icons">cloud</i>
                                                    Third
                                                <div class="ripple-container"></div></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        First Tab
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        Second Tab
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        Third Tab
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <pre class="prettyprint">
&lt;div class=&quot;card card-nav-tabs&quot;&gt;
    &lt;div class=&quot;card-header&quot; data-background-color=&quot;purple&quot;&gt;
        &lt;div class=&quot;nav-tabs-navigation&quot;&gt;
            &lt;div class=&quot;nav-tabs-wrapper&quot;&gt;
                &lt;span class=&quot;nav-tabs-title&quot;&gt;Tasks:&lt;/span&gt;
                &lt;ul class=&quot;nav nav-tabs&quot; data-tabs=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;active&quot;&gt;
                        &lt;a href=&quot;#profile&quot; data-toggle=&quot;tab&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;bug_report&lt;/i&gt;
                            First
                        &lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;&quot;&gt;
                        &lt;a href=&quot;#messages&quot; data-toggle=&quot;tab&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;code&lt;/i&gt;
                            Second
                        &lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;&quot;&gt;
                        &lt;a href=&quot;#settings&quot; data-toggle=&quot;tab&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;cloud&lt;/i&gt;
                            Third
                        &lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-content&quot;&gt;
        &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active&quot; id=&quot;profile&quot;&gt;
                First Tab
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;messages&quot;&gt;
                Second Tab
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;settings&quot;&gt;
                Third Tab
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

&lt;/div&gt;

                </pre>
            </div> <!-- end cards row -->

            <!-- License Row -->
            <div class="tim-row" id="changing-colors">
                <h2 class="text-center">Changing Colors (SASS)</h2>
                <legend></legend>
                <p>You can change the default colors via variables from SASS:</p>

                <ol>
                    <li>You can find the colors in assets/sass/material-kit/_variables.scss starting with line 28 where is the primary color set: <code>&#36;brand-primary: &#36;purple !default;</code>. All the possible colors are in assets/sass/material-kit/_colors.scss</li>
                    <li>Add the SASS folder from <code>assets/sass/</code> the project inside <a href="http://koala-app.com/" target="_blank">Koala Compiler</a> and find the file material-dashboard.scss, it will be the one in Green.</li>
                    <li>Right click on that file and set the output path, it must be in assets/css/ so anything that you compile will overwrite the original material-dashboard.css</li>
                    <li>Press on compile and everything will be done automatically</li>
                </ol>

            </div>

            </div> <!-- end container -->
         </div> <!--  end col-md-8 -->
HTML;

$bottomScript = <<<HTML
    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

            $(window).on('scroll', md.checkScrollForTransparentNavbar);
            demo.initDocumentationCharts();

            if ($(window).width() > 990) {
                var base = $('<div></div>');
                base.css('position', 'absolute').css('width', '100%').css('height', '100%');
                var container = $('.fixed-section');
                var top = container.offset().top - $(window).scrollTop();
                var left = container.offset().left;
                var width = container.width();
                var height = container.height();
                container.css('position', 'relative');
                container.css('margin-top', top);
                container.css('margin-left', left);
                container.css('width', width);
                container.css('height', height);
                container.css('z-index', '4');
                container.appendTo(base);
                base.insertBefore($('.main-panel'));

                $('.main-panel').on('scroll', function() {
                    var top = $('.card-header').offset().top + $('.card-header').outerHeight() + 20;
                    if (top > 20) {
                        container.css('margin-top', top);
                    }

                    $('.tim-row').each(function (i, item) {
                        var top = $(this).offset().top;
                        if (top + $(this).outerHeight() > 0) {
                            if (top < 0 || i == 0) {
                                var id = $(this).attr('id');
                                $('.fixed-section a').removeClass('active');
                                $('.fixed-section > ul').find('[href="#'+id+'"]').first().addClass('active');
                                return false;
                            }
                            var id = $(this).prev().attr('id');
                            $('.fixed-section a').removeClass('active');
                            $('.fixed-section > ul').find('[href="#'+id+'"]').first().addClass('active');
                            return false;
                        }
                    })
                });

            }
        });
    </script>
HTML;

return view('page', compact('title', 'pageTitle', 'subTitle', 'content', 'bottomScript'));

