function updateBusDropdownList(
    inputValue,
    inputElement,
    dropdownListElement,
    filter
) {
    dropdownListElement.innerHTML = "";
    const filteredCities = busCities.filter((city) =>
        city.name.toLowerCase().includes(filter.toLowerCase())
    );
    filteredCities.forEach((city) => {
        const item = document.createElement("li");
        item.className = "custom-dropdown-item";
        item.innerHTML = `
                        <div class="custom-item-container">
                        <div class="custom-icon-section">
                            <i class="fa-solid fa-bus-simple"></i>
                        </div>
                        <div class="custom-content-section">
                            <div class="custom-city-title"><b>${city.name}</b></div>
                        </div>
                        </div>
                    `;
        item.addEventListener("mousedown", function (event) {
            event.preventDefault();
            inputElement.value = city.name;
            inputValue.value = city.id;
            dropdownListElement.parentElement.style.display = "none";
        });
        dropdownListElement.appendChild(item);
    });
}

function setupBusInput(inputValue, inputElement, dropdownMenu, dropdownList) {
    inputElement.addEventListener("focus", function () {
        dropdownMenu.style.display = "block";
        updateBusDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value
        );
    });

    inputElement.addEventListener("blur", function () {
        setTimeout(function () {
            dropdownMenu.style.display = "none";
        }, 200);
    });

    inputElement.addEventListener("input", function () {
        updateBusDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value
        );
    });

    inputElement.addEventListener("click", function () {
        dropdownMenu.style.display = "block";
        updateBusDropdownList(
            inputValue,
            inputElement,
            dropdownList,
            inputElement.value
        );
    });
}

$(document).on("mousedown", ".custom-dropdown-item", function () {
    $(this).closest(".bus-dropdown-menu").hide();
});

const busFrom = document.getElementById("bus_from");
const busFromInput = document.getElementById("bus_from_input");
const busFromDropdownMenu = document.querySelector(
    ".custom-bus-from-select-wrapper .bus-dropdown-menu"
);
const busFromDropdownList = document.getElementById("dropdown_list_bus_from");

setupBusInput(busFrom, busFromInput, busFromDropdownMenu, busFromDropdownList);

const busTo = document.getElementById("bus_to");
const busToInput = document.getElementById("bus_to_input");
const busToDropdownMenu = document.querySelector(
    ".custom-bus-to-select-wrapper .bus-dropdown-menu"
);
const busToDropdownList = document.getElementById("dropdown_list_bus_to");

setupBusInput(busTo, busToInput, busToDropdownMenu, busToDropdownList);

const busSwapButton = document.getElementById("bus_swap_button");
busSwapButton.addEventListener("click", function () {
    const fromValue = busFromInput.value;
    const toValue = busToInput.value;
    busFromInput.value = toValue;
    busToInput.value = fromValue;
    //Hiden value
    const fromValHD = busFrom.value;
    const toValHD = busTo.value;
    busFrom.value = toValHD;
    busTo.value = fromValHD;
});

// Khởi tạo danh sách dropdown ban đầu
updateBusDropdownList(busFrom, busFromInput, busFromDropdownList, "");
updateBusDropdownList(busTo, busToInput, busToDropdownList, "");

// Máy bay
const planeCities = [
    {
        name: "Hồ Chí Minh",
        code: "SGN",
        airport: "Sân bay Tân Sơn Nhất",
    },
    {
        name: "Hà Nội",
        code: "HAN",
        airport: "Sân bay Nội Bài",
    },
    {
        name: "Đà Nẵng",
        code: "DAD",
        airport: "Sân bay Đà Nẵng",
    },
    {
        name: "Đà Lạt",
        code: "DLI",
        airport: "Sân bay Liên Khương",
    },
    {
        name: "Nha Trang",
        code: "CXR",
        airport: "Sân bay Cam Ranh",
    },
    {
        name: "Phú Quốc",
        code: "PQC",
        airport: "Sân bay Phú Quốc",
    },
];

function updatePlaneDropdownList(inputElement, dropdownListElement, filter) {
    dropdownListElement.innerHTML = "";
    const filteredCities = planeCities.filter((city) =>
        city.name.toLowerCase().includes(filter.toLowerCase())
    );
    filteredCities.forEach((city) => {
        const item = document.createElement("li");
        item.className = "custom-dropdown-item";
        item.innerHTML = `
                    <div class="custom-item-container">
                    <div class="custom-icon-section">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <div class="custom-content-section">
                        <div class="custom-city-title"><b>${city.name}</b></div>
                        <p>${city.code} - ${city.airport}</p>
                    </div>
                    </div>
                `;
        item.addEventListener("mousedown", function (event) {
            event.preventDefault();
            inputElement.value = city.name;
            dropdownListElement.parentElement.style.display = "none";
        });
        dropdownListElement.appendChild(item);
    });
}

function setupPlaneInput(inputElement, dropdownMenu, dropdownList) {
    inputElement.addEventListener("focus", function () {
        dropdownMenu.style.display = "block";
        updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
    });

    inputElement.addEventListener("blur", function () {
        setTimeout(function () {
            dropdownMenu.style.display = "none";
        }, 200);
    });

    inputElement.addEventListener("input", function () {
        updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
    });

    inputElement.addEventListener("click", function () {
        dropdownMenu.style.display = "block";
        updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
    });
}

