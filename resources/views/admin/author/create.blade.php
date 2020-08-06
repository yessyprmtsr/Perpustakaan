@extends('admin.templates.index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Add Author Data</h2>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.author.store')}}" method="post">
                @csrf
                <div class="form-group @error('name') has-error @enderror ">
                    <label for=""> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter author's name">
                    @error('name')
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
