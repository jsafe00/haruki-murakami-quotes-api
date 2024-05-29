<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use App\Http\Resources\QuoteCollection;
use App\Http\Resources\QuoteResource;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'message' => 'All data showed successfully',
            'data' => new QuoteCollection(Quote::orderBy('created_at', 'desc')->get())
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required|string|max:255',
            'book_id' => 'required|exists:books,id'
        ]);

        $quote = Quote::create($validatedData);

        return response()->json([
            'message' => 'Data saved successfully',   
            'data' => new QuoteResource($quote)
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Quote $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return response()->json([
            'message' => 'Data showed successfully', 
            'data' => new QuoteResource($quote)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Quote $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $quote->update($request->all());
        return response()->json([
            'message' => 'Data updated successfully', 
            'data' => new QuoteResource($quote)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Quote $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return response()->json([
            'message' => 'Data deleted successfully'
        ], 200);
    }
}
