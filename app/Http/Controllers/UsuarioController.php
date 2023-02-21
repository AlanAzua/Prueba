<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::Paginate(5);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'lastname'=>'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|same:confirm-password'

        
        ]);
        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        return redirect()->route('usuarios.index');

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
        $user=User::find($id);
        
        return view('usuarios.Editar', compact('user'));
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
        $this->validate($request,[
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'same:confirm-password'
    
            
            ]);
            $input=$request->all();
            if(!empty($input['password'])){
            $input['password']=Hash::make($input['password']);
            }else{
                $input= Arr::except($input, array('password'));
            $user=User::find($id);
            $user->update($input);
            DB::table('user')->where('id',$id)->delete();
            }
            return redirect()->route('usuarios.index');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        return redirect()->route('usuarios.index');

    }
}
