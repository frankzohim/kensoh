@extends('layouts.app')
@section('title', __('Liste Marques'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Toutes les marques
                                    <small>Kensoh Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Marques</li>
                                <li class="breadcrumb-item active">Listing</li>
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
                        <h5>Vendor Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                    <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Ajouter Une Marque</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Ajouter Une Marque</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form class="needs-validation add-product-form" method="POST" action="{{route('brand.store')}}" >
                                                    @csrf
                                                    <div class="form">
                                                        <div class="form-group mb-3 row">
                                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nom :</label>
                                                            <div class="col-xl-8 col-sm-7">
                                                                <input type="text" name="name" id="name" class="form-control" required autofocus>
                                                            </div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                        
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                            <label class="col-form-label">Status<span>*</span></label>
                                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                <label class="d-block" for="edo-ani">
                                                                    <input class="radio_animated"  type="radio" name="state" value="1">
                                                                    Publié
                                                                </label>
                                                                <label class="d-block" for="edo-ani1">
                                                                    <input class="radio_animated"  type="radio" name="state" value="0" checked>
                                                                    Non Publié
                                                                </label>
                                                            </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Vendor</th>
                                <th>Products</th>
                                <th>Store Name</th>
                                <th>Create Date</th>
                                <th>Wallet Balance</th>
                                <th>Revenue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/team/2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Petey Cruiser</span>
                                    </div>
                                </td>
                                <td>1670</td>
                                <td>Warephase</td>
                                <td>8/10/18</td>
                                <td>$576132</td>
                                <td>$9761266</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/user5.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Rowan torres</span>
                                    </div>
                                </td>
                                <td>790</td>
                                <td>Sunnamplex</td>
                                <td>5/6/18</td>
                                <td>$87610</td>
                                <td>$631479</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/boy-2.png" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Gray Brody</span>
                                    </div>
                                </td>
                                <td>579</td>
                                <td>Conecom</td>
                                <td>25/2/18</td>
                                <td>$245508</td>
                                <td>$1279520</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/user.png" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Lane Skylar</span>
                                    </div>
                                </td>
                                <td>8972</td>
                                <td>Golddex</td>
                                <td>30/3/18</td>
                                <td>$7812483</td>
                                <td>$8761424</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/designer.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Colton Clay</span>
                                    </div>
                                </td>
                                <td>9710</td>
                                <td>Green-Plus</td>
                                <td>6/5/18</td>
                                <td>$780250</td>
                                <td>$8793611</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/user2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Woters maxine</span>
                                    </div>
                                </td>
                                <td>680</td>
                                <td>Kan-code</td>
                                <td>15/4/18</td>
                                <td>$27910</td>
                                <td>$579214</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/user1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Lane Skylar</span>
                                    </div>
                                </td>
                                <td>8678</td>
                                <td>Plexzap</td>
                                <td>4/8/18</td>
                                <td>$89340</td>
                                <td>$10285255</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/dashboard/user3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Perez Alonzo</span>
                                    </div>
                                </td>
                                <td>3476</td>
                                <td>Betatech</td>
                                <td>17/9/18</td>
                                <td>$32451</td>
                                <td>$647212</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backendimages/team/3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Anna Mull</span>
                                    </div>
                                </td>
                                <td>1670</td>
                                <td>Zotware</td>
                                <td>8/10/18</td>
                                <td>$576132</td>
                                <td>$9761266</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="/assets/backend/images/team/1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Paige Turner</span>
                                    </div>
                                </td>
                                <td>4680</td>
                                <td>Finhigh</td>
                                <td>11/7/18</td>
                                <td>$87616</td>
                                <td>$947611</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->



@endsection