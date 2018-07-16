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
            <tr>
                <td> {{$car->title}}</td>
                <td>{{$car->producer}}</td>
                <td>{{$car->number_of_doors}}</td>
             </tr>
        </tbody>
    </table>
@endsection

