
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> Juche 108 ( 2019 ) &copy; {{ config('app.name', 'Laravel') }}. developed by FIREWOLF !</div>
</div>

<!--end-Footer-part-->

<script type="text/javascript">
	var site_url = "{{ url('')}}";
	var admin_img_loc = "{{ url('assets/admin')}}";
</script>
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script> 
<script src="{{asset('assets/admin/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script> 

@yield('script')  

</body>
</html>
