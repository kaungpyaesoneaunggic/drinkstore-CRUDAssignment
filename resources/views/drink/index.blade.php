@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body col-md-12">
                    <h1>Welcome to our Store</h1>
                </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Quantity</th>
                            <th scope="col "><div class="me-5">Action</div></th>
                          </tr>
                          </thead>
                          <tbody>
                            @php
                              $temp=1;
                            @endphp
                              @foreach ($drinks as $drink)
                              <tr>
                                <th scope="row">{{$temp++}}</th>
                                <td>{{ $drink->name }}</td>
                                <td>{{ $drink->price }}</td>
                                <td>{{ $drink->type }}</td>
                                <td>{{ $drink->quantity }}</td>
                                <td>
                                  <div class="justify-content-center">
                                    
                                      <a type="button" href="{{ route('drink.edit',$drink->id) }}"  class="btn btn-outline-warning btn-sm">🖋</a>
                                      <a type="button" href="{{ route('drink.show',$drink->id)}}" class="btn btn-outline-info btn-sm"> &nbsp;  !  &nbsp; </a>
                                      <form  action="{{ route('drink.destroy', $drink->id )}}" method="post"  class="d-inline-block">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" >🚮</button>
                                      </form>
                                    </div>
                                  </td>
                                  
                                </tr>
                              @endforeach
                                
                              <a class="btn btn-outline-success mx-5" href="{{ route('drink.create') }}">+</i></a>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection