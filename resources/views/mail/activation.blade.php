<!DOCTYPE html>
<html>
<head>
	<title>Activation Email - Allaravel.com</title>
</head>
<body>
	<p>
		Chào mừng {{ $name }} đã đăng ký thành viên tại Allaravel.com. Bạn hãy click vào đường link sau đây để hoàn tất việc đăng ký.
		</br>
		Nhập mã kích hoạt: {{route('user/activation/{$link}')}}
	</p>
</body>
</html>