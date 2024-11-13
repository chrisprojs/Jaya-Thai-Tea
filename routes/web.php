<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $productsControl = new ProductController();
    $products = $productsControl->getAllProducts();
    return view('home', [
        'products' => $products
    ]);
});

Route::get('/menu', function () {
    $productsControl = new ProductController();
    $products = $productsControl->getAllProducts();
    return view('menu', [
        'products' => $products
    ]);
});

Route::get('/menu/{id}', function ($id) {
    $productsControl = new ProductController();
    $product = $productsControl->getProductById($id);

    $reviewsControl = new ReviewController();
    $reviews = $reviewsControl->getReviewById($id);

    return view('menu-detail', [
        'product' => $product,
        'reviews' => $reviews
    ]);
});

Route::post('/api/review', [ReviewController::class, 'postReview']);