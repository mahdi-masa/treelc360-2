@extends('layouts.main', ['footer'=> false])

@section('tab_title')
    نهضت درخت | کتابچه‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
@endsection

@section('content')
    <iframe src="https://forms-front.iran.liara.run/forms/profile" style="height:100vh" title="Iframe Example"></iframe>
@endsection


