<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Animal;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function home(){

        $datas = Info::all();
        $animals = Animal::all();
        $services = Service::all();
        $locations = Info::select('province')->distinct()->get();

        if(request('search')){

            $datas = DB::table('infos')->select('infos.id', 'infos.address', 'infos.province', 'infos.rating', 'infos.price', 'infos.photo', 'infos.address_detail', 'infos.host_id', 'infos.animal_id')->join('animals', 'infos.animal_id', '=', 'animals.id')->where('address_detail', 'LIKE', '%'.request('search').'%')->orWhere('name', 'LIKE', '%'.request('search').'%')->get();

        }

        return view('home', ['infos'=>$datas, 'animals'=>$animals, 'services'=> $services, 'locations'=> $locations]);

    }

    public function detail(Info $id){

        $animals = Animal::all();
        $services = Service::all();
        $locations = Info::select('province')->distinct()->get();

        return view('detail', ['info' => $id, 'animals'=>$animals, 'services'=> $services, 'locations'=> $locations]);

    }

    public function filterAnimal($id){

        $datas = Info::all()->where('animal_id', $id);
        $animals = Animal::all();
        $services = Service::all();
        $locations = Info::select('province')->distinct()->get();

        return view('home', ['infos'=>$datas, 'animals'=>$animals, 'services'=> $services, 'locations'=> $locations]);

    }

    public function filterService($id){

        $datas = DB::table('infos')->select('infos.id', 'infos.address', 'infos.province', 'infos.rating', 'infos.price', 'infos.photo', 'infos.address_detail', 'infos.host_id', 'infos.animal_id')->join('info_service', 'infos.id', '=', 'info_service.info_id')->where('service_id', $id)->get();
        $animals = Animal::all();
        $services = Service::all();
        $locations = Info::select('province')->distinct()->get();

        return view('home', ['infos'=>$datas, 'animals'=>$animals, 'services'=> $services, 'locations'=> $locations]);

    }

    public function filterLocation($province){

        $datas = Info::all()->where('province', $province);
        $animals = Animal::all();
        $services = Service::all();
        $locations = Info::select('province')->distinct()->get();

        return view('home', ['infos'=>$datas, 'animals'=>$animals, 'services'=> $services, 'locations'=> $locations]);

    }

}
