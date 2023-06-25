@extends('layouts.main')
@section('title', 'Hello ' . Auth::user()->name)
@section('content')
    @role('landlord')
        <div class="content">
            <div class="row">

                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('backend/assets/img/icons/dash2.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                            <h6>Total Amount Collected</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('backend/assets/img/icons/dash1.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                            <h6>Total Apartments & Rentals</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('backend/assets/img/icons/dash3.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                            <h6>Total Paid This Month</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('backend/assets/img/icons/dash4.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                            <h6>Pending Payments This Month</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Total Tenants</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Leaving Next Month</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Requested Bookings</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>105</h4>
                            <h5>Empty Rooms This Month</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Rental Income </h5>
                            <div class="graph-sets">


                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_charts"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Recent Payments</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dataview">
                                <table class="table datatable ">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Room No</th>
                                            <th>Tenant</th>
                                            <th>Amount Paid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="productimgname">
                                                <a href="#">{{ ucwords($apartments[0]->apartment_name) }}</a>
                                                <span class="badge badge-danger">2B</span>
                                            </td>
                                            <td>{{ ucwords(Auth::user()->name) }}</td>
                                            <td>Ksh. 10, 000</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Pending Payments This Month</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Apartment</th>
                                    <th>House</th>
                                    <th>Tenant</th>
                                    <th>Amount To Pay</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="javascript:void(0);">{{ ucwords($apartments[0]->apartment_name) }}</a></td>
                                    <td class="productimgname">
                                        <a class="product-img" href="#">
                                            <img src="{{  asset('backend/assets/img/product/product2.jpg') }}" alt="product">
                                        </a>
                                        <a href="">{{ ucwords($apartments[0]->apartment_name) }}</a>
                                    </td>
                                    <td>{{ ucwords(Auth::user()->name) }}</td>
                                    <td>Ksh. 10, 000</td>
                                    <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole
@endsection
