package com.example.tenizencode

object Konfigurasi {
    // Base URL (sesuaikan dengan alamat IP server Anda)
    private const val BASE_URL =
        "http://192.168.36.204/websmkbmti/"
    // Endpoint URL
    const val URL_ADD = BASE_URL + "tambahsiswa.php"
    const val URL_GET_ALL = BASE_URL + "tampilsiswa.php"
    const val URL_GET_EMP = BASE_URL + "tampilsiswa.php?id="
    const val URL_UPDATE_EMP = BASE_URL + "updatesiswa.php"
    const val URL_DELETE_EMP = BASE_URL + "hapussiswa.php?id="
    // Parameter Keys (untuk request ke PHP)
    const val KEY_EMP_ID = "nis"
    const val KEY_EMP_NAMA = "namasiswa"
    const val KEY_EMP_KELAMIN = "jk"
    const val KEY_EMP_ALAMAT = "alamat"
    // JSON Tags (untuk parsing response dari PHP)
    const val TAG_JSON_ARRAY = "result"
    const val TAG_ID = "nis"
    const val TAG_NAMA = "namasiswa"
    const val TAG_KELAMIN = "jk"
    const val TAG_ALAMAT = "alamat"
    // ID (digunakan untuk identifikasi entitas)
    const val EMP_ID = "emp_id"
}