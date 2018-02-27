//initiate jquery;
$(document).ready(function(){
    var inputvalue;
    
    $('#inputpseudo').keyup(function(){
      var  inputvalue=this.value;
      var inputvalue= inputvalue.length;
  
        if(inputvalue<4 && inputvalue >4 )
        {
         alert('tsy ampy') 
        }
       else{
         alert('toizo')
       }
       
    
            /*jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
          });
          $( "#my_input" ).validate({
            rules: {
              field: {
                required: true,
                minlength: 6
              }
            }
          });*/
        })
      });