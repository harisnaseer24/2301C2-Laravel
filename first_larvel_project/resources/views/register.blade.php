<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
      
            <div class="col-md-8 card my-5 mx-auto p-5">
             @if($status=Session::get('success'))
              
                <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $status}}.</strong>  Registeration is successfully done..!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
             @endif
                <form action="/create" method="POST" class="form-group" enctype="multipart/form-data" >
                    <h1 class="text-center display-3 text-primary">Hey, Students Register Now..!</h1>
                @csrf
                    <div class="form-group">
                        <label for="fullName">fullName</label>
                        <input type="text" name="fullName" placeholder="fullName" class="form-control my-2" value="{{old('fullName')}}">
                     @error("fullName")
                       <span class="text-danger">
                    {{ $message }}
                       </span>
                       @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" placeholder="email" class="form-control my-2" value="{{old('email')}}">
                        @error("email")
                       <span class="text-danger">
                    {{ $message }}
                       </span>
                       @enderror
                      
                    </div>
                    <div class="form-group">
                        <label for="contact">contact</label>
                        <input type="number" name="contact" placeholder="contact" class="form-control my-2" value="{{old('contact')}}">
                        @error("contact")
                       <span class="text-danger">
                    {{ $message }}
                       </span>
                       @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" placeholder="City" class="form-control my-2" value="{{old('contact')}}">
                        @error("city")
                       <span class="text-danger">
                    {{ $message }}
                       </span>
                       @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input type="file" name="image"  class="form-control my-2" value="{{old('image')}}">
                        @error("image")
                       <span class="text-danger">
                    {{ $message }}
                       </span>
                       @enderror
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="form-control my-2 btn btn-dark">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>