<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_06ea0b59d3dba35debe9668c5d2cede766dd2214812920938df42982b3b2985e extends Twig_Template
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
        $__internal_f36934e765238c7f15ddcab4c881ff23878bccd9671eb2f233917699151a59c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36934e765238c7f15ddcab4c881ff23878bccd9671eb2f233917699151a59c8->enter($__internal_f36934e765238c7f15ddcab4c881ff23878bccd9671eb2f233917699151a59c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_58df50433d759301bf115eed33caaaba1597cd8c21e224c845977ca8103a25f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df50433d759301bf115eed33caaaba1597cd8c21e224c845977ca8103a25f9->enter($__internal_58df50433d759301bf115eed33caaaba1597cd8c21e224c845977ca8103a25f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f36934e765238c7f15ddcab4c881ff23878bccd9671eb2f233917699151a59c8->leave($__internal_f36934e765238c7f15ddcab4c881ff23878bccd9671eb2f233917699151a59c8_prof);

        
        $__internal_58df50433d759301bf115eed33caaaba1597cd8c21e224c845977ca8103a25f9->leave($__internal_58df50433d759301bf115eed33caaaba1597cd8c21e224c845977ca8103a25f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/simplonmars/dev/projets/pomodoro/pomodoro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
