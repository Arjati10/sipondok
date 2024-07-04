@extends('layouts.home')
@section('title_page','Edit Data Santri')
@section('content')

    <form action="{{ route('santri.update', $santri->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="nama">Nama Santri</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $santri->nama) }}">
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir Santri</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir', $santri->tanggal_lahir) }}">
            
                        @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir Santri</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir', $santri->tempat_lahir) }}">
            
                        @error('tempat_lahir')
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
                        <label for="alamat">Alamat Santri</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat', $santri->alamat) }}</textarea>
            
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="phone">No. HP Santri</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $santri->phone) }}">
            
                        @error('phone')
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
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn', $santri->nisn) }}">
            
                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik', $santri->nik) }}">
            
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="no_kk">Nomor KK</label>
                        <input type="text" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ old('no_kk', $santri->no_kk) }}">
            
                        @error('no_kk')
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
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ old('nama_ayah', $santri->nama_ayah) }}">
            
                        @error('nama_ayah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="nik_ayah">NIK Ayah</label>
                        <input type="text" class="form-control @error('nik_ayah') is-invalid @enderror" name="nik_ayah" value="{{ old('nik_ayah', $santri->nik_ayah) }}">
            
                        @error('nik_ayah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $santri->pekerjaan_ayah) }}">
            
                        @error('pekerjaan_ayah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="riwayat_pendidikan_ayah">Riwayat Pendidikan Ayah</label>
                        <input type="text" class="form-control @error('riwayat_pendidikan_ayah') is-invalid @enderror" name="riwayat_pendidikan_ayah" value="{{ old('riwayat_pendidikan_ayah', $santri->riwayat_pendidikan_ayah) }}">
            
                        @error('riwayat_pendidikan_ayah')
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
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ old('nama_ibu', $santri->nama_ibu) }}">
            
                        @error('nama_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="nik_ibu">NIK Ibu</label>
                        <input type="text" class="form-control @error('nik_ibu') is-invalid @enderror" name="nik_ibu" value="{{ old('nik_ibu', $santri->nik_ibu) }}">
            
                        @error('nik_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $santri->pekerjaan_ibu) }}">
            
                        @error('pekerjaan_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="riwayat_pendidikan_ibu">Riwayat Pendidikan Ibu</label>
                        <input type="text" class="form-control @error('riwayat_pendidikan_ibu') is-invalid @enderror" name="riwayat_pendidikan_ibu" value="{{ old('riwayat_pendidikan_ibu', $santri->riwayat_pendidikan_ayah) }}">
            
                        @error('riwayat_pendidikan_ibu')
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
                        <label for="telfon_orang_tua">No. HP Orang Tua Santri</label>
                        <input type="tel" class="form-control @error('telfon_orang_tua') is-invalid @enderror" name="telfon_orang_tua" value="{{ old('telfon_orang_tua', $santri->telfon_orang_tua) }}">
            
                        @error('parent_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tahun_masuk">Tahun Masuk</label>
                        <input type="tel" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk', $santri->tahun_masuk) }}">
            
                        @error('tahun_masuk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}">            
                        <span class="text-small text-danger font-italic">File extension only: jpg, jpeg, png | Max Upload Image is 2048 Kb</span>            
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    @if ($santri->photo != null)            
                        <img alt="Profile Image Santri" src="{{ '/storage/photo/' . $santri->photo }}" class="rounded-circle m-2" width="100" onerror="this.src='{{ asset('assets/img/avatar/avatar-1.png') }}'">
                    @else
                        <img alt="Profile Image Santri" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle m-2" width="100">
                    @endif
                </div>
            </div>                         
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('santri.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        
    </form>

@endsection
