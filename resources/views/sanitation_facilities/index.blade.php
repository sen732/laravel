@extends('layouts.style')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sanitation Facilities</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sanitation-facilities.create') }}">Create New Sanitation Facility</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Location</th>
            <th>Type</th>
            <th>Capacity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sanitationFacilities as $facility)
        <tr>
            <td>{{ $facility->id }}</td>
            <td>{{ $facility->location }}</td>
            <td>{{ $facility->facility_type }}</td>
            <td>{{ $facility->capacity }}</td>
            <td>
                <form action="{{ route('sanitation-facilities.destroy', $facility->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('sanitation-facilities.show', $facility->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('sanitation-facilities.edit', $facility->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{ $sanitationFacilities->links() }}
@endsection
