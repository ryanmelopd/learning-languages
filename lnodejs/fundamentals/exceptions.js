try {
  JSON.parse("isso não é json");
} catch (erro) {
  console.log("Erro:", erro.message);
} finally {
  console.log("Sempre executa");
}