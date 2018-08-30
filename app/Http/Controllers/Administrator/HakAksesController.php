<?php
namespace App\Http\Controllers\Administrator;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakAksesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.webpages_master_data.master_guru.main');
    }
    
    public function create(Request $request){

    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
