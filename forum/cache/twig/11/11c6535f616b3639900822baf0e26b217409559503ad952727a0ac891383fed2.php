<?php

/* user_welcome_inactive.txt */
class __TwigTemplate_3468c39096b442d0a335e80685900272bc8fc6ce4aa4fdf79936796d083e70d3 extends Twig_Template
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
        echo "Subject: Вітаємо вас на \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" 

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Будь-ласка, збережіть це повідомлення. Інформація про ваш обліковий запис є наступною:

----------------------------
Ім'я: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Адреса форуму: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Перейдіть, будь-ласка, за наступним посиланням для активації вашого облікового запису:

";
        // line 15
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.

Дякуємо вам за реєстрацію!

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
/* Subject: Вітаємо вас на "{SITENAME}" */
/* */
/* {WELCOME_MSG}*/
/* */
/* Будь-ласка, збережіть це повідомлення. Інформація про ваш обліковий запис є наступною:*/
/* */
/* ----------------------------*/
/* Ім'я: {USERNAME}*/
/* */
/* Адреса форуму: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Перейдіть, будь-ласка, за наступним посиланням для активації вашого облікового запису:*/
/* */
/* {U_ACTIVATE}*/
/* */
/* Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.*/
/* */
/* Дякуємо вам за реєстрацію!*/
/* */
/* {EMAIL_SIG}*/
/* */
