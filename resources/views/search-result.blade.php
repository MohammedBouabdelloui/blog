@extends('layouts.nav')


@section('title')
    search result
@endsection



@section('container')
<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-4">
        <h1 class="h2 mb-4">Search results for 
            <mark>ksdbkhdv hgdfhd</mark>
        </h1>
      </div>
      <div class="col-lg-10">
    @isset($posts)
    @forelse($posts as $post)      
        <article class="card mb-4">
          <div class="row card-body">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="post-slider slider-sm">
                <img src="{{asset('images/post/'.$post->img_path_1.'')}}" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                <img src="{{asset('images/post/'.$post->img_path_2.'')}}" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                <img src="{{asset('images/post/'.$post->img_path_3.'')}}" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
              </div>
            </div>
            <div class="col-md-8">
              <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">{{$post->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg">
                    <span>Mark Dinn</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$post->created_at}}
                </li>
                <li class="list-inline-item">

                </li>
              </ul>
              <p>
              @php
                $delimiter = ".";
                $parts = explode($delimiter, $post->description);
                echo $parts[0];
              @endphp
              </p>
              <a href="{{route('filter_posts',['id'=>$post->id])}}" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>
        </article>
      @empty
      <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 mb-4">

            </div>
            <div class="col-lg-10 text-center">
              <img class="mb-5" src="{{asset('images/no-search-found.svg')}}" alt="">
              <h3>No Search Found</h3>
            </div>
          </div>
        </div>
      </section>
      @endforelse
      @endif 
      </div>
    </div>
  </div>
</section>
@endsection