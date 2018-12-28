<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'type'          => 'user',
            'id'            => (string)$this->id,
            'attributes'    => [
                'first_name'  => $this->first_name,
                'last_name'   => $this->last_name,
                'nickname'    => $this->nickname,
            ],
        ];
    }
}
