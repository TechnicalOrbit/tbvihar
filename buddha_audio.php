<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require("common/head.php"); ?>
</head>

<body class="home wp-singular page-template page-template-elementor_header_footer page page-id-9322 wp-embed-responsive wp-theme-peacealign elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-9322">
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
          <div class="breadcrumb-sub-title">
            <h1 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Audios </h1>
          </div>
          <ul class="page-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>Audios</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="content" class="site-content">

    </div>
    <!-- #content -->
    <?php require("common/footer.php"); ?>
  </div>
  <!-- #page -->

  <?php require("common/foot.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    let content = document.querySelector("#content");
    let innerhtml = "";
    const srcs = [
      "https://www.youtube.com/embed/NGqUGF2Zi7I?si=Ikl1UZVcIH7FhHFx",
      "https://www.youtube.com/embed/zAuv84K75ns?si=tdlZ7UOxAYVbjw1w",
      "https://www.youtube.com/embed/luLt1JyRaFU?si=GrQMVrz7uh_Rr3dx",
      "https://www.youtube.com/embed/oDmszb8vE7Y?si=0IcfyiXJ3EK-WAKm",
      "https://www.youtube.com/embed/hUj5e_7qwgU?si=_6BH8axM4U0o3745",
      "https://www.youtube.com/embed/M_oxIGJNkPw?si=zlbRegPK3XkweMRI",
      "https://www.youtube.com/embed/45BC092h7BI?si=FR0UAzQlnvEP6ey6",
      "https://www.youtube.com/embed/xBb7_fxUtsw?si=Nfal4PCQ5cx_hwS1",
      "https://www.youtube.com/embed/rOCbkcPg2Ms?si=rW_YcedWw0v1lnlF",
    ];




    var i = 0;
    innerhtml += `<div class="container my-4">`;
    srcs.map((src) => {
      if (i == 0) {
        innerhtml += `<div class="row">`
      }
      innerhtml += `<div class="col-md-4 my-2" >
            <iframe style="width:100%;min-height:15rem !important;" src=${src} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>`;
      i++;
      if (i == 3) {
        innerhtml += `</div>`
        i = 0;
      }
    })
    innerhtml += `</div>`;
    content.innerHTML = innerhtml;
  </script>
</body>

</html>