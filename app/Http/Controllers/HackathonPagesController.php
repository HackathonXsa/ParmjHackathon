<?php

namespace App\Http\Controllers;

use App\Models\HackathonPages;
use Illuminate\Http\Request;

class HackathonPagesController extends Controller
{
    //

    public function home(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);

        return view('hackathon', ['hackathon'=>$hackathon]);
    }


    public function edit(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);

        return view('hackathons.pages.edit', ['hackathons'=>$hackathon]);
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
