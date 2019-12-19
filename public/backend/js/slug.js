$('input#name').keyup(function (event) {
	var title,slug;

		// lấy text từ thẻ input title
		title = $(this).val();
		// đổi chữ hoa thành chữ thường
		slug = title.toLowerCase();
		// đổi ký tự có dấu thành không dấu
		slug = slug.replace(/á|à|ạ|ả|ã|ấ|ầ|ậ|ẩ|ẫ|ắ|ằ|ặ|ẵ|ẳ/gi, 'a');
		slug = slug.replace(/é|è|ẹ|ẻ|ẽ|ế|ề|ệ|ể|ễ/gi, 'e');
		slug = slug.replace(/ò|ó|ọ|ỏ|õ|ố|ồ|ộ|ổ|ỗ|ớ|ờ|ợ|ỡ|ở/gi, 'o');
		slug = slug.replace(/ì|í|ỉ|ị|ĩ/gi, 'i');
		slug = slug.replace(/ù|ú|ụ|ủ|ũ|ừ|ứ|ự|ử|ữ/gi, 'u');
		slug = slug.replace(/ỳ|ý|ỵ|ỷ|ỹ/gi, 'y');
		slug = slug.replace(/đ/gi, 'd');
		// xóa các ký tự đặc biệt
		slug = slug.replace(/\`|\~|\!|\@|\#|\$|\||\%|\^|\&|\*|\/|\(|\)|\-|\+|\=|\?|\,|\.|\:|\;|\'|\"|\<|\>|_/gi, '');
		// đổi khoảng trắng thành gạch ngang
		slug = slug.replace(/ /gi,'-');
		// trường hợp nhiều ký tự trắng
		slug = slug.replace(/\-\-\-\-\-\-/gi,'-');
		slug = slug.replace(/\-\-\-\-\-/gi,'-');
		slug = slug.replace(/\-\-\-\-/gi,'-');
		slug = slug.replace(/\-\-\-/gi,'-');
		slug = slug.replace(/\-\-/gi,'-');
		// xóa các ký tự gạch ngang ở đầu và cuối
		slug = '@' + slug + '@';
		slug = slug.replace(/\@\-|\-\@|\@/gi,'');
		//in ra textbox co id là slug
		$('input#slug').val(slug);
});