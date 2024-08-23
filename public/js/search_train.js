function updateTrainDropdownList(
    inputValue,
    inputElement,
    dropdownListElement,
    filter,
    stationDisplayElement // Thêm tham số này
) {
    dropdownListElement.innerHTML = "";
    const filteredCities = trainStations.filter((city) =>
        city.station_name.toLowerCase().includes(filter.toLowerCase())
    );
    filteredCities.forEach((city) => {
        const item = document.createElement("li");
        item.className = "custom-dropdown-item";
        item.innerHTML = `
                        <div class="custom-item-container">
                            <div class="custom-icon-section d-flex align-items-center ps-1">
                                <i class="material-icons-outlined text-secondary">train</i>
                            </div>
                            <div class="custom-content-section">
                                <div class="custom-city-title"><b>${city.station_name} (Tỉnh/TP)</b></div>
                                <p class="text-secondary">${city.station_code} - Ga ${city.station_name}</p></div>
                        </div>
                    `;
        item.addEventListener("mousedown", function (event) {
            event.preventDefault();
            inputElement.value = city.station_name;
            inputValue.value = city.station_code;
            stationDisplayElement.textContent = `${city.station_code} - Ga ${city.station_name}`; // Cập nhật thẻ <p>
            dropdownListElement.parentElement.style.display = "none";
        });
        dropdownListElement.appendChild(item);
    });
}

function setupTrainInput(inputValue, inputElement, dropdownMenu, dropdownList, stationDisplayElement) {
    inputElement.addEventListener("focus", function () {
        dropdownMenu.style.display = "block";
        updateTrainDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value,
            stationDisplayElement
        );
    });

    inputElement.addEventListener("blur", function () {
        setTimeout(function () {
            dropdownMenu.style.display = "none";
        }, 200);
    });

    inputElement.addEventListener("input", function () {
        updateTrainDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value,
            stationDisplayElement
        );
    });

    inputElement.addEventListener("click", function () {
        dropdownMenu.style.display = "block";
        updateTrainDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value,
            stationDisplayElement
        );
    });
}

$(document).on("mousedown", ".custom-dropdown-item", function () {
    $(this).closest(".train-dropdown-menu").hide();
});

// train Form
const trainFrom = document.getElementById("train_from");
const trainFromInput = document.getElementById("train_from_input");
const trainFromDropdownMenu = document.querySelector(
    ".custom-train-from-select-wrapper .train-dropdown-menu"
);
const trainFromDropdownList = document.getElementById("dropdown_list_train_from");
const trainFromStationDisplay = document.querySelector(".custom-input-container #trainFrom_desciption"); // Chọn thẻ <p> để hiển thị station_code

setupTrainInput(trainFrom, trainFromInput, trainFromDropdownMenu, trainFromDropdownList, trainFromStationDisplay);

// train To 
const trainTo = document.getElementById("train_to");
const trainToInput = document.getElementById("train_to_input");
const trainToDropdownMenu = document.querySelector(
    ".custom-train-to-select-wrapper .train-dropdown-menu"
);
const trainToDropdownList = document.getElementById("dropdown_list_train_to");
const trainToStationDisplay = document.querySelector(".custom-input-container #trainTo_desciption"); // Chọn thẻ <p> để hiển thị station_code
setupTrainInput(trainTo, trainToInput, trainToDropdownMenu, trainToDropdownList, trainToStationDisplay);
// Hoán đổi giá trị của hai ô nhập liệu
const trainSwapButton = document.getElementById("train_swap_button");
trainSwapButton.addEventListener("click", function () {
    const fromValue = trainFromInput.value;
    const toValue = trainToInput.value;
    trainFromInput.value = toValue;
    trainToInput.value = fromValue;
    //Hiden value
    const fromValHD = trainFrom.value;
    const toValHD = trainTo.value;
    trainFrom.value = toValHD;
    trainTo.value = fromValHD;
});

// Khởi tạo danh sách dropdown ban đầu
updateTrainDropdownList(trainFrom, trainFromInput, trainFromDropdownList, "");
updateTrainDropdownList(trainTo, trainToInput, trainToDropdownList, "");

// Config
const vn = {
    days: [
        "Chủ Nhật",
        "Thứ Hai",
        "Thứ Ba",
        "Thứ Tư",
        "Thứ Năm",
        "Thứ Sáu",
        "Thứ Bảy",
    ],
    daysShort: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
    daysMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
    months: [
        "Tháng Một",
        "Tháng Hai",
        "Tháng Ba",
        "Tháng Tư",
        "Tháng Năm",
        "Tháng Sáu",
        "Tháng Bảy",
        "Tháng Tám",
        "Tháng Chín",
        "Tháng Mười",
        "Tháng Mười Một",
        "Tháng Mười Hai",
    ],
    monthsShort: [
        "Th1",
        "Th2",
        "Th3",
        "Th4",
        "Th5",
        "Th6",
        "Th7",
        "Th8",
        "Th9",
        "Th10",
        "Th11",
        "Th12",
    ],
    today: "Hôm Nay",
    clear: "Bỏ chọn ngày về",
    dateFormat: "dd/mm/yyyy",
    timeFormat: "HH:ii",
    firstDay: 1,
};

