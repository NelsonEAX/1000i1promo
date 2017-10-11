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
        $data['description'] = "Натяжные потолки и фурнитура для дилеров, монтажников, замерщиков в Екатеринбурге,".
            "оформление заказа на сайте";
        $data['keywords'] = "натяжные потолки, установка, монтаж, полотна";
        $data['title'] = "Натяжные потолки для дилеров в Екатеринбурге";

        $data['canonical'] = "http://zakaz.1000i1.ru";
        $data['url'] = "1000<span style='color: #f76d56;'>i</span>1.ru";
        $data['phone'] = "+79222959125";
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

        // Значения формы
        $data['request']['date'] = $request->date ? $request->date : '';
        $data['request']['time1'] = $request->time == $data['time_gap1'] ? ' selected' : '';
        $data['request']['time2'] = $request->time == $data['time_gap2'] ? ' selected' : '';
        $data['request']['time3'] = $request->time == $data['time_gap3'] ? ' selected' : '';
        $data['request']['phone'] = $request->phone ? $request->phone : '';
        $data['request']['email'] = $request->email ? $request->email : '';
        $data['request']['adres'] = $request->adres ? $request->adres : '';

        //dd($request->email);
        //dd($request->file('images'));
        if ( !$request->phone && !$request->adres && !$request->date &&
             !$request->time && !$request->email && !$request->file('images') ){

        } else if ( $request->email ){
        // Получили почту - отправляем на нее ссылку на файл

            $data['result'] = true;
            $data['result_msg'] = 'Получена почта';
            $data['result_hdr'] = 'Скоро все придет...';

        } else if ( !$request->phone || !$request->adres || !$request->date || !$request->time ){
        // Запрашиваем данные еще раз, если не все поля заполнены

            $data['result'] = false;
            $data['result_msg'] = 'Необходимо заполнить все поля';
            $data['result_hdr'] = 'Еще не все...';

        } else if ( !$request->file('images') ) {
        // Если нет прикрепленных файлов - возвращаем

            $data['result'] = false;
            $data['result_msg'] = 'Необходимо прикрепить файлы';
            $data['result_hdr'] = 'Еще не все...';

        } else{
        // Если указанные поля есть - отправляем письмо
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
                    $message->from('sender@1000i1.ru', 'Робот-zakaz.1000i1.ru');
                    $message->to('sistem_p@mail.ru')->bcc('nelsoneax@yandex.ru')
                        ->subject('Заявка с zakaz.1000i1.ru');

                    foreach ($email_attach as $key => $attach) {
                        $message->attach($attach);
                    }

                });
                $data['result'] = true;
                $data['result_hdr'] = 'Заявка принята';
                $data['result_msg'] = 'Скоро с вами свяжутся наши менеджеры!';
                // Значения формы обнуляем
                $data['request']['date'] = '';
                $data['request']['time1'] = '';
                $data['request']['time2'] = '';
                $data['request']['time3'] = '';
                $data['request']['phone'] = '';
                $data['request']['adres'] = '';
            }catch (Exception $e){
                $data['result'] = false;
                $data['result_msg'] = $e->getMessage();
                $data['result_hdr'] = 'Возникли проблемы';
            }
        }

        return view('promo', $data);
    }
}
