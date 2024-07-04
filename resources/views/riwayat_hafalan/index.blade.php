@extends('layouts.home')
@section('title_page', 'Detail Perkembangan Hafalan Santri')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>{{ $santri->nama }}</h2>
            <p>Alamat: {{ $santri->alamat }}</p>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr align="center">
                    <th colspan="30">Perkembangan Juz</th>
                </tr>
                <tr align="center">
                    @for ($juz = 1; $juz <= 30; $juz++)
                        <th>{{ 'Juz '.$juz }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                <tr align="center">
                    @for ($juz = 1; $juz <= 30; $juz++)
                        <td>
                            <div class="custom-control custom-checkbox" style="display: flex">
                                <input type="checkbox" class="custom-control-input" id="cbx-{{ $juz }}" disabled @if ($juz <= $data->juz_terakhir) checked @endif>
                                <label class="custom-control-label" for="cbx-{{ $juz }}"></label>
                            </div>
                        </td>
                    @endfor
                </tr>
            </tbody>
        </table>
    </div>

    <br><br><br>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr align="center">
                    <th width="5%">No</th>
                    <th>Tanggal</th>
                    <th>Surah</th>
                    <th>Ayat</th>
                    <th>Juz</th>
                    <th width="13%">Action</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hafalans as $index => $hafalan)
                    <tr align="center">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $hafalan->created_at->format('d M Y') }}</td>
                        <td>{{ $hafalan->surah }}</td>
                        <td>{{ $hafalan->ayat }}</td>
                        <td>{{ $hafalan->juz }}</td>
                        <td align="center">
                            @if (Auth::user()->role == 'Pengurus')
                                <a href="{{ route('hafalan.edit', $hafalan->id) }}" type="button" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
                            @else                                
                                <a href="{{ route('hafalan.edit', $hafalan->id) }}" type="button" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
                                <a href="javascript:void(0)" id="btn-delete" class="btn btn-sm btn-danger" onclick="deleteData('{{ $hafalan->id }}')" data-toggle="modal" data-target="#deleteHafalanModal"><i class="fas fa-trash"></i></a>
                            @endif
                        </td>
                        <td>{{ $hafalan->keterangan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data hafalan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('modal')
    <!-- Modal Delete -->
    <div class="modal fade" id="deleteHafalanModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="javascript:void(0)" id="deleteForm" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="center">Hapus Hafalan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" onclick="formSubmit()" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteData(id) {
            let url = '{{ route("hafalan.destroy", ":id") }}';
            url     = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endsection