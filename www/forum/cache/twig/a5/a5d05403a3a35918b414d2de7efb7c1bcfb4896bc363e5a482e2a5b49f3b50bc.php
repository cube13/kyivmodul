<?php

/* report_post.txt */
class __TwigTemplate_1d093dd5f524807fae6b719ed5baf709d1ac5f8853c563fbfb7ae357534c7bd5 extends Twig_Template
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
        echo "Subject: Скарга на повідомлення — \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Вітаю, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ви отримали це сповіщення тому, що на повідомлення \"";
        // line 5
        echo (isset($context["POST_SUBJECT"]) ? $context["POST_SUBJECT"] : null);
        echo "\" на форумі \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" надійшла скарга.

Якщо ви хочете переглянути скаргу, перейдіть за наступним посиланням:
";
        // line 8
        echo (isset($context["U_VIEW_REPORT"]) ? $context["U_VIEW_REPORT"] : null);
        echo "

Якщо ви хочете проглянути повідомлення, перейдіть за наступним посиланням:
";
        // line 11
        echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
        echo "

";
        // line 13
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "report_post.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 11,  38 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: Скарга на повідомлення — "{TOPIC_TITLE}"*/
/* */
/* Вітаю, {USERNAME}!*/
/* */
/* Ви отримали це сповіщення тому, що на повідомлення "{POST_SUBJECT}" на форумі "{SITENAME}" надійшла скарга.*/
/* */
/* Якщо ви хочете переглянути скаргу, перейдіть за наступним посиланням:*/
/* {U_VIEW_REPORT}*/
/* */
/* Якщо ви хочете проглянути повідомлення, перейдіть за наступним посиланням:*/
/* {U_VIEW_POST}*/
/* */
/* {EMAIL_SIG}*/
/* */
