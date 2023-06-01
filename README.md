# Real time chat system using PHP, MySQL, PDO and Ajax
## Features: 
    HTML, CSS, PHP, PDO, Ajax, MySQL database
## Description:
    If you are not a registered member, then you have to register first from the “Register” page.
    Enter Username, Email, Password, Confirm Password and click “Register” button to register.
    When you first got registered, you will automatically logged into “Chat” page.
    Otherwise you have to log in from “Login” page to chat with other members.
    Enter Username, Password and click “Login” button to log in.
    On the “Chat” page you can see your username top of the page.
    Type your message in the box and press “Enter” from keyboard.
    Your message will be saved into the database and you can see your message on the top.
## Authentication:
##### Login authentication
    If you leave the Username/Password field empty, it will show ERROR.
    If you enter wrong Username/Password it will show ERROR.
    You can’t access “Chat” page without logged in, even if you enter the URL into your browser, it will
    redirect you to the “Login” page
    If you successfully logged in, it will take you into “Chat” page
    You can’t access login or register page from here, even if you enter the URL into your browser, it will
    redirect you to the “Chat” page but you can logged out from here.
##### Registration Authentication
    If you leave any field blank, it will show ERROR.
    If the Password and Confirm Password don’t match, it will show ERROR.
