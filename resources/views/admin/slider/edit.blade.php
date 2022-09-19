@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Slider</h3>
                            </div>

                            <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST"
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
                                        <label>STATUS</label>
                                        <select
                                            class="form-control select-category @error('is_active') is-invalid @enderror"
                                            name="is_active">
                                            <option value="">-- PILIH STATUS --</option>
                                            <option value="1" {{ $slider->is_active === '1' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="0" {{ $slider->is_active === '0' ? 'selected' : '' }}>
                                                Tidak Aktif </option>
                                        </select>
                                        @error('is_active')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>JUDUL SLIDER</label>
                                        <input type="text" name="title" placeholder="Masukkan Judul Slider"
                                            value="{{ old('title', $slider->title) }}" class="form-control">
                                        @error('title')
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
