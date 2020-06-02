const checkb = document.querySelector('.check');
const checkbox = document.querySelector('.fa-check');
const infoButton = document.querySelector('.more-info-btn');
const chevron = document.querySelector('.fa-chevron-up');
const moreInfo = document.querySelector('.more-info');

checkb.addEventListener('click', () => {
    checkbox.classList.toggle('checked'); 
}); 

infoButton.addEventListener('click', () => {
    chevron.classList.toggle('flip'); 
    moreInfo.classList.toggle('display');
}); 