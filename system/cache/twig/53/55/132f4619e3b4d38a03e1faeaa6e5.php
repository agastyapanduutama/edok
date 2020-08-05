<?php

/* tpl/pdfviewer.html */
class __TwigTemplate_5355132f4619e3b4d38a03e1faeaa6e5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--
Copyright 2012 Mozilla Foundation

Licensed under the Apache License, Version 2.0 (the \"License\");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an \"AS IS\" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>Dokumen Viewer :: EBTKE</title>

<!--#if FIREFOX || MOZCENTRAL-->
<!--#include viewer-snippet-firefox-extension.html-->
<!--#endif-->

    <link rel=\"stylesheet\" href=\"";
        // line 27
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/web/viewer.css\"/>
<!--#if !PRODUCTION-->
    <link rel=\"resource\" type=\"application/l10n\" href=\"locale.properties\"/>
<!--#endif-->

<!--#if !(FIREFOX || MOZCENTRAL || CHROME)-->
    <script type=\"text/javascript\" src=\"";
        // line 33
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/web/compatibility.js\"></script>
<!--#endif-->

<!--#if !PRODUCTION-->
    <script type=\"text/javascript\" src=\"";
        // line 37
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/external/webL10n/l10n.js\"></script>
<!--#endif-->

<!--#if !PRODUCTION-->
    <script type=\"text/javascript\" src=\"";
        // line 41
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/core.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/util.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/api.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 44
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/metadata.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/canvas.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/obj.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/function.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/charsets.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/cidmaps.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/colorspace.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/crypto.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/evaluator.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/fonts.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/glyphlist.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/image.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/metrics.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/parser.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/pattern.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/stream.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/worker.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 61
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/external/jpgjs/jpg.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 62
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/jpx.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 63
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/jbig2.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 64
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/bidi.js\"></script>
    <script type=\"text/javascript\">PDFJS.workerSrc = '";
        // line 65
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/src/worker_loader.js';</script>
<!--#endif-->

<!--#if GENERIC || CHROME-->
<!--#include viewer-snippet.html-->
<!--#endif-->

<!--#if B2G-->
<!--#include viewer-snippet-b2g.html-->
<!--#endif-->

   
  </head>

  <body>
  \t<input type=\"hidden\" id=\"pdfpreview\" name=\"pdfpreview\" value=\"";
        // line 80
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/doc/";
        if (isset($context["file_name"])) { $_file_name_ = $context["file_name"]; } else { $_file_name_ = null; }
        echo twig_escape_filter($this->env, $_file_name_, "html", null, true);
        echo "\" /> 
    <input type=\"hidden\" id=\"pdfimages\" name=\"pdfimages\" value=\"";
        // line 81
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/web/images\" /> 
  \t<script type=\"text/javascript\" src=\"";
        // line 82
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/web/debugger.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/pdfjs/web/viewer.js\"></script>
    
    <div id=\"outerContainer\">

      <div id=\"sidebarContainer\">
        <div id=\"toolbarSidebar\">
          <div class=\"splitToolbarButton toggled\">
            <button id=\"viewThumbnail\" class=\"toolbarButton group toggled\" title=\"Show Thumbnails\" tabindex=\"1\" data-l10n-id=\"thumbs\">
               <span data-l10n-id=\"thumbs_label\">Thumbnails</span>            </button>
            <button id=\"viewOutline\" class=\"toolbarButton group\" title=\"Show Document Outline\" tabindex=\"2\" data-l10n-id=\"outline\">
               <span data-l10n-id=\"outline_label\">Document Outline</span>            </button>
          </div>
        </div>
        <div id=\"sidebarContent\">
          <div id=\"thumbnailView\">          </div>
          <div id=\"outlineView\" class=\"hidden\">          </div>
        </div>
      </div>  
      <!-- sidebarContainer -->

      <div id=\"mainContainer\">
        <div class=\"findbar hidden doorHanger\" id=\"findbar\">
          <label for=\"findInput\" class=\"toolbarLabel\" data-l10n-id=\"find_label\">Find:</label>
          <input id=\"findInput\" class=\"toolbarField\" tabindex=\"20\">
          <div class=\"splitToolbarButton\">
            <button class=\"toolbarButton findPrevious\" title=\"\" id=\"findPrevious\" tabindex=\"21\" data-l10n-id=\"find_previous\">
              <span data-l10n-id=\"find_previous_label\">Previous</span>            </button>
            <div class=\"splitToolbarButtonSeparator\"></div>
            <button class=\"toolbarButton findNext\" title=\"\" id=\"findNext\" tabindex=\"22\" data-l10n-id=\"find_next\">
              <span data-l10n-id=\"find_next_label\">Next</span>            </button>
          </div>
          <input type=\"checkbox\" id=\"findHighlightAll\" class=\"toolbarField\">
          <label for=\"findHighlightAll\" class=\"toolbarLabel\" tabindex=\"23\" data-l10n-id=\"find_highlight\">Highlight all</label>
          <input type=\"checkbox\" id=\"findMatchCase\" class=\"toolbarField\">
          <label for=\"findMatchCase\" class=\"toolbarLabel\" tabindex=\"24\" data-l10n-id=\"find_match_case_label\">Match case</label>
          <span id=\"findMsg\" class=\"toolbarLabel\"></span>        </div>
        <div class=\"toolbar\">
          <div id=\"toolbarContainer\">
            <div id=\"toolbarViewer\">
              <div id=\"toolbarViewerLeft\">
                <button id=\"sidebarToggle\" class=\"toolbarButton\" title=\"Toggle Sidebar\" tabindex=\"3\" data-l10n-id=\"toggle_slider\">
                  <span data-l10n-id=\"toggle_slider_label\">Toggle Sidebar</span>                </button>
                <div class=\"toolbarButtonSpacer\"></div>
                <button id=\"viewFind\" class=\"toolbarButton group\" title=\"Find in Document\" tabindex=\"4\" data-l10n-id=\"findbar\">
                   <span data-l10n-id=\"findbar_label\">Find</span>                </button>
                <div class=\"splitToolbarButton\">
                  <button class=\"toolbarButton pageUp\" title=\"Previous Page\" id=\"previous\" tabindex=\"5\" data-l10n-id=\"previous\">
                    <span data-l10n-id=\"previous_label\">Previous</span>                  </button>
                  <div class=\"splitToolbarButtonSeparator\"></div>
                  <button class=\"toolbarButton pageDown\" title=\"Next Page\" id=\"next\" tabindex=\"6\" data-l10n-id=\"next\">
                    <span data-l10n-id=\"next_label\">Next</span>                  </button>
                </div>
                <label id=\"pageNumberLabel\" class=\"toolbarLabel\" for=\"pageNumber\" data-l10n-id=\"page_label\">Page: </label>
                <input type=\"number\" id=\"pageNumber\" class=\"toolbarField pageNumber\" value=\"1\" size=\"4\" min=\"1\" tabindex=\"7\">
                </input>
                <span id=\"numPages\" class=\"toolbarLabel\"></span>              </div>
              <div id=\"toolbarViewerRight\">
                <input id=\"fileInput\" class=\"fileInput\" type=\"file\" oncontextmenu=\"return false;\" style=\"visibility: hidden; position: fixed; right: 0; top: 0\" />


                <button id=\"fullscreen\" class=\"toolbarButton fullscreen\" title=\"Switch to Presentation Mode\" tabindex=\"11\" data-l10n-id=\"presentation_mode\">
                  <span data-l10n-id=\"presentation_mode_label\">Presentation Mode</span>                </button>

                <button id=\"openFile\" class=\"toolbarButton openFile\" title=\"Open File\" tabindex=\"12\" data-l10n-id=\"open_file\" style=\"display:none\">
                   <span data-l10n-id=\"open_file_label\">Open</span>                </button>

                <button id=\"print\" class=\"toolbarButton print\" title=\"Print\" tabindex=\"13\" data-l10n-id=\"print\" style=\"display:none\">
                  <span data-l10n-id=\"print_label\">Print</span>                </button>

                <button id=\"download\" class=\"toolbarButton download\" title=\"Download\" tabindex=\"14\" data-l10n-id=\"download\" style=\"display:none\">
                  <span data-l10n-id=\"download_label\">Download</span>                </button>
                <!-- <div class=\"toolbarButtonSpacer\"></div> -->
                <a href=\"#\" id=\"viewBookmark\" class=\"toolbarButton bookmark\" title=\"Current view (copy or open in new window)\" tabindex=\"15\" data-l10n-id=\"bookmark\" style=\"display:none\"><span data-l10n-id=\"bookmark_label\">Current View</span></a>              </div>
              <div class=\"outerCenter\">
                <div class=\"innerCenter\" id=\"toolbarViewerMiddle\">
                  <div class=\"splitToolbarButton\">
                    <button class=\"toolbarButton zoomOut\" title=\"Zoom Out\" tabindex=\"8\" data-l10n-id=\"zoom_out\">
                      <span data-l10n-id=\"zoom_out_label\">Zoom Out</span>                    </button>
                    <div class=\"splitToolbarButtonSeparator\"></div>
                    <button class=\"toolbarButton zoomIn\" title=\"Zoom In\" tabindex=\"9\" data-l10n-id=\"zoom_in\">
                      <span data-l10n-id=\"zoom_in_label\">Zoom In</span>                     </button>
                  </div>
                  <span id=\"scaleSelectContainer\" class=\"dropdownToolbarButton\">
                     <select id=\"scaleSelect\" title=\"Zoom\" oncontextmenu=\"return false;\" tabindex=\"10\" data-l10n-id=\"zoom\">
                      <option id=\"pageAutoOption\" value=\"auto\" selected=\"selected\" data-l10n-id=\"page_scale_auto\">Automatic Zoom</option>
                      <option id=\"pageActualOption\" value=\"page-actual\" data-l10n-id=\"page_scale_actual\">Actual Size</option>
                      <option id=\"pageFitOption\" value=\"page-fit\" data-l10n-id=\"page_scale_fit\">Fit Page</option>
                      <option id=\"pageWidthOption\" value=\"page-width\" data-l10n-id=\"page_scale_width\">Full Width</option>
                      <option id=\"customScaleOption\" value=\"custom\"></option>
                      <option value=\"0.5\">50%</option>
                      <option value=\"0.75\">75%</option>
                      <option value=\"1\">100%</option>
                      <option value=\"1.25\">125%</option>
                      <option value=\"1.5\">150%</option>
                      <option value=\"2\">200%</option>
                    </select>
                  </span>                </div>
              </div>
            </div>
          </div>
        </div>

        <menu type=\"context\" id=\"viewerContextMenu\">
          <menuitem label=\"First Page\" id=\"first_page\"
                    data-l10n-id=\"first_page\" ></menuitem>
          <menuitem label=\"Last Page\" id=\"last_page\"
                    data-l10n-id=\"last_page\" ></menuitem>
          <menuitem label=\"Rotate Counter-Clockwise\" id=\"page_rotate_ccw\"
                    data-l10n-id=\"page_rotate_ccw\" ></menuitem>
          <menuitem label=\"Rotate Clockwise\" id=\"page_rotate_cw\"
                    data-l10n-id=\"page_rotate_cw\" ></menuitem>        </menu>

        <div id=\"viewerContainer\">
          <div id=\"viewer\" contextmenu=\"viewerContextMenu\"></div>
        </div>

        <div id=\"loadingBox\">
          <div id=\"loading\"></div>
          <div id=\"loadingBar\"><div class=\"progress\"></div></div>
        </div>

        <div id=\"errorWrapper\" hidden='true'>
          <div id=\"errorMessageLeft\">
            <span id=\"errorMessage\"></span>
            <button id=\"errorShowMore\" onClick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_more_info\">
              More Information            </button>
            <button id=\"errorShowLess\" onClick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_less_info\" hidden='true'>
              Less Information            </button>
          </div>
          <div id=\"errorMessageRight\">
            <button id=\"errorClose\" oncontextmenu=\"return false;\" data-l10n-id=\"error_close\">
              Close            </button>
          </div>
          <div class=\"clearBoth\"></div>
          <textarea id=\"errorMoreInfo\" hidden='true' readonly=\"readonly\"></textarea>
        </div>
      </div> 
      <!-- mainContainer -->

    </div> <!-- outerContainer -->
    <div id=\"printContainer\"></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tpl/pdfviewer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 83,  223 => 82,  218 => 81,  210 => 80,  191 => 65,  186 => 64,  181 => 63,  176 => 62,  171 => 61,  166 => 60,  161 => 59,  156 => 58,  151 => 57,  146 => 56,  141 => 55,  136 => 54,  131 => 53,  126 => 52,  121 => 51,  116 => 50,  111 => 49,  106 => 48,  101 => 47,  96 => 46,  91 => 45,  86 => 44,  81 => 43,  76 => 42,  71 => 41,  63 => 37,  55 => 33,  45 => 27,  17 => 1,);
    }
}
