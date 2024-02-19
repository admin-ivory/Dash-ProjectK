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
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="{{ (Request::is('show-compagnies-list') ? 'active' : '') }}" href="{{ url('show-compagnies-list') }}" role="tab" aria-controls="bus_list" aria-selected="true">
                            Compagnies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Request::is('show-bus-list') ? 'active' : '') }}" href="{{ url('show-bus-list') }}" aria-selected="false">
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
                    <div class="p-4 ">
                   
                    
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="AT-UTB-01">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Plaque d'Immatriculation</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="AT-UTB-01">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Marque</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mercedes">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Chauffeur</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Nombre de Siéges</label>
                                <input class="form-control" type="number" value="50 " id="example-number-input">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Compagnie</label>
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Chauffeur</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Assurance</label>
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                 
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
 
@endsection


