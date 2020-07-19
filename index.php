﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-collapse.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CHECKER FULL</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script>
var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
    var d = new Date();
    document.getElementById("horas").innerHTML = d.toLocaleTimeString();
}
</script>
<script type="text/javascript">
function Mudaestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>
</head>

<body  style="background-image: url(https://images8.alphacoders.com/920/thumb-1920-920308.jpg);  background-repeat: repeat-x;" >

        <!-- /.site-sidebar --> 
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">   
                    <p class="page-title-description mr-0 d-none d-md-inline-block"></p> 
                
                </div>
                <!-- /.page-title-left-->
                <br>
                <br>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list row">
                
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 style="color: white" class="widget-title"> ADMIRAL KIZARU </h5>
                            <div class="widget-graph-info">
                                <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <button style="background-color: crimson; color: white; outline: none;border: 2px solid crimson    " type="button" id="sh_apr" onclick="Mudaestado('aprovadasapp');" class="btn btn-success">APROVADAS [ <span id="aprovada_conta">0</span> ]</button>

                            <br>

                            <p id="aprovadasapp"></p>

                            <br><br>

                            <button style="background-color:  black; color: white; border: 2px solid black" type="button" id="sh_rep" onclick="Mudaestado('reprovadasapp');" class="btn btn-danger">REPROVADAS [ <span id="reprovada_conta">0</span> ]</button>

                            <br>

                            <p id="reprovadasapp"></p>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-content widget-full-height col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 style="color: white" class="widget-title">FILL IN THE INFORMATION.</h5>
                            <div class="widget-graph-info">
                                <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- .widget-heading -->
                        <div class="widget-body">
                            <div class="container-fluid pd-20">
                                <div class="row">
                                    <div class="col">
                                        

                                    <textarea  id="lista" placeholder="FORMAT: 0000000000000000|00|0000|000" class="form-control" style="resize:none;outline:none;width:500px; height:150px;"></textarea><br>

                                    <button  style="background-color: black; color: white; outline: none;border: 2px solid black" type="button" id="iniciar" onclick="start()" class="btn btn-success">Start</button> <button style="background-color:  indigo; color: white; border: 2px solid indigo" type="button" onclick="stop()" id="parar" class="btn btn-danger">Stop</button>
                                    <br><br>

                                    <small>STATUS: <span  style="background-color: black; color: white; outline: none;border: 2px solid black"  class="badge badge-primary" id="demo">WAITING FOR EXECUTE</span> - 
                                    APROVADAS: <span  style="background-color: black; color: red    ; outline: none;border: 2px solid black" id="CLIVE" class="badge badge-success">0</span> - 
                                    REPROVADAS: <span  style="background-color: indigo; color: white; outline: none;border: 2px solid indigo" id="CDIE" class="badge badge-danger">0</span> - 
                                    TESTED: <span  style="background-color: red; color: white; outline: none;border: 2px solid red" id="testado" class="badge badge-warning">0</span> - 
                                    TOTAL: <span  style="background-color: crimson; color: white; outline: none;border: 2px solid crimson" id="carregada" class="badge badge-facebook">0</span></small>
                                    </small>
                                    <br><br>

                                    Date: <span  style="background-color: indigo; color: white; outline: none;border: 2px solid indigo" class="badge badge-primary" id="horas">NULL</span><br>

                                    <p>Add me on Facebook :  <a target="_BLANK" href="https://www.youjizz.com/">ADMIRAL KIZARU</a></p>

                                  
                                
                                    </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="js.js"></script>
</body>

</html>
