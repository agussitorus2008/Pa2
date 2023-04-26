<!-- JAVASCRIPT -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-input-spin.init.js') }}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>

<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('js/method.js')}}"></script>


<!-- apexcharts -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('assets/js/pages/dashboard-analytics.init.js')}}"></script>

<!-- profile init js -->
<script src="{{asset('assets/js/pages/profile.init.js')}}"></script>

<!-- profile-setting init js -->
<script src="{{asset('assets/js/pages/profile-setting.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>

<script>
    $(document).ready(function() {
            var height = $('.navi').data('height');
            var mobile_height = $('.navi').data('mobile-height');
            $('#notification_items').slimScroll({
                height: height,
                mobileHeight: mobile_height,
                color: '#fff',
                alwaysVisible: true,
                railVisible: true,
                railColor: '#fff',
                railOpacity: 1,
                wheelStep: 10,
                allowPageScroll: true,
                disableFadeOut: false
            });
        });
</script>
<script src="{{asset('js/cart.js')}}"></script>



<script src="{{ URL::asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/notif.js') }}"></script>
<script src="{{asset('js/cart.js')}}"></script>

