@extends('layouts.app')
@section('heading', 'Contacts')
@section('content')
    List of contacts
    <table class="table table-striped task-table">
    @foreach($contacts as $contact)
              <tr>
              <td><div>
              {{$contact->id}}
              ({{$contact->name}})({{$contact->surname}})</div>
              </td>

              <td><div class="form-group"><div class="col-md-5 col-md-offset-5"><a href="/contacts/{{$contact->id}}"><button type="submit" class="btn btn-primary">Update a contact</button></a></div>
                        </div></td>

				<td>
                    <form action="/contacts/{{$contact->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-exclamation-triangle"></i>Delete a contact
                            </button>
                    </form>
                </td>            
              </tr>
    @endforeach

    </table>
    <a href="/contacts/create"><button type="submit" class="btn btn-primary">Create a contact</button></a>
@endsection