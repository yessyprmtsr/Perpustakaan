<!DOCTYPE html>
<html lang="en">
@include('home.partials.head')

  <div class="site-wrap">

    @include('home.partials.navbar')


    @include('home.partials.cover')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_1.jpg');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">Books Details</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="featured-property-half d-flex">
        <img src="{{$books->getCover()}}" width="50%">
      <div class="text">
        <h2>Book Information</h2>
        <p class="mb-5">{{$books->description}}</p>
        <ul class="property-list-details mb-5">
        <li class="text-black">Books Name: <strong class="text-black">{{$books->title}}</strong></li>
          <li>Quantity: <strong>{{$books->qty}}</strong></li>
          <li>Author: <strong>{{$books->author->name}}</strong></li>
        </ul>
        <form action="{{ route('book.borrow', $books)}}" method="post">
        @csrf
        <input type="submit" value="Borrow" class="btn btn-primary px-4 py-3">
        </form>
    </div>
    </div>
  </div>

  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Another Books From {{$books->author->name}}</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($books->author->books->shuffle()->take(4) as $book)
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('detail',$book)}}/{{$book->$books}}" class="unit-9">
                  <img src="{{$book->getCover()}}" width="200px">
                </a>
                  <div class="unit-9-content">
                  <h2 style="color: black">{{Str::limit($book->title,15)}}</h2>
                    <span>Author: {{Str::limit($book->author->name, 13)}}</span>
                    <!-- <span>with Wendy Matos</span> -->
                  </div>
                </a>
              </div>
            @endforeach
        </div>
        </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">About Apart</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
          </div>
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Subscribe</h3>
            <form action="#" method="post" class="site-block-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary bg-transparent" placeholder="Enter your email"
                  aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Apartments</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Featured Apartment</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Membership</a></li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Follow Us</h3>

              <div>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
              </figure>
            </div>

          </div>



        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>


  @include('home.partials.script')


  </body>
</html>
