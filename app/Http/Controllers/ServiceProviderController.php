<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ServiceProviderController extends Controller
{
    public function getServiceProviderCompany()
    {
        $client = new Client();

        try {
            $url = 'https://api.cqc.org.uk/v1/service-provider-companies';
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getServiceProviderRegions()
    {
        $client = new Client();

        try {
            $url = 'https://api.cqc.org.uk/v1/service-provider-regions';
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getServiceProviderRegionPostalCodes($regionId)
    {
        $client = new Client();

        try {
            $url = "https://api.cqc.org.uk/v1/service-provider-regions/$regionId/postal-codes";
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getServiceProviderRegionServices($regionId)
 {
        $client = new Client();

        try {
            $url = "https://api.cqc.org.uk/v1/service-provider-regions/$regionId/services";
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getServiceProviderUsers()
    {
        $client = new Client();

        try {
            $url = 'https://api.cqc.org.uk/v1/service-provider-users';
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}