<div class="form-group {{ $errors->has('tanggal_masuk') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_masuk', 'Tanggal Masuk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('tanggal_masuk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_masuk', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nama_buku') ? 'has-error' : ''}}">
    {!! Form::label('nama_buku', 'Nama Buku', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('nama_buku', [''=>'']+App\Buku::pluck('nama_buku','id')->all(), null, [

  'placeholder' => 'Nama Buku']) !!}
    {!! $errors->first('nama_buku', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nama_penerbit') ? 'has-error' : ''}}">
    {!! Form::label('nama_penerbit', 'Nama Penerbit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::select('nama_penerbit', [''=>'']+App\Penerbit::pluck('nama','id')->all(), null, [

  'placeholder' => 'Nama Penerbit']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
    {!! Form::label('jumlah', 'Jumlah', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
