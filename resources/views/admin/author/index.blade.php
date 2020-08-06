@extends('admin.templates.index')
@section('content')
    <h1>Author</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nama</th>
          </tr>
        </thead>
        {{-- <tbody>
          <tr>
            <td>1</td>
            <td>Adele</td>
          </tr>
        </tbody> --}}
      </table>
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
                    { data: 'name'}
                ]
            });
        });
    </script>
@endpush
