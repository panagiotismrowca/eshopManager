homepageButton = document.querySelector("#homeButton");
cartButton = document.querySelector("#cartButton");
editButton = document.querySelector("#editButton");

const editButtonAction = () =>{
    document.querySelector(".editProfile").getElementsByClassName.display = "block";
}

homepageButton.addEventListener("click",homepageButtonAction);
cartButton.addEventListener("click",cartButtonAction);
editButton.addEventListener("click",editButtonAction);