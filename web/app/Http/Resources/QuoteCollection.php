<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Book;

class QuoteCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($quote) use ($request) {
                    return (new QuoteResource($quote))->toArray($request);
                })
        ];
    }

    public function with($request)
    {
        return [
            'included' => $this->collection->pluck('book')->unique()->values()->map(function ($book) {
                    return new BookResource($book);
                }),
            'meta' => [
                'author' => 'Josafe Balili',
                'email' => 'josafebalili@gmail.com',
                'github' => 'https://github.com/jsafe00',
                'github_repo' => 'https://github.com/jsafe00/haruki-murakami-quotes-api'
            ]
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Content-Type', 'application/vnd.api+json');
    }
}
