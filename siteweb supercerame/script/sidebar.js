var mini = true;

function toggleSidebar() {
  if (mini) {
        console.log("opening sidebar");
    document.getElementById("sidebar").style.width = "315px";
    document.getElementById("main").style.marginLeft = "315px"
    document.getElementById("con").style.marginLeft = "315px"
    this.mini = false;
  } else {
       console.log("closing sidebar");
    document.getElementById("sidebar").style.width = "74px";
    document.getElementById("main").style.marginLeft = "85px"
    document.getElementById("con").style.marginLeft = "70px"
    this.mini = true;
  }
}
