<!DOCTYPE html>
<html lang="en-US" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/vf/vflogo.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('/vf/vflogo.svg') }}" />



    <title> Tanzania Vision Fund</title>


    <meta name='robots' content='max-image-preview:large' />
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>


    <link rel='dns-prefetch' href='//toolbar.qodeinteractive.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Bridge &raquo; Feed"
        href="https://bridge510.qodeinteractive.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Bridge &raquo; Comments Feed"
        href="https://bridge510.qodeinteractive.com/comments/feed/" />

    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/bridge510.qodeinteractive.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='animate-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/css/plugins/animate/animate.min.css?ver=6.7.1'
        type='text/css' media='all' />


    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <link rel='stylesheet' id='titan-adminbar-styles-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/anti-spam/assets/css/admin-bar.css?ver=7.3.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='qi-blocks-grid-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/grid.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='qi-blocks-main-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.css?ver=6.7.1'
        type='text/css' media='all' />


    <style id='qi-blocks-main-inline-css' type='text/css'>
        body .qodef-widget-block-8f77782d .qodef-gutenberg-section {
            --qi-blocks-columns-gap: 10px;
        }

        body .qodef-widget-block-9844a479 .qi-block-single-image {
            text-align: left;
        }

        body .qodef-widget-block-1f4858aa .qodef-gutenberg-section {
            --qi-blocks-columns-gap: 10px;
        }

        body .qodef-widget-block-06cae122 .qi-block-single-image {
            text-align: left;
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qodef-m-title {
            color: rgba(0, 22, 89, 1);
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 14px;
            line-height: 14px;
            margin-top: 1px;
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text:hover .qodef-m-title {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 12px;
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 17px;
            color: rgba(0, 22, 89, 1);
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 22, 89, 1);
            stroke-width: 0px;
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-062fe6de .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-f8eb94f7.qodef-block-container {
            padding-right: 30px;
            padding-left: 30px;
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qodef-m-title {
            color: rgba(0, 22, 89, 1);
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 14px;
            line-height: 14px;
            margin-top: 1px;
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text:hover .qodef-m-title {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 12px;
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 17px;
            color: rgba(0, 22, 89, 1);
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 22, 89, 1);
            stroke-width: 0px;
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-f8eb94f7 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qodef-m-title {
            color: rgba(0, 22, 89, 1);
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 14px;
            line-height: 14px;
            margin-top: 1px;
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text:hover .qodef-m-title {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 12px;
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 17px;
            color: rgba(0, 22, 89, 1);
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 22, 89, 1);
            stroke-width: 0px;
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-63627922 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-cd95ab54.qodef-block-container {
            margin-top: -8px;
            margin-bottom: -20px;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-title {
            font-weight: 400;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 5px;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-icon-holder {
            color: rgba(255, 254, 254, 1);
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-cd95ab54 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-fbd63e10.qodef-block-container {
            width: 240px;
            max-width: 240px;
            margin-bottom: -16px;
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 5px;
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(255, 255, 255, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-fbd63e10 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 5px;
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-m-icon-holder {
            color: rgba(255, 255, 255, 1);
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke-width: 1px;
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-5366406c .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 5px;
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-ae319f5c .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 4px;
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 254, 254, 1);
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-80f1f1b4 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-a82857b7.qodef-block-container {
            margin-bottom: -10px;
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 6px;
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 254, 254, 1);
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-a82857b7 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-7f56c795.qodef-block-container {
            margin-bottom: -10px;
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 6px;
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 254, 254, 1);
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-7f56c795 .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-widget-block-afd73b6e.qodef-block-container {
            margin-bottom: -20px;
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-m-content>.qodef-m-text {
            font-family: 'Yantramanav';
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;
            margin-top: 0px;
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-m-content>.qodef-m-text a:hover {
            color: rgba(255, 94, 20, 1);
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-top: 6px;
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-m-icon-holder {
            font-size: 18px;
            color: rgba(255, 254, 254, 1);
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-m-icon-holder svg {
            stroke: rgba(0, 0, 0, 0);
            stroke-width: 1px;
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-widget-block-afd73b6e .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }
    </style>


    <link rel='stylesheet' id='qode_demos_css-css'
        href='https://toolbar.qodeinteractive.com/_qode_toolbar/assets/css/qode-demos-modules.css?ver=6.7.1'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mediaelement-css'
        href='https://bridge510.qodeinteractive.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'
        href='https://bridge510.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-default-style-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/style.css?ver=6.7.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bridge-qode-font_awesome-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/font-awesome/css/font-awesome.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-qode-font_elegant-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/elegant-icons/style.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-qode-linea_icons-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/linea-icons/style.css?ver=6.7.1'
        type='text/css' media='all' />
{{--    <link rel='stylesheet' id='bridge-qode-dripicons-css'--}}
{{--        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/dripicons/dripicons.css?ver=6.7.1'--}}
{{--        type='text/css' media='all' />--}}

    <link rel='stylesheet' id='bridge-qode-dripicons-css' href="{{ asset('css/dripicons.css') }}" rel="stylesheet" type='text/css' media='all'>



    <link rel='stylesheet' id='bridge-qode-kiko-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/kiko/kiko-all.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-qode-font_awesome_5-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/font-awesome-5/css/font-awesome-5.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-stylesheet-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/stylesheet.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <style id='bridge-stylesheet-inline-css' type='text/css'>
        .page-id-6625.disabled_footer_top .footer_top_holder,
        .page-id-6625.disabled_footer_bottom .footer_bottom_holder {
            display: none;
        }
    </style>
    <link rel='stylesheet' id='bridge-woocommerce-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/woocommerce.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-woocommerce-responsive-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/woocommerce_responsive.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-print-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/print.css?ver=6.7.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bridge-style-dynamic-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/style_dynamic.css?ver=1708591150'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-responsive-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/responsive.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-style-dynamic-responsive-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/style_dynamic_responsive.css?ver=1708591150'
        type='text/css' media='all' />
    <style id='bridge-style-dynamic-responsive-inline-css' type='text/css'>
        .side_menu_slide_from_right .side_menu {
            padding: 6.4% 65px 36px;
            width: 420px;
        }

        .header_bottom {

            padding: 0;

        }



        header .header_inner_left {

            left: 0;

        }


        img {

            vertical-align: middle;

        }

        .qodef-qi-team-member .qodef-e-social-icon svg {
            width: 1em;
            height: 1em;
        }

        .qode-accordion-holder .qode-title-holder .qode-tab-title .qode-tab-title-icon {

            display: none;

        }



        .qode-accordion-holder .qode-title-holder .qode-tab-title {

            height: auto;

        }



        .qode-accordion-holder .qode-title-holder {

            padding: 30px 20px 18px 50px;

            background-color: transparent;

            border-top: 1px solid #e8e8e9;

            will-change: padding;

            transition: .2s;

            position: relative;

        }



        .qode-accordion-holder .qode-title-holder.ui-state-active {

            padding: 30px 20px 0 50px;

            background-color: #fff !important;

        }






        .qode-accordion-holder .qode-accordion-content.ui-accordion-content-active {

            background-color: #fff;

        }



        .qode-accordion-holder .qode-title-holder.ui-state-hover {

            background-color: transparent;

        }



        .qode-accordion-holder .qode-title-holder:first-child {

            border-top: none;

        }



        .qode-accordion-holder .qode-title-holder .qode-accordion-mark {

            right: 20px;

            top: 23px;

            border-radius: 2px;

            font-size: 20px;

            width: 50px;

            height: 50px;

            transition: background-color .5s cubic-bezier(.49, .79, .17, .94), color .5s cubic-bezier(.49, .79, .17, .94);

        }



        .qode-accordion-holder .qode-title-holder.ui-state-hover .qode-accordion-mark,
        .qode-accordion-holder .qode-title-holder.ui-state-active .qode-accordion-mark {

            background-color: #ff5e14;

            color: #fff;

        }

        .q_price_table {

            border: none;

            color: #001659;

            font-family: Yantramanav, sans-serif;

            vertical-align: middle;

            float: none;

            display: inline-block;

        }



        .q_price_table .price_table_inner {

            background-color: #fff;

            border: 1px solid #e8e8e9;

            border-bottom: 4px solid #ff5e14;

        }



        .q_price_table.active {

            color: #fff;

        }



        .q_price_table.active .price_table_inner {

            background-color: #00235a;

            border: 1px solid #00235a;

            border-bottom: 4px solid #00235a;

            padding: 20px 0;

        }



        .q_price_table.active .qode_title_content_new {

            color: #fff;

        }



        .q_price_table.active .active_text {

            display: none;

        }



        .q_price_table.active .price_table_inner>ul {

            padding: 0;

            margin: 0;

        }



        .price_table_inner ul li {

            text-align: left;

        }



        .price_in_table {

            text-align: left;

            position: relative;

            display: inline-block;

        }



        .price_table_inner ul li.pricing_table_content li {

            padding: 0;

            font-size: 18px;

            line-height: 34px;

            letter-spacing: 0;

            font-weight: 400;

        }



        .price_table_inner ul li.pricing_table_content li:before {

            font-family: ElegantIcons;

            content: "\4e";

            font-size: 16px;

            margin: 5px 15px 0 0;

        }



        .price_in_table .price {

            font-size: 80px;

            line-height: 1em;

            letter-spacing: -.01em;

            font-weight: 800;

            padding: 0;

        }



        .price_in_table .value {

            font-size: 48px;

            line-height: 1em;

            font-weight: 600;

            position: relative;

            top: -1px;

        }



        .price_in_table .mark {

            font-size: 12px;

            line-height: 2.33em;

            letter-spacing: .1em;

            text-transform: uppercase;

            font-weight: 500;

            top: -6px;

        }



        .price_table_inner ul li.table_title {

            padding: 40px 80px 0;

        }



        .price_table_inner ul li.prices {

            padding: 20px 80px 12px;

        }



        .price_table_inner ul li.pricing_table_content {

            padding: 0 80px;

        }



        .price_table_inner .price_button {

            padding: 36px 80px 60px;

        }



        .price_button .qbutton {

            margin: 0;

            background-color: #ff5e14 !important;

            padding: 0 39px;

            font-weight: 500;

            border-radius: 2px;

            height: 48px;

            line-height: 48px;

            color: #fff;

            border: none;

            font-family: Yantramanav, sans-serif;

            font-size: 16px;

            font-weight: 500;

            letter-spacing: 0.32px;

            text-transform: none;

        }



        .price_button .qbutton:hover {

            color: #fff;

        }


        @media only screen and (min-width: 481px) and (max-width: 1000px) {

            .qode_clients.four_columns .qode_client_holder {

                width: 25%;

            }

        }

        footer svg path {

            fill: currentColor !important;

        }


        .q_percentage {

            letter-spacing: -.02em;

            font-family: Yantramanav, sans-serif;

            font-size: 0 !important;

        }



        .q_pie_chart_holder .tocounter {

            font-size: 60px;

        }



        .q_pie_chart_holder .tocounter:after {

            content: '%';

            position: relative;

            top: -15px;

            font-size: 36px;

        }

        figure {

            margin: 0;

        }



        .footer_bottom .q_social_icon_holder .fa-stack {

            margin: -1px 0 0 -1px;

            height: 79px;

            line-height: 80px;

            width: 70px;

        }

        .comment_holder .comment_number .comment_number_inner>h5,
        div.comment_form .comment-respond>h5 {

            margin: 0;

            font-size: 40px;

            font-family: Yantramanav, sans-serif;

            line-height: 1.15em;

            text-transform: none;

            letter-spacing: 0;

        }



        .comment_holder .comment {

            padding: 0;

            display: flex;

            gap: 30px;

        }



        .comment_holder .comment .image {

            flex-shrink: 0;

            border-radius: 0;

        }



        .comment_holder .comment .text {

            padding: 0;

        }



        .comment_holder .comment .text .name {

            font-size: 26px;

            line-height: 1.15em;

            font-weight: 600;

            text-transform: none;

            font-family: 'Yantramanav';

            letter-spacing: 0;

            margin: 0 0 8px;

        }



        .comment_holder .comment .text .comment_date {

            display: none;

        }



        .comment_holder .comment .text .comment-reply-link,
        .comment_holder .comment .text .replay {

            padding: 0;

            font-size: 16px;

            text-transform: capitalize;

            letter-spacing: .02em;

            font-weight: 500;

            font-family: Yantramanav, sans-serif;

            color: #001659;

            transition: color .1s ease-in-out;

            margin: 0 0 7px;

            display: inline-block;

        }



        .comment_holder .comment-list li ul.children {

            padding: 0 0 0 60px;

            margin: 27px 0 0;

        }



        #respond input[type=text],
        #respond input[type=email],
        #respond textarea,
        .contact_form input[type=text],
        .contact_form textarea {

            margin: 0 0 25px;

            color: #001659;

            background-color: transparent;

            border-top: none;

            border-left: none;

            border-right: none;

            border-bottom: 1px solid #e8e8e9;

            border-radius: 0;

            outline: 0;

            cursor: pointer;

            box-sizing: border-box;

            transition: border-color .2s ease-in-out;

            padding: 19px 16px 12px 0;

            font-size: 26px;

            line-height: 1.15em;

            font-weight: 600;

            font-family: Yantramanav, sans-serif;

        }



        #respond input[type=text]::placeholder,
        #respond input[type=email]::placeholder,
        #respond textarea::placeholder,
        .contact_form input[type=text]::placeholder,
        .contact_form textarea::placeholder {

            color: #2b3651 !important;

            font-size: 14px;

            letter-spacing: .1em;

            text-transform: uppercase;

            font-weight: 400;

        }



        #respond input[type=text]:focus,
        #respond input[type=email]:focus,
        #respond textarea:focus,
        .contact_form input[type=text]:focus,
        .contact_form textarea:focus {

            color: #001659;

            border-color: #ff5e14;

        }



        div.comment_form form p.form-submit,
        div.comment_holder .comment p.form-submit {

            text-align: left;

        }



        div.comment_form form p.form-submit #submit_comment,
        div.comment_holder .comment p.form-submit #submit_comment {

            background-color: #ff5e14;

            border: none;

            border-radius: 2px;

            color: #fff;

            height: 48px;

            font-size: 16px;

            text-transform: none;

            letter-spacing: 0;

            font-weight: 400;

            padding: 0 50px;

        }



        div.comment_form .comment-form-cookies-consent {

            margin: 0 0 20px;

        }

        .title .text_above_title {

            margin: 0 0 4px;

        }



        .subtitle {

            margin: 15px 0 0;

        }

        .portfolio_single h3 {

            text-transform: none;

        }



        .portfolio_detail .info>h6,
        .portfolio_detail .info>span,
        .portfolio_detail .info>p,
        .portfolio_detail .info>a {

            font-size: 14px;

            font-family: Yantramanav, sans-serif;

            letter-spacing: .1em;

            font-weight: 500;

            line-height: 1em;

            color: #565969;

            text-transform: uppercase;

        }



        .portfolio_detail .info {

            display: flex;

            gap: 7px;

            padding: 0;

            margin: 0 0 15px;

        }



        .portfolio_detail .info>h6:after {

            content: ':';

        }



        .portfolio_single .flexslider {

            margin: 0 0 60px;

        }



        .portfolio_navigation .portfolio_next a,
        .portfolio_navigation .portfolio_prev a {

            border-radius: 2px;

            background-color: #00235a;

            border-color: #00235a;

            color: #fff;

            width: 44px;

            height: 44px;

            line-height: 44px;

        }



        .portfolio_navigation .portfolio_next a:hover,
        .portfolio_navigation .portfolio_prev a:hover {

            background-color: #ff5e14;

            border-color: #ff5e14;

            color: #fff;

        }



        .portfolio_detail {

            display: flex;

            flex-direction: column;

        }



        .portfolio_detail>* {

            order: 3;

        }



        .portfolio_detail>h6 {

            order: 1;

            font-family: Yantramanav, sans-serif;

            font-size: 40px;

            text-transform: none;

            color: #001659;

            margin: 0 0 14px;

        }



        .portfolio_detail>.portfolio_content {

            order: 2;

            margin: 0 0 40px;

        }

        .qode_portfolio_related .projects_holder.v4 .mix {

            width: 32%;

            margin: 0 0 2.4%;

        }



        .qode_portfolio_related .projects_holder article .portfolio_description {

            background-color: transparent;

            text-align: left;

            display: flex;

            flex-direction: column-reverse;

        }



        .qode_portfolio_related .projects_holder article .portfolio_description .project_category {

            font-family: Yantramanav, sans-serif;

            font-size: 12px;

            line-height: 2.33em;

            letter-spacing: .1em;

            text-transform: uppercase;

            font-weight: 500;

            color: #565969;

        }



        .qode_portfolio_related .projects_holder article .portfolio_description .portfolio_title,
        .qode_portfolio_related .projects_holder article .portfolio_description .portfolio_title a {

            font-size: 26px;

            line-height: 1.15em;

            font-weight: 600;

            font-family: Yantramanav, sans-serif;

            text-transform: none;

            letter-spacing: 0;

        }



        .qode_portfolio_related>h4 {

            font-size: 40px;

            text-align: left;

            line-height: 1;

            margin: 107px 0 25px;

            padding: 0;

        }

        .portfolio_slider_holder {

            overflow: hidden;

        }



        .portfolio_slider {

            margin: 0 -15px !important;

            width: auto;

            overflow: hidden;

        }



        .portfolio_slider .portfolio_slides>li {

            padding: 0 15px;

        }



        .portfolio_slides .hover_feature_holder {

            position: relative;

        }



        .portfolio_slides .hover_feature_holder_inner {

            opacity: 1;

            display: flex;

            flex-direction: column;

            justify-content: flex-start;

            align-items: flex-start;

            padding: 17px 0 0;

        }



        .portfolio_slider .image_holder .separator.small.transparent {

            display: none;

        }



        .portfolio_slides .hover_feature_holder_inner>* {

            order: 2;

        }



        .portfolio_slides .hover_feature_holder_inner>.project_category {

            order: 1;

            font-size: 12px;

            letter-spacing: .1em;

            font-family: 'Yantramanav', sans-serif;

            text-transform: uppercase;

            margin: 0 0 4px;

        }



        .portfolio_slides .hover_feature_holder_inner .qbutton {

            margin: 27px 0 0;

            background-color: transparent;

            border: none;

            padding: 0;

            font-size: 16px;

            font-weight: 500;

            font-family: Yantramanav, sans-serif;

            letter-spacing: .02em;

            text-transform: capitalize;

        }



        .portfolio_slides .hover_feature_holder_inner .qbutton:hover {

            color: #fff;

        }


        .latest_post_holder.boxes>ul>li .latest_post {

            background-color: #fff;

            padding: 20px 34px 48px;

            background-color: #fff;

            border: 1px solid #e8e8e9;

            border-bottom: 4px solid #ff5e14;

        }



        .latest_post_holder.boxes>ul>li .latest_post .latest_post_text_inner {

            display: flex;

            flex-direction: column-reverse;

        }



        .latest_post_inner .post_infos {

            font-size: 12px;

            line-height: 2.33em;

            letter-spacing: .1em;

            text-transform: uppercase;

            font-weight: 500;

            color: #565969;

            font-family: 'Yantramanav';

        }



        .latest_post_holder.boxes>ul>li .latest_post_inner {

            margin: 0 !important;

        }



        .latest_post_holder.boxes .boxes_image a:hover {

            transform: none;

        }


        .blog_holder article {

            margin: 0 0 58px;

        }



        .blog_holder article .post_text .post_text_inner {

            display: flex;

            flex-direction: column;

        }



        .blog_holder article .post_text .post_text_inner>* {

            order: 3;

        }



        .blog_holder article .post_text .post_text_inner>h2 {

            order: 2;

            margin: 0 0 20px;

        }



        .blog_holder article .post_text .post_text_inner>.post_info {

            order: 1;

            margin: 0;

        }



        .blog_holder article .post_more .qbutton {

            font-size: 16px;

            font-family: Yantramanav, sans-serif;

            letter-spacing: .02em;

            margin-top: 2px;

            text-transform: none;

            font-weight: 500;

            padding: 0;

            border: none;

            color: #001659;

        }



        .blog_holder article .post_more .qbutton:hover {

            background-color: transparent;

        }



        .blog_holder.blog_large_image article.format-link .post_info,
        .blog_holder.blog_large_image article.format-quote .post_info {

            display: none;

        }



        .blog_holder article.format-quote .post_text .post_text_inner {

            padding: 51px 26px 51px 39px;

            display: flex;

            align-items: flex-start;

            flex-direction: row;

            gap: 10px;

        }



        .blog_holder article.format-quote .post_text i.qoute_mark {

            margin: 0;

        }



        .blog_holder article.format-link .post_text i.link_mark {

            color: #ff5e14;

            margin: 0;

        }



        .blog_holder article.format-link .post_text .post_title,
        .blog_holder article.format-quote .post_text .post_title {

            padding: 0;

        }



        article.format-quote .post_text .quote_author::first-letter {

            font-size: 0;

            line-height: 0;

        }



        body:not(.search-results) .blog_holder article.format-quote .post_text:hover .post_text_inner {

            background-color: #ff5e14 !important;
            ;

        }



        .blog_holder article.format-link .post_text .post_text_inner {

            padding: 50px 40px 121px;

            background-color: #00235a;

            display: flex;

            align-items: flex-start;

            flex-direction: row;

            gap: 20px;

        }



        body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner {

            background-color: #00235a !important;

        }



        .blog_holder article.format-link .post_text .post_title p,
        .blog_holder article.format-link .post_text .post_title p a {

            color: #fff;

        }



        body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner .post_title p,
        body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner .post_title p a {

            color: #ff5e14;

        }



        body:not(.search-results) .blog_holder article.format-link .post_text:hover i.link_mark {

            color: #ff5e14 !important;

        }



        .pagination ul li a,
        .pagination ul li span {

            margin: 0 7px;

            letter-spacing: .1em;

            font-weight: 500;

            font-size: 16px;

            font-weight: 500;

            line-height: 48px;

            font-family: Yantramanav, sans-serif;

            border: none;

        }


        .wpcf7-form div .qode-form-required-label {

            font-size: 14px;

            line-height: 28px;

            font-weight: 500;

            color: #ff5e14
        }

        .breadcrumb a:hover {

            color: #001659;

        }


        .blog_holder.blog_single article .post_text .post_text_inner {

            display: flex;

            flex-direction: column;

        }



        .blog_holder.blog_single article .post_text .post_text_inner>* {

            order: 3;

        }



        .blog_holder.blog_single article .post_text .post_text_inner>h2 {

            order: 2;

            margin: 0 0 15px;

        }



        .blog_holder.blog_single article .post_text .post_text_inner>.post_info {

            order: 1;

            margin: 0;

        }



        .blog_holder.blog_single article h2 {

            font-size: 60px;

            line-height: .96em;

            letter-spacing: -.02em;

            font-weight: 600;

            text-transform: none;

        }



        blockquote {

            padding: 57px 40px 60px 40px;

            font-size: 18px;

            line-height: 30px;

            box-sizing: border-box;

            border: 1px solid #e8e8e9;

            border-bottom: 4px solid #ff5e14;

        }



        .single_tags .tags_text>h5 {

            display: none;

        }

        div.comment_form {

            margin: 0 0 150px;

        }



        @media only screen and (max-width: 480px) {

            .comment_holder .comment {

                flex-direction: column;

            }


        }

        .pagination {

            margin: 0 0 143px;

        }


        aside .widget.posts_holder li {

            padding: 1px 0;

        }

        .qode_portfolio_related {

            margin: 0 0 37px;

        }

        .blog_holder.blog_single article.format-link .post_text .post_text_inner>.post_info,
        .blog_holder.blog_single article.format-quote .post_text .post_text_inner>.post_info {

            display: none;

        }



        .blog_single.blog_holder article.format-link .post_text .post_text_inner {

            padding: 60px 40px;

            background-color: #00235a;

            display: flex;

            align-items: flex-start;

            flex-direction: row;

            gap: 20px;

        }



        .blog_single.blog_holder article.format-quote .post_text .post_text_inner {

            padding: 60px 40px;

            display: flex;

            align-items: flex-start;

            flex-direction: row;

            gap: 20px;

        }



        .blog_holder article.format-quote .post_text .post_title>p {

            margin: 0;

        }


        .header_top {

            border-bottom: 1px solid #e8e8e9;

            padding: 0 30px;

            box-sizing: border-box;

            height: 40px;

            line-height: 40px;

        }



        .header_top * {

            line-height: 40px;

        }


        .q_logo,
        .q_logo a {

            height: 80% !important;
            padding-left: 14px !important;

        }

        @media only screen and (max-width: 480px) {

            .footer_top .column_inner>div:not(.qode_separator_widget) {

                margin: 0 !important;

            }

        }

        @media only screen and (max-width: 480px) {

            .blog_holder article.format-link .post_text .post_text_inner,
            .blog_holder article.format-quote .post_text .post_text_inner {

                flex-direction: column;

            }

        }

        @media only screen and (max-width: 768px) {

            .title .text_above_title {

                display: block;

            }



            .title .subtitle {

                display: none;

            }

        }

        .portfolio_slider .caroufredsel-direction-nav {

            display: flex;

            align-items: flex-start;

            padding: 0 15px;

            gap: 20px;

            flex-direction: column-reverse;
            ;

        }



        .portfolio_slider .caroufredsel-prev,
        .portfolio_slider .caroufredsel-next {

            position: relative;

            left: auto;

            right: auto;

            margin: 0;

            top: auto;

            height: 48px;

            line-height: 48px;

            border-radius: 0;

            width: 140px;

            border: none;

        }



        .portfolio_slider .caroufredsel-next,
        .portfolio_slider .caroufredsel-next:hover {

            background-color: #ff5e14 !important;

        }



        .portfolio_slider .caroufredsel-next:hover i,
        .portfolio_slider .caroufredsel-prev:hover i {

            color: #fff !important;

        }



        .portfolio_slider .caroufredsel-prev,
        .portfolio_slider .caroufredsel-prev:hover {

            background-color: #09316f !Important;

        }


        aside.sidebar .q_social_icon_holder.normal_social:first-of-type {

            margin-left: 0;

        }

        aside.sidebar .latest_post_image {

            width: 60px;

        }



        aside.sidebar .latest_post_holder.image_in_box .latest_post_text .latest_post_title,
        aside.sidebar .latest_post_holder.image_in_box .latest_post_text .latest_post_title a {

            margin: 0;

            font-family: Yantramanav, sans-serif;

            font-size: 20px;

            font-weight: 600;

            line-height: 20px;

            text-transform: none;

            letter-spacing: 0;

        }



        aside.sidebar .latest_post_inner .post_infos {

            font-family: Yantramanav, sans-serif;
            ;

            font-size: 14px;

            line-height: 2em;

            letter-spacing: .1em;

            font-weight: 500;

            color: #565969;

            text-transform: uppercase;

        }



        aside.sidebar .latest_post_holder.image_in_box .latest_post_text {

            padding: 8px 0 0 82px;

        }

        .widget .wp-block-tag-cloud a,
        aside.sidebar .widget.widget_block .wp-block-tag-cloud a {

            padding: 11px 24px;

            margin-right: 10px;

            margin-bottom: 14px;

        }



        .widget .tagcloud a:after,
        .widget .wp-block-tag-cloud a:after {

            display: none;

        }

        .right_side_menu_opened .wrapper,
        .right_side_menu_opened footer.uncover {

            right: 0;

        }

        .qode_portfolio_related .projects_holder article span.text_holder {

            display: none;

        }



        .qode_portfolio_related .projects_holder article .image_holder:hover .image img {

            transform: scale(1);

        }



        .qode_portfolio_related .projects_holder article .portfolio_description .project_category {

            color: #565969 !important;

        }

        @media only screen and (max-width: 1000px) {

            .header_inner_right {

                display: none;

            }



            .mobile_menu_button {

                float: right;

                margin: 0;

            }



            .logo_wrapper,
            .q_logo a {

                left: 0;

            }

        }


        @media only screen and (max-width: 1024px) {

            nav.main_menu>ul>li>a {

                padding: 0 12px;

            }

        }

        .side_menu_button .qode-side-menu-button-svg svg path,
        .side_menu_button .qode-side-menu-button-svg svg>* {

            stroke: none;

        }



        .side_menu_button>a {

            display: flex;

            width: auto;

            height: 100%;

            align-items: center;

        }



        .mobile_menu_button span:hover,
        .side_menu_button>a:hover,
        header:not(.with_hover_bg_color) nav.main_menu>ul>li:hover>a {

            opacity: 1;

        }

        @media only screen and (max-width: 1000px) {

            .footer_top .four_columns>.column3>.column_inner {

                padding-left: 0;

            }



            .footer_top .four_columns .column3 .column_inner>div,
            .footer_top .three_columns .column3 .column_inner>div {

                margin: 0;

            }



            body.qode_advanced_footer_responsive_1000 .four_columns .column3,
            body.qode_advanced_footer_responsive_1000 .four_columns .column4 {

                margin: 60px 0 0
            }



            .footer_bottom_holder .three_columns>.column1,
            .footer_bottom_holder .three_columns>.column2,
            .footer_bottom_holder .three_columns>.column3 {

                width: 100%;

                float: none;

            }



            .footer_bottom_columns .footer_bottom {

                text-align: center !important;
                ;

            }



            .footer_bottom_columns .wp-block-image img {

                margin: 0 auto;

            }



            .footer_bottom_columns .column_inner {

                padding: 0 !important;

            }



            .footer_bottom_columns .footer_bottom p {

                margin: 0 0 22px;

            }

        }


        @media only screen and (max-width: 1000px) {

            .mobile_menu_button {

                height: 70px;

            }



            .mobile_menu_button span {

                display: flex;

                width: auto;

            }



            .mobile_menu_button span svg {

                stroke: none;

            }



            nav.mobile_menu ul {

                padding-top: 2px;

                padding-bottom: 5px;

            }



            nav.mobile_menu ul li,
            nav.mobile_menu ul li ul li {

                border-bottom: 1px solid #e8e8e9;

            }



            nav.mobile_menu ul li:last-child {

                border-bottom: 1px solid #e8e8e9 !important;

            }

        }



        @media only screen and (max-width: 480px) {

            nav.mobile_menu>ul {

                width: 300px;

            }

        }

        .right_side_menu_opened .wrapper,
        .right_side_menu_opened footer.uncover {

            left: 0;

        }

        .side_menu svg path {

            fill: currentColor !important;

        }

        .portfolio_slider .caroufredsel-direction-nav {

            margin: 73px 0 0;

        }


        @media only screen and (max-width: 480px) {

            .qode_portfolio_related .projects_holder.v4 .mix {

                width: 100%;

                margin: 0 0 20px;

            }

        }


        @media only screen and (min-width: 1441px) {

            .footer_bottom .q_social_icon_holder .fa-stack {

                width: 79px;

            }

        }

        .side_menu a.close_side_menu.qode-side-menu-close-svg svg {

            stroke: none;

        }

        #back_to_top span i,
        #back_to_top span span {

            position: relative;

            top: 3px;

        }


        .portfolio_slides li:hover .image_pixel_hover {

            background-color: rgba(0, 22, 89, .4);

        }



        .portfolio_slider .portfolio_slides li.item:hover img {

            transform: none;

        }


        .portfolio_slides .hover_feature_holder_inner {

            padding: 21px 0 0;

        }


        .portfolio_slides .hover_feature_holder_inner .portfolio_title {

            text-transform: NONE;

        }

        @media only screen and (min-width: 481px) and (max-width: 768px) {

            .qode_clients.four_columns .qode_client_holder {

                width: 50%;

            }

        }


        .header_bottom:before {

            content: '';

            position: absolute;

            left: 0;

            bottom: 0;

            height: 1px;

            width: 100%;

            background-color: #e8e8e9;

        }

        @media only screen and (max-width: 480px) {

            .qode-accordion-holder .qode-title-holder,
            .qode-accordion-holder .qode-title-holder.ui-state-active,
            .qode-accordion-holder .qode-accordion-content {

                padding-left: 25px !important;
                ;

            }

        }

        @media only screen and (max-width: 480px) {

            footer .container_inner {

                width: 300px;

                padding: 0;

            }

        }

        @media only screen and (max-width: 600px) {

            body.qode_advanced_footer_responsive_1000 .four_columns .column2,
            body.qode_advanced_footer_responsive_1000 .four_columns .column3 {

                margin-top: 24px;

            }

        }

        header:not(.sticky):not(.scrolled) .header_bottom,
        header.fixed_top_header .bottom_header {

            border: none;

        }


        .comment_holder {

            padding: 125px 0 94px;

        }



        div.comment_form form p.logged-in-as {

            margin-top: 17px;

        }



        #respond small {

            margin: 0;

        }



        div.comment_form .comment-respond>h5 {

            margin: 0 0 -4px;

        }



        div.comment_form {

            margin: 0 0 140px;

        }



        div.comment_form .comment-form-cookies-consent input {

            margin-right: 8px;

        }



        div.comment_form .comment-form-cookies-consent {

            margin: 4px 0 32px;

        }


        @media only screen and (max-width: 768px) {

            div.comment_form {

                padding-top: 0;

                border: none;

            }

        }


        @media only screen and (min-width: 769px) and (max-width: 1024px) {

            aside.sidebar {

                width: 50%;

            }

        }



        @media only screen and (max-width: 1024px) {

            aside.sidebar {

                margin: 0 0 126px;

            }

        }


        .single_tags a {

            padding: 11px 24px;

            margin-right: 10px;

        }

        .price_table_inner ul li.prices {

            padding-top: 12px;

        }



        .price_table_inner ul li.pricing_table_content li {

            color: #565969;

        }



        .active .price_table_inner ul li.pricing_table_content li {

            color: #fff;

        }


        @media only screen and (max-width: 1024px) {

            .price_table_inner ul li.table_title,
            .price_table_inner ul li.prices,
            .price_table_inner ul li.pricing_table_content,
            .price_table_inner .price_button {

                padding-left: 25px;

                padding-right: 25px;

            }

        }



        @media only screen and (max-width: 768px) {

            .qode_pricing_tables.three_columns .q_price_table {

                width: 100%;

                margin: 0 0 20px;

            }

        }


        @media only screen and (max-width: 480px) {

            .price_table_inner ul li.table_title,
            .price_table_inner ul li.prices,
            .price_table_inner ul li.pricing_table_content,
            .price_table_inner .price_button {

                padding-left: 40px;

                padding-right: 40px;

            }

        }

        .single_tags {

            margin-bottom: -14px;

        }



        .single_tags a {

            margin-bottom: 14px;

        }


        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date,
        .cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea,
        .cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz {

            color: #001659;

            font-family: Yantramanav;

            font-size: 24px;

            font-style: normal;

            font-weight: 500;

            letter-spacing: 2px;

            text-transform: capitalize;

        }


        input.wpcf7-form-control.wpcf7-date,
        input.wpcf7-form-control.wpcf7-number,
        input.wpcf7-form-control.wpcf7-quiz,
        input.wpcf7-form-control.wpcf7-text,
        select.wpcf7-form-control.wpcf7-select,
        textarea.wpcf7-form-control.wpcf7-textarea {

            padding: 15px 0;

        }

        .q_pie_chart_holder .tocounter {

            position: relative;

            top: 2px;

        }

        .side_menu_slide_from_right .side_menu {

            transition: all 0.9s cubic-bezier(.77, 0, .175, 1) !important;

        }

        .qode-accordion-holder .qode-title-holder {

            padding-top: 25px;

            padding-bottom: 23px;

        }



        .qode-accordion-holder .qode-title-holder.ui-state-active {

            padding-top: 25px;

        }

        header.sticky .logo_wrapper,
        header.sticky.centered_logo .logo_wrapper {

            height: 70px !important;

        }



        .dark.sticky nav.main_menu>ul>li.active>a,
        .dark.sticky nav.main_menu>ul>li>a,
        .dark.sticky nav.main_menu>ul>li>a:hover,
        .light.sticky nav.main_menu>ul>li.active>a,
        .light.sticky nav.main_menu>ul>li>a,
        .light.sticky nav.main_menu>ul>li>a:hover,
        header.sticky nav.main_menu>ul>li>a {

            line-height: 70px;

        }



        header.sticky .header_bottom {

            box-shadow: -1px 1px 10px 0 rgba(38, 59, 98, .1);

        }


        aside.sidebar .latest_post_holder>ul>li {

            margin: 0 !important;

        }

        .comment_holder .comment_number {

            display: block;

        }

        .blog_holder article.format-quote,
        .blog_holder article.format-link {

            margin: 0 0 100px;

        }


        .author_description {

            padding: 0;

        }



        .author_description_inner .image {

            border-radius: 0;

        }



        .author_text_holder .author_name {

            font-size: 26px;

            line-height: 1.15em;

            font-weight: 600;

            text-transform: none;

            letter-spacing: 0;

        }



        .author_text_holder .author_email {

            display: none;

        }


        div.comment_form {

            margin: 0 0 130px
        }

        .comment_holder {

            padding-top: 93px;

            padding-bottom: 106px;

        }

        .comment_holder .comment .text .name {

            color: #001659;

        }



        .author_description {

            margin-top: 60px;

        }



        .author_text_holder {

            padding-right: 11%;

        }



        @media only screen and (max-width: 480px) {

            .author_text_holder {

                padding-right: 0;

            }

        }


        @media only screen and (max-width: 480px) {

            .author_text_holder {

                padding-top: 30px;

            }

        }

        .q_pie_chart_holder .tocounter {

            left: 12px;

        }



        .right_side_menu_opened .wrapper,
        .right_side_menu_opened .wrapper header.fixed,
        .right_side_menu_opened .wrapper header.fixed_hiding,
        .right_side_menu_opened .wrapper header.fixed_top_header .top_header,
        .right_side_menu_opened .wrapper header.sticky {

            left: 0;

        }
    </style>


    <link rel='stylesheet' id='bridge-style-handle-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CYantramanav%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bridge-core-dashboard-style-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/bridge-core/modules/core-dashboard/assets/css/core-dashboard.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://bridge510.qodeinteractive.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1707226491'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/5.4.5/swiper.min.css?ver=6.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-4-css'
        href='https://bridge510.qodeinteractive.com/wp-content/uploads/elementor/css/post-4.css?ver=1707226491'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://bridge510.qodeinteractive.com/wp-content/uploads/elementor/css/global.css?ver=1707226491'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6625-css'
        href='https://bridge510.qodeinteractive.com/wp-content/uploads/elementor/css/post-6625.css?ver=1707400201'
        type='text/css' media='all' />
    <link rel='stylesheet' id='qi-blocks-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Yantramanav%3A400&#038;subset&#038;display=swap&#038;ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CYantramanav%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.7.1'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>

    <!-- OG: 3.2.4 -->
    <meta property="article:published_time" content="2023-11-24T11:45:22+00:00">
    <meta property="article:modified_time" content="2024-02-08T13:49:59+00:00">
    <meta property="article:author:username" content="admin">
    <meta property="twitter:partner" content="ogwp">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image"
        content="https://bridge510.qodeinteractive.com/wp-content/uploads/2023/11/Rectangle-558.png">
    <meta property="twitter:image:alt" content="s">
    <meta property="twitter:title" content="Home">
    <meta property="twitter:description"
        content="Services EXPLORE THE FEATURES General Contract EXPLORE THE FEATURES Project Planning EXPLORE THE FEATURES Refurbishment EXPLORE THE FEATURES Interior Design EXPLORE THE FEATURESFull...">
    <meta property="twitter:url" content="https://bridge510.qodeinteractive.com/">
    <meta property="profile:username" content="admin">
    <!-- /OG -->

    <link rel="https://api.w.org/" href="https://bridge510.qodeinteractive.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://bridge510.qodeinteractive.com/wp-json/wp/v2/pages/6625" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://bridge510.qodeinteractive.com/xmlrpc.php?rsd" />

    <link rel="canonical" href="https://bridge510.qodeinteractive.com/" />
    <link rel='shortlink' href='https://bridge510.qodeinteractive.com/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://bridge510.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbridge510.qodeinteractive.com%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://bridge510.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbridge510.qodeinteractive.com%2F&#038;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.19.0; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>


    {{-- <script src="https://cdn.tailwindcss.com/3.3.0"></script> --}}




</head>


















































































































<body
    class="home page-template page-template-full_width page-template-full_width-php page page-id-6625 theme-bridge bridge-core-3.1.3 qi-blocks-1.2.5 qodef-gutenberg--no-touch woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.6.7  qode-title-hidden qode_grid_1300 side_menu_slide_from_right hide_top_bar_on_mobile_header qode-content-sidebar-responsive qode-content-sidebar-responsive-1024 qode-overridden-elementors-fonts qode_disabled_responsive_button_padding_change columns-3 qode-theme-ver-30.2 qode-theme-bridge qode_advanced_footer_responsive_1000 elementor-default elementor-kit-4 elementor-page elementor-page-6625"
    itemscope itemtype="http://schema.org/WebPage">



   <livewire:frontend.components.top-header />



    <div class="wrapper">
        <div class="wrapper_inner">


            <!-- Google Analytics start -->
            <!-- Google Analytics end -->


          <livewire:frontend.components.header />



            <a id="back_to_top" href="#">
                <span class="fa-stack">
                    <i class="qodef-icon-dripicons dripicon dripicons-chevron-up "></i> </span>
            </a>




            @yield('body-section')




          <livewire:frontend.components.footer />




        </div>
    </div>











    @livewireScripts


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <div class="qode-demos-toolbar" data-position="64%"></div>
    <link
        href="https://fonts.googleapis.com/css?family=Yantramanav:900%2C700%2C300%2C500%2C400%7CRoboto:400&display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel='stylesheet' id='qi-blocks-icon-with-text-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/icon-with-text.css?ver=6.7.1'
        type='text/css' media='all' />
    <style id='wp-block-heading-inline-css' type='text/css'>
        h1.has-background,
        h2.has-background,
        h3.has-background,
        h4.has-background,
        h5.has-background,
        h6.has-background {
            padding: 1.25em 2.375em
        }

        h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),
        h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),
        h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),
        h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),
        h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),
        h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),
        h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]) {
            rotate: 180deg
        }
    </style>
    <style id='wp-block-spacer-inline-css' type='text/css'>
        .wp-block-spacer {
            clear: both
        }
    </style>
    <style id='wp-block-paragraph-inline-css' type='text/css'>
        .is-small-text {
            font-size: .875em
        }

        .is-regular-text {
            font-size: 1em
        }

        .is-large-text {
            font-size: 2.25em
        }

        .is-larger-text {
            font-size: 3em
        }

        .has-drop-cap:not(:focus):first-letter {
            float: left;
            font-size: 8.4em;
            font-style: normal;
            font-weight: 100;
            line-height: .68;
            margin: .05em .1em 0 0;
            text-transform: uppercase
        }

        body.rtl .has-drop-cap:not(:focus):first-letter {
            float: none;
            margin-left: .1em
        }

        p.has-drop-cap.has-background {
            overflow: hidden
        }

        :root :where(p.has-background) {
            padding: 1.25em 2.375em
        }

        :where(p.has-text-color:not(.has-link-color)) a{color:inherit}p.has-text-align-left[style*="writing-mode:vertical-lr"],
        p.has-text-align-right[style*="writing-mode:vertical-rl"] {
            rotate: 180deg
        }
    </style>
    <style id='wp-block-group-inline-css' type='text/css'>
        .wp-block-group {
            box-sizing: border-box
        }

        :where(.wp-block-group.wp-block-group-is-layout-constrained) {
            position: relative
        }
    </style>
    <style id='wp-block-columns-inline-css' type='text/css'>
        .wp-block-columns {
            align-items: normal !important;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap !important
        }

        @media (min-width:782px) {
            .wp-block-columns {
                flex-wrap: nowrap !important
            }
        }

        .wp-block-columns.are-vertically-aligned-top {
            align-items: flex-start
        }

        .wp-block-columns.are-vertically-aligned-center {
            align-items: center
        }

        .wp-block-columns.are-vertically-aligned-bottom {
            align-items: flex-end
        }

        @media (max-width:781px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (min-width:782px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 0;
                flex-grow: 1
            }

            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
                flex-grow: 0
            }
        }

        .wp-block-columns.is-not-stacked-on-mobile {
            flex-wrap: nowrap !important
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
            flex-basis: 0;
            flex-grow: 1
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }

        :where(.wp-block-columns) {
            margin-bottom: 1.75em
        }

        :where(.wp-block-columns.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-column {
            flex-grow: 1;
            min-width: 0;
            overflow-wrap: break-word;
            word-break: break-word
        }

        .wp-block-column.is-vertically-aligned-top {
            align-self: flex-start
        }

        .wp-block-column.is-vertically-aligned-center {
            align-self: center
        }

        .wp-block-column.is-vertically-aligned-bottom {
            align-self: flex-end
        }

        .wp-block-column.is-vertically-aligned-stretch {
            align-self: stretch
        }

        .wp-block-column.is-vertically-aligned-bottom,
        .wp-block-column.is-vertically-aligned-center,
        .wp-block-column.is-vertically-aligned-top {
            width: 100%
        }
    </style>
    <link rel='stylesheet' id='qi-blocks-image-gallery-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/image-gallery.css?ver=6.7.1'
        type='text/css' media='all' />
    <style id='wp-block-image-inline-css' type='text/css'>
        .wp-block-image a {
            display: inline-block
        }

        .wp-block-image img {
            box-sizing: border-box;
            height: auto;
            max-width: 100%;
            vertical-align: bottom
        }

        @media (prefers-reduced-motion:no-preference) {
            .wp-block-image img.hide {
                visibility: hidden
            }

            .wp-block-image img.show {
                animation: show-content-image .4s
            }
        }

        .wp-block-image[style*=border-radius] img,
        .wp-block-image[style*=border-radius]>a {
            border-radius: inherit
        }

        .wp-block-image.has-custom-border img {
            box-sizing: border-box
        }

        .wp-block-image.aligncenter {
            text-align: center
        }

        .wp-block-image.alignfull a,
        .wp-block-image.alignwide a {
            width: 100%
        }

        .wp-block-image.alignfull img,
        .wp-block-image.alignwide img {
            height: auto;
            width: 100%
        }

        .wp-block-image .aligncenter,
        .wp-block-image .alignleft,
        .wp-block-image .alignright,
        .wp-block-image.aligncenter,
        .wp-block-image.alignleft,
        .wp-block-image.alignright {
            display: table
        }

        .wp-block-image .aligncenter>figcaption,
        .wp-block-image .alignleft>figcaption,
        .wp-block-image .alignright>figcaption,
        .wp-block-image.aligncenter>figcaption,
        .wp-block-image.alignleft>figcaption,
        .wp-block-image.alignright>figcaption {
            caption-side: bottom;
            display: table-caption
        }

        .wp-block-image .alignleft {
            float: left;
            margin: .5em 1em .5em 0
        }

        .wp-block-image .alignright {
            float: right;
            margin: .5em 0 .5em 1em
        }

        .wp-block-image .aligncenter {
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-image :where(figcaption) {
            margin-bottom: 1em;
            margin-top: .5em
        }

        .wp-block-image.is-style-circle-mask img {
            border-radius: 9999px
        }

        @supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none) {
            .wp-block-image.is-style-circle-mask img {
                border-radius: 0;
                -webkit-mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-mode: alpha;
                -webkit-mask-position: center;
                mask-position: center;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat;
                -webkit-mask-size: contain;
                mask-size: contain
            }
        }

        :root :where(.wp-block-image.is-style-rounded img, .wp-block-image .is-style-rounded img) {
            border-radius: 9999px
        }

        .wp-block-image figure {
            margin: 0
        }

        .wp-lightbox-container {
            display: flex;
            flex-direction: column;
            position: relative
        }

        .wp-lightbox-container img {
            cursor: zoom-in
        }

        .wp-lightbox-container img:hover+button {
            opacity: 1
        }

        .wp-lightbox-container button {
            align-items: center;
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            backdrop-filter: blur(16px) saturate(180%);
            background-color: #5a5a5a40;
            border: none;
            border-radius: 4px;
            cursor: zoom-in;
            display: flex;
            height: 20px;
            justify-content: center;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: 16px;
            text-align: center;
            top: 16px;
            transition: opacity .2s ease;
            width: 20px;
            z-index: 100
        }

        .wp-lightbox-container button:focus-visible {
            outline: 3px auto #5a5a5a40;
            outline: 3px auto -webkit-focus-ring-color;
            outline-offset: 3px
        }

        .wp-lightbox-container button:hover {
            cursor: pointer;
            opacity: 1
        }

        .wp-lightbox-container button:focus {
            opacity: 1
        }

        .wp-lightbox-container button:focus,
        .wp-lightbox-container button:hover,
        .wp-lightbox-container button:not(:hover):not(:active):not(.has-background) {
            background-color: #5a5a5a40;
            border: none
        }

        .wp-lightbox-overlay {
            box-sizing: border-box;
            cursor: zoom-out;
            height: 100vh;
            left: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            visibility: hidden;
            width: 100%;
            z-index: 100000
        }

        .wp-lightbox-overlay .close-button {
            align-items: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            min-height: 40px;
            min-width: 40px;
            padding: 0;
            position: absolute;
            right: calc(env(safe-area-inset-right) + 16px);
            top: calc(env(safe-area-inset-top) + 16px);
            z-index: 5000000
        }

        .wp-lightbox-overlay .close-button:focus,
        .wp-lightbox-overlay .close-button:hover,
        .wp-lightbox-overlay .close-button:not(:hover):not(:active):not(.has-background) {
            background: none;
            border: none
        }

        .wp-lightbox-overlay .lightbox-image-container {
            height: var(--wp--lightbox-container-height);
            left: 50%;
            overflow: hidden;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transform-origin: top left;
            width: var(--wp--lightbox-container-width);
            z-index: 9999999999
        }

        .wp-lightbox-overlay .wp-block-image {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            height: 100%;
            justify-content: center;
            margin: 0;
            position: relative;
            transform-origin: 0 0;
            width: 100%;
            z-index: 3000000
        }

        .wp-lightbox-overlay .wp-block-image img {
            height: var(--wp--lightbox-image-height);
            min-height: var(--wp--lightbox-image-height);
            min-width: var(--wp--lightbox-image-width);
            width: var(--wp--lightbox-image-width)
        }

        .wp-lightbox-overlay .wp-block-image figcaption {
            display: none
        }

        .wp-lightbox-overlay button {
            background: none;
            border: none
        }

        .wp-lightbox-overlay .scrim {
            background-color: #fff;
            height: 100%;
            opacity: .9;
            position: absolute;
            width: 100%;
            z-index: 2000000
        }

        .wp-lightbox-overlay.active {
            animation: turn-on-visibility .25s both;
            visibility: visible
        }

        .wp-lightbox-overlay.active img {
            animation: turn-on-visibility .35s both
        }

        .wp-lightbox-overlay.show-closing-animation:not(.active) {
            animation: turn-off-visibility .35s both
        }

        .wp-lightbox-overlay.show-closing-animation:not(.active) img {
            animation: turn-off-visibility .25s both
        }

        @media (prefers-reduced-motion:no-preference) {
            .wp-lightbox-overlay.zoom.active {
                animation: none;
                opacity: 1;
                visibility: visible
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container {
                animation: lightbox-zoom-in .4s
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container img {
                animation: none
            }

            .wp-lightbox-overlay.zoom.active .scrim {
                animation: turn-on-visibility .4s forwards
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) {
                animation: none
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container {
                animation: lightbox-zoom-out .4s
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container img {
                animation: none
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .scrim {
                animation: turn-off-visibility .4s forwards
            }
        }

        @keyframes show-content-image {
            0% {
                visibility: hidden
            }

            99% {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes turn-on-visibility {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes turn-off-visibility {
            0% {
                opacity: 1;
                visibility: visible
            }

            99% {
                opacity: 0;
                visibility: visible
            }

            to {
                opacity: 0;
                visibility: hidden
            }
        }

        @keyframes lightbox-zoom-in {
            0% {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale))
            }

            to {
                transform: translate(-50%, -50%) scale(1)
            }
        }

        @keyframes lightbox-zoom-out {
            0% {
                transform: translate(-50%, -50%) scale(1);
                visibility: visible
            }

            99% {
                visibility: visible
            }

            to {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));
                visibility: hidden
            }
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }
    </style>
    <style id='core-block-supports-inline-css' type='text/css'>
        .wp-container-core-group-is-layout-1> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: 280px;
            margin-left: 0 !important;
            margin-right: auto !important;
        }

        .wp-container-core-group-is-layout-1>.alignwide {
            max-width: 280px;
        }

        .wp-container-core-group-is-layout-1 .alignfull {
            max-width: none;
        }

        .wp-container-core-columns-is-layout-1 {
            flex-wrap: nowrap;
        }
    </style>
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://bridge510.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.20'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        rs-static-layers {
            z-index: 100
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows {
            cursor: pointer;
            background: #fff;
            width: 70px;
            height: 70px;
            position: absolute;
            display: block;
            z-index: 100;
            transition: background-color 0.3s ease;
            -webkit-transition: background-color 0.3s ease;
            -moz-transition: background-color 0.3s ease
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows:before {
            font-family: 'ElegantIcons';
            font-size: 30px;
            color: #12192d;
            display: block;
            line-height: 70px;
            text-align: center;
            transition: color 0.3s ease;
            -webkit-transition: color 0.3s ease;
            -moz-transition: color 0.3s ease
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-leftarrow:before {
            content: "\34";
            margin-left: -3px
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-rightarrow:before {
            content: "\35";
            margin-right: -3px
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.rs-touchhover {
            background-color: #ff5e14
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.rs-touchhover:before {
            color: #fff
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-rightarrow {
            background-color: #ff5e14
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-rightarrow:before {
            color: #fff
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-leftarrow.rs-touchhover+.tp-rightarrow {
            background-color: #fff
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tparrows.tp-leftarrow.rs-touchhover+.tp-rightarrow:before {
            color: #12192d
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.tp-bullets {}

        #rev_slider_4_1_wrapper .wilmer-navigation.tp-bullets:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            box-sizing: content-box;
            border-radius: 50%
        }

        #rev_slider_4_1_wrapper .wilmer-navigation .tp-bullet {
            width: 7px;
            height: 7px;
            position: absolute;
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease
        }

        #rev_slider_4_1_wrapper .wilmer-navigation .tp-bullet {
            background-color: #00235a
        }

        #rev_slider_4_1_wrapper .wilmer-navigation .tp-bullet.rs-touchhover,
        #rev_slider_4_1_wrapper .wilmer-navigation .tp-bullet.selected {
            transform: scale(1.58)
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.mkdf-light-navigation .tp-bullet {
            background-color: #fff
        }

        #rev_slider_4_1_wrapper .wilmer-navigation.mkdf-dark-navigation .tp-bullet {
            background-color: #00235a
        }
    </style>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.2"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/bridge510.qodeinteractive.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.2"
        id="contact-form-7-js"></script>
    <script type="text/javascript" id="qi-blocks-main-js-extra">
        /* <![CDATA[ */
        var qiBlocks = {
            "vars": {
                "arrowLeftIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                "arrowRightIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                "closeIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.js?ver=6.7.1"
        id="qi-blocks-main-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/js/plugins/fslightbox/fslightbox.min.js?ver=6.7.1"
        id="fslightbox-js"></script>
    <script type="text/javascript"
        src="https://toolbar.qodeinteractive.com/_qode_toolbar/assets/js/qode-demos-modules.js?ver=6.7.1"
        id="qode_demos_js-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.20"
        defer async id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.20"
        defer async id="revmin-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.2.1"
        id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/bridge510.qodeinteractive.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.2.1"
        id="wc-add-to-cart-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.2.1"
        id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.2.1"
        id="woocommerce-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js">
    </script>
    <script type="text/javascript" id="qi-addons-for-elementor-script-js-extra">
        /* <![CDATA[ */
        var qodefQiAddonsGlobal = {
            "vars": {
                "adminBarHeight": 0,
                "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.7.1"
        id="qi-addons-for-elementor-script-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/ui/tabs.min.js?ver=1.13.3" id="jquery-ui-tabs-js">
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.3"
        id="jquery-ui-accordion-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/doubletaptogo.js?ver=6.7.1"
        id="doubleTapToGo-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/modernizr.min.js?ver=6.7.1"
        id="modernizr-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.appear.js?ver=6.7.1"
        id="appear-js"></script>
    <script type="text/javascript" src="https://bridge510.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2"
        id="hoverIntent-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.prettyPhoto.js?ver=6.7.1"
        id="prettyphoto-js"></script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        /* <![CDATA[ */
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.7.1"
        id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.7.1"
        id="wp-mediaelement-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.waitforimages.js?ver=6.7.1"
        id="waitforimages-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/jquery/jquery.form.min.js?ver=4.3.0" id="jquery-form-js">
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/waypoints.min.js?ver=6.7.1"
        id="waypoints-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.easing.1.3.js?ver=6.7.1"
        id="easing-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.mousewheel.min.js?ver=6.7.1"
        id="mousewheel-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/masonry/assets/plugins/isotope.pkgd.min.js?ver=6.7.1"
        id="isotope-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/skrollr.js?ver=6.7.1"
        id="skrollr-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/default_dynamic.js?ver=1708591150"
        id="bridge-default-dynamic-js"></script>
    <script type="text/javascript" id="bridge-default-js-extra">
        /* <![CDATA[ */
        var QodeAdminAjax = {
            "ajaxurl": "https:\/\/bridge510.qodeinteractive.com\/wp-admin\/admin-ajax.php"
        };
        var qodeGlobalVars = {
            "vars": {
                "qodeAddingToCartLabel": "Adding to Cart...",
                "page_scroll_amount_for_sticky": "",
                "commentSentLabel": "Comment has been sent!"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/default.min.js?ver=6.7.1"
        id="bridge-default-js"></script>
    <script type="text/javascript" src="https://bridge510.qodeinteractive.com/wp-includes/js/comment-reply.min.js?ver=6.7.1"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/woocommerce.min.js?ver=6.7.1"
        id="bridge-woocommerce-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.8.2.1"
        id="select2-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.nicescroll.min.js?ver=6.7.1"
        id="niceScroll-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/bridge-core/modules/shortcodes/assets/js/nice-scroll-part.min.js?ver=6.7.1"
        id="qode-nice-scroll-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/icon-with-text-script.js?ver=6.7.1"
        id="qi-blocks-icon-with-text-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.8.2.1"
        id="flexslider-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.fitvids.js?ver=6.7.1"
        id="fitvids-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.touchSwipe.min.js?ver=6.7.1"
        id="touchSwipe-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.min.js?ver=6.7.1"
        id="carouFredSel-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/bridge-core/modules/shortcodes/assets/js/portfolio-slider-part.min.js?ver=6.7.1"
        id="qode-portfolio-slider-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/5.4.5/swiper.min.js?ver=6.7.1"
        id="swiper-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/easypiechart.js?ver=6.7.1"
        id="easyPieChart-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/js/plugins/countTo.js?ver=6.7.1"
        id="countTo-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/bridge-core/modules/shortcodes/assets/js/pie-chart-part.min.js?ver=6.7.1"
        id="qode-pie-chart-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.19.0"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.19.0"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.19.0",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "block_editor_assets_optimize": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_image_loading_optimization": true,
                "e_global_styleguide": true
            },
            "urls": {
                "assets": "https:\/\/bridge510.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet",
                    "viewport_laptop"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 6625,
                "title": "Bridge%20%7C%20Industrial%20Construction",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.19.0"
        id="elementor-frontend-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://bridge510.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.7.1"
        id="qi-addons-for-elementor-elementor-js"></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi4;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider41"] = {
            once: RS_MODULES.modules["revslider41"] !== undefined ? RS_MODULES.modules["revslider41"].once : undefined,
            init: function() {
                window.revapi4 = window.revapi4 === undefined || window.revapi4 === null || window.revapi4
                    .length === 0 ? document.getElementById("rev_slider_4_1") : window.revapi4;
                if (window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length == 0) {
                    window.revapi4initTry = window.revapi4initTry === undefined ? 0 : window.revapi4initTry + 1;
                    if (window.revapi4initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider41"].init()
                    });
                    return;
                }
                window.revapi4 = jQuery(window.revapi4);
                if (window.revapi4.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_4_1");
                    return;
                }
                revapi4.revolutionInit({
                    revapi: "revapi4",
                    DPR: "dpr",
                    sliderLayout: "fullscreen",
                    visibilityLevels: "1920,1600,1025,600",
                    gridwidth: "1300,1100,778,300",
                    gridheight: "1100,645,650,600",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "1100,645,650,600",
                    responsiveLevels: "1920,1600,1025,600",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        mouseScrollNavigation: false,
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        arrows: {
                            enable: true,
                            tmp: "<div class=\"wilmer-rev-navigation\"></div>",
                            style: "wilmer-navigation",
                            hide_onmobile: true,
                            hide_under: 768,
                            left: {
                                v_align: "bottom",
                                h_offset: 0
                            },
                            right: {
                                h_align: "left",
                                v_align: "bottom",
                                h_offset: 70
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "wilmer-navigation",
                            v_offset: 30,
                            space: 12
                        }
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false,
                        visible_area: "20%"
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
                var api = revapi4.bind("revolution.slide.onbeforeswap", function(e, data) {
                    setTimeout(function() {
                        jQuery('.wilmer-navigation').removeClass(
                            'mkdf-light-navigation mkdf-dark-navigation').addClass(
                            'mkdf-' + api.find('lirs-slide').eq(data.nextslide.index()).attr(
                                'data-color') + '-navigation'
                        );
                    }, 100);
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
</body>

</html>
