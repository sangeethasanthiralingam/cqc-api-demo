<?php

use App\Http\Controllers\CqcApiController;
use App\Http\Controllers\ServiceProviderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cqc-api/inspection-areas', [CqcApiController::class, 'getInspectionAreas']);
Route::get('/cqc-api/organisation_type', [CqcApiController::class, 'getOrganisationType']);
Route::get('/cqc-api/locations', [CqcApiController::class, 'getLocations']);
Route::get('/cqc-api/location/{id}', [CqcApiController::class, 'getOneLocation']);
Route::get('/cqc-api/locations/{locationId}/inspection-areas', [CqcApiController::class, 'getInspectionAreasForLocation']);
Route::get('/cqc-api/locations/{locationId}/provider-inspection-areas', [CqcApiController::class, 'getProviderInspectionAreasForLocation']);
Route::get('/cqc-api/providers', [CqcApiController::class, 'getProviders']);
Route::get('/cqc-api/providers/{providerId}', [CqcApiController::class, 'getOneProvider']);
Route::get('/cqc-api/providers/{providerId}/inspection-areas', [CqcApiController::class, 'getInspectionAreasForProvider']);
Route::get('/cqc-api/providers/{providerId}/locations', [CqcApiController::class, 'getLocationsForProvider']);
Route::get('/cqc-api/reports/{reportId}', [CqcApiController::class, 'getReport']);

Route::get('/cqc-api/locations/{locationId}/postal-code', [CqcApiController::class, 'getPostalCode']);
Route::get('/cqc-api/locations/{locationId}/service-types', [CqcApiController::class, 'getServiceTypes']);

Route::get('/providers/{providerId}/region', [CqcApiController::class, 'getRegion']);
Route::get('/providers/{providerId}/users', [CqcApiController::class, 'getUsers']);




Route::get('/service-provider/regions/{regionId}/postal-codes', 'ServiceProviderController@getServiceProviderRegionPostalCodes');
Route::get('/service-provider/regions/{regionId}/services', 'ServiceProviderController@getServiceProviderRegionServices');


