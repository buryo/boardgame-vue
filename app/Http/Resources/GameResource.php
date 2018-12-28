<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            'type'          => 'game',
            'id'            => (string)$this->id,
            'attributes'    => [
                'name'          => $this->name,
                'description'   => $this->description,
                'minPlayers'    => $this->minPlayers,
                'maxPlayers'    => $this->maxPlayers,
            ],
        ];
    }
}
