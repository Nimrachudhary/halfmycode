! function(e) {
    var t = {};

    function o(n) {
        if (t[n]) return t[n].exports;
        var r = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(r.exports, r, r.exports, o), r.l = !0, r.exports
    }
    o.m = e, o.c = t, o.d = function(e, t, n) {
        o.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, o.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, o.t = function(e, t) {
        if (1 & t && (e = o(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (o.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) o.d(n, r, function(t) {
                return e[t]
            }.bind(null, r));
        return n
    }, o.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return o.d(t, "a", t), t
    }, o.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, o.p = "", o(o.s = 78)
}({
    0: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.log = e => {
            "true" != jsGlobals.isProd && console.log(e)
        }
    },
    1: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.scriptPromise = ({
            type: e,
            url: t,
            key: o
        }) => new Promise((n, r) => {
            const i = document.createElement(e);
            document.body.appendChild(i), i.onload = n, i.onerror = r, i.dataset.assetKey = o, "link" === e && (i.href = t, i.media = "screen", i.rel = "stylesheet", i.type = "text/css"), "script" === e && (i.async = !0, i.defer = !0, i.src = t)
        })
    },
    78: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const n = o(1),
            r = o(0);
        var i = void 0;
        const l = async e => {
                r.log(""), i || (i = !0, await c(), document.querySelector("#slider-top-merchants-mobile") && await d("#slider-top-merchants-mobile", "/slider/top-merchants-mobile.html?t=" + Date.now()), a(), document.removeEventListener("touchmove", l), document.removeEventListener("mousemove", l))
            },
            s = async e => {
                if (r.log("sliderLazyLoad called from event " + (null == e ? void 0 : e.type)), !i) {
                    if (i = !0, await c(), document.querySelector("#slider-weekly-body") && await d("#slider-weekly-body", "/slider/weekly-offers.html?t=" + Date.now()), document.querySelector("#slider-premium-body") && await d("#slider-premium-body", "/slider/premium-offers.html?t=" + Date.now()), document.querySelector("#slider-event-body")) {
                        const e = window.location.pathname.split("/");
                        let t = e[e.length - 1];
                        t = t.endsWith(".html") ? t.replace(".html", "") : t, await d("#slider-event-body", `/slider/event-offers-${t}.html?t=${Date.now()}`)
                    }
                    if (document.querySelector("#slider-category-body")) {
                        const e = window.location.pathname.split("/");
                        let t = e[e.length - 1];
                        t = t.endsWith(".html") ? t.replace(".html", "") : t, await d("#slider-category-body", `/slider/category-offers-${t}.html?t=${Date.now()}`)
                    }
                    a(), document.removeEventListener("mousemove", s), document.removeEventListener("touchmove", s)
                }
            },
            d = async (e, t) => new Promise(o => {
                var n = new XMLHttpRequest;
                n.onreadystatechange = async () => {
                    var t;
                    if (n.readyState === XMLHttpRequest.DONE) {
                        var i = null !== (t = n.responseText) && void 0 !== t ? t : "";
                        const l = document.querySelector(e);
                        l || (r.log(e + " not found"), o(!1)), l && (l.outerHTML = i, r.log(e + " Slider Loaded OK")), o(!0)
                    }
                }, n.open("GET", t), n.setRequestHeader("Cache-control", "no-cache"), n.withCredentials = !0, n.send()
            }),
            a = () => {
                const e = window.Splide;
                e ? window.innerWidth < 9768 && document.querySelectorAll(".js-slider").forEach(t => {
                    const o = t.getAttribute("data-slider-match-media");
                    if (o && window.matchMedia(o) && !window.matchMedia(o).matches) return;
                    const n = t.getAttribute("data-slider-option"),
                        r = n && n.length ? JSON.parse(n) : null,
                        i = {
                            lazyLoad: !0,
                            autoplay: !0,
                            interval: 2500,
                            rewind: !0,
                            rewindSpeed: 3e3,
                            perMove: 1
                        },
                        l = r ? { ...r,
                            ...i
                        } : i;
                    new e(t, l).mount()
                }) : r.log("Slide JS not found")
            },
            c = async () => ({
                script: await n.scriptPromise({
                    type: "script",
                    key: "splideJS",
                    url: "/splide.min.js"
                }),
                css: await n.scriptPromise({
                    type: "link",
                    key: "splideCSS",
                    url: "/splide.min.css"
                })
            });
        window.addEventListener("load", (async function() {
            r.log("Enable events"), document.addEventListener("mousemove", s), document.addEventListener("touchmove", l)
        }))
    }
});