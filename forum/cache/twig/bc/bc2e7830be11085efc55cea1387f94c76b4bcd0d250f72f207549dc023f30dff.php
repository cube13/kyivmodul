<?php

/* @gfksx_ThanksForPosts/user_thanks.txt */
class __TwigTemplate_3d017751735f5d6bad0fbf0bbcabd0ccdd8609d6b14a1a605fea1c149922bb3a extends Twig_Template
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
        echo "Subject: ";
        echo (isset($context["THANKS_SUBG"]) ? $context["THANKS_SUBG"] : null);
        echo "

Користувач ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo " пише:

";
        // line 5
        echo (isset($context["POST_THANKS"]) ? $context["POST_THANKS"] : null);
        echo ": ";
        echo (isset($context["U_POST_THANKS"]) ? $context["U_POST_THANKS"] : null);
        echo "

";
        // line 7
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/user_thanks.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: {THANKS_SUBG}*/
/* */
/* Користувач {USERNAME} пише:*/
/* */
/* {POST_THANKS}: {U_POST_THANKS}*/
/* */
/* {EMAIL_SIG}*/
/* */
