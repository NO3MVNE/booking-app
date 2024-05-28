@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Hotel</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titre">Titre:</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{ $hotel->titre }}" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse:</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $hotel->adresse }}" required>
                </div>
                <div class="form-group">
                    <label for="prix_unitaire">Prix Unitaire:</label>
                    <input type="number" class="form-control" id="prix_unitaire" name="prix_unitaire" value="{{ $hotel->prix_unitaire }}" required>
                </div>
                <div class="form-group">
                    <label for="type_chambre">Type Chambre:</label>
                    <input type="text" class="form-control" id="type_chambre" name="type_chambre" value="{{ $hotel->type_chambre }}" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection