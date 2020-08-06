@extends('admin.templates.index')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Author's Data</h1>
   <a href="{{ route('admin.author.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Author Data</a>
   </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nama</th>
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
                ajax: '{{ route('admin.author.data') }}',
                columns: [
                    { data: 'id'},
                    { data: 'name'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush
