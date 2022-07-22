<!-- JavaScript Library -->
<script src="{{ asset('js/front/jquery.min.js') }}"></script>

<!-- Popper JS and Bootstrap JS -->
<script src="{{ asset('js/front/popper.min.js') }}"></script>
<script src="{{ asset('js/front/bootstrap.js') }}"></script>
<script src="{{ asset('js/front/custom.js') }}"></script>
<!-- <script src="{{ asset('js/custom.js') }}"></script> -->

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Notify js code -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

<script type="text/javascript">
	@if(Session::has('success'))
        $.notify("{{ Session::get('success') }}", "success");
        @php
            Session::forget('success');
        @endphp
    @endif

    @if(Session::has('info'))
        $.notify("{{ Session::get('info') }}", "info");
        @php
            Session::forget('info');
        @endphp
    @endif

    @if(Session::has('error'))
        $.notify("{{ Session::get('error') }}", "error");
        @php
            Session::forget('error');
        @endphp
    @endif

    @if(Session::has('warning'))
        $.notify("{{ Session::get('warning') }}", "warning");
        @php
            Session::forget('warning');
        @endphp
    @endif

</script>