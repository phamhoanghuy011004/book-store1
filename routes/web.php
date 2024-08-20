<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Client\AuthorInformationController;
use Illuminate\Support\Facades\Route;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        # Menus
        Route::prefix('menus')->group(function () {
          Route::get('add', [MenuController::class, 'create']);
           Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
           Route::get('search', [MenuController::class, 'search'])->name('menu.search');
           Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
           Route::get('destroy/{id}', [MenuController::class, 'destroy']);
       });


        # Products
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
//            Route::get('search', [ProductController::class, 'search'])->name('product.search');
//            Route::get('edit/{product}', [ProductController::class, 'show']);
//            Route::post('edit/{product}', [ProductController::class, 'update']);
//            Route::get('destroy/{id}', [ProductController::class, 'destroy']);
        });


        Route::prefix('events')->group(function () {
            Route::get('add', [EventController::class, 'create']);
            Route::post('add', [EventController::class, 'store']);
        });
        Route::prefix('authors')->group(function () {
            Route::get('add', [AuthorController::class, 'create']);
            Route::post('add', [AuthorController::class, 'store']);
        });
    });
});

Route::get('client/index', [LoginController::class, 'indexclient']);
Route::view('/', 'main.index');
Route::view('/about', 'main.about'); // done
Route::view('/shop', 'main.shop'); // done
Route::view('/404', 'main.404'); // done
Route::view('/checkout', 'main.checkout'); // done
Route::view('/contact', 'main.contact');  // done
Route::view('/faq', 'main.faq'); // done
Route::view('/index', 'main.index'); // done
Route::view('/index-2', 'main.index-2'); // done
Route::get('/news', [ EventController::class, 'index']) -> name('main.news'); // done
Route::view('/news-details', 'main.news-details'); //done
Route::view('/news-grid', 'main.news-grid'); //done
Route::view('/shop-cart', 'main.shop-cart'); //done
Route::view('/shop-details', 'main.shop-details'); // done
Route::view('/shop-list', 'main.shop-list'); // done
//Route::view('/team', 'main.team'); // done
Route::get('/team', [AuthorInformationController::class, 'index']) -> name('main.team'); // done
//Route::view('/team-details', 'main.team-details'); // done
Route::get('/team-details', [AuthorInformationController::class, 'showTeamDetails']) -> name('main.team-details'); // done
Route::view('/wishlist', 'main.wishlist');

