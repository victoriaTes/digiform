<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CheckNikDukcapilController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5669/dukcapil';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'checkNikDukcapil';
        $msg = '12345';
        $transId = 'FNSY20230508';
        $productCode = 'OPENCIFKYC';


        $dataToSend = [
            'msgId' => $msg,
            'nik' => $request->input('nik'),
            'nomerKk' => $request->input('nomerKk'),
            'namaLengkap' => $request->input('namaLengkap'),
            'alamat' => $request->input('alamat'),
            'tempatlahir' => $request->input('tempatlahir'),
            'tglLahir' => $request->input('tglLahir'),
            'statusKawin' => $request->input('statusKawin'),
            'pendidikanAkhir' => $request->input('pendidikanAkhir'),
            'namaLengkapIbu' => $request->input('namaLengkapIbu'),
            'statusHBKEL' => $request->input('statusHBKEL'),
            'kabupaten' => $request->input('kabupaten'),
            'noKabupaten' => $request->input('noKabupaten'),
            'kecamatan' => $request->input('kecamatan'),
            'noKecamatan' => $request->input('noKecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'noKelurahan' => $request->input('noKelurahan'),
            'propinsi' => $request->input('propinsi'),
            'noPropinsi' => $request->input('noPropinsi'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'jenisPekerjaan' => $request->input('jenisPekerjaan'),
            'jenisKelamin' => $request->input('jenisKelamin'),
            'treshold' => $request->input('treshold'),
        ];
        // dump($dataToSend);
        // die();

        foreach ($dataToSend as $key => $value) {
            // Check if the parameter exists in the request and has a non-empty value
            if ($request->has($key) && $request->filled($key)) {
                // If it does, add it to the data to send
                $dataToSend[$key] = $request->input($key);
            } else {
                // If the parameter is empty, set it to an empty string
                $dataToSend[$key] = "";
            }
        }
        $response = $this->postToApi($endpoint, $dataToSend);

        // Proses response
        if ($response['status'] === 200) {
            $dataObj = $response['response'];

            if (isset($dataObj['respCode']) && $dataObj['respCode'] === '00') {
                return response()->json([
                    'noPropinsi' => $dataObj['noPropinsi'] ?? null,
                    'statusHBKEL' => $dataObj['statusHBKEL'] ?? null,
                    'statusKawin' => $dataObj['statusKawin'] ?? null,
                    'tempatlahir' => $dataObj['tempatlahir'] ?? null,
                    'nik' => $dataObj['nik'] ?? null,
                    'nomerKk' => $dataObj['nomerKk'] ?? null,
                    'namaLengkap' => $dataObj['namaLengkap'] ?? null,
                    'namaLengkapIbu' => $dataObj['namaLengkapIbu'] ?? null,
                    'alamat' => $dataObj['alamat'] ?? null,
                    'pendidikanAkhir' => $dataObj['pendidikanAkhir'] ?? null,
                    'tglLahir' => $dataObj['tglLahir'] ?? null,
                    'kabupaten' => $dataObj['kabupaten'] ?? null,
                    'propinsi' => $dataObj['propinsi'] ?? null,
                    'noKabupaten' => $dataObj['noKabupaten'] ?? null,
                    'kecamatan' => $dataObj['kecamatan'] ?? null,
                    'noKecamatan' => $dataObj['noKecamatan'] ?? null,
                    'kelurahan' => $dataObj['kelurahan'] ?? null,
                    'noKelurahan' => $dataObj['noKelurahan'] ?? null,
                    'rt' => $dataObj['rt'] ?? null,
                    'rw' => $dataObj['rw'] ?? null,
                    'jenisPekerjaan' => $dataObj['jenisPekerjaan'] ?? null,
                    'jenisKelamin' => $dataObj['jenisKelamin'] ?? null,
                    'respCode' => $dataObj['respCode'] ?? null,
                    'message' => $dataObj['message'] ?? null,
                ]);
            } else {
                // Handle error case
                return response()->json([
                    'respCode' => $dataObj['respCode'] ?? null,
                    'message' => $dataObj['message'] ?? null,
                ]);
            }
        } else {
            return response()->json(['error' => 'Error in API response']);
        }
    }

    private function postToApi($endpoint, $data)
    {
        $client = new Client();

        $response = $client->post($this->apiUrl . '/' . $endpoint, [
            'json' => $data,
            'headers' => [
                'msgHmac' => $this->msgHmac,
                'msgUserId' => $this->msgUserId,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody(), true);

        return ['status' => $statusCode, 'response' => $body];
    }
}
