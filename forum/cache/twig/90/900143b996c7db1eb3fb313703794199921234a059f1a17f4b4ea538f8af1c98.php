<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_2af1406317cf11b11d38f9cfa778d6d8e695703cc0b080e247f4025049ae1624 extends Twig_Template
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
        if (( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_COUNTERS_VIEW", array()))) {
            // line 2
            echo "    <dd class=\"profile-posts\" data-user-give-id=\"";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array())) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("GIVEN");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT_LINK", array());
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array());
                echo "</a>";
            }
            echo "</dd>
    <dd class=\"profile-posts\" data-user-receive-id=\"";
            // line 3
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array())) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("RECEIVED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT_LINK", array());
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array());
                echo "</a>";
            }
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not postrow.S_POST_ANONYMOUS and postrow.THANKS_COUNTERS_VIEW -->*/
/*     <dd class="profile-posts" data-user-give-id="{postrow.POSTER_ID}"><!-- IF postrow.POSTER_GIVE_COUNT --><strong>{L_GIVEN}{L_COLON}</strong> <a href="{postrow.POSTER_GIVE_COUNT_LINK}">{postrow.POSTER_GIVE_COUNT}</a><!-- ENDIF --></dd>*/
/*     <dd class="profile-posts" data-user-receive-id="{postrow.POSTER_ID}"><!-- IF postrow.POSTER_RECEIVE_COUNT --><strong>{L_RECEIVED}{L_COLON}</strong> <a href="{postrow.POSTER_RECEIVE_COUNT_LINK}">{postrow.POSTER_RECEIVE_COUNT}</a><!-- ENDIF --></dd>*/
/* <!-- ENDIF -->*/
/* */
