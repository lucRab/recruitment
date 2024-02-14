@extends('master')

@section('content')

 <div class="card">
        <div class="card-body">
            <div class="card-title texte-centertexte-center">
                <h2>{{$contact->name}}</h2>
            </div>
                <div class="mb-3">
                    <h3>Email</h3>
                    {{$contact->email}}
                </div>
                <div class="mb-3">
                     <h3>Contact</h3>
                    {{$contact->contact}}
                </div>
                <div class="mb-3">
                    <a class="btn" href="{{ route('contact.edit',['contact' => $contact->name]) }}">EDIT</a> 
                    <a class="btn" href="{{ route('contacts.delete',['contact' => $contact->id]) }}">DELETE</a>
                </div>
        </div>
@endsection