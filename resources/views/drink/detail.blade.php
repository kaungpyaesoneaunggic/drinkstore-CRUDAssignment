@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <div class="mb-3 mt-3">
                            <label  class="form-label">Name</label>
                            <input value="{{ $drink->name }}" name="name" class="form-control" readonly >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price</label>
                            <input value="{{ $drink->price }}" name="price" class="form-control" readonly >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Type<small class="text-danger">*</small></label>
                            <select  name="type">
                                <option value="{{ $drink->type }}">{{ $drink->type }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Description</label>
                            <input value="{{ $drink->description }}"  type="textarea" name="description" class="form-control" readonly >

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Quantity</label>
                            <input value="{{ $drink->quantity }}" name="quantity" class="form-control" readonly >
                        </div>
                        <div class="mb-4 text-center">
                                <a href="{{ route('drink.index') }}" class="btn btn-lg btn-outline-dark">Back</a>
                        </div>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection