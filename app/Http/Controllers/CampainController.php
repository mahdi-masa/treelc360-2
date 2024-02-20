<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\CampainSubmitValidation;
use App\Models\Campain;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use IPPanel\Client;
use Morilog\Jalali\Jalalian;

class CampainController extends Controller
{
    private $sms_service;

    public function __construct()
    {
        $this->sms_service = new Client((string)env('FARAZ-API'));
    }

    public function submit(CampainSubmitValidation $request)
    {
        try {
            $data = $request->validated();

            // Handle file upload
            
            if ($request->hasFile('campain-poster')) {
                $currentYear = Jalalian::now()->format('Y');
                $currentMonth = Jalalian::now()->format('m');
                $file = $request->file('campain-poster');
                $filename = 'پویش ها'.'/'.$currentYear.'/'.$currentMonth.'/'.$data['campain-name'].$file->getClientOriginalExtension();
                Storage::disk('s3')->put($filename, file_get_contents($file));
            }
            
            // Create campaign
            Campain::create([
                'campain-name' => $data['campain-name'],
                'leader-firstname' => $data['leader-firstname'],
                'leader-lastname' => $data['leader-lastname'],
                'leader-phone' => $data['leader-phone'],
                'description' => $data['description'] ?? null,
                'start-date' => $data['start-date'] ?? null,
                'finish-date' => $data['finish-date'] ?? null,
                'geometry-location' => $data['geometry-location'] ?? null,
                'poster-slug' => $filename ?? null,
            ]);

            // Send SMS notifications
            $patternValues = [
                "name" => $data['leader-firstname'],
                "family" => $data['leader-lastname'],
                "campain_name" => $data['campain-name']
            ];

            $adminMessageId = $this->sms_service->sendPattern(
                "7g7os7ylnzmt63l",
                "+989981801485",
                "989135333800",
                $patternValues
            );

            $leaderMessageId = $this->sms_service->sendPattern(
                "9z7dwqk8q9f48u2",
                "+989981801485",
                "989135333800",
                $patternValues
            );

            return back()->with('status', "true");
        } catch (Exception $e) {
            return $e->getMessage().$e->getLine().$e->getFile();
        }
    }
}
