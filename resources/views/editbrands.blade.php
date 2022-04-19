@extends('layouts.app')

@section('title')
Edit brand
@endsection

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper">

    
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Add Brands
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Add Brand</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Brand</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    <div class="col-xl-7">
                                        <form class="needs-validation add-product-form" novalidate="" action="{{route('brands.update', $brands->id)}}" method="POST">
                                            @csrf 
                                            @method('PATCH')
                                            <div class="form">
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Name  :</label>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control" id="validationCustom01" type="text" required="" name="name" value="{{$brands->name}}">
                                                    </div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                 
                                                </div>

                                                <div class="form-group mb-3 row">
                                                     <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">State  :</label>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <select class="form-control" name="state" id="">
                                                            <option  value="">--Choose the state--</option>
                                                            <option  value="1">Published</option>
                                                            <option  value="0">No Published</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                             
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-light">Discard</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
    </div>
</div>
@endsection 