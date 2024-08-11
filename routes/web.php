<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\WishlistController;

use App\Http\Controllers\server\AdminController;
use App\Http\Controllers\server\CategoryController;
use App\Http\Controllers\server\CustomerController;
use App\Http\Controllers\server\ProductController;
use App\Http\Controllers\server\StockController;
use App\Http\Controllers\server\OrderController;
use App\Http\Controllers\server\ProductVariationController;
use App\Http\Controllers\server\BannerController;
use App\Http\Controllers\server\CatalogueController;
use App\Http\Controllers\server\AdController;
use App\Http\Controllers\server\ProductTypeController;
use App\Http\Controllers\server\CompanyDetailsController;
use App\Http\Controllers\server\ViewSectionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::get('/contact',[HomeController::class,'contact'])->name('client.contact');
Route::get('/shop/{slug?}/{id?}', [HomeController::class, 'shop'])->name('client.shop');
Route::get('/shop-sort', [ShopController::class, 'index'])->name('client.shopsort');
Route::get('/product-details/{id?}', [HomeController::class, 'product_details'])->name('client.product_details');
Route::get('/cart-wishlist-count',[HomeController::class,'getCartAndWishlistCount'])->name('cart.wishlist.count');
Route::get('/cart-add', [HomeController::class, 'cart'])->name('client.cart');
Route::get('/wishlist', [HomeController::class, 'wishlistPage'])->name('client.wishlist');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('client.checkout');
Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('client.placeOrder');
Route::get('/contuct', [HomeController::class, 'contuct'])->name('client.contuct');
Route::get('/about', [HomeController::class, 'about'])->name('client.about');
Route::get('/user_login', [HomeController::class, 'login_website'])->name('login.website');
Route::get('/user_register', [HomeController::class, 'register_website'])->name('register.website');
Route::get('/my_account', [HomeController::class, 'account'])->name('client.account');
Route::get('/cart',[CartController::class,"index"])->name('cart.index');
Route::post('/cart/store',[CartController::class,"addToCart"])->name('cart.store');
Route::put('/cart/update',[CartController::class,"updateCart"])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,"removeItem"])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,"clearCart"])->name('cart.clear');
Route::get('/wishlist',[WishlistController::class,"getWishlistedProducts"])->name('wishlist.list');
Route::post('/wishlist/add',[WishlistController::class,"addProductToWishlist"])->name('wishlist.store');
Route::delete('/wishlist/remove',[WishlistController::class,"removeProductFromwishlist"])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class,"clearWishlist"])->name('wishlist.clear');
Route::post('/wishlist/clear',[WishlistController::class,'moveToCart'])->name('wishlist.move.to.cart');
Route::post('/register', [AdminController::class, 'store'])->name('customer.register');
Route::post('/place-order',[OrderController::class,'placeOrder'])->name('place.order');

Route::get('search',[HomeController::class,'searchPage'])->name('searchPage');
Route::post('/quickViewDetails',[HomeController::class,'quickViewDetails'])->name('quickViewDetails');
Route::get('filter',[HomeController::class,'filterProduct'])->name('filter');

//page
Route::get('/about',[HomeController::class,'aboutPage'])->name('aboutPage');
Route::get('/delivery-information',[HomeController::class,'deliveryInformationPage'])->name('deliveryInformationPage');
Route::get('/exchange-policy',[HomeController::class,'exchangePolicyPage'])->name('exchangePolicyPage');
Route::get('/career',[HomeController::class,'careerPage'])->name('careerPage');
Route::get('/size-guide',[HomeController::class,'sizeGuidePage'])->name('sizeGuidePage');
Route::get('/store-locator',[HomeController::class,'storeLocatorPage'])->name('storeLocatorPage');
Route::get('/terms-and-condition',[HomeController::class,'termsConditionPage'])->name('termsConditionPage');
Route::get('/privacy-policy',[HomeController::class,'privacyPolicyPage'])->name('privacyPolicyPage');
Route::get('/category-page',[HomeController::class,'category_page'])->name('categorypage');
Route::get('/about-us',[HomeController::class,'about_us'])->name('about_us');

// Route::get('/logout', function () {
//     auth()->logout();
//     return redirect()->route('client.home');
// });
//shop
Route::get('/user-logout',[AdminController::class,'userLogout'])->name('user.logout');

// Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
// Route::get('/shop/catalog/{slug}', [ShopController::class, 'showByCatalog'])->name('shop.catalog');


Route::prefix('/')->group(function(){
    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');
    Route::group(['middleware'=>['user']],function(){

        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('category', CategoryController::class);
        Route::get('append-categories-level',[CategoryController::class,'appendCategoryLevel'])->name('appendCategory');
        Route::post('update-category-status',[CategoryController::class,'updateCategoryStatus'])->name('updateCategoryStatus');
        Route::resource('product', ProductController::class);
        Route::post('update-product-status',[ProductController::class,'updateProductStatus'])->name('updateProductStatus');
        Route::get('multiimage-delete/{id}',[ProductController::class,'multiImageDelete'])->name('ImageDelete');
        Route::resource('stock', StockController::class);
        Route::get('stock-variant/{id}',[StockController::class,'editVariant'])->name('stock.variantEdit');
        Route::post('stock-variant-update/{id}',[StockController::class,'updateVariant'])->name('stock.variantUpdate');
        Route::resource('customer', CustomerController::class);
        Route::resource('product-variation', ProductVariationController::class);
        Route::get('order-list/{status?}', [OrderController::class,'list'])->name('order.index');
        Route::get('order-itemlist/{id}', [OrderController::class,'orderDetails'])->name('order.itemlist');
        Route::get('order-invoice/{id}', [OrderController::class,'invoice'])->name('order.invoice');
        Route::get('order-status-edit/{id}', [OrderController::class,'editStatus'])->name('order.statusedit');
        Route::put('order-status-update/{id}', [OrderController::class,'updateStatus'])->name('order.statusUpdate');
        Route::resource('banner', BannerController::class);
        Route::post('update-banner-status',[BannerController::class,'updateBannerStatus'])->name('updateBannerStatus');
        Route::resource('catalogue', CatalogueController::class);
        Route::post('update-catalogue-status',[CatalogueController::class,'updateCatalogueStatus'])->name('updateCatalogueStatus');
        Route::resource('view-section', ViewSectionController::class);
        Route::post('update-view-section-status',[ViewSectionController::class,'updateViewSectionStatus'])->name('updateViewSectionStatus');
        Route::resource('ad', AdController::class);
        Route::post('update-ad-status',[AdController::class,'updateAdStatus'])->name('updateAdStatus');
        Route::resource('product-type', ProductTypeController::class);
        Route::post('update-product-type-status',[ProductTypeController::class,'updateProductTypeStatus'])->name('updateProductTypeStatus');

        Route::resource('company-details', CompanyDetailsController::class);
    });

});

// require __DIR__ . '/auth.php';
