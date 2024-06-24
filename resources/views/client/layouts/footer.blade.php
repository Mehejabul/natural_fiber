<!--footer area start-->
<footer class="footer_widgets">

    <div class="footer_top">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-3 col-sm-6 offset-lg-1">
                    <div class="widgets_container widget_menu">
                        <h3 class="text-white">About</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{ route('aboutPage') }}">About Us</a></li>
                                <li><a href="{{ route('deliveryInformationPage') }}">Delivery Information</a></li>
                                <li><a href="{{ route('exchangePolicyPage') }}">Exchange Policy</a></li>
                                <li><a href="{{ route('privacyPolicyPage') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('careerPage') }}">Career</a></li>
{{--                                <li><a href="{{ route('termsConditionPage') }}">Terms and Condition</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 ">
                    <div class="widgets_container widget_menu">
                        <h3 class="text-white">Info</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="javascript:void(0)">Size Guide</a></li>
                                <li><a href="javascript:void(0)">Store Locator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 offset-lg-1">
                    <div class="widgets_container widget_menu">
                        <h3 class="text-white">Customer Support</h3>
                        <div class="footer_menu">
                            <ul>
                                @if ($company->phone)
                                    <li><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></li>
                                @endif
                                @if ($company->support_hour)
                                    <li><a href="javascript:void(0)">{{ $company->support_hour }}</a></li>
                                @endif
                                @if ($company->email)
                                    <li><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stayConnected col-lg-2 col-md-3 col-sm-6">
                    <div class="widgets_container">
                        <h3 class="text-white">STAY CONNECTED</h3>
                        @php
                        $socialArray = ['facebook'=>$company->fb_order,'youtube'=>$company->youtube_order,'instagram'=>$company->insta_order];
                        asort($socialArray);

                        @endphp
                        <div class="footer_social">
                            <ul>
                                @foreach($socialArray as $key => $item)
                                    @if($key == 'facebook')
                                        @if ($company->facebook)
                                            <li><a class="facebook" href="{{ $company->facebook }}" target="_new"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                    @endif
                                    @if($key == 'youtube')
                                        @if ($company->youtube)
                                            <li><a class="youtube" style="background: red" href="{{ $company->youtube }}" target="_new"><i class="fa fa-youtube-play"></i></a></li>
                                        @endif
                                    @endif
                                    @if($key == 'instagram')
                                        @if ($company->instagram)
                                            <li><a class="instagram" href="{{ $company->instagram }}" target="_new"><i class="fa fa-instagram"></i></a></li>
                                        @endif
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="copyright_area text-center">
                        <p>&copy; {{ date('Y') }} <a href="{{ route('client.home') }}" class="text-uppercase">{{ $title }}</a>.
                            <a target="_blank" href="https://zariq.com.bd/" class="copyright">{{ $copyright }}</a></p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="footer_payment text-center py-3">
                            <img src="{{asset('client')}}/assets/img/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
@includeIf('client.layouts._quickview')
</div>

<div class="modal fade" id="modal_size" tabindex="-1" role="dialog" aria-hidden="true">
    @includeIf('client.layouts._sizeguide')
</div>
<!-- modal area end-->

<!--newsletter popup start-->
{{--<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>close</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>Newsletter</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">Enter your email address to subscribe our notification of our new
                        post &amp; features by email.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <span class="required">*</span><span>Enter you email address here...</span>
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                   placeholder="Enter you email address here...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
--}}
<!--news letter popup start-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{ asset('client') }}/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{ asset('client') }}/assets/js/main.js"></script>

<script src="{{ asset('client') }}/assets/js/addToCart.js"></script>
<script src="{{ asset('client') }}/assets/js/addToWishList.js"></script>
<script src="{{ asset('client') }}/assets/js/custom.js"></script>

</body>

</html>
