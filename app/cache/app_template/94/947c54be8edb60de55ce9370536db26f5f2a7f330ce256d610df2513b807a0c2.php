<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_b3423262a08a69c3756f9aabad92c5d7d2566fd5a28894ebe5bda365d7631942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_375e4846dbeea657749fe6851028088cb595c6bebba4d77001bbd1c10e9d6f50 = $this->env->getExtension("native_profiler");
        $__internal_375e4846dbeea657749fe6851028088cb595c6bebba4d77001bbd1c10e9d6f50->enter($__internal_375e4846dbeea657749fe6851028088cb595c6bebba4d77001bbd1c10e9d6f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375e4846dbeea657749fe6851028088cb595c6bebba4d77001bbd1c10e9d6f50->leave($__internal_375e4846dbeea657749fe6851028088cb595c6bebba4d77001bbd1c10e9d6f50_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61db57694d7066f954a57ca6a5cd9d2fb86e222942a684f3c2890807aeeef01e = $this->env->getExtension("native_profiler");
        $__internal_61db57694d7066f954a57ca6a5cd9d2fb86e222942a684f3c2890807aeeef01e->enter($__internal_61db57694d7066f954a57ca6a5cd9d2fb86e222942a684f3c2890807aeeef01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""))));
            // line 9
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()));
            // line 10
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecated Calls</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Silenced Errors</b>
                <span class=\"sf-toolbar-status\">";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo "
        ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_61db57694d7066f954a57ca6a5cd9d2fb86e222942a684f3c2890807aeeef01e->leave($__internal_61db57694d7066f954a57ca6a5cd9d2fb86e222942a684f3c2890807aeeef01e_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f434bb1c414383ad1410b047d92eefa438c5342d7436eea0ff920c089d03941 = $this->env->getExtension("native_profiler");
        $__internal_6f434bb1c414383ad1410b047d92eefa438c5342d7436eea0ff920c089d03941->enter($__internal_6f434bb1c414383ad1410b047d92eefa438c5342d7436eea0ff920c089d03941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 36
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 37
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()))) {
            // line 40
            echo "            <span class=\"count\">
                <span>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 44
        echo "    </span>
";
        
        $__internal_6f434bb1c414383ad1410b047d92eefa438c5342d7436eea0ff920c089d03941->leave($__internal_6f434bb1c414383ad1410b047d92eefa438c5342d7436eea0ff920c089d03941_prof);

    }

    // line 47
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab1c1d24c9f8d6967b1fcd33be5e5c55698d300f4ce94dd5d53cae5be700d343 = $this->env->getExtension("native_profiler");
        $__internal_ab1c1d24c9f8d6967b1fcd33be5e5c55698d300f4ce94dd5d53cae5be700d343->enter($__internal_ab1c1d24c9f8d6967b1fcd33be5e5c55698d300f4ce94dd5d53cae5be700d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 48
        echo "    <h2>Log Messages</h2>

    ";
        // line 50
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array()))) {
            // line 51
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 55
            echo "        ";
            // line 56
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"]) =             array(array(), array(), array());
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 58
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()), array(0 => twig_constant("E_DEPRECATED"), 1 => twig_constant("E_USER_DEPRECATED"))))) {
                    // line 59
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : $this->getContext($context, "deprecation_logs")), array(0 => $context["log"]));
                    // line 60
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 61
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge((isset($context["debug_logs"]) ? $context["debug_logs"] : $this->getContext($context, "debug_logs")), array(0 => $context["log"]));
                    // line 62
                    echo "            ";
                } else {
                    // line 63
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : $this->getContext($context, "info_and_error_logs")), array(0 => $context["log"]));
                    // line 64
                    echo "            ";
                }
                // line 65
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : $this->getContext($context, "info_and_error_logs"))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 72
            if (twig_test_empty((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : $this->getContext($context, "info_and_error_logs")))) {
                // line 73
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 77
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : $this->getContext($context, "info_and_error_logs")), true);
                echo "
                    ";
            }
            // line 79
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 85
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 88
            if (twig_test_empty((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : $this->getContext($context, "deprecation_logs")))) {
                // line 89
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 93
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : $this->getContext($context, "deprecation_logs")), false, true);
                echo "
                    ";
            }
            // line 95
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 99
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["debug_logs"]) ? $context["debug_logs"] : $this->getContext($context, "debug_logs"))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 102
            if (twig_test_empty((isset($context["debug_logs"]) ? $context["debug_logs"] : $this->getContext($context, "debug_logs")))) {
                // line 103
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 107
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["debug_logs"]) ? $context["debug_logs"] : $this->getContext($context, "debug_logs")));
                echo "
                    ";
            }
            // line 109
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_ab1c1d24c9f8d6967b1fcd33be5e5c55698d300f4ce94dd5d53cae5be700d343->leave($__internal_ab1c1d24c9f8d6967b1fcd33be5e5c55698d300f4ce94dd5d53cae5be700d343_prof);

    }

    // line 115
    public function getrender_table($__logs__ = null, $__show_level__ = false, $__is_deprecation__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0337886e53a946cff0809a3b7156fce572562145288598aabb3b514171710dbc = $this->env->getExtension("native_profiler");
            $__internal_0337886e53a946cff0809a3b7156fce572562145288598aabb3b514171710dbc->enter($__internal_0337886e53a946cff0809a3b7156fce572562145288598aabb3b514171710dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 116
            echo "    ";
            $context["helper"] = $this;
            // line 117
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, (isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
            // line 118
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 122
            echo (((isset($context["show_level"]) ? $context["show_level"] : $this->getContext($context, "show_level"))) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 123
            if ((isset($context["channel_is_defined"]) ? $context["channel_is_defined"] : $this->getContext($context, "channel_is_defined"))) {
                echo "<th>Channel</th>";
            }
            // line 124
            echo "                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 130
                echo "                ";
                $context["css_class"] = (((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) ? ("") : (((twig_in_filter($this->getAttribute(                // line 131
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((twig_in_filter($this->getAttribute(                // line 132
$context["log"], "priorityName", array()), array(0 => "NOTICE", 1 => "WARNING"))) ? ("status-warning") : (""))))));
                // line 134
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\">
                        ";
                // line 136
                if ((isset($context["show_level"]) ? $context["show_level"] : $this->getContext($context, "show_level"))) {
                    // line 137
                    echo "                            <span class=\"colored text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 139
                echo "                        <span class=\"text-muted nowrap newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 142
                if ((isset($context["channel_is_defined"]) ? $context["channel_is_defined"] : $this->getContext($context, "channel_is_defined"))) {
                    // line 143
                    echo "                        <td class=\"font-normal text-small text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 145
                echo "
                    <td class=\"font-normal\">";
                // line 146
                echo $context["helper"]->getrender_log_message($this->getAttribute($context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation")));
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "        </tbody>
    </table>
";
            
            $__internal_0337886e53a946cff0809a3b7156fce572562145288598aabb3b514171710dbc->leave($__internal_0337886e53a946cff0809a3b7156fce572562145288598aabb3b514171710dbc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function getrender_log_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3ec0f9016f461e5ebb2d7eb52c32ebb2a45ebfb798325aa9820d19a5ac3209b6 = $this->env->getExtension("native_profiler");
            $__internal_3ec0f9016f461e5ebb2d7eb52c32ebb2a45ebfb798325aa9820d19a5ac3209b6->enter($__internal_3ec0f9016f461e5ebb2d7eb52c32ebb2a45ebfb798325aa9820d19a5ac3209b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 154
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
            echo "

    ";
            // line 156
            if ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) {
                // line 157
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 158
                echo "        ";
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 159
                echo "
        ";
                // line 160
                if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "errorCount", array(), "any", true, true)) {
                    // line 161
                    echo "            <span class=\"text-small text-bold\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array()), "errorCount", array()), "html", null, true);
                    echo " times)</span>
        ";
                }
                // line 163
                echo "
        ";
                // line 164
                if ((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) {
                    // line 165
                    echo "            <button class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide stack trace\">Show strack trace</button>
        ";
                }
                // line 167
                echo "
        ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 169
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 170
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" class=\"hidden\">
            ";
                        }
                        // line 172
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 173
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 174
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 175
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 176
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 177
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 178
                            echo "            ";
                        } else {
                            // line 179
                            echo "                ";
                            $context["from"] = "-";
                            // line 180
                            echo "            ";
                        }
                        // line 181
                        echo "
            <li><span class=\"text-small\">Called from</span> ";
                        // line 182
                        echo ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 184
                        if (($context["index"] == (twig_length_filter($this->env, (isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) - 1))) {
                            // line 185
                            echo "                </ul>
            ";
                        }
                        // line 187
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "    ";
            } else {
                // line 189
                echo "        ";
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array())))) {
                    // line 190
                    echo "            <span class=\"metadata\">
                <strong>Context</strong>: ";
                    // line 191
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array()), (64 | 256)), array("{\"" => "{ \"", "\"}" => "\" }", "\":{" => "\": {", "\":\"" => "\": \"", "\",\"" => "\", \"")), "html", null, true);
                    // line 193
                    echo "
            </span>
        ";
                }
                // line 196
                echo "    ";
            }
            
            $__internal_3ec0f9016f461e5ebb2d7eb52c32ebb2a45ebfb798325aa9820d19a5ac3209b6->leave($__internal_3ec0f9016f461e5ebb2d7eb52c32ebb2a45ebfb798325aa9820d19a5ac3209b6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 196,  556 => 193,  554 => 191,  551 => 190,  548 => 189,  545 => 188,  538 => 187,  534 => 185,  532 => 184,  527 => 182,  524 => 181,  521 => 180,  518 => 179,  515 => 178,  512 => 177,  509 => 176,  506 => 175,  503 => 174,  500 => 173,  497 => 172,  491 => 170,  488 => 169,  483 => 168,  480 => 167,  474 => 165,  472 => 164,  469 => 163,  463 => 161,  461 => 160,  458 => 159,  455 => 158,  452 => 157,  450 => 156,  444 => 154,  427 => 153,  411 => 149,  394 => 146,  391 => 145,  385 => 143,  383 => 142,  376 => 139,  370 => 137,  368 => 136,  362 => 134,  360 => 132,  359 => 131,  357 => 130,  340 => 129,  333 => 124,  329 => 123,  325 => 122,  319 => 118,  316 => 117,  313 => 116,  296 => 115,  285 => 109,  279 => 107,  273 => 103,  271 => 102,  265 => 99,  259 => 95,  253 => 93,  247 => 89,  245 => 88,  238 => 85,  232 => 79,  226 => 77,  220 => 73,  218 => 72,  212 => 69,  207 => 66,  201 => 65,  198 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  183 => 59,  180 => 58,  175 => 57,  172 => 56,  170 => 55,  164 => 51,  162 => 50,  158 => 48,  152 => 47,  144 => 44,  138 => 41,  135 => 40,  133 => 39,  128 => 37,  121 => 36,  115 => 35,  105 => 31,  102 => 30,  96 => 27,  86 => 22,  76 => 17,  72 => 15,  70 => 14,  67 => 13,  62 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set icon %}*/
/*             {% set status_color = collector.counterrors ? 'red' : collector.countdeprecations ? 'yellow' : '' %}*/
/*             {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*             {{ include('@WebProfiler/Icon/logger.svg') }}*/
/*             <span class="sf-toolbar-value">{{ error_count }}</span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Errors</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}">{{ collector.counterrors|default(0) }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Deprecated Calls</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}">{{ collector.countdeprecations|default(0) }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Silenced Errors</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.countscreams|default(0) }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/logger.svg') }}</span>*/
/*         <strong>Logs</strong>*/
/*         {% if collector.counterrors or collector.countdeprecations %}*/
/*             <span class="count">*/
/*                 <span>{{ collector.counterrors ?: collector.countdeprecations }}</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Log Messages</h2>*/
/* */
/*     {% if collector.logs is empty %}*/
/*         <div class="empty">*/
/*             <p>No log messages available.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {# sort collected logs in groups #}*/
/*         {% set deprecation_logs, debug_logs, info_and_error_logs = [], [], [] %}*/
/*         {% for log in collector.logs %}*/
/*             {% if log.context.level is defined and log.context.type is defined and log.context.type in [constant('E_DEPRECATED'), constant('E_USER_DEPRECATED')] %}*/
/*                 {% set deprecation_logs = deprecation_logs|merge([log]) %}*/
/*             {% elseif log.priorityName == 'DEBUG' %}*/
/*                 {% set debug_logs = debug_logs|merge([log]) %}*/
/*             {% else %}*/
/*                 {% set info_and_error_logs = info_and_error_logs|merge([log]) %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="sf-tabs">*/
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Info. &amp; Errors <span class="badge">{{ info_and_error_logs|length }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if info_and_error_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages of this level.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(info_and_error_logs, true) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 {# 'deprecation_logs|length' is not used because deprecations are*/
/*                 now grouped and the group count doesn't match the message count #}*/
/*                 <h3 class="tab-title">Deprecations <span class="badge">{{ collector.countdeprecations|default(0) }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if deprecation_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages about deprecated features.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(deprecation_logs, false, true) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Debug <span class="badge">{{ debug_logs|length }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if debug_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages of this level.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(debug_logs) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% macro render_table(logs, show_level = false, is_deprecation = false) %}*/
/*     {% import _self as helper %}*/
/*     {% set channel_is_defined = (logs|first).channel is defined %}*/
/* */
/*     <table class="logs">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ show_level ? 'Level' : 'Time' }}</th>*/
/*                 {% if channel_is_defined %}<th>Channel</th>{% endif %}*/
/*                 <th>Message</th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             {% for log in logs %}*/
/*                 {% set css_class = is_deprecation ? ''*/
/*                     : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'*/
/*                     : log.priorityName in ['NOTICE', 'WARNING'] ? 'status-warning'*/
/*                 %}*/
/*                 <tr class="{{ css_class }}">*/
/*                     <td class="font-normal text-small">*/
/*                         {% if show_level %}*/
/*                             <span class="colored text-bold nowrap">{{ log.priorityName }}</span>*/
/*                         {% endif %}*/
/*                         <span class="text-muted nowrap newline">{{ log.timestamp|date('H:i:s') }}</span>*/
/*                     </td>*/
/* */
/*                     {% if channel_is_defined %}*/
/*                         <td class="font-normal text-small text-bold nowrap">{{ log.channel }}</td>*/
/*                     {% endif %}*/
/* */
/*                     <td class="font-normal">{{ helper.render_log_message(loop.index, log, is_deprecation) }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endmacro %}*/
/* */
/* {% macro render_log_message(log_index, log, is_deprecation = false) %}*/
/*     {{ log.message }}*/
/* */
/*     {% if is_deprecation %}*/
/*         {% set stack = log.context.stack|default([]) %}*/
/*         {% set id = 'sf-call-stack-' ~ log_index %}*/
/* */
/*         {% if log.context.errorCount is defined %}*/
/*             <span class="text-small text-bold">({{ log.context.errorCount }} times)</span>*/
/*         {% endif %}*/
/* */
/*         {% if stack %}*/
/*             <button class="btn-link text-small sf-toggle" data-toggle-selector="#{{ id }}" data-toggle-alt-content="Hide stack trace">Show strack trace</button>*/
/*         {% endif %}*/
/* */
/*         {% for index, call in stack if index > 1 %}*/
/*             {% if index == 2 %}*/
/*                 <ul class="sf-call-stack" id="{{ id }}" class="hidden">*/
/*             {% endif %}*/
/*             {% if call.class is defined %}*/
/*                 {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}*/
/*             {% elseif call.function is defined %}*/
/*                 {% set from = call.function|abbr_method %}*/
/*             {% elseif call.file is defined %}*/
/*                 {% set from = call.file %}*/
/*             {% else %}*/
/*                 {% set from = '-' %}*/
/*             {% endif %}*/
/* */
/*             <li><span class="text-small">Called from</span> {{ call.file is defined and call.line is defined ? call.file|format_file(call.line, from) : from|raw }}</li>*/
/* */
/*             {% if index == stack|length - 1 %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% if log.context is defined and log.context is not empty %}*/
/*             <span class="metadata">*/
/*                 <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256)|replace({*/
/*                     '{"' : '{ "', '"}' : '" }', '":{' : '": {', '":"' : '": "', '","' : '", "'*/
/*                 }) }}*/
/*             </span>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */