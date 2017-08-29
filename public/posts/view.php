<?php require_once("../../private/initialize.php") ?>

<?php

  $id = $_GET["id"];
  $post = get_post_by_id($id);

?>

<?php

  $page_title = $post["title"] . " - Post";
  include(SHARED_PATH . "/head.php")

?>

<?php include(SHARED_PATH . "/navigation.php") ?>

<header class="masthead" style="background-image: url('<?php echo url_for("/static/" . $post["image"]); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $post["title"]; ?></h1>
          <h2 class="subheading"><?php echo $post["subtitle"]; ?></h2>
          <span class="meta">Posted on <?php echo date("F j, Y", strtotime($post["created"])); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $post["body"]; ?>
      </div>
    </div>
  </div>
</article>

<hr>

<?php include(SHARED_PATH . "/footer.php") ?>
