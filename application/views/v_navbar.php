<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        .btn_FF{
            color: white;
            background-color: orangered;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            padding: 5px 20px;
            border-radius: 4px;
        }
        body{
            background: #2b3237;
        }
        .tabBar{
            display: table;
            border-radius: 7px;
            table-layout: fixed;
            box-sizing: border-box;
            background-color:gainsboro;
            width: 100%;
            border: 3px solid gainsboro;
        }
        .friend3{
            padding-bottom: 15px;
        }
        .icon{
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            border-radius: 5px;
            padding: 4px 3px 3px;
            color: darkgray;
        }
        .sfk{
            outline: 0;
            font-size: 14px;
            padding: 10px;
            width: 100%;
            border: 1px solid #e6e6f0;
            line-height: 32px;
        }
        .searchbar{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .teman_kosong{
            padding: 30px 15px;
            text-align: center;
        }
        p{
            display: block;
            text-align: center;
        }
        .btn_FF:hover{
            color: white;
            background-color: rgb(160, 42, 0);
        }
        .icon.active{
            color: black;
            background-color: white;
        }
        a.icon:hover{
            text-decoration: none;
            color: darkgrey;
        }
        .main-column{
            float: left;
            background-color: white;
            width: 500px;
            border-radius: 7px;
            padding: 20px;
        }
        .side-column{
            float: right;
            order: 2;
            width: 300px;
        }
        footer .siteLinks a{
            display: block;
            width: 140px;
            float: left;
            line-height: 28px;
            text-align: left;
            color: rgba(255,255,255,0.5);
        }
        footer .siteLink{
            line-height: 20px;
            padding: 15px 10px 0;
            text-align: center;
            overflow: hidden;
        }
        .social-links a{
            color: #fff;
            border-radius: 50%;
            display: inline-block;
            font-size: 15px;
            height: 30px;
            line-height: 30px;
            margin: 12px 8px;
            width: 30px;
            vertical-align: middle;
            background: rgba(0,0,0,0.3);
            text-align: center;
        }
        .languageBox{
            border-bottom: 1px solid rgba(255,255,255,0.15);
            padding: 0 10px;
            color: rgba(255,255,255,0.5);
        }
        .copyright{
            padding: 10px;
            color: #b2b2bb;
        }
        .main-content{
            padding-top: 15px;  
            display: block;
            max-width: 820px;
            margin: 0 auto;
            overflow: hidden;
        }    

        .social a{
            color: #4A4A50;
            height: auto;
            line-height: normal;
            min-height: 34px;
            padding: 15px 15px 15px 69px;
            position: relative;
            white-space: normal;
            font-weight: bold;
            display: block;
            border-bottom: 1px solid #d5d5dd;
        }
        .social span{
            font-size: 12px;
            font-weight: normal;
            color: #b2b2bb;
        }

        .main-content{
            padding-top: 65px;
        }
        .topMenu{
            background-color: #2b3237;
            position: fixed;
            width: 100%;
        }
        .topBar{
            max-width: 820px;
            margin: auto;
        }
        .topBar-left{
            width: 345px;
            display: inline-block;
            font-size: 22px;
            vertical-align: top;
            text-align: left;
            height: 49px;
            line-height: 49px;
        }
        .logo{
            width: 100px;
            display: block;
            margin-right: auto;
            padding: 15px;
        }
        .menuBar{
            float: right;
            position: relative;
            height: 49px;
        }
        .menuBar a{
            width: auto;
            height: inherit;
            color: #cdcdd9;
            font-size: 18px !important;
            line-height: 49px;
            overflow: hidden;
            padding: 0 20px;
            z-index: 1;
        }
        @media (max-width: 763px) {
            .menuBar a {
                float: left;
                font-size: 24px;
                height: 32px;
                line-height: 35px;
                padding: 5px 0;
                position: relative;
                text-align: center;
                width: 104px;
            }
        }

    </style>

</head>
<body>
<?php foreach ($user as $u) { ?>
    <div class="topMenu">
        <section class="topBar" >
            <a class="topBar-left">
                <img class="logo" src="<?= base_url();?>image/ASKfm-logo.png">
            </a>
            <nav class="menuBar">
                <a title="Feed" class="icon-tab-home" href="#">H</a>
                <a title="Questions" class="icon-question-fill" href="<?= base_url(); ?>c_question">Q</a>
                <a title="Profile" class="icon-tab-profile" href="<?= base_url(); ?>c_account/index/1" >P</a>
                <a title="Friends" class="icon-tab-friends active" href="<?= base_url(); ?>c_friends/friends/1" >F</a>
                <a title="Notifications" class="icon-tab-notifications" href="#">
                    <span class="notificationCounter" data-poll-url="#">N<?=$u['id']?></span>
                </a>
                <a title="Account" class="icon-settings icon-caret-down" href="<?= base_url(); ?>c_setting/index/1" >A</a>
                <nav id="settings-popover-menu" style="" class="popover popover-menu coins-menu open">
                    <a href="#">Settings</a>
                    <a data-action="ButtonPostOnce" data-url="/logout" href="#">Log Out</a>
                </nav>
                
            </nav>
        </section>
    </div>
<?php } ?>
    