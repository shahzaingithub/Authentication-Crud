<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      
       
      </ul>
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

    </div>
  </div>
</nav>
    <!-- navbar -->
    <form action="{{route('index')}}" method="post" enctype="multipart/form-data">
        @csrf 

        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name">

        <label for="">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email">

        <label for="">Image</label>
        <input type="file" name="image">

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter Your Password">

        <input type="submit" name="" value="submit">
    </form>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>image</th>
            <th>Delete</th>
            <!-- <th>password</th> -->
        </tr>
        <tr>
            @foreach($todo as $value)
            
            <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td><img height="200" width="200" src="{{ asset('storage/images/' . $value->image) }}" ></td>
                <td><a href="{{route('delete.todo',['id'=>$value->id])}}">Delete</a></td>
                <td><a href="{{route('update.todo',['id'=>$value->id])}}">Uddate</a></td>
            </tr>
            @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>