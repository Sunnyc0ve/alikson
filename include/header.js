//ХЕДЕР
const MenuButton=document.querySelector('#MenuButton')
const Menu=document.querySelector('.Header-Menu_mobile_hidden')

MenuButton.addEventListener('click',()=>{
  if(Menu.getAttribute('style')==undefined){
    Menu.setAttribute('style','transform: translateY(0px);')
    MenuButton.querySelector('img').setAttribute('src','img/closeMenu.svg')
    document.querySelector('header').setAttribute('style','border-radius: 0px; z-index:100;')
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
    const height=UnderMenu.querySelector('ul').clientHeight
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

document.querySelector('#DirectionsMenuBtn').addEventListener('mouseover',()=>{
  document.querySelector('.Directions_hidden').setAttribute('style','visibility: visible; opacity: 1;')
})
document.querySelector('#DirectionsMenuBtn').addEventListener('mouseout',()=>{
  document.querySelector('.Directions_hidden').removeAttribute('style')
})
//ХЕДЕР





//ФУТЕР
const FooterMenu=document.querySelector('.FooterContainer_mobile')

FooterMenu.querySelectorAll('button[data]').forEach(e=>{
  e.addEventListener('click',()=>{
    const data=e.getAttribute('data')
    const UnderMenu=document.querySelectorAll(`[data=${data}]`)[1]
    const height=UnderMenu.querySelector('ul').clientHeight+10
    if(UnderMenu.getAttribute('style')==undefined){
      document.querySelectorAll('.FooterContainer_mobile [active]').forEach(e=>{
        e.removeAttribute('active')
        e.removeAttribute('style')
      })
      UnderMenu.setAttribute('style',`height:${height}px;`)
      UnderMenu.setAttribute('active','')
    }else{
      UnderMenu.removeAttribute('style')
    }
  })
})
//ФУТЕР






//Плавный якорь
document.querySelectorAll('a[href^="#"]').forEach(anchor => {

  anchor.addEventListener('click', function (e) {
      if(document.querySelector('body').getAttribute('style')!=null){
        MenuButton.click()
      }
      
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});