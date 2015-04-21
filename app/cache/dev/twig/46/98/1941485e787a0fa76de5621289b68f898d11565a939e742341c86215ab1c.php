<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_46981941485e787a0fa76de5621289b68f898d11565a939e742341c86215ab1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<title>Authentification</title>
\t\t<meta name=\"generator\" content=\"Bootply\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/css/styles.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
              ";
        // line 21
        echo "         
\t</head> <!-- style=\"background:#333;\" -->
\t<body>
         
<!--login modal-->
<div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    
     ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "  
</div>

\t<!-- script references -->
\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm///ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"), "html", null, true);
        echo "\" ></script>
\t\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
                <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/opmopm/js/bootbox.min.js"), "html", null, true);
        echo "\" ></script>
\t</body>
</html>


";
    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 29
        echo "      ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  77 => 28,  67 => 36,  63 => 35,  59 => 34,  53 => 30,  51 => 28,  42 => 21,  38 => 14,  31 => 10,  20 => 1,);
    }
}
