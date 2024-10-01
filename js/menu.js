// Função para expandir e recolher o menu
var menuItem = document.querySelectorAll('.item-menu')
var subMenu = document.querySelectorAll('.item-sub-menu')

function selectLink(){
    menuItem.forEach((item)=>
        item.classList.remove('active')
    )
    this.classList.add('active')
}

function selectLink2(){
    subMenu.forEach((item)=>
        item.classList.remove('active')
    )
    this.classList.add('active')
}

menuItem.forEach((item)=>item.addEventListener('click', selectLink))
subMenu.forEach((item)=>item.addEventListener('click', selectLink2))

var btnExp = document.querySelector('#exp-button')
var menuSide = document.querySelector('.side-menu')

function toggleMenu() {
    menuSide.classList.toggle('expand')
}

btnExp.addEventListener('click', toggleMenu)

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar', // Tipo de gráfico
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});