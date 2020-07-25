@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="contacts/create" class="btn btn-primary">Add Contact</a>
                    <a href="contacts" class="btn btn-primary">Show Contact</a>
                    <p class="text-dark mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo obcaecati provident aut eius id, illum quod. Quas atque neque nihil sit. Ab dolore vel sapiente labore quibusdam dolores incidunt a?</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
