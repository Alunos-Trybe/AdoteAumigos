@extends('layouts.master')

@section('content')

<main class="ShowPets">
    <h1>Os nossos <span>Aumigos <span></h1>
    <div class="Pets_Filters">
            <select name="" id="">
                <option value="">Espécie</option>
                <option value="">Cachorro</option>
                <option value="">Gato</option>
            </select>
    </div>
    <div class="ShowPets__container">
        <div class="Pet__card">
            <div class="Pet__card-top">
                <div class="card_img">
                    <img src="https://www.petz.com.br/cachorro/racas/vira-lata/img/vira-lata-caracteristicas-guia-racas.jpg" alt="">
                </div>
                <div class="card_pet-name">
                    <h2>Boby</h2>
                    <h4>2 anos</h2>
                </div>
            </div>
            <div class="Pet__card-bottom">
                <div class="Pet__card-info">
                    <h4><span>Status:</span> Por adotar</h4>
                    <h4><span>Raça:</span> Vira-lata</h4>
                    <h4><span>Sexo:</span> Macho</h4>
                    <h4><span>Porte:</span> Médio</h4>
                    <h4><span>Cor:</span> Marrom</h4>
                    <h4><span>Localização:</span> São Paulo</h4>
                    <h4><span>Descrição:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</h4>
                </div>
                <div class="card__button">
                    <button type="button">Saber mais</button>
                </div>
        </div>

    </div>

</main>
@endsection
