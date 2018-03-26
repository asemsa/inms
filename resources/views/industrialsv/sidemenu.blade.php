@section('sidemenu')
<!--sidebar-->
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{ url('/img/attachments/profiles/'.Auth::user()->image) }}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Industrial SV</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="{{ url('/industrialsv/dashboard') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{ url('/industrialsv/logbook' )}}"><em class="fa fa-book">&nbsp;</em> Logbooks</a></li>
			<li><a href="{{ url('/industrialsv/evaluation') }}"><em class="fa fa-check-square-o">&nbsp;</em> Evaluations</a></li>
			<li><a href="{{ url('/industrialsv/message') }}"><em class="fa fa-envelope">&nbsp;</em> Messages</a></li>
		</ul>
	</div><!--/.sidebar-->
@endsection