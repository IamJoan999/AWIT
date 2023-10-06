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

/* base.html.twig */
class __TwigTemplate_2f53b162e17ab809c8e1a7d14345f3f28164ceb2e44e459f1c60bfabb02907cf extends Template
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
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>

<html>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "\t\t";
        $this->displayBlock('main', $context, $blocks);
        // line 373
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 379
        echo "\t</div>

\t<!-- BG -->
\t<div id=\"bg\"></div>

\t<!-- Scripts -->
\t<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "<head>
\t<title>Dimension by HTML5 UP</title>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
\t<noscript>
\t\t<link rel=\"stylesheet\" href=\"assets/css/noscript.css\" />
\t</noscript>
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "<body class=\"is-preload\">

\t<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<div class=\"logo\">
\t\t\t\t<span class=\"icon fa-gem\"></span>
\t\t\t</div>
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h1>Dimension</h1>
\t\t\t\t\t<p>A fully responsive site template designed by <a href=\"https://html5up.net\">HTML5 UP</a> and
\t\t\t\t\t\treleased<br />
\t\t\t\t\t\tfor free under the <a href=\"https://html5up.net/license\">Creative Commons</a> license.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#intro\">Intro</a></li>
\t\t\t\t\t<li><a href=\"#work\">Work</a></li>
\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t\t<!--<li><a href=\"#elements\">Elements</a></li>-->
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 46
        echo "\t\t<!-- Main -->
\t\t<div id=\"main\">

\t\t\t<!-- Intro -->
\t\t\t<article id=\"intro\">
\t\t\t\t<h2 class=\"major\">Intro</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic01.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum
\t\t\t\t\tcongue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut
\t\t\t\t\tmagna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. By the way, check out my <a
\t\t\t\t\t\thref=\"#work\">awesome work</a>.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent
\t\t\t\t\ttaciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique
\t\t\t\t\tlibero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut
\t\t\t\t\tultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor.
\t\t\t\t\tNunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique
\t\t\t\t\tsenectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus.
\t\t\t\t\tPellentesque aliquam maximus risus, vel sed vehicula.</p>
\t\t\t</article>

\t\t\t<!-- Work -->
\t\t\t<article id=\"work\">
\t\t\t\t<h2 class=\"major\">Work</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic02.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac.
\t\t\t\t\tAliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer
\t\t\t\t\tsollicitudin mauris nec lorem luctus ultrices.</p>
\t\t\t\t<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna
\t\t\t\t\tsed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas
\t\t\t\t\tlaoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat
\t\t\t\t\ttincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat
\t\t\t\t\ttempus.</p>
\t\t\t</article>

\t\t\t<!-- About -->
\t\t\t<article id=\"about\">
\t\t\t\t<h2 class=\"major\">About</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic03.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at
\t\t\t\t\teleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
\t\t\t\t\tlacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada
\t\t\t\t\tfames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum
\t\t\t\t\tdolor sit amet.</p>
\t\t\t</article>

\t\t\t<!-- Contact -->
\t\t\t<article id=\"contact\">
\t\t\t\t<h2 class=\"major\">Contact</h2>
\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"primary\" /></li>
\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t</ul>
\t\t\t\t</form>
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t</ul>
\t\t\t</article>

\t\t\t<!-- Elements -->
\t\t\t<article id=\"elements\">
\t\t\t\t<h2 class=\"major\">Elements</h2>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Text</h3>
\t\t\t\t\t<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is
\t\t\t\t\t\t<em>emphasized</em>.
\t\t\t\t\t\tThis is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
\t\t\t\t\t\tThis is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a
\t\t\t\t\t\t\thref=\"#\">this is a link</a>.</p>
\t\t\t\t\t<hr />
\t\t\t\t\t<h2>Heading Level 2</h2>
\t\t\t\t\t<h3>Heading Level 3</h3>
\t\t\t\t\t<h4>Heading Level 4</h4>
\t\t\t\t\t<h5>Heading Level 5</h5>
\t\t\t\t\t<h6>Heading Level 6</h6>
\t\t\t\t\t<hr />
\t\t\t\t\t<h4>Blockquote</h4>
\t\t\t\t\t<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus
\t\t\t\t\t\teuismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis
\t\t\t\t\t\tiaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem
\t\t\t\t\t\tipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
\t\t\t\t\t<h4>Preformatted</h4>
\t\t\t\t\t<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Lists</h3>

