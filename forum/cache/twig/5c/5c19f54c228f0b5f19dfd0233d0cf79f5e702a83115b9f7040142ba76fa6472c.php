<?php

/* @gfksx_ThanksForPosts/event/memberlist_view_content_append.html */
class __TwigTemplate_19cb01933616a8f0b9412660a068802e46b012b431756dcc110974f4c8524025 extends Twig_Template
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
        $location = "memberlist_view_thanks.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("memberlist_view_thanks.html", "@gfksx_ThanksForPosts/event/memberlist_view_content_append.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/memberlist_view_content_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- INCLUDE memberlist_view_thanks.html -->*/
/* */
