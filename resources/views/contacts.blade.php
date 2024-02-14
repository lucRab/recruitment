@extends('master')

@section('content')
<h2> Contacts</h2>

<ul class="list-group list-group-flush">
    @foreach($contacts as $contact)
        <li class="list-group-item">
            <div class="border border-1">
               <a href="{{ route('contact.show',['contact' => $contact->name]) }}">{{$contact->name}}</a> 
                <div>
                    <a href="{{ route('contact.edit',['contact' => $contact->name]) }}">EDIT</a> 
                    <a href="{{ route('contacts.delete',['contact' => $contact->id]) }}">DELETE</a>
                </div>
            </div>
        </li>
    @endforeach
    
</ul>
<a href="{{route('contact.create')}}">Create</a>

@endsection