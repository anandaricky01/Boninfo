@extends('dashboard.layout.layout')
@section('container')

<section class="mb-5 grid grid-cols-2 gap-4">
    <div class="col-span-2 md:col-span-1">
        <div class="grid grid-cols-3 bg-slate-50 p-3 dark:bg-slate-700 rounded-lg border border-gray-200 shadow-md">
            <div class="bg-red-500 rounded-full p-3 justify-self-center self-center">
                <i data-feather="thermometer" class="stroke-white"></i>
            </div>
            <div class="col-span-2">
                <div class="grid grid-rows-2 p-2">
                    <p class="text-base font-medium dark:text-white">Data Temperature</p>
                    <p id="data-temperature" class="text-xl font-bold dark:text-white"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-2 md:col-span-1">
        <div class="grid grid-cols-3 bg-slate-50 p-3 dark:bg-slate-700 rounded-lg border border-gray-200 shadow-md">
            <div class="bg-emerald-500 rounded-full p-3 justify-self-center self-center">
                <i data-feather="droplet" class="stroke-white"></i>
            </div>
            <div class="col-span-2">
                <div class="grid grid-rows-2 p-2">
                    <p class="text-base font-medium dark:text-white">Data Kelembapan</p>
                    <p id="data-humidity" class="text-xl font-bold dark:text-white"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="data-baru" class="mb-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left text-gray-900 bg-slate-50 dark:text-white dark:bg-gray-800">
                Data Baru Masuk
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Data baru akan masuk setiap 5 detik
                    sekali</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Temperature
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kelembapan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Device
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody id="data-body">
            </tbody>
        </table>
    </div>
</section>

<script>
    function updateDataInView(data) {
        var status = data.success;
        var tableBody = document.getElementById('data-body');
        var data_temperature = document.getElementById('data-temperature');
        var data_humidity = document.getElementById('data-humidity');

        // Kosongkan isi tabel sebelum menambahkan data baru
        tableBody.innerHTML = '';

        if (status == true && data.data != null) {
            var data_sensor = data.data;
            var data_rekap = data.data_rekap;
            // console.log(data);

            // Iterasi melalui setiap objek data
            data_sensor.forEach(function(data) {
                var row = document.createElement('tr');
                row.setAttribute('class', 'bg-slate-50 border-b dark:bg-gray-800 dark:border-gray-700');

                var tanggalCell = document.createElement('td');
                tanggalCell.setAttribute('id', 'tanggal');
                tanggalCell.setAttribute('class', 'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
                tanggalCell.textContent = data.tanggal;
                row.appendChild(tanggalCell);

                var temperatureCell = document.createElement('td');
                temperatureCell.setAttribute('id', 'temperature');
                temperatureCell.setAttribute('class', 'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
                temperatureCell.textContent = data.temperature + '\u00B0 C';
                row.appendChild(temperatureCell);

                var humidityCell = document.createElement('td');
                humidityCell.setAttribute('id', 'humidity');
                humidityCell.setAttribute('class', 'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
                humidityCell.textContent = data.humidity + '%';
                row.appendChild(humidityCell);

                var deviceCell = document.createElement('td');
                deviceCell.setAttribute('id', 'device');
                deviceCell.setAttribute('class', 'px-6 py-4');
                deviceCell.textContent = data.device;
                row.appendChild(deviceCell);

                var statusCell = document.createElement('td');
                statusCell.setAttribute('class', 'px-6 py-4');

                var statusElement = document.createElement('p');
                statusElement.textContent = data.status;
                statusElement.setAttribute('id', 'status');
                statusElement.setAttribute('class', `bg-${data.statusColor} rounded p-1 text-white text-center`);
                statusCell.appendChild(statusElement);

                row.appendChild(statusCell);
                tableBody.appendChild(row);
            });

            data_temperature.textContent = data_rekap.temperature + '\u00B0 C';
            data_humidity.textContent = data_rekap.humidity + '%';
        } else {
            var row = document.createElement('tr');
            row.setAttribute('class', 'bg-slate-50 border-b dark:bg-gray-800 dark:border-gray-700');
            var errorCell = document.createElement('td');
            errorCell.setAttribute('id', 'error');
            errorCell.setAttribute('collspan', '4');
            errorCell.setAttribute('class', 'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
            errorCell.textContent = "Terdapat masalah pada server/Data masih kosong!";
            row.appendChild(errorCell);

            data_temperature.textContent = 'Null';
            data_humidity.textContent = 'Null';
            tableBody.appendChild(row);
        }
    }

    function getDataFromAPI() {
        fetch('{{ route('fetch-data') }}')
            .then(response => response.json())
            .then(data => {
                updateDataInView(data); // Panggil fungsi untuk memperbarui tampilan dengan data yang diterima
                // console.log(data);
            })
            .catch(error => {
                console.error(error);
            });
    }

    document.addEventListener('DOMContentLoaded', function() {
        getDataFromAPI(); // Memanggil fungsi getDataFromAPIChart saat dokumen sudah siap
    });

    setInterval(getDataFromAPI, 2000);
</script>
@endsection
