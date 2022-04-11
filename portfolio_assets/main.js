window.onload = function(){
    document.getElementById("theme_btn").onclick = change_theme
    
}

let flag = true
function change_theme(){
    if(flag){
        document.body.setAttribute("theme", "light")
        document.getElementById("theme_btn").innerHTML = '🌙 '
        document.getElementById("theme_btn").setAttribute("title", "switch to night mode")
        flag = false
    }
    else{
        document.body.setAttribute("theme", "dark")
        document.getElementById("theme_btn").innerHTML = '☀'
        flag = true
    }
    
}