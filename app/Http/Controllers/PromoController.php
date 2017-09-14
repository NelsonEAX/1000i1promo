<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Storage;
use Mail;
use Exception;

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
    public function index(Request $request)
    {
        //dd($request);
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

        $data['result'] = null;

        // Если указанные поля есть - отправляем письмо
        if ($request->phone && $request->adres && $request->date){
            try {
                $email_info = [];
                $email_attach = [];

                $order = new Order;
                if ($request->phone) {
                    $order->phone = $request->phone;
                    $email_info['phone'] = $order->phone;
                }
                if ($request->adres) {
                    $order->adres = $request->adres;
                    $email_info['adres'] = $order->adres;
                }
                if ($request->date && $request->time) {
                    $order->date = $request->date . ' Доставка с ' . $request->time;
                    $email_info['date'] = $order->date;
                }
                $order->save();

                $images = $request->file('images');
                foreach ($images as $key => $image) {
                    //echo $image->getClientOriginalName()."<br>\n";

                    $storage = new Storage;
                    $storage->order = $order->id;
                    $storage->name = $key.'_'.$image->getClientOriginalName();
                    $storage->ext = $image->getClientOriginalExtension();
                    $storage->uuid = \Uuid::generate()->string;
                    $storage->save();

//                $image->move(public_path('orders/'.$order->id), $storage->name);
//                $image->move(public_path('storage/'.$order->id), $storage->uuid.'.'.$storage->ext);
                    $image->move(public_path('storage/' . $order->id), $storage->name);
                    array_push($email_attach, 'storage/' . $order->id . '/' . $storage->name);
                    //$image->store('users/' . $this->user->id . '/messages');
                }

                Mail::send('email.order', $email_info, function ($message) use ($email_attach) {
                    $message->from('sender@1000i1.ru', '1000и1.рф');
                    $message->to('sistem_p@mail.ru')->cc('nelsoneax@yandex.ru')
                        ->subject('Заявка с 1000и1.рф');

                    foreach ($email_attach as $key => $attach) {
                        $message->attach($attach);
                    }

                });
                $data['result'] = true;
            }catch (Exception $e){
                $data['result'] = false;
                $data['result_msg'] = $e->getMessage();
            }
        }

        return view('promo', $data);
    }

    public function order(Request $request)
    {
//        mb_internal_encoding('UTF-8');
//
//        $email_info = [];
//        $email_attach = [];
//
//        $order = new Order;
//        if($request->phone) {
//            $order->phone = $request->phone;
//            $email_info['phone'] = $order->phone;
//        }
//        if($request->adres) {
//            $order->adres = $request->adres;
//            $email_info['adres'] = $order->adres;
//        }
//        if($request->date && $request->time) {
//            $order->date = $request->date . ' Доставка с ' . $request->time;
//            $email_info['date'] = $order->date;
//        }
//        $order->save();
//
//        $images = $request->file('images');
//        foreach ($images as $image) {
//            //echo $image->getClientOriginalName()."<br>\n";
//
//            $storage = new Storage;
//            $storage->order = $order->id;
//            $storage->name = $image->getClientOriginalName();
//            $storage->ext = $image->getClientOriginalExtension();
//            $storage->uuid = \Uuid::generate()->string;
//            $storage->save();
//
////                $image->move(public_path('orders/'.$order->id), $storage->name);
////                $image->move(public_path('storage/'.$order->id), $storage->uuid.'.'.$storage->ext);
//            $image->move(public_path('storage/'.$order->id), $storage->name );
//            array_push($email_attach, 'storage/'.$order->id.'/'. $storage->name);
//            //$image->store('users/' . $this->user->id . '/messages');
//        }
//
//        Mail::send('email.order', $email_info, function($message) use ($email_attach)
//        {
//            $message->from('sender@1000i1.ru', '1000и1.рф');
//            $message->to('sistem_p@mail.ru')->cc('nelsoneax@yandex.ru')
//                ->subject('Заявка с 1000и1.рф');
//
//            foreach ($email_attach as $key=>$attach)
//            {
//                $message->attach($attach);
//            }
//
//        });
//        $data['files'] = $email_attach;
//        $data['phone'] = "89222959125";
//        $data['email'] = "zakaz1000i1@mail.ru";
//        return view('promo_submit', $data);
    }
}
