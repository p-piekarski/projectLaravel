<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
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
        <!-- Info boxes -->
        <div class="col-12 col-sm-6 col-md-3">
  </div>
  <div class="info-box mb-3">
    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    <a href="/addHistory" class="nav-link">
    <div class="info-box-content">  
      <span class="info-box-text">Dodaj</span>
      </a>
    </div>
  </div>
<div>
@foreach ($histories as $history)
<li>{{ $history-> id }}. {{$history->data}} {{$history->rodzaj_operacji}}, kwota: {{$history->kwota}}</li>
@endforeach
</div>
<!-- <h1>Tylko daty</h1>

@foreach ($histories as $history)

<li> {{ $history->data}}  </li>

@endforeach

<h1>Tylko rodzaje operacji</h1>

@foreach ($histories as $history)

<li> {{ $history->rodzaj_operacji}}  </li>

@endforeach

<h1>Tylko kwota</h1>
@foreach ($histories as $history)

<li> {{ $history->kwota}}  </li>

@endforeach -->

@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>