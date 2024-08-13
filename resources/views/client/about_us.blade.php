@include('client.layouts.header')
<!--Offcanvas menu area start-->
@include('client.layouts.secondary')
{{-- <div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="search_container">
                        <form action="{{ route('searchPage') }}" method="get">
                            <div class="search_box">
                                <input name="keyword" autocorrect="off" placeholder="Search product..." type="text">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-start ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{ route('client.home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('shop') }}">Shop</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ route('client.account') }}">my account</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--Offcanvas menu area end-->
<!-- secondary header start -->

<!-- secondary header end -->

<section class="about_page_section">
    <div class="container">
        <div class="about_page_title">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @foreach ($abouts as $about)
                <div class="about_page_pera">
                    <p>{!! $about -> description !!}</p>
                    {{-- <p><strong>Golden Jute Product</strong>is a pioneer jute basket manufacturer and exporter of jute storage basket, Laundry basket, Fruit basket, Nursery pot, Jewelry box which have an ecologically sustainable future. Golden Jute Product also produce different type of Bags, Rugs, Floor Mat, Table Mat and Handicrafts of different sizes and different color according to customer needs.</p>
                    <p><strong>Golden Jute Product</strong>has its own facility of production. We have about 1000 highly experienced workers who are responsible for our production. Most of these women have minimal education but they are skilled and well trained. They manage to earn a steady income for their families and themselves. These women play a very important role in poverty eradication and improving their overall level of living. Our production capacity 200,000 set of basket (S/3) per month. This company is located at the Savar, Dhaka, Bangladesh.</p>
                    <p><strong>Our Vision:</strong>The aim of golden Jute Product is to maintain a business that can produce high quality jute diversified products but have a minimal impact on our environment. Quality and timely delivery with proper packaging of the products to give complete satisfaction to all the patrons, both home and abroad is also ensured. We believe Quality and commitment.</p>
                    <p><strong>Our Goal: </strong>Bangladesh is the leading jute producer country in the world. The quality of our jute is excellent. It has a golden history. We are committed to produce large scale of high quality finished jute products and create an international market of jute products in Bangladesh.</p>
                    <p><strong>Our Commitment: </strong>We are committed to ensure that we do not employ child labor in our factories, no workers are forced to work and employees are paid living wages. No discrimination is practices, working environment is safe and hygienic and regular employment is provided.</p>
                    <p><strong>About Company:  </strong>The Company has 3 factory sheds and more than 20 sub center with a surface of approximately 300000 Square meters with expertise and conducive working conditions. In compliance with this strategy, the Company has made seagrass basket, jute rope, jute tape, jute fabric, colored and printed burlap ribbon, jute shopping, and Christmas bags, jute gift bags, etc. The Company makes numerous jute items such as jute cords, bag burlap rolls, ribbon burlap bags, bags of drawstrings, Christmas bags, table tops, table runners, placemat food bags, etc. A wide variety of colors that have been developed in jute goods add glamour and affectation. We hope you will not ignore purchasing certain things in your home and garden that have an artistic effect. We also supplied new products to</p> --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('client.layouts.footer')