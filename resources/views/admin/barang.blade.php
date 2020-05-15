@extends('layout.admin')
@section('content')

<div class="au-breadcrumb-content">
    <div class="au-breadcrumb-left">

        <div class="panel-body"></div>
        <div class="col-md-6 col-sm-12">
            <div class="page-header">
                <div class="page-header-content">
                    <div>
                        <h4 clas="">
                            <i class="icon-home position-left"></i>
                            <span class="text-semibold">Daftar Barang</span></h4>
                        <a class="heading-element-toggle">

                        </a>
                    </div>
                    <div class="heading-elements">
                        <ul class="breadcrumb position-right">
                            <li>
                                <a href="{{route('barang.index')}}">Home</a>
                            </li>
                            <li>
                                <a href="">barang</a>
                            </li>
                            <li class="active">Daftar barang</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <tr>
                                <td width="350"><b>Studi Kasus</b></td>
                                <td width="4200"></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td>Sistem Manajemen Toko Pakaian</td>
                            </tr>
                            <tr>
                                <td>Penjelasan</td>
                                <td>Sistem ini dibuat untuk memanajemen sebuah toko pakaian agar menjadi lebih baik dan
                                    teratur.</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-12">
                        <a href="{{route('barang.create')}}">Tambah data</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama barang</th>
                                    <th>jenis</th>
                                    <th>harga</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $in => $val)
                                <tr>
                                    <td>{{($in+1)}}</td>
                                    <td>{{$val->nama_barang}}</td>
                                    <td>{{$val->jenis}}</td>
                                    <td>{{$val->harga}}</td>
                                    <td>
                                        <a href="{{route('barang.edit',$val->id_barang)}}">update</a>
                                        <form action="{{route('barang.destroy',$val->id_barang)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$barang->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
