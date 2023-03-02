<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wellsite;
use App\Models\WellsiteRealData;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class WellsitesController extends Controller
{
    public function registerDevice(Request $request){

        $validator = Validator::make($request->all(), [
            'address' => 'required|unique:wellsites',
        ]);

        if (!$validator->fails()) {
            $address = $request->address;
            $wellsite = Wellsite::create(['address' => $address]);

            return response()->json([
                'code' => 200,
                'success' => "Success",
                'data' => $address
            ]);
        }
        else{
            return response()->json([
                'code' => 401,
                'success' => "Failed",
            ]);
        }
    }
    public function getConnectionStatus(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'address' => 'required',
        ]);

        if (!$validator->fails()) {
            $address = $request->address;
            $wellsite = Wellsite::where('address', $address)->first();
            if(isset($wellsite) && $wellsite->status == 1){
                return response()->json([
                    'code' => 200,
                    'success' => "Success",
                    'data' => $address
                ]);
            }
            else{
                return response()->json([
                    'code' => 402,
                    'success' => "Failed",
                ]);
            }
        }
        else{
            return response()->json([
                'code' => 401,
                'success' => "Failed",
            ]);
        }
    }
    public function saveData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
        ]);
        if (!$validator->fails()) {
            $address = $request->address;
            $wellsite = Wellsite::where('address', $address)->first();
            $date = date("Y-m-d h:i:s");
            if(isset($wellsite) && $wellsite->status == 1){
                $data = WellsiteRealData::create([
                    'wellsite_id' => $wellsite->id,
                    'record_time' => $date,
                    'value1' => $request->value1,
                    'value2' => $request->value2,
                    'value3' => $request->value3,
                    'value4' => $request->value4,
                ]);
                return response()->json([
                    'code' => 200,
                    'success' => "Success",
                    'data' => $address
                ]);
            }
            else{
                return response()->json([
                    'code' => 402,
                    'success' => "Failed",
                ]);
            }
        }
        else{
            return response()->json([
                'code' => 401,
                'success' => "Failed",
            ]);
        }
    }
}
