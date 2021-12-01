<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/signin.css')}}">
</head>
<body>
    <form class="form-signin" method="POST" action="{{ route('login')}}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}}</li>
                @endforeach
            </ul>
        @endif
        {{-- @if (session('login_error'))
            <div class="alert alert-danger">
                {{session('login_error')}}
            </div>
        @endif
        @if (session('logout'))
            <div class="alert alert-danger">
                {{session('logout')}}
            </div>
        @endif --}}
        <x-alert type="danger" :session="session('login_error')"/>
        <x-alert type="danger" :session="session('logout')"/>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>

</body>
</html>



