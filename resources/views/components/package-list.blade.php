
    <div class="row">
        <div class="col-12">
            <div class="card dashboard-table mt-0">
                <div class="card-body table-responsive-sm">
                    <div class="top-sec">




                        <h3>Colis</h3>
                        <!-- Button trigger modal -->


                        <a class="btn btn-sm btn-solid" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" role="button">Ajouter un colis</a>
                    </div>

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">description</th>
                                <th scope="col">lenght</th>
                                <th scope="col">width</th>
                                <th scope="col">weight</th>
                                <th scope="col">destination</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">#125021</th>
                                <td>neck velvet dress</td>
                                <td>shipped</td>
                                <td>$205</td>
                            </tr>
                            <tr>
                                <th scope="row">#521214</th>
                                <td>belted trench coat</td>
                                <td>shipped</td>
                                <td>$350</td>
                            </tr>
                            <tr>
                                <th scope="row">#521021</th>
                                <td>men print tee</td>
                                <td>pending</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#245021</th>
                                <td>woman print tee</td>
                                <td>shipped</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#122141</th>
                                <td>men print tee</td>
                                <td>canceled</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#125015</th>
                                <td>men print tee</td>
                                <td>pending</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#245021</th>
                                <td>woman print tee</td>
                                <td>shipped</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#122141</th>
                                <td>men print tee</td>
                                <td>canceled</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <th scope="row">#125015</th>
                                <td>men print tee</td>
                                <td>pending</td>
                                <td>$150</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nouveau Colis</h5>
                    <button type="button" class="btn-close black" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('packages.store')}}" method="post">
                        @csrf
                            <div class="container">
                                <div class="row">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <div class="input-group mb-3">



                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="description">

                              </div>
                                    <label for="exampleFormControlTextarea1" class="form-label">lenght</label>
                            <div class="input-group mb-3">



                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="lenght">

                              </div>
                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">width</label>
                                <input type="number" class="form-control" class="form-control" name="width" id="">
                              </div>
                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">weight</label>
                                <input type="number" class="form-control" class="form-control" name="weight" id="">
                              </div>
                              <label for="exampleFormControlTextarea1" class="form-label">Depart</label>
                            <div class="input-group mb-3">



                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="departure">

                              </div>
                              <label for="exampleFormControlTextarea1" class="form-label">Destination</label>
                              <div class="input-group mb-3">



                                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="destination">

                                </div>
                                </div>
                            </div>

                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</div>
