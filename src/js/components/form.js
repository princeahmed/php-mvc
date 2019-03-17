function msg ($msg) {
    console.log($msg);
}

function webAlert($msg) {
    alert($msg);
}


export default {
    msg: msg,
    myAlert: webAlert
}