@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Página 1: </strong> </h4>
                </p>
            </div>
        </div>
        <form action="{{'/pagina1'}}" method="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta1"> <h3> <strong> COLOQUE AQUI A PRIMEIRA PERGUNTA </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1" value="A">
                    <label class="form-check-label" for="pergunta1">
                        <h5> ALTERNATIVA A </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1" value="B">
                <label class="form-check-label" for="pergunta1">
                    <h5> ALTERNATIVA B </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1" value="C">
                    <label class="form-check-label" for="pergunta1">
                       <h5> ALTERNATIVA C </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1" value="D">
                    <label class="form-check-label" for="pergunta1">
                      <h5>  ALTERNATIVA D </h5>
                    </label>
                </div>
            </div>
            <div class="form-group py-4">
                <label for="pergunta2"> <h3> <strong> COLOQUE AQUI A SEGUNDA PERGUNTA </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2" value="A">
                    <label class="form-check-label" for="pergunta2">
                        <h5> ALTERNATIVA A </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2" value="B">
                <label class="form-check-label" for="pergunta2">
                    <h5> ALTERNATIVA B </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2" value="C">
                    <label class="form-check-label" for="pergunta2">
                       <h5> ALTERNATIVA C </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2" value="D">
                    <label class="form-check-label" for="pergunta2">
                      <h5>  ALTERNATIVA D </h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button" 
                    class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div> 
</div> 

@endsection