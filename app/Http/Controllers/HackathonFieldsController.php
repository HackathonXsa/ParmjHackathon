<?php

namespace App\Http\Controllers;

use App\Models\HackathonFields;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HackathonFieldsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.name' => 'required',
            'addMoreInputFields.*.body' => 'required',
            'field_id' => 'required'
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            HackathonFields::create(['hackathon_id' => $request['field_id'], 'name' => $value['name'], 'body' => $value['body']]);
        }
     
        return back()->with('success', 'New subject has been added.');
    }

    public function update(HackathonFields $hackathon)
    {
        $inputs = request()->validate([
            'name' => 'required',
            'body' => 'required'
        ]);
     
        $hackathon->name = $inputs['name'];
        $hackathon->body = $inputs['body'];

        $hackathon->update();

        session()->flash('post-updated-message', 'تم تحديث صفحة المجال');
        
        return redirect()->route('hackathon.index');
        // return back()->with('success', 'New subject has been added.');
    }

    public function destroy(HackathonFields $hackathon){

        // $this->authorize('delete', $hackathon);

        $hackathon->delete();

        Session::flash('message', 'Hackathon field was deleted');

        return back();
    }

}