const planeFromInput = document.getElementById("plane_from_input");
const planeFromDropdownMenu = document.querySelector(
    ".custom-plane-from-select-wrapper .plane-dropdown-menu"
);
const planeFromDropdownList = document.getElementById(
    "dropdown_list_plane_from"
);

setupPlaneInput(planeFromInput, planeFromDropdownMenu, planeFromDropdownList);

const planeToInput = document.getElementById("plane_to_input");
const planeToDropdownMenu = document.querySelector(
    ".custom-plane-to-select-wrapper .plane-dropdown-menu"
);
const planeToDropdownList = document.getElementById("dropdown_list_plane_to");

setupPlaneInput(planeToInput, planeToDropdownMenu, planeToDropdownList);

// Hoán đổi giá trị của hai ô nhập liệu
const planeSwapButton = document.getElementById("plane_swap_button");
planeSwapButton.addEventListener("click", function () {
    const fromValue = planeFromInput.value;
    const toValue = planeToInput.value;
    planeFromInput.value = toValue;
    planeToInput.value = fromValue;
});

// Khởi tạo danh sách dropdown ban đầu
updatePlaneDropdownList(planeFromInput, planeFromDropdownList, "");
updatePlaneDropdownList(planeToInput, planeToDropdownList, "");

// Tàu hoả
const trainCities = [
    {
        name: "Hồ Chí Minh",
    },
    {
        name: "Hà Nội",
    },
    {
        name: "Đà Nẵng",
    },
    {
        name: "Đà Lạt",
    },
    {
        name: "Nha Trang",
    },
    {
        name: "Phú Quốc",
    },
];

function updateTrainDropdownList(inputElement, dropdownListElement, filter) {
    dropdownListElement.innerHTML = "";
    const filteredCities = trainCities.filter((city) =>
        city.name.toLowerCase().includes(filter.toLowerCase())
    );
    filteredCities.forEach((city) => {
        const item = document.createElement("li");
        item.className = "custom-dropdown-item";
        item.innerHTML = `
                        <div class="custom-item-container">
                        <div class="custom-icon-section">
                            <i class="fa fa-train" aria-hidden="true"></i>
                        </div>
                        <div class="custom-content-section">
                            <div class="custom-city-title"><b>${city.name}</b></div>
                        </div>
                        </div>
                    `;
        item.addEventListener("mousedown", function (event) {
            event.preventDefault();
            inputElement.value = city.name;
            dropdownListElement.parentElement.style.display = "none";
        });
        dropdownListElement.appendChild(item);
    });
}

function setupTrainInput(inputElement, dropdownMenu, dropdownList) {
    inputElement.addEventListener("focus", function () {
        dropdownMenu.style.display = "block";
        updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
    });

    inputElement.addEventListener("blur", function () {
        setTimeout(function () {
            dropdownMenu.style.display = "none";
        }, 200);
    });

    inputElement.addEventListener("input", function () {
        updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
    });

    inputElement.addEventListener("click", function () {
        dropdownMenu.style.display = "block";
        updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
    });
}

const trainFromInput = document.getElementById("train_from_input");
const trainFromDropdownMenu = document.querySelector(
    ".custom-train-from-select-wrapper .train-dropdown-menu"
);
const trainFromDropdownList = document.getElementById(
    "dropdown_list_train_from"
);

setupTrainInput(trainFromInput, trainFromDropdownMenu, trainFromDropdownList);

const trainToInput = document.getElementById("train_to_input");
const trainToDropdownMenu = document.querySelector(
    ".custom-train-to-select-wrapper .train-dropdown-menu"
);
const trainToDropdownList = document.getElementById("dropdown_list_train_to");

setupTrainInput(trainToInput, trainToDropdownMenu, trainToDropdownList);

// Hoán đổi giá trị của hai ô nhập liệu
const trainSwapButton = document.getElementById("train_swap_button");
trainSwapButton.addEventListener("click", function () {
    const fromValue = trainFromInput.value;
    const toValue = trainToInput.value;
    trainFromInput.value = toValue;
    trainToInput.value = fromValue;
});

// Khởi tạo danh sách dropdown ban đầu
updateTrainDropdownList(trainFromInput, trainFromDropdownList, "");
updateTrainDropdownList(trainToInput, trainToDropdownList, "");

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

$("#bus_search").click(() => {
    var busTo = $("#bus_to").val();
    var busToPlace = $("#bus_to_input").val();
    var busFrom = $("#bus_from").val();
    var busFromPlace = $("#bus_from_input").val();
    var dateTo = $("#bus_date_to").val();
    var dateFrom = $("#bus_date_from").val();

    var data = {
        bus_from: busFrom,
        // busFromPlace,
        bus_to: busTo,
        // busToPlace,
        date_from: dateFrom,
        date_to: dateTo,
    };
    console.log(data);

    var url =
        "/route-search/xe-khach/" +
        convertToSlug(busFromPlace) +
        "-to-" +
        convertToSlug(busToPlace);
    var queryString = $.param(data);
    url += "?" + queryString;
    window.location.href = url;
});

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
