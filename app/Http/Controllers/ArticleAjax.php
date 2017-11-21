<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
class ArticleAjax extends Controller
{

    public function ListMarque(Request $request){
        
        //ajax categorie field
        if($request->input('field-name')=='cat')
        {
            $val = $request->input('id');
            $Result = DB::table('marque')
                ->select( DB::raw('CMlist.id,marque.desc'))
                ->join('CMlist','marque.id','=','CMlist.id_marque')
                ->join('cat','cat.id','=','CMlist.id_cat')
                ->where('cat.desc','=',$val)
                ->get();
                return response()->json($Result,200);
        }

        //ajax reference field
        if($request->input('field-name')=='marque')
        {
            $val = $request->input('id');
            $Result = DB::table('ref')
                ->select( DB::raw('ref.id,ref.ref as "desc"'))
                ->join('CMlist','ref.id_MClist','=','CMlist.id')
                ->where('CMlist.id','=',$val)
                ->get();
                return response()->json($Result,200);
        }

        //ajax isNeedYear field
        if($request->input('field-name')=='isNeedYear')
        {
            $val = $request->input('id');
            $Result = DB::table('CMlist')
                ->select( DB::raw('product_year'))
                ->where('id','=',$val)
                ->get();
                return response()->json($Result,200);
        }

        //ajax ProductImage field        
        if($request->input('field-name')=='ProductImage')
        {
            $val = $request->input('id');
            $Result = DB::table('ref')
                ->select( DB::raw('id,image'))
                ->where('id','=',$val)
                ->get();
                return response()->json($Result,200);
        }

        if($request->input('field-name')=='ProductImage')
        {
            $val = $request->input('id');
            $Result = DB::table('ref')
                ->select( DB::raw('id,image'))
                ->where('id','=',$val)
                ->get();
                return response()->json($Result,200);
        }

        if($request->input('field-name')=='CpuList')
        {
            $val = $request->input('id');
            $idCompatibility = DB::table('ref')
                ->select(DB::raw('idconfig'))
                ->where('id','=',$val)
                ->first();

            $Result = DB::table('ref')
                ->select( DB::raw('ref.id, ref.ref'))
                ->join('creflist','creflist.idRef','=','ref.id')
                ->join('cpugen','creflist.idCpuGen','=','cpugen.id')
                ->join('cclist','cclist.idCpuGen','=','cpugen.id')
                ->join('compatibilty','cclist.idCompatibilty','=','compatibilty.id')
                ->where('compatibilty.id','=',$idCompatibility->idconfig)
                ->get();
                return response()->json($Result,200);
        }

        if($request->input('field-name') == 'RamType')
        {
            $val = $request->input('id');
            $idCompatibility = DB::table('ref')
                ->select(DB::raw('idconfig'))
                ->where('id','=',$val)
                ->first();

            $Result = DB::table('ramtype')
                ->select( DB::raw('ramtype.id, ramtype.desc, ramtype.frequency'))
                ->join('crlist','ramtype.id','=','crlist.idRamType')
                ->join('compatibilty','compatibilty.id','=','crlist.idCompatibilty')
                ->where('compatibilty.id','=',$idCompatibility->idconfig)
                ->get();
                return response()->json($Result,200);
        }
        $html ='<form method="GET" action="testajax">
        <input type="hidden" name="field-name" value="cat">
        {{ csrf_field() }}
        <button value="submit">ok<button>
        </from>';   
        return $html;
    }

    public function addArticle(Request $request){
        $Stock = DB::table('stock')
                    ->select(DB::raw('id'))
                    ->where('idUser','=',$request->input('idUser'))
                    ->first();
        if($request->input('isSeperete')){
            for($i=0; $i<$request->input('qte');$i++){
                $x = var_dump($request->input('refid'));
                $x += var_dump($request->input('ramArray'));
                /*for($j=0;$j<$request->input('ramArray').length();$j++){
                    $x += var_dump($request->input('ramArray')[$j]);
                }*/
            }
        }
        else
        {
            for($i=0;$i<$request->input('qte');$i++)
            {
                DB::table('article')->insert(
                    [
                        'id'=> 0,
                        'refId' => $request->input('refid'),
                        'isSeperete' => $request->input('isSeperete'),
                        'preview' => $request->input('preview'),
                        'htmlDesc' => $request->input('htmlDesc'),
                        'etat' => $request->input('etat'),
                        'prixAchat' => $request->input('prixAchat'),
                        'prixRevendeur' => $request->input('prixRevendeur'),
                        'prixVente' => $request->input('prixVente'),
                        'component' => null,
                        'indexed' => $request->input('indexed'),
                        'idStock' => $Stock->id
                    ]
                );
            }
        }
            return response()->json($x,200);
        }
    
    public function getMonStock(){
        $result = DB::table('article')
            ->select(DB::raw("ref.ref as '0' , article.etat as '1',cat.desc as '2',preview as '3',article.prixAchat as '4',article.prixRevendeur as '5',article.prixVente as '6', COUNT(*) as '7'"))
            ->join('ref','article.refId','=','ref.id')
            ->join('cmlist','ref.id_MClist','=','cmlist.id')
            ->join('cat','cat.id','=','cmlist.id_cat')
            ->join('stock','stock.id','=','article.idStock')
            ->where('stock.desc','=',session('stock'))
            ->groupBy('ref.id','article.etat', 'article.preview' , 'article.prixAchat' , 'article.prixRevendeur' , 'article.prixVente')
            ->get();
            
            for($i=0 ;$i < sizeof($result);$i++){
                $link = DB::table('article')
                ->select(DB::raw("article.id"))
                ->join('ref','article.refId','=','ref.id')
                ->join('cmlist','ref.id_MClist','=','cmlist.id')
                ->join('cat','cat.id','=','cmlist.id_cat')
                ->join('stock','stock.id','=','article.idStock')
                ->where('preview','=',$result[$i]->{'3'})
                ->where('ref.ref','=',$result[$i]->{'0'})
                ->where('article.etat','=',$result[$i]->{'1'})
                ->where('article.prixAchat','=',$result[$i]->{'4'})
                ->where('article.prixRevendeur','=',$result[$i]->{'5'})
                ->where('article.prixVente','=',$result[$i]->{'6'})
                ->where('indexed','=',true)
                ->orwhere('idstock','=',session('stock'))                                                                                                 
                ->first();
                $result[$i]->{'8'} = $link->id;
            }
        
        return response()->json($result,200);
    }
}
