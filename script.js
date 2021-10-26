const botao = document.querySelector('.arrow')
const about = document.querySelector('#about')

botao.addEventListener('click', function () {
  window.scrollTo({
    top: about.offsetTop,
    behavior: 'smooth'
  })
})

/*  abre e fecha o menu quando clicar no icone: hamburguer e x */
const nav = document.querySelector('nav')
const toggle = document.querySelectorAll('nav .toggle')

for (const element of toggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
}

/* quando clicar em um item do menu, esconder o menu */
const links = document.querySelectorAll('nav ul li a')

for (const link of links) {
  link.addEventListener('click', function () {
    nav.classList.remove('show')
  })
}
