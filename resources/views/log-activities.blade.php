
@extends('layouts.home')
@section('title_page','Log Aktivitas')

@section('content')

    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4 mb-3">
            <form action="#" class="flex-sm">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ Request::get('keyword') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary mr-2 rounded-right" type="submit"><i class="fas fa-search"></i></button>
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
                    <th>Time</th>
                    <th>Subject</th>
                    <th>URL</th>
                    <th>Action By</th>
                </tr>
            </thead>
            <tbody>
                    <tr align="center">
                        <td></td>
                        <td><small class="text-primary"></small></td>
                        <td></td>
                        <td><small class="text-warning"></small></td>
                        <td> <br><small class="text-info"></small> </td>
                    </tr>
                    <tr>
                        <td colspan="5">Tidak ada data.</td>
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        
    </div>

@endsection