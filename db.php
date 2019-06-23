<?php
function getConnection(){
$connection=mysqli_connect('localhost','root','','test');
if(!$connection){
	die('could not connected');
}
return $connection;
}

function get_all_data(){
	$connection=getConnection();

	$sql='SELECT * FROM `ajax`';
	$result=mysqli_query($connection,$sql);
	if (mysqli_num_rows($result)) {
	$html='';
	$html.='<thead>';
    $html.='<tr>';
    $html.=' <th scope="col">#</th>';
    $html.='<th scope="col">First</th>';
    $html.='<th scope="col">Last</th>';
    $html.='<th scope="col">Email</th>';
    $html.='<th scope="col">Edit</th>';
    $html.='<th scope="col">Delete</th>';
    $html.='</tr>';
    $html.= '</thead>';
		while ($row=mysqli_fetch_assoc($result)) {
	  $html .='<tr>';
      $html .='<td>'.$row['id'].'</td>';
      $html .='<td>'.$row['fname'].'</td>';
      $html .='<td>'.$row['lname'].'</td>';
      $html .='<td>'.$row['email'].'</td>';
      $html .='<td><a data-id="'.$row['id'].'" class="icon edit-delete_id" id="update" href="#"><i class="far fa-edit"></i></a></td>';
      $html .='<td><a data-id="'.$row['id'].'" class="icon delete_id" id="delete" href="#"><i class="far fa-trash-alt"></i></a></td>';
     $html .='</tr>';
		}
			
		echo json_encode(['status'=>'success','data'=>$html]);
	}else{
       $html .='<tr>';
       $html .='<td>No record found</td>';
       $html .='<tr>';
       echo json_encode(['status'=>'success','data'=>$html]);
	}
}

function add_record($POST){
	$connection=getConnection();
	$fname=$POST['firstName'];
	$lname=$POST['lastName'];
	$email=$POST['email'];
	$sql="INSERT INTO `ajax` (`fname`,`lname`,`email`) values(?,?,?)";
	$stmt=mysqli_prepare($connection,$sql);
	if(is_object($stmt)){
		mysqli_stmt_bind_param($stmt,'sss',$fname,$lname,$email);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)==1){
		
	 echo json_encode(['status'=>'success','message'=>'congratulation']);
		}else{
	 echo json_encode(['status'=>'error','message'=>'Data not inserted!!!']);
		}
	}
}
function get_record($post){
	$connection=getConnection();
	$id=$post['id'];
	$sql="SELECT * FROM `ajax` WHERE `id`=?";
	$stmt=mysqli_prepare($connection,$sql);
	if(is_object($stmt)){
		mysqli_stmt_bind_param($stmt,'i',$id);
		 mysqli_stmt_bind_result($stmt,$id,$fname,$lname,$email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_fetch($stmt);

		if(mysqli_stmt_num_rows($stmt)){
			header('Content-Type:application/json');
		echo json_encode(['status'=>'success','id'=>$id,'fname'=>$fname,
			'lname'=>$lname,'email'=>$email,]);
		}else{
	echo json_encode(['status'=>'error','message'=>'Data not inserted!!!']);
		}
	}
	
}
function update_record($POST){
	$connection=getConnection();
	$message='';
	$id=$POST['id'];
	$fname=$POST['fname'];
	$lname=$POST['lname'];
	$email=$POST['email'];
	$sql="UPDATE `ajax` SET `fname`=?,`lname`=?,`email`=?  WHERE `id`=?";
	$stmt=mysqli_prepare($connection,$sql);
	if(is_object($stmt)){
		mysqli_stmt_bind_param($stmt,'sssi',$fname,$lname,$email,$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)==1){
         $SuccessMessage='Updated Successfully';
		echo json_encode(['status'=>'success','message'=>'congratulation Update success','viewMessage'=>$SuccessMessage]);
		}else{
		$ErrorMessage='Updated Successfully';
	echo json_encode(['status'=>'error','message'=>'Data not update!!!']);
		}
	}

}
function delete_record($POST){
	$connection=getConnection();
	$id=$POST['id'];
	$sql="DELETE FROM `ajax` where  `id`=?";
	$stmt=mysqli_prepare($connection,$sql);
	if(is_object($stmt)){
		mysqli_stmt_bind_param($stmt,'i',$id);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_affected_rows($stmt)==1){
		echo json_encode(['status'=>'success','message'=>'congratulation Delete  success']);
		}else{
	echo json_encode(['status'=>'error','message'=>'not delete!!!']);
		}
	}

}