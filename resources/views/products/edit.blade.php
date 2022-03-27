@extends('layouts.app',[
    'class'=>'',
    'elementActive' => 'categories'
])
@section('title',__('Editer une catégorie'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                   <div class="page-header-left">
                        <h3>Editer une catégorie
                            <small>Kensoh Administration</small>
                        </h3>
                    </div> 
                </div>
                
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Catégories</li></a>
                        <li class="breadcrumb-item">Editer une catégorie</li>
                    </ol>
                </div>
            
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
            <form method="post" action="{{route('category.update', $category->id)}}">
                @csrf
                @method('PUT')
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="row product-adding">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Général</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Nom</label>
                                            <input class="form-control" id="name" name="name" type="text" value='{{$category->name}}' required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span> Catégorie parente</label>
                                            <select class="custom-select form-control" required name="parent">
                                                <option  value="0">Catégorie principale</option>
                                                @forelse ($categories as $category1)
                                                    @if($category->id==$category1->id || $category->id==$category1->parent)
                                                        @continue;
                                                    @endif

                                                    <option  value="{{$category1->id}}" @if($category->parent==$category1->id) echo selected @endif>{{$category1->name}}</option>
                                                @empty
                                                Nothing
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span> Status</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="edo-ani">
                                                    <input class="radio_animated" id="state" type="radio" name="state" value="1" @if($category->state==1) echo checked @endif>
                                                    Publié
                                                </label>
                                                <label class="d-block" for="edo-ani1">
                                                    <input class="radio_animated" id="state" type="radio" name="state" value="0" @if($category->state==0) echo checked @endif>
                                                    Non Publié
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Reférencement</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                       
                                        <div class="form-group">
                                            <label class="col-form-label">Déscription de la catégorie</label>
                                            <textarea rows="2" cols="12" id="description" aria-describedby="NameHelp" name="description" required>{{$category->meta_description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Mots clés de la catégorie</label>
                                            <textarea rows="2" cols="12" id="keyword" aria-describedby="NameHelp" name="keyword" required>{{$category->meta_keywords}}</textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="product-buttons text-center">
                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    <!-- Container-fluid Ends-->


</div>
@endsection