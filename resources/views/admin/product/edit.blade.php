@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
    </div>

    <div class="row justify-content-center">
      @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif

      <div class="col-lg-10">
        <form action="{{route('product.update',[$product->id])}}" method="POST" enctype="multipart/form-data">@csrf
          {{method_field('PUT')}}
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="" aria-describedby=""
                        placeholder="Enter name of product" value="{{$product->name}}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror ">
                        {!!$product->description!!}
                      </textarea>
                       @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror  " id="customFile" name="image">
                        <label class="custom-file-label  " for="customFile">Choose file</label>
                       <center> <img src="{{Storage::url($product->image)}}" width="100"></center>
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                       
                    </div>

                      <div class="form-group"> 
                      <label for="">Price($)</label>
                      <input type="text" name="price" class="form-control @error('price') is-invalid @enderror " id="" aria-describedby="" value="{{$product->price}}" 
                        >
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                      <div class="form-group">
                      <label for="">Additinal information</label>
                      <textarea name="additional_info" id="summernote1" class="form-control @error('additional_info') is-invalid @enderror ">
                        {!!$product->additional_info!!}
                      </textarea>
                       @error('additional_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                    <div class="form-group">
                      <label for="">Choose Category</label>
                        <select name="category" class="form-control @error('category') is-invalid @enderror"  required="">
                          <option value="">select</option>
                          @foreach(App\Category::all() as $category)
                            <option value="{{$category->id}}"
                              >{{$category->name}}</option>
                          @endforeach

                        </select>

                       @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                    <div class="form-group">
                      <label for="">Choose Subcategory</label>
                        <select name="category"  class="form-control @error('subcategory') is-invalid @enderror" >
                          <option value="">select</option>
                          @foreach(App\Subcategory::all() as $key=> $sub)
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                          @endforeach

                        </select>

                       @error('subcategory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                 
                </div>
              </div>
            </form>

          </div>
</div>

@endsection