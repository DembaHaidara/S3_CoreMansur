<?php

$De = "core Mansur";
$facturea = "joh";
$numeroFacture = 777;
$nomproduit = "produisG";
$date = "29/06/2020";
$prix = "200";
$total = $prix;
$condition = "dgqhgsdfh";


?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/pdf2htmlEX/pdf2htmlEX) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <style type="text/css">
        /*! 
 * Base CSS for pdf2htmlEX
 * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> 
 * https://github.com/pdf2htmlEX/pdf2htmlEX/blob/master/share/LICENSE
 */
        #sidebar {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            padding: 0;
            margin: 0;
            overflow: auto
        }

        #page-container {
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            border: 0
        }

        @media screen {
            #sidebar.opened+#page-container {
                left: 250px
            }

            #page-container {
                bottom: 0;
                right: 0;
                overflow: auto
            }

            .loading-indicator {
                display: none
            }

            .loading-indicator.active {
                display: block;
                position: absolute;
                width: 64px;
                height: 64px;
                top: 50%;
                left: 50%;
                margin-top: -32px;
                margin-left: -32px
            }

            .loading-indicator img {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }
        }

        @media print {
            @page {
                margin: 0
            }

            html {
                margin: 0
            }

            body {
                margin: 0;
                -webkit-print-color-adjust: exact
            }

            #sidebar {
                display: none
            }

            #page-container {
                width: auto;
                height: auto;
                overflow: visible;
                background-color: transparent
            }

            .d {
                display: none
            }
        }

        .pf {
            position: relative;
            background-color: white;
            overflow: hidden;
            margin: 0;
            border: 0
        }

        .pc {
            position: absolute;
            border: 0;
            padding: 0;
            margin: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: block;
            transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0
        }

        .pc.opened {
            display: block
        }

        .bf {
            position: absolute;
            border: 0;
            margin: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none
        }

        .bi {
            position: absolute;
            border: 0;
            margin: 0;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none
        }

        @media print {
            .pf {
                margin: 0;
                box-shadow: none;
                page-break-after: always;
                page-break-inside: avoid
            }

            @-moz-document url-prefix() {
                .pf {
                    overflow: visible;
                    border: 1px solid #fff
                }

                .pc {
                    overflow: visible
                }
            }
        }

        .c {
            position: absolute;
            border: 0;
            padding: 0;
            margin: 0;
            overflow: hidden;
            display: block
        }

        .t {
            position: absolute;
            white-space: pre;
            font-size: 1px;
            transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            -webkit-transform-origin: 0 100%;
            unicode-bidi: bidi-override;
            -moz-font-feature-settings: "liga"0
        }

        .t:after {
            content: ''
        }

        .t:before {
            content: '';
            display: inline-block
        }

        .t span {
            position: relative;
            unicode-bidi: bidi-override
        }

        ._ {
            display: inline-block;
            color: transparent;
            z-index: -1
        }

        ::selection {
            background: rgba(127, 255, 255, 0.4)
        }

        ::-moz-selection {
            background: rgba(127, 255, 255, 0.4)
        }

        .pi {
            display: none
        }

        .d {
            position: absolute;
            transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            -webkit-transform-origin: 0 100%
        }

        .it {
            border: 0;
            background-color: rgba(255, 255, 255, 0.0)
        }

        .ir:hover {
            cursor: pointer
        }
    </style>
    <style type="text/css">
        /*! 
 * Fancy styles for pdf2htmlEX
 * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> 
 * https://github.com/pdf2htmlEX/pdf2htmlEX/blob/master/share/LICENSE
 */
        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes swing {
            0 {
                transform: rotate(0)
            }

            10% {
                transform: rotate(0)
            }

            90% {
                transform: rotate(720deg)
            }

            100% {
                transform: rotate(720deg)
            }
        }

        @-webkit-keyframes swing {
            0 {
                -webkit-transform: rotate(0)
            }

            10% {
                -webkit-transform: rotate(0)
            }

            90% {
                -webkit-transform: rotate(720deg)
            }

            100% {
                -webkit-transform: rotate(720deg)
            }
        }

        @media screen {
            #sidebar {
                background-color: #2f3236;
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjNDAzYzNmIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDBMNCA0Wk00IDBMMCA0WiIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2U9IiMxZTI5MmQiPjwvcGF0aD4KPC9zdmc+")
            }

            #outline {
                font-family: Georgia, Times, "Times New Roman", serif;
                font-size: 13px;
                margin: 2em 1em
            }

            #outline ul {
                padding: 0
            }

            #outline li {
                list-style-type: none;
                margin: 1em 0
            }

            #outline li>ul {
                margin-left: 1em
            }

            #outline a,
            #outline a:visited,
            #outline a:hover,
            #outline a:active {
                line-height: 1.2;
                color: #e8e8e8;
                text-overflow: ellipsis;
                white-space: nowrap;
                text-decoration: none;
                display: block;
                overflow: hidden;
                outline: 0
            }

            #outline a:hover {
                color: #0cf
            }

            #page-container {
                background-color: #9e9e9e;
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=");
                -webkit-transition: left 500ms;
                transition: left 500ms
            }

            .pf {
                margin: 13px auto;
                box-shadow: 1px 1px 3px 1px #333;
                border-collapse: separate
            }

            .pc.opened {
                -webkit-animation: fadein 100ms;
                animation: fadein 100ms
            }

            .loading-indicator.active {
                -webkit-animation: swing 1.5s ease-in-out .01s infinite alternate none;
                animation: swing 1.5s ease-in-out .01s infinite alternate none
            }

            .checked {
                background: no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3goQDSYgDiGofgAAAslJREFUOMvtlM9LFGEYx7/vvOPM6ywuuyPFihWFBUsdNnA6KLIh+QPx4KWExULdHQ/9A9EfUodYmATDYg/iRewQzklFWxcEBcGgEplDkDtI6sw4PzrIbrOuedBb9MALD7zv+3m+z4/3Bf7bZS2bzQIAcrmcMDExcTeXy10DAFVVAQDksgFUVZ1ljD3yfd+0LOuFpmnvVVW9GHhkZAQcxwkNDQ2FSCQyRMgJxnVdy7KstKZpn7nwha6urqqfTqfPBAJAuVymlNLXoigOhfd5nmeiKL5TVTV+lmIKwAOA7u5u6Lped2BsbOwjY6yf4zgQQkAIAcedaPR9H67r3uYBQFEUFItFtLe332lpaVkUBOHK3t5eRtf1DwAwODiIubk5DA8PM8bYW1EU+wEgCIJqsCAIQAiB7/u253k2BQDDMJBKpa4mEon5eDx+UxAESJL0uK2t7XosFlvSdf0QAEmlUnlRFJ9Waho2Qghc1/U9z3uWz+eX+Wr+lL6SZfleEAQIggA8z6OpqSknimIvYyybSCReMsZ6TislhCAIAti2Dc/zejVNWwCAavN8339j27YbTg0AGGM3WltbP4WhlRWq6Q/btrs1TVsYHx+vNgqKoqBUKn2NRqPFxsbGJzzP05puUlpt0ukyOI6z7zjOwNTU1OLo6CgmJyf/gA3DgKIoWF1d/cIY24/FYgOU0pp0z/Ityzo8Pj5OTk9PbwHA+vp6zWghDC+VSiuRSOQgGo32UErJ38CO42wdHR09LBQK3zKZDDY2NupmFmF4R0cHVlZWlmRZ/iVJUn9FeWWcCCE4ODjYtG27Z2Zm5juAOmgdGAB2d3cBADs7O8uSJN2SZfl+WKlpmpumaT6Yn58vn/fs6XmbhmHMNjc3tzDGFI7jYJrm5vb29sDa2trPC/9aiqJUy5pOp4f6+vqeJ5PJBAB0dnZe/t8NBajx/z37Df5OGX8d13xzAAAAAElFTkSuQmCC)
            }
        }
    </style>
    <style type="text/css">
        .ff0 {
            font-family: sans-serif;
            visibility: hidden;
        }

        @font-face {
            font-family: ff1;
            src: url('data:application/font-woff;base64,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')format("woff");
        }

        .ff1 {
            font-family: ff1;
            line-height: 1.099609;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
        }

        @font-face {
            font-family: ff2;
            src: url('data:application/font-woff;base64,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')format("woff");
        }

        .ff2 {
            font-family: ff2;
            line-height: 0.959961;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
        }

        .m0 {
            transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
            -ms-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
            -webkit-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
        }

        .v1 {
            vertical-align: -12.800000px;
        }

        .v0 {
            vertical-align: 0.000000px;
        }

        .ls0 {
            letter-spacing: 0.000000px;
        }

        .sc_ {
            text-shadow: none;
        }

        .sc0 {
            text-shadow: -0.015em 0 transparent, 0 0.015em transparent, 0.015em 0 transparent, 0 -0.015em transparent;
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            .sc_ {
                -webkit-text-stroke: 0px transparent;
            }

            .sc0 {
                -webkit-text-stroke: 0.015em transparent;
                text-shadow: none;
            }
        }

        .ws1 {
            word-spacing: -11.120000px;
        }

        .ws5 {
            word-spacing: 0.000000px;
        }

        .ws2 {
            word-spacing: 120.280664px;
        }

        .ws3 {
            word-spacing: 713.403028px;
        }

        .ws0 {
            word-spacing: 1452.288070px;
        }

        .ws4 {
            word-spacing: 1524.843091px;
        }

        ._4 {
            margin-left: -1.010489px;
        }

        ._1 {
            width: 264.360000px;
        }

        ._3 {
            width: 300.736097px;
        }

        ._0 {
            width: 1221.760000px;
        }

        ._2 {
            width: 1339.840000px;
        }

        .fc1 {
            color: rgb(0, 0, 0);
        }

        .fc0 {
            color: rgb(255, 255, 255);
        }

        .fs1 {
            font-size: 40.000000px;
        }

        .fs2 {
            font-size: 56.000000px;
        }

        .fs0 {
            font-size: 64.000000px;
        }

        .y0 {
            bottom: -0.500000px;
        }

        .y1 {
            bottom: 0.300000px;
        }

        .y9 {
            bottom: 57.600000px;
        }

        .y8 {
            bottom: 74.700000px;
        }

        .y7 {
            bottom: 507.200000px;
        }

        .y6 {
            bottom: 536.500000px;
        }

        .y5 {
            bottom: 562.900000px;
        }

        .y4 {
            bottom: 623.900000px;
        }

        .y3 {
            bottom: 641.000000px;
        }

        .y2 {
            bottom: 765.200000px;
        }

        .h5 {
            height: 30.000000px;
        }

        .h4 {
            height: 36.113281px;
        }

        .h6 {
            height: 50.558594px;
        }

        .h3 {
            height: 57.781250px;
        }

        .h2 {
            height: 841.600000px;
        }

        .h0 {
            height: 842.000000px;
        }

        .h1 {
            height: 842.500000px;
        }

        .w0 {
            width: 595.000000px;
        }

        .w1 {
            width: 595.500000px;
        }

        .x0 {
            left: 0.000000px;
        }

        .x2 {
            left: 57.000000px;
        }

        .x4 {
            left: 62.800000px;
        }

        .x1 {
            left: 64.200000px;
        }

        .x3 {
            left: 196.900000px;
        }

        .x5 {
            left: 331.200000px;
        }

        @media print {
            .v1 {
                vertical-align: -17.066667pt;
            }

            .v0 {
                vertical-align: 0.000000pt;
            }

            .ls0 {
                letter-spacing: 0.000000pt;
            }

            .ws1 {
                word-spacing: -14.826667pt;
            }

            .ws5 {
                word-spacing: 0.000000pt;
            }

            .ws2 {
                word-spacing: 160.374219pt;
            }

            .ws3 {
                word-spacing: 951.204037pt;
            }

            .ws0 {
                word-spacing: 1936.384094pt;
            }

            .ws4 {
                word-spacing: 2033.124121pt;
            }

            ._4 {
                margin-left: -1.347319pt;
            }

            ._1 {
                width: 352.480000pt;
            }

            ._3 {
                width: 400.981462pt;
            }

            ._0 {
                width: 1629.013333pt;
            }

            ._2 {
                width: 1786.453333pt;
            }

            .fs1 {
                font-size: 53.333333pt;
            }

            .fs2 {
                font-size: 74.666667pt;
            }

            .fs0 {
                font-size: 85.333333pt;
            }

            .y0 {
                bottom: -0.666667pt;
            }

            .y1 {
                bottom: 0.400000pt;
            }

            .y9 {
                bottom: 76.800000pt;
            }

            .y8 {
                bottom: 99.600000pt;
            }

            .y7 {
                bottom: 676.266667pt;
            }

            .y6 {
                bottom: 715.333333pt;
            }

            .y5 {
                bottom: 750.533333pt;
            }

            .y4 {
                bottom: 831.866667pt;
            }

            .y3 {
                bottom: 854.666667pt;
            }

            .y2 {
                bottom: 1020.266667pt;
            }

            .h5 {
                height: 40.000000pt;
            }

            .h4 {
                height: 48.151042pt;
            }

            .h6 {
                height: 67.411458pt;
            }

            .h3 {
                height: 77.041667pt;
            }

            .h2 {
                height: 1122.133333pt;
            }

            .h0 {
                height: 1122.666667pt;
            }

            .h1 {
                height: 1123.333333pt;
            }

            .w0 {
                width: 793.333333pt;
            }

            .w1 {
                width: 794.000000pt;
            }

            .x0 {
                left: 0.000000pt;
            }

            .x2 {
                left: 76.000000pt;
            }

            .x4 {
                left: 83.733333pt;
            }

            .x1 {
                left: 85.600000pt;
            }

            .x3 {
                left: 262.533333pt;
            }

            .x5 {
                left: 441.600000pt;
            }
        }
    </style>
    <script>
        /*
 Copyright 2012 Mozilla Foundation 
 Copyright 2013 Lu Wang <coolwanglu@gmail.com>
 Apachine License Version 2.0 
*/
        (function() {
            function b(a, b, e, f) {
                var c = (a.className || "").split(/\s+/g);
                "" === c[0] && c.shift();
                var d = c.indexOf(b);
                0 > d && e && c.push(b);
                0 <= d && f && c.splice(d, 1);
                a.className = c.join(" ");
                return 0 <= d
            }
            if (!("classList" in document.createElement("div"))) {
                var e = {
                    add: function(a) {
                        b(this.element, a, !0, !1)
                    },
                    contains: function(a) {
                        return b(this.element, a, !1, !1)
                    },
                    remove: function(a) {
                        b(this.element, a, !1, !0)
                    },
                    toggle: function(a) {
                        b(this.element, a, !0, !0)
                    }
                };
                Object.defineProperty(HTMLElement.prototype, "classList", {
                    get: function() {
                        if (this._classList) return this._classList;
                        var a = Object.create(e, {
                            element: {
                                value: this,
                                writable: !1,
                                enumerable: !0
                            }
                        });
                        Object.defineProperty(this, "_classList", {
                            value: a,
                            writable: !1,
                            enumerable: !1
                        });
                        return a
                    },
                    enumerable: !0
                })
            }
        })();
    </script>
    <script>
        (function() {
            /*
             pdf2htmlEX.js: Core UI functions for pdf2htmlEX 
             Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> and other contributors 
             https://github.com/pdf2htmlEX/pdf2htmlEX/blob/master/share/LICENSE 
            */
            var pdf2htmlEX = window.pdf2htmlEX = window.pdf2htmlEX || {},
                CSS_CLASS_NAMES = {
                    page_frame: "pf",
                    page_content_box: "pc",
                    page_data: "pi",
                    background_image: "bi",
                    link: "l",
                    input_radio: "ir",
                    __dummy__: "no comma"
                },
                DEFAULT_CONFIG = {
                    container_id: "page-container",
                    sidebar_id: "sidebar",
                    outline_id: "outline",
                    loading_indicator_cls: "loading-indicator",
                    preload_pages: 3,
                    render_timeout: 100,
                    scale_step: 0.9,
                    key_handler: !0,
                    hashchange_handler: !0,
                    view_history_handler: !0,
                    __dummy__: "no comma"
                },
                EPS = 1E-6;

            function invert(a) {
                var b = a[0] * a[3] - a[1] * a[2];
                return [a[3] / b, -a[1] / b, -a[2] / b, a[0] / b, (a[2] * a[5] - a[3] * a[4]) / b, (a[1] * a[4] - a[0] * a[5]) / b]
            }

            function transform(a, b) {
                return [a[0] * b[0] + a[2] * b[1] + a[4], a[1] * b[0] + a[3] * b[1] + a[5]]
            }

            function get_page_number(a) {
                return parseInt(a.getAttribute("data-page-no"), 16)
            }

            function disable_dragstart(a) {
                for (var b = 0, c = a.length; b < c; ++b) a[b].addEventListener("dragstart", function() {
                    return !1
                }, !1)
            }

            function clone_and_extend_objs(a) {
                for (var b = {}, c = 0, e = arguments.length; c < e; ++c) {
                    var h = arguments[c],
                        d;
                    for (d in h) h.hasOwnProperty(d) && (b[d] = h[d])
                }
                return b
            }

            function Page(a) {
                if (a) {
                    this.shown = this.loaded = !1;
                    this.page = a;
                    this.num = get_page_number(a);
                    this.original_height = a.clientHeight;
                    this.original_width = a.clientWidth;
                    var b = a.getElementsByClassName(CSS_CLASS_NAMES.page_content_box)[0];
                    b && (this.content_box = b, this.original_scale = this.cur_scale = this.original_height / b.clientHeight, this.page_data = JSON.parse(a.getElementsByClassName(CSS_CLASS_NAMES.page_data)[0].getAttribute("data-data")), this.ctm = this.page_data.ctm, this.ictm = invert(this.ctm), this.loaded = !0)
                }
            }
            Page.prototype = {
                hide: function() {
                    this.loaded && this.shown && (this.content_box.classList.remove("opened"), this.shown = !1)
                },
                show: function() {
                    this.loaded && !this.shown && (this.content_box.classList.add("opened"), this.shown = !0)
                },
                rescale: function(a) {
                    this.cur_scale = 0 === a ? this.original_scale : a;
                    this.loaded && (a = this.content_box.style, a.msTransform = a.webkitTransform = a.transform = "scale(" + this.cur_scale.toFixed(3) + ")");
                    a = this.page.style;
                    a.height = this.original_height * this.cur_scale + "px";
                    a.width = this.original_width * this.cur_scale +
                        "px"
                },
                view_position: function() {
                    var a = this.page,
                        b = a.parentNode;
                    return [b.scrollLeft - a.offsetLeft - a.clientLeft, b.scrollTop - a.offsetTop - a.clientTop]
                },
                height: function() {
                    return this.page.clientHeight
                },
                width: function() {
                    return this.page.clientWidth
                }
            };

            function Viewer(a) {
                this.config = clone_and_extend_objs(DEFAULT_CONFIG, 0 < arguments.length ? a : {});
                this.pages_loading = [];
                this.init_before_loading_content();
                var b = this;
                document.addEventListener("DOMContentLoaded", function() {
                    b.init_after_loading_content()
                }, !1)
            }
            Viewer.prototype = {
                scale: 1,
                cur_page_idx: 0,
                first_page_idx: 0,
                init_before_loading_content: function() {
                    this.pre_hide_pages()
                },
                initialize_radio_button: function() {
                    for (var a = document.getElementsByClassName(CSS_CLASS_NAMES.input_radio), b = 0; b < a.length; b++) a[b].addEventListener("click", function() {
                        this.classList.toggle("checked")
                    })
                },
                init_after_loading_content: function() {
                    this.sidebar = document.getElementById(this.config.sidebar_id);
                    this.outline = document.getElementById(this.config.outline_id);
                    this.container = document.getElementById(this.config.container_id);
                    this.loading_indicator = document.getElementsByClassName(this.config.loading_indicator_cls)[0];
                    for (var a = !0, b = this.outline.childNodes, c = 0, e = b.length; c < e; ++c)
                        if ("ul" === b[c].nodeName.toLowerCase()) {
                            a = !1;
                            break
                        } a || this.sidebar.classList.add("opened");
                    this.find_pages();
                    if (0 != this.pages.length) {
                        disable_dragstart(document.getElementsByClassName(CSS_CLASS_NAMES.background_image));
                        this.config.key_handler && this.register_key_handler();
                        var h = this;
                        this.config.hashchange_handler && window.addEventListener("hashchange",
                            function(a) {
                                h.navigate_to_dest(document.location.hash.substring(1))
                            }, !1);
                        this.config.view_history_handler && window.addEventListener("popstate", function(a) {
                            a.state && h.navigate_to_dest(a.state)
                        }, !1);
                        this.container.addEventListener("scroll", function() {
                            h.update_page_idx();
                            h.schedule_render(!0)
                        }, !1);
                        [this.container, this.outline].forEach(function(a) {
                            a.addEventListener("click", h.link_handler.bind(h), !1)
                        });
                        this.initialize_radio_button();
                        this.render()
                    }
                },
                find_pages: function() {
                    for (var a = [], b = {}, c = this.container.childNodes,
                            e = 0, h = c.length; e < h; ++e) {
                        var d = c[e];
                        d.nodeType === Node.ELEMENT_NODE && d.classList.contains(CSS_CLASS_NAMES.page_frame) && (d = new Page(d), a.push(d), b[d.num] = a.length - 1)
                    }
                    this.pages = a;
                    this.page_map = b
                },
                load_page: function(a, b, c) {
                    var e = this.pages;
                    if (!(a >= e.length || (e = e[a], e.loaded || this.pages_loading[a]))) {
                        var e = e.page,
                            h = e.getAttribute("data-page-url");
                        if (h) {
                            this.pages_loading[a] = !0;
                            var d = e.getElementsByClassName(this.config.loading_indicator_cls)[0];
                            "undefined" === typeof d && (d = this.loading_indicator.cloneNode(!0),
                                d.classList.add("active"), e.appendChild(d));
                            var f = this,
                                g = new XMLHttpRequest;
                            g.open("GET", h, !0);
                            g.onload = function() {
                                if (200 === g.status || 0 === g.status) {
                                    var b = document.createElement("div");
                                    b.innerHTML = g.responseText;
                                    for (var d = null, b = b.childNodes, e = 0, h = b.length; e < h; ++e) {
                                        var p = b[e];
                                        if (p.nodeType === Node.ELEMENT_NODE && p.classList.contains(CSS_CLASS_NAMES.page_frame)) {
                                            d = p;
                                            break
                                        }
                                    }
                                    b = f.pages[a];
                                    f.container.replaceChild(d, b.page);
                                    b = new Page(d);
                                    f.pages[a] = b;
                                    b.hide();
                                    b.rescale(f.scale);
                                    disable_dragstart(d.getElementsByClassName(CSS_CLASS_NAMES.background_image));
                                    f.schedule_render(!1);
                                    c && c(b)
                                }
                                delete f.pages_loading[a]
                            };
                            g.send(null)
                        }
                        void 0 === b && (b = this.config.preload_pages);
                        0 < --b && (f = this, setTimeout(function() {
                            f.load_page(a + 1, b)
                        }, 0))
                    }
                },
                pre_hide_pages: function() {
                    var a = "@media screen{." + CSS_CLASS_NAMES.page_content_box + "{display:none;}}",
                        b = document.createElement("style");
                    b.styleSheet ? b.styleSheet.cssText = a : b.appendChild(document.createTextNode(a));
                    document.head.appendChild(b)
                },
                render: function() {
                    for (var a = this.container, b = a.scrollTop, c = a.clientHeight, a = b - c, b =
                            b + c + c, c = this.pages, e = 0, h = c.length; e < h; ++e) {
                        var d = c[e],
                            f = d.page,
                            g = f.offsetTop + f.clientTop,
                            f = g + f.clientHeight;
                        g <= b && f >= a ? d.loaded ? d.show() : this.load_page(e) : d.hide()
                    }
                },
                update_page_idx: function() {
                    var a = this.pages,
                        b = a.length;
                    if (!(2 > b)) {
                        for (var c = this.container, e = c.scrollTop, c = e + c.clientHeight, h = -1, d = b, f = d - h; 1 < f;) {
                            var g = h + Math.floor(f / 2),
                                f = a[g].page;
                            f.offsetTop + f.clientTop + f.clientHeight >= e ? d = g : h = g;
                            f = d - h
                        }
                        this.first_page_idx = d;
                        for (var g = h = this.cur_page_idx, k = 0; d < b; ++d) {
                            var f = a[d].page,
                                l = f.offsetTop + f.clientTop,
                                f = f.clientHeight;
                            if (l > c) break;
                            f = (Math.min(c, l + f) - Math.max(e, l)) / f;
                            if (d === h && Math.abs(f - 1) <= EPS) {
                                g = h;
                                break
                            }
                            f > k && (k = f, g = d)
                        }
                        this.cur_page_idx = g
                    }
                },
                schedule_render: function(a) {
                    if (void 0 !== this.render_timer) {
                        if (!a) return;
                        clearTimeout(this.render_timer)
                    }
                    var b = this;
                    this.render_timer = setTimeout(function() {
                        delete b.render_timer;
                        b.render()
                    }, this.config.render_timeout)
                },
                register_key_handler: function() {
                    var a = this;
                    window.addEventListener("DOMMouseScroll", function(b) {
                        if (b.ctrlKey) {
                            b.preventDefault();
                            var c = a.container,
                                e = c.getBoundingClientRect(),
                                c = [b.clientX - e.left - c.clientLeft, b.clientY - e.top - c.clientTop];
                            a.rescale(Math.pow(a.config.scale_step, b.detail), !0, c)
                        }
                    }, !1);
                    window.addEventListener("keydown", function(b) {
                        var c = !1,
                            e = b.ctrlKey || b.metaKey,
                            h = b.altKey;
                        switch (b.keyCode) {
                            case 61:
                            case 107:
                            case 187:
                                e && (a.rescale(1 / a.config.scale_step, !0), c = !0);
                                break;
                            case 173:
                            case 109:
                            case 189:
                                e && (a.rescale(a.config.scale_step, !0), c = !0);
                                break;
                            case 48:
                                e && (a.rescale(0, !1), c = !0);
                                break;
                            case 33:
                                h ? a.scroll_to(a.cur_page_idx - 1) : a.container.scrollTop -=
                                    a.container.clientHeight;
                                c = !0;
                                break;
                            case 34:
                                h ? a.scroll_to(a.cur_page_idx + 1) : a.container.scrollTop += a.container.clientHeight;
                                c = !0;
                                break;
                            case 35:
                                a.container.scrollTop = a.container.scrollHeight;
                                c = !0;
                                break;
                            case 36:
                                a.container.scrollTop = 0, c = !0
                        }
                        c && b.preventDefault()
                    }, !1)
                },
                rescale: function(a, b, c) {
                    var e = this.scale;
                    this.scale = a = 0 === a ? 1 : b ? e * a : a;
                    c || (c = [0, 0]);
                    b = this.container;
                    c[0] += b.scrollLeft;
                    c[1] += b.scrollTop;
                    for (var h = this.pages, d = h.length, f = this.first_page_idx; f < d; ++f) {
                        var g = h[f].page;
                        if (g.offsetTop + g.clientTop >=
                            c[1]) break
                    }
                    g = f - 1;
                    0 > g && (g = 0);
                    var g = h[g].page,
                        k = g.clientWidth,
                        f = g.clientHeight,
                        l = g.offsetLeft + g.clientLeft,
                        m = c[0] - l;
                    0 > m ? m = 0 : m > k && (m = k);
                    k = g.offsetTop + g.clientTop;
                    c = c[1] - k;
                    0 > c ? c = 0 : c > f && (c = f);
                    for (f = 0; f < d; ++f) h[f].rescale(a);
                    b.scrollLeft += m / e * a + g.offsetLeft + g.clientLeft - m - l;
                    b.scrollTop += c / e * a + g.offsetTop + g.clientTop - c - k;
                    this.schedule_render(!0)
                },
                fit_width: function() {
                    var a = this.cur_page_idx;
                    this.rescale(this.container.clientWidth / this.pages[a].width(), !0);
                    this.scroll_to(a)
                },
                fit_height: function() {
                    var a = this.cur_page_idx;
                    this.rescale(this.container.clientHeight / this.pages[a].height(), !0);
                    this.scroll_to(a)
                },
                get_containing_page: function(a) {
                    for (; a;) {
                        if (a.nodeType === Node.ELEMENT_NODE && a.classList.contains(CSS_CLASS_NAMES.page_frame)) {
                            a = get_page_number(a);
                            var b = this.page_map;
                            return a in b ? this.pages[b[a]] : null
                        }
                        a = a.parentNode
                    }
                    return null
                },
                link_handler: function(a) {
                    var b = a.target,
                        c = b.getAttribute("data-dest-detail");
                    if (c) {
                        if (this.config.view_history_handler) try {
                            var e = this.get_current_view_hash();
                            window.history.replaceState(e,
                                "", "#" + e);
                            window.history.pushState(c, "", "#" + c)
                        } catch (h) {}
                        this.navigate_to_dest(c, this.get_containing_page(b));
                        a.preventDefault()
                    }
                },
                navigate_to_dest: function(a, b) {
                    try {
                        var c = JSON.parse(a)
                    } catch (e) {
                        return
                    }
                    if (c instanceof Array) {
                        var h = c[0],
                            d = this.page_map;
                        if (h in d) {
                            for (var f = d[h], h = this.pages[f], d = 2, g = c.length; d < g; ++d) {
                                var k = c[d];
                                if (null !== k && "number" !== typeof k) return
                            }
                            for (; 6 > c.length;) c.push(null);
                            var g = b || this.pages[this.cur_page_idx],
                                d = g.view_position(),
                                d = transform(g.ictm, [d[0], g.height() - d[1]]),
                                g = this.scale,
                                l = [0, 0],
                                m = !0,
                                k = !1,
                                n = this.scale;
                            switch (c[1]) {
                                case "XYZ":
                                    l = [null === c[2] ? d[0] : c[2] * n, null === c[3] ? d[1] : c[3] * n];
                                    g = c[4];
                                    if (null === g || 0 === g) g = this.scale;
                                    k = !0;
                                    break;
                                case "Fit":
                                case "FitB":
                                    l = [0, 0];
                                    k = !0;
                                    break;
                                case "FitH":
                                case "FitBH":
                                    l = [0, null === c[2] ? d[1] : c[2] * n];
                                    k = !0;
                                    break;
                                case "FitV":
                                case "FitBV":
                                    l = [null === c[2] ? d[0] : c[2] * n, 0];
                                    k = !0;
                                    break;
                                case "FitR":
                                    l = [c[2] * n, c[5] * n], m = !1, k = !0
                            }
                            if (k) {
                                this.rescale(g, !1);
                                var p = this,
                                    c = function(a) {
                                        l = transform(a.ctm, l);
                                        m && (l[1] = a.height() - l[1]);
                                        p.scroll_to(f, l)
                                    };
                                h.loaded ?
                                    c(h) : (this.load_page(f, void 0, c), this.scroll_to(f))
                            }
                        }
                    }
                },
                scroll_to: function(a, b) {
                    var c = this.pages;
                    if (!(0 > a || a >= c.length)) {
                        c = c[a].view_position();
                        void 0 === b && (b = [0, 0]);
                        var e = this.container;
                        e.scrollLeft += b[0] - c[0];
                        e.scrollTop += b[1] - c[1]
                    }
                },
                get_current_view_hash: function() {
                    var a = [],
                        b = this.pages[this.cur_page_idx];
                    a.push(b.num);
                    a.push("XYZ");
                    var c = b.view_position(),
                        c = transform(b.ictm, [c[0], b.height() - c[1]]);
                    a.push(c[0] / this.scale);
                    a.push(c[1] / this.scale);
                    a.push(this.scale);
                    return JSON.stringify(a)
                }
            };
            pdf2htmlEX.Viewer = Viewer;
        })();
    </script>
    <script>
        try {
            pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
        } catch (e) {}
    </script>
    <title></title>
