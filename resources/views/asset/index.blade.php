@extends('layouts.app')
@section('heading', 'Assets')
@section('content')
    Available assets
    <table class="table table-striped task-table">
    @foreach($assets as $asset)
              <tr><td class="table-text">  {{$asset->_id}}<td class="table-text"> ({{$asset->asset}}) </td></tr>
    @endforeach

    </table>

@endsection