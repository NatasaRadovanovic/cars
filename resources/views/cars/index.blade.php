<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    
    @foreach($cars as $car)
    
        <div>
            <a href="{{action('CarsController@show', $car->id) }}">{{$car->title}}</a>
        </div>
       
        <div>
            <a href="{{action('CarsController@show', $car->id) }}">{{$car->producer}}</a>
        </div>
       
        <div>
            <a href="{{action('CarsController@show', $car->id) }}">{{$car->number_of_doors}}</a>
        </div>
    
   @endforeach
</body>
</html>