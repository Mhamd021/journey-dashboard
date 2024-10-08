<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'user_id' => $this->user_id,
            'post_id' => $this->post_id,
            'comment_info' => $this->comment_info,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
         ];
    }
}
