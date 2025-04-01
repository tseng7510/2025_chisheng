<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <img src="images/index/banner.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <img src="images/index/banner.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>

        </div>


        <section class="worksBox">
          <div class="outerBox">
            <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">精選作品</h2>
            <div class="slogan wow fadeInUp" data-wow-delay="0s">為您守護空間安全，提供更安心無憂的環境案例</div>
            <div class="container">
              <div class="listBox">
                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item">
                    <a href="#">
                      <div class="pic"><img src="images/index/p.jpg" alt=""></div>
                      <div class="infoBox">
                        <h3 class="title">桂田盤古 <span>10F_A棟_吳宅</span></h3>
                        <div class="description">施工項目｜『撒水管修改』、『偵煙器延伸』</div>
                      </div>
                    </a>
                  </div>
                <? } ?>
              </div>
            </div>
            <a href="works.php" class="more">MORE</a>
          </div>
        </section>

        <section class="newsBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="side">
                <h2 class="blockTitle">最新消息<span>NEWS</span></h2>
                <div class="infoBox">
                  <div class="slickBox">

                    <? for ($i = 0; $i < 4; $i++) { ?>
                      <div class="item">
                        <a href="news_detail.php">
                          <h3 class="title">為什麼你的裝修案場進度總是延誤？答案在這裡！1</h3>
                          <div class="description">消防工程_大樓室內裝修．身為室內設計師的你，是否曾經因為找不到合適的消防廠商而</div>
                          <div class="more"><span>READ</span> MORE</div>
                        </a>
                      </div>
                    <? } ?>

                  </div>
                </div>
                <div class="controlBox">
                  <div class="slickArrow slick_prev"><svg class="load" viewBox="29 29 42 42">
                      <circle class="loading" cx="50" cy="50" r="20" fill="none"></circle>
                    </svg></div>
                  <div class="slickArrow slick_next"><svg class="load" viewBox="29 29 42 42">
                      <circle class="loading" cx="50" cy="50" r="20" fill="none"></circle>
                    </svg></div>
                </div>
              </div>
              <div class="listBox">
                <div class="slickBox">

                  <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="item">
                      <div class="pic"><img src="images/index/n.jpg" alt=""></div>
                      <a href="news_detail.php">
                        <div class="more"><span>READ</span> MORE</div>
                      </a>
                    </div>
                  <? } ?>

                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="pic"><img src="images/index/a.jpg" alt=""></div>
              <div class="infoBox">
                <div class="top">
                  <h2 class="blockTitle">CHISHENG</h2>
                  <div class="subTitle">ABOUT</div>
                </div>
                <div class="info">
                  <div class="description">騏昇消防工程企業以『安全』的概念為核心，給予使用者「預防為主、應急為輔」的使用環境，讓日常生活更安心無憂。我們的專業團隊會讓你事半功倍，解決你的煩惱，讓你的設計作品更出色，也讓客戶能更安心的入住。</div>
                </div>
                <a href="about.php" class="more"><span>READ</span> MORE</a>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>


  <script type="text/javascript">
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });

    $(function() {
      $('.newsBox .side .slickBox').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.newsBox .listBox .slickBox',
        arrows: true,
        prevArrow: $('.newsBox .slickArrow.slick_prev'),
        nextArrow: $('.newsBox .slickArrow.slick_next'),
      })

      $('.newsBox .listBox .slickBox').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        // variableWidth: true,
        infinite: false,
        asNavFor: '.newsBox .side .slickBox',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        responsive: [{
          breakpoint: 1600,
          settings: {
            slidesToShow: 1.4,
          },
          breakpoint: 1300,
          settings: {
            slidesToShow: 1,
          }
        }, ]
      });
    });
  </script>
</body>

</html>