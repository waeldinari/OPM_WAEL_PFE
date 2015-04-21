<?php

/* OPMUserBundle:Security:login.html.twig */
class __TwigTemplate_aa96484bdd52b936251fa4517a03b67cdf2392b11c130b9f4d06b7b870d9601c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "

    ";
        // line 17
        echo "    

";
        // line 24
        echo "

";
        // line 38
        echo "


<div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <br/>
        <br/>

        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"text-center\">Bienvenue dans Oxia-group</h1>
            </div>
            <div class=\"modal-body\">    
                <form class=\"form col-md-12 center-block\" action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <br/>
                    <br/>
                    <br/>

                    <div class=\"form-group\"> 
                        <label for=\"inputNom\" class=\"col-sm-2 control-label\">Nom d'utilisateur</label>
                        <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" id=\"basic-addon1\"></span></span>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  autofocus=\"autofocus\"  class=\"form-control input-lg\" placeholder=\"nom d'utilisateur\"/>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <!--
                                        <div class=\"form-group\">
                                            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email :</label>
                                            <div>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-alert\" id=\"basic-addon1\"></span></span>
                                                        <input type=\"email\"  class=\"form-control input-lg\" id=\"inputEmail3\" autofocus=\"autofocus\" required=\"required\" placeholder=\"email\">
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> !--> 
                    <br/>

                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Mot de passe :</label>
                        <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-star\" id=\"basic-addon1\"></span></span>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"mot de passe\" class=\"form-control input-lg\"/>
                            </div>
                        </div>
                    </div>


                    <br/>
                    <br/>
                    
   ";
        // line 103
        echo "
                    <br/>

                    <div>
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"><label for=\"remember_me\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-group\"> ";
        // line 110
        echo "                        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" id=\"_submit\" required=\"required\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Se connecter</button>


                        <span class=\"pull-right\"><a href=\"#\">Register</a></span><span><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié?</a></span>
                    </div>

                </form>

            </div>
            <div class=\"modal-footer\">
                <div class=\"col-md-12\">
                    <button class=\"btn btn-info\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
                </div>\t
            </div>
        </div>
    </div>
</div>

 

";
    }

    public function getTemplateName()
    {
        return "OPMUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 113,  140 => 110,  135 => 107,  129 => 103,  91 => 62,  78 => 52,  74 => 51,  59 => 38,  55 => 24,  51 => 17,  47 => 7,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
