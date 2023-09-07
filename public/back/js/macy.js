/*!
 * Macy.js v1.1.1 - Macy is a lightweight, dependency free, masonry layout library
 * Author: Copyright (c) Big Bite Creative <@bigbitecreative> <http://bigbitecreative.com>
 * Url: http://macyjs.com/
 * License: MIT
 */
!function (n, e) { "function" == typeof define && define.amd ? define([], function () { return e() }) : "object" == typeof exports ? module.exports = e() : n.Macy = e() }(this, function () { "use strict"; var n = function (e) { var t, r = {}, o = 1, i = function (e) { for (t in e) Object.prototype.hasOwnProperty.call(e, t) && ("[object Object]" === Object.prototype.toString.call(e[t]) ? r[t] = n(r[t], e[t]) : r[t] = e[t]) }; for (i(arguments[0]), o = 1; o < arguments.length; o++) { var u = arguments[o]; i(u) } return r }, e = {}; e.VERSION = "1.1.1", e.settings = {}; var t, r, o = { columns: 3, margin: 2, trueOrder: !0, waitForImages: !1 }, i = { options: {} }, u = function () { var n, e = document.body.clientWidth; for (var t in i.options.breakAt) if (t > e) { n = i.options.breakAt[t]; break } return n || (n = i.options.columns), n }, a = function (n) { n = "undefined" != typeof n ? n : !0; var e, t = u(); return n ? 1 === t ? "100%" : (e = (t - 1) * i.options.margin / t, "calc(" + 100 / t + "% - " + e + "px)") : 100 / t }, c = function () { var n = a(); I(i.elements, function (e, t) { t.style.width = n, t.style.position = "absolute" }) }, f = function (n) { var e, t, r = u(), o = 0; return n++, 1 === n ? 0 : (e = (i.options.margin - (r - 1) * i.options.margin / r) * (n - 1), o += a(!1) * (n - 1), t = "calc(" + o + "% + " + e + "px)") }, l = function (n, e, t) { var r = 0; if (0 === n) return 0; for (var o = 0; n > o; o++)r += parseInt(h(i.elements[t[o]], "height").replace("px", "")), r += i.options.margin; return r }, s = function (n) { var e = 0, t = [], r = [], o = []; I(i.elements, function (o) { e++, e > n && (e = 1, t.push(r), r = []), r.push(o) }), t.push(r); for (var u = 0, a = t.length; a > u; u++)for (var c = t[u], f = 0, l = c.length; l > f; f++)o[f] = "undefined" == typeof o[f] ? [] : o[f], o[f].push(c[f]); i.rows = o, p(!1) }, v = function (n) { for (var e = i.elements, t = [], r = [], o = 0; n > o; o++)t[o] = []; for (var u = 0; u < e.length; u++)r.push(u); for (var a = 0, c = r.length; c > a; a++) { var f = d(t); t[f] = "undefined" == typeof t[f] ? [] : t[f], t[f].push(r[a]) } i.rows = t, p(!0) }, p = function (n) { n = n || !1; for (var e = i.elements, t = i.rows, r = 0, o = t.length; o > r; r++)for (var u = n ? w(t[r]) : t[r], a = 0, c = u.length; c > a; a++) { var s, v; s = f(r), v = l(a, r, u, n), e[u[a]].style.top = v + "px", e[u[a]].style.left = s } }, d = function (n) { for (var e, t, r, o = 0, u = 0, a = n.length; a > u; u++) { for (var c = 0; c < n[u].length; c++)o += parseInt(h(i.elements[n[u][c]], "height").replace("px", "")); r = t, t = void 0 === t ? o : t > o ? o : t, (void 0 === r || r > t) && (e = u), o = 0 } return e }, h = function (n, e) { return window.getComputedStyle(n, null).getPropertyValue(e) }, g = function () { for (var n = i.rows, e = 0, t = 0, r = 0, o = n.length; o > r; r++) { for (var u = 0; u < n[r].length; u++)t += parseInt(h(i.elements[n[r][u]], "height").replace("px", "")), t += 0 !== u ? i.options.margin : 0; e = t > e ? t : e, t = 0 } return e }, m = function () { var n = u(); return 1 === n ? (i.container.style.height = "auto", void I(i.elements, function (n, e) { e.removeAttribute("style") })) : (c(), i.elements = i.container.children, i.options.trueOrder ? (s(n), void y()) : (v(n), void y())) }, y = function () { i.container.style.height = g() + "px" }, w = function (n) { for (var e = n, t = e.length - 1, r = 0; t > r; r++)for (var o = 0; t > o; o++)if (e[o] > e[o + 1]) { var i = e[o]; e[o] = e[o + 1], e[o + 1] = i } return e }, b = function (n) { return document.querySelector(n) }, x = function (n) { for (var e = document.querySelectorAll(n), t = [], r = e.length - 1; r >= 0; r--)null !== e[r].offsetParent && t.unshift(e[r]); return t }, I = function (n, e) { for (var t = 0, r = n.length; r > t; t++)e(t, n[t]) }, O = function (n, e) { n = n || !1, e = e || !1, "function" == typeof n && n(), r >= t && "function" == typeof e && e() }, A = function () { I(i.container.children, function (n, e) { e.removeAttribute("style") }), i.container.removeAttribute("style"), window.removeEventListener("resize", m) }, j = function (n, e) { var o = x("img"); t = o.length - 1, r = 0, I(o, function (o, i) { return i.complete ? (r++, void O(n, e)) : (i.addEventListener("load", function () { r++, O(n, e) }), void i.addEventListener("error", function () { t--, O(n, e) })) }) }; return e.init = function (e) { return e.container && (i.container = b(e.container), i.container) ? (delete e.container, i.options = n(o, e), window.addEventListener("resize", m), i.container.style.position = "relative", i.elements = i.container.children, i.options.waitForImages ? void j(null, function () { m() }) : (m(), void j(function () { m() }))) : void 0 }, e.recalculate = m, e.onImageLoad = j, e.remove = A, e });

