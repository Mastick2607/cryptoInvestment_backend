<?php

namespace App\Http\Controllers;

use App\Models\Crytocurrencys;
use Illuminate\Http\Request;

class CrytocurrencysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $response = Http::withHeaders([
                'X-CMC_PRO_API_KEY' => env('CMC_API_KEY'), // o pon directamente tu API key aquí
            ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest');
    
            return response()->json($response->json());
         
    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Crytocurrencys $crytocurrencys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crytocurrencys $crytocurrencys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crytocurrencys $crytocurrencys)
    {
        //
    }
}
