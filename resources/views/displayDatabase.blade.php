<html>
<head>
    <title>
    </title>
</head>

<h1>Display Table</h1>


@foreach ($table as $data)
    <div>
        <li>{{$data->user_id}} {{$data->user_name}} {{$data->user_email}} {{$data->user_password}}</li>
    </div>
@endforeach

</html>
