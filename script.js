// ============= Открыть модальное окно контактов =======
var btnOpenContact = document.querySelector(".openContacts");
btnOpenContact.onclick = function () {
    var contactsModal = document.querySelector("#contacts-modal");
    contactsModal.style.display = "block";
};

// кнопка закрытия модального
var closeBtn = document.querySelector(".closeModal");
closeBtn.onclick = function () {
    var contactsModal = document.querySelector("#contacts-modal");
    contactsModal.style.display = "none";
};


// ======================================================================================================
// кнопка входа
// var enter = document.querySelector(".enter");
// enter.onclick = function () {
//     var enterField = document.querySelector(".enterField");
//     enterField.style.display = "block";
// };

// // скрытие модалки входа 
// var closeBtn = document.querySelector(".closeEnter");
// closeBtn.onclick = function () {
//     var enterField = document.querySelector(".enterField");
//     enterField.style.display = "none";
// };
//============================= Убираем предупреждение  ==================
// var warning = document.querySelector(".warning");
// function show() {
//     if (class "enter" = "EXIT") {
//         var enterField = document.querySelector(".enterField");
//         enterField.style.display = "block";
//     }
// };