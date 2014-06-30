/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(

function(){
            //create an array and preload it
            
            var image, imageCache=[];
            $("#slides img").each(function(){
                image= new Image();
                image.src = $(this).attr("src");
                imageCache.push(image);
            }
            
        );
            
            //starting the slideshow
            $("#slider>Img#slide").fadeIn(300);
            var imageCounter=0;
            var nextImage;
            var timer= setInterval(
                function(){
                    $("#slide").fadeOut(200,
                    function(){
                        imageCounter = (imageCounter +1) % imageCache.length;
                        nextImage = imageCache[imageCounter];
                        $("#slide").attr("src",nextImage.src).fadeIn(1500);
                    }
                );
                },
            5000);
          }
      
  )
      
      
          


