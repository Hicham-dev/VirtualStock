@extends('layouts.app') 
@section('title')

    Mon Stock

@endsection
@section('monstock') 

    bg-success 

@endsection 

@section('breadcrumb')
{!! $breadcrumb !!}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-9">
        <div class="row">
            <div class="col-sm-12 text-right">
                <button class="btn btn-primary btn-cons m-b-10" type="button" data-toggle="modal" data-target="#myModal"><i class="pg-form"></i> <span class="bold">Ajouter article(s)</span></button>
            </div>
            <div class="col-ms-3 col-sm-12 bg-white">
                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <div class="export-options-container pull-right"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="tableContent" class="panel-body">
                        <!--beginning table-->
                        <table class="table table-striped display" id="tableWithExportOptions">
                            <thead>
                                <tr>
                                    <th width="15%">Article</th>
                                    <th width="10%">état</th>
                                    <th width="10%">Catégorie</th>
                                    <th width="25%">Détails</th>
                                    <th width="10%">Prix Achat</th>
                                    <th width="10%">Prix revendeur</th>
                                    <th width="10%">Prix de vente</th>
                                    <th width="10%">Quantité</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--table centent-->
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3">
      <div class="ar-1-1">
        <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
          <div class="panel-body no-padding">
            <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="5000">
              <div class="slide-front tiles slide active">
                <div class="padding-30">
                  <div class="pull-top">
                    <div class="pull-right">
                      <p class="p-t-10 fs-12 p-b-5 time"></p>
                    </div>
                  </div>
                  <div class="pull-bottom p-b-30">
                    <h4 class="no-margin text-white p-b-5">Valeur estimé 
                    <br>de stock
                    <span class="semi-bold">Actuel</span>
                    <h3 class="no-margin text-white p-b-5"> {{ $stockval[0]->stockVal }} <span class="semi-bold">DH</span></h3>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="slide-back tiles">
                <div class="padding-30">
                  <div class="pull-top">
                    <div class="pull-right">
                      <p class="p-t-10 fs-12 p-b-5 time"></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="pull-bottom p-b-30">
                    <p class="p-t-10 fs-12 p-b-5 hint-text">min profit estimé</p>
                    <h3 class="no-margin text-white p-b-10">{{ $stockval[0]->minProfit }}<span class="semi-bold"> DH</span>
                    <p class="p-t-10 fs-12 p-b-5 hint-text">max profit estimé</p>
                    <h3 class="no-margin text-white p-b-10">{{ $stockval[0]->maxProfit }}<span class="semi-bold"> DH</span>
              </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <a href="{{url()->current()}}/productwithoutprice">
      <div class="col-lg-2 col-md-3 m-t-10" >
        <div class="ar-2-1">
          <div class="widget45 panel no-border bg-danger no-margin widget-loader-bar">
            <div class="panel-body no-padding">
              <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="5000">
                <div class="slide-front tiles slide active">
                  <div class="padding-30">
                    <div class="pull-top">
                      
                    </div>
                    <div>
                      <h3 class="no-margin text-white p-b-5"> {{ $pwps }} <span class="semi-bold"></span></h3>
                      <h4 class="no-margin text-white p-b-5"> {{ (($pwps == 1) ? 'Article sans prix' : 'Articles sans prix') }} </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
</div>

