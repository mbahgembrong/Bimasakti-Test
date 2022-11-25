<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STRUK PEMBAYARAN {{$KODE_PRODUK == "PLNPASCH"?"TAGIHAN LISTRIK":"LISTRIK PRABAYAR"}}</title>
</head>

<body>
    <div style="display:inline-block">
        <div style="margin:auto; text-align:center"><span
                style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">STRUK
                PEMBAYARAN {{$KODE_PRODUK == "PLNPASCH"?"TAGIHAN LISTRIK":"LISTRIK PRABAYAR"}}</span><span
                style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
            </span><br /></span></div>
        <div style="margin:auto">
            <table>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        IDPEL</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        {{ $IDPEL1 }}</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        BL/TH</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                        id="bl">
                    </td>
                </tr>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        NAMA</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        {{ $NAMA_PELANGGAN }}</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        STAND METER</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                        id="stand">
                    </td>
                </tr>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        TARIF/DAYA</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        {{ $TARIF }}/{{ $DAYA }} VA</td>
                </tr>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        RP TAG PLN</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                        id="tag">
                    </td>
                </tr>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        REF</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        {{ $REF }}</td>
                </tr>
            </table>
            <div style="margin:auto;text-align:center"><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">PLN
                    MENYATAKAN STRUK INI SEBAGAI BUKTI PEMBAYARAN YANG SAH</span><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                </span><br /></div>
            <table>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        ADMIN BANK</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                        id="admin">
                    </td>
                </tr>
                <tr>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        TOTAL BAYAR</td>
                    <td
                        style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                        :</td>
                    <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                        id="total">
                    </td>
                </tr>
            </table>
            <div style="margin:auto;text-align:center"><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">Rincian
                    tagihan dapat diakses di www.PLN.co.id</span><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                </span><br /></div>
            <div style="margin:auto;text-align:center"><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">Informasi
                    Hubungi Call Center : 123</span><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                </span><br /></span></div>
            <div style="margin:auto;text-align:center"><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">Atau
                    Hub. PLN Terdekat : 53873</span><span
                    style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                </span><br /></span></div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script>
    function convertPeriode(periode) {
        const DATE = moment(periode + '01', 'YYYYMMDD');
        return DATE.subtract(1, "month").startOf("month").format('MMMM').substring(0, 3).toUpperCase() + DATE.format(
            'YY');
    }
    $(function() {
        $('#bl').text({!! json_encode($PERIODE) !!}.split(',').map(index => convertPeriode(
            index)).join(
            ', '));
        $('#stand').text(
            `${{!! json_encode($STANAWAL) !!}.padStart(8, '0')}-${{!! json_encode($STANAKHIR) !!}.padStart(8, '0')}`
        );
        $('#admin').text(`Rp. ${Intl.NumberFormat('en-US', { style: 'decimal' , minimumFractionDigits: 2
   }).format({!! json_encode($ADMIN) !!})},-`);
        $('#harga').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal' , minimumFractionDigits: 2
   }).format({!! json_encode($NOMINAL) !!})},-`);
        $('#total').text(`Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal' , minimumFractionDigits: 2
   }).format(parseInt({!! json_encode($NOMINAL) !!}) +parseInt({!! json_encode($ADMIN) !!}))},-`);
        window.print();
    });
</script>

</html>