function convertToSlug(text) {
    return text
        .toLowerCase()
        .replace(/á|à|ả|ã|ạ|â|ấ|ầ|ẩ|ẫ|ậ|ă|ắ|ằ|ẳ|ẵ|ặ/g, "a")
        .replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/g, "e")
        .replace(/i|í|ì|ỉ|ĩ|ị/g, "i")
        .replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/g, "o")
        .replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/g, "u")
        .replace(/ý|ỳ|ỷ|ỹ|ỵ/g, "y")
        .replace(/đ/g, "d")
        .replace(/[^a-z0-9\s]/g, "") // Loại bỏ các ký tự đặc biệt
        .replace(/\s+/g, "-") // Thay thế khoảng trắng bằng dấu gạch ngang
        .replace(/-+/g, "-"); // Loại bỏ các dấu gạch ngang thừa
}
function getFormattedDate(dayInput) {
    const today = dayInput ? new Date(dayInput) : new Date();
    const dayName = vn.daysShort[today.getDay()];
    const date = today.getDate();
    const month = today.getMonth() + 1;
    const year = today.getFullYear();
    const formattedDate = `${dayName}, ${date
        .toString()
        .padStart(2, "0")}/${month.toString().padStart(2, "0")}/${year}`;
    return formattedDate;
}

$(".date-input.date-default-input").attr("value", getFormattedDate(dateTo));
$(".date-input.date-default-input").attr("placeholder", getFormattedDate());
$(".date-input.data-add-input").attr("value",dateFrom != "" ? getFormattedDate(dateFrom) : "");
$(".date-input.data-add-input").attr("placeholder", "Thêm ngày về");
$(document).ready(function () {
    let startToDay = new Date();
    let dataSelected = dateTo ? dateTo : startToDay;
    new AirDatepicker(".date-default-input", {
        locale: vn,
        dateFormat: "E, dd/MM/yyyy",
        minDate: startToDay,
        autoClose: true,
        // isMobile: true,
        selectedDates: [dateTo ? dateTo : startToDay],
        onRenderCell: function ({ date, cellType }) {
            if (cellType === "day") {
                const lunarDate = moonTime({
                    year: date.getFullYear(),
                    month: date.getMonth() + 1,
                    day: date.getDate(),
                });
                return {
                    html: `
                        <div class="wrap-cell">
                            <div class="fw-bold">${date.getDate()}</div>
                            <div class="lunar-date">${lunarDate.day}</div>
                        </div>
                        <div class="price-cell">-</div>
                        `,
                };
            }
        },
        onSelect: function ({ date, formattedDate }) {
            const dayOfWeek = vn.daysShort[date.getDay()];
            const formattedWithDay = `${dayOfWeek}, ${formattedDate}`;
            dataSelected = date;
            $(this).val(formattedWithDay);
        },
    });

    new AirDatepicker(".data-add-input", {
        locale: vn,
        dateFormat: "E, dd/MM/yyyy",
        autoClose: true,
        minDate: dataSelected,
        buttons: ['clear'],
        // isMobile: true,
        onRenderCell: function ({ date, cellType }) {
            if (cellType === "day") {
                const lunarDate = moonTime({
                    year: date.getFullYear(),
                    month: date.getMonth() + 1,
                    day: date.getDate(),
                });
                return {
                    html: `
                        <div class="wrap-cell">
                            <div class="fw-bold">${date.getDate()}</div>
                            <div class="lunar-date">${lunarDate.day}</div>
                        </div>
                        <div class="price-cell">-</div>
                        `,
                };
            }
        },
        onSelect: function ({ date, formattedDate }) {
            const dayOfWeek = vn.daysShort[date.getDay()];
            const formattedWithDay = `${dayOfWeek}, ${formattedDate}`;
            $(this).val(formattedWithDay);
        },
    });
});

$("#train_search").click(() => {
    var trainTo = $("#train_to").val();
    var trainToPlace = $("#train_to_input").val();
    var trainFrom = $("#train_from").val();
    var trainFromPlace = $("#train_from_input").val();
    var dateTo = $("#train_date_to").val();
    var dateFrom = $("#train_date_from").val();

    // Tính tổng số lượng người
    var totalPassengers = 
        parseInt($("#numberValueAdult").val()) +
        parseInt($("#numberValueChildren").val()) +
        parseInt($("#numberValueSeniors").val()) +
        parseInt($("#numberValueStudent").val()) +
        parseInt($("#numberValueUnion_member").val());

    var data = {
        train_from: trainFrom,
        train_to: trainTo,
        date_from: dateFrom,
        date_to: dateTo,
        total_passengers: totalPassengers 
    };
    // console.log(data);
    
    var url = "/ve-tau-hoa/" + 
              convertToSlug(trainFromPlace) + 
              "-to-" + 
              convertToSlug(trainToPlace);

    var queryString = $.param(data);
    url += "?" + queryString;

    window.location.href = url;
});
