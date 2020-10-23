<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('/AdminLte/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/AdminLte/css/adminlte.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="container">
        <br>
        <br>
        <div class="col-md-6 offset-md-3">
            <form action="{{route('user.store')}}" method="post" class="form-group">
                @csrf
                <div>

                    <label for="">First Name</label>
                    <input type="text" name="first_name" id="" class="form-control">
                    @error('first_name')
                <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>

                <div>

                    <label for="">Last Name</label>
                    <input type="text" name="last_name" id="" class="form-control">
                    @error('last_name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>

                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                    @error('email')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>

                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                    @error('password')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>

                    <label for="">Address</label>
                    <input type="text" name="address" id="" class="form-control">
                    @error('address')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>

                    <label for="">Birthday</label>
                    <input type="text" name="birthday" id="" class="form-control">
                    @error('birthday')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <br>
                <input type="submit" name="" id="" class="btn btn-primary" value="Đăng ký">
            </form>
        </div>
        </div>
    </div>
</body>
</html>