\t\t\t\t\t<h4>Unordered</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Sagittis adipiscing.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Alternate</h4>
\t\t\t\t\t<ul class=\"alt\">
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Sagittis adipiscing.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Ordered</h4>
\t\t\t\t\t<ol>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Etiam vel felis viverra.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Etiam vel felis lorem.</li>
\t\t\t\t\t\t<li>Felis enim et feugiat.</li>
\t\t\t\t\t</ol>
\t\t\t\t\t<h4>Icons</h4>
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">Github</span></a></li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Actions</h4>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions stacked\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Table</h3>
\t\t\t\t\t<h4>Default</h4>
\t\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item One</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Two</td>
\t\t\t\t\t\t\t\t\t<td>Vis ac commodo adipiscing arcu aliquet.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Three</td>
\t\t\t\t\t\t\t\t\t<td> Morbi faucibus arcu accumsan lorem.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Four</td>
\t\t\t\t\t\t\t\t\t<td>Vitae integer tempus condimentum.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Five</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t<td>100.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<h4>Alternate</h4>
\t\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t\t<table class=\"alt\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item One</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Two</td>
\t\t\t\t\t\t\t\t\t<td>Vis ac commodo adipiscing arcu aliquet.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Three</td>
\t\t\t\t\t\t\t\t\t<td> Morbi faucibus arcu accumsan lorem.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Four</td>
\t\t\t\t\t\t\t\t\t<td>Vitae integer tempus condimentum.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Five</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t<td>100.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Buttons</h3>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Primary</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button small\">Small</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary icon solid fa-download\">Icon</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button icon solid fa-download\">Icon</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><span class=\"button primary disabled\">Disabled</span></li>
\t\t\t\t\t\t<li><span class=\"button disabled\">Disabled</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Form</h3>
\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<label for=\"demo-name\">Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"demo-name\" id=\"demo-name\" value=\"\" placeholder=\"Jane Doe\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<label for=\"demo-email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"demo-email\" id=\"demo-email\" value=\"\"
\t\t\t\t\t\t\t\t\tplaceholder=\"jane@untitled.tld\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<label for=\"demo-category\">Category</label>
\t\t\t\t\t\t\t\t<select name=\"demo-category\" id=\"demo-category\">
\t\t\t\t\t\t\t\t\t<option value=\"\">-</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Manufacturing</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Shipping</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Administration</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Human Resources</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"demo-priority-low\" name=\"demo-priority\" checked>
\t\t\t\t\t\t\t\t<label for=\"demo-priority-low\">Low</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"demo-priority-high\" name=\"demo-priority\">
\t\t\t\t\t\t\t\t<label for=\"demo-priority-high\">High</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"demo-copy\" name=\"demo-copy\">
\t\t\t\t\t\t\t\t<label for=\"demo-copy\">Email me a copy</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"demo-human\" name=\"demo-human\" checked>
\t\t\t\t\t\t\t\t<label for=\"demo-human\">Not a robot</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<label for=\"demo-message\">Message</label>
\t\t\t\t\t\t\t\t<textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Enter your message\"
\t\t\t\t\t\t\t\t\trows=\"6\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"primary\" /></li>
\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</form>
\t\t\t\t</section>

\t\t\t</article>

\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 373
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 374
        echo "\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t<p class=\"copyright\">&copy; MOI.</p>
\t\t</footer>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 374,  527 => 373,  191 => 46,  181 => 45,  143 => 16,  133 => 15,  117 => 9,  111 => 5,  101 => 4,  86 => 389,  82 => 388,  78 => 387,  74 => 386,  70 => 385,  62 => 379,  59 => 373,  56 => 45,  54 => 15,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>

<html>
{% block head %}
<head>
\t<title>Dimension by HTML5 UP</title>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
\t<noscript>
\t\t<link rel=\"stylesheet\" href=\"assets/css/noscript.css\" />
\t</noscript>
</head>
{% endblock %}
{% block header %}
<body class=\"is-preload\">

