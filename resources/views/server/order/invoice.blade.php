@extends('server.layout.layout')

@section('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/pages/app-invoice.css') }}">
<!-- END: Custom CSS-->
<style>
    a label {
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<div class="content-header row">
</div>
<div class="content-body">
    <!-- app invoice View Page -->
    <section class="invoice-view-wrapper">
        <div class="row">
            <!-- invoice view page -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-print-area">
                    <div class="card-content">
                        <div class="card-body pb-0 mx-25">
                            <!-- header section -->
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <span class="invoice-number mr-50">Invoice#</span>
                                    <span>ABRAR-{{ $order->id }}</span>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                        <div class="mr-3">
                                            <small class="text-muted">Order Date:</small>
                                            <span>{{ date('d M Y',strtotime($order->created_at)) }}</span>
                                        </div>
                                        {{-- <div>
                                            <small class="text-muted">Delivery Date:</small>
                                            <span>08/10/2019</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- logo and title -->
                            <div class="row my-3">
                                <div class="col-6">
                                    <h4 class="text-primary">Abrar Mart</h4>
                                    <span>Phone: {{ $company->phone }}</span> <br>
                                    <span>Email: {{ $company->email }}</span>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="{{ asset('images/company/'.$company->logo) }}" alt="logo" height="46" width="164">
                                </div>
                            </div>
                            <hr>
                            <!-- invoice address and contact -->
                            <div class="row invoice-info">
                                <div class="col-6 mt-1">
                                    <h6 class="invoice-from">Customer Info</h6>
                                    <div class="mb-1">
                                        <span>{{ $order->user->name }}</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>{{ $order->user->address }}</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>{{ $order->user->email }}</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>{{ $order->user->phone }}</span>
                                    </div>
                                </div>
                                {{-- <div class="col-6 mt-1">
                                    <h6 class="invoice-to">Bill To</h6>
                                    <div class="mb-1">
                                        <span>Pixinvent PVT. LTD.</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>203 Sussex St. Suite B Waukegan, IL 60085</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>pixinvent@gmail.com</span>
                                    </div>
                                    <div class="mb-1">
                                        <span>987-352-5603</span>
                                    </div>
                                </div> --}}
                            </div>
                            <hr>
                        </div>
                        <!-- product details table-->
                        <div class="invoice-product-details table-responsive mx-md-25">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th scope="col">Item</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col" class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sum = 0;
                                    @endphp
                                    @foreach ($orderItems as $item)
                                    <tr>
                                        <td>{{ $item->product->title }}</td>
                                        <td>@if ($item->variation)
                                            {{ $item->variation->size }}
                                        @endif</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td class="text-primary text-left font-weight-bold">{{ $item->price*$item->quantity }}Tk</td>
                                        @php
                                            $sum +=$item->price*$item->quantity
                                        @endphp
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- invoice subtotal -->
                        <div class="card-body pt-0 mx-25">
                            <hr>
                            <div class="row">
                                <div class="col-4 col-sm-6 mt-75">
                                    <p>Powered By Zariq Ltd.</p>
                                </div>
                                <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                    <div class="invoice-subtotal">
                                        {{-- <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Subtotal</span>
                                            <span class="invoice-value">$ 76.00</span>
                                        </div>
                                        <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Discount</span>
                                            <span class="invoice-value">- $ 09.60</span>
                                        </div>
                                        <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Tax</span>
                                            <span class="invoice-value">21%</span>
                                        </div>
                                        <hr> --}}
                                        <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Invoice Total</span>
                                            <span class="invoice-value">{{ $sum }}Tk</span>
                                        </div>
                                        {{-- <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Paid to date</span>
                                            <span class="invoice-value">- $ 00.00</span>
                                        </div>
                                        <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Balance (USD)</span>
                                            <span class="invoice-value">$ 10,953</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- invoice action  -->
            <div class="col-xl-3 col-md-4 col-12">
                <div class="card invoice-action-wrapper shadow-none border">
                    <div class="card-body">
                        {{-- <div class="invoice-action-btn">
                            <button class="btn btn-primary btn-block invoice-send-btn">
                                <i class="bx bx-send"></i>
                                <span>Send Invoice</span>
                            </button>
                        </div> --}}
                        <div class="invoice-action-btn">
                            <button class="btn btn-light-primary btn-block invoice-print">
                                <span>print</span>
                            </button>
                        </div>
                        {{-- <div class="invoice-action-btn">
                            <a href="app-invoice-edit.html" class="btn btn-light-primary btn-block">
                                <span>Edit Invoice</span>
                            </a>
                        </div>
                        <div class="invoice-action-btn">
                            <button class="btn btn-success btn-block">
                                <i class='bx bx-dollar'></i>
                                <span>Add Payment</span>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin_template/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/footer.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_template/app-assets/js/scripts/datatables/datatable.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/pages/app-invoice.js') }}"></script>
<!-- END: Page JS-->

@endsection
