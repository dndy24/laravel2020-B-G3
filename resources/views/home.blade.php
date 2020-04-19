@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div style="margin: 15px; text-align: center;">
                        <h2>Selamat Datang, silahkan tekan menu dibawah</h2>
                        <a href="/daki"> Data Pendaki </a> ||
                        <a href="/regus"> Regu Pendakian </a> ||
                        <a href="/jalurs"> Jalur Pendakian </a> ||
                        <a href="/perlengkapans"> Perlengkapan Regu </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