<!--Modal content-->
<div class="modal fade slide-up disable-scroll in" id="myModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
              <div id="rootwizard" >
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i></button>
                    <h5>L'assistant <span class="semi-bold">d'ajout</span></h5>
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
                          <li class="active">
                            <a data-toggle="tab" href="#tab1" aria-expanded="true" style="pointer-events: none;"><i class="fa fa-file tab-icon" aria-hidden="true" ></i><span>Article</span></a>
                          </li>
                          <li class="">
                            <a onclick='' data-toggle="tab" href="#tab2" aria-expanded="false" style="pointer-events: none;"><i class="fa fa-info-circle tab-icon"></i> <span>Configuration technique</span></a>
                          </li>
                          <li class="">
                            <a data-toggle="tab" href="#tab3" style="pointer-events: none;"><i class="fa fa-cogs tab-icon" ></i> <span>Accessoires</span></a>
                          </li>
                          <li class="">
                            <a data-toggle="tab" href="#tab4" aria-expanded="false"  style="pointer-events: none;"><i class="fa fa-credit-card-alt tab-icon" ></i> <span>Détail prix</span></a>
                          </li>
                          <li class="">
                            <a data-toggle="tab" href="#tab5"  style="pointer-events: none;"><i class="fa fa-check tab-icon" ></i> <span>Terminer</span></a>
                          </li>

                        </ul>
                </div>
                
                  <div class="row">
                    <div class="col-md-12">
                      
                        <div class="modal-body">
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane padding-20 slide-left active" id="tab1">
                            <div class="row row-same-height">
                              <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
                                <div class="padding-30 m-t-10">
                                  <i class="fa fa-file fa-2x hint-text"></i>
                                  <h2>Bienvenue dans l'assistant d'ajout</h2>
                                  <p>L'assistant d'ajout va ajouter des articles dans votre compte VirtualStock. 
                                  Pour continuer, remplissez les champs obligatoires identifiés par une <span style="padding-top: 5px;" class="form-group-default required">*</span> et cliquez sur Suivant </p>
                                  <p class="small hint-text"> <a href="#">Où cliquer ici si votre article est indisponible</a></p>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="padding-30">
                                  <form action="">
                                    <div class="row">

                                      <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 required" >
                                          <label class="">Catégorie</label>
                                          <select class="full-width select2-offscreen" data-placeholder="Selectionnez une catégorie" data-init-plugin="select2" id="cat" name="cat" tabindex="-1" title="">
                                            <optgroup label="Ordinateur">
                                              <option value="op">Ordinateur portable</option>
                                              <option value="ob">Ordinateur bureau</option>
                                            </optgroup>
                                            <optgroup label="Serveur">
                                              <option value="rack">Rack</option>
                                              <option value="tour">Tour</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 required" id='x100'>
                                          <label class="">Marque</label>
                                          <select class="full-width select2-offscreen" data-placeholder="Selectionnez une marque" data-init-plugin="select2" tabindex="-1" title="" name="marque" id="marque">
                                            
                                          </select>
                                          <div class="portlet-progress cat-loading loading" style="background-color: rgba(255, 255, 255, 0.8); display: none;z-index: 5000;">
                                            <div class="progress progress-small">
                                              <div class="progress-bar-indeterminate progress-bar-master"></div>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group form-group-default form-group-default-select2 required">
                                          <label class="">Référence</label>
                                          <select class="full-width select2-offscreen" data-placeholder="Selectionnez une référence" id='ref' data-init-plugin="select2" tabindex="-1" title="">
                                            <option></option>
                                          </select>
                                          <div class="portlet-progress ref-loading loading" style="background-color: rgba(255, 255, 255, 0.8); display: none;z-index: 5000;">
                                            <div class="progress progress-small">
                                              <div class="progress-bar-indeterminate progress-bar-master"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group form-group-default form-group-default-select2 p_y-container" >
                                          <label class="">Année de production</label>
                                          <select class="full-width select2-offscreen p_y" data-placeholder="Selectionnez une année" data-init-plugin="select2" tabindex="-1" title="" id='production-year'>
                                            <option></option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>                                             
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group form-group-default form-group-default-select2 required" >
                                          <label class="">état d'article</label>
                                          <select id='etat' class="full-width select2-offscreen" data-placeholder="Selectionnez l'état d'article " id='stat' data-init-plugin="select2" tabindex="-1" title="">
                                            <option value="Neuf">Neuf</option>
                                            <option value="Ocasion">Ocasion</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                          <label>Quantité</label>
                                          <input type="number" value="1" class="form-control" id="qte" min="1">
                                        </div>
                                        <div class="alert alert-warning" id="alert-qte" role="alert" style="display: none">
                                          <button class="close" data-dismiss="alert"></button>
                                          <strong>Avertissement : </strong>il faut que les configurations technique soit identique
                                        </div>
                                      </div>

                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <style>
                            
                          </style>
                          <div class="tab-pane slide-left padding-20" id="tab2">
                            <div class="row row-same-height">
                              <div class="col-md-4 b-r b-dashed b-grey ">
                                <div class="padding-30 m-t-10">
                                  <div class="col-md-12">
                                    <img width='100%' class="ProductImage" style="min-height: 150px;" >
                                    <div class="portlet-progress image-loading loading" style="background-color: rgba(255, 255, 255, 0.8); display: none;z-index: 5000;">
                                      <div class="progress-circle-indeterminate"></div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 text-center p-t-10">
                                    <p class="small hint-text cat"></p>
                                    <h2  class="refImage"></h2>
                                    <p class="production-year stat"> </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="padding-30">

                                  <form role="form">
                                    <div class="form-group-attached">
                                      <div class="row clearfix">
                                        <h4>Processeur(s) CPUs</h4>
                                        <div class="col-md-8">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">cpu </label>
                                            <select id="output-cpu" class="full-width select2-offscreen" data-placeholder="Selectionnez un processeur" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default">
                                            <label>Nombre CPU</label>
                                            <input type="number" value="1" class="form-control" id="num-cpu" disabled>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group-attached"  id="new-ram">
                                      <div class="row clearfix">
                                        <h4>RAM(s) </h4>
                                        <div class="col-md-6">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">TYPE</label>
                                            <select id='output-ram' class="full-width select2-offscreen ram-type" data-placeholder="Selectionnez le type de RAM" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">référence</label>
                                            <select  class="full-width select2-offscreen ram-ref" data-placeholder="Selectionnez une référence" data-init-plugin="select2" tabindex="-1" id="ref" title="">
                                              
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row clearfix">
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">taille memoire</label>
                                            <select class="full-width select2-offscreen ram-memoire"  data-init-plugin="select2" tabindex="-1" title="">
                                              <option value=""></option>
                                              <option value="1">1GO</option>
                                              <option value="2">2GO</option>
                                              <option value="4">4GO</option>
                                              <option value="8">8GO</option>
                                              <option value="16">16GO</option>
                                              <option value="32">32GO</option>
                                              <option value="64">64GO</option>
                                              <option value="128">128GO</option>
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">fréquence</label>
                                            <select id='output-Freq' class="full-width select2-offscreen ram-freq" data-placeholder="Selectionnez une fréquence" data-init-plugin="select2" tabindex="-1" title="" id="ram-f">
                                              
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default">
                                            <label>Quantité</label>
                                            <input type="number" value="1" class="form-control ram-qte">
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <div class="col-md-12 text-right"> <a href="#" id="add-new-ram" class="small hint-text">Ajouter un autre ligne</a></div>


                                    <div class="form-group-attached" id="new-stockage">
                                      <h4>Stockage </h4>
                                      <div class="row clearfix">
                                        <div class="col-md-3">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Référence</label>
                                            <select class="full-width select2-offscreen  " data-placeholder="Selectionnez une référence" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="HDD 5.4k">HDD 5.4k</option>
                                              <option value="HDD 7.2k">HDD 7.2k</option>
                                              <option value="M.2">M.2</option>
                                              <option value="mSATA">SSD mSATA</option>                                              
                                              <option value="SSD">SSD</option>                              
                                              <option value="PCI-Express">PCI-Express</option>                                              
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">capacité</label>
                                            <select class="full-width select2-offscreen storage-capaity" data-placeholder="Selectionnez une capacité" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="16 GO">16 GO</option>
                                              <option value="32 GO">32 GO</option>
                                              <option value="64 GO">64 GO</option>
                                              <option value="128 GO">128 GO</option>
                                              <option value="250 GO">250 GO</option>
                                              <option value="256 GO">256 GO</option>
                                              <option value="320 GO">320 GO</option>
                                              <option value="500 GO">500 GO</option>
                                              <option value="512 GO">512 GO</option>
                                              <option value="640 GO">640 GO</option>
                                              <option value="1 TO">1 TO</option>
                                              <option value="2 TO">2 TO</option>
                                              <option value="3 TO">3 TO</option>
                                              <option value="4 TO">4 TO</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="col-md-3">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">taille</label>
                                            <select class="full-width select2-offscreen" data-placeholder="Selectionnez la taille" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group form-group-default">
                                            <label>Quantité</label>
                                            <input type="number" value="1" class="form-control">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="col-md-12 text-right small hint-text"><a href="#" id="add-new-stockage">Ajouter un autre ligne</a></div>
                                    <div class="form-group-attached">
                                      <div class="row clearfix">
                                        <div class="col-md-12">
                                          <div class="checkbox check-success checkbox-circle">
                                              <input type="checkbox" value="1" id="checkbox31">
                                              <label for="checkbox31"></label><h4 style="display: inline-block;" for="checkbox7">Carte graphique</h4>
                                           </div>
                                        </div>
                                        

                                        <div class="col-md-3 isGrapgicCard" style="display: none">
                                          <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Marque</label>
                                            <select class="full-width select2-offscreen gpu-marque"  data-init-plugin="select2" tabindex="-1" title="">
                                              <option >nvidia</option>
                                              <option >AMD</option>
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-3 isGrapgicCard" style="display: none">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Constructeur</label>
                                            <select class="full-width select2-offscreen" data-placeholder="Selectionnez le constructeur" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-3 isGrapgicCard" style="display: none">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">référence</label>
                                            <select id='gpu' class="full-width select2-offscreen gpu-ref" data-placeholder="Selectionnez une référence" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="GTX 1050">GTX 1050</option>
                                              <option value="GTX 1050 ti">GTX 1050 ti</option>
                                              <option value="GTX 1060">GTX 1060</option>
                                              <option value="GTX 1070">GTX 1070</option>
                                              <option value="GTX 1080">GTX 1080</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="col-md-3 isGrapgicCard" style="display: none">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Mémoire dediée</label>
                                            <select class="full-width select2-offscreen gpu-memoire" data-placeholder="Selectionnez la taille de mémoire" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="1 GO">1 GO</option>
                                              <option value="2 GO">2 GO</option>
                                              <option value="3 GO">3 GO</option>
                                              <option value="4 GO">4 GO</option>
                                              <option value="8 GO">8 GO</option>
                                              <option value="10 GO">10 GO</option>
                                              <option value="11 GO">11 GO</option>
                                              <option value="12 GO">12 GO</option>
                                            </select>
                                          </div>

                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group-attached">
                                      <div class="row clearfix" id="alimentation" style="display: none">
                                        <h4>Alimentation</h4>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Référence</label>
                                            <select class="full-width select2-offscreen" placeholder="CX600" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>

                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">wattage</label>
                                            <select class="full-width select2-offscreen" placeholder="500" data-init-plugin="select2" tabindex="-1" title="">
                                              
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group form-group-default">
                                            <label>Quantité</label>
                                            <input type="number" value="1" class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="tab-pane padding-20 slide-left" id="tab3">
                            <div class="row row-same-height">
                              <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
                                <div class="padding-30 m-t-10">
                                  <div class="col-md-12">
                                    <img width='100%' class="ProductImage">
                                  </div>
                                  <div class="col-sm-12 text-center p-t-10">
                                    <p class="small hint-text cat"></p>
                                    <h2  class="refImage"></strong></h2>
                                    <p class="production-year stat"> </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="padding-30">
                                                
                                  <div class="row clearfix op">
                                    <h4>Accessoires PC portable</h4>
                                      <div class="col-md-6">
                                        <div class="col-md-6">
                                          <div class="checkbox check-success">
                                              <input class="accessoire" type="checkbox" id='tactile' value="Écran tactile">
                                              <label for="tactile">Écran tactile</label>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkbox check-success  ">
                                              <input class="accessoire" id='3D' type="checkbox" value="3D">
                                              <label for="3D">3D</label>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkbox check-success  ">
                                              <input class="accessoire" id='camera' type="checkbox" checked="checked" value="Caméra HD">
                                              <label for="camera">Caméra HD</label>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkbox check-success  ">
                                              <input class="accessoire" type="checkbox" id='retro' value="Clavier retroeclairé">
                                              <label for="retro">Clavier retroeclairé</label>
                                          </div>
                                      </div>
                                      
                                      <div class="col-md-6">
                                          <div class="checkbox check-success  ">
                                              <input class="accessoire" type="checkbox" id='gsm' value="Carte GSM">
                                              <label for="gsm">Carte GSM</label>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkbox check-success  ">
                                              <input class="accessoire" type="checkbox" id='empreinte' value="Empreinte">
                                              <label for="empreinte">Empreinte</label>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Résolution</label>
                                            <select id='resolution' class="full-width select2-offscreen" placeholder="CX600" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="1366x768">1366x768 &ensp;(HD)</option>
                                              <option value="1600x900">1600x900 &ensp;(HD+)</option>
                                              <option value="1920x1080">1920x1080 (FHD)</option>
                                              <option value="2560x1440">2560x1440 (2K)</option>
                                              <option value="3200x1800">3200x1800 (3K)</option>
                                              <option value="3840x2160">3840x2160 (4K)</option>
                                              
                                            </select>
                                          </div>
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Clavier</label>
                                            <select id='clavier' class="full-width select2-offscreen" placeholder="CX600" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="AZERTY">AZERTY</option>
                                              <option value="QWERTY">QWERTY</option>
                                              <option value="QWERTZ">QWERTZ</option>
                                              <option value="QZERTY">QZERTY</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row clearfix ob">
                                    <h4>Accessoires Server/Station</h4>
                                      <div class="col-md-12 accessoires">
                                        <div class="col-md-6">
                                          <div class="col-md-6">
                                            <div class="checkbox check-success">
                                                <input class="accessoire" type="checkbox" id='sas' value="1" id="checkbox21">
                                                <label for="checkbox21">Carte SAS</label>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div>
                                                  <input  id='sasprice'type="number"  placeholder="Prix" class="form-control">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-6">
                                            <div class="checkbox check-success">
                                                <input class="accessoire" type="checkbox" id='cRaid' value="1" id="checkbox22">
                                                <label for="checkbox22">Controleur RAID</label>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div>
                                                  <input type="number" id='cRaidprice' placeholder="Prix" class="form-control">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-6">
                                            <div class="checkbox check-success  ">
                                                <input class="accessoire" type="checkbox" id='cReseau' value="1">
                                                <label for="checkbox23">Carte Réseau</label>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div>
                                                  <input type="number" id='cReseauprice' placeholder="Prix" class="form-control">
                                              </div>
                                          </div>
                                        </div><div class="col-md-6">
                                          <div class="col-md-6">
                                            <div class="checkbox check-success  ">
                                                <input class="accessoire" type="checkbox" id='cFibre' value="1">
                                                <label for="checkbox24">Carte fibre optique</label>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div>
                                                  <input type="number" id='cFibreprices' placeholder="Prix" class="form-control">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12"><a href="#" class="small hint-text">Autres accessoires ?</a></div>
                                      </div>
                                  </div>

                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="tab-pane slide-left padding-20" id="tab4">
                            <div class="row row-same-height">
                              <div class="col-md-5 b-r b-dashed b-grey ">
                                <div class="padding-30 m-t-10">
                                  <div class="irs-wrapper primary">
                                    <h2>La valeur prix moyenne <strong>(Revendeur)</strong></h2>

                                    <input type="text" name=""  class="prix_revendeur" />
                                  </div>
                                  <div class="irs-wrapper success m-t-20">
                                    <h2>La valeur prix moyenne <strong>(Vente)</strong></h2>

                                    <input type="text" name=""  class="prix_finale" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="padding-30">
                                  <div class="col-md-12">
                                    <form role="form">
                                      <div class="form-group-attached">
                                        <div class="row clearfix">
                                          <h4>Informations d'achat</h4>
                                          <div class="col-md-4">
                                            <div  class="form-group form-group-default input-group">
                                              <label>Date d'achat</label>
                                              <input type="text"  id="myDatepicker" class="form-control">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                              </span>
                                          </div>

                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                              <label class="">prix d'achat</label>
                                              <input id='prixAchat' type="number" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                              <label class="">Fournisseur</label>
                                              <input type="text" class="form-control">
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                      <div class="form-group-attached">
                                        <div class="row clearfix">
                                          <h4>Informations du paiement</h4>
                                          
                                            
                                          <div class="col-md-4">
                                          <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Modalités de Paiements</label>
                                            <select class="full-width select2-offscreen" placeholder="500" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="">Espèce</option>
                                              <option value="">Chéque</option>
                                              <option value="">Virement</option>
                                              <option value="">Effet de commerce</option>
                                            </select>
                                          </div>
                                        </div>
                                          
                                          <div class="col-md-4">
                                            <div class="form-group form-group-default form-group-default-select2">
                                              <label class="">Type de Paiements</label>
                                              <select class="full-width select2-offscreen" placeholder="500" data-init-plugin="select2" tabindex="-1" title="">
                                              <option value="">Complète</option>
                                              <option value="">Partiel</option>
                                            </select>
                                            </div>
                                          </div>

                                          <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                              <label class="">Nombre des tranches</label>
                                              <input class="form-control" type="number">
                                            </div>
                                          </div>

                                          
                                        </div>
                                          <div class="row clearfix">
                                            <div class="col-md-6">
                                            <div  class="form-group form-group-default input-group">
                                              <label>Date de paiement</label>
                                              <input type="text"  id="myDatepicker1" class="form-control">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                              </span>
                                          </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-group-default input-group">
                                              <label>Tranche 1</label>
                                              <input type="number" class="form-control">
                                            </div>
                                          </div>
                                          
                                          </div>
                                        </div>

                                        <div class="form-group-attached">
                                        <div class="row clearfix">
                                          <h4>Informations du vente</h4>
                                          
                                            <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                              <label class="">Prix revendeur</label>
                                              <input id='prixRevendeur' class="form-control" type="number">
                                            </div>
                                          </div>
                                      
                                          
                                  

                                          <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                              <label class="">Prix client finale</label>
                                              <input id='prixVente' class="form-control" type="number">
                                            </div>
                                          </div>

                                          
                                        </div>
                                        </div>
                                        
                                        
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                            <div class="tab-pane slide-left padding-20" id="tab5">

                              <h2>Félicitation dernière etape</h2>
                              <p> <strong > Options de <span class="text-success" >confidentialité</span></strong></p>
                              <div class="row">
                                <div class="col-md-12">
                                 <p> Autoriser l'indexation de cet article ? &ensp;&ensp;
                                  <span class="checkbox check-success" style="display: inline;">
                                      <input type="checkbox" checked="checked" value="1" id="indexed">
                                      <label for="indexed">Autoriser</label>
                                  </span>
                                    <span style="display: inline-box;">
                                      <input type="number" placeholder="Quentité" class="form-control" width="100px" style="width: 126px;display: inline;">
                                    </span>
                                  </p>
                                </div>
                                <div class="col-md-12">
                                  <div class="checkbox check-success" style="display: inline;">
                                      <input type="checkbox" checked="checked" id="isSeperete">
                                      <label for="isSeperete">Ajouter les composants comme des articles séparer  </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row m-t-50">
                                  <div class="col-md-12">
                                    <p> <strong >Autres Options</strong></p>
                                    <p>Clickez sur <span>Terminer</span> pour ajouter l'artilce dans votre compte vertualstock ou <a href="#">ici pour ajouter un autre article</a></p>
                                  </div>
                                </div>
                                </form>
                              </div>
                          </div>
                        </div>
                          <div class="modal-footer">
                          <div class="padding-20 bg-white">
                            <ul class="pager wizard">
                              <li class="next">
                                <button class="btn btn-primary btn-cons btn-animated from-left fa pull-right fa-credit-card" type="button" id='btn-next' >
                                          <span>Suivant</span>
                                        </button>
                              </li>
                              <li class="next finish hidden" style="display: none;">
                                <button onclick"addArticle();$('select').val('');$('input').val('');"  class="btn btn-primary btn-cons btn-animated from-left fa pull-right fa-credit-card" type="button">
                                          <span>Terminer</span>
                                </button>
                              </li>
                              <li class="previous first hidden disabled">
                                <button class="btn btn-default btn-cons pull-right" type="button">
                                          <span>Suivant</span>
                                        </button>
                              </li>
                              <li class="previous disabled">
                                <button class="btn btn-default btn-cons pull-right" type="button">
                                          <span>Précédent</span>
                                </button>
                              </li>
                            </ul>
                          
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                
                    <!-- hna les boutons dyal l modal-->
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!--end Modal content-->



