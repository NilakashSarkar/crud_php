<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title></title>
	
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           -->
     
</head>
<body>
<div class="container"> 

<div class="py-5">
<button type="button" href="#"  class="btn btn-dark add" data-toggle="modal" data-target="#add">Add Contant</button>
</div>

  <div class="toast" data-delay="10000" style="position: absolute; top: 0; right: 0; background-color:blue" >
    <div class="toast-header">
      
      <strong class="mr-auto">Nilakash</strong>
      <small>0 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
        Successfull
    </div>
  </div>
 <div class="table-responsive" >
<table class="table table-hover" style="overflow-y: hidden">

  <tbody>
   <!--data come  from ajax-->
  </tbody>
</table>

</div>

<!--Add Model-->
	<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	  <form class="form" id="submit_add" method="post" action="add.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        	<div class="form-group">
        		<div class="status"></div>
        	</div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" name="firstName" id="firstName">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control"name="lastName" id="lastName">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary loader" value="insert">Add Contact</button>
      </div>
    </div>
  </form>
  </div>
</div>
<!--End Add Model-->


<!--update Model-->
	<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	  <form class="form" id="update-form" method="post" action="update_record.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        	<div class="form-group">
        		<div class="status"></div>
        	</div>
            <div class="form-group">
            <input type="hidden" class="form-control id"  name="id">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control fname"id="fname" name="fname">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label ">Last Name:</label>
            <input type="text" class="form-control lname"name="lname" >
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control email"  name="email">
          </div>       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit loader" class="btn btn-primary update_loader" value="Update" id="updatebtn">Update</button>
      </div>
    </div>
  </form>
  </div>
</div>
<!--Update Model-->



<!--Delete Model-->
	<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	  <form class="form" id="delete-form" method="post" action="delete_record.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        	<div class="form-group">
        		<div class="status"></div>
        	</div>
            <div class="form-group">
            <input type="hidden" class="form-control id"  name="id">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control fname"id="fname" name="fname">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label ">Last Name:</label>
            <input type="text" class="form-control lname"name="lname" >
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control email"  name="email">
          </div>       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit loader" class="btn btn-primary" >Delete Contact</button>
      </div>
    </div>
  </form>
  </div>
</div>
<!--Delete Model-->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="public/script.js"></script>
<!-- <script src="public/jquery-3.3.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
</html>