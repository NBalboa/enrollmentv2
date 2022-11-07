function getUsername() {
    
    const username = document.getElementById('username').value;
    console.log(username);

}

function getPassword() {

    const password = document.getElementById('password').value;
    console.log(password);
}

document.getElementById('eye').addEventListener('click', function(){
    
    let password = document.getElementById('password')
    
    current = password.getAttribute('type')

    if(current === 'password'){
        password.setAttribute('type', 'text')
    }
    else{
        password.setAttribute('type', 'password')
    }
    
})
