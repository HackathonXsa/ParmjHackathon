<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use App\Models\HackathonPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HackathonController extends Controller
{
    //

    public function index(){

        //$posts = auth()->user()->posts()->paginate();
        $hackathons = Hackathon::paginate(5);
        //$posts = Post::all();

        return view('hackathons.index', ['hackathons'=>$hackathons]);
    }

    public function store(){

        // $this->authorize('create', Hackathon::class);

        $inputs = request()->validate([
            'name'=>'required|min:1|max:255',
            'hackathon_image'=>'required',
            'date'=> 'required',
            'targeted'=> 'required',
            'teamsNum'=> 'required',
            'hackathon_type'=> 'required',
            'body'=>'required'

        ]);

        // if(request('post_image')){
        //     $inputs['post_image'] = request('post_image')->store('images');

        // }

        $new = auth()->user()->hackathons()->create($inputs);
        
        return $this->addPage($new);
    }

    public function addPage(Hackathon $data){

        HackathonPages::create(['hackathon_id' => $data['id']]);

        session()->flash('post-created-message', 'hackathon was created');

        return redirect()->route('hackathon.index');
    }

    public function create(){

        // $this->authorize('create', Hackathon::class);
        
        return view('hackathons.create');
    }

    public function edit(Hackathon $hackathon){

        // $this->authorize('view', $hackathon);

        return view('hackathons.edit', ['hackathons'=>$hackathon]);
    }

    public function update(Hackathon $hackathon){
        $inputs = request()->validate([
            'name'=>'required|min:6|max:255',
            'hackathon_image'=>'required',
            'body'=>'required'


        ]);
        // if(request('post_image')){
        //     $inputs['post_image'] = request('post_image')->store('images');
            $hackathon->hackathon_image = $inputs['hackathon_image'];
        // }
        $hackathon->name = $inputs['name'];
        $hackathon->body = $inputs['body'];

        // $this->authorize('update', $hackathon);

        $hackathon->update();

        session()->flash('post-updated-message', 'تم تحديث الهاكاثون');

        return redirect()->route('hackathon.index');
    }

    public function destroy(Hackathon $hackathon){

        $this->authorize('delete', $hackathon);

        $hackathon->delete();

        Session::flash('message', 'Hackathon was deleted');

        return back();
    }
}
