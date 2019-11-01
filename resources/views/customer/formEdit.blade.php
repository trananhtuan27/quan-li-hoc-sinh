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
<form method="post" action="{{route('customer.update',$customer->id)}}">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="{{$customer->name}}"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{$customer->email}}"></td>
        </tr>
        <tr><button type="submit">Edit</button></tr>
    </table>

</form>
</body>
</html>
