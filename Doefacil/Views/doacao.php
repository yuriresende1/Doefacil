<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Doação</title>
</head>
<body>
  <h1>Formulário de Doação</h1>
  <form id="donationForm">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="cpfCnpj">CPF/CNPJ:</label>
    <input type="text" id="cpfCnpj" name="cpfCnpj" required>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required>

    <input type="checkbox" id="publicDisclosure" name="publicDisclosure">
    <label for="publicDisclosure">Divulgar nome/empresa publicamente</label>

    <label for="amount">Valor da doação:</label>
    <select id="amount" name="amount">
      <option value="10">R$ 10,00</option>
      <option value="20">R$ 20,00</option>
      <option value="50">R$ 50,00</option>
      <option value="100">R$ 100,00</option>
    </select>

    <button type="submit">Doar</button>
  </form>
  <div id="qrcode"></div>
  <div id="pixKey"></div>
  <script src="../js/qrcode.js"></script>
  <script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
</script>
</body>
</html>
