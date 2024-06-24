@extends('client.layouts.main')

@section('content')

<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="login_page_bg">
        <div class="container">
            <div class="customer_login">
                <div class="row">
                    <!--login area start-->
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="account_form login">
                            <h2 class="text-center">login</h2>
                            <form action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <p>
                                    <label>Username or email <span>*</span></label>
                                    <input type="text" name="email">
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                </p>
                                {{-- <p>if you have no account please <span class="text-danger"><a href="{{ route('register.website') }}">click
                                            here</a></span></p> --}}
                                <div class="login_submit">
                                    <button type="submit">login</button>
                                </div>
                                <div class="register_submit">
                                    <a href="{{ route('register.website') }}">Register Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <!--login area end-->
                </div>
            </div>
        </div>
    </div>
    <!-- customer login end -->

@endsection
