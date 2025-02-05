@extends('server.layout.layout')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline{
            height: 100px;
        }
    </style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success: </strong>{{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <h5 class="content-header-title float-left pr-1 mb-0">Product Update</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a>
                        </li>
                        <li class="breadcrumb-item active">Product Update
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <fieldset >
                                            <h5>Product Title <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="e.g:Kids Premium Water Bottle Sweet Pink" aria-describedby="basic-Createon1" value="{{ $product->title }}" name="title" required>
                                            </div>
                                        </fieldset>

                                        <fieldset class="mt-2">
                                            <h5>Product Code <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type Product Model" aria-describedby="basic-Createon1" value="{{ $product->code }}" name="code" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Product Color <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type Product Color" aria-describedby="basic-Createon1" value="{{ $product->color }}" name="color" >
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Weight</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="e.g:100" aria-describedby="basic-Createon1" name="weight" value="{{ $product->weight }}">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Unit <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="unit_id" id="" class="form-control" required>
                                                    <option value="">----select unit-----</option>
                                                    @if ($units)
                                                        @foreach ($units as $unit)
                                                            <option @if ($product->unit_id == $unit->id)
                                                                selected
                                                            @endif value="{{ $unit->id }}">{{ $unit->title }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Category <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bxs-categories"></i></span>
                                                </div>
                                                <select name="category_id" id="category_id" class="form-control" required>
                                                    <option value="">----select category-----</option>
                                                    @foreach ($categories as $catalogue)
                                                        <optgroup label="{{ $catalogue['name'] }}"></optgroup>
                                                        @foreach ($catalogue['category'] as $category)
                                                            <option @if ($product->category_id == $category['id'])
                                                                selected
                                                            @endif value="{{ $category['id'] }}">&nbsp;&nbsp;&nbsp;--&nbsp;{{ $category['name'] }}</option>
                                                            @foreach ($category['subcategories'] as $subcategories)
                                                                <option @if ($product->category_id == $subcategories['id'])
                                                                    selected
                                                                @endif value="{{ $subcategories['id'] }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;{{ $subcategories['name'] }}</option>
                                                            @endforeach
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Brand <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bxl-slack"></i></span>
                                                </div>
                                                <select name="brand_id" id="" class="form-control" required>
                                                    <option value="">----select brand----</option>
                                                    @foreach ($brands as $brand)
                                                        <option @if ($product->brand_id == $brand['id'])
                                                            selected
                                                        @endif value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Has Stock <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="has_stock" id="" class="form-control" required>
                                                    <option @if ($product->has_stock == 'Yes')
                                                        selected
                                                    @endif value="Yes">Yes</option>
                                                    <option @if ($product->has_stock == 'No')
                                                        selected
                                                    @endif value="No">No</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <!--<fieldset class="mt-2">-->
                                        <!--    <h5>Discount Type</h5>-->
                                        <!--    <div class="input-group">-->
                                        <!--        <div class="input-group-prepend">-->
                                        <!--            <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>-->
                                        <!--        </div>-->
                                        <!--        <select name="discount_type" id="" class="form-control">-->
                                        <!--            <option @if ($product->discount_type == 'Not_Apply')-->
                                        <!--                selected-->
                                        <!--            @endif value="Not_Apply">Not Apply</option>-->
                                        <!--            <option @if ($product->discount_type == 'Fixed')-->
                                        <!--                selected-->
                                        <!--            @endif value="Fixed">Fixed</option>-->
                                        <!--            <option @if ($product->discount_type == 'Percentage')-->
                                        <!--                selected-->
                                        <!--            @endif value="Percentage">Percentage</option>-->
                                        <!--        </select>-->
                                        <!--    </div>-->
                                        <!--</fieldset>-->
                                        <fieldset class="mt-2">
                                            <h5>Discount Amount</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="e.g: 100 Blank if no discount" aria-describedby="basic-Createon1" name="discount_amount" value="{{ $product->discount_amount }}">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Cost/Purchase Price <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="100" aria-describedby="basic-Createon1" name="cost" value="{{ $product->cost }}" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>MRP Price <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="150" aria-describedby="basic-Createon1" name="mrp" value="{{ $product->mrp }}" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Alert Stock <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="25" aria-describedby="basic-Createon1" name="alert_stock" value="{{ $product->alert_stock }}" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Product Type <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="type" id="" class="form-control" required>
                                                    @if ($product_types)
                                                        <option @if ($product->type == 0)
                                                                    selected
                                                                @endif value="0">Not Select</option>
                                                        @foreach ($product_types as $product_type)
                                                            <option @if ($product->type == $product_type->id)
                                                                        selected
                                                                    @endif value="{{ $product_type->id }}">{{ $product_type->title }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>View Section <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="view_section" id="" class="form-control" required>
                                                    <option value="">---Select View Section---</option>
                                                    @if ($product_views)
                                                        @foreach ($product_views as $view)
                                                            <option value="{{ $view->id }}" @if ($view->id == $product->view_section)
                                                                selected
                                                            @endif>{{ $view->title }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </fieldset>
                                        {{-- <fieldset class="mt-2">
                                            <h5>Description</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Product Description" name="description"></textarea>
                                            </div>
                                        </fieldset> --}}
                                        <fieldset class="mt-2">
                                            <h5>Product Description <span class="star">*</span></h5>
                                            <textarea name="details_description" id="description">{!! $product->details_description !!}</textarea>
                                        </fieldset>
                                       {{-- <fieldset class="mt-2">
                                            <h5>Tags (Separated by Comma)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="e.g: popular, hot deals" name="tags"></textarea>
                                            </div>
                                        </fieldset> --}}


                                        <fieldset class="mt-2">
                                            <h5>Image</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" id="image" onchange="loadFile(event)">
                                            </div>
                                        </fieldset>
                                        @if($product->image != null)
                                        <img src="{{ asset('images/product_image/'.$product->image) }}" id="output" alt="logo" width="300px" height="150px" class="mt-2 mx-1">
                                        @endif
                                        {{-- <img id="output" class="mt-2"> --}}
                                        <fieldset class="mt-2">
                                            <h5>Size Guide</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="size_guide" id="size_guide" onchange="loadGuide(event)">
                                            </div>
                                        </fieldset>
                                        @if($product->size_guide != null)
                                        <img src="{{ asset('images/product_sizeguide/'.$product->size_guide) }}" id="guide" alt="logo" width="300px" height="150px" class="mt-2 mx-1">
                                        @endif
                                         <img id="guide" class="mt-2">

                                        <fieldset class="mt-2">
                                            <h5>MultiImage</h5>
                                            <span><strong style="color: red;">Note:</strong> When you Delete a single Photo that photo permanently delete from server, If you want to add more photo than choose files and Click Update button.</span>
                                            <div class="input-group pt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="multiImage[]" id="multiImage" multiple>
                                            </div>
                                        </fieldset>
                                        @if ($product->images)
                                            <div class="d-flax mt-2">
                                                @foreach ($product->images as $image)

                                                    <img src="{{ asset('images/multiImage/'.$image->image) }}" alt="" height="200px">

                                                    <a style="color: red; padding: 0 10px;" href="{{ route('ImageDelete',$image->id) }}">
                                                        Delete
                                                    </a>
                                                    <br>
                                                    <br>
                                                @endforeach
                                            </div>
                                        @endif

                                        <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/moment.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/pages/table-extended.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script>
        var loadGuide = function(event) {
            var output = document.getElementById('guide');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
