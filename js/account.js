// JS da página do account
const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            
                password.type = "password";
                eyeIcon.classList.replace("bx-show", "bx-hide");
        })
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault();
       forms.classList.toggle("show-signup");
    })
})

// Iluminária e interruptor

    var btn = document.getElementById("btn");
    var light = document.getElementById("light");
        
    function toggleBtn(){
        btn.classList.toggle("active");
        light.classList.toggle("on");
    }