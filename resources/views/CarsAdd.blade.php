@extends('layout.master')
@section('title', 'Add')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add</h1>
            <form action="/proses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{old('name')}}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price" value="{{old('price')}}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="year">Year*</label>
                    <input type="text" class="form-control" name="year" id="year" placeholder="Enter year" value="{{old('year')}}">
                    @error('year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="color">Color*</label>
                    <input type="text" class="form-control" name="color" id="color" placeholder="Enter color" value="{{old('color')}}">
                    @error('color')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="engine">Engine*</label>
                    <input type="text" class="form-control" name="engine" id="engine" placeholder="Enter engine" value="{{old('engine')}}">
                    @error('engine')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="transmission">Transmission*</label>
                    <input type="text" class="form-control" name="transmission" id="transmission" placeholder="Enter transmission" value="{{old('transmission')}}">
                    @error('transmission')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City*</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter registered city" value="{{old('city')}}">
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="country">Country*</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="Enter registered country" value="{{old('country')}}">
                    @error('country')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="drive_position">Drive Position*</label>
                    <input type="text" class="form-control" name="drive_position" id="drive_position" placeholder="Enter registered drive_position" value="{{old('drive_position')}}">
                    @error('drive_position')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mileage">Mileage*</label>
                    <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter mileage" value="{{old('mileage')}}">
                    @error('mileage')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="{{old('description')}}"></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <p>* means required</p>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
