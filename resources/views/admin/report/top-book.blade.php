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
            {{-- membuat nomor diluar tabel --}}
            @php
                $page = 1;
                if(request()->has('page')){
                    $page = request('page');
                }

                // 10 nilai dari pagination
                // dikali dengan page yang default 1

                $no = (10 * $page) - (10 - 1);
            @endphp
          @foreach ($books as $book)
          <tr>
            <td>{{$no++}}</td>
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
