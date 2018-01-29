<?php

echo form_open_multipart('cadastro/register');

echo form_upload('userfile');
echo form_submit('ok', 'Enviar');

echo form_close();


echo (isset($error)) ? '<div class="erros">' .$error. '</div>' : '' ;