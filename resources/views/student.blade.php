@extends('adminlte::master')

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Student</title>
</head>

@section('body')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Cijfersite" src="...">
      </a>
    </div>
    <p class="navbar-text navbar-right">Signed in as PLACEHOLDER</p>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                          <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                              <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                          </a>
                      @else
                          <a href="#"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          >
                              <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                          </a>
                          <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                              @if(config('adminlte.logout_method'))
                                  {{ method_field(config('adminlte.logout_method')) }}
                              @endif
                              {{ csrf_field() }}
                          </form>
                      @endif
                  </li>
              </ul>
    </div>
</nav>


<h1>Welkom</h1>










</html>