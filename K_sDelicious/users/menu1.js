const totalitem = document.getElementById('total-item');
let x = 0;

document.querySelectorAll('.cartwish').forEach(i => i.addEventListener("click",function(e){
let a = Number(totalitem.innerHTML) + 1;
totalitem.innerText = a;
localStorage.setItem("totalitem",a);
}));

b = localStorage.getItem('totalitem');
totalitem.innerText = b;
if (!localStorage.getItem('totalitem')) {
    totalitem.innerText = 0;
}






