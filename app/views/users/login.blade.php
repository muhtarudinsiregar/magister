@extends('admin.master_login')
@section('content')
<div class="container" style="margin-top:70px;">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="panel panel-success">
			<div class="panel-heading" style="background-color:#2994B2;">
				<p style="color:white;">Log In</p>
			</div>
			<div class="panel-body">
				<form id="loginform" class="form-horizontal" role="form" method="POST"action="{{url('login')}}">
					<?php if ($errors->has()): ?>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php foreach ($errors->all() as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach ?>
						</div>
					<?php endif ?>
					
					<br />
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="login-username" type="text" class="form-control" name="username" value="{{Input::old('username')}}" placeholder="username or email">                                        
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
					</div>

					<div style="margin-top:10px" class="form-group">
						<!-- Button -->

						<div class="col-sm-12 controls">
							<button type="submit" class="btn btn-success">Log In</button>	
						</div>
					</div>   
				</form>
			</div>
		</div>
	</div>
</div>	
@stop