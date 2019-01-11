<?php

/* captcha_qa.html */
class __TwigTemplate_ebf8b1787dea3088541ab02e530123e112d943de177fbdcc0d44865587630fc9 extends Twig_Template
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
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 2
            echo "<div class=\"panel captcha-panel\">
\t<div class=\"inner\">

\t<h3 class=\"captcha-title\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("CONFIRMATION");
            echo "</h3>
\t<fieldset class=\"fields2\">
";
        }
        // line 8
        echo "
\t<dl>
\t<dt><label>";
        // line 10
        echo (isset($context["QA_CONFIRM_QUESTION"]) ? $context["QA_CONFIRM_QUESTION"] : null);
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION_EXPLAIN");
        echo "</span></dt>
\t<dd class=\"captcha\">
\t\t<input type=\"text\" tabindex=\"";
        // line 12
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array());
        echo "\" name=\"qa_answer\" id=\"answer\" size=\"45\"  class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("ANSWER");
        echo "\" />
\t\t<input type=\"hidden\" name=\"qa_confirm_id\" id=\"qa_confirm_id\" value=\"";
        // line 13
        echo (isset($context["QA_CONFIRM_ID"]) ? $context["QA_CONFIRM_ID"] : null);
        echo "\" />
\t</dd>
\t</dl>

";
        // line 17
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 18
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_qa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  57 => 17,  50 => 13,  44 => 12,  36 => 10,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_TYPE == 1 -->*/
/* <div class="panel captcha-panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3 class="captcha-title">{L_CONFIRMATION}</h3>*/
/* 	<fieldset class="fields2">*/
/* <!-- ENDIF -->*/
/* */
/* 	<dl>*/
/* 	<dt><label>{QA_CONFIRM_QUESTION}{L_COLON}</label><br /><span>{L_CONFIRM_QUESTION_EXPLAIN}</span></dt>*/
/* 	<dd class="captcha">*/
/* 		<input type="text" tabindex="{$CAPTCHA_TAB_INDEX}" name="qa_answer" id="answer" size="45"  class="inputbox autowidth" title="{L_ANSWER}" />*/
/* 		<input type="hidden" name="qa_confirm_id" id="qa_confirm_id" value="{QA_CONFIRM_ID}" />*/
/* 	</dd>*/
/* 	</dl>*/
/* */
/* <!-- IF S_TYPE == 1 -->*/
/* 	</fieldset>*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
