@extends('layouts.app')
@section('title')
Accueil
@endsection
@section('accueil')
bg-success
@endsection
@section('content')
<div class="row">
    <div class="col-lg-10 col-md-9">
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
                                <th width="10%">état</th>
                                <th width="10%">Catégorie</th>
                                <th width="25%">Détails</th>
                                <th width="10%">Stock</th>
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
@endsection
@section('script')
<script>
    $('.breadcrumb li a').attr('class','active');
</script>
@endsection

