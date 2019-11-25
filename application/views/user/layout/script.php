<script>
      // validations
    $("#lemail").on("blur keyup",  function (event){
        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
        var email = $('#lemail').val();
        //$('#email').val(email);
        if(email==null || email==""){
          $("#err_lemail").text("Please Enter Email-ID.");
          return false;
        }
        else{
          $("#err_lemail").text("");
        }
        if (!email.match(email_regex) ) {
          $('#err_lemail').text(" Please Enter Valid Email-ID"); 
          return false;
        }
        else{
          $("#err_lemail").text("");
        }
    });

    $('#lpassword').on("blur keyup", function(event){
        var password = this.value;
        if(password==null || password==""){
            $("#err_lpassword").text("Please Enter Password.");
            return false;
        }
        else{
            $("#err_lpassword").text("");
        }
        if (password.length < 8) {
            $('#err_lpassword').text(" Password should contain minimum 8 characters"); 
            return false;
        }
        else{
            $("#err_lpassword").text("");
        }
    });
    
    $('body').on('click','.login-sub',function(){
        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = $('#lemail').val();
        var password = $('#lpassword').val();
        if(email==null || email==""){
          $("#err_lemail").text("Please Enter Email !");
          return false;
        }
        else{
          $("#err_lemail").text("");
        }
        if (!email.match(email_regex) ) {
          $('#err_lemail').text(" Please Enter Valid Email Address(Ex: abc@dd.com) ");   
          return false;
        }
        else{
          $("#err_lemail").text("");
        }
        
        if(password==null || password==""){
          $("#err_lpassword").text("Please Enter Password");
          return false;
        }
        else{
          $("#err_lpassword").text("");
        }
        if(password.length < 8){
          $("#err_lpassword").text("Please Enter Password 8 to 20 character long");
          return false;
        }
        else{
          $("#err_lpassword").text("");
        }

    });

    $('body').on('click','.login-reg',function(event){
        var f_name = /^[a-zA-Z]+$/;
        var l_name = /^[a-zA-Z]+$/;
        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var cnf_password = $('#cnf_password').val();
        var cust_type = $('#cust_type').val();

        if(first_name==null || first_name==""){
          $("#err_fname").text("Please Enter First Name !");
          return false;
        }
        else{
          $("#err_fname").text("");
        }
        if (!first_name.match(f_name) ) {
          $('#err_fname').text(" Please Enter Valid First Name !");   
          return false;
        }
        else{
          $("#err_fname").text("");
        }

        if(last_name==null || last_name==""){
          $("#err_lname").text("Please Enter Last Name!");
          return false;
        }
        else{
          $("#err_lname").text("");
        }
        if (!last_name.match(l_name) ) {
          $('#err_lname').text(" Please Enter Valid Last Name!");   
          return false;
        }
        else{
          $("#err_lname").text("");
        }

        if(email==null || email==""){
          $("#err_email").text("Please Enter Email !");
          return false;
        }
        else{
          $("#err_email").text("");
        }
        if (!email.match(email_regex) ) {
          $('#err_email').text(" Please Enter Valid Email Address(Ex: abc@dd.com) ");   
          return false;
        }
        else{
          $("#err_email").text("");
        }
        
        checkEmailAlreadyExist(email,event);
        if(password==null || password==""){
          $("#err_pass").text("Please Enter Password");
          return false;
        }
        else{
          $("#err_pass").text("");
        }
        if(password.length < 8){
          $("#err_pass").text("Please Enter Password More Than 8 character");
          return false;
        }
        else{
          $("#err_pass").text("");
        }

        if(cnf_password==null || cnf_password==""){
            $("#err_cnf_pass").text("Please Enter Confirm Password.");
            return false;
        }
        else{
            $("#err_cnf_pass").text("");
        }
        if(password != cnf_password){
            $("#err_cnf_pass").text("Password and Confirm Password does not match.");
            return false;
        }
        else{
            $("#err_cnf_pass").text("");
        }

        if(cust_type==null || cust_type==""){
            $("#err_cust_type").text("Please Select Register As.");
            return false;
        }
        else{
            $("#err_cust_type").text("");
        }

        if(cust_type == 'vendor'){
          var ven_type = $('#ven_type').val();
          if(ven_type == null || ven_type == ""){
            $("#err_ven_type").text("Please Select Vendor type.");
            return false;
          }else{
            $("#err_ven_type").text("");
          }
        }
        
        
    });

    $('body').on('change','#cust_type',function(){
      var cust_type = $('#cust_type').val();
      if(cust_type == 'vendor'){
        $('#ven-cat').css('display','block');
      }else{
        $('#ven-cat').css('display','none');
      }  
    });

    function checkEmailAlreadyExist(email,event){
       
        $.ajax({
            url:'<?php echo base_url(); ?>home/checkEmailAlreadyExist',
            data:{'email':email},
            type:'POST',
            //dataType:"JSON",
            async:false,
            success:function(response){
                
                if(response === 'yes'){
                    alert(response);
                    $('#err_email').text("Email is already in use.Please enter different email id.");  
                    //$("#email").focus();
                    event.preventDefault();
                }else{
                    $('#err_email').text("");
                }   
            }
        });
    }
    

    </script>