//
// This is The Scripts used for Simply Theme
// 



function main() {
	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + '.' + '$2');
		}
		return x1 + x2;
	}

	(function () {
		'use strict'
		//Script
		//-----------------------------------


		jQuery(document).ready(function($){

			$('.checkAll').on('click', function () {
				console.log('aaaaaa')
				$(this).closest('table').find('tbody :checkbox')
				.prop('checked', this.checked)
				.closest('tr').toggleClass('selected', this.checked);
			});

			$('tbody :checkbox').on('click', function () {
			    $(this).closest('tr').toggleClass('selected', this.checked); //Classe de seleção na row

			    $(this).closest('table').find('.checkAll').prop('checked', ($(this).closest('table').find('tbody :checkbox:checked').length == $(this).closest('table').find('tbody :checkbox').length)); //Tira / coloca a seleção no .checkAll
			});


		});

		// $(document).on('click', '.showCusOwe', function(){
		// 	var id= $(this).attr("id");
		// 	$('.tb-tk-detail tbody').html("");
		// 	// $('.cus_name').html("");
		// 	$.ajax({
		// 		url: './viewCustomer',
		// 		method: 'get',
		// 		data: {id: id},
		// 		dataType: 'json',
		// 		success:function(data){
		// 			$.each(data,function(i,item){
		// 				$('.tb-tk-detail tbody').append(`
		// 					<tr>
		// 					<td class="center">`+item.ID_DH+`</td>
		// 					<td class="center">2018/12/31 15:15:15
		// 					</td>
		// 					<td class="center"></td>
		// 					<td class="text-right">32.000.000 đ</td>
		// 					<td class="text-right">2.990.000 đ</td>
		// 					</tr>`
		// 				)

		// 			});

		// 			$('#modalFormShowCus .cus_name').text(data.HoTen);
		// 		}

		// 	})
		// });

		$(document).on('click', '.showCusOwe', function(){
			var id= $(this).attr("id");

			// alert(id);
			// $('#modalFormShowCus').html("");
			// $('.cus_name').html("");
			$.ajax({
				url: './viewCustomer',
				method: 'get',
				data: {id: id},
				success:function(data){
					$('#modalFormShowCus').fadeIn();
					$('#modalFormShowCus').html(data);
				}

			})
		});

		$(document).on('click', '.HienThiTheoNhanVienBanHang', function(){
			var id= $(this).attr("id");

			// alert(id);
			$('#modalFormTheoNhanVien').html("");
			// $('.cus_name').html("");
			$.ajax({
				url: './xemThongKeTheoNhanVienBanHang',
				method: 'get',
				data: {id: id},
				success:function(data){
					$('#modalFormTheoNhanVien').fadeIn();
					$('#modalFormTheoNhanVien').html(data);
				}

			})
		});

		$('.thongke.xuatnhapton .refresh').click(function(e) {
			e.preventDefault();
			var dateStart=$('.thongke.xuatnhapton .datestart' ).val();
			var dateEnd=$('.thongke.xuatnhapton .dateend' ).val();
			if(dateStart=='' && dateEnd==''){
				alert('Bạn chưa nhập thời gian');
			}
			else{
				var _token = $('input[name="_token"]').val();
				$.ajax({
					
					url:'./thong-ke-xuat-nhap-ton',
					method: "POST",
					data: {
						dateStart : dateStart, 
						dateEnd : dateEnd, 
						_token : _token
					},
					success:function(res){
						if(res.success){
							$('.xuatnhapton tbody').fadeIn();
							$('.xuatnhapton tbody').html(res.data);
							// alert(res.ngay);
						}
						// else{
						// 	alert(res.message);
						// }
						
						// $('.xuatnhapton').fadeIn();
						// $('.xuatnhapton').html(data);
					},
					error: function(error){
						console.log(error);
					}
				})
			}
		});

		$('.xem_phieunhap').click(function() {
			var id= $(this).attr('id');
			// alert(id);
			$.ajax({
				url: '/MyLaravel/public/admin/phieu-nhap-hang',
				method: 'get',
				data: {id: id},
				success:function(res){
					if(res.success){
						$('.inf.phieunhap').fadeIn();
						$('.inf.phieunhap').html(res.data);
					}
				},
				error: function(error){
					console.log(error);
				}
			})
		});
		
		// thanh toán
		$('.thanhtoan .ip.price').keyup(function(){
			var price=$( this ).attr( 'data-beforePrice' );
			var after_price=-$(this).val()-price;
			$('.afterPrice').text(addCommas(-after_price));
		});

		// thiết lập giá bán
		$('.new_price.price').keyup(function(){
			var oldPrice = $('#oldPrice').val();
			var updownPrice =$('#updownPrice').val();
			var price = $(this).val();
			if(updownPrice == '0'){
				$('#afterPrice').text(addCommas(oldPrice-price));
			}
			else{
				var after_price = -oldPrice - price;
				$('#afterPrice').text(addCommas(-after_price));
			}
		});

		// thiết lập giá khuyến mãi
		$('.new_price.sale').keyup(function(){
			var oldSale = $('#oldSale').val();
			var updownSale =$('#updownSale').val();
			var price = $(this).val();
			if(updownSale == '0'){
				$('#afterSale').text(addCommas(oldSale-price));
			}
			else{
				var after_sale = -oldSale - price;
				$('#afterSale').text(addCommas(-after_sale));
			}
		});
	}());

}
main();