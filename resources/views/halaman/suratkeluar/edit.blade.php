@extends('layouts.master')
@section('title', 'Edit Surat Keluar')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Edit Surat Keluar</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="/surat_keluar/{{ $surats->id }}" method="post">
                        @method('put')
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomor" class="form-label">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomor" name="nomor"
                                    value="{{ $surats->nomor }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pengirim" class="form-label">Pengirim</label>
                                <input type="text" class="form-control" id="pengirim" name="pengirim"
                                    value="{{ $surats->pengirim }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perihal" class="form-label">perihal</label>
                                <input type="text" class="form-control" id="perihal" name="perihal"
                                    value="{{ $surats->perihal }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal" class="form-label">Tanggal Keluar</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ $surats->tanggal }}">
                            </div>
                        </div>

                        <button type="submit" name="submit" class="col-md-3 btn btn-primary text-right" id="btn-tambah"><i
                                class="fas fa-save"></i>Simpan</button>
                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
