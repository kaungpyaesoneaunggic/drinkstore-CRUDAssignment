@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form action="{{route('drink.update',$drink->id)}}" method="post">
                            @csrf 
                            @method('put')
                        <div class="mb-3 mt-3">
                            <label  class="form-label">Name <small class="text-danger">*</small></label>
                            <input value="{{ $drink->name }}" name="name" class="form-control @error('name') is-invalid @enderror " >
                            @error('name')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price<small class="text-danger">*</small></label>
                            <input value="{{ $drink->price }}" name="price" class="form-control @error('price') is-invalid @enderror " >
                            @error('price')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Type<small class="text-danger">*</small></label>
                            <select value="{{ $drink->type }}" name="type">
                                <option value="caffine">Caffine</option>
                                <option value="juice">Juice</option>
                                <option value="liquor">Liquor</option>
                                <option value="dairy">Dairy</option>
                                <option value="water">Water</option>
                            </select>
                            @error('type')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Description<small class="text-danger">*</small></label>
                            <input value="{{ $drink->description }}"  type="textarea" name="description" class="form-control @error('quantity') is-invalid @enderror " >
                            @error('description')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Quantity<small class="text-danger">*</small></label>
                            <input value="{{ $drink->quantity }}" name="quantity" class="form-control @error('quantity') is-invalid @enderror " >
                            @error('quantity')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 text-center">
                                <a href="{{ route('drink.index') }}" class="btn btn-lg btn-outline-dark">Back</a>
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection