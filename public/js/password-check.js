window.onload = function (ev) {

    const GUI = {
        form: document.querySelector("form"),
        password: document.querySelector("input[name='password']"),
        rePassword: document.querySelector("input[name='rePassword']"),
        lastLabel: document.querySelector('#lastLabel')
    };

    //проверка полей пароля на соответствие
    GUI.form.onsubmit = (ev) =>{
        if(GUI.password.value !== GUI.rePassword.value){
            if(document.querySelector('#error') === null){
                let error = document.createElement('span');
                error.setAttribute('id', 'error');
                error.style.color = 'red';
                error.style.fontSize = '20px';
                error.style.textAlign = 'center';
                error.style.margin = '15px 0 0 0';
                error.innerText = 'Пароли не совпадают';

                GUI.lastLabel.appendChild(error);
            }
            ev.preventDefault();
        }
    };
};