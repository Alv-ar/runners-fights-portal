<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//s3.envato.com">


    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-585RXMV"></script>
    <script type="text/javascript" charset="UTF-8" async="" src="https://consentcdn.cookiebot.com/consentconfig/4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799/state.js"></script>
    <script type="text/javascript" charset="UTF-8" async="" src="https://consent.cookiebot.com/logconsent.ashx?action=accept&amp;nocache=1640354153852&amp;referer=http%3A%2F%2Fpreview.themeforest.net%2Fitem%2Findiega-gaming-html-template%2Ffull_screen_preview%2F22289825%3F_ga%3D2.213178070.371894036.1579151882-680051804.1561631653%3Fref%3Dweb14&amp;dnt=false&amp;method=strict&amp;clp=true&amp;cls=true&amp;clm=true&amp;cbid=4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799&amp;cbt=optin&amp;hasdata=true"></script>
    <script src="https://js-agent.newrelic.com/nr-1212.min.js"></script>
    <script type="text/javascript" charset="UTF-8" async="" src="https://consent.cookiebot.com/4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799/cc.js?renew=false&amp;referer=preview.themeforest.net&amp;dnt=false&amp;forceshow=false"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam-cell.nr-data.net",
            "errorBeacon": "bam-cell.nr-data.net",
            "licenseKey": "NRBR-281af528f2b1e2422b5",
            "applicationID": "13909",
            "transactionName": "NTU0DRQNDwshOmIZBRM3dR8TDg84Nys/FRQYBSoLAxQKAjM=",
            "queueTime": 0,
            "applicationTime": 42,
            "agent": "",
            "atts": "DXgvW1wZQRQtPChSS1QOMhwLByUINi0+BFNaeCgcEAsQDismb0pTRj9tSV5VUFNmNTA="
        }
    </script>
    <script type="text/javascript" nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        (window.NREUM || (NREUM = {})).init = {
            ajax: {
                deny_list: ["bam-cell.nr-data.net"]
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "NRBR-281af528f2b1e2422b5",
            applicationID: "13909"
        };
        window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var i = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(i.exports, function(e) {
                        var i = t[n][1][e];
                        return r(i || e)
                    }, i, i.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < n.length; i++) r(n[i]);
            return r
        }({
            1: [function(t, e, n) {
                function r() {}

                function i(t, e, n, r) {
                    return function() {
                        return s.recordSupportability("API/" + e + "/called"), o(t + e, [u.now()].concat(c(arguments)), n ? null : this, r), n ? void 0 : this
                    }
                }
                var o = t("handle"),
                    a = t(10),
                    c = t(11),
                    f = t("ee").get("tracer"),
                    u = t("loader"),
                    s = t(4),
                    d = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = d);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    v = l + "ixn-";
                a(p, function(t, e) {
                    d[e] = i(l, e, !0, "api")
                }), d.addPageAction = i(l, "addPageAction", !0), d.setCurrentRouteName = i(l, "routeName", !0), e.exports = newrelic, d.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(t, e) {
                        var n = {},
                            r = this,
                            i = "function" == typeof e;
                        return o(v + "tracer", [u.now(), t, n], r),
                            function() {
                                if (f.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], n), i) try {
                                    return e.apply(this, arguments)
                                } catch (t) {
                                    throw f.emit("fn-err", [arguments, this, t], n), t
                                } finally {
                                    f.emit("fn-end", [u.now()], n)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
                    m[e] = i(v, e)
                }), newrelic.noticeError = function(t, e) {
                    "string" == typeof t && (t = new Error(t)), s.recordSupportability("API/noticeError/called"), o("err", [t, u.now(), !1, e])
                }
            }, {}],
            2: [function(t, e, n) {
                function r(t) {
                    if (NREUM.init) {
                        for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++)
                            if (e = e[n[r]], "object" != typeof e) return;
                        return e = e[n[n.length - 1]]
                    }
                }
                e.exports = {
                    getConfiguration: r
                }
            }, {}],
            3: [function(t, e, n) {
                var r = !1;
                try {
                    var i = Object.defineProperty({}, "passive", {
                        get: function() {
                            r = !0
                        }
                    });
                    window.addEventListener("testPassive", null, i), window.removeEventListener("testPassive", null, i)
                } catch (o) {}
                e.exports = function(t) {
                    return r ? {
                        passive: !0,
                        capture: !!t
                    } : !!t
                }
            }, {}],
            4: [function(t, e, n) {
                function r(t, e) {
                    var n = [a, t, {
                        name: t
                    }, e];
                    return o("storeMetric", n, null, "api"), n
                }

                function i(t, e) {
                    var n = [c, t, {
                        name: t
                    }, e];
                    return o("storeEventMetrics", n, null, "api"), n
                }
                var o = t("handle"),
                    a = "sm",
                    c = "cm";
                e.exports = {
                    constants: {
                        SUPPORTABILITY_METRIC: a,
                        CUSTOM_METRIC: c
                    },
                    recordSupportability: r,
                    recordCustom: i
                }
            }, {}],
            5: [function(t, e, n) {
                function r() {
                    return c.exists && performance.now ? Math.round(performance.now()) : (o = Math.max((new Date).getTime(), o)) - a
                }

                function i() {
                    return o
                }
                var o = (new Date).getTime(),
                    a = o,
                    c = t(12);
                e.exports = r, e.exports.offset = a, e.exports.getLastTimestamp = i
            }, {}],
            6: [function(t, e, n) {
                function r(t) {
                    return !(!t || !t.protocol || "file:" === t.protocol)
                }
                e.exports = r
            }, {}],
            7: [function(t, e, n) {
                function r(t, e) {
                    var n = t.getEntries();
                    n.forEach(function(t) {
                        "first-paint" === t.name ? p("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && p("timing", ["fcp", Math.floor(t.startTime)])
                    })
                }

                function i(t, e) {
                    var n = t.getEntries();
                    if (n.length > 0) {
                        var r = n[n.length - 1];
                        if (f && f < r.startTime) return;
                        p("lcp", [r])
                    }
                }

                function o(t) {
                    t.getEntries().forEach(function(t) {
                        t.hadRecentInput || p("cls", [t])
                    })
                }

                function a(t) {
                    if (t instanceof g && !y) {
                        var e = Math.round(t.timeStamp),
                            n = {
                                type: t.type
                            };
                        e <= l.now() ? n.fid = l.now() - e : e > l.offset && e <= Date.now() ? (e -= l.offset, n.fid = l.now() - e) : e = l.now(), y = !0, p("timing", ["fi", e, n])
                    }
                }

                function c(t) {
                    "hidden" === t && (f = l.now(), p("pageHide", [f]))
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var f, u, s, d, p = t("handle"),
                        l = t("loader"),
                        v = t(9),
                        m = t(3),
                        g = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        u = new PerformanceObserver(r);
                        try {
                            u.observe({
                                entryTypes: ["paint"]
                            })
                        } catch (h) {}
                        s = new PerformanceObserver(i);
                        try {
                            s.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (h) {}
                        d = new PerformanceObserver(o);
                        try {
                            d.observe({
                                type: "layout-shift",
                                buffered: !0
                            })
                        } catch (h) {}
                    }
                    if ("addEventListener" in document) {
                        var y = !1,
                            w = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        w.forEach(function(t) {
                            document.addEventListener(t, a, m(!1))
                        })
                    }
                    v(c)
                }
            }, {}],
            8: [function(t, e, n) {
                function r(t, e) {
                    if (!i) return !1;
                    if (t !== i) return !1;
                    if (!e) return !0;
                    if (!o) return !1;
                    for (var n = o.split("."), r = e.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== n[a]) return !1;
                    return !0
                }
                var i = null,
                    o = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var c = navigator.userAgent,
                        f = c.match(a);
                    f && c.indexOf("Chrome") === -1 && c.indexOf("Chromium") === -1 && (i = "Safari", o = f[1])
                }
                e.exports = {
                    agent: i,
                    version: o,
                    match: r
                }
            }, {}],
            9: [function(t, e, n) {
                function r(t) {
                    function e() {
                        t(c && document[c] ? document[c] : document[o] ? "hidden" : "visible")
                    }
                    "addEventListener" in document && a && document.addEventListener(a, e, i(!1))
                }
                var i = t(3);
                e.exports = r;
                var o, a, c;
                "undefined" != typeof document.hidden ? (o = "hidden", a = "visibilitychange", c = "visibilityState") : "undefined" != typeof document.msHidden ? (o = "msHidden", a = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (o = "webkitHidden", a = "webkitvisibilitychange", c = "webkitVisibilityState")
            }, {}],
            10: [function(t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        o = 0;
                    for (r in t) i.call(t, r) && (n[o] = e(r, t[r]), o += 1);
                    return n
                }
                var i = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            11: [function(t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, i = n - e || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = t[e + r];
                    return o
                }
                e.exports = r
            }, {}],
            12: [function(t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(t, e, n) {
                function r() {}

                function i(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? u(t, f, a) : a()
                    }

                    function n(n, r, i, o, a) {
                        if (a !== !1 && (a = !0), !l.aborted || o) {
                            t && a && t(n, r, i);
                            for (var c = e(i), f = m(n), u = f.length, s = 0; s < u; s++) f[s].apply(c, r);
                            var p = d[w[n]];
                            return p && p.push([b, n, r, c]), c
                        }
                    }

                    function o(t, e) {
                        y[t] = m(t).concat(e)
                    }

                    function v(t, e) {
                        var n = y[t];
                        if (n)
                            for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
                    }

                    function m(t) {
                        return y[t] || []
                    }

                    function g(t) {
                        return p[t] = p[t] || i(n)
                    }

                    function h(t, e) {
                        l.aborted || s(t, function(t, n) {
                            e = e || "feature", w[n] = e, e in d || (d[e] = [])
                        })
                    }
                    var y = {},
                        w = {},
                        b = {
                            on: o,
                            addEventListener: o,
                            removeEventListener: v,
                            emit: n,
                            get: g,
                            listeners: m,
                            context: e,
                            buffer: h,
                            abort: c,
                            aborted: !1
                        };
                    return b
                }

                function o(t) {
                    return u(t, f, a)
                }

                function a() {
                    return new r
                }

                function c() {
                    (d.api || d.feature) && (l.aborted = !0, d = l.backlog = {})
                }
                var f = "nr@context",
                    u = t("gos"),
                    s = t(10),
                    d = {},
                    p = {},
                    l = e.exports = i();
                e.exports.getOrSetContext = o, l.backlog = d
            }, {}],
            gos: [function(t, e, n) {
                function r(t, e, n) {
                    if (i.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (o) {}
                    return t[e] = r, r
                }
                var i = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function(t, e, n) {
                function r(t, e, n, r) {
                    i.buffer([t], r), i.emit(t, e, n)
                }
                var i = t("ee").get("handle");
                e.exports = r, r.ee = i
            }, {}],
            id: [function(t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, o, function() {
                        return i++
                    })
                }
                var i = 1,
                    o = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function(t, e, n) {
                function r() {
                    if (!T++) {
                        var t = P.info = NREUM.info,
                            e = g.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
                        f(O, function(e, n) {
                            t[e] || (t[e] = n)
                        });
                        var n = a();
                        c("mark", ["onload", n + P.offset], null, "api"), c("timing", ["load", n]);
                        var r = g.createElement("script");
                        0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? r.src = t.agent : r.src = v + "://" + t.agent, e.parentNode.insertBefore(r, e)
                    }
                }

                function i() {
                    "complete" === g.readyState && o()
                }

                function o() {
                    c("mark", ["domContent", a() + P.offset], null, "api")
                }
                var a = t(5),
                    c = t("handle"),
                    f = t(10),
                    u = t("ee"),
                    s = t(8),
                    d = t(6),
                    p = t(2),
                    l = t(3),
                    v = p.getConfiguration("ssl") === !1 ? "http" : "https",
                    m = window,
                    g = m.document,
                    h = "addEventListener",
                    y = "attachEvent",
                    w = m.XMLHttpRequest,
                    b = w && w.prototype,
                    E = !d(m.location);
                NREUM.o = {
                    ST: setTimeout,
                    SI: m.setImmediate,
                    CT: clearTimeout,
                    XHR: w,
                    REQ: m.Request,
                    EV: m.Event,
                    PR: m.Promise,
                    MO: m.MutationObserver
                };
                var x = "" + location,
                    O = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1212.min.js"
                    },
                    M = w && b && b[h] && !/CriOS/.test(navigator.userAgent),
                    P = e.exports = {
                        offset: a.getLastTimestamp(),
                        now: a,
                        origin: x,
                        features: {},
                        xhrWrappable: M,
                        userAgent: s,
                        disabled: E
                    };
                if (!E) {
                    t(1), t(7), g[h] ? (g[h]("DOMContentLoaded", o, l(!1)), m[h]("load", r, l(!1))) : (g[y]("onreadystatechange", i), m[y]("onload", r)), c("mark", ["firstbyte", a.getLastTimestamp()], null, "api");
                    var T = 0
                }
            }, {}],
            "wrap-function": [function(t, e, n) {
                function r(t, e) {
                    function n(e, n, r, f, u) {
                        function nrWrapper() {
                            var o, a, s, p;
                            try {
                                a = this, o = d(arguments), s = "function" == typeof r ? r(o, a) : r || {}
                            } catch (l) {
                                i([l, "", [o, a, f], s], t)
                            }
                            c(n + "start", [o, a, f], s, u);
                            try {
                                return p = e.apply(a, o)
                            } catch (v) {
                                throw c(n + "err", [o, a, v], s, u), v
                            } finally {
                                c(n + "end", [o, a, p], s, u)
                            }
                        }
                        return a(e) ? e : (n || (n = ""), nrWrapper[p] = e, o(e, nrWrapper, t), nrWrapper)
                    }

                    function r(t, e, r, i, o) {
                        r || (r = "");
                        var c, f, u, s = "-" === r.charAt(0);
                        for (u = 0; u < e.length; u++) f = e[u], c = t[f], a(c) || (t[f] = n(c, s ? f + r : r, i, f, o))
                    }

                    function c(n, r, o, a) {
                        if (!v || e) {
                            var c = v;
                            v = !0;
                            try {
                                t.emit(n, r, o, e, a)
                            } catch (f) {
                                i([f, n, r, o], t)
                            }
                            v = c
                        }
                    }
                    return t || (t = s), n.inPlace = r, n.flag = p, n
                }

                function i(t, e) {
                    e || (e = s);
                    try {
                        e.emit("internal-error", t)
                    } catch (n) {}
                }

                function o(t, e, n) {
                    if (Object.defineProperty && Object.keys) try {
                        var r = Object.keys(t);
                        return r.forEach(function(n) {
                            Object.defineProperty(e, n, {
                                get: function() {
                                    return t[n]
                                },
                                set: function(e) {
                                    return t[n] = e, e
                                }
                            })
                        }), e
                    } catch (o) {
                        i([o], n)
                    }
                    for (var a in t) l.call(t, a) && (e[a] = t[a]);
                    return e
                }

                function a(t) {
                    return !(t && t instanceof Function && t.apply && !t[p])
                }

                function c(t, e) {
                    var n = e(t);
                    return n[p] = t, o(t, n, s), n
                }

                function f(t, e, n) {
                    var r = t[e];
                    t[e] = c(r, n)
                }

                function u() {
                    for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n) e[n] = arguments[n];
                    return e
                }
                var s = t("ee"),
                    d = t(11),
                    p = "nr@original",
                    l = Object.prototype.hasOwnProperty,
                    v = !1;
                e.exports = r, e.exports.wrapFunction = c, e.exports.wrapInPlace = f, e.exports.argsToArray = u
            }, {}]
        }, {}, ["loader"]);
    </script>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Indiega - Gaming HTML Template Preview - ThemeForest</title>
    <meta name="description" content="&amp;lt;p&amp;gt;&amp;lt;strong&amp;gt;Indiega&amp;lt;/strong&amp;gt; is a HTML template for gaming, news and entertainme...">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="turbo-visit-control" content="reload">

    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/core/index-842a30ebf5fabb8f8ad31c6516a2006031f46affeeffe754b2454901c45f1258.css">
    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/preview/index-004d35cdd5d555cdd3e956d1b916825642de06529f0fe91fd9f390813761d2fc.css">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" sizes="72x72">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" sizes="144x144">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-precomposed.png">

    <script src="https://public-assets.envato-static.com/assets/market/pages/full_screen_preview/index-3434ecc8ee72db55dde518bd4f2a3f85d6c73b0dde839027aaedb790e40a4beb.js" nonce="JgUQtYtK4Hy26SZ0GsF+RA=="></script>

    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[
        //function to fix height of iframe!
        var calcHeight = function() {
            var headerDimensions = $('.preview__header').height();
            $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
        }

        $(document).ready(function() {
            calcHeight();
        });

        $(window).resize(function() {
            calcHeight();
        }).load(function() {
            calcHeight();
        });

        //]]>
    </script>

    <style type="text/css" id="CookiebotDialogStyle">
        #CybotCookiebotDialog {
            clip: auto;
            text-rendering: geometricPrecision;
            animation: none;
            animation-delay: 0;
            animation-direction: normal;
            animation-duration: 0;
            animation-fill-mode: none;
            animation-iteration-count: 1;
            animation-name: none;
            animation-play-state: running;
            animation-timing-function: ease;
            backface-visibility: visible;
            background: 0;
            background-attachment: scroll;
            background-clip: border-box;
            background-color: transparent;
            background-color: #161616;
            background-image: none;
            background-origin: padding-box;
            background-position: 0 0;
            background-position-x: 0;
            background-position-y: 0;
            background-repeat: repeat;
            background-size: auto auto;
            border: 0;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-collapse: separate;
            border-image: none;
            border-radius: 0;
            border-spacing: 0;
            border-top-color: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top-style: none;
            border-top-width: medium;
            bottom: auto;
            box-shadow: none;
            box-shadow: 2px 2px 14px 2px #121212;
            caption-side: top;
            clear: none;
            color: inherit;
            color: #ffffff;
            column-fill: balance;
            column-gap: normal;
            column-rule: medium none currentColor;
            column-rule-color: currentColor;
            column-rule-style: none;
            column-rule-width: none;
            column-span: 1;
            columns: auto;
            content: normal;
            counter-increment: none;
            counter-reset: none;
            cursor: auto;
            display: inline;
            empty-cells: show;
            filter: Alpha(opacity=100);
            float: none;
            font: normal;
            font-family: inherit;
            font-family: Segoe UI, Arial, Helvetica, Verdana, sans-serif;
            font-size: medium;
            font-size: 8pt;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            height: auto;
            hyphens: none;
            left: auto;
            left: 0;
            letter-spacing: normal;
            line-height: normal;
            line-height: 1.231;
            list-style: none;
            list-style-image: none;
            list-style-position: outside;
            list-style-type: disc;
            margin: 0;
            max-height: none;
            max-width: none;
            min-height: 0;
            min-width: 0;
            opacity: 1;
            orphans: 0;
            outline: 0;
            outline-color: invert;
            outline-style: none;
            outline-width: medium;
            overflow: visible;
            overflow-x: visible;
            overflow-y: visible;
            padding: 0 0 8px;
            page-break-after: auto;
            page-break-before: auto;
            page-break-inside: auto;
            perspective: none;
            perspective-origin: 50% 50%;
            position: static;
            position: fixed;
            right: auto;
            tab-size: 8;
            table-layout: auto;
            text-align: inherit;
            text-align: left;
            text-align-last: auto;
            text-decoration: none;
            text-decoration-color: inherit;
            text-decoration-line: none;
            text-decoration-style: solid;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            top: auto;
            top: -800px;
            transform: none;
            transform-style: flat;
            transition: none;
            transition-delay: 0s;
            transition-duration: 0s;
            transition-property: none;
            transition-timing-function: ease;
            vertical-align: baseline;
            visibility: visible;
            white-space: normal;
            widows: 0;
            width: auto;
            width: 100%;
            word-spacing: normal;
            z-index: auto;
            z-index: 2147483645
        }

        #CybotCookiebotDialog,
        #CybotCookiebotDialog:after,
        #CybotCookiebotDialog :after,
        #CybotCookiebotDialog:before,
        #CybotCookiebotDialog :before,
        #CybotCookiebotDialogBody *,
        #CybotCookiebotDialogDetail * {
            box-sizing: content-box
        }

        #CybotCookiebotDialog[dir=rtl] {
            text-align: right
        }

        #CybotCookiebotDialog a {
            font-family: Segoe UI, Arial, Helvetica, Verdana, sans-serif;
            line-height: 1.231
        }

        #CybotCookiebotDialog a,
        #CybotCookiebotDialog a:hover {
            color: #ffffff;
            text-decoration: underline
        }

        #CybotCookiebotDialog div {
            font-family: Segoe UI, Arial, Helvetica, Verdana, sans-serif;
            line-height: 1.231
        }

        #CybotCookiebotDialog br,
        #CybotCookiebotDialog td {
            line-height: 1.231
        }

        #CybotCookiebotDialogDetailBodyContentCookieContainerAdvertising,
        #CybotCookiebotDialogDetailBodyContentCookieContainerNecessary,
        #CybotCookiebotDialogDetailBodyContentCookieContainerPreference,
        #CybotCookiebotDialogDetailBodyContentCookieContainerStatistics,
        #CybotCookiebotDialogDetailBodyContentCookieContainerUnclassified {
            margin: 0
        }

        #CybotCookiebotDialogPoweredbyLink {
            height: 36px;
            margin-left: 6px;
            margin-right: 0;
            margin-top: 12px;
            position: absolute;
            width: 48px;
            z-index: 2147483646
        }

        div[dir=rtl] #CybotCookiebotDialogPoweredbyLink {
            margin-left: 0;
            margin-right: 6px
        }

        #CybotCookiebotDialogPoweredbyImage {
            border: none;
            margin: 2px 0 0 3px;
            padding: 0;
            width: 46px
        }

        #CybotCookiebotDialogBody {
            margin-left: auto;
            margin-right: auto;
            max-width: 640px;
            overflow: hidden;
            padding-left: 0;
            padding-right: 8px;
            vertical-align: top
        }

        div[dir=rtl] #CybotCookiebotDialogBody {
            padding-left: 8px;
            padding-right: 0
        }

        #CybotCookiebotDialogBodyContent {
            font-size: 9.5pt;
            font-weight: 400;
            line-height: 130%;
            min-height: 32px;
            padding: 12px 0 8px 80px
        }

        div[dir=rtl] #CybotCookiebotDialogBodyContent {
            padding-left: 0;
            padding-right: 80px
        }

        #CybotCookiebotDialogBodyContentControls {
            font-family: Segoe UI, Arial, Helvetica, Verdana, sans-serif;
            font-size: 9.5pt;
            font-weight: 400;
            line-height: 130%;
            min-height: 10px;
            padding: 12px 0 8px 80px
        }

        div[dir=rtl] #CybotCookiebotDialogBodyContentControls {
            padding-left: 0;
            padding-right: 80px
        }

        .CybotCookiebotDialogBodyContentControlsWrapper {
            display: inline-block;
            line-height: 16px;
            margin-left: 0;
            margin-right: 14px;
            position: relative
        }

        div[dir=rtl] .CybotCookiebotDialogBodyContentControlsWrapper {
            margin-left: 14px;
            margin-right: 0
        }

        #CybotCookiebotDialogBodyContentTitle {
            color: #ffffff;
            display: block;
            float: none;
            font-family: Segoe UI, Arial, Helvetica, Verdana, sans-serif;
            font-size: 12pt;
            font-weight: 700;
            letter-spacing: normal;
            line-height: 100%;
            margin: 2px 0 6px;
            padding: 0;
            position: static;
            text-align: left;
            visibility: visible
        }

        div[dir=rtl] #CybotCookiebotDialogBodyContentTitle {
            text-align: right
        }

        #CybotCookiebotDialogBodyContentText {
            text-align: left
        }

        #CybotCookiebotDialogBodyContentText ul {
            display: block;
            list-style-type: disc;
            margin: 1em 0 1.25em;
            padding: 0 0 0 40px
        }

        #CybotCookiebotDialogBodyContentText ul li {
            display: list-item;
            list-style-type: disc;
            margin: 0;
            padding: 0
        }

        div[dir=rtl] #CybotCookiebotDialogBodyContentText {
            text-align: right
        }

        #CybotCookiebotDialogBodyButtons {
            display: block;
            margin: 0 0 6px 6px;
            padding-left: 63px;
            padding-right: 0;
            z-index: 10
        }

        div[dir=rtl] #CybotCookiebotDialogBodyButtons {
            margin: 0 6px 6px 0;
            padding-left: 0;
            padding-right: 63px
        }

        #CybotCookiebotDialogBodyButtons a,
        #CybotCookiebotDialogBodyButtons a:hover {
            color: #ffffff;
            text-decoration: none
        }

        .CybotCookiebotDialogBodyButton {
            box-sizing: content-box;
            display: inline-block;
            font-size: 9.5pt;
            font-weight: 600;
            margin-left: 12px;
            margin-right: 0;
            margin-top: 8px;
            min-width: 80px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
            z-index: 10
        }

        .CybotCookiebotDialogBodyButton:after,
        .CybotCookiebotDialogBodyButton:before {
            box-sizing: content-box
        }

        div[dir=rtl] .CybotCookiebotDialogBodyButton {
            margin-left: 0;
            margin-right: 12px
        }

        #CybotCookiebotDialogBodyButtonAccept {
            background-color: #188600;
            border: 1px solid #188600
        }

        #CybotCookiebotDialogBodyButtonDecline {
            background-color: #333333;
            border: 1px solid #333333
        }

        #CybotCookiebotDialogBodyButtons .CybotCookiebotDialogBodyLink,
        #CybotCookiebotDialogBodyLevelDetailsButton {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAGCAMAAAAmGUT3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkI3NDEyNDEwNzk0MjExRTQ5RUE5RkRFMUQ3MEU1NTZDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkI3NDEyNDExNzk0MjExRTQ5RUE5RkRFMUQ3MEU1NTZDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Qjc0MTI0MEU3OTQyMTFFNDlFQTlGREUxRDcwRTU1NkMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Qjc0MTI0MEY3OTQyMTFFNDlFQTlGREUxRDcwRTU1NkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz70ohqeAAAABlBMVEVgYGAAAAAPhzbbAAAAAnRSTlP/AOW3MEoAAAAjSURBVHjaYmBkYAQBBkYGIAAxQBQcQ/ggCiLFCGFBCIAAAwADkwAg7Yr51AAAAABJRU5ErkJggg==);
            background-position: right 12px;
            background-position-x: right;
            background-position-y: 12px;
            background-repeat: no-repeat;
            border-left: 0;
            border-right: 5px solid transparent;
            color: #ffffff;
            display: inline-block;
            font-size: 9pt;
            margin-top: 8px;
            padding: 7px 19px 0 0;
            text-align: right;
            text-decoration: none
        }

        div[dir=rtl] #CybotCookiebotDialogBodyButtons .CybotCookiebotDialogBodyLink,
        div[dir=rtl] #CybotCookiebotDialogBodyLevelDetailsButton {
            background-position: left 12px;
            background-position-x: left;
            background-position-y: 12px;
            border-left: 5px solid transparent;
            border-right: 0;
            padding-left: 19px;
            padding-right: 0
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelDetailsButton {
            background-position: left 5px !important;
            background-position-x: left !important;
            background-position-y: 5px !important
        }

        #CybotCookiebotDialogBodyButtons .CybotCookiebotDialogBodyLink:hover,
        #CybotCookiebotDialogBodyLevelDetailsButton:hover {
            color: #ffffff;
            text-decoration: underline
        }

        .CybotCookiebotDialogBodyLevelDetailsButtonExpanded,
        .CybotCookiebotDialogBodyLinkExpanded {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAGCAYAAAARx7TFAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU0QzAwODExNzk0MjExRTQ4QzBERTBGMTkxMUY2M0M0IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU0QzAwODEyNzk0MjExRTQ4QzBERTBGMTkxMUY2M0M0Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTRDMDA4MEY3OTQyMTFFNDhDMERFMEYxOTExRjYzQzQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTRDMDA4MTA3OTQyMTFFNDhDMERFMEYxOTExRjYzQzQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz576KdnAAAATklEQVR42kyO2xEAMQgCJZ3afxFcyGRz+uMD3EHdXbYrJSltrz4Dt4UBNfsWPG614oRwO2Q/Eg+IwvnDj8kjk+48MzmZeNYI/4jRPwEGAFy/MS7NcXxJAAAAAElFTkSuQmCC) !important
        }

        div[dir=rtl] .CybotCookiebotDialogBodyLevelDetailsButtonExpanded {
            background-position: left 5px !important;
            background-position-x: left !important;
            background-position-y: 5px !important
        }

        a#CybotCookiebotDialogBodyLevelDetailsButton {
            background-position: right 5px;
            background-position-x: right;
            background-position-y: 5px;
            color: #ffffff;
            line-height: 16px;
            margin: 1px 0 0;
            padding-left: 4px;
            padding-top: 0;
            text-align: left;
            text-decoration: none
        }

        div[dir=rtl] a#CybotCookiebotDialogBodyLevelDetailsButton {
            text-align: right
        }

        a#CybotCookiebotDialogBodyLevelDetailsButton:hover {
            color: #ffffff;
            text-decoration: none
        }

        #CybotCookiebotDialogBodyButtonDetails {
            display: inline-block;
            float: right;
            outline: none
        }

        div[dir=rtl] #CybotCookiebotDialogBodyButtonDetails {
            float: left
        }

        #CybotCookiebotDialogBodyButtonDetails:focus,
        #CybotCookiebotDialogBodyLevelDetailsButton:focus {
            text-decoration: underline
        }

        #CybotCookiebotDialogBodyLevelWrapper {
            display: none;
            pointer-events: none;
            text-align: right
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelWrapper {
            text-align: left
        }

        #CybotCookiebotDialogBodyLevelButtons {
            float: left;
            font-size: 9pt;
            margin-left: 8px;
            margin-right: 0;
            pointer-events: auto
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelButtons {
            float: right;
            margin-left: 0;
            margin-right: 8px
        }

        #CybotCookiebotDialogBodyLevelButtonsTable {
            display: inline-table;
            margin: 5px 0
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelButtonsTable {
            margin-left: 16px;
            margin-right: 0
        }

        #CybotCookiebotDialogBodyLevelButtonsRow {
            display: table-row
        }

        #CybotCookiebotDialogBodyLevelButtonsSelectPane {
            border: 1px solid #404040;
            -webkit-border-radius: 4px 0 0 4px;
            -moz-border-radius: 4px 0 0 4px;
            border-radius: 4px 0 0 4px;
            display: table-cell;
            padding: 4px 3px 3px 9px;
            text-align: left;
            vertical-align: top
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelButtonsSelectPane {
            -webkit-border-radius: 0 4px 4px 0;
            -moz-border-radius: 0 4px 4px 0;
            border-radius: 0 4px 4px 0;
            text-align: right
        }

        #CybotCookiebotDialogBodyLevelButtonAcceptWrapper {
            display: inline-block;
            float: right;
            margin-left: 0;
            margin-right: 0;
            pointer-events: auto
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelButtonAcceptWrapper {
            display: inline-block;
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        a#CybotCookiebotDialogBodyLevelButtonAccept {
            background-color: #188600;
            border: 1px solid #188600;
            color: #ffffff;
            display: inline-block;
            font-size: 9.5pt;
            font-weight: 600;
            margin-left: 0;
            margin-right: 0;
            margin-top: 6px;
            min-width: 80px;
            padding: 3px 10px;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            z-index: 10
        }

        a#CybotCookiebotDialogBodyLevelButtonAccept:hover {
            color: #ffffff;
            text-decoration: none
        }

        #CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelectionWrapper {
            display: inline-block;
            float: right;
            margin-left: 0;
            margin-right: 0;
            padding-bottom: 2px;
            pointer-events: auto
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelectionWrapper {
            display: inline-block;
            float: left;
            margin-left: 0;
            margin-right: 0;
            padding-bottom: 2px
        }

        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll,
        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelection,
        a#CybotCookiebotDialogBodyLevelButtonLevelOptinDeclineAll {
            color: #ffffff;
            display: inline-block;
            font-size: 9.5pt;
            font-weight: 600;
            height: 16px;
            margin-top: 6px;
            padding: 2px 4px;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            z-index: 10
        }

        a#CybotCookiebotDialogBodyLevelButtonLevelOptinDeclineAll {
            background-color: #333333;
            border: 1px solid #333333
        }

        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll {
            background-color: #188600;
            border: 1px solid #188600
        }

        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelection {
            background-color: #188600;
            border: 1px solid #188600
        }

        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll:hover,
        a#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelection:hover,
        a#CybotCookiebotDialogBodyLevelButtonLevelOptinDeclineAll:hover {
            color: #ffffff;
            text-decoration: none
        }

        .CybotCookiebotDialogBodyLevelButtonWrapper {
            display: inline-block;
            line-height: 16px;
            margin-left: 0;
            margin-right: 14px;
            position: relative
        }

        div[dir=rtl] .CybotCookiebotDialogBodyLevelButtonWrapper {
            margin-left: 14px;
            margin-right: 0
        }

        .CybotCookiebotDialogBodyLevelButtonWrapper:last-of-type {
            margin-left: 0;
            margin-right: 7px
        }

        div[dir=rtl] .CybotCookiebotDialogBodyLevelButtonWrapper:last-of-type {
            margin-left: 7px;
            margin-right: 0
        }

        .CybotCookiebotDialogBodyLevelButtonWrapper label {
            white-space: nowrap
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton {
            cursor: pointer;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            z-index: 2
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton+label:after,
        input[type=checkbox].CybotCookiebotDialogBodyLevelButton+label:before {
            content: normal
        }

        input [type=checkbox].CybotCookiebotDialogBodyLevelButton.CybotCookiebotDialogBodyLevelButtonDisabled {
            cursor: default
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton+label {
            background-image: url();
            background-position: left 1px;
            background-repeat: no-repeat;
            color: inherit;
            cursor: pointer;
            display: inline-block;
            font-size: inherit;
            height: auto;
            left: 0;
            line-height: 16px;
            margin-bottom: 0;
            margin-top: 0;
            min-height: 14px;
            padding: 1px 0 0 17px;
            position: relative;
            top: 0;
            vertical-align: top;
            width: auto;
            z-index: 1
        }

        div[dir=rtl] input[type=checkbox].CybotCookiebotDialogBodyLevelButton+label {
            background-position: right 1px;
            padding: 2px 17px 0 0
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton:checked+label {
            background-image: url();
            background-position: left 1px;
            background-repeat: no-repeat;
            display: inline-block;
            height: auto;
            line-height: 16px;
            min-height: 14px;
            padding: 1px 0 0 17px;
            vertical-align: top;
            width: auto
        }

        div[dir=rtl] input[type=checkbox].CybotCookiebotDialogBodyLevelButton:checked+label {
            background-position: right 1px;
            padding: 2px 17px 0 0
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton.CybotCookiebotDialogBodyLevelButtonDisabled+label {
            background-image: url();
            background-position: left 1px;
            background-repeat: no-repeat;
            cursor: default;
            display: inline-block;
            height: auto;
            left: 0;
            line-height: 16px;
            min-height: 14px;
            padding: 1px 0 0 17px;
            position: relative;
            top: 0;
            vertical-align: top;
            width: auto;
            z-index: 1
        }

        div[dir=rtl] input[type=checkbox].CybotCookiebotDialogBodyLevelButton.CybotCookiebotDialogBodyLevelButtonDisabled+label {
            background-position: right 1px;
            padding: 2px 17px 0 0
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton:focus+label {
            background-image: url();
            background-position: left 1px;
            background-repeat: no-repeat;
            display: inline-block;
            height: auto;
            line-height: 16px;
            min-height: 14px;
            padding: 1px 0 0 17px;
            vertical-align: top;
            width: auto
        }

        div[dir=rtl] input[type=checkbox].CybotCookiebotDialogBodyLevelButton:focus+label {
            background-position: right 1px;
            padding: 2px 17px 0 0
        }

        input[type=checkbox].CybotCookiebotDialogBodyLevelButton:checked:focus+label {
            background-image: url();
            background-position: left 1px;
            background-repeat: no-repeat;
            display: inline-block;
            height: auto;
            line-height: 16px;
            min-height: 14px;
            padding: 1px 0 0 17px;
            vertical-align: top;
            width: auto
        }

        div[dir=rtl] input[type=checkbox].CybotCookiebotDialogBodyLevelButton:checked:focus+label {
            background-position: right 1px;
            padding: 2px 17px 0 0
        }

        #CybotCookiebotDialogBodyLevelDetailsWrapper {
            background-color: #262626;
            border: 1px solid #404040;
            border-left: none;
            cursor: pointer;
            display: table-cell;
            height: 14px;
            padding: 4px 0 4px 4px;
            text-align: left;
            vertical-align: top
        }

        div[dir=rtl] #CybotCookiebotDialogBodyLevelDetailsWrapper {
            border: 1px solid #404040;
            border-right: none;
            padding: 4px 4px 4px 0;
            text-align: right
        }

        #CybotCookiebotDialogDetail {
            background-color: #161616;
            display: none;
            overflow: auto;
            padding-bottom: 1px;
            padding-top: 0
        }

        #CybotCookiebotDialogDetailBody {
            margin-left: auto;
            margin-right: auto;
            max-width: 632px;
            vertical-align: top;
            width: 100%
        }

        div[dir=rtl] #CybotCookiebotDialogDetailBody {
            text-align: right
        }

        #CybotCookiebotDialogDetailBodyContent {
            background-color: #161616;
            border: solid #404040;
            border-width: 1px 1px 4px;
            color: #ffffff;
            height: 170px
        }

        #CybotCookiebotDialogDetailBodyContent a {
            font-size: 9pt
        }

        #CybotCookiebotDialogDetailBodyContentTabs a {
            font-size: 10.5pt
        }

        #CybotCookiebotDialogDetailBodyContentText {
            font-size: 10pt;
            padding: 8px
        }

        #CybotCookiebotDialogDetailBodyContentTabs {
            display: inline-block;
            height: auto;
            position: relative;
            white-space: nowrap
        }

        a.CybotCookiebotDialogDetailBodyContentTabsItem {
            margin: 0;
            text-decoration: none !important
        }

        a.CybotCookiebotDialogDetailBodyContentTabsItem:focus,
        a.CybotCookiebotDialogDetailBodyContentTabsItem:hover {
            background-color: #161616 !important;
            border-right: 1px solid #404040;
            border-top: 1px solid #404040;
            color: #ffffff !important;
            opacity: .9;
            text-decoration: none !important
        }

        a.CybotCookiebotDialogDetailBodyContentTabsItemSelected {
            color: #ffffff !important;
            margin: 0;
            opacity: 1;
            text-decoration: none !important
        }

        a.CybotCookiebotDialogDetailBodyContentTabsItemSelected:focus,
        a.CybotCookiebotDialogDetailBodyContentTabsItemSelected:hover {
            border-right: 1px solid #404040;
            border-top: 1px solid #404040;
            color: #ffffff !important;
            cursor: default;
            text-decoration: none !important
        }

        .CybotCookiebotDialogDetailBodyContentTabsItem {
            background: #262626;
            border-right: 1px solid #404040;
            border-top: 1px solid #404040;
            color: #ffffff !important;
            cursor: pointer;
            display: inline-block;
            font-size: 10.5pt;
            font-weight: 400;
            line-height: 100%;
            margin: 1px 0 0;
            opacity: .85;
            padding: 7px 18px 5px;
            position: relative;
            top: 1px;
            white-space: normal;
            z-index: 10
        }

        .CybotCookiebotDialogDetailBodyContentTabsItem:first-of-type {
            border-left: 1px solid #404040
        }

        .CybotCookiebotDialogDetailBodyContentTabsItemSelected {
            background: #161616;
            border-right: 1px solid #404040;
            border-top: 1px solid #404040;
            color: #ffffff;
            display: inline-block;
            font-size: 10.5pt;
            font-weight: 400;
            line-height: 100%;
            opacity: 1;
            padding: 8px 18px 6px;
            position: relative;
            top: 1px;
            white-space: normal;
            z-index: 10
        }

        .CybotCookiebotDialogDetailBodyContentTab:first-child {
            border-left: 1px solid #404040;
            -webkit-border-radius: 4px 0 0 0;
            -moz-border-radius: 4px 0 0 0;
            border-radius: 4px 0 0 0
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentTab:first-child {
            border-left: none;
            -webkit-border-radius: 0 4px 0 0;
            -moz-border-radius: 0 4px 0 0;
            border-radius: 0 4px 0 0
        }

        .CybotCookiebotDialogDetailBodyContentTab {
            border-left: none
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentTab {
            border-left: 1px solid #404040
        }

        #CybotCookiebotDialogDetailFooter {
            background-color: #161616;
            color: #ffffff;
            opacity: .85;
            padding-right: 2px;
            padding-top: 4px;
            text-align: right
        }

        div[dir=rtl] #CybotCookiebotDialogDetailFooter {
            text-align: left
        }

        #CybotCookiebotDialogDetailFooter a {
            color: #ffffff
        }

        #CybotCookiebotDialogDetailBodyContentTextAbout {
            display: none;
            font-size: 9pt;
            height: 140px;
            overflow: auto;
            padding: 18px 12px 12px
        }

        #CybotCookiebotDialogDetailBodyContentTextOverview {
            display: inline-block
        }

        #CybotCookiebotDialogDetailBodyContentTextIABv2 {
            word-wrap: break-word;
            display: none;
            text-overflow: ellipsis
        }

        #CybotCookiebotDialogDetailBodyContentTabsIABv2,
        #CybotCookiebotDialogDetailBodyContentTextIABv2 {
            display: none
        }

        #CybotCookiebotDialogDetailBodyContentCookieContainerTypes,
        #CybotCookiebotDialogDetailBodyContentIABv2Tabs {
            background-color: #262626;
            float: left;
            font-size: 9pt;
            padding: 0;
            white-space: nowrap
        }

        div[dir=rtl] #CybotCookiebotDialogDetailBodyContentCookieContainerTypes,
        div[dir=rtl] #CybotCookiebotDialogDetailBodyContentIABv2Tabs {
            float: right
        }

        #CybotCookiebotDialogDetailBodyContentCookieContainerTypeDetails,
        #CybotCookiebotDialogDetailBodyContentIABv2Details {
            font-size: 9pt;
            height: 146px;
            max-height: 146px;
            overflow: auto;
            padding: 12px
        }

        .CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected,
        .CybotCookiebotDialogDetailBodyContentIABv2TabSelected {
            background-color: #161616;
            border-bottom: 1px solid #404040;
            border-left: none;
            border-right: 1px solid #161616;
            color: #ffffff !important;
            display: block;
            padding: 8px;
            text-decoration: none !important
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected,
        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentIABv2TabSelected {
            border-left: 1px solid #161616;
            border-right: none
        }

        .CybotCookiebotDialogDetailBodyContentCookieContainerTypes,
        .CybotCookiebotDialogDetailBodyContentIABv2Tab {
            background-color: #262626;
            border-bottom: 1px solid #404040;
            border-left: none;
            border-right: 1px solid #404040;
            color: #ffffff !important;
            cursor: pointer;
            display: block;
            opacity: 1;
            padding: 8px;
            text-decoration: none !important
        }

        .CybotCookiebotDialogDetailBodyContentCookieContainerTypes:first-child,
        .CybotCookiebotDialogDetailBodyContentIABv2Tab:first-child {
            border-top: 1px solid #404040
        }

        .CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected:first-child {
            border-top: 1px solid #161616
        }

        #CybotCookiebotDialogDetailBodyContentIABv2Tabs a:first-child {
            border-top: 0
        }

        .CybotCookiebotDialogDetailBodyContentCookieContainerTypes label,
        .CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected label,
        .CybotCookiebotDialogDetailBodyContentIABv2Tab label,
        .CybotCookiebotDialogDetailBodyContentIABv2TabSelected label {
            cursor: pointer;
            display: none;
            margin: 0
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentCookieContainerTypes,
        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentIABv2Tab {
            border-left: 1px solid #404040;
            border-right: none
        }

        a.CybotCookiebotDialogDetailBodyContentCookieContainerTypes:focus,
        a.CybotCookiebotDialogDetailBodyContentCookieContainerTypes:hover,
        a.CybotCookiebotDialogDetailBodyContentIABv2Tab:focus,
        a.CybotCookiebotDialogDetailBodyContentIABv2Tab:hover {
            background: #161616 !important;
            border-bottom: 1px solid #404040;
            border-left: none;
            border-right: 1px solid #404040;
            color: #ffffff !important;
            opacity: 1;
            text-decoration: none !important
        }

        a.CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected:focus,
        a.CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected:hover,
        a.CybotCookiebotDialogDetailBodyContentIABv2TabSelected:focus,
        a.CybotCookiebotDialogDetailBodyContentIABv2TabSelected:hover {
            border-bottom: 1px solid #404040;
            border-left: none;
            border-right: 1px solid #161616;
            color: #ffffff !important;
            cursor: default;
            text-decoration: none !important
        }

        #CybotCookiebotDialogDetailBodyContentCookieTabsAdvertising,
        #CybotCookiebotDialogDetailBodyContentCookieTabsPreference,
        #CybotCookiebotDialogDetailBodyContentCookieTabsStatistics,
        #CybotCookiebotDialogDetailBodyContentCookieTabsUnclassified,
        #CybotCookiebotDialogDetailBodyContentIABv2TabFeatures,
        #CybotCookiebotDialogDetailBodyContentIABv2TabPartners {
            display: none
        }

        .CybotCookiebotDialogBodyLevelButtonIABContainer,
        .CybotCookiebotDialogBodyLevelButtonIABContainerCollapsed {
            border: 1px solid #ccc;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            margin-bottom: 8px;
            overflow: hidden;
            padding: 4px 4px 4px 8px
        }

        .CybotCookiebotDialogBodyLevelButtonIABContainerCollapsed {
            height: 18px
        }

        .CybotCookiebotDialogBodyLevelButtonIABContainerToggleShow {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAGCAMAAAAmGUT3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkI3NDEyNDEwNzk0MjExRTQ5RUE5RkRFMUQ3MEU1NTZDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkI3NDEyNDExNzk0MjExRTQ5RUE5RkRFMUQ3MEU1NTZDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Qjc0MTI0MEU3OTQyMTFFNDlFQTlGREUxRDcwRTU1NkMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Qjc0MTI0MEY3OTQyMTFFNDlFQTlGREUxRDcwRTU1NkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz70ohqeAAAABlBMVEVgYGAAAAAPhzbbAAAAAnRSTlP/AOW3MEoAAAAjSURBVHjaYmBkYAQBBkYGIAAxQBQcQ/ggCiLFCGFBCIAAAwADkwAg7Yr51AAAAABJRU5ErkJggg==);
            background-position: left 6px;
            background-position-x: left;
            background-position-y: 6px;
            background-repeat: no-repeat;
            display: inline-block;
            float: right;
            height: 20px;
            position: relative;
            width: 16px
        }

        .CybotCookiebotDialogBodyLevelButtonIABContainerToggleHide {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAGCAYAAAARx7TFAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU0QzAwODExNzk0MjExRTQ4QzBERTBGMTkxMUY2M0M0IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU0QzAwODEyNzk0MjExRTQ4QzBERTBGMTkxMUY2M0M0Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTRDMDA4MEY3OTQyMTFFNDhDMERFMEYxOTExRjYzQzQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTRDMDA4MTA3OTQyMTFFNDhDMERFMEYxOTExRjYzQzQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz576KdnAAAATklEQVR42kyO2xEAMQgCJZ3afxFcyGRz+uMD3EHdXbYrJSltrz4Dt4UBNfsWPG614oRwO2Q/Eg+IwvnDj8kjk+48MzmZeNYI/4jRPwEGAFy/MS7NcXxJAAAAAElFTkSuQmCC);
            background-position: left 6px;
            background-position-x: left;
            background-position-y: 6px;
            background-repeat: no-repeat;
            display: inline-block;
            float: right;
            height: 20px;
            position: relative;
            width: 16px
        }

        .CybotCookiebotDialogDetailBodyContentCookieTypeTable {
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 9pt;
            margin: 8px 0 0;
            padding: 0;
            width: 100%
        }

        .CybotCookiebotDialogDetailBodyContentCookieTypeTable thead td,
        .CybotCookiebotDialogDetailBodyContentCookieTypeTable thead th {
            background-color: #262626 !important;
            border-bottom: 1px solid #404040;
            color: #ffffff !important;
            font-weight: 400;
            padding: 2px;
            text-align: left;
            vertical-align: top
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentCookieTypeTable thead td,
        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentCookieTypeTable thead th {
            text-align: right
        }

        .CybotCookiebotDialogDetailBodyContentCookieTypeTable tbody td {
            border-bottom: 1px solid #404040;
            border-right: 1px solid #262626;
            color: #ffffff !important;
            font-size: 9pt;
            max-width: 72px;
            overflow: hidden;
            padding: 4px;
            text-align: left;
            vertical-align: top
        }

        .CybotCookiebotDialogDetailBodyContentCookieTypeTable tbody td:last-child {
            border-right: 0
        }

        div[dir=rtl] .CybotCookiebotDialogDetailBodyContentCookieTypeTable tbody td {
            text-align: right
        }

        .CybotCookiebotDialogDetailBodyContentCookieTypeTable tbody td.CybotCookiebotDialogDetailBodyContentCookieTypeTableEmpty {
            border: none;
            border-top: 1px solid #404040;
            padding: 4px 0 0
        }

        #CybotCookiebotDialogBodyIABIntro,
        .CybotCookiebotDialogBodyIABIntroContainer {
            margin-bottom: 12px
        }

        .CybotCookiebotDialogBodyLevelButtonIABHeader {
            font-weight: 700;
            text-transform: uppercase
        }

        .CybotCookiebotDialogBodyLevelButtonIABHeader,
        .CybotCookiebotDialogBodyLevelSectionIAB {
            border-top: 1px solid #404040;
            margin-bottom: 12px;
            margin-top: 2px;
            padding-top: 8px
        }

        .CybotCookiebotDialogBodyLevelButtonIABDescription {
            margin-bottom: 12px;
            margin-top: 8px
        }

        .CybotCookiebotDialogBodyLevelButtonIABLabel {
            font-weight: 700
        }

        ul.CybotCookiebotDialogBodyLevelButtonIABBullet {
            list-style-type: disc;
            margin: 3px 0 0;
            padding-inline-start: 18px
        }

        .CybotCookiebotDialogBodyLevelButtonIABHeaderToggle {
            float: right
        }

        .CybotCookiebotDialogBodyContentLabelPersonalInformation {
            font-weight: 400 !important
        }
    </style>
    <style type="text/css" id="CookieConsentStateDisplayStyles">
        .cookieconsent-optin,
        .cookieconsent-optin-preferences,
        .cookieconsent-optin-statistics,
        .cookieconsent-optin-marketing {
            display: block;
            display: initial;
        }

        .cookieconsent-optout-preferences,
        .cookieconsent-optout-statistics,
        .cookieconsent-optout-marketing,
        .cookieconsent-optout {
            display: none;
        }
    </style>
</head>

<body class="full-screen-preview">
    <div id="CybotCookiebotDialog" name="CybotCookiebotDialog" role="dialog" aria-describedby="CybotCookiebotDialogBodyContentTitle" lang="en" dir="ltr" ng-non-bindable="" style="display: none; opacity: 1 !important; top: 726px; width: 100%; height: auto; transform: translateY(726px);">
        <div id="CybotCookiebotDialogBody">
            <div id="CybotCookiebotDialogPoweredbyLink" style="display: none;"><img id="CybotCookiebotDialogPoweredbyImage" src="data:," alt="logo"></div>
            <div id="CybotCookiebotDialogBodyContent" style="padding-left: 8px;">
                <h2 id="CybotCookiebotDialogBodyContentTitle" lang="en">Your privacy matters</h2>
                <div id="CybotCookiebotDialogBodyContentText" lang="en">Cookies and similar technologies are used on our sites to personalise content and ads, provide and improve product features and to analyse traffic on our sites by Envato, our business partners and authors. You can find further details below. By continuing to use our sites and services, you agree to the use of these cookies and similar technologies.</div>
            </div>
            <div id="CybotCookiebotDialogBodyContentControls" style="display: none;">
                <div class="CybotCookiebotDialogBodyContentControlsWrapper"><input type="checkbox" id="CybotCookiebotDialogBodyContentCheckboxPersonalInformation" class="CybotCookiebotDialogBodyLevelButton" tabindex="0"><label class="CybotCookiebotDialogBodyContentLabelPersonalInformation" for="CybotCookiebotDialogBodyContentCheckboxPersonalInformation">[#OOI_PERSONAL_INFORMATION#]</label></div>
            </div>
            <div id="CybotCookiebotDialogBodyButtons" style="padding-left: 0px;"><a id="CybotCookiebotDialogBodyButtonDecline" class="CybotCookiebotDialogBodyButton" href="#" tabindex="0" lang="en" style="display: none;">Use necessary cookies only</a> <a id="CybotCookiebotDialogBodyButtonAccept" class="CybotCookiebotDialogBodyButton" href="#" tabindex="0" lang="en" style="margin-left: 2px; padding-left: 12px; padding-right: 12px;">OK</a> <a id="CybotCookiebotDialogBodyButtonDetails" class="CybotCookiebotDialogBodyLink" href="#" tabindex="0" lang="en">Show details</a></div>
            <div id="CybotCookiebotDialogBodyLevelWrapper">
                <div id="CybotCookiebotDialogBodyLevelButtonAcceptWrapper"><a id="CybotCookiebotDialogBodyLevelButtonAccept" href="#" tabindex="0" lang="en">OK</a></div>
                <div id="CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelectionWrapper" style="display:none"><a id="CybotCookiebotDialogBodyLevelButtonLevelOptinDeclineAll" class="CybotCookiebotDialogBodyButton" href="#" tabindex="0" lang="en">Use necessary cookies only</a> <a id="CybotCookiebotDialogBodyLevelButtonLevelOptinAllowallSelection" class="CybotCookiebotDialogBodyButton" href="#" tabindex="0" lang="en">Allow selection</a> <a id="CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll" class="CybotCookiebotDialogBodyButton" href="#" tabindex="0" lang="en">Allow all cookies</a></div>
                <div id="CybotCookiebotDialogBodyLevelButtons">
                    <div id="CybotCookiebotDialogBodyLevelButtonsTable">
                        <div id="CybotCookiebotDialogBodyLevelButtonsRow">
                            <div id="CybotCookiebotDialogBodyLevelButtonsSelectPane">
                                <div class="CybotCookiebotDialogBodyLevelButtonWrapper"><input type="checkbox" id="CybotCookiebotDialogBodyLevelButtonNecessary" class="CybotCookiebotDialogBodyLevelButton CybotCookiebotDialogBodyLevelButtonDisabled" disabled="disabled" checked="checked"><label for="CybotCookiebotDialogBodyLevelButtonNecessary">Strictly Necessary</label></div>
                                <div class="CybotCookiebotDialogBodyLevelButtonWrapper"><input type="checkbox" id="CybotCookiebotDialogBodyLevelButtonPreferences" class="CybotCookiebotDialogBodyLevelButton" checked="checked" tabindex="0"><label for="CybotCookiebotDialogBodyLevelButtonPreferences">Preferences</label></div>
                                <div class="CybotCookiebotDialogBodyLevelButtonWrapper"><input type="checkbox" id="CybotCookiebotDialogBodyLevelButtonStatistics" class="CybotCookiebotDialogBodyLevelButton" checked="checked" tabindex="0"><label for="CybotCookiebotDialogBodyLevelButtonStatistics">Statistics</label></div>
                                <div class="CybotCookiebotDialogBodyLevelButtonWrapper"><input type="checkbox" id="CybotCookiebotDialogBodyLevelButtonMarketing" class="CybotCookiebotDialogBodyLevelButton" checked="checked" tabindex="0"><label for="CybotCookiebotDialogBodyLevelButtonMarketing">Marketing</label></div>
                            </div>
                            <div id="CybotCookiebotDialogBodyLevelDetailsWrapper"><a id="CybotCookiebotDialogBodyLevelDetailsButton" class="CybotCookiebotDialogBodyLink" href="#" tabindex="0" lang="en">Show details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="CybotCookiebotDialogDetail">
            <div id="CybotCookiebotDialogDetailBody">
                <div id="CybotCookiebotDialogDetailBodyContentTabs"><a id="CybotCookiebotDialogDetailBodyContentTabsOverview" class="CybotCookiebotDialogDetailBodyContentTab CybotCookiebotDialogDetailBodyContentTabsItemSelected" href="#" lang="en">Cookie declaration</a> <a id="CybotCookiebotDialogDetailBodyContentTabsIABv2" class="CybotCookiebotDialogDetailBodyContentTab CybotCookiebotDialogDetailBodyContentTabsItem" href="#" lang="en" style="display: none;">[#IABV2SETTINGS#]</a> <a id="CybotCookiebotDialogDetailBodyContentTabsAbout" class="CybotCookiebotDialogDetailBodyContentTab CybotCookiebotDialogDetailBodyContentTabsItem" href="#" lang="en">About</a></div>
                <div id="CybotCookiebotDialogDetailBodyContent">
                    <div id="CybotCookiebotDialogDetailBodyContentTextOverview" lang="en">
                        <div id="CybotCookiebotDialogDetailBodyContentCookieContainer">
                            <div id="CybotCookiebotDialogDetailBodyContentCookieContainerTypes"><a id="CybotCookiebotDialogDetailBodyContentCookieContainerNecessary" href="#" class="CybotCookiebotDialogDetailBodyContentCookieContainerTypesSelected" lang="en" aria-label="Strictly Necessary (87)"><label for="CybotCookiebotDialogDetailBodyContentCookieContainerNecessary" aria-hidden="">&thinsp;</label>Strictly Necessary (87)</a> <a id="CybotCookiebotDialogDetailBodyContentCookieContainerPreference" href="#" class="CybotCookiebotDialogDetailBodyContentCookieContainerTypes" lang="en" aria-label="Preferences (10)"><label for="CybotCookiebotDialogDetailBodyContentCookieContainerPreference" aria-hidden="">&thinsp;</label>Preferences (10)</a> <a id="CybotCookiebotDialogDetailBodyContentCookieContainerStatistics" href="#" class="CybotCookiebotDialogDetailBodyContentCookieContainerTypes" lang="en" aria-label="Statistics (74)"><label for="CybotCookiebotDialogDetailBodyContentCookieContainerStatistics" aria-hidden="">&thinsp;</label>Statistics (74)</a> <a id="CybotCookiebotDialogDetailBodyContentCookieContainerAdvertising" href="#" class="CybotCookiebotDialogDetailBodyContentCookieContainerTypes" lang="en" aria-label="Marketing (289)"><label for="CybotCookiebotDialogDetailBodyContentCookieContainerAdvertising" aria-hidden="">&thinsp;</label>Marketing (289)</a> <a id="CybotCookiebotDialogDetailBodyContentCookieContainerUnclassified" href="#" class="CybotCookiebotDialogDetailBodyContentCookieContainerTypes" lang="en" aria-label="Unclassified (93)"><label for="CybotCookiebotDialogDetailBodyContentCookieContainerUnclassified" aria-hidden="">&thinsp;</label>Unclassified (93)</a></div>
                            <div id="CybotCookiebotDialogDetailBodyContentCookieContainerTypeDetails">
                                <div id="CybotCookiebotDialogDetailBodyContentCookieTabsNecessary">
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeIntro">Strictly necessary cookies help make a website usable by enabling basic functions like page navigation, website security and access to information that requires authentication. </div>
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeTableContainer">
                                        <table id="CybotCookiebotDialogDetailTableNecessary" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Provider</th>
                                                    <th scope="col">Purpose</th>
                                                    <th scope="col">Expiry</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td title="CookieConsent">CookieConsent&nbsp;[x20]</td>
                                                    <td><a href="https://www.cookiebot.com/goto/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Cookiebot's privacy policy">Cookiebot</a></td>
                                                    <td title="Stores the user's cookie consent state for the current domain">Stores the user's cookie consent state for the current domain</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__cf_bm">__cf_bm&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://codepen.io/" target="_blank" rel="noopener noreferrer nofollow" title="Codepen's privacy policy">Codepen</a><br><a href="https://www.mgid.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Mgid's privacy policy">Mgid</a><br><a href="https://www.cloudflare.com/security-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Cloudflare's privacy policy">Cloudflare</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. This is beneficial for the website, in order to make valid reports on the use of their website.">This cookie is used to distinguish between humans and bots. This is beneficial for the website, in order to make valid reports on the use of their website.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CONSENT">CONSENT&nbsp;[x2]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a><br><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to detect if the visitor has accepted the marketing category in the cookie banner. This cookie is necessary for GDPR-compliance of the website.  ">Used to detect if the visitor has accepted the marketing category in the cookie banner. This cookie is necessary for GDPR-compliance of the website. </td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_ce.cch">_ce.cch</td>
                                                    <td><a href="https://www.crazyegg.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Crazyegg's privacy policy">Crazyegg</a></td>
                                                    <td title="Stores the user's cookie consent state for the current domain">Stores the user's cookie consent state for the current domain</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_user_id">ajs_user_id&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Segment cookie for 2019 CDP trial">Segment cookie for 2019 CDP trial</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cybermonday2019_cart">cybermonday2019_cart</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Client-side shopping cart for cyber monday 2019 campaign">Client-side shopping cart for cyber monday 2019 campaign</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="envato_c_cart">envato_c_cart</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Client-side shopping cart for envato/marketing-campaigns repo">Client-side shopping cart for envato/marketing-campaigns repo</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_auth">_auth</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Ensures visitor browsing-security by preventing cross-site request forgery. This cookie is essential for the security of the website and visitor.   ">Ensures visitor browsing-security by preventing cross-site request forgery. This cookie is essential for the security of the website and visitor. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="csrftoken">csrftoken</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Helps prevent Cross-Site Request Forgery (CSRF) attacks.">Helps prevent Cross-Site Request Forgery (CSRF) attacks.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="userId">userId&nbsp;[x2]</td>
                                                    <td><a href="https://segmento.ru/" target="_blank" rel="noopener noreferrer nofollow" title="Segmento's privacy policy">Segmento</a><br>mrtnsvr.com</td>
                                                    <td title="Preserves users states across page requests.">Preserves users states across page requests.</td>
                                                    <td title="180 days">180 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="checkForPermission">checkForPermission</td>
                                                    <td><a href="https://www.beeswax.com/cookies/" target="_blank" rel="noopener noreferrer nofollow" title="Beeswax's privacy policy">Beeswax</a></td>
                                                    <td title="Determines whether the user has accepted the cookie consent box. ">Determines whether the user has accepted the cookie consent box. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="PHPSESSID">PHPSESSID</td>
                                                    <td><a href="https://www.lead-alliance.net/dataprotection" target="_blank" rel="noopener noreferrer nofollow" title="Leadalliance's privacy policy">Leadalliance</a></td>
                                                    <td title="Preserves user session state across page requests.">Preserves user session state across page requests.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="SESS#">SESS#&nbsp;[x2]</td>
                                                    <td><a href="https://www.exactag.com/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Exactag's privacy policy">Exactag</a><br><a href="https://www.freewheel.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Freewheel's privacy policy">Freewheel</a></td>
                                                    <td title="Preserves users states across page requests.">Preserves users states across page requests.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="source">source</td>
                                                    <td>adv.office-partner.de</td>
                                                    <td title="Registers how the user has reached the website to enable pay-out of referral commission fees to partners.">Registers how the user has reached the website to enable pay-out of referral commission fees to partners.</td>
                                                    <td title="1000 days">1000 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ASP.NET_SessionId">ASP.NET_SessionId</td>
                                                    <td><a href="https://privacy.microsoft.com/en-US/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Preserves the visitor's session state across page requests.">Preserves the visitor's session state across page requests.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dt">dt</td>
                                                    <td><a href="https://integralads.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Intergral Ad Science's privacy policy">Intergral Ad Science</a></td>
                                                    <td title="Used by the website to detect any fraud and ensure brand safety management on the website.  ">Used by the website to detect any fraud and ensure brand safety management on the website. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="__cfruid">__cfruid&nbsp;[x8]</td>
                                                    <td><a href="https://www.change.org/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Change.org's privacy policy">Change.org</a><br><a href="https://www.zendesk.com/company/customers-partners/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zendesk's privacy policy">Zendesk</a><br><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://codepen.io/" target="_blank" rel="noopener noreferrer nofollow" title="Codepen.io's privacy policy">Codepen.io</a><br><a href="https://codepen.io/" target="_blank" rel="noopener noreferrer nofollow" title="Codepen's privacy policy">Codepen</a></td>
                                                    <td title="This cookie is a part of the services provided by Cloudflare - Including load-balancing, deliverance of website content and serving DNS connection for website operators. ">This cookie is a part of the services provided by Cloudflare - Including load-balancing, deliverance of website content and serving DNS connection for website operators. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="envato_c_cart_items">envato_c_cart_items</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="cf_chl_#">cf_chl_#</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is a part of the services provided by Cloudflare - Including load-balancing, deliverance of website content and serving DNS connection for website operators. ">This cookie is a part of the services provided by Cloudflare - Including load-balancing, deliverance of website content and serving DNS connection for website operators. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cf_chl_prog">cf_chl_prog</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. ">This cookie is used to distinguish between humans and bots. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cf_chl_seq_#">cf_chl_seq_#</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. ">This cookie is used to distinguish between humans and bots. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="c">c&nbsp;[x7]</td>
                                                    <td><a href="https://www.admedo.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Admedo's privacy policy">Admedo</a><br><a href="https://www.internedservices.nl/disclaimer-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="KPN's privacy policy">KPN</a><br>scoota.co<br><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Sportradar's privacy policy">Sportradar</a><br><a href="http://www.optomaton.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Optomaton's privacy policy">Optomaton</a><br><a href="http://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a><br>myvisualiq.net</td>
                                                    <td title="Used in order to detect spam and improve the website's security. Does not store  visitor specific data.">Used in order to detect spam and improve the website's security. Does not store visitor specific data.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="akacd_#">akacd_#</td>
                                                    <td>cdn.fuseplatform.net</td>
                                                    <td title="Used in connection with phased release which allows the website owner to assign a certain number of users to a specific version of the website.">Used in connection with phased release which allows the website owner to assign a certain number of users to a specific version of the website.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cf_use_ob">cf_use_ob&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used to detect if the website is inaccessible, in case of maintenance of content updates - The cookie allows the website to present the visitor with a notice on the issue in question.">Used to detect if the website is inaccessible, in case of maintenance of content updates - The cookie allows the website to present the visitor with a notice on the issue in question.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="algoliasearch-client-js">algoliasearch-client-js</td>
                                                    <td><a href="https://codepen.io/" target="_blank" rel="noopener noreferrer nofollow" title="Codepen's privacy policy">Codepen</a></td>
                                                    <td title="Necessary in order to optimize the website's search-bar function. The cookie ensures accurate and fast search results.">Necessary in order to optimize the website's search-bar function. The cookie ensures accurate and fast search results.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="cid">cid</td>
                                                    <td><a href="https://crimtan.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Crimtan's privacy policy">Crimtan</a></td>
                                                    <td title="This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com which allows online transactions without storing any credit card information. ">This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com which allows online transactions without storing any credit card information. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__Host-logged-out-session">__Host-logged-out-session</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="Used to implement or transfer content through Dropbox. ">Used to implement or transfer content through Dropbox. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="uc_session">uc_session</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="Determines whether the user has accepted the cookie consent box. ">Determines whether the user has accepted the cookie consent box. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="rc::a">rc::a</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. This is beneficial for the website, in order to make valid reports on the use of their website.">This cookie is used to distinguish between humans and bots. This is beneficial for the website, in order to make valid reports on the use of their website.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="rc::c">rc::c</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. ">This cookie is used to distinguish between humans and bots. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="rc::e">rc::e</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="This cookie is used to distinguish between humans and bots. ">This cookie is used to distinguish between humans and bots. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="test">test</td>
                                                    <td>m6r.eu</td>
                                                    <td title="Used to detect if the visitor has accepted the marketing category in the cookie banner. This cookie is necessary for GDPR-compliance of the website.  ">Used to detect if the visitor has accepted the marketing category in the cookie banner. This cookie is necessary for GDPR-compliance of the website. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cookies.js_dtest">cookies.js_dtest</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie determines whether the browser accepts cookies.">This cookie determines whether the browser accepts cookies.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_tuts_session">_tuts_session</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="14 days">14 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="li_gc">li_gc</td>
                                                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="LinkedIn's privacy policy">LinkedIn</a></td>
                                                    <td title="Stores the user's cookie consent state for the current domain">Stores the user's cookie consent state for the current domain</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="NSC_#">NSC_#</td>
                                                    <td>nikonusa.com</td>
                                                    <td title="Used to distribute traffic to the website on several servers in order to optimise response times.">Used to distribute traffic to the website on several servers in order to optimise response times.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="audit">audit</td>
                                                    <td><a href="https://rubiconproject.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Rubicon Project's privacy policy">Rubicon Project</a></td>
                                                    <td title="Determines whether the visitor has accepted the cookie consent box. This ensures that the cookie consent box will not be presented again upon re-entry.  ">Determines whether the visitor has accepted the cookie consent box. This ensures that the cookie consent box will not be presented again upon re-entry. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="SERVERID#">SERVERID#</td>
                                                    <td><a href="https://www.medialead.de/de/datenschutz.html" target="_blank" rel="noopener noreferrer nofollow" title="Medialead's privacy policy">Medialead</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="debug">debug</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="This cookie is used to detect errors on the website - this information is sent to the website's support staff in order to optimize the visitor's experience on the website.">This cookie is used to detect errors on the website - this information is sent to the website's support staff in order to optimize the visitor's experience on the website.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ssgdprconsent">ssgdprconsent</td>
                                                    <td><a href="http://www.sitescout.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Sitescout's privacy policy">Sitescout</a></td>
                                                    <td title="This cookie determines whether the browser accepts cookies.">This cookie determines whether the browser accepts cookies.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="JSESSIONID">JSESSIONID</td>
                                                    <td><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Preserves users states across page requests.">Preserves users states across page requests.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="AWSALBCORS">AWSALBCORS</td>
                                                    <td><a href="https://www.formstack.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Formstack's privacy policy">Formstack</a></td>
                                                    <td title="Registers which server-cluster is serving the visitor. This is used in context with load balancing, in order to optimize user experience.  ">Registers which server-cluster is serving the visitor. This is used in context with load balancing, in order to optimize user experience. </td>
                                                    <td title="6 days">6 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="redirect_after_sign_in_url">redirect_after_sign_in_url</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentCookieTabsPreference">
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeIntro">These cookies enable storage of information that changes the way a website behaves or looks, like settings for your region. </div>
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeTableContainer">
                                        <table id="CybotCookiebotDialogDetailTablePreference" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Provider</th>
                                                    <th scope="col">Purpose</th>
                                                    <th scope="col">Expiry</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td title="CookieConsentBulkSetting-#">CookieConsentBulkSetting-#</td>
                                                    <td><a href="https://www.cookiebot.com/goto/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Cookiebot's privacy policy">Cookiebot</a></td>
                                                    <td title="Enables cookie consent across multiple websites">Enables cookie consent across multiple websites</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="@@scroll#">@@scroll#&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="experiment_Q1FIrtgTbyZcmu7kfBpDw">experiment_Q1FIrtgTbyZcmu7kfBpDw</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Frontdoor homepage experiment 2">Frontdoor homepage experiment 2</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="experiment_b6_7bheCS1KzmWNKj8-m2g">experiment_b6_7bheCS1KzmWNKj8-m2g</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-player-bandaid-host">yt-player-bandaid-host</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Used to determine the optimal video quality based on the visitor's device and network settings. ">Used to determine the optimal video quality based on the visitor's device and network settings. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="experiment_7cObSMEdTEqbFh9GeQwMeg">experiment_7cObSMEdTEqbFh9GeQwMeg</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="gvc">gvc</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="Used to implement or transfer content through Dropbox. ">Used to implement or transfer content through Dropbox. </td>
                                                    <td title="5 years">5 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="locale">locale</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="The cookie determines the preferred language and country-setting of the visitor - This allows the website to show content most relevant to that region and language.">The cookie determines the preferred language and country-setting of the visitor - This allows the website to show content most relevant to that region and language.</td>
                                                    <td title="5 years">5 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="lang">lang</td>
                                                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="LinkedIn's privacy policy">LinkedIn</a></td>
                                                    <td title="Remembers the user's selected language version of a website">Remembers the user's selected language version of a website</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentCookieTabsStatistics">
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeIntro">Statistics cookies help us to understand how visitors interact with our websites by collecting and reporting information.</div>
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeTableContainer">
                                        <table id="CybotCookiebotDialogDetailTableStatistics" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Provider</th>
                                                    <th scope="col">Purpose</th>
                                                    <th scope="col">Expiry</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td title="ga:clientId">ga:clientId&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/?_ga=2.186731880.1747339094.1533213534-1177537036.1533213534" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Registers statistical data on users' behaviour on the website. Used for internal analytics by the website operator. ">Registers statistical data on users' behaviour on the website. Used for internal analytics by the website operator. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_ga">_ga&nbsp;[x3]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a><br><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Registers a unique ID that is used to generate statistical data on how the visitor uses the website.">Registers a unique ID that is used to generate statistical data on how the visitor uses the website.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_gat">_gat&nbsp;[x3]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a><br><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used by Google Analytics to throttle request rate">Used by Google Analytics to throttle request rate</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_gid">_gid&nbsp;[x3]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a><br><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Registers a unique ID that is used to generate statistical data on how the visitor uses the website.">Registers a unique ID that is used to generate statistical data on how the visitor uses the website.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_anonymous_id">ajs_anonymous_id&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Segment cookie for 2019 CDP trial">Segment cookie for 2019 CDP trial</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_group_id">ajs_group_id&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Segment cookie for 2019 CDP trial">Segment cookie for 2019 CDP trial</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ce_clock">ce_clock</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Sets a timestamp for when the visitor entered the website. This is used for analytical purposes on the website. ">Sets a timestamp for when the visitor entered the website. This is used for analytical purposes on the website. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="pll_language">pll_language</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used to determine the preferred language of the visitor and sets the language accordingly on the website, if possible.">This cookie is used to determine the preferred language of the visitor and sets the language accordingly on the website, if possible.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="popup-dismissed-1779478716">popup-dismissed-1779478716</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Survey popup for envato.com homepage.">Survey popup for envato.com homepage.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="collect">collect</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels.">Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ga:clientIdVerification">ga:clientIdVerification</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="bounce">bounce</td>
                                                    <td><a href="https://www.appnexus.com/en/company/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Appnexus's privacy policy">Appnexus</a></td>
                                                    <td title="Determines if a user leaves the website straight away. This information is used for internal statistics and analytics by the website operator.  ">Determines if a user leaves the website straight away. This information is used for internal statistics and analytics by the website operator. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="lkqdidts">lkqdidts</td>
                                                    <td><a href="http://www.lkqd.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="LKQD's privacy policy">LKQD</a></td>
                                                    <td title="This cookie is used to identify the frequency of visits and how long the visitor is on the website.">This cookie is used to identify the frequency of visits and how long the visitor is on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="loglevel">loglevel&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://wistia.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Wistia's privacy policy">Wistia</a></td>
                                                    <td title="Collects data on visitor interaction with the website's video-content - This data is used to make the website's video-content more relevant towards the visitor.  ">Collects data on visitor interaction with the website's video-content - This data is used to make the website's video-content more relevant towards the visitor. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="undefined">undefined&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://wistia.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Wistia's privacy policy">Wistia</a></td>
                                                    <td title="Collects data on visitor interaction with the website's video-content - This data is used to make the website's video-content more relevant towards the visitor.  ">Collects data on visitor interaction with the website's video-content - This data is used to make the website's video-content more relevant towards the visitor. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="wistia">wistia&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://wistia.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Wistia's privacy policy">Wistia</a></td>
                                                    <td title="Used by the website to track the visitor's use of video-content - The cookie roots from Wistia, which provides video-software to websites.">Used by the website to track the visitor's use of video-content - The cookie roots from Wistia, which provides video-software to websites.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="crum">crum</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="This cookie is used to identify the frequency of visits and how long the visitor is on the website.">This cookie is used to identify the frequency of visits and how long the visitor is on the website.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="__utma">__utma</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Collects data on the number of times a user has visited the website as well as dates for the first and most recent visit. Used by Google Analytics.">Collects data on the number of times a user has visited the website as well as dates for the first and most recent visit. Used by Google Analytics.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__utmb">__utmb</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Registers a timestamp with the exact time of when the user accessed the website. Used by Google Analytics to calculate the duration of a website visit.">Registers a timestamp with the exact time of when the user accessed the website. Used by Google Analytics to calculate the duration of a website visit.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__utmc">__utmc</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Registers a timestamp with the exact time of when the user leaves the website. Used by Google Analytics to calculate the duration of a website visit.">Registers a timestamp with the exact time of when the user leaves the website. Used by Google Analytics to calculate the duration of a website visit.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__utmv">__utmv</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Saves user-defined tracking parameters for use in Google Analytics.">Saves user-defined tracking parameters for use in Google Analytics.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__utmz">__utmz</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Collects data on where the user came from, what search engine was used, what link was clicked and what search term was used. Used by Google Analytics.">Collects data on where the user came from, what search engine was used, what link was clicked and what search term was used. Used by Google Analytics.</td>
                                                    <td title="6 months">6 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="amplitude_unsent_#">amplitude_unsent_#</td>
                                                    <td><a href="https://codesandbox.io/legal/privacy" target="_blank" rel="noopener noreferrer nofollow" title="CodeSandbox's privacy policy">CodeSandbox</a></td>
                                                    <td title="Used in context with the website’s pop-up questionnaires and messengering. The data is used for statistical or marketing purposes.">Used in context with the website’s pop-up questionnaires and messengering. The data is used for statistical or marketing purposes.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="amplitude_unsent_identify_#">amplitude_unsent_identify_#</td>
                                                    <td><a href="https://codesandbox.io/legal/privacy" target="_blank" rel="noopener noreferrer nofollow" title="CodeSandbox's privacy policy">CodeSandbox</a></td>
                                                    <td title="Used in context with the website’s pop-up questionnaires and messengering. The data is used for statistical or marketing purposes.">Used in context with the website’s pop-up questionnaires and messengering. The data is used for statistical or marketing purposes.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="px.gif">px.gif</td>
                                                    <td>ad-delivery.net</td>
                                                    <td title="This cookie is used to determine if the visitor has any adblocker software in their browser – this information can be used to make website content inaccessible to visitors if the website is financed with third-party advertisement.">This cookie is used to determine if the visitor has any adblocker software in their browser – this information can be used to make website content inaccessible to visitors if the website is financed with third-party advertisement.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ab">ab</td>
                                                    <td><a href="https://www.home.neustar/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Neustar's privacy policy">Neustar</a></td>
                                                    <td title="This cookie is used by the website’s operator in context with multi-variate testing. This is a tool used to combine or change content on the website. This allows the website to find the best variation/edition of the site. ">This cookie is used by the website’s operator in context with multi-variate testing. This is a tool used to combine or change content on the website. This allows the website to find the best variation/edition of the site. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__Host-js_csrf">__Host-js_csrf</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="Used to implement or transfer content through Dropbox. ">Used to implement or transfer content through Dropbox. </td>
                                                    <td title="3 years">3 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="t">t</td>
                                                    <td><a href="https://www.dropbox.com/help/security/cookies" target="_blank" rel="noopener noreferrer nofollow" title="Dropbox's privacy policy">Dropbox</a></td>
                                                    <td title="Stores data on which websites the user has visited.">Stores data on which websites the user has visited.</td>
                                                    <td title="3 years">3 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="PugT">PugT</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Used to determine the number of times the cookies have been updated in the visitor's browser. Used to optimize the website's server efficiency.  ">Used to determine the number of times the cookies have been updated in the visitor's browser. Used to optimize the website's server efficiency. </td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="d">d</td>
                                                    <td><a href="https://www.quantcast.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Quantcast's privacy policy">Quantcast</a></td>
                                                    <td title="Collects anonymous data on the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded with the purpose of generating reports for optimising the website content.">Collects anonymous data on the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded with the purpose of generating reports for optimising the website content.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_parsely_session">_parsely_session</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used to collect data on visitor behavior on the website.">This cookie is used to collect data on visitor behavior on the website.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ugid">ugid</td>
                                                    <td><a href="https://unsplash.com/" target="_blank" rel="noopener noreferrer nofollow" title="Unsplash's privacy policy">Unsplash</a></td>
                                                    <td title="Necessary for the implementation of video-content on the website.">Necessary for the implementation of video-content on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ouuid">ouuid</td>
                                                    <td><a href="http://www.optomaton.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Optomaton's privacy policy">Optomaton</a></td>
                                                    <td title="Contains an visitor ID - This is used to identify the visitor upon re-entry to the website.">Contains an visitor ID - This is used to identify the visitor upon re-entry to the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dph">dph</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Saves information of actions that have been carried out by the user during the current visit to the website, including searches with keywords included.">Saves information of actions that have been carried out by the user during the current visit to the website, including searches with keywords included.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="createDate">createDate</td>
                                                    <td><a href="https://gfycat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Gfycat's privacy policy">Gfycat</a></td>
                                                    <td title="Contains the expiry date for other cookies. ">Contains the expiry date for other cookies. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjIncludedInPageviewSample">_hjIncludedInPageviewSample</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used to detect whether the user navigation and interactions are included in the website’s data analytics. ">Used to detect whether the user navigation and interactions are included in the website’s data analytics. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjIncludedInSessionSample">_hjIncludedInSessionSample</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="Registers data on visitors' website-behaviour. This is used for internal analysis and website optimization. ">Registers data on visitors' website-behaviour. This is used for internal analysis and website optimization. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="apc_local_id">apc_local_id</td>
                                                    <td><a href="https://www.appcues.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Appcues's privacy policy">Appcues</a></td>
                                                    <td title="Used in context with the VR-content on website. Collects data on who, what and when the content has been viewed for statistical purposes. ">Used in context with the VR-content on website. Collects data on who, what and when the content has been viewed for statistical purposes. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="apc_user">apc_user</td>
                                                    <td><a href="https://www.appcues.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Appcues's privacy policy">Appcues</a></td>
                                                    <td title="Used in context with the VR-content on website. Collects data on who, what and when the content has been viewed for statistical purposes. ">Used in context with the VR-content on website. Collects data on who, what and when the content has been viewed for statistical purposes. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjAbsoluteSessionInProgress">_hjAbsoluteSessionInProgress</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="This cookie is used to count how many times a website has been visited by different visitors - this is done by assigning the visitor an ID, so the visitor does not get registered twice.">This cookie is used to count how many times a website has been visited by different visitors - this is done by assigning the visitor an ID, so the visitor does not get registered twice.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjFirstSeen">_hjFirstSeen</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="This cookie is used to determine if the visitor has visited the website before, or if it is a new visitor on the website.">This cookie is used to determine if the visitor has visited the website before, or if it is a new visitor on the website.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjTLDTest">_hjTLDTest</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="Registers statistical data on users' behaviour on the website. Used for internal analytics by the website operator. ">Registers statistical data on users' behaviour on the website. Used for internal analytics by the website operator. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="slideshare.experiments">slideshare.experiments</td>
                                                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="LinkedIn's privacy policy">LinkedIn</a></td>
                                                    <td title="Used by SlideShare to determine if the visitor is participating in a design experiment.">Used by SlideShare to determine if the visitor is participating in a design experiment.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="formstack.analytics.viewed-form.#">formstack.analytics.viewed-form.#</td>
                                                    <td><a href="https://www.formstack.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Formstack's privacy policy">Formstack</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentCookieTabsAdvertising">
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeIntro">Marketing cookies are used for tracking browsing activity and to customise and display ads that are relevant and engaging.</div>
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeTableContainer">
                                        <table id="CybotCookiebotDialogDetailTableAdvertising" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Provider</th>
                                                    <th scope="col">Purpose</th>
                                                    <th scope="col">Expiry</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td title="VISITOR_INFO1_LIVE">VISITOR_INFO1_LIVE</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Tries to estimate the users' bandwidth on pages with integrated YouTube videos.">Tries to estimate the users' bandwidth on pages with integrated YouTube videos.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="YSC">YSC</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Registers a unique ID to keep statistics of what videos from YouTube the user has seen.">Registers a unique ID to keep statistics of what videos from YouTube the user has seen.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt.innertube::nextId">yt.innertube::nextId</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Registers a unique ID to keep statistics of what videos from YouTube the user has seen.">Registers a unique ID to keep statistics of what videos from YouTube the user has seen.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt.innertube::requests">yt.innertube::requests</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Registers a unique ID to keep statistics of what videos from YouTube the user has seen.">Registers a unique ID to keep statistics of what videos from YouTube the user has seen.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-cast-available">yt-remote-cast-available</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-cast-installed">yt-remote-cast-installed</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-connected-devices">yt-remote-connected-devices</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-device-id">yt-remote-device-id</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-fast-check-period">yt-remote-fast-check-period</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-session-app">yt-remote-session-app</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="yt-remote-session-name">yt-remote-session-name</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="MUID">MUID</td>
                                                    <td><a href="https://privacy.microsoft.com/en-us/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Used widely by Microsoft as a unique user ID. The cookie enables user tracking by synchronising the ID across many Microsoft domains.">Used widely by Microsoft as a unique user ID. The cookie enables user tracking by synchronising the ID across many Microsoft domains.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="GFE_RTT">GFE_RTT</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to implement the content through Google Docs. ">Used to implement the content through Google Docs. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="punchv-e-f">punchv-e-f</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to implement the content through Google Docs. ">Used to implement the content through Google Docs. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="punchv-e-n">punchv-e-n</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to implement the content through Google Docs. ">Used to implement the content through Google Docs. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="punchv-e-v">punchv-e-v</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to implement the content through Google Docs. ">Used to implement the content through Google Docs. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="S">S</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Sets a unique ID for the session. This allows the website to obtain data on visitor behaviour for statistical purposes.">Sets a unique ID for the session. This allows the website to obtain data on visitor behaviour for statistical purposes.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="IDE">IDE</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used by Google DoubleClick to register and report the website user's actions after viewing or clicking one of the advertiser's ads with the purpose of measuring the efficacy of an ad and to present targeted ads to the user.">Used by Google DoubleClick to register and report the website user's actions after viewing or clicking one of the advertiser's ads with the purpose of measuring the efficacy of an ad and to present targeted ads to the user.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pagead/landing">pagead/landing&nbsp;[x2]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="test_cookie">test_cookie</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to check if the user's browser supports cookies.">Used to check if the user's browser supports cookies.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_fbp">_fbp</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used by Facebook to deliver a series of advertisement products such as real time bidding from third party advertisers.">Used by Facebook to deliver a series of advertisement products such as real time bidding from third party advertisers.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_gaexp">_gaexp&nbsp;[x2]</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used by Google Analytics to determine if the visitor is involved in their marketing experiments.">This cookie is used by Google Analytics to determine if the visitor is involved in their marketing experiments.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_gcl_au">_gcl_au&nbsp;[x2]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google Tag Manager's privacy policy">Google Tag Manager</a><br><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used by Google AdSense for experimenting with advertisement efficiency across websites using their services.   ">Used by Google AdSense for experimenting with advertisement efficiency across websites using their services. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_pin_unauth">_pin_unauth</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Used by Pinterest to track the usage of services.">Used by Pinterest to track the usage of services.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_uetsid">_uetsid</td>
                                                    <td><a href="https://privacy.microsoft.com/en-us/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_uetsid_exp">_uetsid_exp</td>
                                                    <td><a href="https://privacy.microsoft.com/en-us/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Contains the expiry-date for the cookie with corresponding name. ">Contains the expiry-date for the cookie with corresponding name. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_uetvid">_uetvid</td>
                                                    <td><a href="https://privacy.microsoft.com/en-us/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="_uetvid_exp">_uetvid_exp</td>
                                                    <td><a href="https://privacy.microsoft.com/en-us/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Contains the expiry-date for the cookie with corresponding name. ">Contains the expiry-date for the cookie with corresponding name. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="elementor">elementor</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used in context with the website's WordPress theme. The cookie allows the website owner to implement or change the website's content in real-time.">Used in context with the website's WordPress theme. The cookie allows the website owner to implement or change the website's content in real-time.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ads/ga-audiences">ads/ga-audiences</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used by Google AdWords to re-engage visitors that are likely to convert to customers based on the visitor's online behaviour across websites.">Used by Google AdWords to re-engage visitors that are likely to convert to customers based on the visitor's online behaviour across websites.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="NID">NID</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="6 months">6 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pagead/1p-user-list/#">pagead/1p-user-list/#</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Tracks if the user has shown interest in specific products or events across multiple websites and detects how the user navigates between sites. This is used for measurement of advertisement efforts and facilitates payment of referral-fees between websites.">Tracks if the user has shown interest in specific products or events across multiple websites and detects how the user navigates between sites. This is used for measurement of advertisement efforts and facilitates payment of referral-fees between websites.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="_pinterest_ct_ua">_pinterest_ct_ua</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy-2016" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Used by Pinterest to track the usage of services.">Used by Pinterest to track the usage of services.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_routing_id">_routing_id&nbsp;[x2]</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Used by Pinterest to track the usage of services.">Used by Pinterest to track the usage of services.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="v3">v3</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy-2016" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Used by Pinterest to track the usage of services.">Used by Pinterest to track the usage of services.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="_pinterest_sess">_pinterest_sess</td>
                                                    <td><a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Pinterest's privacy policy">Pinterest</a></td>
                                                    <td title="Necessary for the integration of Pinterest on the website. Pinterest.com provides an audio-visual service on the website.">Necessary for the integration of Pinterest on the website. Pinterest.com provides an audio-visual service on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="docs/common/netcheck.gif">docs/common/netcheck.gif</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="WIDGET::local::assignments">WIDGET::local::assignments</td>
                                                    <td><a href="https://soundcloud.com/pages/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Soundcloud's privacy policy">Soundcloud</a></td>
                                                    <td title="Used by audio-platform SoundCloud to implement, measure and improve their embedded content/service on the website - The collection of data also includes visitors’ interaction with embedded content/service. This can be used for statistics or marketing purposes.  ">Used by audio-platform SoundCloud to implement, measure and improve their embedded content/service on the website - The collection of data also includes visitors’ interaction with embedded content/service. This can be used for statistics or marketing purposes. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="vuid">vuid</td>
                                                    <td><a href="https://vimeo.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Vimeo's privacy policy">Vimeo</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as which pages have been read.">Collects data on the user's visits to the website, such as which pages have been read.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mts_id">mts_id</td>
                                                    <td><a href="https://moskva.mts.ru/personal/cookie/" target="_blank" rel="noopener noreferrer nofollow" title="MTC's privacy policy">MTC</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="3600 days">3600 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="sync">sync&nbsp;[x2]</td>
                                                    <td><a href="https://adkernel.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Adkernel's privacy policy">Adkernel</a><br><a href="https://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a></td>
                                                    <td title="Collects data on user behaviour and interaction in order to optimize the website and make advertisement on the website more relevant. ">Collects data on user behaviour and interaction in order to optimize the website and make advertisement on the website more relevant. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="cs">cs</td>
                                                    <td><a href="http://www.lkqd.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="LKQD's privacy policy">LKQD</a></td>
                                                    <td title="This cookie is used to optimize ad relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.">This cookie is used to optimize ad relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="lkqdid">lkqdid</td>
                                                    <td><a href="http://www.lkqd.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="LKQD's privacy policy">LKQD</a></td>
                                                    <td title="This cookie is used to collect information on a visitor. This information will become an ID string with information on a specific visitor – ID information strings can be used to target groups with similar preferences, or can be used by third-party domains or ad-exchanges.">This cookie is used to collect information on a visitor. This information will become an ID string with information on a specific visitor – ID information strings can be used to target groups with similar preferences, or can be used by third-party domains or ad-exchanges.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dspid">dspid</td>
                                                    <td><a href="https://moskva.mts.ru/personal/cookie/" target="_blank" rel="noopener noreferrer nofollow" title="MTC's privacy policy">MTC</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mts_id_last_sync">mts_id_last_sync</td>
                                                    <td><a href="https://moskva.mts.ru/personal/cookie/" target="_blank" rel="noopener noreferrer nofollow" title="MTC's privacy policy">MTC</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="3600 days">3600 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="google_adsense_settings">google_adsense_settings&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used by Google AdSense for experimenting with advertisement efficiency across websites using their services.  ">Used by Google AdSense for experimenting with advertisement efficiency across websites using their services. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="GoogleAdServingTest">GoogleAdServingTest&nbsp;[x10]</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a><br><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used to register what ads have been displayed to the user.">Used to register what ads have been displayed to the user.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="sync/dds">sync/dds</td>
                                                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Openx's privacy policy">Openx</a></td>
                                                    <td title="This cookie is set by the audience manager of the website to determine the time and frequencies of visitor data synchronization - cookie data synchronization is used to synchronize and gather visitor data from several websites.">This cookie is set by the audience manager of the website to determine the time and frequencies of visitor data synchronization - cookie data synchronization is used to synchronize and gather visitor data from several websites.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="w/1.0/sd">w/1.0/sd</td>
                                                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Openx's privacy policy">Openx</a></td>
                                                    <td title="Registers data on visitors such as IP addresses, geographical location and advertisement interaction. This information is used optimize the advertisement on websites that make use of OpenX.net services.  ">Registers data on visitors such as IP addresses, geographical location and advertisement interaction. This information is used optimize the advertisement on websites that make use of OpenX.net services. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="8lcfmzhxc8d6_uid">8lcfmzhxc8d6_uid</td>
                                                    <td><a href="http://redintelligence.net/" target="_blank" rel="noopener noreferrer nofollow" title="The Reach Group's privacy policy">The Reach Group</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cm">cm</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Identifies if the cookie-data needs to be updated in the visitor's browser  - This is determined through third-party ad-serving-companies.    ">Identifies if the cookie-data needs to be updated in the visitor's browser - This is determined through third-party ad-serving-companies. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ddm/trackimp/N5295.3368690DISCOVERYNETWORK/B26506870.316970752;dc_pre">ddm/trackimp/N5295.3368690DISCOVERYNETWORK/B26506870.316970752;dc_pre</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="sr#">sr#</td>
                                                    <td><a href="http://www.lkqd.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="LKQD's privacy policy">LKQD</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="google_sync_status">google_sync_status</td>
                                                    <td><a href="https://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers. ">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="cookies/google">cookies/google</td>
                                                    <td><a href="https://www.deltaprojects.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Delta Projects's privacy policy">Delta Projects</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="dot.gif">dot.gif</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ANON_ID_old">ANON_ID_old</td>
                                                    <td><a href="http://exponential.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Exponential's privacy policy">Exponential</a></td>
                                                    <td title="Collects data about the user's visit to the site, such as the number of returning visits and which pages are read. The purpose is to deliver targeted ads.">Collects data about the user's visit to the site, such as the number of returning visits and which pages are read. The purpose is to deliver targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="z/i.match">z/i.match</td>
                                                    <td><a href="http://exponential.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Exponential's privacy policy">Exponential</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="csimpr">csimpr</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="serving/unload">serving/unload</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="track/cmf/casale">track/cmf/casale</td>
                                                    <td><a href="https://www.thetradedesk.com/general/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="The Trade Desk's privacy policy">The Trade Desk</a></td>
                                                    <td title="Used to track the visitor across multiple devices including TV. This is done in order to re-target the visitor through multiple channels.  ">Used to track the visitor across multiple devices including TV. This is done in order to re-target the visitor through multiple channels. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="dcm">dcm</td>
                                                    <td><a href="https://www.amazon.co.uk/gp/help/customer/display.html/ref=footer_privacy?ie=UTF8&amp;nodeId=201909010" target="_blank" rel="noopener noreferrer nofollow" title="Amazon's privacy policy">Amazon</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="AWSESS">AWSESS</td>
                                                    <td><a href="https://www.awin.com/gb/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Awin's privacy policy">Awin</a></td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="bito">bito</td>
                                                    <td><a href="https://www.beeswax.com/cookies/" target="_blank" rel="noopener noreferrer nofollow" title="Beeswax's privacy policy">Beeswax</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="bitoIsSecure">bitoIsSecure</td>
                                                    <td><a href="https://www.beeswax.com/cookies/" target="_blank" rel="noopener noreferrer nofollow" title="Beeswax's privacy policy">Beeswax</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pixel.gif">pixel.gif</td>
                                                    <td><a href="https://moat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Moat's privacy policy">Moat</a></td>
                                                    <td title="Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.">Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="tuuid">tuuid&nbsp;[x6]</td>
                                                    <td>myvisualiq.net<br><a href="https://www.improvedigital.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Improve Digital's privacy policy">Improve Digital</a><br><a href="https://www.admedo.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Admedo's privacy policy">Admedo</a><br><a href="http://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a><br><a href="https://www.internedservices.nl/disclaimer-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="KPN's privacy policy">KPN</a><br>scoota.co</td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="tuuid_lu">tuuid_lu&nbsp;[x6]</td>
                                                    <td>myvisualiq.net<br><a href="https://www.improvedigital.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Improve Digital's privacy policy">Improve Digital</a><br><a href="https://www.admedo.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Admedo's privacy policy">Admedo</a><br><a href="http://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a><br><a href="https://www.internedservices.nl/disclaimer-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="KPN's privacy policy">KPN</a><br>scoota.co</td>
                                                    <td title="Contains a unique visitor ID, which allows Bidswitch.com to track the visitor across multiple websites. This allows Bidswitch to optimize advertisement relevance and ensure that the visitor does not see the same ads multiple times.  ">Contains a unique visitor ID, which allows Bidswitch.com to track the visitor across multiple websites. This allows Bidswitch to optimize advertisement relevance and ensure that the visitor does not see the same ads multiple times. </td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="brwsr">brwsr</td>
                                                    <td><a href="https://impact.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Impact Radius's privacy policy">Impact Radius</a></td>
                                                    <td title="Collects data on the user across websites - This data is used to make advertisement more relevant.">Collects data on the user across websites - This data is used to make advertisement more relevant.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="r/imptrack">r/imptrack</td>
                                                    <td><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ljtrtbexp">ljtrtbexp</td>
                                                    <td><a href="https://www.sovrn.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Sovrn's privacy policy">Sovrn</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="u">u</td>
                                                    <td><a href="https://www.home.neustar/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Neustar's privacy policy">Neustar</a></td>
                                                    <td title="Collects data on user visits to the website, such as what pages have been accessed. The registered data is used to categorise the user's interest and demographic profiles in terms of resales for targeted marketing.">Collects data on user visits to the website, such as what pages have been accessed. The registered data is used to categorise the user's interest and demographic profiles in terms of resales for targeted marketing.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cc">cc</td>
                                                    <td><a href="https://www.bannerflow.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Bannerflow's privacy policy">Bannerflow</a></td>
                                                    <td title="Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites.  ">Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites. </td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="fbssls_">fbssls_</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Collects data on the visitor’s use of the comment system on the website, and what blogs/articles the visitor has read. This can be used for marketing purposes. ">Collects data on the visitor’s use of the comment system on the website, and what blogs/articles the visitor has read. This can be used for marketing purposes. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="COMPASS">COMPASS</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_rxuuid">_rxuuid&nbsp;[x2]</td>
                                                    <td><a href="https://www.rhythmone.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Rhythmone's privacy policy">Rhythmone</a><br><a href="https://unruly.co/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Unruly's privacy policy">Unruly</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="tluid">tluid</td>
                                                    <td><a href="https://triplelift.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="TripleLift's privacy policy">TripleLift</a></td>
                                                    <td title="This cookie is used to identify the visitor and optimize ad-relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.">This cookie is used to identify the visitor and optimize ad-relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="C">C</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Used to check if the user's browser supports cookies.">Used to check if the user's browser supports cookies.</td>
                                                    <td title="30 days">30 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CM">CM</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Used to check if the user's browser supports cookies.">Used to check if the user's browser supports cookies.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CM14">CM14</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Registers user behaviour and navigation on the website, and any interaction with active campaigns. This is used for optimizing advertisement and for efficient retargeting.  ">Registers user behaviour and navigation on the website, and any interaction with active campaigns. This is used for optimizing advertisement and for efficient retargeting. </td>
                                                    <td title="13 days">13 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TPC">TPC</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a></td>
                                                    <td title="Used to check if the user's browser supports cookies.">Used to check if the user's browser supports cookies.</td>
                                                    <td title="6 days">6 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="uid">uid&nbsp;[x2]</td>
                                                    <td><a href="http://site.adform.com/privacy-policy-opt-out/" target="_blank" rel="noopener noreferrer nofollow" title="Adform's privacy policy">Adform</a><br><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Registers a unique user ID that recognises the user's browser when visiting websites that use the same ad network. The purpose is to optimise display of ads based on the user's movements and various ad providers' bids for displaying user ads.">Registers a unique user ID that recognises the user's browser when visiting websites that use the same ad network. The purpose is to optimise display of ads based on the user's movements and various ad providers' bids for displaying user ads.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="UserID1">UserID1</td>
                                                    <td><a href="https://www.adition.com/kontakt/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Adition's privacy policy">Adition</a></td>
                                                    <td title="This cookie is used to collect information on a visitor. This information will become an ID string with information on a specific visitor – ID information strings can be used to target groups with similar preferences, or can be used by third-party domains or ad-exchanges.">This cookie is used to collect information on a visitor. This information will become an ID string with information on a specific visitor – ID information strings can be used to target groups with similar preferences, or can be used by third-party domains or ad-exchanges.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="anj">anj</td>
                                                    <td><a href="https://www.appnexus.com/en/company/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Appnexus's privacy policy">Appnexus</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="uuid2">uuid2</td>
                                                    <td><a href="https://www.appnexus.com/en/company/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Appnexus's privacy policy">Appnexus</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="uuid">uuid&nbsp;[x3]</td>
                                                    <td>ads.avct.cloud<br><a href="http://www.mediamath.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Mediamath's privacy policy">Mediamath</a><br><a href="http://www.innovid.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Innovid's privacy policy">Innovid</a></td>
                                                    <td title="This cookie is used to optimize ad relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.">This cookie is used to optimize ad relevance by collecting visitor data from multiple websites – this exchange of visitor data is normally provided by a third-party data-center or ad-exchange.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TDCPM">TDCPM</td>
                                                    <td><a href="https://www.thetradedesk.com/general/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="The Trade Desk's privacy policy">The Trade Desk</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TDID">TDID</td>
                                                    <td><a href="https://www.thetradedesk.com/general/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="The Trade Desk's privacy policy">The Trade Desk</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="APID">APID&nbsp;[x2]</td>
                                                    <td><a href="http://privacy.aol.com/" target="_blank" rel="noopener noreferrer nofollow" title="AOL's privacy policy">AOL</a><br><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.">Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="alp_userid">alp_userid</td>
                                                    <td><a href="https://alphonso.tv/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Alphonso's privacy policy">Alphonso</a></td>
                                                    <td title="Used to track the visitor across multiple devices including TV. This is done in order to re-target the visitor through multiple channels.  ">Used to track the visitor across multiple devices including TV. This is done in order to re-target the visitor through multiple channels. </td>
                                                    <td title="20 years">20 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="IDSYNC">IDSYNC</td>
                                                    <td><a href="https://policies.oath.com/us/en/oath/privacy/index.html" target="_blank" rel="noopener noreferrer nofollow" title="Oath's privacy policy">Oath</a></td>
                                                    <td title="Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. ">Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="fid">fid</td>
                                                    <td><a href="https://www.wideorbit.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Wideorbit's privacy policy">Wideorbit</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="UM1">UM1</td>
                                                    <td><a href="https://www.wideorbit.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Wideorbit's privacy policy">Wideorbit</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="vi">vi</td>
                                                    <td><a href="https://www.wideorbit.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Wideorbit's privacy policy">Wideorbit</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__io_cid">__io_cid</td>
                                                    <td><a href="http://beachfrontmedia.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Beachfront's privacy policy">Beachfront</a></td>
                                                    <td title="Used in conjunction with video-advertisement - Detects where on the website the video-advertisements should be displayed.">Used in conjunction with video-advertisement - Detects where on the website the video-advertisements should be displayed.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="google_push">google_push</td>
                                                    <td><a href="http://www.bidswitch.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Bidswitch's privacy policy">Bidswitch</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="b">b</td>
                                                    <td><a href="http://www.blis.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Blis's privacy policy">Blis</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="bkdc">bkdc</td>
                                                    <td><a href="https://www.oracle.com/legal/privacy/index.html" target="_blank" rel="noopener noreferrer nofollow" title="Oracle's privacy policy">Oracle</a></td>
                                                    <td title="Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="bkpa">bkpa</td>
                                                    <td><a href="https://www.oracle.com/legal/privacy/index.html" target="_blank" rel="noopener noreferrer nofollow" title="Oracle's privacy policy">Oracle</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="bku">bku</td>
                                                    <td><a href="https://www.oracle.com/legal/privacy/index.html" target="_blank" rel="noopener noreferrer nofollow" title="Oracle's privacy policy">Oracle</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMID">CMID</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMPRO">CMPRO</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that the visitor is shown the same advertisement.  ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that the visitor is shown the same advertisement. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMPS">CMPS</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMRUM3">CMRUM3</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMST">CMST</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mg_sync">mg_sync</td>
                                                    <td><a href="https://www.mgid.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Mgid's privacy policy">Mgid</a></td>
                                                    <td title="Used for data-synchronization with advertisement networks.">Used for data-synchronization with advertisement networks.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_cc_aud">_cc_aud</td>
                                                    <td><a href="https://www.lotame.com/about-lotame/privacy/lotames-products-services-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Lotame's privacy policy">Lotame</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="269 days">269 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_cc_cc">_cc_cc</td>
                                                    <td><a href="https://www.lotame.com/about-lotame/privacy/lotames-products-services-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Lotame's privacy policy">Lotame</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_cc_dc">_cc_dc</td>
                                                    <td><a href="https://www.lotame.com/about-lotame/privacy/lotames-products-services-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Lotame's privacy policy">Lotame</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="269 days">269 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_cc_id">_cc_id</td>
                                                    <td><a href="https://www.lotame.com/about-lotame/privacy/lotames-products-services-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Lotame's privacy policy">Lotame</a></td>
                                                    <td title="Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.">Collects statistical data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The purpose is to segment the website's users according to factors such as demographics and geographical location, in order to enable media and marketing agencies to structure and understand their target groups to enable customised online advertising.</td>
                                                    <td title="269 days">269 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cid_#">cid_#</td>
                                                    <td><a href="https://crimtan.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Crimtan's privacy policy">Crimtan</a></td>
                                                    <td title="Collects unidentifiable data that is sent to an unidentifiable source. The source's identity is kept secret by the company, Whois Privacy Protection Service, Inc.">Collects unidentifiable data that is sent to an unidentifiable source. The source's identity is kept secret by the company, Whois Privacy Protection Service, Inc.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="demdex">demdex</td>
                                                    <td><a href="https://www.adobe.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Adobe Inc's privacy policy">Adobe Inc</a></td>
                                                    <td title="Via a unique ID that is used for semantic content analysis, the user's navigation on the website is registered and linked to offline data from surveys and similar registrations to display targeted ads.">Via a unique ID that is used for semantic content analysis, the user's navigation on the website is registered and linked to offline data from surveys and similar registrations to display targeted ads.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dpm">dpm</td>
                                                    <td><a href="https://www.adobe.com/uk/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Adobe's privacy policy">Adobe</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="DSID">DSID</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used by Google DoubleClick for re-targeting, optimisation, reporting and attribution of online adverts.">Used by Google DoubleClick for re-targeting, optimisation, reporting and attribution of online adverts.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="everest_g_v2">everest_g_v2</td>
                                                    <td><a href="https://www.adobe.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Adobe Inc's privacy policy">Adobe Inc</a></td>
                                                    <td title="Used for targeted ads and to document efficacy of each individual ad.">Used for targeted ads and to document efficacy of each individual ad.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_uid">_uid</td>
                                                    <td><a href="http://freewheel.tv/privacy-policy/?noredirect" target="_blank" rel="noopener noreferrer nofollow" title="Freewheel's privacy policy">Freewheel</a></td>
                                                    <td title="Enables the visitor to share content from the website onto social media platforms or websites. ">Enables the visitor to share content from the website onto social media platforms or websites. </td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="goog_pem_mod">goog_pem_mod</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels.">Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels.</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="google_auto_fc_cmp_setting">google_auto_fc_cmp_setting</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Stores the user's cookie consent state for the current domain">Stores the user's cookie consent state for the current domain</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="google_experiment_mod#">google_experiment_mod#</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used by Google AdSense for experimenting with advertisement efficiency across websites using their services.  ">Used by Google AdSense for experimenting with advertisement efficiency across websites using their services. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="IMRID">IMRID</td>
                                                    <td><a href="https://www.nielsen.com/us/en/legal/privacy-statement/" target="_blank" rel="noopener noreferrer nofollow" title="The Nielsen Company's privacy policy">The Nielsen Company</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="SSCVER">SSCVER</td>
                                                    <td><a href="https://www.nielsen.com/us/en/legal/privacy-statement/" target="_blank" rel="noopener noreferrer nofollow" title="The Nielsen Company's privacy policy">The Nielsen Company</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_kuid_">_kuid_</td>
                                                    <td><a href="https://www.salesforce.com/company/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Salesforce's privacy policy">Salesforce</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ljt_reader">ljt_reader</td>
                                                    <td><a href="https://www.sovrn.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Sovrn's privacy policy">Sovrn</a></td>
                                                    <td title="Collects data related to reader interests, context, demographics and other information on behalf of the Lijit platform with the purpose of finding interested users on websites with related content.">Collects data related to reader interests, context, demographics and other information on behalf of the Lijit platform with the purpose of finding interested users on websites with related content.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cct">cct</td>
                                                    <td>m6r.eu</td>
                                                    <td title="Necessary for the shopping cart functionality on the website.">Necessary for the shopping cart functionality on the website.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="id">id&nbsp;[x2]</td>
                                                    <td>m6r.eu<br><a href="https://www.xaxis.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Xaxis's privacy policy">Xaxis</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mt_mop">mt_mop</td>
                                                    <td><a href="http://www.mediamath.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Mediamath's privacy policy">Mediamath</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="muidn">muidn</td>
                                                    <td><a href="https://www.mgid.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Mgid's privacy policy">Mgid</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="5884 days">5884 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mdata">mdata</td>
                                                    <td><a href="https://www.xaxis.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Xaxis's privacy policy">Xaxis</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ov">ov</td>
                                                    <td><a href="https://www.xaxis.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Xaxis's privacy policy">Xaxis</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="i">i</td>
                                                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Openx's privacy policy">Openx</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="KADUSERCOOKIE">KADUSERCOOKIE</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.">Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="KCCH">KCCH</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Registers if the PubMatic partner-cookie has been set in the user's browser.">Registers if the PubMatic partner-cookie has been set in the user's browser.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="KRTBCOOKIE_#">KRTBCOOKIE_#</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.">Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="KTPCACOOKIE">KTPCACOOKIE</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.">Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="PUBMDCID">PUBMDCID</td>
                                                    <td><a href="https://pubmatic.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Pubmatic's privacy policy">Pubmatic</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.">Registers a unique ID that identifies the user's device during return visits across websites that use the same ad network. The ID is used to allow targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="mc">mc</td>
                                                    <td><a href="https://www.quantcast.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Quantcast's privacy policy">Quantcast</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="eud">eud</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="euds">euds</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="rud">rud</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ruds">ruds</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="smd">smd</td>
                                                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Zeta Global's privacy policy">Zeta Global</a></td>
                                                    <td title="Used to present the visitor with relevant content and advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers.">Used to present the visitor with relevant content and advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="UID">UID&nbsp;[x2]</td>
                                                    <td><a href="http://www.scorecardresearch.com/privacy.aspx?newlanguage=1" target="_blank" rel="noopener noreferrer nofollow" title="Scorecardresearch's privacy policy">Scorecardresearch</a><br><a href="https://www.freewheel.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Freewheel's privacy policy">Freewheel</a></td>
                                                    <td title="Collects information of the user and his/her movement, such as timestamp for visits, most recently loaded pages and IP address. The data is used by the marketing research network, Scorecard Research, to analyse traffic patterns and carry out surveys to help their clients better understand the customer's preferences.">Collects information of the user and his/her movement, such as timestamp for visits, most recently loaded pages and IP address. The data is used by the marketing research network, Scorecard Research, to analyse traffic patterns and carry out surveys to help their clients better understand the customer's preferences.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="A6">A6</td>
                                                    <td><a href="https://www.sizmek.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Sizmek's privacy policy">Sizmek</a></td>
                                                    <td title="Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites.   ">Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="eyeblaster">eyeblaster</td>
                                                    <td><a href="https://www.sizmek.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Sizmek's privacy policy">Sizmek</a></td>
                                                    <td title="Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites.  ">Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="u2">u2</td>
                                                    <td><a href="https://www.sizmek.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Sizmek's privacy policy">Sizmek</a></td>
                                                    <td title="Collects data related to the user's navigation visits to webpages in order to assess the efficacy of ads that are displayed on the website.">Collects data related to the user's navigation visits to webpages in order to assess the efficacy of ads that are displayed on the website.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="suid">suid</td>
                                                    <td><a href="https://www.simpli.fi/site-privacy-policy2/" target="_blank" rel="noopener noreferrer nofollow" title="Simpli.fi's privacy policy">Simpli.fi</a></td>
                                                    <td title="Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.">Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_ssuma">_ssuma</td>
                                                    <td><a href="http://www.sitescout.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Sitescout's privacy policy">Sitescout</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ssi">ssi</td>
                                                    <td><a href="http://www.sitescout.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Sitescout's privacy policy">Sitescout</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="zuuid">zuuid</td>
                                                    <td><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Sportradar's privacy policy">Sportradar</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="zuuid_k">zuuid_k</td>
                                                    <td><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Sportradar's privacy policy">Sportradar</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="zuuid_k_lu">zuuid_k_lu</td>
                                                    <td><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Sportradar's privacy policy">Sportradar</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="zuuid_lu">zuuid_lu</td>
                                                    <td><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Sportradar's privacy policy">Sportradar</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="audience">audience</td>
                                                    <td><a href="https://www.spotx.tv/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Spotx's privacy policy">Spotx</a></td>
                                                    <td title="Used to determine whether the video-ads have been displayed correctly on the website - This is done to make video-ads more effective and ensure that the visitor is not shown the same ads more times than intended. The cookie also detects whether the visitor has any Do Not Track preferences.">Used to determine whether the video-ads have been displayed correctly on the website - This is done to make video-ads more effective and ensure that the visitor is not shown the same ads more times than intended. The cookie also detects whether the visitor has any Do Not Track preferences.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TapAd_3WAY_SYNCS">TapAd_3WAY_SYNCS</td>
                                                    <td><a href="https://www.tapad.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Tapad's privacy policy">Tapad</a></td>
                                                    <td title="Used for data-synchronization with advertisement networks.">Used for data-synchronization with advertisement networks.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TapAd_DID">TapAd_DID</td>
                                                    <td><a href="https://www.tapad.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Tapad's privacy policy">Tapad</a></td>
                                                    <td title="Used to determine what type of devices (smartphones, tablets, computers, TVs etc.) is used by a user.">Used to determine what type of devices (smartphones, tablets, computers, TVs etc.) is used by a user.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="TapAd_TS">TapAd_TS</td>
                                                    <td><a href="https://www.tapad.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Tapad's privacy policy">Tapad</a></td>
                                                    <td title="Used to determine what type of devices (smartphones, tablets, computers, TVs etc.) is used by a user.">Used to determine what type of devices (smartphones, tablets, computers, TVs etc.) is used by a user.</td>
                                                    <td title="2 months">2 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="sync-his">sync-his</td>
                                                    <td><a href="https://videologygroup.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Videology's privacy policy">Videology</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="tidal_ttid">tidal_ttid</td>
                                                    <td><a href="https://videologygroup.com/en/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Videology's privacy policy">Videology</a></td>
                                                    <td title="Registers the ads provided by Videology that the user has seen and/or clicked. Used to generate a demographic profile of the user.">Registers the ads provided by Videology that the user has seen and/or clicked. Used to generate a demographic profile of the user.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_tracker">_tracker</td>
                                                    <td><a href="https://travelaudience.com/website-privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Travel Audience's privacy policy">Travel Audience</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ANON_ID">ANON_ID</td>
                                                    <td><a href="http://exponential.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Exponential's privacy policy">Exponential</a></td>
                                                    <td title="Collects data on user visits to the website, such as what pages have been accessed. The registered data is used to categorise the user's interest and demographic profiles in terms of resales for targeted marketing.">Collects data on user visits to the website, such as what pages have been accessed. The registered data is used to categorise the user's interest and demographic profiles in terms of resales for targeted marketing.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="fc">fc</td>
                                                    <td><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pxs">pxs</td>
                                                    <td><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="179 days">179 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__gads">__gads</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Used to register what ads have been displayed to the user.">Used to register what ads have been displayed to the user.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="personalization_id">personalization_id</td>
                                                    <td><a href="https://twitter.com/en/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Twitter's privacy policy">Twitter</a></td>
                                                    <td title="This cookie is set by Twitter - The cookie allows the visitor to share content from the website onto their Twitter profile. ">This cookie is set by Twitter - The cookie allows the visitor to share content from the website onto their Twitter profile. </td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ouuid_lu">ouuid_lu</td>
                                                    <td><a href="http://www.optomaton.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Optomaton's privacy policy">Optomaton</a></td>
                                                    <td title="Used in context with the &quot;Ouuid&quot; cookie in order to retarget the visitor with relevant ads or product promotions.  ">Used in context with the "Ouuid" cookie in order to retarget the visitor with relevant ads or product promotions. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="matchadform">matchadform</td>
                                                    <td><a href="https://www.dataxu.com/about-us/privacy/data-collection-platform/" target="_blank" rel="noopener noreferrer nofollow" title="Dataxu's privacy policy">Dataxu</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="matchgoogle">matchgoogle</td>
                                                    <td><a href="https://www.dataxu.com/about-us/privacy/data-collection-platform/" target="_blank" rel="noopener noreferrer nofollow" title="Dataxu's privacy policy">Dataxu</a></td>
                                                    <td title="Regulates synchronisation of user identification and exchange of user data between various ad services.">Regulates synchronisation of user identification and exchange of user data between various ad services.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="wfivefivec">wfivefivec</td>
                                                    <td><a href="https://www.dataxu.com/about-us/privacy/data-collection-platform/" target="_blank" rel="noopener noreferrer nofollow" title="Dataxu's privacy policy">Dataxu</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="AFFICHE_W">AFFICHE_W</td>
                                                    <td><a href="https://weborama.com/en/weborama-privacy-commitment/" target="_blank" rel="noopener noreferrer nofollow" title="Weborama's privacy policy">Weborama</a></td>
                                                    <td title="Used by the advertising platform Weborama to determine the visitor's interests based on pages visits, content clicked and other actions on the website.">Used by the advertising platform Weborama to determine the visitor's interests based on pages visits, content clicked and other actions on the website.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="A3">A3</td>
                                                    <td><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.">Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="APIDTS">APIDTS</td>
                                                    <td><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Collects data on visitors' preferences and behaviour on the website - This information is used make content and advertisement more relevant to the specific visitor. ">Collects data on visitors' preferences and behaviour on the website - This information is used make content and advertisement more relevant to the specific visitor. </td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ckid">ckid</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cktst">cktst</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="fbh0">fbh0</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="gcma">gcma</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ph">ph</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="rmxc">rmxc</td>
                                                    <td>yieldoptimizer.com</td>
                                                    <td title="Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.">Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ytidb::LAST_RESULT_ENTRY_KEY">ytidb::LAST_RESULT_ENTRY_KEY</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="YouTube's privacy policy">YouTube</a></td>
                                                    <td title="Stores the user's video player preferences using embedded YouTube video">Stores the user's video player preferences using embedded YouTube video</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="__#_cid">__#_cid</td>
                                                    <td><a href="http://beachfrontmedia.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Beachfront's privacy policy">Beachfront</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_abcde#">_abcde#</td>
                                                    <td><a href="https://www.qzzr.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Qzzr's privacy policy">Qzzr</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="syncdata_#">syncdata_#</td>
                                                    <td><a href="https://www.xaxis.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Xaxis's privacy policy">Xaxis</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="9 days">9 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="uid-bp-#">uid-bp-#</td>
                                                    <td><a href="https://www.freewheel.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Freewheel's privacy policy">Freewheel</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="RichHistory">RichHistory</td>
                                                    <td><a href="https://twitter.com/en/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Twitter's privacy policy">Twitter</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="sync">sync</td>
                                                    <td><a href="https://triplelift.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="TripleLift's privacy policy">TripleLift</a></td>
                                                    <td title="Detects whether partner data synchronization is functioning and currently running - This function sends user data between third-party advertisement companies for the purpose of targeted advertisements.  ">Detects whether partner data synchronization is functioning and currently running - This function sends user data between third-party advertisement companies for the purpose of targeted advertisements. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="setuid">setuid</td>
                                                    <td><a href="https://www.appnexus.com/en/company/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Appnexus's privacy policy">Appnexus</a></td>
                                                    <td title="This cookie is set by the audience manager of the website to determine the time and frequencies of visitor data synchronization - cookie data synchronization is used to synchronize and gather visitor data from several websites.">This cookie is set by the audience manager of the website to determine the time and frequencies of visitor data synchronization - cookie data synchronization is used to synchronize and gather visitor data from several websites.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="track/cmf/google">track/cmf/google</td>
                                                    <td><a href="https://www.thetradedesk.com/general/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="The Trade Desk's privacy policy">The Trade Desk</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="CMTS">CMTS</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects visitor data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="rum">rum</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Collects data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.">Collects data related to the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded, with the purpose of displaying targeted ads.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="guid">guid</td>
                                                    <td><a href="https://www.deltaprojects.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Delta Projects's privacy policy">Delta Projects</a></td>
                                                    <td title="Used to generate statistical data on what pages the user has visited and how often an ad click leads either to a purchase or other actions on the advertiser's website.">Used to generate statistical data on what pages the user has visited and how often an ad click leads either to a purchase or other actions on the advertiser's website.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="guid2">guid2</td>
                                                    <td><a href="https://www.deltaprojects.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Delta Projects's privacy policy">Delta Projects</a></td>
                                                    <td title="Tracks the individual sessions on the website, allowing the website to compile statistical data from multiple visits. This data can also be used to create leads for marketing purposes.">Tracks the individual sessions on the website, allowing the website to compile statistical data from multiple visits. This data can also be used to create leads for marketing purposes.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="client_token">client_token</td>
                                                    <td><a href="https://gfycat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Gfycat's privacy policy">Gfycat</a></td>
                                                    <td title="Used to track the visitor's usage of GIFs - This serves for analytical and marketing purposes.">Used to track the visitor's usage of GIFs - This serves for analytical and marketing purposes.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="token_type">token_type</td>
                                                    <td><a href="https://gfycat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Gfycat's privacy policy">Gfycat</a></td>
                                                    <td title="Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites.  ">Registers data on visitors from multiple visits and on multiple websites. This information is used to measure the efficiency of advertisement on websites. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="pagead/gen_204">pagead/gen_204</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. ">Collects data on visitor behaviour from multiple websites, in order to present more relevant advertisement - This also allows the website to limit the number of times that they are shown the same advertisement. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="pcs/activeview">pcs/activeview</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Used by DoubleClick to determine whether website advertisement has been properly displayed - This is done to make their marketing efforts more efficient.  ">Used by DoubleClick to determine whether website advertisement has been properly displayed - This is done to make their marketing efforts more efficient. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="bcookie">bcookie</td>
                                                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="LinkedIn's privacy policy">LinkedIn</a></td>
                                                    <td title="Used by the social networking service, LinkedIn, for tracking the use of embedded services.">Used by the social networking service, LinkedIn, for tracking the use of embedded services.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="lidc">lidc</td>
                                                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="LinkedIn's privacy policy">LinkedIn</a></td>
                                                    <td title="Used by the social networking service, LinkedIn, for tracking the use of embedded services.">Used by the social networking service, LinkedIn, for tracking the use of embedded services.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dpixel">dpixel</td>
                                                    <td><a href="https://www.quantcast.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Quantcast's privacy policy">Quantcast</a></td>
                                                    <td title="Collects data on user behaviour and interaction in order to optimize the website and make advertisement on the website more relevant. ">Collects data on user behaviour and interaction in order to optimize the website and make advertisement on the website more relevant. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="cd">cd</td>
                                                    <td><a href="https://rubiconproject.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Rubicon Project's privacy policy">Rubicon Project</a></td>
                                                    <td title="Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers anonymised user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="khaos">khaos</td>
                                                    <td><a href="https://rubiconproject.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Rubicon Project's privacy policy">Rubicon Project</a></td>
                                                    <td title="Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.">Registers user data, such as IP address, geographical location, visited websites, and what ads the user has clicked, with the purpose of optimising ad display based on the user's movement on websites that use the same ad network.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="suid_legacy">suid_legacy</td>
                                                    <td><a href="https://www.simpli.fi/site-privacy-policy2/" target="_blank" rel="noopener noreferrer nofollow" title="Simpli.fi's privacy policy">Simpli.fi</a></td>
                                                    <td title="Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.">Collects information on user preferences and/or interaction with web-campaign content - This is used on CRM-campaign-platform used by website owners for promoting events or products.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pid">pid</td>
                                                    <td><a href="http://smartadserver.com/company/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Smart Adserver's privacy policy">Smart Adserver</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="r/cms/id/0/ddc/1/pid/18/uid">r/cms/id/0/ddc/1/pid/18/uid</td>
                                                    <td><a href="https://www.amobee.com/trust/privacy-guidelines" target="_blank" rel="noopener noreferrer nofollow" title="Amobee's privacy policy">Amobee</a></td>
                                                    <td title="Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. ">Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="B">B</td>
                                                    <td><a href="https://policies.oath.com/us/en/oath/privacy/index.html" target="_blank" rel="noopener noreferrer nofollow" title="Oath's privacy policy">Oath</a></td>
                                                    <td title="Collects anonymous data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The registered data is used to categorise the users' interest and demographical profiles with the purpose of customising the website content depending on the visitor.">Collects anonymous data related to the user's website visits, such as the number of visits, average time spent on the website and what pages have been loaded. The registered data is used to categorise the users' interest and demographical profiles with the purpose of customising the website content depending on the visitor.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="GUC">GUC</td>
                                                    <td><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits. Used for conversion tracking and to measure the efficacy of online ads.">Registers a unique ID that identifies the user's device during return visits. Used for conversion tracking and to measure the efficacy of online ads.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_abcd#">_abcd#</td>
                                                    <td><a href="https://www.qzzr.com/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Qzzr's privacy policy">Qzzr</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="A1">A1</td>
                                                    <td><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="A1S">A1S</td>
                                                    <td><a href="https://policies.yahoo.com/us/en/yahoo/privacy/index.htm" target="_blank" rel="noopener noreferrer nofollow" title="Yahoo's privacy policy">Yahoo</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_knxq_">_knxq_</td>
                                                    <td><a href="https://www.knorex.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Knorex's privacy policy">Knorex</a></td>
                                                    <td title="Determines when the visitor last visited the different subpages on the website, as well as sets a timestamp for when the session started.">Determines when the visitor last visited the different subpages on the website, as well as sets a timestamp for when the session started.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="usermatchredir">usermatchredir</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ht/htw-pixel.gif">ht/htw-pixel.gif</td>
                                                    <td><a href="https://www.indexexchange.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Index Exchange's privacy policy">Index Exchange</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ai.aspx">ai.aspx</td>
                                                    <td><a href="https://www.exactag.com/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Exactag's privacy policy">Exactag</a></td>
                                                    <td title="Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.">Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="exactag_new_gk">exactag_new_gk</td>
                                                    <td><a href="https://www.exactag.com/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Exactag's privacy policy">Exactag</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="exactag_new_uk">exactag_new_uk</td>
                                                    <td><a href="https://www.exactag.com/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Exactag's privacy policy">Exactag</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="180 days">180 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="trscj">trscj</td>
                                                    <td><a href="https://www.medialead.de/de/datenschutz.html" target="_blank" rel="noopener noreferrer nofollow" title="Medialead's privacy policy">Medialead</a></td>
                                                    <td title="Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. ">Used to identify the visitor across visits and devices. This allows the website to present the visitor with relevant advertisement - The service is provided by third party advertisement hubs, which facilitate real-time bidding for advertisers. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="DTU">DTU</td>
                                                    <td><a href="https://privacy.microsoft.com/en-US/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="Microsoft's privacy policy">Microsoft</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="partner">partner</td>
                                                    <td><a href="https://www.spotx.tv/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Spotx's privacy policy">Spotx</a></td>
                                                    <td title="Used in context with video-advertisement. The cookie limits the number of times a user is shown the same advertisement. The cookie is also used to ensure relevance of the video-advertisement to the specific user.  ">Used in context with video-advertisement. The cookie limits the number of times a user is shown the same advertisement. The cookie is also used to ensure relevance of the video-advertisement to the specific user. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="i.match">i.match</td>
                                                    <td><a href="http://exponential.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Exponential's privacy policy">Exponential</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="matchcasale">matchcasale</td>
                                                    <td><a href="https://www.dataxu.com/about-us/privacy/data-collection-platform/" target="_blank" rel="noopener noreferrer nofollow" title="Dataxu's privacy policy">Dataxu</a></td>
                                                    <td title="Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.">Collects data on the user's visits to the website, such as what pages have been loaded. The registered data is used for targeted ads.</td>
                                                    <td title="30 days">30 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="matchrubicon">matchrubicon</td>
                                                    <td><a href="https://www.dataxu.com/about-us/privacy/data-collection-platform/" target="_blank" rel="noopener noreferrer nofollow" title="Dataxu's privacy policy">Dataxu</a></td>
                                                    <td title="Used to synchronise data for targeted ads with third party systems.">Used to synchronise data for targeted ads with third party systems.</td>
                                                    <td title="29 days">29 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="skeleton.gif">skeleton.gif</td>
                                                    <td><a href="https://integralads.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Intergral Ad Science's privacy policy">Intergral Ad Science</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="#_uid">#_uid</td>
                                                    <td><a href="https://www.neory.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Neory's privacy policy">Neory</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="awpv#">awpv#</td>
                                                    <td><a href="https://www.awin.com/gb/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Awin's privacy policy">Awin</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cshow.php">cshow.php</td>
                                                    <td><a href="https://www.awin.com/gb/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="Awin's privacy policy">Awin</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="impression/v1">impression/v1</td>
                                                    <td><a href="http://casalemedia.com/" target="_blank" rel="noopener noreferrer nofollow" title="Casalemedia's privacy policy">Casalemedia</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="firstevent">firstevent</td>
                                                    <td><a href="https://www.adobe.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Adobe Inc's privacy policy">Adobe Inc</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="skydeutschland">skydeutschland</td>
                                                    <td><a href="https://www.adobe.com/privacy.html" target="_blank" rel="noopener noreferrer nofollow" title="Adobe Inc's privacy policy">Adobe Inc</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="180 days">180 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pagead/interaction">pagead/interaction</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="_kxcongstar_data">_kxcongstar_data</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="kxcongstar_data">kxcongstar_data</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="w/1.0/cm">w/1.0/cm</td>
                                                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Openx's privacy policy">Openx</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_group_id">ajs_group_id</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. ">Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_group_properties">ajs_group_properties</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. ">Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_user_id">ajs_user_id</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors' preferences and behaviour on the website - This information is used make content and advertisement more relevant to the specific visitor. ">Collects data on visitors' preferences and behaviour on the website - This information is used make content and advertisement more relevant to the specific visitor. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs_user_traits">ajs_user_traits</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. ">Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. </td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="__tld__">__tld__</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs%3Acookies">ajs%3Acookies</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. ">Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ajs%3Atest">ajs%3Atest</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. ">Collects data on visitors. This information is used to assign visitors into segments, making website advertisement more efficient. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_w_session">_w_session</td>
                                                    <td><a href="https://wistia.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Wistia's privacy policy">Wistia</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="13 days">13 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__aasi">__aasi</td>
                                                    <td><a href="http://www.pixalate.com/privacypolicy/" target="_blank" rel="noopener noreferrer nofollow" title="Pixalate's privacy policy">Pixalate</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__aast">__aast</td>
                                                    <td><a href="http://www.pixalate.com/privacypolicy/" target="_blank" rel="noopener noreferrer nofollow" title="Pixalate's privacy policy">Pixalate</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__aavi">__aavi</td>
                                                    <td><a href="http://www.pixalate.com/privacypolicy/" target="_blank" rel="noopener noreferrer nofollow" title="Pixalate's privacy policy">Pixalate</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="__aavt">__aavt</td>
                                                    <td><a href="http://www.pixalate.com/privacypolicy/" target="_blank" rel="noopener noreferrer nofollow" title="Pixalate's privacy policy">Pixalate</a></td>
                                                    <td title="Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.">Sets a unique ID for the visitor, that allows third party advertisers to target the visitor with relevant advertisement. This pairing service is provided by third party advertisement hubs, which facilitates real-time bidding for advertisers.</td>
                                                    <td title="2 years">2 years</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ssdspallvtc-dc2d73ab53429a25">ssdspallvtc-dc2d73ab53429a25</td>
                                                    <td><a href="http://www.sitescout.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Sitescout's privacy policy">Sitescout</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 month">1 month</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="dbm/ad">dbm/ad</td>
                                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Google's privacy policy">Google</a></td>
                                                    <td title="Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.">Presents the user with relevant content and advertisement. The service is provided by third-party advertisement hubs, which facilitate real-time bidding for advertisers.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="event.png">event.png</td>
                                                    <td><a href="https://www.doubleverify.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Doubleverify's privacy policy">Doubleverify</a></td>
                                                    <td title="Registers a unique ID that identifies the user's device during return visits. Used for conversion tracking and to measure the efficacy of online ads.">Registers a unique ID that identifies the user's device during return visits. Used for conversion tracking and to measure the efficacy of online ads.</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="__uu">__uu</td>
                                                    <td><a href="https://www.hurra.com/impressum" target="_blank" rel="noopener noreferrer nofollow" title="Hurra Communications's privacy policy">Hurra Communications</a></td>
                                                    <td title="Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.">Registers a unique ID that identifies a returning user's device. The ID is used for targeted ads.</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="tt_viewer">tt_viewer</td>
                                                    <td><a href="https://teads.tv/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Teads's privacy policy">Teads</a></td>
                                                    <td title="Used in context with video-advertisement. The cookie limits the number of times a user is shown the same advertisement. The cookie is also used to ensure relevance of the video-advertisement to the specific user.  ">Used in context with video-advertisement. The cookie limits the number of times a user is shown the same advertisement. The cookie is also used to ensure relevance of the video-advertisement to the specific user. </td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="um">um</td>
                                                    <td><a href="https://www.improvedigital.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Improve Digital's privacy policy">Improve Digital</a></td>
                                                    <td title="Registers the visitor's behavior on social media - can be used to optimize ad-relevance and general targeting.">Registers the visitor's behavior on social media - can be used to optimize ad-relevance and general targeting.</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="umeh">umeh</td>
                                                    <td><a href="https://www.improvedigital.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Improve Digital's privacy policy">Improve Digital</a></td>
                                                    <td title="Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. ">Used to track visitors on multiple websites, in order to present relevant advertisement based on the visitor's preferences. </td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="outbrain_cid_fetch">outbrain_cid_fetch</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Collects data on the user’s navigation and behavior on the website. This is used to compile statistical reports and heatmaps for the website owner.">Collects data on the user’s navigation and behavior on the website. This is used to compile statistical reports and heatmaps for the website owner.</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pd">pd</td>
                                                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Openx's privacy policy">Openx</a></td>
                                                    <td title="Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.">Collects information on user behaviour on multiple websites. This information is used in order to optimize the relevance of advertisement on the website.</td>
                                                    <td title="14 days">14 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentCookieTabsUnclassified">
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeIntro">Unclassified cookies are cookies that we are in the process of classifying, together with the providers of individual cookies.</div>
                                    <div class="CybotCookiebotDialogDetailBodyContentCookieTypeTableContainer">
                                        <table id="CybotCookiebotDialogDetailTableUnclassified" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Provider</th>
                                                    <th scope="col">Purpose</th>
                                                    <th scope="col">Expiry</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td title="autoplay">autoplay&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="BT_AA_DETECTION">BT_AA_DETECTION&nbsp;[x11]</td>
                                                    <td>cdn.fuseplatform.net<br><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="captions">captions&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="lessonWatchTracking">lessonWatchTracking&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="playbackRate">playbackRate&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="wistia-video-progress-#">wistia-video-progress-#&nbsp;[x8]</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a><br><a href="https://wistia.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Wistia's privacy policy">Wistia</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="webShopPV">webShopPV&nbsp;[x2]</td>
                                                    <td><a href="https://www.o2online.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="O2's privacy policy">O2</a><br><a href="https://www.blau.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Blau's privacy policy">Blau</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="nws/img/postview.gif">nws/img/postview.gif&nbsp;[x2]</td>
                                                    <td><a href="https://www.o2online.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="O2's privacy policy">O2</a><br><a href="https://www.blau.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Blau's privacy policy">Blau</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="__test__">__test__</td>
                                                    <td><a href="https://codesandbox.io/legal/privacy" target="_blank" rel="noopener noreferrer nofollow" title="CodeSandbox's privacy policy">CodeSandbox</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="amp_a205ed">amp_a205ed</td>
                                                    <td><a href="https://codesandbox.io/legal/privacy" target="_blank" rel="noopener noreferrer nofollow" title="CodeSandbox's privacy policy">CodeSandbox</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="csb-ab-user-id">csb-ab-user-id</td>
                                                    <td><a href="https://codesandbox.io/legal/privacy" target="_blank" rel="noopener noreferrer nofollow" title="CodeSandbox's privacy policy">CodeSandbox</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="adguid">adguid</td>
                                                    <td>ebayadservices.com</td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="3 months">3 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="plunker.preferences">plunker.preferences</td>
                                                    <td><a href="http://plnkr.co/" target="_blank" rel="noopener noreferrer nofollow" title="Plunker's privacy policy">Plunker</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="paccept">paccept</td>
                                                    <td><a href="http://plnkr.co/" target="_blank" rel="noopener noreferrer nofollow" title="Plunker's privacy policy">Plunker</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_ce.gtld">_ce.gtld</td>
                                                    <td><a href="https://www.crazyegg.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Crazyegg's privacy policy">Crazyegg</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ce_successful_csp_check">ce_successful_csp_check</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="cdn-cgi/images/trace/captcha/js/transparent.gif">cdn-cgi/images/trace/captcha/js/transparent.gif</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="cdn-cgi/images/trace/captcha/nojs/h/transparent.gif">cdn-cgi/images/trace/captcha/nojs/h/transparent.gif</td>
                                                    <td><a href="https://envato.com/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="_parsely_visitor">_parsely_visitor</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="This cookie is used to determine if the visitor has visited the website before, or if it is a new visitor on the website.">This cookie is used to determine if the visitor has visited the website before, or if it is a new visitor on the website.</td>
                                                    <td title="13 months">13 months</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="expires_in">expires_in</td>
                                                    <td><a href="https://gfycat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Gfycat's privacy policy">Gfycat</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="scope">scope</td>
                                                    <td><a href="https://gfycat.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Gfycat's privacy policy">Gfycat</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="nscQ486">nscQ486</td>
                                                    <td><a href="https://www.blau.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Blau's privacy policy">Blau</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="nscT486">nscT486</td>
                                                    <td><a href="https://www.blau.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Blau's privacy policy">Blau</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="cap">cap</td>
                                                    <td><a href="https://www.trustarc.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Trustarc's privacy policy">Trustarc</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="staticentry">staticentry</td>
                                                    <td><a href="https://www.congstar.de/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="Congstar's privacy policy">Congstar</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="267125engine/gs.analytics.seq">267125engine/gs.analytics.seq</td>
                                                    <td>e.gsrca.de</td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="267125engine/gs.analytics.storedSessionCount">267125engine/gs.analytics.storedSessionCount</td>
                                                    <td>e.gsrca.de</td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="267125engine/gs.analytics.nth">267125engine/gs.analytics.nth</td>
                                                    <td>e.gsrca.de</td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="267125engine/gs.analytics.pa">267125engine/gs.analytics.pa</td>
                                                    <td>e.gsrca.de</td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="ppv1225">ppv1225</td>
                                                    <td><a href="https://www.lead-alliance.net/dataprotection" target="_blank" rel="noopener noreferrer nofollow" title="Leadalliance's privacy policy">Leadalliance</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ppv1226">ppv1226</td>
                                                    <td><a href="https://www.lead-alliance.net/dataprotection" target="_blank" rel="noopener noreferrer nofollow" title="Leadalliance's privacy policy">Leadalliance</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="ts/i5542019/tsv">ts/i5542019/tsv</td>
                                                    <td><a href="https://www.belboon.com/en/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Belboon's privacy policy">Belboon</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="nscQ485">nscQ485</td>
                                                    <td><a href="https://www.o2online.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="O2's privacy policy">O2</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="nscT485">nscT485</td>
                                                    <td><a href="https://www.o2online.de/recht/datenschutz/" target="_blank" rel="noopener noreferrer nofollow" title="O2's privacy policy">O2</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="7 days">7 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="tsv">tsv</td>
                                                    <td><a href="https://www.belboon.com/en/about-us/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Belboon's privacy policy">Belboon</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="#.#-#-#-#-#.ack">#.#-#-#-#-#.ack</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="#.#-#-#-#-#.inProgress">#.#-#-#-#-#.inProgress</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="#.#-#-#-#-#.queue">#.#-#-#-#-#.queue</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="#.#-#-#-#-#.reclaimEnd">#.#-#-#-#-#.reclaimEnd</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="#.#-#-#-#-#.reclaimStart">#.#-#-#-#-#.reclaimStart</td>
                                                    <td><a href="https://segment.com/docs/legal/privacy/" target="_blank" rel="noopener noreferrer nofollow" title="Segment's privacy policy">Segment</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Persistent">Persistent</td>
                                                    <td title="HTML">HTML</td>
                                                </tr>
                                                <tr>
                                                    <td title="cs_siftsession">cs_siftsession</td>
                                                    <td><a href="https://envato.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Envato's privacy policy">Envato</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjSession_658600">_hjSession_658600</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 day">1 day</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="_hjSessionUser_658600">_hjSessionUser_658600</td>
                                                    <td><a href="https://www.hotjar.com/legal/policies/privacy" target="_blank" rel="noopener noreferrer nofollow" title="Hotjar's privacy policy">Hotjar</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="1 year">1 year</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="i/0/302301/4690">i/0/302301/4690</td>
                                                    <td><a href="https://impact.com/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="Impact Radius's privacy policy">Impact Radius</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                                <tr>
                                                    <td title="pvs">pvs</td>
                                                    <td><a href="https://www.hurra.com/impressum" target="_blank" rel="noopener noreferrer nofollow" title="Hurra Communications's privacy policy">Hurra Communications</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="30 days">30 days</td>
                                                    <td title="HTTP">HTTP</td>
                                                </tr>
                                                <tr>
                                                    <td title="pvs.gif">pvs.gif</td>
                                                    <td><a href="https://www.hurra.com/impressum" target="_blank" rel="noopener noreferrer nofollow" title="Hurra Communications's privacy policy">Hurra Communications</a></td>
                                                    <td title="Pending">Pending</td>
                                                    <td title="Session">Session</td>
                                                    <td title="Pixel">Pixel</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="CybotCookiebotDialogDetailBodyContentTextIABv2" lang="en">
                        <div id="CybotCookiebotDialogDetailBodyContentIABContainer">
                            <div id="CybotCookiebotDialogDetailBodyContentIABv2Tabs"><a id="CybotCookiebotDialogDetailBodyContentIABv2Purposes" href="#" class="CybotCookiebotDialogDetailBodyContentIABv2TabSelected" lang="en" aria-label="[#IABV2_LABEL_PURPOSES#]"><label for="CybotCookiebotDialogDetailBodyContentIABv2Purposes" aria-hidden="">&thinsp;</label>[#IABV2_LABEL_PURPOSES#]</a> <a id="CybotCookiebotDialogDetailBodyContentIABv2Features" href="#" class="CybotCookiebotDialogDetailBodyContentIABv2Tab" lang="en" aria-label="[#IABV2_LABEL_FEATURES#]"><label for="CybotCookiebotDialogDetailBodyContentIABv2Features" aria-hidden="">&thinsp;</label>[#IABV2_LABEL_FEATURES#]</a> <a id="CybotCookiebotDialogDetailBodyContentIABv2Partners" href="#" class="CybotCookiebotDialogDetailBodyContentIABv2Tab" lang="en" aria-label="[#IABV2_LABEL_PARTNERS#]"><label for="CybotCookiebotDialogDetailBodyContentIABv2Partners" aria-hidden="">&thinsp;</label>[#IABV2_LABEL_PARTNERS#]</a></div>
                            <div id="CybotCookiebotDialogDetailBodyContentIABv2Details">
                                <div id="CybotCookiebotDialogDetailBodyContentIABv2TabPurposes">
                                    <div class="CybotCookiebotDialogDetailBodyContentIABv2PurposesBody">[#IABV2_BODY_PURPOSES#]</div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentIABv2TabFeatures">
                                    <div class="CybotCookiebotDialogDetailBodyContentIABv2FeaturesBody">[#IABV2_BODY_FEATURES#]</div>
                                </div>
                                <div id="CybotCookiebotDialogDetailBodyContentIABv2TabPartners">
                                    <div class="CybotCookiebotDialogDetailBodyContentIABv2PartnersBody">[#IABV2_BODY_PARTNERS#]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="CybotCookiebotDialogDetailBodyContentTextAbout" lang="en">
                        <p style="">Cookies, clear gifs and similar technologies (<strong style="">cookies</strong>) are used on our sites to personalise content and ads, provide and improve product features and to analyse our traffic on our sites by Envato, our business partners and authors. As a part of our commitment to upholding a high standard of transparency with our users, we’ve created this guide to explain the tracking technologies we use on our sites.</p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">What are cookies, clear gifs and similar technologies? </strong></p>
                        <p style=""><strong style=""></strong><strong style=""></strong></p>
                        <p style=""><strong style="">Cookies</strong> are a small data file sent to your web browser or mobile device that is stored on your browser cache.</p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">Clear gifs and pixel trackers</strong> are tiny graphics with a unique identifier and are similar in function to cookies, and are used to track the movements of web users between pages and websites. They are embedded invisibly on web pages and are about the size of a single pixel.</p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">First party cookies</strong> are set by us when you’re visiting one of our sites, and <strong style="">third party cookies</strong> are set by a party other than the website you’re visiting.</p>
                        <p style="">&nbsp;</p>
                        <p style="">Cookies and similar technologies are used for the following purposes on the Envato sites.</p>
                        <p style=""><strong style="">&nbsp;</strong></p>
                        <p style=""><strong style="">Strictly Necessary: </strong>Strictly necessary cookies help make a website usable by enabling basic functions like page navigation, website security and access to information that requires authentication. </p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">Preferences: </strong>These cookies enable storage of information that changes the way a website behaves or looks, like settings for your region. Statistics: Statistics cookies help us to understand how visitors interact with our websites by collecting and reporting information.</p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">Marketing:</strong> Marketing cookies are used for tracking browsing activity and to customise and display ads that are relevant and engaging.</p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">Third Parties:</strong> Our business partners and authors use cookies for the purposes </p>
                        <p style="">described above.</p>
                        <p style=""><strong style="">&nbsp;</strong></p>
                        <p style=""><strong style="">How to manage your preferences and settings</strong></p>
                        <p style="">Please keep in mind that your experience may not be as we intended if you change the standard settings. </p>
                        <p style="">&nbsp;</p>
                        <p style="">Visitors located in the European Union can select their preferences with the preferences panel, and can change their preferences by clearing their cookies, refreshing the page, and selecting their preferences again. </p>
                        <p style="">&nbsp;</p>
                        <p style="">Any interested visitor can learn how to opt out of third party cookies by consulting <a href="http://optout.networkadvertising.org/?c=1" style="">this page</a>&nbsp;or learn how to change your browser settings: </p>
                        <p style="">&nbsp;</p>
                        <p style=""><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" style="">Firefox</a> </p>
                        <p style=""><a href="https://support.google.com/chrome/answer/95647?hl=en" style="">Chrome</a> </p>
                        <p style=""><a href="https://support.apple.com/en-us/HT201265" style="">Safari</a></p>
                        <p style="">&nbsp;</p>
                        <p style=""><strong style="">Contact, questions and changes</strong></p>
                        <p style="">We may make changes to the Cookie Policy from time to time and we will take reasonable steps to let our users know about these changes. You can keep track of changes made by referring to the date below.</p>
                        <p style="">&nbsp;</p>
                        <p style="">If you have any questions about our privacy practices, or about how to change your cookie preferences, please contact our privacy champion at privacy.champion@envato.com. You can also write to us at PO Box 16122 Collins Street West Victoria 8007 Australia. </p>
                        <p style="">&nbsp;</p>
                        <p style="">Updated 14 June 2019. </p><br><br>Your consent applies to the following domains: build.envato.com, preview.codecanyon.net, preview.themeforest.net, envato.com, studiosupport.envato.com, help.author.envato.com, help.elements.envato.com, help.market.envato.com, webdesign.tutsplus.com, photography.tutsplus.com, music.tutsplus.com, gamedevelopment.tutsplus.com, email.tutsplus.com, design.tutsplus.com, crafts.tutsplus.com, computers.tutsplus.com, code.tutsplus.com, cgi.tutsplus.com, business.tutsplus.com, tutsplus.com<br><br>
                    </div>
                </div>
                <div id="CybotCookiebotDialogDetailFooter" lang="en">Cookie declaration last updated on 3/5/21 by <a href="https://www.cookiebot.com" target="_blank" rel="noopener" title="Cookiebot">Cookiebot</a></div>
            </div>
        </div>
    </div>
    <iframe class="full-screen-preview__frame" src="http://denysthemes.com/demos/html/indiega/pages/" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview" allow="geolocation 'self'; autoplay 'self'" style="height: 672px;">
    </iframe>


    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[
        $(function() {
            viewloader.execute(Views);
        });

        //]]>
    </script>

    <div id="affiliate-tracker" class="is-hidden" data-view="affiliatesTracker" data-cookiebot-enabled="true"></div>

    <script src="https://consent.cookiebot.com/uc.js" data-cbid="4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799" async="async" id="Cookiebot" nonce="JgUQtYtK4Hy26SZ0GsF+RA=="></script>


    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;

        var consentCookie = getCookie('CookieConsent');

        if (consentCookie) {
            var hasConsent = Market.Helpers.CookieConsent.given('statistics');

            if (hasConsent) {
                setupGoogleAnalytics();
                loadGoogleAnalytics();
                loadLinkingForAllAccounts();
            }
        } else {
            setupGoogleAnalytics();
            loadGoogleAnalytics();
            loadLinkingForAllAccounts();
        }

        window.addEventListener('CookiebotOnAccept', function(e) {
            if (Cookiebot.consent.statistics) {
                if (!(window.ga && ga.create)) {
                    setupGoogleAnalytics();
                    loadGoogleAnalytics();
                    loadLinkingForAllAccounts();
                }
            } else {
                unloadGoogleAnalytics()
            }
            if (!consentToExperimentsEnrollmentGiven()) {
                unenrollFromExperiments();
            }
        }, false);

        function getCookie(name) {
            var name = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieContent = decodedCookie.split(';');

            for (var i = 0; i < cookieContent.length; i++) {
                var c = cookieContent[i];

                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }

                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }

            return false;
        }

        function delete_cookie_by_name(name) {
            document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

        function unloadGoogleAnalytics() {
            var payload = {
                "name": "m",
                "allowLinker": true
            };
            var accountId = "UA-11834194-7";

            // Set the GA User Opt-out flag
            window['ga-disable-' + accountId] = true;

            // Do not explicitly make any further calls to ga()
            ga(payload.name + ".remove");

            // Delete any existing GA cookies (_ga, _gat & _gaid) and GA Client ID from localStorage
            delete_cookie_by_name('_ga');
            delete_cookie_by_name('_gat');
            delete_cookie_by_name('_gid');

            // Delete LocalStorage Entries
            if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
                var clientId = Market.Helpers.GaLsUtils.getClientId();

                if (!clientId) {
                    return;
                }

                Market.Helpers.GaLsUtils.removeClientId();
            }

            // Do not transmit the Client ID to other sites upon navigation (i.e. autoLink)
        }

        function domLoaded() {
            return new Promise(resolve => {
                if (
                    document.readyState === 'interactive' ||
                    document.readyState === 'complete'
                ) {
                    resolve()
                } else {
                    document.addEventListener(
                        'DOMContentLoaded',
                        () => {
                            resolve()
                        }, {
                            capture: true,
                            once: true,
                            passive: true
                        }
                    )
                }
            })
        }

        function consentToExperimentsEnrollmentGiven() {
            return Market.Helpers.CookieConsent.given('preferences') && Market.Helpers.CookieConsent.given('statistics');
        }

        function unenrollFromExperiments() {
            var experimentEnrolmentsDataString = "HwGVr6f9SUqJDXkCwmCjOQ.0!INZL7Mj5QeSJrPRFj9C9Dg.4!_e1qQ7pGSx2YKGPOKsbnsg.1!woHsQGnZTViIWNi9XIE5Kg.1"
            var experimentEnrolments = experimentEnrolmentsDataString.split('!')
            var experimentEnrolmentsNames = _.map(experimentEnrolments, function(enrolment) {
                return "market_experiment_" + enrolment.split('.')[0]
            })
            experimentCookieNames.push('market_experiments')
            experimentCookieNames.push('mk_ex')

            var deletedCookies = [];

            _.each(experimentEnrolmentsNames, function(cookieName) {
                if ($.cookie(cookieName) != null && $.cookie(cookieName) != '' && typeof($.cookie(cookieName)) != 'undefined') {
                    $.removeCookie(cookieName, {
                        path: '/',
                        domain: '.' + window.location.host
                    });
                    deletedCookies.push(cookieName);
                }
            });

            if (deletedCookies.length > 0 && typeof(t) != 'undefined') {
                ga(t + '.set', "exp", null);
                ga(t + '.set', "dimension21", null);
                ga(t + '.set', "dimension22", null);
            }
        }

        function setExperimentEnrollments(experimentEnrolmentsDataString) {
            var cookieValue = $.cookie('mk_ex');
            if (cookieValue && cookieValue.replace(/\*/g, '!') === experimentEnrolmentsDataString) {
                ga(t + '.set', "exp", experimentEnrolmentsDataString);
                ga(t + '.set', "dimension21", experimentEnrolmentsDataString);
                ga(t + '.set', "dimension22", experimentEnrolmentsDataString);
            } else {
                ga(t + '.set', "exp", null);
                ga(t + '.set', "dimension21", null);
                ga(t + '.set', "dimension22", null);
            }
        }

        function loadLinkingForAllAccounts() {
            domLoaded().then(() => {
                var ACCOUNTS = ["m"];
                window._envGaTrackerNames = ACCOUNTS;

                for (var i = 0; i < ACCOUNTS.length; i++) {
                    t = ACCOUNTS[i];

                    ga(t + '.require', 'linker');

                    ga(t + '.require', 'linkid', 'linkid.js');
                };

                document.body.addEventListener('click', function(event) {
                    decorateLink(event);
                });
                document.body.addEventListener('contextmenu', function(event) {
                    // Aside from a normal click, we need to handle the variety of ways users
                    // can open a link in a new tab
                    // Right click to open context menu
                    decorateLink(event);
                });
                document.body.addEventListener('mousedown', function(event) {
                    // Aside from a normal click, we need to handle the variety of ways users
                    // can open a link in a new tab
                    // Middle mouse button click
                    if (event.button === 1) {
                        decorateLink(event);
                    }
                });
            });
        }

        function decorateLink(event) {

            var ACCOUNTS = ["m"];
            window._envGaTrackerNames = ACCOUNTS;

            var currentTarget = jQuery(event.target);
            var link = currentTarget.closest('a')[0];
            var ourDomains = ["activeden.net", "audiojungle.net", "themeforest.net", "videohive.net", "graphicriver.net", "3docean.net", "codecanyon.net", "photodune.net", "market.styleguide.envato.com", "elements.envato.com", "build.envatohostedservices.com", "author.envato.com", "tutsplus.com", "sites.envato.com", "account.envato.com"];
            var filteredDomains = ourDomains.filter(function(domain) {
                return domain !== document.location.hostname;
            });

            for (var i = 0; i < ACCOUNTS.length; i++) {
                t = ACCOUNTS[i];

                if (link && link.href) {
                    if (filteredDomains.includes(link.hostname) || currentSiteLinkOpensInNewWindow(link)) {
                        ga(t + '.linker:decorate', link)
                    }
                }
            }
        }

        function currentSiteLinkOpensInNewWindow(link) {
            return document.location.hostname === link.hostname && link.target === '_blank';
        }

        function setupGoogleAnalytics() {
            (function() {
                var accountId = "UA-11834194-7";
                window['ga-disable-' + accountId] = false;

                var options = {
                    "name": "m",
                    "allowLinker": true
                };

                if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
                    if (Market.Helpers.GaLsUtils.clientIdNotPresent()) {
                        options.clientId = Market.Helpers.GaLsUtils.retrieveClientId();
                    }

                    ga("create", accountId, options);
                    ga(function() {
                        var tracker = ga.getByName(options.name);
                        Market.Helpers.GaLsUtils.storeClientId(tracker.get('clientId'));
                    })
                } else {
                    ga("create", accountId, options);
                }

                var ACCOUNTS = ["m"];
                window._envGaTrackerNames = ACCOUNTS;

                for (var i = 0; i < ACCOUNTS.length; i++) {
                    t = ACCOUNTS[i];

                    ga(t + '.require', "GTM-5VPWWP");

                    ga(t + '.require', 'ec');

                    ga(t + '.require', 'displayfeatures');

                    ga(t + '.set', 'dimension20', 'other')

                    var itemPageIdMatch = window.location.pathname.match(/^\/item\/[a-z-]+\/(?:reviews\/)?(\d+)(?:\/comments|\/support)?$/);
                    if (itemPageIdMatch) {
                        // Fetch item ID from path
                        var itemId = itemPageIdMatch[1];
                        ga(t + '.set', 'dimension23', itemId);
                    }




                    if (!getCookie('CookieConsent') || consentToExperimentsEnrollmentGiven()) {
                        var experimentEnrolmentsDataString = "HwGVr6f9SUqJDXkCwmCjOQ.0!INZL7Mj5QeSJrPRFj9C9Dg.4!_e1qQ7pGSx2YKGPOKsbnsg.1!woHsQGnZTViIWNi9XIE5Kg.1"
                        setExperimentEnrollments(experimentEnrolmentsDataString);
                    }

                    if ('') {
                        ga(t + '.send', {
                            hitType: 'pageview',
                            page: ''
                        });
                    } else if ('') {
                        // append the analytics_suffix to the page path so the flash alert/error type can be tracked
                        var analyticsSuffix = $.trim('').replace(/([A-Z])/g, '$1').replace(/[-_\s]+/g, '-').toLowerCase();
                        var uri = URI(window.location.pathname + window.location.search);
                        uri.path(uri.path() + '/' + analyticsSuffix);
                        var tracking_path = uri.path() + uri.search();
                        ga(t + '.send', {
                            hitType: 'pageview',
                            page: tracking_path,
                        });
                    } else {
                        ga(t + '.send', 'pageview');
                    }
                }

                loadLinkingForAllAccounts()
            }());
        }

        function loadGoogleAnalytics() {
            (function() {

                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://www.google-analytics.com/analytics.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }());
        }



        //]]>
    </script>


    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[

        if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.statistics) {
            enableGoogleAnalyticsLinkWrapper();
        } else {
            window.addEventListener('CookiebotOnAccept', function(e) {
                if (Cookiebot.consent.statistics) {
                    enableGoogleAnalyticsLinkWrapper();
                }
            }, false);
        }

        function enableGoogleAnalyticsLinkWrapper() {
            // GA: universal analytics link wrapper
            (function() {
                window._envTrkrs = [
                    ["m", "UA-11834194-7"]
                ];

                var debug = false;
                var MAX_RETRIES = 10;

                /*
                   The script needs to wait until the Analytics script
                   has been downloaded from Google before initializing
                */
                var waitForAnalytics = function() {
                    this.count = this.count || 0;

                    if (window.ga && ga.getByName) {
                        e.init();
                    } else {
                        if (count < MAX_RETRIES) {
                            setTimeout(waitForAnalytics, 250);
                        }
                        count++;
                    }
                };

                var e = {
                    _envArray: [],
                    _envTrkrs: (window._envTrkrsCust && window._envTrkrsCust.length) ? window._envTrkrs.concat(window._envTrkrsCust) : window._envTrkrs,
                    init: function() {
                        for (var i = 0; i < _envTrkrs.length; i++) {
                            var name = _envTrkrs[i][0];

                            if (!ga.getByName(name)) {
                                var accountId = _envTrkrs[i][1];

                                var options = {
                                    name: name,
                                    allowLinker: true,
                                    cookieDomain: "auto",
                                };

                                if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
                                    if (Market.Helpers.GaLsUtils.clientIdNotPresent()) {
                                        options.clientId = Market.Helpers.GaLsUtils.retrieveClientId();
                                    }

                                    ga("create", accountId, options);
                                } else {
                                    ga("create", accountId, options);
                                }
                            }
                        }

                        document.addEventListener('DOMContentLoaded', function() {
                            e.wrapperInit();
                        });

                        if (debug) {
                            console.log('Initiated');
                        }
                    },
                    wrapperInit: function() {
                        if (typeof window._envIsRunning != 'undefined' || window._envIsRunning == true) {
                            return
                        }
                        window._envIsRunning = true;

                        if (document.addEventListener) {
                            document.addEventListener('click', function(event) {
                                var target = event.target;
                                if (target && target.tagName === 'A') {
                                    e._envLinksTracker(event);
                                }
                            });
                        }
                    },
                    isInArray: function(e, t) {
                        for (var n = 0; n < t.length; n++) {
                            var r = new RegExp(t[n], 'i');
                            if (r.test(e)) {
                                return n
                            }
                        }
                        return -1
                    },
                    _envTrackevent: function(e, t, n, r) {
                        for (var i = 0; i < this._envTrkrs.length; i++) {
                            var s = this._envTrkrs[i][0].length == 0 ? '' : this._envTrkrs[i][0] + '.';
                            r.length == 0 ? ga(s + 'send', 'event', e, t, n) : ga(s + 'send', 'event', e, t, n, r)
                        }
                    },
                    _envTrackpageview: function(e, t) {
                        t = t.charAt(0) == '/' ? t : '/' + t;
                        for (var n = 0; n < this._envTrkrs.length; n++) {
                            var r = this._envTrkrs[n][0].length == 0 ? '' : this._envTrkrs[n][0] + '.';
                            ga(r + 'send', 'pageview', e + t);
                        }
                    },
                    _envLinksTracker: function(t) {
                        var r = false;
                        var i = {
                            outbound: {
                                run: true,
                                useEvent: true
                            },
                            download: {
                                run: true,
                                useEvent: true,
                                reg: ''
                            },
                            self: {
                                run: false,
                                useEvent: true
                            },
                            mail: {
                                run: true,
                                useEvent: true
                            },
                            ext: /\.(doc.?|xls.?|ppt.?|exe|zip|rar|gz|tar|tgz|dmg|csv|pdf|xpi|txt|mp3)$/i
                        };
                        var s = t.srcElement ? t.srcElement : this;
                        if (t.srcElement) {
                            r = true
                        }
                        while (s.tagName != 'A') {
                            s = s.parentNode
                        }
                        if (s.href == undefined || s.href == null) {
                            return true
                        }
                        var o = s.href;
                        if (o.length == 0) return;
                        var u = s.hostname.toLowerCase();
                        var a = s.pathname;
                        if (a.length == 0) {
                            a = '/'
                        } else if (a.substr(0, 1) != '/') {
                            a = '/' + a
                        }
                        var f = s.protocol;
                        var l = s.search;
                        var c = location.hostname;
                        c = c.replace(/^www\./i, '').toLowerCase();
                        u = u.replace(/^www\./i, '').toLowerCase();
                        if (o.match(/^#/)) {
                            if (i.self.run) {
                                i.self.useEvent ? e._envTrackevent('self', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/self', '/' + o);
                                return true
                            }
                        } else if (f.match(/^mailto:/i)) {
                            if (i.mail.run) {
                                o = o.replace(/^mailto:/i, '');
                                i.mail.useEvent ? e._envTrackevent('mailto', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/mailto', o);
                                return true
                            }
                        } else if ((new RegExp(i.ext)).test(a)) {
                            if (i.download.run) {
                                o = o.replace(/^https?:\/\//i, '');
                                i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                                return true
                            }
                        } else if (u == undefined || u.length == 0 || f.match(/^javascript:/i)) {
                            return
                        } else if ((new RegExp(c + '$', 'i')).test(u) || (new RegExp(u + '$', 'i')).test(c)) {
                            if (i.download.run && i.download.reg.length != 0) {
                                if ((new RegExp(i.download.reg, 'i')).test(a + l)) {
                                    o = o.replace(/^https?:\/\//i, '');
                                    i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                                    return true
                                }
                            }
                        } else if (u != c) {
                            if (e.isInArray(u, e._envArray) == -1) {
                                if (i.outbound.run) {
                                    i.outbound.useEvent ? e._envTrackevent('outbound', 'click - ' + c, u + a + l, '') : e._envTrackpageview('/virtual/outbound', u + a);
                                    return true
                                }
                            } else if (e.isInArray(u, e._envArray) != -1) {
                                var h = s.target;
                                if (h != null && h == '_blank') {
                                    if ((new RegExp(/_utma=/)).test(l)) {
                                        return true
                                    }
                                    var p = e._envTrkrs[0][0].length == 0 ? '' : _envTrkrs[0][0] + '.';
                                    return true
                                } else {
                                    return false
                                }
                            }
                        }
                    }
                };

                waitForAnalytics();
            })()
        }

        //]]>
    </script>



    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[
        // Set New Relic custom attributes
        (function() {
            if (typeof newrelic !== 'undefined') {
                newrelic.setCustomAttribute('pageType', 'other')

                // Log experiment enrolment
                var experiment_data_string = "HwGVr6f9SUqJDXkCwmCjOQ.0!INZL7Mj5QeSJrPRFj9C9Dg.4!_e1qQ7pGSx2YKGPOKsbnsg.1!woHsQGnZTViIWNi9XIE5Kg.1" + "!"
                newrelic.setCustomAttribute('experiments', experiment_data_string)
            }
        })()

        //]]>
    </script>

    <script nonce="JgUQtYtK4Hy26SZ0GsF+RA==">
        //<![CDATA[
        if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.marketing) {
            enableGoogleTagManager();
        } else {
            window.addEventListener('CookiebotOnAccept', function(e) {
                if (Cookiebot.consent.marketing) {
                    enableGoogleTagManager();
                }
            }, false);
        }

        function enableGoogleTagManager() {
            var gtmId = 'GTM-585RXMV';
            // Google Tag Manager Tracking Code
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', gtmId);


            window.addEventListener('load', function() {
                window.dataLayer.push({
                    event: 'pinterestReady'
                });
            });
        }

        //]]>
    </script>



    <iframe name="__uspapiLocator" tabindex="-1" role="presentation" aria-hidden="true" title="Blank" style="display: none; position: absolute; width: 1px; height: 1px; top: -9999px;"></iframe><iframe tabindex="-1" role="presentation" aria-hidden="true" title="Blank" src="https://consentcdn.cookiebot.com/sdk/bc-v3.min.html" style="position: absolute; width: 1px; height: 1px; top: -9999px;"></iframe>
</body>

</html>