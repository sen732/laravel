@extends('layouts.style')
@section('content')
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('sanitation-facilities.index') }}">Go to Sanitation Facilities</a>
</div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Water Sources</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('water-sources.create') }}">Create New Water Source</a>
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
            <th>Name</th>
            <th>Type</th>
            <th>Capacity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($waterSources as $source)
        <tr>
            <td>{{ $source->id }}</td>
            <td>{{ $source->name }}</td>
            <td>{{ $source->type }}</td>
            <td>{{ $source->capacity }}</td>
            <td>
                <form action="{{ route('water-sources.destroy', $source->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('water-sources.show', $source->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('water-sources.edit', $source->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{ $waterSources->links() }}
@endsection
