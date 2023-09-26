@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Página 2: </strong> </h4>
                </p>
            </div>
        </div>
        <form action=" {{'/pagina2'}}" method="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta3"> <h3> <strong> COLOQUE AQUI A TERCEIRA PERGUNTA </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="A">
                    <label class="form-check-label" for="pergunta3">
                        <h5> ALTERNATIVA A </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="B">
                <label class="form-check-label" for="pergunta3">
                    <h5> ALTERNATIVA B </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="C">
                    <label class="form-check-label" for="pergunta3">
                       <h5> ALTERNATIVA C </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="D">
                    <label class="form-check-label" for="pergunta3">
                      <h5>  ALTERNATIVA D </h5>
                    </label>
                </div>
            </div>
            <div class="form-group py-4">
                <label for="pergunta4"> <h3> <strong> COLOQUE AQUI A QUARTA PERGUNTA </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="A">
                    <label class="form-check-label" for="pergunta4">
                        <h5> ALTERNATIVA A </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="B">
                <label class="form-check-label" for="pergunta4">
                    <h5> ALTERNATIVA B </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="C">
                    <label class="form-check-label" for="pergunta4">
                       <h5> ALTERNATIVA C </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="D">
                    <label class="form-check-label" for="pergunta4">
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