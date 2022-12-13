console.log('hello');
const buttons = document.querySelectorAll('.tab-head-item');
//let active_button = document.querySelector('.tab-head-item.active');
//let active_tab = document.querySelector('.tab-item.active');
//let active_data = active_button.dataset.category;
let active_data = sessionStorage.getItem('active-data') ? sessionStorage.getItem('active-data') : 'pizza';
let active_button = document.querySelector(`button[data-category=${active_data}]`);
let active_tab = document.querySelector(`div[data-category=${active_data}]`);

active_button.classList.add('active');
active_tab.classList.add('active');

function handleChangeTabs({target}) {
    console.log('click', target);
    active_button.classList.remove('active');
    target.classList.add('active');
    active_button = target;
    active_data = active_button.dataset.category;
    sessionStorage.setItem('active-data', active_data);
    console.log(active_data);
    active_tab.classList.remove('active');
    active_tab = document.querySelector(`#tabs-body > [data-category=${active_data}]`);
    console.log('active tab is', active_tab);
    active_tab.classList.add('active');
}

buttons.forEach(button => {
    button.addEventListener('click', handleChangeTabs);
});




