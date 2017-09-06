<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];
        $data['phone'] = "89222959125";
        $data['email'] = "zakaz1000i1@mail.ru";
        $data['time_gap1'] = "7-11";
        $data['time_gap2'] = "13-17";
        $data['time_gap3'] = "19-22";

        return view('promo', $data);
    }

    public function order(Request $request)
    {
        if($request->hasFile('images'))
        {
            $images = $request->file('images');
            foreach ($images as $image) {
                echo $image->getClientOriginalName()."\n";
                //$image->store('users/' . $this->user->id . '/messages');
            }
        }
        echo "хуйхуйхуйхуйхуйхуйхуй";
    }
}