</head>

<body>
    <div id="sidebar">
        <div id="outline">
        </div>
    </div>
    <div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,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zv32t7+VpYmFhYWrq6sLCwtarfaf/umfmpubz549+7vf/c7r9dbW1jY3N0svmUym8fHxn/3sZ9euXXO5XKdOnTp+/LjJZEqlUn6/3+l0btq06fDhw729vUtLSysrKx0dHeXl5WVlZbm5uU/83BOJhEaj0Wq1svSxtra2trb2woULubm5bre7q6traGhIxtnWFZccrXH37t35+fnvf//7Mv9W9fUMVWWHyfvzz2g0ZjKZnp6eX/7ylx999FE8Hn/jjTf+5m/+pqqqSmpQpjveu3dvYmLC7/fLSsje3t49e/YoESWvyL59+5qamjo7O5PJZHd399LS0szMTDweNxqNTU1N7733nszhlLs9duzYRx999G//9m8LCwsFBQXt7e0vvvhic3Pz2o7VarXBYPAXv/jF9evXdTpdY2OjvLgyGCvLAp977rktW7YsLS2Fw2GZMmowGPLz82WY0eFwyHZBMjNZrqpyZSwWi8ViKSoqKi0t7evru3PnjrwE697b8s5vbGxsbGw8fPiw0Wi8ePHi4uLi8vKy3P/S0tKpU6fefffdu3fv/v73vx8eHs7Ozn7llVeU4VZQfQAAAP/bydTBcDhsMBgikUg4HM7NzbVard/KJzmdLhAI/Pa3v71y5crMzExRUdHRo0crKyuVP1WpVDJfUa1WV1ZWHj9+vKOjo6SkJBQKnTt3TjJAuksZEHM4HLt37/70009lDEcGf95+++2///u/r6mpUavVp06dqq2tDYfDLperqKhIabDPPvvszp07arW6qalJPu7L6FN2drbcpqioaOfOnd3d3aurq6urq21tba+88soTV18wGFxaWiorKzOZTNIner1+3759JSUlfr9fpVINDAz09/fv2rVLNkdZu/hQpVKNjo62t7cXFhaeOnVK2YA0FArJRZMbJxKJ+79vJBLp6urq7u42mUyFhYXZ2dlyWZQbWK3WI0eO9PT0tLe3J5PJycnJ3t7eurq6tQWlpFpNTU15ebl0eFZWVnNz87/8y79s3bpV7jAej0uD2Wy2t99+e2lp6V//9V+TyaRGo+no6HjvvffWboIqm+jI9F35iYMMBWu1WuVbFxcXv//++x9++KHs77r2eZWXl5vNZjmKQ6vVys8LHjg/1mg0ulwuOeD+/oG+tTvolJWV5efnZ2VlZTIZv9/f2dmZnZ39V3/1V7t27XK5XC6Xq7a2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AFQfAAAAAIDqAwAAAABQfQAAAAAAqg8AAAAAQPUBAAAAAKg+AAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAAKoPAAAAAED1AQAAAACoPgAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAACqDwAAAABA9QEAAAAAqD4AAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAAAAqg8AAAAAQPUBAAAAAKg+AAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAAKoPAAAAAED1AQAAAADVBwAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAACqDwAAAABA9QEAAAAA1QcAAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAAAAqg8AAAAAQPUBAAAAANUHAAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAAKoPAAAAAED1AQAAAADVBwAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAACqDwAAAABA9QEAAAAA1QcAAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAAAAqg8AAAAAqD4AAAAAANUHAAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAAKoPAAAAAKg+AAAAAADVBwAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAACqDwAAAACoPgAAAAAA1QcAAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAAAAqg8AAAAAqD4AAAAAANUHAAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAAKoPAAAAAKg+AAAAAADVBwAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAED1AQAAAACoPgAAAAAA1QcAAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAABA9QEAAAAAqD4AAAAAANUHAAAAAKD6AAAAAABUHwAAAACA6gMAAAAAUH0AAAAAQPUBAAAAAKg+AAAAAADVBwAAAACg+gAAAAAAVB8AAAAAgOoDAAAAAFB9AAAAAED1AQAAAACoPgAAAAAA1QcAAAAAoPoAAAAAAFQfAAAAAIDqAwAAAABQfQAAAABA9QEAAAAAqD4AAAAAANUHAAAAAKD6AAAAAABUHwAAAACA6gMAAAAAqg8AAAAAQPUBAAAA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AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACoPgAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAAVB8AAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAeLdfBzcMgmAYhj8J7bnrMJdbuYiDdBB6AKILNE2a50kMoPwXby+g+gAAAFB9AAAAqD4AAABUHwAAAKoPAABA9QEAAKD6AAAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAoPoAAABQfQAAAKg+AAAAVB8AAACqDwAAANUHAACg+gAAAFB9AAAAqD4AAABUHwAAAKoPAAAA1QcAAIDqAwAAUH0AAACoPgAAAFQfAAAAqg8AAADVBwAAgOoDAABA9QEAAKg+AAAAVB8AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABUHwAAAKoPAAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqg8AAADVBwAAgOoDAABA9QEAAKD6AAAAUH0AAACqDwAAANUHAACA6gMAAED1AQAAoPoAAABQfQAAAKg+AAAA1QcAAIDqAwAAQPUBAACg+gAAAFB9AAAAqD4AAABUHwAAgOoDAABA9QEAAKD6AAAAUH0AAAB8xeYXAPDXyqsmSXrvfa/JXpP3XFOTVsb+mGuf2u285lpJzseYO7fx7v6s7+t8PK97HQB+5QPot2l8z5LlKwAAAABJRU5ErkJggg==" />
                <div class="c x0 y1 w0 h2">
                    <div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"><?= $de; ?><span class="_"> </span>FACTURE</div>
                    <div class="t m0 x2 h4 y3 ff1 fs1 fc1 sc0 ls0 ws5">Facturé à<span class="_ _0"> </span>Facture n°<span class="_ _1"> </span><span class="ff2 ws1"><?= $numeroFacture ?></span></div>
                    <div class="t m0 x2 h5 y4 ff2 fs1 fc1 sc0 ls0 ws5"><?= $facturea ?><span class="_ _2"> </span><span class="ff1 ws2 v1">Date<span class="_"> </span></span><span class="ws1 v1"><?= $date; ?></span></div>
                    <div class="t m0 x3 h4 y5 ff1 fs1 fc1 sc0 ls0 ws3">DÉSIGNATION<span class="_"> </span>MONTANT</div>
                    <div class="t m0 x4 h5 y6 ff2 fs1 fc1 sc0 ls0 ws4"><?= $nomproduit ?><span class="_"> </span><?= $prix; ?></div>
                    <div class="t m0 x5 h6 y7 ff1 fs2 fc1 sc0 ls0 ws5">TOTAL HT<span class="_ _3"> </span><?= $total; ?></div>
                    <div class="t m0 x2 h4 y8 ff1 fs1 fc1 sc0 ls0 ws5">Conditions et modalités de paiem<span class="_ _4"></span>ent</div>
                    <div class="t m0 x2 h5 y9 ff2 fs1 fc1 sc0 ls0 ws5"><?= $condition; ?><span class="_ _4"></span>t</div>
                </div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
    </div>
    <div class="loading-indicator">
        <img alt="" src="data:image/png;base64,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" />
    </div>
</body>

</html>