@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('pascabayars.index') !!}">Pascabayar</a>
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
                            <strong>Pascabayar</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'pascabayars.payTagihan']) !!}

                            @include('pascabayars.fields')

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
        function convertPeriode(periode) {
            const DATE = moment(periode + '01', 'YYYYMMDD');
            return DATE.subtract(1, "month").startOf("month").format('MMMM').substring(0, 3).toUpperCase() + DATE.format(
                'YY');
        }
        $(function() {
            let idPelanggan = '';
            let nominal = 0;
            let ref2 = '';
            let kodeProduk = '';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#cek').on('click', function() {
                idPelanggan = $('#id_pelanggan').val();

                if (idPelanggan != '' && idPelanggan.length == 12 && idPelanggan.match(/^[0-9]+$/)) {
                    $.post("{{ route('pascabayars.getTagihan') }}", {
                        id_pelanggan: idPelanggan
                    }, function(data) {
                        
                        if (data.status == 'success') {
                            nominal = parseInt(data.data.NOMINAL);
                            ref2 = data.data.REF2;
                            kodeProduk = data.data.KODE_PRODUK;

                            $('#tagihan').show();
                            $('input[name="kode_produk"]').val(kodeProduk);
                            $('input[name="ref2"]').val(ref2);
                            $("input[name='nominal']").val(nominal);
                            $('#nama').val(data.data.NAMA_PELANGGAN);
                            $('#daya').val(`${data.data.TARIF}/${data.data.DAYA} VA`);
                            $('#bl').val(data.data.PERIODE.split(',').map(index => convertPeriode(
                                index)).join(
                                ', '));
                            $('#stand').val(
                                `${data.data.STANAWAL.padStart(8, '0')}-${data.data.STANAKHIR.padStart(8, '0')}`
                            );
                            $('#ref').val(data.data.REF);
                            $('#admin').val(`Rp. ${Intl.NumberFormat().format(data.data.ADMIN)},-`);
                            $('#harga').val(
                                `Rp. ${new Intl.NumberFormat().format(data.data.NOMINAL)},-`);
                            $('#total').val(`Rp. ${new Intl.NumberFormat().format(parseInt(data.data.NOMINAL) +
                                parseInt(data.data.ADMIN))},-`);
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
