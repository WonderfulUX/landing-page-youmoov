let menu = document.getElementById('menu');
let mobileMenuLink = document.querySelectorAll('.menu-link');
let closeBtns = document.querySelectorAll('.close');
let modals = document.querySelectorAll('.modal');
let inputs = [... [... document.querySelectorAll('#contact-form input') ], document.querySelector('#contact-form textarea')];


//LOCAL STORAGE
!(localStorage.getItem('lang'))&& localStorage.setItem('lang', 'fr');


//MOBILE MENU
function togglemenu(){
    menu.classList.toggle('slideIn');
}

mobileMenuLink.forEach(ele=>{
    ele.addEventListener('click', ()=>{
        document.querySelector('.slideIn') && menu.classList.remove('slideIn');
    })
})


//CHANGE LANGUAGE

function changeLanguage(){
    document.getElementById('language-modal').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('language-modal').querySelector('.modal-content').classList.add('displayed');
    },300)
}
function switchTo(ele){
    console.log(ele)
    let languageShort = ele.querySelector('.language-label').innerText;
    switch (languageShort){
        case 'Français':
            [... document.querySelectorAll('.fr')].map(ele=>ele.classList.remove('dn'));
            [... document.querySelectorAll('.en')].map(ele=>ele.classList.add('dn'));
            [... document.querySelectorAll('.pt')].map(ele=>ele.classList.add('dn'));
            localStorage.setItem('lang', 'fr')
            break;
        case 'English':
            [... document.querySelectorAll('.fr')].map(ele=>ele.classList.add('dn'));
            [... document.querySelectorAll('.en')].map(ele=>ele.classList.remove('dn'));
            [... document.querySelectorAll('.pt')].map(ele=>ele.classList.add('dn'));
            localStorage.setItem('lang', 'en')
            break;
            case 'Português':
            [... document.querySelectorAll('.fr')].map(ele=>ele.classList.add('dn'));
            [... document.querySelectorAll('.en')].map(ele=>ele.classList.add('dn'));
            [... document.querySelectorAll('.pt')].map(ele=>ele.classList.remove('dn'));
            localStorage.setItem('lang', 'pt')
            break;
    }
    document.querySelector('#language-modal .close').click();
}



//MODALS
function openConfidentiality(){
    document.getElementById('confidentiality').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('confidentiality').querySelector('.modal-content').classList.add('displayed');
    },300)
}
function openTerms(){
    document.getElementById('terms').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('terms').querySelector('.modal-content').classList.add('displayed');
    },300)
}
function openLegalNotice(){
    document.getElementById('legal-notice').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('legal-notice').querySelector('.modal-content').classList.add('displayed');
    },300)
}


closeBtns.forEach((ele)=>{
    ele.addEventListener('click',(ele)=>{
        if(ele.target.parentElement.tagName==="BUTTON"){
            ele.target.parentElement.parentElement.querySelector('.modal-content').classList.remove('displayed');
            setTimeout(()=>{
                ele.target.parentElement.parentElement.classList.remove('poppedUp');
            },450)
        }
        else{
            ele.target.parentElement.querySelector('.modal-content').classList.remove('displayed');
            setTimeout(()=>{
                ele.target.parentElement.classList.remove('poppedUp');
            },450)
        }
    })
})

modals.forEach((ele)=>{
    ele.addEventListener('click',(ele)=>{
        if(ele.target.classList.contains('modal')){
            console.log(ele)
            ele.target.querySelector('.close').click();
        }
    })
})


//FORM
// let allInputs = document.querySelectorAll('input,textarea')
// let allInputsValues = [... allInputs].map(ele => ele.value);

// console.log(allInputs)
// console.log(allInputsValues)

// // allInputs.forEach( ele =>{
// //     ele.addEventListener('keyup',()=>{
// //         if (checkEmptyFields()===false){
// //             document.querySelector('#contact-form button').setAttribute('disabled', 'false');
// //         }
// //     })
// // })

// // Object.keys(allInputs).forEach((key)=>{
// //     allInputs[key].addEventListener('change',()=>{
// //         console.log('changing');
// //             // !checkEmptyFields() ? document.querySelector('#contact-form button').setAttribute('disabled', 'false') : '';
// //     })
// // })

// // const checkEmptyFields = () => ([... allInputs].map(ele => ele.value).includes(''));
