@extends('master')

@section('title', 'Contact')

@section('content')
<header class="bg-dark py-5" style="background-image: url('{{ asset('assets/img/capalestine.jpg') }}'); background-size: cover; background-position: center;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Contact</h1>
                </div>
            </div>
    </header>
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2 class="fw-bolder mb-4">Contactez-nous</h2>
                    <p>Vous avez des questions ou souhaitez en savoir plus sur nos produits ? Remplissez le formulaire ci-dessous pour nous envoyer un message et nous vous répondrons dans les plus brefs délais !</p>
                    <div class="my-5">
                        <!-- Formulaire de contact -->
                        @isset($data)
                            <p><strong>Nom : </strong>{{ $data->name }}</p>
                            <p><strong>Email : </strong>{{ $data->email }}</p>
                            <p><strong>Téléphone : </strong>{{ $data->phone }}</p>
                            <p><strong>Message : </strong>{{ $data->message }}</p>
                        @endisset
                        <form method="post" action="/contact">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="name" class="form-control" id="name" type="text" placeholder="Entrez votre nom..." required />
                                <label for="name">Nom</label>
                                <div class="invalid-feedback">Un nom est requis.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" id="email" type="email" placeholder="Entrez votre email..." required />
                                <label for="email">Adresse email</label>
                                <div class="invalid-feedback">Un email est requis.</div>
                                <div class="invalid-feedback">L'email n'est pas valide.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="phone" class="form-control" id="phone" type="tel" placeholder="Entrez votre numéro de téléphone..." required />
                                <label for="phone">Numéro de téléphone</label>
                                <div class="invalid-feedback">Un numéro de téléphone est requis.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="message" class="form-control" id="message" placeholder="Entrez votre message ici..." style="height: 12rem" required></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback">Un message est requis.</div>
                            </div>
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
