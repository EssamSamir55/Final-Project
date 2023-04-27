@extends('cms.parent')

@section('title' , 'Index Admin')

@section('main-title' , 'Index Admin')

@section('sub-title' , 'index Admin')

@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admins.create') }}" type="submit" class="btn btn-success">Add New Admin</a>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <a class="btn btn-danger m-2" href="{{ route('trashed') }}"> <i class="fa fa-duotone fa-trash"></i>   Trashed</a></b>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>first Name</th>
                    <th>last Name</th>
                    <th>email</th>
                    <th>Gender</th>
                    <th>status</th>
                    <th>Soft Delete</th>
                    <th>Force Delete</th>
                    <th>Setting</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->firstname ?? ""}}</td>
                    <td>{{$admin->lastname ?? "" }}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->gender ?? ""}}</td>
                    <td>{{$admin->status ?? ""}}</td>
                    <td ><a href="softDelete/{{$admin->id}}" class="text-warning btn"><i class="fa fa-solid fa-trash"></i> Delete</a></td>
                    <td><a href="forceDelete/{{$admin->id}}" class="text-danger btn"><i class="fa fa-solid fa-trash"></i> Forever</a></td>
                    <td>
                    <div class="btn-group">
                       <a href="{{ route('admins.show' , $admin->id) }}" type="button" class="btn btn-outline-success">Show</a>
                      </div>
                    </td>
                </tr>
                    @endforeach

                </tbody>
              </table>
            </div>

            {{ $admins->links() }}
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')

<script>
  function performDestroy(id , reference){

    confirmDestroy('/cms/admin/admins/'+id , reference);
  }
  </script>
@endsection
