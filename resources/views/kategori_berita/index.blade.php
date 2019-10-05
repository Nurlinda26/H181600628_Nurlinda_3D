<html>
@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Berita</div>

                <div class="card-body">

                    <a href="{!! route('kategori_berita.create') !!}" class="btn btn-success">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Users Id</td>
                            <td>Create</td>
                            <td>Aksi</td>
                        </tr>

                        @foreach($listKategoriBerita as $item)

                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>{!! $item->created_at->format ('d/m/Y') !!}</td>
                            
                            <td>
                                <a href="{!! route('kategori_berita.show', [$item->id]) !!} "class="btn btn-sm btn-primary" > 
                                Lihat 
                                </a>
                            </td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

    