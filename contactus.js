/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#something").validate({
        rules:{
            email: {
                required: true,
                email: true
            },
            
            fname: {
                required: true
            },
            
            sname: {
                required: true
            },
            
            cnum: {
                required: true,
                number: true
            },
            
            subject: {
                required: true
            },
            
            textdetail: {
                required: true
            }
        }
        
    }); //validate ends
});//ready and function within it ends