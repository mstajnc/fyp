@extends('layouts.app')
@section('heading', 'Locations')
@section('content')
    List of locations
    <table class="table table-striped task-table">
    @foreach($locations as $location)
              <tr>
              <td><div>
              {{$location->id}}
              ({{$location->location}})({{$location->allowed_units}})</div>
              </td>

              <td><div class="form-group"><div class="col-md-5 col-md-offset-5"><a href="/locations/{{$location->id}}"><button type="submit" class="btn btn-primary">Update location</button></a></div>
                        </div></td>

				<td>
                    <form action="/locations/{{$location->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-exclamation-triangle"></i>Delete location
                            </button>
                    </form>
                </td>            
              </tr>
    @endforeach

    </table>
    <a href="/locations/create"><button type="submit" class="btn btn-primary">Create location</button></a>
@endsection