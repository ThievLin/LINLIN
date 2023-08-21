<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student</title>

        <!-- Fonts -->
        <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- Custom styles for this template-->
        <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    </head>
    <div class="container">
        <div class="row" style="margin:90px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Hello Welcome</h2>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-center right-center px-6 py-4 sm:block">
                                @auth
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('/student') }}" class="btn btn-primary btn-block btn-user">Go to Student</a></div>
                                        <br>
                                        <div class="ml-4 text-lg leading-7 font-semibold" onclick="return confirm('{{ __('Do you want to logout?') }}')"><a href="{{ url('/logout') }}" class="btn btn-primary btn-block btn-user">Logout</a></div>
                                    @else                
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="btn btn-primary btn-block btn-user">Login</a></div>  
                                            <br>
                                            @if (Route::has('register'))         
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('register') }}" class="btn btn-primary btn-block btn-user">Register</a></div>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
