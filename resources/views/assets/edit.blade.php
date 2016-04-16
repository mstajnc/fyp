@extends('layouts.app')
@section('heading', 'Update asset details')
@section('content')

      <h3>Update asset details</h3>

  <form method="POST" action="/assets/edit/{{$asset->_id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}
        <div class="form-group">
          <textarea name="asset" class="form-control">{{$asset->asset}}</textarea>
        </div>


<div class="form-group">
          <button type="submit" class="btn btn-primary">Update asset</button>
        </div>

      </form>

@endsection