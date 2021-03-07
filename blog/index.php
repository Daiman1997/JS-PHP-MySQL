<?php
  require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php echo $config['title']; ?></title>
    <link rel="shortcut icon" href="/icon/favicon2.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/options.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    
    <?php include "includes/register_form.php" ?>

    <?php include "includes/header.php" ?>

    <main class="container">
      <div class="fon">
        <div class="center-u">
          <div class="center-a">
            
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
        </div>

        <?php include "includes/sidebar.php" ?>
      </div>
    </main>

    <?php include "includes/footer.php" ?>
    <script type="text/javascript" src="js/register_login_form.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
 </body>
</html>
