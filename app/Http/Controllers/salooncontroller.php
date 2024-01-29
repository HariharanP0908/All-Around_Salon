<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;


class salooncontroller extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("About");
    }
    public function contact()
        {
            return view("contact");
        }
    public function booking()
        {
            return view("booking");
        }
    public function offers()
        {
            return view("offers");
        }
     public function enrollment()
        {
            return view("enrollment");
        }
    public function admin()
        {
            return view("admin");
        }
    public function insert(request $request)
    {
        $gender=$request->input('gender');
        $stylist=$request->input('stylist');
       $number=$request->input('number');
        $address=$request->input('address');
    

        $query=DB::insert("insert into booking(gender,stylist,address,Number) VALUES(?,?,?,?)",[$gender,$stylist,$address,$number]);
        
        
        if($query){
            return view('bookingstore');
        }
        else{
            return'Not Submitted';
        }
        return view('bookingstore');
    }

    public function feedback(request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
       $feedback=$request->input('feedback');
        
    

        $query=DB::insert("insert into feedback(Name,Email,Feedback) VALUES(?,?,?)",[$name,$email,$feedback]);
        
        
        if($query){
            return back()->with('success','Feedback submited success');
        }
        else{
            return back()->with('fail','not submit');
        }
        
    }

    public function membership(request $request)
    {
        $fname=$request->input('firstName');
        $lname=$request->input('lastName');
        $mail=$request->input('email');
       $number=$request->input('phone');
       $address=$request->input('address');
       $member=$request->input('membership');
        
    

        $query=DB::insert("insert into membership(Firstname,LastName,Email,PhoneNumber,Addres,MemberType) VALUES(?,?,?,?,?,?)",[$fname,$lname,$mail,$number,$address,$member]);
        
        
        if($query){
            return back()->with('success',' submited success');
        }
        else{
            return back()->with('fail','not submit');
        }
        
    }

    public function admin1(request $request)
    {
        $name=$request->input('username');
        $password=$request->input('password');

        if($name=="allaround&0987" && $password=="admin0987")
        {
            return view('adminlogin');
        }
        else{
            return"<h1>INVALID USER</h1>";
        }
    }
    public function admin2(request $request)
    {
        $offername=$request->input('offername');
        $offertime=$request->input('offertime');
        $offertime=$request->input('offerprice');
        $eligible=$request->input('eligible');

        $query=DB::insert("insert into admin(offername,offertime,offerprice,eligible) VALUES(?,?,?,?)",[$offername,$offertime,$offerprice,$eligible]);

        if($query){
           return view('adminshowdetaild');
        }
        else{
           return "failed";
        }
            
    }

   public function offershow()
   {
    
    
    $data=DB::select("SELECT * FROM admin");
    return view('offers',['datas'=>$data]);
   }
}
