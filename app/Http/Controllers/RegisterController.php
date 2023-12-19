<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //

    public function register(){

        return view('register.register');

    }

    public function store(Request $request){

        $validation = [

            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255']

        ];

        $validatedData = $request->validate($validation);

        User::create($validatedData);

        // session()->flash('success', 'Registration Successful! Please Login');

        return redirect('/login')->with('success', 'Registration Successful! Please Login');

    }

    public function register_sitter(){

        return view('register.register_sitter');

    }

    public function store_sitter(Request $request){

        $validation = [

            'firstname' => ['required', 'max:255'],
            'lastname' => ['nullable'],
            'description' => ['required', 'min:25', 'max:255'],
            'idcard'=> 'required|image|file|mimes:jpeg,png,jpg|max:2024',
            'place'=> 'required|image|file|mimes:jpeg,png,jpg|max:2024'

        ];
        
        $validatedData = $request->validate($validation);

        $idcard = $request->file('idcard');
        $place = $request->file('place');

        $nama_file_idcard = $idcard->getClientOriginalName();
        $nama_file_place = $place->getClientOriginalName();

        $validatedData['idcard'] = $nama_file_idcard;
        $validatedData['place'] = $nama_file_place;

        $tempat_upload = 'data_sitter';

        $idcard->move($tempat_upload, $nama_file_idcard);
        $place->move($tempat_upload, $nama_file_place);

        DB::table('sitters')->insert($validatedData);

        return view('register.success');
    }

}
