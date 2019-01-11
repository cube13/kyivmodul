<?php

/* admin_welcome_inactive.txt */
class __TwigTemplate_3b63c232ec5cc9b2cb3a328cd1108e991c5ab06d10e643e5f515fc97771bebc7 extends Twig_Template
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
        echo "Subject: Welcome to \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Please keep this email for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Board URL: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Your account is currently inactive and will need to be approved by an administrator before you can log in. Another email will be sent when this has occurred.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

";
        // line 19
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
        return array (  50 => 19,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Welcome to "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Please keep this email for your records. Your account information is as follows:*/
/* */
/* ----------------------------*/
/* Username: {USERNAME}*/
/* */
/* Board URL: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Your account is currently inactive and will need to be approved by an administrator before you can log in. Another email will be sent when this has occurred.*/
/* */
/* Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.*/
/* */
/* Thank you for registering.*/
/* */
/* {EMAIL_SIG}*/
/* */
