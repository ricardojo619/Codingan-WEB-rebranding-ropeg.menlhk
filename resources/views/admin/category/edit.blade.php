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
                            <form action="{{ route('admin.category.update', $category->id) }} " method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

                                    <div class="form-group">
                                        <label>KATEGORI</label>
                                        <input type="text" name="name" value="{{ old('name', $category->name) }}"
                                            placeholder="Masukkan Kategori"
                                            class="form-control
                                            @error('name') is-invalid @enderror">


                                        @error('name')
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
                                            <option value="1" {{ $category->is_active === '1' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="0" {{ $category->is_active === '0' ? 'selected' : '' }}>
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
                                        href="{{ route('admin.category.index') }}"><i class="fa fa-redo"></i>
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
