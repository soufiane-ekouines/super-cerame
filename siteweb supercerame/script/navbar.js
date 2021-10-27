var Open = true;
function toggleNavbar()
{
    if (Open)
    {
        
        document.getElementById("showcase_header").style.height="block";
        this.Open=false;
    }
    else
    {
        
        document.getElementById("showcase_header").style.height="70px";
        this.Open=true;
    }  
}

function test(x)
{
    if(x.matches)
    {
        document.getElementById("showcase_header").style.height="80px";
    }
}
var x = window.matchMedia("(min-width: 1300px)")
test(x) // Call listener function at run time
x.addListener(test) // Attach listener function on state changes