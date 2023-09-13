@extends('layouts.accounts')

@section('content')

<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Profile</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">User / Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- table card-1 start -->
        <div class="col-md-12 col-xl-4">
            {{-- <div class="card flat-card">
                <div class="row-table">

                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>10k</h5>
                                <span>Visitors</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>100%</h5>
                                <span>Volume</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>2000 +</h5>
                                <span>Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>120</h5>
                                <span>Mails</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- widget primary card start -->
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="feather icon-star-on"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>User Name </h4>
                        <h6>{{ Auth::user()->name }}</h6>
                    </div>
                </div>
            </div>
            <!-- widget primary card end -->
        </div>
        <!-- table card-1 end -->
        <!-- table card-2 start -->
        <div class="col-md-12 col-xl-4">
            {{-- <div class="card flat-card">
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-share-2 text-c-blue mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>1000</h5>
                                <span>Shares</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>600</h5>
                                <span>Network</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>3550</h5>
                                <span>Returns</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>100%</h5>
                                <span>Order</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- widget-success-card start -->
            <div class="card flat-card widget-purple-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-trophy"></i>
                    </div>
                    @if (Auth::user()->company_name  == null)

                    <div class="col-sm-9">

                        <h6>Profile Not Complete</h6>



                        <button type="button" class="btn btn-primary" style="background-color: white; color:black"
                         data-toggle="modal" data-target="#updateProfileModal" >Update Profile</button>

                        <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="updateProfileModalLabel">Update User Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form style="color: black">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="text" readonly class="form-control-plaintext" class="form-control" id="inputEmail4" placeholder="Email" value="{{ Auth::user()->email }}">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress">Address</label>
                                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress2">Address 2</label>
                                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                      </div>
                                      <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>...</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                          Check me out
                                        </label>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    @else

                    <div class="col-sm-9">

                    </div>

                    @endif

                </div>
            </div>
            <!-- widget-success-card end -->
        </div>
        <!-- table card-2 end -->
        <!-- Widget primary-success card start -->
        <div class="col-md-12 col-xl-4">
            <div class="card support-bar overflow-hidden">
                {{-- <div class="card-body pb-0">
                    <h2 class="m-0">350</h2>
                    <span class="text-c-blue">Support Requests</span>
                    <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                </div> --}}
                {{-- <div id="support-chart"></div> --}}
                <div class="card-footer bg-primary text-white">
                    <div class="row text-center">
                        {{-- <div class="col">
                            <h4 class="m-0 text-white">10</h4>
                            <span>Open</span>
                        </div> --}}
                        <div class="col">
                            <a href="" class="btn btn-secondary" style="background-color: white; color:black">Update Profile</a>
                        </div>
                        {{-- <div class="col">
                            <h4 class="m-0 text-white">3</h4>
                            <span>Solved</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
