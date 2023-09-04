@extends('layouts.app')

@section('content')
    
  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="{{ Storage::url($blog->image->path) }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  {{ $blog->title }}
                </h5>
                <p>
                  {{ $blog->description }}
                </p>
                <a href="">
                  {{$blog->category->title }}
                </a>
              </div>
            </div>
          </div>
        @endforeach
       
      </div>
    </div>
  </section>
@endsection