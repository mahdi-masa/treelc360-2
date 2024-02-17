<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampainSubmitValidation;
use App\Models\Campain;
use Illuminate\Http\Request;

class CampainController extends Controller
{
    public function submit(CampainSubmitValidation $request){
        $data = $request->validated();
        // return $request->all();
        // return $data;
        $description = $data['description'] ?? null;
        $start_date = $data['start-date'] ?? null;
        $finish_date = $data['finish-date'] ?? null;
        $geometry_location = $data['geometry-location'] ?? null;

        
    
        Campain::create([
            'leader-firstname' => $data['leader-firstname'],
            'leader-lastname' => $data['leader-lastname'],
            'leader-phone' => $data['leader-phone'],
            'name' => $data['name'],
            'description' => $description,
            'start-date' => $start_date,
            'finish-date' => $finish_date,
            'geometry-location' => $geometry_location,
            
        ]);

        return back()->with('status', "پویش با موفقیت ایجاد شد");
    }
}
