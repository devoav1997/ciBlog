<?php

    class Buku_Model extends CI_Model {
        public function getAll() {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8081/buku/gets";
            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));

            $response = json_decode(curl_exec($svcGet));
            
            curl_close($svcGet);

            if (!is_null($response))            
                return $response;
            else
                show_404();
        }

        public function getBukuById($idBuku) {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8081/buku/get-by-id/$idBuku";
            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));

            $response = json_decode(curl_exec($svcGet));
            // var_dump($response); die();

            curl_close($svcGet);

            if (!is_null($response))            
                return $response;
            else
                show_404();
        }
    }
?>