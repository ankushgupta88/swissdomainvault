@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="card card-primary">
             @if(count($cat) == 1)
            <form method="POST" action="{{ route('admin.service.cat.update',$cat[0]->id) }}" enctype="multipart/form-data">
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
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $cat[0]->name }}">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="description" name="description" rows="4" cols="50">{{ $cat[0]->description }}</textarea>
                </div>
                <div class="form-group">
                  <label>Short Description</label>
                  <textarea id="page_short_desc" name="short_desc" rows="4" cols="50">{{ $cat[0]->short_desc }}</textarea>
                </div>
                <div class="form-group">
                  <label>Price </label>
                  <input type="text" class="form-control" name="price" value="{{ $cat[0]->price }}">
                </div>
                 <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control">
                      <option value="Activate" @if($cat[0]->status == "Activate") selected  @endif >Activate</option>
                      <option value="Deactivate" @if($cat[0]->status == "Deactivate") selected  @endif >Deactivate</option>
                    </select>
                </div>
                 <div class="form-group">
                  <label>Is Featured</label>
                  <select name="is_featured" class="form-control">
                      <option value="No" @if($cat[0]->is_featured == "No") selected  @endif >No</option>
                      <option value="Yes" @if($cat[0]->is_featured == "Yes") selected  @endif >Yes</option>
                    </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-success">
                </div>
              </div>
            </form>
            @else
               <p>No Record Found.</p>
            @endif
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection