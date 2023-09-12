@extends('layouts.home')

@section('content')
    <section class="about_section layout_padding long_section">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="img-box">
                <img src="{{ asset('assets/images/about-img.png')}} " alt="">
            </div>
            </div>
            @foreach ($articles as $article)
                
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                        <h2>
                         {{ $article->title }}
                        </h2>
                        </div>
                        <p>
                            {{ $article->description }}
                    
                        </p>
                        <a href="">
                    vois plus
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>
    
@endsection