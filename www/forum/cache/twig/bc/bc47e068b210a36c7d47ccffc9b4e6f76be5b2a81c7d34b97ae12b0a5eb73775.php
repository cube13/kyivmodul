<?php

/* acp_avatar_options_remote.html */
class __TwigTemplate_edc7917da2d4d9cfd1ab1813c8255cb442bd94505113eaaf06e66b5db6b7c19d extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"avatar_remote_url\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_AVATAR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_AVATAR_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"url\" name=\"avatar_remote_url\" id=\"avatar_remote_url\" value=\"";
        // line 3
        echo (isset($context["AVATAR_REMOTE_URL"]) ? $context["AVATAR_REMOTE_URL"] : null);
        echo "\" class=\"inputbox\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_remote_width\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<input type=\"number\" name=\"avatar_remote_width\" id=\"avatar_remote_width\" min=\"";
        // line 8
        echo (isset($context["AVATAR_MIN_WIDTH"]) ? $context["AVATAR_MIN_WIDTH"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_WIDTH"]) ? $context["AVATAR_MAX_WIDTH"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_REMOTE_WIDTH"]) ? $context["AVATAR_REMOTE_WIDTH"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo " &times;&nbsp;
\t\t<input type=\"number\" name=\"avatar_remote_height\" id=\"avatar_remote_height\" min=\"";
        // line 9
        echo (isset($context["AVATAR_MIN_HEIGHT"]) ? $context["AVATAR_MIN_HEIGHT"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_HEIGHT"]) ? $context["AVATAR_MAX_HEIGHT"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_REMOTE_HEIGHT"]) ? $context["AVATAR_REMOTE_HEIGHT"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_remote.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 8,  35 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="avatar_remote_url">{L_LINK_REMOTE_AVATAR}{L_COLON}</label><br /><span>{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></dt>*/
/* 	<dd><input type="url" name="avatar_remote_url" id="avatar_remote_url" value="{AVATAR_REMOTE_URL}" class="inputbox" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="avatar_remote_width">{L_LINK_REMOTE_SIZE}{L_COLON}</label><br /><span>{L_LINK_REMOTE_SIZE_EXPLAIN}</span></dt>*/
/* 	<dd>*/
/* 		<input type="number" name="avatar_remote_width" id="avatar_remote_width" min="{AVATAR_MIN_WIDTH}" max="{AVATAR_MAX_WIDTH}" value="{AVATAR_REMOTE_WIDTH}" class="inputbox autowidth" /> {L_PIXEL} &times;&nbsp;*/
/* 		<input type="number" name="avatar_remote_height" id="avatar_remote_height" min="{AVATAR_MIN_HEIGHT}" max="{AVATAR_MAX_HEIGHT}" value="{AVATAR_REMOTE_HEIGHT}" class="inputbox autowidth" /> {L_PIXEL}*/
/* 	</dd>*/
/* </dl>*/
/* */
