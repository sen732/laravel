@extends('layouts.style')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Water Source</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('water-sources.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('water-sources.update', $waterSource->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $waterSource->name }}" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="{{ $waterSource->type }}" required>
        <br>
        <label for="capacity">Capacity:</label>
        <input type="number" step="0.01" id="capacity" name="capacity" value="{{ $waterSource->capacity }}" required>
        <br>
        <button type="submit" class="btn btn-primary">Update Water Source</button>
    </form>
@endsection
