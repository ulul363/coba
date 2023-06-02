{{-- SURAT MASUK --}}
@extends('layouts.master')
@section('title', 'Edit Surat Masuk')
@section('content')

    <div class="card">
        <div class="card-body">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pendataan Surat Masuk</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="/surat_masuk/{{ $surats->id }}" method="POST">
                        @method('put')
                        @csrf

                        <div class="col-12">
                            <label for="nomor" class="form-label">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor" name="nomor"
                                value={{ $surats->nomor }}>
                        </div>
                        <div class="col-12">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                value={{ $surats->tanggal }}>
                        </div>
                        <div class="col-12">
                            <label for="no_surat" class="form-label">Nomor Surat Masuk</label>
                            <input type="text" class="form-control" id="nomorsurat" name="no_surat"
                                value={{ $surats->no_surat }}>
                        </div>
                        <div class="col-12">
                            <label for="tgl_msk" class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tanggalmasuk" name="tgl_msk"
                                value={{ $surats->tgl_msk }}>
                        </div>
                        <div class="col-12">
                            <label for="perihal" class="form-label">Perihal</label>
                            <input type="text" class="form-control" id="perihal" name="perihal"
                                value={{ $surats->perihal }}>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>
@endsection
