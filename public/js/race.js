
const camel = document.getElementById('camel');
const horse = document.getElementById('horse');
const bambi = document.getElementById('bambi');
const turtle = document.getElementById('turtle');
const lion = document.getElementById('lion');
const zebra = document.getElementById('zebra');

const shootGun = document.getElementById('shootGun');
const loneRanger = document.getElementById('loneRanger');
const applause = document.getElementById('applause');

const winnerDiv = document.getElementById('winner');

let animals = [zebra, lion, turtle, bambi, horse, camel];
let interval;
let endLine = 1119;
let velocity;
let winner;

function StartRace()
{
    shootGun.play();
    loneRanger.play();
    interval = setInterval(Race, 10);
}

function Race()
{
    let names = ['Zebra', 'Lion', 'Turtle', 'Bambi', 'Horse', 'Camel']

    for (let i = 0; i < animals.length; i++)
    {
        let pos = animals[i].offsetLeft; // posicion eje vertical izquierda de la imagen
        velocity = Math.random() * 5;

        if(pos > 200 && pos < 300) {
            velocity = Math.random() * 3;
        }

        if(pos > 500 && pos < 600) {
            velocity = Math.random() * 3;
        }

        if(pos > endLine) {
            StopRace();
            applause.play();
            winner = names[i];
            winnerDiv.innerHTML = 'The winner is ' + winner;
        }

        animals[i].style.left = pos + velocity + 'px'
        
    }

}

function Execute()
{
    StartRace();
}

function StopRace()
{
    clearInterval(interval);
}

function ResetPos()
{
    animals.forEach(animal => {
        animal.style.left = 0;
    });
}