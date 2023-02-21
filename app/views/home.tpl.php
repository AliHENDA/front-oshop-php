<section>

<?php // dd($categoryObject) ?>
    <div class="container-fluid">
      <div class="row mx-0">
        <?php for($i=0; $i<= 1;$i++):
        $categoryObject = $categoriesHomePage[$i]; ?>
        <div class="col-md-6">
          <div class="card border-0 text-white text-center"><img src="<?= $categoryObject->getPicture() ?>"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categoryObject->getName() ?></h2><a href="<?= $router->generate('category', ['id' => $categoryObject->getId()]) ?>" class="btn btn-light"><?= $categoryObject->getSubtitle() ?></a>
              </div>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
      <div class="row mx-0">
          
      <?php for($i=2; $i<= 4;$i++):
        $categoryObject = $categoriesHomePage[$i]; ?>
        <div class="col-lg-4">
          <div class="card border-0 text-center text-white"><img src="<?= $categoryObject->getPicture() ?>"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-4 mb-4"><?= $categoryObject->getName() ?></h2><a href="<?= $router->generate('category', ['id' => $categoryObject->getId()]) ?>" class="btn btn-link text-white"><?= $categoryObject->getSubtitle() ?>
                  <i class="fa-arrow-right fa ml-2"></i></a>
              </div>
            </div>
          </div>
        </div> 
        <?php endfor ?> 
      </div>
    </div>
  </section>