@extends('layouts.app')
@section('heading', 'Create an asset')
@section('content')
   Create an asset
   <form method="POST" action="/assets/store">
    {{csrf_field()}}
        <div class="form-group{{ $errors->has('asset') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">asset</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="asset" value="{{old('asset')}}">

                    @if ($errors->has('asset'))
                        <span class="help-block">
                            <strong>{{ $errors->first('asset') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>


        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">location</label>
                <div class="col-md-6">
                    <select  class="form-control" name="location">
                    @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->location}}</option>
                    @endforeach
                    </select>
                    @if ($errors->has('location'))
                        <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        

        <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Create an asset
                            </button>
                        </div>
                    </div>
    </form>
    @if (count($errors))
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
@endsection