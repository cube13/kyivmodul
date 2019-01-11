<?php

/* @gfksx_ThanksForPosts/event/topiclist_row_append.html */
class __TwigTemplate_b95128d71c5914a7fd829a185b1580fc2a915e0e33eb4b049949899c048487c0 extends Twig_Template
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
        if ((isset($context["topicrow"]) ? $context["topicrow"] : null)) {
            // line 2
            echo "    ";
            $context["rating"] = (isset($context["topicrow"]) ? $context["topicrow"] : null);
        } elseif (        // line 3
(isset($context["recent_topics"]) ? $context["recent_topics"] : null)) {
            // line 4
            echo "    ";
            $context["rating"] = (isset($context["recent_topics"]) ? $context["recent_topics"] : null);
        }
        // line 6
        $this->loadTemplate("topicrow_rating_body.html", "@gfksx_ThanksForPosts/event/topiclist_row_append.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/topiclist_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if topicrow %}*/
/*     {% set rating = topicrow %}*/
/* {% elseif recent_topics %}*/
/*     {% set rating = recent_topics %}*/
/* {% endif %}*/
/* {% include 'topicrow_rating_body.html' %}*/
/* */
