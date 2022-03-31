@extends('layouts.app',[
    'class'=>'',
    'elementActive' => 'categories'
])
@section('title',__('Editer un coupon'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                   <div class="page-header-left">
                        <h3>Editer un coupon
                            <small>Kensoh Administration</small>
                        </h3>
                    </div> 
                </div>
                
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('coupon.index')}}">coupons</li></a>
                        <li class="breadcrumb-item">Editer un coupon</li>
                    </ol>
                </div>
            
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
            <form method="post" action="{{route('coupon.update', $coupon->id)}}">
                @csrf
                @method('PUT');
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Détails du Coupon de Réduction</h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
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
                                                </div>
                                            </div>
                                          
                                            <div class="form-group row">
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