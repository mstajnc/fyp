@extends('layouts.app')
@section('heading', 'Asset details')
@section('content')
    Asset details
    <table class="table table-striped task-table">
              <tr>
              <div>
              <td>{{$asset->_id}}</td>
              <td>{{$asset->asset}}</td>
              <td>{{$asset->quantity}} items</td>
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

    <div class="form-group">
      <a href="/assets"><button class="btn btn-primary">Display list of assets</button></a>
      <a href="/assets/edit/{{$asset->_id}}"><button class="btn btn-primary">Edit this asset</button></a>
      <a href="/assets/location/{{$asset->_id}}"><button class="btn btn-primary">Change location</button></a>
      <form action="/assets/{{$asset->_id}}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      
                          <button type="submit" class="btn btn-danger">
                              <i class="fa fa-btn fa-exclamation-triangle"></i>Delete asset
                          </button>
                          </div>
                      </div>
                  </form>
    </div>


@endsection