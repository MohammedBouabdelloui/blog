@extends('layouts.nav')


@section('title')
detai post 
@endsection






@section('container')
<!-- /navigation -->
<div class="py-4"></div>
<section class="section">
   <div class="container">
   <div class="row">
      <div class=" col-lg-8 mb-5 mb-lg-0">
         <article>
            <div class="post-slider mb-4">
               <img src="{{asset('images/post/'.$post->img_path_1.'')}}" class="card-img" alt="post-thumb">
               <img src="{{asset('images/post/'.$post->img_path_2.'')}}" class="card-img" alt="post-thumb">
               <img src="{{asset('images/post/'.$post->img_path_3.'')}}" class="card-img" alt="post-thumb">
            </div>
            <h1 class="h2">
            <ul class="card-meta my-3 list-inline">
               <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                  <img src="images/john-doe.jpg" alt="John Doe">
                  <span>John Doe</span>
                  </a>
               </li>
               <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$post->created_at}}
               </li>
               <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                     <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                  </ul>
               </li>
            </ul>
            <div class="content">
               <h2 id="heading-example"> {{$post->title}}</h2>
              <p>
               @php
                  $delimiter = ".";
                  $parts = explode($delimiter, $post->description);
                  echo '<strong>'.$parts[0].'.</strong><br>';
                  
                  foreach ($parts as $part){
                     echo $part;
                  }
                  
               @endphp
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. At itaque est reprehenderit hic impedit autem rem tenetur dolore! Esse, consequuntur reprehenderit amet asperiores inventore soluta facilis optio nesciunt! Quidem, magnam sint corrupti laborum, dignissimos perspiciatis molestiae voluptas ut vel facere sequi, ex iste deleniti. Deleniti, magni? Quidem aliquam tempore eum ea commodi eligendi sed alias ipsam dolorum omnis natus modi magni, accusamus vero nobis deleniti! Sunt ratione nesciunt possimus consequatur magni dolore laboriosam, exercitationem voluptates doloremque et neque, voluptatem laudantium beatae, nobis minus libero. Explicabo, nostrum vitae? Saepe assumenda nam eum 
               illo sint? Harum, quia perferendis tenetur sit cumque molestias!
              </p>

               
              
           
         </article>
         <div class="mt-5">
            <div class="mb-5 border-top mt-4 pt-5">
               <h3 class="mb-4">Comments</h3>
               <div class="media d-block d-sm-flex mb-4 pb-4">
                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                  <img src="{{asset('images/post/user-01.jpg')}}" class="mr-3 rounded-circle" alt="">
                  </a>
                  <div class="media-body">
                     <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                  </div>
               </div>
               <div class="media d-block d-sm-flex mb-4 pb-4">
                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                  <img src="{{asset('images/post/user-01.jpg')}}" class="mr-3 rounded-circle" alt="">
                  </a>
                  <div class="media-body">
                     <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                  </div>
               </div>
               <div class="media d-block d-sm-flex mb-4 pb-4">
                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                  <img src="{{asset('images/post/user-01.jpg')}}" class="mr-3 rounded-circle" alt="">
                  </a>
                  <div class="media-body">
                     <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                  </div>
               </div>
               <div class="media d-block d-sm-flex">
                  <div class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                     <img class="mr-3" src="images/post/arrow.png" alt="">
                     <a href="#!"><img src="{{asset('images/post/user-02.jpg')}}" class="mr-3 rounded-circle" alt=""></a>
                  </div>
                  
               </div>
            </div>
            <div>
               <h3 class="mb-4">Leave a Reply</h3>
               <form method="POST">
                  <div class="row">
                     <div class="form-group col-md-12">
                        <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
                     </div>
                     <div class="form-group col-md-4">
                        <input class="form-control shadow-none" type="text" placeholder="Name" required>
                     </div>
                     <div class="form-group col-md-4">
                        <input class="form-control shadow-none" type="email" placeholder="Email" required>
                     </div>
                     <div class="form-group col-md-4">
                        <input class="form-control shadow-none" type="url" placeholder="Website">
                        <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                     </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Comment Now</button>
               </form>
            </div>
         </div>
      </div>
      <aside class="col-lg-4 @@sidebar">
  <!-- Search -->
  <div class="widget">
    <h4 class="widget-title"><span>Search</span></h4>
    <form action="#!" class="widget-search">
      <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
      <i class="ti-search"></i>
      <button type="submit" class="btn btn-primary btn-block">Search</button>
    </form>
  </div>

  <!-- about me -->
  <div class="widget widget-about">
    <h4 class="widget-title">Hi, I am Alex!</h4>
    <img class="img-fluid" src="images/author.jpg" alt="Themefisher">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel in in donec iaculis tempus odio nunc laoreet . Libero ullamcorper.</p>
    <ul class="list-inline social-icons mb-3">
      
      <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
      
      <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
      
      <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
      
      <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
      
      <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
      
    </ul>
    <a href="about-me.html" class="btn btn-primary mb-2">About me</a>
  </div>
  
  <!-- Promotion -->
  <div class="promotion">
    <img src="images/promotion.jpg" class="img-fluid w-100">
    <div class="promotion-content">
      <h5 class="text-white mb-3">Create Stunning Website!!</h5>
      <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur sociis. Etiam nunc amet id dignissim. Feugiat id tempor vel sit ornare turpis posuere.</p>
      <a href="https://themefisher.com/" class="btn btn-primary">Get Started</a>
    </div>
  </div>

  <!-- authors -->
  <div class="widget widget-author">
    <h4 class="widget-title">Authors</h4>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/john-doe.jpg">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">Charls Xaviar</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/kate-stone.jpg">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">Kate Stone</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/john-doe.jpg" alt="John Doe">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">John Doe</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
  </div>
  <!-- Search -->
  
  <div class="widget">
    <h4 class="widget-title"><span>Never Miss A News</span></h4>
    <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
      class="widget-search">
      <input class="mb-3" id="search-query" name="s" type="search" placeholder="Your Email Address">
      <i class="ti-email"></i>
      <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe now</button>
      <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
      </div>
    </form>
  </div>

  <!-- categories -->
  <div class="widget widget-categories">
    <h4 class="widget-title"><span>Categories</span></h4>
    <ul class="list-unstyled widget-list">
      <li><a href="tags.html" class="d-flex">Creativity <small class="ml-auto">(4)</small></a></li>
      <li><a href="tags.html" class="d-flex">Demo <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Elements <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Food <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Microwave <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Natural <small class="ml-auto">(3)</small></a></li>
      <li><a href="tags.html" class="d-flex">Newyork city <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Nice <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Tech <small class="ml-auto">(2)</small></a></li>
      <li><a href="tags.html" class="d-flex">Videography <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Vlog <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Wondarland <small class="ml-auto">(1)</small></a></li>
    </ul>
  </div><!-- tags -->
  <div class="widget">
    <h4 class="widget-title"><span>Tags</span></h4>
    <ul class="list-inline widget-list-inline widget-card">
      <li class="list-inline-item"><a href="tags.html">City</a></li>
      <li class="list-inline-item"><a href="tags.html">Color</a></li>
      <li class="list-inline-item"><a href="tags.html">Creative</a></li>
      <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
      <li class="list-inline-item"><a href="tags.html">Demo</a></li>
      <li class="list-inline-item"><a href="tags.html">Elements</a></li>
      <li class="list-inline-item"><a href="tags.html">Fish</a></li>
      <li class="list-inline-item"><a href="tags.html">Food</a></li>
      <li class="list-inline-item"><a href="tags.html">Nice</a></li>
      <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
      <li class="list-inline-item"><a href="tags.html">Season</a></li>
      <li class="list-inline-item"><a href="tags.html">Taste</a></li>
      <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
      <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
      <li class="list-inline-item"><a href="tags.html">Wow</a></li>
    </ul>
  </div><!-- recent post -->
  <div class="widget">
    <h4 class="widget-title">Recent Post</h4>

    <!-- post-item -->
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-10.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post/elements/">Elements That You Can Use In This Template.</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>15 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
    
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-3.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
    
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-7.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
  </div>

  <!-- Social -->
  <div class="widget">
    <h4 class="widget-title"><span>Social Links</span></h4>
    <ul class="list-inline widget-social">
      <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
    </ul>
  </div>
</aside>
   </div>
</section>
@endsection