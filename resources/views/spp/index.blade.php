@extends('template.master')
@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong> 
  </div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('spp.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Genre</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID SPP</th>
              <th>Tahun</th>
              <th>Nominal</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($spps as $key => $value)
              <tr>
                
                <td>
                  {{ $value->id_spp }}
                </td>
                <td>
                  {{ $value->tahun }}
                </td>
                <td>
                  {{ $value->nominal }}
                </td>
                
                  
<td>
  <form action="{{route('spp.destroy', $value->id_spp)}}" method="POST">
    <a href="{{route('spp.edit', $value->id_spp)}}" class="btn btn-sm btn-warning">EDIT</a>
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-sm btn-danger my-1" value="delete">
  </form>
</td>
                 
                  
                  
                              
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection