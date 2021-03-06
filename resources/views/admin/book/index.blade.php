@extends('admin.templates.index')

@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Books's Data</h1>
   <a href="{{ route('admin.book.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Book Data</a>
   </div>
   <!--Nampilin alert save-->
   @if (session('success'))
    <div class="alert alert-success">{{ session('success')}}</div>
   @endif
    <!--Nampilin alert update-->
    @if (session('info'))
    <div class="alert alert-warning">{{ session('info')}}</div>
    @endif
      <!--Nampilin alert delete-->
    @if (session('delete'))
    <div class="alert alert-danger">{{ session('delete')}}</div>
    @endif

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Quantity</th>
            <th>Cover</th>
            <th>Action</th>
          </tr>
        </thead>
        {{-- <tbody>
          <tr>
            <td>1</td>
            <td>Adele</td>
          </tr>
        </tbody> --}}
      </table>
      <form action="" method="POST" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-outline-danger" value="Delete" style="display: none">
    </form>
@endsection
<!-- Paggil stack booking -->
@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                bDestroy: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'title'},
                    { data: 'description'},
                    { data: 'author'},
                    { data: 'qty'},
                    { data: 'cover'},
                    { data: 'action'},

                ]
            });
        });
    </script>
@endpush
