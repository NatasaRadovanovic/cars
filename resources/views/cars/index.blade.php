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
        
    <div>{{$car->title}}</div>
    <div>{{$car->producer}}</div>
    <div>{{$car->number_of_doors}}</div>
    
   @endforeach
</body>
</html>