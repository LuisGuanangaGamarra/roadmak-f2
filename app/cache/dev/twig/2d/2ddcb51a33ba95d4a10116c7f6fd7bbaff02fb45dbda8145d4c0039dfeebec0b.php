<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12598fbba53a1f3b52897a74a36a9f2b2b6f60b9e4ece4364b2c452a88ee0bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76112e10c743e518e020ebbf9ad65cff16e9233dd2e967a8511d8b0a07b3734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76112e10c743e518e020ebbf9ad65cff16e9233dd2e967a8511d8b0a07b3734e->enter($__internal_76112e10c743e518e020ebbf9ad65cff16e9233dd2e967a8511d8b0a07b3734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76112e10c743e518e020ebbf9ad65cff16e9233dd2e967a8511d8b0a07b3734e->leave($__internal_76112e10c743e518e020ebbf9ad65cff16e9233dd2e967a8511d8b0a07b3734e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2573aaad838826af6080d8116da493f509b16718333e31391f51ee749d821bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2573aaad838826af6080d8116da493f509b16718333e31391f51ee749d821bee->enter($__internal_2573aaad838826af6080d8116da493f509b16718333e31391f51ee749d821bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2573aaad838826af6080d8116da493f509b16718333e31391f51ee749d821bee->leave($__internal_2573aaad838826af6080d8116da493f509b16718333e31391f51ee749d821bee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5703a48b741ea0142da2270808136126190372504d071fb58004301a601fff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5703a48b741ea0142da2270808136126190372504d071fb58004301a601fff7->enter($__internal_a5703a48b741ea0142da2270808136126190372504d071fb58004301a601fff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5703a48b741ea0142da2270808136126190372504d071fb58004301a601fff7->leave($__internal_a5703a48b741ea0142da2270808136126190372504d071fb58004301a601fff7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_570a1e3d0c2b110cb9d9f358448e1557f5095d83258636db68700f242b09a700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570a1e3d0c2b110cb9d9f358448e1557f5095d83258636db68700f242b09a700->enter($__internal_570a1e3d0c2b110cb9d9f358448e1557f5095d83258636db68700f242b09a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_570a1e3d0c2b110cb9d9f358448e1557f5095d83258636db68700f242b09a700->leave($__internal_570a1e3d0c2b110cb9d9f358448e1557f5095d83258636db68700f242b09a700_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/roadmakshop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
