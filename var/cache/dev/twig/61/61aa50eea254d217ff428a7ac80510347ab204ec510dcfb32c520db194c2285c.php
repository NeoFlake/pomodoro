<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_cb01a0708f114d8b6aa2b9b0fafd9cfd1c7d34f68bb2ea68a8a1937b96ca824a extends Twig_Template
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
        $__internal_b4a92182b95f49676b9255f6a6ea8cd5fc74f59292a61a8db221874ee4df10ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a92182b95f49676b9255f6a6ea8cd5fc74f59292a61a8db221874ee4df10ce->enter($__internal_b4a92182b95f49676b9255f6a6ea8cd5fc74f59292a61a8db221874ee4df10ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_ffdd71bf4a46830408f6b0644ec4f4991e59749cbe8bde98c38239880dbed3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdd71bf4a46830408f6b0644ec4f4991e59749cbe8bde98c38239880dbed3e7->enter($__internal_ffdd71bf4a46830408f6b0644ec4f4991e59749cbe8bde98c38239880dbed3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_b4a92182b95f49676b9255f6a6ea8cd5fc74f59292a61a8db221874ee4df10ce->leave($__internal_b4a92182b95f49676b9255f6a6ea8cd5fc74f59292a61a8db221874ee4df10ce_prof);

        
        $__internal_ffdd71bf4a46830408f6b0644ec4f4991e59749cbe8bde98c38239880dbed3e7->leave($__internal_ffdd71bf4a46830408f6b0644ec4f4991e59749cbe8bde98c38239880dbed3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/home/simplonmars/dev/projets/pomodoro/pomodoro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
