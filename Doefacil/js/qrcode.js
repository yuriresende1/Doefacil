const form = document.getElementById('donationForm');
const qrcodeContainer = document.getElementById('qrcode');
const pixKeyContainer = document.getElementById('pixKey');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const cpfCnpj = document.getElementById('cpfCnpj').value;
  const cep = document.getElementById('cep').value;
  const publicDisclosure = document.getElementById('publicDisclosure').checked;
  const amount = document.getElementById('amount').value;

  const donationData = {
    name,
    email,
    cpfCnpj,
    cep,
    publicDisclosure,
    amount
  };

  const qrCodeData = generateQRCode(donationData);
  displayQRCode(qrCodeData);
  pixKeyContainer.textContent = generatePixKey();
});

function generateQRCode(data) {
    // Cria uma string JSON com os dados da doação
    const donationDataString = JSON.stringify(data);
  
    // Cria o QR Code usando a biblioteca qrcode.js
    const qrcode = new QRCode(qrcodeContainer, {
      text: donationDataString,
      width: 128,
      height: 128
    });
  
    // Retorna a imagem em base64 do QR Code
    return qrcodeContainer.getElementsByTagName('img')[0].src;
}

function displayQRCode(qrCodeData) {
    qrcodeContainer.innerHTML = `<img src="${qrCodeData}" alt="QR Code" />`;
}
