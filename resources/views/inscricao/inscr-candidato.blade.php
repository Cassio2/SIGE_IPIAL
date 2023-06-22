@extends('layouts.main')

@section('title', 'Inscrever-se')

@section('conteudo')
<main id="main" class="main">

  <form method="POST" action="{{route('inscricao-store')}}" id="regForm" class="form-nscricao">
  @csrf
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>

        <div class="tab">
        @error('nome_completo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_pai_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_mae_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('naturalidade_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_tel')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_escola')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('turma_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_processo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('ultimo_anoLectivo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        @if(session()->has('ErroPessoa'))
        <div class="alert alert-danger">
        {{session('ErroPessoa')}}
        </div>
    @endif

    @if (session()->has('ErroTelefone'))
    <div class="alert alert-warning">
        {{ session('ErroTelefone') }}
    </div>
    @endif

    @if (session()->has('ErroCurso'))
    <div class="alert alert-warning">
        {{ session('ErroCurso') }}
    </div>
    @endif


        @if(session()->has('ErroCandidato'))
        <div class="alert alert-danger">
        {{session('ErroCandidato')}}
        </div>
    @endif

        @if(session()->has('Sucesso'))
        <div class="alert alert-success">
        {{session('Sucesso')}}
        </div>
    @endif
      <h2>Introduza os dados pessoais</h2>

      <div class="form-group">
        <input type="text" placeholder="Nome Completo" value="{{ old('nome_completo') }}" name="nome_completo" oninput="this.className = ''">
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="text" placeholder="Nome do Pai" value="{{ old('nome_pai_cand') }}" name="nome_pai_cand" oninput="this.className = ''">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <input type="text" placeholder="Nome da Mãe" value="{{ old('nome_mae_cand') }}" name="nome_mae_cand" oninput="this.className = ''">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <input type="date" value="{{ old('data_nascimento') }}" id="datainput" name="data_nascimento" oninput="this.className = ''">
        </div>

        <div class="col">
          <input type="text" class="form-control" id="idadeinput" style="text-align: center;" readonly="true" value="Idade" disabled>
          <div id="mensagem" style="color: red;"></div>
        </div>
        <div class="col">
          <input type="text" placeholder="Naturalidade" value="{{ old('naturalidade_cand') }}" name="naturalidade_cand" oninput="this.className = ''">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="radio" id="masculino" name="genero" value="Masculino" checked><label for="masculino"> Masculino</label>
            <input type="radio" id="feminino" name="genero" value="Femenino"><label for="feminino"> Feminino</label>
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <input type="text" style="margin-top: 15px;" placeholder="Número do Bilhete de identidade" id="bi_input" name="num_bi" oninput="this.className = ''">
            <div id="mensagem1" style="color: red;"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div id="clone1"class="col-lg-3  gap-1 justify-content-center align-items-center">
          <div>
            <span style="color: #777;">Telefone (+244):</span>
          </div>
          <div class=" col aa" style="display: flex; flex-direction: column;">
            <input type="text" value="" id="telefoneinput" placeholder="Telefone"  value="{{ old('num_tel') }}" name="num_tel" oninput="this.className = ''">
            <div class="mensagem-erro" style="width: 100%;"></div>
          </div>

        </div>


      </div>
    </div>

    <div class="tab">
      <h2>introduza os dados da escola de providência</h2>
      <div class="form-group">
        <input type="text" placeholder="Nome da escola de providência" value="{{ old('nome_escola') }}" name="nome_escola" oninput="this.className = ''">
      </div>

      <div class="row">
        <div class="form-group col">
          <select oninput="this.className = ''" class="form-select"  value="{{ old('turno') }}" name="turno">
            <option selected>Manhã</option>
            <option>Tarde</option>
            <option>Noite</option>
          </select>
        </div>

        <div class="form-group col">
          <input id="numeroinput1" type="text" placeholder="Nº de estudante" value="{{ old('num_aluno') }}" name="num_aluno" oninput="this.className = ''">
        </div>

        <div class="form-group col">
          <input type="text" placeholder="Turma" value="{{ old('turma_aluno') }}" name="turma_aluno" oninput="this.className = ''">
        </div>

      </div>

      <div class="row">
        <div class="form-group col">
          <input id="numeroinput" type="text" placeholder="Processo nº" value="{{ old('num_processo') }}" name="num_processo" oninput="this.className = ''">
        </div>

        <div class="form-group col">
          <input type="text" placeholder="Ano Lectivo" value="{{ old('ultimo_anoLectivo') }}" name="ultimo_anoLectivo" oninput="this.className = ''">
        </div>

      </div>
    </div>

    <div class="tab">
      <h2>Escolha o curso segundo a ordem de preferência</h2>

        @php
            $a=1;
        @endphp
          @foreach($cursos as $curso)
          <div class="form-group">
          <select oninput="this.className = ''" class="form-select" id="select" name="curso{{$a}}">
          <option selected disabled>Escolha a {{$a}}ª opção</option>
          @foreach ($cursos as $Curso )
          <option value="{{$Curso['nome_curso']}}">{{$Curso['nome_curso']}}</option>
          @endforeach
         </select>
         @php
              $a++;
         @endphp
          </div>
          @endforeach

    </div>

    <div class="tab">
      <h2>Digite as médias para cada disciplina solicitada</h2>
      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="LinguaP">
          <option selected >Língua Portuguesa</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Matematic">
          <option selected disabled>Matemática</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Fisic">
          <option selected disabled>Física</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Quimic">
          <option selected disabled>Química</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

    </div>

    <div style="text-align:center;margin-top:40px;">
      <div>
        <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
        <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
      </div>
    </div>

  </form>

</main>
@endsection
