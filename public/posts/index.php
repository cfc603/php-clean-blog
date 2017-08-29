<?php require_once("../../private/initialize.php") ?>

<?php

  $page_title = "Posts";
  include(SHARED_PATH . "/head.php")

?>

<?php include(SHARED_PATH . "/navigation.php") ?>

<?php

  $header_img_path = "/static/img/home-bg.jpg";
  $heading = "Clean Blog";
  $subheading = "A Blog Theme by Start Bootstrap";
  include(SHARED_PATH . "/header.php")

?>

<?php include(SHARED_PATH . "/posts.php") ?>

<?php include(SHARED_PATH . "/footer.php") ?>
