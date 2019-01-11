<?php

/* @gfksx_ThanksForPosts/memberlist_view_thanks.html */
class __TwigTemplate_280b869401ea3a5c8bad6c79ea55aa59d5f5c040313a97267058642a5436a245 extends Twig_Template
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
        echo "<script type=\"text/JavaScript\">
// <![CDATA[
function getElement(iElementId)
{
   if (document.all)
   {
      return document.all[iElementId];
   }
   if (document.getElementById)
   {
      return document.getElementById(iElementId);
   }
}

function toggleElement(oElement)
{
   if (oElement.style.display == \"none\")
   {
      oElement.style.display = \"\";
   }
   else
   {
      oElement.style.display = \"none\";
   }
}
// ]]>
</script>
";
        // line 28
        if (((isset($context["THANKS_PROFILELIST_VIEW"]) ? $context["THANKS_PROFILELIST_VIEW"] : null) && ((isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null) || (isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null)))) {
            // line 29
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">
\t<h3>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("GRATITUDES");
            echo "</h3>
\t\t";
            // line 32
            if ((isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null)) {
                // line 33
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 34
                if ((isset($context["S_MOD_THANKS"]) ? $context["S_MOD_THANKS"] : null)) {
                    // line 35
                    echo "\t\t\t<ul class=\"post-buttons\" style=\"float:left\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 37
                    echo (isset($context["U_CLEAR_LIST_THANKS_GIVE"]) ? $context["U_CLEAR_LIST_THANKS_GIVE"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                    echo "\" class=\"button icon-button delete-icon\" style=\"float:left\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                    echo "</span></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
                }
                // line 41
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("GIVEN");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null);
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"#\" onclick=\"toggleElement( getElement('show_thanks')); return false;\">";
                // line 44
                echo $this->env->getExtension('phpbb')->lang("THANKS_LIST");
                echo "</a>
\t\t\t\t\t<div id=\"show_thanks\" style=\"display: none;\">";
                // line 45
                echo (isset($context["THANKS"]) ? $context["THANKS"] : null);
                echo "</div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 50
            echo "\t\t";
            if ((isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null)) {
                // line 51
                echo "\t\t<div class=\"";
                if ( !(isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null)) {
                    echo "column1";
                } else {
                    echo "column2";
                }
                echo "\">
\t\t\t";
                // line 52
                if ((isset($context["S_MOD_THANKS"]) ? $context["S_MOD_THANKS"] : null)) {
                    // line 53
                    echo "\t\t\t<ul class=\"post-buttons\" style=\"float:left\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 55
                    echo (isset($context["U_CLEAR_LIST_THANKS_RECEIVE"]) ? $context["U_CLEAR_LIST_THANKS_RECEIVE"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                    echo "\" class=\"button icon-button delete-icon\" style=\"float:left\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("CLEAR_LIST_THANKS");
                    echo "</span></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
                }
                // line 59
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("RECEIVED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null);
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"#\" onclick=\"toggleElement( getElement('show_thanked')); return false;\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("THANKS_LIST");
                echo "</a>
\t\t\t\t\t<div id=\"show_thanked\" style=\"display: none;\">";
                // line 63
                echo (isset($context["THANKED"]) ? $context["THANKED"] : null);
                echo "</div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 68
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/memberlist_view_thanks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  147 => 63,  143 => 62,  135 => 60,  132 => 59,  121 => 55,  117 => 53,  115 => 52,  106 => 51,  103 => 50,  95 => 45,  91 => 44,  83 => 42,  80 => 41,  69 => 37,  65 => 35,  63 => 34,  60 => 33,  58 => 32,  54 => 31,  50 => 29,  48 => 28,  19 => 1,);
    }
}
/* <script type="text/JavaScript">*/
/* // <![CDATA[*/
/* function getElement(iElementId)*/
/* {*/
/*    if (document.all)*/
/*    {*/
/*       return document.all[iElementId];*/
/*    }*/
/*    if (document.getElementById)*/
/*    {*/
/*       return document.getElementById(iElementId);*/
/*    }*/
/* }*/
/* */
/* function toggleElement(oElement)*/
/* {*/
/*    if (oElement.style.display == "none")*/
/*    {*/
/*       oElement.style.display = "";*/
/*    }*/
/*    else*/
/*    {*/
/*       oElement.style.display = "none";*/
/*    }*/
/* }*/
/* // ]]>*/
/* </script>*/
/* <!-- IF THANKS_PROFILELIST_VIEW and (POSTER_GIVE_COUNT or POSTER_RECEIVE_COUNT) -->*/
/* <div class="panel bg1">*/
/* 	<div class="inner">*/
/* 	<h3>{L_GRATITUDES}</h3>*/
/* 		<!-- IF POSTER_GIVE_COUNT -->*/
/* 		<div class="column1">*/
/* 			<!-- IF S_MOD_THANKS -->*/
/* 			<ul class="post-buttons" style="float:left">*/
/* 				<li>*/
/* 					<a href="{U_CLEAR_LIST_THANKS_GIVE}" title="{L_CLEAR_LIST_THANKS}" class="button icon-button delete-icon" style="float:left"><span>{L_CLEAR_LIST_THANKS}</span></a>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<!-- ENDIF -->*/
/* 			<dl>*/
/* 				<dt>{L_GIVEN}{L_COLON} {POSTER_GIVE_COUNT}</dt>*/
/* 				<dd>*/
/* 					<a href="#" onclick="toggleElement( getElement('show_thanks')); return false;">{L_THANKS_LIST}</a>*/
/* 					<div id="show_thanks" style="display: none;">{THANKS}</div>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF POSTER_RECEIVE_COUNT -->*/
/* 		<div class="<!-- IF not POSTER_GIVE_COUNT -->column1<!-- ELSE -->column2<!-- ENDIF -->">*/
/* 			<!-- IF S_MOD_THANKS -->*/
/* 			<ul class="post-buttons" style="float:left">*/
/* 				<li>*/
/* 					<a href="{U_CLEAR_LIST_THANKS_RECEIVE}" title="{L_CLEAR_LIST_THANKS}" class="button icon-button delete-icon" style="float:left"><span>{L_CLEAR_LIST_THANKS}</span></a>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<!-- ENDIF -->*/
/* 			<dl>*/
/* 				<dt>{L_RECEIVED}{L_COLON} {POSTER_RECEIVE_COUNT}</dt>*/
/* 				<dd>*/
/* 					<a href="#" onclick="toggleElement( getElement('show_thanked')); return false;">{L_THANKS_LIST}</a>*/
/* 					<div id="show_thanked" style="display: none;">{THANKED}</div>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
