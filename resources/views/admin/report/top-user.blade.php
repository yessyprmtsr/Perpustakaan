@extends('admin.templates.index')

@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Report Active User</h1>
   </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total Borrowed Books</th>
            <th>Join</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr>
            <td></td>
            <td>{{$book->name}}</td>
            <td>{{$book->email}}</td>
            <td>{{$book->borrowed_count}}</td>
            <td>{{$book->created_at->diffForHumans()}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$books->links()}}
@endsection
<!-- Paggil stack booking -->
