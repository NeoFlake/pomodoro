<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
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
        $__internal_df0cb68c43fd158fac2e0b8178e95096898c70af7bdb6060c3bf54e07f78896d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0cb68c43fd158fac2e0b8178e95096898c70af7bdb6060c3bf54e07f78896d->enter($__internal_df0cb68c43fd158fac2e0b8178e95096898c70af7bdb6060c3bf54e07f78896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d31428c8dd197c550a8232673b08e706b91d20b82119ef947cf1c19af9f1b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d31428c8dd197c550a8232673b08e706b91d20b82119ef947cf1c19af9f1b51->enter($__internal_8d31428c8dd197c550a8232673b08e706b91d20b82119ef947cf1c19af9f1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0cb68c43fd158fac2e0b8178e95096898c70af7bdb6060c3bf54e07f78896d->leave($__internal_df0cb68c43fd158fac2e0b8178e95096898c70af7bdb6060c3bf54e07f78896d_prof);

        
        $__internal_8d31428c8dd197c550a8232673b08e706b91d20b82119ef947cf1c19af9f1b51->leave($__internal_8d31428c8dd197c550a8232673b08e706b91d20b82119ef947cf1c19af9f1b51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afa34041fdf2e3f5cd2425da97823ecb7562d6876006b9d3fce929202626dc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa34041fdf2e3f5cd2425da97823ecb7562d6876006b9d3fce929202626dc3c->enter($__internal_afa34041fdf2e3f5cd2425da97823ecb7562d6876006b9d3fce929202626dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b6bc64f830189039fd96a280580c527085e11116003111f8da2cbb209c98f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6bc64f830189039fd96a280580c527085e11116003111f8da2cbb209c98f73->enter($__internal_6b6bc64f830189039fd96a280580c527085e11116003111f8da2cbb209c98f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b6bc64f830189039fd96a280580c527085e11116003111f8da2cbb209c98f73->leave($__internal_6b6bc64f830189039fd96a280580c527085e11116003111f8da2cbb209c98f73_prof);

        
        $__internal_afa34041fdf2e3f5cd2425da97823ecb7562d6876006b9d3fce929202626dc3c->leave($__internal_afa34041fdf2e3f5cd2425da97823ecb7562d6876006b9d3fce929202626dc3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28c0c9194d3c9eacf1a3b9085fc2af6084ceb25ba77d5ff5ad84559b6f68ae4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c0c9194d3c9eacf1a3b9085fc2af6084ceb25ba77d5ff5ad84559b6f68ae4f->enter($__internal_28c0c9194d3c9eacf1a3b9085fc2af6084ceb25ba77d5ff5ad84559b6f68ae4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_790c4053d8324aa82c490f7489726c672574530db1b1f8d3c5c039ed19e7b7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790c4053d8324aa82c490f7489726c672574530db1b1f8d3c5c039ed19e7b7a4->enter($__internal_790c4053d8324aa82c490f7489726c672574530db1b1f8d3c5c039ed19e7b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_790c4053d8324aa82c490f7489726c672574530db1b1f8d3c5c039ed19e7b7a4->leave($__internal_790c4053d8324aa82c490f7489726c672574530db1b1f8d3c5c039ed19e7b7a4_prof);

        
        $__internal_28c0c9194d3c9eacf1a3b9085fc2af6084ceb25ba77d5ff5ad84559b6f68ae4f->leave($__internal_28c0c9194d3c9eacf1a3b9085fc2af6084ceb25ba77d5ff5ad84559b6f68ae4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74ec160a838fa643863233eef6003ad18303a36caaef8994ce7e544eabd3f437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ec160a838fa643863233eef6003ad18303a36caaef8994ce7e544eabd3f437->enter($__internal_74ec160a838fa643863233eef6003ad18303a36caaef8994ce7e544eabd3f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a67b72e6c3daae035a46d8d206847c96640b2ec974e353b5cbb9b772a18ff1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67b72e6c3daae035a46d8d206847c96640b2ec974e353b5cbb9b772a18ff1f3->enter($__internal_a67b72e6c3daae035a46d8d206847c96640b2ec974e353b5cbb9b772a18ff1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a67b72e6c3daae035a46d8d206847c96640b2ec974e353b5cbb9b772a18ff1f3->leave($__internal_a67b72e6c3daae035a46d8d206847c96640b2ec974e353b5cbb9b772a18ff1f3_prof);

        
        $__internal_74ec160a838fa643863233eef6003ad18303a36caaef8994ce7e544eabd3f437->leave($__internal_74ec160a838fa643863233eef6003ad18303a36caaef8994ce7e544eabd3f437_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/simplonmars/dev/projets/pomodoro/pomodoro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
