@extends('layouts.frontend.master-simple')
@section('header')
    @include('layouts.frontend.partials.header')
@endsection
@section('content')
    <div class="app-body" style="margin: 0px; padding: 0px;">

            <div class="container-fluid" id="app" style="margin: 0px; padding: 0px;">
                <div class="modals">
                    <v-dialog/>
                </div>
                <div>
                    <notifications position="bottom right" :duration="2000" />
                </div>
                @yield('body')
            </div>

    </div>
@endsection
@section('bottom-scripts')
    @parent
@endsection
