<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Classes\ActivationService;
use Mail;
use DB;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request){
         $input = $request->all();
         $validator = $this->validator($input);

      if ($validator->passes()){
        $user = $this->create($input)->toArray();
        $user['link'] = str_random(30);

        DB::table('user_activations')->insert(['user_id'=>$user['id'],'token'=>$user['link']]);

        Mail::send('mail.activation', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('buiduy057@gmail.com - Activation Code');
        });
        return redirect()->to('login')->with('thongbao',"Chúng tôi đã gửi mã kích hoạt. Bạn hãy check mail");
      }
      return back()->with('errors',$validator->errors());
    }
    public function userActivation($token){
        $check = DB::table('user_activations')->where('token',$token)->first();
        if(!is_null($check)){
            $user = User::find($check->user_id);
            if($user->active == 1){
            return redirect()->to('login')->with('thongbao','Người dùng đã được kích hoạt');
        }
        $user->update(['active'=>1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('login')->with('thongbao','Người dùng kích hoạt thành công');
        }
         return redirect()->to('login')->with('loi','Mã thông báo không hợp lệ');
    }
}
