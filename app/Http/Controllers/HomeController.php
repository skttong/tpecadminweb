<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function allDataList(Request $request)
    {
        $health_zone = $request->health_zone;
        $province = $request->province;
        $district = $request->district;
        $Year = $request->year;

        $SQL = 'COUNT(IF(Pre_GM = "0", 1, NULL)) AS "PreGM0",
        COUNT(IF(Pre_GM = "0", 1, NULL))*100/COUNT(*) AS "PreGM0p",
        COUNT(IF(Pre_GM = "1", 1, NULL)) AS "PreGM1",
        COUNT(IF(Pre_GM = "1", 1, NULL))*100/COUNT(*) AS "PreGM1p",
        COUNT(IF(Pre_FM = "0", 1, NULL)) AS "PreFM0",
        COUNT(IF(Pre_FM = "0", 1, NULL))*100/COUNT(*) AS "PreFM0p",
        COUNT(IF(Pre_FM = "1", 1, NULL)) AS "PreFM1", 
        COUNT(IF(Pre_FM = "1", 1, NULL))*100/COUNT(*) AS "PreFM1p", 
        COUNT(IF(Pre_RL = "0", 1, NULL)) AS "PreRL0",
        COUNT(IF(Pre_RL = "0", 1, NULL))*100/COUNT(*) AS "PreRL0p",
        COUNT(IF(Pre_RL = "1", 1, NULL)) AS "PreRL1",
        COUNT(IF(Pre_RL = "1", 1, NULL))*100/COUNT(*) AS "PreRL1p",
        COUNT(IF(Pre_EL = "0", 1, NULL)) AS "PreEL0",
        COUNT(IF(Pre_EL = "0", 1, NULL))*100/COUNT(*) AS "PreEL0p",
        COUNT(IF(Pre_EL = "1", 1, NULL)) AS "PreEL1",
        COUNT(IF(Pre_EL = "1", 1, NULL))*100/COUNT(*) AS "PreEL1p",
        COUNT(IF(Pre_PS = "0", 1, NULL)) AS "PrePS0",
        COUNT(IF(Pre_PS = "0", 1, NULL))*100/COUNT(*) AS "PrePS0p",
        COUNT(IF(Pre_PS = "1", 1, NULL)) AS "PrePS1",
        COUNT(IF(Pre_PS = "1", 1, NULL))*100/COUNT(*) AS "PrePS1p",
        COUNT(IF(Pre_Delay = "0", 1, NULL)) AS "PreDelay0",
        COUNT(IF(Pre_Delay = "0", 1, NULL))*100/COUNT(*) AS "PreDelay0p",
        COUNT(IF(Pre_Delay = "1", 1, NULL)) AS "PreDelay1",
        COUNT(IF(Pre_Delay = "1", 1, NULL))*100/COUNT(*) AS "PreDelay1p",
        COUNT(IF(Pre_Delay = "2", 1, NULL)) AS "PreDelay2p",
        COUNT(IF(Pre_Delay = "2", 1, NULL))*100/COUNT(*) AS "PreDelay2p",
        COUNT(IF(Pre_Delay = "3", 1, NULL)) AS "PreDelay3",
        COUNT(IF(Pre_Delay = "3", 1, NULL))*100/COUNT(*) AS "PreDelay3p",
        COUNT(IF(Pre_Delay = "4", 1, NULL)) AS "PreDelay4",
        COUNT(IF(Pre_Delay = "4", 1, NULL))*100/COUNT(*) AS "PreDelay4p",
        COUNT(IF(Pre_Delay = "5", 1, NULL)) AS "PreDelay5",
        COUNT(IF(Pre_Delay = "5", 1, NULL))*100/COUNT(*) AS "PreDelay5p",
        COUNT(IF(Pre_Delay != "0", 1, NULL))  AS "PreDelay1_5total",
        COUNT(IF(Pre_Delay != "0", 1, NULL))*100/COUNT(*) AS "PreDelay1_5totalp",
        COUNT(IF(Pre_EQ_good >= "11", 1, NULL)) AS "PreEQgood0",
        COUNT(IF(Pre_EQ_good >= "11", 1, NULL))*100/COUNT(*) AS "PreEQgood0p",
        COUNT(IF(Pre_EQ_good <= "11", 1, NULL)) AS "PreEQgood1",
        COUNT(IF(Pre_EQ_good <= "11", 1, NULL))*100/COUNT(*) AS "PreEQgood1p",
        COUNT(IF(Pre_EQexpert >= "13", 1, NULL)) AS "PreEQexpert0",
        COUNT(IF(Pre_EQexpert >= "13", 1, NULL))*100/COUNT(*) AS "PreEQexpert0p",
        COUNT(IF(Pre_EQexpert <= "12", 1, NULL)) AS "PreEQexpert1",
        COUNT(IF(Pre_EQexpert <= "12", 1, NULL))*100/COUNT(*) AS "PreEQexpert1p",
        COUNT(IF(Pre_EQhappy >= "13", 1, NULL)) AS "PreEQhappy0",
        COUNT(IF(Pre_EQhappy >= "13", 1, NULL))*100/COUNT(*) AS "PreEQhappy0p",
        COUNT(IF(Pre_EQhappy <= "12", 1, NULL)) AS "PreEQhappy1",
        COUNT(IF(Pre_EQhappy <= "12", 1, NULL))*100/COUNT(*) AS "PreEQhappy1p",
        COUNT(IF(Pre_Eqtotal >= "38", 1, NULL)) AS "PreEqtotal0",
        COUNT(IF(Pre_Eqtotal >= "38", 1, NULL))*100/COUNT(*) AS "PreEqtotal0p",
        COUNT(IF(Pre_Eqtotal <= "37", 1, NULL)) AS "PreEqtotal1",
        COUNT(IF(Pre_Eqtotal <= "37", 1, NULL))*100/COUNT(*) AS "PreEqtotal1p",
        COUNT(IF(Pre_PPP_NS = "0", 1, NULL)) AS "PrePPPNS0",
        COUNT(IF(Pre_PPP_NS = "0", 1, NULL))*100/COUNT(*) AS "PrePPPNS0p",
        COUNT(IF(Pre_PPP_NS = "1", 1, NULL)) AS "PrePPPNS1",
        COUNT(IF(Pre_PPP_NS = "1", 1, NULL))*100/COUNT(*) AS "PrePPPNS1p",
        COUNT(IF(Pre_PPP_PD = "0", 1, NULL)) AS "PrePPPPD0",
        COUNT(IF(Pre_PPP_PD = "0", 1, NULL))*100/COUNT(*) AS "PrePPPPD0p",
        COUNT(IF(Pre_PPP_PD = "1", 1, NULL)) AS "PrePPPPD1",
        COUNT(IF(Pre_PPP_PD = "1", 1, NULL))*100/COUNT(*) AS "PrePPPPD1p",
        COUNT(IF(Pre_PPP_DS = "0", 1, NULL)) AS "PrePPPDS0",
        COUNT(IF(Pre_PPP_DS = "0", 1, NULL))*100/COUNT(*) AS "PrePPPDS0p",
        COUNT(IF(Pre_PPP_DS = "1", 1, NULL)) AS "PrePPPDS1",
        COUNT(IF(Pre_PPP_DS = "1", 1, NULL))*100/COUNT(*) AS "PrePPPDS1p",
        COUNT(IF(Pre_PPPtotal >= "96", 1, NULL)) AS "PrePPPtotal0",
        COUNT(IF(Pre_PPPtotal >= "96", 1, NULL))*100/COUNT(*) AS "PrePPPtotal0p",
        COUNT(IF(Pre_PPPtotal <= "95", 1, NULL)) AS "PrePPPtotal1",
        COUNT(IF(Pre_PPPtotal <= "95", 1, NULL))*100/COUNT(*) AS "PrePPPtotal1p",
        COUNT(IF(Post_GM = "0", 1, NULL)) AS "PostGM0",
        COUNT(IF(Post_GM = "0", 1, NULL))*100/COUNT(*) AS "PostGM0p",
        COUNT(IF(Post_GM = "1", 1, NULL)) AS "PostGM1",
        COUNT(IF(Post_GM = "1", 1, NULL))*100/COUNT(*) AS "PostGM1p",
        COUNT(IF(Post_FM = "0", 1, NULL)) AS "PostFM0",
        COUNT(IF(Post_FM = "0", 1, NULL))*100/COUNT(*) AS "PostFM0p",
        COUNT(IF(Post_FM = "1", 1, NULL)) AS "PostFM1", 
        COUNT(IF(Post_FM = "1", 1, NULL))*100/COUNT(*) AS "PostFM1p", 
        COUNT(IF(Post_RL = "0", 1, NULL)) AS "PostRL0",
        COUNT(IF(Post_RL = "0", 1, NULL))*100/COUNT(*) AS "PostRL0p",
        COUNT(IF(Post_RL = "1", 1, NULL)) AS "PostRL1",
        COUNT(IF(Post_RL = "1", 1, NULL))*100/COUNT(*) AS "PostRL1p",
        COUNT(IF(Post_EL = "0", 1, NULL)) AS "PostEL0",
        COUNT(IF(Post_EL = "0", 1, NULL))*100/COUNT(*) AS "PostEL0p",
        COUNT(IF(Post_EL = "1", 1, NULL)) AS "PostEL1",
        COUNT(IF(Post_EL = "1", 1, NULL))*100/COUNT(*) AS "PostEL1p",
        COUNT(IF(Post_PS = "0", 1, NULL)) AS "PostPS0",
        COUNT(IF(Post_PS = "0", 1, NULL))*100/COUNT(*) AS "PostPS0p",
        COUNT(IF(Post_PS = "1", 1, NULL)) AS "PostPS1",
        COUNT(IF(Post_PS = "1", 1, NULL))*100/COUNT(*) AS "PostPS1p",
        COUNT(IF(Post_Delay = "0", 1, NULL)) AS "PostDelay0",
        COUNT(IF(Post_Delay = "0", 1, NULL))*100/COUNT(*) AS "PostDelay0p",
        COUNT(IF(Post_Delay = "1", 1, NULL)) AS "PostDelay1",
        COUNT(IF(Post_Delay = "1", 1, NULL))*100/COUNT(*) AS "PostDelay1p",
        COUNT(IF(Post_Delay = "2", 1, NULL)) AS "PostDelay2",
        COUNT(IF(Post_Delay = "2", 1, NULL))*100/COUNT(*) AS "PostDelay2p",
        COUNT(IF(Post_Delay = "3", 1, NULL)) AS "PostDelay3",
        COUNT(IF(Post_Delay = "3", 1, NULL))*100/COUNT(*) AS "PostDelay3p",
        COUNT(IF(Post_Delay = "4", 1, NULL)) AS "PostDelay4",
        COUNT(IF(Post_Delay = "4", 1, NULL))*100/COUNT(*) AS "PostDelay4p",
        COUNT(IF(Post_Delay = "5", 1, NULL)) AS "PostDelay5",
        COUNT(IF(Post_Delay = "5", 1, NULL))*100/COUNT(*) AS "PostDelay5p",
        COUNT(IF(Post_Delay != "0", 1, NULL))  AS "PostDelay1_5total",
        COUNT(IF(Post_Delay != "0", 1, NULL))*100/COUNT(*) AS "PostDelay1_5totalp",
        COUNT(IF(Post_EQgood >= "11", 1, NULL)) AS "PostEQgood0",
        COUNT(IF(Post_EQgood >= "11", 1, NULL))*100/COUNT(*) AS "PostEQgood0p",
        COUNT(IF(Post_EQgood <= "10", 1, NULL)) AS "PostEQgood1",
        COUNT(IF(Post_EQgood <= "10", 1, NULL))*100/COUNT(*) AS "PostEQgood1p",
        COUNT(IF(Post_EQexpert >= "13", 1, NULL)) AS "PostEQexpert0",
        COUNT(IF(Post_EQexpert >= "13", 1, NULL))*100/COUNT(*) AS "PostEQexpert0p",
        COUNT(IF(Post_EQexpert <= "12", 1, NULL)) AS "PostEQexpert1",
        COUNT(IF(Post_EQexpert <= "12", 1, NULL))*100/COUNT(*) AS "PostEQexpert1p",
        COUNT(IF(Post_EQhappy >= "13", 1, NULL)) AS "PostEQhappy0",
        COUNT(IF(Post_EQhappy >= "13", 1, NULL))*100/COUNT(*) AS "PostEQhappy0p",
        COUNT(IF(Post_EQhappy <= "12", 1, NULL)) AS "PostEQhappy1",
        COUNT(IF(Post_EQhappy <= "12", 1, NULL))*100/COUNT(*) AS "PostEQhappy1p",
        COUNT(IF(Post_Eqtotal >= "38", 1, NULL)) AS "PostEqtotal0",
        COUNT(IF(Post_Eqtotal >= "38", 1, NULL))*100/COUNT(*) AS "PostEqtotal0p",
        COUNT(IF(Post_Eqtotal <= "37", 1, NULL)) AS "PostEqtotal1",
        COUNT(IF(Post_Eqtotal <= "37", 1, NULL))*100/COUNT(*) AS "PostEqtotal1p",
        COUNT(IF(Post_PPP_NS = "0", 1, NULL)) AS "PostPPPNS0",
        COUNT(IF(Post_PPP_NS = "0", 1, NULL))*100/COUNT(*) AS "PostPPPNS0p",
        COUNT(IF(Post_PPP_NS = "1", 1, NULL)) AS "PostPPPNS1",
        COUNT(IF(Post_PPP_NS = "1", 1, NULL))*100/COUNT(*) AS "PostPPPNS1p",
        COUNT(IF(Post_PPP_PD = "0", 1, NULL)) AS "PostPPPPD0",
        COUNT(IF(Post_PPP_PD = "0", 1, NULL))*100/COUNT(*) AS "PostPPPPD0p",
        COUNT(IF(Post_PPP_PD = "1", 1, NULL)) AS "PostPPPPD1",
        COUNT(IF(Post_PPP_PD = "1", 1, NULL))*100/COUNT(*) AS "PostPPPPD1p",
        COUNT(IF(Post_PPP_DS = "0", 1, NULL)) AS "PostPPPDS0",
        COUNT(IF(Post_PPP_DS = "0", 1, NULL))*100/COUNT(*) AS "PostPPPDS0p",
        COUNT(IF(Post_PPP_DS = "1", 1, NULL)) AS "PostPPPDS1",
        COUNT(IF(Post_PPP_DS = "1", 1, NULL))*100/COUNT(*) AS "PostPPPDS1p",
        COUNT(IF(Post_PPPtotal >= "96", 1, NULL)) AS "PostPPPtotal0",
        COUNT(IF(Post_PPPtotal >= "96", 1, NULL))*100/COUNT(*) AS "PostPPPtotal0p",
        COUNT(IF(Post_PPPtotal <= "95", 1, NULL)) AS "PostPPPtotal1",
        COUNT(IF(Post_PPPtotal <= "95", 1, NULL))*100/COUNT(*) AS "PostPPPtotal1p",
        COUNT(*) AS "total"';

        $districtdata = DB::table('alldata')
            ->selectRaw('district')
            ->groupBy('district')
            ->orderBy('district')
            ->get();

        $provincedata = DB::table('alldata')
            ->selectRaw('province')
            ->groupBy('province')
            ->orderBy('province')
            ->get();

/*
        $users = DB::table('users')
        ->where('votes', '>=', 100)
        ->get();

        $users = DB::table('users')
                    ->where('votes', '<>', 100)
                    ->get();

        $users = DB::table('users')
                    ->where('name', 'like', 'T%')
                    ->get();    
*/

        
        //$matchThese = ['health_zone' => '1', 'province' => 'เชียงราย', 'district' => 'เวียงแก่น', ];
        
        $matchThese = null ;

        if($health_zone<>""){
            $matchThese = ['health_zone' => $health_zone];
        }
        if($province<>""){
            $matchThese = ['province' => $province];
        }
        if($district<>""){
            $matchThese = ['district' => $district];
        }
        if($Year<>""){
            $matchThese = ['year' => $Year];
        }

        if(is_null($matchThese)){
            $list = DB::table('alldata')
            ->select(DB::raw($SQL))
            ->get();
        }else{
            $list = DB::table('alldata')
            ->select(DB::raw($SQL))->where([
                [$matchThese],
            ])
            ->get();
        }

          //  print_r ($list);
        return view('home',compact('list','province','health_zone','district','provincedata','districtdata'));
    }
}
