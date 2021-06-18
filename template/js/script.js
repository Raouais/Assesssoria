
const href = window.location.href;


if(href.match(/register/g) !== null && href.match(/register/g).length > 0){
    document.getElementById("isAdmin").addEventListener('click', _ => {
        this.value = !this.value
    });
}


if(href.match(/editLink/g) !== null && href.match(/editLink/g).length > 0){
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href );
    }
}

if(href.match(/home/g) !== null && href.match(/home/g).length > 0){
    if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href );
    }
}
