const optionMenu = document.querySelector(".este"),
    selectBtn = optionMenu.querySelector(".spoon"),
    options = optionMenu.querySelectorAll(".opcion"),
    sBtn_text = optionMenu.querySelector(".texts");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("activo"));

options.forEach(opcion =>{
    opcion.addEventListener("click", ()=>{
        let selectedOption = opcion.querySelector(".opcion-text").innerText;
        sBtn_text.innerText = selectedOption;

        optionMenu.classList.remove("activo");
    })
})