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
    <div class="topMenu">
        <section class="topBar" >
            <a class="topBar-left">
                <img class="logo" src="assets/img/logo.png">
            </a>
            <nav class="menuBar">
                <a title="Feed" class="icon-tab-home" href="#">H</a>
                <a title="Questions" class="icon-question-fill" href="<?= base_url(); ?>c_question">Q</a>
                <a title="Profile" class="icon-tab-profile" href="<?= base_url(); ?>c_account/index/1">P</a>
                <a title="Friends" class="icon-tab-friends active" href="<?= base_url(); ?>c_friends/friends/1">F</a>
                <a title="Notifications" class="icon-tab-notifications" href="#">
                    <span class="notificationCounter" data-poll-url="#">N</span>
                </a>
                <a title="Account" class="icon-settings icon-caret-down" data-action="MenuToggle" data-target="#settings-popover-menu" href="<?= base_url(); ?>c_setting/index/1">A</a>
                <nav id="settings-popover-menu" style="" class="popover popover-menu coins-menu open">
                    <a href="#">Settings</a>
                    <a data-action="ButtonPostOnce" data-url="/logout" href="#">Log Out</a>
                </nav>
                
            </nav>
        </section>
    </div>
    