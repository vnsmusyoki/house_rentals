@extends('layouts.main')
@section('title', 'Create New Apartment')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add New Apartment</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('landlord.storeapartment') }}" method="POST" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Apartment/Rental/House Name</label>
                                <input type="text" name="apartment_name" value="{{ old('apartment_name') }}">
                            </div>
                            @error('apartment_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Apartment/Rental/House Picture</label>
                                <input type="file" name="apartment_photo" value="{{ old('apartment_photo') }}">
                            </div>
                            @error('apartment_photo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select" name="apartment_type">
                                    <option value="">Choose Category</option>
                                    @foreach ($apartmenttypes as $apartmenttype)
                                        <option value="{{ $apartmenttype->id }}">
                                            {{ ucwords($apartmenttype->apartment_type) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('apartment_type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Which is the nearest landmark?</label>
                                <input type="text" id="address-input" name="address_address"
                                    class="map-input @error('address_address') is-invalid @enderror"
                                    value="{{ old('address_address') }}">
                                <input type="hidden" name="address_latitude" id="address-latitude" />
                                <input type="hidden" name="address_longitude" id="address-longitude" />
                                @error('address_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div id="address-map-container" style="width:100%;height:400px; ">
                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                </div>
                            </div>
                            @error('address_latitude')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Describe exact location from the nearest landmark</label>
                                <input type="text" name="location_description" value="{{ old('location_description') }}"
                                    placeholder="exampl: Opposite  police station etc....">
                            </div>
                            @error('location_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end">
                            <button class="btn btn-cancel me-2" type="reset">Cancel</button>
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <script>
            var errors = {!! json_encode($errors->toArray()) !!};
            console.log(errors);
        </script>
    </div>
@endsection
@section('scripts')
    @parent
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
        async defer></script>
    <script src="{{ asset('js/mapInput.js') }}"></script>
@stop
