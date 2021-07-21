<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index(){
        $signatures=Signature::paginate(10);
        return view('signature.index',compact('signatures'));
    }
    public function  create(){
        return view('signature.create');
    }
    public function store(Request $request){
        $request->validate(['name'=>'required',
                            'signed'=>'required']);

        $folderPath = public_path('upload/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $signature = uniqid() . '.'.$image_type;
        $file = $folderPath . $signature;
        file_put_contents($file, $image_base64);
        $signaturesave = new Signature;
        $signaturesave->name = $request->name;
        $signaturesave->signature = $signature;
        $signaturesave->save();
        return back()->with('success', 'Successfully Save Image and Signature');
    }
}
