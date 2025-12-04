<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>About &#8211; PeaceAlign</title>
  <meta name='robots' content='max-image-preview:large' />
  <style>
    img:is([sizes="auto" i], [sizes^="auto," i]) {
      contain-intrinsic-size: 3000px 1500px
    }
  </style>
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel="alternate" type="application/rss+xml" title="PeaceAlign &raquo; Feed" href="feed/index.html" />
  <link rel="alternate" type="application/rss+xml" title="PeaceAlign &raquo; Comments Feed" href="comments/feed/index.html" />
  <script type="text/javascript">
    /* 

<![CDATA[ */
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/wp.tonictheme.com\/wp067\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"
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
          a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
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
            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
          case "emoji":
            return !a(e, "\ud83e\udedf")
        }
        return !1
      }

      function g(e, t, n, a) {
        var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : s.createElement("canvas"),
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
            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
          } catch (e) {}
          return null
        }();
        if (!n) {
          if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
            var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p.toString(), u.toString()].join(",") + "));",
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
        for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
        n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
          n.DOMReady = !0
        }
      }).then(function() {
        return e
      }).then(function() {
        var e;
        n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
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
  <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles658f.css?ver=6.1.2' type='text/css' media='all' />
  <link rel='stylesheet' id='fontawesome-css' href='wp-content/plugins/peacealign-core/assets/css/font-awesome7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='magnific-popup-css' href='wp-content/plugins/peacealign-core/assets/css/magnific-popup7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='animate-css' href='wp-content/plugins/peacealign-core/assets/css/animate7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='meanmenu-css' href='wp-content/plugins/peacealign-core/assets/css/meanmenu7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='nice-select-css' href='wp-content/plugins/peacealign-core/assets/css/nice-select7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css' media='all' />
  <link rel='stylesheet' id='bootstrap-css' href='wp-content/plugins/peacealign-core/assets/css/bootstrap.min7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-core-theme-style-css' href='wp-content/plugins/peacealign-core/assets/css/theme-style7406.css?ver=2.0.1' type='text/css' media='all' />
  <link rel='stylesheet' id='sr7css-css' href='wp-content/plugins/revslider/public/css/sr7d3f8.css?ver=6.7.33' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-google-fonts-css' href='http://fonts.googleapis.com/css?family=Cormorant+Garamond%3A400%7CCormorant+Garamond%3A500%7CCormorant+Garamond%3A600%7CCormorant+Garamond%3A700' type='text/css' media='all' />
  <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
  <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/peacealign/assets/css/flaticona148.css?ver=1762017854' type='text/css' media='all' />
  <link rel='stylesheet' id='swiper-bundle-css' href='wp-content/themes/peacealign/assets/css/swiper-bundle.mina148.css?ver=1762017854' type='text/css' media='all' />
  <link rel='stylesheet' id='slick-css' href='wp-content/themes/peacealign/assets/css/slicka148.css?ver=1762017854' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-main-style-css' href='wp-content/themes/peacealign/assets/css/maina148.css?ver=1762017854' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-fix-css' href='wp-content/themes/peacealign/assets/css/wp-fixa148.css?ver=1762017854' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-style-css' href='wp-content/themes/peacealign/style32d4.css?ver=6.8.3' type='text/css' media='all' />
  <style id='peacealign-style-inline-css' type='text/css'>
    .page-content-wrap-2791 {
      padding-top: 100px;
      padding-bottom: 100px;
    }

    .page-content-inner-2791 {}

    .page-content-inner-2791 .entry-content {
      color: #5f5f5f;
    }

    html,
    body {
      font-family: Cormorant Garamond, sans-serif;
    }

    p,
    body {
      font-family: Cormorant Garamond, sans-serif !important;
    }

    span {
      font-family: Cormorant Garamond, sans-serif !important;
    }

    :root {
      --body-font: Cormorant Garamond, sans-serif;
    }

    body.elementor-page {
      --e-global-typography-primary-font-family: Cormorant Garamond;
      --e-global-typography-text-font-family: Cormorant Garamond;
      --e-global-typography-secondary-font-family: Cormorant Garamond;
      --e-global-typography-accent-font-family: Cormorant Garamond;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: Cormorant Garamond, sans-serif;
      font-weight: normal;
    }

    :root {
      --heading-font: Cormorant Garamond, sans-serif;
    }

    :root {
      --heading-color: #0F0D1D;
      --paragraph-color: #585858;
    }

    .preloader.loaded .loader-section .bg {}

    .breadcrumb-wrap {
      background-image: url();
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: scroll;
    }

    .breadcrumb-wrap:before {}

    .footer-style .footer-wrap .footer-top {}

    .footer-style-01 .footer-wrap.bg-image {
      background-image: url();
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: scroll;
    }

    .footer-style-01 .footer-wrap {}

    .footer-style-01 .footer-wrap .footer-top {}

    .footer-style-02 .footer-wrap {
      background-image: url();
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: scroll;
    }

    .footer-style-02 .footer-wrap {}

    .footer-style-02 .footer-wrap .footer-widget-content {}

    .footer-wrap .copyright-wrap .copyright-text {}

    .footer-style-01 .footer-wrap .copyright-wrap {}

    .footer-style-02 .footer-wrap .copyright-wrap {}

    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li a,
    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li.menu-item-has-children:before {}

    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li a:hover,
    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li:hover a,
    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li:hover.menu-item-has-children:before {}

    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default,
    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container {}

    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li a {}

    .navbar.navbar-area.navbar-expand-lg.navigation-style-01.navbar-default .custom-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:hover a {}

    .navbar-area.navbar-default .custom-container .navbar-collapse .navbar-nav li a:hover,
    .navbar-area.navbar-default .custom-container .navbar-collapse .navbar-nav li:hover a,
    .navbar-area.navbar-default .custom-container .navbar-collapse .navbar-nav li:hover.menu-item-has-children:before {}

    .navbar-area.navbar-default .custom-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu {}

    .header-links li .sub-title {}

    .header-links li .title {}

    .header-bottom-area .navbar-collapse .main-menu li a {}

    .header-bottom-area .navbar-collapse .main-menu li.menu_has_children a:hover {}

    .header-section {}

    .header-bottom-area .navbar-collapse .main-menu li .sub-menu {
      background-color: #101A29;
    }

    .header-bottom-area .navbar-collapse .main-menu li .sub-menu li a {
      color: #fff;
    }

    .header-bottom-area .navbar-collapse .main-menu li .sub-menu li:hover a {
      color: #fff;
    }

    .header-bottom-area .navbar-collapse .main-menu li .sub-menu li:hover {
      background-color: #246BFD;
    }

    .page-wrapper .navbar-collapse .main-menu li a:hover {}

    .header-action a {}

    .header-action a:hover {
      color: #fff;
      background-color: transparent;
    }

    .widget .widget-headline.style-01,
    .widget_rss ul li a.rsswidget {}

    .widget .widget-headline:after {}

    .widget ul li a,
    .widget ul li,
    .widget p,
    .widget .table td,
    .widget .table th,
    .widget caption,
    .widget .wp-calendar-nav-prev a,
    .widget_tag_cloud .tagcloud a,
    .calendar_wrap table td,
    .calendar_wrap table tr,
    .widget_categories ul li a:before {}

    .footer-style .footer-wrap {}

    .footer-style .footer-wrap .footer-top {}

    .widget.footer-widget p,
    .widget.footer-widget.widget_calendar caption,
    .widget.footer-widget.widget_calendar th,
    .widget.footer-widget.widget_calendar td,
    .footer-widget.widget p,
    .footer-widget.widget a,
    .footer-widget.widget,
    .widget.footer-widget ul li a,
    .widget.footer-widget ul li,
    .widget_tag_cloud.footer-widget .tagcloud a {}

    .footer-widget.widget a:hover,
    .widget.footer-widget ul li a:hover,
    .widget_tag_cloud.footer-widget .tagcloud a:hover {}

    .widget.footer-widget .widget-headline,
    .widget.footer-widget .widget-headline a,
    footer-widget.widget_rss ul li a.rsswidget,
    .footer-widget.widget .theme-recent-post-wrap li.theme-recent-post-item .content .title>a {}

    .footer-widget.widget_tag_cloud .tagcloud a:hover {
      color: #fff;
      background-color: #101A29;
      border-color: #101A29;
    }

    .footer-style .footer-wrap .copyright-wrap {}

    .footer-style .copyright-wrap .copyright-content {
      color: #fff;
    }

    <br /><b>Warning</b>:Undefined variable $footer_two_css in <b>/www/wwwroot/wp.tonictheme.com/wp067/wp-content/themes/peacealign/inc/theme-stylesheets/theme-option-css-style.php</b>on line <b>596</b><br />.copyright-area {
      border-top-color: rgba(255, 255, 255, 0.2);
    }

    .footer-list li {
      color: rgba(255, 255, 255, 0.8);
    }

    .footer-list li:hover {
      color: #246BFD;
    }

    .footer-style-01 .copyright-menu li {}

    .footer-social li a {
      color: #8A8A8A;
      background-color: transparent;
    }

    .footer-social li a:hover {
      color: #fff;
      background-color: #246BFD;
    }

    .copyright-area p {
      color: #8A8A8A;
    }

    .footer-style-02 {}

    .footer-style-02 .call-to-action-inner .title {}

    .footer-style-02 .btn-wrap .boxed-btn {}

    footer-style-02 .btn-wrap .boxed-btn:hover {}

    .footer-style-02 .footer-wrap {}

    .footer-style-02 .widget.footer-widget p,
    .footer-style-02 .widget.footer-widget.widget_calendar caption,
    .footer-style-02 .widget.footer-widget.widget_calendar th,
    .footer-style-02 .widget.footer-widget.widget_calendar td,
    .footer-style-02 .footer-widget.widget p,
    .footer-style-02 .footer-widget.widget a,
    .footer-style-02 .footer-widget.widget,
    .footer-style-02 .widget.footer-widget ul li a,
    .footer-style-02 .widget.footer-widget ul li,
    .footer-style-02 .widget_tag_cloud.footer-widget .tagcloud a {}

    .footer-style-02 .footer-widget.widget a:hover,
    .footer-style-02 .widget.footer-widget ul li a:hover,
    .footer-style-02 .widget_tag_cloud.footer-widget .tagcloud a:hover {}

    .footer-style-02 .widget.footer-widget .widget-headline,
    .footer-style-02 .widget.footer-widget .widget-headline a,
    .footer-style-02 .footer-widget.widget_rss ul li a.rsswidget,
    .footer-style-02 .footer-widget.widget .theme-recent-post-wrap li.theme-recent-post-item .content .title>a {}

    .footer-style-02 .footer-widget.widget_tag_cloud .tagcloud a:hover {}

    .footer-style-02 .copyright-wrap-inner {}

    .error_page_content_area {}

    .blog-page-content-area {}

    .blog-content-page {}

    .archive-page-content-area {}

    .search-page-content-area {}

    .service-details-page {}
  </style>
  <link rel='stylesheet' id='custom-color-theme-css' href='wp-content/themes/peacealign/inc/theme-stylesheets/theme-color32d4.css?ver=6.8.3' type='text/css' media='all' />
  <style id='custom-color-theme-inline-css' type='text/css'>
    :root {
      --body: #6a1b1a;
      --black: #000000;
      --white: #FFFFFF;
      --theme: #ff9933;
      --theme2: #d4af37;
      --header: #16171A;
      --text: #fcf7e9;
      --text2: #8A8C94;
      --border: #1a1a1a;
      --bg: #faf3e0;
    }
  </style>
  <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-post-8-css' href='wp-content/uploads/elementor/css/post-8175b.css?ver=1760672559' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-zoomInLeft-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/zoomInLeft.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-zoomIn-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-slideInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInRight.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='widget-icon-box-css' href='wp-content/plugins/elementor/assets/css/widget-icon-box.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-slideInLeft-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInLeft.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-slideInDown-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInDown.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-slideInUp-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-zoomInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/zoomInRight.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-post-2791-css' href='wp-content/uploads/elementor/css/post-27910794.css?ver=1761108058' type='text/css' media='all' />
  <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
  <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="wp-content/plugins/revslider/public/js/libs/tptoolsd3f8.js?ver=6.7.33" id="tp-tools-js" async="async" data-wp-strategy="async"></script>
  <script type="text/javascript" src="wp-content/plugins/revslider/public/js/sr7d3f8.js?ver=6.7.33" id="sr7-js" async="async" data-wp-strategy="async"></script>
  <link rel="https://api.w.org/" href="wp-json/index.html" />
  <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/2791.json" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <meta name="generator" content="WordPress 6.8.3" />
  <link rel="canonical" href="index.html" />
  <link rel='shortlink' href='index583d.html?p=2791' />
  <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed86f4.json?url=https%3A%2F%2Fwp.tonictheme.com%2Fwp067%2Fabout%2F" />
  <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed708e?url=https%3A%2F%2Fwp.tonictheme.com%2Fwp067%2Fabout%2F&amp;format=xml" />
  <meta name="generator" content="Elementor 3.32.4; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
  <style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
      background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

      .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
      .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
      }
    }

    @media screen and (max-height: 640px) {

      .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
      .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
      }
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <meta name="generator" content="Powered by Slider Revolution 6.7.33 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
  <link rel="icon" href="wp-content/uploads/2025/10/Group-1-1.png" sizes="32x32" />
  <link rel="icon" href="wp-content/uploads/2025/10/Group-1-1.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="wp-content/uploads/2025/10/Group-1-1.png" />
  <meta name="msapplication-TileImage" content="https://wp.tonictheme.com/wp067/wp-content/uploads/2025/10/Group-1-1.svg" />
  <script>
    window._tpt ?? = {};
    window.SR7 ?? = {};
    _tpt.R ?? = {};
    _tpt.R.fonts ?? = {};
    _tpt.R.fonts.customFonts ?? = {};
    SR7.devMode = false;
    SR7.F ?? = {};
    SR7.G ?? = {};
    SR7.LIB ?? = {};
    SR7.E ?? = {};
    SR7.E.gAddons ?? = {};
    SR7.E.php ?? = {};
    SR7.E.nonce = 'd46f6fd1e8';
    SR7.E.ajaxurl = 'wp-admin/admin-ajax.html';
    SR7.E.resturl = 'wp-json/index.html';
    SR7.E.slug_path = 'revslider/revslider.html';
    SR7.E.slug = 'revslider';
    SR7.E.plugin_url = 'wp-content/plugins/revslider/index.html';
    SR7.E.wp_plugin_url = 'wp-content/plugins/index.html';
    SR7.E.revision = '6.7.33';
    SR7.E.fontBaseUrl = '';
    SR7.G.breakPoints = [1240, 1024, 778, 480];
    SR7.E.modules = ['module', 'page', 'slide', 'layer', 'draw', 'animate', 'srtools', 'canvas', 'defaults', 'carousel', 'navigation', 'media', 'modifiers', 'migration'];
    SR7.E.libs = ['WEBGL'];
    SR7.E.css = ['csslp', 'cssbtns', 'cssfilters', 'cssnav', 'cssmedia'];
    SR7.E.resources = {};
    SR7.E.ytnc = false;
    SR7.JSON ?? = {};
    /*! Slider Revolution 7.0 - Page Processor */
    ! function() {
      "use strict";
      window.SR7 ?? = {}, window._tpt ?? = {}, SR7.version = "Slider Revolution 6.7.16", _tpt.getMobileZoom = () => _tpt.is_mobile ? document.documentElement.clientWidth / window.innerWidth : 1, _tpt.getWinDim = function(t) {
        _tpt.screenHeightWithUrlBar ?? = window.innerHeight;
        let e = SR7.F?.modal?.visible && SR7.M[SR7.F.module.getIdByAlias(SR7.F.modal.requested)];
        _tpt.scrollBar = window.innerWidth !== document.documentElement.clientWidth || e && window.innerWidth !== e.c.module.clientWidth, _tpt.winW = _tpt.getMobileZoom() * window.innerWidth - (_tpt.scrollBar || "prepare" == t ? _tpt.scrollBarW ?? _tpt.mesureScrollBar() : 0), _tpt.winH = _tpt.getMobileZoom() * window.innerHeight, _tpt.winWAll = document.documentElement.clientWidth
      }, _tpt.getResponsiveLevel = function(t, e) {
        SR7.M[e];
        return _tpt.closestGE(t, _tpt.winWAll)
      }, _tpt.mesureScrollBar = function() {
        let t = document.createElement("div");
        return t.className = "RSscrollbar-measure", t.style.width = "100px", t.style.height = "100px", t.style.overflow = "scroll", t.style.position = "absolute", t.style.top = "-9999px", document.body.appendChild(t), _tpt.scrollBarW = t.offsetWidth - t.clientWidth, document.body.removeChild(t), _tpt.scrollBarW
      }, _tpt.loadCSS = async function(t, e, s) {
        return s ? _tpt.R.fonts.required[e].status = 1 : (_tpt.R[e] ?? = {}, _tpt.R[e].status = 1), new Promise(((i, n) => {
          if (_tpt.isStylesheetLoaded(t)) s ? _tpt.R.fonts.required[e].status = 2 : _tpt.R[e].status = 2, i();
          else {
            const o = document.createElement("link");
            o.rel = "stylesheet";
            let l = "text",
              r = "css";
            o["type"] = l + "/" + r, o.href = t, o.onload = () => {
              s ? _tpt.R.fonts.required[e].status = 2 : _tpt.R[e].status = 2, i()
            }, o.onerror = () => {
              s ? _tpt.R.fonts.required[e].status = 3 : _tpt.R[e].status = 3, n(new Error(`Failed to load CSS: ${t}`))
            }, document.head.appendChild(o)
          }
        }))
      }, _tpt.addContainer = function(t) {
        const {
          tag: e = "div",
          id: s,
          class: i,
          datas: n,
          textContent: o,
          iHTML: l
        } = t, r = document.createElement(e);
        if (s && "" !== s && (r.id = s), i && "" !== i && (r.className = i), n)
          for (const [t, e] of Object.entries(n)) "style" == t ? r.style.cssText = e : r.setAttribute(`data-${t}`, e);
        return o && (r.textContent = o), l && (r.innerHTML = l), r
      }, _tpt.collector = function() {
        return {
          fragment: new DocumentFragment,
          add(t) {
            var e = _tpt.addContainer(t);
            return this.fragment.appendChild(e), e
          },
          append(t) {
            t.appendChild(this.fragment)
          }
        }
      }, _tpt.isStylesheetLoaded = function(t) {
        let e = t.split("?")[0];
        return Array.from(document.querySelectorAll('link[rel="stylesheet"], link[rel="preload"]')).some((t => t.href.split("?")[0] === e))
      }, _tpt.preloader = {
        requests: new Map,
        preloaderTemplates: new Map,
        show: function(t, e) {
          if (!e || !t) return;
          const {
            type: s,
            color: i
          } = e;
          if (s < 0 || "off" == s) return;
          const n = `preloader_${s}`;
          let o = this.preloaderTemplates.get(n);
          o || (o = this.build(s, i), this.preloaderTemplates.set(n, o)), this.requests.has(t) || this.requests.set(t, {
            count: 0
          });
          const l = this.requests.get(t);
          clearTimeout(l.timer), l.count++, 1 === l.count && (l.timer = setTimeout((() => {
            l.preloaderClone = o.cloneNode(!0), l.anim && l.anim.kill(), void 0 !== _tpt.gsap ? l.anim = _tpt.gsap.fromTo(l.preloaderClone, 1, {
              opacity: 0
            }, {
              opacity: 1
            }) : l.preloaderClone.classList.add("sr7-fade-in"), t.appendChild(l.preloaderClone)
          }), 150))
        },
        hide: function(t) {
          if (!this.requests.has(t)) return;
          const e = this.requests.get(t);
          e.count--, e.count < 0 && (e.count = 0), e.anim && e.anim.kill(), 0 === e.count && (clearTimeout(e.timer), e.preloaderClone && (e.preloaderClone.classList.remove("sr7-fade-in"), e.anim = _tpt.gsap.to(e.preloaderClone, .3, {
            opacity: 0,
            onComplete: function() {
              e.preloaderClone.remove()
            }
          })))
        },
        state: function(t) {
          if (!this.requests.has(t)) return !1;
          return this.requests.get(t).count > 0
        },
        build: (t, e = "#ffffff", s = "") => {
          if (t < 0 || "off" === t) return null;
          const i = parseInt(t);
          if (t = "prlt" + i, isNaN(i)) return null;
          if (_tpt.loadCSS(SR7.E.plugin_url + "public/css/preloaders/t" + i + ".css", "preloader_" + t), isNaN(i) || i < 6) {
            const n = `background-color:${e}`,
              o = 1 === i || 2 == i ? n : "",
              l = 3 === i || 4 == i ? n : "",
              r = _tpt.collector();
            ["dot1", "dot2", "bounce1", "bounce2", "bounce3"].forEach((t => r.add({
              tag: "div",
              class: t,
              datas: {
                style: l
              }
            })));
            const d = _tpt.addContainer({
              tag: "sr7-prl",
              class: `${t} ${s}`,
              datas: {
                style: o
              }
            });
            return r.append(d), d
          } {
            let n = {};
            if (7 === i) {
              let t;
              e.startsWith("#") ? (t = e.replace("#", ""), t = `rgba(${parseInt(t.substring(0,2),16)}, ${parseInt(t.substring(2,4),16)}, ${parseInt(t.substring(4,6),16)}, `) : e.startsWith("rgb") && (t = e.slice(e.indexOf("(") + 1, e.lastIndexOf(")")).split(",").map((t => t.trim())), t = `rgba(${t[0]}, ${t[1]}, ${t[2]}, `), t && (n.style = `border-top-color: ${t}0.65); border-bottom-color: ${t}0.15); border-left-color: ${t}0.65); border-right-color: ${t}0.15)`)
            } else 12 === i && (n.style = `background:${e}`);
            const o = [10, 0, 4, 2, 5, 9, 0, 4, 4, 2][i - 6],
              l = _tpt.collector(),
              r = l.add({
                tag: "div",
                class: "sr7-prl-inner",
                datas: n
              });
            Array.from({
              length: o
            }).forEach((() => r.appendChild(l.add({
              tag: "span",
              datas: {
                style: `background:${e}`
              }
            }))));
            const d = _tpt.addContainer({
              tag: "sr7-prl",
              class: `${t} ${s}`
            });
            return l.append(d), d
          }
        }
      }, SR7.preLoader = {
        show: (t, e) => {
          "off" !== (SR7.M[t]?.settings?.pLoader?.type ?? "off") && _tpt.preloader.show(e || SR7.M[t].c.module, SR7.M[t]?.settings?.pLoader ?? {
            color: "#fff",
            type: 10
          })
        },
        hide: (t, e) => {
          "off" !== (SR7.M[t]?.settings?.pLoader?.type ?? "off") && _tpt.preloader.hide(e || SR7.M[t].c.module)
        },
        state: (t, e) => _tpt.preloader.state(e || SR7.M[t].c.module)
      }, _tpt.prepareModuleHeight = function(t) {
        window.SR7.M ?? = {}, window.SR7.M[t.id] ?? = {}, "ignore" == t.googleFont && (SR7.E.ignoreGoogleFont = !0);
        let e = window.SR7.M[t.id];
        if (null == _tpt.scrollBarW && _tpt.mesureScrollBar(), e.c ?? = {}, e.states ?? = {}, e.settings ?? = {}, e.settings.size ?? = {}, t.fixed && (e.settings.fixed = !0), e.c.module = document.querySelector("sr7-module#" + t.id), e.c.adjuster = e.c.module.getElementsByTagName("sr7-adjuster")[0], e.c.content = e.c.module.getElementsByTagName("sr7-content")[0], "carousel" == t.type && (e.c.carousel = e.c.content.getElementsByTagName("sr7-carousel")[0]), null == e.c.module || null == e.c.module) return;
        t.plType && t.plColor && (e.settings.pLoader = {
          type: t.plType,
          color: t.plColor
        }), void 0 === t.plType || "off" === t.plType || SR7.preLoader.state(t.id) && SR7.preLoader.state(t.id, e.c.module) || SR7.preLoader.show(t.id, e.c.module), _tpt.winW || _tpt.getWinDim("prepare"), _tpt.getWinDim();
        let s = "" + e.c.module.dataset?.modal;
        "modal" == s || "true" == s || "undefined" !== s && "false" !== s || (e.settings.size.fullWidth = t.size.fullWidth, e.LEV ?? = _tpt.getResponsiveLevel(window.SR7.G.breakPoints, t.id), t.vpt = _tpt.fillArray(t.vpt, 5), e.settings.vPort = t.vpt[e.LEV], void 0 !== t.el && "720" == t.el[4] && t.gh[4] !== t.el[4] && "960" == t.el[3] && t.gh[3] !== t.el[3] && "768" == t.el[2] && t.gh[2] !== t.el[2] && delete t.el, e.settings.size.height = null == t.el || null == t.el[e.LEV] || 0 == t.el[e.LEV] || "auto" == t.el[e.LEV] ? _tpt.fillArray(t.gh, 5, -1) : _tpt.fillArray(t.el, 5, -1), e.settings.size.width = _tpt.fillArray(t.gw, 5, -1), e.settings.size.minHeight = _tpt.fillArray(t.mh ?? [0], 5, -1), e.cacheSize = {
          fullWidth: e.settings.size?.fullWidth,
          fullHeight: e.settings.size?.fullHeight
        }, void 0 !== t.off && (t.off?.t && (e.settings.size.m ?? = {}) && (e.settings.size.m.t = t.off.t), t.off?.b && (e.settings.size.m ?? = {}) && (e.settings.size.m.b = t.off.b), t.off?.l && (e.settings.size.p ?? = {}) && (e.settings.size.p.l = t.off.l), t.off?.r && (e.settings.size.p ?? = {}) && (e.settings.size.p.r = t.off.r), e.offsetPrepared = !0), _tpt.updatePMHeight(t.id, t, !0))
      }, _tpt.updatePMHeight = (t, e, s) => {
        let i = SR7.M[t];
        var n = i.settings.size.fullWidth ? _tpt.winW : i.c.module.parentNode.offsetWidth;
        n = 0 === n || isNaN(n) ? _tpt.winW : n;
        let o = i.settings.size.width[i.LEV] || i.settings.size.width[i.LEV++] || i.settings.size.width[i.LEV--] || n,
          l = i.settings.size.height[i.LEV] || i.settings.size.height[i.LEV++] || i.settings.size.height[i.LEV--] || 0,
          r = i.settings.size.minHeight[i.LEV] || i.settings.size.minHeight[i.LEV++] || i.settings.size.minHeight[i.LEV--] || 0;
        if (l = "auto" == l ? 0 : l, l = parseInt(l), "carousel" !== e.type && (n -= parseInt(e.onw ?? 0) || 0), i.MP = !i.settings.size.fullWidth && n < o || _tpt.winW < o ? Math.min(1, n / o) : 1, e.size.fullScreen || e.size.fullHeight) {
          let t = parseInt(e.fho) || 0,
            s = ("" + e.fho).indexOf("%") > -1;
          e.newh = _tpt.winH - (s ? _tpt.winH * t / 100 : t)
        } else e.newh = i.MP * Math.max(l, r);
        if (e.newh += (parseInt(e.onh ?? 0) || 0) + (parseInt(e.carousel?.pt) || 0) + (parseInt(e.carousel?.pb) || 0), void 0 !== e.slideduration && (e.newh = Math.max(e.newh, parseInt(e.slideduration) / 3)), e.shdw && _tpt.buildShadow(e.id, e), i.c.adjuster.style.height = e.newh + "px", i.c.module.style.height = e.newh + "px", i.c.content.style.height = e.newh + "px", i.states.heightPrepared = !0, i.dims ?? = {}, i.dims.moduleRect = i.c.module.getBoundingClientRect(), i.c.content.style.left = "-" + i.dims.moduleRect.left + "px", !i.settings.size.fullWidth) return s && requestAnimationFrame((() => {
          n !== i.c.module.parentNode.offsetWidth && _tpt.updatePMHeight(e.id, e)
        })), void _tpt.bgStyle(e.id, e, window.innerWidth == _tpt.winW, !0);
        _tpt.bgStyle(e.id, e, window.innerWidth == _tpt.winW, !0), requestAnimationFrame((function() {
          s && requestAnimationFrame((() => {
            n !== i.c.module.parentNode.offsetWidth && _tpt.updatePMHeight(e.id, e)
          }))
        })), i.earlyResizerFunction || (i.earlyResizerFunction = function() {
          requestAnimationFrame((function() {
            _tpt.getWinDim(), _tpt.moduleDefaults(e.id, e), _tpt.updateSlideBg(t, !0)
          }))
        }, window.addEventListener("resize", i.earlyResizerFunction))
      }, _tpt.buildShadow = function(t, e) {
        let s = SR7.M[t];
        null == s.c.shadow && (s.c.shadow = document.createElement("sr7-module-shadow"), s.c.shadow.classList.add("sr7-shdw-" + e.shdw), s.c.content.appendChild(s.c.shadow))
      }, _tpt.bgStyle = async (t, e, s, i, n) => {
        const o = SR7.M[t];
        if ((e = e ?? o.settings).fixed && !o.c.module.classList.contains("sr7-top-fixed") && (o.c.module.classList.add("sr7-top-fixed"), o.c.module.style.position = "fixed", o.c.module.style.width = "100%", o.c.module.style.top = "0px", o.c.module.style.left = "0px", o.c.module.style.pointerEvents = "none", o.c.module.style.zIndex = 5e3, o.c.content.style.pointerEvents = "none"), null == o.c.bgcanvas) {
          let t = document.createElement("sr7-module-bg"),
            l = !1;
          if ("string" == typeof e?.bg?.color && e?.bg?.color.includes("{"))
            if (_tpt.gradient && _tpt.gsap) e.bg.color = _tpt.gradient.convert(e.bg.color);
            else try {
              let t = JSON.parse(e.bg.color);
              (t?.orig || t?.string) && (e.bg.color = JSON.parse(e.bg.color))
            } catch (t) {
              return
            }
          let r = "string" == typeof e?.bg?.color ? e?.bg?.color || "transparent" : e?.bg?.color?.string ?? e?.bg?.color?.orig ?? e?.bg?.color?.color ?? "transparent";
          if (t.style["background" + (String(r).includes("grad") ? "" : "Color")] = r, ("transparent" !== r || n) && (l = !0), o.offsetPrepared && (t.style.visibility = "hidden"), e?.bg?.image?.src && (t.style.backgroundImage = `url(%24%7be1d2c.html?.bg?.image.src})`, t.style.backgroundSize = "" == (e.bg.image?.size ?? "") ? "cover" : e.bg.image.size, t.style.backgroundPosition = e.bg.image.position, t.style.backgroundRepeat = "" == e.bg.image.repeat || null == e.bg.image.repeat ? "no-repeat" : e.bg.image.repeat, l = !0), !l) return;
          o.c.bgcanvas = t, e.size.fullWidth ? t.style.width = _tpt.winW - (s && _tpt.winH < document.body.offsetHeight ? _tpt.scrollBarW : 0) + "px" : i && (t.style.width = o.c.module.offsetWidth + "px"), e.sbt?.use ? o.c.content.appendChild(o.c.bgcanvas) : o.c.module.appendChild(o.c.bgcanvas)
        }
        o.c.bgcanvas.style.height = void 0 !== e.newh ? e.newh + "px" : ("carousel" == e.type ? o.dims.module.h : o.dims.content.h) + "px", o.c.bgcanvas.style.left = !s && e.sbt?.use || o.c.bgcanvas.closest("SR7-CONTENT") ? "0px" : "-" + (o?.dims?.moduleRect?.left ?? 0) + "px"
      }, _tpt.updateSlideBg = function(t, e) {
        const s = SR7.M[t];
        let i = s.settings;
        s?.c?.bgcanvas && (i.size.fullWidth ? s.c.bgcanvas.style.width = _tpt.winW - (e && _tpt.winH < document.body.offsetHeight ? _tpt.scrollBarW : 0) + "px" : preparing && (s.c.bgcanvas.style.width = s.c.module.offsetWidth + "px"))
      }, _tpt.moduleDefaults = (t, e) => {
        let s = SR7.M[t];
        null != s && null != s.c && null != s.c.module && (s.dims ?? = {}, s.dims.moduleRect = s.c.module.getBoundingClientRect(), s.c.content.style.left = "-" + s.dims.moduleRect.left + "px", s.c.content.style.width = _tpt.winW - _tpt.scrollBarW + "px", "carousel" == e.type && (s.c.module.style.overflow = "visible"), _tpt.bgStyle(t, e, window.innerWidth == _tpt.winW))
      }, _tpt.getOffset = t => {
        var e = t.getBoundingClientRect(),
          s = window.pageXOffset || document.documentElement.scrollLeft,
          i = window.pageYOffset || document.documentElement.scrollTop;
        return {
          top: e.top + i,
          left: e.left + s
        }
      }, _tpt.fillArray = function(t, e) {
        let s, i;
        t = Array.isArray(t) ? t : [t];
        let n = Array(e),
          o = t.length;
        for (i = 0; i < t.length; i++) n[i + (e - o)] = t[i], null == s && "#" !== t[i] && (s = t[i]);
        for (let t = 0; t < e; t++) void 0 !== n[t] && "#" != n[t] || (n[t] = s), s = n[t];
        return n
      }, _tpt.closestGE = function(t, e) {
        let s = Number.MAX_VALUE,
          i = -1;
        for (let n = 0; n < t.length; n++) t[n] - 1 >= e && t[n] - 1 - e < s && (s = t[n] - 1 - e, i = n);
        return ++i
      }
    }();
  </script>
