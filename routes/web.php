<?php
use Illuminate\Support\Facades\Route;

// -----------------------Frontend route here-----------------------
Route::get('/', 'FrontendController@index');
// Product details
Route::get('product_details/{id}', 'FrontendController@product_details');

// Blog details
Route::get('blog_details/{id}', 'FrontendController@blog_details');


// ------------------------------CartController--------------------------
Route::post('add_to_cart/{id}', 'CartController@add_to_cart');
Route::get('showcart', 'CartController@showCart');
Route::post('updatecart', 'CartController@updatecart');
Route::get('destroycart/{rowId}', 'CartController@destroycart');

// Product show by category
Route::get('show_product_by_category/{id}', 'FrontendController@show_product_by_cat');
Route::get('show_product_by_category/{id}/{subcatid}', 'FrontendController@show_product_by_cat_subcat');


// -----------------------HomeController route here-----------------------
Route::get('user_home', 'HomeController@userHome')->name('user.home');

// -----------------------Backend route here------------------------->middleware('is_admin');
Auth::routes();
Route::middleware('is_admin')->group(function (){

	// Admin home route here
	Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
	
	// Category route here
	Route::get('category/all_category', 'admin\CategoryController@allCategroy');
	Route::get('category/add_category', 'admin\CategoryController@addCategroy');
	Route::post('category/store_category', 'admin\CategoryController@storeCategroy');
	Route::get('category/edit_category/{id}', 'admin\CategoryController@editCategroy');
	Route::post('category/update_category/{id}', 'admin\CategoryController@updateCategory');
	Route::get('category/delete_category/{id}', 'admin\CategoryController@deleteCategory');


	// SubCategory route here
	Route::get('subcategory/all_sub_category', 'admin\SubCategoryController@allSubCategroy');
	Route::get('subcategory/add_sub_category', 'admin\SubCategoryController@addSubCategroy');
	Route::post('subcategory/store_sub_category', 'admin\SubCategoryController@storeSubCategroy');
	Route::get('subcategory/edit_sub_category/{id}', 'admin\SubCategoryController@editSubCategroy');
	Route::post('subcategory/update_sub_category/{id}', 'admin\SubCategoryController@updateSubCategory');
	Route::get('subcategory/delete_sub_category/{id}', 'admin\SubCategoryController@deleteSubCategory');

	// Slider route here
	Route::get('slider/all_slider', 'admin\SliderController@allSlider');
	Route::get('slider/add_slider', 'admin\SliderController@addSlider');
	Route::post('slider/store_slider', 'admin\SliderController@storeSlider');
	Route::get('slider/edit_slider/{id}', 'admin\SliderController@editSlider');
	Route::post('slider/update_slider/{id}', 'admin\SliderController@updateSlider');
	Route::get('slider/delete_slider/{id}', 'admin\SliderController@deleteSlider');

	// Banner route here
	Route::get('banner/all_banner', 'admin\BannerController@allBanner');
	Route::get('banner/add_banner', 'admin\BannerController@addBanner');
	Route::post('banner/store_banner', 'admin\BannerController@storeBanner');
	Route::get('banner/edit_banner/{id}', 'admin\BannerController@editBanner');
	Route::post('banner/update_banner/{id}', 'admin\BannerController@updateBanner');
	Route::get('banner/delete_banner/{id}', 'admin\BannerController@deleteBanner');

	// Product route here
	Route::get('product/all_product', 'admin\ProductController@allProduct');
	Route::get('product/add_product', 'admin\ProductController@addProduct');
	Route::post('product/store_product', 'admin\ProductController@storeProduct');
	Route::get('product/edit_product/{id}', 'admin\ProductController@editProduct');
	Route::post('product/update_product/{id}', 'admin\ProductController@updateProduct');
	Route::get('product/delete_product/{id}', 'admin\ProductController@deleteProduct');

	// Product route here
	Route::get('customer/all_customer', 'admin\CustomerController@allCustomer');
	Route::get('customer/draft_customer/{id}', 'admin\CustomerController@stroDraft');
	Route::get('customer/all_draft_customer', 'admin\CustomerController@allDraftCustomer');
	Route::get('customer/undraft_customer/{id}', 'admin\CustomerController@UnDraftCustomer');
	Route::get('customer/delete_customer/{id}', 'admin\CustomerController@deleteCustomer');

	// Slider route here
	Route::get('blog/all_blog', 'admin\BlogController@allBlog');
	Route::get('blog/add_blog', 'admin\BlogController@addBlog');
	Route::post('blog/store_blog', 'admin\BlogController@storeBlog');
	Route::get('blog/edit_blog/{id}', 'admin\BlogController@editBlog');
	Route::post('blog/update_blog/{id}', 'admin\BlogController@updateBlog');
	Route::get('blog/delete_blog/{id}', 'admin\BlogController@deleteBlog');
});