@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')案例分享-上海捷迈文化传播有限公司@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection



{{--header--}}
@section('component-header')
    @include('frontend.template-2933.component.header')
@endsection


{{--footer--}}
@section('component-footer')
    @include('frontend.template-2933.component.footer')
@endsection




{{--custom-content--}}
@section('custom-content')

    @include('frontend.template-2933.component.banner')

    @include('frontend.template-2933.module.module-case', ['cases_type'=>'list','cases'=>$cases])

@endsection
