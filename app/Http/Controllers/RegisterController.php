<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Helper;
use App\User;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "register";
        $page_title = "صد استارتاپ";
        return view('register.register',['page_name'=>$page_name,'page_title'=>$page_title]);
    }

    public function register_to_verify(Request $request)
    {
        $mobile = $request->input('mobile');
        $random = rand(10000,99999);
        //Helper::send_sms($mobile,$random);
        $request->session()->put('mobile', $mobile);
        $request->session()->put('random', $random);
        $request->session()->put('step', 'verify');

        return redirect('verify');
    }

    public function verify(Request $request)
    {
        $mobile = $request->session()->get('mobile');
        $page_name = "verify";
        $page_title = "صفحه اعتبار سنجی";
        return view('register.verify',['mobile'=>$mobile,'page_name'=>$page_name,'page_title'=>$page_title]);
    }

    public function verify_to_startup(Request $request)
    {
        $verify = $request->input('verify');
        $random = $request->session()->get('random');
        if($verify == $random){
            $user = new User;

            $user->isphonenumberveried = 1;
            $user->isemailveried = 0;
            $user->isdisabled = 0;
            $user->idlockedout = 0;
            $user->password = Hash::make('1234566789');
            $message = $user->save();


            if($message == "true"){
                return response()->json(array('success' => true, 'last_insert_id' => $user->person), 200);

                //return redirect('startup');
            }else{
                return redirect('/');
            }

        }else{
            return redirect('verify/?message=error');
        }

    }

    public function startup(Request $request)
    {
        $page_name = "startup";
        $page_title = "صد استارتاپ";
        return view('register.startup',['page_name'=>$page_name,'page_title'=>$page_title]);
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
}
