<div class="form-group {{ $errors->has('nama_buku') ? 'has-error' : ''}}">
    {!! Form::label('nama_buku', 'Nama Buku', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_buku', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_buku', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hargajual') ? 'has-error' : ''}}">
    {!! Form::label('hargajual', 'Hargajual', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hargajual', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hargajual', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hargadasar') ? 'has-error' : ''}}">
    {!! Form::label('hargadasar', 'Hargadasar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hargadasar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hargadasar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
