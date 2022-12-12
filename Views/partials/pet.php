<?php
//var_dump($foods);
//var_dump($accessories);
?>

<body>
  <main>

    <div class="container">
      <div class="row py-2">
        <h1>Cibo</h1>
        <?php foreach ($foods as $pet) : ?>
          <div class="col-6 mb-5">
            <div class="card">
              <img class="thumbnail" src="<?php echo $pet->poster ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <span><?php echo $pet->category->icon ?></span>
                <h5 class="card-title"><?php echo $pet->name ?></h5>
                <p class="card-text"><?php echo $pet->brand ?></p>
                <p class="card-text">Ingredienti: <?php echo $pet->ingredients ?></p>
                <p class="card-text"><?php echo $pet->taste ?></p>
                <p class="card-text">&euro; <?php echo $pet->getPrice() ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="container">
      <div class="row py-2">
        <h1>Accessori</h1>
        <?php foreach ($accessories as $pet) : ?>
          <div class="col-6 mb-5">
            <div class="card">
              <img class="thumbnail" src="<?php echo $pet->poster ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <span><?php echo $pet->category->icon ?></span>
                <h5 class="card-title"><?php echo $pet->name ?></h5>
                <p class="card-text"><?php echo $pet->name ?></p>
                <p class="card-text">Taglia: <?php echo $pet->size ?></p>
                <p class="card-text">&euro; <?php echo $pet->getPrice() ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </main>
</body>