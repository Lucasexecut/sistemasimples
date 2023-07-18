@extends('layouts.app')


@section('title' , 'criação') 

@section('content')      <!-- tudo que eu colocar aqui dentro será redenrizado no nosso template -->


       <div class="container mt-5">

        <h1> Cadastre Um Jogo  </h1>
         
   <form action="{{ route('jogos-store') }}" method="POST">
     @csrf 
          <div class="form-group">     
                <div class="form-group">
                     <label for="nome">nome:</label>
                     <input type="text" class="form-control" name ="nome" placeholder="digite seu nome... "> 
                </div>
                <br>

                <div class="form-group">
                     <label for="categoria">categoria:</label>
                     <input type="text" class="form-control" name ="categoria" placeholder="digite uma categoria para o tipo de jogador "> 
                </div>
                <br>
                <div class="form-group">
                     <label for="ano_criacao">ano_criação:</label>
                     <input type="number" class="form-control" name ="ano_criacao" placeholder="digite ano de criação"> 
                </div>
                <br>
                <div class="form-group">
                     <label for="valor">valor:</label>
                     <input type="number" class="form-control" name ="valor" placeholder="digite um valor"> 
                </div>
                <br>
                <div class="form-group">
                     <input type="submit" name ="submit"  class="btn btn-primary"> 
                </div>    
          </div>
  </form>

@endsection

