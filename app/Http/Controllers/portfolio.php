<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Service;

class portfolio extends Controller
{
    //
    function saveService(Request $request){
        // print_r($request->input());
        $service= new Service;
        $service->bname= $request->bname;
        $service->bemail= $request->bemail;
        $service->bphone= $request->bphone;
        $service->service= $request->service;
        $service->info= $request->info;
        $service->save();
        return view('index');


    }
    function saveMessage(Request $request){
        // print_r($request->input());
        $contact= new Contact;
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->phone= $request->phone;
        $contact->message= $request->message;
        $contact->save();
        return view('index');

    }
    function viewContact(){
        $output= Contact::all();
        return view('adminview2',['output'=>$output]);
    }
    function viewService(){
        $output= Service::all();
        return view('adminview',['output'=>$output]);
    }
}
