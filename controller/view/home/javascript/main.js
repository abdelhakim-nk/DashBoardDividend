/*======= SCROLL MENU ======*/
const showMenu = (toggleId, navbarId, bodyId)=>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)
    bodypadding = document.getElementById(bodyId)

    if (toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('expander')

            bodypadding.classList.toggle('body-pd')
        })
    }
}
showMenu('nav-toggle','navbar', 'body-pd')

/*========== LINK ACTIVE ============*/
const linkColor = document.querySelectorAll('.nav_link')
function colorLink(){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))



 document.getElementById('avatar').addEventListener("submit", function (){
     document.location.reload()
 })