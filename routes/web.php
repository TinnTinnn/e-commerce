<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', [AppController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['tinn-auth'])->group(function () {
    Route::group(['prefix' => 'app'], function () {
        Route::get('home', [AppController::class, 'home'])->name('app.home');
        Route::resource('products', ProductController::class);


        Route::resource('products.reviews', ReviewController::class)
            ->scoped(['review' => 'product'])
            ->only(['create', 'store']);

// Route สำหรับใช้ middleware เพื่อ Ratelimiter
        Route::middleware(['auth', 'throttle:reviews'])->group(function () {
            Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])->name('products.reviews.store');
        });


// Route สำหรับ review creation
        Route::get('/products/{product}/reviews/create', [ReviewController::class, 'create'])->name('products.reviews.create');

// Route สำหรับ review storage
        Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])->middleware('throttle:reviews')->name('products.reviews.store');

        Route::fallback(function () {
            return 'This page does not exist.';
        });
        Route::get('contact',[AppController::class,'contact'])->name('contact');

        Route::put('products/{product}/toggle-complete', function (Product $product) {
            $product->toggleComplete();

            return redirect()->back()->with('success', 'Product updated successfully!');
        })->name('products.toggle-complete');

        Route::get('products/category/{category}', [ProductController::class, 'category']
        )->name('products.category');
    });
});


//
//Route::get('/products', function () {
//    return view('index', [
//        'product' => Product::latest()->paginate(10)
//    ]);
//})->name('products.index');
//
//Route::view('/products/create', 'create')
//    ->name('products.create');
//
//Route::get('/products/{product}/edit', function (Product $product) {
//    return view('edit', [
//        'product' => $product
//    ]);
//})->name('products.edit');
//
//Route::get('/products/{product}', function (Product $product) {
//    return view('show', [
//        'product' => $product
//    ]);
//})->name('products.show');
//
//// ตรงส่วนนี้สำหรับ การสร้างข้อมูลใหม่ลง database โดยที่มีการ validate ก่อนสำหรับ user ว่าส่วนไหนของ form ที่ต้องทำการกรอกบ้าง ถึงจะบันทึกได้
//Route::post('/products', function (ProductRequest $request) {
////    โดยปกติ Code ที่ comment ไว้ด้านล่างนี้จะใช้เพื่อการ Validate ข้อมูลในแต่ละฟีลด์ ซึ่งถ้าเราใช้
////    โค๊ด $product = Product::create($request->validated()); เพียงบรรทัดเดียวก็จะทดแทนส่วนที่ว่านี่ได้
////    $data =$request->validated();
////    $product = new product();
////    $product->title = $data['title'];
////    $product->description = $data['description'];
////    $product->category = $data['category'];
////    $product->price = $data['price'];
////    $product->stock = $data['stock'];
////    $product->save();
//    $validated = $request->validated();
//    if ($request->hasFile('image'))
//    {
//        $path = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
//        $validated['image_path'] = 'images/' . $request->file('image')->getClientOriginalName();
//    }
//
//    $product = Product::create($validated);
//
//
////   ส่วนนี้หลังจากเมื่อ save ข้อมูลลง database แล้ว ให้ทำการ redirect หรือไปที่หน้าใดก็แล้วแต่วางรูปแบบ
//    return redirect()->route('products.show', ['product' => $product->id])
////       ส่วนนี้สำหรับการสร้าง flash message ซึ่งจะขึ้นข้อความตามเงื่อนไขที่กำหนด เพียงครั้งเดียว
//        ->with('success', 'Product created successfully.');
//})->name('products.store');
//
//
//Route::put('/products/{product}', function (Product $product, ProductRequest $request) {
//
////    ส่วนนี้ที่คอมเมนท์ไว้ก็เช่นกัน เหมือนกับข้างบน เพียงแต่เป็นส่วนEdit
////    $data =$request->validated();
////    $product->title = $data['title'];
////    $product->description = $data['description'];
////    $product->category = $data['category'];
////    $product->price = $data['price'];
////    $product->stock = $data['stock'];
////    $product->save();
//    $validated = $request->validated();
//    if ($request->hasFile('image')) {
//        $path = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
//        $validated['image_path'] = 'images/' . $request->file('image')->getClientOriginalName();
//    }
//
//    $product->update($validated);
//
////   ส่วนนี้หลังจากเมื่อ save ข้อมูลลง database แล้ว ให้ทำการ redirect หรือไปที่หน้าใดก็แล้วแต่เราวางรูปแบบ
//    return redirect()->route('products.show', ['product' => $product->id])
////       ส่วนนี้สำหรับการสร้าง flash message ซึ่งจะขึ้นข้อความตามเงื่อนไขที่กำหนด เพียงครั้งเดียว
//        ->with('success', 'Product updated successfully.');
//})->name('products.update');
//
//
//Route::delete('products/{product}', function (Product $product){
//    $product->delete();
//
//    return redirect()->route('products.index')
//        ->with('success', 'Product deleted successfully');
//})->name('products.destroy');




