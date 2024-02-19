@php 
use \App\Http\Controllers\BusController;
@endphp
@extends('layouts.user_type.auth')
@section('content')


<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill flex-column p-1" role="tablist">
                           
                            <li class="nav-item">
                                <a class="nav-link {{ (Request::is('show-compagnies-list') ? 'active' : '') }}" href="{{ url('show-compagnies-list') }}" aria-selected="true">
                                Compagnies 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (Request::is('Autocars') ? 'active' : '') }}" href="{{ url('show-bus-list') }}" aria-selected="true">
                                Autocars
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (Request::is('show-drivers-list') ? 'active' : '') }}" href="{{ url('show-drivers-list') }}" aria-selected="false">
                                Chauffeurs 
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Compagnies</h5>
                        </div>
                        <a href="{{ url('showAddCompagniesForm') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Compagnies</a>
                        
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Siège
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Contact:
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @if ( count($compagnie) > 0 )
                            @foreach ( $compagnie as $data )
                          
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->id }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->Siege }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->Telephone }}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $data->created_at }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                              
                                @endforeach
                                @endif 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
         </div>
    </div>     
</div>
 
@endsection

