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
                <div class="col-lg-12 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Apartment Locations </h5>
                        </div>
                        <div class="card-body">
                            <div id="map" style='height:400px'></div>
                            <script type="text/javascript">
                                function initializeMap() {
                                    const locations = <?php echo json_encode($apartments); ?>;
                                    console.log(locations);
                                    const map = new google.maps.Map(document.getElementById("map"));
                                    var infowindow = new google.maps.InfoWindow();
                                    var bounds = new google.maps.LatLngBounds();
                                    for (var location of locations) {
                                        var marker = new google.maps.Marker({
                                            position: new google.maps.LatLng(location.latitude, location.longitude),
                                            map: map
                                        });
                                        bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, 'click', (function(marker, location) {
                                            return function() {
                                                infowindow.setContent(location.latitude + " & " + location.longitude);
                                                infowindow.open(map, marker);
                                            }
                                        })(marker, location));

                                    }
                                    map.fitBounds(bounds);
                                }
                            </script>
                            <script type="text/javascript"
                                src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initializeMap"></script>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Rental Income </h5>

                        </div>
                        <div class="card-body">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                            <div>
                                <canvas id="lineChart"></canvas>
                            </div>
                            <script>
                                var ctx = document.getElementById('lineChart').getContext('2d');
                                var examsChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: {!! json_encode($weekLabels) !!},
                                        datasets: [{
                                            label: 'Exams per Week',
                                            data: {!! json_encode($examCounts) !!},
                                            fill: false,
                                            borderColor: 'rgb(75, 192, 192)',
                                            tension: 0.1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        scales: {
                                            x: {
                                                display: true,
                                                title: {
                                                    display: true,
                                                    text: 'Week'
                                                }
                                            },
                                            y: {
                                                display: true,
                                                title: {
                                                    display: true,
                                                    text: 'Exam Count'
                                                }
                                            }
                                        }
                                    }
                                });
                            </script>
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
                                            <img src="{{ asset('backend/assets/img/product/product2.jpg') }}" alt="product">
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
