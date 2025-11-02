<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
        (function(exports, d) {
            var _isReady = false,
                _event,
                _fns = [];

            function onReady(event) {
                d.removeEventListener("DOMContentLoaded", onReady);
                _isReady = true;
                _event = event;
                _fns.forEach(function(_fn) {
                    var fn = _fn[0],
                        context = _fn[1];
                    fn.call(context || exports, window.jQuery);
                });
            }

            function onReadyIe(event) {
                if (d.readyState === "complete") {
                    d.detachEvent("onreadystatechange", onReadyIe);
                    _isReady = true;
                    _event = event;
                    _fns.forEach(function(_fn) {
                        var fn = _fn[0],
                            context = _fn[1];
                        fn.call(context || exports, event);
                    });
                }
            }

            d.addEventListener && d.addEventListener("DOMContentLoaded", onReady) ||
                d.attachEvent && d.attachEvent("onreadystatechange", onReadyIe);

            function domReady(fn, context) {
                if (_isReady) {
                    fn.call(context, _event);
                }

                _fns.push([fn, context]);
            }

            exports.mesmerizeDomReady = domReady;
        })(window, document);
    </script>
    <title>Risk Değerlendirme &#8211; RISK ANALIZ / RISK ANALYSIS /تحليل المخاطر</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="RISK ANALIZ / RISK ANALYSIS /تحليل المخاطر &raquo; akışı"
        href="https://www.riskanaliz.com.tr/feed/" />
    <link rel="alternate" type="application/rss+xml"
        title="RISK ANALIZ / RISK ANALYSIS /تحليل المخاطر &raquo; yorum akışı"
        href="https://www.riskanaliz.com.tr/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/www.riskanaliz.com.tr\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"
            }
        };
        /*! This file is auto-generated */
        ! function(s, n) {
            var o, i, e;

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
                    a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === a[t]
                })
            }

            function u(e, t) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
                    if (0 !== n.data[a]) return !1;
                return !0
            }

            function f(e, t, n, a) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !a(e, "\ud83e\udedf")
                }
                return !1
            }

            function g(e, t, n, a) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : s.createElement("canvas"),
                    o = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    i[e] = t(o, e, n, a)
                }), i
            }

            function t(e) {
                var t = s.createElement("script");
                t.src = e, t.defer = !0, s.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                s.addEventListener("DOMContentLoaded", e, {
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
                        var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p
                                .toString(), u.toString()
                            ].join(",") + "));",
                            a = new Blob([e], {
                                type: "text/javascript"
                            }),
                            r = new Worker(URL.createObjectURL(a), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(r.onmessage = function(e) {
                            c(n = e.data), r.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = g(i, f, p, u))
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
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://www.riskanaliz.com.tr/wp-includes/css/dist/block-library/style.min.css?ver=6.8.3' type='text/css'
        media='all' />
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

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='CNACB_styles-css'
        href='https://www.riskanaliz.com.tr/wp-content/plugins/call-now-and-chat-buttons/css/styles.css?ver=6.8.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-icons-css'
        href='https://www.riskanaliz.com.tr/wp-content/plugins/call-now-and-chat-buttons/css/bootstrap-icons.min.css?ver=6.8.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://www.riskanaliz.com.tr/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mesmerize-style-css'
        href='https://www.riskanaliz.com.tr/wp-content/themes/mesmerize-pro/style.min.css?ver=1.6.184' type='text/css'
        media='all' />
    <style id='mesmerize-style-inline-css' type='text/css'>
        img.logo.dark,
        img.custom-logo {
            width: auto;
            max-height: 100px !important;
        }

        /** cached kirki style */
        .footer .footer-content {
            background-color: #201F25;
        }

        .footer h1,
        .footer h2,
        .footer h3,
        .footer h4,
        .footer h5,
        .footer h6 {
            color: #FFFFFF !important;
        }

        .footer p,
        .footer {
            color: #BDBDBD;
        }

        .footer a {
            color: #BDBDBD;
        }

        .footer a:hover {
            color: #CC4543;
        }

        .footer a .fa,
        .footer .fa {
            color: #FFFFFF;
        }

        .footer a:hover .fa {
            color: #3F464C;
        }

        .footer-border-accent {
            border-color: rgb(32, 31, 37) !important;
        }

        .footer-bg-accent {
            background-color: rgb(32, 31, 37) !important;
        }

        body {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-style: normal;
            color: #8D8E90;
        }

        body h1 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 2.625rem;
            line-height: 4rem;
            color: #201F25;
        }

        body h2 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 2.188rem;
            line-height: 3rem;
            text-transform: none;
            color: #201F25;
        }

        body h3 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 1.313rem;
            line-height: 2.25rem;
            text-transform: none;
            color: #201F25;
        }

        body h4 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 0.963rem;
            line-height: 1.75rem;
            letter-spacing: 0.0625rem;
            text-transform: none;
            color: #201F25;
        }

        body h5 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 800;
            font-style: normal;
            font-size: 0.875rem;
            line-height: 1.5rem;
            letter-spacing: 2px;
            text-transform: none;
            color: #201F25;
        }

        body h6 {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 800;
            font-style: normal;
            font-size: 0.766rem;
            line-height: 1.375rem;
            letter-spacing: 0.1875rem;
            color: #201F25;
        }

        .header-homepage:not(.header-slide).color-overlay:before {
            background: #000000;
        }

        .header-homepage:not(.header-slide) .background-overlay,
        .header-homepage:not(.header-slide).color-overlay::before {
            opacity: 0.63;
        }

        .mesmerize-front-page .header-separator .svg-white-bg {
            fill: rgb(32, 31, 37) !important;
        }

        .mesmerize-front-page .header-separator svg {
            height: 87px !important;
        }

        .header.color-overlay:before {
            background: #201F25;
        }

        .header .background-overlay,
        .header.color-overlay::before {
            opacity: 0.71;
        }

        .header-homepage p.header-subtitle2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-size: 1.4em;
            line-height: 130%;
            letter-spacing: 0px;
            text-transform: none;
            color: #ffffff;
            background: rgba(0, 0, 0, 0);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .header-homepage h1.hero-title {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 100;
            font-style: normal;
            font-size: 3em;
            line-height: 114%;
            letter-spacing: 0.9px;
            text-transform: none;
            color: #FFFFFF;
        }

        .header-homepage .hero-title {
            margin-top: 0;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .header-homepage p.header-subtitle {
            margin-top: 0;
            margin-bottom: 20px;
            font-family: Muli, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-size: 1.3em;
            line-height: 130%;
            letter-spacing: 0px;
            text-transform: none;
            color: #ffffff;
            background: rgba(0, 0, 0, 0);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .header-buttons-wrapper {
            background: rgba(0, 0, 0, 0);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .header-homepage .header-description-row {
            padding-top: 10%;
            padding-bottom: 10%;
        }

        .inner-header-description {
            padding-top: 5%;
            padding-bottom: 5%;
        }

        .inner-header-description .header-subtitle {
            font-family: Muli, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-style: normal;
            font-size: 1.3em;
            line-height: 130%;
            letter-spacing: 0px;
            text-transform: none;
            color: #ffffff;
        }

        .inner-header-description h1.hero-title {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 3.5em;
            line-height: 114%;
            letter-spacing: 0.9px;
            text-transform: none;
            color: #FFFFFF;
        }

        .header-top-bar .header-top-bar-area.area-left span {
            color: #FFFFFF;
        }

        .header-top-bar .header-top-bar-area.area-left i.fa {
            color: #999;
        }

        .header-top-bar .header-top-bar-area.area-left .top-bar-social-icons i {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-left .top-bar-social-icons i:hover {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-left .top-bar-menu>li>a {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-left .top-bar-menu>li>a:hover {
            color: #fff !important;
        }

        .header-top-bar .header-top-bar-area.area-left .top-bar-menu>li>a:visited {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-left span.top-bar-text {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-right span {
            color: #FFFFFF;
        }

        .header-top-bar .header-top-bar-area.area-right i.fa {
            color: #999;
        }

        .header-top-bar .header-top-bar-area.area-right .top-bar-social-icons i {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-right .top-bar-social-icons i:hover {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-right .top-bar-menu>li>a {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-right .top-bar-menu>li>a:hover {
            color: #fff !important;
        }

        .header-top-bar .header-top-bar-area.area-right .top-bar-menu>li>a:visited {
            color: #fff;
        }

        .header-top-bar .header-top-bar-area.area-right span.top-bar-text {
            color: #fff;
        }

        .mesmerize-inner-page .fixto-fixed .main_menu_col,
        .mesmerize-inner-page .fixto-fixed .main-menu {
            justify-content: flex-end !important;
        }

        .mesmerize-inner-page .navigation-bar.fixto-fixed {
            background-color: rgba(32, 31, 37, 0.4) !important;
        }

        .mesmerize-inner-page #main_menu>li>a {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-style: normal;
            font-size: 14px;
            line-height: 250%;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .mesmerize-front-page .fixto-fixed .main_menu_col,
        .mesmerize-front-page .fixto-fixed .main-menu {
            justify-content: flex-end !important;
        }

        .mesmerize-front-page .navigation-bar.fixto-fixed {
            background-color: rgba(32, 31, 37, 0.4) !important;
        }

        .mesmerize-front-page #main_menu>li>a {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-style: normal;
            font-size: 14px;
            line-height: 250%;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .mesmerize-front-page #main_menu>li li>a {
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 0.875rem;
            line-height: 120%;
            letter-spacing: 0px;
            text-transform: none;
        }

        .mesmerize-front-page .header-nav-area .social-icons a {
            color: #FFFFFF !important;
        }

        .mesmerize-front-page .fixto-fixed .header-nav-area .social-icons a {
            color: #000000 !important;
        }

        .mesmerize-front-page .nav-search.widget_search * {
            color: #FFFFFF;
        }

        .mesmerize-front-page .nav-search.widget_search input {
            border-color: #FFFFFF;
        }

        .mesmerize-front-page .nav-search.widget_search input::-webkit-input-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-front-page .nav-search.widget_search input:-ms-input-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-front-page .nav-search.widget_search input:-moz-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-front-page .fixto-fixed .nav-search.widget_search * {
            color: #000000;
        }

        .mesmerize-front-page .fixto-fixed .nav-search.widget_search input {
            border-color: #000000;
        }

        .mesmerize-front-page .fixto-fixed .nav-search.widget_search input::-webkit-input-placeholder {
            color: #000000;
        }

        .mesmerize-front-page .fixto-fixed .nav-search.widget_search input:-ms-input-placeholder {
            color: #000000;
        }

        .mesmerize-front-page .fixto-fixed .nav-search.widget_search input:-moz-placeholder {
            color: #000000;
        }

        .mesmerize-inner-page .inner_header-nav-area .social-icons a {
            color: #FFFFFF !important;
        }

        .mesmerize-inner-page .fixto-fixed .inner_header-nav-area .social-icons a {
            color: #000000 !important;
        }

        .mesmerize-inner-page .nav-search.widget_search * {
            color: #FFFFFF;
        }

        .mesmerize-inner-page .nav-search.widget_search input {
            border-color: #FFFFFF;
        }

        .mesmerize-inner-page .nav-search.widget_search input::-webkit-input-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-inner-page .nav-search.widget_search input:-ms-input-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-inner-page .nav-search.widget_search input:-moz-placeholder {
            color: #FFFFFF;
        }

        .mesmerize-inner-page .fixto-fixed .nav-search.widget_search * {
            color: #000000;
        }

        .mesmerize-inner-page .fixto-fixed .nav-search.widget_search input {
            border-color: #000000;
        }

        .mesmerize-inner-page .fixto-fixed .nav-search.widget_search input::-webkit-input-placeholder {
            color: #000000;
        }

        .mesmerize-inner-page .fixto-fixed .nav-search.widget_search input:-ms-input-placeholder {
            color: #000000;
        }

        .mesmerize-inner-page .fixto-fixed .nav-search.widget_search input:-moz-placeholder{color:#000000;}[data-component="offcanvas"] i.fa{color:rgb(255,255,255)!important;}[data-component="offcanvas"] .bubble {
            background-color: rgb(255, 255, 255) !important;
        }

        .fixto-fixed [data-component="offcanvas"] i.fa {
            color: rgb(255, 255, 255) !important;
        }

        .fixto-fixed [data-component="offcanvas"] .bubble {
            background-color: rgb(255, 255, 255) !important;
        }

        #offcanvas-wrapper {
            background-color: rgba(34, 43, 52, 0.593) !important;
        }

        html.has-offscreen body:after {
            background-color: rgba(34, 43, 52, 0.7) !important;
        }

        #offcanvas-wrapper *:not(.arrow) {
            color: #ffffff !important;
        }

        #offcanvas_menu li.open,
        #offcanvas_menu li.current-menu-item,
        #offcanvas_menu li.current-menu-item>a,
        #offcanvas_menu li.current_page_item,
        #offcanvas_menu li.current_page_item>a {
            background-color: #FFFFFF;
        }

        #offcanvas_menu li.open>a,
        #offcanvas_menu li.open>a>i,
        #offcanvas_menu li.current-menu-item>a,
        #offcanvas_menu li.current_page_item>a {
            color: #BB0F0F !important;
        }

        #offcanvas_menu li.open>a,
        #offcanvas_menu li.current-menu-item>a,
        #offcanvas_menu li.current_page_item>a {
            border-left-color: #BB0F0F !important;
        }

        #offcanvas_menu li>ul {
            background-color: rgba(104, 107, 119, 0.564);
        }

        #offcanvas_menu li>a {
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 100%;
            letter-spacing: 0px;
            text-transform: none;
        }

        .navigation-bar.homepage:not(.coloured-nav) a.text-logo,
        .navigation-bar.homepage:not(.coloured-nav) #main_menu li.logo>a.text-logo,
        .navigation-bar.homepage:not(.coloured-nav) #main_menu li.logo>a.text-logo:hover {
            color: #FFFFFF;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 1.6rem;
            line-height: 100%;
            letter-spacing: 0px;
            text-transform: uppercase;
        }

        .navigation-bar.homepage.fixto-fixed a.text-logo,
        .navigation-bar.homepage.fixto-fixed .dark-logo a.text-logo {
            color: #FFFFFF !important;
        }

        .navigation-bar:not(.homepage) a.text-logo,
        .navigation-bar:not(.homepage) #main_menu li.logo>a.text-logo,
        .navigation-bar:not(.homepage) #main_menu li.logo>a.text-logo:hover,
        .navigation-bar:not(.homepage) a.text-logo,
        .navigation-bar:not(.homepage) #main_menu li.logo>a.text-logo,
        .navigation-bar:not(.homepage) #main_menu li.logo>a.text-logo:hover {
            color: #FFFFFF;
            font-family: inherit;
            font-weight: 600;
            font-size: 1.6rem;
            line-height: 100%;
            letter-spacing: 0px;
            text-transform: uppercase;
        }

        .navigation-bar.fixto-fixed:not(.homepage) a.text-logo,
        .navigation-bar.fixto-fixed:not(.homepage) .dark-logo a.text-logo,
        .navigation-bar.alternate:not(.homepage) a.text-logo,
        .navigation-bar.alternate:not(.homepage) .dark-logo a.text-logo {
            color: #FFFFFF !important;
        }

        .slide-progress {
            background: rgba(3, 169, 244, 0.5);
            height: 5px;
        }

        .header-slider-navigation.separated .owl-nav .owl-next,
        .header-slider-navigation.separated .owl-nav .owl-prev {
            margin-left: 40px;
            margin-right: 40px;
        }

        .header-slider-navigation .owl-nav .owl-next,
        .header-slider-navigation .owl-nav .owl-prev {
            padding: 0px;
            background: rgba(0, 0, 0, 0);
        }

        .header-slider-navigation .owl-nav .owl-next i,
        .header-slider-navigation .owl-nav .owl-prev i {
            font-size: 50px;
            width: 50px;
            height: 50px;
            color: #ffffff;
        }

        .header-slider-navigation .owl-nav .owl-next:hover,
        .header-slider-navigation .owl-nav .owl-prev:hover {
            background: rgba(0, 0, 0, 0);
        }

        .header-slider-navigation .owl-dots {
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .header-slider-navigation .owl-dots .owl-dot span {
            background: rgba(255, 255, 255, 0.3);
        }

        .header-slider-navigation .owl-dots .owl-dot.active span,
        .header-slider-navigation .owl-dots .owl-dot:hover span {
            background: #ffffff;
        }

        .header-slider-navigation .owl-dots .owl-dot {
            margin: 0px 7px;
        }

        @media (min-width: 767px) {
            .footer .footer-content {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        @media (max-width: 1023px) {
            body {
                font-size: calc(16px * 0.875);
            }
        }

        @media (min-width: 1024px) {
            body {
                font-size: 16px;
            }
        }

        @media only screen and (min-width: 768px) {
            body h1 {
                font-size: 3rem;
            }

            body h2 {
                font-size: 2.5rem;
            }

            body h3 {
                font-size: 1.5rem;
            }

            body h4 {
                font-size: 1.1rem;
            }

            body h5 {
                font-size: 1rem;
            }

            body h6 {
                font-size: 0.875rem;
            }

            .header-homepage p.header-subtitle2 {
                font-size: 1.4em;
            }

            .header-homepage h1.hero-title {
                font-size: 5.5rem;
            }

            .header-homepage p.header-subtitle {
                font-size: 1.3em;
            }

            .header-content .align-holder {
                width: 85% !important;
            }

            .inner-header-description {
                text-align: center !important;
            }

            .inner-header-description .header-subtitle {
                font-size: 1.3em;
            }

            .inner-header-description h1.hero-title {
                font-size: 3.5em;
            }
        }

        @media screen and (min-width: 768px) {
            .header {
                background-position: center center;
            }
        }

        @media screen and (max-width:767px) {
            .header-homepage .header-description-row {
                padding-top: 15%;
                padding-bottom: 10%;
            }
        }
    </style>
    <link rel='stylesheet' id='mesmerize-fonts-css' href=""
        data-href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%2C300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic%2C400%2C400italic%2C700%2C700italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2C500%2C700%2C900%7CMartel%3A200%2C300%2Cregular%2C600%2C700%2C800%2C900&#038;subset=latin%2Clatin-ext&#038;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mesmerize-style-bundle-css'
        href='https://www.riskanaliz.com.tr/wp-content/themes/mesmerize-pro/pro/assets/css/theme.bundle.min.css?ver=1.6.184'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://www.riskanaliz.com.tr/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="https://www.riskanaliz.com.tr/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" id="jquery-js-after">
        /* <![CDATA[ */

        (function() {
            function setHeaderTopSpacing() {

                setTimeout(function() {
                    var headerTop = document.querySelector('.header-top');
                    var headers = document.querySelectorAll(
                        '.header-wrapper .header,.header-wrapper .header-homepage');

                    for (var i = 0; i < headers.length; i++) {
                        var item = headers[i];
                        item.style.paddingTop = headerTop.getBoundingClientRect().height + "px";
                    }

                    var languageSwitcher = document.querySelector('.mesmerize-language-switcher');

                    if (languageSwitcher) {
                        languageSwitcher.style.top = "calc( " + headerTop.getBoundingClientRect().height +
                            "px + 1rem)";
                    }

                }, 100);


            }

            window.addEventListener('resize', setHeaderTopSpacing);
            window.mesmerizeSetHeaderTopSpacing = setHeaderTopSpacing
            mesmerizeDomReady(setHeaderTopSpacing);
        })();


        /* ]]> */
    </script>
    <link rel="https://api.w.org/" href="https://www.riskanaliz.com.tr/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://www.riskanaliz.com.tr/wp-json/wp/v2/pages/135" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://www.riskanaliz.com.tr/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.8.3" />
    <link rel="canonical" href="{{ route('check.get') }}" />
    <link rel='shortlink' href='https://www.riskanaliz.com.tr/?p=135' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://www.riskanaliz.com.tr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.riskanaliz.com.tr%2Fbireysel-basvuru%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://www.riskanaliz.com.tr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.riskanaliz.com.tr%2Fbireysel-basvuru%2F&#038;format=xml" />
    <script type="text/javascript" data-name="async-styles">
        (function() {
            var links = document.querySelectorAll('link[data-href]');
            for (var i = 0; i < links.length; i++) {
                var item = links[i];
                item.href = item.getAttribute('data-href')
            }
        })();
    </script>
    <style data-prefix="inner_header" data-name="menu-variant-style">
        /** cached menu style */
        .mesmerize-inner-page ul.dropdown-menu>li {
            color: #fff;
        }

        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu>li {
            color: #FFFFFF;
        }

        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>li>a,
        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>li>a,
        ul.dropdown-menu.default>li>a,
        .mesmerize-inner-page ul.dropdown-menu.default>li>a {
            border-bottom: 3px solid transparent;
        }

        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>.current_page_item>a,
        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>.current-menu-item>a,
        ul.dropdown-menu.default>.current_page_item>a,
        .mesmerize-inner-page ul.dropdown-menu.default>.current-menu-item>a {
            border-bottom-color: #BB0F0F;
        }

        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>li:not(.current-menu-item):not(.current_page_item):hover>a,
        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>li:not(.current-menu-item):not(.current_page_item).hover>a,
        ul.dropdown-menu.default>li:not(.current-menu-item):not(.current_page_item):hover>a,
        .mesmerize-inner-page ul.dropdown-menu.default>li:not(.current-menu-item):not(.current_page_item).hover>a {
            color: #BB0F0F;
        }

        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>.current_page_item>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>.current-menu-item>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.default>.current_page_item>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.default>.current-menu-item>a {
            border-bottom-color: #BB0F0F;
        }

        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>li:not(.current-menu-item):not(.current_page_item):hover>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>li:not(.current-menu-item):not(.current_page_item).hover>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.default>li:not(.current-menu-item):not(.current_page_item):hover>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.default>li:not(.current-menu-item):not(.current_page_item).hover>a {
            color: #BB0F0F;
        }

        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>.current_page_item>a,
        .mesmerize-inner-page ul.dropdown-menu.active-line-bottom>.current-menu-item>a {
            color: #fff;
        }

        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>.current_page_item>a,
        .mesmerize-inner-page .fixto-fixed ul.dropdown-menu.active-line-bottom>.current-menu-item>a {
            color: #FFFFFF;
        }

        .mesmerize-inner-page ul.dropdown-menu ul {
            background-color: #fff;
        }

        .mesmerize-inner-page ul.dropdown-menu ul li {
            color: #6b7c93;
        }

        .mesmerize-inner-page ul.dropdown-menu ul li.hover,
        .mesmerize-inner-page ul.dropdown-menu ul li:hover {
            background-color: #f8f8f8;
            color: #000;
        }
    </style>
    <style data-name="menu-align">
        .mesmerize-inner-page .main-menu,
        .mesmerize-inner-page .main_menu_col {
            justify-content: flex-end;
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <style type="text/css" id="custom-background-css">
        body.custom-background {
            background-color: #ffffff;
        }
    </style>
    <link rel="icon" href="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/cropped-favicon-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/cropped-favicon-270x270.png" />
    <style type="text/css" id="wp-custom-css">
        .mc4wp-form-fields input[type=submit] {
            background-color: #CC4543 !important;
            outline: #CC4543 solid 1px !important;
            border: none !important;
        }


        #subscribe-1 .mc4wp-form-fields input[type=submit] {
            background-color: #201F25 !important;
            border: none !important;
        }
    </style>
    <style id="page-content-custom-styles">
    </style>
    <style data-name="background-content-colors">
        .mesmerize-inner-page .page-content,
        .mesmerize-inner-page .content,
        .mesmerize-front-page.mesmerize-content-padding .page-content {
            background-color: #ffffff;
        }
    </style>
    <style data-name="site-colors">
        /** cached colors style */
        a,
        .comment-reply-link,
        a.read-more {
            color: #bb0f0f;
        }

        a:hover,
        .comment-reply-link:hover,
        .sidebar .widget>ul>li a:hover,
        a.read-more:hover {
            color: #CF2323;
        }

        .contact-form-wrapper input[type=submit],
        .button,
        .nav-links .numbers-navigation span.current,
        .post-comments .navigation .numbers-navigation span.current,
        .nav-links .numbers-navigation a:hover,
        .post-comments .navigation .numbers-navigation a:hover {
            background-color: #bb0f0f;
            border-color: #bb0f0f;
        }

        .contact-form-wrapper input[type=submit]:hover,
        .nav-links .prev-navigation a:hover,
        .post-comments .navigation .prev-navigation a:hover,
        .nav-links .next-navigation a:hover,
        .post-comments .navigation .next-navigation a:hover,
        .button:hover {
            background-color: #CF2323;
            border-color: #CF2323;
        }

        .post-comments,
        .sidebar .widget,
        .post-list .post-list-item {
            //border-bottom-color:#bb0f0f; } .nav-links .prev-navigation a, .post-comments .navigation .prev-navigation a, .nav-links .next-navigation a, .post-comments .navigation .next-navigation a{ border-color:#bb0f0f; color:#bb0f0f; } .tags-list a:hover{ border-color:#bb0f0f; background-color:#bb0f0f; } svg.section-separator-top path.svg-white-bg, svg.section-separator-bottom path.svg-white-bg{ fill: #bb0f0f; } p.color1{ color : #bb0f0f; } span.color1{ color : #bb0f0f; } h1.color1{ color : #bb0f0f; } h2.color1{ color : #bb0f0f; } h3.color1{ color : #bb0f0f; } h4.color1{ color : #bb0f0f; } h5.color1{ color : #bb0f0f; } h6.color1{ color : #bb0f0f; } .card.bg-color1, .bg-color1{ background-color:#bb0f0f; } a.color1:not(.button){ color:#bb0f0f; } a.color1:not(.button):hover{ color:#CF2323; } button.color1, .button.color1{ background-color:#bb0f0f; border-color:#bb0f0f; } button.color1:hover, .button.color1:hover{ background-color:#CF2323; border-color:#CF2323; } button.outline.color1, .button.outline.color1{ background:none; border-color:#bb0f0f; color:#bb0f0f; } button.outline.color1:hover, .button.outline.color1:hover{ background:none; border-color:rgba(187,15,15,0.7); color:rgba(187,15,15,0.9); } i.fa.color1{ color:#bb0f0f; } i.fa.icon.bordered.color1{ border-color:#bb0f0f; } i.fa.icon.reverse.color1{ background-color:#bb0f0f; color: #ffffff; } i.fa.icon.reverse.color-white{ color: #d5d5d5; } i.fa.icon.bordered.color1{ border-color:#bb0f0f; } i.fa.icon.reverse.bordered.color1{ background-color:#bb0f0f; color: #ffffff; } .top-right-triangle.color1{ border-right-color:#bb0f0f; } .checked.decoration-color1 li:before { color:#bb0f0f; } .stared.decoration-color1 li:before { color:#bb0f0f; } .card.card-color1{ background-color:#bb0f0f; } .card.bottom-border-color1{ border-bottom-color: #bb0f0f; } .grad-180-transparent-color1{  background-image: linear-gradient(180deg, rgba(187,15,15,0) 0%, rgba(187,15,15,0) 50%, rgba(187,15,15,0.6) 78%, rgba(187,15,15,0.9) 100%) !important; } .border-color1{ border-color: #bb0f0f; } .circle-counter.color1 .circle-bar{ stroke: #bb0f0f; } p.color2{ color : #201f25; } span.color2{ color : #201f25; } h1.color2{ color : #201f25; } h2.color2{ color : #201f25; } h3.color2{ color : #201f25; } h4.color2{ color : #201f25; } h5.color2{ color : #201f25; } h6.color2{ color : #201f25; } .card.bg-color2, .bg-color2{ background-color:#201f25; } a.color2:not(.button){ color:#201f25; } a.color2:not(.button):hover{ color:#343339; } button.color2, .button.color2{ background-color:#201f25; border-color:#201f25; } button.color2:hover, .button.color2:hover{ background-color:#343339; border-color:#343339; } button.outline.color2, .button.outline.color2{ background:none; border-color:#201f25; color:#201f25; } button.outline.color2:hover, .button.outline.color2:hover{ background:none; border-color:rgba(32,31,37,0.7); color:rgba(32,31,37,0.9); } i.fa.color2{ color:#201f25; } i.fa.icon.bordered.color2{ border-color:#201f25; } i.fa.icon.reverse.color2{ background-color:#201f25; color: #ffffff; } i.fa.icon.reverse.color-white{ color: #d5d5d5; } i.fa.icon.bordered.color2{ border-color:#201f25; } i.fa.icon.reverse.bordered.color2{ background-color:#201f25; color: #ffffff; } .top-right-triangle.color2{ border-right-color:#201f25; } .checked.decoration-color2 li:before { color:#201f25; } .stared.decoration-color2 li:before { color:#201f25; } .card.card-color2{ background-color:#201f25; } .card.bottom-border-color2{ border-bottom-color: #201f25; } .grad-180-transparent-color2{  background-image: linear-gradient(180deg, rgba(32,31,37,0) 0%, rgba(32,31,37,0) 50%, rgba(32,31,37,0.6) 78%, rgba(32,31,37,0.9) 100%) !important; } .border-color2{ border-color: #201f25; } .circle-counter.color2 .circle-bar{ stroke: #201f25; } p.color-white{ color : #ffffff; } span.color-white{ color : #ffffff; } h1.color-white{ color : #ffffff; } h2.color-white{ color : #ffffff; } h3.color-white{ color : #ffffff; } h4.color-white{ color : #ffffff; } h5.color-white{ color : #ffffff; } h6.color-white{ color : #ffffff; } .card.bg-color-white, .bg-color-white{ background-color:#ffffff; } a.color-white:not(.button){ color:#ffffff; } a.color-white:not(.button):hover{ color:#FFFFFF; } button.color-white, .button.color-white{ background-color:#ffffff; border-color:#ffffff; } button.color-white:hover, .button.color-white:hover{ background-color:#FFFFFF; border-color:#FFFFFF; } button.outline.color-white, .button.outline.color-white{ background:none; border-color:#ffffff; color:#ffffff; } button.outline.color-white:hover, .button.outline.color-white:hover{ background:none; border-color:rgba(255,255,255,0.7); color:rgba(255,255,255,0.9); } i.fa.color-white{ color:#ffffff; } i.fa.icon.bordered.color-white{ border-color:#ffffff; } i.fa.icon.reverse.color-white{ background-color:#ffffff; color: #ffffff; } i.fa.icon.reverse.color-white{ color: #d5d5d5; } i.fa.icon.bordered.color-white{ border-color:#ffffff; } i.fa.icon.reverse.bordered.color-white{ background-color:#ffffff; color: #ffffff; } .top-right-triangle.color-white{ border-right-color:#ffffff; } .checked.decoration-color-white li:before { color:#ffffff; } .stared.decoration-color-white li:before { color:#ffffff; } .card.card-color-white{ background-color:#ffffff; } .card.bottom-border-color-white{ border-bottom-color: #ffffff; } .grad-180-transparent-color-white{  background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 50%, rgba(255,255,255,0.6) 78%, rgba(255,255,255,0.9) 100%) !important; } .border-color-white{ border-color: #ffffff; } .circle-counter.color-white .circle-bar{ stroke: #ffffff; } p.color-black{ color : #000000; } span.color-black{ color : #000000; } h1.color-black{ color : #000000; } h2.color-black{ color : #000000; } h3.color-black{ color : #000000; } h4.color-black{ color : #000000; } h5.color-black{ color : #000000; } h6.color-black{ color : #000000; } .card.bg-color-black, .bg-color-black{ background-color:#000000; } a.color-black:not(.button){ color:#000000; } a.color-black:not(.button):hover{ color:#141414; } button.color-black, .button.color-black{ background-color:#000000; border-color:#000000; } button.color-black:hover, .button.color-black:hover{ background-color:#141414; border-color:#141414; } button.outline.color-black, .button.outline.color-black{ background:none; border-color:#000000; color:#000000; } button.outline.color-black:hover, .button.outline.color-black:hover{ background:none; border-color:rgba(0,0,0,0.7); color:rgba(0,0,0,0.9); } i.fa.color-black{ color:#000000; } i.fa.icon.bordered.color-black{ border-color:#000000; } i.fa.icon.reverse.color-black{ background-color:#000000; color: #ffffff; } i.fa.icon.reverse.color-white{ color: #d5d5d5; } i.fa.icon.bordered.color-black{ border-color:#000000; } i.fa.icon.reverse.bordered.color-black{ background-color:#000000; color: #ffffff; } .top-right-triangle.color-black{ border-right-color:#000000; } .checked.decoration-color-black li:before { color:#000000; } .stared.decoration-color-black li:before { color:#000000; } .card.card-color-black{ background-color:#000000; } .card.bottom-border-color-black{ border-bottom-color: #000000; } .grad-180-transparent-color-black{  background-image: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.6) 78%, rgba(0,0,0,0.9) 100%) !important; } .border-color-black{ border-color: #000000; } .circle-counter.color-black .circle-bar{ stroke: #000000; }                 /** cached colors style */
    </style>
</head>

<body
    class="wp-singular page-template-default page page-id-135 custom-background wp-custom-logo wp-theme-mesmerize-pro overlap-first-section mesmerize-inner-page">
    <style>
        .screen-reader-text[href="#page-content"]:focus {
            background-color: #f1f1f1;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
            clip: auto !important;
            clip-path: none;
            color: #21759b;

        }
    </style>

    @include('partials.header')

    <div id="page" class="site">
        <div class="header-wrapper">
            <div class='header  color-overlay  custom-mobile-image'
                style='; background-image:url(&quot;https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/cropped-hiking-1031628_1920-1-1-1.jpg&quot;); background-color:#201F25'>
                <div class="inner-header-description gridContainer">
                    <div class="row header-description-row">
                        <div class="col-xs col-xs-12">
                            <h1 class="hero-title">
                                Risk Değerlendirme </h1>
                        </div>
                    </div>
                </div>
                <script>
                    if (window.mesmerizeSetHeaderTopSpacing) {
                        window.mesmerizeSetHeaderTopSpacing();
                    }
                </script>
                <div class='split-header'></div>
            </div>
        </div>

        <div id='page-content' class="page-content">
            <div class="gridContainer content">
                <div id="post-135" class="post-135 page type-page status-publish hentry">
                    <div>

                        <!-- Success Message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Genel validation hataları (liste halinde) -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Hata:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('risk.post') }}" method="POST" enctype="multipart/form-data"
                            class="application-form">
                            @csrf

                            <div class="row">

                                <h3>Şirket Bilgileri</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company">Başvuru Sahibi Şirketin Ticari Ünvanı <span>*</span></label>
                                            <input type="text" name="company" id="company"
                                                value="{{ old('company') }}" required>
                                            @error('company')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_tax_no">Vergi Numarası / Şirket Kayıt Numarası <span>*</span></label>
                                            <input type="text" name="company_tax_no" id="company_tax_no"
                                                value="{{ old('company_tax_no') }}" required>
                                            @error('company_tax_no')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_date">Kuruluş Yılı <span>*</span></label>
                                            <input type="text" name="company_date" id="company_date"
                                                value="{{ old('company_date') }}" required>
                                            @error('company_date')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_area">Faaliyet Alanı <span>*</span></label>
                                            <input type="text" name="company_area" id="company_area"
                                                value="{{ old('company_area') }}" required>
                                            @error('company_area')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_countries">Faaliyet Gösterdiği Ülkeler <span>*</span></label>
                                            <input type="text" name="company_countries" id="company_countries"
                                                value="{{ old('company_countries') }}" required>
                                            @error('company_countries')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_center">Şirketin Merkez Adresi ve Şubeleri (varsa) <span>*</span></label>
                                            <input type="text" name="company_center" id="company_center"
                                                value="{{ old('company_center') }}" required>
                                            @error('company_center')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_phone">Şirket Telefonu <span>*</span></label>
                                            <input type="tel" name="company_phone" id="company_phone"
                                                value="{{ old('company_phone') }}" required>
                                            @error('company_phone')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_email">Şirket E-Postası <span>*</span></label>
                                            <input type="email" name="company_email" id="company_email"
                                                value="{{ old('company_email') }}" required>
                                            @error('company_email')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_site">Şirket Web Sitesi <span>*</span></label>
                                            <input type="text" name="company_site" id="company_site"
                                                value="{{ old('company_site') }}" required>
                                            @error('company_site')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h3>Şirket Ortakları</h3>

                                <div id="share_holders_wrapper">
                                    <div class="row share_holder_row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>İsim Soyisim <span>*</span></label>
                                                <input type="text" name="share_holder_name[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>T.C Kimlik No <span>*</span></label>
                                                <input type="text" name="share_holder_tc[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Doğum Tarihi <span>*</span></label>
                                                <input type="text" name="share_holder_birthdate[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Ortaklık Oranı <span>*</span></label>
                                                <input type="text" name="share_holder_percentage[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 d-flex align-items-center gap-2">
                                            <button type="button" class="btn btn-success add_row" style="margin-top: 2rem">Ekle</button>
                                            <button type="button" class="btn btn-danger remove_row" style="margin-top: 2rem" disabled>Sil</button>
                                        </div>
                                    </div>
                                </div>

                                <h3>Yönetim Kadrosu</h3>

                                <div id="board_wrapper">
                                    <div class="row board_row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>İsim Soyisim <span>*</span></label>
                                                <input type="text" name="board_name[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Ünvan <span>*</span></label>
                                                <input type="text" name="board_title[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Görevi <span>*</span></label>
                                                <input type="text" name="board_duty[]" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 d-flex align-items-center gap-2">
                                            <button type="button" class="btn btn-success add_row" style="margin-top: 2rem">Ekle</button>
                                            <button type="button" class="btn btn-danger remove_row" style="margin-top: 2rem" disabled>Sil</button>
                                        </div>
                                    </div>
                                </div>

                                <h3>Son 3 Yıla Ait Finansal Raporlar</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_income_document_id">Gelir Tablosu <span>*</span></label>
                                            <div class="custom-file-input">
                                                <input type="file" name="company_income_document_id" id="company_income_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('company_income_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_expense_document_id">Gider Tablosu <span>*</span></label>
                                            <div class="custom-file-input">
                                                <input type="file" name="company_expense_document_id" id="company_expense_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('company_expense_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_balance_document_id">Bilanço <span>*</span></label>
                                            <div class="custom-file-input">
                                                <input type="file" name="company_balance_document_id" id="company_balance_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('company_balance_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h3>Banka Hesap Ekstresi</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_current_account_document_id">Güncel <span>*</span></label>
                                            <div class="custom-file-input">
                                                <input type="file" name="company_current_account_document_id" id="company_current_account_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('company_current_account_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="company_past_account_document_id">Geriye Dönük (En az 12-36 ay) <span>*</span></label>
                                            <div class="custom-file-input">
                                                <input type="file" name="company_past_account_document_id" id="company_past_account_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('company_past_account_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <h3>Mevcut Yatırımcı veya Finansman İlişkileri</h3>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="investors_relationships">Bilgiler ve Varsa Detayları <span>*</span></label>
                                            <textarea type="text" name="investors_relationships" id="investors_relationships"
                                                value="{{ old('investors_relationships') }}" required></textarea>
                                            @error('investors_relationships')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="investors_relationships_document_id">Varsa İlişkili Belgeler </label>
                                            <div class="custom-file-input">
                                                <input type="file" name="investors_relationships_document_id" id="investors_relationships_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('investors_relationships_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <h3>Projeler (Butçe, Süre, Lokayson vs. ile birlikte)</h3>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="ongoing_projects">Devam Eden <span>*</span></label>
                                            <textarea type="text" name="ongoing_projects" id="ongoing_projects"
                                                value="{{ old('ongoing_projects') }}" required></textarea>
                                            @error('ongoing_projects')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="planned_projects">Planlanan <span>*</span></label>
                                            <textarea type="text" name="planned_projects" id="planned_projects"
                                                value="{{ old('planned_projects') }}" required></textarea>
                                            @error('planned_projects')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <h3>Mevcut ve Geçmiş Hukuki/Uyuşmazlık Durumları</h3>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="legal_disputes">Bilgiler <span>*</span></label>
                                            <textarea type="text" name="legal_disputes" id="legal_disputes"
                                                value="{{ old('legal_disputes') }}" required></textarea>
                                            @error('legal_disputes')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="legal_disputes_document_id">Varsa Belgeler </label>
                                            <div class="custom-file-input">
                                                <input type="file" name="legal_disputes_document_id" id="legal_disputes_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('legal_disputes_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <h3>Şirketin Son 12 Aylık Nakit Akış Tablosu</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="cash_flow_document_id">Tablo</label>
                                        <div class="custom-file-input">
                                            <input type="file" name="cash_flow_document_id" id="cash_flow_document_id">
                                            <span class="file-label">Dosya yükleyin...</span>
                                            <button type="button" class="btn-file">Gözat</button>
                                        </div>
                                        @error('cash_flow_document_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Banka Kredileri, Leasing veya Diğer Finansal Yükümlülükler</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="financial_obligations">Bilgiler</label>
                                        <textarea type="text" name="financial_obligations" id="financial_obligations"
                                            value="{{ old('financial_obligations') }}"></textarea>
                                        @error('financial_obligations')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Şirketin Varlık Listesi (Gayrimenkul, Araç, Stok vs.)</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="asset_list">Bilgiler</label>
                                        <textarea type="text" name="asset_list" id="asset_list"
                                            value="{{ old('asset_list') }}"></textarea>
                                        @error('asset_list')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Mevcut Çalışan Sayısı, Departmanlara Göre Dağılımı ve Önemli Personel</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="personal_list">Bilgiler</label>
                                        <textarea type="text" name="personal_list" id="personal_list"
                                            value="{{ old('personal_list') }}" required></textarea>
                                        @error('personal_list')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <h3>Son 3 Yıllık Vergi Beyannameleri ve Ödeme Durumları</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="tax_returns_and_payments">Bilgiler</label>
                                        <textarea type="text" name="tax_returns_and_payments" id="tax_returns_and_payments"
                                            value="{{ old('tax_returns_and_payments') }}" required></textarea>
                                        @error('tax_returns_and_payments')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Şirketin Faaliyetlerinin Detaylı Açıklaması</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="company_activities">Açıklama</label>
                                        <textarea type="text" name="company_activities" id="company_activities"
                                            value="{{ old('company_activities') }}" required></textarea>
                                        @error('company_activities')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <h3>İlgili Olduğu Endüstrilerdeki Konumu ve Rekabet Avanyajı</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="competitive_advantages">Açıklama</label>
                                        <textarea type="text" name="competitive_advantages" id="competitive_advantages"
                                            value="{{ old('competitive_advantages') }}" required></textarea>
                                        @error('competitive_advantages')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <h3>Risk Değerlendirme Amacıyla Paylaşılacak Ek Belgeler (Varsa)</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="additional_document_id">Belgeler </label>
                                            <div class="custom-file-input">
                                                <input type="file" name="additional_document_id" id="additional_document_id">
                                                <span class="file-label">Dosya yükleyin...</span>
                                                <button type="button" class="btn-file">Gözat</button>
                                            </div>
                                            @error('additional_document_id')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

                            <!-- Sözleşme Onayı -->
                            <div class="form-group checkbox full-width">
                                <label>
                                    <input type="checkbox" name="agreement" required>
                                    <span>Sözleşmeyi okudum ve kabul ediyorum. <a href="#"
                                            id="showAgreement">Detaylı sözleşmeyi görüntüle</a></span>
                                </label>
                                @error('agreement')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-submit">
                                <button type="submit" class="btn btn-primary">Başvuruyu Gönder</button>
                            </div>
                        </form>
                    </div>

                    <!-- Modal -->
                    <div id="agreementModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>RİSK DEĞERLENDİRME SÖZLEŞMESİ</h2>
                            <div class="modal-body">
                                <p>(Şirketimiz yatırımcı değildir; yatırım kararlarını verecek olan taraflar adına
                                    değerlendirme hizmeti sunmaktadır.)</p>
                                <h3>1. Sorumluluk ve Bilgilendirme:</h3>
                                <p>Yatırım talebinde bulunan taraflar, tarafımıza sunacakları bilgilerde eksiksiz, doğru
                                    ve dürüst davranmayı kabul eder...</p>
                                <h3>2. Kimlik Doğrulama ve Finansal Değerlendirme Süreci:</h3>
                                <p>Başvuru sahipleri, kimliklerini belirlenmiş dijital uygulamalar aracılığıyla
                                    doğrulamakla yükümlüdür...</p>
                                <h3>3. Risk Analizi Raporu:</h3>
                                <p>Hazırlanacak risk analizi raporu, sadece yatırımcılar adına rehberlik sağlamak
                                    amacıyla düzenlenecektir...</p>
                                <h3>4. Ücret ve İade Politikası:</h3>
                                <p>Risk analizi hizmeti, yatırım tutarının %2’si + KDV olacak şekilde ücretlendirilir...
                                </p>
                                <h3>5. Yasal Uygulamalar ve Yargı Yetkisi:</h3>
                                <p>Taraflar arasında doğabilecek tüm uyuşmazlıklarda İngiltere mahkemeleri ve yatırım
                                    alacak kişinin bulunduğu ülkenin mahkemeleri yetkilidir...</p>
                                <h3>6. Gizlilik ve Bilgi Paylaşımı:</h3>
                                <p>Başvuru sahipleri ile paylaşılacak raporlar, yalnızca yatırımcının bilgisi ve onayı
                                    dahilinde kullanılabilir...</p>
                                <h3>7. Tarafsızlık İlkesi:</h3>
                                <p>Şirketimiz yalnızca tarafsız değerlendirme hizmeti sunar...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>

    <script>
        document.querySelectorAll('.custom-file-input input[type="file"]').forEach(input => {
            const label = input.nextElementSibling; // .file-label
            input.addEventListener('change', e => {
                if (input.files.length > 0) {
                    label.textContent = input.files[0].name;
                } else {
                    label.textContent = "Dosya seçin...";
                }
            });
        });

        // Modal aç/kapa
        var modal = document.getElementById("agreementModal");
        var btn = document.getElementById("showAgreement");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function(e) {
            e.preventDefault();
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/mesmerize-pro\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <div class="call-widget-full" style="background-color: #e00000; padding: 10px 15px; font-size: 16px;">
        <a href="tel:+905545656630" class="call-link"><i class="bi-telephone"></i> Hemen Arayın!</a>
    </div>
    <script type="text/javascript"
        src="https://www.riskanaliz.com.tr/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js">
    </script>
    <script type="text/javascript"
        src="https://www.riskanaliz.com.tr/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
    </script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.riskanaliz.com.tr/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.6"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-translations">
        /* <![CDATA[ */
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("contact-form-7", {
            "translation-revision-date": "2024-07-22 17:28:11+0000",
            "generator": "GlotPress\/4.0.1",
            "domain": "messages",
            "locale_data": {
                "messages": {
                    "": {
                        "domain": "messages",
                        "plural-forms": "nplurals=2; plural=n > 1;",
                        "lang": "tr"
                    },
                    "This contact form is placed in the wrong place.": [
                        "Bu ileti\u015fim formu yanl\u0131\u015f yere yerle\u015ftirilmi\u015f."
                    ],
                    "Error:": ["Hata:"]
                }
            },
            "comment": {
                "reference": "includes\/js\/index.js"
            }
        });
        /* ]]> */
    </script>
    <script type="text/javascript" id="contact-form-7-js-before">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/www.riskanaliz.com.tr\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.riskanaliz.com.tr/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.6"
        id="contact-form-7-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://www.riskanaliz.com.tr/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script type="text/javascript" defer="defer" src="https://www.riskanaliz.com.tr/wp-includes/js/masonry.min.js?ver=4.2.2"
        id="masonry-js"></script>
    <script type="text/javascript" id="mesmerize-theme-js-extra">
        /* <![CDATA[ */
        var mesmerize_theme_pro_settings = {
            "reveal-effect": {
                "enabled": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://www.riskanaliz.com.tr/wp-content/themes/mesmerize-pro/pro/assets/js/theme.bundle.min.js?ver=1.6.184"
        id="mesmerize-theme-js"></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
            .addEventListener("hashchange", function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i
                    .test(t.tagName) || (t.tabIndex = -1), t.focus())
            }, !1);
    </script>
</body>

</html>
