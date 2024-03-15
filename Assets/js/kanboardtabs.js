function switchTab(evt, tabName) {
    var i, kanboardtabcontent, kanboardtablinks;

    // Get all elements with class="kanboardtabcontent" and hide them
    kanboardtabcontent = document.getElementsByClassName("kanboardtabcontent");
    for (i = 0; i < kanboardtabcontent.length; i++) {
    kanboardtabcontent[i].style.display = "none";
    }

    // Get all elements with class="kanboardtablinks" and remove the class "active"
    kanboardtablinks = document.getElementsByClassName("kanboardtablinks");
    for (i = 0; i < kanboardtablinks.length; i++) {
    kanboardtablinks[i].className = kanboardtablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
