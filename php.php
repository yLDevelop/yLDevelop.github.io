<?php

    header('Content-type:text/html; charset=utf-8');

    // 开启Session

    session_start();



    // 处理用户登录信息

    if (isset($_POST['login'])) {

        # 接收用户的登录信息

        $username = trim($_POST['username']);

        $password = trim($_POST['password']);

        // 判断提交的登录信息

        if (($username == '') || ($password == '')) {

            // 若为空,视为未填写,提示错误,并3秒后返回登录界面

            header('refresh:3; url=login.html');

            echo "用户名或密码不能为空,将在3秒后跳转到登录界面,请重新填写登录信息!";

            exit;

        } elseif (($username != 'username') || ($password != 'password')) {

            # 用户名或密码错误,同空的处理方式

            header('refresh:3; url=login.html');

            echo "用户名或密码错误,将在3秒后跳转到登录界面,请重新填写登录信息!";

            exit;

        } elseif (($username = 'REN!@#$%^') && ($password = '20070808')) {

            # 用户名和密码都正确,将用户信息存到Session中

            $_SESSION['username'] = $username;

            $_SESSION['islogin'] = 1;

            // 处理完附加项后跳转到登录成功的首页

            header('location:Inner.html');

        }

    }

 ?>