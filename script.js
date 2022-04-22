const name = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')

from.addEventListener('submit', (e) =>{
    let messages = []
    if(username.value === '' || username.value == null)  {
        messages.push('usernaam is verplicht')
    }

    if(messages.length > 0){
        e.preventDefault()
    }
} )
