@extends('layouts.admin')

@section('content')
    <h2 class="fs-4 text-secondary my-4">{{ __('Dashboard') }}</h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="card-text">
                        {{ __('You are logged in!') }}

                    <p class="card-text">
                        {{ __('Welcome ') }} {{ $user->name }}
                    </p>
                    <p class="card-text">
                        {{ __('Your email is: ') }} {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
