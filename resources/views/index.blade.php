<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    input[type=text] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=password],input[type=date] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=email] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    /* For Navbar */
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="{{url('/customer')}}/" class="active">Home</a>
    <a href="{{url('/customer')}}">Register</a>
    <a href="{{url('/customer/view')}}">Customer Data</a>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <h1 class="text-center">User Registration</h1>
  <div style="padding-left:16px" class="container">

    <form action="{{url('/')}}/customer" method="post">
      @csrf

      <div class="container">
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." value="{{old('name')}}">
        <span class="text-danger">
          @error('name')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="email"> Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email.." value="{{old('email')}}">
        <span class="text-danger">

        </span>
        <br>
        <label for="contact">Contact</label>
        <input type="text" id="contact" name="contact" placeholder="Your Contact.." value="{{old('contact')}}">
        <span class=" text-danger">
          @error('contact')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your address.." value="{{old('address')}}">
        <span class=" text-danger">
          @error('address')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="gender">Gender</label>

        <input type="radio" name="gender" value="male" value="{{old('gender')}}"> Male
        <input type="radio" name="gender" value="female" value="{{old('gender')}}"> Female
        <input type="radio" name="gender" value="Other" value="{{old('gender')}}"> Other

        <span class=" text-danger">
          @error('gender')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="dob">Date-of-Birth</label>
        <input type="date" id="dob" name="dob" placeholder="Your dob.." value="{{old('dob')}}">
        <span class=" text-danger">
          @error('dob')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password..">
        <span class="text-danger">
          @error('password')
          {{$message}}
          @enderror
        </span>
        <br>
        <label for="password_confirmation"> Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Your password..">
        <span class="text-danger">
          @error('password_confirmation')
          {{$message}}
          @enderror
        </span>
      </div>

      <button class="btn btn-success">Submit</button>

    </form>

  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>

</html>
<!-- <div class="container">
  <x-input type="text" id="name" name="name" label="Your name.." />
  <x-input type="email" id="email" name="email" label="Your Email.." />
  <x-input type="text" id="contact" name="contact" label="Your Contact.." />
  <x-input type="password" id="password" name="password" label="Your password.." />
  <x-input type="password" id="password_confirmation" name="password_confirmation" label="Your confirm password.." />
</div> -->