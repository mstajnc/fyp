@extends('layouts.app')
@section('heading', 'Create an asset')
@section('content')
   Create an asset
   <form method="POST" action="/assets/store">
    {{csrf_field()}}
        <div class="form-group{{ $errors->has('asset') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">Asset name</label>
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

        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">Quantity</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="quantity" value="{{old('quantity')}}">

                    @if ($errors->has('quantity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quantity') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>



        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">Location</label>
                <div class="col-md-6">
                    <select  class="form-control" name="location_id">
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

        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
            <div class="form-group">
                <label class="col-md-4 control-label">Contact</label>
                <div class="col-md-6">
                    <select  class="form-control" name="contact_id">
                            <option value="">N/A</option>
                    @foreach($contacts as $contact)
                            <option value="{{$contact->id}}">{{$contact->name}} {{$contact->surname}}</option>
                    @endforeach
                    </select>
                    @if ($errors->has('contact'))
                        <span class="help-block">
                            <strong>{{ $errors->first('contact') }}</strong>
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