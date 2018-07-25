@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')联系我们-上海捷迈文化传播有限公司@endsection
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

    @include('frontend.template-2933.module.module-contact')

@endsection



{{--custom-script--}}
@section('custom-script')

    <script>
        $(function() {
            // 添加or编辑
            $("#contact-submit").on('click', function() {

                var form = $("#form-contact");
                var name = $("#contact-name");
                var mobile = $("#contact-mobile");
                var email = $("#contact-email");
                var content = $("#contact-content");
                console.log(form);

                var name_val = name.val();
                var mobile_val = mobile.val();

                if(name == "")
                {
                    layer.msg("名字不能为空");
                    name.focus();
                    return false;
                }

                var filter=/^1[3|4|5|7|8][0-9]\d{8}$/;
                if(!filter.test(mobile.val()))
                {
                    layer.msg("请输入正确的手机号!");
                    mobile.focus();
                    mobile.value="";
                    return false;
                }

                var options = {
                    url: "{{url('/message/contact')}}",
                    type: "post",
                    dataType: "json",
                    // target: "#div2",
                    success: function (data) {
                        if(!data.success) layer.msg(data.msg);
                        else
                        {
                            layer.msg(data.msg);
                            name.val('');
                            mobile.val('');
                            email.val('');
                            content.val('');
                            return true;
                        }
                    }
                };
                form.ajaxSubmit(options);
            });
        });
    </script>

@endsection