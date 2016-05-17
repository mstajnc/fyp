@extends('layouts.app')
@section('heading', 'Create a location')
@section('content')
   Create a location
   <form method="POST" action="/locations/store">
    {{csrf_field()}}
            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label class="col-md-4 control-label">Location</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="location" value="{{old('location')}}">

                        @if ($errors->has('location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group{{ $errors->has('allowed_units') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label class="col-md-4 control-label">Number of allowed units</label>
                    <div class="col-md-2">
                        <input type="number" value=500 step=50 class="form-control" name="allowed_units" value="{{old('allowed_units')}}">

                        @if ($errors->has('allowed_units'))
                            <span class="help-block">
                                <strong>{{ $errors->first('allowed_units') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Create a location
                                </button>
                            </div>
                        </div>

    </form>
    @if (count($errors))
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">  
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
    </div></div>
    @endif
@endsection