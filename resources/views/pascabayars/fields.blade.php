<!-- Id Pelanggan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_pelanggan', 'ID PELANGGAN:') !!}
    <div class="row">
        {!! Form::text('id_pelanggan', null, ['class' => 'form-control col-8']) !!}
        <button type="button" class="btn btn-primary col-2 ml-2" id="cek">Cek</button>
    </div>
</div>
<div id="tagihan" style="display: none">
    <input type="hidden" name="kode_produk">
    <input type="hidden" name="ref2">
    <input type="hidden" name="nominal">
    <div class="form-group col-sm-12">
        {!! Form::label('nama', 'NAMA:') !!}
        {!! Form::text('nama', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('daya', 'TARIF/DAYA:') !!}
        {!! Form::text('daya', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('bl', 'BL/TH:') !!}
        {!! Form::text('bl', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('stand', 'STAND METER:') !!}
        {!! Form::text('stand', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('harga', 'RP TAG PLN:') !!}
        {!! Form::text('harga', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('ref', 'REF:') !!}
        {!! Form::text('ref', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('admin', 'ADMIN BANK:') !!}
        {!! Form::text('admin', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('total', 'TOTAL BAYAR:') !!}
        {!! Form::text('total', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Bayar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('pascabayars.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>
