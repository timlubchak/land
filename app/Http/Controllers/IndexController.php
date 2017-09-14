<?php

namespace App\Http\Controllers;

use App\People;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Page;
use App\Service;
use DB;

class IndexController extends Controller
{
    public  function  execute(Request $request){
/*---------------------handled post request---------------------*/


            print_r($request->all());



        if($request->isMethod('post')){





            $messages=[
                'required'=>'Поле обязательное к заполнению',
                'email'=>"Поле:attribute должно соответствовать email адресу"
            ];
            $this->validate($request,[
                    'name' =>'required|max:255',
                    'email' =>'required|email',
                    'text' =>'required'
                ],$messages);

        }

        /*--------------------- all pagest ---------------------*/
        $pages = Page::all();
        $portfolios =Portfolio::get(array('name','filter','images'));
        $services =Service::where('id','<','20')->get();
        $peoples =People::take(4)->get();
        $tags = DB::table('portfolios')->distinct()->pluck('filter');
        $position = People::get(array('name','img','text','id'));

        $menu = array();
        foreach ($pages as $page){
            $item = array(
                'title'=>$page->name,
                'alias'=>$page->alias,
            );
            array_push($menu,$item);
        }
        $item = array('title'=>'Services', 'alias'=>'services');
        array_push($menu,$item);
        $item = array('title'=>'Portfolio', 'alias'=>'portfolio');
        array_push($menu,$item);
        $item = array('title'=>'Team', 'alias'=>'team');
        array_push($menu,$item);
        $item = array('title'=>'Contact', 'alias'=>'contact');
        array_push($menu,$item);
        return view('site.index',array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'peoples'=>$peoples,
            'tags'=>$portfolios,
            'position'=>$position,

        ));
    }
}
