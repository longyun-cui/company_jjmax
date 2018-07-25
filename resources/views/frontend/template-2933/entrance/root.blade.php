@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')上海捷迈文化传播有限公司@endsection
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

    @include('frontend.template-2933.module.module-service', ['services_type'=>'root','services'=>$services])

    @include('frontend.template-2933.module.module-case', ['cases_type'=>'root','cases'=>$cases])

    @include('frontend.template-2933.module.module-coverage', ['coverages_type'=>'root','coverages'=>$coverages])

    @include('frontend.template-2933.module.module-advantage')

    @include('frontend.template-2933.module.module-link-contact')


@endsection
