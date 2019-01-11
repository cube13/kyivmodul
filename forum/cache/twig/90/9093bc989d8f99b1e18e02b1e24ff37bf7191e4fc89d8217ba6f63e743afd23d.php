<?php

/* user_resend_inactive.txt */
class __TwigTemplate_2b0c1cc1651f76e2718bbf1dfeee625468591fb152860d8272283766c12895be extends Twig_Template
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
        echo "Subject: Добро пожаловать на конференцию «";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "»

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "
----------------------------

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Щёлкните по ссылке ниже для активации учётной записи:

";
        // line 15
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

Благодарим за регистрацию!

";
        // line 19
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_resend_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  43 => 15,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Добро пожаловать на конференцию «{SITENAME}»*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:*/
/* */
/* ----------------------------*/
/* Имя пользователя: {USERNAME}*/
/* ----------------------------*/
/* */
/* Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.*/
/* */
/* Щёлкните по ссылке ниже для активации учётной записи:*/
/* */
/* {U_ACTIVATE}*/
/* */
/* Благодарим за регистрацию!*/
/* */
/* {EMAIL_SIG}*/
/* */
