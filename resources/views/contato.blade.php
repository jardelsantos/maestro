<!-- codigos http 404(não encontrado), 500(erro de programação) -->

@extends('layout.master')

@section('conteudo')

    <h1>Contato</h1>

    @if( Session('sucesso') )
        <div class="alert alert-success">
            {{ Session('sucesso') }}
        </div>
    @endif

    <form action="{{ url('/contato') }}" method="post">
        @csrf
        <div>
            <label class="form-label">Nome</label>
            <input class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}"/>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror      
        </div>
        <div>
            <label class="form-label">email</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" />
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label class="form-label">Mensagem</label>
            <textarea class="form-control @error('mensagem') is-invalid @enderror" name="mensagem">{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
@endsection