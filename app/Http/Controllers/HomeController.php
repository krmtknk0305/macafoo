<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
  public function home(){
    return view('index');
  }

  public function create(Request $request){
    $name = $request->input('yourname');
    $mail = $request->input('yourmail');
    $main_request = $request->input('main-request');
    switch ($main_request) {
      case '1':
        $title = 'お席のご予約について';
        break;
      case '2':
        $title = 'サービスについて';
        break;
      case '3':
        $title = 'ネットストアのご利用について';
        break;
      case '4':
        $title = 'ご購入いただいた商品について';
        break;
      case '5':
        $title = '求人募集について';
        break;
      case '6':
        $title = 'その他のお問い合わせ';
        break;
    }
    $about = $request->input('request-about');
    return view('contact')->with([
      "name" => $name,
      "mail" => $mail,
      "title" => $title,
      "about" => $about,
    ]);
  }

  public function store(Request $request){
    $contact = new Contact();
    $contact->fill([
      'name' => $request->name,
      'mail' => $request->mail,
      'title' => $request->title,
      'about' => $request->about,
    ]);
    $contact->save();

    return view('send');
  }

  public function administrator(){
    $list =DB::table('contacts')
            ->select('name', 'mail', 'title', 'about', 'created_at')
            ->orderBy('created_at','desc')
            ->get();
            return view('administrator', ['list'=>$list]);
  }


}
