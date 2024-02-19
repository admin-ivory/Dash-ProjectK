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
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="/show-bus-list" role="tab" aria-controls="bus_list" aria-selected="true">
                            Autocars
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Request::is('show-compagnies-list') ? 'active' : '') }}" href="{{ url('show-compagnies-list') }}" aria-selected="false">
                            Compagnies 
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
                                <h5 class="mb-0">All Autocars</h5>
                                </div>
                                <a href="{{ url('showAddBusForm') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Autocars</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            
                            <div class="table-responsive p-0"  id="bus_list">
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
                                            Email
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            role
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
                                    @if ( count($bus) > 0 )
                                    @foreach ( $bus as $data )
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
                                            <p class="text-xs font-weight-bold mb-0">admin@si.com</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Admin</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
</div>
 
@endsection

