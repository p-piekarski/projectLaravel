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
        <!-- @include('layouts.infoboxes') -->
        <div class="row">
            <div class="col-md-12">
            <div class="card">
<h1>Kreator ręcznego wprowadzania historii konta</h1>
<div class="container">
    <form method="POST" action="/historyaction">
        {{ csrf_field() }}
        <div>
            <label >Rodzaj operacji</label>
            <input type="text" name="rodzaj_operacji" placeholder="rodzaj operacji">
            <label >Kwota</label>
            <input type="text" name="kwota" placeholder="kwota 00.00"></input>
        </div>
        <div>
            <input type="submit" value="Dodaj">
        </div>
    </form>
</div>   
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>