<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        <div class="container mx-auto">
            <div class="navbar bg-base-100">
                <div class="flex-1">
                  <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
                <div class="flex-none gap-2">
                  <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                  </div>
                   @if (Route::has('login'))
                        <div class="flex-none">
                            @auth
                                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                <div class="dropdown dropdown-end">
                                  <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                    <div class="w-10 rounded-full">
                                      <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                    </div>
                                  </label>
                                  <ul tabindex="0" class="mt-3 p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                                    <li>
                                      <a class="justify-between">
                                        Profile
                                        <span class="badge">New</span>
                                      </a>
                                    </li>
                                    <li><a>Settings</a></li>
                                    <li><a>Logout</a></li>
                                  </ul>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="btn">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                  
                </div>
              </div>
        </div>
        {{-- HERO --}}
        <div class="hero min-h-screen" style="background-image: url(/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
          <div class="hero-overlay bg-opacity-60"></div>
          <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
              <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
              <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              <button class="btn btn-primary">Get Started</button>
            </div>
          </div>
        </div>
        {{-- HERO END --}}

    </body>
</html>
