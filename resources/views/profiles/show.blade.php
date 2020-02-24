@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row mt-4">
            <div class="col-4 text-center">
                <img src="{{ asset('/svg/si8.jpg') }}" class="rounded-circle" width="150px">
            </div>
            <div class="col-8">
                <div class="d-flex align-item-baseline">
                    <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
                    <button class="btn btn-sm btn-primary">S'abonner</button>
                </div>
                <div class="d-flex mt-3">
                    <div class="mr-3"><strong>25</strong>publications</div>
                    <div class="mr-3"><strong>951</strong>abonnés</div>
                    <div class="mr-3"><strong>3</strong>abonnements</div>
                </div>
                <div class="mt-3">
                    <div class="font-weight-bold">{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
            <div class="col-4">
                <img src="{{ asset('/svg/si2.jpg') }}" class="w-100">
            </div>
            <div class="col-4">
                <img src="{{ asset('/svg/si6.png') }}" class="w-100">
            </div>
            <div class="col-4">
                <img src="{{ asset('/svg/qs6.jpg') }}" class="w-100">
            </div>
        </div>
</div>
@endsection
