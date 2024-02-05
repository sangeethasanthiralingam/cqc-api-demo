<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

// class CqcApiController extends Controller
// {
//     public function getInspectionAreas()
//     {
//         $client = new Client();

//         try {
//             $response = $client->get('https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/inspection-areas', [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getOrganisationType()
//     {
//         $client = new Client();

//         try {
//             $response = $client->get('https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/changes/location?startTimestamp=2013-01-01T02%3A33%3A20Z&endTimestamp=2014-01-01T02%3A33%3A20Z', [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getLocations()
//     {
//         $client = new Client();

//         try {
//             $response = $client->get('https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/locations', [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }


//     public function getOneLocation($id)
//     {
//         $client = new Client();

//         try {
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/locations/' . $id;

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getInspectionAreasForLocation($locationId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL with the location ID
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/locations/' . $locationId . '/inspection-areas';

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getProviderInspectionAreasForLocation($locationId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL with the location ID
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/locations/' . $locationId . '/provider-inspection-areas';

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getProviders()
//     {
//         $client = new Client();

//         try {
//             // Construct the URL for retrieving providers
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/providers';

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getOneProvider($providerId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL for retrieving details of a specific provider
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/providers/' . $providerId;

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getInspectionAreasForProvider($providerId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL with the provider ID
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/providers/' . $providerId . '/inspection-areas';

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getLocationsForProvider($providerId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL with the provider ID
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/providers/' . $providerId . '/locations';

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

//     public function getReport($reportId)
//     {
//         $client = new Client();

//         try {
//             // Construct the URL with the report ID
//             $url = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/reports/' . $reportId;

//             $response = $client->get($url, [
//                 'headers' => [
//                     'Accept' => 'application/json',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }
// }


class CqcApiController extends Controller
{
    private $client;

    // Define base URL as a constant
    private const BASE_URL = 'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/4d36bd23-127d-4acf-8903-ba292ea615d4/cqc-syndication-1/1.0.49/m/';

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    private function makeRequest($url)
    {
        try {
            $response = $this->client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getInspectionAreas()
    {
        return response()->json($this->makeRequest(self::BASE_URL . 'inspection-areas'));
    }

    public function getOrganisationType()
    {
        $url = self::BASE_URL . 'changes/location?startTimestamp=2013-01-01T02%3A33%3A20Z&endTimestamp=2014-01-01T02%3A33%3A20Z';
        return response()->json($this->makeRequest($url));
    }

    public function getLocations()
    {
        return response()->json($this->makeRequest(self::BASE_URL . 'locations'));
    }

    public function getOneLocation($id)
    {
        $url = self::BASE_URL . 'locations/' . $id;
        return response()->json($this->makeRequest($url));
    }

    public function getInspectionAreasForLocation($locationId)
    {
        $url = self::BASE_URL . 'locations/' . $locationId . '/inspection-areas';
        return response()->json($this->makeRequest($url));
    }

    public function getProviderInspectionAreasForLocation($locationId)
    {
        $url = self::BASE_URL . 'locations/' . $locationId . '/provider-inspection-areas';
        return response()->json($this->makeRequest($url));
    }

    public function getProviders()
    {
        return response()->json($this->makeRequest(self::BASE_URL . 'providers'));
    }

    public function getOneProvider($providerId)
    {
        $url = self::BASE_URL . 'providers/' . $providerId;
        return response()->json($this->makeRequest($url));
    }

    public function getInspectionAreasForProvider($providerId)
    {
        $url = self::BASE_URL . 'providers/' . $providerId . '/inspection-areas';
        return response()->json($this->makeRequest($url));
    }

    public function getLocationsForProvider($providerId)
    {
        $url = self::BASE_URL . 'providers/' . $providerId . '/locations';
        return response()->json($this->makeRequest($url));
    }

    public function getReport($reportId)
    {
        $url = self::BASE_URL . 'reports/' . $reportId;
        return response()->json($this->makeRequest($url));
    }
}
