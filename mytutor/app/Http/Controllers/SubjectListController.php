<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectListController extends Controller
{
    public function saveSubj(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectItem = new subject();
        $newSubjectItem->subject_name = $request->subject_name;
        $newSubjectItem->subject_description = $request->subject_description;
        $newSubjectItem->subject_price = $request->subject_price;
        $newSubjectItem->subject_hour = $request->subject_hour;
        $newSubjectItem->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage(){
        return view('mainpage', ['listSubjects' => subject::all()]);
    }
}
