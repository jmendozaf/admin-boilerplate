@extends('layouts.frontend.default-simple')

@push('level-style')
    <style>
        .container {
            height: 100%;
            position: relative;
        }
        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 100%;
            text-align: center;
        }
    </style>
@endpush

@section('title', 'Dashboard')
@section('body')
    <div class="container">
        <div class="vertical-center">
            <div style="width: 100%; font-size: xx-large">[insert your ✨ here!]</div>
            <div style="width: 100%; font-size: small"><i>Click here</i></div>
        </div>
    </div>
@endsection

@push('level-script')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.vertical-center').css('cursor', 'pointer');
            $(".vertical-center").click(function() {
                alert( "Change this template at root/resources/views/frontend/home.blade.php" );
            });
        });
    </script>
@endpush


