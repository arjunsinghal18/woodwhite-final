<?php
if (!function_exists('rend')) {
	function rend(){
		return rand(111,999);
	}
}

if (!function_exists('sanitize')) {
	function sanitize($dirty){
		return htmlentities($dirty,ENT_QUOTES,"UTF-8");
	}
}

if(!function_exists('presentPrice')){
	function presentPrice($price)
	{
    	return money_format('$%i', $price / 100);
	}
}

if(!function_exists('getsession')){
	function getsession($data){
		return session($data);
	}
}

if(!function_exists('reqtoarray')){
	function reqtoarray($req){
		return $req->except(['_token','submit']);
	}
}

if(!function_exists('reqtoarraywithimg')){
	function reqtoarraywithimg($req){
		return $req->except(['_token','submit','post_image']);
	}
}

if(!function_exists('reqtoarraywithimgpass')){
	function reqtoarraywithimgpass($req){
		return $req->except(['_token','submit','author_image','password']);
	}
}

if (!function_exists('flasherror')) {
	function flasherror(){
		if (session('error')) {
			echo session('error');
			session()->forget('error');
		}
	}
}

if (!function_exists('flashsuccess')) {
	function flashsuccess(){
		if (session('success')) {
			echo session('success');
			session()->forget('success');
		}
	}
}

if (!function_exists('display_errors')) {
	function display_errors($errors){
		$display = '<ul class="bg-danger">';
		foreach($errors as $error){
			$display .= '<li class="text-danger">'.$error.'</li>';
		}
		$display .= '</ul>';
		return $display;
	}
}
if (!function_exists('permission_error_redirect')) {
	function  permission_error_redirect($url = 'index.php'){
		$_SESSION['error_flash'] = 'You do not have permission to access that page';
		header('Location: '.$url);
	}
}

// if (!function_exists('has_permission')) {
// 	function has_permission($permission = 'admin'){
// 		global $user_data;
// 		$permissions = $user_data['role'];
// 		if ($permissions == $permission) {
// 			return true;
// 		}return false;
// 	}
// }

if (!function_exists('has_permission')) {
	function has_permission(){
		if (session('permission') == 'admin') {
			return true;
		}else{
			return false;
		}
	}
}

if (!function_exists('pretty_date')) {
	function pretty_date($date){
		return date("M d, Y h:i A",strtotime($date));
	}
}

if (!function_exists('login')) {
	function login($user_id){
		$_SESSION['SBuser'] = $user_id;
		global $db;
		$_SESSION['success_flash'] = 'You are now loged in!';
		header('Location: index.php');
	}
}

if (!function_exists('is_logged_in')) {
	function is_logged_in(){
		if (session('logedin')) {
			return true;
		}
		return false;
	}
}

if (!function_exists('is_user_logged_in')) {
	function is_user_logged_in(){
		if (session('userlogedin')) {
			return true;
		}
		return false;
	}
}

if (!function_exists('login_error_redirect')) {
	function  login_error_redirect($url = 'login.php'){
		$_SESSION['error_flash'] = 'You must be loged in to access that page';
		header('Location: '.$url);
	}
}

?>