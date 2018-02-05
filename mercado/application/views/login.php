<div class="container">
<?php 
echo isset($aviso_deslogado) ? "<div class='alert alert-info'>" .$aviso_deslogado. "</div>" : '';

echo heading("Login", 1);

echo isset($aviso_error) ? "<div class='alert alert-danger'>" .$aviso_error. "</div>" : '';


echo form_open("mercado/autenticar");

echo form_label("Email", "email");
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "placeholder" => "Email",
    "class" => "form-control"
));

echo form_label("Senha", "senha");
echo form_password(array(
    "name" => "senha",
    "id" => "senha",
    "placeholder" => "Senha",
    "class" => "form-control"
));

echo form_button(array(
    "content" => "Logar",
    "type" => "submit",
    "class" => "btn btn-primary float-right px-4 mt-2"
));

echo anchor("usuarios/formulario_cadastro", "Novo usuário",array(
    "class" => "btn btn-info mt-2 mx-2 mb-3 float-right"
));

echo form_close();

?>

</div>