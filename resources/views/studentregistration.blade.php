<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('student_reg')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="stud_name" id=""><br><br>
        <label for="">Contact</label>
        <input type="text" name="stud_contact" id=""><br><br>
        <label for="">Address</label>
        <input type="text" name="stud_address" id=""><br><br>
        <button>Register</button>
    </form>
    @if(isset($message))
    <p>{{$message}}</p>
    @endif
</body>
</html>