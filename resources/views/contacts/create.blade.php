@extends('layouts.app')
@section('heading', 'Create a contact')
@section('content')
   Create a contact
   <form method="POST" action="/contacts/store">
    {{csrf_field()}}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label class="col-md-4 control-label">Surname</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="surname" value="{{old('surname')}}">

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label class="col-md-4 control-label">Phone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}">

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
            </div>

            

            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Create a contact
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