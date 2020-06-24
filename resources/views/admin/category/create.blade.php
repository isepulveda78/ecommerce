@extends('admin.layouts.main')

@section('content')
<div id="message" class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-4 text-gray-800">Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">Home</li>
            <li class="breadcrumb-item active mr-5" aria-current="page">Category</li>
        </ol>
</div>

<div class="row justify-content-center mb-5">
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <div class="col-md-11">
        <div class="card p-5">
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name">
                
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="description" id="description" class="form-control  @error('description') is-invalid @enderror" cols="30" rows="10"></textarea>
                                
                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group mt-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection