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
            @php
            $page = 1;
            if(request()->has('page')){
                $page = request('page');
            }

            // 10 nilai dari pagination
            // dikali dengan page yang default 1

            $no = (10 * $page) - (10 - 1);
        @endphp
          @foreach ($users as $user)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->borrow_count}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$users->links()}}
@endsection
<!-- Paggil stack booking -->
