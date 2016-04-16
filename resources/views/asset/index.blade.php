@extends('layouts.app')
@section('heading', 'Assets')
@section('content')
    Available assets
    <table class="table table-striped task-table">
    @foreach($assets as $asset)
              <tr>
              <td><div>
              {{$asset->_id}}
              ({{$asset->asset}})</div>
              </td>

              <td><div class="form-group"><div class="col-md-5 col-md-offset-5"><a href="/assets/{{$asset->_id}}"><button type="submit" class="btn btn-primary">Update asset</button></a></div>
                        </div></td>

				<td>
                    <form action="/assets/{{$asset->_id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-exclamation-triangle"></i>Delete asset
                            </button>
                            </div>
                        </div>
                    </form>
                </td>            
              </tr>
    @endforeach

    </table>

@endsection