<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authencantion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
</head>



<body>



    <div class="container">
        <div class="row">
<div class="col-md-4 col-md-ofset-4" style="margin: top 20px;">
    <h4>Registration form </h4>
    <hr>
<form action="{{route('register-user')}}" method="post">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess">{{Session::get('sucess')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
   


    <div class="form.group">
        <label for="name">Full name</label>
        <input type="text" class="form-control" placeholder="Enter full name" name="name" value="{{old('name')}}">
        <span class="text-danger">@error('name'){{$message}} @enderror</span>
    
    </div>
    <div class="form.group">
        <label for="email">Email</label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
    <div class="form.group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" placeholder="Enter phone number" name="phone_number" value="">
        <span class="text-danger">@error('phone_number'){{$message}} @enderror</span>
    
    </div>
    <div class="form.group">
        <label for="skills">Skills</label>
        <input type="text" class="form-control" placeholder="Enter Skills" name="skills" value="">
        <span class="text-danger">@error('skills'){{$message}} @enderror</span>
    
    </div>
    <div class="form.group">
        <label for="weaknesses">Weaknesses</label>
        <input type="text" class="form-control" placeholder="Enter Weaknesses" name="weaknesses" value="">
        <span class="text-danger">@error('weaknesses'){{$message}} @enderror</span>
    
    </div>
    <br>

   <div class="form-group">
      
       <button type="button.btn.btn-block.bt-primary" class="btn btn-primary" type="submit">Register</button>

       
    </div>
    </div>
    <br>
    

    </form>
</div>
</div>
</div>
 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>