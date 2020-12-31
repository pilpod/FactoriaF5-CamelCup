const camel = document.getElementById('camel');
const horse = document.getElementById('horse');
const bambi = document.getElementById('bambi');
const turtle = document.getElementById('turtle');
const lion = document.getElementById('lion');
const zebra = document.getElementById('zebra');

function race()
{
    let i = 0;
    while (i < 2000) {
        document.body.innerText += i;
        i++
    }
}

function execute()
{
    // console.log('start')
    Concurrent.Thread.create(race)
}