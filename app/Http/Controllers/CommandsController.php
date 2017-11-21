<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class CommandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $demmandes = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idVendeur','=',Auth::user()->id)
        ->where('commande.etat',0)
        ->get();
        $i=0;
        foreach ($demmandes as $var){
            $demmandes[$i]->fournisseur = DB::table('stock')
                                              ->where('idUser',$var->idachteur)
                                              ->first()
                                              ->desc; 
            $i++;
        }


        $demmandesFinished = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idVendeur','=',Auth::user()->id)
        ->where('commande.etat','!=',0)
        ->get();
        $i=0;
        foreach ($demmandesFinished as $var){
            $demmandesFinished[$i]->fournisseur = DB::table('stock')
                                              ->where('idUser',$var->idachteur)
                                              ->first()
                                              ->desc; 
            $i++;
        }


        $countDemmandeInprogress = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idVendeur',Auth::user()->id)
        ->where('commande.etat',0)
        ->count();
    
        

        $countDemmandeFinished = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idVendeur',Auth::user()->id)
        ->where('commande.etat','!=',0)
        ->count();
        

        $offres = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idachteur','=',Auth::user()->id)
        ->where('commande.etat',0)
        ->get();
        $i=0;
        foreach ($offres as $var){
            $offres[$i]->fournisseur = DB::table('stock')
                                              ->where('idUser',$var->idachteur)
                                              ->first()
                                              ->desc; 
            $i++;
        }


        $offresFinished = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idachteur','=',Auth::user()->id)
        ->where('commande.etat','!=',0)
        ->get();
        $i=0;
        foreach ($offresFinished as $var){
            $offresFinished[$i]->fournisseur = DB::table('stock')
                                              ->where('idUser',$var->idachteur)
                                              ->first()
                                              ->desc; 
            $i++;
        }


        $countOffresInprogress = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idachteur',Auth::user()->id)
        ->where('commande.etat',0)
        ->count();
        

        $countOffresFinished = DB::table("article")
        ->join('commande','article.id','commande.idRef')
        ->where('idachteur',Auth::user()->id)
        ->where('commande.etat','!=',0)
        ->count();
        


        $bc = "<li><a class='active' href='/commands'>MES COMMANDES</a></li>";
        return view('commands',['breadcrumb'=>$bc,'demmandes'=>$demmandes,'demmandesFinished'=>$demmandesFinished,'countDemmandeInprogress'=>$countDemmandeInprogress,'countDemmandeFinished'=>$countDemmandeFinished,'offres'=>$offres,'offresFinished'=>$offresFinished,'countOffresInprogress'=>$countOffresInprogress,'countOffresFinished'=>$countOffresFinished]); 
    }

    public function annuler($idCommand)
    {
        DB::table('commande')
        ->where('id',$idCommand)
        ->update(['etat'=>2]);
        //send redirect 
        return redirect('/commandes');    
    }

    public function reject($idCommand)
    {
        DB::table('commande')
        ->where('id',$idCommand)
        ->update(['etat'=>3]);
        //send redirect 
        return redirect('/commandes');    
    }

    
    public function confirmer($idCommand,Request $request)
    {
        DB::table('commande')
        ->where('id',$idCommand)
        ->update(['etat'=>1]);
        //send redirect 
        return redirect('/commandes');    
    }

    public function confirm(Request $request)
    {
        if($request->input('')){
            
        }
    }
}
