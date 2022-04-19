@extends('layouts.master')
@section('title', __('Kensoh-Contact'))

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Contact</h5>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="exampleInputName" class="form-label">Nom Produit</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{old('name')}}" name="name">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
