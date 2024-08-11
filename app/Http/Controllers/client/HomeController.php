<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

// use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Banner;
use App\Models\ProductType;
use App\Models\ViewSection;
use App\Models\Ad;
use Cart;
use Auth;

// use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status', 'Active')->get()->all();
        $sliders = Banner::Where('status', 'active')->get()->all();
        $ads = Ad::where('status', 'active')->get()->all();
        //dd($ad);
        $product_types = ProductType::where('status', 'active')->get();
        $new_arrivals_men = Product::with('catalogue')->where('view_section', '1')->where('catalogue_id', '1')->where('status', 'Active')->get()->all();
        $new_arrivals_women = Product::with('catalogue')->where('view_section', '1')->where('catalogue_id', '2')->where('status', 'Active')->get()->all();
        $new_arrivals_kids = Product::with('catalogue')->where('view_section', '1')->where('catalogue_id', '3')->where('status', 'Active')->get()->all();
        $new_arrivals_electronics = Product::with('catalogue')->where('view_section', '1')->where('catalogue_id', '4')->where('status', 'Active')->get()->all();
        $new_arrivals_gifts = Product::with('catalogue')->where('view_section', '1')->where('catalogue_id', '5')->where('status', 'Active')->get()->all();

        // $trendingProducts = Product::with(['unit', 'catalogue', 'category', 'brand'])->where('view_section', 'Trending_Products')->where('status', 'Active')->orderBy('created_at', 'desc')->limit(10)->get();

        $view_sections = ViewSection::with('product')
            ->where('status', 'Active')
            ->whereHas('product', function ($q) {
                $q->where('status', 'Active')
                    ->orderBy('created_at', 'desc')
                    ->take(10);
            })
            ->get()
            ->all();
        //dd($view_sections);
        // $featureProducts = Product::where('view_section', 'Feature_Products')->where('status', 'Active')->orderBy('created_at', 'desc')->take(10)->get();

        return view('client.index')->with(compact('new_arrivals_men', 'new_arrivals_women', 'new_arrivals_kids', 'categories', 'sliders', 'ads', 'product_types', 'new_arrivals_electronics', 'new_arrivals_gifts', 'view_sections'));
    }

    public function searchPage(Request $request)
    {
        $data['keyword'] = $request->keyword;
        $data['products'] = Product::where('title', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('details_description', 'LIKE', '%' . $request->keyword . '%')
            ->paginate(28);
        $data['start'] = 0;
        $data['end'] = 10000;
        $data['categories'] = array();
        return view('client.shop', $data);
    }
    public function filterProduct(Request $request)
    {
        //dd($request->all());
        $query = Product::query();
        $categories = array();

        if (isset($request->category) && ($request->category != null)) {
            foreach ($request->category as $category) {
                array_push($categories, $category);
            }

            $query->whereHas('category', function ($q) use ($request) {
                $q->whereIn('id', $request->category);
            });
        }
        $start = ($request->start != null ? $request->start : 0);
        $end = $request->end;
        $query->where('status', 'Active');
        $query->whereBetween('mrp', [$start, $end]);
        $products = $query->paginate(20);

        return view('client.shop')->with(compact('products', 'categories', 'start', 'end'));
    }

    public function about()
    {
        return view('client.about');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function login_website()
    {
        return view('client.login');
    }

    public function register_website()
    {
        return view('client.register');
    }

    public function account()
    {
        if (Auth::user()) {
            $orderlist = Order::where('user_id', Auth::user()->id)->get()->all();
            return view('client.account')->with(compact('orderlist'));
        } else {
            return view('client.login');
        }
    }

    public function shop(Request $request, string $slug = null, string $id = null)
    {
        if ($slug && $id) {
            if ($slug == 'catalogue') {
                $products = Product::where('catalogue_id', $id)->where('status', 'Active')->paginate(20);
            } elseif ($slug == 'category') {
                $products = Product::where('category_id', $id)->where('status', 'Active')->paginate(20);
            } elseif ($slug == 'product_type') {
                $products = Product::where('type', $id)->where('status', 'Active')->paginate(20);
            } elseif ($slug == 'new_arrival') {
                $products = Product::where('view_section', $id)->where('status', 'Active')->paginate(20);
            } elseif ($slug == 'winter') {
                $products = Product::where('view_section', $id)->where('status', 'Active')->paginate(20);
            } elseif ($slug == 'section') {
                $products = Product::where('view_section', $id)->where('status', 'Active')->paginate(20);
            }
        } else {
            $products = Product::where('status', 'Active')->paginate(20);
        }
        $categories = array();
        $start = 0;
        $end = 10000;
        return view('client.shop')->with(compact('products', 'categories', 'start', 'end'));
    }

    public function product_details(string $id)
    {
        $product = Product::with('category', 'productvariation', 'images')->findorFail($id);
        //dd($product);
        return view('client.product_details')->with(compact('product'));
    }

    public function wishlist()
    {
        // return view('client.wishlist');
        return redirect()->route("wishlist.list");
    }


    public function wishlistPage()
    {
        return view('client.wishlist');
    }
    public function cart()
    {
        return view('client.cart');
    }

    public function checkout()
    {
        if (Auth::check()) {
            $this->setAmountForCheckout();
            return view('client.checkout');
        } else {
            session()->put('cart_set', 'attach');
            return redirect()->route('login.website');
        }
    }

    public function setAmountForCheckout()
    {
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        } else {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
    }

    public function contuct()
    {
        return view('client.contuct');
    }

    public function getCartAndWishlistCount()
    {
        $cartCount = Cart::instance("cart")->content()->count();
        $wishlistCount = Cart::instance("wishlist")->content()->count();
        return response()->json(['status' => 200, 'cartCount' => $cartCount, 'wishlistCount' => $wishlistCount]);
    }


    public function category_page()
    {
        return view('client.category');
    }

    public function about_us()
    {
        return view('client.about_us');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function quickViewDetails(Request $request)
    {
        return $data = Product::with(['category'])->where('id', $request->productId)->first();
    }

    public function aboutPage()
    {
        return view('client.pages.about');
    }

    public function deliveryInformationPage()
    {
        return view('client.pages.delivery');
    }

    public function exchangePolicyPage()
    {
        return view('client.pages.exchange');
    }

    public function careerPage()
    {
        return view('client.pages.career');
    }

    public function sizeGuidePage()
    {
        return view('client.pages.sizeguide');
    }

    public function storeLocatorPage()
    {
        return view('client.pages.store');
    }

    public function termsConditionPage()
    {
        return view('client.pages.terms');
    }

    public function privacyPolicyPage()
    {
        return view('client.pages.privacy');
    }
}
