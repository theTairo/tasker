$(document).ready(function() {
   
   function isPriorityCorrect() {
       
       var priority = $("#numberInput").val();
       
       if(priority != "") {
           return true;
       } else {
           return false;
       }
       
   }
   
   $('#submitButton').on("click", function() {
      if(isPriorityCorrect()) {
          $.post("add.php", {name: "John"});
      }
   })
    
});