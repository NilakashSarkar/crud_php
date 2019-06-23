$(document).on('click', '.edit-delete_id', function(){  
	var $form='';
	var $modal='';
           var id = $(this).attr("data-id"); 
           var update_id = $(this).attr("id");  
   
           $.ajax({  
                url:"fetch-data.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",          
                success:function(data){ 
                	if (data.status=='success') {
                		if (update_id=='update') {
                           $modal=$('#update-modal');  
                         
                		}else if(update_id=='delete'){
		 		           $modal=$('#delete-modal');
		 		       }	 	
		             $form=$modal.find('.form');
                	 $form.find('.id').val(data.id);  
                     $form.find('.fname').val(data.fname); 
                     $form.find('.lname').val(data.lname); 
                     $form.find('.email').val(data.email);                 
                     $modal.modal('show');  
               } 
               }
      });  
});