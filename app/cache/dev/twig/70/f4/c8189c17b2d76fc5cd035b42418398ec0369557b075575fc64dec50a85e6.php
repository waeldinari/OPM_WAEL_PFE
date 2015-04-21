<?php

/* OPMUserBundle:User:AjoutUser.html.twig */
class __TwigTemplate_70f4c8189c17b2d76fc5cd035b42418398ec0369557b075575fc64dec50a85e6 extends Twig_Template
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
    <title>Confirm JQuery</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    
    
  </head>
  <body>
      <br/>
      
    
  
          <button class=\"confirm btn btn-primary\" type=\"button\">Delete the comment</button>
           <div class=\"row\">
        <div class='col-sm-6'>
            <div class=\"form-group\">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
            </div>
        </div>
    
    </div>
      </div>
        <!--
      <div class=\"container\">
    <div class=\"row\">
        <div class='col-sm-6'>
            <div class=\"form-group\">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\">
            \$(function () {
                \$('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/jquery.confirm"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/jquery.confirm.min"), "html", null, true);
        echo "\"></script>
     <script>
          \$(\".confirm\").confirm({
    text: \"Are you sure you want to delete that comment?\",
    title: \"Confirmation required\",
    confirm: function(button) {
       
    },
    cancel: function(button) {
        // nothing to do
    },
    confirmButton: \"Yes I am\",
    cancelButton: \"No\",
    post: true,
    confirmButtonClass: \"btn-danger\",
    cancelButtonClass: \"btn-default\",
    dialogClass: \"modal-dialog modal-lg\" // Bootstrap classes for large modal
});  
     </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OPMUserBundle:User:AjoutUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 68,  102 => 67,  98 => 66,  93 => 64,  43 => 17,  35 => 12,  31 => 11,  19 => 1,);
    }
}
