<?php

  $links = array("Facebook", "Instagram", "Twitter");

?>

<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
    <div class="row">

      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Place some info here, if you want!</p>
      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Social Media</h5>
      </div>

      <ul class="list-unstyled">
        <?php
          foreach ($links as $link): array_map('htmlentities', $link); ?>
            <li>
              <a><?php echo $link;?></a>
            </li>
        <?php endforeach; ?>
      </ul>
      

    </div>
  </div>
</footer>


</body>
</html>
