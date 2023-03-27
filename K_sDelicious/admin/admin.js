const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");
      fontcolor = body.querySelector(".f-color");
      fontcolor1 = body.querySelector(".f-color-b");

// let getMode = localStorage.getItem("mode");
// if(getMode && getMode ==="dark"){
//     body.classList.toggle("dark");
// }

// let getStatus = localStorage.getItem("status");
// if(getStatus && getStatus ==="close"){
//     sidebar.classList.toggle("close");
// }

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
        body.classList.add("fontcolor");
        body.classList.remove("fontcolor1")
    }else{
        body.classList.add("fontcolor1");
        body.classList.remove("fontcolor");
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

