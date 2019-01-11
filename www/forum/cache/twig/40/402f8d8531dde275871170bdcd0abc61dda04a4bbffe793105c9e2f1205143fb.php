<?php

/* contact_admin.txt */
class __TwigTemplate_89b3dd5dc075fac0ac5cacedd6bc36b112cb5d45345f425d431809f2877ffd10 extends Twig_Template
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
        echo "
Вітаю, ";
        // line 2
        echo (isset($context["TO_USERNAME"]) ? $context["TO_USERNAME"] : null);
        echo ",

Наступне повідомлення надіслано за допомогою сторінки для зв'язку з адміністрацією на сайті \"";
        // line 4
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\".

";
        // line 6
        if ((isset($context["S_IS_REGISTERED"]) ? $context["S_IS_REGISTERED"] : null)) {
            // line 7
            echo "Повідомлення надіслано з облікового запису на сайті.
Ім'я користувача: ";
            // line 8
            echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
            echo "
E-mail адрес: ";
            // line 9
            echo (isset($context["FROM_EMAIL_ADDRESS"]) ? $context["FROM_EMAIL_ADDRESS"] : null);
            echo "
IP адреса: ";
            // line 10
            echo (isset($context["FROM_IP_ADDRESS"]) ? $context["FROM_IP_ADDRESS"] : null);
            echo "
Профіль: ";
            // line 11
            echo (isset($context["U_FROM_PROFILE"]) ? $context["U_FROM_PROFILE"] : null);
            echo "
";
        } else {
            // line 13
            echo "Повідомлення надіслано гостем, який залишив наступну контактну інформацію:
Ім'я: ";
            // line 14
            echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
            echo "
E-mail адреса: ";
            // line 15
            echo (isset($context["FROM_EMAIL_ADDRESS"]) ? $context["FROM_EMAIL_ADDRESS"] : null);
            echo "
IP адреса: ";
            // line 16
            echo (isset($context["FROM_IP_ADDRESS"]) ? $context["FROM_IP_ADDRESS"] : null);
            echo "
";
        }
        // line 18
        echo "

Відправлене повідомлення
~~~~~~~~~~~~~~~~~~~~~~~~~~~

";
        // line 23
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "contact_admin.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  70 => 18,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* Вітаю, {TO_USERNAME},*/
/* */
/* Наступне повідомлення надіслано за допомогою сторінки для зв'язку з адміністрацією на сайті "{SITENAME}".*/
/* */
/* <!-- IF S_IS_REGISTERED -->*/
/* Повідомлення надіслано з облікового запису на сайті.*/
/* Ім'я користувача: {FROM_USERNAME}*/
/* E-mail адрес: {FROM_EMAIL_ADDRESS}*/
/* IP адреса: {FROM_IP_ADDRESS}*/
/* Профіль: {U_FROM_PROFILE}*/
/* <!-- ELSE -->*/
/* Повідомлення надіслано гостем, який залишив наступну контактну інформацію:*/
/* Ім'я: {FROM_USERNAME}*/
/* E-mail адреса: {FROM_EMAIL_ADDRESS}*/
/* IP адреса: {FROM_IP_ADDRESS}*/
/* <!-- ENDIF -->*/
/* */
/* */
/* Відправлене повідомлення*/
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/* */
/* {MESSAGE}*/
/* */
