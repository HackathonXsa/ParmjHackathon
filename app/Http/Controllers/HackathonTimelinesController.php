<?php

namespace App\Http\Controllers;

use App\Models\HackathonTimelines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HackathonTimelinesController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.name' => 'required',
            'addMoreInputFields.*.body' => 'required',
            'addMoreInputFields.*.position' => 'required',
            'addMoreInputFields.*.date' => 'required',
            'field_id' => 'required'
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            HackathonTimelines::create(['hackathon_id' => $request['field_id'], 'name' => $value['name'], 'body' => $value['body'], 'position' => $value['position'], 'date' => $value['date']]);
        }
     
        return back()->with('success', 'New subject has been added.');
    }

    public function update(HackathonTimelines $hackathon)
    {
        $inputs = request()->validate([
            'name' => 'required',
            'body' => 'required',
            'position' => 'required',
            'date' => 'required',
        ]);
     
        $hackathon->name = $inputs['name'];
        $hackathon->body = $inputs['body'];
        $hackathon->position = $inputs['position'];
        $hackathon->date = $inputs['date'];

        $hackathon->update();

        session()->flash('post-updated-message', 'تم تحديث التاريخ');
        
        return redirect()->route('hackathon.index');
        // return back()->with('success', 'New subject has been added.');
    }

    public function destroy(HackathonTimelines $hackathon){

        // $this->authorize('delete', $hackathon);

        $hackathon->delete();

        Session::flash('message', 'Hackathon timeline was deleted');

        return back();
    }
}
