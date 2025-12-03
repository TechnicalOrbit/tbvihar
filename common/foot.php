
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
<link href="http://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;600;700&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">

<script type="text/javascript" src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script type="text/javascript" src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>

<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/index658f.js?ver=6.1.2" id="swv-js"></script>

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
<script type="text/javascript" src="wp-content/themes/peacealign/assets/js/main964a.js?ver=1762017809" id="peacealign-main-script-js"></script>
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
      "id": 9322,
      "title": "PeaceAlign",
      "excerpt": "",
      "featuredImage": false
    }
  };
  /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min4a4c.js?ver=3.32.4" id="elementor-frontend-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0" id="elementor-gallery-js"></script>
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
