<!DOCTYPE html5>
<html>
    <head>
        <title>Site</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="./sign_up_style.css" />
		<script>
			//비밀번호 확인 일치 검사
			function Same_check() {
				
				var pw = document.getElementById('pw').value
				var pw1 = document.getElementById('pw1').value

				//비밀번호 길이는 4자 이상, 16자 미만.
				if (pw.length < 4 || pw.length > 16) {
					window.alert("비밀번호는 4자 이상, 16자 이하만 가능합니다.");
					document.getElementById('pw').value = '';
				}

				//비밀번호 입력란이 둘 다 채워졌을 때, 비밀번호 일치 여부 판단
				if (document.getElementById('pw').value != '' && document.getElementById('pw1').value != '') {
					if (document.getElementById('pw').value == document.getElementById('pw1').value) {
						document.getElementById('same').innerHTML = '비밀번호 일치';
						document.getElementById('same').style.color = 'blue';
					}
					else {
						document.getElementById('same').innerHTML = '비밀번호 불일치';
						document.getElementById('same').style.color = 'red';
					}
				}
			}
		</script>
    </head>
	
    <body>
		<form method ="post" action = "./new_member.php">
			<div>
				<ul>
					<li><span >이름 </span><br><input type = "text" placeholder = "아이디를 입력하세요" class = 'box' name="name" id='name'/></li>
					<li><span >이메일</span><br><input type = "text" placeholder = "이메일을 입력하세요." class = 'box' name="email" id='mail'/></li>
					<li><span >아이디</span><br><input type = "text" class ='box' name="id" id="id" placeholder="이메일을 입력하세요." /><br></li>	  
					<li><span >비밀번호</span><br><input type = "password" placeholder = "비밀번호를 입력하세요" class = 'box' name="pw" id='pw' onchange="Same_check()"/>
						<br></li>
					<li><span >비밀번호 확인 </span><br><input type = "password" placeholder = "다시 비밀번호를 입력하세요" class = 'box' name="pw1" id='pw1' onchange="Same_check()"/>
						<br><span class = 'necessary' >필수 정보입니다.</span></li> 
					<li><input class='button'type="submit" value="가입하기"></li>
				</ul>
			</div>
		</form>
    </body>
</html>