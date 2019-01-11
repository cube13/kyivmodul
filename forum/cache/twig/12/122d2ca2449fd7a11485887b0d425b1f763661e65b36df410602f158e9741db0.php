<?php

/* thankslist_body.html */
class __TwigTemplate_2b8a2e01eeaaaafd8e197be762929f5a5618472641d2a7b2357b6899fb00bd8f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "thankslist_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null))) {
            // line 6
            echo "\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 8
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t";
            // line 9
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 10
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "thankslist_body.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 14
            echo "\t\t</div>
\t</div>
";
        }
        // line 17
        echo "
\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t\t<table class=\"table1\" cellspacing=\"1\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\" data-dfn=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("RANK");
        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\">";
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<span class=\"rank-img\"><a href=\"";
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</a>";
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 25
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("POSTS");
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 26
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_THANKS_G"]) ? $context["U_SORT_THANKS_G"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GIVEN");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("GIVEN");
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 27
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_THANKS_R"]) ? $context["U_SORT_THANKS_R"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RECEIVED");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("RECEIVED");
        }
        echo "</th>
\t\t\t\t\t<th class=\"info\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                echo " ";
            }
            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</th>
\t\t\t\t\t<th class=\"joined\">";
        // line 29
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("JOINED");
        }
        echo "</th>
\t\t\t\t\t<th class=\"active\">";
        // line 30
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        }
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 35
            echo "\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t\t\t<td>";
            // line 36
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                echo "</span>";
            }
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            echo "</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 37
            if ($this->getAttribute($context["memberrow"], "POSTS", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 38
            if ($this->getAttribute($context["memberrow"], "GIVENS", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER_GIVENS", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "GIVENS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "GIVENS", array());
            }
            echo " </td>
\t\t\t\t\t<td class=\"posts\">";
            // line 39
            if ($this->getAttribute($context["memberrow"], "RECEIVED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER_RECEIVED", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "RECEIVED", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "RECEIVED", array());
            }
            echo "</td>
\t\t\t\t\t<td class=\"info\">";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            echo $this->getAttribute($context["memberrow"], "VISITED", array());
            echo "&nbsp;</td>
\t\t\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
            // line 46
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "8";
            } else {
                echo "7";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null))) {
            // line 55
            echo "\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 57
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t";
            // line 58
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 59
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "thankslist_body.html", 59)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 60
                echo "\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 63
            echo "\t\t</div>
\t</div>
";
        }
        // line 66
        echo "
";
        // line 67
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "thankslist_body.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 68
        echo "
";
        // line 69
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "thankslist_body.html", 69)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "thankslist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 69,  366 => 68,  354 => 67,  351 => 66,  346 => 63,  340 => 61,  337 => 60,  324 => 59,  322 => 58,  318 => 57,  314 => 55,  312 => 54,  305 => 49,  290 => 46,  287 => 45,  279 => 42,  275 => 41,  257 => 40,  243 => 39,  229 => 38,  215 => 37,  197 => 36,  188 => 35,  183 => 34,  168 => 30,  156 => 29,  141 => 28,  129 => 27,  117 => 26,  105 => 25,  87 => 24,  78 => 17,  73 => 14,  67 => 12,  64 => 11,  51 => 10,  49 => 9,  45 => 8,  41 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="solo">{PAGE_TITLE}</h2>*/
/* */
/* <!-- IF .pagination or TOTAL_USERS -->*/
/* 	<div class="action-bar top">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_USERS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* 	<div class="forumbg forumbg-table">*/
/* 		<div class="inner">*/
/* */
/* 			<table class="table1" cellspacing="1">*/
/* 				<thead>*/
/* 				<tr>*/
/* 					<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><!-- IF S_THANKS --><span class="rank-img"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}">{L_USERNAME}</a><!-- ENDIF --></th>*/
/* 					<th class="posts"><!-- IF S_THANKS --><a href="{U_SORT_POSTS}">{L_POSTS}</a><!-- ELSE -->{L_POSTS}<!-- ENDIF --></th>*/
/* 					<th class="posts"><!-- IF S_THANKS --><a href="{U_SORT_THANKS_G}">{L_GIVEN}</a><!-- ELSE -->{L_GIVEN}<!-- ENDIF --></th>*/
/* 					<th class="posts"><!-- IF S_THANKS --><a href="{U_SORT_THANKS_R}">{L_RECEIVED}</a><!-- ELSE -->{L_RECEIVED}<!-- ENDIF --></th>*/
/* 					<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 					<th class="joined"><!-- IF S_THANKS --><a href="{U_SORT_JOINED}">{L_JOINED}</a><!-- ELSE -->{L_JOINED}<!-- ENDIF --></th>*/
/* 					<th class="active"><!-- IF S_THANKS --><a href="{U_SORT_ACTIVE}">{L_LAST_ACTIVE}</a><!-- ELSE -->{L_LAST_ACTIVE}<!-- ENDIF --></th>*/
/* 				</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 		<!-- BEGIN memberrow -->*/
/* 				<tr class="<!-- IF memberrow.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 					<td><!-- IF memberrow.RANK_IMG --><span class="rank-img">{memberrow.RANK_IMG}</span><!-- ELSE --><span class="rank-img">{memberrow.RANK_TITLE}</span><!-- ENDIF --><!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><input type="checkbox" name="user" value="{memberrow.USERNAME}" /> <!-- ENDIF -->{memberrow.USERNAME_FULL}</td>*/
/* 					<td class="posts"><!-- IF memberrow.POSTS --><a href="{memberrow.U_SEARCH_USER}" title="{L_SEARCH_USER_POSTS}">{memberrow.POSTS}</a><!-- ELSE -->{memberrow.POSTS}<!-- ENDIF --></td>*/
/* 					<td class="posts"><!-- IF memberrow.GIVENS --><a href="{memberrow.U_SEARCH_USER_GIVENS}" title="{L_SEARCH_USER_POSTS}">{memberrow.GIVENS}</a><!-- ELSE -->{memberrow.GIVENS}<!-- ENDIF --> </td>*/
/* 					<td class="posts"><!-- IF memberrow.RECEIVED --><a href="{memberrow.U_SEARCH_USER_RECEIVED}" title="{L_SEARCH_USER_POSTS}">{memberrow.RECEIVED}</a><!-- ELSE -->{memberrow.RECEIVED}<!-- ENDIF --></td>*/
/* 					<td class="info"><!-- BEGIN custom_fields --><div>{memberrow.custom_fields.PROFILE_FIELD_VALUE}</div><!-- BEGINELSE -->&nbsp;<!-- END custom_fields --></td>*/
/* 					<td>{memberrow.JOINED}</td>*/
/* 					<td>{memberrow.VISITED}&nbsp;</td>*/
/* 				</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 				<tr class="bg1">*/
/* 					<td colspan="<!-- IF S_VIEWONLINE -->8<!-- ELSE -->7<!-- ENDIF -->">{L_NO_MEMBERS}</td>*/
/* 				</tr>*/
/* 		<!-- END memberrow -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <!-- IF .pagination or TOTAL_USERS -->*/
/* 	<div class="action-bar bottom">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_USERS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