@endsection
@section('script')
<script src="http://virtuelstock.ma/assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.fr.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/plugins/moment/moment.min.js"></script>
<script src="http://virtuelstock.ma/assets/js/form_wizard.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script>


//here r the options of date picker

$(document).ready(function() {
    
    $('#myDatepicker,#myDatepicker1').datepicker({
      language : 'fr'
    });

    $('#myDatepicker,#myDatepicker1').datepicker(
      "setDate" , new Date()
    );


    $('#qte').change(function(){
      var qte = $('#qte').val();
      if(qte>1)
      {
        $('#alert-qte').css('display','block');
      }
      else
      {
        $('#alert-qte').css('display','none');
      }
  })
    
    $('#cat').change(function(){
      $('.cat-loading').css('display','block');
      $('#s2id_marque a span.select2-chosen').html('');
      $('#s2id_ref a span.select2-chosen').html('');
      getAjaxField('cat','marque');
      var cat = $("#cat").val();
      if(cat == "op")
      {
        $('#num-cpu').attr('disabled','');
        $('#alimentation').css('display','none');
        $('.op').css('display','block');
        $('.ob').css('display','none');
      }
      else{
        $('#num-cpu').removeAttr('disabled');
        $('#alimentation').css('display','block');
        $('.op').css('display','none');
        $('.ob').css('display','block');
      }
    })

    $('#checkbox31').change(function(){
      var isGrapgicCard = $('#checkbox31').is(':checked');
      if(isGrapgicCard){
        $('.isGrapgicCard').css('display','block');
      }
      else
      {
        $('.isGrapgicCard').css('display','none');
      }
    })
        
        $('#add-new-stockage').click(function(){
          $('#new-stockage').append('<div class="row clearfix">'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">Référence</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez une référence" data-init-plugin="select2" tabindex="-1" title="">'+
                                              
                                            '</select>'+
                                          '</div>'+

                                        '</div>'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">capacité</label>'+
                                            '<select class="full-width select2-offscreen storage-capaity" data-placeholder="Selectionnez une capacité" data-init-plugin="select2" tabindex="-1" title="">'+
                                              '<option value="16 GO">16 GO</option>'+
                                              '<option value="32 GO">32 GO</option>'+
                                              '<option value="64 GO">64 GO</option>'+
                                              '<option value="128 GO">128 GO</option>'+
                                              '<option value="250 GO">250 GO</option>'+
                                              '<option value="256 GO">256 GO</option>'+
                                              '<option value="320 GO">320 GO</option>'+
                                              '<option value="500 GO">500 GO</option>'+
                                              '<option value="512 GO">512 GO</option>'+
                                              '<option value="640 GO">640 GO</option>'+
                                              '<option value="1 TO">1 TO</option>'+
                                              '<option value="2 TO">2 TO</option>'+
                                              '<option value="3 TO">3 TO</option>'+
                                              '<option value="4 TO">4 TO</option>'+
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+


                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">taille</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez la taille" data-init-plugin="select2" tabindex="-1" title="">'+
                                              
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default">'+
                                            '<label>Quantité</label>'+
                                            '<input type="number" value="1" class="form-control">'+
                                          '</div>'+
                                        '</div>'+
                                      '</div>');
                                      $('[data-init-plugin="select2"]').select2();
        })
        

        $('#marque').change(function(){
          $('.ref-loading').css('display','block');
          getAjaxField('marque','ref');
          isNeedYear($('#marque').val());
        })

        $('#add-new-ram').click(function(){
          $('#new-ram').append('<div class="row clearfix" >'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">taille memoire</label>'+
                                            '<select class="full-width select2-offscreen ram-memoire"  data-init-plugin="select2">'+
                                              '<option value=""></option>'+
                                              '<option value="1">1GO</option>'+
                                              '<option value="2">2GO</option>'+
                                              '<option value="4">4GO</option>'+
                                              '<option value="8">8GO</option>'+
                                              '<option value="16">16GO</option>'+
                                              '<option value="32">32GO</option>'+
                                              '<option value="64">64GO</option>'+
                                              '<option value="128">128GO</option>'+
                                            '</select>'+
                                          '</div>'+

                                        '</div>'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">fréquence</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez une fréquence" data-init-plugin="select2">'+
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default">'+
                                            '<label>Quantité</label>'+
                                            '<input type="number" value="1" class="form-control ram-qte">'+
                                          '</div>'+
                                       '</div>'+
                                      '</div>');
                                
                                    $('[data-init-plugin="select2"]').select2();
                                
        })
        
        var cp = 0;

        $('#btn-next').click(function(){
          //cat preview

          $('.refImage').html($('#ref option[value='+$('#ref').val()+']').text());
          var cat = $('#cat').val();
          if(cat =='op'){
            $('.cat').html('Ordinateur portable');
          }

          if(cat =='ob'){
            $('.cat').html('Ordinateur bureau');
          }

          //year of production
          var p_year = $('#production-year').val();
          $('.production-year').html(p_year);

          //stat 
          var stat = $('#stat').val();
            
          $('.stat').append(' <span class="small hint-text stat">('+stat+')</span>');
          var cat = $("#cat").val();
          if(cat == "op")
          {
            $('#num-cpu').attr('disabled','');
            $('#alimentation').css('display','none');
            $('.op').css('display','block');
            $('.ob').css('display','none');
          }
          else{
            $('#num-cpu').removeAttr('disabled');
            $('#alimentation').css('display','block');
            $('.op').css('display','none');
            $('.ob').css('display','block');
            }
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
         


});

//ajax content 
function getAjaxField(ID_field,OUTPUT_field){
            var xdata = {};
            xdata['id'] = $('#'+ID_field).val();
            xdata['field-name']= $("#"+ID_field).attr('name');
            $.ajax({
              type:'POST',
              url:'/monstock',
              data: xdata,
              dataType: "json",
              success:function(data){
                var listm =$.parseJSON(JSON.stringify(data));
                var content = '';
                for(i=0 ;i<listm.length;i++)
                {
                  content = content + '<option value='+listm[i].id+'>'+ listm[i].desc +'</option>';
                }
                console.log(listm);
                console.log(content);
                $('#'+OUTPUT_field).html('<option></option>'+content);
                $('.loading').css('display','none');
              }
            });
         }

        
function isNeedYear(ID){
    var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'isNeedYear';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm[0].product_year);
            if(listm[0].product_year){
            $(".p_y").prop("disabled", false);
            $(".p_y-container").removeClass('disabled');
            }
            else{
            $(".p_y").prop("disabled", true);
            $(".p_y-container").addClass('disabled');
            }

          }
        });

}

