@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('prabayars.index') !!}">Prabayar</a>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-plus-square-o fa-lg"></i>
                            <strong>Prabayar</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'prabayars.payTagihan']) !!}

                            @include('prabayars.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            let noMeter = '';
            let ref2 = '';
            let kodeProduk = '';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#cek').on('click', function() {
                noMeter = $('#no_meter').val();

                if (noMeter != '' && noMeter.length == 11 && noMeter.match(/^[0-9]+$/)) {
                    $.post("{{ route('prabayars.getTagihan') }}", {
                        no_meter: noMeter
                    }, function(data) {

                        if (data.status == 'success') {
                            ref2 = data.data.REF2;
                            kodeProduk = data.data.KODE_PRODUK;

                            $('#tagihan').show();
                            $('input[name="kode_produk"]').val(kodeProduk);
                            $('input[name="ref2"]').val(ref2);
                            $("#id_pel").val(data.data.IDPEL2);
                            $('#nama').val(data.data.NAMA_PELANGGAN);
                            $('#daya').val(`${data.data.TARIF}/${data.data.DAYA} VA`);
                            $('#ref').val(data.data.REF);
                        } else {
                            alert(data.message);
                        }
                    });
                } else {
                    alert('ID Pelanggan tidak valid');
                }
            });
        });
    </script>
@endpush
