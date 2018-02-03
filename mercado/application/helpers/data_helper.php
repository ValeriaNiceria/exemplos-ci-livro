<?php

function traduz_data_para_exibir($data)
{
    if ($data == "" | $data == "0000-00-00") {
        return "";
    }

    $partes = explode("-", $data);

    $data_exibir = "{$partes[2]}/{$partes[1]}/{$partes[0]}";

    return $data_exibir;
}