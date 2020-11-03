const mobileMenu = document.querySelector("#mobileMenu");
const sidebar = document.querySelector("#sidebar");
const navLinks = document.querySelector("#navLinks");
let menuShown = false;
let show = false;
let age = document.querySelector("#age");

getAge();

function getAge(){
    let birthYear = 1996;
    let currentDate = new Date;
    currentDate = currentDate.getFullYear();
    let myAge = (currentDate-birthYear);
    age.innerHTML = myAge;
}


mobileMenu.onclick = showMenu;

function showMenu(){
    if(menuShown == true){
        sidebar.classList.add('sidebar-hidden');
        sidebar.classList.remove('sidebar-shown');
        navLinks.classList.add('animate__slideOutUp');
        navLinks.classList.remove('animate__slideInDown'); 
        menuShown = false;
    } else if(menuShown == false){
                sidebar.classList.add('sidebar-shown');
                sidebar.classList.remove('sidebar-hidden');
                navLinks.classList.add('animate__slideInDown');
                navLinks.classList.remove('animate__slideOutUp');
                menuShown = true;
    }
}
   
