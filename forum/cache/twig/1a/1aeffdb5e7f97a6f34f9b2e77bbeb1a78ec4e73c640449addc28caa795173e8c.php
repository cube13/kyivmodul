<?php

/* admin_welcome_activated.txt */
class __TwigTemplate_c65273ec70b24e086f7ed1d8260e7a853c058706c371589da311b090ae849c9a extends Twig_Template
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
        echo "Subject: Учётная запись активирована

Здравствуйте, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ваша учётная запись на конференции «";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "» была активирована администратором. Теперь вы можете войти на конференцию.

Ваш пароль был сохранён в безопасном виде в базе данных конференции. Если вы забудете пароль, то сможете получить новый, используя адрес email, заданный при регистрации.

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
/* Subject: Учётная запись активирована*/
/* */
/* Здравствуйте, {USERNAME}!*/
/* */
/* Ваша учётная запись на конференции «{SITENAME}» была активирована администратором. Теперь вы можете войти на конференцию.*/
/* */
/* Ваш пароль был сохранён в безопасном виде в базе данных конференции. Если вы забудете пароль, то сможете получить новый, используя адрес email, заданный при регистрации.*/
/* */
/* {EMAIL_SIG}*/
/* */
