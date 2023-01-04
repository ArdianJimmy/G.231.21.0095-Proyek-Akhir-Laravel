<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/style.css') }}" />
    <title>Halaman Registrasi</title>
</head>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img
                src="assets/img/registrasi.jpg"
                class="img-fluid"
                alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="{{url('registrasi-user')}}" method="post">
                    @csrf
                        <h1 class="h3 mb-3 fw-normal">Register</h1>
                        <div class="form-floating">
                            <input
                            type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            id="floatingInput"
                            placeholder="name" >
                            <label for="floatingInput">name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                            id="floatingInput"
                            placeholder="Email Address">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <form action="/action_page.php">
                                <p>Role:</p>
                                 <input type="radio" id="role_id" name="role_id" value="1">
                                 <label for="role_id">admin</label><br>
                                 <input type="radio" id="role_id" name="role_id" value="2">
                                 <label for="role_id">operator</label><br>
                                 <input type="radio" id="role_id" name="role_id" value="3">
                                 <label for="role_id">user</label><br>
                            @error('role_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <form action="/action_page.php">
                                <p>Jabatan:</p>
                                 <input type="radio" id="position_id" name="position_id" value="1">
                                 <label for="position_id">Karyawan</label><br>
                                 <input type="radio" id="position_id" name="position_id" value="2">
                                 <label for="position_id">manager</label><br>
                                 <input type="radio" id="position_id" name="position_id" value="2">
                                 <label for="position_id">direktur</label><br>
                                 <input type="radio" id="position_id" name="position_id" value="2">
                                 <label for="position_id">operator</label><br>
                            @error('position_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="phone"
                            name="phone"
                            class="form-control @error('phone') is-invalid @enderror"  value="{{ old('phone') }}"
                            id="floatingphone"
                            placeholder="phone">
                            <label for="floatinginput">phone</label>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}"
                            id="floatingPassword"
                            placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input
                            type="password"
                            name="konfirmasi_password"
                            class="form-control @error('konfirmasi_password') is-invalid @enderror"  value="{{ old('konfirmasi_password') }}"
                            id="floatingPassword"
                            placeholder="Password">
                            <label for="floatingPassword">Konfirmasi Password</label>
                            @error('konfirmasi_password')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    </form>
                    <p>Sudah Punya Akun?</p>
                    <a class="w-100 btn btn-lg btn-success" href="{{ url('/') }}">Login</a>
            </div>
    </div>
</section>
</body>
</html>
