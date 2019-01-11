<?php

/* posting_review.html */
class __TwigTemplate_5fb9947b01dc9ae21f7ca454c178dac3a2a11270b6aad7d5e9c44024f1787b78 extends Twig_Template
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
        echo "<h3>";
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW");
        echo "</h3>

<p>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW_EXPLAIN");
        echo "</p>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "post_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post_review_row"]) {
            // line 6
            if ($this->getAttribute($context["post_review_row"], "S_IGNORE_POST", array())) {
                // line 7
                echo "<div class=\"post bg3 post-ignore\">
\t<div class=\"inner\">
\t\t";
                // line 9
                echo $this->getAttribute($context["post_review_row"], "L_IGNORE_POST", array());
                echo "
";
            } else {
                // line 11
                echo "<div class=\"post ";
                if (($this->getAttribute($context["post_review_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t<div class=\"inner\">
";
            }
            // line 14
            echo "
\t<div class=\"postbody\" id=\"ppr";
            // line 15
            echo $this->getAttribute($context["post_review_row"], "POST_ID", array());
            echo "\">
\t\t<h3><a href=\"#ppr";
            // line 16
            echo $this->getAttribute($context["post_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["post_review_row"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t<p class=\"author\">";
            // line 17
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute($context["post_review_row"], "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["post_review_row"], "U_MINI_POST", array());
                echo "\">";
                echo $this->getAttribute($context["post_review_row"], "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "<strong>  ";
            echo $this->getAttribute($context["post_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["post_review_row"], "POST_DATE", array());
            echo "</p>
\t\t<div class=\"content\">";
            // line 18
            echo $this->getAttribute($context["post_review_row"], "MESSAGE", array());
            echo "</div>

\t\t";
            // line 20
            if ($this->getAttribute($context["post_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 21
                echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 24
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t</dl>
\t\t";
            }
            // line 28
            echo "
\t</div>

\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
<hr />
";
    }

    public function getTemplateName()
    {
        return "posting_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  118 => 28,  114 => 26,  105 => 24,  101 => 23,  97 => 22,  94 => 21,  92 => 20,  87 => 18,  69 => 17,  63 => 16,  59 => 15,  56 => 14,  45 => 11,  40 => 9,  36 => 7,  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <h3>{L_POST_REVIEW}</h3>*/
/* */
/* <p>{L_POST_REVIEW_EXPLAIN}</p>*/
/* */
/* <!-- BEGIN post_review_row -->*/
/* <!-- IF post_review_row.S_IGNORE_POST -->*/
/* <div class="post bg3 post-ignore">*/
/* 	<div class="inner">*/
/* 		{post_review_row.L_IGNORE_POST}*/
/* <!-- ELSE -->*/
/* <div class="post <!-- IF post_review_row.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 	<div class="inner">*/
/* <!-- ENDIF -->*/
/* */
/* 	<div class="postbody" id="ppr{post_review_row.POST_ID}">*/
/* 		<h3><a href="#ppr{post_review_row.POST_ID}">{post_review_row.POST_SUBJECT}</a></h3>*/
/* 		<p class="author"><!-- IF S_IS_BOT -->{post_review_row.MINI_POST_IMG}<!-- ELSE --><a href="{post_review_row.U_MINI_POST}">{post_review_row.MINI_POST_IMG}</a><!-- ENDIF --> {L_POST_BY_AUTHOR}<strong>  {post_review_row.POST_AUTHOR_FULL}</strong> &raquo; {post_review_row.POST_DATE}</p>*/
/* 		<div class="content">{post_review_row.MESSAGE}</div>*/
/* */
/* 		<!-- IF post_review_row.S_HAS_ATTACHMENTS -->*/
/* 			<dl class="attachbox">*/
/* 				<dt>{L_ATTACHMENTS}</dt>*/
/* 				<!-- BEGIN attachment -->*/
/* 					<dd>{post_review_row.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 				<!-- END attachment -->*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- END post_review_row -->*/
/* */
/* <hr />*/
/* */
