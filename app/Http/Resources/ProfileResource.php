<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'title' => $this->title,
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'description' => $this->description,
            'languages' => $this->languages,
            'address' => $this->description,
            'resume_path' => $this->resume_path,
            'education' => $this->education,
            'desired_salary' => $this->desired_salary,
            'birth_date' => Carbon::parse($this->birth_date)->format('Y-m-d'),
            'country_id' => $this->country_id,
            'city_id' => $this->city_id,
            'experience_id' => $this->experience_id,
            'view_count' => $this->view_count,
            'category_id' => $this->category_id
        ];
    }
}