function getProductImage(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'ProductImage';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm[0].image);
            $('.ProductImage').attr('src','<?=Storage::url("photos/");?>'+listm[0].image);
            $('.loading').css('display','none');
          }
        });
}

function getCpuList(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'CpuList';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm);
            var content = '';
            for(i=0 ;i<listm.length;i++)
                  {
                    content = content + '<option value="'+listm[i].ref+'">'+ listm[i].ref +'</option>';
                  }
            $('#output-cpu').html('<option></option>'+content);
          }
        });
}

function getRamList(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'RamType';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm);
            var content='',content2 = '';
            for(i=0 ;i<listm.length;i++)
            {
              content = content + '<option value='+listm[i].id+'>'+ listm[i].desc +'</option>';
            }

            for(i=0 ;i<listm.length;i++)
            {
              content2 = content2 + '<option value='+listm[i].id+'>'+ listm[i].frequency +' Mhz </option>';
            }
            
            $('#output-Freq').html('<option></option>'+content2);   
            $('#output-ram').html('<option></option>'+content);
          }
        });
  }

  function getMonStock(){
    $.ajax({
      type: 'POST',
      url: '/getMonStock',
      dataType: "json",
      success:function(data){
        alert('ok!');
        },
      error:function(data){
        alert('Error ajax 1!');
      }
    })
  }

  function ramArray(){
    var i=1,j=0;
    var ramArray = {};
    while($($('.ram-memoire')[i]).val()!=null) {
      ramArray[j] = { ram : parseInt($($('.ram-memoire')[i]).val()) ,frequence : $($('.ram-freq')[j]).val(), qte : parseInt($($('.ram-qte')[j]).val())};
      i+=2;
      j++;
    }
    return ramArray;
  }

  function cpuData(){
    var ramArray = { cpu : parseInt($($('#output-cpu')[i]).val()) , qte : parseInt($($('#num-cpu')[j]).val())};
    return ramArray;
  }

  function stockageArray(){
    var i=1,j=0;
    var ramArray = {};
    while($($('.')[i]).val()!=null) {
      ramArray[j] = { ram : parseInt($($('.ram-memoire')[i]).val()) ,frequence : $($('.ram-freq')[j]).val(), qte : parseInt($($('.ram-qte')[j]).val())};
      i+=2;
      j++;
    }
    return ramArray;
  }


  function getDesc(){
    //if issperete's checked
    var desc,gpu='',gpuHtml='',htmldesc,ram=0,storage='',i,j=0,accessoires='';
    var cpu = $('#output-cpu').val();
    //getting the sum of ram
    i=1;
    while($($('.ram-memoire')[i]).val()!=null) {
      ram += parseInt($($('.ram-memoire')[i]).val()*parseInt($($('.ram-qte')[j]).val()));
      i+=2;
      j++;
    }
    //getting the storage and the 
    i=1;
    while($($('.storage-capaity')[i]).val()!=null) {
      storage += $($('.storage-capaity')[i]).val()+' ';
      i+=2;
    }

    for(i=0;i<6;i++){
      if($($('.accessoire')[i]).is(':checked')){
        accessoires+=$($('.accessoire')[i]).val()+', ';
      }
    }
    
    if($('#checkbox31').is(':checked')){
      gpu =', GPU : '+ $($('.gpu-marque')[1]).val()+' '+$($('.gpu-ref')[1]).val()+' '+$($('.gpu-memoire')[1]).val() ;
      gpuHtml="<tr><td><span class='bold'>GPU</span></td><td>*</td></tr>";
    }
    var perview = 'CPU : '+cpu+', RAM : '+ram+' GO, Stokage : '+storage+gpu+', '+accessoires ;
    var desc = "<table width='100%'>"+
                            "<tr>"+
                                "<td width='30%'><span class='bold'>CPU</span></td>"+
                                "<td width='70%'>"+cpu+"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td><span class='bold'>RAM</span></td>"+
                                "<td>"+ram+" Go</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td><span class='bold'>Stockage</span></td>"+
                                "<td>"+storage+"</td>"+
                            "</tr>"+
                            +gpuHtml+
                            "<tr>"+
                                "<td><span class='bold'>Résolution</span></td>"+
                                "<td>"+$('#resolution').val()+"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td><span class='bold'>Clavier</span></td>"+
                                "<td>"+$('#clavier').val()+"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td><span class='bold'>Accessoires</span></td>"+
                                "<td>"+accessoires+"</td>"+
                            "</tr>"+
                        "</table>";
                        var data = {preview : perview, desc : desc};
                        console.log(data);
    return data; 
  }


