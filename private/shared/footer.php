    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website <?php echo date("Y"); ?></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo url_for("/static/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo url_for("/static/vendor/popper/popper.min.js"); ?>"></script>
    <script src="<?php echo url_for("/static/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>

    <?php

      if(isset($contact_page)){
        echo "<!-- Contact Form JavaScript -->";
        echo "<script src=". url_for("/static/js/jqBootstrapValidation.js") . "></script>";
        echo "<script src=" . url_for("/static/js/contact_me.js") . "></script>";
      }

    ?>

    <!-- Custom scripts for this template -->
    <script src="<?php echo url_for("/static/js/clean-blog.min.js"); ?>"></script>

  </body>

</html>

<?php

  db_disconnect($db);

?>