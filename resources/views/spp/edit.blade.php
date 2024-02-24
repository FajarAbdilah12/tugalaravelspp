@extends('template.master');


@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('spp.update', $spp->id_spp)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="spp">Id Spp</label>
            <input name="spp" type="text" class="form-control @error('spp') {{ 'is-invalid' }} @enderror" id="spp"  placeholder="Id Spp">
          </div>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input name="tahun" type="text" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun" placeholder="Tahun">
          </div>
          <div class="form-group">  
            <label for="nominal">Nominal</label>
            <input name="nominal" type="text" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal" placeholder="Nominal">
          </div>
          @error('nama')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection