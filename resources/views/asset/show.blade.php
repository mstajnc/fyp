@extends('layouts.app')
@section('heading', 'Asset details')
@section('content')
    Asset details
    <table class="table table-striped task-table">
              <tr>
              <div>
              {{$asset->_id}}
              ({{$asset->asset}})</div></td>
              </tr>
    </table>

    <div class="form-group">
      <a href="/assets"><button type="submit" class="btn btn-primary">Display list of assets</button></a>
      <a href="/assets/edit/{{$asset->_id}}"><button type="submit" class="btn btn-primary">Edit this asset</button></a>
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