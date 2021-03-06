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
        $challenge = DB::table('hackathon_challenges')->where('hackathon_id', '=', $id)->get();
        $field = DB::table('hackathon_fields')->where('hackathon_id', '=', $id)->get();
        $timeline = DB::table('hackathon_timelines')->where('hackathon_id', '=', $id)->get();

        return view('hackathon', ['hackathon'=>$hackathon, 'namehacka'=>$name, 'challenges'=>$challenge, 'fields'=>$field, 'timelines'=>$timeline]);
    }
    public function joinus(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);
        $id = $hackathon->hackathon_id;
        $name = Hackathon::find($id);
        $challenge = DB::table('hackathon_challenges')->where('hackathon_id', '=', $id)->get();
        $field = DB::table('hackathon_fields')->where('hackathon_id', '=', $id)->get();
        $timeline = DB::table('hackathon_timelines')->where('hackathon_id', '=', $id)->get();

        $hackathons = DB::table('hackathons')->select('id', 'name')->distinct()->get();


        return view('joinus', ['hackathons'=>$hackathons, 'hackathon'=>$hackathon, 'namehacka'=>$name, 'challenges'=>$challenge, 'fields'=>$field, 'timelines'=>$timeline]);
    }
    public function joinus_store(HackathonPages $hackathon){
        $inputs = request()->validate([
            'name'=>'required|min:1|max:255',
            'phone'=>'required',
            'email'=> 'required',
            'day'=> 'required',
            'month'=> 'required',
            'year'=> 'required',
            'hackathon'=> 'required'
        ]);
        $id = $inputs['hackathon'];
        $name = Hackathon::find($id);
        $date = date_create();
        date_date_set($date, $inputs['year'], $inputs['month'], $inputs['day']);
        
        DB::table('hackathon_users')->insert([
            'hackathon_id' => $id,
            'hackathon_name' => $name->name,
            'name' => $inputs['name'],
            'phone' => $inputs['phone'],
            'email' => $inputs['email'],
            'birthdate' => $date,
            'team_name' => request('team_name'),
            'role' => request('role')
        ]);

        return view('joinus_done', ['hackathon'=>$hackathon, 'namehacka'=>$name]);
    }


    public function edit(HackathonPages $hackathon){

        // $this->authorize('view', $hackathon);
        $id = $hackathon->hackathon_id;
        $challenge = DB::table('hackathon_challenges')->where('hackathon_id', '=', $id)->get();
        $field = DB::table('hackathon_fields')->where('hackathon_id', '=', $id)->get();
        $timeline = DB::table('hackathon_timelines')->where('hackathon_id', '=', $id)->get();

        return view('hackathons.pages.edit', ['hackathons'=>$hackathon, 'challenges'=>$challenge, 'fields'=>$field, 'timelines'=>$timeline]);
    }

    public function update(HackathonPages $hackathon){
        $inputs = request()->validate([
            'first_description'=>'required|min:6|max:255',
            'second_description'=>'required',
            'about'=>'required',
        ]);
        
        // if(request('post_image')){
        //     $inputs['post_image'] = request('post_image')->store('images');
            //$hackathon->hackathon_image = $inputs['hackathon_image'];
        // }
        $hackathon->first_description = $inputs['first_description'];
        $hackathon->second_description = $inputs['second_description'];
        $hackathon->about = $inputs['about'];

        // $this->authorize('update', $hackathon);

        $hackathon->update();

        session()->flash('post-updated-message', '???? ?????????? ???????? ??????????????????');

        return redirect()->route('hackathon.index');
    }
}
