<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update todo</h1>
    <form action="{{route('update.todo.post',['id'=>$todo->id])}}" method="post">
    
        @csrf 

        <label for="">Name</label>
        <input type="text" value="{{$todo->name}}" name="name" placeholder="Enter Your Name">

        <label for="">Email</label>
        <input type="email" name="email" value="{{$todo->email}}" placeholder="Enter Your Email">

        <label for="">Password</label>
        <input type="password" name="password" value="{{$todo->password}} placeholder="Enter Your Password">

        <input type="submit" name="" value="submit">
    </form>
</body>
</html>