@extends('admin.templates.index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Add Book Data</h2>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.book.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group @error('title') has-error @enderror ">
                    <label for=""> Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter book's title">
                    @error('title')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('description') has-error @enderror ">
                    <label for=""> Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter book description" rows="3">{{old('description')}}</textarea>
                    @error('description')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('author_id') has-error @enderror ">
                    <label for=""> Author</label>
                    <select class="form-control select2" name="author_id" id="">
                       {{-- ambil data author --}}
                       @foreach ($authors as $author)
                       <option value="{{$author->id}}">{{$author->name}}</option>
                       @endforeach
                    </select>
                    @error('author_id')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('cover') has-error @enderror ">
                    <label for=""> Cover</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('qty') has-error @enderror ">
                    <label for=""> Title</label>
                    <input type="number" name="qty" class="form-control" placeholder="Enter book's quantity">
                    @error('qty')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-primary" >
                </div>
            </form>

        </div>
    </div>
@endsection
@push('select2css')
    <link rel="stylesheet" href="{{ asset('/assets/select2/dist/css/select2.min.css')}}">
@endpush

@push('scripts')
{{-- buat seacrh di select author --}}
<script src="{{ asset('/assets/select2/dist/js/select2.full.min.js')}}"></script>
<script>
    $('.select2').select2();
</script>
@endpush
