@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Berita</h3>
                            </div>
                            {{-- {{ route('admin.post.update', $post->id) }} --}}
                            <form action="{{ route('admin.artikel.update', $artikel->id) }} " method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>GAMBAR </label>
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror">

                                        @error('image')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>JUDUL BERITA</label>
                                        <input type="text" name="title" value="{{ old('title', $artikel->title) }}"
                                            placeholder="Masukkan Judul Berita"
                                            class="form-control @error('title') is-invalid @enderror">


                                        @error('title')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>KATEGORI</label>
                                        <select
                                            class="form-control select-category @error('category_id') is-invalid @enderror"
                                            name="category_id">
                                            <option value="">-- PILIH KATEGORI --</option>
                                            @foreach ($categories as $category)
                                                @if ($artikel->category_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
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
                                            <option value="1" {{ $artikel->is_active === '1' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="0" {{ $artikel->is_active === '0' ? 'selected' : '' }}>
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
                                            placeholder="Masukkan Konten / Isi Berita" rows="10">{!! old('content', $artikel->content) !!}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i
                                            class="fa fa-paper-plane"></i>
                                        UPDATE</button>
                                    <a class="btn btn-warning btn-reset" type="reset"
                                        href="{{ route('admin.artikel.index') }}"><i class="fa fa-redo"></i>
                                        KEMBALI</a>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
