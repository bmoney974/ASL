<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maxium-scale=1.0 minium-scale=1.0">
<title>Life Trac</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href='<?echo 'localhost/life_trac/application/assets/css/style.css'?>' />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<style>
    body {
        background:gray;
        margin: 0px;
        padding: 0px 50px;
        font: 14px "Lucida Grande", Helvetica, Arial, sans-serif;
    }

    a {
        color: #00B7FF;
    }

    .page-header{
        background:#000000;
    }

    ul .nav_bar{

    }

    .nav ul li {

        display:inline-block;
    }

    .nav ul li a {
        padding:10px;
        font-size: 18px;

    }

    .nav ul {
        margin-top:25px;
    }
    .container {
        background: #FFD9FF;
        margin-top:-20px;
        padding:40px;
        width:100%;
    }

    footer{
        background: #333333;
        text-align: center;
        color:white;
        padding:50px;
    }

    .place_holder {
        border:1px solid black;
        width:200px;
        height:200px;
        background:gray;
        color:white;
        text-align: center;
    }

    .register_side a {
        display: block;
        margin:0px auto;
        text-align: center;
        font-size: 20px;
        color:white;
        background: red;
        padding:30px;
        border-radius: 15px;

    }

    .register_side h3 {
        margin-top:-20px;
    }
    .features {
        margin-top: 60px;
    }

    hr.style-four {
        height: 12px;
        border: 0;
        box-shadow: inset 0 12px 12px -12px rgba(0,0,0,0.5);
        margin-top: 60px;
    }
    .register_side h4 {
        margin-top: 15px;
        float:right;
        margin-right:225px;

    }

    .reg_modal {
        padding:30px;
        background: #BAC9CF;

    }

    form li {
        list-style:none;
    }

    .event ul li {
        display:inline-block;
        padding:30px;
    }
    .events ul li {
        display:inline-block;
        padding:30px;
    }

    div .events {
        border:1px solid #000000;
        padding:20px;
        background:#ffffff;

    }

    .input ul li {
        display: inline-block;
        padding:15px;
    }

    .input form[submit]{
        margin-top:-10px;
    }
    .login_form{
        width: 300px;
        background:#fofofo;
        border: 1px solid white;
        margin:100px auto;
        padding:1em;
        border-radius: 3px;
    }

    h1,h2,h3,h4,h5 {

    }
  input[type=text], input[type=password]{
      margin: 0 0 1em 0;
      width:200px;
      border:5px;
      border-radius: 1px;
      padding:1em;

  }

   input[type=submit], form a{
       border:none;
       margin-right:1em;
       padding:6px;
       text-decoration: none;
       font-size:12px;
       border-radius: 4px;
       background: #348075;
       box-shadow: 0 1px 0 white;
   }

    input[type=submit]:hover {
        background: #287368;
        cursor: pointer;

    }
    .error{
        color:393939;
        font-size: 15px;
    }

    fieldset{
        width: 300px;
        margin:auto;
        margin-bottom: 2em;
        display: block;
        border:1px solid white;
    }

    .sort {
        margin-left: 50px;
    }

    .login_btn {



    }

    .btn_color{
        background:white;
        padding:5px;

    }

    .event_edit{
        display: block;
        width:400px;
        border:1px solid black;
        background: darkgray;
        margin:0px auto;
        margin-bottom: 60px;

    }

    .add_btn{
        display: block;
        background: cornflowerblue;
        padding:15px;
        color:#ffffff;
        margin-bottom: 30px;
        margin-left: 40px;

    }
</style>

    <script>
        $(function() {
            $( ".sortable" ).sortable({
                placeholder: "ui-state-highlight",
                tolerance: "touch"

            });
        //   $( ".sortable" ).disableSelection();
        });

    $(document).ready(function(){
       $(".event_edit").hide();
       $(".click").click(function(){
           $(".event_edit").toggle(500);
       });
    });

    </script>
</head>
<body>