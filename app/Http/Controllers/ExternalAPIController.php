<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;



class ExternalAPIController extends Controller
{
    public function index(Request $request)
    {
        try {
            $apiUrl = 'https://thefishapi.com/api/fish';
            $client = new \GuzzleHttp\Client(['verify' => false]);
            $request = new \GuzzleHttp\Psr7\Request('GET', $apiUrl);
            $response = $client->send($request);
            $result = json_decode($response->getBody()->getContents());
            return response()->json($result);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
