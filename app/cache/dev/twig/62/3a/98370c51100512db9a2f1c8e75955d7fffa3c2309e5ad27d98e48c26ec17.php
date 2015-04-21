<?php

/* OPMOPMBundle::layout.html.twig */
class __TwigTemplate_623a98370c51100512db9a2f1c8e75955d7fffa3c2309e5ad27d98e48c26ec17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>OXIA</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" >
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <style type=\"text/css\">
            h2{
                margin: 0;     
                color: #666;
                padding-top: 90px;
                font-size: 52px;
                font-family: \"trebuchet ms\", sans-serif;    
            }
            .item{
                background: #333;    
                text-align: center;
                height: 300px !important;
            }
            .carousel{
                margin-top: 20px;
            }
            .bs-example{
                margin: 20px;
            }
        </style>
        <script>\$(document).ready(function() {
                \$(\"#myCarousel\").carousel();
            });
        </script>

    </head>

    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">OXIA-Group</a>
                    <a class=\"navbar-brand\" href=\"#navbar-brand\" data-toggle=\"modal\">Info</a>
                </div>
                
                <div class=\"modal fade\" id=\"navbar-brand\" role=\"dialog\">
                    <div class=\"modal-dialog\">  
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h4> Oxia info </h4>      
                            </div>  
                            <div class=\"modal-body\">
                                <p> Créée en 1998, OXIA a pour mission de concevoir et mettre en oeuvre les meilleures solutions technologiques visant à améliorer la productivité, la rentabilité et la réactivité des entreprises sur leur marché.

                                    Elle accompagne ses clients sur l’ensemble du cycle de vie d’un projet, du conseil à la réalisation complète de la solution et jusqu’au transfert de compétences.

                                    Depuis ses débuts, OXIA a conservé son énergie et son sens de l’engagement. Grâce à son expérience, elle a acquis une solidité, un sens aigu de la perfection et un savoir-faire à toute épreuve.

                                    Ses méthodologies de réalisation logicielle et d’intégration de solutions d’une part, et ses outils et son expérience à l’international d’autre part font d’OXIA votre partenaire de choix pour la réussite de vos projets en systèmes d’information. </p>      
                            </div> 
                            <div class=\"modal-footer\">

                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-off\"></span> Close</button>
                            </div>  
                        </div>
                    </div> 
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu message-dropdown\">
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>Utilisateur</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>John Smith</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>Utilisateur</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-footer\">
                                <a href=\"#\">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu alert-dropdown\">
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">View All</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Utilisateur <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a><i class=\"fa fa-fw fa-user\"></i> ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 191
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "

            ";
        } else {
            // line 194
            echo "
            ";
        }
        // line 196
        echo "                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i>  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                            </li>
                            <div>
                                <div id=\"nav\">
                                    <div class=\"login border-box\">

                              ";
        // line 211
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 212
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 213
                echo "                                        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                                        </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 220
        echo "
                                    </div>
                                    </ul>
                                    </li>
                                    </ul>
                                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                        <ul class=\"nav navbar-nav side-nav\">

                                            <li>
                                                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-th-list\"></i> Gestion Perdiems <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                                <ul id=\"demo\" class=\"collapse\">
                                                    <li>
                                                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\">Paramétrage</a>

                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Status</a>
                                                    </li>
                                                </ul>

                                                <ul class=\"nav nav-pills nav-stacked\">
                                                   
                                                    <li>
                                                       <a href=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("opm_perdiems_Banque");
        echo "\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-usd\"></i> Banque</a>
                                                    </li>
                                                    
                                                    <li>    
                                                        <a href=\"";
        // line 248
        echo $this->env->getExtension('routing')->getPath("opm_perdiems_fraisTimbre");
        echo "\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-gbp\"></i> Frais et Timbres</a>
                                                    </li> 
                                                    <li>
                                                        <a href=\"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("opm_perdiems_homepage");
        echo "\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-gbp\"></i> Montant</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href=\"tables.html\"><i class=\"fa fa-fw fa-table\"></i> Perdiems</a>
                                            </li>
                                            <li>
                                                <a href=\"forms.html\"><i class=\"fa fa-fw fa-edit\"></i> Synthèse perdiems</a>
                                            </li>
                                            <li>
                                                <a href=\"bootstrap-elements.html\"><i class=\"glyphicon glyphicon-plane\"></i> Pays destination</a>  
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-time\"></i> Gestion Imputation <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                                <ul id=\"demo\" class=\"collapse\">
                                                    <li>    
                                                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"> Imputation incomplète</a>

                                                    </li>
                                                    <li>  
                                                        <a href=\"#\">Planification manquant</a>
                                                    </li>
                                                </ul>

                                                <ul class=\"nav nav-pills nav-stacked\">
                                                    <li>
                                                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"glyphicon glyphicon-th-list\"></i> Gestion Taches</a>
                                                    </li> 
                                                    <li>
                                                        <a href=\"#\"><i class=\"glyphicon glyphicon-calendar\"></i> Imputation temps</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\"><i class=\"glyphicon glyphicon-wrench\"></i> Temps planifier</a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                    </nav>

                                    <div id=\"page-wrapper\">
