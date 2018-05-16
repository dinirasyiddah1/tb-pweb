@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
<a class="btn" href="{{ route('pendidikan.create') }}"><i class="icon-plus"></i> Tambah</a>
@endsection

{{-- Content Utama --}}
@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="card">
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Riwayat Pendidikan
            </div>
            
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Penduduk</th>
                            <th class="text-center">Jenjang Pendidikan</th>
                            <th class="text-center">Nama Institusi</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendidikan as $p)
                        <tr>
                            <td>{{ $p->penduduk->nama }}</td>
                            <td>{{ $p->jenjang_pendidikan->nama }}</td>
                            <td>{{ $p->nama_institusi }}</td>
                            <td>{{ $p->tahun_mulai }}</td>
                            
                            
                            <td class="text-center">
                                <a href="{{ route('pendidikan.show', [$p->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-eye"> </i>
                                </a>
                                <a href="{{ route('pendidikan.edit', [$p->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pencil"> </i>
                                </a>
                                <button onclick="event.preventDefault();confirmDeletion('{{ route('pendidikan.destroy', [$p->id]) }}');" class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash"> </i>
                                </button>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>

<form style="display: none" action="#" method="post" id="form-delete">
    @csrf
    @method('delete')
</form>

<form style="display: none" action="#" method="post" id="form-activation">
    @csrf
</form>

@endsection

@push('javascript')
<script>
    function confirmDeletion(url){
        if(confirm('Anda yakin akan menghapus user ini? ')){
            form = document.querySelector('#form-delete');
            form.action = url;
            form.submit();
        }
    }
    
    function activation(url){
        form = document.querySelector('#form-activation');
        form.action = url;
        form.submit();
    }
</script>
@endpush

