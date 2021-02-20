<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/layout/layout.twig */
class __TwigTemplate_d59a2b7bf8278cb287b627fd50bd19e3c2638a319582e1f5d40db3ac34df9606 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"fr\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">
      ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    <!-- Bootstrap core CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
</head>

<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap py- shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "dashboard"], "method", false, false, false, 20), "html", null, true);
        echo "\">Administration</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"navbar-nav px-3\">
    <li class=\"nav-item text-nowrap\">
      <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "logout"], "method", false, false, false, 26), "html", null, true);
        echo "\" method=\"post\" class=\"m-0\">
        <button type=\"submit\" class=\"btn btn-dark\">Se déconnecter</button> 
      </form>
    </li>
  </ul>
</header>

<body class=\"d-flex flex-column h-100\">
  <div class=\"container-fluid h-100\">
    <div class=\"row h-100\">
        ";
        // line 36
        $this->loadTemplate("admin/_menu.twig", "admin/layout/layout.twig", 36)->display($context);
        // line 37
        echo "        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3\">
          ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        </main>
    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>

</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <title>Accueil administration</title>
        <meta name=\"description\" content=\"Accueil administration\">
      ";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "          ";
    }

    public function getTemplateName()
    {
        return "admin/layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  112 => 38,  106 => 9,  102 => 8,  89 => 40,  87 => 38,  84 => 37,  82 => 36,  69 => 26,  60 => 20,  50 => 12,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">
      {% block head %}
        <title>Accueil administration</title>
        <meta name=\"description\" content=\"Accueil administration\">
      {% endblock %}
    <!-- Bootstrap core CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
</head>

<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap py- shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"{{ router.url('dashboard')}}\">Administration</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"navbar-nav px-3\">
    <li class=\"nav-item text-nowrap\">
      <form action=\"{{ router.url('logout') }}\" method=\"post\" class=\"m-0\">
        <button type=\"submit\" class=\"btn btn-dark\">Se déconnecter</button> 
      </form>
    </li>
  </ul>
</header>

<body class=\"d-flex flex-column h-100\">
  <div class=\"container-fluid h-100\">
    <div class=\"row h-100\">
        {% include 'admin/_menu.twig' %}
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3\">
          {% block content %}
          {% endblock %}
        </main>
    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>

</html>
", "admin/layout/layout.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\layout\\layout.twig");
    }
}
