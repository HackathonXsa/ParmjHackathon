<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use App\Models\HackathonFields;
use App\Models\HackathonPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HackathonPagesController extends Controller
{
    //

    public function home(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);
        $id = $hackathon->hackathon_id;
        $name = Hackathon::find($id);
        $field = DB::table('hackathon_fields')->where('hackathon_id', '=', $id)->get();

        return view('hackathon', ['hackathon'=>$hackathon, 'namehacka'=>$name, 'fields'=>$field]);
    }


    public function edit(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);
        $id = $hackathon->hackathon_id;
        $field = DB::table('hackathon_fields')->where('hackathon_id', '=', $id)->get();

        return view('hackathons.pages.edit', ['hackathons'=>$hackathon, 'fields'=>$field]);
    }

    public function update(HackathonPages $hackathon){
        $inputs = request()->validate([
            'first_description'=>'required|min:6|max:255',
            'second_description'=>'required',
            'about'=>'required',
            'challanges'=>'required',
        ]);
        
        // if(request('post_image')){
        //     $inputs['post_image'] = request('post_image')->store('images');
            //$hackathon->hackathon_image = $inputs['hackathon_image'];
        // }
        $hackathon->first_description = $inputs['first_description'];
        $hackathon->second_description = $inputs['second_description'];
        $hackathon->about = $inputs['about'];
        $hackathon->challanges = $inputs['challanges'];

        // $this->authorize('update', $hackathon);

        $hackathon->update();

        session()->flash('post-updated-message', 'تم تحديث صفحة الهاكاثون');

        return redirect()->route('hackathon.index');
    }
}
