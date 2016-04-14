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
      </div>

@endsection