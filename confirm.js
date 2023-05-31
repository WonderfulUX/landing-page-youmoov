window.addEventListener("load", (event) => {
    applyLanguage(localStorage.getItem('lang'));
  });

function applyLanguage(lang){
    document.querySelector('.success').classList.remove('dn');
    switch (lang){
        case 'fr':
            document.querySelector('.fr').classList.remove('dn');
            document.querySelector('.en').classList.add('dn');
            document.querySelector('.pt').classList.add('dn');
            break;
        case 'en':
            document.querySelector('.fr').classList.add('dn');
            document.querySelector('.en').classList.remove('dn');
            document.querySelector('.pt').classList.add('dn');
            break;
        case 'pt':
            document.querySelector('.fr').classList.add('dn');
            document.querySelector('.en').classList.add('dn');
            document.querySelector('.pt').classList.remove('dn');
            break;
    }
    setTimeout(()=>{
        document.querySelector('.success').classList.add('oo');
    },300)
}