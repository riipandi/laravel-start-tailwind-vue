// Disable form autocomplete
function disableAutoComplete(form) {
    obj = document.querySelector(form);
    if (typeof (obj) != 'undefined' && obj != null) {
        obj.setAttribute('autocomplete', 'off');
    }
}
