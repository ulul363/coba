{{-- INDEX SURAT KELUAR --}}
@extends('layouts.master')
@section('title', 'Surat Keluar')

@section('content')


    <div class="container">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Surat Keluar</h3>

                <div class="tambah_data">
                    <a href="{{ route('halaman.suratkeluar.create') }}"><button type="button"
                            class="btn btn-primary rounded-pill m-2">Tambah
                            Surat</button></a>
                    {{-- <div class="tambah_data">
                        <a href="halaman.suratkeluar.create">
                            <button type="button" class="btn btn-primary rounded-pill m-2">Tambah Surat</button>
                        </a>
                    </div> --}}

                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th scope="col">Nomor</th> --}}
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Pengirim</th>
                                <th scope="col">Perihal</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surats as $surat)
                                <tr>
                                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                    <td>{{ $surat->nomor }}</td>
                                    <td>{{ $surat->pengirim }}</td>
                                    <td>{{ $surat->perihal }}</td>
                                    <td>{{ $surat->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('halaman.suratkeluar.edit', $surat->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <form action="surat_keluar/{{ $surat->id }}"
                                            onsubmit="return confirm('Yakin Anda Ingin Menghapus Data Ini?')"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" name='submit'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
