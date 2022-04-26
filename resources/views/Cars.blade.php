@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
<div class="row g-3" style="padding: 2%">
    <div class="col-md-12">
        <h1>MAR Used Cars</h1>
        <p>The Best Mercedes Benz and BMW Used Cars Dealer</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Cars</button>
    </div><br>
    <br>
    <br>
    @foreach ($cars as $car)
    

    <div class="col-md-4" style="padding: 2%">
        
        <div class="card">
            <img src="{{ asset('/assets/picture/cars/'.$car->image) }}" class="card-img-top" alt="..." style="height:190px">
            <div class="card-body" style="height: 250px">
                <h5 class="card-title">{{$car->name}}</h5>
                <p class="card-text">Euro {{$car->price}}</p>
                <p class="card-text">Year {{$car->year}}</p>
                <p class="card-text">{{$car->city}}, {{$car->country}}</p>
                <a href={{url('detail/'.$car->id)}} class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    
    
    @endforeach

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Car Catalogue</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/proses" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="image">Image*</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter image" value="{{old('image')}}">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <p>* means required</p>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>