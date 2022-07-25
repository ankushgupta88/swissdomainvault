@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All Services list</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    @if(Session::has('success'))
                      <p class="success-msg">{{ Session::get('success') }}</p>
                    @endif
                    @if(Session::has('unsuccess'))
                      <p class="unsuccess-msg">{{ Session::get('unsuccess') }}</p>
                    @endif 
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Hosting</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                           @php $count = 0; @endphp
                          @foreach($services as $service)
                          @php $count += 1; @endphp
                          <tr>
                            <td>{{$count}}</td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->categoryDetails->name }}</td>
                            <td>${{$service->price}}</td>
                            <td>{{$service->status}}</td>
                            <td>
                              <a class="btn btn-info btn-sm" href="{{ url('admin/edit-service',$service->id) }}"><i class="fas fa-pencil-alt"></i> Edit</a> 
    
                              <a class="btn btn-danger btn-sm" href="{{ url('admin/delete-service',$service->id) }}"><i class="fas fa-trash"></i> Delete</a>
                              
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection