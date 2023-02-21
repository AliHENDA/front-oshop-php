<?php

namespace Oshop\Controllers;

use Oshop\Models\Product;
use Oshop\Models\Brand;
use Oshop\Models\Type;
use Oshop\Models\Category;

class CatalogController extends CoreController {
  public function categoryAction($params) {
    $categoryId = $params['id'];

    $categoryObject = Category::find($categoryId);

    $productList = Product::findAllByCategoryId($categoryId);

    $this->show('category', [
      'categoryObject' => $categoryObject,
      'productList' => $productList]);
  }

  public function typeAction($params) {
    $typeId = $params['id'];
    
    $typeObject = Type::find($typeId);

    $productList = Product::findAllByTypeId($typeId);

    $this->show('type', [
      'typeObject' => $typeObject,
      'productList' => $productList]);
  }

  public function brandAction($params) {
    $brandId = $params['id'];

    $brandObject = Brand::find($brandId);

    $productList = Product::findAllByBrandId($brandId);

    $this->show('brand', [
      'brandObject' => $brandObject,
      'productList' => $productList]);
  }

  public function productAction($params) {
    $productId = $params['id'];

    $productObject = new Product;
    $product = $productObject->find($productId);

    // On envoie à viewData directement l'objet product
    $this->show('product', ['product' => $product]);
  }

}