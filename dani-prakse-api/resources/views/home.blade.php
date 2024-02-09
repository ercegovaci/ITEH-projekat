@extends('layouts.app')

@section('content')
<div class="container">
    @if($isAdmin)

        <div class="row justify-content-center">
            <h1>Cv</h1>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">CV ID</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Prezime</th>
                    <th scope="col">Broj telefona</th>
                    <th scope="col">Email</th>
                    <th scope="col">CV</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cvs as $cv)
                    <tr>
                        <th scope="row">{{ $cv->id }}</th>
                        <td>{{ $cv->ime }}</td>
                        <td>{{ $cv->prezime }}</td>
                        <td>{{ $cv->broj_telefona }}</td>
                        <td>{{ $cv->email }}</td>
                        <td><a target="_blank" href="/storage/cv/{{ $cv->cv_putanja }}">Download</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <h1>Subscriptions</h1>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Subscription ID</th>
                    <th scope="col">Subscription Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subs as $subscription)
                    <tr>
                        <th scope="row">{{ $subscription->id }}</th>
                        <td>{{ $subscription->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
    <div class="row justify-content-center">
        <h1>Molimo vas da se ulogujete sa admin nalogom</h1>
    </div>
        @endif

</div>
@endsection
