<?php

namespace App\Http\Controllers;

use App\Models\HackathonChallenges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HackathonChallengesController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.name' => 'required',
            'field_id' => 'required'
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            HackathonChallenges::create(['hackathon_id' => $request['field_id'], 'name' => $value['name']]);
        }
     
        return back()->with('success', 'New subject has been added.');
    }

    public function update(HackathonChallenges $hackathon)
    {
        $inputs = request()->validate([
            'name' => 'required',
        ]);
     
        $hackathon->name = $inputs['name'];

        $hackathon->update();

        session()->flash('post-updated-message', 'تم تحديث التحدي');
        
        return redirect()->route('hackathon.index');
        // return back()->with('success', 'New subject has been added.');
    }

    public function destroy(HackathonChallenges $hackathon){

        // $this->authorize('delete', $hackathon);
        $hackathon->delete();

        Session::flash('message', 'Hackathon field was deleted');

        return back();
    }
}
