<?php

/* newtopic_notify.txt */
class __TwigTemplate_431f9a95a83a2d1f35396882c2add42d5e850c833212aa7bec37aa4d205c73c8 extends Twig_Template
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
        echo "Subject: Повідомлення про нову тему - \"";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\"

Привіт, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ви отримали це повідомлення, оскільки ви слідкуєте за форумом \"";
        // line 5
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\" на \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". З моменту вашого останнього візиту у цьому форумі з'явилась нова тема \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"";
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) !== "")) {
            echo ", створена ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo ". Для перегляду форуму ви можете скористатись нижчеподаним посиланням: 
";
        // line 6
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Нові повідомлення вам не будуть приходити, допоки ви не відвідаєте форум.

Якщо ви більше не бажаєте слідкувати за цим форумом - ви можете натиснути на посилання \"Відписатись від форуму\" на форумі або натиснувши на це посилання:

";
        // line 12
        echo (isset($context["U_STOP_WATCHING_FORUM"]) ? $context["U_STOP_WATCHING_FORUM"] : null);
        echo "

";
        // line 14
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "newtopic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  52 => 12,  43 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: Повідомлення про нову тему - "{FORUM_NAME}"*/
/* */
/* Привіт, {USERNAME}!*/
/* */
/* Ви отримали це повідомлення, оскільки ви слідкуєте за форумом "{FORUM_NAME}" на "{SITENAME}". З моменту вашого останнього візиту у цьому форумі з'явилась нова тема "{TOPIC_TITLE}"<!-- IF AUTHOR_NAME !== '' -->, створена {AUTHOR_NAME}<!-- ENDIF -->. Для перегляду форуму ви можете скористатись нижчеподаним посиланням: */
/* {U_FORUM}*/
/* */
/* Нові повідомлення вам не будуть приходити, допоки ви не відвідаєте форум.*/
/* */
/* Якщо ви більше не бажаєте слідкувати за цим форумом - ви можете натиснути на посилання "Відписатись від форуму" на форумі або натиснувши на це посилання:*/
/* */
/* {U_STOP_WATCHING_FORUM}*/
/* */
/* {EMAIL_SIG}*/
/* */
