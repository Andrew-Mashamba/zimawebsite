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
    <link rel='stylesheet' id='bridge-qode-dripicons-css'
        href='https://bridge510.qodeinteractive.com/wp-content/themes/bridge/css/dripicons/dripicons.css?ver=6.7.1'
        type='text/css' media='all' />
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



    <section class="side_menu right  side_area_alignment_left">
        <a href="#" target="_self" class="close_side_menu qode-side-menu-close-svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="close-icon" transform="translate(-1731 -161)">
                    <rect id="background" width="70" height="70" transform="translate(1731 161)"
                        fill="#ff5e14" />
                    <g id="close-icon-2" data-name="close-icon" transform="translate(-0.071 0.929)">
                        <rect id="_1" data-name="1" width="2" height="18"
                            transform="translate(1759 189.414) rotate(-45)" fill="#fff" />
                        <rect id="_2" data-name="2" width="2" height="18"
                            transform="translate(1760.414 202.143) rotate(-135)" fill="#fff" />
                    </g>
                </g>
            </svg>
        </a>
        <div id="block-81" class="widget widget_block posts_holder">
            <h4 class="wp-block-heading has-white-color has-text-color has-link-color">Quick contact info</h4>
        </div>
        <div id="block-82" class="widget widget_block posts_holder">
            <p style="margin-top: -30px;">
                You can reach us using the contact details below.
                Feel free to get in touch through the provided contacts.
                Connect with us via the following contact information.
            </p>
        </div>
        <div id="block-77" class="widget widget_block posts_holder">


            <div class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-cd95ab54">
                <div
                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                    <div class="qodef-m-icon-wrapper"><a href="https://bridge510.qodeinteractive.com/contact-us/">
                            <div class="qodef-m-icon-holder"><svg xml:space="preserve"
                                    style="enable-background:new 0 0 16 16" height="20" width="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.4 4.9c-.8-2-2.3-3.4-4.3-4.3-2-.9-4.3-.9-6.3 0S1.4 2.9.5 4.9C.2 5.8 0 6.9 0 8s.2 2.2.6 3.1c.9 2 2.3 3.4 4.3 4.3 1 .4 2 .6 3.1.6s2.1-.2 3.1-.6c2-.8 3.4-2.3 4.3-4.3.4-1 .6-2.1.6-3.1 0-1.1-.2-2.1-.6-3.1zM14.7 8c0 1.2-.3 2.3-.9 3.4-.6 1-1.4 1.8-2.5 2.4-1 .6-2.2.9-3.4.9-.9 0-1.8-.2-2.6-.5-.8-.4-1.6-.8-2.1-1.4-.6-.6-1.1-1.3-1.4-2.1-.3-.9-.5-1.8-.5-2.7 0-1.2.3-2.3.9-3.4.6-1 1.4-1.8 2.4-2.4 1-.6 2.1-.9 3.4-.9s2.3.3 3.4.9c1 .6 1.9 1.4 2.5 2.4.5 1.1.8 2.2.8 3.4z"
                                        class="st0"></path>
                                    <path
                                        d="M8.7 7.8V3.5c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v4.6c0 .2 0 .4.2.5l2.6 2.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9L8.7 7.8z"
                                        class="st0"></path>
                                </svg></div>
                        </a></div>
                    <div class="qodef-m-content">
                        <div class="qodef-m-text">Mon - Fri 8:00 - 17:00,<br> Sunday - CLOSED</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="block-78" class="widget widget_block posts_holder">
            <div class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-fbd63e10 qodef-width--custom"
                data-width="240px">
                <div
                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                    <div class="qodef-m-icon-wrapper"><a href="https://bridge510.qodeinteractive.com/contact-us/">
                            <div class="qodef-m-icon-holder"><svg xml:space="preserve"
                                    style="enable-background:new 0 0 13 16" viewBox="0 0 13 16" height="18"
                                    width="15" y="0" x="0" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                    <style>
                                        .st0 {
                                            fill: #001659
                                        }
                                    </style>
                                    <path
                                        d="M11.8 2.8C10.6 1 8.7 0 6.5 0 4.3 0 2.4 1 1.2 2.8 0 4.6-.3 6.8.4 8.8c.2.5.5 1.1.9 1.6L6 15.8c.1.1.3.2.5.2s.4-.1.5-.2l4.6-5.4c.4-.5.7-1 .9-1.6.8-2 .6-4.2-.7-6zm-.4 5.5c-.1.4-.4.8-.7 1.2l-4.2 4.9-4.2-4.9c-.3-.4-.5-.8-.7-1.2-.6-1.6-.3-3.4.6-4.8 1-1.4 2.5-2.2 4.3-2.2s3.3.8 4.3 2.2c.9 1.4 1.2 3.2.6 4.8z"
                                        class="st0"></path>
                                    <path
                                        d="M6.5 3.3c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2c1.8 0 3.2-1.4 3.2-3.2S8.3 3.3 6.5 3.3zm1.9 3.2c0 1-.8 1.9-1.9 1.9-1 0-1.9-.8-1.9-1.9s.8-1.9 1.9-1.9c1 0 1.9.8 1.9 1.9z"
                                        class="st0"></path>
                                </svg></div>
                        </a></div>
                    <div class="qodef-m-content">
                        <div class="qodef-m-text"><a
                                href="https://www.google.com/maps/place/7200-7298+Colonial+Rd,+Brooklyn,+NY+11209,+USA/@40.6344539,-74.0331523,18z/data=!3m1!4b1!4m5!3m4!1s0x89c24ff836cd2eb3:0xdd6e3e3f4289d8a2!8m2!3d40.6344527!4d-74.0324825?_ga=2.155907067.1135423460.1706102734-371520364.1706102734"
                                target="_blank" rel="noreferrer noopener">Arusha International Conference Center
                                (AICC), Fifth Floor , Serengeti Wing</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="block-87" class="widget widget_block posts_holder">
            <div class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-afd73b6e">
                <div
                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                    <div class="qodef-m-icon-wrapper"><a href="https://bridge510.qodeinteractive.com/contact-us/">
                            <div class="qodef-m-icon-holder"><svg xml:space="preserve"
                                    style="enable-background:new 0 0 16 16" viewBox="0 0 16 16" height="18"
                                    width="18" y="0" x="0" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                    <style>
                                        .st0 {
                                            fill: #12192d
                                        }
                                    </style>
                                    <path
                                        d="M12.5 6.9c-.3 0-.6-.2-.6-.5-.2-1.2-1.1-2-2.3-2.3-.3-.1-.5-.4-.5-.8.1-.3.4-.5.8-.5.8.2 1.5.6 2.1 1.2.6.6 1 1.3 1.1 2.1.1.4-.2.7-.5.8h-.1zM15.4 6.9c-.3 0-.6-.2-.6-.6-.3-2.7-2.4-4.7-5-5-.4 0-.6-.4-.6-.7 0-.4.3-.6.6-.6 1.6.2 3 .9 4.2 2 1.1 1.1 1.8 2.6 2 4.2 0 .3-.2.6-.6.7zM13.2 16H13c-2.3-.2-4.5-1-6.4-2.3-1.8-1.1-3.3-2.6-4.4-4.4C1 7.4.2 5.2 0 2.9-.1 1.8.7.8 1.9.7H4.2c1 0 1.9.7 2.1 1.8.1.6.2 1.2.5 1.8.2.8 0 1.6-.6 2.2l-.5.5c.8 1.3 2 2.5 3.3 3.3l.5-.5c.6-.6 1.4-.7 2.2-.5.6.2 1.2.4 1.8.5 1 .1 1.8 1 1.8 2.1V14c0 1.1-.9 2-2.1 2zm0-1.3c.5 0 .8-.3.8-.8v-2.1c0-.4-.3-.7-.7-.8-.7-.1-1.4-.3-2.1-.5-.3-.1-.6 0-.8.2l-.9.9c-.2.2-.5.2-.8.1-1.9-1.1-3.4-2.6-4.5-4.5-.1-.2 0-.5.2-.7l.9-.9c.2-.3.3-.6.2-.8-.3-.7-.5-1.4-.6-2.2 0-.3-.3-.6-.7-.6H2c-.4 0-.7.4-.7.8.2 2.1.9 4.1 2.1 5.8 1 1.6 2.4 3 4 4 1.7 1.2 3.7 1.9 5.8 2.1z"
                                        class="st0"></path>
                                </svg></div>
                        </a></div>
                    <div class="qodef-m-content">
                        <div class="qodef-m-text"><a href="tel:012112345678901">
                                + (255) 0800 258 723 </a><br>
                            <a href="tel:012112345678902">+ (255) 0800 258 723</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="block-88" class="widget widget_block posts_holder">
            <div class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-a82857b7">
                <div
                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                    <div class="qodef-m-icon-wrapper"><a href="https://bridge510.qodeinteractive.com/contact-us/">
                            <div class="qodef-m-icon-holder"><svg viewBox="0 0 16.3 16.3" height="16.3"
                                    width="16.3" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#001659" transform="translate(0)"
                                        d="M.834,11.734A8.08,8.08,0,0,1,.7,4.856,8.057,8.057,0,0,1,5.855.325,8.328,8.328,0,0,1,8.15,0a8.132,8.132,0,0,1,8,6.655,5.867,5.867,0,0,1-.139,3.163,2.836,2.836,0,0,1-2.4,2.082,4.058,4.058,0,0,1-.462.028,3.243,3.243,0,0,1-2.676-1.388l-.02-.026a3.405,3.405,0,0,1-2.763,1.543,3.652,3.652,0,0,1-.674-.066A3.341,3.341,0,0,1,4.36,9.41,4.175,4.175,0,0,1,4.4,6.937a4.1,4.1,0,0,1,1.392-2,3.244,3.244,0,0,1,4.474.415c.011-.061.021-.12.031-.177a.683.683,0,0,1,.766-.616.689.689,0,0,1,.463.26.762.762,0,0,1,.135.572c-.1.7-.2,1.411-.3,2.1-.041.292-.084.583-.125.875A1.862,1.862,0,0,0,11.7,9.836a2.006,2.006,0,0,0,1.483.706,1.72,1.72,0,0,0,.469-.066,1.52,1.52,0,0,0,.987-.96A3.9,3.9,0,0,0,14.857,7.4,6.629,6.629,0,0,0,11.44,2.252a6.609,6.609,0,0,0-3.265-.869,6.762,6.762,0,0,0-1.3,13.4,7.05,7.05,0,0,0,1.31.126,6.729,6.729,0,0,0,3.4-.94,1.088,1.088,0,0,1,.6-.155.624.624,0,0,1,.561.554.681.681,0,0,1-.338.723,7.88,7.88,0,0,1-2.406,1,8.29,8.29,0,0,1-1.86.212A8.136,8.136,0,0,1,.834,11.734ZM6.568,6.1a2.827,2.827,0,0,0-.437,3.8,1.873,1.873,0,0,0,1.448.764,2.023,2.023,0,0,0,1.242-.434,2.852,2.852,0,0,0,.6-3.7,1.917,1.917,0,0,0-1.587-.905A2.014,2.014,0,0,0,6.568,6.1Z"
                                        id="mail-icon"></path>
                                </svg>
                            </div>
                        </a></div>
                    <div class="qodef-m-content">
                        <div class="qodef-m-text"><a
                                href="/cdn-cgi/l/email-protection#d1b3a3b8b5b6b4e4e0e191a0beb5b4ffb2bebc">
                                <span class="__cf_email__"
                                    data-cfemail="4426362d20232171757404352b20216a272b29">info@vftz.co.tz</span></a><br>
                            <a href="/cdn-cgi/l/email-protection#e280908b868587d7d3d2a2938d8687cc818d8f"><span
                                    class="__cf_email__"
                                    data-cfemail="0c6e7e65686b694c69746d617c6069226f6361">info@vftz.co.tz</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><span class='q_social_icon_holder square_social' data-color=#fff data-hover-background-color=#ff5e14
            data-hover-border-color=#ff5e14><a itemprop='url' href='https://www.facebook.com/QodeInteractive/'
                target='_blank'><span class='fa-stack '
                    style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;margin: 0;font-size: 31px;'><i
                        class="qode_icon_font_awesome fa fa-facebook "
                        style="color: #fff;font-size: 18px;"></i></span></a></span><span
            class='q_social_icon_holder square_social' data-color=#fff data-hover-background-color=#ff5e14
            data-hover-border-color=#ff5e14><a itemprop='url' href='https://www.pinterest.com/qodeinteractive'
                target='_blank'><span class='fa-stack '
                    style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;margin: 0;font-size: 31px;'><i
                        class="qode_icon_font_awesome fa fa-pinterest-p "
                        style="color: #fff;font-size: 18px;"></i></span></a></span><span
            class='q_social_icon_holder square_social' data-color=#fff data-hover-background-color=#ff5e14
            data-hover-border-color=#ff5e14><a itemprop='url' href='https://twitter.com/QodeInteractive'
                target='_blank'><span class='fa-stack '
                    style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;margin: 0;font-size: 31px;'><i
                        class="qode_icon_font_awesome fa fa-twitter "
                        style="color: #fff;font-size: 18px;"></i></span></a></span><span
            class='q_social_icon_holder square_social' data-color=#fff data-hover-background-color=#ff5e14
            data-hover-border-color=#ff5e14><a itemprop='url' href='https://dribbble.com/qodeinteractive'
                target='_blank'><span class='fa-stack '
                    style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;margin: 0;font-size: 31px;'><i
                        class="qode_icon_font_awesome fa fa-dribbble "
                        style="color: #fff;font-size: 18px;"></i></span></a></span>
    </section>

    <div class="wrapper">
        <div class="wrapper_inner">


            <!-- Google Analytics start -->
            <!-- Google Analytics end -->


            <header class="   has_top scroll_header_top_area  stick scrolled_not_transparent with_border page_header">
                <div class="header_inner clearfix">
                    <div class="header_top_bottom_holder">
                        <div class="header_top clearfix" style=''>
                            <div class="left">
                                <div class="inner">
                                    <div class="header-widget widget_block header-left-widget">
                                        <div
                                            class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-062fe6de">
                                            <div
                                                class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                <div class="qodef-m-icon-wrapper"><a href="tel:+12312345678901">
                                                        <div class="qodef-m-icon-holder"><svg xml:space="preserve"
                                                                style="enable-background:new 0 0 16 16"
                                                                viewBox="0 0 16 16" height="18" width="18"
                                                                y="0" x="0" id="Layer_1"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <style>
                                                                    .st0 {
                                                                        fill: #12192d
                                                                    }
                                                                </style>
                                                                <path
                                                                    d="M12.5 6.9c-.3 0-.6-.2-.6-.5-.2-1.2-1.1-2-2.3-2.3-.3-.1-.5-.4-.5-.8.1-.3.4-.5.8-.5.8.2 1.5.6 2.1 1.2.6.6 1 1.3 1.1 2.1.1.4-.2.7-.5.8h-.1zM15.4 6.9c-.3 0-.6-.2-.6-.6-.3-2.7-2.4-4.7-5-5-.4 0-.6-.4-.6-.7 0-.4.3-.6.6-.6 1.6.2 3 .9 4.2 2 1.1 1.1 1.8 2.6 2 4.2 0 .3-.2.6-.6.7zM13.2 16H13c-2.3-.2-4.5-1-6.4-2.3-1.8-1.1-3.3-2.6-4.4-4.4C1 7.4.2 5.2 0 2.9-.1 1.8.7.8 1.9.7H4.2c1 0 1.9.7 2.1 1.8.1.6.2 1.2.5 1.8.2.8 0 1.6-.6 2.2l-.5.5c.8 1.3 2 2.5 3.3 3.3l.5-.5c.6-.6 1.4-.7 2.2-.5.6.2 1.2.4 1.8.5 1 .1 1.8 1 1.8 2.1V14c0 1.1-.9 2-2.1 2zm0-1.3c.5 0 .8-.3.8-.8v-2.1c0-.4-.3-.7-.7-.8-.7-.1-1.4-.3-2.1-.5-.3-.1-.6 0-.8.2l-.9.9c-.2.2-.5.2-.8.1-1.9-1.1-3.4-2.6-4.5-4.5-.1-.2 0-.5.2-.7l.9-.9c.2-.3.3-.6.2-.8-.3-.7-.5-1.4-.6-2.2 0-.3-.3-.6-.7-.6H2c-.4 0-.7.4-.7.8.2 2.1.9 4.1 2.1 5.8 1 1.6 2.4 3 4 4 1.7 1.2 3.7 1.9 5.8 2.1z"
                                                                    class="st0"></path>
                                                            </svg></div>
                                                    </a></div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title"><a href="tel:+12312345678901"><span
                                                                class="qodef-m-title-text">+(255) 0800 258
                                                                723</span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-widget widget_block header-left-widget">
                                        <div
                                            class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-f8eb94f7">
                                            <div
                                                class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                <div class="qodef-m-icon-wrapper"><a
                                                        href="/cdn-cgi/l/email-protection#a9cbdbc0cdcecce9d8c6cdccc0c7ddccdbc8caddc0dfcc87cac6c4">
                                                        <div class="qodef-m-icon-holder"><svg viewBox="0 0 16.3 16.3"
                                                                height="16.3" width="16.3"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="#001659" transform="translate(0)"
                                                                    d="M.834,11.734A8.08,8.08,0,0,1,.7,4.856,8.057,8.057,0,0,1,5.855.325,8.328,8.328,0,0,1,8.15,0a8.132,8.132,0,0,1,8,6.655,5.867,5.867,0,0,1-.139,3.163,2.836,2.836,0,0,1-2.4,2.082,4.058,4.058,0,0,1-.462.028,3.243,3.243,0,0,1-2.676-1.388l-.02-.026a3.405,3.405,0,0,1-2.763,1.543,3.652,3.652,0,0,1-.674-.066A3.341,3.341,0,0,1,4.36,9.41,4.175,4.175,0,0,1,4.4,6.937a4.1,4.1,0,0,1,1.392-2,3.244,3.244,0,0,1,4.474.415c.011-.061.021-.12.031-.177a.683.683,0,0,1,.766-.616.689.689,0,0,1,.463.26.762.762,0,0,1,.135.572c-.1.7-.2,1.411-.3,2.1-.041.292-.084.583-.125.875A1.862,1.862,0,0,0,11.7,9.836a2.006,2.006,0,0,0,1.483.706,1.72,1.72,0,0,0,.469-.066,1.52,1.52,0,0,0,.987-.96A3.9,3.9,0,0,0,14.857,7.4,6.629,6.629,0,0,0,11.44,2.252a6.609,6.609,0,0,0-3.265-.869,6.762,6.762,0,0,0-1.3,13.4,7.05,7.05,0,0,0,1.31.126,6.729,6.729,0,0,0,3.4-.94,1.088,1.088,0,0,1,.6-.155.624.624,0,0,1,.561.554.681.681,0,0,1-.338.723,7.88,7.88,0,0,1-2.406,1,8.29,8.29,0,0,1-1.86.212A8.136,8.136,0,0,1,.834,11.734ZM6.568,6.1a2.827,2.827,0,0,0-.437,3.8,1.873,1.873,0,0,0,1.448.764,2.023,2.023,0,0,0,1.242-.434,2.852,2.852,0,0,0,.6-3.7,1.917,1.917,0,0,0-1.587-.905A2.014,2.014,0,0,0,6.568,6.1Z"
                                                                    id="mail-icon"></path>
                                                            </svg>
                                                        </div>
                                                    </a></div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title"><a
                                                            href="/cdn-cgi/l/email-protection#1a7868737e7d7f5a6b757e7f73746e7f687b796e736c7f34797577"><span
                                                                class="qodef-m-title-text"><span class="__cf_email__"
                                                                    data-cfemail="82e0f0ebe6e5e7c2f3ede6e7ebecf6e7f0e3e1f6ebf4e7ace1edef">info@vftz.co.tz</span></span></a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-widget widget_block header-left-widget">
                                        <div
                                            class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-63627922">
                                            <div
                                                class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                <div class="qodef-m-icon-wrapper"><a
                                                        href="https://bridge510.qodeinteractive.com/contact-us/">
                                                        <div class="qodef-m-icon-holder"><svg xml:space="preserve"
                                                                style="enable-background:new 0 0 16 16" height="20"
                                                                width="20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15.4 4.9c-.8-2-2.3-3.4-4.3-4.3-2-.9-4.3-.9-6.3 0S1.4 2.9.5 4.9C.2 5.8 0 6.9 0 8s.2 2.2.6 3.1c.9 2 2.3 3.4 4.3 4.3 1 .4 2 .6 3.1.6s2.1-.2 3.1-.6c2-.8 3.4-2.3 4.3-4.3.4-1 .6-2.1.6-3.1 0-1.1-.2-2.1-.6-3.1zM14.7 8c0 1.2-.3 2.3-.9 3.4-.6 1-1.4 1.8-2.5 2.4-1 .6-2.2.9-3.4.9-.9 0-1.8-.2-2.6-.5-.8-.4-1.6-.8-2.1-1.4-.6-.6-1.1-1.3-1.4-2.1-.3-.9-.5-1.8-.5-2.7 0-1.2.3-2.3.9-3.4.6-1 1.4-1.8 2.4-2.4 1-.6 2.1-.9 3.4-.9s2.3.3 3.4.9c1 .6 1.9 1.4 2.5 2.4.5 1.1.8 2.2.8 3.4z"
                                                                    class="st0"></path>
                                                                <path
                                                                    d="M8.7 7.8V3.5c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v4.6c0 .2 0 .4.2.5l2.6 2.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9L8.7 7.8z"
                                                                    class="st0"></path>
                                                            </svg></div>
                                                    </a></div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title"><a
                                                            href="https://bridge510.qodeinteractive.com/contact-us/"><span
                                                                class="qodef-m-title-text">Mon - Fri 8:00 - 17:00,
                                                                Sunday - CLOSED</span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="inner">
                                    <span class='q_social_icon_holder normal_social' data-color=#001659
                                        data-hover-color=#ff5e14><a itemprop='url'
                                            href='https://www.facebook.com/QodeInteractive/' target='_blank'><span
                                                aria-hidden="true"
                                                class="qode_icon_font_elegant social_facebook  simple_social"
                                                style="color: #001659;margin: 0 0 0 0;font-size: 14px;"></span></a></span><span
                                        class='q_social_icon_holder normal_social' data-color=#001659
                                        data-hover-color=#ff5e14><a itemprop='url' href='https://vimeo.com/'
                                            target='_blank'><span aria-hidden="true"
                                                class="qode_icon_font_elegant social_vimeo  simple_social"
                                                style="color: #001659;margin: 0 0 0 6px;font-size: 14px;"></span></a></span><span
                                        class='q_social_icon_holder normal_social' data-color=#001659
                                        data-hover-color=#ff5e14><a itemprop='url'
                                            href='https://twitter.com/qodeinteractive' target='_blank'><span
                                                aria-hidden="true"
                                                class="qode_icon_font_elegant social_twitter  simple_social"
                                                style="color: #001659;margin: 0 21px 0 13px;font-size: 14px;"></span></a></span><span
                                        class='q_social_icon_holder normal_social' data-color=#001659
                                        data-hover-color=#ff5e14><a itemprop='url'
                                            href='https://www.pinterest.com/qodeinteractive' target='_blank'><span
                                                aria-hidden="true"
                                                class="qode_icon_font_elegant social_pinterest  simple_social"
                                                style="color: #001659;margin: 0 17px 0 ;font-size: 14px;"></span></a></span><span
                                        class='q_social_icon_holder normal_social' data-color=#001659
                                        data-hover-color=#ff5e14><a itemprop='url'
                                            href='https://www.linkedin.com/company/qode-themes/' target='_blank'><span
                                                aria-hidden="true"
                                                class="qode_icon_font_elegant social_linkedin  simple_social"
                                                style="color: #001659;margin: 0 14px 0 21px;font-size: 14px;"></span></a></span>
                                </div>
                            </div>
                        </div>

                        <div class="header_bottom clearfix" style=''>
                            <div class="header_inner_left">
                                <div class="mobile_menu_button">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                            viewBox="0 0 70 70">
                                            <g id="menu-opener" transform="translate(-1833 -111)">
                                                <rect id="background" width="70" height="70"
                                                    transform="translate(1833 111)" fill="#f55c00" />
                                                <g id="menu-opener-2" data-name="menu-opener">
                                                    <rect id="_3" data-name="3" width="10"
                                                        height="2" transform="translate(1867 151)"
                                                        fill="#fff" />
                                                    <rect id="_2" data-name="2" width="18"
                                                        height="2" transform="translate(1859 145)"
                                                        fill="#fff" />
                                                    <rect id="_1" data-name="1" width="10"
                                                        height="2" transform="translate(1859 139)"
                                                        fill="#fff" />
                                                </g>
                                            </g>


                                        </svg>
                                    </span>
                                </div>
                                <div class="logo_wrapper">
                                    <div class="q_logo" style="">
                                        <a itemprop="url" href="https://bridge510.qodeinteractive.com/">
                                            <img src="{{ asset('/vf/vflogo.svg') }}" style="height: 70% ; " />
                                            {{-- <img itemprop="image" class="light" src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/img/logo.png" alt="Logo"/> --}}
                                            {{-- <img itemprop="image" class="dark" src="https://bridge510.qodeinteractive.com/wp-content/themes/bridge/img/logo_black.png" alt="Logo"/> --}}
                                            {{-- <img itemprop="image" class="sticky" src="{{asset("/vf/vflogo.svg")}}" alt="Logo"/> --}}
                                            <img itemprop="image" class="mobile"
                                                src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/footer-logo-01.png"
                                                alt="Logo" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header_inner_right">
                                <div class="side_menu_button_wrapper right">
                                    <div class="side_menu_button">

                                        <a class="side_menu_button_link normal qode-side-menu-button-svg"
                                            href="javascript:void(0)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                                viewBox="0 0 70 70">
                                                <g id="menu-opener" transform="translate(-1833 -111)">
                                                    <rect id="background" width="70" height="70"
                                                        transform="translate(1833 111)" fill="#f55c00" />
                                                    <g id="menu-opener-2" data-name="menu-opener">
                                                        <rect id="_3" data-name="3" width="10"
                                                            height="2" transform="translate(1867 151)"
                                                            fill="#fff" />
                                                        <rect id="_2" data-name="2" width="18"
                                                            height="2" transform="translate(1859 145)"
                                                            fill="#fff" />
                                                        <rect id="_1" data-name="1" width="10"
                                                            height="2" transform="translate(1859 139)"
                                                            fill="#fff" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <nav class="main_menu drop_down center">
                                <ul id="menu-main-menu" class="">
                                    <li id="nav-menu-item-7411"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6625 current_page_item active narrow">
                                        <a href="https://bridge510.qodeinteractive.com/" class=" current "><i
                                                class="menu_icon blank fa"></i><span>Home</span><span
                                                class="plus"></span></a></li>
                                    <li id="nav-menu-item-7461"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a
                                            href="https://bridge510.qodeinteractive.com/about-us/" class=""><i
                                                class="menu_icon blank fa"></i><span>About</span><span
                                                class="plus"></span></a></li>
                                    {{-- <li id="nav-menu-item-7412" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="https://bridge510.qodeinteractive.com/blog/" class=""><i class="menu_icon blank fa"></i><span>Blog</span><span class="plus"></span></a></li> --}}
                                    <li id="nav-menu-item-7459"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a
                                            href="https://bridge510.qodeinteractive.com/our-services/"
                                            class=""><i
                                                class="menu_icon blank fa"></i><span>Services</span><span
                                                class="plus"></span></a></li>
                                    <li id="nav-menu-item-7460"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a
                                            href="https://bridge510.qodeinteractive.com/our-team/" class=""><i
                                                class="menu_icon blank fa"></i><span>Team</span><span
                                                class="plus"></span></a></li>
                                    <li id="nav-menu-item-7414"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a
                                            href="https://bridge510.qodeinteractive.com/contact-us/" class=""><i
                                                class="menu_icon blank fa"></i><span>Contact</span><span
                                                class="plus"></span></a></li>
                                </ul>
                            </nav>
                            <nav class="mobile_menu">
                                <ul id="menu-main-menu-1" class="">
                                    <li id="mobile-menu-item-7411"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6625 current_page_item active">
                                        <a href="https://bridge510.qodeinteractive.com/"
                                            class=" current "><span>Home</span></a><span class="mobile_arrow"><i
                                                class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li id="mobile-menu-item-7461"
                                        class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            href="https://bridge510.qodeinteractive.com/about-us/"
                                            class=""><span>About</span></a><span class="mobile_arrow"><i
                                                class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    {{-- <li id="mobile-menu-item-7412" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://bridge510.qodeinteractive.com/blog/" class=""><span>Blog</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li> --}}
                                    <li id="mobile-menu-item-7459"
                                        class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            href="https://bridge510.qodeinteractive.com/our-services/"
                                            class=""><span>Services</span></a><span class="mobile_arrow"><i
                                                class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li id="mobile-menu-item-7460"
                                        class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            href="https://bridge510.qodeinteractive.com/our-team/"
                                            class=""><span>Team</span></a><span class="mobile_arrow"><i
                                                class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li id="mobile-menu-item-7414"
                                        class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            href="https://bridge510.qodeinteractive.com/contact-us/"
                                            class=""><span>Contact</span></a><span class="mobile_arrow"><i
                                                class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </header> <a id="back_to_top" href="#">
                <span class="fa-stack">
                    <i class="qodef-icon-dripicons dripicon dripicons-chevron-up "></i> </span>
            </a>





            <div class="content content_top_margin_none">
                <div class="content_inner  ">
                    <div class="full_width">
                        <div class="full_width_inner">
                            <div data-elementor-type="wp-page" data-elementor-id="6625"
                                class="elementor elementor-6625">
                                <div class="elementor-element elementor-element-22f03b9 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent"
                                    data-id="22f03b9" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-7e6524f elementor-widget elementor-widget-slider_revolution"
                                        data-id="7e6524f" data-element_type="widget"
                                        data-widget_type="slider_revolution.default">
                                        <div class="elementor-widget-container">

                                            <div class="wp-block-themepunch-revslider">
                                                <!-- START Main Home REVOLUTION SLIDER 6.6.20 -->
                                                <p class="rs-p-wp-fix"></p>
                                                <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery"
                                                    style="visibility:hidden;background:transparent;padding:0;background-image:url(https://wilmer.qodeinteractive.com/wp-content/uploads/2019/02/pattern-rev-img-01.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center;">
                                                    <rs-module id="rev_slider_4_1" style=""
                                                        data-version="6.6.20">
                                                        <rs-slides style="overflow: hidden; position: absolute;">
                                                            <rs-slide style="position: absolute;" data-key="rs-8"
                                                                data-title="Slide"
                                                                data-thumb="//bridge510.qodeinteractive.com/wp-content/uploads/revslider/h1-rev-img-011-100x50.jpg"
                                                                data-in="o:0;" data-out="a:false;" data-color="dark">

                                                                <img decoding="async"
                                                                    src="https://www.visionfund.org/sites/default/files/styles/extra_large_landscape/public/2019-10/D385-0200-07.jpg_469632.jpg?itok=YUhMQmZJ"
                                                                    alt="" title="Home"
                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                    data-lazyload="https://www.visionfund.org/sites/default/files/styles/extra_large_landscape/public/2019-10/D385-0200-07.jpg_469632.jpg?itok=YUhMQmZJ"
                                                                    data-no-retina>
                                                                <!--
                                        --><rs-layer id="slider-4-slide-8-layer-1" data-type="text"
                                                                    data-color="#001659"
                                                                    data-xy="xo:-11px,13px,74px,-17px;yo:450px,220px,179px,101px;"
                                                                    data-text="w:normal;s:80,80,80,45;l:80,80,80,45;fw:900,700,700,900;a:inherit;"
                                                                    data-dim="w:558px,634px,634px,350px;h:auto,161px,161px,162px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                    style="z-index:7;font-family:'Yantramanav';">BUILD
                                                                    A BETTER TOMORROW

                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-8-layer-2" data-type="text"
                                                                    data-color="#F9FAFFFF"
                                                                    data-xy="xo:-5px,18px,74px,-15px;yo:627px,396px,353px,212px;"
                                                                    data-text="w:normal;l:30;fw:300;a:inherit;"
                                                                    data-dim="w:453px,446px,368px,258px;h:68px,70px,121px,122px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:500;sp:800;sR:500;"
                                                                    data-frame_999="o:0;st:w;sR:7700;"
                                                                    style="z-index:8;font-family:'Yantramanav';">

                                                                    "A mother of four took loans from VisionFund for
                                                                    farming." </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-8-layer-3" data-type="text"
                                                                    data-color="#F9FAFCFF"
                                                                    data-xy="xo:-5px,20px,77px,-17px;yo:423px,194px,156px,72px;"
                                                                    data-text="w:normal;s:14;l:28;ls:1px;fw:500;a:inherit;"
                                                                    data-dim="w:376px;h:23px;" data-vbility="t,t,t,f"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:8800;sR:7700;"
                                                                    style="z-index:6;font-family:'Yantramanav';text-transform:uppercase;">TANZANIA
                                                                    -
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-8-layer-7" data-type="image"
                                                                    data-xy="xo:-92px,-67px,45px,1px;yo:381px,152px,60px,106px;"
                                                                    data-text="l:22;a:inherit;"
                                                                    data-dim="w:791px,791px,672px,303px;h:120px,120px,102px,46px;"
                                                                    data-vbility="t,t,f,f" data-rsp_bd="off"
                                                                    data-frame_0="x:-50px;"
                                                                    data-frame_1="e:power4.inOut;st:700;sp:800;sR:700;"
                                                                    data-frame_999="o:0;st:w;sR:7500;"
                                                                    style="z-index:5;">
                                                                    {{-- <img fetchpriority="high" decoding="async" src="//bridge510.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="791" height="120" data-lazyload="//bridge510.qodeinteractive.com/wp-content/uploads/2019/02/main-home-rev-slider-img-04.png" data-no-retina> --}}
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-8-layer-12" data-type="text"
                                                                    data-xy="xo:-7px,18px,73px,-15px;yo:720px,469px,470px,362px;"
                                                                    data-text="w:nowrap,nowrap,nowrap,normal;s:16,20,20,20;l:32,22,22,22;ls:0px,0,0,0;a:inherit;"
                                                                    data-dim="w:auto,auto,auto,304px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:900;sp:800;sR:900;"
                                                                    data-frame_999="o:0;st:w;sR:7300;"
                                                                    style="z-index:9;font-family:'Yantramanav';">

                                                                    <a href=" #00d084" target="_self"
                                                                        style="margin: 0 12px 16px 0"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Read more</span>
                                                                    </a>




                                                                    <a href=" " target="_self"
                                                                        style="background-color: #000000FF"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Contact Us</span>
                                                                    </a>


                                                                </rs-layer><!--
            --> </rs-slide>
                                                            <rs-slide style="position: absolute;" data-key="rs-9"
                                                                data-title="Slide"
                                                                data-thumb="//bridge510.qodeinteractive.com/wp-content/uploads/2019/04/main-home-rev-slider-img-02-100x50.jpg"
                                                                data-in="o:0;" data-out="a:false;"
                                                                data-color="light">
                                                                <img decoding="async" src="{{ asset('/vf/mgh.png') }}"
                                                                    alt="" title="Home"
                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                    data-lazyload="{{ asset('/vf/mgh.png') }}"
                                                                    data-no-retina>
                                                                <!--
                                        --><rs-layer id="slider-4-slide-9-layer-1" data-type="text"
                                                                    data-xy="xo:-10px,13px,73px,-19px;yo:449px,220px,181px,102px;"
                                                                    data-text="w:normal;s:80,80,80,45;l:80,80,80,45;fw:900;a:inherit;"
                                                                    data-dim="w:558px,634px,634px,350px;h:auto,161px,161px,162px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                    style="z-index:6;font-family:'Yantramanav';">
                                                                    DRIVING HER DREAMS
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-9-layer-2" data-type="text"
                                                                    data-xy="xo:-5px,19px,73px,-16px;yo:627px,396px,360px,212px;"
                                                                    data-text="w:normal;l:30;fw:300;a:inherit;"
                                                                    data-dim="w:496px,486px,365px,261px;h:68px,70px,93px,122px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:500;sp:800;sR:500;"
                                                                    data-frame_999="o:0;st:w;sR:7700;"
                                                                    style="z-index:7;font-family:'Yantramanav';">


                                                                    Fatuma, 39, a mother of four, used VisionFund loans
                                                                    for farming, repaid easily, and grew her grocery
                                                                    store.
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-9-layer-3" data-type="text"
                                                                    data-xy="xo:-6px,20px,77px,-20px;yo:422px,194px,161px,79px;"
                                                                    data-text="w:normal;s:14;l:28;ls:1px;fw:500;a:inherit;"
                                                                    data-dim="w:376px;h:23px;" data-vbility="t,t,t,f"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                    style="z-index:8;font-family:'Yantramanav';text-transform:uppercase;">TANZANIA
                                                                    -
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-9-layer-7" data-type="image"
                                                                    data-xy="xo:-92px,-67px,44px,1px;yo:381px,152px,89px,106px;"
                                                                    data-text="l:22;a:inherit;"
                                                                    data-dim="w:791px,791px,672px,303px;h:120px,120px,102px,46px;"
                                                                    data-vbility="t,t,f,f" data-rsp_bd="off"
                                                                    data-frame_0="x:-50px;"
                                                                    data-frame_1="e:power4.inOut;st:700;sp:800;sR:700;"
                                                                    data-frame_999="o:0;st:w;sR:7500;"
                                                                    style="z-index:5;">

                                                                    {{-- <img decoding="async" src=" " alt="w" class="tp-rs-img rs-lazyload" width="791" height="120" data-lazyload=" " data-no-retina> --}}


                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-9-layer-12" data-type="text"
                                                                    data-xy="xo:-7px,19px,72px,-16px;yo:720px,472px,476px,365px;"
                                                                    data-text="w:nowrap,nowrap,nowrap,normal;s:16,20,20,20;l:32,22,22,22;ls:0px,0,0,0;a:inherit;"
                                                                    data-dim="w:auto,auto,auto,304px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:900;sp:800;sR:900;"
                                                                    data-frame_999="o:0;st:w;sR:7300;"
                                                                    style="z-index:9;font-family:'Yantramanav';">

                                                                    <a href="https://bridge510.qodeinteractive.com/portfolio_page/kitchen-and-living/"
                                                                        target="_self" style="margin: 0 12px 16px 0"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Read more</span>
                                                                    </a>




                                                                    <a href="https://bridge510.qodeinteractive.com/contact-us/"
                                                                        target="_self"
                                                                        style="background-color: #010101FF"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Contact Us</span>
                                                                    </a>


                                                                </rs-layer><!--
            --> </rs-slide>
                                                            <rs-slide style="position: absolute;" data-key="rs-10"
                                                                data-title="Slide"
                                                                data-thumb="//bridge510.qodeinteractive.com/wp-content/uploads/2019/04/main-home-rev-slider-img-03-100x50.jpg"
                                                                data-in="o:0;" data-out="a:false;">
                                                                <img decoding="async" src="{{ asset('/vf/ls.png') }}"
                                                                    alt="" title="Home"
                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                    data-lazyload="{{ asset('/vf/ls.png') }}"
                                                                    data-no-retina>
                                                                <!--
                                        --><rs-layer id="slider-4-slide-10-layer-1" data-type="text"
                                                                    data-color="#001659"
                                                                    data-xy="xo:-11px,13px,74px,-21px;yo:451px,218px,184px,99px;"
                                                                    data-text="w:normal;s:80,80,80,45;l:80,80,80,45;fw:900;a:inherit;"
                                                                    data-dim="w:591px,634px,634px,350px;h:241px,161px,161px,162px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                    style="z-index:7;font-family:'Yantramanav';">

                                                                    ALWAYS VISION FUND



                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-10-layer-2" data-type="text"
                                                                    data-color="#1C1B1BFF"
                                                                    data-xy="xo:-6px,19px,74px,-17px;yo:628px,395px,360px,211px;"
                                                                    data-text="w:normal;l:30;fw:300;a:inherit;"
                                                                    data-dim="w:491px,490px,370px,262px;h:68px,70px,auto,121px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:500;sp:800;sR:500;"
                                                                    data-frame_999="o:0;st:w;sR:7700;"
                                                                    style="z-index:8;font-family:'Yantramanav';">
                                                                    Incubating More Than Dreams
                                                                    {{-- Lorem ipsum dolor sit amet messa. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. --}}
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-10-layer-3" data-type="text"
                                                                    data-color="#F0F1F6FF"
                                                                    data-xy="xo:-6px,20px,75px,-9px;yo:423px,193px,162px,82px;"
                                                                    data-text="w:normal;s:14;l:28;ls:1px;fw:500;a:inherit;"
                                                                    data-dim="w:376px;h:23px;" data-vbility="t,t,t,f"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:300;sp:800;sR:300;"
                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                    style="z-index:6;font-family:'Yantramanav';text-transform:uppercase;">
                                                                    TANZANIA -
                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-10-layer-7" data-type="image"
                                                                    data-xy="xo:-92px,-67px,44px,1px;yo:382px,151px,79px,106px;"
                                                                    data-text="l:22;a:inherit;"
                                                                    data-dim="w:791px,791px,672px,303px;h:120px,120px,102px,46px;"
                                                                    data-vbility="t,t,f,f" data-rsp_bd="off"
                                                                    data-frame_0="x:-50px;"
                                                                    data-frame_1="e:power4.inOut;st:700;sp:800;sR:700;"
                                                                    data-frame_999="o:0;st:w;sR:7500;"
                                                                    style="z-index:5;">
                                                                    {{-- <img decoding="async" src=" " alt="" class="tp-rs-img rs-lazyload" data-lazyload=" " data-no-retina> --}}


                                                                </rs-layer><!--

                                        --><rs-layer id="slider-4-slide-10-layer-12" data-type="text"
                                                                    data-xy="xo:-9px,18px,72px,-17px;yo:720px,469px,470px,361px;"
                                                                    data-text="w:nowrap,nowrap,nowrap,normal;s:16,20,20,20;l:32,22,22,22;ls:0px,0,0,0;a:inherit;"
                                                                    data-dim="w:auto,auto,auto,304px;"
                                                                    data-rsp_bd="off" data-frame_0="y:50px;"
                                                                    data-frame_1="e:power3.out;st:900;sp:800;sR:900;"
                                                                    data-frame_999="o:0;st:w;sR:7300;"
                                                                    style="z-index:9;font-family:'Yantramanav';">

                                                                    <a href="https://bridge510.qodeinteractive.com/portfolio_page/kitchen-and-living/"
                                                                        target="_self" style="margin: 0 12px 16px 0"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Read more</span>
                                                                    </a>




                                                                    <a href="https://bridge510.qodeinteractive.com/contact-us/"
                                                                        target="_self"
                                                                        style="background-color: #00235A"
                                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                                        <span class="qode-btn-text">Contact Us</span>
                                                                    </a>


                                                                </rs-layer><!--
            --> </rs-slide>
                                                        </rs-slides>

                                                        <rs-static-layers class="rs-stl-visible"><!--

                                        --><rs-layer id="slider-4-slide-4-layer-16" class="rs-layer-static"
                                                                data-type="image" data-xy="x:c;y:b;"
                                                                data-text="l:22;a:inherit;"
                                                                data-dim="w:['1920px','1920px','1920px','1920px'];h:['70px','70px','70px','70px'];"
                                                                data-basealign="slide" data-rsp_o="off"
                                                                data-rsp_bd="off" data-onslides="s:1;"
                                                                data-frame_0="tp:600;" data-frame_1="tp:600;st:0;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:8700;"
                                                                style="z-index:19;"><img decoding="async"
                                                                    src="//bridge510.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                                                    alt="" class="tp-rs-img rs-lazyload"
                                                                    data-lazyload="" data-no-retina>
                                                            </rs-layer><!--
                                --></rs-static-layers>
                                                    </rs-module>
                                                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                                    <script>
                                                        setREVStartSize({
                                                            c: 'rev_slider_4_1',
                                                            rl: [1920, 1600, 1025, 600],
                                                            el: [1100, 645, 650, 600],
                                                            gw: [1300, 1100, 778, 300],
                                                            gh: [1100, 645, 650, 600],
                                                            type: 'standard',
                                                            justify: '',
                                                            layout: 'fullscreen',
                                                            offsetContainer: '',
                                                            offset: '',
                                                            mh: "0"
                                                        });
                                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                                                "revslider41"] !== undefined) {
                                                            window.RS_MODULES.modules["revslider41"].once = false;
                                                            window.revapi4 = undefined;
                                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                        }
                                                    </script>
                                                </rs-module-wrap>
                                                <!-- END REVOLUTION SLIDER -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2b5f965 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="2b5f965" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-35f2665 elementor-widget elementor-widget-text-editor"
                                        data-id="35f2665" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 29-01-2024 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block
                                                }
                                            </style>
                                            <h1>Services</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f44725d e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="f44725d" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-88604d1 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="88604d1" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-c2f1690 elementor-widget elementor-widget-qi_addons_for_elementor_banner"
                                            data-id="c2f1690" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_banner.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="qodef-shortcode qodef-m  qodef-qi-banner qodef-layout--in-box qodef-vertical--middle qodef-horizontal--left qodef-image--hover-zoom ">
                                                    <div class="qodef-m-image">

                                                        <img decoding="async" width="300" height="230"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2023/11/Rectangle-558.png"
                                                            class="attachment-full size-full" alt="s" />
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <div class="qodef-m-content-inner">
                                                            <h6 class="qodef-m-subtitle">


                                                                Explore the services

                                                            </h6>
                                                            <h4 class="qodef-m-title">
                                                                Savings Products:
                                                            </h4>



                                                            <div class="qodef-m-button">
                                                                <a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--filled qodef-type--standard   qodef-icon--right      "
                                                                    href="#" target="_self"> <span
                                                                        class="qodef-m-text"></span> <span
                                                                        class="qodef-m-icon qodef--icon-color-set">
                                                                        <span class="qodef-m-icon-inner"> <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="32" height="32"
                                                                                viewBox="0 0 32 32" fill="#000000">
                                                                                <g>
                                                                                    <path
                                                                                        d="M 9,18L 16,18 l0,7 C 16,25.552, 16.448,26, 17,26S 18,25.552, 18,25L 18,18 l 7,0 C 25.552,18, 26,17.552, 26,17 C 26,16.448, 25.552,16, 25,16L 18,16 L 18,9 C 18,8.448, 17.552,8, 17,8S 16,8.448, 16,9L 16,16 L 9,16 C 8.448,16, 8,16.448, 8,17C 8,17.552, 8.448,18, 9,18z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg> </span> </span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a itemprop="url" href="#" class="qodef-m-banner-link"
                                                        target="_self"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3d9c9c8 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="3d9c9c8" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-7473ad9 elementor-widget elementor-widget-qi_addons_for_elementor_banner"
                                            data-id="7473ad9" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_banner.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="qodef-shortcode qodef-m  qodef-qi-banner qodef-layout--in-box qodef-vertical--middle qodef-horizontal--left qodef-image--hover-zoom ">
                                                    <div class="qodef-m-image">
                                                        <img decoding="async" width="300" height="230"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2023/11/Rectangle-558.png"
                                                            class="attachment-full size-full" alt="s" />
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <div class="qodef-m-content-inner">
                                                            <h6 class="qodef-m-subtitle">
                                                                EXPLORE THE Services </h6>
                                                            <h4 class="qodef-m-title">
                                                                Loan Products:

                                                            </h4>
                                                            <div class="qodef-m-button">
                                                                <a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--filled qodef-type--standard   qodef-icon--right      "
                                                                    href="#" target="_self"> <span
                                                                        class="qodef-m-text"></span> <span
                                                                        class="qodef-m-icon qodef--icon-color-set">
                                                                        <span class="qodef-m-icon-inner"> <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="32" height="32"
                                                                                viewBox="0 0 32 32" fill="#000000">
                                                                                <g>
                                                                                    <path
                                                                                        d="M 9,18L 16,18 l0,7 C 16,25.552, 16.448,26, 17,26S 18,25.552, 18,25L 18,18 l 7,0 C 25.552,18, 26,17.552, 26,17 C 26,16.448, 25.552,16, 25,16L 18,16 L 18,9 C 18,8.448, 17.552,8, 17,8S 16,8.448, 16,9L 16,16 L 9,16 C 8.448,16, 8,16.448, 8,17C 8,17.552, 8.448,18, 9,18z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg> </span> </span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a itemprop="url" href="#" class="qodef-m-banner-link"
                                                        target="_self"></a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>














                                </div>




                                <div class="elementor-element elementor-element-3849a62 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="3849a62" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-29ac87b e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="29ac87b" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-36fba24 elementor-widget elementor-widget-bridge_image_gallery"
                                                data-id="36fba24" data-element_type="widget"
                                                data-widget_type="bridge_image_gallery.default">
                                                <div class="elementor-widget-container">
                                                    <div class="qode-image-gallery">
                                                        <div class="qode-image-gallery-inner">
                                                            <div class="qode-image-gallery-slides drag_enabled wpb_image_grid"
                                                                data-interval=""data-control="false"
                                                                data-direction="false" data-pause-on-hover="false"
                                                                data-drag="true">
                                                                <div class="gallery_holder">
                                                                    <ul class="gallery_inner   v0">
                                                                        <li class="no_grayscale">
                                                                            <img decoding="async" itemprop="image"
                                                                                src="{{ asset('/vf/vsp.jpg') }}" />
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-995a9c1 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="995a9c1" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-c8e77fe elementor-widget elementor-widget-text-editor"
                                                data-id="c8e77fe" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="mkdf-st-title">EXPLORE </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-005e6aa elementor-widget elementor-widget-text-editor"
                                                data-id="005e6aa" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="mkdf-st-title"> TANZANIA - <br />Our Work </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b3a8def elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                                data-id="b3a8def" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.19.0 - 29-01-2024 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                    </style>
                                                    <p class="elementor-heading-title elementor-size-default">
                                                        In Magugu AP, Tanzania, 30 women in the Mwamko (“Wake Up”) group
                                                        raise poultry with support from World Vision New Zealand. Over
                                                        three years, they’ve learned chicken husbandry, disease
                                                        prevention, and business skills. Earnings help pay for school
                                                        fees and healthcare, though challenges like disease, theft, and
                                                        high feed costs persist. Each member earns about $125 per year.

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f9afd89 elementor-widget elementor-widget-bridge_button_v2"
                                                data-id="f9afd89" data-element_type="widget"
                                                data-widget_type="bridge_button_v2.default">
                                                <div class="elementor-widget-container">


                                                    <a href="#" target="_self"
                                                        class="qode-btn qode-btn-medium qode-btn-solid qode-btn-default-hover">
                                                        <span class="qode-btn-text">Read more</span> </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="elementor-element elementor-element-f87a556 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent"
                                    data-id="f87a556" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-51a519b elementor-widget elementor-widget-text-editor"
                                        data-id="51a519b" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h3><span style="color: #ffffff;">Other Works</span></h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4fe9cb6 elementor-widget elementor-widget-bridge_portfolio_slider"
                                        data-id="4fe9cb6" data-element_type="widget"
                                        data-widget_type="bridge_portfolio_slider.default">
                                        <div class="elementor-widget-container">
                                            <div class='portfolio_slider_holder clearfix'>
                                                <div class='portfolio_slider' data-number_of_items='3'
                                                    data-autoplay='yes'>
                                                    <ul class='portfolio_slides'>
                                                        <li class='item'>
                                                            <div class='image_holder'>

                                                                <span class='image'><span
                                                                        class='image_pixel_hover'></span>
                                                                    <a itemprop='url' href=' '
                                                                        target='_self'>
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1100" height="673"
                                                                            src="{{ asset('/vf/W485-0342-019 copy.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="{{ asset('/vf/W485-0342-019 copy.jpg') }} 1100w, {{ asset('/vf/_MG_0138.jpg') }} 300w, {{ asset('/vf/_MG_0138.jpg') }} 1024w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-portfolio-img-03-768x470.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-portfolio-img-03-700x428.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-portfolio-img-03-600x367.jpg 600w"
                                                                            sizes="(max-width: 1100px) 100vw, 1100px" /></a></span>
                                                                <div class='hover_feature_holder'>
                                                                    <div class="hover_feature_holder_outer">
                                                                        <div class="hover_feature_holder_inner">
                                                                            <h4 itemprop="name"
                                                                                class="portfolio_title entry_title">
                                                                                <a itemprop="url" href=" "
                                                                                    target="_self"> Dar Es Salaam -
                                                                                    Madale </a>
                                                                            </h4>
                                                                            <span
                                                                                class="separator small transparent"></span>
                                                                            <div class="project_category"> </div>


                                                                            <a itemprop="url" href=""
                                                                                target="_self"
                                                                                class="qbutton white small">view</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class='item'>
                                                            <div class='image_holder'><span class='image'><span
                                                                        class='image_pixel_hover'></span>
                                                                    <a itemprop='url' href='/'
                                                                        target='_self'>
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1100" height="673"
                                                                            src="{{ asset('/vf/W485-0342-019 copy.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="{{ asset('/vf/W485-0342-019 copy.jpg') }}"
                                                                            sizes="(max-width: 1100px) 100vw, 1100px" /></a></span>

                                                                <div class='hover_feature_holder'>
                                                                    <div class="hover_feature_holder_outer">
                                                                        <div class="hover_feature_holder_inner">
                                                                            <h4 itemprop="name"
                                                                                class="portfolio_title entry_title">
                                                                                <a itemprop="url" href="/"
                                                                                    target="_self"> Dodoma -
                                                                                    Vijana</a>
                                                                            </h4>
                                                                            <span
                                                                                class="separator small transparent"></span>
                                                                            <div class="project_category"> </div><a
                                                                                itemprop="url"
                                                                                href="https://bridge510.qodeinteractive.com/portfolio_page/modern-materials/"
                                                                                target="_self"
                                                                                class="qbutton white small">view</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class='item'>
                                                            <div class='image_holder'><span class='image'><span
                                                                        class='image_pixel_hover'></span>
                                                                    <a itemprop='url' href=''
                                                                        target='_self'>
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1100" height="673"
                                                                            src="{{ asset('/vf/ow1.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="{{ asset('/vf/ow1.jpg') }} "
                                                                            sizes="(max-width: 1100px) 100vw, 1100px" /></a></span>

                                                                <div class='hover_feature_holder'>
                                                                    <div class="hover_feature_holder_outer">
                                                                        <div class="hover_feature_holder_inner">
                                                                            <h4 itemprop="name"
                                                                                class="portfolio_title entry_title">
                                                                                <a itemprop="url" href="/"
                                                                                    target="_self"> Arusha - Town</a>
                                                                            </h4>
                                                                            <span
                                                                                class="separator small transparent"></span>
                                                                            <div class="project_category"></div>
                                                                            <a itemprop="url" href="/"
                                                                                target="_self"
                                                                                class="qbutton white small">view</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class='item'>
                                                            <div class='image_holder'><span class='image'><span
                                                                        class='image_pixel_hover'></span>
                                                                    <a itemprop='url' href=''
                                                                        target='_self'>

                                                                        <img loading="lazy" decoding="async"
                                                                            width="1100" height="673"
                                                                            src="{{ asset('/vf/vsp.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="{{ asset('/vf/vsp.jpg') }}"
                                                                            sizes="(max-width: 1100px) 100vw, 1100px" /></a></span>
                                                                <div class='hover_feature_holder'>
                                                                    <div class="hover_feature_holder_outer">
                                                                        <div class="hover_feature_holder_inner">
                                                                            <h4 itemprop="name"
                                                                                class="portfolio_title entry_title">
                                                                                <a itemprop="url" href=""
                                                                                    target="_self"> Morogoro - Durban
                                                                                </a>
                                                                            </h4>
                                                                            <span
                                                                                class="separator small transparent"></span>
                                                                            <div class="project_category">Construction
                                                                            </div>
                                                                            <a itemprop="url" href=""
                                                                                target="_self"
                                                                                class="qbutton white small">view</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class='item'>
                                                            <div class='image_holder'>

                                                                <span class='image'>

                                                                    <span class='image_pixel_hover'></span>

                                                                    <a itemprop='url' href=''
                                                                        target='_self'>
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1100" height="673"
                                                                            src="{{ asset('/vf/fi.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="{{ asset('/vf/fi.jpg') }} "
                                                                            sizes="(max-width: 1100px) 100vw, 1100px" />
                                                                    </a>
                                                                </span>

                                                                <div class='hover_feature_holder'>
                                                                    <div class="hover_feature_holder_outer">
                                                                        <div class="hover_feature_holder_inner">
                                                                            <h4 itemprop="name"
                                                                                class="portfolio_title entry_title"><a
                                                                                    itemprop="url"
                                                                                    href="https://bridge510.qodeinteractive.com/portfolio_page/contemporary-villa/"
                                                                                    target="_self">
                                                                                    Mwanza - nyegezi </a></h4><span
                                                                                class="separator small transparent"></span>
                                                                            <div class="project_category"> </div><a
                                                                                itemprop="url"
                                                                                href="https://bridge510.qodeinteractive.com/portfolio_page/contemporary-villa/"
                                                                                target="_self"
                                                                                class="qbutton white small">view</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="elementor-element elementor-element-1b06a14 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent" data-id="1b06a14" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
                            <div class="elementor-element elementor-element-d05cb88 elementor-widget elementor-widget-bridge_clients" data-id="d05cb88" data-element_type="widget" data-widget_type="bridge_clients.default">
                            <div class="elementor-widget-container">

                    <div class="qode_clients clearfix four_columns qode_clients_switch_images qode_clients_switch_roll qode_clients_separators_disabled">

                        <div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self">
                            <img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-01.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-01.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-02.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-02.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-03.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-03.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-04.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-04.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div>
                    </div>

                            </div>
                            </div> --}}




                                {{-- <div class="elementor-element elementor-element-9ebe2b5 elementor-widget elementor-widget-bridge_clients" data-id="9ebe2b5" data-element_type="widget" data-widget_type="bridge_clients.default">
                            <div class="elementor-widget-container">

                    <div class="qode_clients clearfix four_columns qode_clients_switch_images qode_clients_switch_roll qode_clients_separators_disabled">

                        <div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self">

                            <img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-05.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-04.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-06.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-06.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-07.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-07.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div><div class="qode_client_holder"><div class="qode_client_holder_inner"><div class="qode_client_image_holder"><a itemprop="url" href="#" target="_self"><img decoding="async" itemprop="image" class="qode_client_main_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-08.png" alt="a" /><img decoding="async" itemprop="image" class="qode_client_hover_image" src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-clients-img-08.png" alt="a" /></a></div><div class="qode_client_image_hover"></div></div></div>
                    </div>

                            </div>
                            </div>
                            </div> --}}











                                <div class="elementor-element elementor-element-56f3f21 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="56f3f21" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-c0647e0 elementor-widget elementor-widget-text-editor"
                                        data-id="c0647e0" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h1>Services</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-da0774c e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="da0774c" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-c86d3b6 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="c86d3b6" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-0b09ee3 elementor-widget elementor-widget-image"
                                                    data-id="0b09ee3" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.19.0 - 29-01-2024 */
                                                            .elementor-widget-image {
                                                                text-align: center
                                                            }

                                                            .elementor-widget-image a {
                                                                display: inline-block
                                                            }

                                                            .elementor-widget-image a img[src$=".svg"] {
                                                                width: 48px
                                                            }

                                                            .elementor-widget-image img {
                                                                vertical-align: middle;
                                                                display: inline-block
                                                            }
                                                        </style> <img loading="lazy" decoding="async"
                                                            width="800" height="800"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1.jpg"
                                                            class="attachment-full size-full wp-image-5249"
                                                            alt="a"
                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-300x300.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-768x768.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-570x570.jpg 570w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-500x500.jpg 500w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-700x700.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-650x650.jpg 650w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-600x600.jpg 600w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-img-03-1-100x100.jpg 100w"
                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d5e6a36 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="d5e6a36" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-a7d80d6 elementor-widget elementor-widget-image"
                                                    data-id="a7d80d6" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="100"
                                                            height="100"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-icon-img-01.png"
                                                            class="attachment-full size-full wp-image-5295"
                                                            alt="a" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-aa64741 elementor-widget elementor-widget-text-editor"
                                                    data-id="aa64741" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="mkdf-st-title"
                                                            style="font-size: 12px; font-weight:500;">EXPLORE THE
                                                            FEATURES</h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-141eea3 elementor-widget elementor-widget-text-editor"
                                                    data-id="141eea3" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="mkdf-st-title"><span
                                                                class="mkdf-iwt-title-text">Interior Design</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f6a8a0 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                    data-id="1f6a8a0" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p style="text-align: center;">Lorem ipsum dolor sit ameet.
                                                            Aenean commodo nec ligula eget dolor. Aenean et massa. Cum
                                                            sociis Theme elit nisi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c4663c2 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="c4663c2" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-8ff3b39 elementor-widget elementor-widget-image"
                                                    data-id="8ff3b39" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="800"
                                                            height="800"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04.jpg"
                                                            class="attachment-full size-full wp-image-95"
                                                            alt="a"
                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-300x300.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-768x768.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-570x570.jpg 570w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-500x500.jpg 500w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-700x700.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-650x650.jpg 650w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-600x600.jpg 600w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-04-100x100.jpg 100w"
                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c15cf0a e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="c15cf0a" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-0247613 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="0247613" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-135e871 elementor-widget elementor-widget-image"
                                                    data-id="135e871" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="77"
                                                            height="100"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-icon-img-02.png"
                                                            class="attachment-full size-full wp-image-5296"
                                                            alt="a" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-781c74d elementor-widget elementor-widget-text-editor"
                                                    data-id="781c74d" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="mkdf-st-title"
                                                            style="font-size: 12px; font-weight: 500;">EXPLORE THE
                                                            FEATURES</h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-111f36f elementor-widget elementor-widget-text-editor"
                                                    data-id="111f36f" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="mkdf-st-title"><span
                                                                class="mkdf-iwt-title-text">Graphic Design</span></h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4550525 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                    data-id="4550525" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p style="text-align: center;">Lorem ipsum dolor sit ameet.
                                                            Aenean commodo nec ligula eget dolor. Aenean et massa. Cum
                                                            sociis Theme elit nisi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5f74b61 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="5f74b61" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-8a40312 elementor-widget elementor-widget-image"
                                                    data-id="8a40312" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="800"
                                                            height="800"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05.jpg"
                                                            class="attachment-full size-full wp-image-96"
                                                            alt="a"
                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-300x300.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-768x768.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-570x570.jpg 570w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-500x500.jpg 500w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-700x700.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-650x650.jpg 650w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-600x600.jpg 600w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-05-100x100.jpg 100w"
                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-da6217d e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="da6217d" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-87958fc elementor-widget elementor-widget-image"
                                                    data-id="87958fc" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="100"
                                                            height="100"
                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/02/h1-icon-img-03.png"
                                                            class="attachment-full size-full wp-image-5297"
                                                            alt="a" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-956c3d2 elementor-widget elementor-widget-text-editor"
                                                    data-id="956c3d2" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="mkdf-st-title"
                                                            style="font-size: 12px; font-weight:500;">EXPLORE THE
                                                            FEATURES</h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a71f42a elementor-widget elementor-widget-text-editor"
                                                    data-id="a71f42a" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="mkdf-st-title"><span
                                                                class="mkdf-iwt-title-text">Product Design</span></h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-354ce60 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                    data-id="354ce60" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p style="text-align: center;">Lorem ipsum dolor sit ameet.
                                                            Aenean commodo nec ligula eget dolor. Aenean et massa. Cum
                                                            sociis Theme elit nisi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c15d1f6 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent"
                                    data-id="c15d1f6" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-d52201b e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-child"
                                        data-id="d52201b" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-cb303ee e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="cb303ee" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                            </div>
                                        </div>











                                        <div class="elementor-element elementor-element-bc07a49 e-flex e-con-boxed parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="bc07a49" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-488bb51 elementor-widget elementor-widget-text-editor"
                                                    data-id="488bb51" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="mkdf-st-title"><span
                                                                style="color: #ffffff;">EXPLORE THE FEATURES</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-75f6c92 elementor-widget elementor-widget-text-editor"
                                                    data-id="75f6c92" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="mkdf-st-title"><span style="color: #ffffff;">Full
                                                                project</span><br /><span
                                                                style="color: #ffffff;">management</span></h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5acb0e2 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                                    data-id="5acb0e2" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                            Theme natoque penatibus et magnis dis parturient montes,
                                                            nascetur.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6fa0843 elementor-widget elementor-widget-bridge_button_v2"
                                                    data-id="6fa0843" data-element_type="widget"
                                                    data-widget_type="bridge_button_v2.default">
                                                    <div class="elementor-widget-container">


                                                        <a href="#" target="_self"
                                                            style="color: #FF5E15;background-color: #FFFFFF"
                                                            class="qode-btn qode-btn-medium qode-btn-solid">
                                                            <span class="qode-btn-text">Read more</span> </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-097b115 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="097b115" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-4a12fac e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="4a12fac" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-51b8fc1 elementor-widget elementor-widget-qi_addons_for_elementor_counter"
                                            data-id="51b8fc1" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  "
                                                    data-start-digit="10" data-end-digit="34" data-step-digit="5">
                                                    <div class="qodef-m-digit-wrapper">
                                                        <div class="qodef-m-digit"></div>
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <h6 class="qodef-m-title">
                                                            PROJECTS </h6>
                                                        <div class="qodef-m-text">
                                                            Design </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6520126 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="6520126" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-4534903 elementor-widget elementor-widget-qi_addons_for_elementor_counter"
                                            data-id="4534903" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  "
                                                    data-start-digit="15" data-end-digit="97"
                                                    data-step-digit="10">
                                                    <div class="qodef-m-digit-wrapper">
                                                        <div class="qodef-m-digit"></div>
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <h6 class="qodef-m-title">
                                                            HAPPY </h6>
                                                        <div class="qodef-m-text">
                                                            Clients </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6fccd75 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="6fccd75" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-72b76d3 elementor-widget elementor-widget-qi_addons_for_elementor_counter"
                                            data-id="72b76d3" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  "
                                                    data-start-digit="3" data-end-digit="15" data-step-digit="3">
                                                    <div class="qodef-m-digit-wrapper">
                                                        <div class="qodef-m-digit"></div>
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <h6 class="qodef-m-title">
                                                            COMPLETED </h6>
                                                        <div class="qodef-m-text">
                                                            Projects
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-20e2922 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="20e2922" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-d378916 elementor-widget elementor-widget-qi_addons_for_elementor_counter"
                                            data-id="d378916" data-element_type="widget"
                                            data-widget_type="qi_addons_for_elementor_counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  "
                                                    data-start-digit="10" data-end-digit="62"
                                                    data-step-digit="15">
                                                    <div class="qodef-m-digit-wrapper">
                                                        <div class="qodef-m-digit"></div>
                                                    </div>
                                                    <div class="qodef-m-content">
                                                        <h6 class="qodef-m-title">
                                                            COMPLETED </h6>
                                                        <div class="qodef-m-text">
                                                            Codes </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d368765 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="d368765" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-397f526 elementor-widget elementor-widget-qi_addons_for_elementor_testimonials_slider"
                                        data-id="397f526" data-element_type="widget"
                                        data-widget_type="qi_addons_for_elementor_testimonials_slider.default">
                                        <div class="elementor-widget-container">
                                            <div class="qodef-shortcode qodef-m  qodef-qi-testimonials-slider  qodef-qi-grid qodef-qi-swiper-container qodef-item-layout--boxed   qodef-pagination--outside    "
                                                data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;2&quot;,&quot;spaceBetween&quot;:30,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:false,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;yes&quot;,&quot;unique&quot;:&quot;1&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;2&quot;,&quot;slidesPerView1366&quot;:&quot;2&quot;,&quot;slidesPerView1024&quot;:&quot;2&quot;,&quot;slidesPerView768&quot;:&quot;1&quot;,&quot;slidesPerView680&quot;:&quot;1&quot;,&quot;slidesPerView480&quot;:&quot;1&quot;}">
                                                <div class="swiper-wrapper">
                                                    <div class="qodef-e swiper-slide elementor-repeater-item-5df64cd">
                                                        <div class="qodef-e-inner">
                                                            <div class="qodef-e-top">
                                                                <div class="qodef-e-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="193" height="193"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-03.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-03.jpg 193w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-03-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-03-100x100.jpg 100w"
                                                                        sizes="(max-width: 193px) 100vw, 193px" />
                                                                </div>
                                                                <div class="qodef-e-quote">
                                                                    <svg class="qodef-e-quote-icon"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 190.5 148"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M37.7,146.3L2.1,124.6C19.3,100,28.2,74.1,28.8,46.7V2.3H90v38.8c0,19.3-5,38.8-15.1,58.4C64.9,119,52.5,134.6,37.7,146.3z M133.7,146.3l-35.6-21.7c17.2-24.5,26.2-50.5,26.8-77.9V2.3h61.2v38.8c0,19.3-5,38.8-15.1,58.4C160.9,119,148.5,134.6,133.7,146.3z" />
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="qodef-e-content">
                                                                <p itemprop="description" class="qodef-e-text">
                                                                    Ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                    Maecenas tempus, tellus eget rhoncus, amet sem vel
                                                                    quam nunc semper libero, sit amet sem neque sed
                                                                    ipsum. Namet quam nunc. Lorem ipsum.</p>
                                                                <div class="qodef-e-author">
                                                                    <h4 class="qodef-e-author-name">Emma Romero</h4>
                                                                    <span class="qodef-e-author-job">construction
                                                                        simulator</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="qodef-e swiper-slide elementor-repeater-item-3d39f11">
                                                        <div class="qodef-e-inner">
                                                            <div class="qodef-e-top">
                                                                <div class="qodef-e-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="193" height="193"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-02.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-02.jpg 193w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-02-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-02-100x100.jpg 100w"
                                                                        sizes="(max-width: 193px) 100vw, 193px" />
                                                                </div>
                                                                <div class="qodef-e-quote">
                                                                    <svg class="qodef-e-quote-icon"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 190.5 148"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M37.7,146.3L2.1,124.6C19.3,100,28.2,74.1,28.8,46.7V2.3H90v38.8c0,19.3-5,38.8-15.1,58.4C64.9,119,52.5,134.6,37.7,146.3z M133.7,146.3l-35.6-21.7c17.2-24.5,26.2-50.5,26.8-77.9V2.3h61.2v38.8c0,19.3-5,38.8-15.1,58.4C160.9,119,148.5,134.6,133.7,146.3z" />
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="qodef-e-content">
                                                                <p itemprop="description" class="qodef-e-text">
                                                                    Ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                    Maecenas tempus, tellus eget rhoncus, amet sem vel
                                                                    quam nunc semper libero, sit amet sem neque sed
                                                                    ipsum. Namet quam nunc. Lorem ipsum.</p>
                                                                <div class="qodef-e-author">
                                                                    <h4 class="qodef-e-author-name">Nathan Marshall
                                                                    </h4>
                                                                    <span class="qodef-e-author-job">Engineering
                                                                        Manager</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="qodef-e swiper-slide elementor-repeater-item-d7673d9">
                                                        <div class="qodef-e-inner">
                                                            <div class="qodef-e-top">
                                                                <div class="qodef-e-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="193" height="193"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-01.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-01.jpg 193w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-01-150x150.jpg 150w, https://bridge510.qodeinteractive.com/wp-content/uploads/2019/01/h3-testimonials-01-100x100.jpg 100w"
                                                                        sizes="(max-width: 193px) 100vw, 193px" />
                                                                </div>
                                                                <div class="qodef-e-quote">
                                                                    <svg class="qodef-e-quote-icon"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 190.5 148"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M37.7,146.3L2.1,124.6C19.3,100,28.2,74.1,28.8,46.7V2.3H90v38.8c0,19.3-5,38.8-15.1,58.4C64.9,119,52.5,134.6,37.7,146.3z M133.7,146.3l-35.6-21.7c17.2-24.5,26.2-50.5,26.8-77.9V2.3h61.2v38.8c0,19.3-5,38.8-15.1,58.4C160.9,119,148.5,134.6,133.7,146.3z" />
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="qodef-e-content">
                                                                <p itemprop="description" class="qodef-e-text">
                                                                    Ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                    Maecenas tempus, tellus eget rhoncus, amet sem vel
                                                                    quam nunc semper libero, sit amet sem neque sed
                                                                    ipsum. Namet quam nunc. Lorem ipsum.</p>
                                                                <div class="qodef-e-author">
                                                                    <h4 class="qodef-e-author-name">Jimmy Wells</h4>
                                                                    <span class="qodef-e-author-job">Interior
                                                                        Designer</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-pagination qodef-swiper-pagination-outside swiper-pagination-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ff61d6c e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent"
                                    data-id="ff61d6c" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-4ca9de1 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-child"
                                        data-id="4ca9de1" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-89f7e2e elementor-widget elementor-widget-text-editor"
                                            data-id="89f7e2e" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h1>PROFESSIONALS</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f6afedc e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="f6afedc" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-6109e50 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="6109e50" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-5b81792 elementor-widget elementor-widget-qi_addons_for_elementor_team_member"
                                                data-id="5b81792" data-element_type="widget"
                                                data-widget_type="qi_addons_for_elementor_team_member.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-on-hover ">
                                                        <div class="qodef-m-inner">
                                                            <div class="qodef-m-image">
                                                                <div class="qodef-m-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="800" height="1055"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01-227x300.jpg 227w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01-776x1024.jpg 776w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01-768x1013.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01-700x923.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-01-600x791.jpg 600w"
                                                                        sizes="(max-width: 800px) 100vw, 800px" />
                                                                </div>
                                                            </div>
                                                            <div class="qodef-m-content">
                                                                <h4 itemprop="name" class="qodef-m-title">
                                                                    Philip Larson </h4>
                                                                <p class="qodef-m-role">Architect</p>
                                                                <div class="qodef-m-social-icons">
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.pinterest.com/qodeinteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-pinterest-p"
                                                                                viewBox="0 0 384 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.facebook.com/QodeInteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-facebook-f"
                                                                                viewBox="0 0 320 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://twitter.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-twitter"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://dribbble.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-dribbble"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-325fafa e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="325fafa" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-cb3e368 elementor-widget elementor-widget-qi_addons_for_elementor_team_member"
                                                data-id="cb3e368" data-element_type="widget"
                                                data-widget_type="qi_addons_for_elementor_team_member.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-on-hover ">
                                                        <div class="qodef-m-inner">
                                                            <div class="qodef-m-image">
                                                                <div class="qodef-m-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="800" height="1055"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02-227x300.jpg 227w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02-776x1024.jpg 776w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02-768x1013.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02-700x923.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-02-600x791.jpg 600w"
                                                                        sizes="(max-width: 800px) 100vw, 800px" />
                                                                </div>
                                                            </div>
                                                            <div class="qodef-m-content">
                                                                <h4 itemprop="name" class="qodef-m-title">
                                                                    Jean Scott </h4>
                                                                <p class="qodef-m-role">Interior Designer</p>
                                                                <div class="qodef-m-social-icons">
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.pinterest.com/qodeinteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-pinterest-p"
                                                                                viewBox="0 0 384 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.facebook.com/QodeInteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-facebook-f"
                                                                                viewBox="0 0 320 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://twitter.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-twitter"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://dribbble.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-dribbble"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-852d8d1 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="852d8d1" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-6df4aa3 elementor-widget elementor-widget-qi_addons_for_elementor_team_member"
                                                data-id="6df4aa3" data-element_type="widget"
                                                data-widget_type="qi_addons_for_elementor_team_member.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-on-hover ">
                                                        <div class="qodef-m-inner">
                                                            <div class="qodef-m-image">
                                                                <div class="qodef-m-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="800" height="1055"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03-227x300.jpg 227w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03-776x1024.jpg 776w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03-768x1013.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03-700x923.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-03-600x791.jpg 600w"
                                                                        sizes="(max-width: 800px) 100vw, 800px" />
                                                                </div>
                                                            </div>
                                                            <div class="qodef-m-content">
                                                                <h4 itemprop="name" class="qodef-m-title">
                                                                    Miguel Anders </h4>
                                                                <p class="qodef-m-role">Account Manager</p>
                                                                <div class="qodef-m-social-icons">
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.pinterest.com/qodeinteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-pinterest-p"
                                                                                viewBox="0 0 384 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.facebook.com/QodeInteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-facebook-f"
                                                                                viewBox="0 0 320 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://twitter.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-twitter"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://dribbble.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-dribbble"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-573c309 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="573c309" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-4484c84 elementor-widget elementor-widget-qi_addons_for_elementor_team_member"
                                                data-id="4484c84" data-element_type="widget"
                                                data-widget_type="qi_addons_for_elementor_team_member.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-on-hover ">
                                                        <div class="qodef-m-inner">
                                                            <div class="qodef-m-image">
                                                                <div class="qodef-m-media-image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="800" height="1055"
                                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="a"
                                                                        srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04.jpg 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04-227x300.jpg 227w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04-776x1024.jpg 776w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04-768x1013.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04-700x923.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-team-img-04-600x791.jpg 600w"
                                                                        sizes="(max-width: 800px) 100vw, 800px" />
                                                                </div>
                                                            </div>
                                                            <div class="qodef-m-content">
                                                                <h4 itemprop="name" class="qodef-m-title">
                                                                    Evelyn Grant </h4>
                                                                <p class="qodef-m-role">Communications</p>
                                                                <div class="qodef-m-social-icons">
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.pinterest.com/qodeinteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-pinterest-p"
                                                                                viewBox="0 0 384 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://www.facebook.com/QodeInteractive/"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-facebook-f"
                                                                                viewBox="0 0 320 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://twitter.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-twitter"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                    <a class="qodef-e-social-icon-link"
                                                                        itemprop="url"
                                                                        href="https://dribbble.com/qodeinteractive"
                                                                        target="_blank">
                                                                        <span class="qodef-e-social-icon">
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-dribbble"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                                                                </path>
                                                                            </svg> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c8f7b09 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="c8f7b09" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-ac6d10b e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="ac6d10b" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-8a12e0b e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="8a12e0b" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-46b8b68 elementor-widget-mobile__width-auto elementor-widget elementor-widget-bridge_pie_chart"
                                                data-id="46b8b68" data-element_type="widget"
                                                data-widget_type="bridge_pie_chart.default">
                                                <div class="elementor-widget-container">
                                                    <div class="q_pie_chart_holder">
                                                        <div class="q_percentage" data-percent="36"
                                                            data-linewidth="4" data-active="#FF5E14"
                                                            data-noactive="#F2F3F5"
                                                            style="color:#001659;font-size:60px;font-weight:600;">
                                                            <span class="tocounter">36</span>%</div>
                                                        <div class="pie_chart_text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0f7a7a7 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="0f7a7a7" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-0fe8532 elementor-widget elementor-widget-text-editor"
                                                data-id="0fe8532" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="mkdf-st-title">DESIGNED</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8ded9ea elementor-widget elementor-widget-text-editor"
                                                data-id="8ded9ea" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ce95dfb elementor-widget elementor-widget-heading"
                                                data-id="ce95dfb" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Codes
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7f46a4b elementor-widget elementor-widget-text-editor"
                                                data-id="7f46a4b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p class="mkdf-st-title">Lorem ipsum dolor amet sociis dolor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5141df0 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="5141df0" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-30c0e23 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="30c0e23" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-ef74271 elementor-widget elementor-widget-bridge_pie_chart"
                                                data-id="ef74271" data-element_type="widget"
                                                data-widget_type="bridge_pie_chart.default">
                                                <div class="elementor-widget-container">
                                                    <div class="q_pie_chart_holder">
                                                        <div class="q_percentage" data-percent="75"
                                                            data-linewidth="4" data-active="#FF5E14"
                                                            data-noactive="#F2F3F5"
                                                            style="color:#001659;font-size:60px;font-weight:600;">
                                                            <span class="tocounter">75</span>%</div>
                                                        <div class="pie_chart_text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-97a1846 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="97a1846" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-06af49b elementor-widget elementor-widget-text-editor"
                                                data-id="06af49b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="mkdf-st-title">OUR HAPPY</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f56bcdc elementor-widget elementor-widget-heading"
                                                data-id="f56bcdc" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Clients
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-feaeed1 elementor-widget elementor-widget-text-editor"
                                                data-id="feaeed1" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p class="mkdf-st-title">Lorem ipsum dolor amet sociis dolor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-60553fb e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="60553fb" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-63d53e3 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="63d53e3" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-c1ff464 elementor-widget elementor-widget-bridge_pie_chart"
                                                data-id="c1ff464" data-element_type="widget"
                                                data-widget_type="bridge_pie_chart.default">
                                                <div class="elementor-widget-container">
                                                    <div class="q_pie_chart_holder">
                                                        <div class="q_percentage" data-percent="68"
                                                            data-linewidth="4" data-active="#FF5E14"
                                                            data-noactive="#F2F3F5"
                                                            style="color:#001659;font-size:60px;font-weight:600;">
                                                            <span class="tocounter">68</span>%</div>
                                                        <div class="pie_chart_text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-fb59e58 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                            data-id="fb59e58" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-9fcd4f3 elementor-widget elementor-widget-text-editor"
                                                data-id="9fcd4f3" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="mkdf-st-title">COMPLETED</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e897f92 elementor-widget elementor-widget-heading"
                                                data-id="e897f92" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        Projects</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-46d1661 elementor-widget elementor-widget-text-editor"
                                                data-id="46d1661" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p class="mkdf-st-title">Lorem ipsum dolor amet sociis dolor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-524da26 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-parent"
                                    data-id="524da26" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-8af98f4 e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="8af98f4" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-9ac5d08 elementor-widget elementor-widget-bridge_image_gallery"
                                            data-id="9ac5d08" data-element_type="widget"
                                            data-widget_type="bridge_image_gallery.default">
                                            <div class="elementor-widget-container">
                                                <div class="qode-image-gallery">
                                                    <div class="qode-image-gallery-inner">
                                                        <div class="qode-image-gallery-slides drag_enabled wpb_image_grid"
                                                            data-interval=""data-control="false"
                                                            data-direction="false" data-pause-on-hover="false"
                                                            data-drag="true">
                                                            <div class="gallery_holder">
                                                                <ul class="gallery_inner   v0">
                                                                    <li class="no_grayscale"><img decoding="async"
                                                                            itemprop="image"
                                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-img-08.jpg" />
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-66760ae e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-child"
                                        data-id="66760ae" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-1328888 elementor-widget elementor-widget-bridge_accordion"
                                            data-id="1328888" data-element_type="widget"
                                            data-widget_type="bridge_accordion.default">
                                            <div class="elementor-widget-container">

                                                <div
                                                    class="qode-accordion-holder clearfix qode-accordion qode-initial ">
                                                    <h4 class="clearfix qode-title-holder">
                                                        <span class="qode-tab-title">
                                                            <span class="qode-tab-title-icon">
                                                            </span>
                                                            <span class="qode-tab-title-inner">
                                                                Project Planning </span>
                                                        </span>
                                                        <span class="qode-accordion-mark">
                                                            <span class="qode-accordion-mark-icon">
                                                                <span class="icon_plus"></span>
                                                                <span class="icon_minus-06"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="qode-accordion-content "
                                                        style="background-image: url(); padding: 0 100px 31px 50px">
                                                        <div class="qode-accordion-content-inner">
                                                            <p>Lorem ipsum dolor sit amet messa. Con secte tuer adi pisc
                                                                ng elit. Aenean com modo ligul.</p>
                                                        </div>
                                                    </div>
                                                    <h4 class="clearfix qode-title-holder">
                                                        <span class="qode-tab-title">
                                                            <span class="qode-tab-title-icon">
                                                            </span>
                                                            <span class="qode-tab-title-inner">
                                                                Refurbishment </span>
                                                        </span>
                                                        <span class="qode-accordion-mark">
                                                            <span class="qode-accordion-mark-icon">
                                                                <span class="icon_plus"></span>
                                                                <span class="icon_minus-06"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="qode-accordion-content "
                                                        style="background-image: url(); padding: 0 100px 31px 50px">
                                                        <div class="qode-accordion-content-inner">
                                                            <p>Lorem ipsum dolor sit amet messa. Con secte tuer adi pisc
                                                                ng elit. Aenean com modo ligul.</p>
                                                        </div>
                                                    </div>
                                                    <h4 class="clearfix qode-title-holder">
                                                        <span class="qode-tab-title">
                                                            <span class="qode-tab-title-icon">
                                                            </span>
                                                            <span class="qode-tab-title-inner">
                                                                General Contracting </span>
                                                        </span>
                                                        <span class="qode-accordion-mark">
                                                            <span class="qode-accordion-mark-icon">
                                                                <span class="icon_plus"></span>
                                                                <span class="icon_minus-06"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="qode-accordion-content "
                                                        style="background-image: url(); padding: 0 100px 31px 50px">
                                                        <div class="qode-accordion-content-inner">
                                                            <p>Lorem ipsum dolor sit amet messa. Con secte tuer adi pisc
                                                                ng elit. Aenean com modo ligul.</p>
                                                        </div>
                                                    </div>
                                                    <h4 class="clearfix qode-title-holder">
                                                        <span class="qode-tab-title">
                                                            <span class="qode-tab-title-icon">
                                                            </span>
                                                            <span class="qode-tab-title-inner">
                                                                Interior design </span>
                                                        </span>
                                                        <span class="qode-accordion-mark">
                                                            <span class="qode-accordion-mark-icon">
                                                                <span class="icon_plus"></span>
                                                                <span class="icon_minus-06"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="qode-accordion-content "
                                                        style="background-image: url(); padding: 0 100px 31px 50px">
                                                        <div class="qode-accordion-content-inner">
                                                            <p>Lorem ipsum dolor sit amet messa. Con secte tuer adi pisc
                                                                ng elit. Aenean com modo ligul.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2ac1f7b e-con-full e-flex parallax_section_no qode_elementor_container_no e-con e-parent"
                                    data-id="2ac1f7b" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-5f5a267 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-child"
                                        data-id="5f5a267" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-93d3681 elementor-widget elementor-widget-text-editor"
                                            data-id="93d3681" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h1><span style="color: #ffffff;">LATEST NEWS</span></h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-64fb477 e-con-full qode_elementor_container_inner e-flex parallax_section_no e-con e-child"
                                            data-id="64fb477" data-element_type="container"
                                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-5452d71 elementor-widget elementor-widget-bridge_latest_posts"
                                                data-id="5452d71" data-element_type="widget"
                                                data-widget_type="bridge_latest_posts.default">
                                                <div class="elementor-widget-container">

                                                    <div class='latest_post_holder boxes three_columns one_row'>
                                                        <ul>

                                                            <li class="clearfix">
                                                                <div class="boxes_image">
                                                                    <a itemprop="url"
                                                                        href="https://bridge510.qodeinteractive.com/new-trends-2/"><img
                                                                            loading="lazy" decoding="async"
                                                                            width="1300" height="883"
                                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01.jpg"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01.jpg 1300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01-300x204.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01-1024x696.jpg 1024w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01-768x522.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01-700x475.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-01-600x408.jpg 600w"
                                                                            sizes="(max-width: 1300px) 100vw, 1300px" /></a>
                                                                </div>
                                                                <div class="latest_post">
                                                                    <div class="latest_post_text">
                                                                        <div class="latest_post_inner">
                                                                            <div class="latest_post_text_inner">
                                                                                <h4 itemprop="name"
                                                                                    class="latest_post_title entry_title">
                                                                                    <a itemprop="url"
                                                                                        href="https://bridge510.qodeinteractive.com/new-trends-2/">Lorem
                                                                                        ipsum dolor sit amet aenean nisi
                                                                                        sociis</a></h4>

                                                                                <span class="post_infos">
                                                                                    <span class="date_hour_holder">
                                                                                        <span itemprop="dateCreated"
                                                                                            class="date entry_date updated">20
                                                                                            November, 2023
                                                                                            <meta
                                                                                                itemprop="interactionCount"
                                                                                                content="UserComments: 0" />
                                                                                        </span>
                                                                                    </span>


                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="boxes_image">
                                                                    <a itemprop="url"
                                                                        href="https://bridge510.qodeinteractive.com/massa-cum-sociis-theme-natoque-eum-penatibus/"><img
                                                                            loading="lazy" decoding="async"
                                                                            width="1300" height="883"
                                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02.jpg"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="s"
                                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02.jpg 1300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02-300x204.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02-1024x696.jpg 1024w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02-768x522.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02-700x475.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-02-600x408.jpg 600w"
                                                                            sizes="(max-width: 1300px) 100vw, 1300px" /></a>
                                                                </div>
                                                                <div class="latest_post">
                                                                    <div class="latest_post_text">
                                                                        <div class="latest_post_inner">
                                                                            <div class="latest_post_text_inner">
                                                                                <h4 itemprop="name"
                                                                                    class="latest_post_title entry_title">
                                                                                    <a itemprop="url"
                                                                                        href="https://bridge510.qodeinteractive.com/massa-cum-sociis-theme-natoque-eum-penatibus/">Massa
                                                                                        cum sociis theme natoque eum
                                                                                        penatibus</a></h4>

                                                                                <span class="post_infos">
                                                                                    <span class="date_hour_holder">
                                                                                        <span itemprop="dateCreated"
                                                                                            class="date entry_date updated">19
                                                                                            November, 2023
                                                                                            <meta
                                                                                                itemprop="interactionCount"
                                                                                                content="UserComments: 0" />
                                                                                        </span>
                                                                                    </span>


                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="boxes_image">
                                                                    <a itemprop="url"
                                                                        href="https://bridge510.qodeinteractive.com/adipiscing-sem-neque-sed-ipsum-nam-quam-nu-mas/"><img
                                                                            loading="lazy" decoding="async"
                                                                            width="1300" height="883"
                                                                            src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03.jpg"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt="a"
                                                                            srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03.jpg 1300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03-300x204.jpg 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03-1024x696.jpg 1024w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03-768x522.jpg 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03-700x475.jpg 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/h1-blog-img-03-600x408.jpg 600w"
                                                                            sizes="(max-width: 1300px) 100vw, 1300px" /></a>
                                                                </div>
                                                                <div class="latest_post">
                                                                    <div class="latest_post_text">
                                                                        <div class="latest_post_inner">
                                                                            <div class="latest_post_text_inner">
                                                                                <h4 itemprop="name"
                                                                                    class="latest_post_title entry_title">
                                                                                    <a itemprop="url"
                                                                                        href="https://bridge510.qodeinteractive.com/adipiscing-sem-neque-sed-ipsum-nam-quam-nu-mas/">Adipiscing
                                                                                        sem neque sed ipsum nam quam nu
                                                                                        mas</a></h4>

                                                                                <span class="post_infos">
                                                                                    <span class="date_hour_holder">
                                                                                        <span itemprop="dateCreated"
                                                                                            class="date entry_date updated">18
                                                                                            November, 2023
                                                                                            <meta
                                                                                                itemprop="interactionCount"
                                                                                                content="UserComments: 0" />
                                                                                        </span>
                                                                                    </span>


                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>



            <footer>
                <div class="footer_inner clearfix">
                    <div class="footer_top_holder">
                        <div class="footer_top">
                            <div class="container">
                                <div class="container_inner">
                                    <div class="four_columns clearfix">
                                        <div class="column1 footer_col1">
                                            <div class="column_inner">
                                                <div id="block-22" class="widget widget_block">
                                                    <h4 class="wp-block-heading">Build with Bridge</h4>
                                                </div>
                                                <div id="block-25" class="widget widget_block">
                                                    <div style="height:15px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-24" class="widget widget_block">
                                                    <div class="wp-block-group is-content-justification-left">
                                                        <div
                                                            class="wp-block-group__inner-container is-layout-constrained wp-container-core-group-is-layout-1 wp-block-group-is-layout-constrained">
                                                            <p>Get Bridge and discover streamlined website construction
                                                                today! Powerful elements, tons of flexible layouts and
                                                                more inside.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="block-33" class="widget widget_block">
                                                    <div style="height:25px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-46" class="widget widget_block">
                                                    <div
                                                        class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-5366406c">
                                                        <div
                                                            class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                            <div class="qodef-m-icon-wrapper"><a
                                                                    href="https://bridge510.qodeinteractive.com/contact-us/">
                                                                    <div class="qodef-m-icon-holder"><svg
                                                                            xml:space="preserve"
                                                                            style="enable-background:new 0 0 16 16"
                                                                            height="20" width="20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.4 4.9c-.8-2-2.3-3.4-4.3-4.3-2-.9-4.3-.9-6.3 0S1.4 2.9.5 4.9C.2 5.8 0 6.9 0 8s.2 2.2.6 3.1c.9 2 2.3 3.4 4.3 4.3 1 .4 2 .6 3.1.6s2.1-.2 3.1-.6c2-.8 3.4-2.3 4.3-4.3.4-1 .6-2.1.6-3.1 0-1.1-.2-2.1-.6-3.1zM14.7 8c0 1.2-.3 2.3-.9 3.4-.6 1-1.4 1.8-2.5 2.4-1 .6-2.2.9-3.4.9-.9 0-1.8-.2-2.6-.5-.8-.4-1.6-.8-2.1-1.4-.6-.6-1.1-1.3-1.4-2.1-.3-.9-.5-1.8-.5-2.7 0-1.2.3-2.3.9-3.4.6-1 1.4-1.8 2.4-2.4 1-.6 2.1-.9 3.4-.9s2.3.3 3.4.9c1 .6 1.9 1.4 2.5 2.4.5 1.1.8 2.2.8 3.4z"
                                                                                class="st0"></path>
                                                                            <path
                                                                                d="M8.7 7.8V3.5c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v4.6c0 .2 0 .4.2.5l2.6 2.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9L8.7 7.8z"
                                                                                class="st0"></path>
                                                                        </svg></div>
                                                                </a></div>
                                                            <div class="qodef-m-content">
                                                                <div class="qodef-m-text"><a
                                                                        href="https://bridge510.qodeinteractive.com/"
                                                                        target="_blank"
                                                                        rel="noreferrer noopener">Mon - Sat 8:00 -
                                                                        17:30,<br> Sunday - CLOSED</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column2 footer_col2">
                                            <div class="column_inner">
                                                <div id="block-45" class="widget widget_block">
                                                    <h4 class="wp-block-heading">Our Services</h4>
                                                </div>
                                                <div id="block-27" class="widget widget_block">
                                                    <div style="height:15px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-28" class="widget widget_block widget_text">
                                                    <p><a
                                                            href="https://bridge510.qodeinteractive.com/smart-lighting/">Chemical
                                                            Engineering Projects</a></p>
                                                </div>
                                                <div id="block-36" class="widget widget_block">
                                                    <div style="height:14px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-34" class="widget widget_block widget_text">
                                                    <p><a
                                                            href="https://bridge510.qodeinteractive.com/flooring-trends-for-2019">Mining
                                                            Engineering Construction</a></p>
                                                </div>
                                                <div id="block-37" class="widget widget_block">
                                                    <div style="height:14px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-35" class="widget widget_block widget_text">
                                                    <p><a
                                                            href="https://bridge510.qodeinteractive.com/green-buildings/">Engineering
                                                            Welding Engineering</a></p>
                                                </div>
                                                <div id="block-38" class="widget widget_block">
                                                    <div style="height:14px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-85" class="widget widget_block">
                                                    <p><a
                                                            href="https://bridge510.qodeinteractive.com/zero-energy-homes/">Welding
                                                            Engineering</a></p>
                                                </div>
                                                <div id="block-41" class="widget widget_block">
                                                    <div style="height:14px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-40" class="widget widget_block widget_text">
                                                    <p><a
                                                            href="https://bridge510.qodeinteractive.com/green-buildings/"></a><a
                                                            href="https://bridge510.qodeinteractive.com/green-buildings/">Space
                                                            Program XYZ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column3 footer_col3">
                                            <div class="column_inner">
                                                <div id="block-26" class="widget widget_block">
                                                    <h4 class="wp-block-heading">Office in New York</h4>
                                                </div>
                                                <div id="block-47" class="widget widget_block">
                                                    <div style="height:16px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-62" class="widget widget_block">
                                                    <div
                                                        class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex">
                                                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                                                            style="flex-basis:250px">
                                                            <div
                                                                class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-ae319f5c">
                                                                <div
                                                                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                                    <div class="qodef-m-icon-wrapper"><a
                                                                            href="https://bridge510.qodeinteractive.com/contact-us/">
                                                                            <div class="qodef-m-icon-holder"><svg
                                                                                    xml:space="preserve"
                                                                                    style="enable-background:new 0 0 13 16"
                                                                                    viewBox="0 0 13 16"
                                                                                    height="18" width="15"
                                                                                    y="0" x="0" id="Layer_1"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <style>
                                                                                        .st0 {
                                                                                            fill: #001659
                                                                                        }
                                                                                    </style>
                                                                                    <path
                                                                                        d="M11.8 2.8C10.6 1 8.7 0 6.5 0 4.3 0 2.4 1 1.2 2.8 0 4.6-.3 6.8.4 8.8c.2.5.5 1.1.9 1.6L6 15.8c.1.1.3.2.5.2s.4-.1.5-.2l4.6-5.4c.4-.5.7-1 .9-1.6.8-2 .6-4.2-.7-6zm-.4 5.5c-.1.4-.4.8-.7 1.2l-4.2 4.9-4.2-4.9c-.3-.4-.5-.8-.7-1.2-.6-1.6-.3-3.4.6-4.8 1-1.4 2.5-2.2 4.3-2.2s3.3.8 4.3 2.2c.9 1.4 1.2 3.2.6 4.8z"
                                                                                        class="st0"></path>
                                                                                    <path
                                                                                        d="M6.5 3.3c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2c1.8 0 3.2-1.4 3.2-3.2S8.3 3.3 6.5 3.3zm1.9 3.2c0 1-.8 1.9-1.9 1.9-1 0-1.9-.8-1.9-1.9s.8-1.9 1.9-1.9c1 0 1.9.8 1.9 1.9z"
                                                                                        class="st0"></path>
                                                                                </svg></div>
                                                                        </a></div>
                                                                    <div class="qodef-m-content">
                                                                        <div class="qodef-m-text"><a
                                                                                href="https://www.google.com/maps/place/7200-7298+Colonial+Rd,+Brooklyn,+NY+11209,+USA/@40.6344539,-74.0331523,18z/data=!3m1!4b1!4m5!3m4!1s0x89c24ff836cd2eb3:0xdd6e3e3f4289d8a2!8m2!3d40.6344527!4d-74.0324825?_ga=2.155907067.1135423460.1706102734-371520364.1706102734"
                                                                                target="_blank"
                                                                                rel="noreferrer noopener">7300-7398
                                                                                Colonial Rd, Brooklyn, NY 11209</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div style="height:17px" aria-hidden="true"
                                                                class="wp-block-spacer"></div>



                                                            <div
                                                                class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-80f1f1b4">
                                                                <div
                                                                    class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                                    <div class="qodef-m-icon-wrapper"><a
                                                                            href="https://bridge510.qodeinteractive.com/contact-us/">
                                                                            <div class="qodef-m-icon-holder"><svg
                                                                                    xml:space="preserve"
                                                                                    style="enable-background:new 0 0 16 16"
                                                                                    viewBox="0 0 16 16"
                                                                                    height="18" width="18"
                                                                                    y="0" x="0" id="Layer_1"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <style>
                                                                                        .st0 {
                                                                                            fill: #12192d
                                                                                        }
                                                                                    </style>
                                                                                    <path
                                                                                        d="M12.5 6.9c-.3 0-.6-.2-.6-.5-.2-1.2-1.1-2-2.3-2.3-.3-.1-.5-.4-.5-.8.1-.3.4-.5.8-.5.8.2 1.5.6 2.1 1.2.6.6 1 1.3 1.1 2.1.1.4-.2.7-.5.8h-.1zM15.4 6.9c-.3 0-.6-.2-.6-.6-.3-2.7-2.4-4.7-5-5-.4 0-.6-.4-.6-.7 0-.4.3-.6.6-.6 1.6.2 3 .9 4.2 2 1.1 1.1 1.8 2.6 2 4.2 0 .3-.2.6-.6.7zM13.2 16H13c-2.3-.2-4.5-1-6.4-2.3-1.8-1.1-3.3-2.6-4.4-4.4C1 7.4.2 5.2 0 2.9-.1 1.8.7.8 1.9.7H4.2c1 0 1.9.7 2.1 1.8.1.6.2 1.2.5 1.8.2.8 0 1.6-.6 2.2l-.5.5c.8 1.3 2 2.5 3.3 3.3l.5-.5c.6-.6 1.4-.7 2.2-.5.6.2 1.2.4 1.8.5 1 .1 1.8 1 1.8 2.1V14c0 1.1-.9 2-2.1 2zm0-1.3c.5 0 .8-.3.8-.8v-2.1c0-.4-.3-.7-.7-.8-.7-.1-1.4-.3-2.1-.5-.3-.1-.6 0-.8.2l-.9.9c-.2.2-.5.2-.8.1-1.9-1.1-3.4-2.6-4.5-4.5-.1-.2 0-.5.2-.7l.9-.9c.2-.3.3-.6.2-.8-.3-.7-.5-1.4-.6-2.2 0-.3-.3-.6-.7-.6H2c-.4 0-.7.4-.7.8.2 2.1.9 4.1 2.1 5.8 1 1.6 2.4 3 4 4 1.7 1.2 3.7 1.9 5.8 2.1z"
                                                                                        class="st0"></path>
                                                                                </svg></div>
                                                                        </a></div>
                                                                    <div class="qodef-m-content">
                                                                        <div class="qodef-m-text"><a
                                                                                href="tel:+12112345678901">
                                                                                + (123) 1234-567-8901</a><br>
                                                                            <a href="tel:+12112345678901">+ (123)
                                                                                1234-567-8902</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div style="height:16px" aria-hidden="true"
                                                                class="wp-block-spacer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="block-86" class="widget widget_block">
                                                    <div
                                                        class="wp-block-qi-blocks-icon-with-text qodef-block-container qodef-widget-block-7f56c795">
                                                        <div
                                                            class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content qodef-column-responsive--never">
                                                            <div class="qodef-m-icon-wrapper"><a
                                                                    href="https://bridge510.qodeinteractive.com/contact-us/">
                                                                    <div class="qodef-m-icon-holder"><svg
                                                                            viewBox="0 0 16.3 16.3" height="16.3"
                                                                            width="16.3"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill="#001659"
                                                                                transform="translate(0)"
                                                                                d="M.834,11.734A8.08,8.08,0,0,1,.7,4.856,8.057,8.057,0,0,1,5.855.325,8.328,8.328,0,0,1,8.15,0a8.132,8.132,0,0,1,8,6.655,5.867,5.867,0,0,1-.139,3.163,2.836,2.836,0,0,1-2.4,2.082,4.058,4.058,0,0,1-.462.028,3.243,3.243,0,0,1-2.676-1.388l-.02-.026a3.405,3.405,0,0,1-2.763,1.543,3.652,3.652,0,0,1-.674-.066A3.341,3.341,0,0,1,4.36,9.41,4.175,4.175,0,0,1,4.4,6.937a4.1,4.1,0,0,1,1.392-2,3.244,3.244,0,0,1,4.474.415c.011-.061.021-.12.031-.177a.683.683,0,0,1,.766-.616.689.689,0,0,1,.463.26.762.762,0,0,1,.135.572c-.1.7-.2,1.411-.3,2.1-.041.292-.084.583-.125.875A1.862,1.862,0,0,0,11.7,9.836a2.006,2.006,0,0,0,1.483.706,1.72,1.72,0,0,0,.469-.066,1.52,1.52,0,0,0,.987-.96A3.9,3.9,0,0,0,14.857,7.4,6.629,6.629,0,0,0,11.44,2.252a6.609,6.609,0,0,0-3.265-.869,6.762,6.762,0,0,0-1.3,13.4,7.05,7.05,0,0,0,1.31.126,6.729,6.729,0,0,0,3.4-.94,1.088,1.088,0,0,1,.6-.155.624.624,0,0,1,.561.554.681.681,0,0,1-.338.723,7.88,7.88,0,0,1-2.406,1,8.29,8.29,0,0,1-1.86.212A8.136,8.136,0,0,1,.834,11.734ZM6.568,6.1a2.827,2.827,0,0,0-.437,3.8,1.873,1.873,0,0,0,1.448.764,2.023,2.023,0,0,0,1.242-.434,2.852,2.852,0,0,0,.6-3.7,1.917,1.917,0,0,0-1.587-.905A2.014,2.014,0,0,0,6.568,6.1Z"
                                                                                id="mail-icon"></path>
                                                                        </svg>
                                                                    </div>
                                                                </a></div>
                                                            <div class="qodef-m-content">
                                                                <div class="qodef-m-text"><a
                                                                        href="/cdn-cgi/l/email-protection#bfddcdd6dbd8da8a8e8fffced0dbda91dcd0d2">
                                                                        <span class="__cf_email__"
                                                                            data-cfemail="2240504b46454717131262534d46470c414d4f">[email&#160;protected]</span></a><br>
                                                                    <a
                                                                        href="/cdn-cgi/l/email-protection#0361716a67646636323343726c67662d606c6e"><span
                                                                            class="__cf_email__"
                                                                            data-cfemail="f391819a979496b3968b929e839f96dd909c9e">[email&#160;protected]</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column4 footer_col4">
                                            <div class="column_inner">
                                                <div id="block-44" class="widget widget_block">
                                                    <h4 class="wp-block-heading">Our Locations</h4>
                                                </div>
                                                <div id="block-52" class="widget widget_block">
                                                    <div style="height:25px" aria-hidden="true"
                                                        class="wp-block-spacer"></div>
                                                </div>
                                                <div id="block-51" class="widget widget_block">
                                                    <div
                                                        class="wp-block-qi-blocks-image-gallery qodef-block-container qodef-widget-block-1391f7f0">
                                                        <div
                                                            class="qi-block-image-gallery qodef-block qodef-m qi-block-fslightbox-popup qodef-popup-gallery">
                                                            <div
                                                                class="qodef-gutenberg-section qodef--columns qodef-col-num--1 qodef-responsive--predefined">
                                                                <div class="qodef-gutenberg-row">
                                                                    <div
                                                                        class="qodef-gutenberg-column qodef-e qodef-image-wrapper">
                                                                        <div
                                                                            class="qodef-gutenberg-column-inner qodef-e-inner">
                                                                            <a class="qodef-popup-item"
                                                                                href="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01.png"
                                                                                data-type="image"
                                                                                data-fslightbox="gallery-103"><img
                                                                                    loading="lazy" loading="lazy"
                                                                                    decoding="async" width="800"
                                                                                    height="455"
                                                                                    class="qodef-e-image wp-image-586"
                                                                                    src="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01.png"
                                                                                    alt="a"
                                                                                    srcset="https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01.png 800w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01-300x171.png 300w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01-768x437.png 768w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01-700x398.png 700w, https://bridge510.qodeinteractive.com/wp-content/uploads/2018/12/footer-img-01-600x341.png 600w"
                                                                                    sizes="(max-width: 800px) 100vw, 800px" /></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom_holder">
                        <div style="background-color: #1d263f;height: 1px" class="footer_bottom_border "></div>
                        <div class="container">
                            <div class="container_inner">
                                <div class="three_columns footer_bottom_columns clearfix">
                                    <div class="column1 footer_bottom_column">
                                        <div class="column_inner">
                                            <div class="footer_bottom">

                                                <figure class="wp-block-image size-full"><img loading="lazy"
                                                        loading="lazy" decoding="async" width="300"
                                                        height="80"
                                                        src="https://bridge510.qodeinteractive.com/wp-content/uploads/2024/02/bridge-logo.png"
                                                        alt="s" class="wp-image-7721" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column2 footer_bottom_column">
                                        <div class="column_inner">
                                            <div class="footer_bottom">

                                                <div style="height:23px" aria-hidden="true"
                                                    class="wp-block-spacer"></div>
                                                <p style="font-size: 14px;">© 2024 <a
                                                        href="https://qodeinteractive.com/" target="_blank"
                                                        rel="noreferrer noopener">Qode Interactive</a>, All Rights
                                                    Reserved</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column3 footer_bottom_column">
                                        <div class="column_inner">
                                            <div class="footer_bottom">
                                                <span class='q_social_icon_holder square_social' data-color=#fff
                                                    data-hover-background-color=#ff5e14
                                                    data-hover-border-color=#ff5e14><a itemprop='url'
                                                        href='https://www.facebook.com/QodeInteractive/'
                                                        target='_blank'><span class='fa-stack '
                                                            style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;font-size: 20px;'><i
                                                                class="qode_icon_font_awesome fa fa-facebook "
                                                                style="color: #fff;font-size: 20px;"></i></span></a></span><span
                                                    class='q_social_icon_holder square_social' data-color=#fff
                                                    data-hover-background-color=#ff5e14
                                                    data-hover-border-color=#ff5e14><a itemprop='url'
                                                        href='https://www.pinterest.com/qodeinteractive'
                                                        target='_blank'><span class='fa-stack '
                                                            style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;font-size: 18px;'><i
                                                                class="qode_icon_font_awesome fa fa-pinterest-p "
                                                                style="color: #fff;font-size: 18px;"></i></span></a></span><span
                                                    class='q_social_icon_holder square_social' data-color=#fff
                                                    data-hover-background-color=#ff5e14
                                                    data-hover-border-color=#ff5e14><a itemprop='url'
                                                        href='https://twitter.com/QodeInteractive'
                                                        target='_blank'><span class='fa-stack '
                                                            style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;font-size: 18px;'><i
                                                                class="qode_icon_font_awesome fa fa-twitter "
                                                                style="color: #fff;font-size: 18px;"></i></span></a></span><span
                                                    class='q_social_icon_holder square_social' data-color=#fff
                                                    data-hover-background-color=#ff5e14
                                                    data-hover-border-color=#ff5e14><a itemprop='url'
                                                        href='https://dribbble.com/qodeinteractive'
                                                        target='_blank'><span class='fa-stack '
                                                            style='background-color: #0a1229;border-color: #1d263f;border-width: 1px;font-size: 18px;'><i
                                                                class="qode_icon_font_awesome fa fa-dribbble "
                                                                style="color: #fff;font-size: 18px;"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

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
