<?php
  require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Мои Front-end достижения!</title>
    <link rel="shortcut icon" href="icon/favicon2.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/options.css">
    <link rel="stylesheet" href="/css/start.css">
  </head>
  <body>
    <main>
      <div class="flexCont">

        <div class="flexCont__left">
          <section>
            <div class="limiter">
              <?php
                $article = mysqli_query($connection, "SELECT * FROM `article`");
              ?>

              <?php 
                while( $art = mysqli_fetch_assoc($article) )
                {
                  ?>
                    <div class="basis">
                      <div class="caption">
                        <h1><a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a></h1>
                        <p><?php echo $art['pubdata']; ?></p>
                      </div>
                      <div class="story">
                       <p><?php echo $art['text']; ?></p>
                      </div>
                    </div>
                  <?php
                }
              ?>
            </div>

            <div class="navigation">
              <div class="navigation__icon">
                <p><i class="fa fa-heart-o navigation__icon__likes" aria-hidden="true"></i> 30</p>
                <p><i class="fa fa-eye navigation__icon__views" aria-hidden="true"></i> 45</p>
              </div>
              <div class="navigation__buttons">

                <a class="navigation__buttons__left" href="#">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="navigation__buttons__right" href="#">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>      
          </section>
        </div>

        <div class="flexCont__right">
          <nav class="button">
            <a class="spisok" href="/">Полный список</a>
          </nav>

          <?php include "includes/calendar.php" ?>
        </div>
      </div>
    </main>




    <!--
    <nav>
      <a class="spisok" href="index.php">Полный список</a>
    </nav>
    <main class="container">
      

      <div class="calendar">
        <div class="slider">
          <a href="#">◄</a>
          <p>Сентябрь</p>
          <a href="#">►</a>
        </div>
        <div class="days-week">
          <div class="">Пн</div>
          <div class="">Вт</div>
          <div class="">Ср</div>
          <div class="">Чт</div>
          <div class="">Пт</div>
          <div class="">Сб</div>
          <div class="">Вс</div>
        </div>
        <div class="days-counter">
          <div class="no-day"><a href="#"></a></div>
          <div class="day"><a href="#">1</a></div>
          <div class="day"><a href="#">2</a></div>
          <div class="day"><a href="#">3</a></div>
          <div class="day"><a href="#">4</a></div>
          <div class="day"><a href="#">5</a></div>
          <div class="day"><a href="#">6</a></div>
          <div class="day"><a href="#">7</a></div>
          <div class="day"><a href="#">8</a></div>
          <div class="day"><a href="#">9</a></div>
          <div class="day"><a href="#">10</a></div>
          <div class="day"><a href="#">11</a></div>
          <div class="day"><a href="#">12</a></div>
          <div class="day"><a href="#">13</a></div>
          <div class="day"><a href="#">14</a></div>
          <div class="day"><a href="#">15</a></div>
          <div class="day"><a href="#">16</a></div>
          <div class="day"><a href="#">17</a></div>
          <div class="day"><a href="#">18</a></div>
          <div class="day"><a href="#">19</a></div>
          <div class="day"><a href="#">20</a></div>
          <div class="day"><a href="#">21</a></div>
          <div class="day"><a href="#">22</a></div>
          <div class="day"><a href="#">23</a></div>
          <div class="day"><a href="#">24</a></div>
          <div class="day"><a href="#">25</a></div>
          <div class="day"><a href="#">26</a></div>
          <div class="day"><a href="#">27</a></div>
          <div class="day"><a href="#">28</a></div>
          <div class="day"><a href="#">29</a></div>
          <div class="day"><a href="#">30</a></div>
        </div>
      </div>
    </main>
     -->
  </body>
 </html>
