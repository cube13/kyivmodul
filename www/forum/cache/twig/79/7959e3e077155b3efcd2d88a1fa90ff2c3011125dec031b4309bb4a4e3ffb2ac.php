<?php

/* acp_disallow.html */
class __TwigTemplate_f037f1237b4528e670b752fe08f5c64e2348f4a6581ce84d52f1573433949297 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_disallow.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_DISALLOW_USERNAMES");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_DISALLOW_EXPLAIN");
        echo "</p>

<form id=\"acp_disallow\" method=\"post\" action=\"";
        // line 9
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
\t<legend>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("ADD_DISALLOW_TITLE");
        echo "</legend>
<dl>
\t<dt><label for=\"user\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ADD_DISALLOW_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"user\" type=\"text\" class=\"text medium\" maxlength=\"255\" name=\"disallowed_user\" /></dd>
</dl>

<p class=\"quick\">
\t<input class=\"button1\" type=\"submit\" name=\"disallow\" value=\"";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
</p>
</fieldset>

<h1>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("DELETE_DISALLOW_TITLE");
        echo "</h1>

<p>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("DELETE_DISALLOW_EXPLAIN");
        echo "</p>

<fieldset>
\t<legend>";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("DELETE_DISALLOW_TITLE");
        echo "</legend>
";
        // line 29
        if ((isset($context["S_DISALLOWED_NAMES"]) ? $context["S_DISALLOWED_NAMES"] : null)) {
            // line 30
            echo "\t<dl>
\t\t<dt><label for=\"disallowed\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"disallowed_id\" id=\"disallowed\">";
            // line 32
            echo (isset($context["S_DISALLOWED_NAMES"]) ? $context["S_DISALLOWED_NAMES"] : null);
            echo "</select></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"allow\" value=\"";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
";
        } else {
            // line 39
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("NO_DISALLOWED");
            echo "</p>
";
        }
        // line 41
        echo "\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 45
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_disallow.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_disallow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  119 => 41,  113 => 39,  107 => 36,  100 => 32,  95 => 31,  92 => 30,  90 => 29,  86 => 28,  80 => 25,  75 => 23,  68 => 19,  57 => 14,  52 => 12,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_DISALLOW_USERNAMES}</h1>*/
/* */
/* <p>{L_ACP_DISALLOW_EXPLAIN}</p>*/
/* */
/* <form id="acp_disallow" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<legend>{L_ADD_DISALLOW_TITLE}</legend>*/
/* <dl>*/
/* 	<dt><label for="user">{L_USERNAME}{L_COLON}</label><br /><span>{L_ADD_DISALLOW_EXPLAIN}</span></dt>*/
/* 	<dd><input id="user" type="text" class="text medium" maxlength="255" name="disallowed_user" /></dd>*/
/* </dl>*/
/* */
/* <p class="quick">*/
/* 	<input class="button1" type="submit" name="disallow" value="{L_SUBMIT}" />*/
/* </p>*/
/* </fieldset>*/
/* */
/* <h1>{L_DELETE_DISALLOW_TITLE}</h1>*/
/* */
/* <p>{L_DELETE_DISALLOW_EXPLAIN}</p>*/
/* */
/* <fieldset>*/
/* 	<legend>{L_DELETE_DISALLOW_TITLE}</legend>*/
/* <!-- IF S_DISALLOWED_NAMES -->*/
/* 	<dl>*/
/* 		<dt><label for="disallowed">{L_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd><select name="disallowed_id" id="disallowed">{S_DISALLOWED_NAMES}</select></dd>*/
/* 	</dl>*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" name="allow" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* <!-- ELSE -->*/
/* 	<p>{L_NO_DISALLOWED}</p>*/
/* <!-- ENDIF -->*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
