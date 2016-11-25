<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_7e72282f278b56c663347e58fde3620c1b469fda430f1e06fbb8873b9bbe50b1 extends Twig_Template
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
    public function getshow($_areaWidth = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $_areaWidth,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty((isset($context["galleryId"]) ? $context["galleryId"] : null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>

            <h3 style=\"margin-top: 0px\">";
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 39
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 66
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 75
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 75,  193 => 70,  186 => 66,  174 => 60,  169 => 58,  162 => 54,  157 => 52,  145 => 46,  138 => 42,  131 => 39,  120 => 34,  110 => 30,  106 => 29,  100 => 26,  95 => 24,  80 => 18,  74 => 16,  67 => 13,  58 => 10,  48 => 6,  42 => 3,  33 => 2,  21 => 1,  242 => 147,  237 => 132,  232 => 130,  227 => 129,  220 => 13,  217 => 12,  212 => 9,  207 => 148,  205 => 147,  198 => 72,  194 => 142,  183 => 133,  181 => 64,  178 => 131,  175 => 130,  168 => 126,  165 => 117,  163 => 72,  160 => 70,  158 => 64,  151 => 59,  146 => 57,  140 => 56,  125 => 36,  118 => 48,  116 => 47,  109 => 43,  104 => 41,  98 => 40,  90 => 22,  85 => 20,  79 => 32,  73 => 29,  62 => 11,  51 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  25 => 1,  381 => 143,  376 => 140,  372 => 138,  369 => 137,  365 => 135,  362 => 134,  358 => 132,  356 => 131,  353 => 130,  351 => 129,  345 => 128,  341 => 127,  337 => 126,  330 => 125,  319 => 124,  311 => 191,  306 => 190,  304 => 189,  301 => 188,  297 => 145,  293 => 122,  289 => 120,  280 => 117,  276 => 116,  271 => 114,  266 => 112,  260 => 109,  255 => 107,  251 => 106,  245 => 104,  233 => 99,  229 => 98,  221 => 97,  211 => 90,  206 => 88,  202 => 87,  195 => 83,  189 => 81,  184 => 79,  177 => 75,  173 => 129,  167 => 71,  156 => 63,  150 => 48,  143 => 56,  137 => 55,  130 => 51,  124 => 46,  117 => 41,  115 => 32,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 15,  68 => 27,  65 => 19,  63 => 18,  61 => 17,  56 => 23,  53 => 8,  43 => 8,  36 => 6,  32 => 9,  29 => 8,);
    }
}
