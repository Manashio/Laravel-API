<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
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
            'id' => $this->id,
            'title' => $this->post_title,
            'content' => $this->post_body,
            'author' => $this->post_author,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'links' => [
                'source' => 'http://127.0.0.1:8000/blogs/'.$this->id,
            ],
        ];
    }
}
