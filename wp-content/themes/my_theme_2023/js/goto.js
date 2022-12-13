console.log('goto');

const gotoLink = document.querySelector('p>a');
const linkAttribute = gotoLink.dataset.category; 

console.log(linkAttribute.toLowerCase());
sessionStorage.setItem('active-data', linkAttribute.toLowerCase());

