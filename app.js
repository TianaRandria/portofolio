const toTop = document.getElementById('toTop')

window.onscroll = function () {
  scrollFunction()
}

const overlay = document.getElementById('ordi-overlay')
overlay.addEventListener('click', () => {
  overlay.classList.remove('open')
  const currentModal = document.querySelector('.ordi-modal.open')
  if (currentModal != null) {
    currentModal.classList.remove('open')
  }
})
function handleModalFunction(attribute) {
  const overlay = document.getElementById('ordi-overlay')
  console.log('getAttribute', attribute)
  const currentModal = document.querySelector(`.${attribute}`)
  if (currentModal != null) {
    overlay.classList.add('open')
    currentModal.classList.add('open')
  }




}

var style = document.createElement('style')
style.type = 'text/css'
style.innerHTML = '.cssClass { display:none }'
document.getElementsByTagName('head')[0].appendChild(style)

const links = document.querySelectorAll('a[data-modal-open]')
links.forEach((link) => {
  console.log('link', link)
  const attribute = link.getAttribute('data-modal-open')
 // console.log(attribute)
  link.addEventListener('click', function () {
    handleModalFunction(attribute)
    console.log('link', link)
    console.log(attribute)

/********************
 * FUNCTION ANIMATE *
 ********************/


 let img_presentation = document.querySelector(' .'+attribute+'>.ordi-description>.ordi-description-tab>.scale-in-ver-top')
 let textDescription = document.querySelector(' .'+attribute+'>.ordi-description>.ordi-description-text')
 let width = img_presentation.offsetWidth
 let height = img_presentation.offsetHeight
 let pos1 = img_presentation.offsetTop
 let pos2 = img_presentation.offsetLeft
 console.log(width + ' - ' + height + ' x ' + pos1 + ' y ' + pos2)

 let widthT = textDescription.offsetWidth
 let heightT = textDescription.offsetHeight
 let pos1T = textDescription.offsetTop
 let pos2T = textDescription.offsetLeft

 let rect = document.createElement('div')
 let rectT = document.createElement('div')

 rect.style =
   'position:absolute;top:' +
   pos1 +
   'px;left:' +
   pos2 +
   'px;height:' +
   height +
   'px; width:' +
   width +
   'px; background:#fff '
 console.log(width + ' - ' + height + ' x ' + pos1 + ' y ' + pos2)

 rectT.style =
   'position:absolute;top:0px;right:0px;height:' +
   heightT +
   'px; width:' +
   widthT +
   'px; background:#fff; '
 console.log(widthT + ' - ' + heightT + ' x ' + pos1T + ' y ' + pos2T)

 document.querySelector('.'+attribute+' .ordi-description-tab').appendChild(rect)
 document.querySelector('.'+attribute+' .ordi-description-text').appendChild(rectT)

 rect.animate(
   [
     // étapes/keyframes
     { transform: 'translateY(0px)' },
     { transform: 'translateY(-' + height + 'px)' },
   ],
   {
     // temporisation
     duration: 330,
     iterations: 1,
   }
 )

 rectT.animate(
   [
     // étapes/keyframes
     { width: '100%' },
     { width: '0%' },
   ],
   {
     // temporisation
     duration: 330,
     iterations: 1,
   }
 )

 setTimeout(function () {
   rect.classList.add('cssClass')
 }, 300)
 setTimeout(function () {
   rectT.classList.add('cssClass')
 }, 300)




  })
})

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    toTop.style.display = 'block'
  } else {
    toTop.style.display = 'none'
  }
}

const box = document.querySelectorAll('.box')

box.forEach((item) => {
  let voir = item.firstElementChild.children[0].childNodes[1]

  item.addEventListener('mouseover', (event) => {
    voir.style.display = 'block'
  })

  item.addEventListener('mouseout', (event) => {
    voir.style.display = 'none'
  })
})

/**
 * Fonction qui s'active lors du click du bouton
 * aller en haut
 */
function backToTop() {
  /**
   * Version javascript simple
   */
  // console.log("Cette fonction est appellé")
  // const xCoord = 0
  // const yCoord = 0
  // window.scrollTo(xCoord, yCoord);

  /**
   * Version Jquery avec animation
   */
  $('html, body').animate({ scrollTop: 0 }, 'slow')
}

const form = document.getElementById('formulaire_envoyer')
form.addEventListener('submit', function (event) {
  event.preventDefault() /* stopper action par defaut : ity mapijanona azy aminy page ray fa tsy mivadika page hafa */

  const prenom = document.getElementById('prenom').value
  const nom = document.getElementById('nom').value
  const email = document.getElementById('email').value
  const objet = document.getElementById('objet').value
  const message = document.getElementById('message').value

  const newFormData =
    new FormData() /*FormData classe efa ao anaty JS ampiasaina rehefa mampiasa forme */
  newFormData.append('prenom', prenom)
  newFormData.append('nom', nom)
  newFormData.append('email', email)
  newFormData.append('objet', objet)
  newFormData.append('message', message)

  //http://portofoliocamping.test/
  const url = '/sendmail.php'

  fetch(url, {
    /* methode fetch na mirecuperer na mandefa mipassé donner client makany aminy serveur */
    method: 'POST',
    body: newFormData, // body data type must match "Content-Type" header
  })
    .then(function (response) {
      console.log('response', response)

      return response.json()
    })
    .then(function (result) {
      console.log('result', result)
    })
})

//.then =  rehefa avy eo manao console log dia avadika JSON ilay réponse azo avy aminy serveur
