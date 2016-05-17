@extends('layouts.app')
@section('heading', 'Update asset details')
@section('content')

      <h3>Update asset details</h3>
      Asset details
    <table class="table table-striped task-table">
              <tr>
              <div>
              <td>{{$asset->_id}}</td>
              <td>{{$asset->asset}}</td>
              <td>{{$asset->quantity}}</td>
              <td>{{$asset->location->location}}</td>
              </div>
              </tr>
              @if(empty($asset->contact->surname)) 
                <tr><div>
                <td>Responsible person</td>
                <td>No responsible person has been assigned to this asset.</td>
                </div></tr>
              @else
                <tr><div>
                  <td>Responsible person</td>
                  <td>{{$asset->contact->name}} {{$asset->contact->surname}}</td>
                  <td>{{$asset->contact->email}}</td>
                  <td>{{$asset->contact->phone}}</td>
                </div></tr>
              @endif
    </table>
  <form method="POST" action="/assets/edit/{{$asset->_id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}
          <div class="form-group">
              <label class="col-md-4 control-label">Asset name</label>
              <div class="col-md-6">
                  <input type="text" class="form-control" name="asset" value="{{$asset->asset}}">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-4 control-label">Quantity</label>
              <div class="col-md-6">
                  <input type="number" class="form-control" name="quantity" value="{{$asset->quantity}}">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-4 control-label">Location (<a href="/assets/location/{{$asset->_id}}">Change location</a>)</label>
              <div class="col-md-6">
                  <input type="text" class="form-control" name="location" value="{{$asset->location->location}}" disabled>
              </div>
          </div>
          
          <div class="form-group">
              <label class="col-md-4 control-label">Contact (<a href="/assets/contact/{{$asset->_id}}">Change contact</a>)</label>
              <div class="col-md-6">
              @if(empty($asset->contact->surname)) 
                  <input type="text" class="form-control" name="contact" value="No responsible person has been assigned to this asset." disabled> 
              @else
                <input type="text" class="form-control" name="contact" value="{{$asset->contact->name}} {{$asset->contact->surname}}" disabled> 
              @endif
              </div>      
          </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Update asset</button>
      </div>

      </form>

@endsection