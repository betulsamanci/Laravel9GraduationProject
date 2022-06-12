@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')


    <!DOCTYPE HTML>
<html>

<body class="is-preload">
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>about</h2>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Wrapper -->
<div id="wrapper">

    <div id="main">

    </div>

    {!! $setting->about !!}

</div>

<!-- Scripts -->
<script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets')}}/assets/js/main.js"></script>
</body>
</html>
@endsection
