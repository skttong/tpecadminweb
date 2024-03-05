<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\{Province,Amphur,District,Hospital,School};
use Illuminate\Http\Request;
use DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    public function registration()
    {   
        $data['provinces'] = Province::get(["PROVINCE_ID","PROVINCE_NAME"]); 
        //print_r($data);
        return view('auth.register',$data);
    }

    public function fetchAmphur(Request $request)
    {
        $data['amphur'] = Amphur::where("PROVINCE_ID",$request->country_id)
                    ->get(["AMPHUR_NAME","AMPHUR_ID"]);
        return response()->json($data);
    }
    public function fetchDistrict(Request $request)
    {
        $data['district'] = District::where("AMPHUR_ID",$request->state_id)
                    ->get(["DISTRICT_NAME","DISTRICT_ID"]);
        return response()->json($data);
    }

    public function regiInsert(Request $request)
    {
        /*'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'agency' => $data['agency'],
        'position' => $data['position'],
        'address' => $data['address'],
        'province' => $data['province'],
        'district' => $data['district'],
        'subdistrict' => $data['subdistrict'],
        'typeposition' => $data['typeposition'],
        */
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email; 
        $data['password'] = Hash::make($request->password);
       // $data['role'] = $request->role;  
       // $data['r4'] = $request->r4; 
       // $data['r5'] = $request->r5;
       // $data['r6'] = $request->r6; 

        //`name`, `email`, `email_verified_at`, `password`, `role`,
        //$data['created_at'] = $request->r5;
        //$data['updated_at'] = $request->r6;   

        $insert = DB::table('users')->insert($data);
            
        if ($insert) 
        {
        
                        return Redirect()->route('Home.index')->with('success','Book Category created successfully!');
                        
                }
        else
                {
                $notification=array
                (
                'messege'=>'error ',
                'alert-type'=>'error'
                );
                return Redirect()->route('home.index')->with($notification);
                }
                
        }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'agency' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'agency' => $data['agency'],
            'position' => $data['position'],
            'address' => $data['address'],
            'province' => $data['province'],
            'district' => $data['district'],
            'subdistrict' => $data['subdistrict'],
            'typeposition' => $data['typeposition'],
            
        ]);
    }
}
