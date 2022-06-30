<script>
    function check_input(){
        if(!document.register.id.value){
            alert("아이디 입력");
            dicument.register.id.focus();
            return;
        }
        if(!document.register.pass.value){
            alert("비밀번호 입력");
            dicument.register.pass.focus();
            return;
        }
        if(!document.register.name.value){
            alert("이름 입력");
            dicument.register.name.focus();
            return;
        }
    }

    function check_id(){
        window.open("member_check_id.php?id="+ document.member_form.id.value,"IDcheck","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
<html>
    <body>
        <div id="join_box">
            <form name = "member_form" method="post" action="member_insert.php">
                
                <h2> 회원가입</h2>
                <hr>

                <div class = "col1"> 아이디</div>
                <div class = "col2">
                    <input type="text" name=id>
                </div>
                <button type="button" onclick="check_id()">아이디 확인</button>
                
                <div class = "col1"> 비밀번호</div>
                <div class = "col2">
                    <input type="text" name="pass">
                </div>

                <div class = "col1"> 이름</div>
                <div class = "col2">
                    <input type="text" name="name">
                </div>

                <div class="buttons">
                <button onclick="check_id()">가입</button>
            </form>
        </div>
</body>
</html>