<?php

/* ucp_avatar_options_remote.html */
class __TwigTemplate_f0b4d8f05dd7cca12cc0e6dec42bb25fbc92a8505a44c602fddd9f8bb153cf3f extends Twig_Template
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
        echo "\" class=\"inputbox\" data-reset-on-edit=\"#avatar_remote_width, #avatar_remote_height\" /></dd>
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
\t\t<label for=\"avatar_remote_width\"><input type=\"number\" name=\"avatar_remote_width\" id=\"avatar_remote_width\" min=\"";
        // line 8
        echo (isset($context["AVATAR_MIN_WIDTH"]) ? $context["AVATAR_MIN_WIDTH"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_WIDTH"]) ? $context["AVATAR_MAX_WIDTH"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_REMOTE_WIDTH"]) ? $context["AVATAR_REMOTE_WIDTH"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label> &times;&nbsp;
\t\t<label for=\"avatar_remote_height\"><input type=\"number\" name=\"avatar_remote_height\" id=\"avatar_remote_height\" min=\"";
        // line 9
        echo (isset($context["AVATAR_MIN_HEIGHT"]) ? $context["AVATAR_MIN_HEIGHT"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_HEIGHT"]) ? $context["AVATAR_MAX_HEIGHT"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_REMOTE_HEIGHT"]) ? $context["AVATAR_REMOTE_HEIGHT"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label>
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_remote.html";
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
/* 	<dd><input type="url" name="avatar_remote_url" id="avatar_remote_url" value="{AVATAR_REMOTE_URL}" class="inputbox" data-reset-on-edit="#avatar_remote_width, #avatar_remote_height" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="avatar_remote_width">{L_LINK_REMOTE_SIZE}{L_COLON}</label><br /><span>{L_LINK_REMOTE_SIZE_EXPLAIN}</span></dt>*/
/* 	<dd>*/
/* 		<label for="avatar_remote_width"><input type="number" name="avatar_remote_width" id="avatar_remote_width" min="{AVATAR_MIN_WIDTH}" max="{AVATAR_MAX_WIDTH}" value="{AVATAR_REMOTE_WIDTH}" class="inputbox autowidth" /> {L_PIXEL}</label> &times;&nbsp;*/
/* 		<label for="avatar_remote_height"><input type="number" name="avatar_remote_height" id="avatar_remote_height" min="{AVATAR_MIN_HEIGHT}" max="{AVATAR_MAX_HEIGHT}" value="{AVATAR_REMOTE_HEIGHT}" class="inputbox autowidth" /> {L_PIXEL}</label>*/
/* 	</dd>*/
/* </dl>*/
/* */
