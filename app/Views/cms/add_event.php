<html lang="zxx">

<head>
    <script id="debugbar_loader" data-time="1751627225.993754" src="http://localhost/NahataSports/?debugbar"></script>
    <script id="debugbar_dynamic_script"></script>
    <style id="debugbar_dynamic_style"></style>
    <script class="kint-rich-script">
    "use strict";
    (() => {
        function m(n) {
            if (!(n instanceof Element)) throw new Error("Invalid argument to dedupeElement()");
            let t = n.ownerDocument,
                e = E(n);
            for (let s of t.querySelectorAll(e)) n !== s && s.parentNode.removeChild(s)
        }

        function d(n) {
            return n instanceof Element ? n.ownerDocument.contains(n) : !1
        }

        function E(n) {
            if (!(n instanceof Element)) throw new Error("Invalid argument to buildClassSelector()");
            return [n.nodeName, ...n.classList].join(".")
        }

        function f(n) {
            if (!(n instanceof Element)) throw new Error("Invalid argument to selectText()");
            let t = n.ownerDocument,
                e = t.getSelection(),
                s = t.createRange();
            s.selectNodeContents(n), e.removeAllRanges(), e.addRange(s)
        }

        function I(n, t) {
            let e;
            return function(...s) {
                clearTimeout(e), e = setTimeout(function() {
                    n(...s)
                }, t)
            }
        }

        function x(n) {
            if (!(n instanceof Element)) throw new Error("Invalid argument to offsetTop()");
            return n.offsetTop + (n.offsetParent ? x(n.offsetParent) : 0)
        }
        var u = class n {
            static #e = new Set;
            static toggleSearchBox(t, e) {
                let s = t.querySelector(".kint-search"),
                    i = t.parentNode;
                if (s)
                    if (s.classList.toggle("kint-show", e)) {
                        if (s.focus(), s.select(), !n.#e.has(s)) {
                            let r = i.querySelectorAll("dl").length,
                                o = 200;
                            r > 1e4 && (o = 700), s.addEventListener("keyup", I(n.#t.bind(null, s), o)), n
                                .#e.add(s)
                        }
                        n.#t(s)
                    } else i.classList.remove("kint-search-root")
            }
            static #t(t) {
                let e = t.closest(".kint-parent")?.parentNode;
                if (e)
                    if (t.classList.contains("kint-show") && t.value.length) {
                        let s = e.dataset.lastSearch;
                        if (e.classList.add("kint-search-root"), s !== t.value) {
                            e.dataset.lastSearch = t.value, e.classList.remove("kint-search-match");
                            for (let i of e.querySelectorAll(".kint-search-match")) i.classList.remove(
                                "kint-search-match");
                            n.#s(e, t.value.toUpperCase())
                        }
                    } else e.classList.remove("kint-search-root")
            }
            static #s(t, e) {
                let s = t.cloneNode(!0);
                for (let c of s.querySelectorAll(".access-path")) c.remove();
                if (!s.textContent.toUpperCase().includes(e)) return;
                t.classList.add("kint-search-match");
                let i = t.firstElementChild;
                for (; i && i.tagName !== "DT";) i = i.nextElementSibling;
                if (!i) return;
                let r = a.getChildContainer(i);
                if (!r) return;
                let o, l;
                for (let c of r.children) c.tagName === "DL" ? n.#s(c, e) : c.tagName === "UL" && (c
                    .classList.contains("kint-tabs") ? o = c.children : c.classList.contains(
                        "kint-tab-contents") && (l = c.children));
                if (!(!o || o.length !== l?.length))
                    for (let c = o.length; c--;) {
                        let k = !1,
                            F = !1;
                        o[c].textContent.toUpperCase().includes(e) && (k = !0);
                        let O = l[c].cloneNode(!0);
                        for (let v of O.querySelectorAll(".access-path")) v.remove();
                        if (O.textContent.toUpperCase().includes(e) && (k = !0, F = !0), k && o[c].classList
                            .add("kint-search-match"), F)
                            for (let v of l[c].children) v.tagName === "DL" && n.#s(v, e)
                    }
            }
        };
        var g = class {
            static sort(t, e) {
                let s = t.dataset.kintTableSort,
                    i = parseInt(s) === e ? -1 : 1,
                    r = t.tBodies[0];
                [...r.rows].sort(function(o, l) {
                        o = o.cells[e].textContent.trim().toLocaleLowerCase(), l = l.cells[e]
                            .textContent.trim().toLocaleLowerCase();
                        let c = 0;
                        return !isNaN(o) && !isNaN(l) ? (o = parseFloat(o), l = parseFloat(l), c = o -
                                l) : isNaN(o) && !isNaN(l) ? c = 1 : isNaN(l) && !isNaN(o) ? c = -1 :
                            c = ("" + o).localeCompare("" + l), c * i
                    }).forEach(o => r.appendChild(o)), i < 0 ? t.dataset.kintTableSort = null : t.dataset
                    .kintTableSort = e
            }
        };
        var a = class n {
                #e;
                #t;
                #s;
                constructor(t) {
                    if (!(t instanceof h)) throw new Error("Invalid argument to Rich.constructor()");
                    this.#e = t, this.#e.runOnInit(this.#i.bind(this));
                    let e = new q(this, t);
                    new b(this, t.window, e)
                }
                #i() {
                    let t = this.#e.window.document;
                    if (d(this.#t) || (this.#t = t.querySelector("style.kint-rich-style")), this.#t && m(this
                            .#t), t.querySelector(".kint-rich.kint-file")) {
                        this.setupFolder(t);
                        let e = this.#s.querySelector("dd.kint-foldout"),
                            s = Array.from(t.querySelectorAll(".kint-rich.kint-file"));
                        for (let i of s) i.parentNode !== e && e.appendChild(i);
                        this.#s.classList.add("kint-show")
                    }
                }
                addToFolder(t) {
                    let e = t.closest(".kint-rich");
                    if (!e) throw new Error("Bad addToFolder");
                    let s = this.#e.window.document;
                    if (this.setupFolder(s), this.folder.contains(t)) throw new Error("Bad addToFolder");
                    let i = this.#s.querySelector("dd.kint-foldout"),
                        r = t.closest(".kint-parent, .kint-rich"),
                        o = Array.from(e.querySelectorAll(".kint-folder-trigger"));
                    if (e === r || e.querySelectorAll(".kint-rich > dl").length === 1) {
                        for (let l of o) l.remove();
                        e.classList.add("kint-file"), i.insertBefore(e, i.firstChild)
                    } else {
                        let l = s.createElement("div");
                        l.classList.add("kint-rich"), l.classList.add("kint-file"), l.appendChild(r.closest(
                            ".kint-rich > dl"));
                        let c = e.lastElementChild;
                        c.matches(".kint-rich > footer") && l.appendChild(c.cloneNode(!0));
                        for (let k of o) k.remove();
                        i.insertBefore(l, i.firstChild)
                    }
                    n.toggle(this.#s.querySelector(".kint-parent"), !0)
                }
                setupFolder(t) {
                    if (this.#s) d(this.#s) || (this.#s = t.querySelector(".kint-rich.kint-folder"));
                    else {
                        let e = t.createElement("template");
                        e.innerHTML =
                            '<div class="kint-rich kint-folder"><dl><dt class="kint-parent"><nav></nav>Kint</dt><dd class="kint-foldout"></dd></dl></div>',
                            this.#s = e.content.firstChild, t.body.appendChild(this.#s)
                    }
                }
                get folder() {
                    return d(this.#s) || (this.#s = this.#e.window.document.querySelector(
                        ".kint-rich.kint-folder")), this.#s && m(this.#s), this.#s
                }
                isFolderOpen() {
                    let t = this.#s?.querySelector("dd.kint-foldout");
                    if (t) return t.previousSibling.classList.contains("kint-show")
                }
                static getChildContainer(t) {
                    let e = t.nextElementSibling;
                    for (; e && !e.matches("dd");) e = e.nextElementSibling;
                    return e
                }
                static toggle(t, e) {
                    let s = n.getChildContainer(t);
                    s && (e = t.classList.toggle("kint-show", e), n.#n(s, e))
                }
                static switchTab(t) {
                    t.parentNode.getElementsByClassName("kint-active-tab")[0].classList.remove(
                        "kint-active-tab"), t.classList.add("kint-active-tab");
                    let e = t,
                        s = 0;
                    for (; e = e.previousElementSibling;) s++;
                    let i = t.parentNode.nextSibling.children;
                    for (let r = i.length; r--;) r === s ? (i[r].classList.add("kint-show"), n.#n(i[r], !0)) :
                        i[r].classList.remove("kint-show")
                }
                static toggleChildren(t, e) {
                    let s = n.getChildContainer(t);
                    if (!s) return;
                    e === void 0 && (e = t.classList.contains("kint-show"));
                    let i = Array.from(s.getElementsByClassName("kint-parent"));
                    for (let r of i) r.classList.toggle("kint-show", e)
                }
                static toggleAccessPath(t, e) {
                    let s = t.querySelector(".access-path");
                    s?.classList.toggle("kint-show", e) && f(s)
                }
                static #n(t, e) {
                    if (t.children.length === 2 && t.lastElementChild.matches("ul.kint-tab-contents"))
                        for (let s of t.lastElementChild.children) s.matches("li.kint-show") && (t = s);
                    if (t.children.length === 1 && t.firstElementChild.matches("dl")) {
                        let s = t.firstElementChild.firstElementChild;
                        s?.classList?.contains("kint-parent") && n.toggle(s, e)
                    }
                }
            },
            b = class {
                #e;
                #t;
                #s;
                #i = null;
                #n = null;
                #o = 0;
                constructor(t, e, s) {
                    this.#e = t, this.#t = s, this.#s = e, this.#s.addEventListener("click", this.#a.bind(this),
                        !0)
                }
                #r() {
                    clearTimeout(this.#i), this.#i = setTimeout(this.#l.bind(this), 250)
                }
                #l() {
                    clearTimeout(this.#i), this.#i = null, this.#n = null, this.#o = 0
                }
                #c() {
                    let t = this.#n;
                    if (!t.matches(".kint-parent > nav")) return;
                    let e = t.parentNode;
                    if (this.#o === 1) a.toggleChildren(e), this.#t.onTreeChanged(), this.#r(), this.#o = 2;
                    else if (this.#o === 2) {
                        this.#l();
                        let s = e.classList.contains("kint-show"),
                            i = this.#e.folder?.querySelector(".kint-parent"),
                            r = Array.from(this.#s.document.getElementsByClassName("kint-parent"));
                        for (let o of r) o !== i && o.classList.toggle("kint-show", s);
                        this.#t.onTreeChanged(), this.#t.scrollToFocus()
                    }
                }
                #a(t) {
                    if (this.#o) {
                        this.#c();
                        return
                    }
                    let e = t.target;
                    if (!e.closest(".kint-rich")) return;
                    if (e.tagName === "DFN" && f(e), e.tagName === "TH") {
                        t.ctrlKey || g.sort(e.closest("table"), e.cellIndex);
                        return
                    }
                    if (e.tagName === "LI" && e.parentNode.className === "kint-tabs") {
                        if (e.className !== "kint-active-tab") {
                            let i = e.closest("dl")?.querySelector(".kint-parent > nav") ?? e;
                            a.switchTab(e), this.#t.onTreeChanged(), this.#t.setCursor(i)
                        }
                        return
                    }
                    let s = e.closest("dt");
                    if (e.tagName === "NAV") e.parentNode.tagName === "FOOTER" ? (this.#t.setCursor(e), e
                            .parentNode.classList.toggle("kint-show")) : s?.classList.contains("kint-parent") &&
                        (a.toggle(s), this.#t.onTreeChanged(), this.#t.setCursor(e), this.#r(), this.#o = 1,
                            this.#n = e);
                    else if (e.classList.contains("kint-access-path-trigger")) s && a.toggleAccessPath(s);
                    else if (e.classList.contains("kint-search-trigger")) s?.matches(
                        ".kint-rich > dl > dt.kint-parent") && u.toggleSearchBox(s);
                    else if (e.classList.contains("kint-folder-trigger")) {
                        if (s?.matches(".kint-rich > dl > dt.kint-parent")) this.#e.addToFolder(e), this.#t
                            .onTreeChanged(), this.#t.setCursor(s.querySelector("nav")), this.#t
                            .scrollToFocus();
                        else if (e.parentNode.tagName === "FOOTER") {
                            let i = e.closest(".kint-rich").querySelector(
                                ".kint-parent > nav, .kint-rich > footer > nav");
                            this.#e.addToFolder(e), this.#t.onTreeChanged(), this.#t.setCursor(i), this.#t
                                .scrollToFocus()
                        }
                    } else e.classList.contains("kint-search") || (e.tagName === "PRE" && t.detail === 3 ? f(
                            e) : e.closest(".kint-source") && t.detail === 3 ? f(e.closest(
                            ".kint-source")) : e
                        .classList.contains("access-path") ? f(e) : e.tagName !== "A" && s?.classList
                        .contains("kint-parent") && (a.toggle(s), this.#t.onTreeChanged(), this.#t
                            .setCursor(s.querySelector("nav"))))
                }
            },
            j = 65,
            G = 68,
            A = 70,
            S = 72,
            K = 74,
            D = 75,
            p = 76,
            V = 83,
            P = 9,
            T = 13,
            B = 27,
            L = 32,
            N = 37,
            R = 38,
            C = 39,
            H = 40,
            M =
            ".kint-rich .kint-parent > nav, .kint-rich > footer > nav, .kint-rich .kint-tabs > li:not(.kint-active-tab)",
            q = class {
                #e = [];
                #t = 0;
                #s = !1;
                #i;
                #n;
                constructor(t, e) {
                    this.#i = t, this.#n = e.window, this.#n.addEventListener("keydown", this.#c.bind(this), !
                        0), e.runOnInit(this.onTreeChanged.bind(this))
                }
                scrollToFocus() {
                    let t = this.#e[this.#t];
                    if (!t) return;
                    let e = this.#i.folder;
                    if (t === e?.querySelector(".kint-parent > nav")) return;
                    let s = x(t);
                    if (this.#i.isFolderOpen()) {
                        let i = e.querySelector("dd.kint-foldout");
                        i.scrollTo(0, s - i.clientHeight / 2)
                    } else this.#n.scrollTo(0, s - this.#n.innerHeight / 2)
                }
                onTreeChanged() {
                    let t = this.#e[this.#t];
                    this.#e = [];
                    let e = this.#i.folder,
                        s = e?.querySelector(".kint-parent > nav"),
                        i = this.#n.document;
                    this.#i.isFolderOpen() && (i = e, this.#e.push(s));
                    let r = Array.from(i.querySelectorAll(M));
                    for (let o of r) o.offsetParent !== null && o !== s && this.#e.push(o);
                    if (s && !this.#i.isFolderOpen() && this.#e.push(s), this.#e.length === 0) {
                        this.#s = !1, this.#r();
                        return
                    }
                    t && this.#e.indexOf(t) !== -1 ? this.#t = this.#e.indexOf(t) : this.#r()
                }
                setCursor(t) {
                    if (this.#i.isFolderOpen() && !this.#i.folder.contains(t) || !t.matches(M)) return !1;
                    let e = this.#e.indexOf(t);
                    if (e === -1 && (this.onTreeChanged(), e = this.#e.indexOf(t)), e !== -1) {
                        if (e !== this.#t) return this.#t = e, this.#r(), !0;
                        this.#e[e]?.classList.remove("kint-weak-focus")
                    } else console.error("setCursor failed to find target in list", t), console.info(
                        "Please report this as a bug in Kint at https://github.com/kint-php/kint");
                    return !1
                }
                #o(t) {
                    if (this.#e.length === 0) return this.#t = 0, null;
                    for (this.#t += t; this.#t < 0;) this.#t += this.#e.length;
                    for (; this.#t >= this.#e.length;) this.#t -= this.#e.length;
                    return this.#r(), this.#t
                }
                #r() {
                    let t = this.#n.document.querySelector(".kint-focused");
                    t && (t.classList.remove("kint-focused"), t.classList.remove("kint-weak-focus")), this.#s &&
                        this.#e[this.#t]?.classList.add("kint-focused")
                }
                #l(t) {
                    let e = t.closest(".kint-rich .kint-parent ~ dd")?.parentNode.querySelector(
                        ".kint-parent > nav");
                    e && (this.setCursor(e), this.scrollToFocus())
                }
                #c(t) {
                    if (this.#s && t.keyCode === B && t.target.matches(".kint-search")) {
                        t.target.blur(), this.#r();
                        return
                    }
                    if (t.target !== this.#n.document.body || t.altKey || t.ctrlKey) return;
                    if (t.keyCode === G) {
                        if (this.#s) this.#s = !1;
                        else {
                            if (this.#s = !0, this.onTreeChanged(), this.#e.length === 0) {
                                this.#s = !1;
                                return
                            }
                            this.scrollToFocus()
                        }
                        this.#r(), t.preventDefault();
                        return
                    } else if (t.keyCode === B) {
                        this.#s && (this.#s = !1, this.#r(), t.preventDefault());
                        return
                    } else if (!this.#s) return;
                    t.preventDefault(), d(this.#e[this.#t]) || this.onTreeChanged();
                    let e = this.#e[this.#t];
                    if ([P, R, D, H, K].includes(t.keyCode)) {
                        t.keyCode === P ? this.#o(t.shiftKey ? -1 : 1) : t.keyCode === R || t.keyCode === D ?
                            this.#o(-1) : (t.keyCode === H || t.keyCode === K) && this.#o(1), this
                            .scrollToFocus();
                        return
                    }
                    if (e.tagName === "LI" && [L, T, C, p, N, S].includes(t.keyCode)) {
                        t.keyCode === L || t.keyCode === T ? (a.switchTab(e), this.onTreeChanged()) : t
                            .keyCode === C || t.keyCode === p ? this.#o(1) : (t.keyCode === N || t.keyCode ===
                                S) && this.#o(-1), this.scrollToFocus();
                        return
                    }
                    if (e.parentNode.tagName === "FOOTER" && e.closest(".kint-rich")) {
                        if (t.keyCode === L || t.keyCode === T) e.parentNode.classList.toggle("kint-show");
                        else if (t.keyCode === N || t.keyCode === S)
                            if (e.parentNode.classList.contains("kint-show")) e.parentNode.classList.remove(
                                "kint-show");
                            else {
                                this.#l(e.closest(".kint-rich"));
                                return
                            }
                        else if (t.keyCode === C || t.keyCode === p) e.parentNode.classList.add("kint-show");
                        else if (t.keyCode === A && !this.#i.isFolderOpen() && e.matches(
                                ".kint-rich > footer > nav")) {
                            let i = e.closest(".kint-rich").querySelector(
                                ".kint-parent > nav, .kint-rich > footer > nav");
                            this.#i.addToFolder(e), this.onTreeChanged(), this.setCursor(i), this
                                .scrollToFocus()
                        }
                        return
                    }
                    let s = e.closest(".kint-parent");
                    if (s) {
                        if (t.keyCode === j) {
                            a.toggleAccessPath(s);
                            return
                        }
                        if (t.keyCode === A) {
                            !this.#i.isFolderOpen() && s.matches(
                                ".kint-rich:not(.kint-folder) > dl > .kint-parent") && (this.#i.addToFolder(
                                e), this.onTreeChanged(), this.setCursor(e), this.scrollToFocus());
                            return
                        }
                        if (t.keyCode === V) {
                            let i = s.closest(".kint-rich > dl")?.querySelector(".kint-search")?.closest(
                                ".kint-parent");
                            if (i) {
                                e.classList.add("kint-weak-focus"), u.toggleSearchBox(i, !0);
                                return
                            }
                        }
                        if (t.keyCode === L || t.keyCode === T) {
                            a.toggle(s), this.onTreeChanged();
                            return
                        }
                        if ([C, p, N, S].includes(t.keyCode)) {
                            let i = s.classList.contains("kint-show");
                            if (t.keyCode === C || t.keyCode === p) {
                                i && a.toggleChildren(s, !0), a.toggle(s, !0), this.onTreeChanged();
                                return
                            } else if (i) {
                                a.toggleChildren(s, !1), a.toggle(s, !1), this.onTreeChanged();
                                return
                            } else {
                                this.#l(s);
                                return
                            }
                        }
                    }
                }
            };
        var y = class {
            #e;
            #t;
            constructor(t) {
                if (!(t instanceof h)) throw new Error("Invalid argument to Plain.constructor()");
                this.#e = t.window, t.runOnInit(this.#s.bind(this))
            }
            #s() {
                d(this.#t) || (this.#t = this.#e.document.querySelector("style.kint-plain-style")), this
                    .#t && m(this.#t)
            }
        };
        var w = class {
            #e;
            constructor(t) {
                if (!(t instanceof h)) throw new Error("Invalid argument to Microtime.constructor()");
                this.#e = t.window, t.runOnInit(this.#t.bind(this))
            }
            #t() {
                let t = {},
                    e = this.#e.document.querySelectorAll("[data-kint-microtime-group]");
                for (let s of e) {
                    let i = s.querySelector(".kint-microtime-lap");
                    if (!i) continue;
                    let r = s.dataset.kintMicrotimeGroup,
                        o = parseFloat(i.textContent),
                        l = parseFloat(s.querySelector(".kint-microtime-avg").textContent);
                    t[r] ?? = {
                        min: o,
                        max: o,
                        avg: l
                    }, t[r].min > o && (t[r].min = o), t[r].max < o && (t[r].max = o), t[r].avg = l
                }
                for (let s of e) {
                    let i = s.querySelector(".kint-microtime-lap");
                    if (!i) continue;
                    let r = parseFloat(i.textContent),
                        o = t[s.dataset.kintMicrotimeGroup];
                    if (s.querySelector(".kint-microtime-avg").textContent = o.avg, !(r === o.min && r === o
                            .max))
                        if (s.classList.add("kint-microtime-js"), r > o.avg) {
                            let l = (r - o.avg) / (o.max - o.avg);
                            i.style.background = "hsl(" + (40 - 40 * l) + ", 100%, 65%)"
                        } else {
                            let l = 0;
                            o.avg !== o.min && (l = (o.avg - r) / (o.avg - o.min)), i.style.background =
                                "hsl(" + (40 + 80 * l) + ", 100%, 65%)"
                        }
                }
            }
        };
        var U = Symbol(),
            h = class n {
                static #e = null;
                #t;
                #s = [];
                #i = new Set;
                static init(t) {
                    return n.#e ?? = new n(t, U), n.#e.#n(), n.#e.runOnLoad(n.#r), n.#e
                }
                get window() {
                    return this.#t
                }
                constructor(t, e) {
                    if (U !== e) throw new Error("Kint constructor is private. Use Kint.init()");
                    if (!(t instanceof Window)) throw new Error("Invalid argument to Kint.init()");
                    this.#t = t, this.runOnInit(this.#o.bind(this)), new y(this), new a(this), new w(this)
                }
                runOnLoad(t) {
                    if (this.#t.document.readyState === "complete") try {
                        t()
                    } catch {} else this.#t.addEventListener("load", t)
                }
                runOnInit(t) {
                    this.#s.push(t)
                }
                #n() {
                    this.#t.document.currentScript && (this.#i.add(E(window.document.currentScript)), window
                        .document.currentScript.remove())
                }
                #o() {
                    for (let t of this.#i.keys())
                        for (let e of this.#t.document.querySelectorAll(t)) e.remove()
                }
                static #r() {
                    for (let t of n.#e.#s) t()
                }
            };
        window.Kint || (window.Kint = h);
        window.Kint.init(window);
    })();
    </script>
    <style class="kint-rich-style">
    .kint-rich {
        --spacing: 4px;
        --nav-size: 15px;
        --backdrop-color: rgba(255, 255, 255, 0.9);
        --main-background: #e0eaef;
        --secondary-background: #c1d4df;
        --text-color: #1d1e1e;
        --variable-name-color: #1d1e1e;
        --variable-type-color: #0092db;
        --variable-type-color-hover: #5cb730;
        --border-color: #b6cedb;
        --border-color-hover: #0092db;
        --border: 1px solid var(--border-color);
        --foldout-max-size: calc(100vh - 100px);
        --foldout-zindex: 999999;
        --caret-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 150'><g stroke-width='2' fill='%23FFF'><path d='M1 1h28v28H1zm5 14h18m-9 9V6M1 61h28v28H1zm5 14h18' stroke='%23379'/><path d='M1 31h28v28H1zm5 14h18m-9 9V36M1 91h28v28H1zm5 14h18' stroke='%235A3'/><path d='M1 121h28v28H1zm5 5l18 18m-18 0l18-18' stroke='%23CCC'/></g></svg>");
        --ap-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><g stroke='%23000' fill='transparent'><path d='M2 8h3m3 3v3M8 2v3m3 3h3M3 8' stroke-width='2' stroke-linecap='round'/><circle stroke-width='1.5' r='4.5' cx='8' cy='8'/></g></svg>");
        --folder-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path d='M2 2h4l2 2h6v9H2V2h2' stroke-width='2' stroke='%23000' fill='transparent' stroke-linejoin='round'/></svg>");
        --search-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><g stroke='%23000' fill='transparent'><path d='M2 14l3-3' stroke-linecap='round' stroke-width='3'/><circle stroke-width='2' r='5' cx='9' cy='7'/></g></svg>");
        font-size: 13px;
        overflow-x: auto;
        white-space: nowrap;
        background: var(--backdrop-color);
        direction: ltr;
        contain: content
    }

    .kint-rich.kint-folder {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: var(--foldout-zindex);
        width: 100%;
        margin: 0;
        display: block
    }

    .kint-rich.kint-folder dd.kint-foldout {
        max-height: var(--foldout-max-size);
        padding-right: calc(var(--spacing)*2);
        overflow-y: scroll;
        display: none
    }

    .kint-rich.kint-folder dd.kint-foldout.kint-show {
        display: block
    }

    .kint-rich::selection {
        background: var(--border-color-hover);
        color: var(--text-color)
    }

    .kint-rich .kint-focused {
        box-shadow: 0 0 3px 3px var(--variable-type-color-hover)
    }

    .kint-rich .kint-focused.kint-weak-focus {
        box-shadow: 0 0 3px 1px color-mix(in srgb, var(--variable-type-color-hover) 50%, transparent)
    }

    .kint-rich,
    .kint-rich::before,
    .kint-rich::after,
    .kint-rich *,
    .kint-rich *::before,
    .kint-rich *::after {
        box-sizing: border-box;
        border-radius: 0;
        color: var(--text-color);
        float: none !important;
        font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
        line-height: 15px;
        margin: 0;
        padding: 0;
        text-align: left
    }

    .kint-rich {
        margin: calc(var(--spacing)*2) 0
    }

    .kint-rich dt,
    .kint-rich dl {
        width: auto
    }

    .kint-rich dt,
    .kint-rich div.access-path {
        background: var(--main-background);
        border: var(--border);
        color: var(--text-color);
        display: block;
        font-weight: bold;
        list-style: none outside none;
        overflow: auto;
        padding: var(--spacing)
    }

    .kint-rich dt:hover,
    .kint-rich div.access-path:hover {
        border-color: var(--border-color-hover)
    }

    .kint-rich>dl dl {
        padding: 0 0 0 calc(var(--spacing)*3)
    }

    .kint-rich dt.kint-parent>nav,
    .kint-rich>footer>nav {
        background: var(--caret-image) no-repeat scroll 0 0/var(--nav-size) 75px rgba(0, 0, 0, 0);
        cursor: pointer;
        display: inline-block;
        height: var(--nav-size);
        width: var(--nav-size);
        margin-right: 3px;
        vertical-align: middle
    }

    .kint-rich dt.kint-parent:hover>nav,
    .kint-rich>footer>nav:hover {
        background-position: 0 25%
    }

    .kint-rich dt.kint-parent.kint-show>nav,
    .kint-rich>footer.kint-show>nav {
        background-position: 0 50%
    }

    .kint-rich dt.kint-parent.kint-show:hover>nav,
    .kint-rich>footer.kint-show>nav:hover {
        background-position: 0 75%
    }

    .kint-rich dt.kint-parent.kint-locked>nav {
        background-position: 0 100%
    }

    .kint-rich dt.kint-parent+dd {
        display: none;
        border-left: 1px dashed var(--border-color);
        contain: strict
    }

    .kint-rich dt.kint-parent.kint-show+dd {
        display: block;
        contain: content
    }

    .kint-rich var,
    .kint-rich var a {
        color: var(--variable-type-color);
        font-style: normal
    }

    .kint-rich dt:hover var,
    .kint-rich dt:hover var a {
        color: var(--variable-type-color-hover)
    }

    .kint-rich dfn {
        font-style: normal;
        font-family: monospace;
        color: var(--variable-name-color)
    }

    .kint-rich pre {
        color: var(--text-color);
        margin: 0 0 0 calc(var(--spacing)*3);
        padding: 5px;
        overflow-y: hidden;
        border-top: 0;
        border: var(--border);
        background: var(--main-background);
        display: block;
        word-break: normal
    }

    .kint-rich .kint-access-path-trigger,
    .kint-rich .kint-folder-trigger,
    .kint-rich .kint-search-trigger {
        background: color-mix(in srgb, var(--text-color) 80%, transparent);
        border-radius: 3px;
        padding: 2px;
        height: var(--nav-size);
        width: var(--nav-size);
        font-size: var(--nav-size);
        margin-left: 5px;
        font-weight: bold;
        text-align: center;
        line-height: 1;
        float: right !important;
        cursor: pointer;
        position: relative;
        overflow: hidden
    }

    .kint-rich .kint-access-path-trigger::before,
    .kint-rich .kint-folder-trigger::before,
    .kint-rich .kint-search-trigger::before {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background: var(--main-background);
        mask: center/contain no-repeat alpha
    }

    .kint-rich .kint-access-path-trigger:hover,
    .kint-rich .kint-folder-trigger:hover,
    .kint-rich .kint-search-trigger:hover {
        background: var(--main-background)
    }

    .kint-rich .kint-access-path-trigger:hover::before,
    .kint-rich .kint-folder-trigger:hover::before,
    .kint-rich .kint-search-trigger:hover::before {
        background: var(--text-color)
    }

    .kint-rich .kint-access-path-trigger::before {
        mask-image: var(--ap-image)
    }

    .kint-rich .kint-folder-trigger::before {
        mask-image: var(--folder-image)
    }

    .kint-rich .kint-search-trigger::before {
        mask-image: var(--search-image)
    }

    .kint-rich input.kint-search {
        display: none;
        border: var(--border);
        border-top-width: 0;
        border-bottom-width: 0;
        padding: var(--spacing);
        float: right !important;
        margin: calc(var(--spacing)*-1) 0;
        color: var(--variable-name-color);
        background: var(--secondary-background);
        height: calc(var(--nav-size) + var(--spacing)*2);
        width: calc(var(--nav-size)*10);
        position: relative;
        z-index: 100
    }

    .kint-rich input.kint-search.kint-show {
        display: block
    }

    .kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match) {
        background: var(--secondary-background);
        filter: saturate(0);
        opacity: .5
    }

    .kint-rich .kint-search-root dl:not(.kint-search-match) {
        opacity: .5
    }

    .kint-rich .kint-search-root dl:not(.kint-search-match)>dt {
        background: var(--main-background);
        filter: saturate(0)
    }

    .kint-rich .kint-search-root dl:not(.kint-search-match) dl,
    .kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match) {
        opacity: 1
    }

    .kint-rich div.access-path {
        background: var(--secondary-background);
        display: none;
        margin-top: 5px;
        padding: 4px;
        white-space: pre
    }

    .kint-rich div.access-path.kint-show {
        display: block
    }

    .kint-rich footer {
        padding: 0 3px 3px;
        font-size: 9px;
        background: rgba(0, 0, 0, 0)
    }

    .kint-rich footer>.kint-folder-trigger {
        background: rgba(0, 0, 0, 0)
    }

    .kint-rich footer>.kint-folder-trigger::before {
        background: var(--text-color)
    }

    .kint-rich footer nav {
        height: 10px;
        width: 10px;
        background-size: 10px 50px
    }

    .kint-rich footer>ol {
        display: none;
        margin-left: 32px
    }

    .kint-rich footer.kint-show>ol {
        display: block
    }

    .kint-rich a {
        color: var(--text-color);
        text-shadow: none;
        text-decoration: underline
    }

    .kint-rich a:hover {
        color: var(--variable-name-color);
        border-bottom: 1px dotted var(--variable-name-color)
    }

    .kint-rich ul {
        list-style: none;
        padding-left: calc(var(--spacing)*3)
    }

    .kint-rich ul:not(.kint-tabs) li {
        border-left: 1px dashed var(--border-color)
    }

    .kint-rich ul:not(.kint-tabs) li>dl {
        border-left: none
    }

    .kint-rich ul.kint-tabs {
        margin: 0 0 0 calc(var(--spacing)*3);
        padding-left: 0;
        background: var(--main-background);
        border: var(--border);
        border-top: 0
    }

    .kint-rich ul.kint-tabs>li {
        background: var(--secondary-background);
        border: var(--border);
        cursor: pointer;
        display: inline-block;
        height: calc(var(--spacing)*6);
        margin: calc(var(--spacing)/2);
        padding: 0 calc(2px + var(--spacing)*2.5);
        vertical-align: top
    }

    .kint-rich ul.kint-tabs>li:hover,
    .kint-rich ul.kint-tabs>li.kint-active-tab:hover {
        border-color: var(--border-color-hover);
        color: var(--variable-type-color-hover)
    }

    .kint-rich ul.kint-tabs>li.kint-active-tab {
        background: var(--main-background);
        border-top: 0;
        margin-top: -1px;
        height: 27px;
        line-height: 24px
    }

    .kint-rich ul.kint-tabs>li:not(.kint-active-tab) {
        line-height: calc(var(--spacing)*5)
    }

    .kint-rich ul.kint-tabs li+li {
        margin-left: 0
    }

    .kint-rich ul.kint-tab-contents>li {
        display: none;
        contain: strict
    }

    .kint-rich ul.kint-tab-contents>li.kint-show {
        display: block;
        contain: content
    }

    .kint-rich dt:hover+dd>ul>li.kint-active-tab {
        border-color: var(--border-color-hover);
        color: var(--variable-type-color-hover)
    }

    .kint-rich dt>.kint-color-preview {
        width: var(--nav-size);
        height: var(--nav-size);
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
        border: var(--border);
        background-color: #ccc;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');
        background-size: min(20px, 100%)
    }

    .kint-rich dt>.kint-color-preview:hover {
        border-color: var(--border-color-hover)
    }

    .kint-rich dt>.kint-color-preview>div {
        width: 100%;
        height: 100%
    }

    .kint-rich table {
        border-collapse: collapse;
        empty-cells: show;
        border-spacing: 0
    }

    .kint-rich table * {
        font-size: 12px
    }

    .kint-rich table dt {
        background: none;
        padding: calc(var(--spacing)/2)
    }

    .kint-rich table dt .kint-parent {
        min-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .kint-rich table td,
    .kint-rich table th {
        border: var(--border);
        padding: calc(var(--spacing)/2);
        vertical-align: center
    }

    .kint-rich table th {
        cursor: alias
    }

    .kint-rich table td:first-child,
    .kint-rich table th {
        font-weight: bold;
        background: var(--secondary-background);
        color: var(--variable-name-color)
    }

    .kint-rich table td {
        background: var(--main-background);
        white-space: pre
    }

    .kint-rich table td>dl {
        padding: 0
    }

    .kint-rich table pre {
        border-top: 0;
        border-right: 0
    }

    .kint-rich table thead th:first-child {
        background: none;
        border: 0
    }

    .kint-rich table tr:hover>td {
        box-shadow: 0 0 1px 0 var(--border-color-hover) inset
    }

    .kint-rich table tr:hover var {
        color: var(--variable-type-color-hover)
    }

    .kint-rich table ul.kint-tabs li.kint-active-tab {
        height: 20px;
        line-height: 17px
    }

    .kint-rich pre.kint-source {
        margin-left: -1px
    }

    .kint-rich pre.kint-source[data-kint-filename]:before {
        display: block;
        content: attr(data-kint-filename);
        margin-bottom: var(--spacing);
        padding-bottom: var(--spacing);
        border-bottom: 1px solid var(--secondary-background)
    }

    .kint-rich pre.kint-source>div:before {
        display: inline-block;
        content: counter(kint-l);
        counter-increment: kint-l;
        border-right: 1px solid var(--border-color-hover);
        padding-right: calc(var(--spacing)*2);
        margin-right: calc(var(--spacing)*2)
    }

    .kint-rich pre.kint-source>div.kint-highlight {
        background: var(--secondary-background)
    }

    .kint-rich .kint-microtime-js .kint-microtime-lap {
        text-shadow: -1px 0 var(--border-color-hover), 0 1px var(--border-color-hover), 1px 0 var(--border-color-hover), 0 -1px var(--border-color-hover);
        color: var(--main-background);
        font-weight: bold
    }

    input.kint-note-input {
        width: 100%
    }

    .kint-rich {
        --main-background: #f8f8f8;
        --secondary-background: #f8f8f8;
        --variable-type-color: #06f;
        --variable-type-color-hover: #f00;
        --border-color: #d7d7d7;
        --border-color-hover: #aaa;
        --alternative-background: #fff;
        --highlight-color: #cfc;
        --caret-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 150'><path d='M6 7h18l-9 15zm0 30h18l-9 15zm0 45h18l-9-15zm0 30h18l-9-15zm0 12l18 18m-18 0l18-18' fill='%23555'/><path d='M6 126l18 18m-18 0l18-18' stroke-width='2' stroke='%23555'/></svg>")
    }

    .kint-rich .kint-focused {
        box-shadow: 0 0 3px 2px var(--variable-type-color-hover)
    }

    .kint-rich dt {
        font-weight: normal
    }

    .kint-rich dt.kint-parent {
        margin-top: 4px
    }

    .kint-rich dl dl {
        margin-top: 4px;
        padding-left: 25px;
        border-left: none
    }

    .kint-rich>dl>dt {
        background: var(--secondary-background)
    }

    .kint-rich ul {
        margin: 0;
        padding-left: 0
    }

    .kint-rich ul:not(.kint-tabs)>li {
        border-left: 0
    }

    .kint-rich ul.kint-tabs {
        background: var(--secondary-background);
        border: var(--border);
        border-width: 0 1px 1px 1px;
        padding: 4px 0 0 12px;
        margin-left: -1px;
        margin-top: -1px
    }

    .kint-rich ul.kint-tabs li,
    .kint-rich ul.kint-tabs li+li {
        margin: 0 0 0 4px
    }

    .kint-rich ul.kint-tabs li {
        border-bottom-width: 0;
        height: calc(var(--spacing)*6 + 1px)
    }

    .kint-rich ul.kint-tabs li:first-child {
        margin-left: 0
    }

    .kint-rich ul.kint-tabs li.kint-active-tab {
        border-top: var(--border);
        background: var(--alternative-background);
        font-weight: bold;
        padding-top: 0;
        border-bottom: 1px solid var(--alternative-background) !important;
        margin-bottom: -1px
    }

    .kint-rich ul.kint-tabs li.kint-active-tab:hover {
        border-bottom: 1px solid var(--alternative-background)
    }

    .kint-rich ul>li>pre {
        border: var(--border)
    }

    .kint-rich dt:hover+dd>ul {
        border-color: var(--border-color-hover)
    }

    .kint-rich pre {
        background: var(--alternative-background);
        margin-top: 4px;
        margin-left: 25px
    }

    .kint-rich .kint-source {
        margin-left: -1px
    }

    .kint-rich .kint-source .kint-highlight {
        background: var(--highlight-color)
    }

    .kint-rich .kint-parent.kint-show>.kint-search {
        border-bottom-width: 1px
    }

    .kint-rich table td {
        background: var(--alternative-background)
    }

    .kint-rich table td>dl {
        padding: 0;
        margin: 0
    }

    .kint-rich table td>dl>dt.kint-parent {
        margin: 0
    }

    .kint-rich table td:first-child,
    .kint-rich table td,
    .kint-rich table th {
        padding: 2px 4px
    }

    .kint-rich table dd,
    .kint-rich table dt {
        background: var(--alternative-background)
    }

    .kint-rich table tr:hover>td {
        box-shadow: none;
        background: var(--highlight-color)
    }
    </style>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="WRAPCODERS" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Nahata Sport</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/NahataSports/assets/images/logo.jpg" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="http://localhost/NahataSports/assets/css/bootstrap.min.css" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="http://localhost/NahataSports/assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css"
        href="http://localhost/NahataSports/assets/vendors/css/daterangepicker.min.css" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="http://localhost/NahataSports/assets/css/theme.min.css" />
</head>
<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!--! [Start] nxl-head-mobile-toggler !-->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--! [Start] nxl-head-mobile-toggler !-->
            <!--! [Start] nxl-navigation-toggle !-->
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            <!--! [End] nxl-navigation-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu-toggle !-->
            <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                    <i class="feather-align-left"></i>
                </a>
            </div>
            <!--! [End] nxl-lavel-mega-menu-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu !-->
            <div class="nxl-drp-link nxl-lavel-mega-menu">
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <!--! [Start] nxl-lavel-mega-menu-wrapper !-->

                <!--! [End] nxl-lavel-mega-menu-wrapper !-->
            </div>
            <!--! [End] nxl-lavel-mega-menu !-->
        </div>
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">

                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="http://localhost/NahataSports/assets/images/avatar/1.png" alt="user-image"
                            class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="http://localhost/NahataSports/assets/images/avatar/1.png" alt="user-image"
                                    class="img-fluid user-avtar" />
                                <div>
                                    <h6 class="text-dark mb-0"><span
                                            class="fs-12 fw-medium text-muted"><strong>Shankar</strong></span></h6>
                                    <span class="fs-12 fw-medium text-muted"><strong>shankar@gmail.com</strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">

                            <div class="dropdown-menu">

                            </div>
                        </div>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="http://localhost/NahataSports/profile" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile Details</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="http://localhost/NahataSports/logout" class="dropdown-item">
                            <i class="feather-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>
<!-- DEBUG-VIEW ENDED 3 APPPATH\Views\main\header_view.php -->
<!-- DEBUG-VIEW START 4 APPPATH\Views\main\nawbar_view.php -->
<style>
.logo-lg {
    display: block;
    /* Ensure it’s visible */
    width: 150px;
    /* Adjust the size of the large logo */
}

.logo-sm {
    display: none;
    /* Hide the small logo by default */
}

@media (max-width: 767px) {
    .logo-lg {
        display: none;
        /* Hide the large logo on smaller screens */
    }

    .logo-sm {
        display: block;
        /* Show the small logo on smaller screens */
        width: 100px;
        /* Adjust the size of the small logo */
    }
}
</style>
<?= view('main/nawbar_view'); ?>
<!-- DEBUG-VIEW ENDED 4 APPPATH\Views\main\nawbar_view.php -->

<!-- DEBUG-VIEW START 1 APPPATH\Views\venue\venus_listing_view.php -->
<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <!-- shankar -->
                                    <form action="<?= base_url('save_event') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <!-- Title -->
                                        <div class="mb-4">
                                            <label for="title" class="form-label fw-semibold">Title:</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Event Title" required>
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-4">
                                            <label for="description" class="form-label fw-semibold">Description:</label>
                                            <textarea name="description" id="description" class="form-control"
                                                placeholder="Event Description" rows="5" required></textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="description" class="form-label fw-semibold">Buttone
                                                Title:</label>
                                            <input type="text" name="btn_title" id="btn_title" class="form-control"
                                                placeholder="Buttne Title" required>
                                        </div>

                                        <div class="mb-4">
                                            <label for="description" class="form-label fw-semibold">Buttone
                                                Url:</label>
                                            <input type="text" name="btn_url" id="btn_url" class="form-control"
                                                placeholder="Buttne Url" required>
                                        </div>

                                        <!-- Submit -->
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-100">Add Event</button>
                                        </div>

                                        <!-- Flash Messages -->
                                        <?php if (session()->getFlashdata('success')) : ?>
                                        <div class="alert alert-success mt-3">
                                            <?= session()->getFlashdata('success') ?>
                                        </div>
                                        <?php endif; ?>

                                        <?php if (session()->getFlashdata('error')) : ?>
                                        <div class="alert alert-danger mt-3">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                        <?php endif; ?>
                                    </form>

                                    <!-- shankar -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var baseUrl = 'http://localhost/NahataSports/';
</script>
<script type="text/javascript" src="http://localhost/NahataSports/assets/script/bannar_delete.js"></script>



<!-- DEBUG-VIEW ENDED 1 APPPATH\Views\venue\venus_listing_view.php -->
<!-- DEBUG-VIEW START 2 APPPATH\Views\main\footer_view.php -->
<footer class="footer">
    <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
        <span>Copyright ©</span>
        <script>
        document.write(new Date().getFullYear());
        </script>
    </p>
    <div class="d-flex align-items-center gap-4">
        <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
        <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
        <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
    </div>
</footer>
<!-- [ Footer ] end -->
</main>
<!--! ================================================================ !-->
<!--! [End] Main Content !-->
<!--! ================================================================ !-->
<!--! ================================================================ !-->
<!--! BEGIN: Theme Customizer !-->
<!--! ================================================================ !-->
<!--  -->
<!--! ================================================================ !-->
<!--! [End] Theme Customizer !-->
<!--! ================================================================ !-->
<!--! ================================================================ !-->
<!--! Footer Script !-->
<!--! ================================================================ !-->
<!--! BEGIN: Vendors JS !-->
<script src="http://localhost/NahataSports/assets/vendors/js/vendors.min.js"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="http://localhost/NahataSports/assets/vendors/js/daterangepicker.min.js"></script>
<script src="http://localhost/NahataSports/assets/vendors/js/apexcharts.min.js"></script>
<script src="http://localhost/NahataSports/assets/vendors/js/circle-progress.min.js"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="http://localhost/NahataSports/assets/js/common-init.min.js"></script>
<script src="http://localhost/NahataSports/assets/js/dashboard-init.min.js"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="http://localhost/NahataSports/assets/js/theme-customizer-init.min.js"></script>
<!--! END: Theme Customizer !-->
</body>

</html>
<!-- DEBUG-VIEW ENDED 2 APPPATH\Views\main\footer_view.php -->

<!-- DEBUG-VIEW ENDED 5 APPPATH\Views\main\main_view.php -->