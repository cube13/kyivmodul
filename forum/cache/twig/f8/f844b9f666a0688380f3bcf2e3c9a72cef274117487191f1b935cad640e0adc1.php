<?php

/* acp_users_warnings.html */
class __TwigTemplate_52a28544cd1ff8c94a020c204f2b3d77f27eb085026e1f1a529497935494e74e extends Twig_Template
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
        echo "\t<form id=\"list\" method=\"post\" action=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

\t";
        // line 3
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "warn", array()))) {
            // line 4
            echo "\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("REPORT_BY");
            echo "</th>
\t\t<th>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t<th>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("FEEDBACK");
            echo "</th>
\t\t<th>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "warn", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["warn"]) {
                // line 15
                echo "\t\t<tr>
\t\t\t<td>";
                // line 16
                echo $this->getAttribute($context["warn"], "USERNAME", array());
                echo "</td>
\t\t\t<td style=\"text-align: center; nowrap: nowrap;\">";
                // line 17
                echo $this->getAttribute($context["warn"], "DATE", array());
                echo "</td>
\t\t\t<td>";
                // line 18
                echo $this->getAttribute($context["warn"], "ACTION", array());
                echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 19
                echo $this->getAttribute($context["warn"], "ID", array());
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</tbody>
\t</table>
\t";
        } else {
            // line 25
            echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("NO_WARNINGS");
            echo "</p>
\t\t</div>
\t";
        }
        // line 29
        echo "
\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"delall\" value=\"";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"delmarked\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
        echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('list', 'mark', true);\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "</a> &bull; <a href=\"#\" onclick=\"marklist('list', 'mark', false);\">";
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "</a></p>
\t</fieldset>
\t";
        // line 35
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</form>
";
    }

    public function getTemplateName()
    {
        return "acp_users_warnings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  105 => 33,  101 => 32,  97 => 31,  93 => 29,  87 => 26,  84 => 25,  79 => 22,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  55 => 15,  51 => 14,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* 	<form id="list" method="post" action="{U_ACTION}">*/
/* */
/* 	<!-- IF .warn -->*/
/* 	<table class="table1 zebra-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_REPORT_BY}</th>*/
/* 		<th>{L_TIME}</th>*/
/* 		<th>{L_FEEDBACK}</th>*/
/* 		<th>{L_MARK}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN warn -->*/
/* 		<tr>*/
/* 			<td>{warn.USERNAME}</td>*/
/* 			<td style="text-align: center; nowrap: nowrap;">{warn.DATE}</td>*/
/* 			<td>{warn.ACTION}</td>*/
/* 			<td style="text-align: center;"><input type="checkbox" class="radio" name="mark[]" value="{warn.ID}" /></td>*/
/* 		</tr>*/
/* 	<!-- END warn -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<!-- ELSE -->*/
/* 		<div class="errorbox">*/
/* 			<p>{L_NO_WARNINGS}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="quick">*/
/* 		<input class="button2" type="submit" name="delall" value="{L_DELETE_ALL}" />&nbsp;*/
/* 		<input class="button2" type="submit" name="delmarked" value="{L_DELETE_MARKED}" />*/
/* 		<p class="small"><a href="#" onclick="marklist('list', 'mark', true);">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('list', 'mark', false);">{L_UNMARK_ALL}</a></p>*/
/* 	</fieldset>*/
/* 	{S_FORM_TOKEN}*/
/* 	</form>*/
/* */
