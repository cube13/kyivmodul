<?php

/* permission_trace.html */
class __TwigTemplate_51e410a1a9564a4d789968d986b0dc725ca51efc06b38e5c57bd77523f1e002d extends Twig_Template
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
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "permission_trace.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div style=\"background-color: #fff; padding: 10px; margin-top: 10px;\" class=\"permissions\">

\t";
        // line 5
        if ((isset($context["U_BACK"]) ? $context["U_BACK"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>";
        }
        // line 6
        echo "
\t<h3>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("TRACE_FOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["PERMISSION_USERNAME"]) ? $context["PERMISSION_USERNAME"] : null);
        echo " / ";
        if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo " / ";
        }
        echo (isset($context["PERMISSION"]) ? $context["PERMISSION"] : null);
        echo " </h3>

\t<br />

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th>";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("TRACE_WHO");
        echo "</th>
\t\t<th style=\"width: 50px;\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("ACL_SETTING");
        echo "</th>
\t\t<th style=\"width: 50px;\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("TRACE_TOTAL");
        echo "</th>
\t\t<th>";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 22
            echo "\t\t";
            if (($this->getAttribute($context["trace"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "<tr class=\"row4\">";
            } else {
                echo "<tr class=\"row3\">";
            }
            // line 23
            echo "\t\t<td style=\"white-space: nowrap;\"><strong>";
            echo $this->getAttribute($context["trace"], "WHO", array());
            echo "</strong></td>

\t\t";
            // line 25
            if ($this->getAttribute($context["trace"], "S_SETTING_NEVER", array())) {
                // line 26
                echo "\t\t\t<td class=\"never\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_NEVER");
                echo "</td>
\t\t";
            } elseif ($this->getAttribute(            // line 27
$context["trace"], "S_SETTING_YES", array())) {
                // line 28
                echo "\t\t\t<td class=\"yes\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_YES");
                echo "</td>
\t\t";
            } else {
                // line 30
                echo "\t\t\t<td class=\"no\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_NO");
                echo "</td>
\t\t";
            }
            // line 32
            echo "
\t\t";
            // line 33
            if ($this->getAttribute($context["trace"], "S_TOTAL_NEVER", array())) {
                // line 34
                echo "\t\t\t<td class=\"never\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_NEVER");
                echo "</td>
\t\t";
            } elseif ($this->getAttribute(            // line 35
$context["trace"], "S_TOTAL_YES", array())) {
                // line 36
                echo "\t\t\t<td class=\"yes\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_YES");
                echo "</td>
\t\t";
            } else {
                // line 38
                echo "\t\t\t<td class=\"no\">";
                echo $this->env->getExtension('phpbb')->lang("ACL_NO");
                echo "</td>
\t\t";
            }
            // line 40
            echo "
\t\t<td>";
            // line 41
            echo $this->getAttribute($context["trace"], "INFORMATION", array());
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t<tr class=\"row2\">
\t\t<td style=\"white-space: nowrap;\"><strong>";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("TRACE_RESULT");
        echo "</strong></td>
\t\t<td colspan=\"2\" style=\"text-align: center;\" class=\"";
        // line 46
        if ((isset($context["S_RESULT_NEVER"]) ? $context["S_RESULT_NEVER"] : null)) {
            echo "never";
        } elseif ((isset($context["S_RESULT_YES"]) ? $context["S_RESULT_YES"] : null)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "\">
\t\t";
        // line 47
        if ((isset($context["S_RESULT_NEVER"]) ? $context["S_RESULT_NEVER"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("ACL_NEVER");
        } elseif ((isset($context["S_RESULT_YES"]) ? $context["S_RESULT_YES"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("ACL_YES");
        } else {
            echo $this->env->getExtension('phpbb')->lang("ACL_NO");
        }
        // line 48
        echo "\t\t</td>
\t\t<td>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("RESULTING_PERMISSION");
        echo "</td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

</div>

";
        // line 58
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "permission_trace.html", 58)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "permission_trace.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 58,  189 => 49,  186 => 48,  178 => 47,  168 => 46,  164 => 45,  161 => 44,  152 => 41,  149 => 40,  143 => 38,  137 => 36,  135 => 35,  130 => 34,  128 => 33,  125 => 32,  119 => 30,  113 => 28,  111 => 27,  106 => 26,  104 => 25,  98 => 23,  91 => 22,  87 => 21,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  49 => 7,  46 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE simple_header.html -->*/
/* */
/* <div style="background-color: #fff; padding: 10px; margin-top: 10px;" class="permissions">*/
/* */
/* 	<!-- IF U_BACK --><a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a><!-- ENDIF -->*/
/* */
/* 	<h3>{L_TRACE_FOR}{L_COLON} {PERMISSION_USERNAME} / <!-- IF FORUM_NAME -->{FORUM_NAME} / <!-- ENDIF -->{PERMISSION} </h3>*/
/* */
/* 	<br />*/
/* */
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_TRACE_WHO}</th>*/
/* 		<th style="width: 50px;">{L_ACL_SETTING}</th>*/
/* 		<th style="width: 50px;">{L_TRACE_TOTAL}</th>*/
/* 		<th>{L_INFORMATION}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN trace -->*/
/* 		<!-- IF trace.S_ROW_COUNT is even --><tr class="row4"><!-- ELSE --><tr class="row3"><!-- ENDIF -->*/
/* 		<td style="white-space: nowrap;"><strong>{trace.WHO}</strong></td>*/
/* */
/* 		<!-- IF trace.S_SETTING_NEVER -->*/
/* 			<td class="never">{L_ACL_NEVER}</td>*/
/* 		<!-- ELSEIF trace.S_SETTING_YES -->*/
/* 			<td class="yes">{L_ACL_YES}</td>*/
/* 		<!-- ELSE -->*/
/* 			<td class="no">{L_ACL_NO}</td>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF trace.S_TOTAL_NEVER -->*/
/* 			<td class="never">{L_ACL_NEVER}</td>*/
/* 		<!-- ELSEIF trace.S_TOTAL_YES -->*/
/* 			<td class="yes">{L_ACL_YES}</td>*/
/* 		<!-- ELSE -->*/
/* 			<td class="no">{L_ACL_NO}</td>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<td>{trace.INFORMATION}</td>*/
/* 	</tr>*/
/* 	<!-- END trace -->*/
/* 	<tr class="row2">*/
/* 		<td style="white-space: nowrap;"><strong>{L_TRACE_RESULT}</strong></td>*/
/* 		<td colspan="2" style="text-align: center;" class="<!-- IF S_RESULT_NEVER -->never<!-- ELSEIF S_RESULT_YES -->yes<!-- ELSE -->no<!-- ENDIF -->">*/
/* 		<!-- IF S_RESULT_NEVER -->{L_ACL_NEVER}<!-- ELSEIF S_RESULT_YES -->{L_ACL_YES}<!-- ELSE -->{L_ACL_NO}<!-- ENDIF -->*/
/* 		</td>*/
/* 		<td>{L_RESULTING_PERMISSION}</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<br />*/
/* */
/* </div>*/
/* */
/* <!-- INCLUDE simple_footer.html -->*/
/* */