//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////// this next block is just for referenece //////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function getpreview(){
    var preview,ram=0,i=1,j=0;
    //ram sum
    while($($('.ram-memoire')[i]).val()!=null){
      ram+= parseInt($($('.ram-memoire')[i]).val()*parseInt($($('.ram-qte')[j]).val()));
      i+=2;
      j++;
    }
    alert(ram);
    while($($('.ram-memoire')[i]).val()!=null){
      ram+= parseInt($($('.ram-memoire')[i]).val()) ;
      i+=2;
    }
  }

  
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////// end of block ////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  

  function addArticle(){
    var desc = getDesc();
    var xdata = {};
    xdata['idUser'] =  '{{ Auth::user()->id }}' ;
    xdata['qte'] = $('#qte').val();
    xdata['refid'] = $('#ref').val();
    xdata['etat'] = $('#etat').val();
    xdata['cpu'] = $('#output-cpu').val();
    xdata['nbrCpu'] = $('#num-cpu').val();
    xdata['ram'] = $('#').val();
    xdata['stockage'] = $('#').val();
    xdata['gpu'] = $('#gpu').val();
    xdata['resolution'] = $('#resolution').val();
    xdata['clavier'] = $('#clavier').val();
    xdata['tactile'] = $('#tactile').is(':checked');
    xdata['3D'] = $('#3D').is(':checked');
    xdata['camera'] = $('#').is(':checked');
    xdata['retro'] = $('#retro').is(':checked');
    xdata['gsm'] = $('#gsm').is(':checked');
    xdata['empreinte'] = $('#empreinte').is(':checked');
    xdata['sas'] = $('#sas').is(':checked');
    xdata['cRaid'] = $('#cRaid').is(':checked');
    xdata['cReseau'] = $('#cReseau').is(':checked');
    xdata['cFibre'] = $('#cFibre').is(':checked');
    xdata['sasprice'] = $('#sasprice').val();
    xdata['cRaidprice'] = $('#cRaidprice').val();
    xdata['cReseauprice'] = $('#cReseauprice').val();
    xdata['cFibreprice'] = $('#cFibreprice').val();
    xdata['prixAchat'] = $('#prixAchat').val();
    xdata['prixRevendeur'] = $('#prixRevendeur').val();
    xdata['prixVente'] = $('#prixVente').val();
    xdata['preview']= desc.preview;
    xdata['htmlDesc']=desc.desc;
    xdata['ramArray'] = ramArray();           
    alert(xdata['preview']+'/'+xdata['preview'])
    if($('#isSeperete').is(':checked')){
      xdata['isSeperete'] = 1;
    }
    else
    {
      xdata['isSeperete'] = 0;
    }
    
    if($('#indexed').is(':checked')){
      xdata['indexed'] = 1;
    }
    else
    {
      xdata['indexed'] = 0;
    }
    
    console.log(xdata);
    $.ajax({
      type: 'POST',
      url: '/addtomonstock',
      data: xdata,
      dataType: "json",
      success:function(data){
        alert('ok!');
        console.log(data);
        },
      error:function(data){
        alert('Error ajax 1!');
        console.log(data);
      }
    })

  }

