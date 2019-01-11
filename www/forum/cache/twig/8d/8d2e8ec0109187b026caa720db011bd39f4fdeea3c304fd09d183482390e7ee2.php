<?php

/* topic_in_queue.txt */
class __TwigTemplate_768b45120339750411a5979f3ccef949a8173420f9a45bac22048a6a8fb5e625 extends Twig_Template
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
        echo "Subject: Скарга на тему — \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Вітаю, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ви отримали це сповіщення тому, що на тему \"";
        // line 5
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\" на форумі \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" надійшла скарга.

Якщо ви хочете переглянути тему, перейдіть за наступним посиланням:
";
        // line 8
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "

Якщо ви хочете переглянути форум, перейдіть за наступним посиланням:
";
        // line 11
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

";
        // line 13
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_in_queue.txt";
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
/* Subject: Скарга на тему — "{TOPIC_TITLE}"*/
/* */
/* Вітаю, {USERNAME}!*/
/* */
/* Ви отримали це сповіщення тому, що на тему "{TOPIC_TITLE}" на форумі "{SITENAME}" надійшла скарга.*/
/* */
/* Якщо ви хочете переглянути тему, перейдіть за наступним посиланням:*/
/* {U_VIEW_TOPIC}*/
/* */
/* Якщо ви хочете переглянути форум, перейдіть за наступним посиланням:*/
/* {U_FORUM}*/
/* */
/* {EMAIL_SIG}*/
/* */
