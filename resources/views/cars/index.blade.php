@extends('layouts.master')

@section('content')
   
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Producer</th>
      <th scope="col">Numbers of doors</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cars as $car)
    <tr>
      <td>
         <a href="{{action('CarsController@show', $car->id) }}">{{$car->title}}</a>
      </td>
      <td>
        <a href="{{action('CarsController@show', $car->id) }}">{{$car->producer}}</a>
      </td>
      <td>
         <a href="{{action('CarsController@show', $car->id) }}">{{$car->number_of_doors}}</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
 @endsection
    
       
    

