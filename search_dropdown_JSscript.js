	// Script for city dropdown   //
    $( document ).ready( function(){ 
        var city_id;
    var dfsp = $('#default-speciality').clone();
       
    $("#city").click( function(){
          $("#speciality").val("");
          $("#body2").html(dfsp);
   });     
       
   });
  
   
   
   function dropdownShow(){
       $("#dropdown").css("display","block");
       
          $('#city').keypress(function(event){
           if (event.which == '13') {
         event.preventDefault();
         return false;
       }
              var city = $('#city').val();
              if(city === ""){
                   $("#dropdown").css("display","none");
              }
              else{
                  $("#dropdown").css("display","block");
                  $.ajax({
                      url:"index_city_search.php",
                      method:"post",
                      data:{
                          search:city,
                      },
                      datatype:"text",
                      success:function(data){
                          $("#body").html(data);
                      }
                  });
              }
          });
   
   
   
   $("body").on("mouseenter", ".search-div", function(){
     if($(this).hasClass('selected')){
     
     }
     else{
       $(this).addClass('mouse-selection');
     }
   });
   
   $("body").on("mouseleave", ".search-div", function(){
       if($(this).hasClass('selected')){
     }
     else{  
     $(this).removeClass('mouse-selection');
     }
   });
   
   $("body").on("click", ".search-div" , function(){
       var cityName = $(this).find('p').text();	
       city_id=$(this).find('input').val();
           $("#city").val(cityName);
               $("#dropdown").css("display","none");
               $("#speciality").focus();
   
   });
   
   
   $(document).unbind("keyup").keyup(function(event){
   var code = event.which;  // recommended to use e.which, it's normalized across browsers
   
   if (code == 40) {
       //downArrow
       event.preventDefault();
       if($("div").hasClass("selected"))
       {
           var idx = $(".selected").attr("tabindex");
           $("#dropdown #body div[tabindex=" + idx + "]").removeClass('selected');
           idx++;
           if(idx>7){idx=1;}
           if ( $("#dropdown #body div[tabindex=" + idx + "]").hasClass('mouse-selection') ){
           $("#dropdown #body div[tabindex=" + idx + "]").removeClass('mouse-selection')
       }
               $("#dropdown #body div[tabindex=" + idx + "]").addClass('selected');
       }
   
       else{
           $("#dropdown div[tabindex='1']").addClass('selected');
       }
   }
   
    else if(code==13)    //enterkey
    {
   
   if( $("div").hasClass("selected")){
       var rowData = $(".selected p").text();
       city_id=$(".selected").find('input').val();
               $("#city").val(rowData);
               $("#dropdown").css("display","none");
               $("#speciality").focus(); 
           }
     }
   
   
   else if(code==38)    //upArrow
   {       event.preventDefault();
       var idx = $(".selected").attr("tabindex");
       $("#dropdown #body div[tabindex=" + idx + "]").removeClass('selected');
       idx--;
       if(idx===0){idx=1;}
       
       if ( $("#dropdown #body div[tabindex=" + idx + "]").hasClass('mouse-selection') ){
           $("#dropdown #body div[tabindex=" + idx + "]").removeClass('mouse-selection')
       }
       $("#dropdown #body div[tabindex=" + idx + "]").addClass('selected');
   }
   else{}
   });
   
   }
   
   
   function dropdownRemove() {
       setTimeout(function(){ $("#dropdown").css("display","none"); }, 200);
   }
    
       //  Script for dropdown for speciality  //
   
   function dropdownShow2(){
       $("#dropdown2").css("display","block");
       //$("#default-speciality").focus();
       
       $('#speciality').keypress(function(event){
            
           if (event.which == '13') {
         event.preventDefault();
         return false;
       }
              var lawyer = $('#speciality').val();
                
              if(lawyer === ""){
                   $("#dropdown2").css("display","none");
              }
              else{
                  $("#dropdown2").css("display","block");
                
                  $.ajax({
                      url:"index_category_search.php",
                      method:"post",
                      data:{
                          search:lawyer,
                          city_id:city_id,
                      },
                      datatype:"text",
                      success:function(data){
                          $("#body2").html(data);
                         // alert(data);
                      }
                  });
              }
          });
   
   $(document).unbind("keyup").keyup(function(event){
   var code = event.which;  // recommended to use e.which, it's normalized across browsers
   
   if (code == 40) {
       //downArrow
       event.preventDefault();
       if($("div").hasClass("selected2"))
       {
   
   
           var idx = $(".selected2").attr("tabindex");
           $("#dropdown2 #body2 div[tabindex=" + idx + "]").removeClass('selected2');
           idx++;
           if(idx>7){idx=1;}
           if ( $("#dropdown2 #body2 div[tabindex=" + idx + "]").hasClass('mouse-selection2') ){
           $("#dropdown2 #body2 div[tabindex=" + idx + "]").removeClass('mouse-selection2')
       }
               $("#dropdown2 #body2 div[tabindex=" + idx + "]").addClass('selected2');
       }
   
       else{
           $("#dropdown2 div[tabindex='1']").addClass('selected2');
       }
   }
   
    if(code==13)    //enterkey
    {
   // 	event.preventDefault();
   if( $("div").hasClass("selected2")){
       var rowData = $(".selected2 p").text();
       var rowDataid=$(".selected2").find('input').val();
       if(rowDataid==1){
           $("#speciality").attr("name","Lawyer");
       }
       if(rowDataid==2){
           $("#speciality").attr("name","Speciality");
       }
       if(rowDataid==3){
           $("#speciality").attr("name","Services");	
       }
       if(rowDataid==4){
           $("#speciality").attr("name","Consultant");	
       }
               $("#speciality").val(rowData);
               $("#submit-search").removeAttr("disabled");
               $("#dropdown2").css("display","none");
               setTimeout(function(){
                $("#search_form").submit();
             }, 500);  
           }
     }
   
   
   if(code==38)    //upArrow
   {       event.preventDefault();
       var idx = $(".selected2").attr("tabindex");
       $("#dropdown2 #body2 div[tabindex=" + idx + "]").removeClass('selected2');
       idx--;
       if(idx==0){idx=1;}
       
       if ( $("#dropdown2 #body2 div[tabindex=" + idx + "]").hasClass('mouse-selection2') ){
           $("#dropdown2 #body2 div[tabindex=" + idx + "]").removeClass('mouse-selection2')
       }
       $("#dropdown2 #body2 div[tabindex=" + idx + "]").addClass('selected2');
   }
   });
   
   $("body").on("mouseenter", ".search-div2", function(){
     if($(this).hasClass('selected2')){  
     }
     else{
       $(this).addClass('mouse-selection2');
     }
   });
   
   $("body").on("mouseleave", ".search-div2", function(){
       if($(this).hasClass('selected2')){
     }
     else{  
     $(this).removeClass('mouse-selection2');
     }
   });
   
   
   
   $("body").on("click", ".search-div2" , function(){

       var lawyerCategory = $(this).find('p').text();	
       
       lawyerCategoryid=$(this).find('input').val();
       
       if(lawyerCategoryid==1){
           $("#speciality").attr("name","Lawyer");
       }
       if(lawyerCategoryid==2){
           $("#speciality").attr("name","Speciality");
       }
       if(lawyerCategoryid==3){
           $("#speciality").attr("name","Services");	
       }
       if(lawyerCategoryid==4){
           $("#speciality").attr("name","Consultant");	
       }
       
   
       $("#search2").val(lawyerCategoryid);
       $("#speciality").val(lawyerCategory);
       $("#submit-search").removeAttr("disabled");
       $("#dropdown2").css("display","none");
      
       setTimeout(function(){
       $("#search_form").submit();
    }, 500);

   });
   }
   
   
   function dropdownRemove2() {
       if($("#dropdown2").is(":focus")){	
       }
   else{
       setTimeout(function(){ 
           $("#dropdown2").css("display","none");
        }, 200);
   }
   }
   
   
 
   
   
  
   


