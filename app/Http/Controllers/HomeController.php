<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;



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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('stock')
        ->select(DB::raw('stock.desc as "stock"'))
        ->where('idUser','=',Auth::user()->id)
        ->first();
        session(['stock' => $result->stock]);
        return view('accueil');
    }

    public function article($id)
    {
        $result = DB::table('article')
        ->join('ref','refId','=','ref.id')
        ->join('stock','article.idStock','=','stock.id')
        ->where('article.id','=',$id)
        ->first();
        if($result->idUser == Auth::user()->id){
            $owned = true;  
        }
        else
        {
            $owned = false;
        }
        $count = DB::table('article')
        ->select(DB::raw('count(*) as count'))
        ->join('stock','article.idStock','=','stock.id')
        ->join('ref','article.refid','=','ref.id')
        ->where('idStock','=',$result->idStock)
        ->where('preview','=',$result->preview)
        ->where('htmlDesc','=',$result->htmlDesc)
        ->where('prixAchat','=',$result->prixAchat)
        ->where('prixRevendeur','=',$result->prixRevendeur)
        ->where('prixVente','=',$result->prixVente)
        ->first();
        $bc = "<li><a href='/monstock/".$result->desc."'>MON STOCK</a></li>
        <li><a class='active' href='/article/".$id."'>".$result->ref."</a></li>";
        return view('article',['data'=>$result,'isOwned'=>$owned,'count'=>$count,'breadcrumb'=>$bc]);
    }


        ///////////////////////////////////////////////

      public function newcmd(Request $request){
        
        return
             $request->input('TypePaiement');

        /*DB::table('commande')
        ->insert(
            [
                'id'=>0,
                'idVendeur'=>Auth::user()->id,
                'idachteur'=>1,
                'dateCommande'=>new date(),
                'prix'=>$request->input('')
            ]
        );*/
    }

        //////////////////////////////////////////////
    
    
    public function delete($id){
        
        $result = DB::table('article')
        ->join('stock','article.idStock','=','stock.id')
        ->join('ref','article.refid','=','ref.id')
        ->where('article.id','=',$id)
        ->first();

        $count = DB::table('article')
        ->select(DB::raw('count(*) as count'))
        ->join('stock','article.idStock','=','stock.id')
        ->join('ref','article.refid','=','ref.id')
        ->where('idStock','=',$result->idStock)
        ->where('preview','=',$result->preview)
        ->where('htmlDesc','=',$result->htmlDesc)
        ->where('prixAchat','=',$result->prixAchat)
        ->where('prixRevendeur','=',$result->prixRevendeur)
        ->where('prixVente','=',$result->prixVente)
        ->first();

        $bc = "<li><a href='/monstock/".$result->desc."'>MON STOCK</a></li>
        <li><a href='/article/".$id."'>".$result->ref."</a></li>
        <li><a class='active' href='/article/".$id."/delete'>suppression</a></li>";
        return view('delete',['data'=>$result,'count'=>$count,'breadcrumb'=>$bc]);
    }

    public function editArticle(Request $request,$id){
        $result = DB::table('article')
        ->join('stock','article.idStock','=','stock.id')
        ->join('ref','article.refid','=','ref.id')
        ->where('article.id','=',$id)
        ->first();

        DB::table('article')
        ->join('stock','article.idStock','=','stock.id')
        ->join('ref','article.refid','=','ref.id')
        ->where('idStock','=',$result->idStock)
        ->where('preview','=',$result->preview)
        ->where('htmlDesc','=',$result->htmlDesc)
        ->where('prixAchat','=',$result->prixAchat)
        ->where('prixRevendeur','=',$result->prixRevendeur)
        ->where('prixVente','=',$result->prixVente)
        ->update(['prixVente'=>$request->input("prixVente"),'prixAchat'=>$request->input("prixAchat"),'prixRevendeur'=>$request->input("prixRevendeur")]);

        return redirect()->to("article/".$id);
    }

    public function confirmedDelete(Request $request, $id){
        $result = DB::table('article')
        ->join('ref','article.refid','=','ref.id')
        ->join('stock','article.idStock','=','stock.id')
        ->where('article.id','=',$id)
        ->first();

        DB::table('article')
        ->where('idStock','=',$result->idStock)
        ->where('preview','=',$result->preview)
        ->where('htmlDesc','=',$result->htmlDesc)
        ->where('prixAchat','=',$result->prixAchat)
        ->where('prixRevendeur','=',$result->prixRevendeur)
        ->where('prixVente','=',$result->prixVente)
        ->take($request->input('NbrSuppArt'))
        ->delete();

        return redirect()->to('monstock/'.$result->desc);
    }

    public function getCommands(){
        
        $bc = "<li><a class='active' href='/commands'>MES COMMANDES</a></li>";

        return view('commands',['breadcrumb'=>$bc]);
    }

    public function getSociete(){
        
        $bc = "<li><a class='active' href='/masociete'>MES SOCIETE</a></li>";

        return view('societe',['breadcrumb'=>$bc]);
    }

    public function getDashboard(){
        
        $bc = "<li><a class='active' href='/dashboard'>TABLEU DE BOARD</a></li>";

        return view('dashboard',['breadcrumb'=>$bc]);
    }

}
