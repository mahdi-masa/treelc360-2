<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Http\Requests\CampainSubmitValidation;
use App\Models\Campain;
use Dflydev\DotAccessData\Data;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use IPPanel\Client;
use IPPanel\Errors\ResponseCodes;
use Morilog\Jalali\Jalalian;

class CampainController extends Controller
{
    private $sms_service;

    public function __construct()
    {
        $this->sms_service = new Client((string)env('FARAZ-API', '45n-5JNW1T3LGm5krJ31hq_8hTYMXtp5gm_GB3l39NY='));
    }

    public function submit(CampainSubmitValidation $request)
    {
        $data = $request->validated();
        try {

            // Handle file upload
            
            if ($request->hasFile('campain-poster')) {
                $currentYear = Jalalian::now()->format('Y');
                $currentMonth = Jalalian::now()->format('m');
                $file = $request->file('campain-poster');
                $filename = 'پویش ها'.'/'.$currentYear.'/'.$currentMonth.'/'.$data['campain-name'].$file->getClientOriginalExtension();
                Storage::disk('s3')->put($filename, file_get_contents($file));
            }
            
            DB::beginTransaction();
            // Create campaign
            DB::table('campain')->insert([
                'campain-name' => $data['campain-name'],
                'campain-purpose' => $data['campain-purpose'] ?? null,
                'leader-firstname' => $data['leader-firstname'],
                'leader-lastname' => $data['leader-lastname'],
                'leader-phone' => $data['leader-phone'],
                'description' => $data['description'] ?? null,
                'start-date' => $data['start-date'] ?? null,
                'finish-date' => $data['finish-date'] ?? null,
                'geometry-location' => $data['geometry-location'] ?? null,
                'poster-slug' => $filename ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Send SMS notifications
            $patternValues = [
                "name" => $data['leader-firstname'],
                "family" => $data['leader-lastname'],
                "campain_name" => $data['campain-name']
            ];

            $leaderMessageId = $this->sms_service->sendPattern(
                "9z7dwqk8q9f48u2",
                "983000505",
                $data['leader-phone'],
                $patternValues
            );

            $adminMessageId = $this->sms_service->sendPattern(
                "7g7os7ylnzmt63l",
                "983000505",
                "09130282451",
                $patternValues
            );


            DB::commit();

            return back()->with('status', "true");
        }
        catch (Exception $e) { // ippanel error
            DB::rollBack();
            return back()->with('status', "false");
        }
    }

    
}
