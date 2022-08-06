@extends('layouts.admin')
@section('content')
<div class="row justify-content">
    <div class="col-md-8 mx-auto">
        <div class="card ">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body ">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
@endsection





