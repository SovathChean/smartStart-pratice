@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                               <thead>
                                  <tr>

                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Created</th>
                                    <th>Message</th>
                                  </tr>
                               </thead>
                               <tbody>
                                @if($users)

                                   @foreach ($users as $user)
                                        <tr>
                                            <td> {{$user->id}} </td>
                                            <td> {{$user->name}} </td>
                                            <td> {{$user->email}} </td>
                                            <td> {{$user->phonenumber}} </td>
                                            <td> {{$user->created_at->diffForHumans()}} </td>
                                            <td> {{$user->message}} </td>

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
@endsection
