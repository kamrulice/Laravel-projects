<?php

namespace App\Http\Controllers;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class customerController extends Controller
{
     public function addCustomer(Request $request){

        $customers = New Registration();
        $customers->firstName = $request->firstName;
        $customers->lastName = $request->lastName;
        $customers->email = $request->email;
        $customers->password = Hash::make($request->password);
        $customers->save();
        return redirect('/') ;
    }
    public function loginCustomer(Request $request){

        Registration::where('password',$request->password);
       return redirect('/')->with('message','Login Successfully');
    }
    public function customer(){
         $customers = Registration::all();
         return view('Admin.customer.customer',compact('customers'));
    }
    public function customerDelete($id){
         $customerDeleteById = Registration::find($id);
        $customerDeleteById->delete();
        return redirect('/customer/list')->with('message','customer delete successfully');
    }
}
