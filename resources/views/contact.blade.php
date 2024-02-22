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
                    <form action="{{ route('contact.destroy',['contact' => $contact->id]) }}" method = "post">
                        @csrf
                        <a class="btn" href="{{ route('contact.edit',['contact' => $contact->name]) }}">EDIT</a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn" type="submit">DELETE</button>
                    </form>
                </div>
        </div>
@endsection