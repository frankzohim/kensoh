<<<<<<< HEAD
@extends('layouts.app')
=======
@extends('layouts.app',[
    'class'=>'',
    'elementActive' => 'categories'
])
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
@section('title',__('Editer une faq'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
<<<<<<< HEAD
                    <div class="page-header-left">
=======
                   <div class="page-header-left">
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
                        <h3>Editer une faq
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('coupon.index')}}">FAQ</li></a>
                        <li class="breadcrumb-item">Ajouter</li>
                    </ol>
                </div>
=======

                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('coupon.index')}}">faq</li></a>
                        <li class="breadcrumb-item">Editer une faq</li>
                    </ol>
                </div>

>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

<<<<<<< HEAD
     <!-- Container-fluid starts-->
     <div class="container-fluid">
            <form method="post" action="{{route('faq.update',$faq->id)}}">
                @csrf
                @method('PUT')
=======
    <!-- Container-fluid starts-->
    <div class="container-fluid">
            <form method="post" action="{{route('faq.update', $faq->id)}}">
                @csrf
                @method('PUT');
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Détails d'une faq </h5>
                    </div>
                    <div class="card-body">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
<<<<<<< HEAD
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">question</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="name" name="name" type="text"   required="" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">answer</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="name" name="name" type="text"   required="" autofocus>
=======
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"> Nom Coupon</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="name" name="name" type="text"  value="{{$coupon->name}}" required="" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Code Coupon</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="code" name="code" type="text" value="{{$coupon->code}}" required="">
                                                </div>
                                                <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Date Début</label>
                                                <div class="col-md-7">
                                                    <input class="datepicker-here form-control digits" id="startDate" name="startDate" type="date" value="{{$coupon->start_date}}" data-language="en">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Date Fin</label>
                                                <div class="col-md-7">
                                                    <input class="datepicker-here form-control digits" id="endDate" name="endDate" type="date" value="{{$coupon->end_date}}" data-language="en">
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
                                                </div>
                                            </div>

                                            <div class="form-group row">
<<<<<<< HEAD
                                                <label class="col-xl-3 col-md-4">Status</label>
                                                <div class="col-md-7">
                                                    <select class="custom-select w-100 form-control" name="state" required="">
                                                        <option value="1">Publié</option>
                                                        <option value="0">Non Publié</option>
                                                    </select>
                                                </div>
                                            </div>

=======
                                                <label class="col-xl-3 col-md-4">Pourcentage Réduction</label>
                                                <div class="col-md-7">
                                                <input class="form-control" type="number" min="0" id="discount" name="discount" value="{{$coupon->discount}}" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Status</label>
                                                <div class="col-md-7">
                                                    <select class="custom-select w-100 form-control" name="state" required="">
                                                        <option value="1" @selected($coupon->state==1)>Publié</option>
                                                        <option value="0" @selected($coupon->state==0)>Non Publié</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Boutique</label>
                                                <div class="col-md-7">
                                                    <select class="custom-select w-100 form-control" required="" name="store">
                                                        @forelse($stores as $store)
                                                            <option value="{{$store->id}}" @selected($store->id==$coupon->store_id)>{{$store->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div >
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- Container-fluid Ends-->


</div>
@endsection
