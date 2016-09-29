
        /* 
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

document.logForm.btnLogin.onclick = function () {
    var uname = document.logForm.uname.value;
    var password = document.logForm.password.value;
    //var code = document.logForm.code.value;
    var module = document.getElementById("module").value;
    var flag = true;
    var message = new Array();
    if (uname.match(/^\s*$/) != null) {
            message['uname'] = " * 账号未填写";
            flag = false;
    } else {
            message['uname'] = "";
    }
    if (password.length < 6 || password.length > 15) {
            message['password'] = " * 密码长度应为6-15位";
            flag = false;
    } else {
            message['password']  ="";
    }

    for (var property in message) {
            var span = document.logForm[property].nextSibling || document.createElement("span");
            span.setAttribute("class", "error");
            span.innerHTML = message[property];
            document.logForm[property].parentNode.appendChild(span);
    }

    if (!flag)		return;

    /**
     * 后台认证 使用AJAX
     */
   $.ajax({
            type:"post",
            url:module + "/Login/login/rand_" + Math.random() + ".html", //index.php/Index/User/login/rand/0.2357.html
            data:"uname=" + encodeURI(uname) + "&password=" + encodeURI(password),
            dataType: "json",
            success: function (result) {
                    alert(result.message);
                    if (result.status === true) {
                            location.href = module + "/User/index.html";
                    }
            }
    });
};