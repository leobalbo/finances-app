const openModalButton = document.getElementById("openModalButton");
const closeModalButton = document.getElementById("closeModalButton");
const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");

// Mostrar o modal
openModalButton.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

// Fechar o modal ao clicar no "X"
closeModalButton.addEventListener("click", () => {
    modal.classList.add("hidden");
});

// Fechar o modal ao clicar fora do conteúdo do modal
modal.addEventListener("click", (event) => {
    if (!modalContent.contains(event.target)) {
        modal.classList.add("hidden");
    }
});