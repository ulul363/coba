{{-- INDEX SURAT MASUK --}}
@extends('layouts.master')
@section('title', 'Surat Masuk')

@section('content')


    <div class="container">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Surat Masuk</h3>

                {{-- halaman.suratmasuk.create --}}
                <div class="tambah_data">
                    <a href="{{ route('halaman.suratmasuk.create') }}">
                        <button type="button" class="btn btn-primary rounded-pill m-2">Tambah Surat</button>
                    </a>
                </div>

                {{-- <div class="tambah_data">
                    <a href="{{ route('') }}" class="btn btn-primary rounded-pill m-2"></a>
                </div> --}}

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">nomor</th>
                                <th scope="col">tanggal</th>
                                <th scope="col">nomor surat</th>
                                <th scope="col">tanggal masuk</th>
                                <th scope="col">perihal</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surats as $surat)
                                <tr>
                                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                    <td>{{ $surat->nomor }}</td>
                                    <td>{{ $surat->tanggal }}</td>
                                    <td>{{ $surat->no_surat }}</td>
                                    <td>{{ $surat->tgl_msk }}</td>
                                    <td>{{ $surat->perihal }}</td>
                                    <td>
                                        <a href="{{ route('halaman.suratmasuk.edit', $surat->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <form action="surat_masuk/{{ $surat->id }}"
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
