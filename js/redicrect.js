if(sessionStorage.getItem('status') == '1'){
    document.getElementById('login-btn').innerHTML =  "Hi! " + sessionStorage.getItem('username');
}

