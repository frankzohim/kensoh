@extends('layouts.app')

@section('title',__('Category List'))

@section('content')



<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Category
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Category</li>
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
                        <h5>Category List</h5>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                    <table class="table table-bordernone">
                        <div class="card-body">
                            @if (session()->has('info'))
                            <div class="notification is-success">
                                {{session('info')}}
                            </div>

                            @endif
                            @if (session()->has('delete'))
                            <div class="notification is-success">
                                {{session('delete')}}
                            </div>

                            @endif
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Categorie Parente</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                        <tbody>



                                @foreach ($categories as $category)


                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td class="digits">{{$category->meta_description}}</td>
                                    @if ($category->parent==0)
                                        <td class="font-danger">
                                        Aucune
                                        </td>
                                    @else

                                        <td>{{$category->parent}}</td>
                                    @endif

                                    @if ($category->state==1)
                                        <td class="success">
                                        publié
                                        </td>
                                        @else
                                        <td class="danger">non publié</td>

                                    @endif
                                    <td><a href="{{route('category.edit',$category->id)}}"><i data-feather="edit"></i></td></a>
                                    <td>
                                        <form action="{{route('category.destroy',$category->id)}}" method="post">
                                       @csrf

                                        @method('DELETE')
                                        <button class="button is-danger" type="submit"><i data-feather="trash"></i>Supprimer</button>
                                        </form></td>

                                </tr>

                            @endforeach


                        </tbody>
                    </table>

                        </div>
                        <div class="btn-popup pull-right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Add Category</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                <div class="page-body">

                                    <!-- Container-fluid starts-->
                                    <div class="container-fluid">
                                        <div class="page-header">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="page-header-left">
                                                        <h3>Add Categories
                                                            <small>Kensoh Administration</small>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ol class="breadcrumb pull-right">
                                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                                                        <li class="breadcrumb-item">add-categories</li>

                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Container-fluid Ends-->



                                </div>

                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                        <input class="form-control" id="validationCustom01" type="text">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                        <input class="form-control" id="validationCustom02" type="file">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button">Save</button>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="basicScenario" class="product-physical table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection