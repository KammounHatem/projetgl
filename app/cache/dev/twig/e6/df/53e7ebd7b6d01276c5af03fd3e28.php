<?php

/* AcmeGestionBundle:Default:ajoutresponsable.html.twig */
class __TwigTemplate_e6df53e7ebd7b6d01276c5af03fd3e28 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<title>Gestion produit logiciels</title>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />

<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
</head>
<body>
<!-- start header -->
<div id=\"header\">
\t<div id=\"logo\">
\t\t<h1><a href=\"#\">Gestion produits logiciels</a></h1>
\t\t<h2><a href=\"\">By KEYMBA</a></h2>
\t</div>
\t<div id=\"menu\">
\t\t<ul>
\t\t\t<li><a href=\"#\" accesskey=\"1\" title=\"\">Home</a></li>
\t\t\t<li class=\"active\"><a href=\"http://localhost:82/Gestion/web/app_dev.php/admin\" accesskey=\"2\" title=\"\">Adminstrateur</a></li>
\t\t\t<li><a href=\"http://localhost:82/Gestion/web/app_dev.php/hello\" accesskey=\"3\" title=\"\">Responsable</a></li>
\t\t\t<li><a href=\"#\" accesskey=\"4\" title=\"\">About</a></li>
\t\t\t<li><a href=\"#\" accesskey=\"5\" title=\"\">Contact</a></li>
\t\t</ul>
\t</div>
</div>
<!-- end header -->
<div id=\"gallery\">
\t<div id=\"top-photo\">
\t\t<p><a href=\"#\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img08.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"830\" height=\"300\" /></a></p>
\t</div>
</div>

<!-- start page -->
<div id=\"page\">
\t<!-- start content -->
\t<div id=\"content\">
\t\t<div class=\"post\">
                 <h1> bonjour </h1>
                 <h1> Ajout Responsable </h1>
\t\t\t<form  action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_gestion_homepage1"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                                  <input type=\"submit\" class=\"btn btn-primary\"/>
                         </form>
\t\t<div class=\"post\">
\t\t\t
\t\t</div>
\t</div>
\t<!-- end content -->
\t<!-- start sidebar -->
\t
\t<!-- end sidebar -->
</div>
<div style=\"clear: both; height: 30px\">&nbsp;</div>
<!-- end page -->
<div id=\"footer\">
\t<p>&copy;2013 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href=\"\">keymba</a></p>
</div>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "AcmeGestionBundle:Default:ajoutresponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 44,  72 => 43,  58 => 32,  33 => 10,  29 => 9,  19 => 1,);
    }
}
