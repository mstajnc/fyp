@extends('layouts.app')
@section('heading', 'Assets')
@section('content')
    Available assets
    <table class="table table-striped task-table">
    @foreach($assets as $asset)
              <tr>
              <div><a href="/assets/{{$asset->_id}}">
              {{$asset->_id}}
              ({{$asset->asset}})</a> </div></td>
              </tr>
    @endforeach

    </table>

@endsection