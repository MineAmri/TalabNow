@extends('layouts.d-app')
@section('content')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Talab Now Dashboard Admin</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="container">
                         <center>
                    @include('flash-message')
                    </center>
                        <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                        
                                        <th>E-mail</th>
                                        <th>Name</th>
                                        <th>Roles</th>
                                        <th>le</th>
                                        <th>Setting</th>
                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['users'] as $message)
                                    <tr>
                        
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->name }}</td>

                                       
                                        @if($message->is_admin =='1')
                                        <td><span class="badge badge-primary">Administrateur</span></td>
                                        @else
                                        <td><span class="badge badge-warning">Infographiste</span></td>
                                        @endif
                                        
                                        <td>{{ $message->created_at }}</td>
                                        <td>
                                          <a href="/dashboard/users/{{ $message->id }}" class="fas fa-eye"></a>
                                          <a href="/dashboard/delusers/{{ $message->id }}" onclick="return confirm('Are You Sure For Delete?')" class="fas fa-trash" style="color: red;"></a>
                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                  
            
                    </div>
                </div>
            </div>


@endsection