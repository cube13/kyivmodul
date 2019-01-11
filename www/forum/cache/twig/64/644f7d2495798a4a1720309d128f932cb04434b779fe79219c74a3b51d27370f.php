<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_0533f7fc4973d8a702144ec75ae079e11993f916a94199937f215bd61d971f45 extends Twig_Template
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
        echo "<div id='list_thanks";
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
";
        // line 2
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POSTLIST_VIEW", array())) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 3
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t";
            // line 5
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_MOD_THANKS", array())) {
                // line 6
                echo "\t\t\t<ul class=\"post-buttons\" style=\"float: left; position: static;\">
\t\t\t\t<li>
\t\t\t\t\t<a id='clear_list_thanks";
                // line 8
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "' href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_CLEAR_LIST_THANKS_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                echo "\" class=\"button icon-button delete-icon\" style=\"float:left\"><span>";
                echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
            }
            // line 12
            echo "
\t\t\t<dt>";
            // line 13
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT_2", array());
            echo "</dt>
\t\t\t<dd>";
            // line 14
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array());
            echo "</dd>
\t\t</dl>
\t</div>
";
        }
        // line 18
        echo "</div>
<div id='div_post_reput";
        // line 19
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
";
        // line 20
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_POST_REPUT_VIEW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array())) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 21
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t<dt class=\"small\"><strong>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("REPUT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array());
            echo "</dt>
\t\t\t<dd>
\t\t\t";
            // line 25
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 26
                echo "\t\t\t<div style=\"width: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_GRAPHIC_WIDTH", array());
                echo "; height: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo ";\" class=\"thanks_reput_image_back\"><div style=\"height: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; width: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array());
                echo ";\" class=\"thanks_reput_image\"></div></div>&nbsp;
\t\t\t";
            }
            // line 28
            echo "\t\t\t</dd>
\t\t</dl>
\t</div>
";
        }
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  100 => 28,  88 => 26,  86 => 25,  78 => 23,  74 => 21,  72 => 20,  68 => 19,  65 => 18,  58 => 14,  52 => 13,  49 => 12,  36 => 8,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id='list_thanks{postrow.POST_ID}'>*/
/* <!-- IF postrow.THANKS and postrow.THANKS_POSTLIST_VIEW and not postrow.S_POST_ANONYMOUS and not S_IS_BOT -->*/
/* 	<div class="notice">*/
/* 		<dl>*/
/* 			<!-- IF postrow.S_MOD_THANKS -->*/
/* 			<ul class="post-buttons" style="float: left; position: static;">*/
/* 				<li>*/
/* 					<a id='clear_list_thanks{postrow.POST_ID}' href="{postrow.U_CLEAR_LIST_THANKS_POST}" title="{L_CLEAR_LIST_THANKS}" class="button icon-button delete-icon" style="float:left"><span>{L_CLEAR_LIST_THANKS}</span></a>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<dt>{postrow.THANK_TEXT}{postrow.POST_AUTHOR_FULL}{postrow.THANK_TEXT_2}</dt>*/
/* 			<dd>{postrow.THANKS}</dd>*/
/* 		</dl>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* <div id='div_post_reput{postrow.POST_ID}'>*/
/* <!-- IF postrow.S_THANKS_POST_REPUT_VIEW and postrow.POST_REPUT and not postrow.S_POST_ANONYMOUS and not S_IS_BOT -->*/
/* 	<div class="notice">*/
/* 		<dl>*/
/* 			<dt class="small"><strong>{L_REPUT}{L_COLON}</strong>&nbsp;{postrow.POST_REPUT}</dt>*/
/* 			<dd>*/
/* 			<!-- IF postrow.S_THANKS_REPUT_GRAPHIC -->*/
/* 			<div style="width: {postrow.THANKS_REPUT_GRAPHIC_WIDTH}; height: {postrow.THANKS_REPUT_HEIGHT};" class="thanks_reput_image_back"><div style="height: {postrow.THANKS_REPUT_HEIGHT}; width: {postrow.POST_REPUT};" class="thanks_reput_image"></div></div>&nbsp;*/
/* 			<!-- ENDIF -->*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* */
