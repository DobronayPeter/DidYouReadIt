<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user" => new UserResource($this->user()),
            "book" => new BookResource($this->book()),
            "rating" => $this->rating,
            "description" => $this->description,
            "progress" => $this->progress,
            "shared" => $this->shared
        ];
    }
}
