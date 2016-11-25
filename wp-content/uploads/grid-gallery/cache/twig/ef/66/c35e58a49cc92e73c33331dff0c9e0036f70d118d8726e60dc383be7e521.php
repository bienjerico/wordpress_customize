<?php

/* grid-gallery.twig */
class __TwigTemplate_ef66c35e58a49cc92e73c33331dff0c9e0036f70d118d8726e60dc383be7e521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alerts' => array($this, 'block_alerts'),
            'header' => array($this, 'block_header'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'table' => array($this, 'block_table'),
            'notes' => array($this, 'block_notes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wraper\">

    ";
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('alerts', $context, $blocks);
        // line 10
        echo "
    <div class=\"supsystic-plugin\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        <section class=\"supsystic-content\">
            <nav class=\"supsystic-navigation supsystic-sticky\" style=\"top: 0px;\">
                <ul>
                    <li class=\"supsystic-sticky ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "overview")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "overview"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-info\"></i>
                            ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li ";
        // line 26
        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "galleries") && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") == "showPresets"))) {
            echo "class=\"active\" ";
        }
        echo ">
                        <a id=\"btn-add-new\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New Gallery")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"supsystic-sticky ";
        // line 32
        if (((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "galleries") || (null === $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module"))) && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") != "showPresets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-archive\"></i>
                            ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "
                        </a>
                    </li>


                    <li class=\"supsystic-sticky ";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "settings")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "settings"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-gear\"></i>
                            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Settings"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>
                    
                    ";
        // line 47
        if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "license"), "method")) {
            // line 48
            echo "                        <li class=\"supsystic-sticky ";
            if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "license")) {
                echo "active";
            }
            echo "\">
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "license"), "method"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-hand-o-right\"></i>
                                ";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("License")), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 55
        echo "\t\t\t\t\t
\t\t\t\t\t<li class=\"supsystic-sticky ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "featuredplugins")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "featuredplugins"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-heart\"></i>
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Featured Plugins"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>

                    ";
        // line 64
        echo "                    ";
        // line 70
        echo "
                    ";
        // line 72
        echo "                    ";
        // line 117
        echo "
                    ";
        // line 126
        echo "                </ul>
            </nav>
            <div class=\"supsystic-container supsystic-item supsystic-panel\">
                ";
        // line 129
        $this->displayBlock('preview', $context, $blocks);
        // line 130
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "                <div class=\"clear\"></div>
                ";
        // line 132
        $this->displayBlock('table', $context, $blocks);
        // line 133
        echo "            </div>
        </section>
    </div>

    <!-- Modal loading overlay -->
    <div class=\"gg-modal-loading-overlay\"></div>
    <div class=\"gg-modal-loading-object\">
        <p>
            <span id=\"loading-text\">Loading</span>
            <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "config"), "get", array(0 => "admin_url"), "method") . "/images/wpspin_light.gif"), "html", null, true);
        echo "\" alt=\"\"
                 title=\"";
        // line 143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading")), "html", null, true);
        echo "\"/>
        </p>
    </div>

    ";
        // line 147
        $this->displayBlock('notes', $context, $blocks);
        // line 148
        echo "</div>
";
    }

    // line 9
    public function block_alerts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"supsystic-breadcrumbs\">
                Gallery by Supsystic
            </div>
        ";
    }

    // line 129
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
    }

    // line 132
    public function block_table($context, array $blocks = array())
    {
    }

    // line 147
    public function block_notes($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grid-gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 147,  237 => 132,  232 => 130,  227 => 129,  220 => 13,  217 => 12,  212 => 9,  207 => 148,  205 => 147,  198 => 143,  194 => 142,  183 => 133,  181 => 132,  178 => 131,  175 => 130,  168 => 126,  165 => 117,  163 => 72,  160 => 70,  158 => 64,  151 => 59,  146 => 57,  140 => 56,  125 => 49,  118 => 48,  116 => 47,  109 => 43,  104 => 41,  98 => 40,  90 => 35,  85 => 33,  79 => 32,  73 => 29,  62 => 26,  51 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  25 => 1,  381 => 143,  376 => 140,  372 => 138,  369 => 137,  365 => 135,  362 => 134,  358 => 132,  356 => 131,  353 => 130,  351 => 129,  345 => 128,  341 => 127,  337 => 126,  330 => 125,  319 => 124,  311 => 191,  306 => 190,  304 => 189,  301 => 188,  297 => 145,  293 => 122,  289 => 120,  280 => 117,  276 => 116,  271 => 114,  266 => 112,  260 => 109,  255 => 107,  251 => 106,  245 => 104,  233 => 99,  229 => 98,  221 => 97,  211 => 90,  206 => 88,  202 => 87,  195 => 83,  189 => 81,  184 => 79,  177 => 75,  173 => 129,  167 => 71,  156 => 63,  150 => 60,  143 => 56,  137 => 55,  130 => 51,  124 => 46,  117 => 41,  115 => 37,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 23,  68 => 27,  65 => 19,  63 => 18,  61 => 17,  56 => 23,  53 => 13,  43 => 8,  36 => 6,  32 => 9,  29 => 8,);
    }
}
