@extends('layouts.app')

@section('template_title')
    Actualizar Planta
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Edificios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                 @includeif('partials.errors')
                <div class="col-lg-12">
               
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('edificios.create', $edificio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('edificio.form')

                        </form>
                </div>
            </div>
        </div>
    </section>


@endsection




   