@extends('products.layout')

@section('content')
    <div class="row">
        <diiv class="col-lg-12 margin-tb">
            <h2>Editar Produto</h2>
        </diiv>
        <div class="pullright">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Houveram alguns problemas com o seu input. <br> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" class="form-control" name="name" placeholder="Nome"
                        value="{{ $product->name }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalhe:</strong>
                    <textarea style="height: 150px" type="text" class="form-control" name="detail" placeholder="Detalhe">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"><button type="submit"
                    class="btn btn-primary">Submit</button></div>
        </div>
    </form>


@endsection
