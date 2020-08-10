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
          <p>Membaca Adalah Jendela Ilmu Dunia</p>
        </div>
      </div>
    </div>
    <div class="site-section">
        <div class="container">
          <div class="row">
            @foreach ($book as $books)
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('detail',$books)}}/{{$book->$books}}" class="unit-9">
                  <img src="{{$books->getCover()}}">
                  <div class="unit-9-content">
                  <h2 style="color: black">{{Str::limit($books->title,15)}}</h2>
                    <span>Author: {{Str::limit($books->author->name, 13)}}</span>
                    <!-- <span>with Wendy Matos</span> -->
                  </div>
                </a>
              </div>
            @endforeach

          </div>

        </div>
  </div>
  <br>
    @include('home.partials.script')
  </body>
</html>
