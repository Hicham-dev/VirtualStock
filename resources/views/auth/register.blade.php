@extends('layouts.form')
@section('content')
<p>
  <small>
    Créez un compte de Virtual Stock. Si vous avez un compte facebook, s'inscrirer-vous à ce processus.</a>
  </small>
</p>

<div class="row">
  <div class="col-sm-6  facebook-col">
    <button class="btn-animated from-top fa fa-facebook btn-facebook" type="submit"><span>S'inscrire avec facebook</span> </button>
  </div>
  <div class="col-sm-6 google-col">
    <button class="btn btn-danger btn-animated from-top fa fa-google-plus" type="submit"> <span>S'inscrire avec Google</span></button>

  </div>
</div>

<form id="form-register" class="p-t-15" role="form" method="POST" action="{{ url('/inscription') }}">
  <div class="row">
    <div class="col-sm-6">
      {{ csrf_field() }}
      <div class="form-group form-group-default">
        <label>Prénom</label>
        <input type="text" name="last_name" placeholder="votre prenom" class="form-control" required>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group form-group-default">
        <label>Nom</label>
        <input type="text" name="name" placeholder="votre nom" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group form-group-default">
        <label>Virtual Stock Nom d'utilisateur</label>
        <input type="text" name="user_name" placeholder="Votre nom.virtualstock.ma (cela peut être changé plus tard)" class="form-control"
          required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group form-group-default">
        <label>mode de passe</label>
        <input type="password" name="password" placeholder="Au moins 4 caractères" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group form-group-default">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Nous vous enverrons des informations de connexion" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="row m-t-10">
    <div class="col-md-6">
      <p>je suis d'accord avec le<a href="#" class="text-info small">Vertual Stock Termes</a> et <a href="#" class="text-info small">Intimité</a>.</p>
    </div>
    <div class="col-md-6 text-right">
      <a href="#" class="text-info small">Aidez-moi? Contacter l'assistance technique</a>
    </div>
  </div>
  <button class="btn btn-primary btn-cons m-t-10" type="submit">Créer un nouveau compte</button>
</form>
@endsection