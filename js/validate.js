function validate_signup(){
    let pwd = document.getElementById("password").value;
    let re_pewd = document.getElementById("re-password").value;
    if(pwd == re_pewd){
        return true;
    }
    alert('Password Correct');
    return false;
}