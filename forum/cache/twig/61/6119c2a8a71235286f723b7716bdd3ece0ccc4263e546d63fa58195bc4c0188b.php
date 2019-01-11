<?php

/* @davidiq_reimg/event/overall_footer_after.html */
class __TwigTemplate_4d32af650eba75521a576b81422caa3b7d0617f05937cb167c5aa42e2a9b7f9f extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[
\tvar reimgAltLabels = {
\t\tLoading: \t\t\"";
        // line 4
        echo addslashes($this->env->getExtension('phpbb')->lang("LOADING_TEXT"));
        echo "\",
\t\tZoomIn: \t\t\"";
        // line 5
        echo addslashes($this->env->getExtension('phpbb')->lang("REIMG_ZOOM_IN"));
        echo "\",
\t\tZoomOut: \t\t\"";
        // line 6
        echo addslashes($this->env->getExtension('phpbb')->lang("REIMG_ZOOM_OUT"));
        echo "\",
\t\tFullExpand: \t\"";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("FULL_EXPAND_TITLE"));
        echo "\",
\t\tPrevious:\t\t\"";
        // line 8
        echo addslashes($this->env->getExtension('phpbb')->lang("PREVIOUS_TEXT"));
        echo "\",
\t\tPreviousTitle:\t\"";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("PREVIOUS_TITLE"));
        echo "\",
\t\tNext:\t\t\t\"";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("NEXT_TEXT"));
        echo "\",
\t\tNextTitle:\t\t\"";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("NEXT_TITLE"));
        echo "\",
\t\tClose:\t\t\t\"";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("CLOSE_TEXT"));
        echo "\",
\t\tCloseTitle:\t\t\"";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("CLOSE_TITLE"));
        echo "\",
\t\tPlay:\t\t\t\"";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("PLAY_TEXT"));
        echo "\",
\t\tPlayTitle:\t\t\"";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PLAY_TITLE"));
        echo "\",
\t\tPause:\t\t\t\"";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PAUSE_TEXT"));
        echo "\",
\t\tPauseTitle:\t\t\"";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PAUSE_TITLE"));
        echo "\",
\t\tImageNumber:\t\"";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("IMAGE_NUMBER"));
        echo "\",
\t\tUserLink:\t\t\"";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("REIMG_USER_LINK"));
        echo "\"
\t};

