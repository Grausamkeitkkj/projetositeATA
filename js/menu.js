// Função para expandir e recolher o menu
var menuItem = document.querySelectorAll('.item-menu')
var subMenu = document.querySelectorAll('.sub-menu')

function selectLink(){
    menuItem.forEach((item)=>
        item.classList.remove('active')
    )
    this.classList.add('active')
}

menuItem.forEach((item)=>item.addEventListener('click', selectLink))

var btnExp = document.querySelector('#exp-button')
var menuSide = document.querySelector('.side-menu')

function toggleMenu() {
    menuSide.classList.toggle('expand')
}

btnExp.addEventListener('click', toggleMenu)