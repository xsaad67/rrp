! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e(t.gameforest = {}, t.jQuery)
}(this, function(t, e) {
    "use strict";

    function i(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }

    function n(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function o(t, e) {
        t.prototype = Object.create(e.prototype), t.prototype.constructor = t, t.__proto__ = e
    }
    e = e && e.hasOwnProperty("default") ? e.default : e;
    var a = function() {
            function t() {
                this.options = []
            }
            var e = t.prototype;
            return e.loopArray = function(t, e) {
                var i = this;
                return ";" === t.substring(t.length - 1) && (t = t.substring(0, t.length - 1)), t.split(";").forEach(function(t) {
                    var n = t.split(":");
                    e[i.replaceString(n[0])] = i.replaceString(n[1])
                })
            }, e.replaceString = function(t) {
                return t.replace(/\s/g, "")
            }, e.disqus = function(t) {
                var e = document.createElement("script"),
                    i = document.createElement("div");
                return e.src = "https://" + window.gameforest.disqus + ".disqus.com/embed.js", e.setAttribute("data-timestamp", +Number(new Date)), i.id = "disqus_thread", document.querySelector(t).appendChild(i), document.head.appendChild(e), document.body.appendChild(e), !0
            }, e.facebook = function(t) {
                var e = document.createElement("script"),
                    i = document.createElement("div"),
                    n = document.createElement("div");
                return e.src = "https://connect.facebook.net/" + window.gameforest.facebook.lang + "/sdk.js#xfbml=1&version=" + window.gameforest.facebook.version + "&appId=" + window.gameforest.facebook.id, i.id = "fb-root", n.className = "fb-comments", n.setAttribute("data-width", "100%"), n.setAttribute("data-numposts", "10"), n.setAttribute("data-href", window.location.href), document.querySelector(t).appendChild(n), document.getElementById(i.id) || (document.body.appendChild(e), document.body.appendChild(i)), !0
            }, e.vimeo = function(t) {
                t && this.loopArray(t, this.options);
                var e = this.options.autoplay ? this.options.autoplay : 1,
                    i = this.options.loop ? 1 : 0,
                    n = this.options.quality ? this.options.quality : "1080p";
                return "?autoplay=" + e + "&amp;muted=" + (this.options.mute ? this.options.mute : 0) + "&amp;quality=" + n + "&amp;loop=" + i
            }, e.youtube = function(t, e) {
                t && this.loopArray(t, this.options);
                var i = this.options.controls ? this.options.controls : 1,
                    n = this.options.autoplay ? this.options.autoplay : 1,
                    o = this.options.mute ? this.options.mute : 0,
                    a = this.options.loop ? this.options.loop + "&amp;playlist=" + e : 0;
                return "?rel=0&amp;autoplay=" + n + "&amp;controls=" + i + "&amp;mute=" + o + "&amp;start=" + (this.options.start ? this.options.start : 0) + "&amp;loop=" + a
            }, e.video = function(t) {
                var e = t.getAttribute("ya-option");
                if (this._attr.includes("youtube")) {
                    var i = this._attr.split("v=")[1];
                    t = "https://www.youtube.com/embed/" + (i + this.youtube(e, i))
                }
                this._attr.includes("vimeo") && (t = "https://player.vimeo.com/video/" + (this._attr.split("https://vimeo.com/")[1] + this.vimeo(e)));
                this._attr.includes("twitch") && (t = this._attr.split("clips.twitch.tv/")[1] ? "https://clips.twitch.tv/embed?autoplay=true&clip=" + this._attr.split("clips.twitch.tv/")[1] + "&tt_content=embed&tt_medium=clips_embed" : "https://player.twitch.tv/?autoplay=true&video=v" + this._attr.split("videos/")[1]);
                return t
            }, t
        }(),
        r = "ya-background",
        s = "[" + r + "]",
        l = "bg-video",
        c = "bg-video-item",
        d = "container-fluid",
        h = function(t) {
            function e(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(r), i._iframe = document.createElement("iframe"), i
            }
            o(e, t);
            var i = e.prototype;
            return i._calc = function(t, e) {
                var i = .2,
                    n = 2,
                    o = 16 / 9,
                    a = this._element.offsetHeight * i;
                t.width = this._element.offsetWidth, t.outerheight = this._element.offsetHeight, t.height = this._element.offsetHeight + a, e.width = t.width, e.height = Math.ceil(e.width / o), e.marginTop = Math.ceil(-(e.height - t.outerheight) / n), e.marginLeft = 0, e.height < t.height && (e.marginTop = Math.ceil(-(t.height - t.outerheight) / n), e.height = t.height, e.width = Math.ceil(e.height * o), e.marginLeft = Math.ceil(-(e.width - t.width) / n))
            }, i._add = function(t) {
                var e = document.createElement("div");
                e.className = d;
                var i = {};
                this._calc({}, i), this._iframe.setAttribute("style", "width: " + i.width + "px;height: " + i.height + "px;margin-top: " + i.marginTop + "px;margin-left: " + i.marginLeft + "px"), this.loopArray(t.getAttribute("ya-option"), this.options), this.options.opacity && (this._iframe.style.cssText += "opacity: " + this.options.opacity), this._iframe.className = c, this._iframe.src = this.video(t), this._iframe.allow = "autoplay; encrypted-media", this._element.classList.add(l), this._element.appendChild(e), this._element.appendChild(this._iframe)
            }, i._get = function() {
                return this._add(this._element)
            }, e._init = function() {
                new e(this)._get()
            }, n(e, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), e
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(s).forEach(function(t) {
            h._init.call(t)
        })
    });
    var u = "ya-carousel",
        m = "[" + u + "]",
        p = "owl-carousel",
        f = "owl-carousel-theme",
        _ = "owl-height-100",
        g = function(t) {
            function i(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(u), i
            }
            o(i, t);
            var a = i.prototype;
            return a._option = function() {
                return this._attr && this.loopArray(this._attr, this.options), this.options
            }, a._add = function() {
                var t = Math.floor(100 * Math.random()),
                    i = p + "-" + t;
                return this._option(), this.options.height && this._element.classList.add(_), this._element.classList.add(f, i), e("." + i).owlCarousel({
                    autoplay: !!this.options.autoplay || 0,
                    autoplaySpeed: this.options.autoplayspeed ? Number(this.options.autoplayspeed) : "",
                    loop: !this.options.loop || 0,
                    nav: !this.options.nav || 0,
                    dots: !this.options.dots || 0,
                    items: this.options.items ? Number(this.options.items) : 1,
                    margin: this.options.margin ? Number(this.options.margin) : 0,
                    center: !!this.options.center || 0,
                    autoWidth: !!this.options.autowidth || 0,
                    slideBy: this.options.slideItem ? Number(this.options.slideItem) : 1,
                    responsive: {
                        0: {
                            items: this.options.xs ? Number(this.options.xs) : 1,
                            autoWidth: !1,
                            margin: 0
                        },
                        720: {
                            items: this.options.sm ? Number(this.options.sm) : 1
                        },
                        991: {
                            items: this.options.md ? Number(this.options.md) : this.options.items
                        },
                        1140: {
                            items: this.options.items ? Number(this.options.items) : 1
                        }
                    }
                })
            }, a._get = function() {
                return this._add()
            }, i._init = function() {
                new i(this)._get()
            }, n(i, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), i
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(m).forEach(function(t) {
            g._init.call(t)
        })
    });
    var v = "ya-disqus",
        y = "[" + v + "]",
        b = function(t) {
            function e(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(v), i
            }
            return o(e, t), e.prototype._get = function() {
                return this.disqus(y)
            }, e._init = function() {
                new e(this)._get()
            }, n(e, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), e
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(y).forEach(function(t) {
            b._init.call(t)
        })
    });
    var w = "ya-embed",
        E = "[" + w + "]",
        A = "ya-title",
        M = "ya-length",
        L = {
            ITEM: "embed-item",
            TITLE: "embed-title",
            LENGTH: "embed-length"
        },
        S = {
            EMBED: ".embed",
            CAPTION: ".embed-caption",
            IFRAME: "." + L.EMBED_ITEM
        },
        C = function(t) {
            function e(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(w), i._title = e.getAttribute(A), i._length = e.getAttribute(M), i._item = e.querySelector("img"), i._embed = e.querySelector(S.EMBED), i._iframe = e.querySelector(S.IFRAME), i
            }
            o(e, t);
            var i = e.prototype;
            return i.caption = function() {
                var t = document.createElement("div");
                if (t.className = "embed-caption", this._element.appendChild(t), this._title) {
                    var e = document.createElement("div");
                    e.className = L.TITLE, e.innerText = this._title, t.appendChild(e)
                }
                if (this._length) {
                    var i = document.createElement("div");
                    i.className = L.LENGTH, i.innerText = this._length, t.appendChild(i)
                }
            }, i._set = function() {
                return this._item.classList.add(L.ITEM), this._element.classList.add("embed", "embed-responsive", "embed-responsive-16by9"), (this._title || this._length) && this.caption(), !0
            }, i._remove = function() {
                return this._item.classList.add("animated", "fadeOut"), (this._title || this._length) && this._element.querySelector(S.CAPTION).classList.add("animated", "fadeOut"), !0
            }, i._add = function(t) {
                var e = document.createElement("iframe");
                return e.className = L.ITEM, e.src = this.video(t), this._element.classList.add("play"), this._remove(), this._element.appendChild(e)
            }, i._get = function() {
                var t = this;
                this._set(), this._element.addEventListener("click", function(e) {
                    return e.preventDefault(), t._add(t._element)
                }, !1)
            }, e._init = function() {
                new e(this)._get()
            }, n(e, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), e
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(E).forEach(function(t) {
            C._init.call(t)
        })
    });
    var k = function(t) {
        function e(e) {
            var i;
            return (i = t.call(this) || this)._element = e, i
        }
        return o(e, t), e.prototype._get = function() {
            return this.facebook("[ya-facebook]")
        }, e._init = function() {
            new e(this)._get()
        }, n(e, null, [{
            key: "VERSION",
            get: function() {
                return "1.0.0"
            }
        }]), e
    }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("[ya-facebook]").forEach(function(t) {
            k._init.call(t)
        })
    });
    var I = function() {
        function t() {}
        var i = t.prototype;
        return i._bootstrap = function() {
            e('[data-toggle="tooltip"]').tooltip(), e('[data-toggle="popover"]').popover()
        }, i._load = function() {
            this._bootstrap()
        },  t._init = function() {
            (new t)._load()
        }, t
    }();
    document.addEventListener("DOMContentLoaded", function() {
        I._init.call()
    });
    
    var R = "ya-lightbox",
        T = "[" + R + "]",
        H = {
            LIGHTBOX: R,
            BACKDROP: R + "-backdrop",
            CLOSE: R + "-close",
            BODY: R + "-body",
            IFRAME: "embed-responsive embed-responsive-16by9",
            IFRAME_ITEM: "embed-responsive-item",
            IMAGE: R + "-img",
            ITEM: R + "-item",
            FACEBOOK: "ya-facebook",
            DISQUS: "ya-disqus"
        },
        V = function(t) {
            function i(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute("href"), i._data = e.getAttribute(R), i._rel = e.getAttribute("rel"), i
            }
            o(i, t);
            var a = i.prototype;
            return a._add = function(t) {
                var e = this,
                    i = this._attr.includes("youtube.com/watch"),
                    n = this._attr.includes("twitch"),
                    o = document.createElement("div");
                return o.backdrop = document.createElement("div"), o.body = document.createElement("div"), o.item = document.createElement("div"), o.close = document.createElement("div"), o.className = H.LIGHTBOX, o.body.className = H.BODY, o.close.className = H.CLOSE, o.backdrop.className = H.BACKDROP, o.body.classList.add("animated", "fast", "fadeIn", "animate1"), o.backdrop.classList.add("animated", "fadeIn", "fast"), document.body.appendChild(o), o.appendChild(o.body), o.item.appendChild(o.close), o.appendChild(o.backdrop), this._rel ? this._gallery(o) : i || n ? this._video(o, t) : this._image(o), this._data && (this.loopArray(this._data, this.options), o.option = this.options, (o.option.disqus || o.option.facebook) && this._comments(o)), o.item.addEventListener("click", function(t) {
                    return t.preventDefault(), o.element.contains(t.target) || o.carousel && (o.element.contains(t.target) || o.carousel.contains(t.target)) || e._remove(o), !1
                }, !1), !0
            }, a._gallery = function(t) {
                var i = this;
                return t.item.className = H.ITEM + " ya-lightbox-gallery", t.element = document.createElement("img"), t.element.className = H.IMAGE, t.element.src = this._attr, t.carousel = document.createElement("div"), t.carousel.className = "owl-carousel owl-carousel-theme", t.body.appendChild(t.item), t.item.appendChild(t.carousel), t.carousel.appendChild(t.element), document.querySelectorAll(T + "[rel=" + this._rel + "]").forEach(function(e) {
                    i._attr !== e.getAttribute("href") && (t.element = document.createElement("img"), t.element.className = H.IMAGE, t.element.src = e.getAttribute("href"), t.carousel.appendChild(t.element))
                }), e(".owl-carousel-theme").owlCarousel({
                    loop: !0,
                    nav: !0,
                    items: 1
                }), !0
            }, a._video = function(t, e) {
                return t.item.className = H.ITEM, t.element = document.createElement("iframe"), t.element.className = H.IFRAME_ITEM, t.element.src = this.video(e), t.embed = document.createElement("div"), t.embed.className = H.IFRAME, t.body.appendChild(t.item), t.item.appendChild(t.embed), t.embed.appendChild(t.element), !0
            }, a._image = function(t) {
                return t.item.className = H.ITEM, t.element = document.createElement("img"), t.element.className = H.IMAGE, t.element.src = this._attr, t.body.appendChild(t.item), t.item.appendChild(t.element), !0
            }, a._comments = function(t) {
                return t.item.classList.add("ya-lightbox-comment"), t.comments = document.createElement("div"), t.comments.className = "ya-lightbox-comments", t.comment = document.createElement("div"), t.body.appendChild(t.comments), t.option.disqus && (t.comment.id = "disqus_thread", t.comment.setAttribute(H.DISQUS, ""), t.comments.appendChild(t.comment), this.disqus("[" + H.DISQUS + "]")), t.option.facebook && (t.comment.className = "fb-comments", t.comment.setAttribute(H.FACEBOOK, ""), t.comment.setAttribute("data-width", "100%"), t.comment.setAttribute("data-numposts", "10"), t.comments.appendChild(t.comment), this.facebook("[" + H.FACEBOOK + "]")), !0
            }, a._remove = function(t) {
                return document.body.removeChild(t)
            }, a._get = function() {
                var t = this;
                this._element.addEventListener("click", function(e) {
                    e.preventDefault(), t._add(t._element)
                }, !1)
            }, i._init = function() {
                new i(this)._get()
            }, n(i, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), i
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(T).forEach(function(t) {
            V._init.call(t)
        })
    });
    var F = {
            NAVBAR: ".navbar",
            SEARCH: ".navbar-search",
            ICON: ".toggle-search",
            CLOSE: ".search-close"
        },
        z = function() {
            function t() {
                this._element = document.querySelector(F.SEARCH), this._close = document.querySelector(F.CLOSE), this._icon = document.querySelector(F.ICON)
            }
            var i = t.prototype;
            return i._fix = function() {
                e(".dropdown-lg").on("hide.bs.dropdown", function() {
                    // document.querySelector(".owl-carousel").classList.add("owl-hide")
                }), e(".dropdown-lg").on("show.bs.dropdown", function() {
                    // document.querySelector(".owl-carousel").classList.remove("owl-hide")
                })
            }, i._hover = function() {
                e(".dropdown > .dropdown-menu > .dropdown").hover(function() {
                    e(this).toggleClass("show")
                }), e(".dropdown > .dropdown-menu > .dropdown > .dropdown-item").click(function(t) {
                    return t.preventDefault(), !1
                })
            }, i._toggle = function() {
                return this._element.classList.toggle("active")
            }, i._remove = function() {
                return this._element.classList.remove("active")
            }, i._get = function() {
                var t = this;
                this._icon && (this._icon.addEventListener("click", function(e) {
                    e.preventDefault(), t._toggle()
                }, !1), this._close.addEventListener("click", function(e) {
                    e.preventDefault(), t._remove()
                }, !1)), this._fix(), this._hover()
            }, t._init = function() {
                new t(this)._get()
            }, n(t, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), t
        }();
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(F.NAVBAR).forEach(function(t) {
            z._init.call(t)
        })
    });
    var G = "ya-notify",
        j = "[" + G + "]",
        P = "ya-title",
        U = function(t) {
            function e(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(G), i._title = e.getAttribute(P), i
            }
            o(e, t);
            var i = e.prototype;
            return i._remove = function(t) {
                var e = 4e3;
                setTimeout(function() {
                    t.classList.remove("fadeInDown"), t.classList.add("fadeOutUp")
                }, 3e3), setTimeout(function() {
                    document.body.removeChild(t)
                }, e)
            }, i._option = function() {
                return this._attr && this.loopArray(this._attr, this.options), this.options
            }, i._set = function(t, e) {
                this._option(), this.options.align && t.classList.add("notify-" + this.options.align), this.options.alert && (e.classList.remove("alert-darken-primary"), e.classList.add("alert-darken-" + this.options.alert))
            }, i._add = function() {
                var t = document.createElement("div"),
                    e = document.createElement("div"),
                    i = document.createTextNode(this._title);
                t.classList.add("notify", "animated", "fadeInDown", "fast"), e.classList.add("alert", "alert-darken-primary"), document.body.appendChild(t), t.appendChild(e), e.appendChild(i), this._set(t, e), this._remove(t)
            }, i._get = function() {
                var t = this;
                this._element.addEventListener("click", function(e) {
                    e.preventDefault(), t._add(t._element)
                }, !1)
            }, e._init = function() {
                new e(this)._get()
            }, n(e, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), e
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(j).forEach(function(t) {
            U._init.call(t)
        })
    });
    var K = {
            VALUE: "aria-valuenow",
            BAR: ".progress-bar"
        },
        Q = function() {
            function t(t) {
                this._element = t, this._bar = t.querySelector(K.BAR), this._value = this._bar.getAttribute(K.VALUE)
            }
            return t.prototype._get = function() {
                var t = this,
                    e = 0;
                return setInterval(function(i) {
                    e >= t._value ? clearInterval(i) : (e += 1, t._bar.style.setProperty("width", e + "%"))
                }, 0), !0
            }, t._init = function() {
                new t(this)._get()
            }, n(t, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), t
        }();
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".progress-loaded").forEach(function(t) {
            Q._init.call(t)
        })
    });
    var W = "ya-sticky",
        X = "[" + W + "]",
        Y = function(t) {
            function i(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(W), i._top = document.querySelector(".site-header").offsetHeight, i._zindex = 7, i
            }
            o(i, t);
            var a = i.prototype;
            return a._option = function() {
                return this._attr && this.loopArray(this._attr, this.options), this.options
            }, a._set = function() {
                return e(this._element).sticky({
                    topSpacing: this.options.top ? Number(this.options.top) : this._top,
                    bottomSpacing: this.options.bottom ? Number(this.options.bottom) : "",
                    zIndex: this.options.zindex ? Number(this.options.zindex) : this._zindex
                })
            }, a._get = function() {
                return this._option(), this._set(), !0
            }, i._init = function() {
                new i(this)._get()
            }, n(i, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), i
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(X).forEach(function(t) {
            Y._init.call(t)
        })
    });
    var J = "ya-style",
        $ = "[" + J + "]",
        tt = function(t) {
            function e(e) {
                var i;
                return (i = t.call(this) || this)._element = e, i._attr = e.getAttribute(J), i.option = [], i
            }
            o(e, t);
            var i = e.prototype;
            return i._set = function(t) {
                var e = t["background-color"] ? "background-color: " + t["background-color"] + " !important;" : "";
                return (t.height ? "height: " + t.height + " !important;" : "") + e + (t.opacity ? "opacity: " + t.opacity + " !important;" : "") + (t["border-color"] ? "border-color: " + t["border-color"] + ";" : " ")
            }, i._get = function() {
                this.loopArray(this._attr, this.option), this._element.style.cssText = this._set(this.option), this._element.removeAttribute(J)
            }, e._init = function() {
                new e(this)._get()
            }, n(e, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), e
        }(a);
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll($).forEach(function(t) {
            tt._init.call(t)
        })
    });
    var et = "ya-svg",
        it = "[" + et + "]",
        nt = function() {
            function t(t) {
                this._element = t, this._attr = t.getAttribute(et)
            }
            return t.prototype._get = function() {
                return this._attr && (this._element.innerHTML = {
                    divider: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path  d="M0,6V0h1000v100L0,6z"></path></svg>',
                    chat: '<svg viewBox="0 0 48 48" width="48" height="48"><g><path d="M45,3H3A2,2,0,0,0,1,5V35a2,2,0,0,0,2,2h8v9a1,1,0,0,0,1,1,.988.988,0,0,0,.581-.187L26.32,37H45a2,2,0,0,0,2-2V5A2,2,0,0,0,45,3Z" fill="#ea9860"></path> <path d="M21,29H8a1,1,0,0,1,0-2H21a1,1,0,0,1,0,2Z" fill="#fff"></path> <path d="M40,29H27a1,1,0,0,1,0-2H40a1,1,0,0,1,0,2Z" fill="#fff"></path> <path d="M30,23H8a1,1,0,0,1,0-2H30a1,1,0,0,1,0,2Z" fill="#fff"></path> <path d="M40,23H36a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z" fill="#fff"></path></g></svg>',
                    article: '<svg viewBox="0 0 48 48" width="48" height="48"><g><path fill="#444444" d="M45,45H3c-1.105,0-2-0.895-2-2V5c0-1.105,0.895-2,2-2h42c1.105,0,2,0.895,2,2v38C47,44.105,46.105,45,45,45z "></path> <rect x="3" y="10" fill="#FFFFFF" width="42" height="33"></rect> <circle fill="#E86C60" cx="4.5" cy="6.5" r="1.5"></circle> <circle fill="#EFD358" cx="9.5" cy="6.5" r="1.5"></circle> <circle fill="#72C472" cx="14.5" cy="6.5" r="1.5"></circle> <path fill="#43A6DD" d="M20,28H8c-0.552,0-1-0.447-1-1V15c0-0.553,0.448-1,1-1h12c0.552,0,1,0.447,1,1v12C21,27.553,20.552,28,20,28 z"></path> <path fill="#B3B3B3" d="M40,16H26c-0.552,0-1-0.447-1-1s0.448-1,1-1h14c0.552,0,1,0.447,1,1S40.552,16,40,16z"></path> <path fill="#B3B3B3" d="M40,22H26c-0.552,0-1-0.447-1-1s0.448-1,1-1h14c0.552,0,1,0.447,1,1S40.552,22,40,22z"></path> <path fill="#B3B3B3" d="M40,33H8c-0.552,0-1-0.447-1-1s0.448-1,1-1h32c0.552,0,1,0.447,1,1S40.552,33,40,33z"></path> <path fill="#B3B3B3" d="M32,39H8c-0.552,0-1-0.447-1-1s0.448-1,1-1h24c0.552,0,1,0.447,1,1S32.552,39,32,39z"></path> <path fill="#B3B3B3" d="M35,28h-9c-0.552,0-1-0.447-1-1s0.448-1,1-1h9c0.552,0,1,0.447,1,1S35.552,28,35,28z"></path></g></svg>',
                    monkey: '<svg viewBox="0 0 48 48" width="48" height="48"><g><circle cx="8" cy="20" r="7" fill="#ead8c5"></circle> <path d="M8,28a8,8,0,1,1,8-8A8.009,8.009,0,0,1,8,28ZM8,14a6,6,0,1,0,6,6A6.006,6.006,0,0,0,8,14Z" fill="#87613e"></path> <circle cx="40" cy="20" r="7" fill="#ead8c5"></circle> <path d="M40,28a8,8,0,1,1,8-8A8.009,8.009,0,0,1,40,28Zm0-14a6,6,0,1,0,6,6A6.006,6.006,0,0,0,40,14Z" fill="#87613e"></path> <path d="M24,44A20,20,0,1,1,44,24,20.023,20.023,0,0,1,24,44Z" fill="#87613e"></path> <path d="M24,41A12,12,0,1,1,36,29,12.013,12.013,0,0,1,24,41Z" fill="#ead8c5"></path> <path d="M17,28a8,8,0,1,1,8-8A8.009,8.009,0,0,1,17,28Z" fill="#ead8c5"></path> <path d="M31,28a8,8,0,1,1,8-8A8.009,8.009,0,0,1,31,28Z" fill="#ead8c5"></path> <path d="M17,23a3,3,0,1,1,3-3A3,3,0,0,1,17,23Z" fill="#444"></path> <path d="M31,23a3,3,0,1,1,3-3A3,3,0,0,1,31,23Z" fill="#444"></path> <path d="M21,7a8.277,8.277,0,0,1,8-7c-2,1-1,6-1,6Z" fill="#87613e"></path> <circle cx="22" cy="25" r="1" fill="#c6a279"></circle> <circle cx="26" cy="25" r="1" fill="#c6a279"></circle> <path d="M36,47a4.975,4.975,0,0,1-2.476-.66l-7-4a5,5,0,1,1,4.96-8.682l7,4A5,5,0,0,1,36,47Z" fill="#a67c52"></path> <path d="M12.005,47A5,5,0,0,1,9.52,37.659l7-4a5,5,0,0,1,4.96,8.682l-7,4A4.974,4.974,0,0,1,12.005,47Z" fill="#a67c52"></path> <path d="M26.479,36.451l4.952-1.829a1.44,1.44,0,0,0-1-2.7L25.481,33.75a.959.959,0,1,1-.665-1.8l4.051-1.5a1.44,1.44,0,0,0-1-2.7L19.78,30.741l1.193-2.591a1.92,1.92,0,1,0-3.487-1.606s-3.754,8.183-4.018,8.762a5.986,5.986,0,0,0-.327,3.663,6.246,6.246,0,0,0,8.249,4.479l10.8-3.992a1.44,1.44,0,0,0-1-2.7l-4.052,1.5a.96.96,0,0,1-.665-1.8Z" fill="#e5a57a"></path> <path d="M21.521,36.451l-4.952-1.829a1.44,1.44,0,0,1,1-2.7l4.952,1.829a.959.959,0,1,0,.665-1.8l-4.051-1.5a1.44,1.44,0,0,1,1-2.7l8.089,2.989L27.027,28.15a1.92,1.92,0,1,1,3.487-1.606s3.754,8.183,4.018,8.762a5.986,5.986,0,0,1,.327,3.663,6.246,6.246,0,0,1-8.249,4.479l-10.8-3.992a1.44,1.44,0,0,1,1-2.7l4.052,1.5a.96.96,0,1,0,.665-1.8Z" fill="#eebc99"></path></g></svg>',
                    awesome: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48"><g><path d="M24,46A22,22,0,1,1,46,24,22.025,22.025,0,0,1,24,46Z" fill="#ffd764"/> <path d="M12,25a1,1,0,0,1-.707-1.707l6-6a1,1,0,0,1,1.414,1.414l-6,6A1,1,0,0,1,12,25Z" fill="#444"/><path d="M18,25a1,1,0,0,1-.707-.293l-6-6a1,1,0,0,1,1.414-1.414l6,6A1,1,0,0,1,18,25Z" fill="#444"/> <path d="M36,25a1,1,0,0,0,.707-1.707l-6-6a1,1,0,0,0-1.414,1.414l6,6A1,1,0,0,0,36,25Z" fill="#444"/><path d="M30,25a1,1,0,0,0,.707-.293l6-6a1,1,0,0,0-1.414-1.414l-6,6A1,1,0,0,0,30,25Z" fill="#444"/> <path d="M24,39a5,5,0,1,1,5-5A5.006,5.006,0,0,1,24,39Z" fill="#ae453e"/><ellipse cx="24" cy="37" rx="3.974" ry="2" fill="#fa645a"/></g></svg>',
                    like: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48"><g><path d="M24,46A22,22,0,1,1,46,24,22.025,22.025,0,0,1,24,46Z" fill="#ffd764"/> <circle cx="38" cy="28" r="3" fill="#e86c60" opacity="0.5"/> <circle cx="10" cy="28" r="3" fill="#e86c60" opacity="0.5"/> <path d="M19,24a1,1,0,0,1-1-1,2,2,0,0,0-4,0,1,1,0,0,1-2,0,4,4,0,0,1,8,0A1,1,0,0,1,19,24Z" fill="#444"/> <path d="M35,24a1,1,0,0,1-1-1,2,2,0,0,0-4,0,1,1,0,0,1-2,0,4,4,0,0,1,8,0A1,1,0,0,1,35,24Z" fill="#444"/> <path d="M24.059,39a9.025,9.025,0,0,1-7.81-4.537,1,1,0,0,1,1.736-.994,6.989,6.989,0,0,0,12.147,0,1,1,0,0,1,1.736.994A9.024,9.024,0,0,1,24.059,39Z" fill="#444"/></g></svg>',
                    sick: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48"><g><path d="M24,46A22,22,0,1,1,46,24,22.025,22.025,0,0,1,24,46Z" fill="#ffd764"/> <path d="M12,25a1,1,0,0,1-.448-1.895L15.764,21,11.553,18.9a1,1,0,0,1,.894-1.79l6,3a1,1,0,0,1,0,1.79l-6,3A1,1,0,0,1,12,25Z" fill="#444"/> <path d="M36,25a1,1,0,0,1-.446-.105l-6-3a1,1,0,0,1,0-1.79l6-3a1,1,0,1,1,.894,1.79L32.236,21l4.211,2.105A1,1,0,0,1,36,25Z" fill="#444"/> <path d="M40,42a3.97,3.97,0,0,0-2.666,1.04,6.978,6.978,0,0,0-11.551-1.691,5.97,5.97,0,0,0-7.283-.213,5.978,5.978,0,0,0-8.433,1.457A3.954,3.954,0,0,0,8,42a4,4,0,0,0-4,4H44A4,4,0,0,0,40,42Z" fill="#72c472"/> <circle cx="38" cy="36" r="2" fill="#72c472"/> <circle cx="11.5" cy="37.5" r="1.5" fill="#72c472"/> <path d="M14.134,30H33.866c-1.76-1.809-5.421-3-9.866-3S15.894,28.191,14.134,30Z" fill="#fff"/> <path d="M14.134,30A3.579,3.579,0,0,0,13,32.5c0,3.136,4.729,5.5,11,5.5s11-2.364,11-5.5A3.579,3.579,0,0,0,33.866,30Z" fill="#ae453e"/> <path d="M18,30V43a1,1,0,0,0,1,1H29a1,1,0,0,0,1-1V30Z" fill="#72c472"/></g></svg>',
                    angry: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48"><g><path d="M24,46A22,22,0,1,1,46,24,22.025,22.025,0,0,1,24,46Z" fill="#e86c60"/> <circle cx="33" cy="25" r="3" fill="#444"/> <circle cx="15" cy="25" r="3" fill="#444"/> <path d="M17.292,37a1,1,0,0,1-.745-1.667,10,10,0,0,1,14.906,0,1,1,0,1,1-1.49,1.334,8,8,0,0,0-11.926,0A1,1,0,0,1,17.292,37Z" fill="#444"/> <path d="M30,21a1,1,0,0,1-.516-1.857l5-3a1,1,0,0,1,1.03,1.714l-5,3A.994.994,0,0,1,30,21Z" fill="#444"/> <path d="M18,21a.994.994,0,0,1-.514-.143l-5-3a1,1,0,0,1,1.03-1.714l5,3A1,1,0,0,1,18,21Z" fill="#444"/></g></svg>'
                }[this._attr]), !0
            }, t._init = function() {
                new t(this)._get()
            }, n(t, null, [{
                key: "VERSION",
                get: function() {
                    return "1.0.0"
                }
            }]), t
        }();
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(it).forEach(function(t) {
            nt._init.call(t)
        })
    }), t.Background = h, t.Carousel = g, t.Disqus = b, t.Embed = C, t.Facebook = k, t.Help = I, t.Lightbox = V, t.Navbar = z, t.Notify = U, t.Progress = Q, t.Sticky = Y, t.Style = tt, t.Svg = nt, Object.defineProperty(t, "__esModule", {
        value: !0
    })
});