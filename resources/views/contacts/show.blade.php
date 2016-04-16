@extends('layouts.app')
@section('heading', 'Contact details')
@section('content')
    Contact details
    <table class="table table-striped task-table">
              <tr>
              <div>
              {{$contact->id}}
              ({{$contact->name}})({{$contact->surname}})</div></td>
              </tr>
    </table>

    <div class="form-group">
      <a href="/contacts"><button type="submit" class="btn btn-primary">Display list of contacts</button></a>
      <a href="/contacts/edit/{{$contact->id}}"><button type="submit" class="btn btn-primary">Edit this contact</button></a>
      <form action="/contacts/{{$contact->id}}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      
                          <button type="submit" class="btn btn-danger">
                              <i class="fa fa-btn fa-exclamation-triangle"></i>Delete contact
                          </button>
                          </div>
                      </div>
                  </form>
    </div>


@endsection