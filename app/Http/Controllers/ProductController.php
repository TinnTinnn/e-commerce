<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->input('filter', '');
        $category = $request->input('category', '');
//        $page = $request->input('page', 1); //เพิ่มเพื่อรองรับการ paginate หลังจากเพิ่มการใช้ cache

        $products = Product::when($title, function ($query, $title) {
            return $query->title($title);
        });

        if ($category) {
            $products = $products->where('category', $category);
        }

        $products = match ($filter) {
            'popular_last_month' => $products->popularLastMonth(),
            'popular_last_6months' => $products->popularLast6Months(),
            'highest_rated_last_month' => $products->highestRatedLastMonth(),
            'highest_rated_last_6months' => $products->highestRatedLast6Months(),
            default => $products->latest()->withAvgRating()->withReviewsCount()//withAvgRating และ withReviewsCount มาจา
//            scope เฉพาะที่กำหนดไว้ใน Product Model ในเรื่องของlogic อาจจะยังไม่เก็ททั้งหมด อย่าลืมไปเรียนเพิ่ม
        };

//        ให้ comment บรรทัดนี้ไว้หากจะใช้ cache หรือจะประยุกต์ใช้กับส่วนอื่นๆของโปรเจ็คก็ลองดู
        $products = $products->latest()->paginate(12)->appends([
            'title' => $title,
            'filter' => $filter,
            'category' => $category,
        ]);// appends ทำให้ยังเก็บค่าการค้นหา หรือใดๆ ก็ตามที่ตั้งเงื่อนไขไว้ แล้วเราทำการคลิกหน้าถัดไป(paginate) ก็จะยังคงข้อมูลเดิมไว้

//        บรรทัดนี้เกี่ยวกับการเก็บแคช หากใช้ข้อมูลที่ดึงมาแสดงผล จะเป็นข้อมูลที่เก็บไว้ในแคชที่ 3600วิ หรือ 1 ชม.
//        หากต้องการให้มันอัพเดททันทีก็ไม่ต้องใช้แคชตรงนี้ไปใช้  $products = $products->latest()->paginate(12); ด้านบนแทน
//        $cacheKey = 'products:' . $filter . ':' . $title . $category . $page;
//        $products = cache()->remember($cacheKey, 3600, fn()  => $products->paginate(12));

        return view('index', ['products' => $products]);
    }

    public function category($category)
    {
        $products = Product::where('category', $category)->paginate(12);
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $validated['image_path'] = 'images/' . $request->file('image')->getClientOriginalName();
        }

        $product = Product::create($validated);

        return redirect()->route('products.show', $product)
            ->with('success', 'Product created successfully.');
    }

    public function show(int $id)
    {
//        ด้านล่างนี้ทำให้มีการโหลด review แบบเรียงลำดับจากล่าสุด ไม่เรียงสะเปะสะปะ แบบ Lazyload
        return view('show',
            [
                'product' => Product::with([
                    'reviews' => fn($query) => $query->latest()
                ])->withAvgRating()->withReviewsCount()->findOrFail($id)
            ]
        );
    }

    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $validated['image_path'] = 'images/' . $request->file('image')->getClientOriginalName();
        }
        $product->update($validated);

        return redirect()->route('products.show', $product)
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
