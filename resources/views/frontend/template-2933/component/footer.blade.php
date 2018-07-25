{{--<!-- START: footer -->--}}
<footer role="contentinfo" class="probootstrap-footer">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="probootstrap-footer-widget">
                        <h3><b>企业简介</b></h3>
                        <p>作为业内专业的活动策划运作商，我们拥有一流的策划和专业活动执行团队。独具匠心的创意，多元化的活动道具，以及丰富的活动策划经验为您提供全程优质的一站式服务。 多年的努力拼搏，在各大（小）活动包括世界500强企业，国际社区，国际学校等各类活动中，充分展现了公司的策划及执行能力，逐步提升公司在市场上的美誉度。活动涵盖公司家庭日，团队拓展，各类庆典，大型嘉年华，高端社区活动，国际学校活动，运动会，生日派对等等。我们的口号：力求打造中国活动策划一站式服务的第一品牌。</p>
                        <p><a href="javascript:void(0);" class="link-with-icon _none">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                    <div class="probootstrap-footer-widget _none">
                        <h3>联系我们</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href=""><i class="icon-twitter"></i></a></li>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3><b>联系我们</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-location-arrow"></i></b> &nbsp;&nbsp;
                                    <span>{{ config('company.info.address') }}</span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-phone"></i></b> &nbsp;&nbsp;
                                    <span><a href="tel:{{ config('company.info.telephone') }}" style="display:inline-block;">{{ config('company.info.telephone') }}</a></span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-envelope"></i></b> &nbsp;&nbsp;
                                    <span><a href="mailto:{{ config('company.info.email') }}" style="display:inline-block;">{{ config('company.info.email') }}</a></span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-weixin"></i></b> &nbsp;&nbsp;
                                    <span>{{ config('company.info.wechat_id') }}</span>
                                </div>
                            </li>
                            <li class="mb10 _none">
                                <div class="text">
                                    <b><i class="fa fa-weixin"></i></b> &nbsp;&nbsp;
                                    <span><img src="{{ url(config('company.info.wechat_qrcode')) }}" alt="Wechat_Qrcode" style="height:120px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="probootstrap-footer-widget">
                        <h3><b>微信公众号</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-qrcode" style="visibility:hidden-;"></i></b> &nbsp;&nbsp;
                                    <span><img src="{{ url(config('company.info.wechat_qrcode')) }}" alt="Wechat_Qrcode" style="height:120px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row mt20 mb20">
                <div class="col-md-12 text-center">
                    <div>
                        <small> Copyright&copy;2018. {{ config('company.info.english_name') }} All Rights Reserved.</small><br>
                        <small>技术支持 &copy; <a target="_blank" href="http://softorg.cn/">上海如哉网络科技</a> </small><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<a href="javascript:void(0);" class="js-backtotop _none" style="position:fixed; right:32px; bottom:32px;"><i class="fa fa-chevron-up"></i></a>
{{--<!-- END: footer -->--}}