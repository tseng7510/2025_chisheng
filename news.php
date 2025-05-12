<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox wow fadeInUp" data-wow-delay="0s">
              <h1 class="title">最新消息<span>NEWS</span></h1>
              <div class="breadcrumbBox">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="index.php" itemprop="item">
                      <span itemprop="name">首頁</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">NEWS</span>
                    <meta itemprop="position" content="2">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>

          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <div class="listBox">
                  <!-- class + pin -->
                  <div class="item wow fadeInRight pin" data-wow-delay="0.2s">
                    <a href="news_detail.php">
                      <div class="pic"><img src="images/index/n.jpg" alt=""></div>
                      <div class="info">
                        <h2 class="title">為什麼你的裝修案場進度總是延誤？答案在這裡！</h2>
                        <div class="description">消防工程_大樓室內裝修．身為室內設計師的你，是否曾經因為找不到合適的消防廠商而</div>
                      </div>
                      <div class="timeBox">
                        <time>
                          <div class="y">2024</div>
                          <div class="d">08.02</div>
                        </time>
                      </div>
                    </a>
                  </div>
                  <? for ($i = 0; $i < 5; $i++) { ?>
                    <div class="item wow fadeInRight" data-wow-delay="0.2s">
                      <a href="news_detail.php">
                        <div class="pic"><img src="images/index/n.jpg" alt=""></div>
                        <div class="info">
                          <h2 class="title">為什麼你的裝修案場進度總是延誤？答案在這裡！</h2>
                          <div class="description">消防工程_大樓室內裝修．身為室內設計師的你，是否曾經因為找不到合適的消防廠商而</div>
                        </div>
                        <div class="timeBox">
                          <time>
                            <div class="y">2024</div>
                            <div class="d">08.02</div>
                          </time>
                        </div>
                      </a>
                    </div>
                  <? } ?>

                </div>

                <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                  <ul class="pagination">
                    <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                    <li><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li class="active"><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                    <li><a href="#">05</a></li>
                    <li class="controls"><a class="next" href="#" title="Next"></a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>