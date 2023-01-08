@extends($layout . '.layouts.base_user')

@section('title', __('Home'))

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item">
    <a href="#">Home</a>
  </li>
</ol>
@endsection

@section('content')
<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">
        Welcome
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      {{ __('You are logged in!') }}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->

@endsection