MyEnvironment = (function () {
  var testDragAndDropSupport = function () {
    return 'draggable' in document.createElement('span');
  };
  return {
    init: function () {
      if (testDragAndDropSupport()) {
        var root = document.getElementsByTagName("html")[0];
        root.classList.add("draganddrop");
      }
    }
  };
})();


if (document.readyState == "complete" || document.readyState == "loaded") {
  MyEnvironment.init();
} else {
  document.addEventListener("DOMContentLoaded", MyEnvironment.init);
}

var masonryEl = document.querySelector(".masonryComponent");
window.onload = function () {
  Macy.init({
    container: ".masonryComponent",
    trueOrder: true,
    margin: 20,
    columns: 3,
    breakAt: {
      1400: 2,
      1185: 2,
      977: 3,
      861: 2,
      561: 1
    },
  });

  var masonryItemEl = masonryEl.querySelectorAll(".masonryItem");
  [].forEach.call(masonryItemEl, function (masonryItemEl) {
    masonryItemEl.addEventListener("dragstart", handleDragStart, false);
    masonryItemEl.addEventListener("dragenter", handleDragEnter, false);
    masonryItemEl.addEventListener("dragover", handleDragOver, false);
    masonryItemEl.addEventListener("dragleave", handleDragLeave, false);
    masonryItemEl.addEventListener("drop", handleDrop, false);
    masonryItemEl.addEventListener("dragend", handleDragEnd, false);
  });
  masonryEl.className += " is-active";
}

var dragSrcEl = null;
function handleDragStart(e) { // Target (this) element is the source node
  dragSrcEl = this;
  e.dataTransfer.effectAllowed = "move";
  e.dataTransfer.setData("text", this.innerHTML);
  console.log("test");
}

function handleDragOver(e) {
  if (e.preventDefault) { // Allows us to drop.
    e.preventDefault();
  }
  e.dataTransfer.dropEffect = "move";
  return false;
}

function handleDragEnter(e) { // this e.target is the current hover target
  this.classList.add("over");
}

function handleDragLeave(e) { // this e.target is previous target element
  this.classList.remove("over");
}

function handleDrop(e) { // this/e.target is current target element
  if (e.stopPropagation) { // Stops some browsers from redirecting
    e.stopPropagation();
  }
  // Don't do anything if dropping the same item we're dragging
  if (dragSrcEl != this) { // Set the source item's HTML to the HTML of the item we dropped upon
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData("text");
    e.dataTransfer.clearData();
    this.classList.remove("over");
    Macy.recalculate();
  }
  return false;
}

function handleDragEnd(e) { // this e.target is the source node
  [].forEach.call(dragItem, function (dragItem) {
    dragItem.classList.remove("over");
  });
}