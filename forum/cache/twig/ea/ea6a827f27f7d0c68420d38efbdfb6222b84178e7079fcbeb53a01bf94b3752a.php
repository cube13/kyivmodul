<?php

/* topic_notify.txt */
class __TwigTemplate_9f29edf4d99b2df4306df35e1b24fcccd90cb4be5e61c0381f25ec838fdbc8a8 extends Twig_Template
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
        echo "Subject: Повідомлення про відповідь у темі - \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Привіт, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Ви отримали це повідомлення, оскільки ви слідкуєте за темою \"";
        // line 5
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\" на \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". З моменту вашого останнього візиту у цю тему надійшла нова відповідь ";
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) !== "")) {
            echo " від ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo ". Ви можете скористатись наступними посиланнями для перегляду нових відповідей, нові повідомлення не будуть приходити, допоки ви не перегляните цю тему.

Якщо ви хочете переглянути нові повідомлення з вашого останнього відвідування, натисніть на наступне посилання:
";
        // line 8
        echo (isset($context["U_NEWEST_POST"]) ? $context["U_NEWEST_POST"] : null);
        echo "

Якщо ви бажаєте переглянути тему, перейдіть за наступним посиланням:
";
        // line 11
        echo (isset($context["U_TOPIC"]) ? $context["U_TOPIC"] : null);
        echo "

Якщо ви бажаєте переглянути форум, перейдіть за наступним посиланням:
";
        // line 14
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Якщо ви більше не бажаєте слідкувати за цією темою, ви можете натиснути на \"Не слідкувати більше за цією темою\" на форумі або перейти за наступним посиланням:

";
        // line 18
        echo (isset($context["U_STOP_WATCHING_TOPIC"]) ? $context["U_STOP_WATCHING_TOPIC"] : null);
        echo "

";
        // line 20
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  62 => 18,  55 => 14,  49 => 11,  43 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: Повідомлення про відповідь у темі - "{TOPIC_TITLE}"*/
/* */
/* Привіт, {USERNAME},*/
/* */
/* Ви отримали це повідомлення, оскільки ви слідкуєте за темою "{TOPIC_TITLE}" на "{SITENAME}". З моменту вашого останнього візиту у цю тему надійшла нова відповідь <!-- IF AUTHOR_NAME !== '' --> від {AUTHOR_NAME}<!-- ENDIF -->. Ви можете скористатись наступними посиланнями для перегляду нових відповідей, нові повідомлення не будуть приходити, допоки ви не перегляните цю тему.*/
/* */
/* Якщо ви хочете переглянути нові повідомлення з вашого останнього відвідування, натисніть на наступне посилання:*/
/* {U_NEWEST_POST}*/
/* */
/* Якщо ви бажаєте переглянути тему, перейдіть за наступним посиланням:*/
/* {U_TOPIC}*/
/* */
/* Якщо ви бажаєте переглянути форум, перейдіть за наступним посиланням:*/
/* {U_FORUM}*/
/* */
/* Якщо ви більше не бажаєте слідкувати за цією темою, ви можете натиснути на "Не слідкувати більше за цією темою" на форумі або перейти за наступним посиланням:*/
/* */
/* {U_STOP_WATCHING_TOPIC}*/
/* */
/* {EMAIL_SIG}*/
/* */
