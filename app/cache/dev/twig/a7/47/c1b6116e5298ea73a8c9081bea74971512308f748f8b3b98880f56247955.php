<?php

/* OPMUserBundle:Register:Register.html.twig */
class __TwigTemplate_a747c1b6116e5298ea73a8c9081bea74971512308f748f8b3b98880f56247955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Admin7</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=0\" />
        <!-- CSS Library -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/library/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/library/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/library/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\">
        <!-- Theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/theme/default/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/theme/default/core_colour.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/theme/default/colour.css\" class=\"theme-colour"), "html", null, true);
        echo "\">
        <!-- Third Party Plugins -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/google-code-prettify/prettify.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\">
        <!-- Demo -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/css/demo.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <!-- Theme Selector -->
        <div id=\"theme-selector\">
            <div class=\"icon\"><i class=\"icon-cogs\"></i></div>
            <div class=\"theme\" data-theme=\"colour\"  style=\"background:#0B879E;\"></div>
            <div class=\"theme\" data-theme=\"colour1\" style=\"background:#980053;\"></div>
            <div class=\"theme\" data-theme=\"colour2\" style=\"background:#0F7C0F;\"></div>
            <div class=\"theme\" data-theme=\"colour3\" style=\"background:#692E00;\"></div>
            <div class=\"theme\" data-theme=\"colour4\" style=\"background:#CB252E;\"></div>
            <div class=\"theme\" data-theme=\"colour5\" style=\"background:#015077;\"></div>
            <div class=\"theme\" data-theme=\"colour6\" style=\"background:#CC4C25;\"></div>
            <div class=\"theme\" data-theme=\"colour7\" style=\"background:#91A244;\"></div>
            <div class=\"theme\" data-theme=\"colour8\" style=\"background:#444444;\"></div>
        </div>
        <!-- End -->
        <!-- Portrait Detector -->
        <div id=\"portrait_mode_detector\"></div>
        <!-- End -->
        <div id=\"layout-container\">
            <!-- Menu -->
            <div id=\"nav\">
                <!-- Profile -->
                <div class=\"profile\">
                    <div class=\"avatar\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/images/profile/profile.png"), "html", null, true);
        echo "\" alt=\"profile\" />
                    </div>
                </div>
                <!-- End -->
                <!-- Menu -->
                <ul class=\"navigation\">
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"dashboard.html\"><i class=\"icon-home\"></i><span>Dashboard</span></a></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"statistics.html\"><i class=\"icon-bar-chart\"></i><span>Statistics</span></a></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"tracking.html\"><i class=\"icon-map-marker\"></i><span>Tracking</span></a></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li class=\"sub\">
                        <a href=\"#\"><i class=\"icon-globe\"></i><span>UI Elements</span></a>
                        <ul class=\"navigation-sub\">
                            <li><a href=\"table.html\"><i class=\"icon-table\"></i><span>Table</span></a></li>
                            <li><a href=\"button.html\"><i class=\"icon-leaf\"></i><span>Button</span></a></li>
                            <li><a href=\"grid.html\"><i class=\"icon-th\"></i><span>Grid</span></a></li>
                            <li><a href=\"tab.html\"><i class=\"icon-laptop\"></i><span>Tab / Accordion</span></a></li>
                            <li><a href=\"chart.html\"><i class=\"icon-bar-chart\"></i><span>Chart</span></a></li>
                            <li><a href=\"misc.html\"><i class=\"icon-star-empty\"></i><span>Misc</span></a></li>
                            <li><a href=\"dialog.html\"><i class=\"icon-folder-close-alt\"></i><span>Dialog</span></a></li>
                            <li><a href=\"notification.html\"><i class=\"icon-info-sign\"></i><span>Notification</span></a></li>
                            <li><a href=\"icon.html\"><i class=\"icon-beaker\"></i><span>Icon</span></a></li>
                            <li><a href=\"typography.html\"><i class=\"icon-font\"></i><span>Typography</span></a></li>
                        </ul>
                    </li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li class=\"sub\">
                        <a href=\"#\"><i class=\"icon-file\"></i><span>Pages</span></a>
                        <ul class=\"navigation-sub\">
                            <li><a href=\"lock.html\"><i class=\"icon-lock\"></i><span>Lock Screen</span></a></li>
                            <li><a href=\"login.html\"><i class=\"icon-user\"></i><span>Login</span></a></li>
                        </ul>
                    </li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"form.html\" class=\"active\"><i class=\"icon-list-alt\"></i><span>Form</span></a><span class=\"number-alert\">4</span></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span>File Gallery</span></a></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                    <li><a href=\"calendar.html\"><i class=\"icon-calendar\"></i><span>Calendar</span></a></li>
                    <li class=\"separator\"><div></div><div></div><div></div></li>
                </ul>
                <!-- End -->
            </div>
            <!-- End -->
            <!-- Page Container -->
            <div id=\"main\">
                <div class=\"page-title\">
                    <div class=\"menu-switch\"><i class=\"icon-reorder\"></i></div>
                    <i class=\"icon-list-alt\"></i>
                    <span>Web Forms</span>
                </div>
                <div class=\"margin-container\">
                    <div class=\"dashboard-widget\">
                        <div class=\"title\">
                            <i class=\"icon-user\"></i> Wizard
                            <button class=\"toggle\" title=\"Close\"><i class=\"icon-chevron-down\"></i></button>
                        </div>
                        <div class=\"content\">
                            <form class=\"wizard\">
                                <div class=\"form-row\">
                                    <div class=\"form-wizard-indicator-container\">
                                        <div class=\"form-wizard-indicator\">
                                            <label><span>1</span></label>
                                            <span class=\"desc\">Login Details</span>
                                        </div>
                                        <div class=\"form-wizard-indicator\">
                                            <label><span>2</span></label>
                                            <span class=\"desc\">Personal Information</span>
                                        </div>
                                        <div class=\"form-wizard-indicator\">
                                            <label><span>3</span></label>
                                            <span class=\"desc\">Payment Method</span>
                                        </div>
                                        <div class=\"form-wizard-indicator\">
                                            <label><span>4</span></label>
                                            <span class=\"desc\">Confirmation</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-wizard\">
                                    <div class=\"form-row\">
                                        <div class=\"label\">Email Address:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-envelope\"></i><input type=\"email\" class=\"icon large\" placeholder=\"Email\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Username:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-user\"></i><input type=\"text\" class=\"icon large\" placeholder=\"Username\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Password:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-lock\"></i><input type=\"password\" class=\"icon large\" placeholder=\"Password\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Confirm Password:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-lock\"></i><input type=\"password\" class=\"icon large\" placeholder=\"Confirm Password\" />
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=\"form-wizard\">
                                    <div class=\"form-row\">
                                        <div class=\"label\">Phone:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-phone\"></i><input type=\"tel\" class=\"icon large\" placeholder=\"Phone\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Website:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-globe\"></i><input type=\"url\" class=\"icon large\" placeholder=\"Website\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Date of Birth:</div>
                                        <div class=\"input\"><i class=\"icon-calendar\"></i><input type=\"date\" class=\"icon large\" /></div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Gender:</div>
                                        <div class=\"input\">
                                            <input type=\"radio\" name=\"gender\" id=\"gender-btn-m\" /><label for=\"gender-btn-m\">Male</label>
                                            <input type=\"radio\" name=\"gender\" id=\"gender-btn-f\" /><label for=\"gender-btn-f\">Female</label>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=\"form-wizard\">
                                    <div class=\"form-row\">
                                        <div class=\"label\">Credit Card Type:</div>
                                        <div class=\"input\">
                                            <select>
                                                <option>Visa</option>
                                                <option>MasterCard</option>
                                                <option>AMEX</option>
                                                <option>Dinner Club</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Credit Card Number:</div>
                                        <div class=\"input\">
                                            <input type=\"text\" class=\"mini creditcard\" maxlength=\"4\" />&nbsp;-&nbsp;
                                            <input type=\"text\" class=\"mini creditcard\" maxlength=\"4\" />&nbsp;-&nbsp;
                                            <input type=\"text\" class=\"mini creditcard\" maxlength=\"4\" />&nbsp;-&nbsp;
                                            <input type=\"text\" class=\"mini creditcard\" maxlength=\"4\" />
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">Expiry Date:</div>
                                        <div class=\"input\">
                                            <input type=\"text\" class=\"mini\" placeholder=\"mm\" maxlength=\"2\" />&nbsp;/&nbsp;
                                            <input type=\"text\" class=\"mini\" placeholder=\"yy\" maxlength=\"2\" />&nbsp;<small>(mm/yy)</small>
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"label\">CVV:</div>
                                        <div class=\"input\">
                                            <i class=\"icon-credit-card\"></i><input type=\"text\" class=\"icon small\" placeholder=\"CVV\" />
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=\"form-wizard\">
                                    <div class=\"form-row\">
                                        <div class=\"label\">Terms & Conditions:</div>
                                        <div class=\"input\">
                                            <textarea class=\"full\" style=\"height:170px;\" readonly=\"readonly\">Terms & Conditions

