/*
      window.pageYOffset;
      window.scrollBy(xaxis, yaxis);
 */

window.onLoad = function()
{
   let toTopButton = document.getElementById("toTopButton");
   
   
   window.onscroll = function()
   {
       /*let test = document.getElementById("test");*/
       let toTopButton = document.getElementById("toTopButton");
       
       let yScrollAxis = window.pageYOffset;
       
       if (yScrollAxis > 300)
           toTopButton.style.display = "block";
       else
           toTopButton.style.display = "none";
       
       /*test.innerHTML = yScrollAxis;*/
   };
   toTopButton.onclick = function()
   {
       window.scrollBy(0, -1 * window.pageYOffset);
   };
window.open('javascript/galeria_javascript.html', '', 'status=no,toolbar=no,menubar=no,scrollbars=no, resizable=no,status=no,location=no,directories=no,top=200, left=200,height=400,width=400');
)
};




