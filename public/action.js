function selectRegion(selectObject) {
    var id = selectObject.value;
    if (id) {
        $.ajax({
            type: "get",
            url: "/districts-regions",
            data: { id: id },
            cache: false,
            success: function (data) {
                select = document.getElementById("district");
                select.innerHTML = data;
            },
            error: function (data) {},
        });
    }
}


function selectSpeciality(selectObject) {
    var id = selectObject.value;
    if (id) {
        $.ajax({
            type: "get",
            url: "/get-speciality",
            data: { id: id },
            cache: false,
            success: function (data) {
                select = document.getElementById("speciality");
                select.innerHTML = data;
            },
            error: function (data) {},
        });
    }
}

