@extends('layouts.app')

@section('title')
List brands
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
                                <h3>Brand List
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Brands</li>
                                <li class="breadcrumb-item active">Brand List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Brands Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name </th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                             @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td><strong>{{ $brand->name }}</strong></td>
                                <td><strong>{{ $brand->state }}</strong></td>
                              <!--  <td><a class="button is-primary" href="{{ route('brands.show', $brand->id) }}">Voir</a></td>-->
                                <td><a class="button is-warning" href="{{ route('brands.edit', $brand->id) }}"><i class="fa fa-edit me-2 font-success">Update</i></a></td>
                                <td>
                                    <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit"><i class="fa fa-trash font-danger">Delete</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection 