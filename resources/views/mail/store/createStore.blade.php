@extends('mail.template')

@section('content')



    <div>
        <h3>Nouvelle boutique créer</h3>
        <p>Une nouvelle boutique viens d'etre creer sur kensoh au nom de {{ $store->name }}</p>

        <div>
            <button type="button" class="btn btn-primary"><a href="{{ route('store.index') }}">Tout voir</a> </button>
        </div>
    </div>
@endsection
