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

/* about-us.php */
class __TwigTemplate_f3375c141eba24da70518418217788ac237571320fbe850e35aba8785c463669 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Hey</title>
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
\t
</head>


<body>
\t<main class='container'>
\t\t<section class='row' style='margin-top: 10%;'>
\t\t\t<div class='col-md-10'>
\t\t\t\t<div class='card'>
\t\t\t\t\t<div class='card-header'>
\t\t\t\t\t\t<h3>About Page</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='card-body'>
\t\t\t\t\t\t<p>Be the best you can ever become... be free.. fly...</p>

\t\t\t\t\t\t<p>This is a sample page...simple right? Common get to work! : )</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t</main>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "about-us.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about-us.php", "/Applications/MAMP/htdocs/php/resources/views/about-us.php");
    }
}
