/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#details").validate({
        rules:{
           
            Quantity: {
                required: true,
                number: true
            }
        }
        
    }); //validate ends
});//ready and function within it ends

