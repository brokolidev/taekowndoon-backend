<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'level' => $this->level,
            'timeslot' => $this->timeslot,
            'classSize' => count($this->students),
            'mainInstructor' => $this->mainInstructor,
            'dow' => date('l', strtotime("Sunday +{$this->dow} days")),
            'levelImgUrl' => 'https://picsum.photos/24',
        ];
    }
}
