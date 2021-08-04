<?php
    //koneksi
    include "conn.php";
    
    //function show data
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
    
        return $rows;
    }

    //function hapus data
    function hapus($id /*id auto increment*/){
        global $conn;
        mysqli_query($conn, "DELETE FROM tbl_nasabah WHERE id_nasabah = $id/*id auto increment*/");

		return mysqli_affected_rows($conn);
    }

    //function ubah data
    function ubah($data){
        global $conn;

        $id_nasabah = $data["id_nasabah"];
        $nama_nasabah = htmlspecialchars($data["nama_nasabah"]);
        $telepon_nasabah = htmlspecialchars($data["telepon_nasabah"]);
        $alamat_nasabah = htmlspecialchars($data["alamat_nasabah"]);
        $nomor_rekening_nasabah = htmlspecialchars($data["nomor_rekening_nasabah"]);

        //query Update Data
        $query = "UPDATE tbl_nasabah SET
                    id_nasabah = '$id_nasabah',
                    nama_nasabah = '$nama_nasabah',
                    telepon_nasabah = '$telepon_nasabah',
                    alamat_nasabah = '$alamat_nasabah'
                    nomor_rekening_nasabah = '$nomor_rekening_nasabah'

                    WHERE id_nasabah = $id/*id auto increment*/
        ";
            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM tbl_nasabah
                        WHERE
                        nama_nasabah LIKE '%$keyword%' OR
                        telepon_nasabah LIKE '%$keyword%' OR
                        alamat_nasabah LIKE '%$keyword%' OR
                        nomor_rekening LIKE '%$keyword%'
                    ";
        return query($query);
    }

?>