let menu = document.querySelector("#menu")
let sidebar = document.querySelector(".sidebar")
let searchBar = document.querySelector(".bx-search")

menu.onclick = function() {
    sidebar.classList.toggle("active")
}
searchBar.onclick = function(){
    sidebar.classList.toggle("active")
}
