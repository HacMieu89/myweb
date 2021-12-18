if (typeof window.ethereum !== 'undefined') {
  console.log('MetaMask is installed!');
}
else{
    console.log('MetaMask not installed!');
}

const userWallet = document.getElementById('enableEthereumButton')
const showAccount = document.querySelector('.showAccount');

userWallet.addEventListener('click', () => {
    console.log('click 1')
    getAccount();
});

  async function getAccount() {
    const provider = new ethers.providers.Web3Provider(window.ethereum, "any");
    const tx = await provider.send("eth_requestAccounts", []);
    const signer = provider.getSigner();
    
    (async function () {
      let userAddress = await signer.getAddress();
      document.getElementById("wallet").innerText = userAddress;

  
        var formData = new FormData();
        var username = document.getElementById('username').value;

        console.log(username);
        console.log(userAddress);
        formData.append('username', username);
        formData.append('wallet', userAddress);
    
      $.ajax({
          url: 'storeuser.php',
          type: 'POST',
          data: formData,
          async: false,
          success: function(data) {
            window.location.href='pageshoping.php'
          },
          cache: false,
          contentType: false,
          processData: false
        });
      return false;
    })();
}

// const provider = new ethers.providers.Web3Provider(window.ethereum, "any");
// // Prompt user for account connections
// await provider.send("eth_requestAccounts", []);
// const signer = provider.getSigner();
// console.log("Account:", await signer.getAddress());