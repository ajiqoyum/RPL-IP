@extends('layouts.admin-panel')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Doctors</h1>
  <p class="mb-4">List of all the Doctors available in our company.</p>

  <a href="{{route('bus.create')}}" class="btn btn-primary mb-4">Add A New Doctor</a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Doctors Datatable</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>City</th>
              <th>Hospital</th>
              <th>status</th>
              <th>created_at</th>
              <th>actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>City</th>
              <th>Hospital</th>
              <th>status</th>
              <th>created_at</th>
              <th>actions</th>
            </tr>
          </tfoot>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection

@push('js')
<script>
  $('#dataTable').dataTable({
  processing:true,
  serverSide:true,
  ajax:"{{route('bus.all')}}",
    columns:[
      {data:'id'},
      {data:'name'},
      {data:'from'},
      {data:'to'},
      {data:'status'},
      {data:'created_at'},
      {data:'actions',orderable:false,searchable:false},
    ]
  });
</script>
@endpush