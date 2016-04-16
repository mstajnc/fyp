@extends('layouts.app')
@section('heading', 'Update location details')
@section('content')

      <h3>Update location details</h3>

  <form method="POST" action="/locations/edit/{{$location->id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}

         <div class="form-group">
                    <label class="col-md-4 control-label">Location</label>
                    <div class="col-md-6">
        <input type="text" class="form-control" name="location" value="{{$location->location}}">
          
        </div>

        <label class="col-md-4 control-label">Number of allowed units</label>
                    <div class="col-md-2">
                        <input type="number" step=50 class="form-control" name="allowed_units" value="{{$location->allowed_units}}">

                        @if ($errors->has('allowed_units'))
                            <span class="help-block">
                                <strong>{{ $errors->first('allowed_units') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">Update location</button>
        </div>

      </form>

@endsection