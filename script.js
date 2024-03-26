
function clicarLista(){
    const lista = document.querySelector('.item2')

    lista.target.classList.add('show')
    console.log("works")

    
}

const myObserver = new IntersectionObserver( (entries) => {
    entries.forEach( (tudo) => {
        if(tudo.isIntersecting) {
            tudo.target.classList.add('show')
        }else{
            tudo.target.classList.remove('show')
        }
    })

} )

const elements = document.querySelectorAll('.hidden')


elements.forEach( (element)  => myObserver.observe(element))
