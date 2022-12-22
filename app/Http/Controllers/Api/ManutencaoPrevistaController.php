<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

#MODELS
use App\Models\Grl\GrlManutencao;


class ManutencaoPrevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllmaintenance()
    {

        return response()->json(
            DB::table('grl_manutencaos')->get()
        );

       /*
        $currentDate=Carbon::now();
        $nextDay=$currentDate->addDays(7);
        return response()->json(
            GrlManutencao::with(['admin_veiculo','admin_marcas','admin_modelos'])
                            ->where(Carbon::now()->format('Y-m-d'),'>=',\DB::raw('DATE_ADD()'))
                            ->where('grl_manutencaos.id','')
        );
       */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPlannedMaintenance()
    {
        $days=7;
        $from=Carbon::now();
        $to=$from->addDays($days);

        //return response()->json(GrlManutencao::where('data',[$from,$to])->get());
        return response()->json(
                DB::table('grl_manutencaos')->whereBetween('data',[$from,$to])->get());
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
