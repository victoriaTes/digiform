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
        $transId = 'StR5ncJ9njKnFSP';
        $productCode = 'OPENCIFKYC';
        $kosong = "";
        $hobby = "0";
        $legal = "1";
        $currency = "IDR";
        $flag = "2";
        $golPemilik = "886";
        $jumAnak = "00";
        $kodeAo = "DG";




        $dataToSend = [

            //PRIBADI
            'noKtp' => $request->input('noKtp'),
            'noNPWP' => $request->input('noKtp'),
            'namaCust' => $request->input('namaCust'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'address3' => $request->input('address3'),
            'address4' => $request->input('address4'),
            'address5' => $request->input('address5'),
            'propinsi' => $request->input('propinsi'),
            'zipCode' => $request->input('kodepos'),

            //ALAMAT SAAT INI
            'domisili1' => $request->input('dom1'),
            // 'nomorrumah'=> $request->input('normh'),
            'domisili2' => $request->input('dom2'),
            'domisili3' => $request->input('dom3') . ', ' . $request->input('dom4'),
            'domisili4' => $request->input('dom5') . ', ' . $request->input('propdomi'),
            // 'zipdom'=> $request->input('kodeposdomi'), 'BANTEN',

            //DATAPRIBADI
            'tempatLahir' => $request->input('tempatLahir'),
            'tanggalLahir' => $request->input('datepicker1'),
            // 'tglLahir' => $request->input('datepicker1'),
            'agama' => $request->input('agama'),
            'jenisKelamin' => $request->input('sex'),
            'negaraAsal' => $request->input('negara'),
            'statusNikah' => $request->input('statusperkawinan'),
            'pendAkhir' => $request->input('pendidikan'),
            'statusRes' => $request->input('statusrumah'),
            'motherMaidenName' => $request->input('motherMaidenName'),
            'emailAddr' => $request->input('email'),
            'mobilePhone' => $request->input('nohp'),

            //INFORMASI DATA PEKERJAAN
            'industryName' => $request->input('namaperusahaan'),
            'addressCompany' => $request->input('alamatPerusahaan') . ', ' . $request->input('rtperusahaan') . ', ' . $request->input('rwperusahaan') . ', ' . $request->input('kelurahanperusahaan') . ', ' . $request->input('kecamatanperusahaan') . ', ' . $request->input('propinsiperusahaan'),
            'City' => $request->input('kabupatenperusahaan'),
            'zipCode1' => $request->input('zipCode1'),
            'companyNumber' => $request->input('teleponperusahaan'),
            // 'noPhone1' => $request->input('noPhone1'),
            // 'noPhone2' => $request->input('noPhone2'),
            // 'areaPhone1' => $request->input('areaPhone1'),
            // 'areaPhone2' => $request->input('areaPhone2'),
            'jenisKerja' => $request->input('jobPositionCode'),
            'industryType' => $request->input('bidangusaha'),
            'jobPosition' => $request->input('jabatan'),

            //INFORMASI DATA KEUANGAN
            // 'purposeOpenAccount' => $request->input('pembukanrekening'),
            'purposeOpenAccountDesc' => $request->input('pembukanrekening'),
            'sourceFund' => $request->input('sumberdana'),
            // 'sourceFund' => $request->input('danatambahan'),
            'tujuanGuna' => $request->input('pengguanaandana'),


            //ESTIMASI PERKIRAAN
            // 'estimatedTransaction' => $request->input('trxsetorantunai'),
            'estimatedTransactionDesc' => $request->input('trxsetorantunai'),
            // 'estimatedTransaction' => $request->input('trxpenarikantunai'),
            // 'estimatedTransactionDesc' => $request->input('trxpenarikantunai'),

            // 'estimatedTransaction' => $request->input('trxsetorannontunai'),
            'estimatedTransactionDesc' => $request->input('trxsetorannontunai'),
            // 'estimatedTransaction' => $request->input('trxpenarikannontunai'),
            // 'estimatedTransactionDesc' => $request->input('trxpenarikannontunai'),


            //FREKUENSI PERKIRAAN
            // 'frequencyTransaction' => $request->input('setorantunai'),
            'frequencyTransactionDesc' => $request->input('setorantunai'),
            // 'frequencyTransaction' => $request->input('penarikantunai'),
            // 'frequencyTransactionDesc' => $request->input('penarikantunai'),

            // 'frequencyTransaction' => $request->input('setorannontunai'),
            // 'frequencyTransactionDesc' => $request->input('setorannontunai'),
            // 'frequencyTransaction' => $request->input('penarikannontunai'),
            // 'frequencyTransactionDesc' => $request->input('penarikannontunai'),

            //PRODUCT
            'tipeRekening' => $request->input('tabungan'),

            //SUMBER DANA SETORAN
            // 'transfer' => $request->input('transfer'),
            // 'nilaisetor' => $request->input('nilaisetor'),

            //CATATAN NASABAH
            // 'catatan' => $request->input('catatan'),

            //DEFAULT MUNGKIN
            'avgTransaction' => $request->input('avgTransaction'),
            'avgTransactionDesc' => $request->input('avgTransactionDesc'),
            'ext1' => $kosong,
            'purposeFundDesc' => $request->input('purposeFundDesc'),
            'purposeOfDataUse' => $request->input('purposeOfDataUse'),
            'purposeOfDataUseDesc' => $request->input('purposeOfDataUseDesc'),
            'incomeRange' => $request->input('incomeRange'),
            'incomeRangeDesc' => $request->input('incomeRangeDesc'),

            //AML
            'idNas' => $request->input('idNas'),
            'infoLain' => $request->input('infoLain'),
            'jumTrx' => $request->input('jumTrx'),
            'kegUsaha' => $request->input('kegUsaha'),
            'lokasiUsaha' => $request->input('lokasiUsaha'),
            'profNasabah' => $request->input('profNasabah'),
            'resumAkhir' => $request->input('resumAkhir'),
            'strukPemilik' => $request->input('strukPemilik'),

            //DEFAULT
            'branchCode' => $request->input('cabang'),
            'productCode' => $productCode,
            'transactionId' => $transId,
            'msgId' => $msg,
            'Cellular' => $kosong,
            'City1' => $kosong,
            'Distric' => $request->input('address4'),
            'Ext2' => $kosong,
            'Gender' => $kosong,
            'Hobby' => $hobby,
            'Hp1' => $kosong,
            'Legal' => $legal,
            'Prov1' => $kosong,
            'Religion1' => $kosong,
            'Village' => $request->input('address3'),
            'accTujuan' => $kosong,
            'addMsg1' => $kosong,
            'addMsg2' => $kosong,
            'addMsg3' => $kosong,
            'avEarning' => $kosong,

            'benefAddr1' => $kosong,
            'benefAddr2' => $kosong,
            'benefDom1' =>  $kosong,
            'benefDom2' =>  $kosong,
            'benefDom3' =>  $kosong,
            'benefDom4' =>  $kosong,
            'benefName' =>  $kosong,
            'benefOwner' => $kosong,
            'birthPlace' => $request->input('tempatlahir'),
            'cifType' => $legal,
            'currency' => $currency,
            'empAddress2' => $kosong,
            'flagProcess' => $flag,
            'fundPurpose1' => $kosong,
            'golPemilik' => $golPemilik,
            'indCode' => $request->input('bidangusaha'),
            'jenisId' => $legal,
            'jenisKerja' => $request->input('jenisKerja'),
            'jobPositionCode' => $request->input('jobPositionCode'),
            'jumAnak' => $jumAnak,
            'jumIstri' => $request->input('jumIstri'),
            'jumTanggung' => $jumAnak,
            'kodeAo' => $request->input('kodeAo'),
            'kodeTelp' => $kosong,
            'lamaKerja' => $kosong,
            'marStatus' => $kosong,
            'noCif' => $kosong,
            'noTelp' => $kosong,
            'otherInfo' => $kosong,
            'purposeFund' => $request->input('purposeFund'),
            'relFlag' => $hobby,
            'resident' => $legal,
            'riskFactor' => $hobby,

            'shippingAddress' => $request->input('shippingAddress'),
            'shippingAddressDes' => $request->input('shippingAddressDes'),
            'sourceFund1' => $request->input('sourceFund1'),
            'sourceIncome' => $request->input('sourceIncome'),
            'sumberHasil' => $request->input('sumberHasil'),
            
            'tanggalAkhir' => $request->input('tanggalAkhir'),
            'tanggalTerbit' => $request->input('tanggalTerbit'),
            'yearResiden' => $request->input('yearResiden'),
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
