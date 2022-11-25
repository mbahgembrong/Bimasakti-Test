<!-- Id Pelanggan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_meter', 'NO METER:') !!}
    <div class="row">
        {!! Form::text('no_meter', null, ['class' => 'form-control col-8']) !!}
        <button type="button" class="btn btn-primary col-2 ml-2" id="cek">Cek</button>
    </div>
</div>
<div id="tagihan" style="display: none">
    <input type="hidden" name="kode_produk">
    <input type="hidden" name="ref2">

    <div class="form-group col-sm-12">
        {!! Form::label('id_pel', 'ID_PEL:') !!}
        {!! Form::text('id_pel', null, ['class' => 'form-control', 'readonly']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('nama', 'NAMA:') !!}
        {!! Form::text('nama', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('daya', 'TARIF/DAYA:') !!}
        {!! Form::text('daya', null, ['class' => 'form-control', 'disabled']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('ref', 'REF:') !!}
        {!! Form::text('ref', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('nominal', 'TOTAL BAYAR:') !!}
        {!! Form::select('nominal', ['20000' => 'Rp. 20000', '50000' => 'Rp. 50000', '100000' => 'Rp. 100000'], null, [
            'class' => ' form-control',
        ]) !!}
    </div>
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Bayar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('prabayars.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>
