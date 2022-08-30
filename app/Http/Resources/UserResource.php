<?php

namespace App\Http\Resources;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResource extends ResourceCollection
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
            'data' => $this->collection->map(function($data) {
                return [
                    'id'         => $data->id,
                    'name'       => $data->name,
                    'email'       => $data->email,
                    'department' => $data->department,
                    'created_at'    => Carbon::parse($data->created_at)->toDateTimeString()
                ];
            }),
            'links' => [
                'count' => $this->count(),
            ],
        ];
    }
}
