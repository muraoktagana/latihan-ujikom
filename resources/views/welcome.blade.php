
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Ujikom</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(223, 223, 223);
            font-family: Arial, Helvetica, sans-serif
        }
        .card{
            width: 100%;
            max-width: 500px;
            background-color: rgb(247, 255, 255);
            border-radius: 10px;
            padding: 20px;
        }
        .card .card-header{
            text-align: center;
            display: flex;
            justify-content: center;
            /* margin-bottom: 36px; */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item )
                       <li>{{ $item }}</li> 
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <div class="my-4">
                    <label for="username" class="form-label">Masukan Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukan email">
                </div>
                <div class="my-4">
                    <label for="password" class="form-label">Masukan Password:</label>
                    <input type="text" name="password" class="form-control" placeholder="Masukan username">
                </div>
                <div class="mt-5 text-center d-grid">
                    <input type="submit" class="btn btn-primary" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</body>
</html>