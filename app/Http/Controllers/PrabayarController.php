<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class PrabayarController extends Controller
{
    public function __construct()
    {
        $this->base_url = "https://rajabiller.fastpay.co.id/transaksi/json_devel.php";
        // https://staging-rajabiller.fastpay.co.id/transaksi/json_devel.php -> error
        $this->uid = "WEBDEV";
        $this->pin = "893456";
    }

    public function index()
    {
        return view('prabayars.index');
    }

    public function getTagihan(Request $request)
    {
        $request->validate([
            'no_meter' => 'required|min:11|max:11',
        ]);

        $data = [
            "method" => "rajabiller.inqpln",
            "uid" => $this->uid,
            "pin" => $this->pin,
            "idpel1" => $request->no_meter,
            "idpel2" => "",
            "idpel3" => "",
            "kode_produk" => "PLNPRAH",
            "ref1" => time()
        ];
        try {
            $client = new GuzzleClient();
            $response = $client->request('POST', $this->base_url, [
                'json' => $data
            ]);


            $result = json_decode($response->getBody(), true);
            if ($response->getStatusCode() == 200) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'ID Pelanggan berhasil ditemukan',
                    'data' => array_diff_key($result, array_flip(['PIN', 'UID', 'METHOD', 'SALDO_TERPOTONG', 'SISA_SALDO',  'STATUS',]))
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'ID Pelanggan tidak ditemukan',
                    'data' => $result
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID Pelanggan tidak ditemukan',
            ]);
        }
    }

    public function payTagihan(Request $request)
    {
        $request->validate([
            'no_meter' => 'required|min:11|max:11',
            'nominal' => 'required|in:20000,50000,100000',
            'ref2' => 'required',
            'kode_produk' => 'required',
        ]);

        // try {
        $data = [
            "method" => "rajabiller.paypln",
            "uid" => $this->uid,
            "pin" => $this->pin,
            "idpel1" => $request->no_meter,
            "idpel2" => "",
            "idpel3" => "",
            "kode_produk" => $request->kode_produk,
            "nominal" => $request->nominal,
            "ref1" => time(),
            "ref2" => $request->ref2,
            "ref3" => ""
        ];

        $client = new GuzzleClient();
        $response = $client->request('POST', $this->base_url, [
            'json' => $data
        ]);

        $result = json_decode($response->getBody(), true);

        if ($response->getStatusCode() == 200) {
            return view('prabayars.struk',)->with($result);
        } else {
            return redirect()->back();
        }
        // } catch (\Throwable $th) {
        //     return redirect()->back();
        // }
    }
}
