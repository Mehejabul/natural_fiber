@include('client.layouts.header')
<!--Offcanvas menu area start-->
@include('client.layouts.secondary')
<!-- secondary header end -->

<section class="about_page_section">
    <div class="container">
        <div class="about_page_title">
            <h2>Gallery</h2>
        </div>
        <div class="gallery_wrap">
            <div class="row">
                @foreach ($galleries as $gallery)
                <div class="col-lg-4">
                    <div class="gal_content">
                        <div class="gallery_item">
                            <img src="{{asset('images/gallery/' . $gallery -> image)}}" alt=""
                                class="img-fluid w-100">
                            <div class="gal_overlay">
                                <h5>{{$gallery -> title}}</h5>
                                <p>{{$gallery -> name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('client.layouts.footer')
