@extends('layouts.site')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">With apples drink teriyaki. </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- Products list -->
    <div class="gray-background">
        <section class="products__cultivation__category main-wrapper">
            @foreach($categories as $categoria)
                <article class="card__product">
                    <a href="{{route('site.produtos.categoria', ['categoria' => $categoria])}}">
                        <div class="card__cover">
                            <img src="{{asset($categoria->image)}}">
                        </div>
                        <header class="card__product-header">
                            <h2 class="title-medium">{{$categoria->name}}</h2>
                            <p>{{$categoria->descricao}}</p>
                        </header>
                    </a>
                </article>
            @endforeach
        </section>
    </div>
@endsection
