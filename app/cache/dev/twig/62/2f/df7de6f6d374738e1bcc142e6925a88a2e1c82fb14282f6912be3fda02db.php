<?php

/* OPMPerdiemsBundle:Banque:Banque.html.twig */
class __TwigTemplate_622fdf7de6f6d374738e1bcc142e6925a88a2e1c82fb14282f6912be3fda02db extends Twig_Template
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
        echo "<script>\$('#myModal').on('show', function() {
        var tit = \$('.confirm-delete').data('title');

        \$('#myModal .modal-body p').html(\"Desea eliminar al usuario \" + '<b>' + tit + '</b>' + ' ?');
        var id = \$(this).data('id'),
                removeBtn = \$(this).find('.danger');
    })

    \$('.confirm-delete').on('click', function(e) {
        e.preventDefault();

        var id = \$(this).data('id');
        \$('#myModal').data('id', id).modal('show');
    });

    \$('#btnYes').click(function() {
        // handle deletion here
        var id = \$('#myModal').data('id');
        \$('[data-id=' + id + ']').parents('tr').remove();
        \$('#myModal').modal('hide');
    });</script>

<div id=\"page-wrapper\">

    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Perdiems Banque
                </h1>
                <ol class=\"breadcrumb\">
                    <li>
                        <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Principale</a>
                    </li>
                    <li class=\"active\">
                        <i class=\"glyphicon glyphicon-usd\"></i> Perdiems
                    </li>
                </ol>
            </div>
        </div>
        <br/> <!-- boutton bleu il doit etre pluss ou search ou .... -->
        <!-- Button trigger modal -->
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-plus\"></span>
            Ajouter information compte
        </button>
        
        <br/>

        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter perdiems montant</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form>
                            <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">ID</label>
                                <input type=\"number\" class=\"form-control\" id=\"exampleInputID\" placeholder=\"id\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Destination</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputDestination\" placeholder=\"description\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputNum\">Numéro de compte</label>
                                <input type=\"number\" class=\"form-control\" id=\"exampleInputNum\" placeholder=\"numéro de compte\">
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
                        <th>Id</th>
                        <th>Description</th>
                        <th>Num de Compte </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class=\"active\">
                        <td>/index.html</td>
                        <td>1265</td>
                        <td>32.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>  <!-- on peut changer coulour a partir de class=\"active\" ou warning ... dans trrr  !-->
                        <td>/about.html</td>
                        <td>261</td>
                        <td>33.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>
                        <td>/sales.html</td>
                        <td>665</td>
                        <td>21.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>
                        <td>/blog.html</td>
                        <td>9516</td>
                        <td>89.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>
                        <td>/404.html</td>
                        <td>23</td>
                        <td>34.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>
                        <td>/services.html</td>
                        <td>421</td>
                        <td>60.3%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                    <tr>
                        <td>/blog/post.html</td>
                        <td>1233</td>
                        <td>93.2%</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span></a> Modifier</td>
                        <td> <a href=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>  Supprimer</td>
                    </tr>
                </tbody>
            </table>
        </div>

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
    <!-- /.row -->
    <div id=\"myModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                    <h3 id=\"myModalLabel\">Delete</h3>

                </div>
                <div class=\"modal-body\">
                    <p></p>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button data-dismiss=\"modal\" class=\"btn btn-default red\"id=\"btnYes\">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <table class=\"table table-striped table-hover table-users\">
        <thead>
            <tr>
                <th class=\"hidden-sm\">Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th class=\"hidden-sm\">Email</th>
                <th class=\"hidden-sm\">Provincia</th>
                <th class=\"hidden-sm\">Miembro desde</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=\"hidden-sm\">johnny</td>
                <td>john</td>
                <td>doe</td>
                <td class=\"hidden-sm\">dsd@gmail.com</td>
                <td class=\"hidden-sm\">active</td>
                <td class=\"hidden-sm\">10/12/1999</td>
                <td><span class=\"label label-warning\">Not Active</span>

                </td>
                <td><a class=\"btn btn-default mini blue-stripe\" href=\"{site_url()}admin/editFront/1\">Edit</a>

                </td>
                <td><a href=\"#\" class=\"confirm-delete btn btn-default mini red-stripe\" role=\"button\"
                       data-title=\"johnny\" data-id=\"1\">Delete</a>

                </td>
            </tr>
            <tr>
                <td class=\"hidden-sm\">kitty</td>
                <td>jane</td>
                <td>doe</td>
                <td class=\"hidden-sm\">dasasasd@gmail.com</td>
                <td class=\"hidden-sm\">active</td>
                <td class=\"hidden-sm\">10/1/1999</td>
                <td><span class=\"label label-danger\">Activo</span>

                </td>
                <td><a class=\"btn btn-default mini blue-stripe\" href=\"{site_url()}admin/editFront/2\">Edit</a>

                </td>
                <td><a href=\"#\" class=\"confirm-delete btn btn-default mini red-stripe\" role=\"button\"
                       data-title=\"kitty\" data-id=\"2\">Delete</a>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

";
    }

    public function getTemplateName()
    {
        return "OPMPerdiemsBundle:Banque:Banque.html.twig";
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
