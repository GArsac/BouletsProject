<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9215bac4f74ed8302c343dfbf8f4f33e041399a114365f803977034652f49de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c7f76af313dbafcc3329b61da5789b14e0a40354417d7f8907e94fd9a7a23686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f76af313dbafcc3329b61da5789b14e0a40354417d7f8907e94fd9a7a23686->enter($__internal_c7f76af313dbafcc3329b61da5789b14e0a40354417d7f8907e94fd9a7a23686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7f76af313dbafcc3329b61da5789b14e0a40354417d7f8907e94fd9a7a23686->leave($__internal_c7f76af313dbafcc3329b61da5789b14e0a40354417d7f8907e94fd9a7a23686_prof);
=======
        $__internal_a5e4bf4df6ff45aea44eed729931662a83a20767292ad013041a78bb89e35434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e4bf4df6ff45aea44eed729931662a83a20767292ad013041a78bb89e35434->enter($__internal_a5e4bf4df6ff45aea44eed729931662a83a20767292ad013041a78bb89e35434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e4bf4df6ff45aea44eed729931662a83a20767292ad013041a78bb89e35434->leave($__internal_a5e4bf4df6ff45aea44eed729931662a83a20767292ad013041a78bb89e35434_prof);
>>>>>>> origin/tableau_parc

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_56a38763a2392db404815edb86f8d4f5501d01e1bb45c2053ea87dcc7da306b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a38763a2392db404815edb86f8d4f5501d01e1bb45c2053ea87dcc7da306b4->enter($__internal_56a38763a2392db404815edb86f8d4f5501d01e1bb45c2053ea87dcc7da306b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/ajax.html.twig"));
=======
        $__internal_4cc8a1b5c1c91c29f89371f4acf29a5eb7dda62f079dbed0d0e67b50d69fad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc8a1b5c1c91c29f89371f4acf29a5eb7dda62f079dbed0d0e67b50d69fad7f->enter($__internal_4cc8a1b5c1c91c29f89371f4acf29a5eb7dda62f079dbed0d0e67b50d69fad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/ajax.html.twig"));
>>>>>>> origin/tableau_parc

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
<<<<<<< HEAD
        $__internal_56a38763a2392db404815edb86f8d4f5501d01e1bb45c2053ea87dcc7da306b4->leave($__internal_56a38763a2392db404815edb86f8d4f5501d01e1bb45c2053ea87dcc7da306b4_prof);
=======
        $__internal_4cc8a1b5c1c91c29f89371f4acf29a5eb7dda62f079dbed0d0e67b50d69fad7f->leave($__internal_4cc8a1b5c1c91c29f89371f4acf29a5eb7dda62f079dbed0d0e67b50d69fad7f_prof);
>>>>>>> origin/tableau_parc

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  72 => 28,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
