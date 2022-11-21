<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\DoorStyle;
use App\Models\HingeType;
use Session;


class AdminController extends Controller
{
    //

    public function index(){
        $is = Admin::where('type', 0)->first();
        if(!$is){
            Admin::create([
                'email'     => 'admin@email.com',
                'password'  => 'password',
                'type'      => '0'
            ]);
        }

        return view('Admin.Auth.index');
    }

    public function onAdminSignin(Request $request){
        $is= Admin::where('email', $request->email)
                    ->where('password', $request->password)
                    ->where('type', '0')
                    ->first();
        if($is){
            Session::put('admin', $is->email);
            return "Success";
        } else {
            return "Fail";
        };
    }

    public function onAdminSignup(Request $request){
        $valid = $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);


        Admin::create([
            'email'         => $valid['email'],
            'password'      => $valid['password'],
            'type'          => '1',
        ]);

        return redirect()->route('toAdminList');

    }

    public function onUserSignup(Request $request){
        $valid = $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);


        User::create([
            'email'         => $valid['email'],
            'password'      => $valid['password'],
        ]);

        return redirect()->route('toUserList');
    }

    public function onAdminSignout(){
        Session::forget('admin');
        return redirect()->route('toHome');
    }

    public function toAdminList(){
        $nav = 'AdminList';
        return view('Admin.AdminList.index',[
                'nav'   => $nav,
        ]);
    }

    public function onGetAdminList(Request $request){
        return Admin::orderBy('type')->get();
    }


    public function onGetUserList(Request $request){
        return User::orderBy('created_at', 'DESC')->get();
    }

    public function toUserList(){
        $nav = 'UserList';
        return view('Admin.UserList.index',[
                'nav' => $nav,
        ]);
    }

    public function toUploadImage(){
        $nav = 'upload';
        return view('Admin.Product.index',[
                'nav'       => $nav
        ]);
    }

    public function toDoorStyle(){
        $nav = 'indexes';

        return view('Admin.Indexes.Add.DoorStyle', [
            'nav'   => $nav,

        ]);
    }

    public function onDoorStyle(Request $request){
        $valid = $request->validate([
                'name'      => 'required',
                'code'      => 'required',
        ]);

        DoorStyle::create([
            'door_style'        => $valid['name'],
            'selection_code'    => $valid['code'],
            'comment'           => $request->comment == null ? '' : $request->comment,
        ]);

        return redirect()->route('toDoorStyle');
    }

    public function toHingeType(){
        $nav = 'indexes';

        return view('Admin.Indexes.Add.HingeType', [
            'nav'   => $nav,

        ]);
    }

    public function onHingeType(Request $request){
        $valid = $request->validate([
                'type'      => 'required',
                'tag'       => 'required',
                'price'     => 'required',
        ]);

        HingeType::create([
            'hinge_type'    => $valid['type'],
            'hinge_tag'     => $valid['tag'],
            'hinge_price'   => $valid['price'],
            'comment'       => $request->comment == null ? '' : $request->comment,
        ]);

        return redirect()->route('toHingeType');
    }

}
