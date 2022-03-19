<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;

 use  Illuminate\Http\Request;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;



class HomeController extends Controller
{

    public function index(Request $request)
    {
        $posts=Post::orderBy('id','desc')->paginate(3);
             Log::warning($posts);
             \Debugbar::warning($posts);
//           dump($request->session()->all());
//        $request->session()->put('test','Test value');
//        session(['cart'=>[
//            ['id'=>1,'title'=>'Product 1' ],
//            ['id'=>2,'title'=>'Product 2' ],
//
//        ]]);
//           dump(session()->all());
//            dump(session('test'));
//            dump(session('cart')[1]['title']);
//            dump($request->session()->get('cart')[0]['title']);
//            $request->session()->push('cart',['id'=>3,'title'=>'Product 3']);
//        dump($request->session()->pull('test'));
        //cleart sessioan
//        $request->session()->forget('test');
        //all sessioan clear
//        session()->flush();
//        Cache::put('key','Value',60);
//        dump(Cache::get('key'));
        //delete cash
//        Cache::forget('key');
        //all delete cash
//        Cache::flush();
////        Cache::pull('key');
//        dump(Cache::get('key'));
//        if (Cache::has('posts'))
//        {
//            $posts  =Cache::get('posts');
//        }else{
            //$posts=Post::orderBy('id','desc')->get();
//            Cache::put('posts',$posts);
//        }


//        dump(session()->all());

    // Cookie::queue('test','TestCokkie',1);
//               dump(Cookie::get('test'));
//               dump($request->cookie('test'));
        //  Cookie::queue(Cookie::forget('test'));
//        dump(Cookie::get('test'));
             $title='Home Page';


    //   $posts=Post::orderBy('id','desc')->get();


        return view('home',compact('title','posts'));
     }
    public function test()
    {
        return __METHOD__;
    }
    public function create()
    {
        $title='Create Post';
        $rubrics=Rubric::pluck('title','id')->all();
        return view('create',compact('title','rubrics'));
    }
    public function  store( Request $request)
    {
//        dump($request->input('title'));
//        dump($request->input('content'));
//        dump($request->input('rubric_id'));
        $this->validate($request,[
                'title'=>'required:min:5|max:10',
                'content'=>'required',
                'rubric_id'=>'integer',
            ]);
//        $rules=[
//            'title'=>'required:min:5|max:10',
//            'content'=>'required',
//            'rubric_id'=>'integer',
//        ];
//        $messages=[
//            'title.required'=>'Zapolnite pole nazvanie',
//            'title.min'=>'Minimum 5 simvol',
//            'rubric_id.integer'=>'viberite rybricu iz list',
//        ];
//        $validator=Validator::make($request->all(),$rules,$messages)->validate();

        Post::create($request->all());
        $request->session()->flush('success','Info Success');
      return redirect()->route('home');
    }

}
