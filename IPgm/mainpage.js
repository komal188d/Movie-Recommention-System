function myFunction() {
    var x = document.getElementById("TextBoxDiv");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


function log() {
    var x1 = document.getElementById("login1");
    if (x1.style.display === "none") {
        x1.style.display = "block";
    } 
    // else {
    //     x1.style.display = "block";
    // }
}















// $(document).ready(function(){

    // var counter = 2;
		
    // $("#toggleB").click(function () {
				
	// if(counter>10){
 //            alert("Only 10 textboxes allow");
 //            return false;
	// }   
		
	// var newTextBoxDiv = $(document.createElement('div'))
	//      .attr("id", 'TextBoxDiv' + counter);
                
	// newTextBoxDiv.after().html('<label>Textbox #'+ counter + ' : </label>' +
	//       '<input type="text" name="textbox' + counter + 
	//       '" id="textbox' + counter + '" value="" >');
            
	// newTextBoxDiv.appendTo("#TextBoxesGroup");

				
	// counter++;
 //     });

     // $(".fa-search").click(function () {
	// if(counter==1){
 //          alert("No more textbox to remove");
 //          return false;
 //       }   
        
	// counter--;
			
     //    $("#textbox1").remove();
			
     // });
		
 //     $("#getButtonValue").click(function () {
		
	// var msg = '';
	// for(i=1; i<counter; i++){
 //   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	// }
 //    	  alert(msg);
 //     });
  // });
