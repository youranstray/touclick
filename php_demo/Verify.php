<?php 

$publicKey = "2b28d3b5-7753-4bc4-999c-fa7828d707de";
$privateKey = "9e35b1a2-876a-492a-8788-6b23a2d40aef";
$check_key = $_POST['check_key'];
$check_address = $_POST['check_address'];

require_once 'touclick.class.php';

$touclick = new touclick();
$res = $touclick->touclickCheck($publicKey, $privateKey, $check_key, $check_address);

if($res){
	//一次验证正确,允许提交请求
	echo "That's ok!";
}else{
	//攻击行为，一次验证失败、或没有进行一次验证的情况下仍然二次验证
	echo "ERROR";
}
?>