";
        // line 296
        $this->displayBlock('content', $context, $blocks);
        // line 297
        echo "                                        <div class=\"container-fluid\">

                                            <!-- Page Heading -->
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <h1 class=\"page-header\">
                                                        OXIA <small>Your partner of choice</small>
                                                    </h1>
                                                    <ol class=\"breadcrumb\">
                                                        <li class=\"active\">
                                                            <i class=\"glyphicon glyphicon-home\"></i> Accueil
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class=\"bs-example\">
                                                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"3000\" data-ride=\"carousel\">
                                                    <!-- Carousel indicators -->
                                                    <ol class=\"carousel-indicators\">
                                                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                                                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                                                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                                                    </ol>   
                                                    <!-- Carousel items -->
                                                    <div class=\"carousel-inner\">
                                                        <div class=\"active item\">
                                                            <h2>Consulting</h2>
                                                            <div class=\"carousel-caption\">
                                                                <h3>Leader du consulting et des technologies de l'information  au Maghreb</h3>
                                                                <p>Optimisez Votre Processus</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <h2>Solution d'Entreprise</h2>
                                                            <div class=\"carousel-caption\">
                                                                <h3>Votre partenaire de choix !</h3>
                                                                <p>Optimisez Votre Portefeuille Achats</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <h2>Ingénierie Logicielle</h2>
                                                            <div class=\"carousel-caption\">
                                                                <h3>Acteur de référence du Nearshore en Europe</h3>
                                                                <p>Pilotez vos programmes et projets</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Carousel nav -->
                                                    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                                    </a>
                                                    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"alert alert-info alert-dismissable\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                                        <i class=\"fa fa-info-circle\"></i>  <strong>Like SB Admin?</strong> Try out <a href=\"http://startbootstrap.com/template-overviews/sb-admin-2\" class=\"alert-link\">SB Admin 2</a> for additional features!
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-3 col-md-6\">
                                                    <div class=\"panel panel-primary\">
                                                        <div class=\"panel-heading\">
                                                            <div class=\"row\">
                                                                <div class=\"col-xs-3\">
                                                                    <i class=\"fa fa-comments fa-5x\"></i>
                                                                </div>
                                                                <div class=\"col-xs-9 text-right\">
                                                                    <div class=\"huge\">26</div>
                                                                    <div>New Comments!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href=\"#\">
                                                            <div class=\"panel-footer\">
                                                                <span class=\"pull-left\">View Details</span>
                                                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                                                <div class=\"clearfix\"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-3 col-md-6\">
                                                    <div class=\"panel panel-green\">
                                                        <div class=\"panel-heading\">
                                                            <div class=\"row\">
                                                                <div class=\"col-xs-3\">
                                                                    <i class=\"fa fa-tasks fa-5x\"></i>
                                                                </div>
                                                                <div class=\"col-xs-9 text-right\">
                                                                    <div class=\"huge\">12</div>
                                                                    <div>New Tasks!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href=\"#\">
                                                            <div class=\"panel-footer\">
                                                                <span class=\"pull-left\">View Details</span>
                                                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                                                <div class=\"clearfix\"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-3 col-md-6\">
                                                    <div class=\"panel panel-yellow\">
                                                        <div class=\"panel-heading\">
                                                            <div class=\"row\">
                                                                <div class=\"col-xs-3\">
                                                                    <i class=\"fa fa-shopping-cart fa-5x\"></i>
                                                                </div>
                                                                <div class=\"col-xs-9 text-right\">
                                                                    <div class=\"huge\">124</div>
                                                                    <div>New Orders!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href=\"#\">
                                                            <div class=\"panel-footer\">
                                                                <span class=\"pull-left\">View Details</span>
                                                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                                                <div class=\"clearfix\"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-3 col-md-6\">
                                                    <div class=\"panel panel-red\">
                                                        <div class=\"panel-heading\">
                                                            <div class=\"row\">
                                                                <div class=\"col-xs-3\">
                                                                    <i class=\"fa fa-support fa-5x\"></i>
                                                                </div>
                                                                <div class=\"col-xs-9 text-right\">
                                                                    <div class=\"huge\">13</div>
                                                                    <div>Support Tickets!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href=\"#\">
                                                            <div class=\"panel-footer\">
                                                                <span class=\"pull-left\">View Details</span>
                                                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                                                <div class=\"clearfix\"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-heading\">
                                                            <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart</h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div id=\"morris-area-chart\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-4\">
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-heading\">
                                                            <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div id=\"morris-donut-chart\"></div>
                                                            <div class=\"text-right\">
                                                                <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-4\">
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-heading\">
                                                            <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Tasks Panel</h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"list-group\">
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">just now</span>
                                                                    <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">4 minutes ago</span>
                                                                    <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">23 minutes ago</span>
                                                                    <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">46 minutes ago</span>
                                                                    <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">1 hour ago</span>
                                                                    <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">2 hours ago</span>
                                                                    <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">yesterday</span>
                                                                    <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                                                                </a>
                                                                <a href=\"#\" class=\"list-group-item\">
                                                                    <span class=\"badge\">two days ago</span>
                                                                    <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                                                                </a>
                                                            </div>
                                                            <div class=\"text-right\">
                                                                <a href=\"#\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-4\">
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-heading\">
                                                            <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-bordered table-hover table-striped\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Order #</th>
                                                                            <th>Order Date</th>
                                                                            <th>Order Time</th>
                                                                            <th>Amount (USD)</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>3326</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>3:29 PM</td>
                                                                            <td>\$321.33</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3325</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>3:20 PM</td>
                                                                            <td>\$234.34</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3324</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>3:03 PM</td>
                                                                            <td>\$724.17</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3323</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>3:00 PM</td>
                                                                            <td>\$23.71</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3322</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>2:49 PM</td>
                                                                            <td>\$8345.23</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3321</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>2:23 PM</td>
                                                                            <td>\$245.12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3320</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>2:15 PM</td>
                                                                            <td>\$5663.54</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3319</td>
                                                                            <td>10/21/2013</td>
                                                                            <td>2:13 PM</td>
                                                                            <td>\$943.45</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class=\"text-right\">
                                                                <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                        </div>
                                        <!-- /.container-fluid -->

                                    </div>
                                    <!-- /#page-wrapper -->

                                </div>
                                <!-- /#wrapper -->

                                <!-- jQuery -->
                                <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/jquery.js"), "html", null, true);
        echo "\"></script>

                                <!-- Bootstrap Core JavaScript -->
                                <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                                <!-- Morris Charts JavaScript -->
                                <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>

                                </body>

                                </html>
";
    }

    // line 218
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 219
        echo "            ";
    }

    // line 296
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPMOPMBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 296,  751 => 219,  748 => 218,  738 => 625,  734 => 624,  730 => 623,  724 => 620,  718 => 617,  396 => 297,  394 => 296,  346 => 251,  340 => 248,  333 => 244,  307 => 220,  304 => 218,  298 => 217,  289 => 214,  284 => 213,  279 => 212,  275 => 211,  264 => 205,  253 => 196,  249 => 194,  242 => 191,  236 => 190,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  49 => 21,  43 => 18,  37 => 15,  21 => 1,);
    }
}
