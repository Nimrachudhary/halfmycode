! function(e) {
    var t = {};

    function o(a) {
        if (t[a]) return t[a].exports;
        var n = t[a] = {
            i: a,
            l: !1,
            exports: {}
        };
        return e[a].call(n.exports, n, n.exports, o), n.l = !0, n.exports
    }
    o.m = e, o.c = t, o.d = function(e, t, a) {
        o.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: a
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
        var a = Object.create(null);
        if (o.r(a), Object.defineProperty(a, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var n in e) o.d(a, n, function(t) {
                return e[t]
            }.bind(null, n));
        return a
    }, o.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return o.d(t, "a", t), t
    }, o.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, o.p = "", o(o.s = 68)
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
        }) => new Promise((a, n) => {
            const s = document.createElement(e);
            document.body.appendChild(s), s.onload = a, s.onerror = n, s.dataset.assetKey = o, "link" === e && (s.href = t, s.media = "screen", s.rel = "stylesheet", s.type = "text/css"), "script" === e && (s.async = !0, s.defer = !0, s.src = t)
        })
    },
    3: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(1),
            n = o(0);
        var s = !1;
        t.treesCounterLoader = async () => {
            s || (s = !0, n.log("Green - load treecounter"), await a.scriptPromise({
                type: "script",
                key: "treeCount",
                url: "/treecounter.min.js?t=" + Math.floor(Date.now() / 36e5)
            }))
        }, t.green = void(jsGlobals.g.active && (document.cookie.includes(jsGlobals.ckTCFgdpr) ? setTimeout((function() {
            n.log("Green: already have a cookie ...load script"), t.treesCounterLoader()
        }), 500) : (window.addEventListener("load", (async function() {
            document.addEventListener("mousemove", t.treesCounterLoader)
        })), window.addEventListener("load", (async function() {
            document.addEventListener("scroll", t.treesCounterLoader)
        })), window.addEventListener("load", (async function() {
            document.addEventListener("touchstart", t.treesCounterLoader)
        })))))
    },
    68: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(69),
            n = o(70),
            s = o(71),
            r = o(72),
            i = o(73),
            d = o(74),
            c = o(76),
            l = o(3),
            u = o(77);
        document.addEventListener("DOMContentLoaded", (function() {
            a.dropdown, n.href, r.setStickyTopOffset, s.tabs, i.modal, d.consent, c.oneSignal, l.green, u.searchLoader
        }))
    },
    69: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.dropdown = (() => {
            const e = e => {
                    const t = e.hasAttribute("data-dropdown-lock-scroll"),
                        o = document.getElementsByTagName("body");
                    if (t && o && o.length) {
                        const e = "hidden" === o[0].style.overflow;
                        o[0].style.overflow = e ? "" : "hidden"
                    }
                },
                t = t => {
                    t.querySelectorAll(".toggle-open").forEach(e => e.classList.remove("toggle-open")), e(t)
                };
            document.querySelectorAll("[data-dropdown-trigger]").forEach(o => {
                (o => {
                    o.addEventListener("click", a => {
                        a.preventDefault(), a.stopPropagation();
                        const n = o.closest("[data-dropdown]"),
                            s = o && o.getAttribute("data-dropdown-trigger");
                        if (!s || !n) return;
                        e(n);
                        const r = o.closest("[data-accordion]"),
                            i = !o.classList.contains("toggle-open");
                        r && i && t(r);
                        s.split(",").map(e => e.trim()).forEach(e => {
                            const t = null == n ? void 0 : n.querySelector(e);
                            if (t) {
                                t.classList.toggle("toggle-open");
                                t.getAttribute("data-center-when-open") && t.scrollIntoView({
                                    behavior: "smooth",
                                    block: "center"
                                }), o.classList.toggle("toggle-open")
                            }
                        })
                    })
                })(o)
            }), document.querySelectorAll("[data-dropdown-closer]").forEach(e => {
                e.addEventListener("click", o => {
                    o.preventDefault(), o.stopPropagation();
                    const a = e.closest("[data-dropdown]");
                    a && t(a)
                })
            })
        })()
    },
    70: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(0);
        t.DATA_HREF_TRIGGER_SELECTOR = "[data-href]", t.href = (a.log("Data-Href init"), void document.addEventListener("click", e => {
            let t = e.target;
            if (t) {
                const n = t.closest("[data-href]");
                if (n) {
                    a.log("Data-Href clicked for element " + n.id);
                    let t = n.getAttribute("data-href") || "#";
                    const s = n.hasAttribute("data-href-target");
                    let r = "";
                    for (var o = 0; o < n.attributes.length; o++) {
                        const e = n.attributes[o];
                        "data-lst" === e.name && (r = `${r}&ln=${e.value}`), "data-pos" === e.name && (r = `${r}&ps=${e.value}`), "data-id" === e.name && (r = `${r}&id=${e.value}`), "data-title" === e.name && (r = `${r}&title=${e.value}`)
                    }
                    if ("" !== r && (t = t.includes("?") ? `${t}&promo=1&t=${Date.now()}${r}` : `${t}?promo=1&t=${Date.now()}${r}`), e.preventDefault(), e.stopPropagation(), s) {
                        const e = n.getAttribute("data-href-target"),
                            o = window.open(t, e || "_blank");
                        o && o.focus()
                    } else document.location.href = t
                }
            }
        }))
    },
    71: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.tabs = void document.querySelectorAll("[data-toggle-tab]").forEach(e => {
            (e => {
                e.addEventListener("click", t => {
                    t.preventDefault(), t.stopPropagation();
                    const o = e.closest("[data-tabs]");
                    if (!o) return;
                    const a = e && e.getAttribute("data-toggle-tab");
                    if (!a) return;
                    const n = o.querySelector(`[data-tab-content="${a}"]`);
                    if (!n) return;
                    const s = o.querySelectorAll("[data-toggle-tab]");
                    if (!s || !s.length) return;
                    const r = o.querySelectorAll("[data-tab-content]");
                    r && r.length && (s.forEach(e => {
                        e.classList.remove("nav-tab-active")
                    }), r.forEach(e => {
                        e.style.display = "none"
                    }), n.style.display = "", e.classList.add("nav-tab-active"))
                })
            })(e)
        })
    },
    72: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.setStickyTopOffset = (() => {
            const e = document.querySelector(".area--header"),
                t = document.querySelector(".area--over-header"),
                o = (e ? e.clientHeight : 0) + (t ? t.clientHeight : 0);
            document.documentElement.style.setProperty("--sticky-top", o + "px")
        })()
    },
    73: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.modal = (document.querySelectorAll("[data-modal-target]").forEach(e => {
            (e => {
                e.addEventListener("click", t => {
                    t.preventDefault(), t.stopPropagation();
                    const o = e && e.getAttribute("data-modal-target");
                    if (!o) return;
                    const a = document.querySelector(o);
                    if (!a) return;
                    const n = document.getElementsByTagName("body");
                    n && (n[0].style.overflow = "hidden"), a.classList.add("modal-open")
                })
            })(e)
        }), void document.querySelectorAll("[data-modal-closer]").forEach(e => {
            e.addEventListener("click", t => {
                t.preventDefault(), t.stopPropagation();
                const o = e.closest(".modal-frame");
                o && (e => {
                    if (!e || !e.parentElement) return;
                    e.parentElement.querySelectorAll(".modal-open").forEach(e => {
                        e.classList.remove("modal-open")
                    });
                    const t = document.getElementsByTagName("body");
                    t && (t[0].style.overflow = "")
                })(o)
            })
        }))
    },
    74: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(1),
            n = o(0),
            s = o(75);
        var r = !1;
        const i = async () => {
            r || (r = !0, s.gtmLoader(), a.scriptPromise({
                type: "script",
                key: "iubenda",
                url: "/iubenda.min.js?t=" + Math.floor(Date.now() / 36e5)
            }), a.scriptPromise({
                type: "script",
                key: "iubendaStubv2JS",
                url: "//cdn.iubenda.com/cs/tcf/stub-v2.js"
            }), a.scriptPromise({
                type: "script",
                key: "iubendaCcpaJS",
                url: "//cdn.iubenda.com/cs/ccpa/stub.js"
            }), n.log("consentLoader - End of script loading"), document.removeEventListener("mousemove", i), document.removeEventListener("scroll", i), document.removeEventListener("touchstart", i))
        };
        t.consent = void(document.cookie.includes(jsGlobals.ckTCFgdpr) ? setTimeout((function() {
            n.log("Consent: already have a cookie ...load script"), i()
        }), 1500) : (window.addEventListener("load", (async function() {
            document.addEventListener("mousemove", i)
        })), window.addEventListener("load", (async function() {
            document.addEventListener("scroll", i)
        })), window.addEventListener("load", (async function() {
            document.addEventListener("touchstart", i)
        }))))
    },
    75: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(0);
        var n = !1;
        t.gtmLoader = () => {
            let e = window;
            if (!n)
                if (a.log("GTM: gtmLoader "), n = !0, "localStorage" in window && "false" == localStorage.analytics) a.log("GTM: Analytics disabled!"), e.dataLayer = () => {}, e.dataLayer.push = function(e) {
                    a.log("dataLayer.push trashed: " + e)
                };
                else {
                    function t() {
                        e.dataLayer.push(arguments)
                    }
                    a.log("GTM: Load GTM Script"), e.dataLayer = e.dataLayer || [], a.log("dataLayer.push _bravoid = " + jsGlobals._bravoid), e.dataLayer.push({
                            customerId: jsGlobals._bravoid
                        }), t("consent", "default", {
                            ad_storage: "denied",
                            analytics_storage: "denied",
                            wait_for_update: 2e3
                        }), t("consent", "default", {
                            ad_storage: "denied",
                            analytics_storage: "denied",
                            region: ["IT", "FR", "DE", "ES", "GB", "NL", "BE", "AT", "PL", "US-CA", "BR"],
                            wait_for_update: 2e3
                        }),
                        function(e, t, o, a, n) {
                            e[a] = e[a] || [], e[a].push({
                                "gtm.start": (new Date).getTime(),
                                event: "gtm.js"
                            });
                            var s = t.getElementsByTagName(o)[0],
                                r = t.createElement(o);
                            r.async = !0, r.src = "https://www.googletagmanager.com/gtm.js?id=" + n, s.parentNode.insertBefore(r, s)
                        }(window, document, "script", "dataLayer", jsGlobals.tag_manager_key);
                    try {
                        dcb()
                    } catch (e) {
                        a.log("Datalayer callback error: " + e)
                    }
                }
        }, t.gtm = void(n = !1)
    },
    76: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(1),
            n = o(0);
        var s = !1;
        t.oneSignalLoader = () => {
            s || (s = !0, n.log("OneSignal: load script"), a.scriptPromise({
                type: "script",
                key: "oneSignalSdkJS",
                url: "https://cdn.onesignal.com/sdks/OneSignalSDK.js"
            }).then((function() {
                n.log("OneSignal: Script loaded");
                var e = window.OneSignal || [];
                let t = window;
                e.push((function() {
                    e.push(["init", {
                        appId: jsGlobals.os.app_key,
                        autoRegister: jsGlobals.os.autoRegister,
                        requiresUserPrivacyConsent: !1,
                        allowLocalhostAsSecureOrigin: !0,
                        notifyButton: {
                            enable: !0,
                            size: "medium",
                            theme: "default",
                            position: "bottom-left",
                            offset: {
                                bottom: "5px",
                                left: "5px",
                                right: "0px"
                            },
                            prenotify: !0,
                            showCredit: !1,
                            text: {
                                "tip.state.unsubscribed": jsGlobals.os.tip_state_unsubscribed,
                                "tip.state.subscribed": jsGlobals.os.tip_state_subscribed,
                                "tip.state.blocked": jsGlobals.os.tip_state_blocked,
                                "message.prenotify": jsGlobals.os.message_prenotify,
                                "message.action.subscribed": jsGlobals.os.message_action_subscribed,
                                "message.action.resubscribed": jsGlobals.os.message_action_resubscribed,
                                "message.action.unsubscribed": jsGlobals.os.message_action_unsubscribed,
                                "dialog.main.title": jsGlobals.os.dialog_main_title,
                                "dialog.main.button.subscribe": jsGlobals.os.dialog_main_button_subscribe,
                                "dialog.main.button.unsubscribe": jsGlobals.os.dialog_main_button_unsubscribe,
                                "dialog.blocked.title": jsGlobals.os.dialog_blocked_title,
                                "dialog.blocked.message": jsGlobals.os.dialog_blocked_message
                            },
                            colors: {
                                "circle.background": "rgb(64,133,247)",
                                "circle.foreground": "white",
                                "badge.background": "rgb(64,133,247)",
                                "badge.foreground": "white",
                                "badge.bordercolor": "white",
                                "pulse.color": "white",
                                "dialog.button.background.hovering": "rgb(77, 101, 113)",
                                "dialog.button.background.active": "rgb(70, 92, 103)",
                                "dialog.button.background": "rgb(64,133,247)",
                                "dialog.button.foreground": "white"
                            }
                        },
                        promptOptions: {
                            actionMessage: jsGlobals.os.prompt_action_message,
                            acceptButtonText: jsGlobals.os.prompt_accept_button_text,
                            cancelButtonText: jsGlobals.os.prompt_cancel_button_text
                        },
                        welcomeNotification: {
                            title: jsGlobals.os.welcome_title,
                            message: jsGlobals.os.welcome_message,
                            url: jsGlobals.os.welcome_url
                        }
                    }]), e.log.setLevel("info")
                })), jsGlobals.hasAcceptedCookies && (n.log("OneSignal: cookies has been accepted... send tag"), e.push((function() {
                    setTimeout((function() {
                        e.provideUserConsent(!0), e.sendTag("cookie", jsGlobals._bravoid)
                    }), 1e3)
                }))), e.push((function() {
                    e.on("notificationPermissionChange", (function(e) {
                        var o = e.to;
                        n.log("===> New permission state: " + o), t.dataLayer && t.dataLayer.push && ("denied" == o ? t.dataLayer.push({
                            event: "push-notify-denied"
                        }) : "default" == o ? t.dataLayer.push({
                            event: "push-notify-consent"
                        }) : "granted" == o && t.dataLayer.push({
                            event: "push-notify-granted"
                        }))
                    })), e.on("subscriptionChange", (function(e) {
                        n.log("===> The user's subscription state is now: " + e), t.dataLayer && t.dataLayer.push && (e ? t.dataLayer.push({
                            event: "push-notify-subscribed"
                        }) : t.dataLayer.push({
                            event: "push-notify-unsubscribed"
                        }))
                    })), e.on("notificationDisplay", (function(e) {
                        n.log("===> OneSignal notification displayed"), e && t.dataLayer && t.dataLayer.push && t.dataLayer.push({
                            event: "push-notify-display"
                        })
                    })), e.on("notificationDismiss", (function(e) {
                        n.log("===> OneSignal notification dismissed"), e && t.dataLayer && t.dataLayer.push && t.dataLayer.push({
                            event: "push-notify-dismiss"
                        })
                    }))
                })), e.push(["addListenerForNotificationOpened", function(e) {
                    n.log("===> Received NotificationOpened"), n.log(e), t.dataLayer && t.dataLayer.push && t.dataLayer.push({
                        event: "push-notify-open"
                    })
                }])
            })))
        }, t.oneSignal = void(s = !1)
    },
    77: function(e, t, o) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = o(1);
        var n = !1;
        t.searchBarLoader = async () => {
            n || (n = !0, await a.scriptPromise({
                type: "script",
                key: "searchBar",
                url: "/searchbar.min.js?t=" + Math.floor(Date.now() / 36e5)
            }))
        }, t.searchLoader = void window.addEventListener("load", (function() {
            document.addEventListener("mousemove", t.searchBarLoader), document.addEventListener("scroll", t.searchBarLoader), document.addEventListener("touchstart", t.searchBarLoader), document.addEventListener("mousedown", t.searchBarLoader)
        }))
    }
});