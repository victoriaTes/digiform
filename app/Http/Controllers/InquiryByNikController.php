<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InquiryByNikController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5669/core';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'inquiryCifbyNik';
        $msg = 12345;
        $transId = 'RUNID20230501';

        $dataToSend = [
            'noKtp' => $request->input('noKtp'),
            'transactionId' => $transId,
            'msgId' => $msg,
        ];

        $response = $this->postToApi($endpoint, $dataToSend);

        // Proses response
        if ($response['status'] === 200) {
            $dataObj = $response['response'];

            // Check if 'cifNo' is not found and return JSON response with message "bukan nasabah"
            if (!isset($dataObj['cifNo']) || $dataObj['cifNo'] === null) {
                return response()->json(['cifNo' => 'NN']);
            } else {
                $cifNo = $dataObj['cifNo'];

                // You can choose to store the data in the database as before
                $modelObj = [
                    'cifNo' => $cifNo,
                    'namaCust' => $dataObj['namaCust'],
                ];

                // Assuming you have a model named 'Victoria'
                //\App\Models\Victoria::create($modelObj);

                // Only return the 'cifNo' as the API response
                return response()->json([
                    'cifNo' => $cifNo,
                    'namaCust' => $dataObj['namaCust'],
                    'email' => $dataObj['email'],
                    'noHandPhone' => $dataObj['noHandPhone'],
                    'branchCode' => $dataObj['branchCode'],
                    'fullAddress' => $dataObj['address1'] . ', ' . $dataObj['address2'] . ', ' . $dataObj['address3'] . ', ' . $dataObj['kota'] . ', ' . $dataObj['propinsi'],
                ]);
            }
        } else {
            // Handle error response if needed
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
