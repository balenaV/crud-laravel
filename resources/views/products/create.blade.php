@extends('products.layout');

@section('content')
    <h1>Criar Produto...</h1>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar Novo Produto</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Houveram alguns problemas com seu input. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" placeholder="Nome" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalhe:</strong>
                    <textarea name="detail" style="height: 150px" placeholder="Detalhe" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
