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
    $title = $request->input('main-request');
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
}
