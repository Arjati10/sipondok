@extends('layouts.home')
@section('title_page','Tampil Data Santri')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    @if ($santri->photo != null)            
                        <img src="{{ '/storage/photo/' . $santri->photo }}" alt="Profile Image Santri" class="rounded-circle" width="200" 
                        style="position: relative;width: 200px;height: 200px;overflow: hidden;">
                    @else
                        <img alt="Profile Image Santri" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="200">
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-info"><i class="fas fa-pen"></i>  &nbsp;&nbsp;Edit Profil</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="name">Nama Santri</label>
                    <h4>{{ $santri->nama }}</h4>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="birth_place">Tempat Lahir Santri</label>
                    <h4>{{ $santri->tempat_lahir }}</h4>
                </div>
            </div>
            <div class="col-sm">                   
                <div class="form-group">
                    <label for="birth_date">Tanggal Lahir Santri</label>
                    <h4>{{ \Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('D MMMM Y') }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="phone">No. HP Santri</label>
                    <h4>{{ $santri->phone }}</h4>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="address">Alamat Santri</label>
                    <h4>{{ $santri->alamat }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_old">NISN</label>
                    <h4>{{ $santri->nisn }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_address_old">Nama Ayah</label>
                    <h4>{{ $santri->nama_ayah }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_address_old">Nama Ibu</label>
                    <h4>{{ $santri->nama_ibu }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_current">NIK</label>
                    <h4>{{ $santri->nik }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_address_current">Pekerjaan Ayah</label>
                    <h4>{{ $santri->pekerjaan_ayah }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="school_address_current">Pekerjaan Ibu</label>
                    <h4>{{ $santri->pekerjaan_ibu }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="father_name">Nomor KK</label>
                    <h4>{{ $santri->no_kk }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="father_job">Riwayat Pendidikan Ayah</label>
                    <h4>{{ $santri->riwayat_pendidikan_ayah }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="father_job">Riwayat Pendidikan Ibu</label>
                    <h4>{{ $santri->riwayat_pendidikan_ibu }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="mother_name"></label>
                    <h4></h4>
                </div>
            </div>    
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="parent_phone">No. HP Orang Tua Santri</label>
                    <h4>{{ $santri->telfon_orang_tua }}</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="entry_year">Tahun Masuk</label>
                    <h4>{{ $santri->tahun_masuk }}</h4>
                </div>
            </div>
        </div>
    </div>

    
 
    
    
    
    
    
    
    
    
    
    
    
    

@endsection
