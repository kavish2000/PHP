<!DOCTYPE html>
<html>
<head>
<title>CRUD Ajax</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="app.js"></script>
<style type="text/css">
            .error{
                    color:red;
                    margin-top:5px;
                    font-size:17px;
                    font-weight:bold;
                }
        </style>

</head>


<body>
<div class="container-fluid" style="padding: 0px; margin: 0px;">
    <div class="jumbotron">
        <h1 class="text-center">CRUD Oprations Using AJAX</h1>
    </div>
</div>
<div class="container" style="padding-top: 25px;">
    <div class="row">
        <div class="col-md-12">
                <!-- <div class=""> -->
               


                        <center><button  class="btn btn-success " id="show-add"><span class="glyphicon glyphicon-plus"></span> Add New Record</button></center>
                <!-- </div> -->

                    <form id="link-add" method="POST" >

                            <div class="form-group col-md-3">
                                    <label> Username </label>
                                    <input type="text" name="username" id="username" placeholder=" Enter Username" class="form-control" />
                            </div>

                            <div class="form-group col-md-3">
                                    <label> Email </label>
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control"  />
                            </div>

                            <div class="form-group col-md-3">
                                    <label> Password </label>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control"  />
                            </div>


                            <div class="form-group col-md-3">
                                    <label> Phone NO </label>
                                    <input type="text" name="phoneno" id="phoneno" placeholder="Phoneno" class="form-control"  />
                            </div>

                            <div class=" col-md-3">
                                    <button type="submit" class="btn btn-primary" id="add" name="add">Add Record</button>
                                    <!-- <button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button> -->
                            </div>
                    </form>
            </div>  
    </div>
</div>

<div class="row">
            <div class="col-md-12">
                        <div id="records_content"></div>
                        <br>
                        <div class="col-md-offset-1 col-md-10" id="table_content"></div>
            </div>
</div>


</body>
</html>
