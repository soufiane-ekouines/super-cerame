var mini = true;

function toggleSidebar() {
  if (mini) {
        console.log("opening sidebar");
    document.getElementById("sidebar").style.width = "315px";
    document.getElementById("main").style.marginLeft = "300px"
   
    this.mini = false;
  } else {
       console.log("closing sidebar");
    document.getElementById("sidebar").style.width = "74px";
    document.getElementById("main").style.marginLeft = "50px"
    
    this.mini = true;
  }
}
