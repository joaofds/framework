@extends('layouts.default')

@section('content')
    <div class="jumbotron jumbotron-fluid mt-4">
        <div class="container">
            <h1 class="display-6">Micro Framework</h1>
            <p class="lead">
                Este é o projeto de um Micro Framework MVC em PHP, desenvolvido com
                intuito didático para entender os princípios de funcionamento
                de grandes frameworks que trabalham com o padrão MVC.
            </p>
            Créditos: Micro Framework do Zero - Canal TJG Web do Youtube <br />
            {{$dir}}
        </div>
    </div>
@stop