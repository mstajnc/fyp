@extends('layouts.app')
@section('heading', 'Update asset responsible contact')
@section('content')

      <h3>Update asset responsible contact</h3>
    <table class="table table-striped task-table">
              <tr>
              <div>
              <td>{{$asset->_id}}</td>
              <td>{{$asset->asset}}</td>
              <td>{{$asset->quantity}}</td>
              </div>
              </tr>
              <tr><div>
                  <td>Responsible person</td>
                  <td>{{$asset->contact->name}} {{$asset->contact->surname}}</td>
                  <td>{{$asset->contact->email}}</td>
                  <td>{{$asset->contact->phone}}</td>
            	</div></tr>
    </table>
  <form method="POST" action="/assets/contact/{{$asset->_id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{method_field('PATCH')}}
          <div class="form-group">
                <label class="col-md-4 control-label">Contact</label>
                <div class="col-md-6">
                    <select  class="form-control" name="contact_id">
                    @foreach($contacts as $contact)
                            <option value="{{$contact->id}}">{{$contact->name}} {{$contact->surname}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Update contact</button>
      </div>

      </form>

@endsection