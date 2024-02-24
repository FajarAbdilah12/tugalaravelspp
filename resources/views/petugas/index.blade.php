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
        <a href="{{ route('petugas.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Genre</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id Petugas</th>
              <th>Username</th>
              <th>Password</th>
              <th>Nama Petugas</th>
              <th>Level</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($petugases as $key => $value)
              <tr>                
                <td>
                  {{ $value->id_petugas }}
                </td>
                <td>
                  {{ $value->username }}  
                </td>
                <td>
                  {{ $value->password }}
                </td>
                 <td>
                  {{ $value->nama_petugas }}
                </td>
                 <td>
                  {{ $value->level }}
                </td>
              </tr>  
                  
<td>
  <form action="{{route('petugas.destroy', $value->id_petugas)}}" method="POST">
    <a href="{{route('petugas.edit', $value->id_petugas)}}" class="btn btn-sm btn-warning">EDIT</a>
    <a href="{{route('petugas.show', $value->id_petugas)}}" class="btn btn-sm btn-warning">SHOW</a>
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