@extends('layouts.app')
@section('title')
Produits sans Prix
@endsection
@section('stock')
bg-success
@endsection
@section('breadcrumb')
    {!! $breadcrumb !!}
@endsection
@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="col-sm-12 bg-white">
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
                                    <th width="15%">Article mère</th>
                                    <th width="10%">état</th>
                                    <th width="10%">Catégorie</th>
                                    <th width="20%">Détails</th>
                                    <th width="10%">Prix revendeur</th>
                                    <th width="10%">Prix de vente</th>
                                    <th width="10%">Quantité</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @if(sizeof($Data)>0)
                                @for ($i = 0; $i < 1; $i++)
                                    <td><a href='/article/{{$Data[$i]->articleid}}'>{{$Data[$i]->ref}}</a></td>
                                    <td><a href='/article/{{$Data[$i]->component}}'>{{$Data[$i]->articlemere}}</td>
                                    <td>{{$Data[$i]->etat}}</td>
                                    <td>{{$Data[$i]->desc}}</td>
                                    <td>{{$Data[$i]->preview}}</td>
                                    <td>{{(($Data[$i]->prixRevendeur) == '' ? '-' : $Data[$i]->prixRevendeur)}}</td>
                                    <td>{{(($Data[$i]->prixVente) == '' ? '-' : $Data[$i]->prixVente)}}</td>
                                    <td>{{$Data[$i]->count}}</td>
                                @endfor
                            @endif
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection