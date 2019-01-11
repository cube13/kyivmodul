<?php

/* privmsg_notify.txt */
class __TwigTemplate_c335c0ba66bb23539d2299d591e301afc28d7bee254adad77ebb02b868d23419 extends Twig_Template
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
        echo "Subject: Новое личное сообщение

Здравствуйте, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Вам пришло новое личное сообщение от ";
        // line 5
        echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        echo " на конференции «";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "» с темой:

";
        // line 7
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "

Вы можете прочитать это сообщение, перейдя по следующей ссылке:

";
        // line 11
        echo (isset($context["U_VIEW_MESSAGE"]) ? $context["U_VIEW_MESSAGE"] : null);
        echo "

Помните, вы можете отказаться от получения подобных уведомлений, если измените настройки в своём личном разделе.

";
        // line 15
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "privmsg_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  42 => 11,  35 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* Subject: Новое личное сообщение*/
/* */
/* Здравствуйте, {USERNAME}!*/
/* */
/* Вам пришло новое личное сообщение от {AUTHOR_NAME} на конференции «{SITENAME}» с темой:*/
/* */
/* {SUBJECT}*/
/* */
/* Вы можете прочитать это сообщение, перейдя по следующей ссылке:*/
/* */
/* {U_VIEW_MESSAGE}*/
/* */
/* Помните, вы можете отказаться от получения подобных уведомлений, если измените настройки в своём личном разделе.*/
/* */
/* {EMAIL_SIG}*/
/* */
