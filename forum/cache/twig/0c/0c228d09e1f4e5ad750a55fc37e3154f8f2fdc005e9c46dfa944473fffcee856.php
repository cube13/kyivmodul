<?php

/* user_welcome_inactive.txt */
class __TwigTemplate_bccc00dfe77f0eceba3d776c5c5850ae25e407665a70eb3d46b3d99b38386f96 extends Twig_Template
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

Рекомендуется сохранить это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Адрес конференции: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Щёлкните по ссылке ниже для активации учётной записи:

";
        // line 15
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

";
        // line 21
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  46 => 15,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Добро пожаловать на конференцию «{SITENAME}»*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Рекомендуется сохранить это сообщение. Параметры вашей учётной записи таковы:*/
/* */
/* ----------------------------*/
/* Имя пользователя: {USERNAME}*/
/* */
/* Адрес конференции: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Щёлкните по ссылке ниже для активации учётной записи:*/
/* */
/* {U_ACTIVATE}*/
/* */
/* Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.*/
/* */
/* Благодарим за регистрацию!*/
/* */
/* {EMAIL_SIG}*/
/* */
