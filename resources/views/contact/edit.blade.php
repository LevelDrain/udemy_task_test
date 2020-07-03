@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    上島「編集しますかぁ？実は僕も編集したいと思ってたんですー」
                    <hr>
                    <form action="" method="get">
                    @csrf
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $contact->gender }}
                    {{ $contact->age }}
                    {{ $contact->contact }}
                        <br>
                        <input type="submit" value="更新する" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
