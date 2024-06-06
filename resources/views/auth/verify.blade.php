@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tú dirección de correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo email de verifiación ha sido mandado a tu correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, porfavor, compruebe si le ha llegado el email de verificación.') }}
                    {{ __('Si no has recibido el correo electrónico . . .') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aquí para recibir un nuevo email de verifiación.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
