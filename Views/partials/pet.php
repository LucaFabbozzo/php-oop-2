<?php
//var_dump($products);
?>

<body>
  <main>

    <div class="container">
      <div class="row">

      <?php foreach($products as $pet): ?>
          <?php echo $pet->name ?>
       <?php endforeach; ?>
        <!-- <div class="col-6">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div> -->
     
      </div>
    </div>

  </main>
</body>