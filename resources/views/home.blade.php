@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                            
                                    
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>                                               
                                        @php
                                            use App\Models\User;
                                        $users = User::count();                                                
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$users}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/users" class="text-white">Ver más</a></p>
                                    </div>                                            
                                </div>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

