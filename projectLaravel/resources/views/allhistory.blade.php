<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<head>
<style>
.page-item{
    
}
</style>
</head>
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
        <div class="row">
            <div class="col-md-12">
            <div class="card">
<h1>Kreator ręcznego wprowadzania historii konta</h1>

<div class="container">
@foreach($data as $item)
<ul>
<li>{{$item->transaction}}_______{{$item->localization}}_______{{$item->cuote}}_______{{$item->created_at}}</li>
</ul>
@endforeach
<div>
{{$data->links()}}
</div>
</div>
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>
