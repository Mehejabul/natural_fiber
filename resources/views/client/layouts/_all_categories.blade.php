<div class="categories_menu categories_four @yield('homepage')">
    <div class="categories_title">
        <h2 class="categori_toggle">CATEGORIES</h2>
    </div>
    {{-- <div class="categories_menu_toggle">
        <ul>
            @foreach (App\Models\Catalogue::with('category')->get()->all() as $catalogue)
                <li><a href="{{ url('shop/catalogue/'.$catalogue->id) }}"> {{ $catalogue->name }}</a></li>
            @endforeach
        </ul>
    </div> --}}
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
            {{-- <li class="menu_item_children"><a href="#"> Wheels & Tires <i class="fa fa-angle-right"></i></a>
                <ul class="categories_mega_menu column_3">
                    <li class="menu_item_children"><a href="#">Chair</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Dining room</a></li>
                            <li><a href="">bedroom</a></li>
                            <li><a href=""> Home & Office</a></li>
                            <li><a href="">living room</a></li>
                        </ul>
                    </li>
                    <li class="menu_item_children"><a href="#">Lighting</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Ceiling Lighting</a></li>
                            <li><a href="">Wall Lighting</a></li>
                            <li><a href="">Outdoor Lighting</a></li>
                            <li><a href="">Smart Lighting</a></li>
                        </ul>
                    </li>
                    <li class="menu_item_children"><a href="#">Sofa</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Fabric Sofas</a></li>
                            <li><a href="">Leather Sofas</a></li>
                            <li><a href="">Corner Sofas</a></li>
                            <li><a href="">Sofa Beds</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                <ul class="categories_mega_menu column_2">
                    <li class="menu_item_children"><a href="#">Brake Tools</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Driveshafts</a></li>
                            <li><a href="">Spools</a></li>
                            <li><a href="">Diesel </a></li>
                            <li><a href="">Gasoline</a></li>
                        </ul>
                    </li>
                    <li class="menu_item_children"><a href="#">Emergency Brake</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Dolls for Girls</a></li>
                            <li><a href="">Girls' Learning Toys</a></li>
                            <li><a href="">Arts and Crafts for Girls</a></li>
                            <li><a href="">Video Games for Girls</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>
                <ul class="categories_mega_menu column_2">
                    <li class="menu_item_children"><a href="#">Check Trousers</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Building</a></li>
                            <li><a href="">Electronics</a></li>
                            <li><a href="">action figures </a></li>
                            <li><a href="">specialty & boutique toy</a></li>
                        </ul>
                    </li>
                    <li class="menu_item_children"><a href="#">Calculators</a>
                        <ul class="categorie_sub_menu">
                            <li><a href="">Dolls for Girls</a></li>
                            <li><a href="">Girls' Learning Toys</a></li>
                            <li><a href="">Arts and Crafts for Girls</a></li>
                            <li><a href="">Video Games for Girls</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"> Lighting</a></li>
            <li><a href="#"> Accessories</a></li>
            <li><a href="#">Body Parts</a></li>
            <li><a href="#">Networking</a></li>
            <li><a href="#">Perfomance Filters</a></li>
            <li><a href="#"> Engine Parts</a></li> --}}
            {{-- <li class="hidden"><a href="#">New Sofas</a></li>
            <li class="hidden"><a href="#">Sleight Sofas</a></li>--}}
            @if ($load > 0)
            <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
            @endif
        </ul>
    </div>
</div>
