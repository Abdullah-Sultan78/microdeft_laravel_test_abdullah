<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requisition Details</title>
</head>
<body>
<h1 style="text-align: center">Details</h1>
<br>
<div class="container">
    
        @foreach ($requisitions as  $requisition)
        <h3 style="text-align: center">Asset Name: {{$requisition->asset->name}}</h3>
        <h3 style="text-align: center">Requisition Name: {{ $requisition->name}}</h3>
        <h3 style="text-align: center">Email: {{ $requisition->email}}</h3>
        <h3 style="text-align: center">Phone: {{ $requisition->phone}}</h3>
        <h3 style="text-align: center">Designation: {{ $requisition->designation}}</h3>
        <hr>
       @endforeach

</div>

</body>
</html>
