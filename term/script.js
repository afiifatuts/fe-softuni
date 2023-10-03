document.addEventListener("DOMContentLoaded", function () {
    const showPopupButton = document.getElementById("showPopupButton");
    const popup = document.getElementById("popup");
    const closePopupButton = document.getElementById("closePopupButton");

    showPopupButton.addEventListener("click", function () {
        popup.classList.remove("hidden");
    });

    closePopupButton.addEventListener("click", function () {
        popup.classList.add("hidden");
    });
});
