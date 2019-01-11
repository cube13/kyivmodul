<?php

/* admin_welcome_activated.txt */
class __TwigTemplate_d8dfa8c62a6507495163d716119566c893d1bf6a515b007259bb91d68dcafb58 extends Twig_Template
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
        echo "Subject: Account activated

Hello ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Your account on \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" has been activated by an administrator, you may login now.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

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
/* Subject: Account activated*/
/* */
/* Hello {USERNAME},*/
/* */
/* Your account on "{SITENAME}" has been activated by an administrator, you may login now.*/
/* */
/* Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.*/
/* */
/* {EMAIL_SIG}*/
/* */
