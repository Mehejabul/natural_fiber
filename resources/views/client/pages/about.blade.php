@extends('client.layouts.main')

@section('content')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="privacy_policy_bg">
        <div class="container">
            <div class="privacy_policy_main_area" style="margin: 0 3%">
                <div class="row">
                    <div class="col-12">
                        <div class="privacy_policy_header" style="margin-bottom: 0px;">
                            <h3 style="color: #af090d; font-weight: bold; text-align: left;">About Us</h3>
                        </div>
                        <div class="privacy_content section_2">
                            <p style="text-align: justify">
                                abrar.com is a service oriented e-commerce business which gives you the authority to unleash your shopaholic attitude from home with quality products and world class customer support.
At abrarmart.com, we strive to utilize the power of the internet in its highest peak to fulfil the needs of your busy life.
We cover whole Bangladesh right now and still, anyone from outside of Bangladesh can purchase products online providing a Bangladeshi shipping address. Be comfy to experience the best shopping experience from us.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
