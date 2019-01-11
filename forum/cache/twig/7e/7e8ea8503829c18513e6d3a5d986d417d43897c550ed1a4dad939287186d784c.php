<?php

/* captcha_recaptcha_acp.html */
class __TwigTemplate_d10a595278978e4626f235b397f66be4b309b00b8b6e2221dd41877eedc64f25 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "captcha_recaptcha_acp.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_VC_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>


<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 10
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
<legend>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
        echo "</legend>

<dl>
\t<dt><label for=\"recaptcha_pubkey\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_PUBLIC");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_PUBLIC_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"recaptcha_pubkey\" name=\"recaptcha_pubkey\" value=\"";
        // line 17
        echo (isset($context["RECAPTCHA_PUBKEY"]) ? $context["RECAPTCHA_PUBKEY"] : null);
        echo "\" size=\"50\" type=\"text\" /></dd>
</dl>
<dl>
\t<dt><label for=\"recaptcha_privkey\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_PRIVATE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_PRIVATE_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"recaptcha_privkey\" name=\"recaptcha_privkey\" value=\"";
        // line 21
        echo (isset($context["RECAPTCHA_PRIVKEY"]) ? $context["RECAPTCHA_PRIVKEY"] : null);
        echo "\" size=\"50\" type=\"text\" /></dd>
</dl>


</fieldset>
<fieldset>
\t<legend>";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "</legend>
";
        // line 28
        if ((isset($context["PREVIEW"]) ? $context["PREVIEW"] : null)) {
            // line 29
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("CAPTCHA_PREVIEW_MSG");
            echo "</p>
\t</div>
";
        }
        // line 34
        $location = (("" . (isset($context["CAPTCHA_PREVIEW"]) ? $context["CAPTCHA_PREVIEW"] : null)) . "");
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate((("" . (isset($context["CAPTCHA_PREVIEW"]) ? $context["CAPTCHA_PREVIEW"] : null)) . ""), "captcha_recaptcha_acp.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />&nbsp;
\t</p>
\t<input type=\"hidden\" name=\"select_captcha\" value=\"";
        // line 43
        echo (isset($context["CAPTCHA_NAME"]) ? $context["CAPTCHA_NAME"] : null);
        echo "\" />
\t<input type=\"hidden\" name=\"configure\" value=\"1\" />

\t";
        // line 46
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 50
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "captcha_recaptcha_acp.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha_acp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  144 => 46,  138 => 43,  133 => 41,  129 => 40,  124 => 38,  119 => 35,  107 => 34,  101 => 31,  97 => 30,  94 => 29,  92 => 28,  88 => 27,  79 => 21,  72 => 20,  66 => 17,  59 => 16,  53 => 13,  47 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_VC_SETTINGS}</h1>*/
/* */
/* <p>{L_ACP_VC_SETTINGS_EXPLAIN}</p>*/
/* */
/* */
/* <form id="acp_captcha" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* <legend>{L_GENERAL_OPTIONS}</legend>*/
/* */
/* <dl>*/
/* 	<dt><label for="recaptcha_pubkey">{L_RECAPTCHA_PUBLIC}{L_COLON}</label><br /><span>{L_RECAPTCHA_PUBLIC_EXPLAIN}</span></dt>*/
/* 	<dd><input id="recaptcha_pubkey" name="recaptcha_pubkey" value="{RECAPTCHA_PUBKEY}" size="50" type="text" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="recaptcha_privkey">{L_RECAPTCHA_PRIVATE}{L_COLON}</label><br /><span>{L_RECAPTCHA_PRIVATE_EXPLAIN}</span></dt>*/
/* 	<dd><input id="recaptcha_privkey" name="recaptcha_privkey" value="{RECAPTCHA_PRIVKEY}" size="50" type="text" /></dd>*/
/* </dl>*/
/* */
/* */
/* </fieldset>*/
/* <fieldset>*/
/* 	<legend>{L_PREVIEW}</legend>*/
/* <!-- IF PREVIEW -->*/
/* 	<div class="successbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{L_CAPTCHA_PREVIEW_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE {CAPTCHA_PREVIEW} -->*/
/* </fieldset>*/
/* */
/* <fieldset>*/
/* 	<legend>{L_ACP_SUBMIT_CHANGES}</legend>*/
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />&nbsp;*/
/* 	</p>*/
/* 	<input type="hidden" name="select_captcha" value="{CAPTCHA_NAME}" />*/
/* 	<input type="hidden" name="configure" value="1" />*/
/* */
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
