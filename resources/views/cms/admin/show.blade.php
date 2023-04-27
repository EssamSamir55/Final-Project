@extends('cms.parent')

@section('title', 'Show Admin')
@section('main-title', 'Show Admin')
@section('sub-title', 'Show Admin')


@section('styles')

@endsection

@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="mt-5">
                <div class="container">

                <div class="row ">
                <div class="form-group col-md-6">
                <label for="firstname">First Name of Admin</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $admins->firstname}}" placeholder="Enter First Name of Admin " disabled>
                </div>

                <div class="form-group col-md-6">
                <label for="lastname">Last Name of Admin</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $admins->lastname}}"  placeholder="Enter Last Name of Admin" disabled>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{ $admins->email}}" id="email" name="email" placeholder="Enter Your Email" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="mobile">Mobile</label>
                    <input disabled type="text" class="form-control" id="mobile" name="mobile" value="{{ $admins->mobile}}"  placeholder="Enter Your Mobile">
                    </div>
                {{-- <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                </div> --}}
            </div>



<div class="row">

    <div class="form-group col-md-12">
        <label for="date">Date Of Birth</label>
        <input disabled type="date" class="form-control" id="date" name="date" value="{{ $admins->date }}"  placeholder="Enter Your Date">
        </div>
    <div class="form-group col-md-6">
    <label for="gender">Gender</label>
    <select disabled class="form-select form-select-sm" name="gender" id="gender" aria-label=".form-select-sm example">
        <option selected>{{ $admins->gender}}</option>
        <option value="male">Male</option>
        <option value="female">FeMale</option>
    </select>
    </div>
    <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select disabled class="form-select form-select-sm" name="status" id="status" aria-label=".form-select-sm example">
        <option selected>{{ $admins->status}}</option>
        <option value="active">Active</option>
        <option value="inactive">InActive</option>
        </select>
    </div>
</div>
<div class="btns py-3">
    <a href="{{ route('admins.index') }}" type="submit" class="btn btn-info">Go Back</a>
    </div>
</div>



                </div>
            </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>

@endsection

@section('scripts')

<script>
    function performUpdate(id) {
        let formData = new FormData();
        formData.append('firstname',document.getElementById('firstname').value);
        formData.append('lastname',document.getElementById('lastname').value);
        formData.append('email',document.getElementById('email').value);
        // formData.append('password',document.getElementById('password').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('date',document.getElementById('date').value);
        formData.append('gender',document.getElementById('gender').value);
        formData.append('status',document.getElementById('status').value);

        storeRoute('/cms/admin/admins_update/'+id  , formData)
    }
</script>

@endsection


