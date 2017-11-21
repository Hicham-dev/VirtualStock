@extends('layouts.app') 
@section('title') 
Tableau de bord 
@endsection 
@section('tdb') 
bg-success 
@endsection 
@section('breadcrumb')
    {!! $breadcrumb !!}
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div id="rootwizard" class="m-t-50">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
        <li class="active">
          <a data-toggle="tab" href="#tab1" aria-expanded="true"><i class="fa fa-file tab-icon" aria-hidden="true"></i><span>Article</span></a>
        </li>
        <li class="">
          <a data-toggle="tab" href="#tab2" aria-expanded="false"><i class="fa fa-info-circle tab-icon"></i> <span>Configuration technique</span></a>
        </li>
        <li class="">
          <a data-toggle="tab" href="#tab3"><i class="fa fa-cogs tab-icon"></i> <span>Accessoires</span></a>
        </li>
        <li class="">
          <a data-toggle="tab" href="#tab4" aria-expanded="false"><i class="fa fa-credit-card-alt tab-icon"></i> <span>Détail prix</span></a>
        </li>
        <li class="">
          <a data-toggle="tab" href="#tab5"><i class="fa fa-check tab-icon"></i> <span>Terminer</span></a>
        </li>

      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane padding-20 slide-left active" id="tab1">
          <div class="row row-same-height">
            <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
              <div class="padding-30 m-t-10">
                <i class="fa fa-file fa-2x hint-text"></i>
                <h2>Your Bags are ready to check out!</h2>
                <p>Discover goods you'll love from brands that inspire. The easiest way to open your own online store. Discover
                  amazing stuff or open your own store for free!</p>
                <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="padding-30">
                <form action="">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">Catégorie</label>
                        <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                          <optgroup label="Ordinateur">
                            <option value="op">Ordinateur portable</option>
                            <option value="ob">Ordinateur bureau</option>
                          </optgroup>
                          <optgroup label="Serveur">
                            <option value="CA">Rack</option>
                            <option value="NV">Tour</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">Marque</label>
                        <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                          
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">Référence</label>
                        <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                          
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">Année de production</label>
                        <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">état d'article</label>
                        <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                          <option value="new">Neuf</option>
                          <option value="new">Ocasion</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group form-group-default">
                        <label>Quantité</label>
                        <input type="number" value="1" class="form-control">
                      </div>
                      <div class="alert alert-warning" role="alert">
                        <button class="close" data-dismiss="alert"></button>
                        <strong>Avertissement : </strong>il faut que les configurations soit identique
                      </div>
                    </div>

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane slide-left padding-20" id="tab2">
          <div class="row row-same-height">
            <div class="col-md-4 b-r b-dashed b-grey ">
              <div class="padding-30 m-t-50">
                <h2>Your Information is safe with us!</h2>
                <p>We respect your privacy and protect it with strong encryption, plus strict policies . Two-step verification,
                  which we encourage all our customers to use.</p>
                <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
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
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                      <div class="col-md-4">
                        <div class="form-group form-group-default">
                          <label>Nombre CPU</label>
                          <input type="number" value="1" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group-attached">
                    <div class="row clearfix">
                      <h4>RAM(s) </h4>
                      <div class="col-md-6">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">TYPE</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">référence</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">taille memoire</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                      <div class="col-md-4">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">fréquence</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>
                      </div>
                      <div>
                        <div class="col-md-4">
                          <div class="form-group form-group-default">
                            <label>Quantité</label>
                            <input type="number" value="1" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group-attached">
                    <div class="row clearfix">
                      <h4>Stockage </h4>
                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Référence</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">capacité</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>
                      </div>


                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">taille</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
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

                  <div class="form-group-attached">
                    <div class="row clearfix">
                      <div class="col-md-12">
                        <h4 style="display:inline-block">Carte graphique &ensp;&ensp;</h4><input type="checkbox" data-init-plugin="switchery graphic-card" data-size="small" checked="checked" data-switchery="true">
                      </div>
                      

                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Marque</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Constructeur</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">référence</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>
                      </div>


                      <div class="col-md-3">
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Mémoire dediée</label>
                          <select class="full-width select2-offscreen" data-placeholder="Select Country" data-init-plugin="select2" tabindex="-1" title="">
                            
                          </select>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="form-group-attached">
                    <div class="row clearfix">
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
                <i class="fa fa-file fa-2x hint-text"></i>
                <h2>Your Bags are ready to check out!</h2>
                <p>Discover goods you'll love from brands that inspire. The easiest way to open your own online store. Discover
                  amazing stuff or open your own store for free!</p>
                <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="padding-30">
                              
                <div class="row clearfix">
                  <h4>Accessoires PC portable</h4>
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox"  value="1" id="checkbox1">
                            <label for="checkbox1">Écran tactile</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox"  value="1" id="checkbox2">
                            <label for="checkbox2">3D</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox" checked="checked" value="1" id="checkbox3">
                            <label for="checkbox3">Caméra</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox"  value="1" id="checkbox4">
                            <label for="checkbox4">Clavier retroeclairé</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox"  value="1" id="checkbox5">
                            <label for="checkbox5">Carte GSM</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox check-success  ">
                            <input type="checkbox" value="1" id="checkbox6">
                            <label for="checkbox6">Empreinte</label>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Résolution</label>
                          <select class="full-width select2-offscreen" placeholder="CX600" data-init-plugin="select2" tabindex="-1" title="">
                            <option value="">1366x768 &ensp;(HD)</option>
                            <option value="">1600x900 &ensp;(HD+)</option>
                            <option value="">1920x1080 (FHD)</option>
                            <option value="">2560x1440 (2K)</option>
                            <option value="">3200x1800 (3K)</option>
                            <option value="">3840x2160 (4K)</option>
                            
                          </select>
                        </div>
                        <div class="form-group form-group-default form-group-default-select2 ">
                          <label class="">Clavier</label>
                          <select class="full-width select2-offscreen" placeholder="CX600" data-init-plugin="select2" tabindex="-1" title="">
                            <option value="">AZERTY</option>
                            <option value="">QWERTY</option>
                            <option value="">QWERTZ</option>
                            <option value="">QZERTY</option>
                          </select>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                  <h4>Accessoires Server/Station</h4>
                    <div class="col-md-12">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="checkbox check-success  ">
                              <input type="checkbox"  value="1" id="checkbox21">
                              <label for="checkbox21">Carte SAS</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox check-success  ">
                                <input type="number"  placeholder="Prix" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="checkbox check-success">
                              <input type="checkbox"  value="1" id="checkbox22">
                              <label for="checkbox22">Controleur RAID</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox check-success">
                                <input type="number"  placeholder="Prix" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="checkbox check-success  ">
                              <input type="checkbox"  value="1">
                              <label for="checkbox23">Carte Réseau</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox check-success  ">
                                <input type="number"  placeholder="Prix" class="form-control">
                            </div>
                        </div>
                      </div><div class="col-md-6">
                        <div class="col-md-6">
                          <div class="checkbox check-success  ">
                              <input type="checkbox"  value="1">
                              <label for="checkbox24">Carte fibre optique</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox check-success  ">
                                <input type="number"  placeholder="Prix" class="form-control">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

              </div>
              
            </div>
          </div>
        </div>

        <div class="tab-pane slide-left padding-20" id="tab4">
          <div class="row row-same-height">
            <div class="col-md-5 b-r b-dashed b-grey ">
              <div class="padding-30 m-t-50">
                <h2>We Secured Your Line</h2>
                <p>Below is a sample page for your cart , Created using pages design UI Elementes</p>
                <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
                <table class="table table-condensed">
                  <tbody>
                    <tr>
                      <td class=" col-md-9">
                        <span class="m-l-10 font-montserrat fs-18 all-caps">Webarch UI Framework</span>
                        <span class="m-l-10 ">Dashboard UI Pack</span>
                      </td>
                      <td class=" col-md-3 text-right">
                        <span>Qty 1</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" col-md-9">
                        <span class="m-l-10 font-montserrat fs-18 all-caps">Pages UI Framework</span>
                        <span class="m-l-10 ">Next Gen UI Pack</span>
                      </td>
                      <td class=" col-md-3 text-right">
                        <span>Qty 1</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" class=" col-md-3 text-right">
                        <h4 class="text-primary no-margin font-montserrat">$27</h4>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p class="small">Invoice are issued on the date of despatch. Payment terms: Pre-orders: within 10 days of invoice date with
                  4% discount, from the 11th to the 30th day net. Re-orders: non-reduced stock items are payable net after
                  20 days. </p>
                <p class="small">By pressing Pay Now You will Agree to the Payment <a href="#">Terms &amp; Conditions</a></p>
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
                            <input type="number" class="form-control">
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
                            <input class="form-control" type="number">
                          </div>
                        </div>
                    
                        
                

                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label class="">Prix client finale</label>
                            <input class="form-control" type="number">
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
          <h1>Thank you.</h1>
        </div>
        </div>
        <div class="padding-20 bg-white">
          <ul class="pager wizard">
            <li class="next">
              <button class="btn btn-primary btn-cons btn-animated from-left fa pull-right fa-credit-card" type="button">
                        <span>Suivant</span>
                      </button>
            </li>
            <li class="next finish hidden" style="display: none;">
              <button class="btn btn-primary btn-cons btn-animated from-left fa pull-right fa-credit-card" type="button">
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

@endsection 
@section('script')
<script src="assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.fr.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/form_wizard.js" type="text/javascript"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script>
//here r the options of date picker
$(document).ready(function() {
    $('#myDatepicker,#myDatepicker1').datepicker({
      language : 'fr'
    });

    $('#myDatepicker,#myDatepicker1').datepicker(
      "setDate" , new Date()
    );
});
</script>
@endsection 
@section('css')
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
@endsection