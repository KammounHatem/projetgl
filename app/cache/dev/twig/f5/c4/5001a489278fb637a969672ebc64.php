<?php

/* AcmeGestionBundle:Default:index.html.twig */
class __TwigTemplate_f5c45001a489278fb637a969672ebc64 extends Twig_Template
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
<title>Gestion produits logiciels</title>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />

<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
</head>
<body>
<!-- start header -->
<div id=\"header\">
\t<div id=\"logo\">
\t\t<h1><a href=\"#\">Gestion Produits logiciels </a></h1>
\t\t<h2><a href=\"\">By KEMBAM </a></h2>
\t</div>
\t<div id=\"menu\">
\t\t<ul>
\t\t\t<li><a href=\"#\" accesskey=\"1\" title=\"\">Home</a></li>
\t\t\t<li><a href=\"http://localhost:82/Gestion/web/app_dev.php/admin\" accesskey=\"2\" title=\"\">Adminstrateur</a></li>
\t\t\t<li class=\"active\"><a href=\"http://localhost:82/Gestion/web/app_dev.php/hello\" accesskey=\"3\" title=\"\">Responsable</a></li>
\t\t\t<li><a href=\"#\" accesskey=\"4\" title=\"\">About</a></li>
\t\t\t<li><a href=\"#\" accesskey=\"5\" title=\"\">Contact</a></li>
\t\t</ul>
\t</div>
</div>
<!-- end header -->
<div id=\"gallery\">
\t<div id=\"top-photo\">
\t\t<p><a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img08.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"830\" height=\"300\" /></a></p>
\t</div>
</div>

<!-- start page -->
<div id=\"page\">
\t<!-- start content -->
\t<div id=\"content\">
\t\t<div class=\"post\">
\t\t\t<h1 class=\"title\">Bonjour Responsable</h1>
\t\t\t<div class=\"entry\">
\t\t\t
                        <h1> Gestion des Produits </h1>
\t\t\t<li><a href=\"http://localhost:82/Gestion/web/app_dev.php/ajoutproduit\">ajout un produit </a></li>
                        <li><a href=\"http://localhost:82/Gestion/web/app_dev.php/listeproduit\">gerer les produits </a></li>
\t\t          </div>
\t\t<div class=\"post\">
\t\t\t<div class=\"entry\">
                         <h1> Gestion des composants </h1>
\t\t\t<li><a href=\"http://localhost:82/Gestion/web/app_dev.php/ajoutcomp\">ajout Composant </a></li>
                        <li><a href=\"http://localhost:82/Gestion/web/app_dev.php/listecomp\">gerer les Composants </a></li>
\t\t\t</div>
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
\t<p>&copy;2013 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href=\"\">KEMBAM</a></p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeGestionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  29 => 9,  19 => 1,);
    }
}
