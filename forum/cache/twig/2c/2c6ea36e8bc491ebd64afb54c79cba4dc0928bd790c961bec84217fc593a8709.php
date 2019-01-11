<?php

/* thanks_results.html */
class __TwigTemplate_921b676bfdefe5222ec58a6137da81186e3a1466c6959c5149befe3c1c773d58 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "thanks_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        echo "</h2>

<p><a class=\"arrow-";
        // line 5
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo "\" href=\"";
        echo (isset($context["U_THANKS"]) ? $context["U_THANKS"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("THANKS_BACK");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("THANKS_BACK");
        echo "</a></p>

";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null))) {
            // line 8
            echo "\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 10
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 11
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 12
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "thanks_results.html", 12)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 13
                echo "\t\t\t";
            } else {
                // line 14
                echo "\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 16
            echo "\t\t</div>
\t</div>
";
        }
        // line 19
        echo "
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
            // line 21
            echo "\t\t";
            // line 22
            echo "\t\t<div class=\"search post ";
            if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\">
\t\t\t";
            // line 26
            // line 27
            echo "\t\t\t<dt class=\"author\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
            echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
            // line 28
            echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
            echo "</dd>
\t\t\t";
            // line 29
            if ($this->getAttribute($context["searchresults"], "FORUM_ID", array())) {
                // line 30
                echo "\t\t\t\t<dd><a href=\"";
                echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_FORUM");
                echo "</a></dd>
\t\t\t\t<dd><a href=\"";
                // line 31
                echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_TOPIC");
                echo "</a></dd>
\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t<dd><a href=\"";
                echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_TOPIC");
                echo "</a></dd>
\t\t\t";
            }
            // line 35
            echo "\t\t\t";
            // line 36
            echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
            // line 39
            echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
            echo "\">";
            echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t\t<div class=\"content\">";
            // line 40
            echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
            echo "</div>
\t\t</div>

\t\t<ul class=\"searchresults\">
\t\t\t<li><a href=\"";
            // line 44
            echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
            echo "\" class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
            echo "</a></li>
\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 48
            // line 49
            echo "\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
            echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null))) {
            // line 58
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 60
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t";
            // line 61
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 62
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "thanks_results.html", 62)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 63
                echo "\t\t";
            } else {
                // line 64
                echo "\t\t&bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t";
            }
            // line 66
            echo "\t</div>
</div>
";
        }
        // line 69
        echo "
";
        // line 70
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "thanks_results.html", 70)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 71
        echo "
";
        // line 72
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "thanks_results.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "thanks_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 72,  258 => 71,  246 => 70,  243 => 69,  238 => 66,  232 => 64,  229 => 63,  216 => 62,  214 => 61,  210 => 60,  206 => 58,  204 => 57,  201 => 56,  191 => 52,  187 => 50,  182 => 49,  181 => 48,  170 => 44,  163 => 40,  157 => 39,  152 => 36,  150 => 35,  142 => 33,  135 => 31,  128 => 30,  126 => 29,  122 => 28,  115 => 27,  114 => 26,  99 => 22,  97 => 21,  92 => 20,  89 => 19,  84 => 16,  78 => 14,  75 => 13,  62 => 12,  60 => 11,  56 => 10,  52 => 8,  50 => 7,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2>{SEARCH_MATCHES}</h2>*/
/* */
/* <p><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_THANKS}" title="{L_THANKS_BACK}">{L_THANKS_BACK}</a></p>*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES -->*/
/* 	<div class="action-bar top">*/
/* 		<div class="pagination">*/
/* 			{SEARCH_MATCHES}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 			 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* 	<!-- BEGIN searchresults -->*/
/* 		<!-- EVENT search_results_post_before -->*/
/* 		<div class="search post <!-- IF searchresults.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF searchresults.S_POST_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<div class="inner">*/
/* */
/* 		<dl class="postprofile">*/
/* 			<!-- EVENT search_results_postprofile_before -->*/
/* 			<dt class="author">{L_POST_BY_AUTHOR} {searchresults.POST_AUTHOR_FULL}</dt>*/
/* 			<dd class="search-result-date">{searchresults.POST_DATE}</dd>*/
/* 			<!-- IF searchresults.FORUM_ID -->*/
/* 				<dd><a href="{searchresults.U_VIEW_FORUM}">{L_JUMP_TO_FORUM}</a></dd>*/
/* 				<dd><a href="{searchresults.U_VIEW_TOPIC}">{L_JUMP_TO_TOPIC}</a></dd>*/
/* 			<!-- ELSE -->*/
/* 				<dd><a href="{searchresults.U_VIEW_TOPIC}">{L_JUMP_TO_TOPIC}</a></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT search_results_postprofile_after -->*/
/* 		</dl>*/
/* */
/* 		<div class="postbody">*/
/* 			<h3><a href="{searchresults.U_VIEW_POST}">{searchresults.POST_SUBJECT}</a></h3>*/
/* 			<div class="content">{searchresults.MESSAGE}</div>*/
/* 		</div>*/
/* */
/* 		<ul class="searchresults">*/
/* 			<li><a href="{searchresults.U_VIEW_POST}" class="arrow-{S_CONTENT_FLOW_END}">{L_JUMP_TO_POST}</a></li>*/
/* 		</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- EVENT search_results_post_after -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- END searchresults -->*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES -->*/
/* <div class="action-bar bottom">*/
/* 	<div class="pagination">*/
/* 		{SEARCH_MATCHES}*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 		&bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
