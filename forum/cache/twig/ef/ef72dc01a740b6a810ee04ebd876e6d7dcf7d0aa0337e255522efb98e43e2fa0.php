<?php

/* user_activate_passwd.txt */
class __TwigTemplate_195655fa150b4a453a5f0707008c12ecfe43d25c441b05e3b0a1929a411b934c extends Twig_Template
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
        echo "Subject: Активація нового паролю

Привіт, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Ви отримали це повідомлення, оскільки ви (чи хтось інший, що видає себе за вас) відіслали запит на отримання нового паролю для вашого облікового запису на сайті \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". Якщо ви не надсилали цей запит, будь-ласка, проігноруйте його. Якщо ж ви продовжуєте отримувати їх, будь-ласка, зв'яжіться з адміністратором форуму.

Для того, щоб використати новий пароль вам необхідно його активувати. Щоб зробити це, натисніть на наступне посилання:

";
        // line 9
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

У випадку успішної активації ви зможете залогуватись на форумі, скориставшись наступним паролем:

Пароль: ";
        // line 13
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "

Звісно, ви можете змінити цей пароль через ваш профіль. Якщо у вас виникають якісь складнощі, будь-ласка, зв'яжіться з адміністратором форуму.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  42 => 13,  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* Subject: Активація нового паролю*/
/* */
/* Привіт, {USERNAME}*/
/* */
/* Ви отримали це повідомлення, оскільки ви (чи хтось інший, що видає себе за вас) відіслали запит на отримання нового паролю для вашого облікового запису на сайті "{SITENAME}". Якщо ви не надсилали цей запит, будь-ласка, проігноруйте його. Якщо ж ви продовжуєте отримувати їх, будь-ласка, зв'яжіться з адміністратором форуму.*/
/* */
/* Для того, щоб використати новий пароль вам необхідно його активувати. Щоб зробити це, натисніть на наступне посилання:*/
/* */
/* {U_ACTIVATE}*/
/* */
/* У випадку успішної активації ви зможете залогуватись на форумі, скориставшись наступним паролем:*/
/* */
/* Пароль: {PASSWORD}*/
/* */
/* Звісно, ви можете змінити цей пароль через ваш профіль. Якщо у вас виникають якісь складнощі, будь-ласка, зв'яжіться з адміністратором форуму.*/
/* */
/* {EMAIL_SIG}*/
/* */
