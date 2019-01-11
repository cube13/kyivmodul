<?php

/* user_activate_inactive.txt */
class __TwigTemplate_db1a679eae65adf5a3baf5b88b5c75b47eb51d485281056a64ac28f78cdb90f4 extends Twig_Template
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
        echo "Subject: Ваша учётная запись была отключена

Здравствуйте, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ваша учётная запись на конференции «";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "» была отключена, скорее всего из-за внесенных в ваш профиль изменений. Администратор конференции должен активировать вашу учётную запись, чтобы вы смогли ей пользоваться. После активации вы получите повторное уведомление.

";
        // line 7
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* Subject: Ваша учётная запись была отключена*/
/* */
/* Здравствуйте, {USERNAME}!*/
/* */
/* Ваша учётная запись на конференции «{SITENAME}» была отключена, скорее всего из-за внесенных в ваш профиль изменений. Администратор конференции должен активировать вашу учётную запись, чтобы вы смогли ей пользоваться. После активации вы получите повторное уведомление.*/
/* */
/* {EMAIL_SIG}*/
/* */
