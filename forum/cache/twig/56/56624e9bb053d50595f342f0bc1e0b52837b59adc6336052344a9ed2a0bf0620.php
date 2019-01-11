<?php

/* admin_welcome_inactive.txt */
class __TwigTemplate_d82d382214995f9ca6e1f5ee82ed5d44088c489107e32a5b0590080d3efc1b73 extends Twig_Template
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

Будь-ласка, збережіть це повідомлення. Інформація про ваш обліковий запис:

----------------------------
Ім'я: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "
Адреса форуму: ";
        // line 9
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Ваш обліковий запис на даний час неактивний, його повинен схвалити адміністратор перед тим, як ви зможете увійти на форум. Ви отримаєте ще одне повідомлення, після того як це відбудеться.

Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.

Дякуємо за реєстрацію!

";
        // line 18
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  37 => 9,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Вітаємо вас на "{SITENAME}" */
/* */
/* {WELCOME_MSG}*/
/* */
/* Будь-ласка, збережіть це повідомлення. Інформація про ваш обліковий запис:*/
/* */
/* ----------------------------*/
/* Ім'я: {USERNAME}*/
/* Адреса форуму: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Ваш обліковий запис на даний час неактивний, його повинен схвалити адміністратор перед тим, як ви зможете увійти на форум. Ви отримаєте ще одне повідомлення, після того як це відбудеться.*/
/* */
/* Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.*/
/* */
/* Дякуємо за реєстрацію!*/
/* */
/* {EMAIL_SIG}*/
/* */
