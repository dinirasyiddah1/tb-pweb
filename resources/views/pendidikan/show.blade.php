@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
    <a class="btn" href="{{ route('pendidikan.destroy', [ $pendidikan->id]) }}" onclick="event.preventDefault();confirmDeletion('{{ route('pendidikan.destroy', [$pendidikan->id]) }}');"><i class="icon-trash"></i> Hapus</a>
    <a class="btn" href="{{ route('pendidikan.edit', [ $pendidikan->id]) }}"><i class="icon-pencil"></i> Edit</a>
    <a class="btn" href="{{ route('pendidikan.index') }}"><i class="icon-list"></i> List</a>

    <form style="display: none" action="{{ route('pendidikan.destroy', [$pendidikan->id]) }}" method="post" id="form-delete">
        @csrf
        @method('delete')
    </form>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Informasi Riwayat Pendidikan
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Penduduk</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->penduduk->nama }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenjang Pendidikan</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->jenjang_pendidikan->nama }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Institusi</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->nama_institusi }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Instansi Pendidikan</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->instansi_pendidikan }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tahun Mulai</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->tahun_mulai }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tahun Selesai</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pendidikan->tahun_selesai }}</p>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

@push('javascript')
<script>
    function confirmDeletion(url){
        if(confirm('Anda yakin akan menghapus riwayat pendidikan ini? ')){
            form = document.querySelector('#form-delete');
            form.action = url;
            form.submit();
        }
    }
</script>