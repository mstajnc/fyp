@extends('layouts.app')
@section('heading', 'Update contact details')
@section('content')

      <h3>Update contact details</h3>

  <form method="POST" action="/contacts/edit/{{$contact->id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}

         <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{$contact->name}}">
        </div>

        <div class="form-group">
                    <label class="col-md-4 control-label">Surname</label>
                    <div class="col-md-6">
        <input type="text" class="form-control" name="surname" value="{{$contact->surname}}">
        </div>

        <div class="form-group">
                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{$contact->email}}">
        </div>

        <div class="form-group">
                    <label class="col-md-4 control-label">Phone</label>
                    <div class="col-md-6">
        <input type="text" class="form-control" name="phone" value="{{$contact->phone}}">
        </div>

        

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">Update contact</button>
        </div>

      </form>

@endsection