@extends('layout.master')

    @section('title', 'Detail')
        
    @section('content')
    @foreach ($carsDetail as $cars)    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$cars->name}}</h1>
                <img src="{{asset('/assets/picture/cars/'.$cars->image)}}" alt="" style="width: 800px;height: 450px">
                <p>Euro {{$cars->price}}</p>
                <p>Year {{$cars->year}}</p>
                <p>Engine {{$cars->engine}}</p>
                <p>Transmission {{$cars->transmission}}</p>
                <p>City {{$cars->city}}</p>
                <p>Country {{$cars->country}}</p>
                <p>Drive Position {{$cars->drive_position}}</p>
                <p>Color {{$cars->color}}</p>
                <p>Mileage {{$cars->mileage}} mile(s)</p>
                <p>Description:</p>
                {{$cars->description}} <br>
                <button button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                <button button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Delete Dialogue</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are You Sure to Delete {{$cars->name}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <a href="/delete/{{$cars->id}}" class="btn btn-danger">Confirm</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit cars Detail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('update', [$cars->id])}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{old('name') ?? $cars->name}}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price" value="{{old('price') ?? $cars->price}}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="year">Year*</label>
                    <input type="text" class="form-control" name="year" id="year" placeholder="Enter year" value="{{old('year') ?? $cars->year}}">
                    @error('year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="color">Color*</label>
                    <input type="text" class="form-control" name="color" id="color" placeholder="Enter color" value="{{old('color') ?? $cars->color}}">
                    @error('color')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="engine">Engine*</label>
                    <input type="text" class="form-control" name="engine" id="engine" placeholder="Enter engine" value="{{old('engine') ?? $cars->engine}}">
                    @error('engine')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="transmission">Transmission*</label>
                    <input type="text" class="form-control" name="transmission" id="transmission" placeholder="Enter transmission" value="{{old('transmission') ?? $cars->transmission}}">
                    @error('transmission')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City*</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter registered city" value="{{old('city') ?? $cars->city}}">
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="country">Country*</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="Enter registered country" value="{{old('country') ?? $cars->country}}">
                    @error('country')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="drive_position">Drive Position*</label>
                    <input type="text" class="form-control" name="drive_position" id="drive_position" placeholder="Enter registered drive_position" value="{{old('drive_position') ?? $cars->drive_position}}">
                    @error('drive_position')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mileage">Mileage*</label>
                    <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter mileage" value="{{old('mileage') ?? $cars->mileage}}">
                    @error('mileage')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description') ?? $cars->description}}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image*</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter image" value="{{old('image') ?? $cars->image}}">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <p>* means required</p>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    
@endforeach
@stop