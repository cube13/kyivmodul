<?php

/* @davidiq_reimg/event/overall_header_head_append.html */
class __TwigTemplate_cd1d640b949ac9357307e06bb45264404d5d888159d0e41b31a359e69fda4351 extends Twig_Template
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
        // line 1
        $asset_file = "@davidiq_reimg/reimg.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('12');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 2
        if (((isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_imglightbox")) {
            // line 3
            $asset_file = "@davidiq_reimg/imglightbox.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('12');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        } elseif ((        // line 4
(isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_magnific")) {
            // line 5
            $asset_file = "@davidiq_reimg/magnific-popup.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('12');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        } elseif ((        // line 6
(isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_colorbox")) {
            // line 7
            $asset_file = "@davidiq_reimg/colorbox.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('12');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
    }

    public function getTemplateName()
    {
        return "@davidiq_reimg/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  65 => 6,  51 => 5,  49 => 4,  35 => 3,  33 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDECSS @davidiq_reimg/reimg.css -->*/
/* <!-- IF S_REIMG_ZOOM_METHOD eq '_imglightbox' -->*/
/* <!-- INCLUDECSS @davidiq_reimg/imglightbox.css -->*/
/* <!-- ELSEIF S_REIMG_ZOOM_METHOD eq '_magnific' -->*/
/* <!-- INCLUDECSS @davidiq_reimg/magnific-popup.css -->*/
/* <!-- ELSEIF S_REIMG_ZOOM_METHOD eq '_colorbox' -->*/
/* <!-- INCLUDECSS @davidiq_reimg/colorbox.css -->*/
/* <!-- ENDIF -->*/