\t<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<div class=\"logo\">
\t\t\t\t<span class=\"icon fa-gem\"></span>
\t\t\t</div>
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h1>Dimension</h1>
\t\t\t\t\t<p>A fully responsive site template designed by <a href=\"https://html5up.net\">HTML5 UP</a> and
\t\t\t\t\t\treleased<br />
\t\t\t\t\t\tfor free under the <a href=\"https://html5up.net/license\">Creative Commons</a> license.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#intro\">Intro</a></li>
\t\t\t\t\t<li><a href=\"#work\">Work</a></li>
\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t\t<!--<li><a href=\"#elements\">Elements</a></li>-->
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t{% endblock %}
\t\t{% block main %}
\t\t<!-- Main -->
\t\t<div id=\"main\">

\t\t\t<!-- Intro -->
\t\t\t<article id=\"intro\">
\t\t\t\t<h2 class=\"major\">Intro</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic01.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum
\t\t\t\t\tcongue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut
\t\t\t\t\tmagna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. By the way, check out my <a
\t\t\t\t\t\thref=\"#work\">awesome work</a>.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent
\t\t\t\t\ttaciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique
\t\t\t\t\tlibero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut
\t\t\t\t\tultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor.
\t\t\t\t\tNunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique
\t\t\t\t\tsenectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus.
\t\t\t\t\tPellentesque aliquam maximus risus, vel sed vehicula.</p>
\t\t\t</article>

\t\t\t<!-- Work -->
\t\t\t<article id=\"work\">
\t\t\t\t<h2 class=\"major\">Work</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic02.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac.
\t\t\t\t\tAliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer
\t\t\t\t\tsollicitudin mauris nec lorem luctus ultrices.</p>
\t\t\t\t<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna
\t\t\t\t\tsed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas
\t\t\t\t\tlaoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat
\t\t\t\t\ttincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat
\t\t\t\t\ttempus.</p>
\t\t\t</article>

\t\t\t<!-- About -->
\t\t\t<article id=\"about\">
\t\t\t\t<h2 class=\"major\">About</h2>
\t\t\t\t<span class=\"image main\"><img src=\"images/pic03.jpg\" alt=\"\" /></span>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at
\t\t\t\t\teleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
\t\t\t\t\tlacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada
\t\t\t\t\tfames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum
\t\t\t\t\tdolor sit amet.</p>
\t\t\t</article>

\t\t\t<!-- Contact -->
\t\t\t<article id=\"contact\">
\t\t\t\t<h2 class=\"major\">Contact</h2>
\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"primary\" /></li>
\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t</ul>
\t\t\t\t</form>
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t</ul>
\t\t\t</article>

\t\t\t<!-- Elements -->
\t\t\t<article id=\"elements\">
\t\t\t\t<h2 class=\"major\">Elements</h2>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Text</h3>
\t\t\t\t\t<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is
\t\t\t\t\t\t<em>emphasized</em>.
\t\t\t\t\t\tThis is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
\t\t\t\t\t\tThis is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a
\t\t\t\t\t\t\thref=\"#\">this is a link</a>.</p>
\t\t\t\t\t<hr />
\t\t\t\t\t<h2>Heading Level 2</h2>
\t\t\t\t\t<h3>Heading Level 3</h3>
\t\t\t\t\t<h4>Heading Level 4</h4>
\t\t\t\t\t<h5>Heading Level 5</h5>
\t\t\t\t\t<h6>Heading Level 6</h6>
\t\t\t\t\t<hr />
\t\t\t\t\t<h4>Blockquote</h4>
\t\t\t\t\t<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus
\t\t\t\t\t\teuismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis
\t\t\t\t\t\tiaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem
\t\t\t\t\t\tipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
\t\t\t\t\t<h4>Preformatted</h4>
\t\t\t\t\t<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Lists</h3>

