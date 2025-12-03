<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>Services &#8211; PeaceAlign</title>
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
  <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/peacealign/assets/css/flaticonfbaa.css?ver=1762017856' type='text/css' media='all' />
  <link rel='stylesheet' id='swiper-bundle-css' href='wp-content/themes/peacealign/assets/css/swiper-bundle.minfbaa.css?ver=1762017856' type='text/css' media='all' />
  <link rel='stylesheet' id='slick-css' href='wp-content/themes/peacealign/assets/css/slickfbaa.css?ver=1762017856' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-main-style-css' href='wp-content/themes/peacealign/assets/css/mainfbaa.css?ver=1762017856' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-fix-css' href='wp-content/themes/peacealign/assets/css/wp-fixfbaa.css?ver=1762017856' type='text/css' media='all' />
  <link rel='stylesheet' id='peacealign-style-css' href='wp-content/themes/peacealign/style32d4.css?ver=6.8.3' type='text/css' media='all' />
  <style id='peacealign-style-inline-css' type='text/css'>
    .page-content-wrap-4186 {
      padding-top: 100px;
      padding-bottom: 100px;
    }

    .page-content-inner-4186 {}

    .page-content-inner-4186 .entry-content {
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
  <link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='e-animation-zoomInUp-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/zoomInUp.min4a4c.css?ver=3.32.4' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-post-4186-css' href='wp-content/uploads/elementor/css/post-41865b00.css?ver=1760762008' type='text/css' media='all' />
  <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
  <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="wp-content/plugins/revslider/public/js/libs/tptoolsd3f8.js?ver=6.7.33" id="tp-tools-js" async="async" data-wp-strategy="async"></script>
  <script type="text/javascript" src="wp-content/plugins/revslider/public/js/sr7d3f8.js?ver=6.7.33" id="sr7-js" async="async" data-wp-strategy="async"></script>
  <link rel="https://api.w.org/" href="wp-json/index.html" />
  <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/4186.json" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <meta name="generator" content="WordPress 6.8.3" />
  <link rel="canonical" href="index.html" />
  <link rel='shortlink' href='index72bc.html?p=4186' />
  <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed996d.json?url=https%3A%2F%2Fwp.tonictheme.com%2Fwp067%2Fservices%2F" />
  <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed8c9a?url=https%3A%2F%2Fwp.tonictheme.com%2Fwp067%2Fservices%2F&amp;format=xml" />
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
</head>

<body class="wp-singular page-template page-template-elementor_header_footer page page-id-4186 wp-embed-responsive wp-theme-peacealign elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-4186">
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
  <?php //require("common/loader.php"); 
  ?>
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
          <div class="header-button mt-4">
            <a href="#" class="theme-bttnn text-center">
              <span> Buy Now
                <!-- <i class="fas fa-arrow-right"></i>   -->
              </span>
            </a>
          </div>
          <div class="offcanvas__contact">
            <h4>Contact Info</h4>
            <div class="header-button mt-4">
              <a href="#" class="theme-btn text-center">
                <span> Buy Now <i class="fa-solid fa-arrow-right-long"></i>
                </span>
              </a>
            </div>
          </div>
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
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header">
      <!-- Header Top Start -->
      <?php require("common/header.php"); ?>
    </header>
    <div class="breadcrumb-wrapper section-padding bg-cover navbar-" style="background-image: url('wp-content/uploads/2025/10/image-52-17.png');">
      <div class="container">
        <div class="page-heading">
          <div class='breadcrumb-sub-title'>
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Services </h1>
          </div>
          <ul class="page-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>Services</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content" class="site-content">
    <div data-elementor-type="wp-page" data-elementor-id="4186" class="elementor elementor-4186" data-elementor-post-type="page">
      <div class="elementor-element elementor-element-524b41f e-flex e-con-boxed e-con e-parent" data-id="524b41f" data-element_type="container">
        <div class="e-con-inner">
          <div class="elementor-element elementor-element-445a310 e-con-full e-flex e-con e-child" data-id="445a310" data-element_type="container">
            <div class="elementor-element elementor-element-099c95e e-grid e-con-full e-con e-child" data-id="099c95e" data-element_type="container">
              <div class="elementor-element elementor-element-3e97a9a e-con-full e-flex elementor-invisible e-con e-child" data-id="3e97a9a" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-026d3c6 elementor-widget elementor-widget-image" data-id="026d3c6" data-element_type="widget" data-widget_type="image.default">
                  <img fetchpriority="high" decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-51-1.png" class="attachment-full size-full wp-image-32359" alt="" />
                </div>
                <div class="elementor-element elementor-element-f0835f9 e-con-full e-flex e-con e-child" data-id="f0835f9" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-b3d3d08 elementor-widget elementor-widget-heading" data-id="b3d3d08" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Compassion</h2>
                  </div>
                  <div class="elementor-element elementor-element-c923ed1 elementor-widget elementor-widget-text-editor" data-id="c923ed1" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-87b603f elementor-absolute elementor-widget elementor-widget-image" data-id="87b603f" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-8_SVG-1.svg" class="attachment-full size-full wp-image-32366" alt="" />
                </div>
              </div>
              <div class="elementor-element elementor-element-49bee80 e-con-full e-flex elementor-invisible e-con e-child" data-id="49bee80" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-3753cbf elementor-widget elementor-widget-image" data-id="3753cbf" data-element_type="widget" data-widget_type="image.default">
                  <img decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-51-2.png" class="attachment-full size-full wp-image-32388" alt="" />
                </div>
                <div class="elementor-element elementor-element-38eca28 e-con-full e-flex e-con e-child" data-id="38eca28" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-1a2c282 elementor-widget elementor-widget-heading" data-id="1a2c282" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Mindfulness</h2>
                  </div>
                  <div class="elementor-element elementor-element-3b33163 elementor-widget elementor-widget-text-editor" data-id="3b33163" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-86a2214 elementor-absolute elementor-widget elementor-widget-image" data-id="86a2214" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-9_SVG.svg" class="attachment-full size-full wp-image-32386" alt="" />
                </div>
              </div>
              <div class="elementor-element elementor-element-c1fc8af e-con-full e-flex elementor-invisible e-con e-child" data-id="c1fc8af" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-b21effe elementor-widget elementor-widget-image" data-id="b21effe" data-element_type="widget" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-51-3.png" class="attachment-full size-full wp-image-32387" alt="" />
                </div>
                <div class="elementor-element elementor-element-4249746 e-con-full e-flex e-con e-child" data-id="4249746" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-8fc43ef elementor-widget elementor-widget-heading" data-id="8fc43ef" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Wisdom</h2>
                  </div>
                  <div class="elementor-element elementor-element-ccb4000 elementor-widget elementor-widget-text-editor" data-id="ccb4000" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-adfca3d elementor-absolute elementor-widget elementor-widget-image" data-id="adfca3d" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-10_SVG-1.svg" class="attachment-full size-full wp-image-32385" alt="" />
                </div>
              </div>
              <div class="elementor-element elementor-element-f907232 e-con-full e-flex elementor-invisible e-con e-child" data-id="f907232" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-3d181f0 elementor-widget elementor-widget-image" data-id="3d181f0" data-element_type="widget" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-112-3.png" class="attachment-full size-full wp-image-32582" alt="" />
                </div>
                <div class="elementor-element elementor-element-6306d74 e-con-full e-flex e-con e-child" data-id="6306d74" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-05e534b elementor-widget elementor-widget-heading" data-id="05e534b" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Balance</h2>
                  </div>
                  <div class="elementor-element elementor-element-07ce8ec elementor-widget elementor-widget-text-editor" data-id="07ce8ec" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-bed0ff7 elementor-absolute elementor-widget elementor-widget-image" data-id="bed0ff7" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-11_SVG-2.svg" class="attachment-full size-full wp-image-32583" alt="" />
                </div>
              </div>
              <div class="elementor-element elementor-element-dd5e01d e-con-full e-flex elementor-invisible e-con e-child" data-id="dd5e01d" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-b7de2bc elementor-widget elementor-widget-image" data-id="b7de2bc" data-element_type="widget" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-112-4.png" class="attachment-full size-full wp-image-32585" alt="" />
                </div>
                <div class="elementor-element elementor-element-2195e09 e-con-full e-flex e-con e-child" data-id="2195e09" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-f16ff2c elementor-widget elementor-widget-heading" data-id="f16ff2c" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Positivity</h2>
                  </div>
                  <div class="elementor-element elementor-element-7fcecf5 elementor-widget elementor-widget-text-editor" data-id="7fcecf5" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-01a4d31 elementor-absolute elementor-widget elementor-widget-image" data-id="01a4d31" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-113_SVG-1.svg" class="attachment-full size-full wp-image-32584" alt="" />
                </div>
              </div>
              <div class="elementor-element elementor-element-cc6251b e-con-full e-flex elementor-invisible e-con e-child" data-id="cc6251b" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;zoomInUp&quot;}">
                <div class="elementor-element elementor-element-0a69d7a elementor-widget elementor-widget-image" data-id="0a69d7a" data-element_type="widget" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="400" height="400" src="wp-content/uploads/2025/10/image-115-2.png" class="attachment-full size-full wp-image-32587" alt="" />
                </div>
                <div class="elementor-element elementor-element-1c9af9b e-con-full e-flex e-con e-child" data-id="1c9af9b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                  <div class="elementor-element elementor-element-f8112fd elementor-widget elementor-widget-heading" data-id="f8112fd" data-element_type="widget" data-widget_type="heading.default">
                    <h2 class="elementor-heading-title elementor-size-default">Meditation</h2>
                  </div>
                  <div class="elementor-element elementor-element-7c5d933 elementor-widget elementor-widget-text-editor" data-id="7c5d933" data-element_type="widget" data-widget_type="text-editor.default">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-b4e1046 elementor-absolute elementor-widget elementor-widget-image" data-id="b4e1046" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                  <img loading="lazy" decoding="async" width="60" height="60" src="wp-content/uploads/2025/10/image-114_SVG-1.svg" class="attachment-full size-full wp-image-32586" alt="" />
                </div>
              </div>
            </div>
          </div>
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
                  <li id="menu-item-26285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26285">
                    <a href="about/index.html">About</a>
                  </li>
                  <li id="menu-item-32286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4186 current_page_item menu-item-32286">
                    <a href="index.html" aria-current="page">Services</a>
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
  <script type="text/javascript" src="wp-content/themes/peacealign/assets/js/mainfbaa.js?ver=1762017856" id="peacealign-main-script-js"></script>
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
        "id": 4186,
        "title": "Services%20%E2%80%93%20PeaceAlign",
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
<!-- Mirrored from wp.tonictheme.com/wp067/services/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Nov 2025 17:26:17 GMT -->

</html>