


const btn = document.querySelector('.btn-1');
btn.addEventListener('click', printer)

function printer(){
    const fsc = document.getElementById('FSCmarks').value
    const entrytest = document.getElementById('entrytest').value
    console.log(isNaN(fsc), isNaN(entrytest))
    if(1100>fsc>0 && 100>entrytest>0 && isNaN(fsc)==false && isNaN(entrytest)==false ){
    const hidden = document.querySelector('.percentageValue')
    hidden.innerHTML = 'Your aggregate is '+(((fsc/1100)*100)*0.5 +  entrytest/2).toFixed(4) + "%"
    hidden.style.display = 'block'}
    else{
        alert('Please Enter correct values! ')
        
    }
}

const hamburger = document.querySelector('.wrapper-hamburger')
hamburger.addEventListener('click', opennav)

var checker = false

function opennav(){
    var width = window.innerWidth

    const ul = (document.querySelector('.navlist').children)
    if (checker==false){
        for (let i = 0; i<ul.length; i++){
            ul[i].style.display = 'block'

        }
        checker=true}
    else{
        for (let i = 0; i<ul.length; i++){
            ul[i].style.display = 'none'

        }
        checker=false
    }
}


function changeul(){
    if (window.innerWidth>590){
        const ul = (document.querySelector('.navlist').children)
        for (let i = 0; i<ul.length; i++){
            ul[i].style.display = 'inline-block'

        }
    
    }
    else if(window.innerWidth<590){
        console.log(window.innerWidth)
        const ul = (document.querySelector('.navlist').children)
        for (let i = 0; i<ul.length; i++){
            ul[i].style.display = 'none'

        }
    }
}

window.addEventListener('resize', changeul)
