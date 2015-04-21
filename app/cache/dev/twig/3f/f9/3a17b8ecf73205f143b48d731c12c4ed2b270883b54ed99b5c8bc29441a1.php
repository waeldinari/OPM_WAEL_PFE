<?php

/* OPMPerdiemsBundle:Perdiems:FraisTimbres.html.twig */
class __TwigTemplate_3ff93a17b8ecf73205f143b48d731c12c4ed2b270883b54ed99b5c8bc29441a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("OPMOPMBundle::layout2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OPMOPMBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

<div id=\"page-wrapper\">

    <div class=\"container-fluid\">
        <h1 class=\"page-header\">
            Principale frais et timbres
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Principale</a>
            </li>
            <li class=\"active\">
                <i class=\"glyphicon glyphicon-gbp\"></i> Frais et timbres
            </li>
        </ol>

        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"Daftar\">

                <br/> <!-- boutton bleu il doit etre pluss ou search ou .... -->
                <!-- Button trigger modal -->
                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-plus\"></span>
                    Ajouter FraisTimbres_Montant
                </button>
                <br/>


                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter frais et timbres montant</h4>
                            </div>
                            <div class=\"modal-body\">
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">ID</label>
                                        <input type=\"number\" class=\"form-control\" id=\"exampleInputID\" placeholder=\"id\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\">Montant</label>
                                        <input type=\"number\" class=\"form-control\" id=\"exampleInputMontant\" placeholder=\"montant\">
                                    </div>

                                </form>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-off\"></span> Close</button>
                                <button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-saved\"></span> Save changes</button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>  ID </th>
                                <th> Montant</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"active\">
                                <td>  1 </td>
                                <td> 80 </td>

                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>

                            <tr>
                                <td>  1 </td>
                                <td> 80 </td>

                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>

                            </tr>

                            <tr>
                                <td>  10 </td>
                                <td> UE </td>

                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>

                            </tr>
                            <tr>
                                <td>  10 </td>
                                <td> UE </td>

                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>

                            </tr>
                            <tr>

                                <td> UE </td>
                                <td> 110 </td> <!-- pour le boutton on change la class aussi -->
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                                <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- pagination ou tapie wael-->

                <ul class=\"pagination\">
                    <li class=\"disabled\"><a href=\"#\">&laquo;</a></li> <!-- pour que boutton de tapie roulant activé ou masqué-->
                    <li class=\"active\"><a href=\"#\">1</a></li> 
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">&laquo;</a></li>
                </ul>

            </div>
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"Tambah\">


            </div>

        </div>


    </div>


</div>
<!-- /.container-fluid -->

";
    }

    public function getTemplateName()
    {
        return "OPMPerdiemsBundle:Perdiems:FraisTimbres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
