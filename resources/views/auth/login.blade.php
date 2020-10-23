<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('/AdminLte/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/AdminLte/css/adminlte.min.css')}}">
    <?php
        $is_active = [1 => 'Đi học', 2 => 'Nghỉ học'];
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="container">
        <br>
        <div class="col-md-6 offset-md-3">
            <form action="{{route('auth.post-login')}}" method="post" class="form-group">
                @csrf
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
                <br>
                <input type="submit" class="btn btn-primary btn-sm mr-4" value="Đăng nhập">
                 <a  href="{{route('auth.register')}}">Đăng ký</a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>