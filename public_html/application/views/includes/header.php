<!DOCTYPE html>
<html>
    <head>
        <title><?php echo isset($title) ? $title : 'CodeIgniter Login'; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">  
        <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
        
        


        <style>
            .mytext{
                border:0;padding:10px;background:whitesmoke;
            }
            .text{
                width:75%;display:flex;flex-direction:column;
            }
            .text > p:first-of-type{
                width:100%;margin-top:0;margin-bottom:auto;line-height: 13px;font-size: 12px;
            }
            .text > p:last-of-type{
                width:100%;text-align:right;color:silver;margin-bottom:-7px;margin-top:auto;
            }
            .text-l{
                float:left;padding-right:10px;
            }        
            .text-r{
                float:right;padding-left:10px;
            }

            .macro{
                margin-top:5px;width:85%;border-radius:5px;padding:5px;display:flex;
            }
            .msj-rta{
                float:right;background:whitesmoke;
            }
            .msj{
                float:left;background:white;
            }
            .frame{
                background:#e0e0de;
                height:750px;
                overflow:hidden;
                padding:0;
            }
            .frame > div:last-of-type{
                position:absolute;bottom:0;width:100%;display:flex;
            }
            body > div > div > div:nth-child(2) > span{
                background: whitesmoke;padding: 10px;font-size: 21px;border-radius: 50%;
            }
            body > div > div > div.msj-rta.macro{
                margin:auto;margin-left:1%;
            }
            ul {
                width:100%;
                list-style-type: none;
                padding:18px;
                position:absolute;
                bottom:47px;
                display:flex;
                flex-direction: column;
                top:0;
                overflow-y:scroll;
            }
            .msj:before{
                width: 0;
                height: 0;
                content:"";
                top:-5px;
                left:-14px;
                position:relative;
                border-style: solid;
                border-width: 0 13px 13px 0;
                border-color: transparent #ffffff transparent transparent;            
            }
            .msj-rta:after{
                width: 0;
                height: 0;
                content:"";
                top:-5px;
                left:14px;
                position:relative;
                border-style: solid;
                border-width: 13px 13px 0 0;
                border-color: whitesmoke transparent transparent transparent;           
            }  
            input:focus{
                outline: none;
            }        
            ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                color: #d4d4d4;
            }
            ::-moz-placeholder { /* Firefox 19+ */
                color: #d4d4d4;
            }
            :-ms-input-placeholder { /* IE 10+ */
                color: #d4d4d4;
            }
            :-moz-placeholder { /* Firefox 18- */
                color: #d4d4d4;
            }  
        </style>


    </head>
    <body>
