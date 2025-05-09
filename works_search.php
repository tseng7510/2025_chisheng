<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/works.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages worksList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox wow fadeInUp" data-wow-delay="0s">
              <h1 class="title">搜尋：消防<span>SEARCH</span></h1>
              <div class="count">｜60筆</div>
              <div class="breadcrumbBox">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="index.php" itemprop="item">
                      <span itemprop="name">首頁</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">WORKS</span>
                    <meta itemprop="position" content="2">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">住宅空間</span>
                    <meta itemprop="position" content="3">
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
                  <? for ($i = 0; $i < 12; $i++) { ?>
                    <div class="item">
                      <a href="works_2.php">
                        <div class="pic"><img src="images/index/p.jpg" alt=""></div>
                        <div class="infoBox">
                          <h2 class="title">桂田盤古</h2>
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