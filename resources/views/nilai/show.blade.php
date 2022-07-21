@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Nis</label>
                            <input type="text" name="title" value="{{ $post->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Siswa</label>
                            <input type="text" name="title" value="{{ $post->kode_mata_pelajaran}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat Siswa</label>
                            <input type="text" name="title" value="{{ $post->nilai }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Grade</label>
                            <input type="text" name="title" value="{{ $post->nilai }}" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('nilai.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection