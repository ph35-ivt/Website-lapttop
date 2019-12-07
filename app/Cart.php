<?php

namespace App;
use App\Cart;
use Session;
class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}
	public function add($item, $id){
		$giohang = ['qty'=>0, 'price' => $item->price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		$giohang['price'] = $item->price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty++;
		$this->totalPrice +=$item->price;
	}
   // thêm hàng có số lượng
	public function ThemCoSoLuong($item, $id, $qty){
		$giohang = ['qty'=>0, 'price' => $item->price, 'item' => $item]; 
		if($this->items){ 
			if(array_key_exists($id, $this->items)){ 
				$giohang = $this->items[$id]; 
			} 
		} 
		$sanphammua = Session::get('cart');
		$dem = 0;
		if($sanphammua != null){
			foreach($sanphammua->items as $idsp =>$value){
				if($idsp == $id){
					$dem++;
					break;
				}
			}
			if($dem != 0){
				$giohang['qty'] = $sanphammua->items[$id]['qty'] + $qty;
				$dem = 0;
			}
			else{
				$giohang['qty'] = $qty;
			}
		}
		else{
			$giohang['qty'] = $qty;
		}
		$giohang['price'] = $item->price * $giohang['qty']; 
		$this->items[$id] = $giohang; 
		$this->totalQty += $qty; 
		$this->totalPrice += $giohang['price']; 
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
