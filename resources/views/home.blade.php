@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hello {{ Auth::user()->name }} <br/>
                    Email Anda : {{ Auth::user()->email }} <br/>
                </div>
                <a href="/welcome" class="btn btn-primary">DATA PEGAWAI</a>
            </div>
        </div>
    </div>
</div>
@endsection
