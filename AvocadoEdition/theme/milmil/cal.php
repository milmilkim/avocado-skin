<?php
include_once ('./_common.php');
include_once (G5_PATH . '/head.sub.php');
include_once (G5_LIB_PATH . '/latest.lib.php');

?>

<head>
    <style>
        /* 캘린더 */
        .cal-nav h2 {
            font-size: 12px;
            padding-bottom: 10px;
            letter-spacing: 3px;
        }

        .sched-list .theme-list th {
            height: 30px;
            padding: 0;
            font-size: 11px;
            font-weight: normal;
            border-top: 1px solid #ffffff33;
            border-bottom: 1px solid #ffffff33;
            background: none;
        }

        /* 요일 표시 칸 */
        .sched-list .theme-list td {
            text-align: center;
            padding: 0;
            line-height: 18px;
            font-size: 11px;
            height: 40px;
            border-bottom: 0 none;
            background: none;
        }

        /* 날짜 표시 칸 */
        .sched-list .theme-list td i {
            position: relative;
            display: block;
            margin-bottom: 3px;
            font-style: normal;
        }

        /* 날짜(숫자) */
        .sched-list .theme-list td.today i {
            font-weight: bold;
        }

        .sched-list .theme-list td.today i:after {
            /* 오늘 날짜 동그라미 */
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 19px;
            height: 19px;
            border: 2px solid #fff;
            border-radius: 100%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        /* 일정표시 */
        .sched-list .liner {
            position: relative;
            display: block;
            margin-top: 1px;
            width: 100%;
            height: 15px;
            color: #fff;
        }

        .sched-list .starter {
            padding: 0;
        }

        .sched-list .liner:not(.first, .starter) {
            z-index: -1;
        }

        .sched-list .s_subject {
            height: 15px;
            line-height: 14px;
        }

        .sched-list .left .starter .s_subject {
            left: 0;
        }

        .sched-list .right .starter .s_subject {
            right: 0;
        }

        .sched-list .starter .s_subject,
        .sched-list .first .s_subject {
            border-radius: 5px;
            z-index: 2;
        }

        .sched-list .starter .s_subject {
            position: absolute;
            width: 100%;
            min-width: 100%;
            padding: 0 2px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: left;
            font-size: 10px;
            box-sizing: border-box;
        }

        .sched-list .starter:hover .s_subject {
            width: auto;
            overflow: visible;
        }

        .sched-list .liner:not(.first, .starter) p {
            background: none;
            border: 0 none;
        }

        /* 일정 팝업레이어 */
        .sched-list .popup_layer {
            position: absolute;
            display: none;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px 10px;
            border-radius: 5px;
            width: 125px;
            z-index: 20;
        }

        .sched-list td a:hover {
            z-index: 40;
        }

        .sched-list td a:hover .popup_layer {
            display: block;
        }

        .sched-list .left .popup_layer {
            left: 0;
            transform: none;
        }

        .sched-list .right .popup_layer {
            left: auto;
            right: 0;
            transform: none;
        }

        .sched-list .popup_layer .popup_title {
            padding: 5px 0;
            font-size: 13px;
        }

        .sched-list .popup_layer .popup_cont {
            word-break: keep-all;
        }


        /*표시색상*/
        .color_1 {
            background: #ff9900;
        }

        .color_2 {
            background: #7b68ee;
        }

        .color_3 {
            background: #20b2aa;
        }

        .color_4 {
            background: #c70039;
        }
    </style>
</head>



<div>
    <div id="main_image_box" class="theme-box">

        <?= latest('schedule2', 'scd', 31) ?>
    </div>
</div>