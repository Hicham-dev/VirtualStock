@extends('layouts.form') @section('content')
<p>
	<small>
		Créez une socité pour votre compte Virtual Stock.</a>
	</small>
</p>

<form id="form-register" class="p-t-15" role="form" method="POST" action="{{ url('/inscription') }}">
	<div class="row">
		<div class="col-sm-12">
			{{ csrf_field() }}
			<div class="form-group form-group-default">
				<label>Raison Sociale</label>
				<input type="text" name="last_name" placeholder="Nom de société" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group form-group-default">
				<label>Adresse</label>
				<input type="text" name="name" placeholder="Adresse postale de la société" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group form-group-default">
				<label>Numero de téléphone 1</label>
				<input type="text" name="user_name" placeholder="Votre nom.virtualstock.ma (cela peut être changé plus tard)" class="form-control"
				 required>
			</div>
		</div>
			<div class="col-sm-4">
			<div class="form-group form-group-default">
				<label>Numero de téléphone 2</label>
				<input type="password" name="password" placeholder="Au moins 4 caractères" class="form-control" required>
			</div>
		</div>
        <div class="col-sm-4">
			<div class="form-group form-group-default">
				<label>Fax</label>
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
    <div class="row">
		<div class="col-sm-12">
			<div class="form-group form-group-default">
				<label>Logo</label>
				<input type="select" name="email" placeholder="Nous vous enverrons des informations de connexion" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="row m-t-10">
		<div class="col-md-6">
			<p>je suis d'accord avec le
				<a href="#" class="text-info small">Vertual Stock Termes</a> et
				<a href="#" class="text-info small">Intimité</a>.</p>
		</div>
		<div class="col-md-6 text-right">
			<a href="#" class="text-info small">Aidez-moi? Contacter l'assistance technique</a>
		</div>
	</div>
	<button class="btn btn-primary btn-cons m-t-10" type="submit">Créer un nouveau compte</button>
</form>
@endsection