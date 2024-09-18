loadSearchListBus(); // Gọi hàm loadSearchListBus để hiển thị danh sách xe
// Tìm kiếm trong  filter
document.addEventListener('DOMContentLoaded', function () { 
    setupSearchFilter('dpSearchInput', 'dpDistrictList'); 
    setupSearchFilter('ppSearchInput', 'ppDistrictList');
    setupSearchFilter('companySearchInput', 'companyList');
    setupSearchFilter('vehicle_typeSearchInput', 'list_vehicle_typeList');
}); 
$(document).ready(function () {   
    //---------------------Sắp xếp  ---------------------
    $('.array_filter-radio').on('change', function() {
        var selectedValue = $('input[name="opt_array"]:checked').val();
        console.log("Giá trị được chọn: " + selectedValue);
        applyFilters(selectedValue);  
    });
    // --------------------- Bộ lọc ---------------------
    //Giờ đi
    $("#fromTime, #toTime").on("input", function () {
        applyFilters();  
    });
    $(".slider-handle-1, .slider-handle-2").on("click", function () {
        applyFilters();  
    });
    // Giá vé 
    $(".custom-slider-handle-1, .custom-slider-handle-2").on("click", function () {
        applyFilters();  
    });
    // Nhà xe, số ghế
    $(".select_company, .selectSeat_type, .number_seat").on("change", function () {
        applyFilters();
    });  
    // Điểm đón
    $(".select_pp_district").on("change", function () {
        const childCheckboxes = $(this).closest('li').find('.tree-child-tree .select_pp_district_name');
        // Check/uncheck tất cả các checkbox con
        childCheckboxes.prop('checked', $(this).prop('checked')); 

        applyFilters();
    });
    // Tên điểm đón
    $(".select_pp_district_name").on("change", function () {
        const parentLi = $(this).closest('ul.tree-child-tree').parent();
        const parentCheckbox = parentLi.find('.select_pp_district');

        // Kiểm tra trạng thái của các checkbox con
        const allChecked = parentLi.find('.tree-child-tree .select_pp_district_name').length === 
                           parentLi.find('.tree-child-tree .select_pp_district_name:checked').length;
        const anyChecked = parentLi.find('.tree-child-tree .select_pp_district_name:checked').length > 0;

        // Cập nhật trạng thái của checkbox cha
        if (allChecked) {
            parentCheckbox.prop('checked', true).prop('indeterminate', false);
        } else if (anyChecked) {
            parentCheckbox.prop('indeterminate', true).prop('checked', false);
        } else {
            parentCheckbox.prop('checked', false).prop('indeterminate', false);
        }

        // Áp dụng bộ lọc
        applyFilters();
    }); 
    // Điểm trả
    $(".select_dp_district").on("change", function () {
        const childCheckboxes = $(this).closest('li').find('.tree-child-tree .select_dp_district_name');
        // Check/uncheck tất cả các checkbox con
        childCheckboxes.prop('checked', $(this).prop('checked')); 

        applyFilters();
    });
    // Tên điểm trả
    $(".select_dp_district_name").on("change", function () {
        const parentLi = $(this).closest('ul.tree-child-tree').parent();
        const parentCheckbox = parentLi.find('.select_dp_district');
        // Kiểm tra trạng thái của các checkbox con
        const allChecked = parentLi.find('.tree-child-tree .select_dp_district_name').length === 
                           parentLi.find('.tree-child-tree .select_dp_district_name:checked').length;
        const anyChecked = parentLi.find('.tree-child-tree .select_dp_district_name:checked').length > 0;
        // Cập nhật trạng thái của checkbox cha
        if (allChecked) {
            parentCheckbox.prop('checked', true).prop('indeterminate', false);
        } else if (anyChecked) {
            parentCheckbox.prop('indeterminate', true).prop('checked', false);
        } else {
            parentCheckbox.prop('checked', false).prop('indeterminate', false);
        }
        
        applyFilters();
    }); 
    // Đánh giá
    var selectedRating = 0;
    $(".Rates__GroupRate-sc-1ioptsc-1 span.fa-star").on("click", function() {
        // Xác định chỉ số của ngôi sao được nhấp
        selectedRating = $(this).index() + 1; 
        // Cập nhật số sao được chọn
        updateStars(selectedRating); 
        // Cập nhật số lượng sao được chọn
        $("#rating-count").text(selectedRating);

        applyFilters();
    });
    function updateStars(count) {
        // Xóa các lớp checked_rating từ tất cả các ngôi sao
        $(".Rates__GroupRate-sc-1ioptsc-1 span.fa-star").removeClass("checked_rating");
        // Thêm lớp checked_rating cho các ngôi sao được chọn
        $(".Rates__GroupRate-sc-1ioptsc-1 span.fa-star").each(function(index) {
            if (index < count) {
                $(this).addClass("checked_rating");
            }
        });
    }
    // Số ghế trống  
    let quantity = 1;
    // Update UI quantity
    function updateQuantityUI() {
        $('#quantity-value').text(quantity);
        $('#seat_decrease').prop('disabled', quantity <= 1);
    } 
    // Increase quantity
    $('#seat_increase').on('click', function () {
        quantity++;
        updateQuantityUI();
        applyFilters();  
    });
    // Decrease quantity
    $('#seat_decrease').on('click', function () {
        if (quantity > 1) {
            quantity--;
            updateQuantityUI();
            applyFilters();  
        }
    });
    // Hàm áp dụng bộ lọc và sắp xếp
    function applyFilters(sortValue) {
        // khai báo
        var busTo = $("#bus_to").val();
        var busToPlace = $("#bus_to_input option:selected").attr("data-name");
        var busFrom = $("#bus_from").val();
        var busFromPlace = $("#bus_from_input option:selected").attr("data-name");
        var dateTo = $("#bus_date_to").val();
        var dateFrom = $("#bus_date_from").val();
        // giá trị được checked
        var selectedPP = [];
        var selectedDP = []; 
        var selectedPP_name = [];
        var selectedDP_name = [];
        var selectedCompany = [];
        var selectedSeatType = [];   

        //Giờ đi
        const fromTime = $("#fromTime").val();
        const toTime = $("#toTime").val();
        // Giá vé
        // Lấy giá trị hiển thị từ các phần tử giá trị
        const minValueText = $(".custom-value-left").text().replace('₫', '').trim();
        const maxValueText = $(".custom-value-right").text().replace('₫', '').trim();
        // Chuyển đổi giá trị từ chuỗi thành số
        const minValue = parseFloat(minValueText.replace(/[\.,]/g, ''));
        const maxValue = parseFloat(maxValueText.replace(/[\.,]/g, ''));
        // Số ghế trống 
        var seat_min =  quantity;
        // Nhà xe
        $(".select_company:checked").each(function () {
            selectedCompany.push($(this).val());
        });

        $(".selectSeat_type:checked").each(function () {
            selectedSeatType.push($(this).val());
        });
        // Điểm đón
        $(".select_pp_district:checked").each(function () {
            selectedPP.push($(this).val());
        }); 

        $(".select_pp_district_name:checked").each(function () {
            const parentDistrict = $(this).closest('ul.tree-child-tree').parent().find('.select_pp_district').val();
            selectedPP_name.push($(this).val());
            selectedPP.push(parentDistrict); 
        }); 
        // Điểm trả
        $(".select_dp_district:checked").each(function () {
            selectedDP.push($(this).val());
        });

        $(".select_dp_district_name:checked").each(function () {
            const parentDistrict = $(this).closest('ul.tree-child-tree').parent().find('.select_dp_district').val();
            selectedDP_name.push($(this).val());
            selectedDP.push(parentDistrict); 
        });

        var data = {
            bus_from: busFrom,
            bus_to: busTo,
            date_from: dateFrom,
            date_to: dateTo,
            time_min: fromTime,
            time_max: toTime,
            fare_min: minValue,
            fare_max: maxValue,
            pp_district: selectedPP.join(","),
            pp_district_name: selectedPP_name.join(","),
            dp_district: selectedDP.join(","),
            dp_district_name: selectedDP_name.join(","), 
            company_id: selectedCompany.join(","),
            seat_type: selectedSeatType.join(","),
            rating_min: selectedRating,
            available_seat_min: seat_min,
            sort: sortValue,
        };
        // console.log(data);

        var url = `/api/search/xe-khach?q=${convertToSlug(busFromPlace)}-to-${convertToSlug(busToPlace)}`;
        
        loadSearchListBus(url, data);
    }
});
//hàm load list bus item
function loadSearchListBus(url, data) {
    $.ajax({
        url: url,
        method: 'GET',
        data: data,
        success: function(response) { 
            $('.wrap-filter .right-filter').html(response.dataHTML);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}
// chuyển đổi thành Slug url
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
        .replace(/[^a-z0-9\s]/g, "")  
        .replace(/\s+/g, "-")  
        .replace(/-+/g, "-");  
}
// Hàm tìm kiếm trong filter
function setupSearchFilter(inputId, listId) {
    const searchInput = document.getElementById(inputId);
    const list = document.getElementById(listId);
    const items = list.getElementsByClassName('list-search_filter');
    
    searchInput.addEventListener('input', function () {
        const filter = searchInput.value.toLowerCase();   
        Array.from(items).forEach(item => {
            const textContent = item.textContent.toLowerCase();
            item.style.display = textContent.includes(filter) ? '' : 'none';
        });
    });
}
// frontend filter
// hiển thị tên điểm đến, điểm đón danh mục con trong quận/ huyện
$('.show-dp_district_name').on('click', function() {
    // Toggle hiển thị/ẩn ul
    $(this).closest('li').find('.tree-child-tree').toggleClass('d-none');

    // Đổi hướng icon
    const $icon = $(this).find('svg');
    $icon.toggleClass('rotated');
    if ($icon.hasClass('rotated')) {
        $icon.css('transform', 'rotate(0deg)');
    } else {
        $icon.css('transform', 'rotate(-90deg)');
    }
});   
$('.show-pp_district_name').on('click', function() {
    // Toggle hiển thị/ẩn ul
    $(this).closest('li').find('.tree-child-tree').toggleClass('d-none');

    // Đổi hướng icon
    const $icon = $(this).find('svg');
    $icon.toggleClass('rotated');
    if ($icon.hasClass('rotated')) {
        $icon.css('transform', 'rotate(0deg)');
    } else {
        $icon.css('transform', 'rotate(-90deg)');
    }
});    
// Range slider
// Giờ đi
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const handle1 = slider.querySelector('.slider-handle-1');
    const handle2 = slider.querySelector('.slider-handle-2');
    const track = slider.querySelector('.slider-track');
    const inputFrom = document.querySelector('.from-time');
    const inputTo = document.querySelector('.to-time');
    const max = 24; // Max value for the slider in hours

    // Function to convert time to hours
    function timeToHours(time) {
        return parseInt(time.split(':')[0]);
    }

    // Function to convert hours to time
    function hoursToTime(hours) {
        return `${String(hours).padStart(2, '0')}:00`;
    }

    // Function to update track and input values
    function updateTrack() {
        const value1 = parseFloat(handle1.style.left);
        const value2 = parseFloat(handle2.style.left);
        track.style.left = Math.min(value1, value2) + '%';
        track.style.width = Math.abs(value1 - value2) + '%';
        inputFrom.value = hoursToTime(Math.round(Math.min(value1, value2) * max / 100));
        inputTo.value = hoursToTime(Math.round(Math.max(value1, value2) * max / 100));
    }

    // Function to handle dragging
    function onDrag(event, handle) {
        const sliderRect = slider.getBoundingClientRect();
        const newLeft = Math.min(Math.max(0, event.clientX - sliderRect.left), sliderRect.width);
        const valueInHours = Math.round((newLeft / sliderRect.width) * max); // Round to nearest hour
        handle.style.left = (valueInHours / max) * 100 + '%';
        updateTrack();
    }

    function onDragEnd() {
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
    }

    function onMouseMove(event) {
        onDrag(event, draggingHandle);
    }

    function onMouseUp(event) {
        onDrag(event, draggingHandle);
        onDragEnd();
    }

    let draggingHandle;

    handle1.addEventListener('mousedown', function(event) {
        draggingHandle = handle1;
        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });

    handle2.addEventListener('mousedown', function(event) {
        draggingHandle = handle2;
        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });

    // Set initial positions and update track
    handle1.style.left = '0%';
    handle2.style.left = '100%';
    updateTrack();

    // Update the slider based on input change
    inputFrom.addEventListener('change', function() {
        const hours = Math.min(Math.max(timeToHours(inputFrom.value), 0), max);
        handle1.style.left = (hours / max) * 100 + '%';
        updateTrack();
    });

    inputTo.addEventListener('change', function() {
        const hours = Math.min(Math.max(timeToHours(inputTo.value), 0), max);
        handle2.style.left = (hours / max) * 100 + '%';
        updateTrack();
    });
}); 
// Giá vé
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.custom-slider');
    const handle1 = slider.querySelector('.custom-slider-handle-1');
    const handle2 = slider.querySelector('.custom-slider-handle-2');
    const track = slider.querySelector('.custom-slider-track-1');
    const valueLeft = document.querySelector('.custom-value-left');
    const valueRight = document.querySelector('.custom-value-right');
    const max = 2000000; // Max value for the slider

    // Function to format currency
    function formatCurrency(value) {
        return value.toLocaleString('vi-VN', {
            style: 'currency',
            currency: 'VND'
        });
    }

    // Function to update track and value display
    function updateTrack() {
        const value1 = parseFloat(handle1.style.left);
        const value2 = parseFloat(handle2.style.left);
        track.style.left = Math.min(value1, value2) + '%';
        track.style.width = Math.abs(value1 - value2) + '%';
        valueLeft.textContent = formatCurrency(Math.min(value1, value2) * max / 100);
        valueRight.textContent = formatCurrency(Math.max(value1, value2) * max / 100);
    }

    // Function to handle dragging
    function onDrag(event, handle) {
        const sliderRect = slider.getBoundingClientRect();
        const newLeft = Math.min(Math.max(0, event.clientX - sliderRect.left), sliderRect.width);
        handle.style.left = (newLeft / sliderRect.width) * 100 + '%';
        updateTrack();
    }

    function onDragEnd() {
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
    }

    function onMouseMove(event) {
        onDrag(event, draggingHandle);
    }

    function onMouseUp(event) {
        onDrag(event, draggingHandle);
        onDragEnd();
    }

    let draggingHandle;

    handle1.addEventListener('mousedown', function(event) {
        draggingHandle = handle1;
        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });

    handle2.addEventListener('mousedown', function(event) {
        draggingHandle = handle2;
        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });

    // Set initial positions and update track
    handle1.style.left = '0%';
    handle2.style.left = '100%';
    updateTrack();
}); 



