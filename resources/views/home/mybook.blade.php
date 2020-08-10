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
          <h1 class="text-white">My Books</h1>
        </div>
      </div>
    </div>
    <div class="site-section">
        <div class="container">
          <div class="row">
            @foreach ($books as $book)
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                  <img src="{{$book->getCover()}}">
                  <div class="unit-9-content">
                  <h2 style="color: black">{{Str::limit($book->title,15)}}</h2>
                    <span>Author: {{Str::limit($book->author->name, 13)}}</span>
                    <br>
                    <span>Description: {{Str::limit($book->description, 20)}}</span>
                    <!-- <span>with Wendy Matos</span> -->
                  </div>
              </div>
            @endforeach

          </div>

        </div>
  <br>
    @include('home.partials.script')
  </body>
</html>
