<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>

<form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" >
    File: <input name="myfile[]" type="file" multiple/>
          <input type="submit" name="submitBtn" value="Upload" />
</form>

<script>
   //form Submit action
   $("form").submit(function(evt){	 
   evt.preventDefault();
   var formData = new FormData($(this)[0]); 

    $.ajax({
       url : 'file.php',
       type : 'POST',
       data : formData,
       processData: false,  // tell jQuery not to process the data
       contentType: false,  // tell jQuery not to set contentType
       success : function(data) {
           alert(data);
		   
       }
	});
 });
</script>