</head>

<body class="wp-singular page-template page-template-elementor_header_footer page page-id-2791 wp-embed-responsive wp-theme-peacealign elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-2791">
  <div class="search-wrap">
    <div class="search-inner">
      <i class="fas fa-times search-close" id="search-close"></i>
      <div class="search-cell">
        <form action="https://wp.tonictheme.com/wp067/">
          <div class="search-field-holder">
            <input type="text" name="s" class="main-search-input" placeholder="Search....">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--<< Mouse Cursor Start >>-->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>
  </div>
  </div>
  <div class="fix-area">
    <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a class="d-inline-block site-logo" href="https://wp.tonictheme.com/wp067">
                <img src="wp-content/uploads/2025/10/Frame-1810.png" alt="" />
              </a>
            </div>
            <div class="offcanvas__close">
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <p class="text d-none d-lg-block"> We understand better that enim ad minim veniam, consectetur adipis cing elit, sed do </p>
          <div class="mobile-menu fix mb-3"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>
  <div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      <!-- Header Top Start -->
      <?php require("common/header.php"); ?>
    </header>
    <div class="breadcrumb-wrapper section-padding bg-cover navbar-" style="background-image: url('wp-content/uploads/2025/10/image-52-16.png');">
      <div class="container">
        <div class="page-heading">
          <div class='breadcrumb-sub-title'>
            <h1 class="wow fadeInUp" data-wow-delay=".3s">About </h1>
          </div>
          <ul class="page-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>About</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <h2 class="fw-bold">Donation</h2>
    <div class="d-flex gap-4 my-2 flex-md-row flex-column">
      <div class="card w-md-75 w-50">
        <img src="./assets/img/ScannerForDonation.jpeg" class="card-img-top" alt="...">
      </div>
      <div class=" card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Give Donation</h5>
          <p class="card-text">
            ✨ "Giving is the greatest act of compassion."<br>
            ✨ "Dana (charity) purifies the heart." — Buddha" <br>
            ✨ "A small act of kindness can change many lives."<br>
            ✨ "The gift of giving is the gift of peace."<br>
            ✨ "Help others rise — this is true Buddhism."<br>
            ✨ "Compassion is the path. Giving is the practice."<br>
            ✨ "Support goodness today — create merit for tomorrow."<br>
            ✨ "Your generosity becomes someone's hope."<br>
            ✨ "Give not because you have much, but because you care."<br>
            ✨ "When we share, happiness multiplies."<br>
          </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- #content -->
  <footer class="footer-section footer-bg">
    <div class="container">
      <div class="footer-widgets-wrapper">
        <div class="footer_rows ">
          <div class=" first_about wow fadeInUp" data-wow-delay=".2s">
            <div id="peacealign_footer_2_about_widget-1" class="single-footer-widget style-margin peacealign-widget-about">
              <div class="single-footer-widget">
                <div class="widget-head">
                  <a href="index.html">
                    <img src="wp-content/uploads/2025/10/Frame-1810.png" alt="">
                  </a>
                </div>
                <div class="footer-content">
                  <p> It is a long established fact that a reader will be distracted the readable content of a page when looking at its layouts. </p>
                </div>
              </div>
            </div>
            <div id="peacealign_social_share_widget-1" class="single-footer-widget style-margin peacealign-social-share-about">
              <div class="social-share-widget">
                <h4 class="widget-headline"></h4>
                <ul class="social-icon style-03">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- secon_about -->
          <div class="fiab1 wow fadeInUp last_newsletter" data-wow-delay=".9s">
            <div id="text-20" class="single-footer-widget ml-30 style-margin widget_text">
              <h2 class="widgettitle">Contact</h2>
              <div class="textwidget"></div>
            </div>
            <div id="peacealign_topbar_contact_info_widget-1" class="single-footer-widget ml-30 style-margin peacealign-widget-contact-info">
              <div class="contact-info-area-5">
                <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="content">
                    <!-- <p></p> -->
                    <h3>
                      <a href="#">4821 Ridge Top Cir, USA.</a>
                    </h3>
                  </div>
                </div>
                <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="content">
                    <!-- <p></p> -->
                    <h3>
                      <a href="#">peacealign@gmail.com</a>
                    </h3>
                  </div>
                </div>
                <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                  <div class="icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="content">
                    <!-- <p></p> -->
                    <h3>
                      <a href="#">+91 7852545895</a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- secon1_about -->
          <div class=" wow fadeInUp" data-wow-delay=".6s">
            <div id="nav_menu-27" class="single-footer-widget style-margin widget_nav_menu">
              <div class="widget-head">
                <h5>Quick Link</h5>
              </div>
              <div class="menu-footer-menu-container">
                <ul id="menu-footer-menu" class="menu">
                  <li id="menu-item-26284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-26284">
                    <a href="index.html">Home</a>
                  </li>
                  <li id="menu-item-26285" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2791 current_page_item menu-item-26285">
                    <a href="index.html" aria-current="page">About</a>
                  </li>
                  <li id="menu-item-32286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32286">
                    <a href="services/index.html">Services</a>
                  </li>
                  <li id="menu-item-26288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26288">
                    <a href="gallery/index.html">Gallery</a>
                  </li>
                  <li id="menu-item-26286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26286">
                    <a href="contact/index.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- secon2_about -->
          <div class="fiab12 wow fadeInUp" data-wow-delay=".8s">
            <div id="peacealign_footer_gallery_widget-1" class="single-footer-widget style-margin peacealign-widget-gallery">
              <div class="widget-head">
                <h5>Gallery</h5>
              </div>
              <div class="footer-gallery">
                <div class="gallery-wrap">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="wp-content/uploads/2025/10/image-105.png" class="img-popup">
                        <img src="wp-content/uploads/2025/10/image-105.png" alt="">
                        <div class="icon">
                          <i class="far fa-plus"></i>
                        </div>
                      </a>
                    </div>
                    <div class="thumb">
                      <a href="wp-content/uploads/2025/10/image-106-2.png" class="img-popup">
                        <img src="wp-content/uploads/2025/10/image-106-2.png" alt="">
                        <div class="icon">
                          <i class="far fa-plus"></i>
                        </div>
                      </a>
                    </div>
                    <div class="thumb">
                      <a href="wp-content/uploads/2025/10/image-106-3.png" class="img-popup">
                        <img src="wp-content/uploads/2025/10/image-106-3.png" alt="">
                        <div class="icon">
                          <i class="far fa-plus"></i>
                        </div>
                      </a>
                    </div>
                    <div class="thumb">
                      <a href="wp-content/uploads/2025/10/image-107-1.png" class="img-popup">
                        <img src="wp-content/uploads/2025/10/image-107-1.png" alt="">
                        <div class="icon">
                          <i class="far fa-plus"></i>
                        </div>
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
  </footer>
  </div>
  <!-- #page -->
  <script type="speculationrules"> {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/wp067\/*"},{"not":{"href_matches":["\/wp067\/wp-*.php","\/wp067\/wp-admin\/*","\/wp067\/wp-content\/uploads\/*","\/wp067\/wp-content\/*","\/wp067\/wp-content\/plugins\/*","\/wp067\/wp-content\/themes\/peacealign\/*","\/wp067\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
  <script>
    const lazyloadRunObserver = () => {
      const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
      const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            let lazyloadBackground = entry.target;
            if (lazyloadBackground) {
              lazyloadBackground.classList.add('e-lazyloaded');
            }
            lazyloadBackgroundObserver.unobserve(entry.target);
          }
        });
      }, {
        rootMargin: '200px 0px 200px 0px'
      });
      lazyloadBackgrounds.forEach((lazyloadBackground) => {
        lazyloadBackgroundObserver.observe(lazyloadBackground);
      });
    };
    const events = ['DOMContentLoaded', 'elementor/lazyload/observe', ];
    events.forEach((event) => {
      document.addEventListener(event, lazyloadRunObserver);
    });
  </script>
  <script type="text/javascript" src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
  <script type="text/javascript" id="wp-i18n-js-after">
    /* 
                                                  
                          <![CDATA[ */
    wp.i18n.setLocaleData({
      'text direction\u0004ltr': ['ltr']
    });
    /* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/index658f.js?ver=6.1.2" id="swv-js"></script>
  <script type="text/javascript" id="contact-form-7-js-before">
    /* 
                                                  
                          <![CDATA[ */
    var wpcf7 = {
      "api": {
        "root": "https:\/\/wp.tonictheme.com\/wp067\/wp-json\/",
        "namespace": "contact-form-7\/v1"
      }
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/index658f.js?ver=6.1.2" id="contact-form-7-js"></script>
  <script type="text/javascript" src="wp-content/plugins/peacealign-core/assets/js/bootstrap.bundle.min9dff.js?ver=5.3.2" id="bootstrap-js"></script>
  <script type="text/javascript" src="wp-content/plugins/peacealign-core/assets/js/wow.min6f3e.js?ver=1.3.0" id="wow-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/bootstrap.bundle.min9dff.js?ver=5.3.2" id="bootstrap-js-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/gsap/gsapb5ca.js?ver=3.11.4" id="gsap-js-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/gsap/gsap-scroll-triggerb5ca.js?ver=3.11.4" id="gsap-scroll-trigger-js-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/gsap/gsap-split-textb5ca.js?ver=3.11.4" id="gsap-split-text-js-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/jquery.counterup.min8a54.js?ver=1.0.0" id="counterup-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/jquery.magnific-popup.minf488.js?ver=1.1.0" id="magnific-popup-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/jquery.meanmenu.mina7f4.js?ver=2.0.8" id="meanmenu-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/jquery.nice-select.min8a54.js?ver=1.0.0" id="nice-select-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/slick.minf39e.js?ver=4.0.1" id="slick-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/slick-animation.minf39e.js?ver=4.0.1" id="slick-animation-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/jquery.waypointsf39e.js?ver=4.0.1" id="waypoints-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/swiper-bundle.min5d50.js?ver=8.3.2" id="swiper-bundle-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/viewport.jquery8a54.js?ver=1.0.0" id="viewport-js"></script>
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/maina148.js?ver=1762017854" id="peacealign-main-script-js"></script>
  <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min4a4c.js?ver=3.32.4" id="elementor-webpack-runtime-js"></script>
  <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.min4a4c.js?ver=3.32.4" id="elementor-frontend-modules-js"></script>
  <script type="text/javascript" src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
  <script type="text/javascript" id="elementor-frontend-js-before">
    /* 
                                                  
                          <![CDATA[ */
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
            "is_enabled": false
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
            "is_enabled": false
          },
          "widescreen": {
            "label": "Widescreen",
            "value": 2400,
            "default_value": 2400,
            "direction": "min",
            "is_enabled": false
          }
        },
        "hasCustomBreakpoints": false
      },
      "version": "3.32.4",
      "is_static": false,
      "experimentalFeatures": {
        "e_font_icon_svg": true,
        "additional_custom_breakpoints": true,
        "container": true,
        "e_optimized_markup": true,
        "theme_builder_v2": true,
        "nested-elements": true,
        "home_screen": true,
        "global_classes_should_enforce_capabilities": true,
        "e_variables": true,
        "cloud-library": true,
        "e_opt_in_v4_page": true,
        "import-export-customization": true
      },
      "urls": {
        "assets": "https:\/\/wp.tonictheme.com\/wp067\/wp-content\/plugins\/elementor\/assets\/",
        "ajaxurl": "https:\/\/wp.tonictheme.com\/wp067\/wp-admin\/admin-ajax.php",
        "uploadUrl": "https:\/\/wp.tonictheme.com\/wp067\/wp-content\/uploads"
      },
      "nonces": {
        "floatingButtonsClickTracking": "a0d8de7172"
      },
      "swiperClass": "swiper",
      "settings": {
        "page": [],
        "editorPreferences": []
      },
      "kit": {
        "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
        "global_image_lightbox": "yes",
        "lightbox_enable_counter": "yes",
        "lightbox_enable_fullscreen": "yes",
        "lightbox_enable_zoom": "yes",
        "lightbox_enable_share": "yes",
        "lightbox_title_src": "title",
        "lightbox_description_src": "description"
      },
      "post": {
        "id": 2791,
        "title": "About%20%E2%80%93%20PeaceAlign",
        "excerpt": "",
        "featuredImage": false
      }
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min4a4c.js?ver=3.32.4" id="elementor-frontend-js"></script>
  <script type="text/javascript" src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min9e35.js?ver=3.26.2" id="elementor-pro-webpack-runtime-js"></script>
  <script type="text/javascript" id="elementor-pro-frontend-js-before">
    /* 
                                                  
                          <![CDATA[ */
    var ElementorProFrontendConfig = {
      "ajaxurl": "https:\/\/wp.tonictheme.com\/wp067\/wp-admin\/admin-ajax.php",
      "nonce": "6c43dc06a7",
      "urls": {
        "assets": "https:\/\/wp.tonictheme.com\/wp067\/wp-content\/plugins\/elementor-pro\/assets\/",
        "rest": "https:\/\/wp.tonictheme.com\/wp067\/wp-json\/"
      },
      "settings": {
        "lazy_load_background_images": true
      },
      "popup": {
        "hasPopUps": true
      },
      "shareButtonsNetworks": {
        "facebook": {
          "title": "Facebook",
          "has_counter": true
        },
        "twitter": {
          "title": "Twitter"
        },
        "linkedin": {
          "title": "LinkedIn",
          "has_counter": true
        },
        "pinterest": {
          "title": "Pinterest",
          "has_counter": true
        },
        "reddit": {
          "title": "Reddit",
          "has_counter": true
        },
        "vk": {
          "title": "VK",
          "has_counter": true
        },
        "odnoklassniki": {
          "title": "OK",
          "has_counter": true
        },
        "tumblr": {
          "title": "Tumblr"
        },
        "digg": {
          "title": "Digg"
        },
        "skype": {
          "title": "Skype"
        },
        "stumbleupon": {
          "title": "StumbleUpon",
          "has_counter": true
        },
        "mix": {
          "title": "Mix"
        },
        "telegram": {
          "title": "Telegram"
        },
        "pocket": {
          "title": "Pocket",
          "has_counter": true
        },
        "xing": {
          "title": "XING",
          "has_counter": true
        },
        "whatsapp": {
          "title": "WhatsApp"
        },
        "email": {
          "title": "Email"
        },
        "print": {
          "title": "Print"
        },
        "x-twitter": {
          "title": "X"
        },
        "threads": {
          "title": "Threads"
        }
      },
      "facebook_sdk": {
        "lang": "en_US",
        "app_id": ""
      },
      "lottie": {
        "defaultAnimationUrl": "https:\/\/wp.tonictheme.com\/wp067\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
      }
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/elementor-pro/assets/js/frontend.min9e35.js?ver=3.26.2" id="elementor-pro-frontend-js"></script>
  <script type="text/javascript" src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min9e35.js?ver=3.26.2" id="pro-elements-handlers-js"></script>
</body>

</html>