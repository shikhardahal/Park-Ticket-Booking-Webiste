<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Microsoft Office User" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      th.style1 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Nirmala UI'; font-size:12pt; background-color:#5B9BD5 }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      td.style5 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      th.style5 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      td.style6 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      th.style6 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt; background-color:#DDEBF7 }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Fontasy Himali'; font-size:11pt; background-color:white }
      th.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Fontasy Himali'; font-size:11pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#222222; font-family:'Nirmala UI'; font-size:12pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; color:#222222; font-family:'Fontasy Himali'; font-size:12pt; background-color:white }
      td.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Fontasy Himali'; font-size:11pt; background-color:white }
      th.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Fontasy Himali'; font-size:11pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      table.sheet0 col.col0 { width:42pt }
      table.sheet0 col.col1 { width:105.05555435pt }
      table.sheet0 col.col2 { width:132.16666515pt }
      table.sheet0 col.col3 { width:170.12222027pt }
      table.sheet0 tr { height:16.363636363636pt }
      table.sheet0 tr.row0 { height:19pt }
      table.sheet0 tr.row2 { height:17pt }
      table.sheet0 tr.row3 { height:18pt }
      table.sheet0 tr.row4 { height:18pt }
      table.sheet0 tr.row5 { height:18pt }
      table.sheet0 tr.row6 { height:52pt }
      table.sheet0 tr.row7 { height:52pt }
      table.sheet0 tr.row8 { height:52pt }
      table.sheet0 tr.row9 { height:52pt }
      table.sheet0 tr.row10 { height:35pt }
      table.sheet0 tr.row11 { height:35pt }
      table.sheet0 tr.row12 { height:35pt }
      table.sheet0 tr.row13 { height:35pt }
      table.sheet0 tr.row14 { height:52pt }
      table.sheet0 tr.row15 { height:35pt }
      table.sheet0 tr.row16 { height:35pt }
      table.sheet0 tr.row17 { height:35pt }
      table.sheet0 tr.row18 { height:35pt }
      table.sheet0 tr.row19 { height:35pt }
      table.sheet0 tr.row20 { height:35pt }
      table.sheet0 tr.row21 { height:35pt }
      table.sheet0 tr.row22 { height:35pt }
      table.sheet0 tr.row23 { height:35pt }
      table.sheet0 tr.row24 { height:35pt }
      table.sheet0 tr.row25 { height:35pt }
      table.sheet0 tr.row26 { height:35pt }
      table.sheet0 tr.row27 { height:35pt }
      table.sheet0 tr.row28 { height:52pt }
      table.sheet0 tr.row29 { height:35pt }
      table.sheet0 tr.row30 { height:18pt }
      table.sheet0 tr.row31 { height:35pt }
      table.sheet0 tr.row32 { height:18pt }
      table.sheet0 tr.row33 { height:86pt }
      table.sheet0 tr.row34 { height:86pt }
      table.sheet0 tr.row35 { height:86pt }
      table.sheet0 tr.row36 { height:137pt }
      table.sheet0 tr.row37 { height:18pt }
      table.sheet0 tr.row38 { height:18pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <tbody>
          <tr class="row0">
            <td class="column0 style22 s style23" colspan="4">शहीद स्मारक प्रकृति प्रतिष्ठान(थानकोट त्रिभुवन पार्क)</td>
          </tr>
          <tr class="row1">
            <td class="column0 style24 s style25" colspan="4">मूल्य अनुसूची - १ (२०८०/२०८१ )</td>
          </tr>
          <tr class="row3">
            <td class="column0 style1 s">Column1</td>
            <td class="column1 style2 s">Column2</td>
            <td class="column2 style3 s">Column3</td>
            <td class="column3 style3 s">Column4</td>
          </tr>
          <tr class="row4">
            <td class="column0 style4 s">सि<span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt">.</span><span style="font-weight:bold; color:#000000; font-family:'Nirmala UI'; font-size:12pt">न</span></td>
            <td class="column1 style5 s">विवरण</td>
            <td class="column2 style6 s">शुल्क</td>
            <td class="column3 style6 s">ग्राहक मूल्य </td>
          </tr>
          <tr class="row5">
            <td class="column0 style7 n">1</td>
            <td class="column1 style8 s">प्रवेश</td>
            <td class="column2 style9 s">शुल्क</td>
            <td class="column3 style10 n">&nbsp;&nbsp;50.00 </td>
          </tr>
          <tr class="row6">
            <td class="column0 style11 n">2</td>
            <td class="column1 style12 s">प्रवेश (विद्यार्थी सहुलियत</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;30.0 </td>
          </tr>
          <tr class="row7">
            <td class="column0 style11 n">3</td>
            <td class="column1 style12 s">पिकनिक चौरमा 10-20</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;800.0 </td>
          </tr>
          <tr class="row8">
            <td class="column0 style11 n">4</td>
            <td class="column1 style12 s">पिकनिक चौरमा 21-50</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;900.0 </td>
          </tr>
          <tr class="row9">
            <td class="column0 style11 n">5</td>
            <td class="column1 style12 s">पिकनिक चौरमा 51 -100</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,000.0 </td>
          </tr>
          <tr class="row10">
            <td class="column0 style11 n">6</td>
            <td class="column1 style12 s">पिकनिक ठाँटी 1</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;3,000.0 </td>
          </tr>
          <tr class="row11">
            <td class="column0 style11 n">7</td>
            <td class="column1 style12 s">पिकनिक ठाँटी 2</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;3,000.0 </td>
          </tr>
          <tr class="row12">
            <td class="column0 style11 n">8</td>
            <td class="column1 style12 s">पिकनिक ठाँटी 3</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;3,000.0 </td>
          </tr>
          <tr class="row13">
            <td class="column0 style11 n">9</td>
            <td class="column1 style12 s">स्टेजमा पिकनिक</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,000.0 </td>
          </tr>
          <tr class="row14">
            <td class="column0 style11 n">10</td>
            <td class="column1 style12 s">चौरमा टेण्ट हाली पिकनिक</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,500.0 </td>
          </tr>
          <tr class="row15">
            <td class="column0 style11 n">11</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;  1</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row16">
            <td class="column0 style11 n">12</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot; 2</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row17">
            <td class="column0 style11 n">13</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;3</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row18">
            <td class="column0 style11 n">14</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;4</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row19">
            <td class="column0 style11 n">15</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;5</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row20">
            <td class="column0 style11 n">16</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;6</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row21">
            <td class="column0 style11 n">17</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;क&quot;7</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,500.0 </td>
          </tr>
          <tr class="row22">
            <td class="column0 style11 n">18</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;ख&quot;1</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,000.0 </td>
          </tr>
          <tr class="row23">
            <td class="column0 style11 n">19</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;ख&quot;2</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,000.0 </td>
          </tr>
          <tr class="row24">
            <td class="column0 style11 n">20</td>
            <td class="column1 style12 s">पिकनिक सेड &quot;ख&quot;3</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;2,000.0 </td>
          </tr>
          <tr class="row25">
            <td class="column0 style11 n">21</td>
            <td class="column1 style12 s">पिकनिक सैड &quot;ग&quot;1</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,000.0 </td>
          </tr>
          <tr class="row26">
            <td class="column0 style11 n">22</td>
            <td class="column1 style12 s">पिकनिक सैड &quot;ग&quot;2</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,000.0 </td>
          </tr>
          <tr class="row27">
            <td class="column0 style11 n">23</td>
            <td class="column1 style12 s">पिकनिक सैड &quot;ग&quot;3</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,000.0 </td>
          </tr>
          <tr class="row28">
            <td class="column0 style11 n">24</td>
            <td class="column1 style12 s">चलचित्र शटिङ्ग (ठुलो पर्दा)</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;10,000.0 </td>
          </tr>
          <tr class="row29">
            <td class="column0 style11 n">25</td>
            <td class="column1 style12 s">टेलिचलचित्र शुटिङ्ग</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style15 n">&nbsp;&nbsp;6,000.0 </td>
          </tr>
          <tr class="row30">
            <td class="column0 style11 n">26</td>
            <td class="column1 style12 s">गीत शुटिङ्ग</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style16 n">&nbsp;&nbsp;5,000.0 </td>
          </tr>
          <tr class="row31">
            <td class="column0 style11 n">27</td>
            <td class="column1 style12 s">भिडियो क्यामरा</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;1,000.0 </td>
          </tr>
          <tr class="row32">
            <td class="column0 style11 n">28</td>
            <td class="column1 style12 s">क्यामरा</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;100.0 </td>
          </tr>
          <tr class="row33">
            <td class="column0 style11 n">29</td>
            <td class="column1 style12 s">विवाह व्रतबन्ध र साधारणसभा टोली  100</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;45.0 </td>
          </tr>
          <tr class="row34">
            <td class="column0 style11 n">30</td>
            <td class="column1 style12 s">विवाह व्रतबन्ध र साधारणसभा टोली 101-200</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;40.0 </td>
          </tr>
          <tr class="row35">
            <td class="column0 style11 n">31</td>
            <td class="column1 style12 s">विवाह व्रतबन्ध र साधारणसभा टोली 201-300</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;35.0 </td>
          </tr>
          <tr class="row36">
            <td class="column0 style11 n">32</td>
            <td class="column1 style17 s">चन्द्रागिरी नगर पालिका वडा नं. ३, ४, ७ का स्थानिय बासिन्दालाई परीचय पत्र अनिवार्य हुने</td>
            <td class="column2 style13 s">शुल्क</td>
            <td class="column3 style14 n">&nbsp;&nbsp;30.0 </td>
          </tr>
          <tr class="row37">
            <td class="column0 style11 n">33</td>
            <td class="column1 style18 s">फ्री टिकेट </td>
            <td class="column2 style19 s">शुल्क</td>
            <td class="column3 style20 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  </td>
          </tr>
          <tr class="row38">
            <td class="column0 style11 n">34</td>
            <td class="column1 style21 s">बार्षिक ग्राहक </td>
            <td class="column2 style19 s">शुल्क</td>
            <td class="column3 style20 n">&nbsp;&nbsp;5,000.0 </td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
