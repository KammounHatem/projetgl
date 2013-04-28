<?php

/* AcmeGestionBundle:Product:listeproduit.html.twig */
class __TwigTemplate_d9f0e8b88a678b2072b46742c20c25e6 extends Twig_Template
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
<title>gestion produit logiciel </title>
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
\t\t<h1><a href=\"#\">Gestion produit logiciels</a></h1>
\t\t<h2><a href=\"\">By Keymba</a></h2>
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
                 
                 <h1> liste de composantes </h1>
                   <form name=\"form\">

<table width=\"400\" border=\"1\">\t
  <tr>
    
    <td width=\"32\">Titre</strong></td>
    <td width=\"51\">Clien</strong></td>
    <td width=\"38\">Version</strong></td>
    <td width=\"33\">Etat</strong></td>
    <td width=\"72\">liste</strong></td>
    <td width=\"98\">Modifier</td>
    <td width=\"98\">Supprimer</td>
  </tr>
\t\t
 <tr>
                       ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "produit"));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            echo "  
\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "client"), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "version"), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "etat"), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "liste"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_gestion_homepage12", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
                        <td> <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_gestion_homepage11", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))), "html", null, true);
            echo "\"> Supprimer </a> </td>
                          
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "\t\t
</table>

</form>
      ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "produit"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            echo " 
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "      <p>Aucun produit n'a été trouvée.</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "\t\t\t
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
\t<p>&copy;2013 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href=\"\">Keymba</a></p>
</div>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "AcmeGestionBundle:Product:listeproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  139 => 74,  129 => 72,  123 => 68,  113 => 64,  109 => 63,  105 => 62,  101 => 61,  97 => 60,  93 => 59,  89 => 58,  83 => 57,  54 => 31,  29 => 9,  19 => 1,);
    }
}
