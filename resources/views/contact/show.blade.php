@extends('layouts.home')

@section('content')
<section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
           Information sur contact
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ Storage::url($contact->image) }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                {{ $contact->name }}
              </h5>
              <p>
                {{ $contact->message }}
              </p>
              <p>
                <span> Email : {{ $contact->email }} </span>
                <span> Tel : {{ $contact->phone }}</span>
                <span> Date creation : {{ $contact->created_at }}</span>
              </p>

            </div>
          </div>
        </div>
       
        
      </div>
    </div>
  </section> 
@endsection