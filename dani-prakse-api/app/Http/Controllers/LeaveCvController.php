<?php

namespace App\Http\Controllers;

use App\Http\Resources\LeaveCVResource;
use App\Models\LeaveCV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveCvController extends BaseController
{
    //store cv file in storage and create new record in database

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required',
            'prezime' => 'required',
            'broj_telefona' => 'required',
            'email' => 'required',
            'cv' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->error('Validation Error', $validator->errors());
        }

        $input = $request->all();

        $file = $request->file('cv');
        $fileName = time() . "__" . $file->getClientOriginalName();
        $file->move('storage/cv', $fileName);
        $input['cv_putanja'] = $fileName;

        $leaveCv = LeaveCV::create($input);

        return $this->success(new LeaveCVResource($leaveCv), 'CV je sacuvan uspesno!');
    }
}
