@extends('layouts.app')
@section('title')
Suppression
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
    <div class='panel panel-default col-md-6 col-md-offset-3'>
        <div class='panel-heading'>
            <div class='panel-title'>&nbsp;ID : {{$data->id}}</div>
            <h1 class='bold' >{{$data->ref}}</h1>
             
            
        </div>
        <div class='panel-body b-t b-dashed b-grey mt-20'>
            <div class='row mt-20'>
                <div class="col-md-7">
                    <p>
                        <h4>Configuration</h4>
                        <table width='100%'>
                            <tr>
                                <td width='30%'><span class='bold'>CPU</span></td>
                                <td width='70%'>i7 7700k</td>
                            </tr>
                            <tr>
                                <td><span class='bold'>RAM</span></td>
                                <td>8 Go</td>
                            </tr>
                            <tr>
                                <td><span class='bold'>Stockage</span></td>
                                <td>256 Go SSD + 1 To HDD</td>
                            </tr>
                            <tr>
                                <td><span class='bold'>Résolution</span></td>
                                <td>1920x1080</td>
                            </tr>
                            <tr>
                                <td><span class='bold'>Clavier</span></td>
                                <td>AZERTY</td>
                            </tr>
                            <tr>
                                <td><span class='bold'>Accessoires</span></td>
                                <td>Clavier retroeclairé, Caméra HD</td>
                            </tr>
                        </table>
                        
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
                        <h4>Vendeur contact</h4>
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
                <form action="{{Request::url()}}/confirmed">
                        <div class="form-group b-t b-dashed b-grey mt-20">
                            <div class="row clearfix  mt-20">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default input-group ">
                                        <label class="">Quantité</label>
                                        <input class="form-control" value='{{$count->count}}' name='NbrSuppArt' min='0' type="number">
                                        <span class="input-group-addon">N°</span>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <p>Voulez vous vraiment supprimer cette article ?</p>
                                    <div class="checkbox check-success">
                                        <input type="checkbox" value="0" required id="checkbox-agree">
                                        <label for="checkbox-agree">J'approuve cette action</label>
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <input type="submit" class='btn btn-success' value='supprimer'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
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