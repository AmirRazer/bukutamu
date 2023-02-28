@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width:60%">
        <div class="card-header">
          Form Tambah Buku Tamu
        </div>
        <div class="card-body">
        <form action="{{url('admin/simpan-data')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama"class="form-control" id="nama" aria-describedby="nama">
                </div>
                <div class="telepon">
                    <label for="exampleInputEmail1">Telepon</label>
                    <input type="text" name="telepon"class="form-control" id="telepon" aria-describedby="telepon">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea  name="alamat" class="form-control" id="alamat" aria-describedby="alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <input type="text" name="keperluan" class="form-control" id="keperluan" aria-describedby="keperluan">
                  </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="tujuan" aria-describedby="tujuan">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email">
                  </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
        
      </div>
</div>
@endsection