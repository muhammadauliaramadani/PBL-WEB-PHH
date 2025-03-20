@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Output Lulusan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.output-lulusan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- Input Gambar -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>

                            <!-- Input Judul -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" required>
                            </div>

                            <!-- Input Deskripsi dengan Editor -->
                            <div class="mb-3">
                                <label for="editor" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="editor" name="description" rows="5" placeholder="Masukkan Deskripsi"></textarea>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
