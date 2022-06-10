@extends('layouts.app')

@section('title',__('Liste des faqs'))

@section('content')



<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Tous les faqs
                            <small>Tableau de bord Kensoh</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">faqs</li></a>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>

@section('title',__('Ajout d\'une faq'))

@section('content')
 <!-- breadcrumb start -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>faq</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html.htm">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">faq</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

 <!--section start-->
 <section class="faq-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion theme-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0"><button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                    can I downgrade to an earlier version of Dummy Content?</button></h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>it look like readable English. Many desktop publishing packages and web page
                                    editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                    ipsum' will uncover many web sites still in their infancy. Various versions have
                                    evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                    repeat predefined chunks as necessary, making this the first true generator on
                                    the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                    handful of model sentence structures</p>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I upgrade from Shopify 2.5 to shopify
                                            3?</button></h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>it look like readable English. Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Various versions have
                                            evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                            repeat predefined chunks as necessary, making this the first true generator on
                                            the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                            handful of model sentence structures</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Under what license are Regular Labs extensions
                                            released?</button></h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>it look like readable English. Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Various versions have
                                            evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                            repeat predefined chunks as necessary, making this the first true generator on
                                            the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                            handful of model sentence structures</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What is the Regular Labs Library?</button></h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>it look like readable English. Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Various versions have
                                            evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                            repeat predefined chunks as necessary, making this the first true generator on
                                            the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                            handful of model sentence structures</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Can I turn on/off some blocks on the page?</button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>it look like readable English. Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Various versions have
                                            evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                            repeat predefined chunks as necessary, making this the first true generator on
                                            the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                            handful of model sentence structures</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">What is included in the theme package?</button></h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>it look like readable English. Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Various versions have
                                            evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                            repeat predefined chunks as necessary, making this the first true generator on
                                            the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                            handful of model sentence structures</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section ends-->


        <!-- footer start -->
        <footer class="footer-light">
            <div class="light-layout">
                <div class="container">
                    <section class="small-section border-section border-top-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="subscribe">
                                    <div>
                                        <h4>KNOW IT ALL FIRST!</h4>
                                        <p>Never Miss Anything From Kensoh By Signing Up To Our Newsletter.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                    <div class="form-group mx-sm-3">
                                        <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                    </div>
                                    <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </footer>
        <!-- footer end -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid Ends-->

   	<!-- Container-fluid starts-->
       <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Tous les faqs</h5><br>
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

                    <div class="card-body vendor-table">
                    <div class="btn-popup pull-right">
                        <a href='{{route("faq.create")}}'><button type="button" class="btn btn-primary">Ajouter une faq</button></a>
                    </div>
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>question</th>
                                <th>reponse</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faqs as $faq)
                                <tr>
                                    <td>
                                        <div class="d-flex vendor-list">

                                            <span>{{$faq->question}}</span>
                                        </div>
                                    </td>
                                    <td>{{$faq->reponse}}</td>
                                    <td>{{$faq->state}}</td>


                                    <td>
                                        <div>
                                        <a href="{{route('faq.edit',$faq->id)}}" ><i class="fa fa-edit me-2 font-success"></i></a>

                                        <a href="{{ route('faq.destroy',['faq' => $faq->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$faq->id}}"><i class="fa fa-trash font-danger"></i></a>

                                        <div class="modal fade" id="exampleModal{{$faq->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('faq.destroy',['faq' => $faq->id]) }}" id="delete-form{{$faq->id}}">
                                                    @csrf
                                                    <p>{{ __('Voulez vous supprimer cet élément?') }}</p>
                                                    @method('DELETE')
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Oui</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                                </form>
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
            </div>

            <!-- Container-fluid Ends-->

</div>

@endsection