\tvar reimgSettings = {
\t\tphpExt:\t\t\t\"";
        // line 23
        echo (isset($context["S_REIMG_PHP_EXT"]) ? $context["S_REIMG_PHP_EXT"] : null);
        echo "\",
\t\tzoomTarget: \t\"";
        // line 24
        echo (isset($context["S_REIMG_ZOOM"]) ? $context["S_REIMG_ZOOM"] : null);
        echo "\",
\t\tzoomMethod:\t\t\"";
        // line 25
        echo (isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null);
        echo "\",
\t\trtl: \t\t\t";
        // line 26
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\tswapPortrait: \t";
        // line 27
        if ((isset($context["S_REIMG_SWAP_PORTRAIT"]) ? $context["S_REIMG_SWAP_PORTRAIT"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\thandleAttached:\t";
        // line 28
        if ((isset($context["S_REIMG_ATTACHMENTS"]) ? $context["S_REIMG_ATTACHMENTS"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\tresizeSigImg:\t";
        // line 29
        if ((isset($context["S_REIMG_RESIZE_SIG_IMG"]) ? $context["S_REIMG_RESIZE_SIG_IMG"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\treimgForAll:\t";
        // line 30
        if ((isset($context["S_REIMG_FOR_ALL"]) ? $context["S_REIMG_FOR_ALL"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 31
        echo "\t};

\t\$(function() {
\t\tvar reimg = new ReIMG(reimgAltLabels, reimgSettings);
\t\treimg.ApplyResize();
\t});
// ]]>
</script>

";
        // line 40
        if (((isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_imglightbox")) {
            // line 41
            $asset_file = "../js/imagelightbox.min.js";
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
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        } elseif ((        // line 42
(isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_colorbox")) {
            // line 43
            $asset_file = "../js/jquery.colorbox-min.js";
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
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        } elseif ((        // line 44
(isset($context["S_REIMG_ZOOM_METHOD"]) ? $context["S_REIMG_ZOOM_METHOD"] : null) == "_magnific")) {
            // line 45
            $asset_file = "../js/jquery.magnific-popup.min.js";
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
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
        // line 47
        $asset_file = "../js/reimg.js";
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
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
    }

    public function getTemplateName()
    {
        return "@davidiq_reimg/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 47,  188 => 45,  186 => 44,  171 => 43,  169 => 42,  154 => 41,  152 => 40,  141 => 31,  135 => 30,  127 => 29,  119 => 28,  111 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var reimgAltLabels = {*/
/* 		Loading: 		"{LA_LOADING_TEXT}",*/
/* 		ZoomIn: 		"{LA_REIMG_ZOOM_IN}",*/
/* 		ZoomOut: 		"{LA_REIMG_ZOOM_OUT}",*/
/* 		FullExpand: 	"{LA_FULL_EXPAND_TITLE}",*/
/* 		Previous:		"{LA_PREVIOUS_TEXT}",*/
/* 		PreviousTitle:	"{LA_PREVIOUS_TITLE}",*/
/* 		Next:			"{LA_NEXT_TEXT}",*/
/* 		NextTitle:		"{LA_NEXT_TITLE}",*/
/* 		Close:			"{LA_CLOSE_TEXT}",*/
/* 		CloseTitle:		"{LA_CLOSE_TITLE}",*/
/* 		Play:			"{LA_PLAY_TEXT}",*/
/* 		PlayTitle:		"{LA_PLAY_TITLE}",*/
/* 		Pause:			"{LA_PAUSE_TEXT}",*/
/* 		PauseTitle:		"{LA_PAUSE_TITLE}",*/
/* 		ImageNumber:	"{LA_IMAGE_NUMBER}",*/
/* 		UserLink:		"{LA_REIMG_USER_LINK}"*/
/* 	};*/
/* */
/* 	var reimgSettings = {*/
/* 		phpExt:			"{S_REIMG_PHP_EXT}",*/
/* 		zoomTarget: 	"{S_REIMG_ZOOM}",*/
/* 		zoomMethod:		"{S_REIMG_ZOOM_METHOD}",*/
/* 		rtl: 			<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->true<!-- ELSE -->false<!-- ENDIF -->,*/
/* 		swapPortrait: 	<!-- IF S_REIMG_SWAP_PORTRAIT -->true<!-- ELSE -->false<!-- ENDIF -->,*/
/* 		handleAttached:	<!-- IF S_REIMG_ATTACHMENTS -->true<!-- ELSE -->false<!-- ENDIF -->,*/
/* 		resizeSigImg:	<!-- IF S_REIMG_RESIZE_SIG_IMG -->true<!-- ELSE -->false<!-- ENDIF -->,*/
/* 		reimgForAll:	<!-- IF S_REIMG_FOR_ALL -->true<!-- ELSE -->false<!-- ENDIF -->*/
/* 	};*/
/* */
/* 	$(function() {*/
/* 		var reimg = new ReIMG(reimgAltLabels, reimgSettings);*/
/* 		reimg.ApplyResize();*/
/* 	});*/
/* // ]]>*/
/* </script>*/
/* */
/* <!-- IF S_REIMG_ZOOM_METHOD eq '_imglightbox' -->*/
/* <!-- INCLUDEJS ../js/imagelightbox.min.js -->*/
/* <!-- ELSEIF S_REIMG_ZOOM_METHOD eq '_colorbox' -->*/
/* <!-- INCLUDEJS ../js/jquery.colorbox-min.js -->*/
/* <!-- ELSEIF S_REIMG_ZOOM_METHOD eq '_magnific' -->*/
/* <!-- INCLUDEJS ../js/jquery.magnific-popup.min.js -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDEJS ../js/reimg.js -->*/
/* */
