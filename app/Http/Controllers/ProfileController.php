<?php

namespace App\Http\Controllers;
use Auth;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('blood.profile');
    }

    public function editProfile()
    {
        $value = user::find( Auth::user()->id);
        return view('blood.update.lastdonation',['value'=>$value]);
    }

    public function ChangelastDonation(Request $request)
    {
        $value = user::find($request->user_id);
       
        $value->last_donation_date = $request->last_donation_date;
        $value->save();
        return redirect('/donorprofile')->with('message', 'Updated Last Donation Date');
        
    }

    public function editLocation()
    {
        $value = user::find(Auth::user()->id);
        return view('blood.update.location', ['value' => $value]);
    }

    public function ChangeLocation(Request $request)
    {
        $value = user::find($request->user_id);
        $value->location = $request->location;
        $value->save();
        return redirect('/donorprofile')->with('message', 'Updated Last Donation Date');
    }
   

    public function editBlood()
    {
        $value = user::find(Auth::user()->id);
        return view('blood.update.bldgroup', ['value' => $value]);
    }

    public function ChangeBloodGroup(Request $request)
    {
        $value = user::find($request->user_id);
        $value->blood_group = $request->blood_group;
        $value->save();
        return redirect('/donorprofile')->with('message', 'Updated Last Donation Date');
    }

    public function editPhone()
    {
        $value = user::find(Auth::user()->id);
        return view('blood.update.number', ['value' => $value]);
    }

    public function ChangePhone(Request $request)
    {
        $value = user::find($request->user_id);
        $value->phone = $request->phone;
        $value->save();
        return redirect('/donorprofile')->with('message', 'Updated Last Donation Date');
    }

    
    public function ForgotPassword(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $adminCount = User::where('email',$data['email'])->count();
            if($adminCount == 0){
                return redirect()->back()->with('flash_message_error','Email does not exist!');
            }

            $adminDetails =  User::where('email',$data['email'])->first();
            $randomPassword = str_random(8); 

            //encode/secure password
            $new_password = bcrypt($randomPassword);
            
            //update password
            User::where('email',$data['email'])->update(['password'=>$new_password]);
            return redirect()->back()->with('flash_message_error', 'Your new password is '.$randomPassword.' . Please update your password after login with this password. Thankyou!');

            //send forgot password email code
            $email = $data['email'];
            $name = $adminDetails->name;
            $messageData = [
                'email' => $email,
                'name' => $name,
                'password' => $randomPassword
            ];
            Mail::send('blood.mail',$messageData,function($message)use($email)
            {
                $message->to($email)->subject(('New Password - Blood Bonding'));
            });
            return redirect()->back()->with('flash_message_error','Please check your email for new password!');
        }

       return view('auth.email');
    }



}
