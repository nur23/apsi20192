<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/login.css"/>
</head>
<body>
	 <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
            <form action="{{ route('medrep.login') }}" method="POST">
                {{ csrf_field() }}
            <h3 class="text-center title-login">Medical Representative Login</h3>

                <div class="form-group">
                    <input type="text" class="form-control" name="id" placeholder="ID">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-orange" value="LOGIN" />
                
            </form>
        </div>
    </div>

</body>
</html>