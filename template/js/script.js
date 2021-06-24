
const href = window.location.href;

if(href.match(/contact/g) !== null && href.match(/contact/g).length > 0){
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href );
    }
}