\t\t\t\t\t<h4>Unordered</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Sagittis adipiscing.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Alternate</h4>
\t\t\t\t\t<ul class=\"alt\">
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Sagittis adipiscing.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Ordered</h4>
\t\t\t\t\t<ol>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Etiam vel felis viverra.</li>
\t\t\t\t\t\t<li>Felis enim feugiat.</li>
\t\t\t\t\t\t<li>Dolor pulvinar etiam.</li>
\t\t\t\t\t\t<li>Etiam vel felis lorem.</li>
\t\t\t\t\t\t<li>Felis enim et feugiat.</li>
\t\t\t\t\t</ol>
\t\t\t\t\t<h4>Icons</h4>
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">Github</span></a></li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Actions</h4>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions stacked\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Table</h3>
\t\t\t\t\t<h4>Default</h4>
\t\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item One</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Two</td>
\t\t\t\t\t\t\t\t\t<td>Vis ac commodo adipiscing arcu aliquet.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Three</td>
\t\t\t\t\t\t\t\t\t<td> Morbi faucibus arcu accumsan lorem.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Four</td>
\t\t\t\t\t\t\t\t\t<td>Vitae integer tempus condimentum.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Five</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t<td>100.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<h4>Alternate</h4>
\t\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t\t<table class=\"alt\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item One</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Two</td>
\t\t\t\t\t\t\t\t\t<td>Vis ac commodo adipiscing arcu aliquet.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Three</td>
\t\t\t\t\t\t\t\t\t<td> Morbi faucibus arcu accumsan lorem.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Four</td>
\t\t\t\t\t\t\t\t\t<td>Vitae integer tempus condimentum.</td>
\t\t\t\t\t\t\t\t\t<td>19.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Item Five</td>
\t\t\t\t\t\t\t\t\t<td>Ante turpis integer aliquet porttitor.</td>
\t\t\t\t\t\t\t\t\t<td>29.99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t<td>100.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Buttons</h3>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary\">Primary</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Default</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button small\">Small</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"button primary icon solid fa-download\">Icon</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"button icon solid fa-download\">Icon</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t<li><span class=\"button primary disabled\">Disabled</span></li>
\t\t\t\t\t\t<li><span class=\"button disabled\">Disabled</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>

\t\t\t\t<section>
\t\t\t\t\t<h3 class=\"major\">Form</h3>
\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<label for=\"demo-name\">Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"demo-name\" id=\"demo-name\" value=\"\" placeholder=\"Jane Doe\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<label for=\"demo-email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"demo-email\" id=\"demo-email\" value=\"\"
\t\t\t\t\t\t\t\t\tplaceholder=\"jane@untitled.tld\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<label for=\"demo-category\">Category</label>
\t\t\t\t\t\t\t\t<select name=\"demo-category\" id=\"demo-category\">
\t\t\t\t\t\t\t\t\t<option value=\"\">-</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Manufacturing</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Shipping</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Administration</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Human Resources</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"demo-priority-low\" name=\"demo-priority\" checked>
\t\t\t\t\t\t\t\t<label for=\"demo-priority-low\">Low</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"demo-priority-high\" name=\"demo-priority\">
\t\t\t\t\t\t\t\t<label for=\"demo-priority-high\">High</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"demo-copy\" name=\"demo-copy\">
\t\t\t\t\t\t\t\t<label for=\"demo-copy\">Email me a copy</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"demo-human\" name=\"demo-human\" checked>
\t\t\t\t\t\t\t\t<label for=\"demo-human\">Not a robot</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<label for=\"demo-message\">Message</label>
\t\t\t\t\t\t\t\t<textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Enter your message\"
\t\t\t\t\t\t\t\t\trows=\"6\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"primary\" /></li>
\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</form>
\t\t\t\t</section>

\t\t\t</article>

\t\t</div>
\t\t{% endblock %}
\t\t{% block footer %}
\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t<p class=\"copyright\">&copy; MOI.</p>
\t\t</footer>
\t\t{% endblock %}
\t</div>

\t<!-- BG -->
\t<div id=\"bg\"></div>

\t<!-- Scripts -->
\t<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/browser.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/breakpoints.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/util.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>

</html>", "base.html.twig", "C:\\wamp\\www\\Cours\\AWIT\\Awit\\templates\\base.html.twig");
    }
}
