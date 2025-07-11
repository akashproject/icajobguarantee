<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administrator.dashboard');
    }

    public function updatePassword($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            // Handle the case where the user does not exist.
            // You can return an error message, redirect, or perform any other necessary action.
        }

        $newPassword = 'SE~sc@9062'; // Replace with the new password you want to set.
        $user->password = Hash::make($newPassword);

        $user->save();

        // Provide feedback to the user.
        return redirect('/administrator');
    }

    public function duplicator(Request $request){
        try {
            $data = $request->all();
            $model = DB::table($data['model'])->where('id',$data['id'])->first();
            $model->slug = $model->slug.'-'.'duplicated';
            unset($model->id);

            DB::table($data['model'])->insert((array)$model);
            return redirect()->back()->with('message', 'Duplicate create successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

}
