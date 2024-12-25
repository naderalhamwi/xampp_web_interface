document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modal");
    const addCardButtons = document.querySelectorAll("#add-card-btn, #add-card-btn-2");
    const closeBtn = document.querySelector(".btn-close");

    addCardButtons.forEach(button => {
        button.addEventListener("click", () => {
            modal.style.display = "flex";
        });
    });
    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });
    
});
