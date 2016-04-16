@extends('layouts.app')
@section('heading', 'Location details')
@section('content')
    Location details
    <table class="table table-striped task-table">
              <tr>
              <div>
              {{$location->id}}
              ({{$location->location}})({{$location->allowed_units}})</div></td>
              </tr>
    </table>

    <div class="form-group">
      <a href="/locations"><button type="submit" class="btn btn-primary">Display list of locations</button></a>
      <a href="/locations/edit/{{$location->id}}"><button type="submit" class="btn btn-primary">Edit this location</button></a>
      <form action="/locations/{{$location->id}}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      
                          <button type="submit" class="btn btn-danger">
                              <i class="fa fa-btn fa-exclamation-triangle"></i>Delete location
                          </button>
                          </div>
                      </div>
                  </form>
    </div>


@endsection