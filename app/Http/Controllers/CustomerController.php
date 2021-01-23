<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Support\Facades\Input;
use Flash;
class CustomerController  extends AppBaseController
{

    public function __construct()
    {
      //  $this->middleware('auth');
    }

    protected function profile()
    {
        if (Auth::guard('customer')->user()) {
            $user= Customer::find(Auth::guard('customer')->user()->id);
            return view('front.profile-single-page')->with('user',$user);
        }else {
            return redirect('/customer/login');
        }
      
    }



    protected function update(Request $request)
    {
       $user= Customer::find(Auth::guard('customer')->user()->id);

       $input = $request->all();
    //    return $input;
       $destination = 'images/customers';
       if (!is_null(Input::file('image'))) {

           $image = $this->uploadFile('image', $destination);
           if (gettype($image) == 'string') {
               $input['image'] = $destination . '/' . $image;
           }
           $user->image=$input['image'];
       }

       $user->name=$request->name;
       if (isset($request->email)&&!empty($request->email)) {
       $user->email=$request->email; 
       }
       if (isset($request->password)&&!empty($request->password)) {
        $user->password=bcrypt($request->password); 
       }
      
       $user->address=$request->address; 
      // $user->image=$input['image'];
       $user->save();
       Flash::success('Competitions Form saved successfully.');
       return redirect()->back()->with('success', 'successfully '); 
        // return view('front.profile-single-page')->with('user',$user);
    }
}
