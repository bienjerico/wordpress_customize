<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_aa06d1511e3178c3c09b6591281caccd16f979095270429d73212943f8c2570d extends Twig_Template
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
    }

    // line 1
    public function getprop($_prop = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $_prop,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  21 => 1,  679 => 113,  676 => 112,  673 => 110,  670 => 109,  667 => 108,  664 => 107,  661 => 106,  648 => 105,  644 => 236,  641 => 235,  637 => 227,  631 => 226,  628 => 225,  625 => 224,  620 => 223,  617 => 222,  614 => 221,  606 => 217,  603 => 216,  599 => 205,  596 => 204,  585 => 180,  580 => 177,  577 => 176,  573 => 174,  570 => 173,  566 => 171,  564 => 170,  558 => 169,  554 => 168,  550 => 167,  546 => 165,  542 => 163,  540 => 162,  537 => 161,  533 => 159,  531 => 158,  528 => 157,  524 => 155,  522 => 154,  519 => 153,  515 => 151,  513 => 150,  510 => 149,  506 => 147,  502 => 145,  500 => 144,  493 => 141,  491 => 116,  488 => 115,  485 => 104,  482 => 103,  479 => 101,  476 => 100,  473 => 99,  470 => 98,  467 => 97,  465 => 96,  462 => 95,  456 => 93,  453 => 92,  447 => 90,  444 => 89,  439 => 87,  435 => 86,  430 => 85,  427 => 84,  424 => 83,  420 => 82,  415 => 81,  411 => 80,  407 => 79,  403 => 78,  399 => 77,  395 => 76,  391 => 75,  387 => 74,  383 => 73,  379 => 72,  373 => 70,  371 => 69,  368 => 68,  363 => 66,  360 => 65,  354 => 63,  351 => 62,  346 => 60,  343 => 59,  337 => 57,  332 => 55,  329 => 54,  325 => 52,  322 => 51,  316 => 49,  313 => 48,  309 => 46,  306 => 45,  302 => 43,  299 => 42,  294 => 40,  291 => 39,  288 => 38,  282 => 36,  278 => 34,  276 => 33,  268 => 32,  260 => 31,  256 => 30,  248 => 29,  239 => 27,  235 => 25,  233 => 24,  229 => 23,  225 => 22,  221 => 21,  217 => 20,  213 => 19,  209 => 18,  204 => 17,  201 => 16,  197 => 13,  187 => 10,  179 => 9,  169 => 8,  159 => 7,  156 => 6,  153 => 5,  150 => 4,  138 => 239,  134 => 237,  132 => 235,  123 => 228,  121 => 221,  117 => 219,  115 => 216,  110 => 213,  106 => 211,  102 => 209,  99 => 208,  97 => 207,  94 => 206,  92 => 204,  89 => 203,  86 => 202,  81 => 199,  74 => 197,  70 => 196,  64 => 195,  61 => 194,  50 => 185,  47 => 184,  45 => 183,  41 => 181,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
