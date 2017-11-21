<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use session; 

class monstockController extends Controller
{
    public function getMonStock($stock){
        if($stock == session('stock')){
            session(['stock' => $stock]);
            $result = DB::table('article')
            ->select(DB::raw('sum(prixAchat) as stockVal ,sum(prixRevendeur)-sum(prixAchat) as "minProfit",sum(prixVente)-sum(prixAchat) as "maxProfit"'))
            ->join('stock','idstock','=','stock.id')
            ->where('idUser','=',Auth::user()->id)
            ->where('stock.desc','=',$stock)
            ->get();
            $bc = "<li><a class='active' href='/monstock/".$stock."'>MON STOCK</a></li>";
            
            $stockid = DB::table('stock')
            ->where('desc',$stock)
            ->first();

            $pwps = DB::table("article")
            ->where('idStock',$stockid->id)
            ->where(function ($query){
                $query->where('prixVente',null)
                      ->orWhere('prixVente',null);
            })
            ->count();
            return view('monstock',['stockval'=>$result,'breadcrumb'=>$bc,'pwps'=>$pwps]);
        }
        else
        {
            return redirect()->to('/404');
        }
    }

     public function getProductwithoutprice ($stock){
        
        $idStock = DB::table('stock')
        ->select(DB::raw('id'))
        ->where('desc',$stock)
        ->first();

        $result = DB::table('article')
        ->select(DB::raw('article.id as articleid,article.*,ref.*,cmlist.*,cat.*'))
        ->join('ref','ref.id','=','article.refId')
        ->join('cmlist','cmlist.id','ref.id_MClist')
        ->join('cat','cmlist.id_cat','cat.id')
        ->where('idStock',$idStock->id)
        ->where(function ($query){
            $query->where('prixVente',null)
                  ->orWhere('prixVente',null);
        })
        ->get();

        for($i = 0 ; $i<sizeof($result);$i++){
            $DataTemp = DB::table('article')
            ->select(DB::raw('ref'))
            ->join('ref','ref.id','=','refId')
            ->where('article.id',$result[$i]->component)
            ->first();
            $result[$i]->articlemere = $DataTemp->ref;

            $DataTemp2 = DB::table('article')
            ->select(DB::raw('count(*) as count'))
            ->join('stock','article.idStock','=','stock.id')
            ->join('ref','article.refid','=','ref.id')
            ->where('idStock','=',$result[$i]->idStock)
            ->where('preview','=',$result[$i]->preview)
            ->where('htmlDesc','=',$result[$i]->htmlDesc)
            ->where('prixAchat','=',$result[$i]->prixAchat)
            ->where('prixRevendeur','=',$result[$i]->prixRevendeur)
            ->where('prixVente','=',$result[$i]->prixVente)
            ->first();
            $result[$i]->count = $DataTemp2->count;
        }

        $bc = "<li><a href='/monstock/".$stock."'>MON STOCK</a></li>".
        "<li><a class ='active' href='productwithoutprice'>Produits sans prix</a></li>";
        

        return view('pwps',['Data'=>$result,'breadcrumb'=>$bc]);
    }
}
