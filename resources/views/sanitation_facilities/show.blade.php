@extends('layouts.style')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Sanitation Facility</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sanitation-facilities.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $sanitationFacility->location }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                {{ $sanitationFacility->facility_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Capacity:</strong>
                {{ $sanitationFacility->capacity }}
            </div>
        </div>
    </div>
@endsection
