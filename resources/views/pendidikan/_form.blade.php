<div class="form-group">
    <label for="name">Nama Penduduk</label>
    {{ Form::select('penduduk_id', $penduduk, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="name">Jenjang Pendidikan</label>
    {{ Form::select('jenjang_id', $jenjang, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="email">Nama Institusi</label>
    {{ Form::text('nama_institusi', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="username">Tahun Mulai</label>
    {{ Form::text('tahun_mulai', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="password">Tahun Selesai</label>
    {{ Form::text('tahun_selesai', null, ['class' => 'form-control'])}}
</div>

