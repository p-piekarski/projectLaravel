<!DOCTYPE html>
<html lang="en">
<!-- @include('layouts.head'); -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include('layouts.contentheader')
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">

    <h3><label>{{ Auth::user()->name}}</label></h3>
    <h3>e-mail: <label>{{ Auth::user()->email}}</label></h3>
    <h3>zmień hasło: <input type="text"></input></h3>
    <button><a href="/home">Zapisz</a></button>
    <button>Anuluj</button>

    <h3>Forms:</h3>

    <div class="container">
        @include('inc.messages')
        {!! Form::open(['url' => '/user/store', 'action'=> [$user->id], 'method' => 'POST']) !!}
        {{ Form::token() }}
        <div>
            {{Form::label('name', 'Imie i Nazwisko')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Podaj nowe imie i nazwisko'])}}
        </div>
        <div>
            {{Form::label('email', 'e-mail')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'podaj nowy adres email'])}}
        </div>
        <div>
            {{Form::label('password', 'Hasło')}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Podaj nowe hasło'])}}
        </div>
        <div>
            {{Form::submit('Zatwierdź', ['class' => 'button button1'])}}
        </div>
        {!!Form::close() !!}
    </div>
</div>
<aside class="control-sidebar control-sidebar-dark"></aside>
@include('layouts.footer')
</div>
@include('layouts.scripts')
</body>
</html>