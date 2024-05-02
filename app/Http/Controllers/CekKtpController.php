<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CekKtpController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5669/advanceai';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'ocr-ktp';
        $msg = 12345;
        $nama = 'testdennis';

        $data_to_send  = [
            'multipart' => [
                [
                    'name' => 'ocrImage',
                    'contents' => fopen($request->file('ocrImage')->path(), 'r'),
                ],
                ['name' => 'msgId', 'contents' => $msg],
                ['name' => 'name', 'contents' => $nama],
            ],
        ];
        $client = new Client();
        $response = $client->post($this->apiUrl . '/' . $endpoint, [
            'headers' => [
                'msgHmac' => $this->msgHmac,
                'msgUserId' => $this->msgUserId,
            ],
            'multipart' => $data_to_send['multipart'],
        ]);

        if ($response->getStatusCode() === 200) {
            $dataObj = json_decode($response->getBody(), true);

            if (empty($dataObj['data'])) {
                $errorMessage = 'Dimensi Ukuran Gambar Terlalu Kecil / Terlalu Besar';
                return response(['Error' => $errorMessage], 400);
            }

            $dt = $dataObj['data'];
            list($birthPlace, $birthday) = explode(', ', $dt['birthPlaceBirthday']);

            $modelObj = [
                'idNumber' => $dt['idNumber'],
                'name' => $dt['name'],
                'bloodType' => $dt['bloodType'],
                'religion' => $dt['religion'],
                'gender' => $dt['gender'],
                'birthPlace' => $birthPlace,
                'birthday' => $birthday,
                'province' => $dt['province'],
                'city' => $dt['city'],
                'district' => $dt['district'],
                'village' => $dt['village'],
                'rtrw' => $dt['rtrw'],
                'occupation' => $dt['occupation'],
                'expiryDate' => $dt['expiryDate'],
                'nationality' => $dt['nationality'],
                'maritalStatus' => $dt['maritalStatus'],
                'address' => $dt['address'],
            ];
            return response()->json($modelObj);
        } else {
            // Handle error case
            return response(['Error' => 'Error in API call'], $response->getStatusCode());
        }
    }
}
