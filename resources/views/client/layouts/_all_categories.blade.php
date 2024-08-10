<div class="categories_menu categories_four @yield('homepage')">
    <div class="categories_title">
        <h2 class="categori_toggle">CATEGORIES</h2>
    </div>
    <div class="categories_menu_toggle">
        <ul>
            @php
                $load = 0;
            @endphp
            @foreach (App\Models\Catalogue::with('category')->where('status','Active')->get()->all() as $key => $catalogue)
            <li class="menu_item_children @if ($key > 9)
                hidden @php
                    $load = 1
                @endphp
            @endif"><a href="{{ url('shop/catalogue/'.$catalogue->id) }}">{{ $catalogue->name }}  @if (count($catalogue->category)>0) <i class="fa fa-angle-right"></i> @endif</a>
                    @if (count($catalogue->category)>0)
                    <ul class="categories_mega_menu">
                        @foreach ($catalogue->category as $category)
                        <li class="menu_item_children"><a href="{{ url('shop/category/'.$category->id) }}">{{ $category->name }}</a>
                            @if (count($category->subcategories) > 0)
                            <ul class="categorie_sub_menu">
                                @foreach ($category->subcategories as $subcategory)
                                <li><a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
            @endforeach

            @if ($load > 0)
            <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
            @endif
        </ul>
    </div>
</div>
