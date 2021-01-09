<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\JsonResource;


class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'quote',
            'id' => $this->id,
            'attributes' => [
                'text' => $this->text
            ],
            'relationships' => [
                'book' => [
                    'data' => [
                        'type' => 'book',
                        'id' => $this->book_id,
                        'title' => $this->book->title
                    ]
                ]
            ]
        ];
    }

    public function with($request)
    {
        return ['included' => [new BookResource($this->book)]];
    }
}
