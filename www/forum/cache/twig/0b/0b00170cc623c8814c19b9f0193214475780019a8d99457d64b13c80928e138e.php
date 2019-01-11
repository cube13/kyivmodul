<?php

/* post_in_queue.txt */
class __TwigTemplate_e1f2fe957cf67fa72fc47e09258e11902ae293b8c0a209d4ae5945fbaf77b028 extends Twig_Template
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
        echo "Subject: Повідомлення в черзі на модерацію — \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Вітаю, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ви отримали це сповіщення тому, що повідомлення \"";
        // line 5
        echo (isset($context["POST_SUBJECT"]) ? $context["POST_SUBJECT"] : null);
        echo "\" на форумі \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" потребує схвалення.

Якщо ви хочете проглянути повідомлення, перейдіть за наступним посиланням:
";
        // line 8
        echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
        echo "

Якщо ви хочете переглянути тему, перейдіть за наступним посиланням:
";
        // line 11
        echo (isset($context["U_TOPIC"]) ? $context["U_TOPIC"] : null);
        echo "

";
        // line 13
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "post_in_queue.txt";
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
/* Subject: Повідомлення в черзі на модерацію — "{TOPIC_TITLE}"*/
/* */
/* Вітаю, {USERNAME}!*/
/* */
/* Ви отримали це сповіщення тому, що повідомлення "{POST_SUBJECT}" на форумі "{SITENAME}" потребує схвалення.*/
/* */
/* Якщо ви хочете проглянути повідомлення, перейдіть за наступним посиланням:*/
/* {U_VIEW_POST}*/
/* */
/* Якщо ви хочете переглянути тему, перейдіть за наступним посиланням:*/
/* {U_TOPIC}*/
/* */
/* {EMAIL_SIG}*/
/* */
