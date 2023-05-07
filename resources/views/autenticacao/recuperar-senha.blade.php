@extends('layouts.autentic')

@section('title', 'Recuperar a senha')

@section('formulario-aut')
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>
    <form class="row g-3 needs-validation" novalidate>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
        <input type="password" name="password" placeholder="Inserir o e-mail" class="form-control" required>
        <div class="invalid-feedback">Por favor insere um e-mail!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
             
          </div>
          
          <div class="col">

            <a href="autenticacao/login">Lembrou? Entre</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Entrar</button>
      </div>
    </form>
    
  </div>
@endsection