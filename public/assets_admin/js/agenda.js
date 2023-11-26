// function getMonthName(monthIndex) {
//     const months = [
//         "Enero",
//         "Febrero",
//         "Marzo",
//         "Abril",
//         "Mayo",
//         "Junio",
//         "Julio",
//         "Agosto",
//         "Septiembre",
//         "Octubre",
//         "Noviembre",
//         "Diciembre",
//     ];
//     return months[monthIndex];
// }

// const currentDate = new Date();
// let currentMonth = currentDate.getMonth();
// let currentYear = currentDate.getFullYear();

// const monthYearElement = document.getElementById("monthYear");
// const prevMonthButton = document.getElementById("prevMonth");
// const nextMonthButton = document.getElementById("nextMonth");
// const calendarBody = document.getElementById("calendarBody");

// prevMonthButton.addEventListener("click", showPrevMonth);
// nextMonthButton.addEventListener("click", showNextMonth);

// function showCalendar() {
//     const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
//     const startingDay = (firstDayOfMonth.getDay() - 1 + 7) % 7; // Ajuste para que el lunes sea el inicio
//     const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

//     monthYearElement.textContent = `${getMonthName(
//         currentMonth
//     )} ${currentYear}`;
//     calendarBody.innerHTML = "";

//     let dayIndex = 1 - startingDay; // Ajuste para empezar desde el primer lunes antes del día 1 del mes

//     for (let i = 0; dayIndex <= daysInMonth; i++) {
//         const weekElement = document.createElement("tr");

//         for (let j = 0; j < 7; j++) {
//             const dayElement = document.createElement("td");
//             const dayContent = document.createElement("p");

//             if (dayIndex <= 0 || dayIndex > daysInMonth) {
//                 // Rellenar celdas vacías antes del primer día y después del último día
//                 dayElement.classList.add("empty");
//             } else {
//                 dayElement.textContent = dayIndex;

//                 dayContent.textContent = `text dinamic ${12}`;

//                 dayElement.appendChild(dayContent);
//                 if (
//                     dayIndex === currentDate.getDate() &&
//                     currentMonth === currentDate.getMonth() &&
//                     currentYear === currentDate.getFullYear()
//                 ) {
//                     dayElement.classList.add("current-day");
//                 }
//             }

//             weekElement.appendChild(dayElement);
//             dayIndex++;
//         }

//         calendarBody.appendChild(weekElement);
//     }
// }

// function showPrevMonth() {
//     currentMonth -= 1;
//     if (currentMonth < 0) {
//         currentMonth = 11;
//         currentYear -= 1;
//     }
//     showCalendar();
// }

// function showNextMonth() {
//     currentMonth += 1;
//     if (currentMonth > 11) {
//         currentMonth = 0;
//         currentYear += 1;
//     }
//     showCalendar();
// }

//showCalendar(currentDate, currentMonth, currentYear);
// jQuery.ajax({
//     url: `${urlBase}admin-panel/editar-partido/`,
//     type: "GET",
//     data: {
//         formData,
//     },
//     headers: {
//         "X-CSRF-TOKEN": csrfToken,
//     },
//     beforeSend: function () {},
//     success: function (response) {
//     },
// });
!(function ($) {
    "use strict";
})(window.jQuery);
