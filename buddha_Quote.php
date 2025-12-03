<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
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
            <h1 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Buddha Quotes </h1>
          </div>
          <ul class="page-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>Buddha Quotes</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="content" class="site-content py-4">

    </div>
    <!-- #content -->
    <?php require("common/footer.php"); ?>
  </div>
  <!-- #page -->

  <?php require("common/foot.php"); ?>

  <script>
    let container = document.getElementById("content");
    let innerhtml = '';
    const quotes = [
      "Peace comes from within. Do not seek it without.",
      "The mind is everything. What you think you become.",
      "Three things cannot be long hidden: the sun, the moon, and the truth.",

      "Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.",

      "Thousands of candles can be lighted from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.",

      "Holding onto anger is like drinking poison and expecting the other person to die.",

      "Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship.",

      "No one saves us but ourselves. No one can and no one may. We ourselves must walk the path.",

      "You, yourself, as much as anybody in the entire universe, deserve your love and affection.",

      "It is better to conquer yourself than to win a thousand battles. Then the victory is yours. It cannot be taken from you.",
      "If you light a lamp for someone else, it will also brighten your path.",
      "Nothing can harm you as much as your own unguarded thoughts."

    ]
    var i = 0;
    innerhtml += `<div class="container">`
    quotes.map((quote) => {
      if (i == 0) {
        innerhtml += `<div class="row">`
      }
      innerhtml += `  <div class="col col-md-4">
        <div class="card my-2 text-center">
          <img src="./assets/img/buddhaImg.png" class="card-img-top" alt="..." style="height: 280px; object-fit:cover;">
          <div class="card-body">
            <p class="card-text">${quote}</p>
            <div class="d-flex justify-content-center align-items-center">
              <a href="#" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 30px;">
                  <path d="M144 224C161.7 224 176 238.3 176 256L176 512C176 529.7 161.7 544 144 544L96 544C78.3 544 64 529.7 64 512L64 256C64 238.3 78.3 224 96 224L144 224zM334.6 80C361.9 80 384 102.1 384 129.4L384 133.6C384 140.4 382.7 147.2 380.2 153.5L352 224L512 224C538.5 224 560 245.5 560 272C560 291.7 548.1 308.6 531.1 316C548.1 323.4 560 340.3 560 360C560 383.4 543.2 402.9 521 407.1C525.4 414.4 528 422.9 528 432C528 454.2 513 472.8 492.6 478.3C494.8 483.8 496 489.8 496 496C496 522.5 474.5 544 448 544L360.1 544C323.8 544 288.5 531.6 260.2 508.9L248 499.2C232.8 487.1 224 468.7 224 449.2L224 262.6C224 247.7 227.5 233 234.1 219.7L290.3 107.3C298.7 90.6 315.8 80 334.6 80z" />
                </svg>
                <b>Like</b>
              </a>
              <a href="#" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 30px;">
                  <path d="M448 256C501 256 544 213 544 160C544 107 501 64 448 64C395 64 352 107 352 160C352 165.4 352.5 170.8 353.3 176L223.6 248.1C206.7 233.1 184.4 224 160 224C107 224 64 267 64 320C64 373 107 416 160 416C184.4 416 206.6 406.9 223.6 391.9L353.3 464C352.4 469.2 352 474.5 352 480C352 533 395 576 448 576C501 576 544 533 544 480C544 427 501 384 448 384C423.6 384 401.4 393.1 384.4 408.1L254.7 336C255.6 330.8 256 325.5 256 320C256 314.5 255.5 309.2 254.7 304L384.4 231.9C401.3 246.9 423.6 256 448 256z" />
                </svg>
                <b>Share</b>
              </a>
              <a href="#" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 30px;">
                  <path d="M64 304C64 358.4 83.3 408.6 115.9 448.9L67.1 538.3C65.1 542 64 546.2 64 550.5C64 564.6 75.4 576 89.5 576C93.5 576 97.3 575.4 101 573.9L217.4 524C248.8 536.9 283.5 544 320 544C461.4 544 576 436.5 576 304C576 171.5 461.4 64 320 64C178.6 64 64 171.5 64 304zM158 471.9C167.3 454.8 165.4 433.8 153.2 418.7C127.1 386.4 112 346.8 112 304C112 200.8 202.2 112 320 112C437.8 112 528 200.8 528 304C528 407.2 437.8 496 320 496C289.8 496 261.3 490.1 235.7 479.6C223.8 474.7 210.4 474.8 198.6 479.9L140 504.9L158 471.9zM208 336C225.7 336 240 321.7 240 304C240 286.3 225.7 272 208 272C190.3 272 176 286.3 176 304C176 321.7 190.3 336 208 336zM352 304C352 286.3 337.7 272 320 272C302.3 272 288 286.3 288 304C288 321.7 302.3 336 320 336C337.7 336 352 321.7 352 304zM432 336C449.7 336 464 321.7 464 304C464 286.3 449.7 272 432 272C414.3 272 400 286.3 400 304C400 321.7 414.3 336 432 336z" />
                </svg>
                <b>Comment</b>
              </a>
            </div>
          </div>
        </div>
      </div>`
      i++;
      if (i == 3) {
        innerhtml += `</div>`
        i = 0;
      }
    });
    innerhtml += `</div>`
    container.innerHTML = innerhtml;
  </script>

</body>

</html>