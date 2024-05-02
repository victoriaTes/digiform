<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KycCifController extends Controller
{
    private $apiUrl = 'http://172.21.20.75:5670';
    private $msgHmac = '1c1cb77caac075bee040e4011ee350879b1b676ebacfbbeb2d363df5ff12385d';
    private $msgUserId = '566BVICTORIA';

    public function index(Request $request)
    {
        $endpoint = 'kycCif';
        $msg = 12345;
        $transId = 'OPNKY20230505';
        $productCode = 'OPENCIFKYC';


        $dataToSend = [
            'transactionId' => $transId,
            'msgId' => $msg,
            'productCode' => $productCode,
            'Cellular' => $request->input('Cellular'),
            'City' => $request->input('City'),
            'City1' => $request->input('City1'),
            'Distric' => $request->input('Distric'),
            'Ext2' => $request->input('Ext2'),
            'Gender' => $request->input('Gender'),
            'Hobby' => $request->input('Hobby'),
            'Hp1' => $request->input('Hp1'),
            'Legal' => $request->input('Legal'),
            'Prov1' => $request->input('Prov1'),
            'Religion1' => $request->input('Religion1'),
            'Village' => $request->input('Village'),
            'accTujuan' => $request->input('accTujuan'),
            'addMsg1' => $request->input('addMsg1'),
            'addMsg2' => $request->input('addMsg2'),
            'addMsg3' => $request->input('addMsg3'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'address3' => $request->input('address3'),
            'address4' => $request->input('address4'),
            'address5' => $request->input('address5'),
            'addressCompany' => $request->input('addressCompany'),
            'agama' => $request->input('agama'),
            'areaPhone1' => $request->input('areaPhone1'),
            'areaPhone2' => $request->input('areaPhone2'),
            'avEarning' => $request->input('avEarning'),
            'avgTransaction' => $request->input('avgTransaction'),
            'avgTransactionDesc' => $request->input('avgTransactionDesc'),
            'benefAddr1' => $request->input('benefAddr1'),
            'benefAddr2' =>  $request->input('benefAddr2'),
            'benefDom1' =>  $request->input('benefDom1'),
            'benefDom2' =>  $request->input('benefDom2'),
            'benefDom3' =>  $request->input('benefDom3'),
            'benefDom4' =>  $request->input('benefDom4'),
            'benefName' =>  $request->input('benefName'),
            'benefOwner' => $request->input('benefOwner'),
            'birthPlace' => $request->input('benefAddr1'),
            'branchCode' => $request->input('branchCode'),
            'cifType' => $request->input('cifType'),
            'companyNumber' => $request->input('companyNumber'),
            'currency' => $request->input('currency'),
            'domisili1' => $request->input('domisili1'),
            'domisili2' => $request->input('domisili2'),
            'domisili3' => $request->input('domisili3'),
            'domisili4' => $request->input('domisili4'),
            'emailAddr' => $request->input('emailAddr'),
            'empAddress2' => $request->input('empAddress2'),
            'estimatedTransaction' => $request->input('estimatedTransaction'),
            'estimatedTransactionDesc' => $request->input('estimatedTransactionDesc'),
            'ext1' => $request->input('ext1'),
            'flagProcess' => $request->input('flagProcess'),
            'frequencyTransaction' => $request->input('frequencyTransaction'),
            'frequencyTransactionDesc' => $request->input('frequencyTransactionDesc'),
            'fundPurpose1' => $request->input('fundPurpose1'),
            'golPemilik' => $request->input('golPemilik'),
            'idNas' => $request->input('idNas'),
            'incomeRange' => $request->input('incomeRange'),
            'incomeRangeDesc' => $request->input('incomeRangeDesc'),
            'indCode' => $request->input('indCode'),
            'industryName' => $request->input('industryName'),
            'industryType' => $request->input('industryType'),
            'infoLain' => $request->input('infoLain'),
            'jenisId' => $request->input('jenisId'),
            'jenisKelamin' => $request->input('jenisKelamin'),
            'jenisKerja' => $request->input('jenisKerja'),
            'jobPosition' => $request->input('jobPosition'),
            'jobPositionCode' => $request->input('jobPositionCode'),
            'jumAnak' => $request->input('jumAnak'),
            'jumIstri' => $request->input('jumIstri'),
            'jumTanggung' => $request->input('jumTanggung'),
            'jumTrx' => $request->input('jumTrx'),
            'kegUsaha' => $request->input('kegUsaha'),
            'kodeAo' => $request->input('kodeAo'),
            'kodeTelp' => $request->input('kodeTelp'),
            'lamaKerja' => $request->input('lamaKerja'),
            'lokasiUsaha' => $request->input('lokasiUsaha'),
            'marStatus' => $request->input('marStatus'),
            'mobilePhone' => $request->input('mobilePhone'),
            'motherMaidenName' => $request->input('motherMaidenName'),
            'namaCust' => $request->input('namaCust'),
            'negaraAsal' => $request->input('negaraAsal'),
            'noCif' => $request->input('noCif'),
            'noKtp' => $request->input('noKtp'),
            'noNPWP' => $request->input('noNPWP'),
            'noPhone1' => $request->input('noPhone1'),
            'noPhone2' => $request->input('noPhone2'),
            'noTelp' => $request->input('noTelp'),
            'otherInfo' => $request->input('otherInfo'),
            'pendAkhir' => $request->input('pendAkhir'),
            'profNasabah' => $request->input('profNasabah'),
            'propinsi' => $request->input('propinsi'),
            'purposeFund' => $request->input('purposeFund'),
            'purposeFundDesc' => $request->input('purposeFundDesc'),
            'purposeOfDataUse' => $request->input('purposeOfDataUse'),
            'purposeOfDataUseDesc' => $request->input('purposeOfDataUseDesc'),
            'purposeOpenAccount' => $request->input('purposeOpenAccount'),
            'purposeOpenAccountDesc' => $request->input('purposeOpenAccountDesc'),
            'relFlag' => $request->input('relFlag'),
            'resident' => $request->input('resident'),
            'resumAkhir' => $request->input('resumAkhir'),
            'riskFactor' => $request->input('riskFactor'),
            'shippingAddress' => $request->input('shippingAddress'),
            'shippingAddressDes' => $request->input('shippingAddressDes'),
            'sourceFund' => $request->input('noKsourceFundtp'),
            'sourceFund1' => $request->input('sourceFund1'),
            'sourceIncome' => $request->input('sourceIncome'),
            'statusNikah' => $request->input('statusNikah'),
            'statusRes' => $request->input('statusRes'),
            'strukPemilik' => $request->input('strukPemilik'),
            'sumberHasil' => $request->input('sumberHasil'),
            'tanggalAkhir' => $request->input('tanggalAkhir'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'tanggalTerbit' => $request->input('tanggalTerbit'),
            'tempatLahir' => $request->input('tempatLahir'),
            'tglLahir' => $request->input('tglLahir'),
            'tipeRekening' => $request->input('tipeRekening'),
            'tujuanGuna' => $request->input('tujuanGuna'),
            'yearResiden' => $request->input('yearResiden'),
            'zipCode' => $request->input('zipCode'),
            'zipCode1' => $request->input('zipCode1'),
        ];

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

            return response()->json([
                'cifNo' => $dataObj['cifNo'],
                'reffNo' => $dataObj['reffNo'],
                'nomorRek' => $dataObj['nomorRek'],
                'namaRekening' => $dataObj['namaRekening'],
                'tipeRekening' => $dataObj['tipeRekening'],
                'tipePenggunaan' => $dataObj['tipePenggunaan'],
                'tglBukaRekening' => $dataObj['tglBukaRekening'],
                'mataUang' => $dataObj['mataUang'],
                'sektorEkonomi' => $dataObj['sektorEkonomi'],
                'lokasi' => $dataObj['lokasi'],
                'timeStamp' => $dataObj['timeStamp'],
                'respCode' => $dataObj['respCode'],
                'message' => $dataObj['message'],

            ]);
        } else {
            // Handle error case
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
