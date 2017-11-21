@extends('layouts.app')
@section('title')
    Article
@endsection
@section('monstock') 
    bg-success 
@endsection 
@section('breadcrumb')
    {!! $breadcrumb !!}
@endsection
@section('content')
<style>
    .mt-20{
        margin-top: 20px;
    }
</style>
<div class='row'>
    <div class='panel panel-default col-md-6'>
        <div class='panel-heading'>
            <div class='panel-title'>&nbsp;ID : {{$data->id}}</div>
            <h1 class='bold' >{{$data->ref}}</h1> 
            
        </div>
        <div class='panel-body b-t b-dashed b-grey mt-20'>
            <div class='row mt-20'>
                <div class="col-md-7">
                    <p>
                        <h4>Configuration</h4>
                        <div>
                        {!! $data->htmlDesc !!}
                        </div>
                        <h4>Stock Infos</h4>
                        <table width='100%'> 
                            <tr>
                                <td width='30%'><span class='bold'>ID Stock<span></td>
                                <td width='70%'>{{$data->idStock}}</td>
                            </tr>
                            <tr>
                                <td width='30%'><span class='bold'>Nom du Stock<span></td>
                                <td width='70%'>{{$data->desc}}</td>
                            </tr>
                        </table>
                        <h4>Vendeur</h4>
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>
                <div class='col-md-5'>
                    <img src="/storage/photos/{{$data->image}}" alt="{{$data->image}}" width="100%">
                </div>
                <!-- widgets -->
                <div class='col-md-6'>
                    <div class="ar-2-1">
                        <div class="widget-3 panel no-border bg-primary no-margin widget-loader-bar">
                            <div class="panel-body padding-10">
                                <h3 class='no-margin text-white p-b-5'>QUANTITE</h3>
                                <h2 class='bottom-right  text-white p-b-10'>
                                    {{$count->count}} <span class='bold'>{{ (($count->count == 1) ? "Article" : "Articles") }}&nbsp;&nbsp;</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class="ar-2-1">
                            <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                            <div class="panel-body padding-20">
                                <h3 class='no-margin text-white p-b-5 p-r-10'>PRIX D'UNITE</h3>
                                <h2 class='bottom-right  text-white p-b-10'>
                                    {{$data->prixRevendeur}} <span class='bold'>DH &nbsp;&nbsp;</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <!-- Right block -->
    <div class='col-md-6'>
        <div class="irs-wrapper primary padding-40">
            <h2>La valeur prix moyenne <strong>(Revendeur)</strong></h2>
            <input type="text" name=""  class="prix_revendeur" />
        </div>
    </div>

    @if(!$isOwned)
        
        <div class='col-md-6 padding-40'>
            <div class="row panel panel-default">
                <div class="col-sm-5">
                    <div class="panel panel-transparent">
                        <div class="panel-heading">
                            <div class="panel-title">Formulaire de commande
                            </div>
                        </div>
                        <div class="panel-body">
                            <h3>Commande d'article {{$data->ref}}</h3>
                            <p >Le formulaire de commande va ajouter des articles dans votre compte VirtualStock. Pour continuer, remplissez les champs obligatoires identifiés par une <span style="padding-top: 5px;" class="form-group-default required">*</span> et cliquez sur Commander </p>
                            <p class="small hint-text"> <a href="#">Où cliquer ici si pour rapporter un problème </a></p> 
                            <br>
                            <div>
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img width="35" height="35" src="http://virtuelstock.ma/assets/img/profiles/b.jpg" alt="profile" >
                                    <div class="chat-status available">
                                    </div>
                                </div>
                                <div class="inline m-l-10">
                                    <p class="small hint-text">Par {{ Auth::user()->user_name }}<br> sur {{session('stock')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            <form autocomplete="off" action='{{$data->id}}/newcommande' method='get'>
                                <input type="hidden" name='idVendeur' value='{{$data->idUser}}'>
                                <p>Informations sur la commande</p>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default" aria-required="true">
                                        <label>Réference d'article</label>
                                        <input type="text" class="form-control" name="refArticle" value='{{$data->ref}}' aria-required="true">
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default input-group required" aria-required="true">
                                                <label>Prix unitaire</label>
                                                <input type="text" class="form-control" name="PrixUnitaire" required aria-required="true">
                                                <span class="input-group-addon">DH</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Quantité</label>
                                                <input type="number" min='1' value='1' class="form-control" name="qte">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-10">Informations sur paiement</p>
                                        <div class="form-group-attached">
                                            <div class="row clearfix">
                                            <div class="col-md-12">
                                            <div class="form-group form-group-default form-group-default-select2 ">
                                                <label class="">Modalités de Paiements</label>
                                                <select class="full-width select2-offscreen" name='MPaiement' placeholder="500" data-init-plugin="select2" tabindex="-1" title="">
                                                <option value="Espece">Espèce</option>
                                                <option value="cheque">Chéque</option>
                                                <option value="virement">Virement</option>
                                                <option value="effetcommerce">Effet de commerce</option>
                                                </select>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default form-group-default-select2">
                                                <label class="">Type de Paiements</label>
                                                <select class="full-width select2-offscreen" name='TypePaiement' placeholder="500" data-init-plugin="select2" tabindex="-1" title="">
                                                <option value="compete">Complète</option>
                                                <option value="partiel">Partiel</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                <label class="">Nombre des tranches</label>
                                                <input class="form-control" value='1' name='NbrTranche' min='0' type="number">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                <br>
                                <div class="pull-left">
                                    <div class="checkbox check-success">
                                        <input type="checkbox" value="0" required id="checkbox-agree">
                                        <label for="checkbox-agree">J'accepte les conditions de virtuelstock </label>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">Commander</button>
                                <button type ='reset'class="btn btn-default"><i class="pg-close"></i> Annuler</button>
                            </form>
                        </div>
                    </div>

                </div>
                </div>
        </div>
        
    @else
        @if($data->component == null)
        <div class='col-md-6'>
            <div class="irs-wrapper success p-r-40 p-l-40">
                <h2>La valeur prix moyenne <strong>(Vente)</strong></h2>
                <input type="text" name=""  class="prix_finale" />
            </div>
        </div>
        
        <div class='col-md-6 padding-40'>
            <div class="row panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Modification sur l'article</div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-5">
                        <div class="panel panel-transparent">
                            <h3>{{$data->ref}}</h3>
                            <p>Ce formulaire va Modifier des informations sur cette article dans votre compte VirtualStock. Pour continuer, remplissez les champs obligatoires identifiés par une <span style="padding-top: 5px;" class="form-group-default required">*</span> et cliquez sur Modifier</p>
                            <p class="small hint-text"> <a href="{{Request::url()}}/delete/" class='a-red'><strong>Cliquer ici pour supprimer cette article</strong> </a></p> 
                            <br>
                            <div>
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img width="35" height="35" src="http://virtuelstock.ma/assets/img/profiles/b.jpg" alt="profile" >
                                    <div class="chat-status available">
                                    </div>
                                </div>
                                <div class="inline m-l-10">
                                    <p class="small hint-text">Par {{ Auth::user()->user_name }}<br> sur {{session('stock')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-7'>
                        <div>
                            <p>Modifications prix</p>
                            <form action="{{Request::url()}}/edit" method='GET'>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default input-group">
                                        <label>Prix d'achat</label>
                                        <input type="number" class="form-control" placeholder='{{$data->prixAchat}}' name="prixAchat" required>
                                        <span class="input-group-addon">DH</span>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default input-group " >
                                                <label>Prix Revendeur</label>
                                                <input type="number" class="form-control" placeholder='{{$data->prixRevendeur}}' name="prixRevendeur" required>
                                                <span class="input-group-addon">DH</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default input-group " >
                                                <label>Prix de Vente</label>
                                                <input type="number" class="form-control" placeholder='{{$data->prixVente}}' name="prixVente" required>
                                                <span class="input-group-addon">DH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">Modifier</button>
                                <button class="btn" type="reset">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class='col-md-6'>
            <div class="irs-wrapper success p-r-40 p-l-40">
                <h2>La valeur prix moyenne <strong>(Vente)</strong></h2>
                <input type="text" name=""  class="prix_finale" />
            </div>
        </div>
        
        <div class='col-md-6 padding-40'>
            <div class="row panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Modification sur l'article</div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-5">
                        <div class="panel panel-transparent">
                            <h3>{{$data->ref}}</h3>
                            <p>Ce formulaire va Modifier des informations sur cette article dans votre compte VirtualStock. Pour continuer, remplissez les champs obligatoires identifiés par une <span style="padding-top: 5px;" class="form-group-default required">*</span> et cliquez sur Modifier</p>
                            <br>
                            <div>
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img width="35" height="35" src="http://virtuelstock.ma/assets/img/profiles/b.jpg" alt="profile" >
                                    <div class="chat-status available">
                                    </div>
                                </div>
                                <div class="inline m-l-10">
                                    <p class="small hint-text">Par {{ Auth::user()->user_name }}<br> sur {{session('stock')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-7'>
                        <div>
                            <p>Modifications prix</p>
                            <form action="{{Request::url()}}/edit" method='GET'>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default input-group">
                                        <label>Article mére</label>
                                        <p>&nbsp;&nbsp; <a href="/article/{{$data->component}}">{{$data->component}}</a></p>
                                        <span class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default input-group required" >
                                                <label>Prix Revendeur</label>
                                                <input type="number" class="form-control" name="prixRevendeur" required>
                                                <span class="input-group-addon">DH</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default input-group required" >
                                                <label>Prix de Vente</label>
                                                <input type="number" class="form-control" name="prixVente" required>
                                                <span class="input-group-addon">DH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">Modifier</button>
                                <button class="btn" type="reset">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
</div>
@endsection
@section('script')
<script src="http://virtuelstock.ma/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/plugins/ion-slider/js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/js/slider.js" type="text/javascript"></script>
@endsection()

@section('css')
<link href="http://virtuelstock.ma/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://virtuelstock.ma/assets/plugins/ion-slider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://virtuelstock.ma/assets/plugins/ion-slider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" media="screen" />
@endsection