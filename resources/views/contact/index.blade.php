@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <h1> Liste des contacts</h1>
        <table class="table">
            <thead>
                <tr> 
                    <td>
                        Nom
                    </td>
                    <td>
                        email
                    </td>
                    <td>
                        Tel
                    </td>
                    <td>
                        Message
                    </td>
                    <td>
                        Option
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            {{ $contact->name }}
                        </td>
                        <td>
                            {{ $contact->email }}
                        </td>
                        <td>
                            {{ $contact->phone }}
                        </td>
                        <td>
                            {{ $contact->message }}
                        </td>
                        <td>
                            <a  class=" btn btn-primary" href="{{ route('contact.show', ['contact'=>$contact->id]) }}"> Voir</a>

                            {{-- <a  class=" btn btn-primary" href="{{ route('contact.view', $contact->id ) }}"> Voir</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection