(function(){
	$('#loginBtn').on({
		click: loginUser
	})
	
	function loginUser(){
		
		var logInfo = document.getElementsByClassName('login-info');
		var logInfoArr = [];
		
				for(var x=0; x<logInfo.length;x++){
					logInfoArr.push(logInfo[x].value);
				}
				console.log(logInfoArr);
				
		$.post('navbar-php.php', {loginInfo: logInfoArr})
	}
})();