<?php
// Define uma variável chamada $mensagem contendo o texto que será usado como case para gerar um hash
// Essa mensagem representa a informação original
$mensagem = "Esta é uma informação importante";

// Hash original (pode ter sido salvo ou enviado separadamente)
$hash_original = hash("sha256", $mensagem);

// Mais tarde recompute o hash e compara
// Simula a mensagem recebida para verificação. Neste exemplo, o contéudo é idêntico ao original
$mensagem_recebida = "Esta é uma informação importante";

// Gera o hash SHA-256 da mensagem original usando a função hash()
// Esse hash é como uma "impressão digital" única da mensagem, usado para verificar integridade
// Gera novamente o hash da mensagem recebida
// Esse valor será comparado com o hash original para verificar se houve alguma alteração no conteúdo.
$hash_atual = hash("sha256", $mensagem_recebida);

// Compara os dois hashes
// Se forem iguais, o conteúdo da mensagem foi modificado
// Se forem diferentes, a mensagem foi modificada
if ($hash_original === $hash_atual){

    // Exibe essa mensagem se os hashes coincidirem, indicando que a mensagem está integra
    echo "Integridade confirmada!";
} else {
    echo "A informação foi comprometida.";
}
?>
