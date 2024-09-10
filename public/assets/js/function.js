function getProvince() {
    fetch("/api/wilayah/provinsi", {
        method: "GET",
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            const provinsiSelect = document.getElementById("provinsi");

            // Clear previous options
            provinsiSelect.innerHTML =
                '<option value="00" hidden>Pilih Provinsi</option>';
            data.data.forEach((province) => {
                const option = document.createElement("option");
                option.value = province.prov_id; // Sesuaikan dengan nama kolom di data Anda
                option.text = province.prov_name; // Sesuaikan dengan nama kolom di data Anda
                provinsiSelect.add(option);
            });
        })
        .catch((error) => {
            console.log(error);
        });
}
function getCity (value) {
    const selectedProvinsiId = value;
    console.log(selectedProvinsiId);

    fetch("/api/wilayah/kota/" + selectedProvinsiId, {
        method: "GET",
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            const kotaSelect = document.getElementById("kota");

            // Clear previous options
            kotaSelect.innerHTML =
                '<option value="00" hidden>Pilih Kabupaten/Kota</option>';

            // Populate with new options
            data.data.forEach((city) => {
                const option = document.createElement("option");
                option.value = city.city_id; // Sesuaikan dengan nama kolom di data Anda
                option.text = city.city_name; // Sesuaikan dengan nama kolom di data Anda
                kotaSelect.add(option);
            });
        })
        .catch((error) => {
            console.log(error);
        });
};
function getDistrict (value) {
    const selectedKotaId = value;

    fetch("/api/wilayah/kecamatan/" + selectedKotaId, {
        method: "GET",
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            const kecamatanSelect = document.getElementById("kecamatan");

            // Clear previous options
            kecamatanSelect.innerHTML =
                '<option value="00" hidden>Pilih Kecamatan</option>';

            // Populate with new options
            data.data.forEach((district) => {
                const option = document.createElement("option");
                option.value = district.dis_id; // Sesuaikan dengan nama kolom di data Anda
                option.text = district.dis_name; // Sesuaikan dengan nama kolom di data Anda
                kecamatanSelect.add(option);
            });
        })
        .catch((error) => {
            console.log(error);
        });
};

function getSubdistrict (value) {
    const selectedKecamatanId = value;

    fetch("/api/wilayah/kelurahan/" + selectedKecamatanId, {
        method: "GET",
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            const kelurahanSelect = document.getElementById("kelurahan");

            // Clear previous options
            kelurahanSelect.innerHTML =
                '<option value="00" hidden>Pilih Kelurahan/Desa</option>';

            // Populate with new options
            data.data.forEach((subdistrict) => {
                const option = document.createElement("option");
                option.value = subdistrict.subdis_id; // Sesuaikan dengan nama kolom di data Anda
                option.text = subdistrict.subdis_name; // Sesuaikan dengan nama kolom di data Anda
                kelurahanSelect.add(option);
            });
        })
        .catch((error) => {
            console.log(error);
        });
};

document.addEventListener("DOMContentLoaded", function() {
    // Mendapatkan semua elemen select dengan id "provinsi", "kota", "kecamatan", dan "kelurahan"
    var selects = document.querySelectorAll("#provinsi, #kota, #kecamatan, #kelurahan");

    // Menambahkan event listener "change" untuk setiap elemen select
    selects.forEach(function(select) {
        select.addEventListener("change", function() {
            // Menghapus teks error di elemen berikutnya dengan class "text-danger"
            var errorText = select.nextElementSibling;
            if (errorText && errorText.classList.contains("text-danger")) {
                errorText.textContent = "";
            }
        });
    });
});


function validateStep() {
    let isValid = true;

    if ($("#provinsi").val() === "00") {
        $("#provinsi-error").text("Provinsi harus dipilih.");
        isValid = false;
    }

    if ($("#kota").val() === "00") {
        $("#kota-error").text("Kabupaten/Kota harus dipilih.");
        isValid = false;
    }

    if ($("#kecamatan").val() === "00") {
        $("#kecamatan-error").text("Kecamatan harus dipilih.");
        isValid = false;
    }

    if ($("#kelurahan").val() === "00") {
        $("#kelurahan-error").text("Kelurahan/Desa harus dipilih.");
        isValid = false;
    }

    if ($("#provinsi").val() !== "00") {
        $("#provinsi-error").removeClass("hidden");
        isValid = false;
    }

    if ($("#kota").val() !== "00") {
        $("#kota-error").removeClass("hidden");
        isValid = false;
    }

    if ($("#kecamatan").val() !== "00") {
        $("#kecamatan-error").removeClass("hidden");
        isValid = false;
    }

    if ($("#kelurahan").val() !== "00") {
        $("#kelurahan-error").removeClass("hidden");
        isValid = false;
    }
}

function createSlug(name) {
    return name
        .toLowerCase() // Mengubah semua huruf menjadi huruf kecil
        .replace(/\s+/g, "-") // Mengganti semua spasi dengan strip (-)
        .replace(/[^\w\-]+/g, ""); // Menghapus karakter non-alphanumeric kecuali strip (-) dan underscore (_)
}

function createUsername(name) {
    return name
        .toLowerCase() // Mengubah semua huruf menjadi huruf kecil
        .replace(/\s+/g, "") // Menghilangkan semua spasi
        .replace(/[^\w]+/g, ""); // Menghapus karakter non-alphanumeric
}
