@extends('layouts.home')
@section('title_page','Edit Hafalan Santri')
@section('content')

<form action="{{ route('hafalan.update', $hafalan->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="santri_id">Nama Santri</label>
                    <select class="form-control select2 @error('santri_id') is-invalid @enderror" name="santri_id" required>
                        <option selected disabled>Pilih Santri</option>
                        @foreach ($santri as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $hafalan->santri_id ? 'selected' : '' }}>{{ $item->nama }}</option>
                        @endforeach
                    </select>

                    @error('santri_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="surah">Surah</label>
                    <input type="text" class="form-control @error('surah') is-invalid @enderror" id="surah" name="surah" value="{{ old('surah', $hafalan->surah) }}">

                    @error('surah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="ayat">Ayat</label>
                    <input type="text" class="form-control @error('ayat') is-invalid @enderror" id="ayat" name="ayat" value="{{ old('ayat', $hafalan->ayat) }}">

                    @error('ayat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="juz">Juz</label>
                    <input type="text" class="form-control @error('juz') is-invalid @enderror" id="juz" name="juz" value="{{ old('juz', $hafalan->juz) }}">

                    @error('juz')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="tanggal_hafalan">Tanggal Hafalan</label>
                    <input type="date" class="form-control @error('tanggal_hafalan') is-invalid @enderror" id="tanggal_hafalan" name="tanggal_hafalan" value="{{ old('tanggal_hafalan', $hafalan->tanggal_hafalan) }}">

                    @error('tanggal_hafalan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $hafalan->keterangan) }}</textarea>

                    @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('hafalan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</form>

@endsection
