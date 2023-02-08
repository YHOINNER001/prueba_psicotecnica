<!-- resources/views/trains/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trains</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Destination</th>
                                <th>Receiver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->destination }}
