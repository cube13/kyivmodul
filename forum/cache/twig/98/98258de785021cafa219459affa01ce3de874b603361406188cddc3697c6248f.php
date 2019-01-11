<?php

/* privmsg_notify.txt */
class __TwigTemplate_e1fc52ec5a0143c0383ea9c45c74defe318c56555780b9f0a02cdf4b8d842ca2 extends Twig_Template
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
        echo "Subject: Вам прийшло нове приватне повідомлення

Привіт, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Ви отримали нове приватне повідомлення від \"";
        // line 5
        echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        echo "\" на форумі \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" з наступною темою:

";
        // line 7
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "

Ви можете переглянути нове повідомлення, натиснувши на це посилання:

";
        // line 11
        echo (isset($context["U_VIEW_MESSAGE"]) ? $context["U_VIEW_MESSAGE"] : null);
        echo "

Ви погодились повідомляти вас про цю подію. Пам'ятайте, що ви завжди можете відмовитись від отримання подібних повідомлень, змінивши відповідне налаштування в вашому профілі.

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
/* Subject: Вам прийшло нове приватне повідомлення*/
/* */
/* Привіт, {USERNAME},*/
/* */
/* Ви отримали нове приватне повідомлення від "{AUTHOR_NAME}" на форумі "{SITENAME}" з наступною темою:*/
/* */
/* {SUBJECT}*/
/* */
/* Ви можете переглянути нове повідомлення, натиснувши на це посилання:*/
/* */
/* {U_VIEW_MESSAGE}*/
/* */
/* Ви погодились повідомляти вас про цю подію. Пам'ятайте, що ви завжди можете відмовитись від отримання подібних повідомлень, змінивши відповідне налаштування в вашому профілі.*/
/* */
/* {EMAIL_SIG}*/
/* */
