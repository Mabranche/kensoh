@extends('layouts.master')
@section('title', __('Inscription'))

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Créer un compte</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html.htm">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">créer un compte</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>créer un compte</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('register') }}" >
						     @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Prénom</label>
                                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus placeholder="Prénom" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname">Nom</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" :value="old('lastname')" placeholder="Nom" required="">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" :value="old('email')" required class="form-control"  placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Mot de passe</label>
                                    <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Entrer votre mot de passe">
                                </div>
                            </div>
							 <div class="form-row row">
                                
                                <div class="col-md-12">
                                    <label for="review">Confirmez Mot de passe</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirmez votre mot de passe">
                                </div><button class="btn btn-solid w-auto" type="submit">Créer un compte</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection