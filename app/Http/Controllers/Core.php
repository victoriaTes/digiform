<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InquiryByNikController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5670/core';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'sendCore';
        $msg = 12345;
        $transId = 'RUNID20230501';

        $dataToSend = [

            //PRIBADI
            'noKtp'=> $request->input('noKtp'),
            'noNPWP'=> $request->input('noKtp'),
            'namaCust'=> $request->input('namaCust'), 
            // 'gelar'=> $request->input('gelar'), 
            'address1'=> $request->input('address1'),
            'address2'=> $request->input('address2'), 
            'address3'=> $request->input('address3'),
            'address4'=> $request->input('address4'), 
            'address5'=> $request->input('address5'), 
            'propinsi'=> $request->input('propinsi'), 
            'zipCode'=> $request->input('kodepos'), 

            //alamat saat ini
            'domisili1'=> $request->input('dom1'),
            // 'nomorrumah'=> $request->input('normh'),
            'domisili2'=> $request->input('dom2'),
            'domisili3'=> $request->input('dom3') . ', ' . $request->input('dom4'),
            'domisili4'=> $request->input('dom5') . ', ' . $request->input('propdomi'),
            // 'zipdom'=> $request->input('kodeposdomi'), 'BANTEN',

            //DATA PRIBADI
            // 'birthPlace'=> $request->input('tempatLahir'), 
            'tempatLahir'=> $request->input('tempatLahir'), 
            'tanggalLahir'=> $request->input('datepicker1'),
            'tglLahir'=> $request->input('datepicker1'),
            'agama'=> $request->input('agama'),
            'jenisKelamin'=> $request->input('sex'),
            'negaraAsal'=> $request->input('negara'), 
            'statusNikah'=> $request->input('statusperkawinan'),
            'pendAkhir'=> $request->input('pendidikan'),
            'statusRes'=> $request->input('statusrumah'),
            'motherMaidenName'=> $request->input('motherMaidenName'), 
            'emailAddr'=> $request->input('email'),
            'mobilePhone'=> $request->input('nohp'),

            //INFORMASI DATA PEKERJAAN
            'industryName'=> $request->input('namaperusahaan'), 
            'addressCompany'=> $request->input('alamatPerusahaan') . ', ' . $request->input('rtperusahaan') . ', ' . $request->input('rwperusahaan') . ', ' . $request->input('kelurahanperusahaan') . ', ' . $request->input('kecamatanperusahaan') . ', ' . $request->input('kabupatenperusahaan') . ', ' . $request->input('propinsiperusahaan'),
            'zipCode1'=> $request->input('kodeposperusahaan'),
            'areaPhone1'=> $request->input('teleponperusahaan'),    
            // 'jenisId'=> $request->input('noKtp'), '1',
            'jenisKerja'=> $request->input('jobPositionCode'), 
            'industryType'=> $request->input('bidangusaha'), 
            'jobPosition'=> $request->input('jabatan'),

            //INFORMASI DATA KEUANGAN
            'purposeOpenAccount'=> $request->input('pembukanrekening'),
            // 'purposeOpenAccountDesc'=> $request->input('pembukanrekening'), 'SIMPANAN',
            'sumberHasil'=> $request->input('sumberdana'), 
            // 'sourceIncome'=> $request->input('danatambahan'),
            'tujuanGuna'=> $request->input('pembukanrekening'),
            // 'estimatedTransaction'=> $request->input('noKtp'), '1000000',
            // 'estimatedTransactionDesc'=> $request->input('noKtp'), 'ESTIMATED TRANSACTION DESC',
            // 'estimatedTransaction'=> $request->input('noKtp'), '1000000',
            // 'estimatedTransactionDesc'=> $request->input('noKtp'), 'ESTIMATED TRANSACTION DESC',
            // 'estimatedTransaction'=> $request->input('noKtp'), '1000000',
            // 'estimatedTransactionDesc'=> $request->input('noKtp'), 'ESTIMATED TRANSACTION DESC',
            // 'estimatedTransaction'=> $request->input('noKtp'), '1000000',
            // 'estimatedTransactionDesc'=> $request->input('noKtp'), 'ESTIMATED TRANSACTION DESC',
            // 'frequencyTransaction'=> $request->input('setorantunai'), '1',
            // 'frequencyTransactionDesc'=> $request->input('setorantunai'), 'FREQUENCY TRANSACTION DESC',
            // 'frequencyTransaction'=> $request->input('penarikantunai'), '1',
            // 'frequencyTransactionDesc'=> $request->input('penarikantunai'), 'FREQUENCY TRANSACTION DESC',
            // 'frequencyTransaction'=> $request->input('setorannontunai'), '1',
            // 'frequencyTransactionDesc'=> $request->input('setorannontunai'), 'FREQUENCY TRANSACTION DESC',
            // 'frequencyTransaction'=> $request->input('penarikannontunai'), '1',
            // 'frequencyTransactionDesc'=> $request->input('penarikannontunai'), 'FREQUENCY TRANSACTION DESC',
            'tipeRekening'=> $request->input('tabungan'), 
            // 'tipeRekening'=> $request->input('transfer'), 
            // 'tipeRekening'=> $request->input('nilaisetor'), 

            //DEFAULT
            'productCode'=> $request->input('noKtp'), 'OPENCIFKYC',

            
            'City'=> $request->input('noKtp'), 'KOTA TANGERANG',
            'City1'=> $request->input('noKtp'), 'Jakarta',
            'Distric'=> $request->input('noKtp'), 'TANGERANG',
            'Ext2'=> $request->input('noKtp'), '',
            'Hobby'=> $request->input('noKtp'), '0',
            'Legal'=> $request->input('noKtp'), '1',
            'Village'=> $request->input('noKtp'), 'KELAPA INDAH',
            'areaPhone2'=> $request->input('noKtp'), '',
            'avEarning'=> $request->input('noKtp'), '',
            'avgTransaction'=> $request->input('noKtp'), '5000000-10000000',
            'avgTransactionDesc'=> $request->input('noKtp'), 'AVG TRANSACTION DESC',
            'branchCode'=> $request->input('noKtp'), '081',
            'cifType'=> $request->input('noKtp'), '1',
            'companyNumber'=> $request->input('noKtp'), '-',
            'currency'=> $request->input('noKtp'), 'IDR',
            'ext1'=> $request->input('noKtp'), '',
            'flagProcess'=> $request->input('noKtp'), '2',
            'fundPurpose1'=> $request->input('noKtp'), '',
            'golPemilik'=> $request->input('noKtp'), '886',
            'idNas'=> $request->input('noKtp'), 'M',
            'incomeRange'=> $request->input('noKtp'), '02',
            'incomeRangeDesc'=> $request->input('noKtp'), 'INCOME RANGE DESC',
            'indCode'=> $request->input('noKtp'), '0000',
            'infoLain'=> $request->input('noKtp'), 'M',
            'jumAnak'=> $request->input('noKtp'), '00',
            'jumIstri'=> $request->input('noKtp'), '00',
            'jumTanggung'=> $request->input('noKtp'), '0',
            'jumTrx'=> $request->input('noKtp'), 'M',
            'kegUsaha'=> $request->input('noKtp'), 'M',
            'kodeAo'=> $request->input('noKtp'), '01',
            'lamaKerja'=> $request->input('noKtp'), '',
            'lokasiUsaha'=> $request->input('noKtp'), 'M',
            'marStatus'=> $request->input('noKtp'), '',
            'msgId'=> $request->input('noKtp'), '12345',
            'noCif'=> $request->input('noKtp'), '',
            'noPhone1'=> $request->input('noKtp'), '234567890',
            'noPhone2'=> $request->input('noKtp'), '',
            'noTelp'=> $request->input('noKtp'), '',
            'otherInfo'=> $request->input('noKtp'), '',
            'profNasabah'=> $request->input('noKtp'), 'M',
            'purposeFund'=> $request->input('noKtp'), '0001',
            'purposeFundDesc'=> $request->input('noKtp'), 'SIMPANAN',
            'purposeOfDataUse'=> $request->input('noKtp'), '-',
            'purposeOfDataUseDesc'=> $request->input('noKtp'), '-',
            'relFlag'=> $request->input('noKtp'), '0',
            'resident'=> $request->input('noKtp'), '1',
            'resumAkhir'=> $request->input('noKtp'), 'M',
            'riskFactor'=> $request->input('noKtp'), '0',
            'shippingAddress'=> $request->input('noKtp'), 'JL.P RATU SELATAN BLOK C.4/20',
            'shippingAddressDes'=> $request->input('noKtp'), 'MDL',
            'sourceFund'=> $request->input('noKtp'), '0002',
            'sourceFund1'=> $request->input('noKtp'), '0002',
            'strukPemilik'=> $request->input('noKtp'), 'M',
            'tanggalAkhir'=> $request->input('noKtp'), '20180617',
            'tanggalTerbit'=> $request->input('noKtp'), '20130313',
            'yearResiden'=> $request->input('noKtp'), '1',
        ];

        $response = $this->postToApi($endpoint, $dataToSend);

        // Proses response
        if ($response['status'] === 200) {
            $dataObj = $response['response'];

            // Check if 'cifNo' is not found and return JSON response with message "bukan nasabah"
            if (!isset($dataObj['noKtp']) || $dataObj['noKtp'] === null) {
                return response()->json(['noKtp' => 'NN']);
            } else {
                $noKtp = $dataObj['noKtp'];

                // Only return the 'cifNo' as the API response
                return response()->json([
                    'noKtp' => $noKtp,
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
