@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Agenda</h1>

            <div class="calendar">
                <div class="header">
                    <button id="prevMonth">Prev</button>
                    <h1 id="monthYear"></h1>
                    <button id="nextMonth">Next</button>
                </div>
                <table class="days">
                    <thead>
                        <tr>
                            <th>Lun</th>
                            <th>Mar</th>
                            <th>Mié</th>
                            <th>Jue</th>
                            <th>Vie</th>
                            <th>Sáb</th>
                            <th>Dom</th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody"></tbody>
                </table>
            </div>

        </div><!-- end col-->
    </div> <!-- end row-->
@endsection

<style>
    /* Estilos generales */
    .calendar {
        font-family: Arial, sans-serif;
        width: 100%;
        margin: 20px auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 10px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    button {
        padding: 5px 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
        border-radius: 3px;
        background-color: #f0f0f0;
    }

    button:hover {
        background-color: #e0e0e0;
    }

    .days {
        width: 100%;
        border-collapse: collapse;
    }

    th{
        text-align: center;
    }
    th,
    td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f0f0f0;
    }

    .current-day {
        background-color: #ffc;
        /* Otros estilos para resaltar el día actual */
    }

    .empty {
        visibility: hidden;
    }
</style>

<script>
    setTimeout(() => {
        const currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();

        const monthYearElement = document.getElementById('monthYear');
        const prevMonthButton = document.getElementById('prevMonth');
        const nextMonthButton = document.getElementById('nextMonth');
        const calendarBody = document.getElementById('calendarBody');

        prevMonthButton.addEventListener('click', showPrevMonth);
        nextMonthButton.addEventListener('click', showNextMonth);

        function showCalendar() {
            const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
            const startingDay = (firstDayOfMonth.getDay() - 1 + 7) % 7; // Ajuste para que el lunes sea el inicio

            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            monthYearElement.textContent = `${getMonthName(currentMonth)} ${currentYear}`;
            calendarBody.innerHTML = '';

            let dayIndex = 1 - startingDay; // Ajuste para empezar desde el primer lunes antes del día 1 del mes

            for (let i = 0; dayIndex <= daysInMonth; i++) {
                const weekElement = document.createElement('tr');

                for (let j = 0; j < 7; j++) {
                    const dayElement = document.createElement('td');
                    const dayContent = document.createElement('p');

                    if (dayIndex <= 0 || dayIndex > daysInMonth) {
                        // Rellenar celdas vacías antes del primer día y después del último día
                        dayElement.classList.add('empty');
                    } else {
                        dayElement.textContent = dayIndex;
                        
                        dayContent.textContent = `text dinamic ${12}`;

                        dayElement.appendChild(dayContent)
                        if (
                            dayIndex === currentDate.getDate() &&
                            currentMonth === currentDate.getMonth() &&
                            currentYear === currentDate.getFullYear()
                        ) {
                            dayElement.classList.add('current-day');
                        }
                    }

                    weekElement.appendChild(dayElement);
                    dayIndex++;
                }

                calendarBody.appendChild(weekElement);
            }
        }

        function showPrevMonth() {
            currentMonth -= 1;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear -= 1;
            }
            showCalendar();
        }

        function showNextMonth() {
            currentMonth += 1;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear += 1;
            }
            showCalendar();
        }

        function getMonthName(monthIndex) {
            const months = [
                'Enero', 'Febrero', 'Marzo', 'Abril',
                'Mayo', 'Junio', 'Julio', 'Agosto',
                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ];
            return months[monthIndex];
        }

        showCalendar();
    }, 500);
</script>
