<?php

/* OPMUserBundle:Register:add.html.twig */
class __TwigTemplate_4f426fe42bb21a58ac9f967fdd66be320bd4cc20210439eaa44e26fb90ac6a15 extends Twig_Template
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
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Administration</title>

        <!-- Bootstrap -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body style=\"background:#333;\">
        <p><br/></p>
        <div class=\"row\">
            <div class=\"col-md-2\">


            </div>
            <div class=\"col-md-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"page-header\" style=\"margin-top:5px;\">
                            <h3>Ajouter un nouveau utilisateur</h3>
                        </div>
                        <form class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label for=\"inputNom\" class=\"col-sm-2 control-label\">Nom</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" id=\"basic-addon1\"></span></span>
                                        <input type=\"nom\" class=\"form-control\" id=\"inputNom\" placeholder=\"Nom\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputPrenom\" class=\"col-sm-2 control-label\">Prenom</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"prenom\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Prenom\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputCD\" class=\"col-sm-2 control-label\">Code salaire</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"Code salaire\" class=\"form-control\" id=\"inputCD\" placeholder=\"Code salaire\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputNC\" class=\"col-sm-2 control-label\">Num Cin</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"Numéro de cin\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Num cin\">
                                </div>
                            </div>

                            <div class=\"form-group\">


                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
                                <div>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-alert\" id=\"basic-addon1\"></span></span>
                                            <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
                                        </div>
                                    </div>
                                </div>  
                            </div>    

                            <div class=\"form-group\">
                                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-star\" id=\"basic-addon1\"></span></span>
                                        <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">


                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Date Expiration</label>

                                <div class='col-sm-10'>



                                    <div class=\"form-group\">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class=\"form-control\" />
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-calendar\"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <script type=\"text/javascript\">
                                        \$(function() {
                                            \$('#datetimepicker2').datetimepicker({
                                                locale: 'ru'
                                            });
                                        });
                                    </script>


                               
                                <script type=\"text/javascript\">
                                    \$(function() {
                                        \$('#datetimepicker1').datetimepicker();
                                    });
                                </script>
 </div>
                            </div> 

                            <div class=\"form-group\">


                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Date Titulaire</label>
                                <div class='col-sm-10'>



                                    <div class=\"form-group\">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class=\"form-control\" />
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-calendar\"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <script type=\"text/javascript\">
                                        \$(function() {
                                            \$('#datetimepicker2').datetimepicker({
                                                locale: 'ru'
                                            });
                                        });
                                    </script>


                               
                                <script type=\"text/javascript\">
                                    \$(function() {
                                        \$('#datetimepicker1').datetimepicker();
                                    });
                                </script>
 </div>
                            </div> 

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-2 col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button>
                                    <button type=\"button\" class=\"btn btn-info\"> Retourner vers l'authentification</button>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class=\"col-md-4\">


            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OPMUserBundle:Register:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
