const validator = {
    handleSubmit:(event)=> {
        event.preventDefault();

        let send = true;
        
        const inputs =form.querySelectorAll('input');
        validator.clearErrors();
        for(let i=0; i<inputs.length; i++){
            const input = inputs[i];
            const check = validator.checkInput(input);
            if(check !== true){
                send = false;
                validator.showError(input, check);

            }
        }
        
        if(send){
            form.submit();
        }
    },
    checkInput:(input)=> {
        let rules = input.getAttribute('data-rules');
        if(rules !== null){
            rules = rules.split('|');
            for(let k in  rules){
                let rDetails = rules[k].split('=');
                switch(rDetails[0]) {
                    case 'required': 
                        if(input.value == ''){
                            return 'Campo não pode ser deixado em branco.';
                        }
                    break;
                    case 'min':
                        if(input.value.length<rDetails[1]) {
                            return `Este campo tem que ter no mínimo ${rDetails[1]} caracteres.`;
                        }
                    break;
                    case 'email':
                        if(input.value!= ''){                        
                            let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            if(!regex.test(input.value.toLowerCase())){
                                return 'Digite um email válido';
                            }
                        }
                    break;
                }
            }
        }
        return true;
    },
    showError:(input, error) => {
        input.style.borderColor = '#FF0000';
        const errorElement = document.createElement('div');
        errorElement.classList.add('error');
        errorElement.innerHTML = error;
        input.parentElement.insertBefore(errorElement, input.nextSibling);
    },
    clearErrors: () =>{
        const inputs = form.querySelectorAll('input');
        for(let i=0; i< inputs.length; i++){
            inputs[i].style='';
        }
        const errorElements = document.querySelectorAll('.error');
        for(let i=0; i< errorElements.length; i++){
            errorElements[i].remove();
        }
    }

};
const form = document.querySelector('.validator');

form.addEventListener('submit', validator.handleSubmit)