// JS da página do report

// Configurações do sistema de cabeçalho lateral
const menuBtn = document.querySelectorAll('.menu-btn');
const menu = document.querySelector('.menu');
const links = document.querySelectorAll('.menu li');

menuBtn.forEach(btn => {
    btn.addEventListener('click', sideNavToggle);
});

function sideNavToggle() {
    let delay = 100;
    menu.classList.toggle('menu-open');

    setTimeout(() => {
        resetAnimations();
        }, delay * (links.length + 1));

        links.forEach(link => {
            
            link.style.opacity = "0";
            link.style.animation = "slideIn 400ms ease-in-out forwards";
            link.style.animationDelay = delay + "ms";

            delay += 100;
        });

        function resetAnimations() {
            links.forEach(link => {

                link.style.animation = "none";
                link.style.opacity = "1";
            });
        }
}

// Configurações do sistema de uploader
let file = document.getElementById('upload');
let button = document.getElementsByTagName('button');
let progress = document.querySelector('progress');
let p_i = document.querySelector('.progress-indicator');
let load = 0;
let proces =  "";


file.oninput = ()=>{
  let filename = file.files[0].name;
  let extension = filename.split('.').pop();
  let filesize = file.files[0].size;

  if (filesize <= 1000000) {
    filesize = (filesize/1000).toFixed(2) + 'kb';
  }
  if (filesize == 1000000 || filesize <= 1000000000) {
    filesize = (filesize/1000000).toFixed(2) + 'mb';
  }
  if (filesize == 1000000000 || filesize <= 1000000000000) {
    filesize = (filesize/1000000000).toFixed(2) + 'gb';
  }
  document.querySelector('label').innerText = filename;
  document.querySelector('.ex').innerText = extension;
  document.querySelector('.size').innerText = filesize;
  getFile(filename);
}

let upload = ()=>{
  if (load >= 100) {
    clearInterval(proces);
    button[0].classList.remove('active');
    }
    else
    {
        load++;
          progress.value = load;
          
          button[1].onclick = e=>{
              e.preventDefault();
              clearInterval(proces);
              document.querySelector('.pr').style.display = "none";
              button[1].style.visibility = 'hidden';
              button[0].classList.remove('active');
          }
        }
      }

function getFile(fileName) {
  if (fileName) {
    document.querySelector('.pr').style.display = "block";
    load = 0;
    progress.value = 0;
    p_i.innerText = '';
    button[0].onclick = e=>{
      e.preventDefault();
      button[0].classList.add('active');
      button[1].style.visibility = 'visible';
      proces = setInterval(upload, 100);
    }
  }
}

function msg(){ 
  
  var id_usuario = $_SESSION['id_usuario'];

      if(!id_usuario){
          window.alert("Favor preencher todos os campos");
      } else{
          window.location.href="../";
  }
}
