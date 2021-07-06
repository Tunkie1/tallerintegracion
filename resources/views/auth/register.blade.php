@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" onsubmit="return validarTerminos()" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <!-- Button trigger modal -->
                            Acepto los terminos y condiciones
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Ver terminos y condiciones
                            </button>
                        </div>

                        

                        <div class="form-group row mb-0 p-4">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TERMINOS Y CONDICIONES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            El equipo que conforma este proyecto deja estipulado las normas que se verán sujetas a este software y se compromete a seguir al pie de la letra cada una de ella. Esto quedara claramente estipulado en los siguientes términos y condiciones.
                <ul>
                    <li>a) La empresa se rige por normas de confiabilidad estrictas las cuales prohíben tanto a los trabajadores como usuarios modificar, divulgar y eliminar cualquier tipo de información o código de programación.</li>
                    <li>b) La empresa dueña del proyecto no se hace responsable por algún tipo de perdida y/o daño de archivos de usuario y/o archivos enviados por la empresa independiente sea un problema externo como problemas técnicos o por una mala manipulación de los usuarios.</li>
                    <li>c) La empresa se compromete especialmente a no interferir y tampoco interponerse en la estructura normal de M&S ingenierías, así evitando todo tipo de problema con directivos y otros jefes.</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

    function validarTerminos() {
        var terminos = document.querySelector('#defaultCheck1').checked;
        if (!terminos) {
            alert('Debe aceptar los terminos y condiciones para registrarse');
            return false;
        }
    }

</script>
@endsection