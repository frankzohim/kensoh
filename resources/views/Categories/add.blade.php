@extends('layouts.app')
@section('title',__('Ajout d\'une Categorie'))

@section('content')

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

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Categories</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputName" class="form-label">Category Name </label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp">

                            </div>
                            <div class="mb-3">
                                <label for="Categoryslug" class="form-label">Category Slug</label>
                                <textarea class="form-control" id="Categoryslug" rows="2"></textarea>
                              </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Container-fluid Ends-->

</div>
@endsection
