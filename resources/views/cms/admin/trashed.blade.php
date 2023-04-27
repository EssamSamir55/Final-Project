@extends('cms.parent')

@section('title' , 'Index Admin')

@section('main-title' , 'Index Admin')

@section('sub-title' , 'index Admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
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
                    <div class="py-2">
                    <a href="{{ route('admins.index') }}" type="submit" class="btn btn-info">Index Admin</a>
                </div>

                </div>
            </div>
            <div class="p-3">
                <a class="btn btn-success" href="{{ route('restore-all') }}"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i> Restore All</a>
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
                    <th>Restore</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->firstname ?? "" }}</td>
                    <td>{{$admin->lastname ?? ""}}</td>
                    <td>{{$admin->email}}</td>
                    <td><a href="restore/{{$admin->id}}" class="text-primary btn"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i></a></td>


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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
