@extends('layouts.app')
@section('heading', 'Update asset details')
@section('content')

      <h3>Update asset location</h3>
    <table class="table table-striped task-table">
              <tr>
              <div>
              <td>{{$asset->_id}}</td>
              <td>{{$asset->asset}}</td>
              <td>{{$asset->quantity}}</td>
              <td>{{$asset->location->location}}</td>
              </div>
              </tr>
    </table>
  <form method="POST" action="/assets/location/{{$asset->_id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}
          <div class="form-group">
                <label class="col-md-4 control-label">Location</label>
                <div class="col-md-6">
                    <select  class="form-control" name="location_id">
                    @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->location}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Update location</button>
      </div>

      </form>

@endsection