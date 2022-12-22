<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\AdminVeiculo;


class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.veiculos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelos=DB::table('admin_modelos')->get();
        $versaos=DB::table('admin_versaos')->get();
        $marcas=DB::table('admin_marcas')->get();

        return view('Admin.veiculos.create',compact('modelos','versaos','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          try{
            $vehicleVerify=AdminVeiculo::where('placa',$request->placa)->first();
            if($vehicleVerify)
                return back()->with('error', __('Desculpe, este veiculo já se encontra registado!.'));

            $vehicleData=AdminVeiculo::create([

                'placa'=>$request->placa,
                'admin_marca_id'=>$request->admin_marca_id,
                'admin_versao'=>$request->versao,
                'admin_modelo'=>$request->modelo,
                'user_id'=>'1',

              ]);

          }catch(Exception $ex)
          {
            DB::rollback();
            Log::debug('1. VeiculoController->store() : '.$ex->getMessage());
            return  back()->with('error', __('Alguma coisa correu mal ao tentar cadastrar o veiculo!'));
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
