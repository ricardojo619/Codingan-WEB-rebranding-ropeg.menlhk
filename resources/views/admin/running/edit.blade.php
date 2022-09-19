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
                            <form action="{{ route('admin.running.update', $running->id) }} " method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>KATEGORI</label>
                                        <input type="text" name="title" value="{{ old('title', $running->title) }}"
                                            placeholder="Masukkan Kategori"
                                            class="form-control
                                            @error('title') is-invalid @enderror">


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
                                            <option value="1" {{ $running->is_active === '1' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="0" {{ $running->is_active === '0' ? 'selected' : '' }}>
                                                Tidak Aktif </option>
                                        </select>
                                        @error('is_active')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i
                                            class="fa fa-paper-plane"></i>
                                        UPDATE</button>
                                    <a class="btn btn-warning btn-reset" type="reset"
                                        href="{{ route('admin.running.index') }}"><i class="fa fa-redo"></i>
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
