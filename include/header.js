//ХЕДЕР
const MenuButton=document.querySelector('#MenuButton')
const Menu=document.querySelector('.Header-Menu_mobile_hidden')

MenuButton.addEventListener('click',()=>{
  if(Menu.getAttribute('style')==undefined){
    Menu.setAttribute('style','transform: translateY(0px);')
    MenuButton.querySelector('img').setAttribute('src','img/closeMenu.svg')
    document.querySelector('header').setAttribute('style','border-radius: 0px; z-index:100;')
    document.querySelector('body').setAttribute('style','overflow:hidden;')
  }else{
    Menu.removeAttribute('style')
    MenuButton.querySelector('img').setAttribute('src','img/menu.svg')
    document.querySelector('header').removeAttribute('style')
    document.querySelector('body').removeAttribute('style')
  }
})

Menu.querySelectorAll('button[data]').forEach(e=>{
  e.addEventListener('click',()=>{
    const data=e.getAttribute('data')
    const UnderMenu=document.querySelectorAll(`[data=${data}]`)[1]
    const height=UnderMenu.querySelector('div').clientHeight
    if(UnderMenu.getAttribute('style')==undefined){
      document.querySelectorAll('.Header-Menu_mobile_hidden [active]').forEach(e=>{
        e.removeAttribute('active')
        e.removeAttribute('style')
      })
      UnderMenu.setAttribute('style',`height:${height}px; margin-top:17px;`)
      e.querySelector('img').setAttribute('style','transform:rotate(90deg);')
      UnderMenu.setAttribute('active','')
      e.querySelector('img').setAttribute('active','')
    }else{
      UnderMenu.removeAttribute('style')
      e.querySelector('img').removeAttribute('style')
    }
  })
})

document.querySelectorAll('.LangContainer button').forEach(e=>{
  e.addEventListener('click',()=>{
    if(e.getAttribute('class')==undefined){
      document.querySelector('.LangContainer .Active').removeAttribute('class')
      e.setAttribute('class','Active')
    }
  })
})
//ХЕДЕР