<?php

  $posts_set = get_all_posts();

?>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php while($post = mysqli_fetch_assoc($posts_set)) {?>
        <div class="post-preview">
          <a href="<?php echo url_for("/posts/view.php?id=" . h(u($post["id"]))); ?>">
            <h2 class="post-title">
              <?php echo h($post["title"]); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php echo h($post["subtitle"]); ?>
            </h3>
          </a>
          <p class="post-meta">Posted on <?php echo date("F j, Y", strtotime(h($post["created"]))); ?></p>
        </div>
        <hr>
      <?php } ?>
      <?php mysqli_free_result($posts_set); ?>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>
