<?php

/* admin_welcome_activated.txt */
class __TwigTemplate_01485a82b8f33776e97e444189bab6194a90a253e9b3728ef035e1a8f1fdef65 extends Twig_Template
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
        echo "Subject: Ваш обліковий запис активовано

Привіт, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ваш обліковий запис на \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" було активовано адміністратором, ви можете увійти на форум.

Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.

";
        // line 9
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_welcome_activated.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* Subject: Ваш обліковий запис активовано*/
/* */
/* Привіт, {USERNAME}!*/
/* */
/* Ваш обліковий запис на "{SITENAME}" було активовано адміністратором, ви можете увійти на форум.*/
/* */
/* Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.*/
/* */
/* {EMAIL_SIG}*/
/* */
