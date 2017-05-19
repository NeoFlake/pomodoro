<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_5c077b7381a8a833004d055f6a0c8230783d80065a0a7ddd22d65e5947d5dffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_485d3bfbe67b123e8164550ea34bef7182f1219ed8a1a31e41e7832167065123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485d3bfbe67b123e8164550ea34bef7182f1219ed8a1a31e41e7832167065123->enter($__internal_485d3bfbe67b123e8164550ea34bef7182f1219ed8a1a31e41e7832167065123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_19cf31d2f367db76e83cf6c8b12890fda834a1ef8b3516b5a969459eff82db24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cf31d2f367db76e83cf6c8b12890fda834a1ef8b3516b5a969459eff82db24->enter($__internal_19cf31d2f367db76e83cf6c8b12890fda834a1ef8b3516b5a969459eff82db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_485d3bfbe67b123e8164550ea34bef7182f1219ed8a1a31e41e7832167065123->leave($__internal_485d3bfbe67b123e8164550ea34bef7182f1219ed8a1a31e41e7832167065123_prof);

        
        $__internal_19cf31d2f367db76e83cf6c8b12890fda834a1ef8b3516b5a969459eff82db24->leave($__internal_19cf31d2f367db76e83cf6c8b12890fda834a1ef8b3516b5a969459eff82db24_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_12393813c4753ffe5b4ff61a3d7d8ba42a172432d481d040ee42d41106d5f049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12393813c4753ffe5b4ff61a3d7d8ba42a172432d481d040ee42d41106d5f049->enter($__internal_12393813c4753ffe5b4ff61a3d7d8ba42a172432d481d040ee42d41106d5f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fef81faff6ee0cec4a281c5a6456b4a1a931b7ef4010b98c8eea2ec1d7f9ddff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef81faff6ee0cec4a281c5a6456b4a1a931b7ef4010b98c8eea2ec1d7f9ddff->enter($__internal_fef81faff6ee0cec4a281c5a6456b4a1a931b7ef4010b98c8eea2ec1d7f9ddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "            <style>
                ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
            </style>
        ";
        
        $__internal_fef81faff6ee0cec4a281c5a6456b4a1a931b7ef4010b98c8eea2ec1d7f9ddff->leave($__internal_fef81faff6ee0cec4a281c5a6456b4a1a931b7ef4010b98c8eea2ec1d7f9ddff_prof);

        
        $__internal_12393813c4753ffe5b4ff61a3d7d8ba42a172432d481d040ee42d41106d5f049->leave($__internal_12393813c4753ffe5b4ff61a3d7d8ba42a172432d481d040ee42d41106d5f049_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d628f7f852314c3db7478370c7f27fb3e0e264e36e4d5c73f7e584d7f79f353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d628f7f852314c3db7478370c7f27fb3e0e264e36e4d5c73f7e584d7f79f353->enter($__internal_3d628f7f852314c3db7478370c7f27fb3e0e264e36e4d5c73f7e584d7f79f353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35bf04e0928cf092f7d4b3071cd601ebc6eb15520c99d2c7a9a5a55696413bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bf04e0928cf092f7d4b3071cd601ebc6eb15520c99d2c7a9a5a55696413bc8->enter($__internal_35bf04e0928cf092f7d4b3071cd601ebc6eb15520c99d2c7a9a5a55696413bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_35bf04e0928cf092f7d4b3071cd601ebc6eb15520c99d2c7a9a5a55696413bc8->leave($__internal_35bf04e0928cf092f7d4b3071cd601ebc6eb15520c99d2c7a9a5a55696413bc8_prof);

        
        $__internal_3d628f7f852314c3db7478370c7f27fb3e0e264e36e4d5c73f7e584d7f79f353->leave($__internal_3d628f7f852314c3db7478370c7f27fb3e0e264e36e4d5c73f7e584d7f79f353_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 12,  70 => 11,  61 => 10,  49 => 18,  47 => 17,  43 => 15,  41 => 10,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        {% block head %}
            <style>
                {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "/home/simplonmars/dev/projets/pomodoro/pomodoro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/base.html.twig");
    }
}
