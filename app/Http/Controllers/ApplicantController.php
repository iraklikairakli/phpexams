<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantRequest;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicant_list', ['applicants' => $applicants]);
    }

    public function hire(Applicant $applicant)
    {
        $applicant->update(['is_hired' => 1]);
        return back();
    }

    public function edit(Applicant $applicant)
    {
        return view('edit', ['applicant' => $applicant]);
    }

    public function update($id, ApplicantRequest $request)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->update($request->toArray());
        return back();
    }
}

