@extends('layout.admin')
@section('content')
<div class="page-header">

    <div class="page-header-content">
        
        
        </div>

         </div>
        <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
            <form action="{{(isset($barang))?route('barang.update',$barang -> id_barang):route('barang.store')}}" method="POST" >
            @csrf
            @if(isset($barang))@method('PUT')@endif

                <div class="panel-body">
                     <div class="form-group">
                         <label class="control-label col-lg-2 ">nama barang</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($barang))?$barang->nama_barang:old('nama_barang')}}" name="nama_barang" class="form-control">
                                 @error('nama_barang')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">jenis</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($barang))?$barang->jenis:old('jenis')}}" name="jenis" class="form-control">
                                 @error('jenis')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">Harga</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($barang))?$barang->harga:old('harga')}}" name="harga" class="form-control">
                                 @error('harga')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="col-lg-2">
                                <div class="form-group">
                                <button type="submit">simpan</button>
                                </div>
                                </div>
                         </div>
                               
  </div>
</form>
</div>
</div>
@endsection