/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#purchase").validate({
        rules:{
            fname: {
                required: true
            },
            
            surname: {
                required: true
            },
            
            address1: {
                required: true
            },
            
            address2: {
                required: true
            },
            
            city: {
                required: true
            },
            
            pcode: {
                required: true
            },
            
            cCredit: {
                required: true,
                number: true
            }
        }
        
    }); //validate ends
});//ready and function within it ends

