@extends('dashboard.layout.layout')
@section('container')

<section class="mb-5 hidden" id="alert-panas">
    <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            Suhu Terlalu tinggi!
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
</section>

<section class="mb-5 hidden" id="alert-dingin">
    <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
          Suhu Terlalu Dingin!
        </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
</section>

<section class="mb-5 grid grid-cols-2 gap-4">
    <div class="col-span-2 md:col-span-1">
        <div class="grid grid-cols-3 bg-slate-50 p-3 dark:bg-slate-700 rounded-lg border border-gray-200 shadow-md">
            <div id="logo-thermometer" class="bg-red-500 rounded-full p-3 justify-self-center self-center">
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
                    <p class="text-base font-medium dark:text-white">Data Kelembaban</p>
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
                        Kelembaban
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
        var alert_panas = document.getElementById('alert-panas');
        var alert_dingin = document.getElementById('alert-dingin');
        var logo_thermometer = document.getElementById('logo-thermometer');
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

            if (data_rekap.temperature > 25) {
                alert_dingin.classList.add('hidden');
                alert_panas.classList.remove('hidden');
                logo_thermometer.classList.remove('bg-emerald-500', 'bg-sky-500');
                logo_thermometer.classList.add('bg-red-500');
            } else if(data_rekap.temperature < 20){
                alert_panas.classList.add('hidden');
                alert_dingin.classList.remove('hidden');
                logo_thermometer.classList.remove('bg-emerald-500', 'bg-red-500');
                logo_thermometer.classList.add('bg-sky-500');
            } else {
                alert_panas.classList.add('hidden');
                alert_dingin.classList.add('hidden');
                logo_thermometer.classList.remove('bg-sky-500', 'bg-red-500');
                logo_thermometer.classList.add('bg-emerald-500');
            }
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
