<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'type' => 'book',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'image' => $this->image
            ]
        ];
    }
}
