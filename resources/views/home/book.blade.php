<!DOCTYPE html>
<html lang="en">
@include('home.partials.head')

  <body>


    @include('home.partials.navbar')

    @include('home.partials.cover')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('/assetuser/images/hero_bg_1.jpg')}}');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">Books Catalogue</h1>
          <p>Membaca Adalah Jendela Ilmu Dunia</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h1 class="text-white">Borrow History</h1>
    <div class="site-section">
    <div class="container">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Our Books</h2>
          </div>
      <div class="row">
        @foreach ($books as $book)
        <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('detail',$book)}}/{{$book->$books}}" class="unit-9">
              <img src="{{$book->getCover()}}">
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
  {{-- //pagination --}}
  {{$books->links()}}



    <footer class="site-footer bg-light">
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
              <h3 class="footer-heading mb-4">Maps</h3>

              <div class="block-16">
                <iframe src="https://www.google.com/maps/d/embed?mid=1-hOtSGCvNo3MKepaGlCFPeP1fC0&hl=en" width="400" height="200"></iframe>
              </div>

            </div>



          </div>

          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Yessy</a>
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
