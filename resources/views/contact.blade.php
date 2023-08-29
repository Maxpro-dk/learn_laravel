@extends('layouts.app')

@section('content')
    <section class="contact_section  long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div>
                                <input class="form-control" type="text" placeholder="Your Name" name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-danger"> {{ $errors->first('name')}}</span>   
                                @enderror
                            </div>
                            <div>
                                <input class="form-control" type="text" placeholder="Phone Number" name='phone' value="{{ old('phone')}}" />
                                @error('phone')
                                    <span class="text-danger"> {{ $errors->first('phone')}}</span>   
                                @enderror
                            </div>
                            <div>
                                <input class="form-control" type="email" placeholder="Email" name='email' value="{{ old('email')}}" />
                                @error('email')
                                    <span class="text-danger"> {{ $errors->first('email')}}</span>   
                                @enderror
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" name='message' value="{{ old('message')}}"/>
                                
                                @if ($errors->first('message'))
                                    <span class="text-danger"> {{ $errors->first('message')}}</span>  
                                @endif
                            </div>
                            

                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @if (isset($contact))
                    <div class="col-md-6">
                        <p> Nom: {{ $contact->name }}</p>
                        <p> Email: {{ $contact->email }}</p>
                        <p>Tel :  {{ $contact->phone }}</p>
                        <h6> Message </h6>
                        <p>
                            {{ $contact->message }}
                        </p>
                    </div>
                @endif
               
                
            </div>
        </div>
    </section>
@endsection
