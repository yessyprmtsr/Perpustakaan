@extends('admin.templates.index')

@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Report Books</h1>
   </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Available Book</th>
            <th>Total Books Borowed</th>
            <th>Author</th>
            <th>Cover</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr>
            <td></td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->qty}}</td>
            <td>{{$book->borrowed_count}}</td>
            <td>{{$book->author->name}}</td>
            <td>
            <img src="{{$book->getCover()}}" height="150px">
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$books->links()}}
@endsection
<!-- Paggil stack booking -->
