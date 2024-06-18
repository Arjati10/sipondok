@extends('layouts.home')
@section('title_page','Hafalan Santri')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session('alert') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-8">    
            <a href="" class="btn btn-primary">Riwayat Hafalan</a><br><br>                      
        </div>
        <div class="col-md-4 mb-3">
            <form action="#" class="flex-sm">
                <div class="input-group">
                    <select class="form-control select2" name="year" id="year">
                            <option value="">
                                
                            </option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-primary mr-2 rounded-right" type="submit"><i class="fas fa-search"></i></button>
                        <button onclick="" type="button" class="btn btn-md btn-secondary rounded"><i class="fas fa-sync-alt"></i></button>
                    </div>
                </div>
                <br> 
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr align="center">
                    <th colspan="14"></th>
                </tr>
                <tr align="center">
                    <th width="5%">No</th>
                    <th class="w-25">Nama Santri</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                </tr>
            </thead>
            <tbody>
                    <tr align="center">
                        <td></td>
                        <td><a href="" target="blank"></a></td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                        <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                        <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2">
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="14">Tidak ada data.</td>
                    </tr>
                
            </tbody>
        </table>
    </div>

    <br><br><br>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-8">                
                <h4>Riwayat Pembayaran</h4>
            </div>
            <div class="col-md-4">
                <form action="#" class="flex-sm">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Search" value="">
                        <div class="input-group-append">
                            <button class="btn btn-primary mr-2 rounded-right" type="submit"><i class="fas fa-search"></i></button>
                            <button onclick="" type="button" class="btn btn-md btn-secondary rounded"><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr align="center">
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Tanggal Bayar</th>
                        <th width="13%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td></td>
                            <td><a href="" target="blank"></a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                                <a href="" type="button" class="btn btn-sm btn-warning"><i class="fas fa-print"></i></a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">Tidak ada data.</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-2 float-left">
            <span class="ml-3">Data Keseluruhan: <span class="text-primary font-weight-bold"></span> Pembayaran syahriah telah terdaftar.</span>
        </div>
        <div class="mt-3 float-right">
            
        </div>
    </div>