function toggle(showHideContent, headerCollapsed) {
    var content = document.getElementById(showHideContent);
    var header = document.getElementById(headerCollapsed);
    
    if(content.style.display == "block") {
        content.style.display = "none";
        header.className = "lc_header collapsed"
    } else {
        content.style.display = "block";
        header.className = "lc_header expanded"
    }
} 