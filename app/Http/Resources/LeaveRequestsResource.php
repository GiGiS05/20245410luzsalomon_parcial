<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaveRequestsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'date'=>$this->date_solicited,
            'motive'=>$this->motive,
            'status'=>$this->status,
            'student_id'=>$this->student_id,
            'created_at'=>$this->created_at
            ];
    }
}
