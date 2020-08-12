<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIBRARY REPORT
    </title>
</head>
<body>
    <h2 style="text-align: center">Report</h2>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Available Book</th>
            <th>Total Books Borowed</th>
            <th>Author</th>
          </tr>
        </thead>
        <tbody>
            {{-- membuat nomor diluar tabel --}}
            @php
                $no = 1;
            @endphp
              @foreach ($data as $book)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->qty}}</td>
                <td>{{$book->borrowed_count}}</td>
                <td>{{$book->author->name}}</td>
              </tr>
              @endforeach
        </tbody>
      </table>
</body>
</html>
