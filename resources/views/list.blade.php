@extends('layouts.app')
@section('title', __('listes coupons'))
@section('content')




            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>List Coupons
                                    <small>Administrator Kensoh</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Coupons</li>
                                <li class="breadcrumb-item active">List Coupons</li>
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
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">

                                <div id="batchDelete" class="category-table order-table">

                                </div>
                                <div class="user-status table-responsive latest-order-table">
                                    <table class="table table-bordernone">
                                        <div class="card-body">



                                                <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Start_date</th>
                                                    <th scope="col">End_date</th>
                                                    <th scope="col">Discount</th>>
                                                    <th scope="col">State</th>

                                                </tr>
                                                </thead>
                                        <tbody>
											@foreach ($coupons as $coupon)


												<tr>
													<td>{{$coupon->name}}</td>
													<td class="digits">{{$coupon->state_date}}</td>
													<td>{{$coupon->end_date}}</td>
													<td>{{$coupon->discount}}</td>
													<td>{{$coupon->state}}</td>


													<td><a href="{{route('coupon.edit',$coupon->id)}}"><i data-feather="edit"></i></td></a>
													<td>
														<form action="{{route('coupon.destroy',$coupon->id)}}" method="post">
													   @csrf

														@method('DELETE')
														<button class="button is-danger" type="submit"><i data-feather="trash"></i>Supprimer</button>
														</form></td>

												</tr>

											@endforeach


										</tbody>
									</div>
								</table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

    </div>

</div>

@endsection
