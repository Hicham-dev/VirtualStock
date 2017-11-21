@extends('layouts.app')
@section('title')
Mes Commandes
@endsection
@section('commandes')
bg-success
@endsection
@section('breadcrumb')
    {!! $breadcrumb !!}
@endsection
@section('content')
<div class="row">
    <div class="col-md-2">
    <ul class="list-group">
        <li class="list-group-item"><a href="#CommandeDeVenteEnCours">Demande (en cours)<span class="badge">{{$countDemmandeInprogress}}</span></a></li>
        <li class="list-group-item"><a href="#CommandeDachatTerminerEnCours">Offres (en cours)<span class="badge">{{$countOffresInprogress}}</span></a></li>
        <li class="list-group-item"><a href="#CommandeDeVente">Demande (Terminer)</a> <span class="badge">{{$countDemmandeFinished}}</span></li>        
        <li class="list-group-item"><a href="#CommandeDachatTerminer">Offres (Terminer) <span class="badge">{{$countOffresFinished}}</span> </a></li>
        
    </ul>
    </div>
       
        <div class="col-md-6">
            <h2 id="CommandeDachatTerminerEnCours">Demandes d'achat (en cours)</h2>
            @for ($i = 0; $i < sizeof($demmandes); $i++)
                <div id="portlet-circular" class="panel panel-default portlet">
                    <div class="panel-heading ">
                        <div class="panel-title">Nom de stock a Commander l'article ..</div>
                        <div class="panel-controls">
                            <ul>
                                <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="pg-arrow_maximize"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body" style="display: block;">
                        <div class="col-md-3">
                            <img src="/storage/photos/EliteBook840G3.jpg" alt="EliteBook840G3" width="100%">
                            <p class="small hint-text text-center"> Occasion </p>
                        </div>
                        <div class="col-md-4">
                            <p class="bold">Nom d'article</p>
                            <p>{{$demmandes[$i]->preview}}</p>
                        </div>
                        <div class="col-md-4">
                            <div class='row'>
                                <div class='col-md-6'>
                                    <p>Commande<br>Date<br>Fournisseur<br>Prix origine<br>Prix proposé<br>Quantité</p>
                                </div>
                                <div class='col-md-6'>
                                    <p class='bold'>{{substr('00000000',0,8-sizeof($demmandes[$i]->id)).$demmandes[$i]->id}}<br>{{$demmandes[$i]->dateCommande}}<br>{{$demmandes[$i]->fournisseur}}<br>{{$demmandes[$i]->prixRevendeur}} DH<br>{{$demmandes[$i]->prixRevendeur}} DH<br>{{$demmandes[$i]->Quantite}}</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-12 b-t b-dashed b-grey text-right'>
                            
                            <br>
                            <form action="commandes/{{$demmandes[$i]->id}}/annuler" method="post">
                                {{ csrf_field() }}
                                <button class="btn" type="submit">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endfor   
            
            <h2 id="CommandeDeVenteEnCours">Offres de vente (en cours)</h2>
            @for ($i = 0; $i < sizeof($offres); $i++)
            <div id="portlet-circular" class="panel panel-default portlet">
                <div class="panel-heading ">
                    <div class="panel-title">Nom de stock a Commander l'article ..</div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="pg-arrow_maximize"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body" style="display: block;">
                    <div class="col-md-3">
                        <img src="/storage/photos/EliteBook840G3.jpg" alt="EliteBook840G3" width="100%">
                        <p class="small hint-text text-center"> Occasion </p>
                    </div>
                    <div class="col-md-4">
                        <p class="bold">Nom d'article</p>
                        <p>CPU : AMD PRO A10-8700B, RAM : 32 GO, Stokage : 16 GO , GPU : nvidia GTX 1050 2 GO, Caméra HD, Clavier retroeclairé, Empreinte,	</p>
                    </div>
                    <div class="col-md-4">
                        <div class='row'>
                            <div class='col-md-6'>
                                    <p>Commande<br>Date<br>Fournisseur<br>Prix origine<br>Prix proposé<br>Quantité</p>
                                </div>
                                <div class='col-md-6'>
                                    <p class='bold'>{{substr('00000000',0,8-sizeof($offres[$i]->id)).$offres[$i]->id}}<br>{{$offres[$i]->dateCommande}}<br>{{$offres[$i]->fournisseur}}<br>{{$offres[$i]->prixRevendeur}} DH<br>{{$offres[$i]->prix}} DH<br>{{$offres[$i]->Quantite}}</p>
                                </div>
                            <div class="col-md-7">
                                <p>
                                    Voulez négocier le prix ?
                                </p>
                            </div>
                    <form action="commandes/{{$offres[$i]->id}}/reject" style="display:inline" method="post">
                            {{csrf_field()}}
                            <div class="col-md-5">
                                <input type="text" class="form-control margin-5" placeholder="Montant" style="width: 80px;">
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12 b-t b-dashed b-grey text-right'>
                        <br>
                        <button class="btn btn-success" type="submit">Confirmer</button>
                    </form>

                    <form action="commandes/{{$offres[$i]->id}}/reject" style="display:inline" method="post">
                        {{csrf_field()}}
                        <button class="btn" type="submit">Réfuser</button>
                    </form>
                    </div>
                </div>
            </div>
            @endfor
            <h2 id="CommandeDachatTerminer">Demandes d'achat Terminer</h2>
            @for ($i = 0; $i < sizeof($demmandesFinished); $i++)
            <div id="portlet-circular" class="panel panel-default portlet">
                <div class="panel-heading ">
                    <div class="panel-title">Nom de stock a Commander l'article ..</div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="pg-arrow_maximize"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body" style="display: block;">
                    <div class="col-md-3">
                        <img src="/storage/photos/EliteBook840G3.jpg" alt="EliteBook840G3" width="100%">
                        <p class="small hint-text text-center"> Occasion </p>
                    </div>
                    <div class="col-md-4">
                        <p class="bold">Nom d'article</p>
                        <p>CPU : AMD PRO A10-8700B, RAM : 32 GO, Stokage : 16 GO , GPU : nvidia GTX 1050 2 GO, Caméra HD, Clavier retroeclairé, Empreinte,	</p>
                    </div>
                    <div class="col-md-4">
                        <div class='row'>
                            <div class='col-md-6'>
                                    <p>Commande<br>Date<br>Fournisseur<br>Prix origine<br>Prix vente<br>Quantité<br>Etat</p>
                                </div>
                                <div class='col-md-6'>
                                   <p class='bold'>{{substr('00000000',0,8-sizeof($demmandesFinished[$i]->id)).$demmandesFinished[$i]->id}}<br>{{$demmandesFinished[$i]->dateCommande}}<br>{{$demmandesFinished[$i]->fournisseur}}<br>{{$demmandesFinished[$i]->prixRevendeur}} DH<br>{{$demmandesFinished[$i]->prix}} DH<br>{{$demmandesFinished[$i]->Quantite}}<br>{{(($demmandesFinished[$i]->etat == 1) ? 'Vendu':(($demmandesFinished[$i]->etat == 2) ? 'Annulé':'Rejeté'))}}</p>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <h2 id="CommandeDeVente">Offres de vente Terminer</h2>
            @for ($i = 0; $i < sizeof($offresFinished); $i++)
            <div id="portlet-circular" class="panel panel-default portlet">
                <div class="panel-heading ">
                    <div class="panel-title">Nom de stock a Commander l'article ..</div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="pg-arrow_maximize"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body" style="display: block;">
                    <div class="col-md-3">
                        <img src="/storage/photos/EliteBook840G3.jpg" alt="EliteBook840G3" width="100%">
                        <p class="small hint-text text-center"> Occasion </p>
                    </div>
                    <div class="col-md-4">
                        <p class="bold">Nom d'article</p>
                        <p>CPU : AMD PRO A10-8700B, RAM : 32 GO, Stokage : 16 GO , GPU : nvidia GTX 1050 2 GO, Caméra HD, Clavier retroeclairé, Empreinte,	</p>
                    </div>
                    <div class="col-md-4">
                        <div class='row'>
                            <div class='col-md-6'>
                                    <p>Commande<br>Date<br>Client<br>Prix origine<br>Prix vente<br>Quantité<br>Etat</p>
                                </div>
                                <div class='col-md-6'>
                                   <p class='bold'>{{substr('00000000',0,8-sizeof($offresFinished[$i]->id)).$offresFinished[$i]->id}}<br>{{$offresFinished[$i]->dateCommande}}<br>{{$offresFinished[$i]->fournisseur}}<br>{{$offresFinished[$i]->prixRevendeur}} DH<br>{{$offresFinished[$i]->prix}} DH<br>{{$offresFinished[$i]->Quantite}}<br>{{(($offresFinished[$i]->etat == 1) ? 'Vendu':(($offresFinished[$i]->etat == 2) ? 'Annulé':'Rejeté'))}}</p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
</div>
<style>
    .margin-5{
        margin: 5px; 
    }
</style>
@endsection
@section('script')
<script src="assets/js/portlets.js" type="text/javascript"></script> 
@endsection