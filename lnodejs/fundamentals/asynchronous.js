function esperar(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

async function main() {
  console.log("Início");
  await esperar(1000);       // espera 1s sem travar o programa
  console.log("1 segundo depois");
}

main();