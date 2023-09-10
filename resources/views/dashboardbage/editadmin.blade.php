@extends('dashlayouts.master')
@section('title')
table
@endsection


@section('title-bage1')

dashboard

@endsection


@section('title-bage2')
Admins
@endsection


@section('css')

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->


  <!-- DataTables -->


  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->

  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

@endsection

@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">
      Edit Admin Info
     <div class="card-body">
        <form action="{{ url('admin/' .$data->id) }}" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" value="{{ $data->id }}" id="id">
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $data->name}}" id="address" class="form-control"><br>
            <label>Email</label><br>
            <input type="text" name="email" value="{{ $data->email}}"   id="email" class="form-control"><br>
            <label>Password</label><br>
            <input type="password" name="password" value="{{ $data->password}}" id="password" class="form-control"><br>
              @if ($data->image)
            <img src="{{ asset('assets/img/' . $data->image) }}" alt="Existing Image" width="100"><br>
              @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image" id="image" accept="image/*" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>



@endsection

@section('scripts')


<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->


<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->


<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>



<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>



<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<!-- AdminLTE App -->

<script src="{{URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{URL::asset('assets/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection