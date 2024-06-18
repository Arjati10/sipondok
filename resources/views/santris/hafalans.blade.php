@extends('layouts.home')
@section('title_page','Syahriah/SPP Santri')
@section('content')


    <div class="row">
        <div class="col-md-8">    
            <a href="{{ route('syahriah.create') }}" class="btn btn-primary">Bayar Syahriah (SPP)</a><br><br>                      
        </div>
        <div class="col-md-4 mb-3">
            <form action="#" class="flex-sm">
                <div class="input-group">
                    <select class="form-control select2" name="year" id="year">
                        
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
                                <input type="checkbox" class="custom-control-input" id="cbx-2" 
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2" >
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2" >
                                <label class="custom-control-label" for="cbx-2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-2" >
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
                        <input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ Request::get('keyword') }}">
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
              
                </tbody>
            </table>
        </div>
        <div class="mt-2 float-left">
        </div>
        <div class="mt-3 float-right">
        </div>
    </div>


