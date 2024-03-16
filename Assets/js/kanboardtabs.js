// WEITER HIER: Switch geht nicht ..

function switchTab(ev, chosenTabName) {
    switchButtons(ev.currentTarget);
    switchTabs(chosenTabName);
}

function switchButtons(chosenButton) {
    // get all elements inside class="kanboardtab", which are buttons
    var kanboardtabButton = document.querySelectorAll('.kanboardtab button');
    Array.prototype.forEach.call(kanboardtabButton, (el, i) => {
        el.classList.remove('kanboardbuttonactive');
        // yet show the chosenButton
        if (el == chosenButton) {
            el.classList.add('kanboardbuttonactive');
        }
    });
}

function switchTabs(chosenTabName) {
    // get all tabs with class="kanboardtabcontent" and hide them
    var kanboardtabcontent = document.querySelectorAll('.kanboardtabcontent');
    Array.prototype.forEach.call(kanboardtabcontent, (el, i) => {
        el.classList.remove('kanboardtabcontentshow');
        el.classList.add('kanboardtabcontenthide');
        // yet show the chosenTabName one again
        if (el.id == chosenTabName) {
            el.classList.remove('kanboardtabcontenthide');
            el.classList.add('kanboardtabcontentshow');
        }
    });
}
