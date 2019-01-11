<?php

/* bookmark.txt */
class __TwigTemplate_4ef94e163b8a15260e8473c65dc3d0eca2bb936ce6b1fe81cff5847ee04063ae extends Twig_Template
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
        echo "Subject: Сповіщення про відповідь — \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Вітаємо, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Ви отримали це повідомлення тому, що в темі \"";
        // line 5
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\" на форумі \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\", яку ви додали в закладки, з моменту вашого останнього відвідування з'явилося нове повідомлення. Ви можете перейти за посиланням, щоб прочитати надійшли відповіді; нові повідомлення не будуть приходити, поки Ви не переглянете тему.

Якщо ви хочете переглянути найновіше повідомлення з моменту вашого останнього відвідування, перейдіть за наступним посиланням:
";
        // line 8
        echo (isset($context["U_NEWEST_POST"]) ? $context["U_NEWEST_POST"] : null);
        echo "

Якщо ви хочете проглянути всю тему, перейдіть за наступним посиланням:
";
        // line 11
        echo (isset($context["U_TOPIC"]) ? $context["U_TOPIC"] : null);
        echo "

Якщо ви хочете переглянути форум, перейдіть за наступним посиланням:
";
        // line 14
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Якщо ви більше не хочете отримувати повідомлення про відповіді в темах, поміщених у закладки, змініть налаштування повідомлень:

";
        // line 18
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "

";
        // line 20
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bookmark.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  57 => 18,  50 => 14,  44 => 11,  38 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: Сповіщення про відповідь — "{TOPIC_TITLE}"*/
/* */
/* Вітаємо, {USERNAME}!*/
/* */
/* Ви отримали це повідомлення тому, що в темі "{TOPIC_TITLE}" на форумі "{SITENAME}", яку ви додали в закладки, з моменту вашого останнього відвідування з'явилося нове повідомлення. Ви можете перейти за посиланням, щоб прочитати надійшли відповіді; нові повідомлення не будуть приходити, поки Ви не переглянете тему.*/
/* */
/* Якщо ви хочете переглянути найновіше повідомлення з моменту вашого останнього відвідування, перейдіть за наступним посиланням:*/
/* {U_NEWEST_POST}*/
/* */
/* Якщо ви хочете проглянути всю тему, перейдіть за наступним посиланням:*/
/* {U_TOPIC}*/
/* */
/* Якщо ви хочете переглянути форум, перейдіть за наступним посиланням:*/
/* {U_FORUM}*/
/* */
/* Якщо ви більше не хочете отримувати повідомлення про відповіді в темах, поміщених у закладки, змініть налаштування повідомлень:*/
/* */
/* {U_NOTIFICATION_SETTINGS}*/
/* */
/* {EMAIL_SIG}*/
/* */
