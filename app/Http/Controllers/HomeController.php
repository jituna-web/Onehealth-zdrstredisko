<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appoitment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();

                return view ('user.home', compact('doctor'));
            }
            else
            {
                return view ('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {


        $doctor = doctor::all();

        return view('user.home', compact('doctor'));
        }
    }

    public function appoitment(Request $request)
    {
        $data = new appoitment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status='zpracovává se';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Vaše žádost byla úspěšně odeslána. V nejbližší době vás kontaktujeme.');
    }

    public function myappointment()
    {
        if(Auth::id())
        {

            $userid=Auth::user()->id;
            $appoit=appoitment::where('user_id',$userid)->get();
            return view('user.my_appointment', compact('appoit'));
        }
        else
        {
            return redirect()->back();
        }

    }
    public function cancel_appoint($id)
    {
        $data=appoitment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
