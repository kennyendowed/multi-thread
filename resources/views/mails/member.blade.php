
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

      /*All the styling goes here*/
      .section-bg {
        width: 100%;
        height: 234vh;
        background: url("../img/logo/backgroudblue.jpg") center center;
        background-size: cover;
        position: relative;
        margin-top: 70px;
        padding: 0;
        /* background-color: #f7fbfe; */
      }

      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
      }
      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top;
      }
      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }
      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%;
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center;
      }
      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important;
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important;
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important;
        }
        table[class=body] .content {
          padding: 0 !important;
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important;
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important;
        }
        table[class=body] .btn table {
          width: 100% !important;
        }
        table[class=body] .btn a {
          width: 100% !important;
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important;
        }
      }
      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */

    </style>
  </head>
  <body class="">

<div class='container' text-align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
        <!-- info row -->
        <div class="row">
          <div class="col-md-8">
      <p>  {!!  $text  !!}  </p>
           </br>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </td>
  </tr>
</table>
</div>
<!-- START FOOTER -->
<div class="footer">
  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="content-block">
        {{-- <img src="<?php //echo $message->embed($img); ?>" alt="" class="logo-text-light"/> --}}
        <span class="apple-link">&copy; <?php
   $copyYear = 2019;
   $curYear = date('Y');
   echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
   ?> Wristbands.ng. All rights reserved.</span>
       <!--  <br> Don't like these emails? <a href="http://i.imgur.com/CScmqnj.gif">Unsubscribe</a>. -->
      </td>
    </tr>
    <tr>
      <td class="content-block powered-by">
        Powered by <a href="http://wristbands.ng">Wristbands.ng</a>.
      </td>
    </tr>
  </table>
</div>
<!-- END FOOTER -->
</body>
</html>
