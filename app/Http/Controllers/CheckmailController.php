
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Mail\CheckMail;
use App\Mail\ContactMail;
use Mail;
use App\Order;

class CheckmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('pages.mail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //  public function showform(){
    //     return view('mail.form_contact');
    // }
    public function send(Request $request){
      // $order = Order::create($data);
      // $orderdetail = Order__detail::create($dataorderdetail);
      $data =$request ->all();
      $order = Order::create($data);
      //gửi email, tạo mail và truyền vào data
      \Mail::to($request->email)->send(new ContactMail($data));
      return redirect()->back()->with('thongbao','Bạn đã gửi thành công!');
    }
  

   // public  function send(Request $request)
   //  {
     
   //      $data =$request ->all();
   //      $data = array(
   //          'name'      =>  $request->name,
   //          'phone'   =>   $request->phone
   //      );

   //   \Mail::to($data['email'])->send(new CheckMail($data));
   //   return back()->with('success', 'Thanks for contacting us!');

   //  }

}
