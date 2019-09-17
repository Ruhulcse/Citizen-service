<?php
 include'link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/chat.css">
</head>
<body>
  <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
         $comment =mysqli_real_escape_string($db->link, $_POST['text']);
         $query="INSERT INTO chat(chat)VALUES($comment')";
         $inserted_rows = $db->insert($query);
   }
  ?>      
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="portlet portlet-default">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4><i class="fa fa-circle text-green"></i> Jane Smith</h4>
                    </div>
                    <div class="portlet-widgets">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                <i class="fa fa-circle text-green"></i> Status
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                </li>
                            </ul>
                        </div>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel-collapse collapse in">
                    <div>

                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                            </div>
                        </div>
                        //chat show
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle img-chat" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:39 PM</span>
                                        </h4>
                                        <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>
                    <div class="portlet-footer">
                        <form action="" method="post">
                            <div class="form-group">
                                <input class="form-control" name="text" placeholder="Enter message..."></input>
                            </div>
                               <div class="form-group">
                                <input type="button" class="btn btn-default pull-right" name="submit">Send</input>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
</div>                

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	                    
                
</script>
</body>
</html>