1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.

5. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.

6. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea><br>
                                            <input type=\"checkbox\" id=\"tnc\" /><label for=\"tnc\">I agree to the Terms & Conditions</label>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=\"form-button-bar\">
                                    <button class=\"btn btn-default btn-small form-wizard-previous\"><i class=\"icon-circle-arrow-left\"></i> Previous</button>&nbsp;
                                    <button class=\"btn btn-success btn-small form-wizard-next\"><i class=\"icon-circle-arrow-right\"></i> Next</button>
                                    <button class=\"btn btn-success btn-small form-wizard-submit form-submit-ajax\"><i class=\"icon-external-link\"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
               
                </div>
            </div>
            <!-- End -->
            <div class=\"clearfix\"></div>
        </div>
        <!-- JavaScript Library -->
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/library/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/library/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/library/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        <!--[if lte IE 8]>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/library/excanvas.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- Main APP -->
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/app.js"), "html", null, true);
        echo "\"></script>
        <!-- Demo -->
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/demo.js"), "html", null, true);
        echo "\"></script>
        <!-- JavaScript Modules -->
        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/js/module/module.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Third Party Plugins -->
        <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.selection.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/ChartJS/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/../single_page_app/plugins/easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
        <!-- Page Script -->
        <script>
            App.setOptions({
                spa: false
            });
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OPMUserBundle:Register:Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 273,  373 => 272,  369 => 271,  365 => 270,  361 => 269,  357 => 268,  353 => 267,  349 => 266,  345 => 265,  341 => 264,  337 => 263,  332 => 261,  327 => 259,  322 => 257,  316 => 254,  311 => 252,  307 => 251,  303 => 250,  97 => 47,  68 => 21,  63 => 19,  59 => 18,  55 => 17,  50 => 15,  46 => 14,  42 => 13,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
