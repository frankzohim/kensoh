@extends('layouts.app')
@section('title',__('Editer un produit'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Editer un produit
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">produits</li></a>
                        <li class="breadcrumb-item">Editer</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
                    Dropzone.options.dropzoneo = {
                        maxFilesize: 10,
                        acceptedFiles: ".jpeg,.jpg,.png",
                        addRemoveLinks: true,
                        timeout: 5000,
                        maxFiles : 2
                    };
            </script>
    <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Editer un product</h5>
                        <!-- Validation Errors -->
				        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @if (session('update_success'))
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-like-2"></i></span>
											<span class="alert-text"><strong>Succès! </strong> <strong>{{ session('update_success') }} </strong></span>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									@endif
									@if (session('update_failure'))
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
											<span class="alert-text"><strong>Danger!</strong> <strong> {{ session('update_failure') }} </strong> </span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
									@endif
                    </div>
                    <div class="card-body">

                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active show" id="general-tab"
                                    data-bs-toggle="tab" href="#general" role="tab" aria-controls="general"
                                    aria-selected="true"
                                    data-original-title="" title="">
                                    Général
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="restriction-tabs"
                                    data-bs-toggle="tab" href="#restriction" role="tab" aria-controls="restriction"
                                    aria-selected="false"
                                    data-original-title="" title="">
                                    Images
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="usage-tab"
                                    data-bs-toggle="tab" href="#usage" role="tab" aria-controls="usage"
                                    aria-selected="false" data-original-title="" title="">
                                    Notes
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form class="row g-3" method="POST" action="{{route('product.update',$product->id)}}">
                                    <h4>Général</h4>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                    <label for="exampleInputName" class="form-label">Nom Produit</label>
                                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{$product->name}}" name="name">

                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                                        <input type="text" class="form-control" id="description" aria-describedby="NameHelp" value="{{$product->meta_description}}" name="description">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mots clés</label>
                                        <input type="text" class="form-control" id="description" value="{{$product->meta_keywords}}" aria-describedby="NameHelp" name="keyword">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Catégorie</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @selected($category->id==$product->category_id)>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">État</label>
                                        <select id="inputState" class="form-select" name="new">
                                            <option value="1" @selected($product->new == 1)>Neuf</option>
                                            <option value="0" @selected($product->new == 0)>Occasion</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label">Position</label>
                                        <select id="inputState" class="form-select" name="position">
                                        <option value="1" @selected($product->new == 1)>En mer</option>
                                        <option value="2" @selected($product->new == 2)>Magasin</option>
                                        <option value="3" @selected($product->new == 3)>Sur le web</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                                        <select class="form-select" aria-label="Default select example" name="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}" @selected($brand->id==$product->brand_id)>{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Boutique</label>
                                    <select class="form-select" aria-label="Default select example" name="store_id">
                                        @foreach ($stores as $store)
                                        <option value="{{$store->id}}" @selected($store->id==$product->store_id)>{{$store->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>

                                    <label for="exampleFormControlTextarea1" class="form-label">Prix Unitaire</label>
                                    <div class="input-group mb-3">

                                        <span class="input-group-text">$</span>

                                        <input type="number" value="{{$product->unit_price}}" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Quantité de stock</label>
                                        <input type="number" value="{{$product->stock_quantity}}" class="form-control" class="form-control" name="stock_quantity" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label">Nature</label>
                                        <select id="inputState" class="form-select" name="nature">
                                        <option value="1" @selected($product->nature == 1)>Produit</option>
                                        <option value="0" @selected($product->nature == 0)>Service</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="state" value="0">
                                    <input type="hidden" name="vedette" value="0">

                                    <label for="exampleFormControlTextarea1" class="form-label">Vidéo (Entrez l'URL de votre vidéo)</label>
                                    <div class="input-group mb-3">

                                        <span class="input-group-text"><i class="fa-solid fa-film"></i></span>

                                        <input type="url" class="form-control"  id="video_url" name="video_url" value="{{$product->video_url}}">
                                    </div>

                                    <div style="display: flex;
                                                align-items : center;

                                    ">

                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-primary">Mise à jour</button>
                                        </div>

                                        @if($productImages->count() >= 2)
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-primary">Publié</button>
                                            </div>
                                        @else
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-primary" disabled>Publié</button>
                                            </div>
                                        @endif
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                                <div class="card-body">
                                    <div class=" login-page section-b-space col-lg-12 right-login">
                                        <div class="theme-card authentication-right">
                                            <h6 class="title-font">Instructions</h6>
                                                <p>Vous pouvez ajoutez jusqu'à 3 images pour votre produit. Les images doivent avoir l'une
                                                    des extensions suivantes : .png, .jpg, .jpeg.
                                                    L'ajout des images se fait dans la zone rectangulaire
                                                    ci-dessous, vous pouvez ajouter plusieurs images à la fois.
                                                    Si vous avez atteint le quota, merci de supprimer quelques images pour pouvoir en
                                                    ajouter d'autres.
                                                </p>
                                                    <a href="#" class="btn btn-solid">Vous avez déjà {{$productImages->count()}} Image(s) sur  3  autorisés</a>
                                        </div>
                                    </div>

                                    <form class="dropzone" id="dropzoneo" method="POST" action="{{route('product.image')}}" name="file" files="true" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="productId" id="productId" value="{{$product->id}}">
                                        <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                            <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-body vendor-table">

                                <table class="display" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th>Numéro</th>
                                        <th>Image</th>
                                        <th>Afficher</th>
                                        <th>Date Ajout</th>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productImages as $productImage)
                                        <tr>
                                            <td>{{$loop->index}}</td>
                                            <td>
                                                <div class="d-flex vendor-list">
                                                <img src="{{ route('product.displayImage',$productImage->id) }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                                </div>
                                            </td>

                                            <td><a href="{{ route('product.displayImage',['id' => $productImage->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#displayImage{{$productImage->id}}"><i class="fa fa-eye font-danger"></i></a></td>
                                            <td> <span>{{$productImage->created_at}}</span></td>
                                            <td>{{$productImage->path}}</td>
                                            <td>
                                                <div>
                                               <a href="{{ route('product.destroyImage',['id' => $productImage->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$productImage->id}}"><i class="fa fa-trash font-danger"></i></a>

                                                <div class="modal fade" id="exampleModal{{$productImage->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" action="{{ route('product.destroyImage',['id' => $productImage->id]) }}" id="delete-form{{$productImage->id}}">
                                                                @csrf
                                                                <p>{{ __('Voulez vous supprimer cet élément?') }}</p>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Oui</button>
                                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="displayImage{{$productImage->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">{{$product->name}}</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ route('product.displayImage',$productImage->id) }}" alt="" class="img-fluid  blur-up lazyloaded">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                               @forelse ($review as $review )
                                    @foreach ($users as $user)

                                        @if($user->id==$review->user_id)
                                        <div class="review-container">
                                            <img class="profil-review" src="{{ asset('assets/backend/images/dashboard/profile.png') }}" alt="">
                                            <div class="comment">
                                                <div style="height:12px; ">
                                                    <p class="user-review">
                                                        {{ $user->name }}
                                                    </p>
                                                </div>

                                                <p class="review-comment">
                                                    {{$review->comment}}
                                                </p>

                                            </div>

                                        </div>

                                        @endif
                                    @endforeach

                                   <hr>
                               @empty
                                   aucun commentaire
                               @endforelse
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

</div>
@endsection
