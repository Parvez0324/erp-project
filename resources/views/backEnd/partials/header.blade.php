<!DOCTYPE html>
@php
    Illuminate\Support\Facades\Cache::remember('language', 3600 , function() {
        return Modules\Localization\Entities\Language::where('code', session()->get('locale', Config::get('app.locale')))->first();
    });
@endphp
<html @if(Illuminate\Support\Facades\Cache::get('language')->rtl == 1) dir="rtl" class="rtl" @endif >

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="{{ asset($setting->favicon) }}"/>
    <meta name="url" content="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{$setting->site_title}} </title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    @include('backEnd.partials.style')

</head>
@php
    if (empty($color_theme)) {
     $css = "background: url('".asset('/public/backEnd/img/body-bg.jpg')."')  no-repeat center; background-size: cover; ";
 } else {
     if (!empty($color_theme->background_type == 'image')) {
         $css = "background: url('" . url($color_theme->background_image) . "')  no-repeat center; background-size: cover; background-attachment: fixed; background-position: top; ";
     } else {
         $css = "background:" . $color_theme->background_color;
     }
 }

@endphp

<body class="admin"  style="{!! $css !!} ">
<div class="preloader">
    <h3 data-text="{{ $setting->preloader }}..">{{ $setting->preloader }}..</h3>
</div>

<div class="main-wrapper" style=" min-height: 600px">
    <!-- Sidebar  -->.
    @php
        // 1. Define the default path securely
$defaultLogo = 'uploads/settings/logo.png';

// 2. Check if the dynamic logo exists locally
if (!empty($setting->logo) && file_exists(public_path($setting->logo))) {
    $tt = file_get_contents(public_path($setting->logo));

// 3. If not, check if the default logo exists locally
} elseif (file_exists(public_path($defaultLogo))) {
    $tt = file_get_contents(public_path($defaultLogo));

// 4. Fallback: If NEITHER exists, prevent the crash by setting an empty string
} else {
    $tt = ''; 
}
    @endphp
    <input type="text" hidden value="{{ base64_encode($tt) }}" id="logo_img">
    @if (!request()->is('pos/pos-order-products'))
        @include('backEnd.partials.sidebar')
    @endif
    <div id="main-content" class="{{Request::is('pos/pos-order-products') ? 'mini_main_content' : ''}}">
        <!-- Page Content  -->
        <!-- application baseUrlForJS  -->
        <input name="app_base_url" id="app_base_url" type="hidden" value="{{ url('/') }}">

@include('backEnd.partials.menu')
