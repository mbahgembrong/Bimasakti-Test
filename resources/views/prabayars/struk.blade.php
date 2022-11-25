<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STRUK PEMBAYARAN {{ $KODE_PRODUK == 'PLNPASCH' ? 'TAGIHAN LISTRIK' : 'LISTRIK PRABAYAR' }}</title>
</head>

<body>
    <div style="display:inline-block">
        <div style="margin:auto; text-align:center"><span
                style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">STRUK
                PEMBAYARAN {{ $KODE_PRODUK == 'PLNPASCH' ? 'TAGIHAN LISTRIK' : 'LISTRIK PRABAYAR' }}</span><span
                style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
            </span><br /></span></div>
        <div style="margin:auto;display: table;">
            <div style="display: table-cell;">
                <table>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            NO METER</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            {{ $IDPEL1 }}</td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            ID PEL</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            {{ $IDPEL2 }}</td>
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
                            {{ $IDPEL2 }}</td>
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
                            REF</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            {{ $REF }}</td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            RP BAYAR</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="bayar">
                        </td>
                    </tr>
                    <tr></tr>
                    <br>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            TOKEN</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            {{ $TOKEN }}</td>
                    </tr>
                </table>
            </div>
            <div style="display: table-cell;">
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
                            MATERAI</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="materai">
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            PPN</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="ppn">
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            PPJ</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="ppj">
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            ANGSURAN</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="angsuran">
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            RP STROOM/TOKEN</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000"
                            id="stroom">
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            JML KWH</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            :</td>
                        <td
                            style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
                            {{ $KWH }}</td>
                    </tr>

                </table>
            </div>
        </div>
        <div style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Courier New;color:#000000">
            {{ $INFOTEKS }} {{ substr($IDPEL2, 0, 5) }}</div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    $(function() {
        $('#bayar').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal' , minimumFractionDigits: 2
   }).format({!! json_encode($NOMINAL) !!})}`);
        $('#admin').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal',minimumFractionDigits: 2}).format({!! json_encode($ADMIN) !!})}`
            );
        $('#materai').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal',minimumFractionDigits: 2}).format({!! json_encode($MATERAI) !!})}`
            );
        $('#ppn').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal',minimumFractionDigits: 2}).format({!! json_encode($PPN) !!})}`
            );
        $('#ppj').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal',minimumFractionDigits: 2}).format({!! json_encode($PPJ) !!})}`
            );
        $('#angsuran').text(
            `Rp. ${new Intl.NumberFormat('en-US', { style: 'decimal',minimumFractionDigits: 2}).format({!! json_encode($ANGSURAN) !!})}`
            );
        window.print();
    });
</script>

</html>
