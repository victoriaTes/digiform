<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class CheckAmlController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5669';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'dataAml';
        $msg = '12345';

        $dataToSend = [
            'msgId' => $msg,
            'id' => $request->input('id'),
            'motherName' => $request->input('motherName'),
            'name' => $request->input('name'),
            'identityNo' => $request->input('identityNo'),
            'taxNo' => $request->input('taxNo'),
            'position' => $request->input('position'),
            'address' => $request->input('address'),
            'province' => $request->input('province'),
            'dateOfBirth' => $request->input('dateOfBirth'),
            'placeOfBirth' => $request->input('placeOfBirth'),
            'natureOfBusiness' => $request->input('natureOfBusiness'),
            'occupation' => $request->input('occupation'),
            'sourceOfFund' => $request->input('sourceOfFund'),
            'product' => $request->input('product'),
            'country' => $request->input('country'),
            'subsystem' => $request->input('subsystem'),
            'personType' => $request->input('personType'),
        ];


        foreach ($dataToSend as $key => $value) {
            if ($key !== 'msgId') {
                // Check if the parameter exists in the request and has a non-empty value
                if ($request->has($key) && $request->filled($key)) {
                    // If it does, add it to the data to send
                    $dataToSend[$key] = $request->input($key);
                } else {
                    // If the parameter is empty, set it to an empty string
                    $dataToSend[$key] = "";
                }
            }
        }
        // dump($dataToSend);
        // die();
        DB::table('tabel_req_aml')->insert($dataToSend);
        $response = $this->postToApi($endpoint, $dataToSend);
        // dump($response);
        // die();

        // Proses response
        if ($response['status'] === 200) {
            $i = 1;
            $dataObj = $response['response'];
            // dump($dataObj);
            // die();

            if (!isset($dataObj['screeningResult']) || $dataObj['screeningResult'] === 'null' || $dataObj['screeningResult'] === []) {
                $modelObj = array(
                    'identityNo' => $dataObj['identityNo'] ?? null,
                    'motherName' => $dataObj['motherName'] ?? null,
                    'riskProfile' => $dataObj['riskProfile'] ?? null,
                    'name' => $dataObj['name'] ?? null,
                );
                DB::table('tabel_screeningResult_aml')->insert($modelObj);
                $ktp = isset($dataObj['identityNo']) ? $dataObj['identityNo'] : null;
                $data["obj"] = DB::select('CALL check_screeningResult(?,?)', [$ktp, $modelObj]);
                $data_obj = DB::select($data["obj"]);
                if (count($data_obj) > 0) {
                    return json_decode(json_encode($data_obj), true);
                } else {
                    return [];
                }
                $this->response($data["obj"]);
                // dump($dataObj);
                // die();
            } else {
                $dt = $dataObj['screeningResult'];
                // $screeningResult = null;
                foreach ($dt as $row) {
                    $modelObj = array(
                        'matchSource' => $row['matchSource'],
                        'name' => $row['name'],
                        'score' => $row['score'],
                        'identityNo' => $dataObj['identityNo'],
                        'motherName' => $dataObj['motherName'],
                        'riskProfile' => $dataObj['riskProfile']
                    );
                    DB::table('tabel_screeningResult_aml')->insert($modelObj);
                    $i++;
                }
                $ktp = isset($dataObj['identityNo']) ? $dataObj['identityNo'] : null;
                $modelObjJson = json_encode($modelObj);
                $data["obj"] = DB::select('CALL check_screeningResult(?)', [$ktp]);
                return response()->json($data["obj"]);
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
        // dump($body);
        // die();
    }
}
