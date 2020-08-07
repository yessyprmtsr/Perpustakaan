@extends('frontend.templates.default')
@section('content')
<div class="container">
    <h2>Book Catalogue</h2>
    <div class="row">
        @foreach ($books as $book)
        <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
              <img src="{{$book ->getCover()}}">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p>{{Str::limit($book ->title,10)}}</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
         </div>
        @endforeach
      <ul class="pagination center">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>

@endsection
