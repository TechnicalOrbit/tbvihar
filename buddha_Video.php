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
            <h1 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Videos </h1>
          </div>
          <ul class="page-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>Videos</span>
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
      "https://www.youtube.com/embed/QjlSBj_wg_Q?si=V5pPMs3i3tDMGXd_",
      "https://www.youtube.com/embed/aM71qEEI1yI?si=9jP9mI3vxVPYPJAu",
      "https://www.youtube.com/embed/pOox5Ov-RSw?si=wqbLVUdEZyMKQQnC",
      "https://www.youtube.com/embed/6Dhw_ja8C3k?si=b_rwtf-ynixv7QAk",
      "https://www.youtube.com/embed/wkRkF_9zcgs?si=ymTkyYYqvyXrQTfF",
      "https://www.youtube.com/embed/3cDyVL9rCKU?si=GnlCKTcwv7efwWU6",
      "https://www.youtube.com/embed/jn6hrtgKOQk?si=HHF3W-lrkrXC0tha",
      "https://www.youtube.com/embed/RMpeFO0iViw?si=Im7FwtQ6vLYmVJ3W",
      "https://www.youtube.com/embed/8lAed8lhfOI?si=D0AAG_MG27fzv_Og"
    ];




    var i = 0;
    innerhtml += `<div class="container my-4">`;
    srcs.map((src) => {
      if (i == 0) {
        innerhtml += `<div class="row">`
      }
      innerhtml += `<div class="col-md-4 my-2" >
            <iframe style="width:100%;min-height:15rem !important;"  src=${src} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen ></iframe>
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