function showstock(){
    
  $.ajax({
      type: 'POST',
      url: '/getMonStock',
      dataType: "json",
      success:function(data){
        var content = $.parseJSON(JSON.stringify(data));
        var set = [];
        for(i=0;i<content.length;i++){
          set[i] = {'0':'<a href="http://virtuelstock.ma/article/'+content[i][8]+'">'+content[i][0]+'</a>','1':content[i][1],'2':content[i][2],'3':content[i][3],'4':content[i][4]+' DH','5':content[i][5]+' DH','6':content[i][6]+' DH','7':content[i][7]};
        }
        console.log(set);
        console.log(content);
        var table = $('#tableWithExportOptions').DataTable();
          table.rows.add(
            set
          ).draw();
        },
      error:function(data){
        alert('Error ajax 1!');
      }
    })
}

$('.time').html(function(){var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

return output = 
    ((''+day).length<2 ? '0' : '') + day + '-' +
    ((''+month).length<2 ? '0' : '') + month + '-' +
    d.getFullYear()  ;
    
    })

$(function(){
  console.log(getAjaxField('cat','marque'));
  //showstock();
  })
$(".widget-3 .metro").liveTile();

</script>

<script src="http://virtuelstock.ma/assets/plugins/ion-slider/js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="http://virtuelstock.ma/assets/js/slider.js" type="text/javascript"></script>
@endsection 
@section('css')
<link href="http://virtuelstock.ma/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://virtuelstock.ma/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://virtuelstock.ma/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://virtuelstock.ma/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://virtuelstock.ma/assets/plugins/ion-slider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://virtuelstock.ma/assets/plugins/ion-slider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" media="screen" />
@endsection