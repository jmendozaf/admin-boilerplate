@extends('layouts.backend.master-simple')

@section('header')
    @include('layouts.backend.partials.header')
@endsection

@section('content')
    <div class="app-body" style="margin: 0px; padding: 0px;">
        <main class="main" style="padding: 0px; margin: 0px;">
            <div class="container-fluid" id="app" :class="{'loading': loading}" style="padding: 0px; margin: 0px;">
                @yield('body')
            </div>
        </main>
    </div>
@endsection

@section('bottom-scripts')
    @parent
@endsection
