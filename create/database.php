<?php

    // membuat variabel data base
    $namaServer = 'localhost';
    $namaPengguna = 'root';
    $kataSandi = '';

    // koneksi ke database

    $koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi);

    if($koneksi->connect_error)
    {
        echo "Koneksi Gagal!";
    } else {
        echo "Koneksi Berhasil!";
    }

    // proses membuat database dengan perintah ke SQL

    $sql = 'CREATE DATABASE db_wonefilm';

    // notifikasi jika database berhasil/gagal dibuat

    if ($koneksi->query($sql) === TRUE ){
        echo "<h1> Database berhasil dibuat.</h1>";
    } else {
        echo "<h1> Database gagal dibuat.</h1>";
    }