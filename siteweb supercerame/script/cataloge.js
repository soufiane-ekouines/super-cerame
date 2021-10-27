var slideImg = document.getElementById("image_slide");

//var len = images.length;
var i = 1;
function slider(images)
{
  //var images=image;
  var len = images.length;
    if( i > len-1)
    {
      i=0;
    }
   
    document.getElementById("image_slide").src = "assest/image/"+images
    [i];
    
    i++;
    setTimeout('slider(images)',5000);
}









  
  
