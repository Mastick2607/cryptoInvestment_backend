<?php

namespace App\Http\Controllers;

use App\Models\Price_history;
use Illuminate\Http\Request;

class PriceHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getPriceHistory(Request $request, $id)
    {
        $request->validate([
            'from' => 'required|date',
            'to' => 'required|date|after_or_equal:from',
        ]);
    
        $history = Price_history::where('cryptocurrency_id', $id)
            ->whereBetween('fetched_at', [$request->from, $request->to])
            ->orderBy('fetched_at')
            ->get();
    
        return response()->json($history);
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
    public function show(Price_history $price_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price_history $price_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price_history $price_history)
    {
        //
    }
}
