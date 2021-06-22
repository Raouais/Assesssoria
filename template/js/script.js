
const href = window.location.href;


if(href.match(/home/g) !== null && href.match(/home/g).length > 0){

    
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
