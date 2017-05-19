<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e861c63a316a867bcbc46b565a83910cb541c99f51c92eeac2e9b523cd315c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e861c63a316a867bcbc46b565a83910cb541c99f51c92eeac2e9b523cd315c82->enter($__internal_e861c63a316a867bcbc46b565a83910cb541c99f51c92eeac2e9b523cd315c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4462a6289dc67ca5289c5767c1ff824de12f877acc3f454cc2528a0ff27ca7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4462a6289dc67ca5289c5767c1ff824de12f877acc3f454cc2528a0ff27ca7ac->enter($__internal_4462a6289dc67ca5289c5767c1ff824de12f877acc3f454cc2528a0ff27ca7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e861c63a316a867bcbc46b565a83910cb541c99f51c92eeac2e9b523cd315c82->leave($__internal_e861c63a316a867bcbc46b565a83910cb541c99f51c92eeac2e9b523cd315c82_prof);

        
        $__internal_4462a6289dc67ca5289c5767c1ff824de12f877acc3f454cc2528a0ff27ca7ac->leave($__internal_4462a6289dc67ca5289c5767c1ff824de12f877acc3f454cc2528a0ff27ca7ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42351babd3b92c415d7e4239529def2c379799b5de76b426af25765a15e818ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42351babd3b92c415d7e4239529def2c379799b5de76b426af25765a15e818ca->enter($__internal_42351babd3b92c415d7e4239529def2c379799b5de76b426af25765a15e818ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac4cbccbcbb9ac81eab149191af6bdfa05aa0474c2d9ca4a1eff931fcaf087e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4cbccbcbb9ac81eab149191af6bdfa05aa0474c2d9ca4a1eff931fcaf087e6->enter($__internal_ac4cbccbcbb9ac81eab149191af6bdfa05aa0474c2d9ca4a1eff931fcaf087e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ac4cbccbcbb9ac81eab149191af6bdfa05aa0474c2d9ca4a1eff931fcaf087e6->leave($__internal_ac4cbccbcbb9ac81eab149191af6bdfa05aa0474c2d9ca4a1eff931fcaf087e6_prof);

        
        $__internal_42351babd3b92c415d7e4239529def2c379799b5de76b426af25765a15e818ca->leave($__internal_42351babd3b92c415d7e4239529def2c379799b5de76b426af25765a15e818ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_860879d0e25cf04ebb0181504c376781da286c00d666384b7c64dd9c2acd673a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860879d0e25cf04ebb0181504c376781da286c00d666384b7c64dd9c2acd673a->enter($__internal_860879d0e25cf04ebb0181504c376781da286c00d666384b7c64dd9c2acd673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b174e3fb097aabb25b020af7aa11b4b5d2fb963230c674cefca649a066ad19b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b174e3fb097aabb25b020af7aa11b4b5d2fb963230c674cefca649a066ad19b0->enter($__internal_b174e3fb097aabb25b020af7aa11b4b5d2fb963230c674cefca649a066ad19b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b174e3fb097aabb25b020af7aa11b4b5d2fb963230c674cefca649a066ad19b0->leave($__internal_b174e3fb097aabb25b020af7aa11b4b5d2fb963230c674cefca649a066ad19b0_prof);

        
        $__internal_860879d0e25cf04ebb0181504c376781da286c00d666384b7c64dd9c2acd673a->leave($__internal_860879d0e25cf04ebb0181504c376781da286c00d666384b7c64dd9c2acd673a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b23fa57a2aa8371d5c1e236e5788a0e538a029e5f9d565c15b35fff8a94a7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b23fa57a2aa8371d5c1e236e5788a0e538a029e5f9d565c15b35fff8a94a7a1->enter($__internal_8b23fa57a2aa8371d5c1e236e5788a0e538a029e5f9d565c15b35fff8a94a7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_571530dac631130bde371341e6052c56664d44ef7b5e3f3b06fe1188a647c454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571530dac631130bde371341e6052c56664d44ef7b5e3f3b06fe1188a647c454->enter($__internal_571530dac631130bde371341e6052c56664d44ef7b5e3f3b06fe1188a647c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_571530dac631130bde371341e6052c56664d44ef7b5e3f3b06fe1188a647c454->leave($__internal_571530dac631130bde371341e6052c56664d44ef7b5e3f3b06fe1188a647c454_prof);

        
        $__internal_8b23fa57a2aa8371d5c1e236e5788a0e538a029e5f9d565c15b35fff8a94a7a1->leave($__internal_8b23fa57a2aa8371d5c1e236e5788a0e538a029e5f9d565c15b35fff8a94a7a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/simplonmars/dev/projets/pomodoro/pomodoro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
