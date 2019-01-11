<?php

/* mcp_warn_user.html */
class __TwigTemplate_08ca0953a606179c2475d7a52dcc06c923be6af6b6e4c75230acbac63c1271d9 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_warn_user.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
        echo "</h3>

\t<div>
\t\t<div class=\"column1\">
\t\t\t";
        // line 14
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo "<div>";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</div>";
        }
        // line 15
        echo "\t\t</div>

\t\t<div class=\"column2\">
\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 19
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt><dd>";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</dd>";
        }
        // line 20
        echo "\t\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<dt>";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "&nbsp;";
            } else {
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
            }
            echo "</dt><dd>";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 21
        echo "\t\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </dt><dd>";
        echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

\t</div>
</div>

";
        // line 31
        // line 32
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING");
        echo "</h3>
\t<p>";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<textarea name=\"warning\" id=\"warning\" class=\"inputbox\" cols=\"40\" rows=\"3\"></textarea>
\t\t";
        // line 41
        if ((isset($context["S_CAN_NOTIFY"]) ? $context["S_CAN_NOTIFY"] : null)) {
            // line 42
            echo "\t\t<br /><br />
\t\t<dl class=\"panel\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_user\" checked=\"checked\" /> ";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_USER_WARN");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 48
        echo "\t</fieldset>

\t</div>
</div>

";
        // line 53
        // line 54
        echo "
<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"action[add_warning]\" value=\"";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 58
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 62
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_warn_user.html", 62)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_warn_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  169 => 58,  165 => 57,  161 => 56,  157 => 54,  156 => 53,  149 => 48,  143 => 45,  138 => 42,  136 => 41,  129 => 37,  125 => 36,  119 => 32,  118 => 31,  104 => 23,  97 => 22,  89 => 21,  75 => 20,  66 => 19,  60 => 15,  54 => 14,  47 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <form method="post" id="mcp" action="{U_POST_ACTION}">*/
/* */
/* <h2>{L_WARN_USER}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{USERNAME_FULL}</h3>*/
/* */
/* 	<div>*/
/* 		<div class="column1">*/
/* 			<!-- IF AVATAR_IMG --><div>{AVATAR_IMG}</div><!-- ENDIF -->*/
/* 		</div>*/
/* */
/* 		<div class="column2">*/
/* 			<dl class="details">*/
/* 				<!-- IF RANK_TITLE --><dt>{L_RANK}{L_COLON}</dt><dd>{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 				<!-- IF RANK_IMG --><dt><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></dt><dd>{RANK_IMG}</dd><!-- ENDIF -->*/
/* 				<dt>{L_JOINED}{L_COLON}</dt><dd>{JOINED}</dd>*/
/* 				<dt>{L_TOTAL_POSTS}{L_COLON}</dt><dd>{POSTS}</dd>*/
/* 				<dt>{L_WARNINGS}{L_COLON} </dt><dd>{WARNINGS}</dd>*/
/* 			</dl>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- EVENT mcp_warn_user_add_warning_field_before -->*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{L_ADD_WARNING}</h3>*/
/* 	<p>{L_ADD_WARNING_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 		<textarea name="warning" id="warning" class="inputbox" cols="40" rows="3"></textarea>*/
/* 		<!-- IF S_CAN_NOTIFY -->*/
/* 		<br /><br />*/
/* 		<dl class="panel">*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd><label><input type="checkbox" name="notify_user" checked="checked" /> {L_NOTIFY_USER_WARN}</label></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- EVENT mcp_warn_user_add_warning_field_after -->*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp; */
/* 	<input type="submit" name="action[add_warning]" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
