let menu = document.getElementById('menu');
let mobileMenuLink = document.querySelectorAll('.menu-link');
let closeBtns = document.querySelectorAll('.close');
let modals = document.querySelectorAll('.modal');


const bodyScrollToggle = ()=>{
    document.body.classList.toggle('hide');
}

//MOBILE MENU
function togglemenu(){
    bodyScrollToggle();
    menu.classList.toggle('slideIn');
}

mobileMenuLink.forEach(ele=>{
    ele.addEventListener('click', ()=>{
        bodyScrollToggle()
        document.querySelector('.slideIn') && menu.classList.remove('slideIn');
    })
})


//CHANGE LANGUAGE

function changeLanguage(){
    bodyScrollToggle();
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
            document.querySelector('.fr').style.display = 'block';
            document.querySelector('.en').style.display = 'none';
            document.querySelector('.br').style.display = 'none';
            break;
        case 'English':
            document.querySelector('.fr').style.display = 'none';
            document.querySelector('.en').style.display = 'block';
            document.querySelector('.br').style.display = 'none';
            break;
        case 'Português':
            document.querySelector('.fr').style.display = 'none';
            document.querySelector('.en').style.display = 'none';
            document.querySelector('.br').style.display = 'block';
            break;
    }
    document.querySelector('#language-modal .close').click();
}



//MODALS
function openConfidentiality(){
    bodyScrollToggle();
    document.getElementById('confidentiality').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('confidentiality').querySelector('.modal-content').classList.add('displayed');
    },300)
}
function openTerms(){
    bodyScrollToggle();
    document.getElementById('terms').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('terms').querySelector('.modal-content').classList.add('displayed');
    },300)
}
function openLegalNotice(){
    bodyScrollToggle();
    document.getElementById('legal-notice').classList.add('poppedUp');
    setTimeout(()=>{
        document.getElementById('legal-notice').querySelector('.modal-content').classList.add('displayed');
    },300)
}


closeBtns.forEach((ele)=>{
    ele.addEventListener('click',(ele)=>{
        bodyScrollToggle()
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