@extends('admin.templates.index')

@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Borrow's Data</h1>

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
            <th>Nama</th>
            <th>Book Title</th>
            <th>Borrow At</th>
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
      <form action="" method="POST" id="returnForm">
        @csrf
        @method("PUT")
        <input type="submit" class="btn btn-outline-danger" value="Return" style="display: none">
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
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'user'},
                    { data: 'book_title'},
                    { data: 'created_at'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush
