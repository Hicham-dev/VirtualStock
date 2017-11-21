<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class liveSearchController extends Controller
{
    public function livePreview(Request $request){
        
        if($request->localSearch){
            if($request->liveSearch != null){
                $data =  DB::table('article')
                ->select(DB::raw("ref.ref  , article.etat ,cat.desc ,preview ,article.prixAchat ,article.prixRevendeur ,article.prixVente, COUNT(*) as 'count'"))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('stock.desc','=',session('stock'))
                ->where('ref.ref','like','%'.$request->liveSearch.'%')
                ->groupBy('ref.id','article.etat', 'article.preview' , 'article.prixAchat' , 'article.prixRevendeur' , 'article.prixVente')
                ->get();
                
                for($i=0 ;$i < sizeof($data);$i++){
                $link = DB::table('article')
                ->select(DB::raw("article.id"))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('preview','=',$data[$i]->preview)
                ->where('ref.ref','=',$data[$i]->ref)
                ->where('article.etat','=',$data[$i]->etat)
                ->where('article.prixAchat','=',$data[$i]->prixAchat)
                ->where('article.prixRevendeur','=',$data[$i]->prixRevendeur)
                ->where('article.prixVente','=',$data[$i]->prixVente)
                ->where('indexed','=',true)
                ->orwhere('idstock','=',session('stock'))                                                                                                 
                ->first();
                $data[$i]->id = $link->id;
            }

                $suggestions = DB::table('article')
                ->select(DB::raw("ref.ref "))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('stock.desc','=',session('stock'))
                ->groupBy('ref.ref')
                ->get();
            }
            else
            {
                $data = [];
                $suggestions = [];
            }
        }
        else
        {
                $data = DB::table('article')
                ->select(DB::raw("ref.ref  , article.etat ,cat.desc ,preview ,article.prixAchat ,article.prixRevendeur ,article.prixVente, COUNT(*) as 'count'"))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('stock.desc','!=',session('stock'))
                ->where('ref.ref','like','%'.$request->liveSearch.'%')
                ->groupBy('ref.id','article.etat', 'article.preview' , 'article.prixAchat' , 'article.prixRevendeur' , 'article.prixVente','stock.id')
                ->get();

                $suggestions = DB::table('article')
                ->select(DB::raw("ref.ref "))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('lower(desc)','!=',session('stock'))
                ->groupBy('ref.ref')
                ->get();
        }
        
        return response()->json([$data,$suggestions,$request->liveSearch, 200]);
        
    }

    public function testLivePreview(){
            return  DB::table('article')
            ->select(DB::raw("ref.ref "))
            ->join('ref','article.refId','=','ref.id')
            ->join('cmlist','ref.id_MClist','=','cmlist.id')
            ->join('cat','cat.id','=','cmlist.id_cat')
            ->join('stock','stock.id','=','article.idStock')
            ->where('lower(stock.desc)','=',strtolower(session('stock')))
            ->groupBy('ref.ref')
            ->get();
    }
}

