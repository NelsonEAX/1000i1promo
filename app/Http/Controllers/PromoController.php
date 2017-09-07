<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Storage;

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

        $data['extention'] =    ".txt,.pdf,.djvu,".
                                ".doc,.docx,".
                                ".xls,.xlsx,".
                                ".zip,.rar,.7z,.tar,.gzip,.gz,.jar,".
                                ".jpg,.jpeg,.png,.bmp,.gif,.tiff,.ico,.raw".
                                ".ec,.fs,.new,.sd2";

        return view('promo', $data);
    }

    public function order(Request $request)
    {
        $order = new Order;
        if($request->phone)
            $order->phone = $request->phone;
        if($request->adres)
            $order->adres = $request->adres;
        if($request->date && $request->time)
            $order->date = $request->date .' Доставка с '. $request->time;
        $order->save();

        if($request->hasFile('images'))
        {
            $images = $request->file('images');
            foreach ($images as $image) {
                echo $image->getClientOriginalName()."\n";

                $storage = new Storage;
                $storage->order = $order->id;
                $storage->name = $image->getClientOriginalName();
                $storage->ext = $image->getClientOriginalExtension();
                $storage->uuid = \Uuid::generate()->string;
                $storage->save();

                $image->move(public_path('orders/'.$order->id), $storage->name);
//                $image->move(public_path('storage'), $storage->uuid.'.'.$storage->ext);

                //$image->store('users/' . $this->user->id . '/messages');
            }
        }
        echo "хуйхуйхуйхуйхуйхуйхуй";
    }
}
