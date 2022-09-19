@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Profil</h3>
                            </div>

                            <form action="{{ route('admin.profil.update', $profil->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>GAMBAR</label>
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror">

                                        @error('image')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>JUDUL PROFIL</label>
                                        <input type="text" name="title" placeholder="Masukkan Judul profil"
                                            value="{{ old('title', $profil->title) }}" class="form-control">
                                        @error('title')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>STATUS</label>
                                        <select
                                            class="form-control select-category @error('is_active') is-invalid @enderror"
                                            name="is_active">
                                            <option value="">-- PILIH STATUS --</option>
                                            <option value="1" {{ $profil->is_active === '1' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="0" {{ $profil->is_active === '0' ? 'selected' : '' }}>
                                                Tidak Aktif </option>
                                        </select>
                                        @error('is_active')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>KONTEN</label>
                                        <textarea class="form-control content @error('content') is-invalid @enderror" name="content" id="summernote"
                                            placeholder="Masukkan Konten / Isi Berita" rows="10">{!! old('content', $profil->content) !!}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i
                                            class="fa fa-paper-plane"></i> UPDATE</button>
                                    <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                                        RESET</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
