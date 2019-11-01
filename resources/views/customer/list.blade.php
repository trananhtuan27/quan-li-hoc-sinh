<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route("customers.add")}}" >Thêm mới</a>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>Tên</td>
            <td>Email</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        @foreach($customer as $key=>$value)
            <tr>
                <td>{{++$key}}</td>
          <td> {{$value->Name}}</td>
           <td>{{$value->Email}}</td>
                <td><a href="{{route('customers.delete',$value->id)}}"><button type="button">Delete</button></a></td>
                <td><a href="{{route('customers.edit',$value->id)}}"><button type="button">Edit</button></a></td>

            </tr>
        @endforeach
    </table>

</body>
</html>
