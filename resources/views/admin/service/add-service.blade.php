@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="card card-primary">
            <form method="POST" action="{{ route('admin.service.submit') }}" enctype="multipart/form-data">
             @csrf 
            @if(Session::has('success'))
              <p class="success-msg">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('unsuccess'))
              <p class="unsuccess-msg">{{ Session::get('unsuccess') }}</p>
            @endif 
            <div class="card-body">
                <div class="form-group">
                  <label>Name </label>
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="description" name="description" rows="4" cols="50">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                  <label>Short Description</label>
                  <textarea id="page_short_desc" name="short_desc" rows="4" cols="50">{{ old('short_desc') }}</textarea>
                </div>
                <div class="form-group">
                  <label>Price </label>
                  <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                  <label>Hosting</label>
                  <select name="service_category_id" class="form-control @error('service_category_id') is-invalid @enderror">
                      <option value="">Select Hosting</option>
                      @foreach($cats as $cat)
                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                       @endforeach
                    </select>
                    @error('service_category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                 <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control">
                      <option value="Activate">Activate</option>
                      <option value="Deactivate">Deactivate</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Is Popular</label>
                  <select name="is_popular" class="form-control">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-success">
                </div>
              </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection