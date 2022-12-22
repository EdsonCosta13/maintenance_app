<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Rh\RhPessoa;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        DB::beginTransaction();
        try{

            $emailVerify=User::where('email',$request->email)->first();
            if($emailVerify)
            return redirect()->back();

            $personalData=RhPessoa::create([
                'nome'                  =>$request->nome,
                'sobrenome'             =>$request->sobrenome,
                'cpf'                   =>$request->cpf,
                'data_nascimento'       =>$request->data_nascimento,
                'grl_genero_id'         =>$request->grl_genero_id,
                'grl_estado_civil_id'   =>$request->grl_estado_civil_id
            ]);

            $userData=User::create([
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'rh_pessoa_id'=>$personalData->id,
            ]);

            if(!$personalData or !$userData)
            {
                DB::rollback();
                return back()->with('error', __('Usuário nao cadastrado!'));
            }

            DB::commit();
            return back()->with('success', __('Usuário '.$request->nome.' Cadastrado com sucesso!'));


        }catch(Exception $ex)
        {
            DB::rollback();
            Log::debug('1. UserController->store() : '.$ex->getMessage());
            return  back()->with('error', __('Alguma coisa correu mal ao tentar cadastrar o usuário.'));
        }

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
