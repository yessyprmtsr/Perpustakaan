@extends('admin.templates.index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Edit Author Data</h2>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.author.update', $author)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group" @error('name') has-error @enderror ">
                    <label for=""> Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter author's name" value="{{$author->name}}">
                @error('name')
                <span class="help-block">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" >
                </div>
            </form>

        </div>
    </div>
@endsection
